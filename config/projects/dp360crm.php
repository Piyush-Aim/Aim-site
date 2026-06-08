<?php
// config/projects/dp360crm.php

return [

    'slug'       => 'dp360crm',
    'title'      => 'DP360 CRM',
    'tag'        => 'Enterprise Automotive CRM Platform',
    'year'       => '2026',
    'type'       => 'Enterprise Automotive CRM Development & Real-Time Dealership Workspace Optimization',
    'services'   => [
        'Single-Page Application (SPA) Engineering',
        'High-Concurrence State Syncing',
        'Multi-Source Lead Routing',
        'Real-Time Event Driven UI'
    ],
    'client'     => 'DP360 CRM',
    'category'   => 'crm',
    'img'        => 'images/portfolio/dp360crm.webp',

    'desc' => 'DP360 CRM is a high-scale dealership CRM platform trusted by over 2,000 retailers and major brands including Harley-Davidson®, Polaris®, and Winnebago®.',

    'problem' => 'DP360 CRM required a high-speed application architecture capable of processing massive dealership inventory systems and real-time lead routing without interface lag.',

    'metric_val' => 'Zero',
    'metric_lbl' => 'UI Freezing During Inventory Queries',

    'tags' => [
        'Angular',
        'Automotive CRM',
        'Enterprise Platform'
    ],

    'alt' => 'DP360 CRM Automotive Platform',

    'metaTitle' => 'DP360 CRM | Enterprise Automotive CRM Platform - Aim Infocorp',

    'metaDescription' => 'Enterprise automotive CRM platform engineered with Angular and Zone.js for real-time dealership operations and lead routing.',

    'heroTitle' => 'DP360 CRM – <span class="gradient-text">Enterprise Automotive CRM</span>',

    'heroSubtitle' => 'DP360 CRM required a lightning-fast dealership platform capable of handling concurrent inventory lookups and real-time lead management.',

    'challengeSubtitle' => 'Automotive dealerships operate in highly volatile environments requiring rapid inventory searches, dynamic lead routing, and real-time customer communication.',

    'challengeIssues' => [
        [
            'icon' => 'fa-solid fa-database icon-primary',
            'text' => 'Sluggish rendering cycles on massive automotive inventory databases'
        ],
        [
            'icon' => 'fa-solid fa-arrows-rotate icon-primary',
            'text' => 'Delays in automated hot lead assignment rotation'
        ],
        [
            'icon' => 'fa-solid fa-chart-column icon-primary',
            'text' => 'High processing overhead on reporting dashboards'
        ],
        [
            'icon' => 'fa-solid fa-mobile-screen icon-primary',
            'text' => 'Layout fragmentation across desktop and mobile platforms'
        ],
    ],

    'challengeResult' => 'Automotive dealership CRM facing scalability and real-time synchronization bottlenecks',

    'process' => [

        [
            'id' => 'process-angular',
            'icon' => 'fa-brands fa-angular icon-primary',
            'title' => 'High-Scale Frontend Architecture with Angular',
            'steps' => [
                'Developed responsive single-page Angular dashboard',
                'Engineered reactive inventory and payment calculation grids',
                'Built isolated high-performance dealership modules',
            ],
        ],
        [
            'id' => 'process-zonejs',
            'icon' => 'fa-solid fa-bolt icon-primary',
            'title' => 'Performance Optimization with Zone.js',
            'steps' => [
                'Managed asynchronous communication streams with Zone.js',
                'Optimized Angular change detection cycles',
                'Enabled dynamic vehicle alerts without browser reflows',
            ],
        ],

    ],

    'actions' => [
        'Designed enterprise automotive CRM portal',
        'Integrated Zone.js background processing hooks',
        'Built scalable internet lead management systems',
        'Engineered high-speed reporting dashboards',
        'Optimized asset loading for mobile dealership teams',
    ],

    'resultsSubtitle' => 'The optimized Angular-driven platform transformed DP360 CRM into a zero-latency dealership workspace.',

    'results' => [
        [
            'title' => 'Zero',
            'text' => 'UI freezing during inventory and CRM queries'
        ],
        [
            'title' => 'Instant',
            'text' => 'Background routing of incoming dealership leads'
        ],
        [
            'title' => 'Higher',
            'text' => 'Operational efficiency across multi-location dealerships'
        ],
        [
            'title' => 'Responsive',
            'text' => 'Cross-platform mobile-first dealership workspace'
        ],
    ],

    'testimonial' => [
        'text' => 'Aim Infocorp\'s development approach delivered exactly the platform scalability we needed. Handling immense vehicular inventories alongside rapid-fire incoming leads requires a rock-solid tech stack. The interface is remarkably quick, allowing our dealers to stay entirely focused on customer relationships.',
        'name' => 'DP360 CRM Engineering Management',
        'role' => '',
    ],
    'performance' => [
        [
            'title' => 'Live Lead Rotation System',
            'items' => [
                'Automatically assigned sales inquiries in real time',
                'Maintained uninterrupted user workflows',
            ],
        ],
        [
            'title' => 'Dynamic Sales Worksheets',
            'items' => [
                'Finance calculations updated instantly',
                'Maintained transparent financing paths for customers',
            ],
        ],
        [
            'title' => 'Scalable Data Synchronization',
            'items' => [
                'Processed incoming DMS and OEM data smoothly',
                'Maintained consistent worldwide dealership records',
            ],
        ],
    ],

    'conclusion' => [
        'heading' => 'Aim Infocorp Pvt Ltd successfully elevated DP360 CRM\'s software architecture by:',
        'points' => [
            'Deploying modern Angular architecture for automotive environments',
            'Utilizing Zone.js for intensive background processing',
            'Creating scalable dealership communication systems',
        ],
        'outcome' => 'Zero processing lag → Intelligent lead routing → Enterprise asset tracking → Enhanced dealership sales',
    ],

];
