<?php
/** Edit Profile + Change Profile Photo modal — shared by EN and AR. */
$u = $d['user'];
$f = $d['fields'];
$photo = $root . 'assets/dashboard/images/profile-photo.jpg';

// PLACEHOLDER: the form posts nowhere yet — pages/edit-profile.js shows the
// saved message. Wire action/method up when the backend exists.
$inputs = [
    ['name',        'text', 'name',           true],
    ['designation', 'text', 'organization-title', false],
    ['department',  'text', 'off',            false],
    ['branch',      'text', 'off',            false],
    ['phone',       'tel',  'tel',            false],
    ['extension',   'text', 'off',            false],
];
?>
          <div class="dash-page">
            <section class="dash-card profile-edit" aria-labelledby="profileTitle">
              <header class="profile-edit__head">
                <a class="profile-edit__back" href="index.php" aria-label="<?= e($d['back']) ?>"><?= icon('arrow-left', 'dash-flip') ?></a>
                <h1 class="profile-edit__title" id="profileTitle"><?= e($d['profile_title']) ?></h1>
              </header>

              <div class="profile-edit__body">
                <div class="profile-edit__photo">
                  <img src="<?= $photo ?>" alt="" width="128" height="128" data-profile-photo />
                  <button class="profile-edit__change" type="button" data-bs-toggle="modal" data-bs-target="#photoModal"><?= icon('image', 'icon--grad') ?><?= e($d['change_photo']) ?></button>
                </div>

                <form class="profile-form" id="profileForm" novalidate>
<?php foreach ($inputs as [$key, $type, $auto, $req]): ?>
                  <div class="profile-form__row">
                    <label for="pf-<?= $key ?>"><?= e($f[$key]) ?><?php if ($req): ?> <span class="profile-form__req" aria-hidden="true">*</span><?php endif; ?></label>
                    <input class="dash-input" id="pf-<?= $key ?>" name="<?= $key ?>" type="<?= $type ?>" value="<?= e($u[$key]) ?>" autocomplete="<?= $auto ?>"<?= $req ? ' required' : '' ?><?= $type === 'tel' ? ' dir="ltr"' : '' ?> />
                  </div>
<?php endforeach; ?>
                  <div class="profile-form__row">
                    <label for="pf-about"><?= e($f['about']) ?> <span class="profile-form__opt"><?= e($d['optional']) ?></span></label>
                    <textarea class="dash-input" id="pf-about" name="about" rows="4"><?= e($u['about']) ?></textarea>
                  </div>

                  <div class="profile-form__actions">
                    <p class="profile-form__status" role="status" data-form-status></p>
                    <a class="dash-btn dash-btn--outline" href="index.php"><?= e($d['cancel']) ?></a>
                    <button class="dash-btn dash-btn--primary" type="submit" data-saved="<?= e($d['saved']) ?>"><?= e($d['save']) ?></button>
                  </div>
                </form>
              </div>
            </section>
          </div>

          <!-- ═══════════════════════ Change Profile Photo ═══════════════════════ -->
          <div class="modal fade photo-modal" id="photoModal" tabindex="-1" aria-labelledby="photoModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="photo-modal__head">
                  <h2 class="photo-modal__title" id="photoModalTitle"><?= e($d['photo_title']) ?></h2>
                  <button class="photo-modal__close" type="button" data-bs-dismiss="modal" aria-label="<?= e($d['close']) ?>"><?= icon('x') ?></button>
                </div>

                <div class="photo-modal__body">
                  <img class="photo-modal__preview" src="<?= $photo ?>" alt="<?= e($d['current_photo']) ?>" width="150" height="150" data-photo-preview />

                  <label class="dropzone" data-dropzone>
                    <input class="visually-hidden" type="file" accept="image/jpeg,image/png" data-photo-input data-err-type="<?= e($d['err_type']) ?>" data-err-size="<?= e($d['err_size']) ?>" />
                    <?= icon('cloud-upload', 'icon--grad dropzone__icon') ?>
                    <span class="dropzone__text"><?= $d['drop_html'] ?></span>
                    <span class="dropzone__hint" data-photo-hint><?= e($d['drop_hint']) ?></span>
                  </label>
                </div>

                <div class="photo-modal__foot">
                  <button class="dash-btn dash-btn--outline" type="button" data-bs-dismiss="modal"><?= e($d['cancel']) ?></button>
                  <button class="dash-btn dash-btn--brand" type="button" data-photo-upload disabled><?= e($d['upload']) ?></button>
                </div>
              </div>
            </div>
          </div>
