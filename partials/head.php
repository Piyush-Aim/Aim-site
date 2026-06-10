<?php
// partials/head.php

require_once dirname(__DIR__) . '/config/seo.php';
$seo = getSEO($pageKey ?? 'home');
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title><?php echo htmlspecialchars($pageTitle ?? $seo['title']); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription ?? $seo['description']); ?>" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= asset('images/aim-favicon.png') ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <link rel="stylesheet" href="<?= asset('css/global.css') ?>" />

    <?php
    if (isset($extraCSS)) {
        if (is_array($extraCSS)) {
            foreach ($extraCSS as $css) {
                echo '<link rel="stylesheet" href="' . $css . '" />' . "\n";
            }
        } else {
            echo '<link rel="stylesheet" href="' . $extraCSS . '" />' . "\n";
        }
    }
    ?>

    <link rel="stylesheet" href="<?= asset('css/responsive.css') ?>" />
</head>