<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/data.php';

$slug = isset($_GET['slug']) ? htmlspecialchars($_GET['slug']) : '';

if (empty($slug) || !isset($appTechMapping[$slug])) {
    header("Location: " . url('technology'));
    exit;
}

$techData = require __DIR__ . '/config/technologies/' . $appTechMapping[$slug];

$pageTitle = $techData['pageTitle'];
$pageDescription = $techData['pageDescription'];
$pageKey = $techData['pageKey'];

$extraCSS = [
    asset('css/components/tech-card.css'),
    asset('css/components/hero-form.css'),
    asset('css/sections/cta.css'),
    asset('css/components/testimonials.css'),
    asset('css/components/faq.css'),
    asset('css/tech-detail.css'),
];
$extraJS = [
    asset('js/components/faq-accordion.js')
];
?>

<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/partials/head.php'; ?>

<body>
    <?php include __DIR__ . '/partials/nav.php'; ?>

    <!-- HERO SECTION -->
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
                    <div class="tag tag-primary"><i class="<?= htmlspecialchars($techData['hero']['tag_icon']) ?>"></i> <?= htmlspecialchars($techData['hero']['tag']) ?></div>
                    <h1><?= $techData['hero']['title'] ?></h1>
                    <p class="subtitle hero-sub">
                        <?= htmlspecialchars($techData['hero']['subtitle']) ?>
                    </p>
                </div>

                <!-- RIGHT SIDE FORM -->
                <?php
                $formTitle = $techData['hero']['form_title'];
                $formSub = $techData['hero']['form_subtitle'];
                $formId = 'techLeadForm';
                include __DIR__ . '/components/hero-form.php';
                ?>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE TECH -->
    <section class="tech_why">
        <div class="container">
            <div class="section-header section-fade">
                <div class="tag tag-primary"><?= htmlspecialchars($techData['why_tech']['tag']) ?></div>
                <h2><?= $techData['why_tech']['title'] ?></h2>
                <p class="subtitle"><?= htmlspecialchars($techData['why_tech']['subtitle']) ?></p>
            </div>

            <div class="tech-why-bento section-fade">
                <div class="bento-feat wide">
                    <div>
                        <div class="bento-feat-icon icon-primary"><i class="<?= htmlspecialchars($techData['why_tech']['main_feature']['icon']) ?>"></i></div>
                        <h3><?= htmlspecialchars($techData['why_tech']['main_feature']['title']) ?></h3>
                        <p><?= htmlspecialchars($techData['why_tech']['main_feature']['desc']) ?></p>
                    </div>
                    <div class="tech-code-visual">
                        <?php if (!empty($techData['why_tech']['main_feature']['code_img'])): ?>
                            <img src="<?= url($techData['why_tech']['main_feature']['code_img']) ?>" alt="<?= htmlspecialchars($techData['why_tech']['main_feature']['title']) ?>">
                        <?php elseif (!empty($techData['why_tech']['main_feature']['code_snippet'])): ?>
                            <div class="code-visual">
                                <?php
                                $code = htmlspecialchars($techData['why_tech']['main_feature']['code_snippet']);

                                // Basic Keyword Highlighting
                                $code = str_replace(
                                    ['import', 'from', 'export default function', 'const', 'return', 'let ', 'function '],
                                    ['<span class="code-keyword">import</span>', '<span class="code-keyword">from</span>', '<span class="code-keyword">export default function</span>', '<span class="code-keyword">const</span>', '<span class="code-keyword">return</span>', '<span class="code-keyword">let </span>', '<span class="code-keyword">function </span>'],
                                    $code
                                );

                                // Basic Tag Highlighting (Search for escaped tags)
                                $code = preg_replace(
                                    '/(&lt;\/?[a-z0-9]+|&gt;)/i',
                                    '<span class="code-tag">$1</span>',
                                    $code
                                );

                                echo nl2br($code);
                                ?>

                            </div>
                        <?php endif; ?>
                    </div>

                </div>
                <?php foreach ($techData['why_tech']['features'] as $feat): ?>
                    <div class="bento-feat">
                        <div class="bento-feat-icon"><i class="<?= htmlspecialchars($feat['icon']) ?>"></i></div>
                        <h4><?= htmlspecialchars($feat['title']) ?></h4>
                        <p class="subtitle"><?= htmlspecialchars($feat['desc']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- BENEFITS -->
    <section class="tech_benefits">
        <div class="container">
            <div class="section-header section-fade">
                <div class="tag tag-primary"><?= htmlspecialchars($techData['benefits']['tag']) ?></div>
                <h2><?= $techData['benefits']['title'] ?></h2>
            </div>
            <div class="tech-bento-grid section-fade">
                <?php foreach ($techData['benefits']['cards'] as $card): ?>
                    <div class="tech-bento-card">
                        <div class="tb-icon-box icon-primary"><i class="<?= htmlspecialchars($card['icon']) ?>"></i></div>
                        <h4><?= htmlspecialchars($card['title']) ?></h4>
                        <p><?= htmlspecialchars($card['desc']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="tech_services">
        <div class="container">
            <div class="section-header section-fade">
                <div class="tag tag-primary"><?= htmlspecialchars($techData['services']['tag']) ?></div>
                <h2><?= $techData['services']['title'] ?></h2>
            </div>
            <div class="tech-bento-grid section-fade">
                <?php foreach ($techData['services']['cards'] as $card): ?>
                    <div class="tech-bento-card">
                        <div class="tb-icon-box icon-primary"><i class="<?= htmlspecialchars($card['icon']) ?>"></i></div>
                        <h4><?= htmlspecialchars($card['title']) ?></h4>
                        <p><?= htmlspecialchars($card['desc']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- DEVELOPMENT PROCESS -->
    <section class="tech_process">
        <div class="container">
            <div class="section-header section-fade">
                <div class="tag tag-primary"><?= htmlspecialchars($techData['process']['tag']) ?></div>
                <h2><?= $techData['process']['title'] ?></h2>
            </div>

            <div class="process-pulse-wrapper section-fade">
                <div class="pulse-track-line">
                    <div class="pulse-glow"></div>
                </div>
                <div class="process-horz">
                    <?php foreach ($techData['process']['steps'] as $index => $step): ?>
                        <div class="process-horz-item">
                            <div class="ph-node-wrapper">
                                <div class="ph-step-node">
                                    <div class="node-glass"></div>
                                    <p class="node-num"><?= sprintf('%02d', $index + 1) ?></p>
                                </div>
                            </div>
                            <div class="ph-info-card">
                                <h4><?= htmlspecialchars($step['title']) ?></h4>
                                <p><?= htmlspecialchars($step['desc']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE AIM INFOCORP -->
    <section class="why-section">
        <div class="container">
            <div class="why-grid">
                <div class="section-fade">
                    <div class="why-eyebrow">
                        <p class="tag tag-primary">Aim Infocorp</p>
                    </div>
                    <h2 class="why-h2"><?= $techData['why_choose_us']['title'] ?></h2>
                    <p class="subtitle"><?= htmlspecialchars($techData['why_choose_us']['description']) ?></p>

                    <div class="why-items">
                        <?php foreach ($techData['why_choose_us']['items'] as $index => $item): ?>
                            <div class="why-row section-fade delay-<?= $index + 1 ?>">
                                <div class="why-row-icon icon-primary"><i class="<?= htmlspecialchars($item['icon']) ?>"></i></div>
                                <div>
                                    <h4><?= htmlspecialchars($item['title']) ?></h4>
                                    <p><?= htmlspecialchars($item['desc']) ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="why-right section-fade delay-2">
                    <?php foreach ($techData['why_choose_us']['stats'] as $stat): ?>
                        <div class="bento-card <?= htmlspecialchars($stat['class']) ?>">
                            <div class="bento-icon"><i class="<?= htmlspecialchars($stat['icon']) ?> icon-<?= substr($stat['class'], 0, 1) ?>"></i></div>
                            <p class="bento-num"><?= htmlspecialchars($stat['num']) ?></p>
                            <p class="bento-lbl"><?= htmlspecialchars($stat['label']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="webdev-testimonials section-fade">
        <div class="container">
            <div class="section-header">
                <div class="tag tag-primary"><i class="fa-solid fa-quote-left"></i> TESTIMONIALS</div>
                <h2 class="s3-section-title">What Our <span class="gradient-text">Clients</span> Say</h2>
            </div>

            <div class="webdev-t-grid">
                <?php
                $realTechTestimonials = getRealTestimonials($portfolioData, 3);
                foreach ($realTechTestimonials as $t): ?>
                    <div class="webdev-t-card">
                        <div>
                            <div class="t-rating">
                                <?php for ($i = 0; $i < $t['rating']; $i++): ?>
                                    <i class="fa-solid fa-star"></i>
                                <?php endfor; ?>
                            </div>
                            <p class="t-body">"<?= htmlspecialchars($t['text']) ?>"</p>
                        </div>
                        <div class="t-author">
                            <div class="t-avatar" style="background: <?= $t['color'] ?? 'var(--primary)' ?>; color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.1rem; border-radius: 50%;">
                                <?php if (!empty($t['avatar'])): ?>
                                    <img src="<?= $t['avatar'] ?>" alt="<?= htmlspecialchars($t['name']) ?>" style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover;">
                                <?php else: ?>
                                    <?= $t['initials'] ?? 'CL' ?>
                                <?php endif; ?>
                            </div>
                            <div>
                                <strong class="t-name"><?= htmlspecialchars($t['name']) ?></strong>
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
                <div class="tag tag-primary">? FAQ</div>
                <h2 class="s3-section-title">Frequently Asked <span class="gradient-text">Questions</span></h2>
            </div>

            <div class="faq-accordion section-fade">
                <?php foreach ($techData['faq'] as $faq): ?>
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

    <!-- RELATED TECHNOLOGIES -->
    <section class="related_tech">
        <div class="container">
            <div class="section-header section-fade">
                <h2>Explore <span class="gradient-text">Related Technologies</span></h2>
            </div>

            <div class="tech-card-grid section-fade">
                <?php
                $currentSlug = $slug;
                $relatedTech = [];

                // 1. Find the current category key
                $currentCatKey = '';
                foreach ($technologyCategories as $catKey => $cat) {
                    foreach ($cat['techs'] as $t) {
                        if ($t['slug'] === $currentSlug) {
                            $currentCatKey = $catKey;
                            break 2;
                        }
                    }
                }

                // 2. Build candidates list (all in category minus current)
                $candidates = [];
                if ($currentCatKey && isset($technologyCategories[$currentCatKey])) {
                    foreach ($technologyCategories[$currentCatKey]['techs'] as $t) {
                        if ($t['slug'] !== $currentSlug) {
                            $candidates[] = $t;
                        }
                    }
                }

                // 3. Shuffle and pick 3
                if (!empty($candidates)) {
                    shuffle($candidates);
                    $relatedTech = array_slice($candidates, 0, 3);
                }

                // 4. Render cards
                foreach ($relatedTech as $tech) {
                    $techCardClass = '';
                    include __DIR__ . '/components/tech-card.php';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <?php include __DIR__ . '/reuseable-block/cta.php'; ?>

    <?php include __DIR__ . '/partials/footer.php'; ?>
</body>

</html>