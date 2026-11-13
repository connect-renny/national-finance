<?php
$lang        = 'ar';
$page        = 'index';
$title       = 'المبرز | البوابة الداخلية للوطنية للتمويل';
$description = 'المبرز — البوابة الداخلية لموظفي الوطنية للتمويل: الأخبار والفعاليات ورسائل الرئيس التنفيذي والسياسات والوصول السريع إلى الأنظمة الداخلية.';
$useSwiper   = true;
$preloads    = [
    ['assets/images/hero-01-portal-bg-mobile.jpg', '(max-width: 575.98px)'],
    ['assets/images/hero-01-portal-bg.jpg', '(min-width: 576px)'],
];
require __DIR__ . '/../includes/header.php';
?>
      <main id="main">
        <!-- ═══════════════════════ Hero ═══════════════════════ -->
        <section class="home-hero" aria-label="أبرز المستجدات">
          <!-- Shared gradients for every slide's ribbon (one copy keeps ids unique). -->
          <svg class="svg-defs" width="0" height="0" aria-hidden="true" focusable="false">
            <defs>
              <linearGradient id="hr0" gradientUnits="userSpaceOnUse" x1="12" y1="391" x2="96" y2="390.8"><stop stop-color="#ca0033"/><stop offset="1" stop-color="#bf0038"/></linearGradient>
              <linearGradient id="hr1" gradientUnits="userSpaceOnUse" x1="96" y1="390.8" x2="181.5" y2="384.2"><stop stop-color="#bf0038"/><stop offset="1" stop-color="#b4003e"/></linearGradient>
              <linearGradient id="hr2" gradientUnits="userSpaceOnUse" x1="181.5" y1="384.2" x2="261.8" y2="371.3"><stop stop-color="#b4003e"/><stop offset="1" stop-color="#a80044"/></linearGradient>
              <linearGradient id="hr3" gradientUnits="userSpaceOnUse" x1="261.8" y1="371.3" x2="330" y2="352"><stop stop-color="#a80044"/><stop offset="1" stop-color="#9d0049"/></linearGradient>
              <linearGradient id="hr4" gradientUnits="userSpaceOnUse" x1="330" y1="352" x2="378.7" y2="331.9"><stop stop-color="#9d0049"/><stop offset="1" stop-color="#94004e"/></linearGradient>
              <linearGradient id="hr5" gradientUnits="userSpaceOnUse" x1="378.7" y1="331.9" x2="419.4" y2="310.9"><stop stop-color="#94004e"/><stop offset="1" stop-color="#8c0052"/></linearGradient>
              <linearGradient id="hr6" gradientUnits="userSpaceOnUse" x1="419.4" y1="310.9" x2="451.6" y2="287.5"><stop stop-color="#8c0052"/><stop offset="1" stop-color="#830057"/></linearGradient>
              <linearGradient id="hr7" gradientUnits="userSpaceOnUse" x1="451.6" y1="287.5" x2="475" y2="260"><stop stop-color="#830057"/><stop offset="1" stop-color="#7a005c"/></linearGradient>
              <linearGradient id="hr8" gradientUnits="userSpaceOnUse" x1="475" y1="260" x2="483.9" y2="223.8"><stop stop-color="#7a005c"/><stop offset="1" stop-color="#6f0061"/></linearGradient>
              <linearGradient id="hr9" gradientUnits="userSpaceOnUse" x1="483.9" y1="223.8" x2="475" y2="187.9"><stop stop-color="#6f0061"/><stop offset="1" stop-color="#640066"/></linearGradient>
              <linearGradient id="hr10" gradientUnits="userSpaceOnUse" x1="475" y1="187.9" x2="451.1" y2="160"><stop stop-color="#640066"/><stop offset="1" stop-color="#5a006a"/></linearGradient>
              <linearGradient id="hr11" gradientUnits="userSpaceOnUse" x1="451.1" y1="160" x2="415" y2="148"><stop stop-color="#5a006a"/><stop offset="1" stop-color="#4f006f"/></linearGradient>
              <linearGradient id="hr12" gradientUnits="userSpaceOnUse" x1="415" y1="148" x2="379.5" y2="156"><stop stop-color="#4f006f"/><stop offset="1" stop-color="#470073"/></linearGradient>
              <linearGradient id="hr13" gradientUnits="userSpaceOnUse" x1="379.5" y1="156" x2="355.6" y2="178.9"><stop stop-color="#470073"/><stop offset="1" stop-color="#400077"/></linearGradient>
              <linearGradient id="hr14" gradientUnits="userSpaceOnUse" x1="355.6" y1="178.9" x2="344" y2="210.6"><stop stop-color="#400077"/><stop offset="1" stop-color="#38007b"/></linearGradient>
              <linearGradient id="hr15" gradientUnits="userSpaceOnUse" x1="344" y1="210.6" x2="345" y2="245"><stop stop-color="#38007b"/><stop offset="1" stop-color="#30007f"/></linearGradient>
              <linearGradient id="hr16" gradientUnits="userSpaceOnUse" x1="345" y1="245" x2="360.6" y2="283.9"><stop stop-color="#30007f"/><stop offset="1" stop-color="#270084"/></linearGradient>
              <linearGradient id="hr17" gradientUnits="userSpaceOnUse" x1="360.6" y1="283.9" x2="391.2" y2="316"><stop stop-color="#270084"/><stop offset="1" stop-color="#1e0088"/></linearGradient>
              <linearGradient id="hr18" gradientUnits="userSpaceOnUse" x1="391.2" y1="316" x2="435" y2="338.4"><stop stop-color="#1e0088"/><stop offset="1" stop-color="#14008c"/></linearGradient>
              <linearGradient id="hr19" gradientUnits="userSpaceOnUse" x1="435" y1="338.4" x2="490" y2="348"><stop stop-color="#14008c"/><stop offset="1" stop-color="#0b0091"/></linearGradient>
              <linearGradient id="hr20" gradientUnits="userSpaceOnUse" x1="490" y1="348" x2="540.8" y2="342.3"><stop stop-color="#0b0091"/><stop offset="1" stop-color="#1b0089"/></linearGradient>
              <linearGradient id="hr21" gradientUnits="userSpaceOnUse" x1="540.8" y1="342.3" x2="588.8" y2="324.8"><stop stop-color="#1b0089"/><stop offset="1" stop-color="#2a0082"/></linearGradient>
              <linearGradient id="hr22" gradientUnits="userSpaceOnUse" x1="588.8" y1="324.8" x2="634.8" y2="299.3"><stop stop-color="#2a0082"/><stop offset="1" stop-color="#3a007a"/></linearGradient>
              <linearGradient id="hr23" gradientUnits="userSpaceOnUse" x1="634.8" y1="299.3" x2="680" y2="270"><stop stop-color="#3a007a"/><stop offset="1" stop-color="#4a0072"/></linearGradient>
              <linearGradient id="hr24" gradientUnits="userSpaceOnUse" x1="680" y1="270" x2="741.6" y2="231"><stop stop-color="#4a0072"/><stop offset="1" stop-color="#5d0069"/></linearGradient>
              <linearGradient id="hr25" gradientUnits="userSpaceOnUse" x1="741.6" y1="231" x2="805" y2="198.1"><stop stop-color="#5d0069"/><stop offset="1" stop-color="#700060"/></linearGradient>
              <linearGradient id="hr26" gradientUnits="userSpaceOnUse" x1="805" y1="198.1" x2="868.4" y2="173.7"><stop stop-color="#700060"/><stop offset="1" stop-color="#840056"/></linearGradient>
              <linearGradient id="hr27" gradientUnits="userSpaceOnUse" x1="868.4" y1="173.7" x2="930" y2="160"><stop stop-color="#840056"/><stop offset="1" stop-color="#97004d"/></linearGradient>
              <linearGradient id="hr28" gradientUnits="userSpaceOnUse" x1="930" y1="160" x2="989.1" y2="159.8"><stop stop-color="#97004d"/><stop offset="1" stop-color="#a00048"/></linearGradient>
              <linearGradient id="hr29" gradientUnits="userSpaceOnUse" x1="989.1" y1="159.8" x2="1043.1" y2="171.4"><stop stop-color="#a00048"/><stop offset="1" stop-color="#aa0044"/></linearGradient>
              <linearGradient id="hr30" gradientUnits="userSpaceOnUse" x1="1043.1" y1="171.4" x2="1086.8" y2="194.7"><stop stop-color="#aa0044"/><stop offset="1" stop-color="#b3003f"/></linearGradient>
              <linearGradient id="hr31" gradientUnits="userSpaceOnUse" x1="1086.8" y1="194.7" x2="1115" y2="230"><stop stop-color="#b3003f"/><stop offset="1" stop-color="#bc003a"/></linearGradient>
              <linearGradient id="hr32" gradientUnits="userSpaceOnUse" x1="1115" y1="230" x2="1122.3" y2="279.9"><stop stop-color="#bc003a"/><stop offset="1" stop-color="#b8003c"/></linearGradient>
              <linearGradient id="hr33" gradientUnits="userSpaceOnUse" x1="1122.3" y1="279.9" x2="1109.4" y2="321.6"><stop stop-color="#b8003c"/><stop offset="1" stop-color="#b4003e"/></linearGradient>
              <linearGradient id="hr34" gradientUnits="userSpaceOnUse" x1="1109.4" y1="321.6" x2="1080.5" y2="350.8"><stop stop-color="#b4003e"/><stop offset="1" stop-color="#b00040"/></linearGradient>
              <linearGradient id="hr35" gradientUnits="userSpaceOnUse" x1="1080.5" y1="350.8" x2="1040" y2="363"><stop stop-color="#b00040"/><stop offset="1" stop-color="#ac0042"/></linearGradient>
              <linearGradient id="hr36" gradientUnits="userSpaceOnUse" x1="1040" y1="363" x2="1000" y2="357.9"><stop stop-color="#ac0042"/><stop offset="1" stop-color="#a30046"/></linearGradient>
              <linearGradient id="hr37" gradientUnits="userSpaceOnUse" x1="1000" y1="357.9" x2="971.2" y2="341"><stop stop-color="#a30046"/><stop offset="1" stop-color="#9a004a"/></linearGradient>
              <linearGradient id="hr38" gradientUnits="userSpaceOnUse" x1="971.2" y1="341" x2="955.6" y2="314.3"><stop stop-color="#9a004a"/><stop offset="1" stop-color="#92004f"/></linearGradient>
              <linearGradient id="hr39" gradientUnits="userSpaceOnUse" x1="955.6" y1="314.3" x2="955" y2="280"><stop stop-color="#92004f"/><stop offset="1" stop-color="#890053"/></linearGradient>
              <linearGradient id="hr40" gradientUnits="userSpaceOnUse" x1="955" y1="280" x2="968.8" y2="235.4"><stop stop-color="#890053"/><stop offset="1" stop-color="#7d0059"/></linearGradient>
              <linearGradient id="hr41" gradientUnits="userSpaceOnUse" x1="968.8" y1="235.4" x2="993.8" y2="193.1"><stop stop-color="#7d0059"/><stop offset="1" stop-color="#72005e"/></linearGradient>
              <linearGradient id="hr42" gradientUnits="userSpaceOnUse" x1="993.8" y1="193.1" x2="1028.1" y2="155.5"><stop stop-color="#72005e"/><stop offset="1" stop-color="#660064"/></linearGradient>
              <linearGradient id="hr43" gradientUnits="userSpaceOnUse" x1="1028.1" y1="155.5" x2="1070" y2="125"><stop stop-color="#660064"/><stop offset="1" stop-color="#5a006a"/></linearGradient>
              <linearGradient id="hr44" gradientUnits="userSpaceOnUse" x1="1070" y1="125" x2="1133.1" y2="101.3"><stop stop-color="#5a006a"/><stop offset="1" stop-color="#460074"/></linearGradient>
              <linearGradient id="hr45" gradientUnits="userSpaceOnUse" x1="1133.1" y1="101.3" x2="1200" y2="89.5"><stop stop-color="#460074"/><stop offset="1" stop-color="#32007e"/></linearGradient>
              <linearGradient id="hr46" gradientUnits="userSpaceOnUse" x1="1200" y1="89.5" x2="1266.9" y2="88.2"><stop stop-color="#32007e"/><stop offset="1" stop-color="#1e0087"/></linearGradient>
              <linearGradient id="hr47" gradientUnits="userSpaceOnUse" x1="1266.9" y1="88.2" x2="1330" y2="96"><stop stop-color="#1e0087"/><stop offset="1" stop-color="#0a0091"/></linearGradient>
              <linearGradient id="hr48" gradientUnits="userSpaceOnUse" x1="1330" y1="96" x2="1395.6" y2="107"><stop stop-color="#0a0091"/><stop offset="1" stop-color="#080092"/></linearGradient>
              <linearGradient id="hr49" gradientUnits="userSpaceOnUse" x1="1395.6" y1="107" x2="1457.5" y2="114.4"><stop stop-color="#080092"/><stop offset="1" stop-color="#050094"/></linearGradient>
              <linearGradient id="hr50" gradientUnits="userSpaceOnUse" x1="1457.5" y1="114.4" x2="1515.6" y2="115.5"><stop stop-color="#050094"/><stop offset="1" stop-color="#020096"/></linearGradient>
              <linearGradient id="hr51" gradientUnits="userSpaceOnUse" x1="1515.6" y1="115.5" x2="1570" y2="108"><stop stop-color="#020096"/><stop offset="1" stop-color="#000097"/></linearGradient>
              <linearGradient id="hr52" gradientUnits="userSpaceOnUse" x1="1570" y1="108" x2="1603.1" y2="96.6"><stop stop-color="#000097"/><stop offset="1" stop-color="#000097"/></linearGradient>
              <linearGradient id="hr53" gradientUnits="userSpaceOnUse" x1="1603.1" y1="96.6" x2="1628.8" y2="81.4"><stop stop-color="#000097"/><stop offset="1" stop-color="#000097"/></linearGradient>
              <linearGradient id="hr54" gradientUnits="userSpaceOnUse" x1="1628.8" y1="81.4" x2="1648.8" y2="63.7"><stop stop-color="#000097"/><stop offset="1" stop-color="#000097"/></linearGradient>
              <linearGradient id="hr55" gradientUnits="userSpaceOnUse" x1="1648.8" y1="63.7" x2="1665" y2="45"><stop stop-color="#000097"/><stop offset="1" stop-color="#000097"/></linearGradient>
            </defs>
          </svg>

          <div class="swiper js-hero-swiper">
            <div class="swiper-wrapper">
              <!-- Slide 1 — portal intro on the brand gradient -->
              <div class="swiper-slide home-hero__slide home-hero__slide--intro">
                <picture>
                  <source media="(max-width: 575.98px)" srcset="../assets/images/hero-01-portal-bg-mobile.jpg" width="900" height="900" />
                  <img class="home-hero__img" src="../assets/images/hero-01-portal-bg.jpg" alt="" width="1750" height="450" />
                </picture>
                <div class="home-hero__content">
                  <p class="home-hero__eyebrow">البوابة الداخلية للموظفين</p>
                  <h1 class="home-hero__title">
                    <span>حيث نتواصل،</span>
                    <span>نتعاون وننمو</span>
                  </h1>
                  <p class="home-hero__text">مكان واحد لخدمات الموظفين والنماذج وموارد الموارد البشرية والدعم التقني والسياسات والإعلانات وصفحات الإدارات وخط التظلمات والمقترحات لدى الرئيس التنفيذي.</p>
                </div>
                <div class="home-hero__ribbon" aria-hidden="true">
                    <svg class="hero-ribbon" viewBox="0 0 1706 435" fill="none" stroke-width="80" aria-hidden="true" focusable="false">
                    <path d="M1648.8 63.7C1654.7 57.6 1660 51.2 1665 45" stroke="url(#hr55)" pathLength="1" style="--d:2.577s;--t:0.023s"/>
                    <path d="M1628.8 81.4C1636.2 75.8 1642.8 69.8 1648.8 63.7L1650.8 61.5" stroke="url(#hr54)" pathLength="1" style="--d:2.552s;--t:0.025s"/>
                    <path d="M1603.1 96.6C1612.8 92.1 1621.2 86.9 1628.8 81.4L1631.2 79.6" stroke="url(#hr53)" pathLength="1" style="--d:2.525s;--t:0.028s"/>
                    <path d="M1570 108C1582.5 105 1593.4 101.1 1603.1 96.6L1605.8 95.3" stroke="url(#hr52)" pathLength="1" style="--d:2.492s;--t:0.032s"/>
                    <path d="M1515.6 115.5C1534.4 114.6 1552.5 112.2 1570 108L1572.9 107.3" stroke="url(#hr51)" pathLength="1" style="--d:2.442s;--t:0.051s"/>
                    <path d="M1457.5 114.4C1477.5 115.9 1496.9 116.5 1515.6 115.5L1518.6 115.4" stroke="url(#hr50)" pathLength="1" style="--d:2.388s;--t:0.054s"/>
                    <path d="M1395.6 107C1416.9 110.2 1437.5 112.8 1457.5 114.4L1460.5 114.6" stroke="url(#hr49)" pathLength="1" style="--d:2.330s;--t:0.058s"/>
                    <path d="M1330 96C1352.5 100 1374.4 103.8 1395.6 107L1398.6 107.5" stroke="url(#hr48)" pathLength="1" style="--d:2.269s;--t:0.061s"/>
                    <path d="M1266.9 88.2C1288.8 89.3 1310 92 1330 96L1332.9 96.6" stroke="url(#hr47)" pathLength="1" style="--d:2.210s;--t:0.059s"/>
                    <path d="M1200 89.5C1222.5 87.4 1245 87 1266.9 88.2L1269.9 88.3" stroke="url(#hr46)" pathLength="1" style="--d:2.148s;--t:0.062s"/>
                    <path d="M1133.1 101.3C1155 95.5 1177.5 91.6 1200 89.5L1203 89.2" stroke="url(#hr45)" pathLength="1" style="--d:2.086s;--t:0.063s"/>
                    <path d="M1070 125C1090 115 1111.2 107.2 1133.1 101.3L1136 100.6" stroke="url(#hr44)" pathLength="1" style="--d:2.023s;--t:0.062s"/>
                    <path d="M1028.1 155.5C1040.9 144.1 1055 133.8 1070 125L1072.6 123.5" stroke="url(#hr43)" pathLength="1" style="--d:1.975s;--t:0.048s"/>
                    <path d="M993.8 193.1C1003.8 179.7 1015.3 167 1028.1 155.5L1030.4 153.5" stroke="url(#hr42)" pathLength="1" style="--d:1.928s;--t:0.047s"/>
                    <path d="M968.8 235.4C975.3 220.8 983.8 206.6 993.8 193.1L995.5 190.7" stroke="url(#hr41)" pathLength="1" style="--d:1.883s;--t:0.045s"/>
                    <path d="M955 280C957.5 265 962.2 250 968.8 235.4L970 232.7" stroke="url(#hr40)" pathLength="1" style="--d:1.840s;--t:0.043s"/>
                    <path d="M955.6 314.3C952.8 304.1 952.5 292.5 955 280L955.6 277.1" stroke="url(#hr39)" pathLength="1" style="--d:1.807s;--t:0.032s"/>
                    <path d="M971.2 341C963.8 333.6 958.4 324.6 955.6 314.3L954.8 311.5" stroke="url(#hr38)" pathLength="1" style="--d:1.779s;--t:0.029s"/>
                    <path d="M1000 357.9C988.4 354.1 978.8 348.4 971.2 341L969.1 338.9" stroke="url(#hr37)" pathLength="1" style="--d:1.748s;--t:0.031s"/>
                    <path d="M1040 363C1025 363.5 1011.6 361.7 1000 357.9L997.1 357" stroke="url(#hr36)" pathLength="1" style="--d:1.710s;--t:0.037s"/>
                    <path d="M1080.5 350.8C1068.8 357.9 1055 362.2 1040 363L1037 363.1" stroke="url(#hr35)" pathLength="1" style="--d:1.671s;--t:0.040s"/>
                    <path d="M1109.4 321.6C1102.2 333.7 1092.3 343.7 1080.5 350.8L1078 352.4" stroke="url(#hr34)" pathLength="1" style="--d:1.632s;--t:0.038s"/>
                    <path d="M1122.3 279.9C1121.1 295.4 1116.6 309.6 1109.4 321.6L1107.8 324.2" stroke="url(#hr33)" pathLength="1" style="--d:1.592s;--t:0.041s"/>
                    <path d="M1115 230C1121.2 247.5 1123.4 264.4 1122.3 279.9L1122 282.9" stroke="url(#hr32)" pathLength="1" style="--d:1.545s;--t:0.047s"/>
                    <path d="M1086.8 194.7C1099.1 204.5 1108.8 216.2 1115 230L1116.2 232.7" stroke="url(#hr31)" pathLength="1" style="--d:1.503s;--t:0.042s"/>
                    <path d="M1043.1 171.4C1059.7 177.2 1074.5 185 1086.8 194.7L1089.1 196.6" stroke="url(#hr30)" pathLength="1" style="--d:1.457s;--t:0.046s"/>
                    <path d="M989.1 159.8C1008.3 161.7 1026.6 165.6 1043.1 171.4L1046 172.4" stroke="url(#hr29)" pathLength="1" style="--d:1.406s;--t:0.051s"/>
                    <path d="M930 160C950 158 970 157.9 989.1 159.8L992.1 160.1" stroke="url(#hr28)" pathLength="1" style="--d:1.351s;--t:0.055s"/>
                    <path d="M868.4 173.7C889.4 167.2 910 162.5 930 160L933 159.6" stroke="url(#hr27)" pathLength="1" style="--d:1.293s;--t:0.058s"/>
                    <path d="M805 198.1C826.2 188.4 847.5 180.2 868.4 173.7L871.3 172.8" stroke="url(#hr26)" pathLength="1" style="--d:1.230s;--t:0.063s"/>
                    <path d="M741.6 231C762.5 218.9 783.8 207.8 805 198.1L807.7 196.9" stroke="url(#hr25)" pathLength="1" style="--d:1.164s;--t:0.066s"/>
                    <path d="M680 270C700 256.2 720.6 243.1 741.6 231L744.2 229.5" stroke="url(#hr24)" pathLength="1" style="--d:1.096s;--t:0.067s"/>
                    <path d="M634.8 299.3C650 290 665 280 680 270L682.5 268.3" stroke="url(#hr23)" pathLength="1" style="--d:1.047s;--t:0.050s"/>
                    <path d="M588.8 324.8C604.4 317.4 619.7 308.7 634.8 299.3L637.4 297.8" stroke="url(#hr22)" pathLength="1" style="--d:0.998s;--t:0.049s"/>
                    <path d="M540.8 342.3C557.2 338.2 573.1 332.1 588.8 324.8L591.5 323.5" stroke="url(#hr21)" pathLength="1" style="--d:0.951s;--t:0.047s"/>
                    <path d="M490 348C507.5 348.5 524.4 346.4 540.8 342.3L543.7 341.6" stroke="url(#hr20)" pathLength="1" style="--d:0.904s;--t:0.047s"/>
                    <path d="M435 338.4C451.6 343.9 470 347.2 490 348L493 348.1" stroke="url(#hr19)" pathLength="1" style="--d:0.852s;--t:0.052s"/>
                    <path d="M391.2 316C403.8 325.2 418.4 332.9 435 338.4L437.8 339.3" stroke="url(#hr18)" pathLength="1" style="--d:0.806s;--t:0.046s"/>
                    <path d="M360.6 283.9C368.4 295.9 378.8 306.8 391.2 316L393.7 317.8" stroke="url(#hr17)" pathLength="1" style="--d:0.765s;--t:0.041s"/>
                    <path d="M345 245C347.5 258.8 352.8 271.9 360.6 283.9L362.3 286.4" stroke="url(#hr16)" pathLength="1" style="--d:0.726s;--t:0.039s"/>
                    <path d="M344 210.6C342.2 221.9 342.5 233.8 345 245L345.7 247.9" stroke="url(#hr15)" pathLength="1" style="--d:0.694s;--t:0.032s"/>
                    <path d="M355.6 178.9C349.7 188.3 345.8 199.2 344 210.6L343.5 213.5" stroke="url(#hr14)" pathLength="1" style="--d:0.663s;--t:0.031s"/>
                    <path d="M379.5 156C369.5 161.5 361.6 169.4 355.6 178.9L354 181.4" stroke="url(#hr13)" pathLength="1" style="--d:0.632s;--t:0.031s"/>
                    <path d="M415 148C401.2 147.5 389.4 150.5 379.5 156L376.8 157.4" stroke="url(#hr12)" pathLength="1" style="--d:0.598s;--t:0.034s"/>
                    <path d="M451.1 160C440.9 152.9 428.8 148.5 415 148L412 147.9" stroke="url(#hr11)" pathLength="1" style="--d:0.562s;--t:0.036s"/>
                    <path d="M475 187.9C469.4 176.8 461.2 167.1 451.1 160L448.6 158.3" stroke="url(#hr10)" pathLength="1" style="--d:0.528s;--t:0.034s"/>
                    <path d="M483.9 223.8C483.8 211.3 480.6 198.9 475 187.9L473.6 185.2" stroke="url(#hr9)" pathLength="1" style="--d:0.493s;--t:0.034s"/>
                    <path d="M475 260C481.2 248.8 484.1 236.2 483.9 223.8L483.9 220.8" stroke="url(#hr8)" pathLength="1" style="--d:0.459s;--t:0.035s"/>
                    <path d="M451.6 287.5C460.9 279.1 468.8 270 475 260L476.6 257.5" stroke="url(#hr7)" pathLength="1" style="--d:0.425s;--t:0.033s"/>
                    <path d="M419.4 310.9C431.6 303.6 442.3 295.8 451.6 287.5L453.9 285.4" stroke="url(#hr6)" pathLength="1" style="--d:0.388s;--t:0.037s"/>
                    <path d="M378.7 331.9C393.6 325.1 407.2 318.2 419.4 310.9L421.9 309.3" stroke="url(#hr5)" pathLength="1" style="--d:0.346s;--t:0.042s"/>
                    <path d="M330 352C347.5 345.2 363.8 338.6 378.7 331.9L381.4 330.6" stroke="url(#hr4)" pathLength="1" style="--d:0.297s;--t:0.049s"/>
                    <path d="M261.8 371.3C286.9 365.9 310 359.5 330 352L332.8 350.9" stroke="url(#hr3)" pathLength="1" style="--d:0.232s;--t:0.066s"/>
                    <path d="M181.5 384.2C209.5 381 236.6 376.7 261.8 371.3L264.7 370.7" stroke="url(#hr2)" pathLength="1" style="--d:0.157s;--t:0.075s"/>
                    <path d="M96 390.8C124.6 389.7 153.5 387.5 181.5 384.2L184.5 383.9" stroke="url(#hr1)" pathLength="1" style="--d:0.078s;--t:0.079s"/>
                    <path d="M12 391C39 392 67.4 391.9 96 390.8L99 390.7" stroke="url(#hr0)" pathLength="1" style="--d:0.000s;--t:0.078s"/>
                    <circle class="hero-ribbon__cap" cx="12" cy="391" r="40" fill="#ca0033" style="--d:0s"/>
                    <circle class="hero-ribbon__cap" cx="1665" cy="45" r="40" fill="#000097" style="--d:2.600s"/>
                    </svg>
                  </div>
              </div>

              <!-- Slide 2 — milestone message over the airport photo -->
              <div class="swiper-slide home-hero__slide home-hero__slide--photo">
                <picture>
                  <source media="(max-width: 575.98px)" srcset="../assets/images/hero-02-airport-mobile.jpg" width="900" height="900" />
                  <img class="home-hero__img" src="../assets/images/hero-02-airport.jpg" alt="" width="1750" height="450" loading="lazy" />
                </picture>
                <div class="home-hero__content">
                  <h2 class="home-hero__title">
                    <span>كل إنجاز يدفعك إلى الأمام</span>
                    <span class="home-hero__accent">واصل التقدّم!</span>
                  </h2>
                </div>
                <div class="home-hero__ribbon" aria-hidden="true">
                    <svg class="hero-ribbon" viewBox="0 0 1706 435" fill="none" stroke-width="80" aria-hidden="true" focusable="false">
                    <path d="M1648.8 63.7C1654.7 57.6 1660 51.2 1665 45" stroke="url(#hr55)" pathLength="1" style="--d:2.577s;--t:0.023s"/>
                    <path d="M1628.8 81.4C1636.2 75.8 1642.8 69.8 1648.8 63.7L1650.8 61.5" stroke="url(#hr54)" pathLength="1" style="--d:2.552s;--t:0.025s"/>
                    <path d="M1603.1 96.6C1612.8 92.1 1621.2 86.9 1628.8 81.4L1631.2 79.6" stroke="url(#hr53)" pathLength="1" style="--d:2.525s;--t:0.028s"/>
                    <path d="M1570 108C1582.5 105 1593.4 101.1 1603.1 96.6L1605.8 95.3" stroke="url(#hr52)" pathLength="1" style="--d:2.492s;--t:0.032s"/>
                    <path d="M1515.6 115.5C1534.4 114.6 1552.5 112.2 1570 108L1572.9 107.3" stroke="url(#hr51)" pathLength="1" style="--d:2.442s;--t:0.051s"/>
                    <path d="M1457.5 114.4C1477.5 115.9 1496.9 116.5 1515.6 115.5L1518.6 115.4" stroke="url(#hr50)" pathLength="1" style="--d:2.388s;--t:0.054s"/>
                    <path d="M1395.6 107C1416.9 110.2 1437.5 112.8 1457.5 114.4L1460.5 114.6" stroke="url(#hr49)" pathLength="1" style="--d:2.330s;--t:0.058s"/>
                    <path d="M1330 96C1352.5 100 1374.4 103.8 1395.6 107L1398.6 107.5" stroke="url(#hr48)" pathLength="1" style="--d:2.269s;--t:0.061s"/>
                    <path d="M1266.9 88.2C1288.8 89.3 1310 92 1330 96L1332.9 96.6" stroke="url(#hr47)" pathLength="1" style="--d:2.210s;--t:0.059s"/>
                    <path d="M1200 89.5C1222.5 87.4 1245 87 1266.9 88.2L1269.9 88.3" stroke="url(#hr46)" pathLength="1" style="--d:2.148s;--t:0.062s"/>
                    <path d="M1133.1 101.3C1155 95.5 1177.5 91.6 1200 89.5L1203 89.2" stroke="url(#hr45)" pathLength="1" style="--d:2.086s;--t:0.063s"/>
                    <path d="M1070 125C1090 115 1111.2 107.2 1133.1 101.3L1136 100.6" stroke="url(#hr44)" pathLength="1" style="--d:2.023s;--t:0.062s"/>
                    <path d="M1028.1 155.5C1040.9 144.1 1055 133.8 1070 125L1072.6 123.5" stroke="url(#hr43)" pathLength="1" style="--d:1.975s;--t:0.048s"/>
                    <path d="M993.8 193.1C1003.8 179.7 1015.3 167 1028.1 155.5L1030.4 153.5" stroke="url(#hr42)" pathLength="1" style="--d:1.928s;--t:0.047s"/>
                    <path d="M968.8 235.4C975.3 220.8 983.8 206.6 993.8 193.1L995.5 190.7" stroke="url(#hr41)" pathLength="1" style="--d:1.883s;--t:0.045s"/>
                    <path d="M955 280C957.5 265 962.2 250 968.8 235.4L970 232.7" stroke="url(#hr40)" pathLength="1" style="--d:1.840s;--t:0.043s"/>
                    <path d="M955.6 314.3C952.8 304.1 952.5 292.5 955 280L955.6 277.1" stroke="url(#hr39)" pathLength="1" style="--d:1.807s;--t:0.032s"/>
                    <path d="M971.2 341C963.8 333.6 958.4 324.6 955.6 314.3L954.8 311.5" stroke="url(#hr38)" pathLength="1" style="--d:1.779s;--t:0.029s"/>
                    <path d="M1000 357.9C988.4 354.1 978.8 348.4 971.2 341L969.1 338.9" stroke="url(#hr37)" pathLength="1" style="--d:1.748s;--t:0.031s"/>
                    <path d="M1040 363C1025 363.5 1011.6 361.7 1000 357.9L997.1 357" stroke="url(#hr36)" pathLength="1" style="--d:1.710s;--t:0.037s"/>
                    <path d="M1080.5 350.8C1068.8 357.9 1055 362.2 1040 363L1037 363.1" stroke="url(#hr35)" pathLength="1" style="--d:1.671s;--t:0.040s"/>
                    <path d="M1109.4 321.6C1102.2 333.7 1092.3 343.7 1080.5 350.8L1078 352.4" stroke="url(#hr34)" pathLength="1" style="--d:1.632s;--t:0.038s"/>
                    <path d="M1122.3 279.9C1121.1 295.4 1116.6 309.6 1109.4 321.6L1107.8 324.2" stroke="url(#hr33)" pathLength="1" style="--d:1.592s;--t:0.041s"/>
                    <path d="M1115 230C1121.2 247.5 1123.4 264.4 1122.3 279.9L1122 282.9" stroke="url(#hr32)" pathLength="1" style="--d:1.545s;--t:0.047s"/>
                    <path d="M1086.8 194.7C1099.1 204.5 1108.8 216.2 1115 230L1116.2 232.7" stroke="url(#hr31)" pathLength="1" style="--d:1.503s;--t:0.042s"/>
                    <path d="M1043.1 171.4C1059.7 177.2 1074.5 185 1086.8 194.7L1089.1 196.6" stroke="url(#hr30)" pathLength="1" style="--d:1.457s;--t:0.046s"/>
                    <path d="M989.1 159.8C1008.3 161.7 1026.6 165.6 1043.1 171.4L1046 172.4" stroke="url(#hr29)" pathLength="1" style="--d:1.406s;--t:0.051s"/>
                    <path d="M930 160C950 158 970 157.9 989.1 159.8L992.1 160.1" stroke="url(#hr28)" pathLength="1" style="--d:1.351s;--t:0.055s"/>
                    <path d="M868.4 173.7C889.4 167.2 910 162.5 930 160L933 159.6" stroke="url(#hr27)" pathLength="1" style="--d:1.293s;--t:0.058s"/>
                    <path d="M805 198.1C826.2 188.4 847.5 180.2 868.4 173.7L871.3 172.8" stroke="url(#hr26)" pathLength="1" style="--d:1.230s;--t:0.063s"/>
                    <path d="M741.6 231C762.5 218.9 783.8 207.8 805 198.1L807.7 196.9" stroke="url(#hr25)" pathLength="1" style="--d:1.164s;--t:0.066s"/>
                    <path d="M680 270C700 256.2 720.6 243.1 741.6 231L744.2 229.5" stroke="url(#hr24)" pathLength="1" style="--d:1.096s;--t:0.067s"/>
                    <path d="M634.8 299.3C650 290 665 280 680 270L682.5 268.3" stroke="url(#hr23)" pathLength="1" style="--d:1.047s;--t:0.050s"/>
                    <path d="M588.8 324.8C604.4 317.4 619.7 308.7 634.8 299.3L637.4 297.8" stroke="url(#hr22)" pathLength="1" style="--d:0.998s;--t:0.049s"/>
                    <path d="M540.8 342.3C557.2 338.2 573.1 332.1 588.8 324.8L591.5 323.5" stroke="url(#hr21)" pathLength="1" style="--d:0.951s;--t:0.047s"/>
                    <path d="M490 348C507.5 348.5 524.4 346.4 540.8 342.3L543.7 341.6" stroke="url(#hr20)" pathLength="1" style="--d:0.904s;--t:0.047s"/>
                    <path d="M435 338.4C451.6 343.9 470 347.2 490 348L493 348.1" stroke="url(#hr19)" pathLength="1" style="--d:0.852s;--t:0.052s"/>
                    <path d="M391.2 316C403.8 325.2 418.4 332.9 435 338.4L437.8 339.3" stroke="url(#hr18)" pathLength="1" style="--d:0.806s;--t:0.046s"/>
                    <path d="M360.6 283.9C368.4 295.9 378.8 306.8 391.2 316L393.7 317.8" stroke="url(#hr17)" pathLength="1" style="--d:0.765s;--t:0.041s"/>
                    <path d="M345 245C347.5 258.8 352.8 271.9 360.6 283.9L362.3 286.4" stroke="url(#hr16)" pathLength="1" style="--d:0.726s;--t:0.039s"/>
                    <path d="M344 210.6C342.2 221.9 342.5 233.8 345 245L345.7 247.9" stroke="url(#hr15)" pathLength="1" style="--d:0.694s;--t:0.032s"/>
                    <path d="M355.6 178.9C349.7 188.3 345.8 199.2 344 210.6L343.5 213.5" stroke="url(#hr14)" pathLength="1" style="--d:0.663s;--t:0.031s"/>
                    <path d="M379.5 156C369.5 161.5 361.6 169.4 355.6 178.9L354 181.4" stroke="url(#hr13)" pathLength="1" style="--d:0.632s;--t:0.031s"/>
                    <path d="M415 148C401.2 147.5 389.4 150.5 379.5 156L376.8 157.4" stroke="url(#hr12)" pathLength="1" style="--d:0.598s;--t:0.034s"/>
                    <path d="M451.1 160C440.9 152.9 428.8 148.5 415 148L412 147.9" stroke="url(#hr11)" pathLength="1" style="--d:0.562s;--t:0.036s"/>
                    <path d="M475 187.9C469.4 176.8 461.2 167.1 451.1 160L448.6 158.3" stroke="url(#hr10)" pathLength="1" style="--d:0.528s;--t:0.034s"/>
                    <path d="M483.9 223.8C483.8 211.3 480.6 198.9 475 187.9L473.6 185.2" stroke="url(#hr9)" pathLength="1" style="--d:0.493s;--t:0.034s"/>
                    <path d="M475 260C481.2 248.8 484.1 236.2 483.9 223.8L483.9 220.8" stroke="url(#hr8)" pathLength="1" style="--d:0.459s;--t:0.035s"/>
                    <path d="M451.6 287.5C460.9 279.1 468.8 270 475 260L476.6 257.5" stroke="url(#hr7)" pathLength="1" style="--d:0.425s;--t:0.033s"/>
                    <path d="M419.4 310.9C431.6 303.6 442.3 295.8 451.6 287.5L453.9 285.4" stroke="url(#hr6)" pathLength="1" style="--d:0.388s;--t:0.037s"/>
                    <path d="M378.7 331.9C393.6 325.1 407.2 318.2 419.4 310.9L421.9 309.3" stroke="url(#hr5)" pathLength="1" style="--d:0.346s;--t:0.042s"/>
                    <path d="M330 352C347.5 345.2 363.8 338.6 378.7 331.9L381.4 330.6" stroke="url(#hr4)" pathLength="1" style="--d:0.297s;--t:0.049s"/>
                    <path d="M261.8 371.3C286.9 365.9 310 359.5 330 352L332.8 350.9" stroke="url(#hr3)" pathLength="1" style="--d:0.232s;--t:0.066s"/>
                    <path d="M181.5 384.2C209.5 381 236.6 376.7 261.8 371.3L264.7 370.7" stroke="url(#hr2)" pathLength="1" style="--d:0.157s;--t:0.075s"/>
                    <path d="M96 390.8C124.6 389.7 153.5 387.5 181.5 384.2L184.5 383.9" stroke="url(#hr1)" pathLength="1" style="--d:0.078s;--t:0.079s"/>
                    <path d="M12 391C39 392 67.4 391.9 96 390.8L99 390.7" stroke="url(#hr0)" pathLength="1" style="--d:0.000s;--t:0.078s"/>
                    <circle class="hero-ribbon__cap" cx="12" cy="391" r="40" fill="#ca0033" style="--d:0s"/>
                    <circle class="hero-ribbon__cap" cx="1665" cy="45" r="40" fill="#000097" style="--d:2.600s"/>
                    </svg>
                  </div>
              </div>

              <!-- Slide 3 — "علامة فارقة" campaign banner (artwork carries its own branding) -->
              <div class="swiper-slide home-hero__slide home-hero__slide--banner">
                <picture>
                  <source media="(max-width: 575.98px)" srcset="../assets/images/hero-03-alama-fariqa-mobile.jpg" width="900" height="900" />
                  <img class="home-hero__img" src="../assets/images/hero-03-alama-fariqa.jpg" alt="حملة علامة فارقة" lang="ar" width="1750" height="450" loading="lazy" />
                </picture>
              </div>
            </div>
            <div class="swiper-pagination home-hero__pagination"></div>
          </div>
        </section>

        <!-- ═══════════════════════ Apps + feature cards ═══════════════════════ -->
        <section class="home-dash" aria-label="وصول سريع">
          <div class="shell-container">
            <ul class="app-grid">
              <li data-reveal style="--reveal-delay: 0ms">
                <a class="app-card" href="#">
                  <span class="app-card__icon"><img src="../assets/images/icon-app-service-desk.png" alt="" width="36" height="36" /></span>
                  مكتب الخدمات
                </a>
              </li>
              <li data-reveal style="--reveal-delay: 80ms">
                <a class="app-card" href="#">
                  <span class="app-card__icon"><img src="../assets/images/icon-app-finnone.png" alt="" width="36" height="36" /></span>
                  FinnOne
                </a>
              </li>
              <li data-reveal style="--reveal-delay: 160ms">
                <a class="app-card" href="#">
                  <span class="app-card__icon"><img src="../assets/images/icon-app-edms.png" alt="" width="36" height="36" /></span>
                  EDMS
                </a>
              </li>
              <li data-reveal style="--reveal-delay: 240ms">
                <a class="app-card" href="#">
                  <span class="app-card__icon"><img src="../assets/images/icon-app-hrms.png" alt="" width="36" height="36" /></span>
                  HRMS
                </a>
              </li>
              <li data-reveal style="--reveal-delay: 320ms">
                <a class="app-card" href="#">
                  <span class="app-card__icon"><img src="../assets/images/icon-app-bi.png" alt="" width="36" height="36" /></span>
                  BI
                </a>
              </li>
            </ul>

            <div class="feature-grid">
              <!-- Tahadath -->
              <article class="feature-card tahadath-card" data-reveal="left">
                <h3>تحدّث</h3>
                <p>منصتنا الداخلية للحوار المفتوح وتبادل الأفكار</p>
                <a class="link-circle" href="tahadath.php">
                  <span class="link-circle__text">استكشف</span>
                  <span class="link-circle__icon"><i class="bi bi-arrow-right" aria-hidden="true"></i></span>
                </a>
                <div class="tahadath-card__art" aria-hidden="true">
                  <img src="../assets/images/tahadath-card-shape.png" alt="" width="400" height="250" />
                  <span class="tahadath-card__bubble">
                    <img src="../assets/images/tahadath-chat-icon.png" alt="" width="65" height="65" />
                  </span>
                </div>
              </article>

              <!-- CEO message -->
              <article class="feature-card ceo-card" data-reveal style="--reveal-delay: 120ms">
                <div class="ceo-card__photo">
                  <img src="../assets/images/ceo-portrait.png" alt="الرئيس التنفيذي للوطنية للتمويل" width="290" height="275" />
                </div>
                <div class="ceo-card__body">
                  <span class="ceo-card__badge">رسالة الرئيس التنفيذي</span>
                  <h3 class="ceo-card__title">رسالة من الرئيس التنفيذي</h3>
                  <p class="ceo-card__text">حول الأداء والاستدامة والنمو</p>
                  <a class="ceo-card__cta" href="ceo-message.php">
                    <span class="ceo-card__cta-label">شاهد الآن</span>
                    <span class="ceo-card__play" aria-hidden="true">
                      <svg viewBox="0 0 12 14"><path fill="currentColor" d="M12 7 0 14V0z" /></svg>
                    </span>
                  </a>
                </div>
              </article>

              <!-- Upcoming events -->
              <article class="feature-card events-card" data-reveal="right" style="--reveal-delay: 240ms">
                <div class="events-card__head">
                  <h3>الفعاليات القادمة</h3>
                  <a class="events-card__icon" href="#" aria-label="جميع الفعاليات القادمة">
                    <img src="../assets/images/icon-upcoming-events.png" alt="" width="36" height="36" />
                  </a>
                </div>
                <ul class="events-list">
                  <li>
                    <a href="#">
                      <time class="events-list__date" datetime="2026-11-19">نوفمبر <strong>19</strong></time>
                      <span>الاحتفال باليوم الوطني العُماني</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <time class="events-list__date" datetime="2026-12-05">ديسمبر <strong>05</strong></time>
                      <span>برنامج التطوع المجتمعي</span>
                    </a>
                  </li>
                </ul>
              </article>
            </div>
          </div>
        </section>

        <!-- ═══════════════════════ News + support ═══════════════════════ -->
        <section class="home-news" aria-label="الأخبار والدعم">
          <div class="shell-container">
            <div class="news-layout">
              <div class="news-col">
                <div class="news-col__head" data-reveal>
                  <h2 class="section-heading">آخر الأخبار والفعاليات</h2>
                  <a class="link-circle" href="news.php">
                    <span class="link-circle__text">عرض جميع الأخبار</span>
                    <span class="link-circle__icon"><i class="bi bi-arrow-right" aria-hidden="true"></i></span>
                  </a>
                </div>

                <div data-reveal style="--reveal-delay: 100ms">
                  <div class="swiper news-slider js-news-swiper">
                    <div class="swiper-wrapper">
                      <!-- Slides 2 & 3 repeat the supplied story — swap in real items. -->
                      <div class="swiper-slide">
                        <article class="news-card">
                          <div class="news-card__media">
                            <img src="../assets/images/news-01.png" alt="فريقا الوطنية للتمويل ودار العطاء خلال توقيع برنامج تمكين" width="685" height="400" />
                          </div>
                          <img class="news-card__lines" src="../assets/images/news-card-lines.png" alt="" width="1693" height="435" aria-hidden="true" />
                          <div class="news-card__body">
                            <time datetime="2026-10-25">25 أكتوبر 2026</time>
                            <h3>الوطنية للتمويل ودار العطاء تجددان شراكتهما لتمكين المرأة العُمانية من خلال برنامج تمكين لتربية النحل</h3>
                            <a class="link-circle link-circle--light" href="#" target="_blank" rel="noopener noreferrer">
                              <span class="link-circle__text">استكشف</span>
                              <span class="link-circle__icon"><i class="bi bi-arrow-right" aria-hidden="true"></i></span>
                            </a>
                          </div>
                        </article>
                      </div>
                      <div class="swiper-slide">
                        <article class="news-card">
                          <div class="news-card__media">
                            <img src="../assets/images/news-01.png" alt="فريقا الوطنية للتمويل ودار العطاء خلال توقيع برنامج تمكين" width="685" height="400" loading="lazy" />
                          </div>
                          <img class="news-card__lines" src="../assets/images/news-card-lines.png" alt="" width="1693" height="435" aria-hidden="true" loading="lazy" />
                          <div class="news-card__body">
                            <time datetime="2026-10-25">25 أكتوبر 2026</time>
                            <h3>الوطنية للتمويل ودار العطاء تجددان شراكتهما لتمكين المرأة العُمانية من خلال برنامج تمكين لتربية النحل</h3>
                            <a class="link-circle link-circle--light" href="#" target="_blank" rel="noopener noreferrer">
                              <span class="link-circle__text">استكشف</span>
                              <span class="link-circle__icon"><i class="bi bi-arrow-right" aria-hidden="true"></i></span>
                            </a>
                          </div>
                        </article>
                      </div>
                      <div class="swiper-slide">
                        <article class="news-card">
                          <div class="news-card__media">
                            <img src="../assets/images/news-01.png" alt="فريقا الوطنية للتمويل ودار العطاء خلال توقيع برنامج تمكين" width="685" height="400" loading="lazy" />
                          </div>
                          <img class="news-card__lines" src="../assets/images/news-card-lines.png" alt="" width="1693" height="435" aria-hidden="true" loading="lazy" />
                          <div class="news-card__body">
                            <time datetime="2026-10-25">25 أكتوبر 2026</time>
                            <h3>الوطنية للتمويل ودار العطاء تجددان شراكتهما لتمكين المرأة العُمانية من خلال برنامج تمكين لتربية النحل</h3>
                            <a class="link-circle link-circle--light" href="#" target="_blank" rel="noopener noreferrer">
                              <span class="link-circle__text">استكشف</span>
                              <span class="link-circle__icon"><i class="bi bi-arrow-right" aria-hidden="true"></i></span>
                            </a>
                          </div>
                        </article>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination news-pagination"></div>
                </div>
              </div>

              <div class="support-col">
                <div class="news-col__head" data-reveal>
                  <h2 class="section-heading">أرقام الدعم العاجل الداخلية</h2>
                </div>

                <div class="support-card" data-reveal="right" style="--reveal-delay: 160ms">
                  <div class="support-card__head">
                    <span class="support-card__icon"><img src="../assets/images/icon-urgent-support.png" alt="" width="36" height="36" /></span>
                    <h3>هل تحتاج إلى دعم عاجل؟</h3>
                  </div>
                  <ul class="support-list">
                    <li><a href="tel:499"><span>مكتب خدمات تقنية المعلومات</span><span>داخلي 499</span></a></li>
                    <li><a href="tel:480"><span>مكتب مساعدة الموارد البشرية</span><span>داخلي 480</span></a></li>
                    <li><a href="tel:084"><span>المرافق</span><span>داخلي 084</span></a></li>
                    <li><a href="tel:555"><span>مكافحة الاحتيال</span><span>داخلي 555</span></a></li>
                    <li><a href="tel:108"><span>أمن المعلومات</span><span>داخلي 108</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
