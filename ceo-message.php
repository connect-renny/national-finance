<?php
$lang        = 'en';
$page        = 'ceo-message';
$title       = 'CEO Message | Al Mabraz';
$description = 'A message from the Chief Executive Officer of National Finance to every member of the team.';
$bodyClass   = 'page-inner';
require __DIR__ . '/includes/header.php';
?>
      <main id="main" class="inner-main">
        <section class="inner-section" aria-labelledby="pageTitle">
          <div class="shell-container">
            <div class="ceo-message">
              <div class="ceo-message__body">
                <h1 class="page-title page-title--bar" id="pageTitle" data-reveal>CEO Message</h1>

                <h2 class="ceo-message__headline" data-reveal style="--reveal-delay: 100ms">Five Years of Leadership, and Achievements Made by an Exceptional Team</h2>

                <div class="ceo-message__text" data-reveal style="--reveal-delay: 200ms">
                  <p>Five years of challenges, achievements, and working alongside a strong and dedicated team. Since joining National Finance, the journey has been filled with milestones and experiences that have shaped our path and strengthened my belief that true achievement is never the result of individual effort alone, but of a team united by a shared vision, a sense of responsibility, and a common ambition.</p>

                  <!-- PLACEHOLDER: the design shows only the opening paragraph. Replace with the full message from the client. -->
                  <div class="ceo-message__more" id="ceoMessageMore">
                    <div>
                      <p>Together we have grown our reach, strengthened our services and stayed close to the customers and communities we serve. Each milestone belongs to every colleague who gave their time, ideas and commitment along the way.</p>
                      <p>As we look ahead, I am confident that the same spirit will carry us further. Thank you for your trust, your dedication and the pride you bring to National Finance every day.</p>
                    </div>
                  </div>

                  <button class="read-more" type="button" aria-expanded="false" aria-controls="ceoMessageMore" data-label-open="Read less" data-label-closed="Read more">
                    <span>Read more</span><i class="bi bi-chevron-down" aria-hidden="true"></i>
                  </button>
                </div>

                <p class="ceo-message__sign" data-reveal style="--reveal-delay: 280ms">
                  <strong>Tariq Sulaiman Al Farsi</strong>
                  <span>Chief Executive Officer</span>
                </p>
              </div>

              <figure class="ceo-figure" data-reveal="right" style="--reveal-delay: 150ms">
                <div class="ceo-figure__arch">
                  <img src="assets/images/ceo-message-portrait.png" alt="Tariq Sulaiman Al Farsi, Chief Executive Officer of National Finance" width="500" height="600" />
                </div>
                <figcaption class="ceo-quote">
                  <blockquote>
                    <img class="ceo-quote__mark" src="assets/images/icon-quote-open.png" alt="" width="39" height="31" />
                    <p>Five years have passed, and each of you has been an integral part of this journey of challenges and achievements. The road ahead holds even greater opportunities for us to continue creating an impact we can all be proud of.</p>
                    <img class="ceo-quote__mark ceo-quote__mark--close" src="assets/images/icon-quote-close.png" alt="" width="39" height="31" />
                  </blockquote>
                </figcaption>
              </figure>
            </div>
          </div>
        </section>
      </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
