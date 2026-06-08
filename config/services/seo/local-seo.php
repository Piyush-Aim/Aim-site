<?php
// config/services/local-seo.php

return [
    'menu_category' => 'seo',
    'menu_title' => 'Local SEO',
    'menu_desc' => 'Dominating local search results and driving store traffic.',
    'menu_icon' => 'fa-solid fa-location-dot',


    'pageTitle' => 'Local SEO Services | ' . COMPANY_NAME . ' - Rank #1 in Your City',
    'pageDescription' => 'Local SEO services by ' . COMPANY_NAME . '. Get more local customers with Google Maps ranking, GMB optimization, and location-based SEO strategies.',
    'pageKey' => 'local_seo',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-location-dot"></i>&nbsp; Local SEO',
        'title' => 'Get Found Locally with <span class="gradient-text">Powerful Local SEO</span>',
        'subtitle' => 'We help your business rank on Google Maps and local search results to attract nearby customers and increase leads.',
        'metrics' => [
            ['val' => '200%', 'lbl' => 'Local Traffic Growth'],
            ['val' => 'Top 3', 'lbl' => 'Google Map Rankings'],
            ['val' => '500+', 'lbl' => 'Local Businesses Served'],
        ],
        'form_title' => 'Boost Your Local Presence',
        'form_sub' => 'Connect with our experts and grow your local visibility.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Local Search Optimization',
        'title' => 'Dominate Your Area with <span class="gradient-text">Local Search Rankings</span>',
        'subtitle' => 'Our local SEO strategies ensure your business appears in top results when customers search for services near them.',
        'features' => [
            [
                'icon' => 'fa-solid fa-map',
                'title' => 'Google Maps Ranking',
                'desc' => 'Appear in top map results for local searches.'
            ],
            [
                'icon' => 'fa-solid fa-star',
                'title' => 'Review Optimization',
                'desc' => 'Improve your online reputation with positive reviews.'
            ],
        ],
        'img' => 'assets/images/services/local-seo-intro.png',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Leads',
            'val' => '+150%',
            'width' => '92%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-location-crosshairs',
            'label' => 'Visibility',
            'val' => 'Top',
            'sub' => 'Local'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'Local SEO Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Local SEO Services',
        'title' => 'Our <span class="gradient-text">Local SEO Solutions</span>',
        'subtitle' => 'Everything you need to dominate your local market.',
        'panels' => [

            'gmb' => [
                'tab_name'  => 'GMB Optimization',
                'tab_icon'  => 'fa-brands fa-google',
                'title'     => 'Google Business Profile Optimization',
                'tagline'   => 'Optimize Your Listing',
                'desc'      => 'Fully optimize your Google Business Profile to improve visibility and attract local customers.',
                'image'     => 'assets/images/services/local-seo-gmb.png',
                'metric'    => ['val' => 'Top', 'lbl' => 'Map Ranking', 'icon' => 'fa-solid fa-map-pin'],
                'features'  => ['Profile Optimization', 'Keyword Targeting', 'Post Management'],
                'techStack' => ['Google Business Profile', 'BrightLocal', 'Whitespark']
            ],

            'maps' => [
                'tab_name'  => 'Maps SEO',
                'tab_icon'  => 'fa-solid fa-map-location-dot',
                'title'     => 'Google Maps SEO',
                'tagline'   => 'Rank in Top 3',
                'desc'      => 'Improve your position in Google Maps for location-based searches.',
                'image'     => 'assets/images/services/local-seo-maps.png',
                'metric'    => ['val' => 'Top 3', 'lbl' => 'Ranking', 'icon' => 'fa-solid fa-location-dot'],
                'features'  => ['NAP Consistency', 'Geo Signals', 'Map Ranking Boost'],
                'techStack' => ['Google Maps', 'Geo Tools', 'Local Schema']
            ],

            'citations' => [
                'tab_name'  => 'Citations',
                'tab_icon'  => 'fa-solid fa-book',
                'title'     => 'Local Citation Building',
                'tagline'   => 'Build Authority',
                'desc'      => 'Create consistent business listings across directories to boost credibility.',
                'image'     => 'assets/images/services/local-seo-citations.png',
                'metric'    => ['val' => '100+', 'lbl' => 'Listings', 'icon' => 'fa-solid fa-list'],
                'features'  => ['Directory Listings', 'NAP Consistency', 'Authority Building'],
                'techStack' => ['Yelp', 'Justdial', 'IndiaMART']
            ],

            'reviews' => [
                'tab_name'  => 'Reviews',
                'tab_icon'  => 'fa-solid fa-star',
                'title'     => 'Review & Reputation Management',
                'tagline'   => 'Build Trust',
                'desc'      => 'Manage and improve your online reviews to increase trust and conversions.',
                'image'     => 'assets/images/services/local-seo-reviews.png',
                'metric'    => ['val' => '4.5★+', 'lbl' => 'Ratings', 'icon' => 'fa-solid fa-star'],
                'features'  => ['Review Strategy', 'Response Management', 'Reputation Growth'],
                'techStack' => ['Google Reviews', 'Trustpilot', 'Review Tools']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Local SEO Process</span>',
        'subtitle' => 'A proven system to rank your business locally.',
        'steps' => [
            ['title' => 'Local Audit', 'desc' => 'Analyzing your current local presence.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Keyword Targeting', 'desc' => 'Finding high-intent local keywords.', 'icon' => 'fa-solid fa-key'],
            ['title' => 'Optimization', 'desc' => 'Improving listings and website SEO.', 'icon' => 'fa-solid fa-pen'],
            ['title' => 'Citation Building', 'desc' => 'Creating consistent listings.', 'icon' => 'fa-solid fa-book'],
            ['title' => 'Tracking & Growth', 'desc' => 'Monitoring rankings and leads.', 'icon' => 'fa-solid fa-chart-line'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We help local businesses dominate search results.',
        'cards' => [
            ['icon' => 'fa-solid fa-map-location-dot', 'title' => 'Top Map Rankings', 'desc' => 'Appear in Google Maps top results.'],
            ['icon' => 'fa-solid fa-users', 'title' => 'More Local Leads', 'desc' => 'Attract nearby customers ready to buy.'],
            ['icon' => 'fa-solid fa-star', 'title' => 'Better Reputation', 'desc' => 'Increase positive reviews and trust.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Higher Conversions', 'desc' => 'Turn searches into customers.'],
            ['icon' => 'fa-solid fa-bullseye', 'title' => 'Targeted Traffic', 'desc' => 'Reach people searching in your area.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Continuous local SEO improvements.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Local SEO Results</span>',
        'subtitle' => 'See how we helped businesses rank locally.',
        'filter_categories' => ['gmb', 'maps', 'seo']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is Local SEO?',
                'a' => 'Local SEO focuses on optimizing your business to appear in location-based searches, especially on Google Maps and local listings.'
            ],
            [
                'q' => 'How does Google Business Profile help?',
                'a' => 'It allows your business to appear in Google Maps and local results, increasing visibility and customer inquiries.'
            ],
            [
                'q' => 'How long does it take to rank locally?',
                'a' => 'Most businesses see improvements within 1–3 months depending on competition and optimization level.'
            ],
            [
                'q' => 'Do reviews impact local rankings?',
                'a' => 'Yes, positive reviews improve trust and significantly impact your local search rankings.'
            ],
            [
                'q' => 'Can you help generate local leads?',
                'a' => 'Yes, our strategies focus on attracting high-intent local customers who are ready to convert.',
            ],
        ]
    ]
];
