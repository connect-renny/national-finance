<?php
/** My Dashboard — shared by dashboard/index.php and ar/dashboard/index.php. */

/** Kebab menu used on to-do and reminder rows. */
function row_menu(array $d, string $label): string
{
    return '<div class="dropdown">'
        . '<button class="dash-kebab" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="' . e($d['more_actions'] . ': ' . $label) . '">' . icon('ellipsis-vertical') . '</button>'
        . '<ul class="dropdown-menu dropdown-menu-end">'
        . '<li><button class="dropdown-item" type="button">' . icon('pencil', 'icon--grad') . e($d['edit']) . '</button></li>'
        . '<li><button class="dropdown-item" type="button">' . icon('trash-2', 'icon--grad') . e($d['delete']) . '</button></li>'
        . '</ul></div>';
}

$u = $d['user'];
?>
          <div class="dash-page">
            <header class="dash-title">
              <h1><?= e($d['dash_title']) ?></h1>
              <p><?= e($d['dash_sub']) ?></p>
            </header>

            <!-- Profile -->
            <section class="profile-card" aria-label="<?= e($u['name']) ?>">
              <img class="profile-card__photo" src="<?= $root ?>assets/dashboard/images/profile-photo.jpg" alt="" width="96" height="96" />
              <div class="profile-card__body">
                <h2 class="profile-card__name"><?= e($u['name']) ?></h2>
                <p><?= e($u['designation']) ?>, <?= e($u['department']) ?><br /><?= e($u['branch']) ?></p>
              </div>
              <a class="dash-btn dash-btn--ghost profile-card__edit" href="edit-profile.php"><?= icon('pencil', 'icon--grad') ?><?= e($d['edit_profile']) ?></a>
            </section>

            <div class="dash-grid">
              <!-- Sticky notes -->
              <section class="dash-card" aria-labelledby="notesTitle">
                <header class="dash-card__head">
                  <h2 class="dash-card__title" id="notesTitle"><?= icon('sticky-note', 'icon--grad') ?><span><?= e($d['notes_title']) ?></span></h2>
                  <button class="dash-card__action" type="button"><?= icon('plus') ?><?= e($d['add_note']) ?></button>
                </header>
                <ul class="notes">
<?php foreach ($d['notes'] as $note): ?>
                  <li class="note note--<?= e($note['color']) ?>">
<?php if ($note['pinned']): ?>
                    <?= icon('pin', 'note__pin') ?><span class="visually-hidden"><?= e($d['pinned']) ?>: </span>
<?php endif; ?>
                    <p><?= e($note['text']) ?></p>
                  </li>
<?php endforeach; ?>
                </ul>
              </section>

              <!-- To-do -->
              <section class="dash-card" aria-labelledby="todoTitle">
                <header class="dash-card__head">
                  <h2 class="dash-card__title" id="todoTitle"><?= icon('list-checks', 'icon--grad') ?><span><?= e($d['todo_title']) ?></span></h2>
                  <button class="dash-card__action" type="button"><?= icon('plus') ?><?= e($d['add_task']) ?></button>
                </header>
                <ul class="dash-list todo">
<?php foreach ($d['todos'] as $i => $todo): ?>
                  <li>
                    <label class="todo__item">
                      <input class="dash-check" type="checkbox"<?= $todo['done'] ? ' checked' : '' ?> />
                      <span><?= e($todo['text']) ?></span>
                    </label>
                    <?= row_menu($d, $todo['text']) . "\n" ?>
                  </li>
<?php endforeach; ?>
                </ul>
              </section>

              <!-- Reminders -->
              <section class="dash-card" aria-labelledby="remindersTitle">
                <header class="dash-card__head">
                  <h2 class="dash-card__title" id="remindersTitle"><?= icon('bell', 'icon--grad') ?><span><?= e($d['reminders_title']) ?></span></h2>
                  <button class="dash-card__action" type="button"><?= icon('plus') ?><?= e($d['add_reminder']) ?></button>
                </header>
                <ul class="dash-list reminders">
<?php foreach ($d['reminders'] as $r): ?>
                  <li>
                    <span class="dash-tile"><?= icon('calendar-check', 'icon--grad') ?></span>
                    <div class="reminders__text">
                      <strong><?= e($r['title']) ?></strong>
                      <span><?= e($r['when']) ?></span>
                    </div>
                    <?= row_menu($d, $r['title']) . "\n" ?>
                  </li>
<?php endforeach; ?>
                </ul>
              </section>

              <!-- Calendar: two-week strip + the selected day's events.
                   pages/index.js makes the arrows and days work. -->
              <section class="dash-card" aria-labelledby="calendarTitle">
                <header class="dash-card__head">
                  <h2 class="dash-card__title" id="calendarTitle"><?= icon('calendar', 'icon--grad') ?><span><?= e($d['calendar_title']) ?></span></h2>
                  <a class="dash-card__action" href="#"><?= e($d['view_calendar']) ?></a>
                </header>
                <div class="cal" data-cal data-lang="<?= e($lang) ?>" data-selected="2026-01-15" data-no-events="<?= e($d['no_events']) ?>">
                  <div class="cal__month">
                    <div class="cal__nav">
                      <button class="cal__arrow" type="button" data-cal-prev aria-label="<?= e($d['prev_week']) ?>"><?= icon('chevron-left', 'dash-flip') ?></button>
                      <p class="cal__label" data-cal-label aria-live="polite"><?= e($d['month']) ?></p>
                      <button class="cal__arrow" type="button" data-cal-next aria-label="<?= e($d['next_week']) ?>"><?= icon('chevron-right', 'dash-flip') ?></button>
                    </div>
                    <div class="cal__grid" data-cal-grid>
<?php foreach ($d['weekdays'] as $wd): ?>
                      <span class="cal__wd"><?= e($wd) ?></span>
<?php endforeach; ?>
<?php for ($day = 11; $day <= 24; $day++): ?>
                      <button class="cal__day" type="button" aria-pressed="<?= $day === 15 ? 'true' : 'false' ?>"><?= $day ?></button>
<?php endfor; ?>
                    </div>
                  </div>
                  <div class="cal__agenda">
                    <h3 class="cal__date" data-cal-date><?= e($d['selected_date']) ?></h3>
                    <ul class="cal__events" data-cal-events>
<?php foreach ($d['events'] as $ev): ?>
                      <li class="cal__event cal__event--<?= e($ev['tone']) ?>">
                        <strong><?= e($ev['title']) ?></strong>
                        <span><?= e($ev['time']) ?></span>
                      </li>
<?php endforeach; ?>
                    </ul>
                  </div>
                </div>
              </section>

              <!-- Bookmarks -->
              <section class="dash-card" aria-labelledby="bookmarksTitle">
                <header class="dash-card__head">
                  <h2 class="dash-card__title" id="bookmarksTitle"><?= icon('bookmark', 'icon--grad') ?><span><?= e($d['bookmarks_title']) ?></span></h2>
                  <button class="dash-card__action" type="button"><?= icon('plus') ?><?= e($d['add_bookmark']) ?></button>
                </header>
                <ul class="dash-list bookmarks">
<?php foreach ($d['bookmarks'] as $b): ?>
                  <li>
                    <a class="bookmarks__link" href="<?= e($b['href']) ?>" target="_blank" rel="noopener">
                      <?= icon('link', 'icon--grad') ?>
                      <span><?= e($b['title']) ?><span class="visually-hidden"> <?= e($d['opens_new_tab']) ?></span></span>
                      <?= icon('external-link', 'bookmarks__ext dash-flip') . "\n" ?>
                    </a>
                  </li>
<?php endforeach; ?>
                </ul>
              </section>

              <!-- Recent activity -->
              <section class="dash-card" aria-labelledby="activityTitle">
                <header class="dash-card__head">
                  <h2 class="dash-card__title" id="activityTitle"><?= icon('history', 'icon--grad') ?><span><?= e($d['activity_title']) ?></span></h2>
                </header>
                <ul class="dash-list activity">
<?php foreach ($d['activity'] as $act): ?>
                  <li>
                    <span class="dash-tile"><?= icon($act['icon'], 'icon--grad') ?></span>
                    <p><?= $act['html'] ?><br /><span class="activity__when"><?= e($act['when']) ?></span></p>
                  </li>
<?php endforeach; ?>
                </ul>
              </section>
            </div>
          </div>
