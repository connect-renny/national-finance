<?php
$lang        = 'ar';
$page        = 'news';
$title       = 'آخر الأخبار | المبرز';
$description = 'أخبار الوطنية للتمويل وفعالياتها — مستجدات أساسية ورؤى استراتيجية للموظفين.';
$bodyClass   = 'page-inner';
require __DIR__ . '/../includes/header.php';
?>
      <main id="main" class="inner-main">
        <!-- ═══════════════════════ Hero ═══════════════════════ -->
        <section class="inner-section" aria-labelledby="pageTitle">
          <div class="shell-container">
            <div class="page-hero page-hero--center">
              <div class="page-hero__text">
                <h1 class="page-title" id="pageTitle" data-reveal>آخر الأخبار</h1>
                <p class="page-lead" style="--lead-max: 560px; --reveal-delay: 120ms" data-reveal>نُبقيك على اطلاع بأهم المستجدات والرؤى الاستراتيجية.</p>
              </div>
              <figure class="page-hero__media" data-reveal="fade">
                <img src="../assets/images/news-hero.jpg" alt="" width="800" height="350" />
                <svg class="page-ribbon" viewBox="0 0 798 347" preserveAspectRatio="none" fill="none" stroke-width="96" aria-hidden="true" focusable="false">
                  <defs>
                    <mask id="nws-all" maskUnits="userSpaceOnUse" x="-100" y="-100" width="1000" height="700"><path fill="#fff" d="M746.14 0.77L725.24 5.81L706.23 10.79L685.16 16.73L665.19 22.74L643.22 29.76L622.34 36.88L600.32 44.85L582.24 51.75L557.29 61.81L536.26 70.75L518.25 78.75L490.25 91.75L459.66 107.15L438.14 118.64L427 124.89L425.43 123.1L421.82 117.7L418.42 113.11L413.89 107.64L409.01 102.49L403.4 97.09L397.39 92.08L393.39 89.09L387.4 85.09L383.71 82.82L373.94 77.57L367.78 74.71L360.65 71.9L351.67 68.88L344.65 66.91L334.9 64.72L328.96 63.66L322.92 62.76L312 61.65L295 61.2L278 61.68L267.01 62.67L258.1 63.79L246.1 65.7L243.85 66.31L240.29 66.84L238.84 67.3L236.09 67.64L233.83 68.3L231.1 68.69L224.83 70.3L222.15 70.76L214.22 72.78L203.33 75.89L193.43 78.97L174.13 85.65L153.37 93.9L141.58 99.06L129.3 104.8L108.68 115.17L97.63 121.14L86.14 127.63L75.57 134.07L62.16 142.65L43.09 155.57L33.19 162.66L20.6 172.07L0.57 188.05L-0.24 189.24L-0.5 192L-0.5 274L-0.38 277L0 277.41L6.66 271.14L23.62 256.09L36.61 245.08L53.15 231.61L62.14 224.6L73.59 216.06L87.66 206.13L96.62 200.11L110.63 191.12L120.56 185.07L141.2 173.7L153.13 167.64L171.51 159.01L181.28 154.8L195.63 149.1L213.34 142.89L230.26 137.81L242.2 134.79L257.09 131.71L270.07 129.75L281 128.63L298 128.15L308 128.53L317.94 129.69L327.86 131.73L331.75 132.79L337.74 134.78L344.73 137.77L348 139.5L352.34 142.14L357.5 146L361.13 149.37L364.51 152.99L365.88 154.64L368.74 158.77L369.74 161L367.41 162.93L357.13 170.6L345.15 180.62L334.2 190.68L326.68 198.2L317.1 208.63L311.6 215.14L304.17 224.7L295.55 237.08L288.73 248.22L283.76 257.25L278.59 268.07L274.8 277.28L270.72 289.15L267.77 300.16L265.69 311.06L264.68 319.01L264.31 330L264.63 340L265.71 347.91L267.83 356.72L270.95 365.58L275.23 374.25L279.64 380.82L284.71 386.79L291.07 392.45L294.58 394.94L298.27 397.22L301.55 398.96L305 400.5L309.35 402.1L313.18 403.24L318.06 404.36L327.69 404.99L335.97 404.34L341.86 403.23L344.95 402.45L351.8 400.28L358.92 397.4L363.61 395.1L368.78 392.28L374.32 388.85L381.41 383.94L385.92 380.44L392.38 374.9L403.39 363.87L408.92 357.39L412.85 352.33L418.26 344.76L423.34 336.84L427.34 329.84L430.41 323.92L433.32 317.82L436.31 310.81L439.29 302.83L442.26 293.8L444.23 286.8L446.17 278.76L448.26 267.91L449.31 260.96L450.4 251L450.53 246L451.16 238.99L451.34 231L451.14 223.02L450.51 218L450.31 209.01L448.37 192.01L448.65 190.25L449.11 189.62L458.55 184.05L475.22 174.73L492.2 165.7L518.16 152.67L539.29 142.79L557.19 134.69L573.24 127.73L592.3 119.82L610.21 112.72L631.27 104.8L651.2 97.73L672.2 90.73L698.15 82.71L715.22 77.77L733.32 72.88L748 69.25L748.26 69L748.51 66L748.52 1L748 0.49ZM382.61 237.12L383 236.67L384 236.22L384.29 237L384.18 238.99L383.25 249.93L382.25 256.9L381.15 262.73L379.23 270.79L377.17 277.71L374.24 285.75L370.19 294.7L366.29 301.8L362.4 307.86L359.47 311.96L354.99 317.48L350.1 322.6L344.37 327.91L339.25 331.76L333.03 335.51L331.97 336L331.49 333.98L331.24 330L331.6 323.01L332.78 316.16L334.84 308.3L336.89 302.35L339.74 295.25L342.65 289.15L346.15 282.66L350.66 275.17L355.06 268.58L360.15 261.68L364.6 256.13L371.13 248.65L376.03 243.53Z"/></mask>
                    <mask id="nws-front" maskUnits="userSpaceOnUse" x="-100" y="-100" width="1000" height="700"><path fill="#fff" d="M746.14 0.77L717.29 7.85L695.27 13.82L671.31 20.85L649.25 27.79L628.28 34.81L600.32 44.85L577.22 53.72L550.25 64.75L518.25 78.75L490.25 91.75L459.66 107.15L438.14 118.64L428.55 124.06L425.51 125.05L424.17 125.67L421.83 127.33L417.17 129.67L414.83 131.33L411.56 133.06L406.83 136.33L404.17 137.67L401.83 139.33L399.17 140.67L396.83 142.33L393.56 144.06L392.44 144.94L375.56 156.06L373.44 157.94L371.56 159.06L367.98 162.49L357.13 170.6L345.15 180.62L333.68 191.18L325.72 199.23L316.63 209.17L311.6 215.14L304.59 224.13L299.16 231.69L295.16 237.68L290.57 245.1L286.56 252.07L283.08 258.59L279.84 265.32L275.92 274.39L273.71 280.19L269.8 292.23L267.78 300.16L266.75 305.1L265.72 311.06L265.51 313.99L264.73 319.01L264.59 330L264.9 340.96L265.11 342.58L265.79 345.01L266 348L268.89 347.66L270.34 347.11L272.98 346.89L275.34 346.11L277.89 345.66L279.32 345.11L280 345.04L282 345.31L285 344.89L287.34 344.11L289 343.89L291.34 343.11L293.89 342.66L295.34 342.11L305.98 341.89L307.66 341.32L314 338.16L315.68 338.1L318.34 337.11L321.89 336.66L324.91 335.66L328.34 334.07L331 333.2L331.53 323.01L332.78 316.16L333.94 311.4L335.57 306.06L337.7 300.19L339.74 295.25L344.72 285.21L350.66 275.17L357.15 265.67L364.6 256.13L372.1 247.61L382.08 237.57L386.56 234.06L388.44 232.94L392.01 229.51L394.99 227.49L399.56 223.06L401.44 221.94L403.56 220.06L405.44 218.94L407.56 217.06L412.44 213.94L414.56 212.06L416.44 210.94L429.56 202.06L432.83 200.33L435.17 198.67L438.44 196.94L443.17 193.67L446.44 191.94L448.5 189.98L450.28 188.8L470.04 177.52L488.26 167.77L520.18 151.68L546.13 139.64L559.27 133.77L573.24 127.73L595.16 118.67L615.26 110.78L634.21 103.73L651.2 97.73L672.2 90.73L698.15 82.71L715.22 77.77L733.32 72.88L748 69.25L748.26 69L748.51 66L748.52 1L748 0.49Z"/></mask>
                    <linearGradient id="nws0" gradientUnits="userSpaceOnUse" x1="815" y1="14" x2="800.5" y2="18.4"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90032"/></linearGradient>
                    <linearGradient id="nws1" gradientUnits="userSpaceOnUse" x1="800.5" y1="18.4" x2="779.7" y2="24.6"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90032"/></linearGradient>
                    <linearGradient id="nws2" gradientUnits="userSpaceOnUse" x1="779.7" y1="24.6" x2="756.5" y2="31.6"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90032"/></linearGradient>
                    <linearGradient id="nws3" gradientUnits="userSpaceOnUse" x1="756.5" y1="31.6" x2="735" y2="38"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90032"/></linearGradient>
                    <linearGradient id="nws4" gradientUnits="userSpaceOnUse" x1="735" y1="38" x2="715.5" y2="43.7"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90032"/></linearGradient>
                    <linearGradient id="nws5" gradientUnits="userSpaceOnUse" x1="715.5" y1="43.7" x2="696.2" y2="49.2"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90032"/></linearGradient>
                    <linearGradient id="nws6" gradientUnits="userSpaceOnUse" x1="696.2" y1="49.2" x2="677.6" y2="54.7"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90032"/></linearGradient>
                    <linearGradient id="nws7" gradientUnits="userSpaceOnUse" x1="677.6" y1="54.7" x2="660" y2="60"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90032"/></linearGradient>
                    <linearGradient id="nws8" gradientUnits="userSpaceOnUse" x1="660" y1="60" x2="643.9" y2="65"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90032"/></linearGradient>
                    <linearGradient id="nws9" gradientUnits="userSpaceOnUse" x1="643.9" y1="65" x2="629.1" y2="69.8"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90032"/></linearGradient>
                    <linearGradient id="nws10" gradientUnits="userSpaceOnUse" x1="629.1" y1="69.8" x2="614.6" y2="74.6"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90032"/></linearGradient>
                    <linearGradient id="nws11" gradientUnits="userSpaceOnUse" x1="614.6" y1="74.6" x2="600" y2="80"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90032"/></linearGradient>
                    <linearGradient id="nws12" gradientUnits="userSpaceOnUse" x1="600" y1="80" x2="584.6" y2="86.2"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90032"/></linearGradient>
                    <linearGradient id="nws13" gradientUnits="userSpaceOnUse" x1="584.6" y1="86.2" x2="569.1" y2="92.9"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90032"/></linearGradient>
                    <linearGradient id="nws14" gradientUnits="userSpaceOnUse" x1="569.1" y1="92.9" x2="553.9" y2="99.7"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90032"/></linearGradient>
                    <linearGradient id="nws15" gradientUnits="userSpaceOnUse" x1="553.9" y1="99.7" x2="540" y2="106"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90032"/></linearGradient>
                    <linearGradient id="nws16" gradientUnits="userSpaceOnUse" x1="540" y1="106" x2="527.8" y2="111.4"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90032"/></linearGradient>
                    <linearGradient id="nws17" gradientUnits="userSpaceOnUse" x1="527.8" y1="111.4" x2="516.8" y2="116.3"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90032"/></linearGradient>
                    <linearGradient id="nws18" gradientUnits="userSpaceOnUse" x1="516.8" y1="116.3" x2="506.1" y2="121.3"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90032"/></linearGradient>
                    <linearGradient id="nws19" gradientUnits="userSpaceOnUse" x1="506.1" y1="121.3" x2="495" y2="127"><stop stop-color="#c90032"/><stop offset="1" stop-color="#c90033"/></linearGradient>
                    <linearGradient id="nws20" gradientUnits="userSpaceOnUse" x1="495" y1="127" x2="483.5" y2="133.2"><stop stop-color="#c90033"/><stop offset="1" stop-color="#c80033"/></linearGradient>
                    <linearGradient id="nws21" gradientUnits="userSpaceOnUse" x1="483.5" y1="133.2" x2="472.1" y2="139.8"><stop stop-color="#c80033"/><stop offset="1" stop-color="#c60034"/></linearGradient>
                    <linearGradient id="nws22" gradientUnits="userSpaceOnUse" x1="472.1" y1="139.8" x2="460.1" y2="147.2"><stop stop-color="#c60034"/><stop offset="1" stop-color="#c40035"/></linearGradient>
                    <linearGradient id="nws23" gradientUnits="userSpaceOnUse" x1="460.1" y1="147.2" x2="447" y2="156"><stop stop-color="#c40035"/><stop offset="1" stop-color="#c10037"/></linearGradient>
                    <linearGradient id="nws24" gradientUnits="userSpaceOnUse" x1="447" y1="156" x2="432.2" y2="167.1"><stop stop-color="#c10037"/><stop offset="1" stop-color="#bc0039"/></linearGradient>
                    <linearGradient id="nws25" gradientUnits="userSpaceOnUse" x1="432.2" y1="167.1" x2="416.1" y2="179.8"><stop stop-color="#bc0039"/><stop offset="1" stop-color="#b6003c"/></linearGradient>
                    <linearGradient id="nws26" gradientUnits="userSpaceOnUse" x1="416.1" y1="179.8" x2="399.9" y2="192.9"><stop stop-color="#b6003c"/><stop offset="1" stop-color="#b3003e"/></linearGradient>
                    <linearGradient id="nws27" gradientUnits="userSpaceOnUse" x1="399.9" y1="192.9" x2="385" y2="205"><stop stop-color="#b3003e"/><stop offset="1" stop-color="#af0040"/></linearGradient>
                    <linearGradient id="nws28" gradientUnits="userSpaceOnUse" x1="385" y1="205" x2="371.3" y2="215.6"><stop stop-color="#af0040"/><stop offset="1" stop-color="#ae0041"/></linearGradient>
                    <linearGradient id="nws29" gradientUnits="userSpaceOnUse" x1="371.3" y1="215.6" x2="358.4" y2="225.6"><stop stop-color="#ae0041"/><stop offset="1" stop-color="#ac0041"/></linearGradient>
                    <linearGradient id="nws30" gradientUnits="userSpaceOnUse" x1="358.4" y1="225.6" x2="346.5" y2="235.2"><stop stop-color="#ac0041"/><stop offset="1" stop-color="#a90043"/></linearGradient>
                    <linearGradient id="nws31" gradientUnits="userSpaceOnUse" x1="346.5" y1="235.2" x2="336" y2="245"><stop stop-color="#a90043"/><stop offset="1" stop-color="#a60044"/></linearGradient>
                    <linearGradient id="nws32" gradientUnits="userSpaceOnUse" x1="336" y1="245" x2="327.1" y2="255"><stop stop-color="#a60044"/><stop offset="1" stop-color="#a30045"/></linearGradient>
                    <linearGradient id="nws33" gradientUnits="userSpaceOnUse" x1="327.1" y1="255" x2="319.6" y2="265"><stop stop-color="#a30045"/><stop offset="1" stop-color="#9f0048"/></linearGradient>
                    <linearGradient id="nws34" gradientUnits="userSpaceOnUse" x1="319.6" y1="265" x2="313.3" y2="275"><stop stop-color="#9f0048"/><stop offset="1" stop-color="#9c004a"/></linearGradient>
                    <linearGradient id="nws35" gradientUnits="userSpaceOnUse" x1="313.3" y1="275" x2="308" y2="285"><stop stop-color="#9c004a"/><stop offset="1" stop-color="#98004b"/></linearGradient>
                    <linearGradient id="nws36" gradientUnits="userSpaceOnUse" x1="308" y1="285" x2="303.6" y2="295.1"><stop stop-color="#98004b"/><stop offset="1" stop-color="#95004d"/></linearGradient>
                    <linearGradient id="nws37" gradientUnits="userSpaceOnUse" x1="303.6" y1="295.1" x2="300.2" y2="305.3"><stop stop-color="#95004d"/><stop offset="1" stop-color="#92004f"/></linearGradient>
                    <linearGradient id="nws38" gradientUnits="userSpaceOnUse" x1="300.2" y1="305.3" x2="297.9" y2="315.4"><stop stop-color="#92004f"/><stop offset="1" stop-color="#8f0050"/></linearGradient>
                    <linearGradient id="nws39" gradientUnits="userSpaceOnUse" x1="297.9" y1="315.4" x2="297" y2="325"><stop stop-color="#8f0050"/><stop offset="1" stop-color="#8c0051"/></linearGradient>
                    <linearGradient id="nws40" gradientUnits="userSpaceOnUse" x1="297" y1="325" x2="297.4" y2="334.6"><stop stop-color="#8c0051"/><stop offset="1" stop-color="#880053"/></linearGradient>
                    <linearGradient id="nws41" gradientUnits="userSpaceOnUse" x1="297.4" y1="334.6" x2="298.9" y2="344.1"><stop stop-color="#880053"/><stop offset="1" stop-color="#860054"/></linearGradient>
                    <linearGradient id="nws42" gradientUnits="userSpaceOnUse" x1="298.9" y1="344.1" x2="301.8" y2="352.8"><stop stop-color="#860054"/><stop offset="1" stop-color="#830056"/></linearGradient>
                    <linearGradient id="nws43" gradientUnits="userSpaceOnUse" x1="301.8" y1="352.8" x2="306" y2="360"><stop stop-color="#830056"/><stop offset="1" stop-color="#810057"/></linearGradient>
                    <linearGradient id="nws44" gradientUnits="userSpaceOnUse" x1="306" y1="360" x2="311.9" y2="365.9"><stop stop-color="#810057"/><stop offset="1" stop-color="#800057"/></linearGradient>
                    <linearGradient id="nws45" gradientUnits="userSpaceOnUse" x1="311.9" y1="365.9" x2="319.4" y2="370.6"><stop stop-color="#800057"/><stop offset="1" stop-color="#7e0058"/></linearGradient>
                    <linearGradient id="nws46" gradientUnits="userSpaceOnUse" x1="319.4" y1="370.6" x2="327.7" y2="373.8"><stop stop-color="#7e0058"/><stop offset="1" stop-color="#7c0058"/></linearGradient>
                    <linearGradient id="nws47" gradientUnits="userSpaceOnUse" x1="327.7" y1="373.8" x2="336" y2="375"><stop stop-color="#7c0058"/><stop offset="1" stop-color="#790058"/></linearGradient>
                    <linearGradient id="nws48" gradientUnits="userSpaceOnUse" x1="336" y1="375" x2="344.5" y2="373.7"><stop stop-color="#790058"/><stop offset="1" stop-color="#760058"/></linearGradient>
                    <linearGradient id="nws49" gradientUnits="userSpaceOnUse" x1="344.5" y1="373.7" x2="353.4" y2="370.3"><stop stop-color="#760058"/><stop offset="1" stop-color="#730059"/></linearGradient>
                    <linearGradient id="nws50" gradientUnits="userSpaceOnUse" x1="353.4" y1="370.3" x2="362.1" y2="365.5"><stop stop-color="#730059"/><stop offset="1" stop-color="#71005a"/></linearGradient>
                    <linearGradient id="nws51" gradientUnits="userSpaceOnUse" x1="362.1" y1="365.5" x2="370" y2="360"><stop stop-color="#71005a"/><stop offset="1" stop-color="#6f005b"/></linearGradient>
                    <linearGradient id="nws52" gradientUnits="userSpaceOnUse" x1="370" y1="360" x2="377" y2="353.8"><stop stop-color="#6f005b"/><stop offset="1" stop-color="#6c005c"/></linearGradient>
                    <linearGradient id="nws53" gradientUnits="userSpaceOnUse" x1="377" y1="353.8" x2="383.3" y2="346.6"><stop stop-color="#6c005c"/><stop offset="1" stop-color="#6b005c"/></linearGradient>
                    <linearGradient id="nws54" gradientUnits="userSpaceOnUse" x1="383.3" y1="346.6" x2="389" y2="338.6"><stop stop-color="#6b005c"/><stop offset="1" stop-color="#69005d"/></linearGradient>
                    <linearGradient id="nws55" gradientUnits="userSpaceOnUse" x1="389" y1="338.6" x2="394" y2="330"><stop stop-color="#69005d"/><stop offset="1" stop-color="#67005e"/></linearGradient>
                    <linearGradient id="nws56" gradientUnits="userSpaceOnUse" x1="394" y1="330" x2="398.1" y2="320.8"><stop stop-color="#67005e"/><stop offset="1" stop-color="#660060"/></linearGradient>
                    <linearGradient id="nws57" gradientUnits="userSpaceOnUse" x1="398.1" y1="320.8" x2="401.5" y2="310.9"><stop stop-color="#660060"/><stop offset="1" stop-color="#630061"/></linearGradient>
                    <linearGradient id="nws58" gradientUnits="userSpaceOnUse" x1="401.5" y1="310.9" x2="404.4" y2="300.6"><stop stop-color="#630061"/><stop offset="1" stop-color="#610062"/></linearGradient>
                    <linearGradient id="nws59" gradientUnits="userSpaceOnUse" x1="404.4" y1="300.6" x2="407" y2="290"><stop stop-color="#610062"/><stop offset="1" stop-color="#5f0064"/></linearGradient>
                    <linearGradient id="nws60" gradientUnits="userSpaceOnUse" x1="407" y1="290" x2="409.6" y2="279.1"><stop stop-color="#5f0064"/><stop offset="1" stop-color="#5d0066"/></linearGradient>
                    <linearGradient id="nws61" gradientUnits="userSpaceOnUse" x1="409.6" y1="279.1" x2="411.9" y2="267.8"><stop stop-color="#5d0066"/><stop offset="1" stop-color="#5a0067"/></linearGradient>
                    <linearGradient id="nws62" gradientUnits="userSpaceOnUse" x1="411.9" y1="267.8" x2="413.8" y2="256.4"><stop stop-color="#5a0067"/><stop offset="1" stop-color="#580069"/></linearGradient>
                    <linearGradient id="nws63" gradientUnits="userSpaceOnUse" x1="413.8" y1="256.4" x2="415" y2="245"><stop stop-color="#580069"/><stop offset="1" stop-color="#56006b"/></linearGradient>
                    <linearGradient id="nws64" gradientUnits="userSpaceOnUse" x1="415" y1="245" x2="415.5" y2="233.6"><stop stop-color="#56006b"/><stop offset="1" stop-color="#54006c"/></linearGradient>
                    <linearGradient id="nws65" gradientUnits="userSpaceOnUse" x1="415.5" y1="233.6" x2="415.3" y2="222.2"><stop stop-color="#54006c"/><stop offset="1" stop-color="#50006e"/></linearGradient>
                    <linearGradient id="nws66" gradientUnits="userSpaceOnUse" x1="415.3" y1="222.2" x2="414.7" y2="210.9"><stop stop-color="#50006e"/><stop offset="1" stop-color="#4d006f"/></linearGradient>
                    <linearGradient id="nws67" gradientUnits="userSpaceOnUse" x1="414.7" y1="210.9" x2="414" y2="200"><stop stop-color="#4d006f"/><stop offset="1" stop-color="#4c0070"/></linearGradient>
                    <linearGradient id="nws68" gradientUnits="userSpaceOnUse" x1="414" y1="200" x2="413.5" y2="189.6"><stop stop-color="#4c0070"/><stop offset="1" stop-color="#4a0071"/></linearGradient>
                    <linearGradient id="nws69" gradientUnits="userSpaceOnUse" x1="413.5" y1="189.6" x2="413.1" y2="179.4"><stop stop-color="#4a0071"/><stop offset="1" stop-color="#490072"/></linearGradient>
                    <linearGradient id="nws70" gradientUnits="userSpaceOnUse" x1="413.1" y1="179.4" x2="412.1" y2="169.6"><stop stop-color="#490072"/><stop offset="1" stop-color="#470072"/></linearGradient>
                    <linearGradient id="nws71" gradientUnits="userSpaceOnUse" x1="412.1" y1="169.6" x2="410" y2="160"><stop stop-color="#470072"/><stop offset="1" stop-color="#460073"/></linearGradient>
                    <linearGradient id="nws72" gradientUnits="userSpaceOnUse" x1="410" y1="160" x2="406.8" y2="150.3"><stop stop-color="#460073"/><stop offset="1" stop-color="#440074"/></linearGradient>
                    <linearGradient id="nws73" gradientUnits="userSpaceOnUse" x1="406.8" y1="150.3" x2="402.6" y2="140.8"><stop stop-color="#440074"/><stop offset="1" stop-color="#430075"/></linearGradient>
                    <linearGradient id="nws74" gradientUnits="userSpaceOnUse" x1="402.6" y1="140.8" x2="397.7" y2="131.8"><stop stop-color="#430075"/><stop offset="1" stop-color="#410076"/></linearGradient>
                    <linearGradient id="nws75" gradientUnits="userSpaceOnUse" x1="397.7" y1="131.8" x2="392" y2="124"><stop stop-color="#410076"/><stop offset="1" stop-color="#3f0077"/></linearGradient>
                    <linearGradient id="nws76" gradientUnits="userSpaceOnUse" x1="392" y1="124" x2="385.4" y2="117.6"><stop stop-color="#3f0077"/><stop offset="1" stop-color="#3d0078"/></linearGradient>
                    <linearGradient id="nws77" gradientUnits="userSpaceOnUse" x1="385.4" y1="117.6" x2="377.9" y2="112.2"><stop stop-color="#3d0078"/><stop offset="1" stop-color="#3b0079"/></linearGradient>
                    <linearGradient id="nws78" gradientUnits="userSpaceOnUse" x1="377.9" y1="112.2" x2="369.9" y2="107.8"><stop stop-color="#3b0079"/><stop offset="1" stop-color="#38007a"/></linearGradient>
                    <linearGradient id="nws79" gradientUnits="userSpaceOnUse" x1="369.9" y1="107.8" x2="362" y2="104"><stop stop-color="#38007a"/><stop offset="1" stop-color="#36007b"/></linearGradient>
                    <linearGradient id="nws80" gradientUnits="userSpaceOnUse" x1="362" y1="104" x2="354.1" y2="101"><stop stop-color="#36007b"/><stop offset="1" stop-color="#33007d"/></linearGradient>
                    <linearGradient id="nws81" gradientUnits="userSpaceOnUse" x1="354.1" y1="101" x2="346" y2="98.8"><stop stop-color="#33007d"/><stop offset="1" stop-color="#30007e"/></linearGradient>
                    <linearGradient id="nws82" gradientUnits="userSpaceOnUse" x1="346" y1="98.8" x2="337.9" y2="97.2"><stop stop-color="#30007e"/><stop offset="1" stop-color="#2e007f"/></linearGradient>
                    <linearGradient id="nws83" gradientUnits="userSpaceOnUse" x1="337.9" y1="97.2" x2="330" y2="96"><stop stop-color="#2e007f"/><stop offset="1" stop-color="#2c0081"/></linearGradient>
                    <linearGradient id="nws84" gradientUnits="userSpaceOnUse" x1="330" y1="96" x2="323.1" y2="95.1"><stop stop-color="#2c0081"/><stop offset="1" stop-color="#2a0081"/></linearGradient>
                    <linearGradient id="nws85" gradientUnits="userSpaceOnUse" x1="323.1" y1="95.1" x2="316.8" y2="94.6"><stop stop-color="#2a0081"/><stop offset="1" stop-color="#280082"/></linearGradient>
                    <linearGradient id="nws86" gradientUnits="userSpaceOnUse" x1="316.8" y1="94.6" x2="309.6" y2="94.6"><stop stop-color="#280082"/><stop offset="1" stop-color="#260083"/></linearGradient>
                    <linearGradient id="nws87" gradientUnits="userSpaceOnUse" x1="309.6" y1="94.6" x2="300" y2="95"><stop stop-color="#260083"/><stop offset="1" stop-color="#230084"/></linearGradient>
                    <linearGradient id="nws88" gradientUnits="userSpaceOnUse" x1="300" y1="95" x2="287.1" y2="95.7"><stop stop-color="#230084"/><stop offset="1" stop-color="#1f0087"/></linearGradient>
                    <linearGradient id="nws89" gradientUnits="userSpaceOnUse" x1="287.1" y1="95.7" x2="271.9" y2="96.8"><stop stop-color="#1f0087"/><stop offset="1" stop-color="#1b0089"/></linearGradient>
                    <linearGradient id="nws90" gradientUnits="userSpaceOnUse" x1="271.9" y1="96.8" x2="255.7" y2="98.4"><stop stop-color="#1b0089"/><stop offset="1" stop-color="#16008b"/></linearGradient>
                    <linearGradient id="nws91" gradientUnits="userSpaceOnUse" x1="255.7" y1="98.4" x2="240" y2="101"><stop stop-color="#16008b"/><stop offset="1" stop-color="#11008e"/></linearGradient>
                    <linearGradient id="nws92" gradientUnits="userSpaceOnUse" x1="240" y1="101" x2="225" y2="104.6"><stop stop-color="#11008e"/><stop offset="1" stop-color="#0d0090"/></linearGradient>
                    <linearGradient id="nws93" gradientUnits="userSpaceOnUse" x1="225" y1="104.6" x2="210" y2="109.2"><stop stop-color="#0d0090"/><stop offset="1" stop-color="#090092"/></linearGradient>
                    <linearGradient id="nws94" gradientUnits="userSpaceOnUse" x1="210" y1="109.2" x2="195" y2="114.4"><stop stop-color="#090092"/><stop offset="1" stop-color="#060093"/></linearGradient>
                    <linearGradient id="nws95" gradientUnits="userSpaceOnUse" x1="195" y1="114.4" x2="180" y2="120"><stop stop-color="#060093"/><stop offset="1" stop-color="#030095"/></linearGradient>
                    <linearGradient id="nws96" gradientUnits="userSpaceOnUse" x1="180" y1="120" x2="165" y2="125.9"><stop stop-color="#030095"/><stop offset="1" stop-color="#010096"/></linearGradient>
                    <linearGradient id="nws97" gradientUnits="userSpaceOnUse" x1="165" y1="125.9" x2="150" y2="132.3"><stop stop-color="#010096"/><stop offset="1" stop-color="#000096"/></linearGradient>
                    <linearGradient id="nws98" gradientUnits="userSpaceOnUse" x1="150" y1="132.3" x2="135" y2="139.3"><stop stop-color="#000096"/><stop offset="1" stop-color="#000096"/></linearGradient>
                    <linearGradient id="nws99" gradientUnits="userSpaceOnUse" x1="135" y1="139.3" x2="120" y2="147"><stop stop-color="#000096"/><stop offset="1" stop-color="#000096"/></linearGradient>
                    <linearGradient id="nws100" gradientUnits="userSpaceOnUse" x1="120" y1="147" x2="105" y2="155.5"><stop stop-color="#000096"/><stop offset="1" stop-color="#000096"/></linearGradient>
                    <linearGradient id="nws101" gradientUnits="userSpaceOnUse" x1="105" y1="155.5" x2="90" y2="164.7"><stop stop-color="#000096"/><stop offset="1" stop-color="#000096"/></linearGradient>
                    <linearGradient id="nws102" gradientUnits="userSpaceOnUse" x1="90" y1="164.7" x2="75" y2="174.5"><stop stop-color="#000096"/><stop offset="1" stop-color="#000096"/></linearGradient>
                    <linearGradient id="nws103" gradientUnits="userSpaceOnUse" x1="75" y1="174.5" x2="60" y2="185"><stop stop-color="#000096"/><stop offset="1" stop-color="#000096"/></linearGradient>
                    <linearGradient id="nws104" gradientUnits="userSpaceOnUse" x1="60" y1="185" x2="45.2" y2="196"><stop stop-color="#000096"/><stop offset="1" stop-color="#000096"/></linearGradient>
                    <linearGradient id="nws105" gradientUnits="userSpaceOnUse" x1="45.2" y1="196" x2="30.6" y2="207.7"><stop stop-color="#000096"/><stop offset="1" stop-color="#000096"/></linearGradient>
                    <linearGradient id="nws106" gradientUnits="userSpaceOnUse" x1="30.6" y1="207.7" x2="15.7" y2="220"><stop stop-color="#000096"/><stop offset="1" stop-color="#000096"/></linearGradient>
                    <linearGradient id="nws107" gradientUnits="userSpaceOnUse" x1="15.7" y1="220" x2="0" y2="233"><stop stop-color="#000096"/><stop offset="1" stop-color="#000096"/></linearGradient>
                    <linearGradient id="nws108" gradientUnits="userSpaceOnUse" x1="0" y1="233" x2="-18.4" y2="248.4"><stop stop-color="#000096"/><stop offset="1" stop-color="#000096"/></linearGradient>
                    <linearGradient id="nws109" gradientUnits="userSpaceOnUse" x1="-18.4" y1="248.4" x2="-38.8" y2="265.5"><stop stop-color="#000096"/><stop offset="1" stop-color="#000096"/></linearGradient>
                    <linearGradient id="nws110" gradientUnits="userSpaceOnUse" x1="-38.8" y1="265.5" x2="-57.2" y2="281.1"><stop stop-color="#000096"/><stop offset="1" stop-color="#000096"/></linearGradient>
                    <linearGradient id="nws111" gradientUnits="userSpaceOnUse" x1="-57.2" y1="281.1" x2="-70" y2="292"><stop stop-color="#000096"/><stop offset="1" stop-color="#000096"/></linearGradient>
                  </defs>
                  <g transform="translate(-287 -90)">
                    <g mask="url(#nws-all)">
                      <path d="M-57.2 281.1C-62.6 285.7 -67.1 289.5 -70 292L-72.3 293.9" stroke="url(#nws111)" pathLength="1" style="--d:1.582s;--t:0.018s"/>
                      <path d="M-38.8 265.5C-45.4 271.1 -51.8 276.5 -57.2 281.1L-59.5 283.1" stroke="url(#nws110)" pathLength="1" style="--d:1.557s;--t:0.025s"/>
                      <path d="M-18.4 248.4C-25.1 254 -32.1 259.9 -38.8 265.5L-41 267.4" stroke="url(#nws109)" pathLength="1" style="--d:1.529s;--t:0.028s"/>
                      <path d="M0 233C-5.4 237.5 -11.8 242.8 -18.4 248.4L-20.7 250.3" stroke="url(#nws108)" pathLength="1" style="--d:1.504s;--t:0.025s"/>
                      <path d="M15.7 220C10.6 224.2 5.4 228.5 0 233L-2.3 234.9" stroke="url(#nws107)" pathLength="1" style="--d:1.482s;--t:0.021s"/>
                      <path d="M30.6 207.7C25.7 211.7 20.8 215.8 15.7 220L13.4 221.9" stroke="url(#nws106)" pathLength="1" style="--d:1.462s;--t:0.020s"/>
                      <path d="M45.2 196C40.4 199.8 35.5 203.7 30.6 207.7L28.3 209.6" stroke="url(#nws105)" pathLength="1" style="--d:1.442s;--t:0.020s"/>
                      <path d="M60 185C55 188.6 50.1 192.3 45.2 196L42.9 197.9" stroke="url(#nws104)" pathLength="1" style="--d:1.423s;--t:0.019s"/>
                      <path d="M75 174.5C70 177.9 65 181.4 60 185L57.6 186.7" stroke="url(#nws103)" pathLength="1" style="--d:1.403s;--t:0.019s"/>
                      <path d="M90 164.7C85 167.9 80 171.2 75 174.5L72.5 176.2" stroke="url(#nws102)" pathLength="1" style="--d:1.384s;--t:0.019s"/>
                      <path d="M105 155.5C100 158.4 95 161.5 90 164.7L87.5 166.3" stroke="url(#nws101)" pathLength="1" style="--d:1.366s;--t:0.019s"/>
                      <path d="M120 147C115 149.7 110 152.5 105 155.5L102.4 157" stroke="url(#nws100)" pathLength="1" style="--d:1.348s;--t:0.018s"/>
                      <path d="M135 139.3C130 141.7 125 144.3 120 147L117.4 148.4" stroke="url(#nws99)" pathLength="1" style="--d:1.330s;--t:0.018s"/>
                      <path d="M150 132.3C145 134.5 140 136.8 135 139.3L132.3 140.6" stroke="url(#nws98)" pathLength="1" style="--d:1.313s;--t:0.017s"/>
                      <path d="M165 125.9C160 128 155 130.1 150 132.3L147.3 133.5" stroke="url(#nws97)" pathLength="1" style="--d:1.295s;--t:0.017s"/>
                      <path d="M180 120C175 121.9 170 123.9 165 125.9L162.2 127.1" stroke="url(#nws96)" pathLength="1" style="--d:1.278s;--t:0.017s"/>
                      <path d="M195 114.4C190 116.2 185 118.1 180 120L177.2 121.1" stroke="url(#nws95)" pathLength="1" style="--d:1.262s;--t:0.017s"/>
                      <path d="M210 109.2C205 110.8 200 112.6 195 114.4L192.2 115.4" stroke="url(#nws94)" pathLength="1" style="--d:1.245s;--t:0.017s"/>
                      <path d="M225 104.6C220 106 215 107.6 210 109.2L207.1 110.1" stroke="url(#nws93)" pathLength="1" style="--d:1.228s;--t:0.017s"/>
                      <path d="M240 101C235 102 230 103.3 225 104.6L222.1 105.4" stroke="url(#nws92)" pathLength="1" style="--d:1.212s;--t:0.016s"/>
                      <path d="M255.7 98.4C250.3 99.1 245 100 240 101L237.1 101.6" stroke="url(#nws91)" pathLength="1" style="--d:1.195s;--t:0.017s"/>
                      <path d="M271.9 96.8C266.6 97.2 261.1 97.7 255.7 98.4L252.7 98.8" stroke="url(#nws90)" pathLength="1" style="--d:1.178s;--t:0.017s"/>
                      <path d="M287.1 95.7C282.3 96 277.2 96.3 271.9 96.8L268.9 97" stroke="url(#nws89)" pathLength="1" style="--d:1.162s;--t:0.016s"/>
                      <path d="M300 95C296.2 95.2 291.9 95.4 287.1 95.7L284.1 95.9" stroke="url(#nws88)" pathLength="1" style="--d:1.148s;--t:0.014s"/>
                      <path d="M309.6 94.6C306.9 94.7 303.8 94.8 300 95L297 95.2" stroke="url(#nws87)" pathLength="1" style="--d:1.138s;--t:0.010s"/>
                      <path d="M316.8 94.6C314.6 94.5 312.3 94.5 309.6 94.6L306.6 94.7" stroke="url(#nws86)" pathLength="1" style="--d:1.131s;--t:0.008s"/>
                      <path d="M323.1 95.1C320.9 94.9 318.9 94.7 316.8 94.6L313.8 94.5" stroke="url(#nws85)" pathLength="1" style="--d:1.124s;--t:0.007s"/>
                      <path d="M330 96C327.4 95.6 325.2 95.3 323.1 95.1L320.1 94.8" stroke="url(#nws84)" pathLength="1" style="--d:1.117s;--t:0.007s"/>
                      <path d="M337.9 97.2C335.2 96.8 332.6 96.4 330 96L327 95.6" stroke="url(#nws83)" pathLength="1" style="--d:1.108s;--t:0.008s"/>
                      <path d="M346 98.8C343.3 98.2 340.6 97.7 337.9 97.2L334.9 96.7" stroke="url(#nws82)" pathLength="1" style="--d:1.100s;--t:0.009s"/>
                      <path d="M354.1 101C351.4 100.1 348.7 99.4 346 98.8L343.1 98.1" stroke="url(#nws81)" pathLength="1" style="--d:1.091s;--t:0.009s"/>
                      <path d="M362 104C359.4 102.8 356.8 101.8 354.1 101L351.2 100.1" stroke="url(#nws80)" pathLength="1" style="--d:1.082s;--t:0.009s"/>
                      <path d="M369.9 107.8C367.2 106.4 364.6 105.2 362 104L359.3 102.8" stroke="url(#nws79)" pathLength="1" style="--d:1.073s;--t:0.009s"/>
                      <path d="M377.9 112.2C375.3 110.6 372.6 109.1 369.9 107.8L367.3 106.4" stroke="url(#nws78)" pathLength="1" style="--d:1.063s;--t:0.010s"/>
                      <path d="M385.4 117.6C383 115.6 380.5 113.9 377.9 112.2L375.3 110.7" stroke="url(#nws77)" pathLength="1" style="--d:1.053s;--t:0.010s"/>
                      <path d="M392 124C390 121.7 387.8 119.5 385.4 117.6L383.1 115.7" stroke="url(#nws76)" pathLength="1" style="--d:1.044s;--t:0.010s"/>
                      <path d="M397.7 131.8C395.9 129 394 126.3 392 124L390 121.7" stroke="url(#nws75)" pathLength="1" style="--d:1.033s;--t:0.010s"/>
                      <path d="M402.6 140.8C401.1 137.6 399.4 134.6 397.7 131.8L396.1 129.2" stroke="url(#nws74)" pathLength="1" style="--d:1.023s;--t:0.011s"/>
                      <path d="M406.8 150.3C405.5 147.1 404.1 143.9 402.6 140.8L401.3 138.1" stroke="url(#nws73)" pathLength="1" style="--d:1.012s;--t:0.011s"/>
                      <path d="M410 160C409.1 156.8 408 153.6 406.8 150.3L405.7 147.5" stroke="url(#nws72)" pathLength="1" style="--d:1.001s;--t:0.011s"/>
                      <path d="M412.1 169.6C411.6 166.4 410.9 163.2 410 160L409.2 157.1" stroke="url(#nws71)" pathLength="1" style="--d:0.991s;--t:0.010s"/>
                      <path d="M413.1 179.4C412.8 176.1 412.5 172.8 412.1 169.6L411.6 166.6" stroke="url(#nws70)" pathLength="1" style="--d:0.980s;--t:0.010s"/>
                      <path d="M413.5 189.6C413.4 186.1 413.3 182.8 413.1 179.4L412.9 176.4" stroke="url(#nws69)" pathLength="1" style="--d:0.970s;--t:0.011s"/>
                      <path d="M414 200C413.8 196.5 413.7 193 413.5 189.6L413.4 186.6" stroke="url(#nws68)" pathLength="1" style="--d:0.959s;--t:0.011s"/>
                      <path d="M414.7 210.9C414.4 207.2 414.2 203.5 414 200L413.8 197" stroke="url(#nws67)" pathLength="1" style="--d:0.947s;--t:0.012s"/>
                      <path d="M415.3 222.2C415.1 218.4 414.9 214.6 414.7 210.9L414.5 207.9" stroke="url(#nws66)" pathLength="1" style="--d:0.935s;--t:0.012s"/>
                      <path d="M415.5 233.6C415.5 229.8 415.4 226 415.3 222.2L415.1 219.2" stroke="url(#nws65)" pathLength="1" style="--d:0.923s;--t:0.012s"/>
                      <path d="M415 245C415.3 241.2 415.4 237.4 415.5 233.6L415.5 230.6" stroke="url(#nws64)" pathLength="1" style="--d:0.911s;--t:0.012s"/>
                      <path d="M413.8 256.4C414.3 252.6 414.7 248.8 415 245L415.2 242" stroke="url(#nws63)" pathLength="1" style="--d:0.899s;--t:0.012s"/>
                      <path d="M411.9 267.8C412.6 264 413.2 260.2 413.8 256.4L414.2 253.4" stroke="url(#nws62)" pathLength="1" style="--d:0.887s;--t:0.012s"/>
                      <path d="M409.6 279.1C410.4 275.4 411.2 271.6 411.9 267.8L412.4 264.9" stroke="url(#nws61)" pathLength="1" style="--d:0.875s;--t:0.012s"/>
                      <path d="M407 290C407.9 286.5 408.7 282.8 409.6 279.1L410.2 276.2" stroke="url(#nws60)" pathLength="1" style="--d:0.863s;--t:0.012s"/>
                      <path d="M404.4 300.6C405.3 297.1 406.1 293.5 407 290L407.7 287.1" stroke="url(#nws59)" pathLength="1" style="--d:0.851s;--t:0.011s"/>
                      <path d="M401.5 310.9C402.5 307.6 403.5 304.1 404.4 300.6L405.1 297.7" stroke="url(#nws58)" pathLength="1" style="--d:0.840s;--t:0.011s"/>
                      <path d="M398.1 320.8C399.4 317.6 400.5 314.3 401.5 310.9L402.4 308.1" stroke="url(#nws57)" pathLength="1" style="--d:0.829s;--t:0.011s"/>
                      <path d="M394 330C395.5 327.1 396.9 324 398.1 320.8L399.2 318" stroke="url(#nws56)" pathLength="1" style="--d:0.818s;--t:0.011s"/>
                      <path d="M389 338.6C390.8 335.8 392.5 332.9 394 330L395.4 327.3" stroke="url(#nws55)" pathLength="1" style="--d:0.808s;--t:0.010s"/>
                      <path d="M383.3 346.6C385.3 344 387.2 341.3 389 338.6L390.6 336" stroke="url(#nws54)" pathLength="1" style="--d:0.798s;--t:0.010s"/>
                      <path d="M377 353.8C379.2 351.5 381.3 349.1 383.3 346.6L385.2 344.2" stroke="url(#nws53)" pathLength="1" style="--d:0.788s;--t:0.010s"/>
                      <path d="M370 360C372.4 358.1 374.7 356 377 353.8L379.1 351.7" stroke="url(#nws52)" pathLength="1" style="--d:0.778s;--t:0.010s"/>
                      <path d="M362.1 365.5C364.9 363.8 367.6 361.9 370 360L372.4 358.2" stroke="url(#nws51)" pathLength="1" style="--d:0.768s;--t:0.010s"/>
                      <path d="M353.4 370.3C356.4 368.9 359.3 367.3 362.1 365.5L364.7 363.9" stroke="url(#nws50)" pathLength="1" style="--d:0.757s;--t:0.011s"/>
                      <path d="M344.5 373.7C347.4 372.9 350.4 371.7 353.4 370.3L356.1 369" stroke="url(#nws49)" pathLength="1" style="--d:0.747s;--t:0.010s"/>
                      <path d="M336 375C338.7 375 341.5 374.5 344.5 373.7L347.3 372.9" stroke="url(#nws48)" pathLength="1" style="--d:0.738s;--t:0.009s"/>
                      <path d="M327.7 373.8C330.5 374.6 333.3 375 336 375L339 375" stroke="url(#nws47)" pathLength="1" style="--d:0.729s;--t:0.009s"/>
                      <path d="M319.4 370.6C322.1 372 324.9 373.1 327.7 373.8L330.6 374.6" stroke="url(#nws46)" pathLength="1" style="--d:0.720s;--t:0.009s"/>
                      <path d="M311.9 365.9C314.2 367.7 316.8 369.3 319.4 370.6L322.1 372" stroke="url(#nws45)" pathLength="1" style="--d:0.710s;--t:0.009s"/>
                      <path d="M306 360C307.6 362.1 309.6 364.1 311.9 365.9L314.3 367.7" stroke="url(#nws44)" pathLength="1" style="--d:0.702s;--t:0.009s"/>
                      <path d="M301.8 352.8C303 355.5 304.4 357.9 306 360L307.8 362.4" stroke="url(#nws43)" pathLength="1" style="--d:0.693s;--t:0.009s"/>
                      <path d="M298.9 344.1C299.7 347.1 300.6 350.1 301.8 352.8L303 355.5" stroke="url(#nws42)" pathLength="1" style="--d:0.683s;--t:0.010s"/>
                      <path d="M297.4 334.6C297.7 337.8 298.2 341 298.9 344.1L299.6 347" stroke="url(#nws41)" pathLength="1" style="--d:0.673s;--t:0.010s"/>
                      <path d="M297 325C296.9 328.1 297 331.4 297.4 334.6L297.6 337.6" stroke="url(#nws40)" pathLength="1" style="--d:0.663s;--t:0.010s"/>
                      <path d="M297.9 315.4C297.4 318.6 297.1 321.9 297 325L296.9 328" stroke="url(#nws39)" pathLength="1" style="--d:0.653s;--t:0.010s"/>
                      <path d="M300.2 305.3C299.2 308.7 298.5 312.1 297.9 315.4L297.5 318.3" stroke="url(#nws38)" pathLength="1" style="--d:0.642s;--t:0.011s"/>
                      <path d="M303.6 295.1C302.3 298.5 301.1 301.9 300.2 305.3L299.4 308.2" stroke="url(#nws37)" pathLength="1" style="--d:0.630s;--t:0.011s"/>
                      <path d="M308 285C306.4 288.3 304.9 291.7 303.6 295.1L302.5 297.9" stroke="url(#nws36)" pathLength="1" style="--d:0.619s;--t:0.012s"/>
                      <path d="M313.3 275C311.4 278.3 309.6 281.7 308 285L306.7 287.7" stroke="url(#nws35)" pathLength="1" style="--d:0.607s;--t:0.012s"/>
                      <path d="M319.6 265C317.3 268.3 315.2 271.7 313.3 275L311.8 277.6" stroke="url(#nws34)" pathLength="1" style="--d:0.594s;--t:0.012s"/>
                    </g>
                    <g mask="url(#nws-front)">
                      <path d="M297.4 334.6C297.7 337.8 298.2 341 298.9 344.1L299.6 347" stroke="url(#nws41)" pathLength="1" style="--d:0.673s;--t:0.010s"/>
                      <path d="M297 325C296.9 328.1 297 331.4 297.4 334.6L297.6 337.6" stroke="url(#nws40)" pathLength="1" style="--d:0.663s;--t:0.010s"/>
                      <path d="M297.9 315.4C297.4 318.6 297.1 321.9 297 325L296.9 328" stroke="url(#nws39)" pathLength="1" style="--d:0.653s;--t:0.010s"/>
                      <path d="M300.2 305.3C299.2 308.7 298.5 312.1 297.9 315.4L297.5 318.3" stroke="url(#nws38)" pathLength="1" style="--d:0.642s;--t:0.011s"/>
                      <path d="M303.6 295.1C302.3 298.5 301.1 301.9 300.2 305.3L299.4 308.2" stroke="url(#nws37)" pathLength="1" style="--d:0.630s;--t:0.011s"/>
                      <path d="M308 285C306.4 288.3 304.9 291.7 303.6 295.1L302.5 297.9" stroke="url(#nws36)" pathLength="1" style="--d:0.619s;--t:0.012s"/>
                      <path d="M313.3 275C311.4 278.3 309.6 281.7 308 285L306.7 287.7" stroke="url(#nws35)" pathLength="1" style="--d:0.607s;--t:0.012s"/>
                      <path d="M319.6 265C317.3 268.3 315.2 271.7 313.3 275L311.8 277.6" stroke="url(#nws34)" pathLength="1" style="--d:0.594s;--t:0.012s"/>
                      <path d="M327.1 255C324.4 258.3 321.9 261.7 319.6 265L317.9 267.5" stroke="url(#nws33)" pathLength="1" style="--d:0.581s;--t:0.013s"/>
                      <path d="M336 245C332.8 248.3 329.8 251.7 327.1 255L325.2 257.3" stroke="url(#nws32)" pathLength="1" style="--d:0.567s;--t:0.014s"/>
                      <path d="M346.5 235.2C342.7 238.4 339.2 241.7 336 245L333.9 247.2" stroke="url(#nws31)" pathLength="1" style="--d:0.552s;--t:0.015s"/>
                      <path d="M358.4 225.6C354.2 228.8 350.2 232 346.5 235.2L344.2 237.2" stroke="url(#nws30)" pathLength="1" style="--d:0.536s;--t:0.016s"/>
                      <path d="M371.3 215.6C366.9 219 362.5 222.3 358.4 225.6L356 227.4" stroke="url(#nws29)" pathLength="1" style="--d:0.519s;--t:0.017s"/>
                      <path d="M385 205C380.4 208.7 375.8 212.2 371.3 215.6L369 217.5" stroke="url(#nws28)" pathLength="1" style="--d:0.500s;--t:0.018s"/>
                      <path d="M399.9 192.9C394.7 197.2 389.6 201.3 385 205L382.7 206.9" stroke="url(#nws27)" pathLength="1" style="--d:0.480s;--t:0.020s"/>
                      <path d="M416.1 179.8C410.6 184.2 405.2 188.6 399.9 192.9L397.6 194.8" stroke="url(#nws26)" pathLength="1" style="--d:0.458s;--t:0.022s"/>
                      <path d="M432.2 167.1C427 171.1 421.5 175.4 416.1 179.8L413.7 181.7" stroke="url(#nws25)" pathLength="1" style="--d:0.437s;--t:0.022s"/>
                      <path d="M447 156C442.4 159.2 437.4 163 432.2 167.1L429.8 168.9" stroke="url(#nws24)" pathLength="1" style="--d:0.417s;--t:0.019s"/>
                      <path d="M460.1 147.2C455.9 149.8 451.6 152.8 447 156L444.6 157.7" stroke="url(#nws23)" pathLength="1" style="--d:0.401s;--t:0.017s"/>
                      <path d="M472.1 139.8C468.2 142 464.2 144.5 460.1 147.2L457.5 148.8" stroke="url(#nws22)" pathLength="1" style="--d:0.386s;--t:0.015s"/>
                      <path d="M483.5 133.2C479.7 135.3 475.9 137.5 472.1 139.8L469.5 141.3" stroke="url(#nws21)" pathLength="1" style="--d:0.372s;--t:0.014s"/>
                      <path d="M495 127C491.1 129.1 487.3 131.1 483.5 133.2L480.9 134.7" stroke="url(#nws20)" pathLength="1" style="--d:0.358s;--t:0.014s"/>
                      <path d="M506.1 121.3C502.5 123.1 498.9 124.9 495 127L492.4 128.4" stroke="url(#nws19)" pathLength="1" style="--d:0.345s;--t:0.013s"/>
                      <path d="M516.8 116.3C513.2 117.9 509.7 119.6 506.1 121.3L503.4 122.6" stroke="url(#nws18)" pathLength="1" style="--d:0.333s;--t:0.012s"/>
                      <path d="M527.8 111.4C523.9 113.1 520.3 114.7 516.8 116.3L514 117.6" stroke="url(#nws17)" pathLength="1" style="--d:0.320s;--t:0.013s"/>
                      <path d="M540 106C535.6 108 531.6 109.7 527.8 111.4L525 112.6" stroke="url(#nws16)" pathLength="1" style="--d:0.306s;--t:0.014s"/>
                      <path d="M553.9 99.7C549.1 101.9 544.4 104 540 106L537.3 107.2" stroke="url(#nws15)" pathLength="1" style="--d:0.290s;--t:0.016s"/>
                      <path d="M569.1 92.9C563.9 95.2 558.8 97.5 553.9 99.7L551.2 100.9" stroke="url(#nws14)" pathLength="1" style="--d:0.272s;--t:0.017s"/>
                      <path d="M584.6 86.2C579.5 88.4 574.2 90.7 569.1 92.9L566.3 94.2" stroke="url(#nws13)" pathLength="1" style="--d:0.254s;--t:0.018s"/>
                      <path d="M600 80C595 81.9 589.8 84 584.6 86.2L581.9 87.4" stroke="url(#nws12)" pathLength="1" style="--d:0.237s;--t:0.017s"/>
                      <path d="M614.6 74.6C609.8 76.3 605 78.1 600 80L597.2 81.1" stroke="url(#nws11)" pathLength="1" style="--d:0.220s;--t:0.016s"/>
                      <path d="M629.1 69.8C624.2 71.3 619.5 72.9 614.6 74.6L611.8 75.6" stroke="url(#nws10)" pathLength="1" style="--d:0.204s;--t:0.016s"/>
                      <path d="M643.9 65C638.8 66.6 633.9 68.2 629.1 69.8L626.2 70.7" stroke="url(#nws9)" pathLength="1" style="--d:0.188s;--t:0.016s"/>
                      <path d="M660 60C654.4 61.8 649.1 63.4 643.9 65L641.1 65.9" stroke="url(#nws8)" pathLength="1" style="--d:0.170s;--t:0.018s"/>
                      <path d="M677.6 54.7C671.5 56.5 665.6 58.2 660 60L657.1 60.9" stroke="url(#nws7)" pathLength="1" style="--d:0.151s;--t:0.019s"/>
                      <path d="M696.2 49.2C689.9 51.1 683.6 52.9 677.6 54.7L674.7 55.5" stroke="url(#nws6)" pathLength="1" style="--d:0.130s;--t:0.020s"/>
                      <path d="M715.5 43.7C709.1 45.6 702.6 47.4 696.2 49.2L693.4 50.1" stroke="url(#nws5)" pathLength="1" style="--d:0.109s;--t:0.021s"/>
                      <path d="M735 38C728.5 39.9 722 41.8 715.5 43.7L712.7 44.5" stroke="url(#nws4)" pathLength="1" style="--d:0.088s;--t:0.021s"/>
                      <path d="M756.5 31.6C748.9 33.9 741.5 36.1 735 38L732.1 38.9" stroke="url(#nws3)" pathLength="1" style="--d:0.064s;--t:0.024s"/>
                      <path d="M779.7 24.6C772.1 26.9 764.2 29.3 756.5 31.6L753.6 32.4" stroke="url(#nws2)" pathLength="1" style="--d:0.039s;--t:0.025s"/>
                      <path d="M800.5 18.4C794.4 20.2 787.2 22.4 779.7 24.6L776.8 25.5" stroke="url(#nws1)" pathLength="1" style="--d:0.016s;--t:0.023s"/>
                      <path d="M815 14C811.7 15 806.6 16.5 800.5 18.4L797.6 19.2" stroke="url(#nws0)" pathLength="1" style="--d:0.000s;--t:0.016s"/>
                    </g>
                  </g>
                </svg>
              </figure>
            </div>
          </div>
        </section>

        <!-- ═══════════════════════ News grid ═══════════════════════ -->
        <section class="inner-section news-archive" aria-labelledby="archiveTitle">
          <div class="shell-container">
            <h2 class="section-heading" id="archiveTitle" data-reveal>آخر الأخبار والفعاليات</h2>

            <ul class="news-grid" id="newsGrid" role="list">
              <li class="news-tile" data-page="1" style="--i: 0">
                <article>
                  <div class="news-tile__media">
                    <img src="../assets/images/news-thumb-01.jpg" alt="أحد مسؤولي الوطنية للتمويل يلقي كلمة على المنصة" width="340" height="230" />
                  </div>
                  <h3 class="news-tile__title"><a href="#" target="_blank" rel="noopener noreferrer">الوطنية للتمويل تحتفي بعام من الإنجاز والنمو</a></h3>
                  <p class="news-tile__excerpt">مواصلةً لإرثها في التميّز، تختتم الوطنية للتمويل، شركة التمويل الرائدة في سلطنة عُمان، العام بنتائج قياسية في محافظ الأفراد والشركات.</p>
                  <span class="news-tile__more" aria-hidden="true">اقرأ المزيد<i class="bi bi-arrow-right"></i></span>
                </article>
              </li>
              <li class="news-tile" data-page="1" style="--i: 1">
                <article>
                  <div class="news-tile__media">
                    <img src="../assets/images/news-thumb-02.jpg" alt="أحد مسؤولي الوطنية للتمويل جالساً أمام شعار الشركة" width="340" height="230" />
                  </div>
                  <h3 class="news-tile__title"><a href="#" target="_blank" rel="noopener noreferrer">الوطنية للتمويل تحتفي بعام من الإنجاز والنمو</a></h3>
                  <p class="news-tile__excerpt">مواصلةً لإرثها في التميّز، تختتم الوطنية للتمويل، شركة التمويل الرائدة في سلطنة عُمان، العام بنتائج قياسية في محافظ الأفراد والشركات.</p>
                  <span class="news-tile__more" aria-hidden="true">اقرأ المزيد<i class="bi bi-arrow-right"></i></span>
                </article>
              </li>
              <li class="news-tile" data-page="1" style="--i: 2">
                <article>
                  <div class="news-tile__media">
                    <img src="../assets/images/news-thumb-03.jpg" alt="متطوعو الوطنية للتمويل بالسترات التي تحمل شعار الشركة مع الموظفين" width="340" height="230" />
                  </div>
                  <h3 class="news-tile__title"><a href="#" target="_blank" rel="noopener noreferrer">الوطنية للتمويل تحتفي بعام من الإنجاز والنمو</a></h3>
                  <p class="news-tile__excerpt">مواصلةً لإرثها في التميّز، تختتم الوطنية للتمويل، شركة التمويل الرائدة في سلطنة عُمان، العام بنتائج قياسية في محافظ الأفراد والشركات.</p>
                  <span class="news-tile__more" aria-hidden="true">اقرأ المزيد<i class="bi bi-arrow-right"></i></span>
                </article>
              </li>
              <li class="news-tile" data-page="1" style="--i: 3">
                <article>
                  <div class="news-tile__media">
                    <img src="../assets/images/news-thumb-04.jpg" alt="متطوعو الوطنية للتمويل بالسترات التي تحمل شعار الشركة عند مدخل إحدى الفعاليات" width="340" height="230" />
                  </div>
                  <h3 class="news-tile__title"><a href="#" target="_blank" rel="noopener noreferrer">الوطنية للتمويل تحتفي بعام من الإنجاز والنمو</a></h3>
                  <p class="news-tile__excerpt">مواصلةً لإرثها في التميّز، تختتم الوطنية للتمويل، شركة التمويل الرائدة في سلطنة عُمان، العام بنتائج قياسية في محافظ الأفراد والشركات.</p>
                  <span class="news-tile__more" aria-hidden="true">اقرأ المزيد<i class="bi bi-arrow-right"></i></span>
                </article>
              </li>
              <li class="news-tile" data-page="1" style="--i: 4">
                <article>
                  <div class="news-tile__media">
                    <img src="../assets/images/news-thumb-05.jpg" alt="قيادات الوطنية للتمويل تتسلم جائزة على المنصة" width="340" height="230" loading="lazy" />
                  </div>
                  <h3 class="news-tile__title"><a href="#" target="_blank" rel="noopener noreferrer">الوطنية للتمويل تحتفي بعام من الإنجاز والنمو</a></h3>
                  <p class="news-tile__excerpt">مواصلةً لإرثها في التميّز، تختتم الوطنية للتمويل، شركة التمويل الرائدة في سلطنة عُمان، العام بنتائج قياسية في محافظ الأفراد والشركات.</p>
                  <span class="news-tile__more" aria-hidden="true">اقرأ المزيد<i class="bi bi-arrow-right"></i></span>
                </article>
              </li>
              <li class="news-tile" data-page="1" style="--i: 5">
                <article>
                  <div class="news-tile__media">
                    <img src="../assets/images/news-thumb-06.jpg" alt="سيدتان تحملان الاتفاقيات الموقعة خلال توقيع شراكة" width="340" height="230" loading="lazy" />
                  </div>
                  <h3 class="news-tile__title"><a href="#" target="_blank" rel="noopener noreferrer">الوطنية للتمويل تحتفي بعام من الإنجاز والنمو</a></h3>
                  <p class="news-tile__excerpt">مواصلةً لإرثها في التميّز، تختتم الوطنية للتمويل، شركة التمويل الرائدة في سلطنة عُمان، العام بنتائج قياسية في محافظ الأفراد والشركات.</p>
                  <span class="news-tile__more" aria-hidden="true">اقرأ المزيد<i class="bi bi-arrow-right"></i></span>
                </article>
              </li>
              <li class="news-tile" data-page="1" style="--i: 6">
                <article>
                  <div class="news-tile__media">
                    <img src="../assets/images/news-thumb-07.jpg" alt="صورة جماعية لموظفي الوطنية للتمويل في فعالية داخلية" width="340" height="230" loading="lazy" />
                  </div>
                  <h3 class="news-tile__title"><a href="#" target="_blank" rel="noopener noreferrer">الوطنية للتمويل تحتفي بعام من الإنجاز والنمو</a></h3>
                  <p class="news-tile__excerpt">مواصلةً لإرثها في التميّز، تختتم الوطنية للتمويل، شركة التمويل الرائدة في سلطنة عُمان، العام بنتائج قياسية في محافظ الأفراد والشركات.</p>
                  <span class="news-tile__more" aria-hidden="true">اقرأ المزيد<i class="bi bi-arrow-right"></i></span>
                </article>
              </li>
              <li class="news-tile" data-page="1" style="--i: 7">
                <article>
                  <div class="news-tile__media">
                    <img src="../assets/images/news-thumb-08.jpg" alt="متحدث من الوطنية للتمويل يقدّم عرضاً في مؤتمر" width="340" height="230" loading="lazy" />
                  </div>
                  <h3 class="news-tile__title"><a href="#" target="_blank" rel="noopener noreferrer">الوطنية للتمويل تحتفي بعام من الإنجاز والنمو</a></h3>
                  <p class="news-tile__excerpt">مواصلةً لإرثها في التميّز، تختتم الوطنية للتمويل، شركة التمويل الرائدة في سلطنة عُمان، العام بنتائج قياسية في محافظ الأفراد والشركات.</p>
                  <span class="news-tile__more" aria-hidden="true">اقرأ المزيد<i class="bi bi-arrow-right"></i></span>
                </article>
              </li>
              <li class="news-tile" data-page="2" style="--i: 0" hidden>
                <article>
                  <div class="news-tile__media">
                    <img src="../assets/images/news-thumb-01.jpg" alt="أحد مسؤولي الوطنية للتمويل يلقي كلمة على المنصة" width="340" height="230" loading="lazy" />
                  </div>
                  <h3 class="news-tile__title"><a href="#" target="_blank" rel="noopener noreferrer">الوطنية للتمويل تحتفي بعام من الإنجاز والنمو</a></h3>
                  <p class="news-tile__excerpt">مواصلةً لإرثها في التميّز، تختتم الوطنية للتمويل، شركة التمويل الرائدة في سلطنة عُمان، العام بنتائج قياسية في محافظ الأفراد والشركات.</p>
                  <span class="news-tile__more" aria-hidden="true">اقرأ المزيد<i class="bi bi-arrow-right"></i></span>
                </article>
              </li>
              <li class="news-tile" data-page="2" style="--i: 1" hidden>
                <article>
                  <div class="news-tile__media">
                    <img src="../assets/images/news-thumb-04.jpg" alt="متطوعو الوطنية للتمويل بالسترات التي تحمل شعار الشركة عند مدخل إحدى الفعاليات" width="340" height="230" loading="lazy" />
                  </div>
                  <h3 class="news-tile__title"><a href="#" target="_blank" rel="noopener noreferrer">الوطنية للتمويل تحتفي بعام من الإنجاز والنمو</a></h3>
                  <p class="news-tile__excerpt">مواصلةً لإرثها في التميّز، تختتم الوطنية للتمويل، شركة التمويل الرائدة في سلطنة عُمان، العام بنتائج قياسية في محافظ الأفراد والشركات.</p>
                  <span class="news-tile__more" aria-hidden="true">اقرأ المزيد<i class="bi bi-arrow-right"></i></span>
                </article>
              </li>
              <li class="news-tile" data-page="2" style="--i: 2" hidden>
                <article>
                  <div class="news-tile__media">
                    <img src="../assets/images/news-thumb-07.jpg" alt="صورة جماعية لموظفي الوطنية للتمويل في فعالية داخلية" width="340" height="230" loading="lazy" />
                  </div>
                  <h3 class="news-tile__title"><a href="#" target="_blank" rel="noopener noreferrer">الوطنية للتمويل تحتفي بعام من الإنجاز والنمو</a></h3>
                  <p class="news-tile__excerpt">مواصلةً لإرثها في التميّز، تختتم الوطنية للتمويل، شركة التمويل الرائدة في سلطنة عُمان، العام بنتائج قياسية في محافظ الأفراد والشركات.</p>
                  <span class="news-tile__more" aria-hidden="true">اقرأ المزيد<i class="bi bi-arrow-right"></i></span>
                </article>
              </li>
              <li class="news-tile" data-page="2" style="--i: 3" hidden>
                <article>
                  <div class="news-tile__media">
                    <img src="../assets/images/news-thumb-02.jpg" alt="أحد مسؤولي الوطنية للتمويل جالساً أمام شعار الشركة" width="340" height="230" loading="lazy" />
                  </div>
                  <h3 class="news-tile__title"><a href="#" target="_blank" rel="noopener noreferrer">الوطنية للتمويل تحتفي بعام من الإنجاز والنمو</a></h3>
                  <p class="news-tile__excerpt">مواصلةً لإرثها في التميّز، تختتم الوطنية للتمويل، شركة التمويل الرائدة في سلطنة عُمان، العام بنتائج قياسية في محافظ الأفراد والشركات.</p>
                  <span class="news-tile__more" aria-hidden="true">اقرأ المزيد<i class="bi bi-arrow-right"></i></span>
                </article>
              </li>
              <li class="news-tile" data-page="2" style="--i: 4" hidden>
                <article>
                  <div class="news-tile__media">
                    <img src="../assets/images/news-thumb-05.jpg" alt="قيادات الوطنية للتمويل تتسلم جائزة على المنصة" width="340" height="230" loading="lazy" />
                  </div>
                  <h3 class="news-tile__title"><a href="#" target="_blank" rel="noopener noreferrer">الوطنية للتمويل تحتفي بعام من الإنجاز والنمو</a></h3>
                  <p class="news-tile__excerpt">مواصلةً لإرثها في التميّز، تختتم الوطنية للتمويل، شركة التمويل الرائدة في سلطنة عُمان، العام بنتائج قياسية في محافظ الأفراد والشركات.</p>
                  <span class="news-tile__more" aria-hidden="true">اقرأ المزيد<i class="bi bi-arrow-right"></i></span>
                </article>
              </li>
              <li class="news-tile" data-page="2" style="--i: 5" hidden>
                <article>
                  <div class="news-tile__media">
                    <img src="../assets/images/news-thumb-08.jpg" alt="متحدث من الوطنية للتمويل يقدّم عرضاً في مؤتمر" width="340" height="230" loading="lazy" />
                  </div>
                  <h3 class="news-tile__title"><a href="#" target="_blank" rel="noopener noreferrer">الوطنية للتمويل تحتفي بعام من الإنجاز والنمو</a></h3>
                  <p class="news-tile__excerpt">مواصلةً لإرثها في التميّز، تختتم الوطنية للتمويل، شركة التمويل الرائدة في سلطنة عُمان، العام بنتائج قياسية في محافظ الأفراد والشركات.</p>
                  <span class="news-tile__more" aria-hidden="true">اقرأ المزيد<i class="bi bi-arrow-right"></i></span>
                </article>
              </li>
              <li class="news-tile" data-page="2" style="--i: 6" hidden>
                <article>
                  <div class="news-tile__media">
                    <img src="../assets/images/news-thumb-03.jpg" alt="متطوعو الوطنية للتمويل بالسترات التي تحمل شعار الشركة مع الموظفين" width="340" height="230" loading="lazy" />
                  </div>
                  <h3 class="news-tile__title"><a href="#" target="_blank" rel="noopener noreferrer">الوطنية للتمويل تحتفي بعام من الإنجاز والنمو</a></h3>
                  <p class="news-tile__excerpt">مواصلةً لإرثها في التميّز، تختتم الوطنية للتمويل، شركة التمويل الرائدة في سلطنة عُمان، العام بنتائج قياسية في محافظ الأفراد والشركات.</p>
                  <span class="news-tile__more" aria-hidden="true">اقرأ المزيد<i class="bi bi-arrow-right"></i></span>
                </article>
              </li>
              <li class="news-tile" data-page="2" style="--i: 7" hidden>
                <article>
                  <div class="news-tile__media">
                    <img src="../assets/images/news-thumb-06.jpg" alt="سيدتان تحملان الاتفاقيات الموقعة خلال توقيع شراكة" width="340" height="230" loading="lazy" />
                  </div>
                  <h3 class="news-tile__title"><a href="#" target="_blank" rel="noopener noreferrer">الوطنية للتمويل تحتفي بعام من الإنجاز والنمو</a></h3>
                  <p class="news-tile__excerpt">مواصلةً لإرثها في التميّز، تختتم الوطنية للتمويل، شركة التمويل الرائدة في سلطنة عُمان، العام بنتائج قياسية في محافظ الأفراد والشركات.</p>
                  <span class="news-tile__more" aria-hidden="true">اقرأ المزيد<i class="bi bi-arrow-right"></i></span>
                </article>
              </li>
            </ul>

            <nav class="news-pager" aria-label="صفحات الأخبار">
              <button class="news-pager__btn" type="button" data-pager="prev" aria-controls="newsGrid" disabled>
                <i class="bi bi-chevron-left" aria-hidden="true"></i><span class="visually-hidden">الصفحة السابقة</span>
              </button>
              <p class="visually-hidden" role="status" data-pager-status>الصفحة 1 من 2</p>
              <button class="news-pager__btn" type="button" data-pager="next" aria-controls="newsGrid">
                <i class="bi bi-chevron-right" aria-hidden="true"></i><span class="visually-hidden">الصفحة التالية</span>
              </button>
            </nav>
          </div>
        </section>
      </main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
