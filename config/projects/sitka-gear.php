<?php
// config/projects/sitka-gear.php

return [
    'slug' => 'sitka-gear',
    'title' => 'Sitka Gear',
    'tag' => 'Headless Ecommerce',
    'year' => '2026',
    'type' => 'Headless Enterprise E-Commerce Storefront & High-Velocity Media Optimization',
    'services' => [
        'Website Development',
        'Headless Asset Pipeline Engineering',
        'Cloud Delivery Optimization',
        'Component System Architecture'
    ],
    'client' => 'Sitka Gear',
    'category' => 'ecommerce',
    'img' => 'images/portfolio/sitka-gear.webp',

    'desc' => 'Sitka Gear is a premium outdoor apparel and technical gear brand recognized for advanced hunting systems, performance fabrics, and innovative layering technologies designed for demanding outdoor environments.',

    'problem' => 'Sitka Gear required a high-performance headless commerce architecture capable of delivering large media assets, technical product data, and responsive shopping experiences without performance bottlenecks.',

    'metric_val' => 'Sub-Second',
    'metric_lbl' => 'Catalog Lookups',

    'tags' => [
        'Next.js',
        'Tailwind',
        'AWS',
        'ISR',
        'Ecommerce'
    ],

    'alt' => 'Sitka Gear Headless Ecommerce Platform',

    'metaTitle' => 'Sitka Gear | Headless Ecommerce Platform - Aim Infocorp',
    'metaDescription' => 'Enterprise headless ecommerce platform built with Next.js, Tailwind CSS, AWS S3, and ISR for high-performance media delivery and shopping experiences.',

    'heroTitle' => 'Sitka Gear – <span class="gradient-text">Headless Ecommerce Platform</span>',

    'heroSubtitle' => 'Sitka Gear required a modern headless commerce architecture capable of serving high-resolution product media, interactive buying experiences, and lightning-fast storefront performance.',

    'challengeSubtitle' => 'Premium outdoor ecommerce experiences depend heavily on high-resolution imagery, technical product specifications, and seamless checkout workflows. The challenge was delivering these assets instantly across all devices and network conditions.',

    'challengeIssues' => [
        [
            'icon' => 'fa-solid fa-image icon-primary',
            'text' => 'Large media assets caused slower product page loading during traffic spikes'
        ],
        [
            'icon' => 'fa-solid fa-cloud-arrow-up icon-primary',
            'text' => 'Application servers experienced strain while serving high-resolution media files'
        ],
        [
            'icon' => 'fa-solid fa-mobile-screen icon-primary',
            'text' => 'Complex technical specifications displayed inconsistently across viewports'
        ],
        [
            'icon' => 'fa-solid fa-cart-shopping icon-primary',
            'text' => 'Layout shifts occurred during inventory updates and checkout interactions'
        ],
    ],

    'challengeResult' => 'The storefront required a scalable architecture capable of delivering premium shopping experiences without sacrificing speed or stability',

    'process' => [
        [
            'id' => 'process-nextjs',
            'icon' => 'fa-solid fa-bolt icon-primary',
            'title' => 'Blazing-Fast Static & Server Rendering via Next.js',
            'steps' => [
                'Implemented Next.js with Incremental Static Regeneration (ISR)',
                'Pre-rendered product catalogs for rapid page delivery',
                'Configured route prefetching for seamless navigation',
            ],
        ],
        [
            'id' => 'process-aws',
            'icon' => 'fa-solid fa-cloud icon-primary',
            'title' => 'Scalable Edge-Asset Delivery via AWS S3',
            'steps' => [
                'Migrated media assets to AWS S3 cloud infrastructure',
                'Automated image optimization and compression workflows',
                'Configured caching and edge delivery strategies',
            ],
        ],
        [
            'id' => 'process-tailwind',
            'icon' => 'fa-solid fa-layer-group icon-primary',
            'title' => 'Utility-First Fluid Styling via Tailwind CSS',
            'steps' => [
                'Developed responsive interfaces using Tailwind CSS',
                'Built adaptive product comparison and filtering systems',
                'Reduced stylesheet overhead using utility-first architecture',
            ],
        ],
    ],

    'actions' => [
        'Built a headless ecommerce storefront using Next.js',
        'Configured AWS S3 media storage and optimization workflows',
        'Developed responsive interfaces using Tailwind CSS',
        'Created advanced product detail and sizing experiences',
        'Optimized asset delivery, rendering performance, and Core Web Vitals',
    ],

    'resultsSubtitle' => 'The modern headless architecture transformed the customer experience by delivering premium product visuals and seamless shopping performance at scale.',

    'results' => [
        [
            'title' => 'Faster',
            'text' => 'Media delivery across image-heavy product pages'
        ],
        [
            'title' => 'Zero',
            'text' => 'Layout shifts during product browsing and checkout'
        ],
        [
            'title' => 'Scalable',
            'text' => 'Traffic handling during seasonal product launches'
        ],
        [
            'title' => 'Optimized',
            'text' => 'Infrastructure costs through AWS S3 asset offloading'
        ],
    ],

    'testimonial' => [
        'text' => 'Aim Infocorp successfully translated our technical product standards into a lightning-fast, high-performance e-commerce platform. In our market, showing the true texture and technology of our apparel without interface lag is critical to consumer trust. The Next.js, Tailwind, and AWS setup they deployed is incredibly fast, responsive, and scales seamlessly across our global customer base.',
        'name' => 'Sitka Gear E-Commerce Operations Group',
        'role' => '',
    ],

    'performance' => [
        [
            'title' => 'Multi-Tier Layering Configurator',
            'items' => [
                'Enabled visual comparison of layering systems and product combinations',
                'Provided responsive interactions across all device types',
            ],
        ],
        [
            'title' => 'Zero-Lag Inventory Badging',
            'items' => [
                'Displayed live stock availability without interrupting shopping flows',
                'Maintained smooth browsing experiences during inventory updates',
            ],
        ],
        [
            'title' => 'High-Fidelity Asset Delivery',
            'items' => [
                'Served optimized product imagery through AWS S3 infrastructure',
                'Preserved image quality while reducing bandwidth consumption',
            ],
        ],
    ],

    'conclusion' => [
        'heading' => 'Aim Infocorp Pvt Ltd successfully delivered a world-class enterprise headless storefront for Sitka Gear by:',
        'points' => [
            'Deploying a Next.js architecture optimized for performance and scalability',
            'Engineering AWS S3 asset delivery systems for media optimization',
            'Utilizing Tailwind CSS to create responsive and consistent user experiences',
        ],
        'outcome' => 'Sub-second product catalog lookups → Zero layout shifting → Highly optimized cloud storage → Enhanced luxury e-commerce conversion',
    ],
];
