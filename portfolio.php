<?php
require_once __DIR__ . '/config/config.php';
$pageKey = 'portfolio';
require_once __DIR__ . '/config/data.php';
$extraCSS = [
    asset('css/components/project-card.css'),
    asset('css/portfolio.css'),
    asset('css/sections/process.css'),
    asset('css/sections/testimonials.css'),
    asset('css/sections/cta.css'),
];
$extraJS = [
    asset('js/portfolio.js'),
    asset('js/components/testimonials.js'),
];

?>
<!DOCTYPE html>
<html lang="en">

<?php include 'partials/head.php'; ?>

<body>
    <?php include 'partials/nav.php'; ?>

    <!-- ===================== HERO ===================== -->
    <section class="port-hero">
        <div class="hero-bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
        </div>
        <div class="hero-bg-accent"></div>
        <div class="hero-orb-center"></div>
        <div class="grid-overlay"></div>

        <div class="container">
            <div class="port-hero-inner section-fade">
                <?php render_breadcrumbs(['Home' => url(''), 'Our Work' => '']); ?>
                <p class="tag tag-primary">Digital Masterpieces </p>
                <h1 class="port-hero-h1">
                    Results That <span class="gradient-text">Defines</span> Brands
                </h1>
                <p class="subtitle">
                    We engineer experiences that move markets. 500+ projects delivered across 30+ countries — each one a precision instrument for growth.
                </p>

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

                <a href="#port-showcase" class="port-scroll-hint" aria-label="Scroll to explore projects">
                    <div class="port-scroll-mouse">
                        <div class="port-scroll-wheel"></div>
                    </div>
                    <p>Scroll to explore</p>
                </a>
            </div>
        </div>

    </section>

    <!-- ===================== INTERACTIVE SHOWCASE ===================== -->
    <section id="port-showcase" class="pshowcase">
        <div class="pshowcase-inner">
            <div class="pshowcase-list" id="pshowcaseList">
                <div class="pshowcase-list-header">
                    <p class="tag tag-primary">Case Studies</p>
                    <h2>Work We're <span class="gradient-text">Proud Of</span></h2>
                    <p class="subtitle">Click any project to explore the full story.</p>
                </div>
                <?php foreach (array_slice($portfolioData, 0, 10) as $idx => $project): ?>
                    <button
                        class="pshow-item <?php echo $idx === 0 ? 'is-active' : ''; ?>"
                        data-index="<?php echo $idx; ?>"
                        aria-label="View <?php echo $project['title']; ?>">
                        <div class="pshow-item-left">
                            <p class="pshow-num"><?php printf('%02d', $idx + 1); ?></p>
                            <div class="pshow-meta">
                                <p class="pshow-tag"><?php echo $project['tag']; ?></p>
                                <p class="pshow-title"><?php echo $project['title']; ?></p>
                            </div>
                        </div>
                        <div class="pshow-arrow"><i class="fa-solid fa-arrow-right"></i></div>
                        <!-- Progress bar fills when active -->
                        <div class="pshow-progress">
                            <div class="pshow-progress-bar"></div>
                        </div>
                    </button>
                <?php endforeach; ?>
                <!-- Counter -->
                <div class="pshow-counter">
                    <p id="pshowCurrent">01</p>
                    <p class="pshow-counter-sep">/</p>
                    <p class="pshow-counter-total"><?php printf('%02d', min(10, count($portfolioData))); ?></p>
                </div>
            </div>

            <!-- RIGHT: Detail Panel -->
            <div class="pshowcase-detail" id="pshowcaseDetail">

                <?php foreach (array_slice($portfolioData, 0, 10) as $idx => $project): ?>
                    <div class="pshow-panel <?php echo $idx === 0 ? 'is-active' : ''; ?>" data-index="<?php echo $idx; ?>">
                        <!-- Image -->
                        <div class="pshow-img-wrap">
                            <img src="<?php echo asset($project['img']); ?>" alt="<?php echo $project['title']; ?>" loading="lazy">
                            <div class="pshow-img-overlay"></div>
                        </div>
                        <!-- Content card floating over image bottom -->
                        <div class="pshow-content">
                            <p class="tag tag-primary pshow-cat-tag"><?php echo $project['tag']; ?></p>
                            <h3 class="g-card-title pshow-h3"><?php echo $project['title']; ?></h3>
                            <p class="g-card-text pshow-desc"><?php echo $project['desc']; ?></p>
                            <!-- Animated stats -->
                            <div class="pshow-stats">
                                <?php foreach (array_slice($project['results'], 0, 3) as $res): ?>
                                    <div class="pshow-stat">
                                        <p class="pshow-stat-num"><?php echo $res['title']; ?></p>
                                        <p class="pshow-stat-lbl"><?php echo $res['text']; ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <a href="<?= url('project/' . $project['slug']) ?>" class="btn pshow-cta-btn">
                                View Full Case Study <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                <?php endforeach; ?>

                <!-- Nav arrows -->
                <div class="pshow-nav">
                    <button class="pshow-nav-btn" id="pshowPrev" aria-label="Previous project">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <button class="pshow-nav-btn" id="pshowNext" aria-label="Next project">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== PORTFOLIO GALLERY ===================== -->
    <section id="projects" class="project-gallery">
        <div class="container">
            <div class="section-header section-fade">
                <p class="tag tag-primary">Master Gallery</p>
                <h2>Full <span class="gradient-text">Portfolio</span> Showcase</h2>
                <p class="subtitle">A comprehensive look at our decade-long legacy of building digital excellence.</p>
            </div>

            <!-- Category Filtering Tabs -->
            <div class="filter-tabs section-fade">
                <button class="filter-btn btn active" data-filter="all">All Projects</button>
                <button class="filter-btn btn" data-filter="web">Web Design</button>
                <button class="filter-btn btn" data-filter="ecommerce">E-Commerce</button>
                <button class="filter-btn btn" data-filter="seo">SEO & Marketing</button>
                <button class="filter-btn btn" data-filter="crm">CRM</button>
            </div>

            <div class="project-grid" id="projectGrid">
                <?php foreach ($portfolioData as $project): ?>
                    <?php include 'components/project-card.php'; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include 'reuseable-block/process.php'; ?>
    <?php include 'reuseable-block/testimonials.php'; ?>
    <?php include 'reuseable-block/cta.php'; ?>

    <?php include 'partials/footer.php'; ?>

</body>

</html>