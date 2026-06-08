<?php
// config/projects/gea-group.php

return [
    'slug' => 'gea-group',
    'title' => 'GEA Group',
    'tag' => 'Global Enterprise CRM Portal',
    'year' => '2026',
    'type' => 'Industrial Scale CMS & Enterprise CRM Data System Engineering',
    'services' => [
        'Website Development',
        'CMS & CRM Architecture',
        'Enterprise Full-Stack Engineering',
        'Relational Database Optimization'
    ],
    'client' => 'GEA Group',
    'category' => 'crm',
    'img' => 'images/portfolio/GEA.webp',

    'desc' => 'GEA Group is one of the world’s largest engineering systems suppliers for the food, beverage, and pharmaceutical sectors, operating in more than 150 countries with over 18,000 employees worldwide.',

    'problem' => 'GEA Group needed a unified enterprise platform capable of handling large-scale content management, global CRM operations, multi-language publishing, and complex business workflows without performance bottlenecks.',

    'metric_val' => '55%',
    'metric_lbl' => 'Data Retrieval Efficiency Improvement',

    'tags' => ['Angular', '.NET', 'MS SQL Server', 'CMS', 'CRM'],

    'alt' => 'GEA Group Enterprise CMS CRM Platform',

    'metaTitle' => 'GEA Group | Enterprise CMS & CRM Platform - Aim Infocorp',
    'metaDescription' => 'Enterprise CMS and CRM platform built with Angular, .NET, and MS SQL Server for global operations, content management, and customer relationship tracking.',

    'heroTitle' => 'GEA Group – <span class="gradient-text">Enterprise CMS & CRM Platform</span>',
    'heroSubtitle' => 'GEA Group required a scalable enterprise platform capable of supporting global content operations, CRM workflows, and high-volume data processing across more than 150 countries.',

    'challengeSubtitle' => 'Managing industrial content, global customer relationships, and multi-country operations required a high-performance architecture capable of scaling without database or interface bottlenecks.',

    'challengeIssues' => [
        ['icon' => 'fa-solid fa-globe icon-primary', 'text' => 'Slow loading of multi-language content and industrial catalog data'],
        ['icon' => 'fa-solid fa-database icon-primary', 'text' => 'CRM synchronization delays and database locking issues'],
        ['icon' => 'fa-solid fa-sitemap icon-primary', 'text' => 'Disconnected workflows between CMS and CRM systems'],
        ['icon' => 'fa-solid fa-chart-line icon-primary', 'text' => 'Heavy server-side processing during enterprise reporting operations'],
    ],

    'challengeResult' => 'Global enterprise operations were constrained by fragmented systems and large-scale data processing limitations',

    'process' => [
        [
            'id' => 'process-angular',
            'icon' => 'fa-brands fa-angular icon-primary',
            'title' => 'High-Velocity Frontend Engineering with Angular',
            'steps' => [
                'Built modular Angular architecture with lazy-loading strategies',
                'Developed role-based dashboard environments',
                'Optimized rendering for large-scale industrial datasets',
            ],
        ],
        [
            'id' => 'process-dotnet',
            'icon' => 'fa-solid fa-code icon-primary',
            'title' => 'Enterprise Backend Orchestration with .NET',
            'steps' => [
                'Developed secure enterprise web services using .NET',
                'Created API routing for seamless CRM integration',
                'Implemented asynchronous processing for reporting workflows',
            ],
        ],
        [
            'id' => 'process-sql',
            'icon' => 'fa-solid fa-database icon-primary',
            'title' => 'Scalable Data Warehousing with MS SQL Server',
            'steps' => [
                'Designed optimized relational database structures',
                'Implemented indexing and stored procedure optimization',
                'Configured transaction safeguards for global consistency',
            ],
        ],
    ],

    'actions' => [
        'Built scalable enterprise Angular platform architecture',
        'Developed secure .NET middleware and API infrastructure',
        'Engineered high-availability MS SQL Server database systems',
        'Created customized CMS modules for global content publishing',
        'Built integrated CRM dashboards for international sales operations',
    ],

    'resultsSubtitle' => 'The new enterprise ecosystem unified content management, customer relationships, and operational workflows into a single high-performance platform.',

    'results' => [
        ['title' => '55%', 'text' => 'Reduction in multi-country inventory query times'],
        ['title' => 'Faster', 'text' => 'API transaction processing through .NET optimization'],
        ['title' => 'Global', 'text' => 'Multi-language publishing across 150 countries'],
        ['title' => 'Zero-Lag', 'text' => 'Angular interface performance during heavy data operations'],
    ],

    'testimonial' => [
        'text' => 'Aim Infocorp successfully modernised the foundational structure of our global web operations. Balancing massive customer management systems with rapid-fire content management demands a rock-solid architectural approach. The application framework is incredibly dependable, fast, and structured perfectly to scale along with our global requirements.',
        'name' => 'GEA Digital Infrastructure Group',
        'role' => '',
    ],

    'performance' => [
        [
            'title' => 'Structured .NET Security Layers',
            'items' => [
                'Enterprise authentication and encryption safeguards',
                'Secure customer communication workflows',
            ],
        ],
        [
            'title' => 'High-Throughput MS SQL Indexing',
            'items' => [
                'Optimized database response times',
                'Real-time equipment tracking updates across service networks',
            ],
        ],
        [
            'title' => 'Cohesive Angular Workspace Components',
            'items' => [
                'Reusable enterprise interface components',
                'Consistent experience across desktop and tablet devices',
            ],
        ],
    ],

    'conclusion' => [
        'heading' => 'Aim Infocorp Pvt Ltd successfully delivered an elite enterprise full-stack ecosystem for GEA Group by:',
        'points' => [
            'Deploying a scalable Angular framework for enterprise operations',
            'Building a secure .NET API architecture',
            'Engineering optimized MS SQL Server infrastructure for global growth',
        ],
        'outcome' => 'Zero API bottlenecks → Smooth content distribution → Unified customer relationship tracking → Enhanced enterprise operational velocity',
    ],
];
