<?php
/**
 * Shared <head>, skip link and site header.
 *
 * Set these before including (see any page for an example):
 *   $lang        'en' | 'ar'
 *   $page        current page slug, e.g. 'policies' (used for aria-current + language switch)
 *   $title       plain-text <title>
 *   $description plain-text meta description
 *   $bodyClass   optional body class, e.g. 'page-inner'
 *   $useSwiper   optional, true to load Swiper CSS/JS
 *   $preloads    optional array of extra <link rel="preload"> image entries: [href, media]
 */
require_once __DIR__ . '/functions.php';

$lang      = $lang ?? 'en';
$page      = $page ?? 'index';
$bodyClass = $bodyClass ?? '';
$useSwiper = $useSwiper ?? false;
$preloads  = $preloads ?? [];
$t         = load_strings($lang);
$a         = $lang === 'ar' ? '../' : '';   // path prefix to the site root (assets, favicon)
?>
<!doctype html>
<html lang="<?= e($t['html_lang']) ?>" dir="<?= e($t['dir']) ?>" class="no-js">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />

    <title><?= e($title) ?></title>
    <meta name="description" content="<?= e($description) ?>" />
    <meta name="theme-color" content="#4b0a78" />

    <link rel="icon" href="<?= $a ?>favicon.ico" sizes="any" />
    <link rel="icon" type="image/png" href="<?= $a ?>assets/images/favicon.png" />

<?php if ($lang === 'ar'): ?>
    <link rel="preload" href="<?= $a ?>assets/fonts/Cairo-Arabic.woff2" as="font" type="font/woff2" crossorigin />
<?php else: ?>
    <link rel="preload" href="<?= $a ?>assets/fonts/FoundryFormSans-Medium.woff2" as="font" type="font/woff2" crossorigin />
    <link rel="preload" href="<?= $a ?>assets/fonts/FoundryMonoline-Bold.woff2" as="font" type="font/woff2" crossorigin />
<?php endif; ?>
<?php foreach ($preloads as [$href, $media]): ?>
    <link rel="preload" href="<?= $a . e($href) ?>" as="image" media="<?= e($media) ?>" />
<?php endforeach; ?>

    <link rel="stylesheet" href="<?= $a ?>assets/css/<?= $lang === 'ar' ? 'bootstrap.rtl.min.css' : 'bootstrap.min.css' ?>" />
    <link rel="stylesheet" href="<?= $a ?>assets/css/bootstrap-icons.min.css" />
<?php if ($useSwiper): ?>
    <link rel="stylesheet" href="<?= $a ?>assets/css/swiper-bundle.min.css" />
<?php endif; ?>
    <link rel="stylesheet" href="<?= $a ?>assets/css/style.css" />
  </head>

  <body<?= $bodyClass !== '' ? ' class="' . e($bodyClass) . '"' : '' ?>>
    <a class="skip-link" href="#main"><?= e($t['skip']) ?></a>

    <div class="site-shell">
      <!-- ═══════════════════════ Header ═══════════════════════ -->
      <header class="site-header" id="siteHeader">
        <div class="site-header__bar">
          <a class="site-logo" href="index.php" aria-label="<?= e($t['nf_home']) ?>">
            <img src="<?= $a ?>assets/images/national-finance-logo.png" alt="<?= e($t['nf']) ?>" width="119" height="78" />
          </a>

          <nav class="primary-nav" aria-label="<?= e($t['nav_label']) ?>">
            <ul class="primary-nav__list">
<?php foreach ($t['nav'] as $slug => $label): ?>
              <li>
                <a class="primary-nav__link" href="<?= $slug ?>.php"<?= current_attr($slug, $page) ?>>
                  <img src="<?= $a ?>assets/images/icon-nav-<?= $slug ?>.png" alt="" width="24" height="24" /><?= e($label) . "\n" ?>
                </a>
              </li>
<?php endforeach; ?>
            </ul>
          </nav>

          <div class="header-tools">
            <a class="header-bell" href="#" aria-label="<?= e($t['notifications']) ?>">
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <defs>
                  <linearGradient id="bellGrad" x1="0" y1="0" x2="1" y2="1">
                    <stop offset="0" stop-color="#2a00b0" />
                    <stop offset="1" stop-color="#7a0a8c" />
                  </linearGradient>
                </defs>
                <path fill="url(#bellGrad)" d="M12 22a2.5 2.5 0 0 0 2.45-2h-4.9A2.5 2.5 0 0 0 12 22Zm7.3-5.7-1.3-1.6V10a6 6 0 0 0-4.5-5.8V3.5a1.5 1.5 0 0 0-3 0v.7A6 6 0 0 0 6 10v4.7l-1.3 1.6A1 1 0 0 0 5.5 18h13a1 1 0 0 0 .8-1.7Z" />
              </svg>
              <span class="header-bell__dot"></span>
            </a>

            <div class="dropdown header-user">
              <button class="header-user__toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="<?= e($t['account']) ?>">
                <img src="<?= $a ?>assets/images/user-avatar.jpg" alt="" width="44" height="44" />
                <span class="header-user__name"><?= $t['welcome_html'] ?></span>
                <i class="bi bi-chevron-down" aria-hidden="true"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#"><i class="bi bi-person" aria-hidden="true"></i><?= e($t['profile']) ?></a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-gear" aria-hidden="true"></i><?= e($t['settings']) ?></a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right" aria-hidden="true"></i><?= e($t['sign_out']) ?></a></li>
              </ul>
            </div>

            <a class="header-lang" href="<?= e(lang_switch_href($t, $page)) ?>" lang="<?= $t['switch_lang'] ?>" hreflang="<?= $t['switch_lang'] ?>"><span><?= e($t['switch_label']) ?></span></a>

            <button class="nav-toggle" type="button" aria-controls="mobileDrawer" aria-expanded="false" aria-label="<?= e($t['open_menu']) ?>">
              <span></span><span></span><span></span>
            </button>
          </div>

          <a class="al-mabraz" href="index.php" aria-label="<?= e($t['mabraz_home']) ?>">
            <img src="<?= $a ?>assets/images/al-mabraz-logo.png" alt="<?= e($t['mabraz']) ?>" width="150" height="65" />
          </a>
        </div>
      </header>

