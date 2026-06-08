  <!-- 6. TESTIMONIALS -->
  <section id="testimonials" class="testi-section">
    <div class="container">
      <div class="section-header section-fade">
        <p class="tag tag-primary">Client Reviews</p>
        <h2>Straight from <span class="gradient-text">Our Clients</span></h2>
      </div>

      <div class="testi-layout">
        <?php
        $testimonialsData = getRealTestimonials($portfolioData);

        if (count($testimonialsData) > 0 && count($testimonialsData) < 8) {
          $testimonialsData = array_merge($testimonialsData, $testimonialsData);
        }

        $featured = $testimonialsData[0] ?? null;
        ?>

        <div class="testi-featured section-fade">
          <?php if ($featured): ?>
            <div>
              <div class="tf-glow"></div>
              <span class="tf-big-quote">"</span>
              <div class="tf-stars">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <p class="tf-text"><?= htmlspecialchars($featured['text']) ?></p>
            </div>
            <div class="tf-author">
              <div class="tf-av" style="background: <?= $featured['color'] ?>; color: #fff; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 1.1rem;"><?= htmlspecialchars($featured['initials']) ?></div>
              <div>
                <div class="tf-name"><?= htmlspecialchars($featured['name']) ?></div>
                <div class="tf-role"><?= htmlspecialchars($featured['role']) ?></div>
              </div>
            </div>
          <?php endif; ?>
        </div>

        <div class="testi-window">
          <div class="testi-stack">
            <?php foreach ($testimonialsData as $i => $item): ?>
              <div class="testi-card section-fade delay-<?= ($i % 3) + 1 ?>"
                data-name="<?= htmlspecialchars($item['name']) ?>"
                data-role="<?= htmlspecialchars($item['role']) ?>"
                data-stars="5"
                data-text="<?= htmlspecialchars($item['text']) ?>"
                data-avatar="<?= htmlspecialchars($item['initials']) ?>"
                data-color="<?= $item['color'] ?>">

                <div class="tc-stars">
                  <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <p class="tc-text">"<?= htmlspecialchars($item['text']) ?>"</p>

                <div class="tc-author">
                  <div class="tc-av" style="background: <?= $item['color'] ?>; color: #fff; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 0.9rem;"><?= htmlspecialchars($item['initials']) ?></div>
                  <div>
                    <div class="tc-name"><?= htmlspecialchars($item['name']) ?></div>
                    <div class="tc-role"><?= htmlspecialchars($item['role']) ?></div>
                  </div>
                </div>

              </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
  </section>