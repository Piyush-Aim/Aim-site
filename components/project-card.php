<?php

if (!isset($project)) return;

// Resolve Top Tag (Priority: 'tag' field, Fallback: First word of category)
$topTag = $project['tag'] ?? ucfirst(explode(' ', $project['category'] ?? 'Project')[0]);

// Resolve Metrics (Priority: metric_val/lbl, Fallback: First item in stats)
$mVal = $project['metric_val'] ?? ($project['stats'][0]['value'] ?? '');
$mLbl = $project['metric_lbl'] ?? ($project['stats'][0]['label'] ?? '');

// Resolve Tags Array
$cardTags = $project['tags'] ?? [];
if (empty($cardTags) && isset($project['tag'])) {
    $cardTags = [$project['tag']];
}
?>

<div class="project-card" data-category="<?= htmlspecialchars($project['category'] ?? '') ?>">
    <div class="card-top-tag"><?= htmlspecialchars($topTag) ?></div>

    <div class="browser-mockup">
        <div class="browser-header">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <div class="browser-body">
            <img src="<?= asset($project['img'] ?? '') ?>" alt="<?= htmlspecialchars($project['alt'] ?? $project['title'] ?? 'Project Image') ?>" loading="lazy">
            <div class="card-hover-overlay">
                <a href="<?= url('project/' . ($project['slug'] ?? '')) ?>" class="btn-hover-cta">
                    View Case Study <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="card-content-pane">
        <?php if ($mVal || $mLbl): ?>
            <div class="card-metric-row">
                <p class="m-val"><?= htmlspecialchars($mVal) ?></p>
                <p class="m-lbl"><?= htmlspecialchars($mLbl) ?></p>
            </div>
        <?php endif; ?>

        <h3 class="card-title"><?= htmlspecialchars($project['title'] ?? 'Untitled Project') ?></h3>

        <?php if (!empty($project['problem'])): ?>
            <p class="card-problem"><span>Challenge:</span> <?= htmlspecialchars($project['problem']) ?></p>
        <?php endif; ?>

        <p class="card-desc"><?= htmlspecialchars($project['desc'] ?? '') ?></p>

        <div class="card-tags">
            <?php foreach (array_slice($cardTags, 0, 3) as $t): ?>
                <p><?= htmlspecialchars($t) ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</div>