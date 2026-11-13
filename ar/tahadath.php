<?php
$lang        = 'ar';
$page        = 'tahadath';
$title       = 'تحدّث | المبرز';
$description = 'تحدّث — الخط المباشر والسري للتظلمات والمقترحات لدى الرئيس التنفيذي لموظفي الوطنية للتمويل.';
$bodyClass   = 'page-inner';
require __DIR__ . '/../includes/header.php';
?>
      <main id="main" class="inner-main">
        <!-- ═══════════════════════ Hero ═══════════════════════ -->
        <section class="inner-section" aria-labelledby="pageTitle">
          <div class="shell-container">
            <div class="page-hero page-hero--center">
              <div class="page-hero__text">
                <h1 class="page-title" id="pageTitle" data-reveal>تحدّث</h1>
                <p class="page-lead" style="--lead-max: 560px; --reveal-delay: 120ms" data-reveal>عبّر عن رأيك، وشارك أفكارك، وكن جزءاً من حوارات هادفة في بيئة العمل.</p>
              </div>
              <figure class="page-hero__media" data-reveal="fade">
                <img src="../assets/images/tahadath-hero.jpg" alt="" width="800" height="350" />
              </figure>
            </div>
          </div>
        </section>

        <!-- ═══════════════════════ CEO line + form ═══════════════════════ -->
        <section class="inner-section ceo-line" aria-labelledby="lineTitle">
          <div class="shell-container">
            <div class="ceo-line__grid">
              <div class="ceo-line__intro">
                <h2 class="section-heading ceo-line__title" id="lineTitle" data-reveal>خط التظلمات والمقترحات لدى الرئيس التنفيذي</h2>
                <div class="ceo-line__copy" data-reveal style="--reveal-delay: 120ms">
                  <p>لأن صوتك جزء لا يتجزأ من رحلة النجاح التي نبنيها معاً، نذكّرك بمنصة «تحدّث»، القناة المباشرة والسرية للتواصل مع الرئيس التنفيذي.</p>
                  <p>هنا نحتفي بأفكارك ونحوّل مقترحاتك إلى أثر حقيقي.</p>
                </div>
              </div>

              <div class="ceo-form-card" data-reveal="fade">
                <form class="ceo-form" id="ceoForm" novalidate aria-labelledby="formTitle">
                  <h3 class="ceo-form__title" id="formTitle">أرسل إلى مكتب الرئيس التنفيذي</h3>

                  <div class="ceo-form__grid">
                    <div class="ceo-field">
                      <label for="tName">الاسم</label>
                      <input type="text" id="tName" name="name" placeholder="اختياري للمشاركة دون اسم" autocomplete="name" />
                    </div>
                    <div class="ceo-field">
                      <label for="tContact">وسيلة التواصل</label>
                      <input type="text" id="tContact" name="contact" placeholder="اختياري" autocomplete="email" />
                    </div>
                    <div class="ceo-field">
                      <label for="tCategory">الفئة</label>
                      <select class="nf-select" id="tCategory" name="category" required>
                        <option value="" selected disabled>اختر الفئة</option>
                        <option>تظلّم</option>
                        <option>اقتراح</option>
                        <option>فكرة</option>
                        <option>ملاحظة حول بيئة العمل</option>
                        <option>أخرى</option>
                      </select>
                      <span class="ceo-field__error" id="tCategoryError" hidden>يرجى اختيار الفئة.</span>
                    </div>
                    <div class="ceo-field">
                      <label for="tConfidentiality">السرية</label>
                      <select class="nf-select" id="tConfidentiality" name="confidentiality">
                        <option selected>سري</option>
                        <option>دون اسم</option>
                        <option>علني</option>
                      </select>
                    </div>
                    <div class="ceo-field ceo-field--full">
                      <label for="tMessage">الرسالة</label>
                      <textarea id="tMessage" name="message" rows="4" placeholder="اكتب رسالتك" required></textarea>
                      <span class="ceo-field__error" id="tMessageError" hidden>يرجى كتابة رسالتك.</span>
                    </div>
                  </div>

                  <div class="ceo-form__actions">
                    <button class="ceo-btn ceo-btn--primary" type="submit"><span>أرسل إلى خط الرئيس التنفيذي</span></button>
                    <button class="ceo-btn ceo-btn--ghost" type="reset">مسح</button>
                  </div>
                  <p class="ceo-form__status" role="status" aria-live="polite" hidden></p>
                </form>
              </div>
            </div>
          </div>
        </section>

        <!-- ═══════════════════════ Review path ═══════════════════════ -->
        <section class="inner-section review-path" aria-labelledby="pathTitle">
          <div class="shell-container">
            <h2 class="section-heading" id="pathTitle" data-reveal>مسار المراجعة</h2>
            <ol class="review-steps" id="reviewSteps" role="list">
                <li class="review-step" style="--i: 0">
                  <span class="review-step__num"><span class="visually-hidden">الخطوة </span>1</span>
                  <p class="review-step__text">تسجيل الطلب برقم مرجعي آمن.</p>
                  <span class="review-step__link" aria-hidden="true"></span>
                </li>
                <li class="review-step is-active" style="--i: 1">
                  <span class="review-step__num"><span class="visually-hidden">الخطوة </span>2</span>
                  <p class="review-step__text">يفحص مكتب الرئيس التنفيذي الطلب من حيث الأولوية والسرية.</p>
                  <span class="review-step__link" aria-hidden="true"></span>
                </li>
                <li class="review-step" style="--i: 2">
                  <span class="review-step__num"><span class="visually-hidden">الخطوة </span>3</span>
                  <p class="review-step__text">يُعِد المسؤول المكلّف الرد أو خطة العمل.</p>
                  <span class="review-step__link" aria-hidden="true"></span>
                </li>
                <li class="review-step" style="--i: 3">
                  <span class="review-step__num"><span class="visually-hidden">الخطوة </span>4</span>
                  <p class="review-step__text">تتم مشاركة ملخص الإغلاق عند تقديم بيانات التواصل.</p>
                </li>
            </ol>
          </div>
        </section>
      </main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
