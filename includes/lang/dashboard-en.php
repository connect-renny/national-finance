<?php
// English strings for the staff dashboard (dashboard/*.php).
// PLACEHOLDER: the profile, notes, tasks, reminders, calendar, bookmarks and
// activity below are the design's sample content until the backend exists.
return [
    'html_lang'     => 'en',
    'dir'           => 'ltr',
    'skip'          => 'Skip to content',
    'nf'            => 'National Finance',
    'nf_home'       => 'National Finance intranet — home',
    'intranet'      => 'Intranet',
    'support'       => 'IT Service Desk',
    'notifications' => 'Notifications (new)',
    'help'          => 'Help',
    'account'       => 'My account',
    'sign_out'      => 'Sign Out',
    'open_menu'     => 'Open menu',
    'close_menu'    => 'Close menu',
    'nav_label'     => 'Dashboard',
    'switch_lang'   => 'ar',
    'switch_label'  => 'العربية',
    'switch_href'   => '../ar/dashboard/',

    // Sidebar. Keys starting with "site:" point at the main intranet pages.
    'nav' => [
        'site:index'    => 'Home',
        'index'         => 'My Dashboard',
        'site:policies' => 'Policies',
        'site:tahadath' => 'Tahadath',
    ],

    'user' => [
        'name'        => 'Tariq Al-Busaidi',
        'designation' => 'Supervisor',
        'department'  => 'IT Department',
        'branch'      => 'Muscat Branch',
        'phone'       => '+968 24 123 456',
        'extension'   => '555',
        'about'       => 'IT support and systems administration.',
    ],

    // ─── My Dashboard ───────────────────────────────────────────────────────
    'dash_title'    => 'My Dashboard',
    'dash_sub'      => 'Your personal workspace',
    'edit_profile'  => 'Edit Profile',
    'more_actions'  => 'More actions',

    'notes_title'   => 'My Sticky Notes',
    'add_note'      => 'Add Note',
    'pinned'        => 'Pinned',
    'notes' => [
        ['text' => 'Follow up on the team meeting.', 'color' => 'yellow', 'pinned' => true],
        ['text' => 'Prepare quarterly report.',      'color' => 'pink',   'pinned' => false],
        ['text' => 'Review policy updates.',         'color' => 'blue',   'pinned' => false],
    ],

    'todo_title'    => 'My To-Do List',
    'add_task'      => 'Add Task',
    'todos' => [
        ['text' => 'Complete project update', 'done' => false],
        ['text' => 'Team meeting with IT',    'done' => true],
        ['text' => 'Submit monthly report',   'done' => false],
    ],

    'reminders_title' => 'My Reminders',
    'add_reminder'    => 'Add Reminder',
    'reminders' => [
        ['title' => 'Policy acknowledgement', 'when' => '20 Jan 2026, 10:00 AM'],
        ['title' => 'Renew ID card',          'when' => '28 Jan 2026, 4:00 PM'],
        ['title' => 'Department meeting',     'when' => '2 Feb 2026, 11:00 AM'],
    ],

    'calendar_title' => 'Personal Calendar',
    'view_calendar'  => 'View Calendar',
    'prev_week'      => 'Previous week',
    'next_week'      => 'Next week',
    'month'          => 'January 2026',
    'weekdays'       => ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    'selected_date'  => '15 Jan 2026',
    'events_on'      => 'Events on',
    'no_events'     => 'No events on this day.',
    'edit'          => 'Edit',
    'delete'        => 'Delete',
    'events' => [
        ['title' => 'Team Meeting',   'time' => '10:00 AM – 11:00 AM', 'tone' => 'blue'],
        ['title' => 'Project Review', 'time' => '2:00 PM – 3:00 PM',   'tone' => 'purple'],
    ],

    'bookmarks_title' => 'My Bookmarks',
    'add_bookmark'    => 'Add Bookmark',
    'opens_new_tab'   => '(opens in a new tab)',
    'bookmarks' => [
        ['title' => 'Internal Guidelines', 'href' => '#'],
        ['title' => 'Oman Portal',         'href' => '#'],
        ['title' => 'IT Resources',        'href' => '#'],
    ],

    'activity_title' => 'My Recent Activity',
    'activity' => [
        ['icon' => 'sticky-note',      'html' => '<strong>Updated sticky note</strong> – “Review policy updates.”', 'when' => 'Today, 9:30 AM'],
        ['icon' => 'square-check-big', 'html' => '<strong>Completed task</strong> – “Team meeting with IT”',       'when' => 'Today, 9:00 AM'],
        ['icon' => 'bell',             'html' => '<strong>Added reminder</strong> – “Renew ID card.”',              'when' => 'Yesterday, 4:15 PM'],
    ],

    // ─── Edit Profile ───────────────────────────────────────────────────────
    'back'          => 'Back to My Dashboard',
    'profile_title' => 'Edit Profile',
    'change_photo'  => 'Change Photo',
    'required'      => 'required',
    'fields' => [
        'name'        => 'Full Name',
        'designation' => 'Designation',
        'department'  => 'Department',
        'branch'      => 'Branch',
        'phone'       => 'Contact Number',
        'extension'   => 'Extension',
        'about'       => 'About Me',
    ],
    'optional'      => '(Optional)',
    'cancel'        => 'Cancel',
    'save'          => 'Save Changes',
    'saved'         => 'Profile saved.',

    // Change Profile Photo modal
    'photo_title'   => 'Change Profile Photo',
    'close'         => 'Close',
    'current_photo' => 'Current profile photo',
    'drop_html'     => 'Drag and drop a photo here<br /><strong>or click to browse</strong>',
    'drop_hint'     => 'JPG, PNG (Max 5 MB)',
    'upload'        => 'Upload',
    'err_type'      => 'Please choose a JPG or PNG image.',
    'err_size'      => 'That image is larger than 5 MB.',
];
