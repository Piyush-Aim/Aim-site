<?php
// helpers/nav_helper.php
function isActive($key, $currentPageKey)
{
    return $key === $currentPageKey ? 'active' : '';
}
?>
<nav id="navbar">
    <div class="nav-inner">
        <a href="<?= url('') ?>" class="nav-logo">
            <img src="<?= asset('images/Aim-Infocorp-Pvt-Ltd-Logo.webp') ?>" alt="<?= COMPANY_NAME ?>" width="130px">
        </a>
        <ul class="nav-links">
            <li><a href="<?= url('') ?>" class="<?php echo isActive('home', $pageKey ?? ''); ?>">Home</a></li>
            <li><a href="<?= url('about-us') ?>" class="<?php echo isActive('about-us', $pageKey ?? ''); ?>">About</a></li>
            <?php
            // Detect current slug and type from URL for active states
            $currentPath = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
            $pathParts   = explode('/', rtrim($currentPath, '/'));
            $currentSlug = end($pathParts);

            // Extract the base service slug for accurate active state detection on local pages
            $detectedServiceSlug = '';
            $isServicePage = (strpos($currentPath, '/services/') !== false);
            if ($isServicePage) {
                $segments = explode('/services/', $currentPath);
                if (isset($segments[1])) {
                    $slugParts = explode('/', trim($segments[1], '/'));
                    $detectedServiceSlug = $slugParts[0] ?? '';
                }
            }

            // Active State Detection (Services)
            $isServiceParentActive = $isServicePage || ($pageKey ?? '') === 'service';
            $activeCategoryId = '';

            if ($isServicePage && isset($homepageServices)) {
                foreach ($homepageServices as $category => $items) {
                    foreach ($items as $item) {
                        $itemSlug = str_replace('services/', '', $item['url']);
                        if ($detectedServiceSlug === $itemSlug) {
                            $activeCategoryId = $category;
                            break 2;
                        }
                    }
                }
            }
            if (!$activeCategoryId && isset($homepageServices)) {
                $activeCategoryId = array_key_first($homepageServices);
            }

            // Active State Detection (Technology)
            $isTechnologyPage = (strpos($currentPath, '/technology/') !== false);
            $isTechnologyParentActive = $isTechnologyPage || ($pageKey ?? '') === 'technology';
            $activeTechCategoryId = '';

            if ($isTechnologyPage && isset($technologyCategories)) {
                foreach ($technologyCategories as $catKey => $category) {
                    foreach ($category['techs'] as $t) {
                        if ($currentSlug === $t['slug']) {
                            $activeTechCategoryId = $catKey;
                            break 2;
                        }
                    }
                }
            }
            if (!$activeTechCategoryId && isset($technologyCategories)) {
                $activeTechCategoryId = array_key_first($technologyCategories);
            }
            ?>
            <li class="service-list has-mega-menu <?php echo $isServiceParentActive ? 'active' : ''; ?>">
                <a href="<?= url('services') ?>" class="<?php echo $isServiceParentActive ? 'active' : ''; ?>">Services <i class="fa-solid fa-chevron-down"></i></a>
                <div class="mega-menu">
                    <div class="mega-menu-inner">
                        <?php if (isset($homepageServices)): ?>
                            <div class="mega-tabs-side">
                                <?php
                                foreach ($homepageServices as $category => $items):
                                    $label = $serviceCategoryLabels[$category] ?? ucfirst($category);
                                    $safeId = str_replace(' ', '-', $category);
                                ?>
                                    <div class="mega-tab-btn <?= ($category === $activeCategoryId) ? 'active' : '' ?>" data-target="pane-<?= $safeId ?>">
                                        <p><?= $label ?></p>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="mega-content-side">
                                <?php
                                foreach ($homepageServices as $category => $items):
                                    $safeId = str_replace(' ', '-', $category);
                                ?>
                                    <div class="mega-pane <?= ($category === $activeCategoryId) ? 'active' : '' ?>" id="pane-<?= $safeId ?>">
                                        <div class="mega-pane-header">
                                            <p><?= $serviceCategoryLabels[$category] ?? ucfirst($category) ?></p>
                                        </div>
                                        <div class="mega-pane-grid">
                                            <?php foreach ($items as $item):
                                                $itemSlug = str_replace('services/', '', $item['url']);
                                                $itemActive = ($isServicePage && $detectedServiceSlug === $itemSlug) ? 'active' : '';
                                            ?>
                                                <a href="<?= url($item['url']) ?>" class="mega-item <?= $itemActive ?>">
                                                    <div class="mega-item-icon">
                                                        <i class="<?= $item['icon'] ?? 'fa-solid fa-check-circle' ?>"></i>
                                                    </div>
                                                    <div class="mega-item-text">
                                                        <p><?= htmlspecialchars($item['title']) ?></p>
                                                    </div>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </li>
            <li class="has-mega-menu tech-list <?php echo $isTechnologyParentActive ? 'active' : ''; ?>">
                <a href="<?= url('technology') ?>" class="<?php echo $isTechnologyParentActive ? 'active' : ''; ?>">Technology <i class="fa-solid fa-chevron-down"></i></a>
                <div class="mega-menu mega-menu--tech">
                    <div class="mega-menu-inner">
                        <?php if (isset($technologyCategories)): ?>
                            <div class="mega-tabs-side">
                                <?php foreach ($technologyCategories as $key => $category):
                                    $safeId = 'tech-' . str_replace(' ', '-', $key);
                                ?>
                                    <div class="mega-tab-btn <?= ($key === $activeTechCategoryId) ? 'active' : '' ?>" data-target="tech-pane-<?= $safeId ?>">
                                        <p><?= $category['title'] ?></p>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="mega-content-side">
                                <?php foreach ($technologyCategories as $key => $category):
                                    $safeId = 'tech-' . str_replace(' ', '-', $key);
                                ?>
                                    <div class="mega-pane <?= ($key === $activeTechCategoryId) ? 'active' : '' ?>" id="tech-pane-<?= $safeId ?>">
                                        <div class="mega-pane-header">
                                            <p><?= $category['title'] ?></p>
                                        </div>
                                        <div class="mega-pane-grid">
                                            <?php foreach ($category['techs'] as $tech):
                                                $pathParts = explode('/', rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/'));
                                                $currentSlug = end($pathParts);
                                                $techActive = ($isTechnologyPage && $currentSlug === $tech['slug']) ? 'active' : '';
                                            ?>
                                                <a href="<?= url('technology/' . $tech['slug']) ?>" class="mega-item <?= $techActive ?>">
                                                    <div class="mega-item-icon">
                                                        <i class="<?= $tech['logo'] ?? 'fa-solid fa-code' ?>"></i>
                                                    </div>
                                                    <div class="mega-item-text">
                                                        <p><?= htmlspecialchars($tech['name']) ?></p>
                                                    </div>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </li>

            <li class="has-dropdown <?php echo (($pageKey ?? '') === 'portfolio' || ($pageKey ?? '') === 'cases') ? 'active' : ''; ?>">
                <a href="#" class="<?php echo (($pageKey ?? '') === 'portfolio' || ($pageKey ?? '') === 'cases') ? 'active' : ''; ?>">Our Work <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="dropdown">
                    <li><a href="<?= url('portfolio') ?>" class="<?php echo isActive('portfolio', $pageKey ?? ''); ?>">Portfolio</a></li>
                    <li><a href="<?= url('case-studies') ?>" class="<?php echo isActive('cases', $pageKey ?? ''); ?>">Case Studies</a></li>
                </ul>
            </li>
            <li><a href="<?= url('contact') ?>" class="<?php echo isActive('contact', $pageKey ?? ''); ?>">Contact</a></li>
        </ul>
        <a href="<?= url('contact') ?>" class="btn btn-nav">Book a Call</a>
        <button class="hamburger" id="hamburger" aria-label="Open menu">
            <span></span><span></span><span></span>
        </button>
    </div>

    <!-- Mobile Overlay -->
    <div class="mobile-overlay" id="mobileOverlay"></div>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-header">
            <a href="<?= url('') ?>" class="nav-logo">
                <img src="<?= asset('images/Aim-Infocorp-Pvt-Ltd-Logo.webp') ?>" alt="<?= COMPANY_NAME ?>" width="120px">
            </a>
            <button class="mobile-close" id="mobileClose" aria-label="Close menu">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="mobile-menu-links">
            <a href="<?= url('') ?>" class="<?php echo isActive('home', $pageKey ?? ''); ?>">Home</a>
            <a href="<?= url('about-us') ?>" class="<?php echo isActive('about-us', $pageKey ?? ''); ?>">About</a>
            <div class="mobile-dropdown <?php echo $isServiceParentActive ? 'active open' : ''; ?>">
                <div class="mobile-dropdown-btn">
                    <a href="<?= url('services') ?>" class="<?php echo $isServiceParentActive ? 'active' : ''; ?>">Services <i class="fa-solid fa-chevron-down mobile-dropdown-toggle"></i></a>
                </div>
                <div class="mobile-dropdown-content">
                    <?php
                    if (isset($homepageServices)) {
                        foreach ($homepageServices as $category => $items) {
                            $categoryLabel = $serviceCategoryLabels[$category] ?? ucfirst($category);
                            $isCategoryActive = false;
                            foreach ($items as $item) {
                                $itemSlug = str_replace('services/', '', $item['url']);
                                if ($isServicePage && $detectedServiceSlug === $itemSlug) {
                                    $isCategoryActive = true;
                                    break;
                                }
                            }
                    ?>
                            <div class="mobile-category-wrap <?= $isCategoryActive ? 'open' : '' ?>">
                                <div class="mobile-category-toggle">
                                    <span><?= htmlspecialchars($categoryLabel) ?></span>
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                                <div class="mobile-category-content">
                                    <?php foreach ($items as $item):
                                        $itemSlug = str_replace('services/', '', $item['url']);
                                        $itemActive = ($isServicePage && $detectedServiceSlug === $itemSlug) ? 'active' : '';
                                    ?>
                                        <a href="<?= url($item['url']) ?>" class="mobile-dropdown-item <?= $itemActive ?>">
                                            <div class="mdi-icon">
                                                <i class="<?= $item['icon'] ?? 'fa-solid fa-check-circle' ?>"></i>
                                            </div>
                                            <span><?= htmlspecialchars($item['title']) ?></span>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="mobile-dropdown <?php echo $isTechnologyParentActive ? 'active open' : ''; ?>">
                <div class="mobile-dropdown-btn">
                    <a href="<?= url('technology') ?>" class="<?php echo $isTechnologyParentActive ? 'active' : ''; ?>">Technology <i class="fa-solid fa-chevron-down mobile-dropdown-toggle"></i></a>
                </div>
                <div class="mobile-dropdown-content">
                    <?php
                    if (isset($technologyCategories)) {
                        foreach ($technologyCategories as $key => $category) {
                            // Check if any technology in this category is active
                            $isTechCategoryActive = false;
                            foreach ($category['techs'] as $t) {
                                if ($isTechnologyPage && $currentSlug === $t['slug']) {
                                    $isTechCategoryActive = true;
                                    break;
                                }
                            }
                    ?>
                            <div class="mobile-category-wrap <?= $isTechCategoryActive ? 'open' : '' ?>">
                                <div class="mobile-category-toggle">
                                    <span><?= htmlspecialchars($category['title']) ?></span>
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                                <div class="mobile-category-content">
                                    <?php foreach ($category['techs'] as $tech):
                                        $techActive = ($isTechnologyPage && $currentSlug === $tech['slug']) ? 'active' : '';
                                    ?>
                                        <a href="<?= url('technology/' . $tech['slug']) ?>" class="mobile-dropdown-item <?= $techActive ?>">
                                            <div class="mdi-icon">
                                                <i class="<?= $tech['logo'] ?? 'fa-solid fa-code' ?>"></i>
                                            </div>
                                            <span><?= htmlspecialchars($tech['name']) ?></span>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="mobile-dropdown <?php echo (($pageKey ?? '') === 'portfolio' || ($pageKey ?? '') === 'cases') ? 'active open' : ''; ?>">
                <div class="mobile-dropdown-btn">
                    <p>Our Work <i class="fa-solid fa-chevron-down mobile-dropdown-toggle"></i></p>
                </div>
                <div class="mobile-dropdown-content">
                    <a href="<?= url('portfolio') ?>" class="<?php echo isActive('portfolio', $pageKey ?? ''); ?>">Portfolio</a>
                    <a href="<?= url('case-studies') ?>" class="<?php echo isActive('cases', $pageKey ?? ''); ?>">Case Studies</a>
                </div>
            </div>

            <a href="<?= url('contact') ?>" class="<?php echo isActive('contact', $pageKey ?? ''); ?>">Contact</a>
            <a href="<?= url('contact') ?>" class="mobile-nav-cta btn btn-nav">Book a Call</a>
        </div>
    </div>
</nav>

<script>
    document.querySelectorAll('.mega-tab-btn').forEach(btn => {
        btn.addEventListener('mouseenter', () => {
            const container = btn.closest('.mega-menu-inner');
            container.querySelectorAll('.mega-tab-btn').forEach(b => b.classList.remove('active'));
            container.querySelectorAll('.mega-pane').forEach(p => p.classList.remove('active'));

            btn.classList.add('active');
            const target = btn.getAttribute('data-target');
            container.querySelector('#' + target).classList.add('active');
        });
    });
</script>