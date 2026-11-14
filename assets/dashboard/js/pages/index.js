/**
 * My Dashboard — two-week calendar strip.
 * The page ships with 11–24 Jan 2026 rendered by PHP; this takes over so the
 * arrows move a week at a time and clicking a day shows its events.
 *
 * PLACEHOLDER: EVENTS is the design's sample data until the backend exists.
 */
(() => {
  "use strict";

  const cal = document.querySelector("[data-cal]");
  if (!cal) return;

  const lang = cal.dataset.lang === "ar" ? "ar-OM-u-nu-latn" : "en-GB";
  const grid = cal.querySelector("[data-cal-grid]");
  const label = cal.querySelector("[data-cal-label]");
  const dateEl = cal.querySelector("[data-cal-date]");
  const list = cal.querySelector("[data-cal-events]");

  // Events keyed by ISO date. The 15th's markup is read from the page so the
  // titles stay translated.
  const EVENTS = { "2026-01-15": list.innerHTML };

  const iso = (d) =>
    `${d.getFullYear()}-${String(d.getMonth() + 1).padStart(2, "0")}-${String(d.getDate()).padStart(2, "0")}`;
  const parse = (s) => {
    const [y, m, d] = s.split("-").map(Number);
    return new Date(y, m - 1, d);
  };
  const addDays = (d, n) => new Date(d.getFullYear(), d.getMonth(), d.getDate() + n);

  const fmtMonth = new Intl.DateTimeFormat(lang, { month: "long", year: "numeric" });
  const fmtDay = new Intl.DateTimeFormat(lang, { day: "numeric", month: "short", year: "numeric" });
  const fmtLong = new Intl.DateTimeFormat(lang, { weekday: "long", day: "numeric", month: "long", year: "numeric" });

  let selected = parse(cal.dataset.selected);
  // The strip starts on the Sunday of the selected day's week.
  let start = addDays(selected, -selected.getDay());
  const todayIso = iso(new Date());

  const render = () => {
    grid.querySelectorAll(".cal__day").forEach((b) => b.remove());
    // The month shown is the one the strip's middle falls in.
    const mid = addDays(start, 7);
    label.textContent = fmtMonth.format(mid);

    for (let i = 0; i < 14; i++) {
      const d = addDays(start, i);
      const b = document.createElement("button");
      b.type = "button";
      b.className = "cal__day";
      b.textContent = d.getDate();
      b.dataset.date = iso(d);
      b.setAttribute("aria-label", fmtLong.format(d));
      b.setAttribute("aria-pressed", String(iso(d) === iso(selected)));
      if (d.getMonth() !== mid.getMonth()) b.classList.add("is-out");
      if (iso(d) === todayIso) b.classList.add("is-today");
      grid.append(b);
    }
  };

  const showDay = () => {
    dateEl.textContent = fmtDay.format(selected);
    const html = EVENTS[iso(selected)];
    list.innerHTML = html || `<li class="cal__empty">${cal.dataset.noEvents}</li>`;
  };

  grid.addEventListener("click", (e) => {
    const b = e.target.closest(".cal__day");
    if (!b) return;
    selected = parse(b.dataset.date);
    grid.querySelectorAll(".cal__day").forEach((x) => x.setAttribute("aria-pressed", String(x === b)));
    showDay();
  });

  cal.querySelector("[data-cal-prev]").addEventListener("click", () => {
    start = addDays(start, -7);
    render();
  });
  cal.querySelector("[data-cal-next]").addEventListener("click", () => {
    start = addDays(start, 7);
    render();
  });

  render();
})();
