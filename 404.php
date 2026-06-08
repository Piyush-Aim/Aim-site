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

<?php include 'partials/head.php'; ?>

<body>
    <?php include 'partials/nav.php'; ?>

    <!-- HERO SECTION -->
    <section class="contact-hero" style="min-height: 70vh; display: flex; align-items: center; justify-content: center; text-align: center;">
        <div class="hero-bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
        </div>
        <div class="hero-bg-accent"></div>
        <div class="hero-orb-center"></div>
        <div class="grid-overlay"></div>

        <div class="container section-fade">
            <div class="hero-content">
                <p class="tag tag-primary">404 Error</p>
                <h1 style="font-size: 5rem;">Page Not <span class="gradient-text">Found</span></h1>
                <p class="subtitle" style="margin-bottom: 2rem;">Oops! The page you are looking for doesn't exist or has been moved.</p>
                <a href="<?= url('') ?>" class="btn btn-primary-lg">Return Home <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <?php include 'partials/footer.php'; ?>
</body>

</html>
