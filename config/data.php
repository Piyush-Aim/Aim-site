<?php

/**
 * Global Site Data Configuration
 */

require_once __DIR__ . '/services_data.php';
require_once __DIR__ . '/tech_data.php';

/**
 * Mega Menu Category Labels
 */
$serviceCategoryLabels = [
    'core'    => 'Core Services',
    'seo'     => 'SEO & Growth',
    'ppc'     => 'PPC & Advertising',
    'design'  => 'Design & UX',
    'social'  => 'Social Media',
    'other'   => 'Other Solutions'
];

/**
 * Homepage & Navigation - Processed Services Data
 */
$homepageServices = [];
$serviceSections = [];

foreach ($serviceCategoryLabels as $catKey => $catLabel) {
    $homepageServices[$catKey] = [];

    $sectionIcon = 'fa-solid fa-puzzle-piece';
    if ($catKey === 'seo')    $sectionIcon = 'fa-solid fa-magnifying-glass-chart';
    if ($catKey === 'ppc')    $sectionIcon = 'fa-solid fa-money-bill-trend-up';
    if ($catKey === 'design') $sectionIcon = 'fa-solid fa-desktop';
    if ($catKey === 'social') $sectionIcon = 'fa-solid fa-share-nodes';

    $serviceSections[] = [
        'id'    => 'sec-' . $catKey,
        'title' => $catLabel,
        'icon'  => $sectionIcon,
        'cards' => []
    ];
}

foreach ($allServicesData as $slug => $data) {
    if (!empty($data['hide_from_menu'])) continue;

    $cat = isset($data['menu_category']) ? $data['menu_category'] : 'other';
    if (!isset($homepageServices[$cat])) {
        $homepageServices[$cat] = [];
        $serviceSections[] = [
            'id'    => 'sec-' . $cat,
            'title' => ucfirst($cat) . ' Services',
            'icon'  => 'fa-solid fa-layer-group',
            'cards' => []
        ];
    }

    $title = $data['menu_title'] ?? ucwords(str_replace('-', ' ', $slug));
    $desc  = $data['menu_desc'] ?? '';
    $icon  = $data['menu_icon'] ?? 'fa-solid fa-check-circle';

    $item = [
        'title' => $title,
        'desc'  => $desc,
        'icon'  => $icon,
        'url'   => 'services/' . $slug
    ];

    $homepageServices[$cat][] = $item;

    foreach ($serviceSections as &$section) {
        if ($section['id'] === 'sec-' . $cat) {
            $section['cards'][] = [
                'icon'  => $icon,
                'title' => $title,
                'text'  => $desc,
                'url'   => 'services/' . $slug
            ];
            break;
        }
    }
}
unset($section);


/**
 * Portfolio Data
 */
$portfolioData = array_values(require __DIR__ . '/projects_data.php');

/**
 * Reputation Platform Links & Ratings
 */
$reputationPlatforms = [
    'clutch' => [
        'rating' => '5.0',
        'icon'   => 'assets/images/clutch-co-vector-logo 1.svg',
        'logo'   => 'assets/images/clutch.svg',
        'name'   => 'Clutch',
        'url'    => 'https://clutch.co/profile/aim-infocorp'
    ],
    'chamber' => [
        'rating' => '5.0',
        'icon'   => 'assets/images/chamberofcommerce_favicon.svg',
        'logo'   => 'assets/images/chamberofcommerce_logo.svg',
        'name'   => 'Chamber of Commerce',
        'url'    => 'https://www.chamberofcommerce.com/business-directory/new-york/new-york/website-designer/2034216602-aim-infocorp-pvt-ltd'
    ],
    'techbehemoths' => [
        'rating' => '5.0',
        'icon'   => 'assets/images/techbehemoths_icon.jpg',
        'logo'   => 'assets/images/techbehemoths_logo.svg',
        'name'   => 'TechBehemoths',
        'url'    => 'https://techbehemoths.com/company/aim-infocorp-pvt-ltd'
    ],
    'crunchbase' => [
        'rating' => '5.0',
        'icon'   => 'assets/images/crunchbase_icon.ico',
        'logo'   => 'assets/images/crunchbase_logo.svg',
        'name'   => 'Crunchbase',
        'url'    => 'https://www.crunchbase.com/organization/aim-infocorp'
    ],
    'provenexpert' => [
        'rating' => '5.0',
        'icon'   => 'assets/images/provenexpert_icon.svg',
        'logo'   => 'assets/images/provenexpert_logo.svg',
        'name'   => 'ProvenExpert',
        'url'    => 'https://www.provenexpert.com/en-us/aim-infocorp-pvt-ltd/'
    ],
    'google' => [
        'rating' => '5.0',
        'icon'   => 'assets/images/google (1).svg',
        'logo'   => 'assets/images/google.svg',
        'name'   => 'Google',
        'url'    => 'https://share.google/5Pb7vhrrhFYATk5UM'
    ],
];
