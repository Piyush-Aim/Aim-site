<?php
// config/services_data.php

global $allServicesData;
$allServicesData = [];

$servicesDir = __DIR__ . '/services';
if (is_dir($servicesDir)) {
    $categories = array_diff(scandir($servicesDir), ['.', '..']);
    foreach ($categories as $category) {
        $categoryDir = $servicesDir . '/' . $category;
        if (is_dir($categoryDir)) {
            $files = glob($categoryDir . '/*.php');
            foreach ($files as $file) {
                $slug = basename($file, '.php');
                $relativePath = $category . '/' . basename($file);

                $serviceData = require $file;

                $title = isset($serviceData['menu_title']) ? $serviceData['menu_title'] : ucwords(str_replace('-', ' ', $slug));

                $allServicesData[$slug] = $serviceData;
            }
        }
    }
}

return $allServicesData;
