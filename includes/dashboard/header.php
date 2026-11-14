<?php require __DIR__ . '/init.php'; ?>
<!doctype html>
<html lang="<?= e($d['html_lang']) ?>" dir="<?= e($d['dir']) ?>" class="no-js">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />

    <title><?= e($title) ?></title>
    <meta name="robots" content="noindex" />
    <meta name="theme-color" content="#4b0a78" />

    <link rel="icon" href="<?= $root ?>favicon.ico" sizes="any" />
    <link rel="icon" type="image/png" href="<?= $root ?>assets/images/favicon.png" />

<?php if ($lang === 'ar'): ?>
    <link rel="preload" href="<?= $root ?>assets/fonts/Cairo-Arabic.woff2" as="font" type="font/woff2" crossorigin />
<?php else: ?>
    <link rel="preload" href="<?= $root ?>assets/fonts/FoundryFormSans-Medium.woff2" as="font" type="font/woff2" crossorigin />
<?php endif; ?>

    <link rel="stylesheet" href="<?= $root ?>assets/css/<?= $lang === 'ar' ? 'bootstrap.rtl.min.css' : 'bootstrap.min.css' ?>" />
    <link rel="stylesheet" href="<?= $root ?>assets/dashboard/css/dashboard.css" />
<?php if ($pageCss): ?>
    <link rel="stylesheet" href="<?= $root ?>assets/dashboard/css/pages/<?= e($page) ?>.css" />
<?php endif; ?>
  </head>

  <body class="dash dash--<?= e($page) ?>">
    <a class="skip-link" href="#main"><?= e($d['skip']) ?></a>

    <!-- Brand gradient for .icon--grad (same magenta → purple as the home page app icons). -->
    <svg class="dash-defs" aria-hidden="true" focusable="false">
      <defs>
        <linearGradient id="iconGrad" gradientUnits="userSpaceOnUse" x1="2" y1="4" x2="22" y2="20">
          <stop offset="0" stop-color="#d60a84" />
          <stop offset="1" stop-color="#55127f" />
        </linearGradient>
      </defs>
    </svg>

    <div class="dash-app">
      <!-- ═══════════════════════ Header ═══════════════════════ -->
      <header class="dash-header">
        <div class="dash-header__bar">
          <button class="dash-burger" type="button" aria-controls="dashSidebar" aria-expanded="false" aria-label="<?= e($d['open_menu']) ?>" data-label-open="<?= e($d['open_menu']) ?>" data-label-close="<?= e($d['close_menu']) ?>">
            <span></span><span></span><span></span>
          </button>

          <a class="dash-brand" href="<?= $site ?>index.php" aria-label="<?= e($d['nf_home']) ?>">
            <img src="<?= $root ?>assets/images/national-finance-logo.png" alt="" width="119" height="78" />
            <span class="dash-brand__title"><?= e($d['intranet']) ?></span>
          </a>

          <div class="dash-tools">
            <a class="dash-tool dash-tool--support" href="#" aria-label="<?= e($d['support']) ?>" title="<?= e($d['support']) ?>"><?= icon('headset', 'icon--grad') ?></a>
            <a class="dash-tool" href="#" aria-label="<?= e($d['notifications']) ?>"><?= icon('bell', 'icon--grad') ?><span class="dash-tool__dot"></span></a>
            <a class="dash-tool" href="#" aria-label="<?= e($d['help']) ?>" title="<?= e($d['help']) ?>"><?= icon('circle-help', 'icon--grad') ?></a>
            <a class="dash-lang" href="<?= e($d['switch_href'] . $page) ?>.php" lang="<?= e($d['switch_lang']) ?>" hreflang="<?= e($d['switch_lang']) ?>"><?= e($d['switch_label']) ?></a>

            <div class="dropdown dash-user">
              <button class="dash-user__toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="<?= e($d['account']) ?>">
                <img src="<?= $root ?>assets/dashboard/images/profile-photo.jpg" alt="" width="36" height="36" />
                <span class="dash-user__name"><?= e($d['user']['name']) ?></span>
                <?= icon('chevron-down', 'dash-user__chev') ?>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="index.php"><?= icon('layout-dashboard', 'icon--grad') ?><?= e($d['dash_title']) ?></a></li>
                <li><a class="dropdown-item" href="edit-profile.php"><?= icon('user', 'icon--grad') ?><?= e($d['edit_profile']) ?></a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#"><?= icon('log-out', 'icon--grad dash-flip') ?><?= e($d['sign_out']) ?></a></li>
              </ul>
            </div>
          </div>
        </div>
      </header>

      <div class="dash-body">
        <!-- ═══════════════════════ Sidebar ═══════════════════════ -->
        <aside class="dash-sidebar" id="dashSidebar">
          <nav class="dash-sidebar__nav" aria-label="<?= e($d['nav_label']) ?>">
            <ul class="dash-nav">
<?php
$navIcons = ['site:index' => 'house', 'index' => 'layout-dashboard', 'site:policies' => 'file-text', 'site:tahadath' => 'message-circle'];
foreach ($d['nav'] as $slug => $label):
?>
              <li>
                <a class="dash-nav__link" href="<?= e(dash_href($slug)) ?>"<?= current_attr($slug, $page === 'edit-profile' ? 'index' : $page) ?>><?= icon($navIcons[$slug] ?? 'link') ?><span><?= e($label) ?></span></a>
              </li>
<?php endforeach; ?>
            </ul>
          </nav>

        </aside>
        <div class="dash-scrim" data-dash-close hidden></div>

        <main class="dash-main" id="main" tabindex="-1">
