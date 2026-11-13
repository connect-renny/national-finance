<?php
$lang        = 'ar';
$page        = 'ceo-message';
$title       = 'رسالة الرئيس التنفيذي | المبرز';
$description = 'رسالة من الرئيس التنفيذي للوطنية للتمويل إلى كل فرد من أفراد الفريق.';
$bodyClass   = 'page-inner';
require __DIR__ . '/../includes/header.php';
?>
      <main id="main" class="inner-main">
        <section class="inner-section" aria-labelledby="pageTitle">
          <div class="shell-container">
            <div class="ceo-message">
              <div class="ceo-message__body">
                <h1 class="page-title page-title--bar" id="pageTitle" data-reveal>رسالة الرئيس التنفيذي</h1>

                <h2 class="ceo-message__headline" data-reveal style="--reveal-delay: 100ms">خمس سنوات من القيادة، وإنجازات صنعها فريق استثنائي</h2>

                <div class="ceo-message__text" data-reveal style="--reveal-delay: 200ms">
                  <p>خمس سنوات من التحديات والإنجازات والعمل جنباً إلى جنب مع فريق قوي ومتفانٍ. منذ انضمامي إلى الوطنية للتمويل، كانت الرحلة مليئة بالمحطات والتجارب التي رسمت مسارنا وعزّزت إيماني بأن الإنجاز الحقيقي لا يكون أبداً ثمرة جهد فردي، بل ثمرة فريق يجمعه رؤية مشتركة وحس بالمسؤولية وطموح واحد.</p>

                  <!-- PLACEHOLDER: the design shows only the opening paragraph. Replace with the full message from the client. -->
                  <div class="ceo-message__more" id="ceoMessageMore">
                    <div>
                      <p>معاً وسّعنا نطاق حضورنا، وعزّزنا خدماتنا، وبقينا قريبين من العملاء والمجتمعات التي نخدمها. وكل إنجاز هو ملك لكل زميل قدّم وقته وأفكاره والتزامه على امتداد الطريق.</p>
                      <p>ونحن نتطلع إلى المستقبل، أثق بأن الروح ذاتها ستمضي بنا إلى أبعد من ذلك. شكراً لثقتكم وتفانيكم والفخر الذي تضيفونه إلى الوطنية للتمويل كل يوم.</p>
                    </div>
                  </div>

                  <button class="read-more" type="button" aria-expanded="false" aria-controls="ceoMessageMore" data-label-open="عرض أقل" data-label-closed="اقرأ المزيد">
                    <span>اقرأ المزيد</span><i class="bi bi-chevron-down" aria-hidden="true"></i>
                  </button>
                </div>

                <p class="ceo-message__sign" data-reveal style="--reveal-delay: 280ms">
                  <strong>طارق سليمان الفارسي</strong>
                  <span>الرئيس التنفيذي</span>
                </p>
              </div>

              <figure class="ceo-figure" data-reveal="right" style="--reveal-delay: 150ms">
                <div class="ceo-figure__arch">
                  <img src="../assets/images/ceo-message-portrait.png" alt="طارق سليمان الفارسي، الرئيس التنفيذي للوطنية للتمويل" width="500" height="600" />
                </div>
                <figcaption class="ceo-quote">
                  <blockquote>
                    <img class="ceo-quote__mark" src="../assets/images/icon-quote-open.png" alt="" width="39" height="31" />
                    <p>مضت خمس سنوات، وكان كل واحد منكم جزءاً لا يتجزأ من هذه الرحلة الحافلة بالتحديات والإنجازات. والطريق أمامنا يحمل فرصاً أكبر لنواصل صنع أثر نفخر به جميعاً.</p>
                    <img class="ceo-quote__mark ceo-quote__mark--close" src="../assets/images/icon-quote-close.png" alt="" width="39" height="31" />
                  </blockquote>
                </figcaption>
              </figure>
            </div>
          </div>
        </section>
      </main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
