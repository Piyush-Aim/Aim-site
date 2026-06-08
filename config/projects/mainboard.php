<?php
// config/projects/mainboard.php

return [
    'slug' => 'mainboard',
    'title' => 'Mainboard',
    'tag' => 'Talent Platform',
    'year' => '2026',
    'type' => 'High-Performance Headless Web Architecture & Unified Talent Management System',
    'services' => [
        'Full-Stack Website Development',
        'Dynamic Database & API Integration',
        'Headless CMS Architecture',
        'Custom Onboarding Components'
    ],
    'client' => 'Mainboard',
    'category' => 'web',
    'img' => 'images/portfolio/mainboard.webp',

    'desc' => 'Mainboard is a global leader in online booking software, casting ecosystems, and talent management infrastructure, empowering agencies, casting directors, and creative professionals through cloud-based operational platforms.',

    'problem' => 'Mainboard required a modern headless platform capable of delivering media-rich talent portfolios, advanced search functionality, and seamless agency management workflows while maintaining exceptional performance.',

    'metric_val' => 'Sub-Second',
    'metric_lbl' => 'Talent Search Speed',

    'tags' => [
        'Next.js',
        'GraphQL',
        'Wix',
        'SaaS',
        'Media'
    ],

    'alt' => 'Mainboard Talent Management Platform',

    'metaTitle' => 'Mainboard | Talent Management Platform - Aim Infocorp',
    'metaDescription' => 'Enterprise talent management and casting platform built with Next.js, GraphQL, Material UI, and Headless Wix architecture.',

    'heroTitle' => 'Mainboard – <span class="gradient-text">Talent Management Platform</span>',

    'heroSubtitle' => 'Mainboard required a high-performance headless architecture capable of delivering talent portfolios, booking workflows, and casting ecosystems at enterprise scale.',

    'challengeSubtitle' => 'Creative agencies and casting networks rely on fast access to talent portfolios, media libraries, and booking workflows. The platform needed to handle large media assets while maintaining exceptional responsiveness.',

    'challengeIssues' => [
        [
            'icon' => 'fa-solid fa-images icon-primary',
            'text' => 'Heavy media galleries and video portfolios caused loading delays'
        ],
        [
            'icon' => 'fa-solid fa-filter icon-primary',
            'text' => 'Legacy APIs slowed advanced talent search and filtering operations'
        ],
        [
            'icon' => 'fa-solid fa-user-plus icon-primary',
            'text' => 'Scouting applications failed to synchronize with agency systems'
        ],
        [
            'icon' => 'fa-solid fa-pen-to-square icon-primary',
            'text' => 'Content updates were difficult for non-technical marketing teams'
        ],
    ],

    'challengeResult' => 'Agency operations required a faster, more flexible, and scalable digital ecosystem',

    'process' => [
        [
            'id' => 'process-nextjs',
            'icon' => 'fa-solid fa-bolt icon-primary',
            'title' => 'Server-Side Rendering & ISR via Next.js',
            'steps' => [
                'Implemented Next.js SSR and ISR architecture',
                'Optimized image delivery and content rendering pipelines',
                'Configured intelligent prefetching for rapid navigation',
            ],
        ],
        [
            'id' => 'process-graphql',
            'icon' => 'fa-solid fa-diagram-project icon-primary',
            'title' => 'Precision Data Fetching via GraphQL & Headless Wix',
            'steps' => [
                'Developed optimized GraphQL query layers',
                'Reduced over-fetching through targeted data requests',
                'Integrated Headless Wix content management workflows',
            ],
        ],
        [
            'id' => 'process-materialui',
            'icon' => 'fa-solid fa-layer-group icon-primary',
            'title' => 'Component Styling & Adaptive Forms via Material UI',
            'steps' => [
                'Built responsive Material UI component systems',
                'Created advanced talent search and filtering experiences',
                'Developed secure onboarding and scouting forms',
            ],
        ],
    ],

    'actions' => [
        'Built a headless enterprise platform using Next.js',
        'Developed GraphQL integrations for talent and agency data',
        'Implemented responsive Material UI design systems',
        'Connected Headless Wix content management workflows',
        'Created automated talent onboarding and submission pipelines',
    ],

    'resultsSubtitle' => 'The modern headless ecosystem transformed talent discovery, agency operations, and content management into a seamless digital experience.',

    'results' => [
        [
            'title' => 'Sub-Second',
            'text' => 'Portfolio and talent search performance'
        ],
        [
            'title' => 'Reduced',
            'text' => 'Network payload sizes through GraphQL optimization'
        ],
        [
            'title' => 'Responsive',
            'text' => 'Cross-device user experiences with Material UI'
        ],
        [
            'title' => 'Automated',
            'text' => 'Talent onboarding and scouting workflows'
        ],
    ],

    'testimonial' => [
        'text' => 'Aim Infocorp engineered a masterpiece of a platform that perfectly translates our complex data networks into an ultra-fast, visually stunning web environment. In the talent and media industry, showing high-fidelity media without browser stutter is paramount. The Next.js and GraphQL architecture they deployed delivers exceptional speed and reliability, enabling our member agencies to book business faster than ever before.',
        'name' => 'Mainboard Product Management Group',
        'role' => '',
    ],

    'performance' => [
        [
            'title' => 'Multi-Attribute Search Filter Matrix',
            'items' => [
                'Enabled precise talent discovery through advanced filtering',
                'Supported complex skill, location, and category searches',
            ],
        ],
        [
            'title' => 'Real-Time Database Sync Validation',
            'items' => [
                'Processed profile updates instantly',
                'Maintained data consistency across talent ecosystems',
            ],
        ],
        [
            'title' => 'Compressed Media Viewports',
            'items' => [
                'Optimized image and video delivery',
                'Maintained visual quality while reducing bandwidth usage',
            ],
        ],
    ],

    'conclusion' => [
        'heading' => 'Aim Infocorp Pvt Ltd successfully delivered a world-class talent management ecosystem for Mainboard by:',
        'points' => [
            'Deploying a high-performance Next.js architecture for media-rich experiences',
            'Integrating GraphQL and Headless Wix for flexible content management',
            'Building scalable Material UI interfaces for agency operations',
        ],
        'outcome' => 'Zero frontend bottlenecks → Sub-second talent search lookups → Fluid headless architecture → Enhanced agency workflow velocity',
    ],
];
