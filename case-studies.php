<?php
require_once __DIR__ . '/config/config.php';
$pageKey = 'cases';
require_once __DIR__ . '/config/data.php';
$extraCSS = [
    asset('css/components/project-card.css'),
    asset('css/case-studies-page.css'),
    asset('css/sections/cta.css'),
    asset('css/sections/process.css'),
    asset('css/sections/testimonials.css'),
];
$extraJS = [
    asset('js/case-studies.js'),
    asset('js/components/testimonials.js'),
];

require_once 'config/data.php';

// Data Loading (Featured first, Grid shows all)
$featuredProject = $portfolioData[0];
$gridProjects = $portfolioData;

require_once 'partials/head.php';
?>

<body>
    <?php include 'partials/nav.php'; ?>

    <!-- 1. HERO -->
    <section class="case-hero-monolith section-fade">
        <div class="hero-bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
        </div>
        <div class="hero-bg-accent"></div>
        <div class="hero-orb-center"></div>
        <div class="grid-overlay"></div>

        <div class="container hero-content">
            <div class="pills-side left-side">
                <div class="side-pill glass-panel floating-1">
                    <i class="fa-solid fa-award"></i> 10+ Years
                </div>
                <div class="side-pill glass-panel floating-2">
                    <i class="fa-solid fa-diagram-project"></i> 500+ Projects
                </div>
                <div class="side-pill glass-panel floating-3">
                    <i class="fa-solid fa-thumbs-up"></i> 98% Success
                </div>
            </div>
            <div class="hero-content-centered section-fade">
                <?php render_breadcrumbs(['Home' => url(''), 'Case Studies' => '']); ?>
                <p class="tag tag-primary">Engineering Exceptional Success</p>
                <h1>The Architecture of <span class="gradient-text">Exceptional Success</span></h1>
                <p class="subtitle">We bridge the gap between creative vision and technical precision. <?= COMPANY_NAME ?> empowers global brands with high-performance ecosystems, optimized by AI-Driven leadership.</p>
                <div class="hero-cta-wrapper">
                    <a href="#projects" class="btn btn-primary-lg">
                        Explore Case Studies <i class="fa-solid fa-arrow-down"></i>
                    </a>
                    <a href="<?= url('contact') ?>" class="btn btn-outline-premium">
                        Start Your Project <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="pills-side right-side">
                <div class="side-pill glass-panel floating-2">
                    <i class="fa-solid fa-users-gear"></i> 25+ Experts
                </div>
                <div class="side-pill glass-panel floating-1">
                    <i class="fa-solid fa-earth-americas"></i> Global Reach
                </div>
                <div class="side-pill glass-panel floating-3">
                    <i class="fa-solid fa-headset"></i> 24/7 Support
                </div>
            </div>
        </div>
    </section>

    <!-- 2. FEATURED HIGHLIGHT -->
    <section class="featured-highlight section-fade">
        <div class="container">
            <div class="featured-card">
                <div class="featured-visual">
                    <img src="<?= asset($featuredProject['img']) ?>" alt="<?= $featuredProject['alt'] ?>">
                    <?php if (!empty($featuredProject['metric_val']) && !empty($featuredProject['metric_lbl'])): ?>
                        <div class="featured-metric-badge">
                            <p class="fmb-val"><?= $featuredProject['metric_val'] ?></p>
                            <p class="fmb-lbl"><?= $featuredProject['metric_lbl'] ?></p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="featured-info">
                    <p class="tag tag-primary"><?= ucfirst(explode(' ', $featuredProject['category'])[0]) ?> Highlight</p>
                    <h2><?= $featuredProject['title'] ?></h2>
                    <p class="card-problem"><span>Challenge:</span> <?= $featuredProject['problem'] ?></p>
                    <p class="featured-desc"><?= $featuredProject['desc'] ?></p>
                    <div class="featured-tags-row">
                        <?php foreach ($featuredProject['tags'] as $tag): ?>
                            <p>#<?= $tag ?></p>
                        <?php endforeach; ?>
                    </div>
                    <div class="featured-cta">
                        <a href="<?= url('project/' . $featuredProject['slug']) ?>" class="btn">View Case Study <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. PROJECT GALLERY -->
    <section id="projects" class="project-gallery">
        <div class="container">
            <div class="section-header section-fade">
                <p class="tag tag-primary">Our Legacy of Success</p>
                <h2>Proven <span class="gradient-text">Results</span> Across Every Industry</h2>
                <p class="subtitle">Explore the technical depth and measurable impact of our major projects delivered over the last decade.</p>
            </div>

            <!-- Category Filtering Tabs -->
            <div class="filter-tabs section-fade">
                <button class="filter-btn btn active" data-filter="all">All Projects</button>
                <button class="filter-btn btn" data-filter="ecommerce">E-commerce</button>
                <button class="filter-btn btn" data-filter="web">Web Design</button>
                <button class="filter-btn btn" data-filter="seo">SEO & Marketing</button>
                <button class="filter-btn btn" data-filter="crm">CRM</button>
            </div>

            <div class="project-grid">
                <?php foreach ($gridProjects as $project): ?>
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