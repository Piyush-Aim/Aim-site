<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/data.php';
$pageKey = 'service';
$extraCSS = [
    asset('css/service.css'),
    asset('css/sections/about.css'),
    asset('css/sections/why.css'),
    asset('css/sections/process.css'),
    asset('css/sections/cta.css')
];
$extraJS = [
    asset('js/service.js')
];
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'partials/head.php'; ?>

<body>
    <?php include 'partials/nav.php'; ?>

    <!-- CREATIVE HERO SECTION -->
    <section class="s3-hero">
        <div class="hero-bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
        </div>
        <div class="hero-bg-accent"></div>
        <div class="hero-orb-center"></div>
        <div class="grid-overlay"></div>

        <div class="container">
            <div class="s3-hero-grid section-fade">
                <div class="s3-hero-text">
                    <div class="tag tag-primary">
                        <i class="fa-solid fa-bolt"></i> Elite IT Solutions
                    </div>
                    <h1>Engineering The Future With <span class="gradient-text">Top-Tier Technology</span></h1>
                    <p class="hero-subtitle subtitle">
                        Driving digital transformation through scalable architecture, modern design, and ROI-focused strategies. Partner with us to orchestrate your organization's tech evolution.
                    </p>
                    <div class="hero-actions">
                        <a href="<?= url('contact') ?>" class="btn btn-primary btn-primary-lg">
                            Start Your Project <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="s3-hero-visual">
                    <div class="glass-panel main-panel">
                        <div class="panel-header">
                            <span class="dot dot-red"></span><span class="dot dot-yellow"></span><span
                                class="dot dot-green"></span>
                            <span class="panel-title">system_architecture.ts</span>
                        </div>
                        <div class="panel-body">
                            <div class="code-line"><span class="keyword">import</span> { CoreServices } <span
                                    class="keyword">from</span> '@aimtech/core';</div>
                            <div class="code-line"><span class="keyword">const</span> app = initializeApp({</div>
                            <div class="code-line indent">performance: <span class="string">'optimal'</span>,</div>
                            <div class="code-line indent">security: <span class="string">'enterprise'</span>,</div>
                            <div class="code-line indent">scalability: <span class="boolean">true</span></div>
                            <div class="code-line">});</div>
                            <div class="code-line mt-2">>> System deployed successfully.
                            </div>
                        </div>
                    </div>

                    <div class="glass-panel float-panel float-panel-1">
                        <div class="fp-flex-align">
                            <div class="fp-icon"><i class="fa-brands fa-aws"></i></div>
                            <div class="fp-text">
                                <strong>Cloud Native</strong>
                                <span>99.99% SLA</span>
                            </div>
                        </div>
                    </div>

                    <div class="glass-panel float-panel float-panel-2">
                        <div class="fp-flex-align">
                            <div class="fp-icon"><i class="fa-solid fa-users-gear"></i></div>
                            <div class="fp-text">
                                <strong>Agile Teams</strong>
                                <span>Continuous Delivery</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>

    <!-- SERVICES SECTION -->
    <section id="services">
        <!-- STICKY SERVICES NAV -->
        <div class="s3-sticky-nav">
            <div class="s3-sticky-nav-inner">
                <?php foreach ($serviceSections as $section): ?>
                    <a href="#<?php echo $section['id']; ?>" class="s3-nav-link active"><?php echo $section['title']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="container s3-services-container" id="service-sections">
            <?php foreach ($serviceSections as $section): ?>
                <div id="<?php echo $section['id']; ?>" class="s3-category">
                    <div class="s3-cat-header">
                        <div class="s3-cat-header-icon"><i class="<?php echo $section['icon']; ?>"></i></div>
                        <h2><?php echo $section['title']; ?></h2>
                    </div>
                    <div class="s3-grid">
                        <?php foreach ($section['cards'] as $card): ?>
                            <a href="<?php echo $card['url'] ?? '#'; ?>" class="s3-card">
                                <div class="s3-card-icon icon-primary"><i class="<?php echo $card['icon']; ?>"></i></div>
                                <h2 class="s3-card-title"><?php echo $card['title']; ?></h2>
                                <p class="s3-card-text"><?php echo $card['text']; ?></p>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- TECHNOLOGY STACK SECTION -->
    <section class="bg-white" id="technology">
        <div class="container">
            <h2 class="s3-section-title section-fade">Our Technical <span class="gradient-text">DNA</span>
            </h2>
            <div class="s3-tech-tabs-wrapper section-fade">
                <div class="s3-tech-tabs">
                    <div class="s3-tab-slider" id="tech-tab-slider"></div>
                    <button class="s3-tab-btn btn active"
                        onclick="openTechTab(event, 'tech-frontend')">Frontend</button>
                    <button class="s3-tab-btn btn" onclick="openTechTab(event, 'tech-backend')">Backend</button>
                    <button class="s3-tab-btn btn" onclick="openTechTab(event, 'tech-database')">Database &
                        Cloud</button>
                    <button class="s3-tab-btn btn" onclick="openTechTab(event, 'tech-mobile')">
                        Mobile & Design Tools</button>
                </div>
            </div>

            <div id="tech-content" class="section-fade s3-tech-content">
                <?php
                // Consolidate categories to match the 4-tab UI
                $consolidatedStack = [
                    'tech-frontend' => $technologyCategories['frontend']['techs'] ?? [],
                    'tech-backend'  => $technologyCategories['backend']['techs'] ?? [],
                    'tech-database' => array_merge(
                        $technologyCategories['database']['techs'] ?? [],
                        $technologyCategories['cloud']['techs'] ?? []
                    ),
                    'tech-mobile'   => array_merge(
                        $technologyCategories['mobile']['techs'] ?? [],
                        $technologyCategories['design']['techs'] ?? []
                    ),
                ];

                $isFirst = true;
                foreach ($consolidatedStack as $tabId => $cards): ?>
                    <div id="<?= $tabId ?>" class="s3-tab-pane<?= $isFirst ? ' active' : '' ?>">
                        <div class="s3-tech-grid-small">
                            <?php foreach ($cards as $item): ?>
                                <a href="<?= url('technology/' . $item['slug']) ?>" class="s3-card s3-card--centered">
                                    <div class="s3-card-icon icon-primary"><i class="<?= $item['logo'] ?>"></i></div>
                                    <h2 class="s3-card-title"><?= $item['name'] ?></h2>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php $isFirst = false;
                endforeach; ?>
            </div>

        </div>
    </section>

    <!-- about -->
    <?php include 'reuseable-block/about.php'; ?>

    <!-- why -->
    <?php include 'reuseable-block/why.php'; ?>

    <!-- PROCESS -->
    <?php include 'reuseable-block/process.php'; ?>

    <!-- CTA -->
    <?php include 'reuseable-block/cta.php'; ?>

    <?php include 'partials/footer.php'; ?>
</body>

</html>