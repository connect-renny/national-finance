/* Nafithah landing — start the timeline, logo flights, sparks, cursor light, parallax, magnetic buttons. */
(() => {
  const root = document.documentElement;
  const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const finePointer = window.matchMedia('(pointer: fine)').matches;

  /* ---- Logo flights: each .js-flip starts big in the centre of the frame
     (where the intro mark is drawn) and flies to where the layout puts it.
     data-center-width="vwFraction,minPx,maxPx" sets its width at the centre. ---- */
  const measureFlights = () => {
    const anchor = document.querySelector('.intro-mark');
    if (!anchor) return;
    const a = anchor.getBoundingClientRect();
    if (!a.width) return; // hidden (no motion) — logos simply sit in place
    const cx = a.left + a.width / 2;
    const cy = a.top + a.height / 2;
    const vw = window.innerWidth;
    document.querySelectorAll('.js-flip').forEach((el) => {
      const r = el.getBoundingClientRect();
      if (!r.width) return;
      const [f, min, max] = (el.dataset.centerWidth || '0.3,200,400').split(',').map(Number);
      const width = Math.min(max, Math.max(min, vw * f), vw - 32);
      el.style.setProperty('--fx', `${(cx - (r.left + r.width / 2)).toFixed(1)}px`);
      el.style.setProperty('--fy', `${(cy - (r.top + r.height / 2)).toFixed(1)}px`);
      el.style.setProperty('--fs', (width / r.width).toFixed(3));
    });
  };

  /* ---- Start the choreography once fonts are in (with a safety timeout) ---- */
  let started = false;
  const go = () => {
    if (started) return;
    started = true;
    measureFlights();
    requestAnimationFrame(() => root.classList.add('go'));
  };
  if (document.fonts && document.fonts.ready) {
    document.fonts.ready.then(go);
  }
  window.addEventListener('load', go);
  setTimeout(go, 1500);

  if (reduce) return;

  /* ---- Cursor light + parallax ---- */
  const parallax = [...document.querySelectorAll('.js-parallax')];
  let px = 0.5;
  let py = 0.4;
  let queued = false;

  const paint = () => {
    queued = false;
    root.style.setProperty('--mx', `${(px * 100).toFixed(2)}%`);
    root.style.setProperty('--my', `${(py * 100).toFixed(2)}%`);
    parallax.forEach((el) => {
      const depth = Number(el.dataset.depth) || 10;
      el.style.setProperty('--px', `${((px - 0.5) * -depth).toFixed(2)}px`);
      el.style.setProperty('--py', `${((py - 0.5) * -depth).toFixed(2)}px`);
    });
  };

  if (finePointer) {
    window.addEventListener(
      'pointermove',
      (e) => {
        px = e.clientX / window.innerWidth;
        py = e.clientY / window.innerHeight;
        if (!queued) {
          queued = true;
          requestAnimationFrame(paint);
        }
      },
      { passive: true }
    );

    /* ---- Magnetic buttons ---- */
    document.querySelectorAll('.js-magnet').forEach((btn) => {
      btn.addEventListener('pointermove', (e) => {
        const r = btn.getBoundingClientRect();
        const x = (e.clientX - r.left - r.width / 2) * 0.22;
        const y = (e.clientY - r.top - r.height / 2) * 0.35;
        btn.style.setProperty('--tx', `${x.toFixed(1)}px`);
        btn.style.setProperty('--ty', `${y.toFixed(1)}px`);
      });
      btn.addEventListener('pointerleave', () => {
        btn.style.setProperty('--tx', '0px');
        btn.style.setProperty('--ty', '0px');
      });
    });
  }

  /* ---- Sparks: slow-rising motes in the brand colours ---- */
  const canvas = document.querySelector('.js-sparks');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');
  const colours = ['255,255,255', '255,45,111', '170,120,255', '120,130,255'];
  let w = 0;
  let h = 0;
  let dpr = 1;
  let motes = [];
  let raf = 0;

  const spawn = (anywhere) => ({
    x: Math.random() * w,
    y: anywhere ? Math.random() * h : h + 10,
    r: Math.random() * 1.6 + 0.4,
    vy: Math.random() * 0.35 + 0.08,
    vx: (Math.random() - 0.5) * 0.15,
    tw: Math.random() * Math.PI * 2,
    c: colours[(Math.random() * colours.length) | 0],
  });

  const resize = () => {
    dpr = Math.min(window.devicePixelRatio || 1, 2);
    w = canvas.clientWidth;
    h = canvas.clientHeight;
    canvas.width = w * dpr;
    canvas.height = h * dpr;
    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
    const count = Math.round(Math.min(90, (w * h) / 16000));
    motes = Array.from({ length: count }, () => spawn(true));
  };

  const tick = () => {
    ctx.clearRect(0, 0, w, h);
    for (const m of motes) {
      m.y -= m.vy;
      m.x += m.vx + (px - 0.5) * 0.1;
      m.tw += 0.03;
      if (m.y < -10) Object.assign(m, spawn(false));
      const a = 0.25 + Math.sin(m.tw) * 0.25 + 0.25;
      ctx.beginPath();
      ctx.fillStyle = `rgba(${m.c},${a.toFixed(3)})`;
      ctx.shadowColor = `rgba(${m.c},0.9)`;
      ctx.shadowBlur = 8;
      ctx.arc(m.x, m.y, m.r, 0, Math.PI * 2);
      ctx.fill();
    }
    raf = requestAnimationFrame(tick);
  };

  resize();
  tick();
  window.addEventListener('resize', resize);
  document.addEventListener('visibilitychange', () => {
    cancelAnimationFrame(raf);
    if (!document.hidden) tick();
  });
})();
