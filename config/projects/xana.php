<?php
// config/projects/xana.php

return [
    'slug' => 'xana',
    'title' => 'XANA',
    'tag' => 'Web3 Metaverse',
    'year' => '2026',
    'type' => 'High-Availability Web3 Layer, Scalable AI Sync API & Immersive Metaverse Core Services',
    'services' => [
        'Backend Application Development',
        'Web3 Wallet & Asset Sync Integration',
        'High-Throughput REST/WebSocket Gateway',
        'Database Architecture Sharding'
    ],
    'client' => 'XANA',
    'category' => 'web',
    'img' => 'images/portfolio/xana.webp',

    'desc' => 'XANA is a Web3-powered Metaverse and SocialFi infrastructure platform that combines immersive digital environments, blockchain asset ownership, AI-powered interactions, and large-scale virtual experiences across multiple devices.',

    'problem' => 'XANA required a highly scalable backend ecosystem capable of processing millions of real-time events, AI interactions, blockchain validations, and avatar state updates while maintaining low latency and data consistency.',

    'metric_val' => 'Sub-Second',
    'metric_lbl' => 'Asset Validation',

    'tags' => [
        'Node.js',
        'MongoDB',
        'Express',
        'Web3',
        'AI'
    ],

    'alt' => 'XANA Web3 Metaverse Infrastructure',

    'metaTitle' => 'XANA | Web3 Metaverse Infrastructure - Aim Infocorp',
    'metaDescription' => 'Enterprise Web3 metaverse backend built with Node.js, Express, MongoDB, WebSockets, and blockchain integrations for scalable virtual environments.',

    'heroTitle' => 'XANA – <span class="gradient-text">Web3 Metaverse Infrastructure</span>',

    'heroSubtitle' => 'XANA required a highly available backend architecture capable of supporting AI interactions, blockchain asset ownership, real-time multiplayer environments, and large-scale virtual events.',

    'challengeSubtitle' => 'Operating a metaverse platform involves processing enormous volumes of spatial data, AI requests, digital asset transactions, and real-time user interactions. The challenge was maintaining performance, reliability, and consistency at massive scale.',

    'challengeIssues' => [
        [
            'icon' => 'fa-solid fa-database icon-primary',
            'text' => 'Database bottlenecks during large-scale asset lookups and NFT ownership validations'
        ],
        [
            'icon' => 'fa-solid fa-arrows-rotate icon-primary',
            'text' => 'Race conditions and state synchronization risks across real-time virtual environments'
        ],
        [
            'icon' => 'fa-solid fa-microchip icon-primary',
            'text' => 'Resource-intensive AI processing increased memory and server utilization'
        ],
        [
            'icon' => 'fa-solid fa-wallet icon-primary',
            'text' => 'Inconsistent third-party wallet integrations caused connectivity and validation issues'
        ],
    ],

    'challengeResult' => 'The metaverse ecosystem required a resilient backend architecture capable of managing AI, blockchain, and real-time multiplayer workloads simultaneously',

    'process' => [
        [
            'id' => 'process-express',
            'icon' => 'fa-solid fa-network-wired icon-primary',
            'title' => 'High-Throughput RESTful Services via Express',
            'steps' => [
                'Built modular API gateways using Express middleware',
                'Implemented validation, compression, and request sanitization layers',
                'Configured rate-limiting and secure authentication pipelines',
            ],
        ],
        [
            'id' => 'process-nodejs',
            'icon' => 'fa-brands fa-node-js icon-primary',
            'title' => 'Asynchronous Event Pipelines via Node.js',
            'steps' => [
                'Developed event-driven backend services using Node.js',
                'Implemented WebSocket-based real-time synchronization channels',
                'Optimized AI processing workflows and background execution queues',
            ],
        ],
        [
            'id' => 'process-mongodb',
            'icon' => 'fa-solid fa-database icon-primary',
            'title' => 'Scalable Document Store Foundations via MongoDB',
            'steps' => [
                'Designed scalable MongoDB clusters and sharded collections',
                'Implemented advanced indexing strategies for rapid asset retrieval',
                'Created transaction-safe asset management and synchronization models',
            ],
        ],
    ],

    'actions' => [
        'Built a scalable Node.js and Express backend ecosystem',
        'Developed MongoDB database architectures for virtual assets and user profiles',
        'Integrated blockchain asset validation and wallet synchronization workflows',
        'Implemented AI communication and avatar configuration pipelines',
        'Optimized WebSocket communication and platform scalability',
    ],

    'resultsSubtitle' => 'The platform delivered a highly resilient backend infrastructure capable of supporting large-scale metaverse experiences, AI systems, and Web3 asset ecosystems.',

    'results' => [
        [
            'title' => 'Sub-Second',
            'text' => 'Asset search and validation performance through optimized MongoDB indexing'
        ],
        [
            'title' => 'Scalable',
            'text' => 'Node.js request processing under heavy platform workloads'
        ],
        [
            'title' => 'Zero',
            'text' => 'Asset desynchronization through transaction-safe backend operations'
        ],
        [
            'title' => 'Fluid',
            'text' => 'Cross-platform API communication and state synchronization'
        ],
    ],

    'testimonial' => [
        'text' => 'Aim Infocorp delivered an exceptionally fast, highly secure back-end foundation that effortlessly supports the complex technical needs of our Web3 and AI infrastructure. Managing millions of active data points across spatial dimensions, AI models, and blockchain records requires high-level system precision. The Node.js, Express, and MongoDB framework they constructed is incredibly dependable and handles heavy operational traffic spikes without a single hitch.',
        'name' => 'XANA Metaverse Core Technology Group',
        'role' => '',
    ],

    'performance' => [
        [
            'title' => 'Live Web3 Transaction Ledgers',
            'items' => [
                'Enabled real-time monitoring of wallet activity and asset validations',
                'Provided accurate visibility into blockchain synchronization processes',
            ],
        ],
        [
            'title' => 'Real-Time Spatial Room Persistences',
            'items' => [
                'Maintained consistent virtual environments across all connected devices',
                'Processed spatial updates instantly through optimized WebSocket channels',
            ],
        ],
        [
            'title' => 'Lightweight AI Configuration Forms',
            'items' => [
                'Supported secure avatar customization and AI behavior management',
                'Processed multilingual requests without impacting platform responsiveness',
            ],
        ],
    ],

    'conclusion' => [
        'heading' => 'Aim Infocorp Pvt Ltd successfully delivered an elite, highly concurrent backend operational blueprint for XANA by:',
        'points' => [
            'Building scalable Express and Node.js services for real-time Web3 operations',
            'Engineering MongoDB architectures optimized for high-volume asset processing',
            'Creating resilient synchronization pipelines for AI, blockchain, and metaverse systems',
        ],
        'outcome' => 'Sub-second asset validation → Zero data-state mismatches → Scalable AI query handling → Enhanced enterprise Web3 Metaverse scaling',
    ],
];
