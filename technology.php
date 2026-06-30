<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/data.php';


$pageKey = 'technology';
$extraCSS = [
    asset('css/sections/cta.css'),
    asset('css/sections/why.css'),
    asset('css/sections/process.css'),
    asset('css/components/tech-card.css'),
    asset('css/technology.css')
];
$extraJS = [
    asset('js/technology.js'),
];

// Collect "Power Technologies" dynamically from tech_data.php for the Glass Engine
$featuredNames = ['React.js', 'Node.js', 'Laravel', 'Flutter', 'Figma', 'Python', 'PostgreSQL', 'AWS EC2'];
$powerTech = [];

foreach ($technologyCategories as $category) {
    foreach ($category['techs'] as $tech) {
        if (in_array($tech['name'], $featuredNames)) {
            $powerTech[] = [
                'name' => $tech['name'],
                'icon' => $tech['logo']
            ];
        }
    }
}
// Sort powerTech to match the order of featuredNames if desired
usort($powerTech, function ($a, $b) use ($featuredNames) {
    return array_search($a['name'], $featuredNames) - array_search($b['name'], $featuredNames);
});
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'partials/head.php'; ?>

<body>
    <?php include 'partials/nav.php'; ?>

    <section class="tech-hero">
        <div class="hero-bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
        </div>
        <div class="hero-bg-accent"></div>
        <div class="hero-orb-center"></div>
        <div class="grid-overlay"></div>

        <div class="container">
            <div class="tech-hero-grid section-fade visible">
                <div class="tech-hero-text">
                    <?php render_breadcrumbs(['Home' => url(''), 'Technologies' => '']); ?>
                    <p class="tag tag-primary">
                        <i class="fa-solid fa-bolt-lightning"></i> The Power Behind Innovation
                    </p>
                    <h1>Architecting the <span class="gradient-text">Exceptional</span></h1>
                    <p class="subtitle">
                        We don't just write code; we engineer modular, future-proof digital engines using the world's most advanced technology protocols.
                    </p>
                    <div class="hero-actions">
                        <a href="<?= url('contact') ?>" class="btn btn-primary-lg">
                            Build Your Vision <i class="fa-solid fa-chevron-right"></i>
                        </a>
                        <div class="hero-stats">
                            <div class="stat-card">
                                <div class="stat-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                                <div class="stat-info">
                                    <span class="stat-number">60+</span>
                                    <span class="stat-label">Modern Tools</span>
                                </div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-icon"><i class="fa-solid fa-shield-halved"></i></div>
                                <div class="stat-info">
                                    <span class="stat-number">100%</span>
                                    <span class="stat-label">Enterprise Secure</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tech-hero-visual">
                    <div class="glass-engine-wrapper">
                        <div class="glass-device">
                            <div class="device-screen">
                                <div class="screen-content">
                                    <div class="circuit-pattern"></div>
                                    <div class="core-node"></div>
                                </div>
                            </div>
                            <div class="device-base"></div>
                        </div>

                        <!-- Streaming Tech Icons -->
                        <div class="tech-stream">
                            <?php foreach ($powerTech as $index => $tech): ?>
                                <div class="stream-item" style="--i: <?= $index ?>;">
                                    <div class="item-inner">
                                        <i class="<?= $tech['icon'] ?>"></i>
                                        <span class="item-name"><?= $tech['name'] ?></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Categories Section -->
    <section class="tech-categories-sec">
        <div class="container">
            <div class="section-header text-center">
                <p class="tag tag-primary mx-auto">Expertise Ecosystem</p>
                <h2>Comprehensive <span class="gradient-text">Technology Portfolio</span></h2>
                <p class="subtitle mx-auto">
                    We specialize in modern architectures that drive business impact across the entire technical spectrum.
                </p>
            </div>

            <div class="tech-tabs-wrapper">
                <!-- Sticky Sentinel for Scroll Logic -->
                <div id="tech-sticky-sentinel"></div>

                <div class="tech-tabs-nav">
                    <div class="nav-indicator"></div>
                    <button class="tech-tab-btn active" data-target="all">
                        <i class="fa-solid fa-layer-group"></i>
                        <span>All</span>
                    </button>
                    <?php foreach ($technologyCategories as $key => $category): ?>
                        <button class="tech-tab-btn" data-target="<?= $key ?>">
                            <i class="<?= $category['icon'] ?>"></i>
                            <span><?= $category['title'] ?></span>
                        </button>
                    <?php endforeach; ?>
                </div>

                <!-- Tab Panels -->
                <div class="tech-tabs-content">
                    <!-- Consolidated 'All' Panel -->
                    <div class="tech-panel active" id="all">
                        <div class="tech-card-grid">
                            <?php $allCount = 0; ?>
                            <?php foreach ($technologyCategories as $category): ?>
                                <?php foreach ($category['techs'] as $tech): ?>
                                    <?php
                                    $techCardClass = ($allCount >= 9) ? 'hidden-tech-card' : '';
                                    include 'components/tech-card.php';
                                    ?>
                                    <?php $allCount++; ?>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </div>
                        <?php if ($allCount > 9): ?>
                            <div class="load-more-wrapper">
                                <button class="btn-load-more" data-target="all">
                                    <span>View More Technologies</span>
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php foreach ($technologyCategories as $key => $category): ?>
                        <div class="tech-panel" id="<?= $key ?>">
                            <div class="tech-card-grid">
                                <?php $catCount = 0; ?>
                                <?php foreach ($category['techs'] as $tech): ?>
                                    <?php
                                    $techCardClass = ($catCount >= 9) ? 'hidden-tech-card' : '';
                                    include 'components/tech-card.php';
                                    ?>
                                    <?php $catCount++; ?>
                                <?php endforeach; ?>
                            </div>
                            <?php if ($catCount > 9): ?>
                                <div class="load-more-wrapper">
                                    <button class="btn-load-more" data-target="<?= $key ?>">
                                        <span>View More <?= $category['title'] ?></span>
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <?php include 'reuseable-block/why.php'; ?>
    <?php include 'reuseable-block/process.php'; ?>
    <?php include 'reuseable-block/cta.php'; ?>
    <?php include 'partials/footer.php'; ?>
</body>

</html>