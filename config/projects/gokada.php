<?php
// config/projects/gokada.php

return [
    'slug' => 'gokada',
    'title' => 'Gokada',
    'tag' => 'On-Demand Super App Platform',
    'year' => '2026',
    'type' => 'High-Performance Consumer Web Architecture & On-Demand Logistics Interface',
    'services' => [
        'Website Development',
        'Responsive Interface Engineering',
        'Real-Time Fleet Ingestion Middleware',
        'High-Scale Database Synchronization'
    ],
    'client' => 'Gokada',
    'category' => 'web',
    'img' => 'images/portfolio/gokada.webp',

    'desc' => 'Gokada is Nigeria’s leading last-mile logistics and urban delivery platform, operating services including GSend, GFood, and GBusiness to support consumers and enterprises across Lagos.',

    'problem' => 'Gokada required a high-performance web infrastructure capable of handling large-scale logistics operations, live parcel tracking, fleet management, and partner onboarding without performance bottlenecks.',

    'metric_val' => '45%',
    'metric_lbl' => 'Mobile Performance Improvement',

    'tags' => ['React', 'Node.js', 'MongoDB', 'Logistics', 'On-Demand Delivery'],

    'alt' => 'Gokada Logistics Platform',

    'metaTitle' => 'Gokada | Last-Mile Logistics Platform - Aim Infocorp',
    'metaDescription' => 'Scalable logistics platform engineered with React, Node.js, and MongoDB for real-time delivery operations and partner onboarding.',

    'heroTitle' => 'Gokada – <span class="gradient-text">Last-Mile Logistics Platform</span>',
    'heroSubtitle' => 'Gokada required a scalable logistics ecosystem capable of managing live parcel tracking, merchant operations, and delivery partner onboarding across Lagos.',

    'challengeSubtitle' => 'Managing thousands of deliveries, rider operations, and merchant transactions required a high-performance architecture capable of processing real-time logistics data without delays.',

    'challengeIssues' => [
        ['icon' => 'fa-solid fa-map-location-dot icon-primary', 'text' => 'Mobile browser lag during live route and delivery tracking'],
        ['icon' => 'fa-solid fa-gauge-high icon-primary', 'text' => 'Slow interactive load speeds during high-demand delivery periods'],
        ['icon' => 'fa-solid fa-database icon-primary', 'text' => 'Complex database overhead from delivery, rider, and transaction tracking'],
        ['icon' => 'fa-solid fa-user-plus icon-primary', 'text' => 'Friction in onboarding new business accounts and delivery partners'],
    ],

    'challengeResult' => 'Large-scale logistics operations faced performance, scalability, and onboarding challenges',

    'process' => [
        [
            'id' => 'process-react',
            'icon' => 'fa-brands fa-react icon-primary',
            'title' => 'Dynamic Frontend Engineering with React',
            'steps' => [
                'Built responsive React interfaces for logistics operations',
                'Developed real-time delivery tracking experiences',
                'Optimized business onboarding workflows',
            ],
        ],
        [
            'id' => 'process-node',
            'icon' => 'fa-solid fa-server icon-primary',
            'title' => 'Scalable Real-Time Backend Orchestration with Node.js',
            'steps' => [
                'Developed high-throughput API infrastructure',
                'Implemented asynchronous event processing',
                'Built automated order progress notification systems',
            ],
        ],
        [
            'id' => 'process-mongo',
            'icon' => 'fa-solid fa-database icon-primary',
            'title' => 'High-Volume Data Warehousing with MongoDB',
            'steps' => [
                'Engineered scalable logistics data schemas',
                'Optimized geolocation lookup performance',
                'Structured flexible route and parcel management systems',
            ],
        ],
    ],

    'actions' => [
        'Built scalable React-based logistics platform architecture',
        'Developed secure Node.js backend API infrastructure',
        'Engineered high-volume MongoDB database systems',
        'Created interactive Schedule Pickup workflows',
        'Optimized media delivery and performance for mobile users',
    ],

    'resultsSubtitle' => 'The new logistics ecosystem delivered a faster, more reliable experience for customers, merchants, and delivery partners.',

    'results' => [
        ['title' => '45%', 'text' => 'Increase in mobile page interactive speeds'],
        ['title' => 'Higher', 'text' => 'Partner onboarding completion rates'],
        ['title' => 'Sub-Second', 'text' => 'Geospatial and delivery data lookup performance'],
        ['title' => 'Unified', 'text' => 'Digital experience across riders, merchants, and consumers'],
    ],

    'testimonial' => [
        'text' => 'Aim Infocorp delivered a robust, lightning-fast web architecture capable of matching the relentless pace of on-demand logistics in Lagos. Managing thousands of instant delivery coordinates and merchant requests requires an incredibly scalable foundation. The platform is secure, fluid, and operates flawlessly.',
        'name' => 'Gokada Platform Engineering Team',
        'role' => '',
    ],

    'performance' => [
        [
            'title' => 'High-Speed Pricing Calculators',
            'items' => [
                'Real-time route distance calculations',
                'Instant delivery cost estimation',
            ],
        ],
        [
            'title' => 'Robust G-Partner Portals',
            'items' => [
                'Streamlined driver onboarding workflows',
                'Efficient verification processing systems',
            ],
        ],
        [
            'title' => 'Micro-Interaction Polish',
            'items' => [
                'Smooth React-powered user interactions',
                'Enhanced trust throughout delivery workflows',
            ],
        ],
    ],

    'conclusion' => [
        'heading' => 'Aim Infocorp Pvt Ltd successfully delivered an elite on-demand logistics web ecosystem for Gokada by:',
        'points' => [
            'Deploying a responsive React architecture for logistics operations',
            'Building scalable Node.js infrastructure for real-time transactions',
            'Engineering optimized MongoDB systems for long-term growth',
        ],
        'outcome' => 'Fast route tracking → Frictionless partner onboarding → Sub-second data access → Enhanced last-mile delivery efficiency',
    ],
];
