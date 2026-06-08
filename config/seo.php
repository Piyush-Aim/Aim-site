<?php
// config/seo.php

$seoConfig = [
    'home' => [
        'title' => COMPANY_NAME . ' – Premium IT Services & Digital Transformation',
        'description' => COMPANY_NAME . ' delivers world-class IT services, cloud infrastructure, AI automation, and digital transformation for growing businesses.'
    ],
    'service' => [
        'title' => 'Elite IT Solutions & Services | ' . COMPANY_NAME,
        'description' => 'Comprehensive IT solutions spanning from web and mobile development to SEO, PPC, and our modern technology stack.'
    ],
    'about' => [
        'title' => 'Our Story, Mission & Elite Team | ' . COMPANY_NAME,
        'description' => 'Learn about the passion, expertise, and digital innovation at ' . COMPANY_NAME . '. We bridge the gap between vision and reality.'
    ],
    'portfolio' => [
        'title' => 'Our Portfolio | ' . COMPANY_NAME . ' – Proven Digital Transformations',
        'description' => 'Explore ' . COMPANY_NAME . '’s portfolio of successful digital transformations—from high-performance web applications to scalable cloud solutions.'
    ],
    'contact' => [
        'title' => 'Contact Us | ' . COMPANY_NAME . ' – Let\'s Build Something Extraordinary',
        'description' => 'Ready to transform your business? Digital architecture, cloud enterprise, and market-leading SEO expertise start here.'
    ],
    'technology' => [
        'title' => 'Modern Technology Stack & Digital Expertise | ' . COMPANY_NAME,
        'description' => 'Explore our high-performance technology stack. We use React, Next.js, Node.js, Laravel, and Cloud solutions to build scalable, secure, and future-proof digital products.'
    ],
    'privacy' => [
        'title' => 'Privacy Policy | ' . COMPANY_NAME,
        'description' => 'Your privacy matters. Read our Privacy Policy to understand how ' . COMPANY_NAME . ' protects your personal data and complies with Indian law.'
    ],
    'terms' => [
        'title' => 'Terms & Conditions | ' . COMPANY_NAME,
        'description' => 'Review the terms and conditions for using ' . COMPANY_NAME . ' services and website.'
    ],

];

/**
 * Returns the SEO data for a given page key.
 * @param string $pageKey
 * @return array
 */
function getSEO($pageKey)
{
    global $seoConfig;
    return $seoConfig[$pageKey] ?? $seoConfig['home'];
}
