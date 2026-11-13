/* ═══════════════════════════════════════════════════════════════════════════
   National Finance — Al Mabraz intranet
   Every module checks for its own markup and bails out silently, so this one
   file can be loaded on every page.
   ═══════════════════════════════════════════════════════════════════════════ */
(() => {
  "use strict";

  const root = document.documentElement;
  root.classList.remove("no-js");

  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  /* ─── UI strings set from script (the Arabic pages live in ar/) ───────── */
  const isAr = root.lang === "ar";
  const T = isAr
    ? {
        openMenu: "فتح القائمة",
        closeMenu: "إغلاق القائمة",
        readMore: "اقرأ المزيد",
        readLess: "عرض أقل",
        ext: "داخلي",
        page: (p, n) => `الصفحة ${p} من ${n}`,
        thanks: "شكراً لك. تم تسجيل طلبك بشكل آمن. الرقم المرجعي:",
      }
    : {
        openMenu: "Open menu",
        closeMenu: "Close menu",
        readMore: "Read more",
        readLess: "Read less",
        ext: "Ext",
        page: (p, n) => `Page ${p} of ${n}`,
        thanks: "Thank you. Your submission has been logged securely. Reference:",
      };
  const App = (window.App = { lenis: null, sliders: {} });

  /* ─── Smooth scroll ──────────────────────────────────────────────────── */
  if (window.Lenis && !reduceMotion) {
    App.lenis = new window.Lenis({ autoRaf: true, anchors: true });
  }

  /* ─── Scroll lock (used by the drawer) ───────────────────────────────── */
  const lockScroll = (lock) => {
    if (lock) {
      root.style.setProperty("--scrollbar-width", `${window.innerWidth - root.clientWidth}px`);
    }
    document.body.classList.toggle("is-locked", lock);
    if (App.lenis) lock ? App.lenis.stop() : App.lenis.start();
  };

  /* ─── Sticky header state ────────────────────────────────────────────── */
  const header = document.getElementById("siteHeader");
  if (header) {
    let ticking = false;
    const update = () => {
      header.classList.toggle("is-stuck", window.scrollY > 40);
      ticking = false;
    };
    window.addEventListener(
      "scroll",
      () => {
        if (!ticking) {
          ticking = true;
          requestAnimationFrame(update);
        }
      },
      { passive: true }
    );
    update();
  }

  /* ─── Mobile drawer ──────────────────────────────────────────────────── */
  const drawer = document.getElementById("mobileDrawer");
  const toggles = document.querySelectorAll('[aria-controls="mobileDrawer"]');
  if (drawer && toggles.length) {
    const panel = drawer.querySelector(".drawer__panel");
    let lastFocus = null;

    const focusables = () =>
      [...panel.querySelectorAll('a[href], button:not([disabled]), [tabindex]:not([tabindex="-1"])')].filter(
        (el) => el.offsetParent !== null
      );

    const setOpen = (open) => {
      if (open === drawer.classList.contains("is-open")) return;
      drawer.classList.toggle("is-open", open);
      drawer.inert = !open;
      drawer.setAttribute("aria-hidden", String(!open));
      toggles.forEach((t) => {
        t.setAttribute("aria-expanded", String(open));
        t.setAttribute("aria-label", open ? T.closeMenu : T.openMenu);
      });
      lockScroll(open);

      if (open) {
        lastFocus = document.activeElement;
        // Wait for the slide-in so focus doesn't yank the panel mid-flight.
        setTimeout(() => panel.querySelector(".drawer__close")?.focus({ preventScroll: true }), 350);
      } else if (lastFocus) {
        lastFocus.focus({ preventScroll: true });
      }
    };

    toggles.forEach((t) => t.addEventListener("click", () => setOpen(!drawer.classList.contains("is-open"))));
    drawer.querySelectorAll("[data-drawer-close]").forEach((el) => el.addEventListener("click", () => setOpen(false)));
    panel.querySelectorAll(".drawer__nav a").forEach((a) => a.addEventListener("click", () => setOpen(false)));

    document.addEventListener("keydown", (e) => {
      if (!drawer.classList.contains("is-open")) return;
      if (e.key === "Escape") {
        setOpen(false);
        return;
      }
      if (e.key === "Tab") {
        const items = focusables();
        if (!items.length) return;
        const first = items[0];
        const last = items[items.length - 1];
        if (e.shiftKey && document.activeElement === first) {
          e.preventDefault();
          last.focus();
        } else if (!e.shiftKey && document.activeElement === last) {
          e.preventDefault();
          first.focus();
        }
      }
    });

    // The drawer doesn't exist at desktop widths — close it if we get there.
    window.matchMedia("(min-width: 1200px)").addEventListener("change", (e) => e.matches && setOpen(false));
  }

  /* ─── Sliders ────────────────────────────────────────────────────────── */
  if (window.Swiper) {
    const heroEl = document.querySelector(".js-hero-swiper");
    if (heroEl) {
      App.sliders.hero = new window.Swiper(heroEl, {
        effect: "fade",
        fadeEffect: { crossFade: true },
        speed: 1000,
        // rewind, not loop: with only two slides Swiper's loop mode has too
        // few slides to clone. With the fade effect it looks identical.
        rewind: true,
        autoplay: reduceMotion ? false : { delay: 6000, disableOnInteraction: false, pauseOnMouseEnter: true },
        pagination: { el: heroEl.querySelector(".swiper-pagination"), clickable: true },
        a11y: { enabled: true },
      });
    }

    const newsEl = document.querySelector(".js-news-swiper");
    if (newsEl) {
      App.sliders.news = new window.Swiper(newsEl, {
        speed: 800,
        loop: true,
        spaceBetween: 24,
        grabCursor: true,
        autoHeight: false,
        autoplay: reduceMotion ? false : { delay: 7000, disableOnInteraction: false, pauseOnMouseEnter: true },
        pagination: { el: newsEl.parentElement.querySelector(".news-pagination"), clickable: true },
      });
    }
  }

  /* ─── App cards: gradient grows from the pointer's entry / exit point ── */
  document.querySelectorAll(".app-card").forEach((card) => {
    const setOrigin = (e) => {
      const r = card.getBoundingClientRect();
      card.style.setProperty("--x", `${((e.clientX - r.left) / r.width) * 100}%`);
      card.style.setProperty("--y", `${((e.clientY - r.top) / r.height) * 100}%`);
    };
    card.addEventListener("pointerenter", setOrigin);
    card.addEventListener("pointerleave", setOrigin);
  });

  /* ─── "Read more" toggles (CEO message) ──────────────────────────────── */
  document.querySelectorAll(".read-more[aria-controls]").forEach((btn) => {
    const target = document.getElementById(btn.getAttribute("aria-controls"));
    const label = btn.querySelector("span");
    if (!target) return;
    btn.addEventListener("click", () => {
      const open = btn.getAttribute("aria-expanded") !== "true";
      btn.setAttribute("aria-expanded", String(open));
      target.classList.toggle("is-open", open);
      if (label) label.textContent = open ? btn.dataset.labelOpen || T.readLess : btn.dataset.labelClosed || T.readMore;
      // Lenis caches the page height; let it re-measure once the panel settles.
      if (App.lenis) setTimeout(() => App.lenis.resize(), 550);
    });
  });

  /* ─── Employee directory ─────────────────────────────────────────────── */
  const directory = document.querySelector(".directory");
  if (directory) {
    const buttons = [...directory.querySelectorAll(".employee-list__btn")];
    const card = document.getElementById("employeeDetails");
    const field = (name) => card.querySelector(`[data-field="${name}"]`);
    const empty = directory.querySelector(".directory__empty");
    const search = document.getElementById("searchEmployee");
    const selects = [...directory.querySelectorAll("select[data-filter]")];
    const isStacked = window.matchMedia("(max-width: 991.98px)");
    let swapTimer;

    const initials = (name) =>
      name
        .split(/[\s-]+/)
        .filter((w) => w && w.toLowerCase() !== "al")
        .slice(0, 2)
        // Arabic surnames carry the article: البوسعيدي -> ب
        .map((w) => w.replace(/^ال(?=..)/, "")[0].toUpperCase())
        .join(isAr ? " " : "");

    const render = (btn) => {
      const d = btn.dataset;
      field("name").textContent = d.name;
      field("designation").textContent = d.designation;
      field("department").textContent = d.department;
      field("branch").textContent = d.branch;
      const link = document.createElement("a");
      link.href = `tel:${d.ext}`;
      link.textContent = `${T.ext} ${d.ext}`;
      field("ext").replaceChildren(link);

      const photo = field("photo");
      if (d.photo) {
        const img = new Image(280, 280);
        img.src = d.photo;
        img.alt = d.name;
        photo.replaceChildren(img);
      } else {
        const tile = document.createElement("span");
        tile.className = "details-card__initials";
        tile.setAttribute("aria-hidden", "true");
        tile.textContent = initials(d.name);
        photo.replaceChildren(tile);
      }
    };

    const select = (btn, { scroll = false } = {}) => {
      if (btn.getAttribute("aria-current") === "true") return;
      buttons.forEach((b) => b.removeAttribute("aria-current"));
      btn.setAttribute("aria-current", "true");

      clearTimeout(swapTimer);
      if (reduceMotion) {
        render(btn);
      } else {
        card.classList.add("is-switching");
        swapTimer = setTimeout(() => {
          render(btn);
          card.classList.remove("is-switching");
        }, 220);
      }

      // Stacked layout: the card is below the list, so bring it into view.
      if (scroll && isStacked.matches) {
        const top = card.getBoundingClientRect().top + window.scrollY - 120;
        App.lenis ? App.lenis.scrollTo(top) : window.scrollTo({ top, behavior: reduceMotion ? "auto" : "smooth" });
      }
    };

    buttons.forEach((btn, i) => {
      btn.addEventListener("click", () => select(btn, { scroll: true }));
      // Up / Down arrows move through the visible names.
      btn.addEventListener("keydown", (e) => {
        if (e.key !== "ArrowDown" && e.key !== "ArrowUp") return;
        e.preventDefault();
        const visible = buttons.filter((b) => !b.parentElement.hidden);
        const next = visible[visible.indexOf(btn) + (e.key === "ArrowDown" ? 1 : -1)];
        if (next) {
          next.focus();
          select(next);
        }
      });
    });

    const applyFilters = () => {
      const q = search.value.trim().toLowerCase();
      const want = Object.fromEntries(selects.map((s) => [s.dataset.filter, s.value]));
      let firstMatch = null;
      let currentVisible = false;

      buttons.forEach((btn) => {
        const d = btn.dataset;
        const show =
          (!q || d.name.toLowerCase().includes(q)) &&
          (!want.department || d.department === want.department) &&
          (!want.branch || d.branch === want.branch);
        btn.parentElement.hidden = !show;
        if (show && !firstMatch) firstMatch = btn;
        if (show && btn.getAttribute("aria-current") === "true") currentVisible = true;
      });

      empty.hidden = Boolean(firstMatch);
      // Keep the details card in step with what's listed.
      if (firstMatch && !currentVisible) select(firstMatch);
    };

    search.addEventListener("input", applyFilters);
    selects.forEach((s) => s.addEventListener("change", applyFilters));
  }

  /* ─── Policy library: accordion + search ─────────────────────────────── */
  const library = document.querySelector(".policy-scroll");
  if (library) {
    const items = [...library.querySelectorAll(".policy-item")];
    const buttons = items.map((it) => it.querySelector(".policy-item__btn"));
    const empty = library.querySelector(".policy-empty");
    const search = document.getElementById("policySearch");

    const setOpen = (btn, open) => {
      const panel = document.getElementById(btn.getAttribute("aria-controls"));
      btn.setAttribute("aria-expanded", String(open));
      panel.classList.toggle("is-open", open);
      panel.inert = !open;
    };

    // One open at a time, like the design.
    buttons.forEach((btn) =>
      btn.addEventListener("click", () => {
        const open = btn.getAttribute("aria-expanded") !== "true";
        buttons.forEach((b) => b !== btn && b.getAttribute("aria-expanded") === "true" && setOpen(b, false));
        setOpen(btn, open);
        if (App.lenis) setTimeout(() => App.lenis.resize(), 500);
      })
    );

    search?.addEventListener("input", () => {
      const words = search.value.trim().toLowerCase().split(/\s+/).filter(Boolean);
      let shown = 0;
      items.forEach((it) => {
        const hay = it.dataset.search || "";
        const match = words.every((w) => hay.includes(w));
        it.hidden = !match;
        if (match) shown++;
      });
      empty.hidden = shown > 0;
      library.scrollTop = 0;
    });
  }

  /* ─── News archive: stagger-in + prev / next pages ───────────────────── */
  const newsGrid = document.getElementById("newsGrid");
  if (newsGrid) {
    const tiles = [...newsGrid.querySelectorAll(".news-tile")];
    const pages = Math.max(...tiles.map((t) => Number(t.dataset.page) || 1));
    const prev = document.querySelector('[data-pager="prev"]');
    const next = document.querySelector('[data-pager="next"]');
    const status = document.querySelector("[data-pager-status]");
    let current = 1;
    let busy = false;

    const show = (page) => {
      tiles.forEach((t) => (t.hidden = Number(t.dataset.page) !== page));
      prev.disabled = page <= 1;
      next.disabled = page >= pages;
      status.textContent = T.page(page, pages);
      // Restart the stagger-in animation.
      newsGrid.classList.remove("is-ready");
      void newsGrid.offsetWidth;
      newsGrid.classList.add("is-ready");
      App.lenis?.resize();
    };

    const go = (page) => {
      if (busy || page < 1 || page > pages || page === current) return;
      current = page;
      const top = newsGrid.closest("section").getBoundingClientRect().top + window.scrollY - 110;
      const scroll = () =>
        App.lenis ? App.lenis.scrollTo(top) : window.scrollTo({ top, behavior: reduceMotion ? "auto" : "smooth" });

      if (reduceMotion) {
        show(page);
        scroll();
        return;
      }
      busy = true;
      newsGrid.classList.remove("is-ready");
      newsGrid.classList.add("is-leaving");
      setTimeout(() => {
        newsGrid.classList.remove("is-leaving");
        show(page);
        scroll();
        busy = false;
      }, 420);
    };

    prev.addEventListener("click", () => go(current - 1));
    next.addEventListener("click", () => go(current + 1));
    if (pages <= 1) next.disabled = true;

    // First stagger-in when the grid scrolls into view.
    if (reduceMotion || !("IntersectionObserver" in window)) {
      newsGrid.classList.add("is-ready");
    } else {
      newsGrid.classList.add("is-waiting");
      const io = new IntersectionObserver(
        ([entry]) => {
          if (!entry.isIntersecting) return;
          newsGrid.classList.remove("is-waiting");
          newsGrid.classList.add("is-ready");
          io.disconnect();
        },
        { threshold: 0.1 }
      );
      io.observe(newsGrid);
    }
  }

  /* ─── Tahadath: CEO line form ────────────────────────────────────────── */
  const ceoForm = document.getElementById("ceoForm");
  if (ceoForm) {
    const status = ceoForm.querySelector(".ceo-form__status");
    const submit = ceoForm.querySelector('[type="submit"]');
    const required = [
      [ceoForm.elements.category, document.getElementById("tCategoryError")],
      [ceoForm.elements.message, document.getElementById("tMessageError")],
    ];

    const check = (field, error) => {
      const ok = field.value.trim() !== "";
      field.setAttribute("aria-invalid", String(!ok));
      if (ok) field.removeAttribute("aria-describedby");
      else field.setAttribute("aria-describedby", error.id);
      error.hidden = ok;
      return ok;
    };

    required.forEach(([field, error]) =>
      field.addEventListener(field.tagName === "SELECT" ? "change" : "input", () => {
        if (field.getAttribute("aria-invalid") === "true") check(field, error);
      })
    );

    ceoForm.addEventListener("submit", (e) => {
      e.preventDefault();
      const results = required.map(([f, err]) => check(f, err));
      if (results.includes(false)) {
        required[results.indexOf(false)][0].focus();
        return;
      }
      // Front-end only: the back end will log the item and return the
      // reference. A placeholder reference shows the confirmation state.
      submit.classList.add("is-sending");
      setTimeout(() => {
        const ref = `TH-${new Date().getFullYear()}-${String(Math.floor(Math.random() * 9000) + 1000)}`;
        status.innerHTML = `<i class="bi bi-shield-check" aria-hidden="true"></i><span>${T.thanks} <strong dir="ltr">${ref}</strong></span>`;
        ceoForm.reset(); // while still .is-sending, so the reset handler keeps the status
        status.hidden = false;
        submit.classList.remove("is-sending");
      }, 600);
    });

    ceoForm.addEventListener("reset", () => {
      required.forEach(([f, err]) => {
        f.removeAttribute("aria-invalid");
        f.removeAttribute("aria-describedby");
        err.hidden = true;
      });
      if (!submit.classList.contains("is-sending")) status.hidden = true;
    });
  }

  /* ─── Tahadath: review path walk-through ─────────────────────────────── */
  const reviewSteps = document.getElementById("reviewSteps");
  if (reviewSteps && !reduceMotion && "IntersectionObserver" in window) {
    const steps = [...reviewSteps.querySelectorAll(".review-step")];
    let current = -1;
    let timer;
    let paused = false;

    const setActive = (index) => {
      current = index;
      steps.forEach((s, i) => {
        s.classList.toggle("is-active", i === index);
        s.classList.toggle("is-done", i < index);
        s.classList.toggle("is-flowing", i === index - 1);
      });
    };

    const tick = () => {
      if (!paused) setActive((current + 1) % steps.length);
      timer = setTimeout(tick, 2600);
    };

    // Start with nothing active so the walk begins at step 1.
    steps.forEach((s) => s.classList.remove("is-active"));
    reviewSteps.classList.add("is-waiting");

    const io = new IntersectionObserver(
      ([entry]) => {
        if (!entry.isIntersecting) return;
        io.disconnect();
        reviewSteps.classList.replace("is-waiting", "is-entering");
        const entranceMs = (steps.length - 1) * 180 + 1100;
        setTimeout(() => {
          reviewSteps.classList.remove("is-entering");
          tick();
        }, entranceMs);
      },
      { threshold: 0.3 }
    );
    io.observe(reviewSteps);

    // Hover a step to stop on it; leave to carry on from there.
    steps.forEach((s, i) =>
      s.addEventListener("mouseenter", () => {
        if (reviewSteps.classList.contains("is-waiting")) return;
        paused = true;
        setActive(i);
      })
    );
    reviewSteps.addEventListener("mouseleave", () => (paused = false));

    // Don't animate in a background tab.
    document.addEventListener("visibilitychange", () => {
      clearTimeout(timer);
      if (!document.hidden && current > -1) timer = setTimeout(tick, 2600);
    });
  }

  /* ─── Reveal on scroll ───────────────────────────────────────────────── */
  const reveals = document.querySelectorAll("[data-reveal]");
  if (reveals.length) {
    if (!("IntersectionObserver" in window) || reduceMotion) {
      reveals.forEach((el) => el.classList.add("is-revealed"));
    } else {
      const io = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add("is-revealed");
              io.unobserve(entry.target);
            }
          });
        },
        { threshold: 0.15, rootMargin: "0px 0px -40px 0px" }
      );
      reveals.forEach((el) => io.observe(el));
    }
  }

  /* ─── Current year ───────────────────────────────────────────────────── */
  document.querySelectorAll(".year").forEach((el) => (el.textContent = new Date().getFullYear()));

  document.dispatchEvent(new CustomEvent("app:ready", { detail: App }));
})();
