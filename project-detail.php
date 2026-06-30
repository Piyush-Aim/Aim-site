<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/data.php';
$projectsData = require __DIR__ . '/config/projects_data.php';

$projectSlug = isset($_GET['slug']) ? htmlspecialchars($_GET['slug']) : '';

if (empty($projectSlug) || !isset($projectsData[$projectSlug])) {
    require __DIR__ . '/404.php';
    exit;
}

$project = $projectsData[$projectSlug];

$pageTitle = $project['metaTitle'] ?? (isset($project['title'], $project['type']) ? "{$project['title']} | {$project['type']} - " . COMPANY_NAME : COMPANY_NAME);
$pageDescription = $project['metaDescription'] ?? ($project['heroSubtitle'] ?? "Expert " . ($project['type'] ?? 'Project') . " case study for {$project['title']} by " . COMPANY_NAME);

$pageKey = 'portfolio';

$extraCSS = [
    asset('css/project-detail.css'),
    asset('css/sections/cta.css'),
];
$extraJS = [
    asset('js/project-detail.js')
];

?>
<!DOCTYPE html>
<html lang="en">

<?php include 'partials/head.php'; ?>

<body>
    <?php include 'partials/nav.php'; ?>

    <section class="case-hero section-fade">
        <div class="hero-bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
        </div>
        <div class="hero-bg-accent"></div>
        <div class="hero-orb-center"></div>
        <div class="grid-overlay"></div>

        <div class="container">
            <div class="hero-inner">
                <?php
                render_breadcrumbs([
                    'Home' => url(''),
                    'Our Work' => url('portfolio'),
                    strip_tags($project['title'] ?? 'Case Study') => ''
                ]);
                ?>
                <p class="tag tag-primary"><?php echo $project['tag']; ?></p>
                <h1><?php echo $project['heroTitle']; ?></h1>
                <p class="subtitle"><?php echo $project['heroSubtitle']; ?></p>

                <div class="project-summary-grid">
                    <div class="summary-card">
                        <p class="meta-label">Project</p>
                        <p class="meta-value"><?php echo $project['type']; ?></p>
                    </div>
                    <div class="summary-card">
                        <p class="meta-label">Provided</p>
                        <p class="meta-value"><?php echo implode(', ', $project['services']); ?></p>
                    </div>
                    <div class="summary-card">
                        <p class="meta-label">Year</p>
                        <p class="meta-value"><?php echo $project['year']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container case-detail-grid">
        <div class="case-main-content">

            <?php if (!empty($project['challengeIssues'])): ?>
                <section id="challenge" class="section-fade">
                    <div class="container">
                        <div class="section-header">
                            <p class="tag tag-primary">The Challenge</p>
                            <h2>The <span class="gradient-text">Challenge</span></h2>
                            <p class="subtitle"><?php echo $project['challengeSubtitle']; ?></p>
                        </div>
                        <h3 id="challenge-issues" class="subsection-title"><?php echo $project['challengeIssuesTitle'] ?? 'Key Issues'; ?></h3>
                        <div class="challenge-grid">
                            <?php foreach ($project['challengeIssues'] as $issue): ?>
                                <div class="challenge-card">
                                    <i class="<?php echo $issue['icon']; ?>"></i>
                                    <p><?php echo $issue['text']; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <?php if (!empty($project['process'])): ?>
                <section id="process" class="section-fade">
                    <div class="container">
                        <div class="section-header">
                            <p class="tag tag-primary">The Process</p>
                            <h2>The <span class="gradient-text">Process</span></h2>
                        </div>

                        <div class="process-grid">
                            <?php foreach ($project['process'] as $step): ?>
                                <div class="process-card">
                                    <h4 id="<?php echo $step['id']; ?>"><i class="<?php echo $step['icon']; ?>"></i> <?php echo $step['title']; ?></h4>
                                    <ul>
                                        <?php foreach ($step['steps'] as $item): ?>
                                            <li><i class="fa-solid fa-check icon-primary"></i> <?php echo $item; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <?php if (!empty($project['actions'])): ?>
                <section id="actions" class="section-fade">
                    <div class="container">
                        <div class="section-header">
                            <p class="tag tag-primary">What We Did</p>
                            <h2>What We <span class="gradient-text">Did</span></h2>
                        </div>
                        <div class="actions-card">
                            <ul class="case-check-list">
                                <?php foreach ($project['actions'] as $action): ?>
                                    <li><i class="fa-solid fa-check icon-primary"></i> <?php echo $action; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php if (!empty($project['img'])): ?>
                                <div class="actions-image-container" style="background-image: url('<?php echo asset($project['img']); ?>');"></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <?php if (!empty($project['results'])): ?>
                <section id="results" class="section-fade">
                    <div class="container">
                        <div class="section-header">
                            <p class="tag tag-primary">Results</p>
                            <h2>The <span class="gradient-text">Turnaround</span></h2>
                            <p class="subtitle"><?php echo $project['resultsSubtitle']; ?></p>
                        </div>

                        <h3 id="results-overview" class="subsection-title"><?php echo $project['resultsOverviewTitle'] ?? 'Results at a glance'; ?></h3>
                        <div class="results-grid">
                            <?php foreach ($project['results'] as $result): ?>
                                <div class="result-card">
                                    <h4><?php echo $result['title']; ?></h4>
                                    <p><?php echo $result['text']; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <?php if (!empty($project['testimonial']['text'])): ?>
                <section id="testimonial" class="section-fade">
                    <div class="container">
                        <div class="section-header">
                            <p class="tag tag-primary">Client Feedback</p>
                            <h2>Client <span class="gradient-text">Feedback</span></h2>
                        </div>
                        <div class="quote-card">
                            <i class="fa-solid fa-quote-left quote-icon"></i>
                            <p><?php echo $project['testimonial']['text']; ?></p>
                            <div class="quote-footer">
                                <span><?php echo $project['testimonial']['name']; ?></span>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <?php if (!empty($project['performance'])): ?>
                <section id="performance" class="section-fade">
                    <div class="container">
                        <div class="section-header">
                            <p class="tag tag-primary">Performance Highlights</p>
                            <h2>Performance <span class="gradient-text">Highlights</span></h2>
                        </div>

                        <div class="performance-grid">
                            <?php foreach ($project['performance'] as $perf): ?>
                                <div class="performance-card">
                                    <h4><?php echo $perf['title']; ?></h4>
                                    <ul class="perf-list">
                                        <?php foreach ($perf['items'] as $item): ?>
                                            <li>
                                                <p><?php echo $item; ?></p>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <?php if (!empty($project['conclusion'])): ?>
                <section id="conclusion" class="section-fade">
                    <div class="container">
                        <div class="section-header">
                            <p class="tag tag-primary">Conclusion</p>
                            <h2>Conclusion</h2>
                        </div>
                        <div class="conclusion-card">
                            <h5><?php echo $project['conclusion']['heading']; ?></h5>
                            <ul class="conclusion-list">
                                <?php foreach ($project['conclusion']['points'] as $point): ?>
                                    <li><?php echo $point; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="outcome-card">
                            <p><strong>Outcome:</strong> <?php echo $project['conclusion']['outcome']; ?></p>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

        </div>

        <aside class="case-sidebar section-fade">
            <div class="sticky-card">
                <p class="sidebar-title">Table of Contents</p>
                <nav class="case-toc">
                    <ul>
                        <?php if (!empty($project['challengeIssues'])): ?>
                            <li>
                                <a href="#challenge">1. The Challenge</a>
                                <ul>
                                    <li><a href="#challenge-issues">1.1 <?php echo $project['challengeIssuesTitle'] ?? 'Key Issues'; ?></a></li>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <?php if (!empty($project['process'])): ?>
                            <li>
                                <a href="#process">2. The Process</a>
                                <ul>
                                    <?php foreach ($project['process'] as $idx => $step): ?>
                                        <li><a href="#<?php echo $step['id']; ?>">2.<?php echo $idx + 1; ?> <?php echo $step['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <?php if (!empty($project['actions'])): ?>
                            <li><a href="#actions">3. What We Did</a></li>
                        <?php endif; ?>

                        <?php if (!empty($project['results'])): ?>
                            <li>
                                <a href="#results">4. The Turnaround</a>
                                <ul>
                                    <li><a href="#results-overview">4.1 <?php echo $project['resultsOverviewTitle'] ?? 'Results at a glance'; ?></a></li>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <?php if (!empty($project['testimonial']['quote'])): ?>
                            <li><a href="#testimonial">5. Client Feedback</a></li>
                        <?php endif; ?>

                        <?php if (!empty($project['performance'])): ?>
                            <li><a href="#performance">6. Performance Highlights</a></li>
                        <?php endif; ?>

                        <?php if (!empty($project['conclusion'])): ?>
                            <li><a href="#conclusion">7. Conclusion</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </aside>
    </div>

    <div class="sidebar-overlay"></div>
    <button class="toc-btn-mobile" id="tocToggle">
        <i class="fa-solid fa-list-ul"></i>
        <span>TOC</span>
    </button>

    <?php include 'reuseable-block/cta.php'; ?>
    <?php include 'partials/footer.php'; ?>
</body>

</html>