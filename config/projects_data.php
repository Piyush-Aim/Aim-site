<?php
// config/projects_data.php

$allProjectsData = [];

// Load modular project data from the config/projects directory
$projectFiles = glob(__DIR__ . '/projects/*.php');
foreach ($projectFiles as $file) {
    if (is_file($file)) {
        $projectData = require $file;
        if (isset($projectData['slug'])) {
            $allProjectsData[$projectData['slug']] = $projectData;
        }
    }
}

return $allProjectsData;
