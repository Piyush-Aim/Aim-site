<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/data.php';
$pageKey = '404';

// Ensure the server actually returns a 404 status code for SEO
http_response_code(404);

$pageTitle = '404 - Page Not Found | ' . COMPANY_NAME;
$pageDescription = 'The page you are looking for does not exist or has been moved.';

?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <?php include 'partials/head.php'; ?>
    <link rel="stylesheet" href="<?= asset('css/404-page.css') ?>">
</head>

<body>
    <?php include 'partials/nav.php'; ?>

    <!-- HERO SECTION (Reusing brand elements) -->
    <section class="contact-hero error-hero" style="text-align: center;">
        <div class="hero-bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
        </div>
        <div class="hero-bg-accent"></div>
        <div class="hero-orb-center"></div>
        <div class="grid-overlay"></div>

        <div class="error-bg-text">404</div>
        <div class="container error-content-wrapper">
            <div class="error-title-wrapper">
                <span class="tag tag-primary"><i class="fa-solid fa-triangle-exclamation"></i> Error 404</span>
                <h1 class="error-title">Looks like you're <span class="gradient-text">lost in space.</span></h1>
                <p class="error-subtitle">The page you're looking for doesn't exist, has been moved, or is temporarily unavailable.</p>
            </div>

            <div class="error-quick-links fade-up" style="animation-delay: 0.2s;">
                <h3>Let's get you back on track</h3>
                <p>Here are some helpful links to guide you back:</p>

                <div class="links-grid">
                    <a href="<?= url('') ?>" class="link-card">
                        <i class="fa-solid fa-house"></i>
                        <span>Home</span>
                    </a>
                    <a href="<?= url('services') ?>" class="link-card">
                        <i class="fa-solid fa-layer-group"></i>
                        <span>Services</span>
                    </a>
                    <a href="<?= url('case-studies') ?>" class="link-card">
                        <i class="fa-solid fa-briefcase"></i>
                        <span>Portfolio</span>
                    </a>
                    <a href="<?= url('contact') ?>" class="link-card">
                        <i class="fa-solid fa-envelope"></i>
                        <span>Contact</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'partials/footer.php'; ?>
</body>

</html>