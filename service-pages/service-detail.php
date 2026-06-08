<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/data.php';
$servicesData = require __DIR__ . '/../config/services_data.php';

$slug = isset($_GET['slug']) ? htmlspecialchars($_GET['slug']) : '';
$stateSlug = isset($_GET['state']) ? htmlspecialchars($_GET['state']) : '';
$citySlug = isset($_GET['city']) ? htmlspecialchars($_GET['city']) : '';

if (empty($slug) || !isset($servicesData[$slug])) {
    header("Location: " . url('services'));
    exit;
}

$pageData = $servicesData[$slug];

// Load locations data
$locationsData = file_exists(__DIR__ . '/../config/locations_data.php') ? require __DIR__ . '/../config/locations_data.php' : [];

$locationName = '';

if ($stateSlug) {
    $localSlug = $slug . '-local';
    if (!isset($servicesData[$localSlug])) {
        header("Location: " . url('services/' . $slug));
        exit;
    }

    if (!isset($locationsData[$stateSlug])) {
        header("Location: " . url('services/' . $slug));
        exit;
    }

    $stateData = $locationsData[$stateSlug];
    $locationName = $stateData['name'];

    if ($citySlug) {
        if (!isset($stateData['cities'][$citySlug])) {
            header("Location: " . url('services/' . $slug . '/' . $stateSlug));
            exit;
        }
        $cityName = $stateData['cities'][$citySlug];
        $locationName = $cityName . ', ' . $stateData['name'];
    }

    // LOAD LOCAL CONFIG OVERRIDE
    $pageData = $servicesData[$localSlug];
}

function replaceLocationPlaceholders($data, $city, $state, $locationName)
{
    $targetLoc = $city ?: $state;
    if (is_array($data)) {
        foreach ($data as $key => $value) {
            $data[$key] = replaceLocationPlaceholders($value, $city, $state, $locationName);
        }
        return $data;
    } elseif (is_string($data)) {
        $data = str_replace('{target_loc}', $targetLoc, $data);
        $data = str_replace('{city}', $city ?: '', $data);
        $data = str_replace('{state}', $state ?: '', $data);
        return preg_replace('/\s+/', ' ', trim($data));
    }
    return $data;
}

$stateName = $stateSlug ? ($locationsData[$stateSlug]['name'] ?? '') : '';
$cityName  = ($citySlug && isset($locationsData[$stateSlug]['cities'][$citySlug])) ? $locationsData[$stateSlug]['cities'][$citySlug] : '';

$pageData = replaceLocationPlaceholders($pageData, $cityName, $stateName, $locationName);

$pageTitle = $pageData['pageTitle'];
$pageDescription = $pageData['pageDescription'];
$pageKey = $pageData['pageKey'];

$extraCSS = [
    asset('css/components/project-card.css'),
    asset('css/components/hero-form.css'),
    asset('css/sections/cta.css'),
    asset('css/components/testimonials.css'),
    asset('css/components/faq.css'),
    asset('css/services/service-detail.css'),
];
$extraJS = [
    asset('js/components/faq-accordion.js'),
    asset('js/services/service-detail.js')
];
?>

<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/../partials/head.php'; ?>

<body>
    <?php include __DIR__ . '/../partials/nav.php'; ?>

    <!-- HERO -->
    <section class="webdev-hero">
        <div class="hero-bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
        </div>
        <div class="hero-bg-accent"></div>
        <div class="hero-orb-center"></div>
        <div class="grid-overlay"></div>

        <div class="container">
            <div class="webdev-hero-grid">
                <div class="webdev-hero-text section-fade">
                    <div class="tag tag-primary">
                        <?= $pageData['hero']['tag'] ?>
                    </div>
                    <h1><?= $pageData['hero']['title'] ?></h1>
                    <p class="subtitle hero-sub">
                        <?= $pageData['hero']['subtitle'] ?>
                    </p>
                    <div class="hero-metrics">
                        <?php foreach ($pageData['hero']['metrics'] as $metric): ?>
                            <div class="metric">
                                <p class="metric-val"><?= $metric['val'] ?></p>
                                <p class="metric-lbl"><?= $metric['lbl'] ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php
                if (isset($pageData['hero']['form_title'])) {
                    $formTitle = $pageData['hero']['form_title'];
                    $formSub   = $pageData['hero']['form_sub'] ?? '';
                    $formId    = $stateSlug ? 'localLeadForm' : 'webdevLeadForm';
                    include __DIR__ . '/../components/hero-form.php';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- TRUST BADGES MARQUEE -->
    <section class="webdev-trust">
        <div class="container">
            <p class="trust-title">Trusted by 100+ businesses globally</p>
        </div>
        <div class="trust-marquee-wrap">
            <?php
            $clientLogos = getClientLogos();
            $totalTrustItems = count($clientLogos) * 6;
            $dynamicTrustDuration = $totalTrustItems * 1.5;
            ?>
            <div class="trust-marquee-track" style="animation-duration: <?= $dynamicTrustDuration ?>s;">
                <?php
                for ($i = 0; $i < 6; $i++):
                    foreach ($clientLogos as $logo): ?>
                        <div class="trust-badge-item">
                            <img src="<?= $logo['src'] ?>" alt="<?= $logo['alt'] ?>">
                        </div>
                <?php endforeach;
                endfor; ?>
            </div>
        </div>
    </section>

    <!-- INTRODUCTION -->
    <section class="webdev-intro">
        <div class="container">
            <div class="intro-professional-grid section-fade">
                <div class="intro-text">
                    <p class="tag tag-primary"><?= $pageData['intro']['tag'] ?></p>
                    <h2><?= $pageData['intro']['title'] ?></h2>
                    <p class="subtitle"><?= $pageData['intro']['subtitle'] ?></p>

                    <div class="intro-features-grid">
                        <?php foreach ($pageData['intro']['features'] as $feat): ?>
                            <div class="intro-feat-item">
                                <div class="feat-icon-box"><i class="<?= $feat['icon'] ?>"></i></div>
                                <div>
                                    <h4><?= $feat['title'] ?></h4>
                                    <p class="subtitle"><?= $feat['desc'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="intro-professional-visual">
                    <div class="professional-img-wrapper">
                        <img src="<?= url($pageData['intro']['img']) ?>" alt="Professional Team">

                        <!-- Floating Glass Cards -->
                        <div class="glass-stat-card gsc-1">
                            <div class="gsc-header">
                                <i class="<?= $pageData['intro']['glass_card_1']['icon'] ?>"></i>
                                <p><?= $pageData['intro']['glass_card_1']['label'] ?></p>
                            </div>
                            <div class="gsc-val"><?= $pageData['intro']['glass_card_1']['val'] ?></div>
                            <div class="gsc-bar">
                                <div class="gsc-progress" style="width: <?= $pageData['intro']['glass_card_1']['width'] ?>"></div>
                            </div>
                        </div>

                        <div class="glass-stat-card gsc-2">
                            <div class="gsc-header">
                                <i class="<?= $pageData['intro']['glass_card_2']['icon'] ?>"></i>
                                <p><?= $pageData['intro']['glass_card_2']['label'] ?></p>
                            </div>
                            <div class="gsc-val"><?= $pageData['intro']['glass_card_2']['val'] ?></div>
                            <p class="gsc-lbl"><?= $pageData['intro']['glass_card_2']['sub'] ?></p>
                        </div>

                        <div class="sc-floating-badge">
                            <i class="<?= $pageData['intro']['floating_badge']['icon'] ?>"></i>
                            <p><?= $pageData['intro']['floating_badge']['lbl'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICE -->
    <section class="webdev-types">
        <div class="container">
            <div class="section-header section-fade">
                <div class="tag tag-primary"><?= $pageData['types']['tag'] ?></div>
                <h2 class="s3-section-title"><?= $pageData['types']['title'] ?></h2>
                <p class="subtitle"><?= $pageData['types']['subtitle'] ?></p>
            </div>

            <!-- Tab buttons -->
            <div class="expertise-tabs-wrapper section-fade">
                <div class="expertise-tabs">
                    <?php
                    $first = true;
                    foreach ($pageData['types']['panels'] as $id => $data): ?>
                        <button class="exp-tab <?= $first ? 'active' : '' ?>" data-tab="<?= $id ?>">
                            <div class="tab-icon">
                                <i class="<?= $data['tab_icon'] ?>"></i>
                            </div>
                            <span><?= $data['tab_name'] ?></span>
                        </button>
                    <?php
                        $first = false;
                    endforeach; ?>
                </div>
                <div class="tab-indicator-track">
                    <div class="tab-indicator" id="dynamic-indicator"></div>
                </div>
            </div>

            <?php
            $first = true;
            foreach ($pageData['types']['panels'] as $id => $data): ?>
                <div class="expertise-panel <?= $first ? 'active' : '' ?> section-fade" data-panel="<?= $id ?>">
                    <div class="exp-panel-grid">
                        <div class="exp-panel-visual">
                            <div class="glass-image-wrapper">
                                <img src="<?= url($data['image']) ?>" alt="<?= htmlspecialchars($data['title']) ?>">
                                <?php if (isset($data['metric'])): ?>
                                    <div class="floating-metric">
                                        <i class="<?= $data['metric']['icon'] ?>"></i>
                                        <strong><?= $data['metric']['val'] ?></strong>
                                        <span><?= $data['metric']['lbl'] ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="exp-panel-content">
                            <div class="tag-minimal"><?= $data['tagline'] ?></div>
                            <h3><?= $data['title'] ?></h3>
                            <p><?= $data['desc'] ?></p>
                            <div class="exp-features-list">
                                <?php foreach ($data['features'] as $feature): ?>
                                    <div class="feat-li"><i class="fa-solid fa-check"></i> <?= htmlspecialchars($feature) ?></div>
                                <?php endforeach; ?>
                            </div>
                            <div class="exp-tech-chips">
                                <?php foreach ($data['techStack'] as $tech): ?>
                                    <span><?= htmlspecialchars($tech) ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $first = false;
            endforeach; ?>

        </div>
    </section>

    <!-- PROCESS-->
    <section class="webdev-process">
        <div class="container">
            <div class="section-header section-fade">
                <div class="tag tag-primary"><?= $pageData['process']['tag'] ?></div>
                <h2><?= $pageData['process']['title'] ?></h2>
                <p class="subtitle"><?= $pageData['process']['subtitle'] ?></p>
            </div>

            <div class="process-pulse-wrapper section-fade">
                <div class="pulse-track-line">
                    <div class="pulse-glow"></div>
                </div>
                <div class="process-horz <?= $stateSlug ? 'is-local' : '' ?>">
                    <?php foreach ($pageData['process']['steps'] as $index => $step): ?>
                        <div class="process-horz-item">
                            <div class="ph-node-wrapper">
                                <div class="ph-step-node">
                                    <div class="node-glass"></div>
                                    <p class="node-num">0<?= $index + 1 ?></p>
                                </div>
                            </div>
                            <div class="ph-info-card">
                                <h4><?= $step['title'] ?></h4>
                                <p><?= $step['desc'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- BENEFITS -->
    <section class="webdev-benefits">
        <div class="container">
            <div class="section-header section-fade">
                <div class="tag tag-primary"><?= $pageData['benefits']['tag'] ?></div>
                <h2 class="s3-section-title"><?= $pageData['benefits']['title'] ?></h2>
                <p class="subtitle"><?= $pageData['benefits']['subtitle'] ?></p>
            </div>

            <div class="benefits-grid section-fade">
                <?php foreach ($pageData['benefits']['cards'] as $b): ?>
                    <div class="benefit-card">
                        <div class="benefit-icon"><i class="<?= $b['icon'] ?>"></i></div>
                        <h4><?= $b['title'] ?></h4>
                        <p><?= $b['desc'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <?php
    $realServiceTestimonials = getRealTestimonials($portfolioData, 3);
    ?>
    <section class="webdev-testimonials">
        <div class="container">
            <div class="section-header section-fade">
                <div class="tag tag-primary"><?= $pageData['testimonials']['tag'] ?? 'Client Reviews' ?></div>
                <h2 class="s3-section-title"><?= $pageData['testimonials']['title'] ?? 'What Our <span class="gradient-text">Clients Say</span>' ?></h2>
            </div>

            <div class="webdev-t-grid section-fade">
                <?php foreach ($realServiceTestimonials as $t): ?>
                    <div class="webdev-t-card">
                        <div class="t-rating">
                            <?php for ($i = 0; $i < $t['rating']; $i++): ?><i class="fa-solid fa-star"></i><?php endfor; ?>
                        </div>
                        <p class="t-body">"<?= $t['text'] ?>"</p>
                        <div class="t-author">
                            <div class="t-avatar" style="background: <?= $t['color'] ?? 'var(--primary)' ?>; color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.1rem;">
                                <?php if (!empty($t['avatar'])): ?>
                                    <img src="<?= $t['avatar'] ?>" alt="<?= htmlspecialchars($t['name']) ?>" style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover;">
                                <?php else: ?>
                                    <?= $t['initials'] ?? 'CL' ?>
                                <?php endif; ?>
                            </div>
                            <div>
                                <p><strong class="t-name"><?= htmlspecialchars($t['name']) ?></strong></p>
                                <span class="t-role"><?= htmlspecialchars($t['role']) ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="webdev-faq">
        <div class="container">
            <div class="section-header section-fade">
                <div class="tag tag-primary"><?= $pageData['faq']['tag'] ?></div>
                <h2 class="s3-section-title"><?= $pageData['faq']['title'] ?></h2>
            </div>

            <div class="faq-accordion section-fade">
                <?php foreach ($pageData['faq']['list'] as $faq): ?>
                    <div class="faq-item">
                        <button class="faq-toggle"><?= htmlspecialchars($faq['q']) ?> <i class="fa-solid fa-plus faq-icon"></i></button>
                        <div class="faq-content">
                            <p><?= htmlspecialchars($faq['a']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <?php include __DIR__ . '/../reuseable-block/cta.php'; ?>

    <?php include __DIR__ . '/../partials/footer.php'; ?>
</body>

</html>