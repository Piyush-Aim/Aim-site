<?php
// config/services/enterprise-seo.php

return [
    'menu_category' => 'seo',
    'menu_title' => 'Enterprise SEO',
    'menu_desc' => 'Strategic SEO for complex, large-scale websites.',
    'menu_icon' => 'fa-solid fa-chart-line',


    'pageTitle' => 'Enterprise SEO Services | ' . COMPANY_NAME . ' - Scale Your Growth',
    'pageDescription' => 'Enterprise SEO services by ' . COMPANY_NAME . '. Optimize large-scale websites with advanced SEO strategies, automation, and data-driven growth.',
    'pageKey' => 'enterprise_seo',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-building"></i>&nbsp; Enterprise SEO',
        'title' => 'Scale Your Growth with <span class="gradient-text">Enterprise SEO</span>',
        'subtitle' => 'We help large businesses and high-traffic websites achieve scalable SEO growth with advanced strategies, automation, and deep analytics.',
        'metrics' => [
            ['val' => '500K+', 'lbl' => 'Monthly Traffic Managed'],
            ['val' => '5X', 'lbl' => 'Organic Growth'],
            ['val' => '100+', 'lbl' => 'Enterprise Clients'],
        ],
        'form_title' => 'Scale Your SEO Strategy',
        'form_sub' => 'Consult our enterprise SEO experts today.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Enterprise Optimization',
        'title' => 'Manage Large Websites with <span class="gradient-text">Advanced SEO Systems</span>',
        'subtitle' => 'Our enterprise SEO solutions are designed to handle thousands of pages, complex architectures, and global traffic efficiently.',
        'features' => [
            [
                'icon' => 'fa-solid fa-sitemap',
                'title' => 'Scalable Architecture',
                'desc' => 'Optimize large websites with proper structure and indexing.'
            ],
            [
                'icon' => 'fa-solid fa-robot',
                'title' => 'SEO Automation',
                'desc' => 'Automate repetitive SEO tasks for efficiency.'
            ],
        ],
        'img' => 'assets/images/services/enterprise-seo-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Traffic',
            'val' => '+500%',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-database',
            'label' => 'Pages',
            'val' => 'Millions',
            'sub' => 'Managed'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'Enterprise Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Enterprise SEO Services',
        'title' => 'Our <span class="gradient-text">Enterprise SEO Solutions</span>',
        'subtitle' => 'Advanced strategies for large-scale websites.',
        'panels' => [

            'technical' => [
                'tab_name'  => 'Technical SEO',
                'tab_icon'  => 'fa-solid fa-gears',
                'title'     => 'Enterprise Technical SEO',
                'tagline'   => 'Strong Foundation',
                'desc'      => 'Optimize crawlability, indexing, and performance for large websites.',
                'image'     => 'assets/images/services/enterprise-seo-technical.webp',
                'metric'    => ['val' => '100%', 'lbl' => 'Optimized', 'icon' => 'fa-solid fa-check'],
                'features'  => ['Crawl Budget Optimization', 'Site Architecture', 'Schema Markup'],
                'techStack' => ['Screaming Frog', 'Search Console', 'Schema']
            ],

            'automation' => [
                'tab_name'  => 'Automation',
                'tab_icon'  => 'fa-solid fa-robot',
                'title'     => 'SEO Automation & Scaling',
                'tagline'   => 'Work Smarter',
                'desc'      => 'Automate SEO tasks like meta generation, internal linking, and reporting.',
                'image'     => 'assets/images/services/enterprise-seo-automation.webp',
                'metric'    => ['val' => '10X', 'lbl' => 'Efficiency', 'icon' => 'fa-solid fa-bolt'],
                'features'  => ['Automation Tools', 'AI Content Support', 'Bulk Optimization'],
                'techStack' => ['Python', 'Zapier', 'AI Tools']
            ],

            'content' => [
                'tab_name'  => 'Content Strategy',
                'tab_icon'  => 'fa-solid fa-pen',
                'title'     => 'Enterprise Content Strategy',
                'tagline'   => 'Scale Content',
                'desc'      => 'Create and optimize content at scale for maximum visibility.',
                'image'     => 'assets/images/services/enterprise-seo-content.webp',
                'metric'    => ['val' => 'High', 'lbl' => 'Visibility', 'icon' => 'fa-solid fa-eye'],
                'features'  => ['Content Clusters', 'Keyword Mapping', 'Bulk Publishing'],
                'techStack' => ['Ahrefs', 'SEMrush', 'Surfer SEO']
            ],

            'analytics' => [
                'tab_name'  => 'Analytics',
                'tab_icon'  => 'fa-solid fa-chart-line',
                'title'     => 'Advanced SEO Analytics',
                'tagline'   => 'Data-Driven Growth',
                'desc'      => 'Track performance with advanced analytics and reporting dashboards.',
                'image'     => 'assets/images/services/enterprise-seo-analytics.webp',
                'metric'    => ['val' => 'Real-time', 'lbl' => 'Insights', 'icon' => 'fa-solid fa-chart-line'],
                'features'  => ['Custom Dashboards', 'KPI Tracking', 'ROI Analysis'],
                'techStack' => ['Google Analytics', 'Data Studio', 'BigQuery']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Enterprise SEO Process</span>',
        'subtitle' => 'A scalable system for long-term growth.',
        'steps' => [
            ['title' => 'Enterprise Audit', 'desc' => 'Analyzing large-scale website data.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Strategy Planning', 'desc' => 'Creating scalable SEO roadmap.', 'icon' => 'fa-solid fa-map'],
            ['title' => 'Implementation', 'desc' => 'Executing SEO strategies at scale.', 'icon' => 'fa-solid fa-code'],
            ['title' => 'Automation Setup', 'desc' => 'Automating repetitive tasks.', 'icon' => 'fa-solid fa-robot'],
            ['title' => 'Performance Tracking', 'desc' => 'Monitoring growth and KPIs.', 'icon' => 'fa-solid fa-chart-line'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver scalable SEO for enterprise businesses.',
        'cards' => [
            ['icon' => 'fa-solid fa-sitemap', 'title' => 'Scalable SEO', 'desc' => 'Handle large websites efficiently.'],
            ['icon' => 'fa-solid fa-robot', 'title' => 'Automation', 'desc' => 'Reduce manual SEO work.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Data-Driven', 'desc' => 'Make decisions with analytics.'],
            ['icon' => 'fa-solid fa-globe', 'title' => 'Global Reach', 'desc' => 'Expand to international markets.'],
            ['icon' => 'fa-solid fa-database', 'title' => 'Large Data Handling', 'desc' => 'Manage thousands of pages.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Dedicated Support', 'desc' => 'Enterprise-level assistance.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Enterprise SEO Results</span>',
        'subtitle' => 'See how we scaled large businesses.',
        'filter_categories' => ['enterprise', 'seo', 'analytics']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is Enterprise SEO?',
                'a' => 'Enterprise SEO focuses on optimizing large websites with thousands of pages using scalable strategies and automation.'
            ],
            [
                'q' => 'Who needs Enterprise SEO?',
                'a' => 'Large businesses, ecommerce platforms, SaaS companies, and high-traffic websites benefit from enterprise SEO.'
            ],
            [
                'q' => 'How is Enterprise SEO different from regular SEO?',
                'a' => 'It involves handling large data, automation, advanced analytics, and complex site structures.'
            ],
            [
                'q' => 'Can you manage multi-location SEO?',
                'a' => 'Yes, we optimize for multiple locations and global markets.'
            ],
            [
                'q' => 'Do you provide reporting and analytics?',
                'a' => 'Yes, we offer advanced dashboards and KPI tracking for performance monitoring.',
            ],
        ]
    ]
];
