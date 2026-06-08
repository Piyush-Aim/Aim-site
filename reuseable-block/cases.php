  <!-- 3. CASE STUDIES -->
  <section id="cases" class="cases-section">
    <div class="container">
      <div class="cases-top-flex section-fade">
        <div class="ctf-left">
          <p class="tag tag-primary">Our Portfolio</p>
          <h2 class="sec-h2">Latest Case <span class="gradient-text">Studies</span></h2>
        </div>
        <div class="ctf-right">
          <a href="<?= url('case-studies') ?>" class="view-all-link btn">View all Case Studies <i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
      </div>

      <div class="portfolio-slider-wrap section-fade delay-1">
        <div class="ps-slider">
          <?php
          // $featuredCases = array_slice($portfolioData ?? [], 0, 5);
          $featuredCases = ($portfolioData ?? []);
          foreach ($featuredCases as $index => $case):
            $slideNum = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
            $isActive = $index === 0 ? 'active' : '';
          ?>
            <div class="ps-slide <?= $isActive ?>" data-index="<?= $slideNum ?>">
              <div class="ps-content">
                <div class="ps-num-bg"><?= $slideNum ?></div>
                <h3 class="ps-title"><?= $case['title'] ?></h3>
                <p class="ps-desc"><?= $case['desc'] ?></p>

                <div class="ps-stats">
                  <?php
                  $results = $case['results'];
                  foreach (array_slice($results, 0, 3) as $statIndex => $stat):
                    $val = $stat['title'];
                    $lbl = $stat['text'];
                  ?>
                    <div class="ps-stat">
                      <div class="ps-stat-top">
                        <p class="ps-stat-num"><?= $val ?></p>
                      </div>
                      <p class="ps-stat-lbl"><?= $lbl ?></p>
                    </div>
                  <?php endforeach; ?>
                </div>
                <a href="<?= url('project/' . $case['slug']) ?>" class="ps-btn btn">View case study</a>
              </div>

              <div class="ps-image-wrap">
                <img src="<?= asset($case['img']) ?>" alt="<?= $case['title'] ?>" class="ps-img">
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <hr class="ps-divider">

        <div class="ps-controls">
          <div class="ps-nav-btns">
            <button class="ps-nav-btn prev" id="psPrev"><i class="fa-solid fa-arrow-left"></i></button>
            <div class="ps-counter"><span id="currIndex">01</span> / <span id="totalIndex"><?= str_pad(count($featuredCases), 2, '0', STR_PAD_LEFT) ?></span></div>
            <button class="ps-nav-btn next" id="psNext"><i class="fa-solid fa-arrow-right"></i></button>
          </div>
        </div>

      </div>
    </div>
  </section>