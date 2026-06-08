<?php
// config/tech_data.php

global $technologyCategories, $appTechMapping;
$technologyCategories = [];
$appTechMapping = [];

$techsDir = __DIR__ . '/technologies';

$categoryLabels = [
    'frontend' => ['title' => 'Frontend', 'icon' => 'fa-solid fa-desktop'],
    'backend' => ['title' => 'Backend', 'icon' => 'fa-solid fa-gears'],
    'database' => ['title' => 'Databases', 'icon' => 'fa-solid fa-database'],
    'design' => ['title' => 'UI/UX', 'icon' => 'fa-solid fa-palette'],
    'mobile' => ['title' => 'Mobile', 'icon' => 'fa-solid fa-mobile-screen'],
    'cloud' => ['title' => 'Cloud', 'icon' => 'fa-solid fa-cloud']
];

if (is_dir($techsDir)) {
    $categories = array_diff(scandir($techsDir), ['.', '..']);
    foreach ($categories as $category) {
        $categoryDir = $techsDir . '/' . $category;
        if (is_dir($categoryDir)) {
            if (!isset($technologyCategories[$category])) {
                $title = isset($categoryLabels[$category]) ? $categoryLabels[$category]['title'] : ucfirst($category);
                $icon = isset($categoryLabels[$category]) ? $categoryLabels[$category]['icon'] : 'fa-solid fa-microchip';
                $technologyCategories[$category] = [
                    'title' => $title,
                    'icon' => $icon,
                    'techs' => []
                ];
            }

            $files = glob($categoryDir . '/*.php');
            foreach ($files as $file) {
                $slug = basename($file, '.php');
                $relativePath = $category . '/' . basename($file);

                $techData = require $file;

                $name = isset($techData['menu_title']) ? $techData['menu_title'] : ucwords(str_replace('-', ' ', $slug));
                $desc = isset($techData['menu_desc']) ? $techData['menu_desc'] : '';
                $logo = isset($techData['menu_icon']) ? $techData['menu_icon'] : 'fa-solid fa-code';
                $expertise = isset($techData['tech_expertise']) ? $techData['tech_expertise'] : 'Advanced';
                $bestFor = isset($techData['tech_best_for']) ? $techData['tech_best_for'] : [];
                $realSlug = isset($techData['menu_slug']) ? $techData['menu_slug'] : $slug;

                $technologyCategories[$category]['techs'][] = [
                    'name' => $name,
                    'slug' => $realSlug,
                    'file' => $relativePath,
                    'logo' => $logo,
                    'desc' => $desc,
                    'best_for' => $bestFor,
                    'expertise' => $expertise
                ];

                $appTechMapping[$realSlug] = $relativePath;
            }
        }
    }
}
