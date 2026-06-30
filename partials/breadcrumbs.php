<?php
if (!isset($breadcrumbs) || empty($breadcrumbs)) {
    return;
}
?>

<div class="breadcrumbs-container">
    <nav aria-label="breadcrumb">
        <ul class="breadcrumbs-list">
            <?php foreach ($breadcrumbs as $index => $crumb): ?>
                <?php
                $isLast = ($index === count($breadcrumbs) - 1);
                $name = htmlspecialchars($crumb['name']);
                ?>

                <?php if ($isLast || empty($crumb['url'])): ?>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?= $name ?>
                    </li>
                <?php else: ?>
                    <li class="breadcrumb-item">
                        <a href="<?= htmlspecialchars($crumb['url']) ?>"><?= $name ?></a>
                    </li>
                    <li class="breadcrumb-separator">
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </nav>
</div>