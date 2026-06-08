<?php
// config/projects/bidmarker.php

return [
    'slug' => 'bidmarker',
    'title' => 'BidMarker',
    'tag' => 'Procurement Platform',
    'year' => '2026',
    'type' => 'Real-Time Multi-Tenant Procurement Framework & Backend Infrastructure Optimization',
    'services' => [
        'Website Development',
        'CMS & CRM Architecture',
        'Database Scaling',
        'High-Security Contract Capture Pipelines'
    ],
    'client' => 'BidMarker',
    'category' => 'crm',
    'img' => 'images/portfolio/bidmarker.webp',

    'desc' => 'BidMarker is an enterprise procurement and tendering platform designed to streamline multi-vendor bidding operations, vendor management, compliance tracking, and contract evaluation workflows for enterprises and supply-chain organizations.',

    'problem' => 'BidMarker required a highly secure, scalable platform capable of processing real-time bid submissions, vendor communications, compliance validation, and procurement workflows without compromising data integrity.',

    'metric_val' => 'Sub-Second',
    'metric_lbl' => 'Bid Search Performance',

    'tags' => [
        'Node.js',
        'TypeScript',
        'MongoDB',
        'CMS',
        'CRM'
    ],

    'alt' => 'BidMarker Procurement Platform',

    'metaTitle' => 'BidMarker | Enterprise Procurement Platform - Aim Infocorp',
    'metaDescription' => 'Enterprise procurement and tendering platform built with Node.js, TypeScript, Express, and MongoDB for secure bidding and vendor management.',

    'heroTitle' => 'BidMarker – <span class="gradient-text">Procurement Platform</span>',

    'heroSubtitle' => 'BidMarker required a secure enterprise ecosystem capable of managing vendor bids, procurement workflows, and contract submissions with complete data integrity.',

    'challengeSubtitle' => 'Modern procurement systems demand secure, real-time collaboration, high-volume document handling, and strict compliance management across multiple organizations.',

    'challengeIssues' => [
        [
            'icon' => 'fa-solid fa-shield-halved icon-primary',
            'text' => 'Runtime vulnerabilities from untyped bid submission payloads'
        ],
        [
            'icon' => 'fa-solid fa-database icon-primary',
            'text' => 'Slow retrieval of large historical procurement records'
        ],
        [
            'icon' => 'fa-solid fa-users icon-primary',
            'text' => 'Concurrent vendor updates causing synchronization challenges'
        ],
        [
            'icon' => 'fa-solid fa-link icon-primary',
            'text' => 'Disconnected onboarding workflows between CRM and procurement systems'
        ],
    ],

    'challengeResult' => 'Procurement operations required stronger data integrity, scalability, and workflow automation',

    'process' => [
        [
            'id' => 'process-typescript',
            'icon' => 'fa-solid fa-code icon-primary',
            'title' => 'Type-Safe Backend Engineering via TypeScript & Node.js',
            'steps' => [
                'Built structured TypeScript backend architecture',
                'Implemented compliance validation middleware',
                'Created reusable notification and webhook systems',
            ],
        ],
        [
            'id' => 'process-express',
            'icon' => 'fa-solid fa-server icon-primary',
            'title' => 'Lightweight RESTful Routing with Express',
            'steps' => [
                'Developed secure Express API infrastructure',
                'Implemented tenant-based route protection',
                'Optimized request handling for procurement workloads',
            ],
        ],
        [
            'id' => 'process-mongodb',
            'icon' => 'fa-solid fa-database icon-primary',
            'title' => 'Scalable Document Ingestion using MongoDB',
            'steps' => [
                'Designed flexible procurement document schemas',
                'Implemented compound indexing strategies',
                'Built transactional protections for bid processing',
            ],
        ],
    ],

    'actions' => [
        'Built a scalable procurement and tendering platform using TypeScript',
        'Developed secure Express API infrastructure',
        'Engineered flexible MongoDB document storage systems',
        'Integrated CMS and CRM workflow automation',
        'Optimized payload delivery, encryption, and cloud performance',
    ],

    'resultsSubtitle' => 'The new enterprise procurement platform transformed complex bidding operations into a secure and efficient digital workflow.',

    'results' => [
        [
            'title' => 'Zero',
            'text' => 'Runtime type errors during bid processing'
        ],
        [
            'title' => 'Reliable',
            'text' => 'High-volume deadline submission handling'
        ],
        [
            'title' => 'Sub-Second',
            'text' => 'Procurement archive search performance'
        ],
        [
            'title' => 'Minutes',
            'text' => 'RFP template deployment through CMS automation'
        ],
    ],

    'testimonial' => [
        'text' => 'Aim Infocorp delivered an incredibly secure, enterprise-ready infrastructure built for high-stakes B2B procurement. In our industry, data integrity and system availability are non-negotiable—especially when deadlines loom. The TypeScript, Node.js, and MongoDB stack they constructed is rock-solid, incredibly fast, and scales seamlessly.',
        'name' => 'BidMarker Product Engineering Lead',
        'role' => '',
    ],

    'performance' => [
        [
            'title' => 'Absolute Data Isolation',
            'items' => [
                'Protected tenant environments through advanced access controls',
                'Prevented competitor visibility before bid reveal deadlines',
            ],
        ],
        [
            'title' => 'Flexible Document Schemas',
            'items' => [
                'Supported complex procurement structures',
                'Handled variable line-item configurations efficiently',
            ],
        ],
        [
            'title' => 'Automated CRM Verification',
            'items' => [
                'Captured enterprise inquiries automatically',
                'Accelerated lead qualification and response workflows',
            ],
        ],
    ],

    'conclusion' => [
        'heading' => 'Aim Infocorp Pvt Ltd successfully delivered a world-class procurement platform for BidMarker by:',
        'points' => [
            'Building a secure TypeScript and Node.js backend ecosystem',
            'Implementing high-performance MongoDB procurement architecture',
            'Integrating CMS and CRM workflows for streamlined adoption',
        ],
        'outcome' => 'Error-free data validation → Fast deadline request handling → Adaptive MongoDB schemas → Enhanced tendering efficiency',
    ],
];
