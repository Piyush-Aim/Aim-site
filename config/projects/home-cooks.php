<?php
// config/projects/home-cooks.php

return [
    'slug' => 'home-cooks',
    'title' => 'Home Cooks',
    'tag' => 'Food Marketplace',
    'year' => '2026',
    'type' => 'On-Demand Food Marketplace Infrastructure & Real-Time Logistics Routing Backend',
    'services' => [
        'Website Development',
        'Marketplace Engine Architecture',
        'Asynchronous Order Lifecycle Management',
        'High-Scale Database Synchronization'
    ],
    'client' => 'Home Cooks',
    'category' => 'web',
    'img' => 'images/portfolio/home-cooks.webp',

    'desc' => 'Home Cooks is a peer-to-peer culinary marketplace connecting independent chefs, artisans, and home cooks with consumers seeking authentic homemade meals through localized delivery networks and digital storefronts.',

    'problem' => 'Home Cooks required a highly scalable marketplace infrastructure capable of managing chef inventories, delivery logistics, dynamic ordering windows, and real-time order processing without performance bottlenecks.',

    'metric_val' => '45%',
    'metric_lbl' => 'Checkout Speed Improvement',

    'tags' => [
        'Node.js',
        'Express',
        'MongoDB',
        'Marketplace',
        'FoodTech'
    ],

    'alt' => 'Home Cooks Food Marketplace Platform',

    'metaTitle' => 'Home Cooks | Food Marketplace Platform - Aim Infocorp',
    'metaDescription' => 'Food marketplace platform built with Node.js, Express, and MongoDB for chef onboarding, order processing, and localized delivery management.',

    'heroTitle' => 'Home Cooks – <span class="gradient-text">Food Marketplace Platform</span>',

    'heroSubtitle' => 'Home Cooks required a scalable marketplace ecosystem capable of handling localized food ordering, chef management, and delivery logistics in real time.',

    'challengeSubtitle' => 'Managing thousands of meal orders, chef inventories, and delivery routes required a highly responsive backend architecture capable of processing concurrent transactions without delays.',

    'challengeIssues' => [
        [
            'icon' => 'fa-solid fa-cart-shopping icon-primary',
            'text' => 'Checkout delays during peak ordering periods and limited inventory releases'
        ],
        [
            'icon' => 'fa-solid fa-location-dot icon-primary',
            'text' => 'Complex postcode-based delivery validation and routing calculations'
        ],
        [
            'icon' => 'fa-solid fa-bowl-food icon-primary',
            'text' => 'Frequent updates to chef availability, ingredients, and allergy information'
        ],
        [
            'icon' => 'fa-solid fa-money-bill-transfer icon-primary',
            'text' => 'Heavy reporting overhead for chef commissions and payout calculations'
        ],
    ],

    'challengeResult' => 'Marketplace growth demanded a more reliable infrastructure for inventory control, logistics routing, and order management',

    'process' => [
        [
            'id' => 'process-nodejs',
            'icon' => 'fa-brands fa-node-js icon-primary',
            'title' => 'Asynchronous Backend Orchestration via Node.js',
            'steps' => [
                'Built event-driven API architecture for marketplace transactions',
                'Implemented automated availability counters and webhook notifications',
                'Configured background processing for commissions and logistics calculations',
            ],
        ],
        [
            'id' => 'process-express',
            'icon' => 'fa-solid fa-server icon-primary',
            'title' => 'Agile API Middleware Layer with Express',
            'steps' => [
                'Developed modular customer, chef, and admin routing systems',
                'Implemented address validation and delivery zone verification',
                'Enhanced security with rate-limiting and session protection',
            ],
        ],
        [
            'id' => 'process-mongodb',
            'icon' => 'fa-solid fa-database icon-primary',
            'title' => 'Scalable Document Schemas via MongoDB',
            'steps' => [
                'Designed flexible schemas for menus, chefs, and dietary preferences',
                'Optimized postcode and availability indexes for rapid searches',
                'Implemented transactional inventory controls to prevent double-bookings',
            ],
        ],
    ],

    'actions' => [
        'Built a scalable food marketplace and ordering ecosystem',
        'Developed high-performance Node.js and Express backend services',
        'Engineered optimized MongoDB collections for marketplace operations',
        'Created interactive meal planning and recurring order workflows',
        'Optimized checkout performance and backend resource utilization',
    ],

    'resultsSubtitle' => 'The modern marketplace architecture enabled Home Cooks to deliver faster ordering experiences, improved inventory control, and scalable food logistics management.',

    'results' => [
        [
            'title' => '45%',
            'text' => 'Increase in checkout performance during peak ordering periods'
        ],
        [
            'title' => 'Zero',
            'text' => 'Portion inventory errors through transactional controls'
        ],
        [
            'title' => 'Milliseconds',
            'text' => 'Response times for complex meal tracking requests'
        ],
        [
            'title' => 'Future-Ready',
            'text' => 'Backend architecture prepared for mobile application expansion'
        ],
    ],

    'testimonial' => [
        'text' => 'Aim Infocorp built the exact technical backbone our marketplace needed to scale across the UK. Managing thousands of local postcodes, individual kitchen batches, and live portion counts requires an uncompromised backend architecture. The Node.js and Express system they deployed is lightning-fast, rock-solid, and beautifully organized.',
        'name' => 'Home Cooks Marketplace Operations Group',
        'role' => '',
    ],

    'performance' => [
        [
            'title' => 'High-Speed Postcode Routing Middleware',
            'items' => [
                'Instantly matched customers with eligible local kitchens',
                'Optimized delivery validation and routing performance',
            ],
        ],
        [
            'title' => 'Self-Healing Portion Inventories',
            'items' => [
                'Automatically restored abandoned cart inventory',
                'Maintained accurate meal availability counts',
            ],
        ],
        [
            'title' => 'Streamlined Chef Portfolio Structures',
            'items' => [
                'Rapid menu creation and ingredient management',
                'Flexible scheduling for batch cooking operations',
            ],
        ],
    ],

    'conclusion' => [
        'heading' => 'Aim Infocorp Pvt Ltd successfully delivered an elite marketplace infrastructure for Home Cooks by:',
        'points' => [
            'Deploying a scalable Node.js architecture for high-volume food transactions',
            'Building a modular Express routing ecosystem for multi-tenant operations',
            'Engineering optimized MongoDB collections for inventory and delivery management',
        ],
        'outcome' => 'Sub-second kitchen matching → Zero portion double-bookings → Rapid checkout conversions → Enhanced independent culinary scaling',
    ],
];
