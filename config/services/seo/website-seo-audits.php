<?php
// config/services/website-seo-audits.php

return [
    'menu_category' => 'seo',
    'menu_title' => 'Website SEO Audits',
    'menu_desc' => 'Comprehensive site health checks to uncover technical issues and growth opportunities.',
    'menu_icon' => 'fa-solid fa-magnifying-glass-chart',

    'pageTitle' => 'Website SEO Audit Services | ' . COMPANY_NAME . ' - Improve Rankings & Performance',
    'pageDescription' => 'Professional website SEO audit services by ' . COMPANY_NAME . '. Discover technical SEO issues, content gaps, ranking opportunities and actionable strategies to improve traffic and search visibility.',
    'pageKey' => 'website_seo_audits',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-magnifying-glass-chart"></i>&nbsp; Website SEO Audits',
        'title' => 'Comprehensive <span class="gradient-text">Website SEO Audits</span>',
        'subtitle' => 'Ensure your website is fully optimized for search engines with expert SEO audits that uncover issues, identify growth opportunities and improve rankings.',
        'metrics' => [
            ['val' => '100+', 'lbl' => 'Audits Completed'],
            ['val' => '3X', 'lbl' => 'Traffic Potential'],
            ['val' => '90+', 'lbl' => 'SEO Checks'],
        ],
        'form_title' => 'Request SEO Audit',
        'form_sub' => 'Get a professional audit report with clear recommendations.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'SEO Health Check',
        'title' => 'Find Problems & Unlock <span class="gradient-text">SEO Growth</span>',
        'subtitle' => 'A website SEO audit is a detailed evaluation of your site’s performance, content quality and technical SEO factors that affect rankings.',
        'features' => [
            [
                'icon' => 'fa-solid fa-triangle-exclamation',
                'title' => 'Identify Hidden Issues',
                'desc' => 'Find crawl errors, slow pages, broken links and indexing problems.'
            ],
            [
                'icon' => 'fa-solid fa-chart-line',
                'title' => 'Improve Rankings',
                'desc' => 'Use actionable recommendations to boost search visibility.'
            ],
        ],
        'img' => 'assets/images/services/website-seo-audits-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-ranking-star',
            'label' => 'SEO Score',
            'val' => '+85%',
            'width' => '92%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-magnifying-glass',
            'label' => 'Issues Found',
            'val' => '100+',
            'sub' => 'Checks'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'SEO Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Audit Services',
        'title' => 'Our <span class="gradient-text">SEO Audit Solutions</span>',
        'subtitle' => 'Complete audits tailored to your website goals.',

        'panels' => [

            'technical' => [
                'tab_name'  => 'Technical Audit',
                'tab_icon'  => 'fa-solid fa-gears',
                'title'     => 'Technical SEO Audit',
                'tagline'   => 'Fix Core SEO Errors',
                'desc'      => 'Audit indexing, crawling, speed, schema, mobile usability and site structure.',
                'image'     => 'assets/images/services/website-seo-audits-technical.webp',
                'metric'    => ['val' => '90+', 'lbl' => 'Checks', 'icon' => 'fa-solid fa-check'],
                'features'  => ['Crawl Errors', 'Speed Audit', 'Schema Review'],
                'techStack' => ['GSC', 'PageSpeed', 'Screaming Frog']
            ],

            'content' => [
                'tab_name'  => 'Content Audit',
                'tab_icon'  => 'fa-solid fa-file-lines',
                'title'     => 'Content SEO Audit',
                'tagline'   => 'Improve Content Quality',
                'desc'      => 'Review thin pages, keyword targeting, duplicate content and content gaps.',
                'image'     => 'assets/images/services/website-seo-audits-content.webp',
                'metric'    => ['val' => 'Top', 'lbl' => 'Content', 'icon' => 'fa-solid fa-pen'],
                'features'  => ['Keyword Gaps', 'Duplicate Checks', 'Content Quality'],
                'techStack' => ['SEO Tools', 'Analytics']
            ],

            'local' => [
                'tab_name'  => 'Local Audit',
                'tab_icon'  => 'fa-solid fa-location-dot',
                'title'     => 'Local SEO Audit',
                'tagline'   => 'Improve Local Visibility',
                'desc'      => 'Audit Google Business Profile, citations, reviews and local landing pages.',
                'image'     => 'assets/images/services/website-seo-audits-local.webp',
                'metric'    => ['val' => 'Local', 'lbl' => 'Growth', 'icon' => 'fa-solid fa-map'],
                'features'  => ['GBP Review', 'Citation Audit', 'Location Pages'],
                'techStack' => ['GBP', 'Local SEO Tools']
            ],

            'ecommerce' => [
                'tab_name'  => 'Ecommerce Audit',
                'tab_icon'  => 'fa-solid fa-cart-shopping',
                'title'     => 'Ecommerce SEO Audit',
                'tagline'   => 'Optimize Store Rankings',
                'desc'      => 'Review product pages, categories, filters, duplicate URLs and conversions.',
                'image'     => 'assets/images/services/website-seo-audits-ecommerce.webp',
                'metric'    => ['val' => 'Sales', 'lbl' => 'Ready', 'icon' => 'fa-solid fa-chart-line'],
                'features'  => ['Product SEO', 'Category SEO', 'UX Review'],
                'techStack' => ['GA4', 'Search Console']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">SEO Audit Process</span>',
        'subtitle' => 'A complete framework for uncovering issues and growth opportunities.',
        'steps' => [
            ['title' => 'Discovery', 'desc' => 'Understand goals, website type and current challenges.', 'icon' => 'fa-solid fa-comments'],
            ['title' => 'Full Site Scan', 'desc' => 'Analyze technical SEO, structure and content.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Issue Prioritization', 'desc' => 'Rank problems by SEO impact.', 'icon' => 'fa-solid fa-list-check'],
            ['title' => 'Action Plan', 'desc' => 'Provide clear recommendations and roadmap.', 'icon' => 'fa-solid fa-lightbulb'],
            ['title' => 'Growth Support', 'desc' => 'Optional implementation and ongoing SEO help.', 'icon' => 'fa-solid fa-chart-line'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Benefits of an <span class="gradient-text">SEO Audit</span>',
        'subtitle' => 'A strong audit is the first step toward better rankings and traffic.',
        'cards' => [
            ['icon' => 'fa-solid fa-bug', 'title' => 'Identify Issues', 'desc' => 'Spot technical problems holding your site back.'],
            ['icon' => 'fa-solid fa-ranking-star', 'title' => 'Enhance Visibility', 'desc' => 'Align pages with search engine best practices.'],
            ['icon' => 'fa-solid fa-users', 'title' => 'Boost Traffic', 'desc' => 'Improve organic traffic with targeted fixes.'],
            ['icon' => 'fa-solid fa-scale-balanced', 'title' => 'Stay Competitive', 'desc' => 'Compare your site with competitors.'],
            ['icon' => 'fa-solid fa-gauge-high', 'title' => 'Better Performance', 'desc' => 'Improve speed, UX and mobile usability.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Expert Guidance', 'desc' => 'Get a clear roadmap from SEO specialists.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Results',
        'title' => 'Our <span class="gradient-text">SEO Audit Success Stories</span>',
        'subtitle' => 'See how businesses improved rankings after our audits.',
        'filter_categories' => ['seo', 'audit', 'growth']
    ],

    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is a website SEO audit?',
                'a' => 'An SEO audit is a detailed review of technical SEO, content and ranking factors affecting visibility.'
            ],
            [
                'q' => 'Why do I need an SEO audit?',
                'a' => 'It helps identify hidden issues, missed opportunities and clear next steps for growth.'
            ],
            [
                'q' => 'How long does an SEO audit take?',
                'a' => 'Most audits are completed within a few days depending on website size.'
            ],
            [
                'q' => 'Do you fix issues after the audit?',
                'a' => 'Yes, we can implement recommendations and provide ongoing SEO support.'
            ],
            [
                'q' => 'Will an audit improve rankings?',
                'a' => 'Fixing audit findings often improves rankings, traffic and performance over time.'
            ],
        ]
    ]

];
