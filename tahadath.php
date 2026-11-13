<?php
$lang        = 'en';
$page        = 'tahadath';
$title       = 'Tahadath | Al Mabraz';
$description = 'Tahadath — the direct, confidential CEO grievance and suggestion line for National Finance employees.';
$bodyClass   = 'page-inner';
require __DIR__ . '/includes/header.php';
?>
      <main id="main" class="inner-main">
        <!-- ═══════════════════════ Hero ═══════════════════════ -->
        <section class="inner-section" aria-labelledby="pageTitle">
          <div class="shell-container">
            <div class="page-hero page-hero--center">
              <div class="page-hero__text">
                <h1 class="page-title" id="pageTitle" data-reveal>Tahadath</h1>
                <p class="page-lead" style="--lead-max: 560px; --reveal-delay: 120ms" data-reveal>Speak up, share ideas, and engage in meaningful workplace discussions.</p>
              </div>
              <figure class="page-hero__media" data-reveal="fade">
                <img src="assets/images/tahadath-hero.jpg" alt="" width="800" height="350" />
              </figure>
            </div>
          </div>
        </section>

        <!-- ═══════════════════════ CEO line + form ═══════════════════════ -->
        <section class="inner-section ceo-line" aria-labelledby="lineTitle">
          <div class="shell-container">
            <div class="ceo-line__grid">
              <div class="ceo-line__intro">
                <h2 class="section-heading ceo-line__title" id="lineTitle" data-reveal>CEO Grievance and Suggestion Line</h2>
                <div class="ceo-line__copy" data-reveal style="--reveal-delay: 120ms">
                  <p>Because your voice is an integral part of the journey of success we are building together, we remind you of the &ldquo;Tahadath&rdquo; platform, the direct and confidential channel to communicate with the CEO.</p>
                  <p>Here, we celebrate your ideas and turn your suggestions into real impact.</p>
                </div>
              </div>

              <div class="ceo-form-card" data-reveal="fade">
                <form class="ceo-form" id="ceoForm" novalidate aria-labelledby="formTitle">
                  <h3 class="ceo-form__title" id="formTitle">Submit to CEO Office</h3>

                  <div class="ceo-form__grid">
                    <div class="ceo-field">
                      <label for="tName">Name</label>
                      <input type="text" id="tName" name="name" placeholder="Optional for anonymous" autocomplete="name" />
                    </div>
                    <div class="ceo-field">
                      <label for="tContact">Contact</label>
                      <input type="text" id="tContact" name="contact" placeholder="Optional" autocomplete="email" />
                    </div>
                    <div class="ceo-field">
                      <label for="tCategory">Category</label>
                      <select class="nf-select" id="tCategory" name="category" required>
                        <option value="" selected disabled>Select Category</option>
                        <option>Grievance</option>
                        <option>Suggestion</option>
                        <option>Idea</option>
                        <option>Workplace concern</option>
                        <option>Other</option>
                      </select>
                      <span class="ceo-field__error" id="tCategoryError" hidden>Please choose a category.</span>
                    </div>
                    <div class="ceo-field">
                      <label for="tConfidentiality">Confidentiality</label>
                      <select class="nf-select" id="tConfidentiality" name="confidentiality">
                        <option selected>Confidential</option>
                        <option>Anonymous</option>
                        <option>Open</option>
                      </select>
                    </div>
                    <div class="ceo-field ceo-field--full">
                      <label for="tMessage">Message</label>
                      <textarea id="tMessage" name="message" rows="4" placeholder="Enter Message" required></textarea>
                      <span class="ceo-field__error" id="tMessageError" hidden>Please write your message.</span>
                    </div>
                  </div>

                  <div class="ceo-form__actions">
                    <button class="ceo-btn ceo-btn--primary" type="submit"><span>Send to CEO Line</span></button>
                    <button class="ceo-btn ceo-btn--ghost" type="reset">Clear</button>
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
            <h2 class="section-heading" id="pathTitle" data-reveal>Review Path</h2>
            <ol class="review-steps" id="reviewSteps" role="list">
                <li class="review-step" style="--i: 0">
                  <span class="review-step__num"><span class="visually-hidden">Step </span>1</span>
                  <p class="review-step__text">Submission logged with a secure reference.</p>
                  <span class="review-step__link" aria-hidden="true"></span>
                </li>
                <li class="review-step is-active" style="--i: 1">
                  <span class="review-step__num"><span class="visually-hidden">Step </span>2</span>
                  <p class="review-step__text">CEO office screens the item for urgency and confidentiality.</p>
                  <span class="review-step__link" aria-hidden="true"></span>
                </li>
                <li class="review-step" style="--i: 2">
                  <span class="review-step__num"><span class="visually-hidden">Step </span>3</span>
                  <p class="review-step__text">Assigned owner prepares response or action plan.</p>
                  <span class="review-step__link" aria-hidden="true"></span>
                </li>
                <li class="review-step" style="--i: 3">
                  <span class="review-step__num"><span class="visually-hidden">Step </span>4</span>
                  <p class="review-step__text">Closure summary is shared when contact details are provided.</p>
                </li>
            </ol>
          </div>
        </section>
      </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
