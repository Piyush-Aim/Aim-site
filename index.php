<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/data.php';
$pageKey = 'home';

$extraCSS = [
  asset('css/index.css'),
  asset('css/sections/about.css'),
  asset('css/sections/process.css'),
  asset('css/sections/why.css'),
  asset('css/sections/cta.css'),
  asset('css/sections/services-home.css'),
  asset('css/sections/cases.css'),
  asset('css/sections/industries.css'),
  asset('css/sections/testimonials.css')
];
$extraJS = [
  asset('js/index.js'),
  asset('js/components/services-home.js'),
  asset('js/components/cases.js'),
  asset('js/components/testimonials.js')
];

// Pass reputation data to JS
echo "<script>window.platformData = " . json_encode($reputationPlatforms) . ";</script>";

// Extract Real Testimonials for Hero
$realHeroTestimonials = getRealTestimonials($portfolioData);
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<?php include 'partials/head.php'; ?>

<body>
  <?php include 'partials/nav.php'; ?>

  <!-- 1. HERO -->
  <section id="hero">
    <div class="hero-bg-accent"></div>
    <div class="hero-orb-center"></div>
    <div class="grid-overlay"></div>

    <div class="container">
      <div class="hero-content-flex">
        <div class="hero-decor-wrapper-left section-fade">
          <div class="hero-decor-left">
            <img src="assets/images/left-border.svg" class="hero-decor-line-1" alt="">
            <img src="assets/images/right-border.svg" class="hero-decor-line-2" alt="">

            <!-- Google Badge -->
            <div class="trust-pill google-pill">
              <div id="ratingTop"></div>
            </div>

            <!-- Icon Grid -->
            <div class="icon-cluster-wrap">
              <div class="icon-grid-fancy" id="iconGrid">
                <?php foreach ($reputationPlatforms as $key => $p): ?>
                  <a href="<?php echo $p['url'] !== '#' ? $p['url'] : 'javascript:void(0)'; ?>"
                    <?php echo $p['url'] !== '#' ? 'target="_blank"' : ''; ?>
                    class="ig-item platform"
                    data-platform="<?php echo $key; ?>">
                    <img src="<?php echo $p['icon']; ?>" alt="<?php echo $p['name']; ?>">
                  </a>
                <?php endforeach; ?>
              </div>
            </div>

            <!-- Glassdoor Badge -->
            <div class="trust-pill glassdoor-pill">
              <div id="ratingBottom"></div>
            </div>
          </div>
        </div>

        <div class="section-fade hero-center-text">
          <div class="hero-eyebrow-fancy">
            <span class="eyebrow-line"></span>
            Trusted by 200+ Businesses Worldwide
            <span class="eyebrow-line"></span>
          </div>

          <h1 class="hero-h1-serif">
            We Build <span class="gradient-text-hero">High-Converting</span> Digital Experiences
          </h1>

          <p class="hero-sub-premium subtitle">
            We specialize in elite SEO and digital marketing services. Elevate your brand Authority with data-driven execution and world-class design.
          </p>

          <div class="hero-ctas-center">
            <a href="#cta" class="btn btn-primary-lg">
              <i class="fa-solid fa-calendar-check"></i> Book Free Strategy Call
            </a>
            <a href="#cases" class="btn btn-outline-premium">
              See Case Studies <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="hero-trust-row section-fade delay-3">
            <div class="trust-item">
              <div class="trust-num-box">
                <span class="trust-num" data-target="500">500</span><span class="trust-sym">+</span>
              </div>
              <p class="trust-lbl">Projects</p>
            </div>
            <div class="trust-item">
              <div class="trust-num-box">
                <span class="trust-num" data-target="98">98</span><span class="trust-sym">%</span>
              </div>
              <p class="trust-lbl">Satisfaction</p>
            </div>
            <div class="trust-item">
              <div class="trust-num-box">
                <span class="trust-num" data-target="50">50</span><span class="trust-sym">+</span>
              </div>
              <p class="trust-lbl">Experts</p>
            </div>
            <div class="trust-item">
              <div class="trust-num-box">
                <span class="trust-num" data-target="10">10</span><span class="trust-sym">+</span>
              </div>
              <p class="trust-lbl">Years</p>
            </div>
          </div>
        </div>

        <div class="hero-decor-wrapper-right section-fade">
          <div class="hero-decor-right hero-testi-container" id="heroTestiWrapper">
            <div class="hero-testi-track" id="heroTestiTrack">
              <?php
              for ($i = 0; $i < 6; $i++):
                foreach ($realHeroTestimonials as $t): ?>
                  <div class="testi-pill">
                    <div class="tp-avatar" style="background: <?= $t['color'] ?? 'var(--primary)' ?>; color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.2rem; border-radius: 50%;">
                      <?php if (!empty($t['avatar'])): ?>
                        <img src="<?php echo $t['avatar']; ?>" alt="<?php echo $t['name']; ?>">
                      <?php else: ?>
                        <?= $t['initials'] ?>
                      <?php endif; ?>
                    </div>
                    <div class="tp-content">
                      <div class="tp-top">
                        <span><?php echo number_format($t['rating'] ?? 5.0, 1); ?></span>
                        <div class="tp-stars">
                          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                      </div>
                      <p class="tp-name"><?php echo htmlspecialchars($t['name'] ?? ''); ?></p>
                      <p class="tp-role"><?php echo htmlspecialchars($t['role'] ?? ''); ?></p>
                    </div>
                  </div>
              <?php endforeach;
              endfor; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="hero-logos-wrap">
        <p class="logos-label">Trusted By Industry Leaders</p>
        <div class="marquee-wrap">
          <?php
          $logos = getClientLogos();
          $totalItems = count($logos) * 6;
          $dynamicDuration = $totalItems * 1.5;
          ?>
          <div class="marquee-track" style="animation-duration: <?= $dynamicDuration ?>s;">
            <?php
            for ($i = 0; $i < 6; $i++):
              foreach ($logos as $logo): ?>
                <div class="logo-item">
                  <img src="<?= $logo['src'] ?>" alt="<?= $logo['alt'] ?>">
                </div>
            <?php endforeach;
            endfor; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 2. Services Section -->
  <?php include 'reuseable-block/services-home.php'; ?>

  <!-- 3. CASE STUDIES -->
  <?php include 'reuseable-block/cases.php'; ?>

  <!-- 4. WHY CHOOSE US -->
  <?php include 'reuseable-block/why.php'; ?>

  <!-- 5. PROCESS -->
  <?php include 'reuseable-block/process.php'; ?>

  <!-- 6. TESTIMONIALS -->
  <?php include 'reuseable-block/testimonials.php'; ?>

  <!-- 7. INDUSTRIES -->
  <?php include 'reuseable-block/industries.php'; ?>

  <!-- 8. CTA -->
  <?php include 'reuseable-block/cta.php'; ?>

  <!-- 9. ABOUT -->
  <?php include 'reuseable-block/about.php'; ?>

  <?php include 'partials/footer.php'; ?>
</body>

</html>