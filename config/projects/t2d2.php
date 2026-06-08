<?php
// config/projects/t2d2.php

return [
    'slug' => 't2d2',
    'title' => 'T2D2',
    'tag' => 'AI Building Structural Damage Detector',
    'year' => '2026',
    'type' => 'AI-Powered Asset Inspection Infrastructure & Deep Learning CRM/CMS Engineering',
    'services' => [
        'Website Development',
        'CMS & CRM Architecture',
        'AI/ML Pipeline Integration'
    ],
    'client' => 'T2D2',
    'category' => 'crm',
    'img' => 'images/portfolio/t2d2.webp',

    'desc' => 'T2D2 (Thornton Tomasetti Damage Detector) is a cutting-edge, deep-learning computer vision SaaS platform engineered for structural health assessment and asset management. Born out of a premier global forensic engineering incubator, T2D2 automatically processes, classifies, and monitors visible damage, cracking, and structural deterioration on building façades and heavy infrastructure using drone, camera, and mobile imagery.',

    'problem' => 'T2D2 needed a scalable cloud software solution that could seamlessly ingest massive structural image datasets, process them instantly through computer vision models, and organize them into an intuitive asset management system without degrading client browser performance.',

    'metric_val' => '70%',
    'metric_lbl' => 'Inspection Review Time Reduction',

    'tags' => ['AI/ML', 'CMS', 'CRM', 'Angular', 'Node.js'],
    'alt' => 'T2D2 Building Inspection Platform',

    'metaTitle' => 'T2D2 | AI-Powered Building Inspection Platform - Aim Infocorp',
    'metaDescription' => 'Enterprise AI inspection platform built with Angular, Node.js, MongoDB, and AWS S3 for structural damage detection and asset management.',

    'heroTitle' => 'T2D2 – <span class="gradient-text">AI Building Inspection Platform</span>',
    'heroSubtitle' => 'T2D2 required a scalable cloud platform capable of processing massive structural image datasets and organizing inspection workflows through integrated AI, CRM, and CMS systems.',

    'challengeSubtitle' => 'Traditional asset and façade inspections require engineering teams to manually review thousands of high-resolution drone photos. T2D2 needed a scalable platform to automate image processing, inspection workflows, and customer management without sacrificing performance.',

    'challengeIssues' => [
        ['icon' => 'fa-solid fa-cloud-arrow-up icon-primary', 'text' => 'High server latency and storage overhead when managing thousands of drone inspection images'],
        ['icon' => 'fa-solid fa-table-columns icon-primary', 'text' => 'Sluggish client-side rendering when reviewing large defect datasets'],
        ['icon' => 'fa-solid fa-clock-rotate-left icon-primary', 'text' => 'Lack of centralized systems for tracking deterioration trends over time'],
        ['icon' => 'fa-solid fa-users-gear icon-primary', 'text' => 'Fragmented lead capture and subscription management workflows'],
    ],

    'challengeResult' => 'Manual inspection processes, disconnected workflows, and large-scale imagery management created operational inefficiencies',

    'process' => [
        [
            'id' => 'process-fullstack',
            'icon' => 'fa-solid fa-code icon-primary',
            'title' => 'High-Scale Full-Stack Web Development',
            'steps' => [
                'Architected a responsive Angular single-page application',
                'Built scalable Node.js and Express backend services',
                'Designed MongoDB schemas for inspection assets and metadata',
            ],
        ],
        [
            'id' => 'process-cloud',
            'icon' => 'fa-solid fa-cloud icon-primary',
            'title' => 'Cloud Storage & Custom CMS/CRM Engineering',
            'steps' => [
                'Integrated AWS S3 secure upload infrastructure',
                'Developed custom CMS for inspection asset organization',
                'Built CRM workflows for subscriptions and customer onboarding',
            ],
        ],
        [
            'id' => 'process-ai',
            'icon' => 'fa-solid fa-brain icon-primary',
            'title' => 'AI/ML Pipeline Ingestion',
            'steps' => [
                'Created API pipelines for computer vision processing',
                'Automated defect classification workflows',
                'Delivered real-time AI tagging results to users',
            ],
        ],
    ],

    'actions' => [
        'Designed and built a robust enterprise cloud inspection platform using Angular and Node.js',
        'Developed high-speed multi-file data pipelines utilizing Express and AWS S3',
        'Created searchable MongoDB database architecture for inspection assets and defect tracking',
        'Built custom CMS workspaces for monitoring damage progression over time',
        'Engineered centralized CRM systems for customer onboarding and account management',
    ],

    'resultsSubtitle' => 'The modern cloud ecosystem transformed slow manual inspections into a streamlined digital asset management workflow.',

    'results' => [
        ['title' => '70%', 'text' => 'Reduction in inspection auditing and manual photo review timelines'],
        ['title' => 'Zero-Loss', 'text' => 'Bulk drone image ingestion through AWS S3 pipelines'],
        ['title' => 'Faster', 'text' => 'Database search and defect filtering performance'],
        ['title' => 'Unified', 'text' => 'Inspection, CRM, and customer management operations'],
    ],

    'testimonial' => [
        'text' => 'Aim Infocorp delivered the exact system performance our high-resolution AI tracking demanded. Parsing thousands of drone photographs and cataloging structural defects securely on a cloud network requires an elite development foundation. The platform is incredibly fast, stable, and built to scale.',
        'name' => 'T2D2 Core Technology & Engineering Management',
        'role' => '',
    ],

    'performance' => [
        [
            'title' => 'Seamless AWS S3 Data Ingestion',
            'items' => [
                'Advanced background file handling for large drone imagery datasets',
                'Zero browser lag during high-volume uploads',
            ],
        ],
        [
            'title' => 'Chronological CMS Timelines',
            'items' => [
                'Compare inspection images across multiple years',
                'Track structural wear and deterioration patterns',
            ],
        ],
        [
            'title' => 'Responsive Angular UI Architecture',
            'items' => [
                'Fast inspection asset browsing',
                'Optimized rendering of defect maps and imagery',
            ],
        ],
    ],

    'conclusion' => [
        'heading' => 'Aim Infocorp Pvt Ltd successfully delivered an elite enterprise artificial intelligence asset platform for T2D2 by:',
        'points' => [
            'Leveraging Angular and Node.js for scalable inspection workflows',
            'Building robust AWS S3 cloud infrastructure',
            'Creating integrated CMS and CRM ecosystems',
        ],
        'outcome' => 'Optimized data pipelines → Frictionless drone asset storage → Unified customer workflows → Enhanced structural inspection velocity',
    ],
];
