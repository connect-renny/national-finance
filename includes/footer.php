<?php
/**
 * Shared footer, mobile drawer and scripts. Expects the variables set up by header.php.
 */
?>
    </div>

    <!-- ═══════════════════════ Footer ═══════════════════════ -->
    <footer class="site-footer">
      <div class="shell-container site-footer__inner">
        <p class="site-footer__copy"><?= e($t['copy']) ?><span class="year"><?= date('Y') ?></span></p>
        <p class="site-footer__tagline"><?= e($t['tagline']) ?></p>
      </div>
    </footer>

    <!-- ═══════════════════════ Mobile drawer ═══════════════════════ -->
    <div class="drawer" id="mobileDrawer" aria-hidden="true" inert>
      <div class="drawer__backdrop" data-drawer-close></div>
      <aside class="drawer__panel" role="dialog" aria-modal="true" aria-label="<?= e($t['menu']) ?>" data-lenis-prevent>
        <div class="drawer__head" data-drawer-item style="--i: 0">
          <img src="<?= $a ?>assets/images/national-finance-logo-white.png" alt="<?= e($t['nf']) ?>" width="233" height="46" />
          <button class="drawer__close" type="button" data-drawer-close aria-label="<?= e($t['close_menu']) ?>">
            <i class="bi bi-x-lg" aria-hidden="true"></i>
          </button>
        </div>

        <div class="drawer__user" data-drawer-item style="--i: 1">
          <img src="<?= $a ?>assets/images/user-avatar.jpg" alt="" width="48" height="48" />
          <div>
            <small><?= e($t['welcome']) ?></small>
            <a href="#"><?= e($t['user_name']) ?></a>
          </div>
          <a class="drawer__bell" href="#" aria-label="<?= e($t['notifications']) ?>"><i class="bi bi-bell-fill" aria-hidden="true"></i><span></span></a>
        </div>

        <p class="drawer__label" data-drawer-item style="--i: 2"><?= e($t['menu']) ?></p>
        <ul class="drawer__nav">
<?php $i = 3; foreach ($t['nav'] as $slug => $label): ?>
          <li data-drawer-item style="--i: <?= $i++ ?>">
            <a href="<?= $slug ?>.php"<?= current_attr($slug, $page) ?>><span class="drawer__icon"><img src="<?= $a ?>assets/images/icon-nav-<?= $slug ?>.png" alt="" width="24" height="24" /></span><?= e($label) ?><i class="bi bi-arrow-right" aria-hidden="true"></i></a>
          </li>
<?php endforeach; ?>
        </ul>

        <p class="drawer__label" data-drawer-item style="--i: 7"><?= e($t['quick_access']) ?></p>
        <div class="drawer__apps" data-drawer-item style="--i: 8">
<?php foreach ($t['apps'] as $slug => $label): ?>
<?php if ($slug === 'task-organizer'): ?>
          <a class="drawer__app--feature" href="dashboard/index.php"><span><svg class="icon" aria-hidden="true" focusable="false"><use href="<?= $a ?>assets/images/icons.svg#calendar-check" /></svg></span><?= e($label) ?></a>
<?php else: ?>
          <a href="#"><span><img src="<?= $a ?>assets/images/icon-app-<?= $slug ?>.png" alt="" width="36" height="36" /></span><?= e($label) ?></a>
<?php endif; ?>
<?php endforeach; ?>
        </div>

        <div class="drawer__foot" data-drawer-item style="--i: 9">
          <a class="drawer__lang" href="<?= e(lang_switch_href($t, $page)) ?>" lang="<?= $t['switch_lang'] ?>" hreflang="<?= $t['switch_lang'] ?>"><?= e($t['switch_label']) ?></a>
          <a class="drawer__mabraz" href="index.php" aria-label="<?= e($t['mabraz_home']) ?>">
            <img src="<?= $a ?>assets/images/al-mabraz-logo.png" alt="<?= e($t['mabraz']) ?>" width="150" height="65" />
          </a>
        </div>
      </aside>
    </div>

    <!-- ═══════════════════════ Back to top ═══════════════════════ -->
    <!-- Progress ring: main.js sets --scroll-progress; the % gives way to the arrow near the bottom. -->
    <button class="return-top" id="returnTop" type="button" aria-label="<?= e($t['back_to_top']) ?>">
      <span class="return-top__inner">
        <span class="return-top__value" aria-hidden="true">0%</span>
        <svg class="return-top__arrow" viewBox="0 0 12 14" fill="none" aria-hidden="true" focusable="false">
          <path d="M6 13.2V1.4M1.2 6.2 6 1.4l4.8 4.8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </span>
    </button>

    <script src="<?= $a ?>assets/js/bootstrap.bundle.min.js" defer></script>
<?php if ($useSwiper): ?>
    <script src="<?= $a ?>assets/js/swiper-bundle.min.js" defer></script>
<?php endif; ?>
    <script src="<?= $a ?>assets/js/lenis.min.js" defer></script>
    <script src="<?= $a ?>assets/js/main.js" defer></script>
  </body>
</html>
