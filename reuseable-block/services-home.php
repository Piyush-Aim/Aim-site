  <!-- 2. Services Section -->
  <section id="services" class="services-section">
    <div class="container">
      <div class="section-header">
        <h2 class="services-title">360° Digital <span class="gradient-text">Excellence</span></h2>
        <p class="services-subtitle subtitle">From strategic SEO to high-performance .NET architecture, we provide the full spectrum of digital services to scale your enterprise.</p>
      </div>

      <div class="services-tabs-container">
        <button onclick="switchTab('core')" id="tab-core" class="service-tab-btn btn active">Core Services</button>
        <button onclick="switchTab('seo')" id="tab-seo" class="service-tab-btn btn">SEO</button>
        <button onclick="switchTab('ppc')" id="tab-ppc" class="service-tab-btn btn">PPC</button>
        <button onclick="switchTab('design')" id="tab-design" class="service-tab-btn btn">Web Design</button>
        <button onclick="switchTab('social')" id="tab-social" class="service-tab-btn btn">Social Media</button>
        <button onclick="switchTab('other')" id="tab-other" class="service-tab-btn btn">Other</button>
      </div>

      <div id="service-content" class="service-content-area">
        <?php foreach ($homepageServices as $catId => $items): ?>
          <div id="hp-pane-<?php echo $catId; ?>" class="service-pane <?php echo ($catId === 'core') ? 'active' : ''; ?>">
            <div class="services-grid animate-fade-in">
              <?php foreach ($items as $item): ?>
                <div>
                  <a href="<?php echo (!empty($item['url']) && $item['url'] !== '#') ? url($item['url']) : '#'; ?>" class="service-card">
                    <div>
                      <div class="service-icon-box">
                        <i class="<?php echo $item['icon']; ?>"></i>
                      </div>
                      <h2 class="service-card-title"><?php echo $item['title']; ?></h2>
                      <p class="service-card-desc"><?php echo $item['desc']; ?></p>
                    </div>
                    <div class="service-card-link">
                      Learn More <i class="fa-solid fa-chevron-right"></i>
                    </div>
                  </a>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>