/**
 * Staff dashboard — shared behaviour (every dashboard page).
 * Page-specific code lives in js/pages/<page>.js.
 */
(() => {
  "use strict";

  document.documentElement.classList.replace("no-js", "js");

  // ─── Off-canvas sidebar (below 992px) ────────────────────────────────────
  const burger = document.querySelector(".dash-burger");
  const sidebar = document.getElementById("dashSidebar");
  const scrim = document.querySelector(".dash-scrim");
  if (!burger || !sidebar || !scrim) return;

  const setOpen = (open) => {
    sidebar.classList.toggle("is-open", open);
    scrim.hidden = !open;
    burger.setAttribute("aria-expanded", String(open));
    burger.setAttribute("aria-label", burger.dataset[open ? "labelClose" : "labelOpen"]);
    document.body.style.overflow = open ? "hidden" : "";
    if (open) sidebar.querySelector("a")?.focus();
  };

  burger.addEventListener("click", () => setOpen(!sidebar.classList.contains("is-open")));
  scrim.addEventListener("click", () => setOpen(false));

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && sidebar.classList.contains("is-open")) {
      setOpen(false);
      burger.focus();
    }
  });

  // Leaving the mobile layout closes it so nothing stays locked.
  window.matchMedia("(min-width: 992px)").addEventListener("change", (e) => {
    if (e.matches) setOpen(false);
  });
})();
