<?php
// sitemap.php

header('Content-Type: application/xml; charset=UTF-8');

// Suppress errors in XML output so it doesn't break the format
error_reporting(0);

// Load all required data directly from configs
require_once __DIR__ . '/config/config.php';
$servicesData = require __DIR__ . '/config/services_data.php';
$locationsData = file_exists(__DIR__ . '/config/locations_data.php') ? require __DIR__ . '/config/locations_data.php' : [];
require_once __DIR__ . '/config/tech_data.php';
global $appTechMapping;

// Use hardcoded production domain as requested by user to ensure it works on live
$domain = 'https://aiminfocorp.com';
$date = date('Y-m-d');

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

function escapeXml($value)
{
    return htmlspecialchars((string) $value, ENT_XML1 | ENT_COMPAT, 'UTF-8');
}

/**
 * Helper to generate URL XML block
 */
function echoUrl($loc, $priority = '0.8', $changefreq = 'weekly')
{
    global $date;
    echo "  <url>\n";
    echo '    <loc>' . escapeXml($loc) . '</loc>' . "\n";
    echo '    <lastmod>' . escapeXml($date) . '</lastmod>' . "\n";
    echo '    <changefreq>' . escapeXml($changefreq) . '</changefreq>' . "\n";
    echo '    <priority>' . escapeXml($priority) . '</priority>' . "\n";
    echo "  </url>\n";
}

// 1. Static Pages
$staticPages = [
    '', // Home
    '/about-us',
    '/services',
    '/portfolio',
    '/case-studies',
    '/technology',
    '/contact',
    '/privacy-policy',
    '/terms-condition'
];

foreach ($staticPages as $path) {
    echoUrl($domain . $path, $path === '' ? '1.0' : '0.9');
}

// 2. Services Pages
if (is_array($servicesData)) {
    foreach ($servicesData as $slug => $data) {
        // Skip localized configs
        if (strpos($slug, '-local') !== false) {
            continue;
        }

        // Global Service Page
        echoUrl("{$domain}/services/{$slug}", '0.9');

        // Check if there is a local equivalent to generate state/city pages
        if (isset($servicesData[$slug . '-local']) && is_array($locationsData)) {
            foreach ($locationsData as $stateSlug => $stateData) {
                // State Level Page
                echoUrl("{$domain}/services/{$slug}/{$stateSlug}", '0.8');

                // City Level Pages
                if (isset($stateData['cities']) && is_array($stateData['cities'])) {
                    foreach ($stateData['cities'] as $citySlug => $cityName) {
                        echoUrl("{$domain}/services/{$slug}/{$stateSlug}/{$citySlug}", '0.7');
                    }
                }
            }
        }
    }
}

// 3. Technology Pages
if (is_array($appTechMapping)) {
    foreach ($appTechMapping as $techSlug => $techData) {
        echoUrl("{$domain}/technology/{$techSlug}", '0.8');
    }
}

// 4. Project Pages
require_once __DIR__ . '/config/data.php';
global $portfolioData;
if (is_array($portfolioData)) {
    foreach ($portfolioData as $projectData) {
        if (isset($projectData['slug'])) {
            echoUrl("{$domain}/project/{$projectData['slug']}", '0.8');
        }
    }
}

echo '</urlset>' . "\n";
