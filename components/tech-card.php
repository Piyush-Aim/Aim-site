<?php
$tcClass = isset($techCardClass) ? $techCardClass : '';
?>

<div class="tech-node-card <?= $tcClass ?>">
    <div class="card-content">
        <div class="tech-card-header">
            <div class="tech-icon-box">
                <i class="<?= htmlspecialchars($tech['logo']) ?>"></i>
            </div>
            <div class="expertise-badge"><?= htmlspecialchars($tech['expertise']) ?></div>
        </div>
        <h2 class="tech-name"><?= htmlspecialchars($tech['name']) ?></h2>
        <p class="tech-desc"><?= htmlspecialchars($tech['desc']) ?></p>

        <?php if (!empty($tech['best_for'])): ?>
            <div class="tech-use-cases">
                <p class="use-case-label">Best For:</p>
                <div class="use-cases-list">
                    <?php foreach ((array)$tech['best_for'] as $useCase): ?>
                        <p class="use-case-item"><?= htmlspecialchars($useCase) ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="tech-card-footer">
        <?php
        $cardLink = isset($tech['slug']) ? url('technology/' . $tech['slug']) : url('contact');
        $cardCta = isset($tech['slug']) ? 'Explore Detail' : 'Consult Now';
        ?>
        <a href="<?= $cardLink ?>" class="tech-cta stretched-link">
            <?= $cardCta ?> <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>
</div>