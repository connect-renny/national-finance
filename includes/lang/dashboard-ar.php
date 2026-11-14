<?php
// Arabic strings for the staff dashboard (ar/dashboard/*.php).
// PLACEHOLDER: sample content until the backend exists (see dashboard-en.php).
return [
    'html_lang'     => 'ar',
    'dir'           => 'rtl',
    'skip'          => 'انتقل إلى المحتوى',
    'nf'            => 'الوطنية للتمويل',
    'nf_home'       => 'البوابة الداخلية للوطنية للتمويل — الرئيسية',
    'intranet'      => 'البوابة الداخلية',
    'support'       => 'مكتب خدمات تقنية المعلومات',
    'notifications' => 'الإشعارات (جديد)',
    'help'          => 'المساعدة',
    'account'       => 'حسابي',
    'sign_out'      => 'تسجيل الخروج',
    'open_menu'     => 'فتح القائمة',
    'close_menu'    => 'إغلاق القائمة',
    'nav_label'     => 'لوحة التحكم',
    'switch_lang'   => 'en',
    'switch_label'  => 'English',
    'switch_href'   => '../../dashboard/',

    'nav' => [
        'site:index'    => 'الرئيسية',
        'index'         => 'لوحتي',
        'site:policies' => 'السياسات',
        'site:tahadath' => 'تحدّث',
    ],

    'user' => [
        'name'        => 'طارق البوسعيدي',
        'designation' => 'مشرف',
        'department'  => 'دائرة تقنية المعلومات',
        'branch'      => 'فرع مسقط',
        'phone'       => '+968 24 123 456',
        'extension'   => '555',
        'about'       => 'دعم تقنية المعلومات وإدارة الأنظمة.',
    ],

    'dash_title'    => 'لوحتي',
    'dash_sub'      => 'مساحة عملك الشخصية',
    'edit_profile'  => 'تعديل الملف الشخصي',
    'more_actions'  => 'إجراءات أخرى',

    'notes_title'   => 'ملاحظاتي اللاصقة',
    'add_note'      => 'إضافة ملاحظة',
    'pinned'        => 'مثبّتة',
    'notes' => [
        ['text' => 'متابعة اجتماع الفريق.',       'color' => 'yellow', 'pinned' => true],
        ['text' => 'إعداد التقرير الربع سنوي.',    'color' => 'pink',   'pinned' => false],
        ['text' => 'مراجعة تحديثات السياسات.',     'color' => 'blue',   'pinned' => false],
    ],

    'todo_title'    => 'قائمة مهامي',
    'add_task'      => 'إضافة مهمة',
    'todos' => [
        ['text' => 'إكمال تحديث المشروع',            'done' => false],
        ['text' => 'اجتماع الفريق مع تقنية المعلومات', 'done' => true],
        ['text' => 'تقديم التقرير الشهري',            'done' => false],
    ],

    'reminders_title' => 'تذكيراتي',
    'add_reminder'    => 'إضافة تذكير',
    'reminders' => [
        ['title' => 'الإقرار بالسياسة',   'when' => '20 يناير 2026، 10:00 صباحًا'],
        ['title' => 'تجديد البطاقة الشخصية', 'when' => '28 يناير 2026، 4:00 مساءً'],
        ['title' => 'اجتماع الدائرة',      'when' => '2 فبراير 2026، 11:00 صباحًا'],
    ],

    'calendar_title' => 'التقويم الشخصي',
    'view_calendar'  => 'عرض التقويم',
    'prev_week'      => 'الأسبوع السابق',
    'next_week'      => 'الأسبوع التالي',
    'month'          => 'يناير 2026',
    'weekdays'       => ['أحد', 'إثنين', 'ثلاثاء', 'أربعاء', 'خميس', 'جمعة', 'سبت'],
    'selected_date'  => '15 يناير 2026',
    'events_on'      => 'فعاليات يوم',
    'no_events'     => 'لا توجد فعاليات في هذا اليوم.',
    'edit'          => 'تعديل',
    'delete'        => 'حذف',
    'events' => [
        ['title' => 'اجتماع الفريق',   'time' => '10:00 ص – 11:00 ص', 'tone' => 'blue'],
        ['title' => 'مراجعة المشروع', 'time' => '2:00 م – 3:00 م',   'tone' => 'purple'],
    ],

    'bookmarks_title' => 'إشاراتي المرجعية',
    'add_bookmark'    => 'إضافة إشارة',
    'opens_new_tab'   => '(يفتح في علامة تبويب جديدة)',
    'bookmarks' => [
        ['title' => 'الإرشادات الداخلية', 'href' => '#'],
        ['title' => 'بوابة عُمان',        'href' => '#'],
        ['title' => 'موارد تقنية المعلومات', 'href' => '#'],
    ],

    'activity_title' => 'نشاطي الأخير',
    'activity' => [
        ['icon' => 'sticky-note',      'html' => '<strong>حدّثت ملاحظة لاصقة</strong> – «مراجعة تحديثات السياسات.»', 'when' => 'اليوم، 9:30 صباحًا'],
        ['icon' => 'square-check-big', 'html' => '<strong>أكملت مهمة</strong> – «اجتماع الفريق مع تقنية المعلومات»', 'when' => 'اليوم، 9:00 صباحًا'],
        ['icon' => 'bell',             'html' => '<strong>أضفت تذكيرًا</strong> – «تجديد البطاقة الشخصية.»',        'when' => 'أمس، 4:15 مساءً'],
    ],

    'back'          => 'العودة إلى لوحتي',
    'profile_title' => 'تعديل الملف الشخصي',
    'change_photo'  => 'تغيير الصورة',
    'required'      => 'مطلوب',
    'fields' => [
        'name'        => 'الاسم الكامل',
        'designation' => 'المسمى الوظيفي',
        'department'  => 'الدائرة',
        'branch'      => 'الفرع',
        'phone'       => 'رقم التواصل',
        'extension'   => 'الرقم الداخلي',
        'about'       => 'نبذة عني',
    ],
    'optional'      => '(اختياري)',
    'cancel'        => 'إلغاء',
    'save'          => 'حفظ التغييرات',
    'saved'         => 'تم حفظ الملف الشخصي.',

    'photo_title'   => 'تغيير صورة الملف الشخصي',
    'close'         => 'إغلاق',
    'current_photo' => 'صورة الملف الشخصي الحالية',
    'drop_html'     => 'اسحب الصورة وأفلتها هنا<br /><strong>أو انقر للاستعراض</strong>',
    'drop_hint'     => 'JPG أو PNG (بحد أقصى 5 ميجابايت)',
    'upload'        => 'رفع',
    'err_type'      => 'يرجى اختيار صورة بصيغة JPG أو PNG.',
    'err_size'      => 'حجم الصورة أكبر من 5 ميجابايت.',
];
