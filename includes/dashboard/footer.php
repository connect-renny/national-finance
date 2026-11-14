        </main>
      </div>
    </div>

    <script src="<?= $root ?>assets/js/bootstrap.bundle.min.js" defer></script>
    <script src="<?= $root ?>assets/dashboard/js/dashboard.js" defer></script>
<?php if ($pageJs): ?>
    <script src="<?= $root ?>assets/dashboard/js/pages/<?= e($page) ?>.js" defer></script>
<?php endif; ?>
  </body>
</html>
