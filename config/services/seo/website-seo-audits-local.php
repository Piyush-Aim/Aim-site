<?php

return [
    'hide_from_menu' => true,
    'menu_category' => 'seo',
    'menu_title' => 'Website SEO Audits',

    'pageTitle' => 'Website SEO Audit Services in {target_loc} | ' . COMPANY_NAME,
    'pageDescription' => 'Professional website SEO audit services for businesses in {target_loc}. Identify technical SEO issues, content gaps, and ranking opportunities to grow visibility in {state}.',
    'pageKey' => 'website_seo_audits_local',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-map-location-dot"></i>&nbsp; Local SEO Audits',
        'title' => 'Website SEO Audits in <span class="gradient-text">{target_loc}</span>',
        'subtitle' => 'Improve rankings, traffic, and conversions with expert SEO audits tailored for businesses in {target_loc}.',
        'metrics' => [
            ['val' => '100+', 'lbl' => 'Audits Delivered'],
            ['val' => '90+', 'lbl' => 'SEO Checks'],
            ['val' => '3X', 'lbl' => 'Growth Potential'],
        ],
        'form_title' => 'Request a {target_loc} SEO Audit',
        'form_sub' => 'Get a detailed report with practical recommendations for your website.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Service Overview',
        'title' => 'What is a <span class="gradient-text">Website SEO Audit?</span>',
        'subtitle' => 'A website SEO audit is a complete review of your website’s search engine performance. It helps businesses in {target_loc} uncover technical errors, weak content, missing keywords, and local SEO gaps that may be limiting online growth.',
        'features' => [
            [
                'icon' => 'fa-solid fa-triangle-exclamation',
                'title' => 'Identify Hidden Issues',
                'desc' => 'Find crawl errors, slow pages, and indexing problems.'
            ],
            [
                'icon' => 'fa-solid fa-chart-line',
                'title' => 'Improve Rankings',
                'desc' => 'Use actionable recommendations to boost search visibility.'
            ],
        ],
        'img' => 'assets/images/services/website-seo-audits-local-intro.webp',
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

    /* ================= SERVICES GRID ================= */
    'types' => [
        'tag' => 'Local Capabilities',
        'title' => 'Website SEO Audit Services in <span class="gradient-text">{target_loc}</span>',
        'subtitle' => 'Comprehensive audits designed to improve every area of your website.',
        'panels' => [
            'tech-seo' => [
                'tab_name' => 'Technical SEO',
                'tab_icon' => 'fa-solid fa-code',
                'tagline' => 'Foundation',
                'title' => 'Technical SEO Auditing in {target_loc}',
                'desc' => 'We identify issues that stop search engines from properly crawling and ranking your site.',
                'features' => [
                    'Core Web Vitals Review',
                    'Mobile Optimization',
                    'Indexing & Crawl Checks',
                    'Schema & Sitemap Review'
                ],
                'techStack' => ['Google Search Console', 'Screaming Frog', 'Ahrefs'],
                'image' => 'assets/images/services/website-seo-audits-local-technical.webp',
            ],

            'local-seo' => [
                'tab_name' => 'Local SEO',
                'tab_icon' => 'fa-solid fa-map-pin',
                'tagline' => 'Visibility',
                'title' => 'Local SEO Audits in {target_loc}',
                'desc' => 'We review local search signals to help you rank for nearby customers.',
                'features' => [
                    'Google Business Profile Audit',
                    'NAP Consistency Check',
                    'Local Keyword Review',
                    'Review Profile Analysis'
                ],
                'techStack' => ['BrightLocal', 'Semrush', 'Whitespark'],
                'image' => 'assets/images/services/website-seo-audits-local-local.webp',
            ],

            'content-seo' => [
                'tab_name' => 'Content SEO',
                'tab_icon' => 'fa-solid fa-pen-nib',
                'tagline' => 'Relevance',
                'title' => '{target_loc} Content Optimization',
                'desc' => 'We evaluate content quality and keyword targeting for stronger organic reach.',
                'features' => [
                    'Keyword Gap Analysis',
                    'On-Page SEO Review',
                    'Meta Tags Optimization',
                    'Content Improvement Plan'
                ],
                'techStack' => ['SurferSEO', 'Ahrefs', 'Clearscope'],
                'image' => 'assets/images/services/website-seo-audits-local-content.webp',
                'metric' => [
                    'icon' => 'fa-solid fa-arrow-trend-up',
                    'val' => '150%',
                    'lbl' => 'Traffic Growth Potential'
                ]
            ],

            'ecommerce-seo' => [
                'tab_name' => 'Ecommerce SEO',
                'tab_icon' => 'fa-solid fa-cart-shopping',
                'tagline' => 'Sales',
                'title' => 'Ecommerce SEO for {target_loc} Businesses',
                'desc' => 'We optimize ecommerce websites to increase product visibility and conversions.',
                'features' => [
                    'Product Page SEO',
                    'Category SEO Review',
                    'Structured Data Setup',
                    'Conversion Improvements'
                ],
                'techStack' => ['Shopify', 'WooCommerce', 'Magento'],
                'image' => 'assets/images/services/website-seo-audits-local-ecommerce.webp',
            ]
        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'How We Audit <span class="gradient-text">{target_loc} Websites</span>',
        'subtitle' => 'A structured process focused on measurable SEO improvements.',
        'steps' => [
            [
                'title' => 'Business Discovery',
                'desc' => 'We understand your goals, audience, and market in {target_loc}.'
            ],
            [
                'title' => 'Website Analysis',
                'desc' => 'We run detailed technical, content, and UX checks across your site.'
            ],
            [
                'title' => 'Competitor Review',
                'desc' => 'We compare your website with leading competitors in {target_loc}.'
            ],
            [
                'title' => 'Action Plan Delivery',
                'desc' => 'You receive a prioritized roadmap for SEO growth and fixes.'
            ]
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Benefits of a Local SEO Audit',
        'subtitle' => 'Clear insights that improve traffic, rankings, and leads.',
        'cards' => [
            [
                'icon' => 'fa-solid fa-magnifying-glass-location',
                'title' => 'Find Hidden Issues',
                'desc' => 'Detect problems reducing your visibility in {target_loc}.'
            ],
            [
                'icon' => 'fa-solid fa-trophy',
                'title' => 'Beat Competitors',
                'desc' => 'Use competitor insights to improve rankings in {target_loc}.'
            ],
            [
                'icon' => 'fa-solid fa-users',
                'title' => 'Better User Experience',
                'desc' => 'Enhance speed, usability, and mobile performance.'
            ],
            [
                'icon' => 'fa-solid fa-list-check',
                'title' => 'Higher ROI',
                'desc' => 'Focus on SEO actions that generate the strongest returns.'
            ],
            [
                'icon' => 'fa-solid fa-chart-line',
                'title' => 'Increase Organic Traffic',
                'desc' => 'Improve keyword rankings and attract more targeted visitors from {target_loc}.'
            ],
            [
                'icon' => 'fa-solid fa-ranking-star',
                'title' => 'Stronger Brand Presence',
                'desc' => 'Build trust and authority with better search visibility in {target_loc}.'
            ]
        ]
    ],

    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'FAQs about SEO Audits in {target_loc}',
        'list' => [
            [
                'q' => 'How long does an SEO audit take?',
                'a' => 'Most audits are completed within 1 to 2 weeks depending on website size and complexity.'
            ],
            [
                'q' => 'Do you fix the issues after the audit?',
                'a' => 'Yes, we can implement all recommended SEO fixes and optimizations.'
            ],
            [
                'q' => 'Why is local SEO important for {target_loc} businesses?',
                'a' => 'Local SEO helps nearby customers discover your business when searching for services in {target_loc}.'
            ],
            [
                'q' => 'How often should I get an SEO audit?',
                'a' => 'We recommend a full SEO audit every 6 to 12 months or after major website changes.'
            ],
            [
                'q' => 'Can SEO audits improve leads and sales?',
                'a' => 'Yes, by fixing SEO issues and improving rankings, audits can increase qualified traffic, leads, and conversions.'
            ]
        ]
    ]
];
