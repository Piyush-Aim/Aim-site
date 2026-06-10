<?php
// config/services/global-seo.php

return [
    'menu_category' => 'seo',
    'menu_title' => 'Global SEO',
    'menu_desc' => 'Ranking your brand on a global scale with data-driven strategies.',
    'menu_icon' => 'fa-solid fa-magnifying-glass',


    'pageTitle' => 'Global SEO Services | ' . COMPANY_NAME . ' - Rank Worldwide',
    'pageDescription' => 'Global SEO services by ' . COMPANY_NAME . '. Expand your reach internationally with multilingual SEO, technical optimization, and global search strategies.',
    'pageKey' => 'seo',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-globe"></i>&nbsp; Global SEO',
        'title' => 'Expand Your Reach with <span class="gradient-text">Global SEO Strategies</span>',
        'subtitle' => 'We help your business rank across multiple countries and languages with advanced international SEO techniques and data-driven strategies.',
        'metrics' => [
            ['val' => '50+', 'lbl' => 'Countries Ranked'],
            ['val' => '300%', 'lbl' => 'Traffic Growth'],
            ['val' => '120+', 'lbl' => 'Global Clients'],
        ],
        'form_title' => 'Grow Globally with SEO',
        'form_sub' => 'Talk to our SEO experts and scale your business worldwide.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'International SEO',
        'title' => 'Rank Globally with <span class="gradient-text">Smart SEO Optimization</span>',
        'subtitle' => 'Our global SEO strategies ensure your website is optimized for multiple regions, languages, and search engines to maximize international visibility.',
        'features' => [
            [
                'icon' => 'fa-solid fa-earth-americas',
                'title' => 'Global Targeting',
                'desc' => 'Optimize your website for multiple countries and regions.'
            ],
            [
                'icon' => 'fa-solid fa-language',
                'title' => 'Multilingual SEO',
                'desc' => 'Rank in different languages with localized content strategies.'
            ],
        ],
        'img' => 'assets/images/services/seo-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Traffic Growth',
            'val' => '300%',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-magnifying-glass',
            'label' => 'Visibility',
            'val' => 'High',
            'sub' => 'Global'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'SEO Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; SEO Services',
        'title' => 'Our <span class="gradient-text">Global SEO Services</span>',
        'subtitle' => 'Comprehensive SEO solutions for international growth.',
        'panels' => [

            'international' => [
                'tab_name'  => 'International SEO',
                'tab_icon'  => 'fa-solid fa-globe',
                'title'     => 'International SEO Optimization',
                'tagline'   => 'Rank Across Borders',
                'desc'      => 'Optimize your website to rank in multiple countries with geo-targeting and hreflang strategies.',
                'image'     => 'assets/images/services/seo-international.webp',
                'metric'    => ['val' => '50+', 'lbl' => 'Countries', 'icon' => 'fa-solid fa-location-dot'],
                'features'  => ['Hreflang Setup', 'Geo Targeting', 'Country-Specific SEO'],
                'techStack' => ['Google Search Console', 'Ahrefs', 'SEMrush']
            ],

            'multilingual' => [
                'tab_name'  => 'Multilingual SEO',
                'tab_icon'  => 'fa-solid fa-language',
                'title'     => 'Multilingual SEO Services',
                'tagline'   => 'Speak Every Language',
                'desc'      => 'Optimize content for multiple languages while maintaining search relevance and accuracy.',
                'image'     => 'assets/images/services/seo-multilingual.webp',
                'metric'    => ['val' => 'Multi', 'lbl' => 'Languages', 'icon' => 'fa-solid fa-comments'],
                'features'  => ['Localized Keywords', 'Translation SEO', 'Content Localization'],
                'techStack' => ['WPML', 'Polylang', 'DeepL']
            ],

            'technical' => [
                'tab_name'  => 'Technical SEO',
                'tab_icon'  => 'fa-solid fa-gears',
                'title'     => 'Technical SEO Optimization',
                'tagline'   => 'Strong Foundation',
                'desc'      => 'Improve site performance, indexing, and crawling for better global rankings.',
                'image'     => 'assets/images/services/seo-technical.webp',
                'metric'    => ['val' => '100%', 'lbl' => 'Optimized', 'icon' => 'fa-solid fa-check'],
                'features'  => ['Site Speed Optimization', 'Schema Markup', 'Crawl Optimization'],
                'techStack' => ['Lighthouse', 'Schema.org', 'Screaming Frog']
            ],

            'ecommerce' => [
                'tab_name'  => 'Ecommerce SEO',
                'tab_icon'  => 'fa-solid fa-cart-shopping',
                'title'     => 'Global Ecommerce SEO',
                'tagline'   => 'Sell Worldwide',
                'desc'      => 'Optimize ecommerce websites to attract global customers and increase conversions.',
                'image'     => 'assets/images/services/seo-ecommerce.webp',
                'metric'    => ['val' => '2X', 'lbl' => 'Sales Growth', 'icon' => 'fa-solid fa-arrow-up-right-dots'],
                'features'  => ['Product SEO', 'International Listings', 'Conversion Optimization'],
                'techStack' => ['Shopify', 'WooCommerce', 'Google Merchant Center']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Global SEO Process</span>',
        'subtitle' => 'A data-driven approach to achieve international rankings.',
        'steps' => [
            ['title' => 'Market Research', 'desc' => 'Analyzing global markets and competitors.', 'icon' => 'fa-solid fa-chart-pie'],
            ['title' => 'Keyword Strategy', 'desc' => 'Identifying region-specific keywords.', 'icon' => 'fa-solid fa-key'],
            ['title' => 'On-Page Optimization', 'desc' => 'Optimizing content and structure.', 'icon' => 'fa-solid fa-pen'],
            ['title' => 'Technical SEO', 'desc' => 'Improving performance and indexing.', 'icon' => 'fa-solid fa-gears'],
            ['title' => 'Link Building', 'desc' => 'Building authority across regions.', 'icon' => 'fa-solid fa-link'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We help businesses grow beyond borders with SEO.',
        'cards' => [
            ['icon' => 'fa-solid fa-globe', 'title' => 'Global Reach', 'desc' => 'Expand into international markets.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Traffic Growth', 'desc' => 'Increase organic traffic worldwide.'],
            ['icon' => 'fa-solid fa-language', 'title' => 'Localization', 'desc' => 'SEO tailored for each region.'],
            ['icon' => 'fa-solid fa-magnifying-glass', 'title' => 'Better Rankings', 'desc' => 'Rank higher in multiple countries.'],
            ['icon' => 'fa-solid fa-rocket', 'title' => 'Scalable Strategy', 'desc' => 'Grow your SEO as you expand.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Continuous SEO optimization support.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">SEO Case Studies</span>',
        'subtitle' => 'See how we helped businesses grow globally.',
        'filter_categories' => ['international', 'ecommerce', 'technical']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is Global SEO?',
                'a' => 'Global SEO focuses on optimizing your website to rank in multiple countries and languages, targeting international audiences.'
            ],
            [
                'q' => 'How is international SEO different from local SEO?',
                'a' => 'International SEO targets multiple countries and languages, while local SEO focuses on a specific geographic area.'
            ],
            [
                'q' => 'Do I need separate websites for each country?',
                'a' => 'Not always. You can use subdomains, subdirectories, or ccTLDs depending on your business strategy.'
            ],
            [
                'q' => 'What is hreflang and why is it important?',
                'a' => 'Hreflang tags help search engines understand language and regional targeting, ensuring users see the correct version of your site.'
            ],
            [
                'q' => 'How long does global SEO take to show results?',
                'a' => 'Typically, noticeable improvements take 3–6 months depending on competition and market conditions.'
            ],
        ]
    ]
];
