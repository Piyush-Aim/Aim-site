<?php
require_once __DIR__ . '/config/config.php';
// about.php
require_once __DIR__ . '/config/data.php';
$pageKey = 'about-us';

// Extra CSS files for this page
$extraCSS = [
    asset('css/about-page.css'),
    asset('css/sections/about.css'),
    asset('css/sections/why.css'),
    asset('css/sections/process.css'),
    asset('css/sections/cta.css'),
];
$extraJS = [
    asset('js/about.js')
];

require_once 'partials/head.php';
?>

<body>
    <?php include 'partials/nav.php'; ?>

    <!-- Architectural Legacy Hero Section -->
    <section class="about-hero-legacy">
        <div class="hero-bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
        </div>
        <div class="hero-bg-accent"></div>
        <div class="hero-orb-center"></div>
        <div class="grid-overlay"></div>

        <div class="container hero-container">
            <div class="legacy-composition">
                <div class="legacy-narrative section-fade">
                    <?php render_breadcrumbs(['Home' => url(''), 'About Us' => '']); ?>
                    <p class="tag tag-primary">GLOBAL STRATEGY</p>
                    <h1 class="legacy-h1">
                        Creating Digital <span class="gradient-text">Masterpieces</span>
                    </h1>
                    <p class="subtitle">
                        <?= COMPANY_NAME ?> architects future-ready digital identities,
                        fusing extreme precision with creative intelligence for global leaders.
                    </p>
                    <div class="legacy-stats-row">
                        <div class="stat-badge">
                            <p class="stat-num">10+</p>
                            <p class="stat-text">Years of Mastery</p>
                        </div>
                        <div class="stat-badge">
                            <p class="stat-num">25+</p>
                            <p class="stat-text">Elite Developers</p>
                        </div>
                    </div>
                    <div class="legacy-cta">
                        <a href="#journey" class="btn btn-primary-lg">Explore Our Story <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>

                <!-- Right: Visual Column (Animated Hub) -->
                <div class="legacy-visual section-fade delay-1">
                    <div class="legacy-hub-wrap">
                        <div class="legacy-hub">
                            <div class="hub-core"></div>
                            <div class="hub-ring ring-1">
                                <div class="legacy-label label-1">
                                    <i class="fa-brands fa-linux"></i>
                                    <span>UNIX</span>
                                </div>
                            </div>
                            <div class="hub-ring ring-2">
                                <div class="legacy-label label-2">
                                    <i class="fa-solid fa-cloud"></i>
                                    <span>CLOUD</span>
                                </div>
                            </div>
                            <div class="hub-ring ring-3">
                                <div class="legacy-label label-3">
                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                    <span>MOBILE</span>
                                </div>
                                <div class="legacy-label label-4">
                                    <i class="fa-solid fa-layer-group"></i>
                                    <span>SaaS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'reuseable-block/about.php'; ?>

    <!-- Ultra-Creative Journey Section (Conduit Timeline) -->
    <section id="journey" class="journey-ultra-conduit">
        <div class="container">
            <div class="section-header section-fade">
                <p class="tag tag-primary">The Heritage</p>
                <h2 class="journey-h2">A Decade of <span class="gradient-text">Engineered Success</span></h2>
                <p class="journey-desc">From our 2014 inception to global leadership, explore the conduit of our evolution.</p>
            </div>

            <div class="conduit-timeline-container section-fade delay-1">
                <div class="conduit-line-outer">
                    <div class="conduit-line-progress" id="conduitLine"></div>
                </div>

                <!-- 2014 -->
                <div class="conduit-step" data-step="1">
                    <div class="conduit-node reveal-node">
                        <div class="node-glow"></div>
                        <span class="node-year">2014</span>
                    </div>
                    <div class="conduit-content-wrap">
                        <div class="conduit-card card-premium-light">
                            <div class="c-header"><i class="fa-solid fa-seedling"></i></div>
                            <h3>The Foundation</h3>
                            <p class="subtitle">Launched <?= COMPANY_NAME ?> with a focus on robust Unix-based architectures and small business solutions.</p>
                        </div>
                    </div>
                </div>

                <!-- 2017 -->
                <div class="conduit-step" data-step="2">
                    <div class="conduit-node reveal-node">
                        <div class="node-glow"></div>
                        <span class="node-year">2017</span>
                    </div>
                    <div class="conduit-content-wrap">
                        <div class="conduit-card card-premium-light">
                            <div class="c-header"><i class="fa-solid fa-tower-broadcast"></i></div>
                            <h3>Market Expansion</h3>
                            <p class="subtitle">Scaled our operations to handle international enterprise intranets and expanded into Windows-based software.</p>
                        </div>
                    </div>
                </div>

                <!-- 2020 -->
                <div class="conduit-step" data-step="3">
                    <div class="conduit-node reveal-node">
                        <div class="node-glow"></div>
                        <span class="node-year">2020</span>
                    </div>
                    <div class="conduit-content-wrap">
                        <div class="conduit-card card-premium-light">
                            <div class="c-header"><i class="fa-solid fa-microchip"></i></div>
                            <h3>Team Consolidation</h3>
                            <p class="subtitle">Assembled our current core of 25+ developers and launched our full-service Mobile App Innovation Lab.</p>
                        </div>
                    </div>
                </div>

                <!-- Present -->
                <div class="conduit-step current" data-step="4">
                    <div class="conduit-node reveal-node">
                        <div class="node-glow"></div>
                        <span class="node-year">2024</span>
                    </div>
                    <div class="conduit-content-wrap">
                        <div class="conduit-card card-premium-light">
                            <div class="c-header"><i class="fa-solid fa-globe"></i></div>
                            <h3>Global Transformation</h3>
                            <p class="subtitle">Orchestrating the technology evolution for Fortune 500 companies with AI-driven, scalable architectures.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTENT SECTIONS -->
    <?php include 'reuseable-block/why.php'; ?>
    <?php include 'reuseable-block/process.php'; ?>
    <?php include 'reuseable-block/cta.php'; ?>

    <?php include 'partials/footer.php'; ?>
</body>

</html>