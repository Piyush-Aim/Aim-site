<?php
// config/projects/insightt.php

return [
    'slug' => 'insightt',
    'title' => 'Insightt.io',
    'tag' => 'Workforce Analytics Platform',
    'year' => '2026',
    'type' => 'Real-Time Telemetry Engineering, Workforce Gamification, & High-Scale Analytics Back-End',
    'services' => [
        'Website Development',
        'Real-Time Field Performance Ingestion',
        'Operational Dashboard Architecture',
        'Dynamic Analytics Computation'
    ],
    'client' => 'Insightt.io',
    'category' => 'web',
    'img' => 'images/portfolio/insightt.webp',

    'desc' => 'Insightt is an enterprise-grade field operations management and workforce analytics platform engineered for the recovery, asset repossession, and mobile-first logistics industry. The platform centralizes company, driver, and client performance data into actionable real-time insights.',

    'problem' => 'Insightt.io needed a centralized cloud platform capable of processing simultaneous telemetry streams, workforce performance metrics, and commission calculations without causing dashboard delays or database bottlenecks.',

    'metric_val' => 'Real-Time',
    'metric_lbl' => 'Operational Reporting',

    'tags' => ['React', 'Node.js', 'MySQL', 'Workforce Analytics', 'Telemetry'],

    'alt' => 'Insightt Workforce Analytics Platform',

    'metaTitle' => 'Insightt.io | Workforce Analytics & Telemetry Platform - Aim Infocorp',
    'metaDescription' => 'Real-time workforce analytics platform developed with React, Node.js, and MySQL for field operations, telemetry tracking, and automated commission management.',

    'heroTitle' => 'Insightt.io – <span class="gradient-text">Workforce Analytics Platform</span>',
    'heroSubtitle' => 'Insightt.io required a scalable cloud architecture capable of processing live telemetry data, workforce performance metrics, and operational reporting in real time.',

    'challengeSubtitle' => 'Field operations teams required a centralized system to replace fragmented reporting processes and provide instant visibility into workforce activity, driver performance, and operational efficiency.',

    'challengeIssues' => [
        ['icon' => 'fa-solid fa-chart-line icon-primary', 'text' => 'Slow reporting and workforce metric consolidation across multiple locations'],
        ['icon' => 'fa-solid fa-database icon-primary', 'text' => 'Database deadlocks caused by concurrent telemetry updates'],
        ['icon' => 'fa-solid fa-trophy icon-primary', 'text' => 'Heavy dashboard rendering loads from live leaderboards and rankings'],
        ['icon' => 'fa-solid fa-calculator icon-primary', 'text' => 'Disconnected vehicle tracking and commission calculation workflows'],
    ],

    'challengeResult' => 'Manual reporting processes and fragmented workforce tracking systems reduced operational visibility and efficiency',

    'process' => [
        [
            'id' => 'process-react',
            'icon' => 'fa-brands fa-react icon-primary',
            'title' => 'Dynamic Frontend Development with React',
            'steps' => [
                'Built responsive operational dashboards using React',
                'Created gamified leaderboards and workforce scoreboards',
                'Developed streamlined scheduling and commission workflows',
            ],
        ],
        [
            'id' => 'process-nodejs',
            'icon' => 'fa-solid fa-server icon-primary',
            'title' => 'High-Throughput Real-Time Backend with Node.js',
            'steps' => [
                'Developed asynchronous API infrastructure',
                'Implemented real-time activity and telemetry monitoring',
                'Automated commission calculation engines',
            ],
        ],
        [
            'id' => 'process-mysql',
            'icon' => 'fa-solid fa-database icon-primary',
            'title' => 'Relational Data Management with MySQL',
            'steps' => [
                'Designed optimized relational database structures',
                'Implemented indexed reporting queries',
                'Built auditable payroll and commission processing systems',
            ],
        ],
    ],

    'actions' => [
        'Built real-time workforce analytics dashboards using React and Node.js',
        'Developed high-availability MySQL database architecture',
        'Created Infraction Manager monitoring systems',
        'Engineered automated payroll and commission calculation engines',
        'Optimized reporting, analytics, and telemetry processing workflows',
    ],

    'resultsSubtitle' => 'The new platform transformed workforce operations by replacing manual reporting with automated real-time intelligence and performance tracking.',

    'results' => [
        ['title' => 'Instant', 'text' => 'Real-time operational reporting and workforce analytics'],
        ['title' => 'Optimized', 'text' => 'Database responsiveness during peak operational periods'],
        ['title' => 'Live', 'text' => 'Workforce anomaly detection and alerting systems'],
        ['title' => 'Scalable', 'text' => 'Platform architecture supporting multi-location growth'],
    ],

    'testimonial' => [
        'text' => 'Aim Infocorp developed a system that perfectly handles the real-time demands of our industry. Bouncing between different spreadsheets and tools used to kill our productivity. Now, our dispatch managers have immediate insight into field positions and performance scores, and the automated commission generation saves our payroll team days of manual auditing.',
        'name' => 'Insightt.io Operational Engineering Team',
        'role' => '',
    ],

    'performance' => [
        [
            'title' => 'Live Branch Leaderboards',
            'items' => [
                'Real-time workforce performance visibility',
                'Instant score synchronization across branches',
            ],
        ],
        [
            'title' => 'Automated Shift Commission Engine',
            'items' => [
                'Automated payroll calculations',
                'Real-time commission tracking and processing',
            ],
        ],
        [
            'title' => 'Secure Asynchronous Activity Tracking',
            'items' => [
                'Continuous telemetry monitoring',
                'Efficient background processing without dashboard lag',
            ],
        ],
    ],

    'conclusion' => [
        'heading' => 'Aim Infocorp Pvt Ltd successfully delivered an elite workforce analytics ecosystem for Insightt.io by:',
        'points' => [
            'Deploying a modern React interface for live operational visibility',
            'Building scalable Node.js infrastructure for telemetry processing',
            'Engineering robust MySQL systems for reporting accuracy and payroll automation',
        ],
        'outcome' => 'Zero reporting lag → Automated commission mapping → Live workforce tracking → Enhanced operational management efficiency',
    ],
];
