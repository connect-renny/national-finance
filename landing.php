<?php
/**
 * Nafithah landing page — standalone splash for the employee portal.
 * Intro sequence: the scene fades in, the National Finance mark draws itself
 * in the centre of the frame and dissolves, the full logo takes its place and
 * flies to the top bar, the Nafithah logo follows to the opposite corner, then
 * the rest of the page arrives one piece at a time with the title typed out.
 */
$year = date('Y');

/* Title lines, typed out one after the other (character count drives the steps) */
$titleLines = [
    ['words' => ['حيث', 'نتواصل،'], 'accent' => false],
    ['words' => ['ونتعاون،', 'وننمو', 'معــًا'], 'accent' => true],
];
$typeDelay = 0.0;
$typePerChar = 0.13;
$typeGap = 0.3;
/* total typing time — the elements after the title wait for it (see --type-end) */
$typeEnd = -$typeGap;
foreach ($titleLines as $l) {
    $typeEnd += mb_strlen(implode(' ', $l['words']), 'UTF-8') * $typePerChar + $typeGap;
}
?>
<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <title>نافذة | الوطنية للتمويل</title>
    <meta name="description" content="نافذة — البوابة الداخلية لموظفي الوطنية للتمويل. حيث نتواصل، ونتعاون، وننمو معًا." />
    <meta name="theme-color" content="#24002b" />
    <link rel="icon" href="assets/images/favicon.png" type="image/png" />
    <link rel="preload" href="assets/fonts/Cairo-Arabic.woff2" as="font" type="font/woff2" crossorigin />
    <link rel="preload" href="assets/images/nafithah-logo.png" as="image" />
    <script>document.documentElement.classList.add('js');</script>
    <link rel="stylesheet" href="assets/css/landing.css?v=12" />
  </head>
  <body class="landing" style="--type-end:<?= number_format($typeEnd, 2) ?>s">
    <!-- Intro cover: fades away while the scene fades in and settles (scales down) -->
    <div class="intro-cover" aria-hidden="true"></div>

    <!-- Atmosphere -->
    <div class="atmos" aria-hidden="true">
      <span class="atmos__glow atmos__glow--crimson"></span>
      <span class="atmos__glow atmos__glow--indigo"></span>
      <span class="atmos__glow atmos__glow--violet"></span>
      <span class="atmos__grid"></span>
      <canvas class="atmos__sparks js-sparks"></canvas>
      <span class="atmos__spot"></span>
      <span class="atmos__grain"></span>
    </div>

    <!-- The ribbon, drawn on load, sweeping through the window frame -->
    <div class="ribbon-layer" aria-hidden="true">
      <div class="ribbon-wrap js-parallax" data-depth="18">
        <?php include __DIR__ . '/includes/landing-ribbon.php'; ?>
      </div>
    </div>

    <header class="topbar">
      <a class="topbar__brand js-flip" href="ar/index.php" aria-label="الوطنية للتمويل — البوابة" data-center-width="0.32,220,420">
        <img src="assets/images/national-finance-logo-white.png" alt="الوطنية للتمويل" width="233" height="46" />
      </a>
      <div class="topbar__app js-flip" data-center-width="0.32,230,440">
        <img src="assets/images/nafithah-logo.png" alt="نافذة" width="1200" height="297" />
        <span class="topbar__glint" aria-hidden="true"></span>
      </div>
    </header>

    <main class="stage" id="main">
      <div class="frame" aria-hidden="true">
        <i></i><i></i><i></i><i></i>
      </div>

      <div class="stage__inner">
        <h1 class="visually-hidden">نافذة — حيث نتواصل، ونتعاون، وننمو معــًا</h1>

        <p class="eyebrow"><span>البوابة الداخلية للموظفين</span></p>

        <p class="title" aria-hidden="true">
          <?php foreach ($titleLines as $line):
            $chars = mb_strlen(implode(' ', $line['words']), 'UTF-8');
            $dur = $chars * $typePerChar; ?>
            <span class="title__line<?= $line['accent'] ? ' title__line--accent' : '' ?>">
              <span class="tw" style="--n:<?= $chars ?>;--tw-dl:<?= number_format($typeDelay, 2) ?>s;--tw-dur:<?= number_format($dur, 2) ?>s">
                <span class="tw__text"><?php foreach ($line['words'] as $i => $word): ?><?= $i ? ' ' : '' ?><span class="w"><?= $word ?></span><?php endforeach; ?></span>
              </span>
            </span>
            <?php $typeDelay += $dur + $typeGap; ?>
          <?php endforeach; ?>
        </p>

        <p class="tagline" lang="en" dir="ltr">Where we connect, collaborate &amp; grow</p>

        <div class="actions">
          <a class="cta js-magnet" href="https://nfcportal.nfc.co.om/">
            <span class="cta__face">
              <span class="cta__shine" aria-hidden="true"></span>
              <span class="cta__text">
                <span class="cta__label">افتح النافذة</span>
                <span class="cta__sub" lang="en" dir="ltr">Open Nafithah</span>
              </span>
              <span class="cta__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="22" height="22"><path d="M19 12H5m6-6-6 6 6 6" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <svg viewBox="0 0 24 24" width="22" height="22"><path d="M19 12H5m6-6-6 6 6 6" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
            </span>
          </a>
        </div>
      </div>

      <!-- Intro: the logo mark draws in the centre of the frame, then dissolves -->
      <div class="intro-mark" aria-hidden="true">
        <?php include __DIR__ . '/includes/landing-mark.php'; ?>
      </div>
    </main>

    <footer class="strip">
      <p class="strip__copy">© <?= $year ?> الوطنية للتمويل</p>
    </footer>

    <script src="assets/js/landing.js?v=3" defer></script>
  </body>
</html>
