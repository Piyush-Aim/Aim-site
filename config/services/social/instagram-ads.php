<?php
// config/services/instagram-ads.php

return [
    'menu_category' => 'social',
    'menu_title' => 'Instagram Ads',
    'menu_desc' => 'Visually stunning ad campaigns for brand awareness.',
    'menu_icon' => 'fa-brands fa-instagram',


    'pageTitle' => 'Instagram Ads Services | ' . COMPANY_NAME . ' - Boost Engagement & Sales',
    'pageDescription' => 'Professional Instagram Ads services by ' . COMPANY_NAME . '. Drive engagement, leads, and sales with high-performing Instagram advertising campaigns.',
    'pageKey' => 'instagram_ads',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-brands fa-instagram"></i>&nbsp; Instagram Ads',
        'title' => 'Grow Faster with <span class="gradient-text">Instagram Ads</span>',
        'subtitle' => 'We create visually engaging Instagram ad campaigns that drive traffic, engagement, and sales.',
        'metrics' => [
            ['val' => '5X', 'lbl' => 'Engagement'],
            ['val' => '300%', 'lbl' => 'Sales Growth'],
            ['val' => '120+', 'lbl' => 'Campaigns Managed'],
        ],
        'form_title' => 'Start Your Instagram Ads',
        'form_sub' => 'Boost your brand with high-converting Instagram campaigns.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Visual Advertising',
        'title' => 'Turn Scrolls into <span class="gradient-text">Clicks & Sales</span>',
        'subtitle' => 'Our Instagram ad strategies focus on creativity, audience targeting, and conversion optimization.',
        'features' => [
            [
                'icon' => 'fa-solid fa-image',
                'title' => 'Creative Visual Ads',
                'desc' => 'Design eye-catching ads that capture attention.'
            ],
            [
                'icon' => 'fa-solid fa-chart-line',
                'title' => 'High Engagement',
                'desc' => 'Increase likes, shares, and interactions.'
            ],
        ],
        'img' => 'assets/images/services/instagram-ads-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-heart',
            'label' => 'Engagement',
            'val' => '+300%',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-cart-shopping',
            'label' => 'Sales',
            'val' => 'High',
            'sub' => 'Growth'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'Instagram Ads Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Instagram Ads Services',
        'title' => 'Our <span class="gradient-text">Instagram Advertising Solutions</span>',
        'subtitle' => 'Complete Instagram marketing services.',
        'panels' => [

            'reels' => [
                'tab_name'  => 'Reels Ads',
                'tab_icon'  => 'fa-solid fa-video',
                'title'     => 'Instagram Reels Ads',
                'tagline'   => 'Engage with Short Videos',
                'desc'      => 'Run engaging short-form video ads to capture attention.',
                'image'     => 'assets/images/services/instagram-ads-reels.webp',
                'metric'    => ['val' => 'High', 'lbl' => 'Engagement', 'icon' => 'fa-solid fa-play'],
                'features'  => ['Video Ads', 'Creative Editing', 'Audience Targeting'],
                'techStack' => ['Meta Ads', 'Video Tools']
            ],

            'story' => [
                'tab_name'  => 'Story Ads',
                'tab_icon'  => 'fa-solid fa-mobile-screen',
                'title'     => 'Instagram Story Ads',
                'tagline'   => 'Full-Screen Impact',
                'desc'      => 'Create immersive full-screen ads for better engagement.',
                'image'     => 'assets/images/services/instagram-ads-stories.webp',
                'metric'    => ['val' => 'Wide', 'lbl' => 'Reach', 'icon' => 'fa-solid fa-eye'],
                'features'  => ['Full-Screen Ads', 'Swipe Up CTA', 'Targeting'],
                'techStack' => ['Instagram Ads', 'Meta Ads']
            ],

            'ecommerce' => [
                'tab_name'  => 'Ecommerce Ads',
                'tab_icon'  => 'fa-solid fa-cart-shopping',
                'title'     => 'Instagram Ecommerce Ads',
                'tagline'   => 'Drive Product Sales',
                'desc'      => 'Promote products with visually appealing ads.',
                'image'     => 'assets/images/services/instagram-ads-shopping.webp',
                'metric'    => ['val' => '4X', 'lbl' => 'ROAS', 'icon' => 'fa-solid fa-chart-line'],
                'features'  => ['Catalog Ads', 'Dynamic Ads', 'Retargeting'],
                'techStack' => ['Meta Ads', 'Shopify']
            ],

            'remarketing' => [
                'tab_name'  => 'Remarketing',
                'tab_icon'  => 'fa-solid fa-rotate',
                'title'     => 'Instagram Remarketing Ads',
                'tagline'   => 'Convert Visitors',
                'desc'      => 'Re-target users who interacted with your brand.',
                'image'     => 'assets/images/services/instagram-ads-influencer.webp',
                'metric'    => ['val' => '2X', 'lbl' => 'Conversions', 'icon' => 'fa-solid fa-repeat'],
                'features'  => ['Custom Audiences', 'Dynamic Ads', 'Conversion Tracking'],
                'techStack' => ['Meta Pixel', 'Analytics']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Instagram Ads Process</span>',
        'subtitle' => 'A proven strategy for success.',
        'steps' => [
            ['title' => 'Audience Research', 'desc' => 'Understanding your audience.', 'icon' => 'fa-solid fa-users'],
            ['title' => 'Creative Design', 'desc' => 'Designing visual ads.', 'icon' => 'fa-solid fa-image'],
            ['title' => 'Campaign Setup', 'desc' => 'Launching ads.', 'icon' => 'fa-solid fa-rocket'],
            ['title' => 'Optimization', 'desc' => 'Improving performance.', 'icon' => 'fa-solid fa-chart-line'],
            ['title' => 'Scaling', 'desc' => 'Maximizing ROI.', 'icon' => 'fa-solid fa-arrow-up'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver results-driven Instagram campaigns.',
        'cards' => [
            ['icon' => 'fa-solid fa-heart', 'title' => 'High Engagement', 'desc' => 'Increase interactions.'],
            ['icon' => 'fa-solid fa-users', 'title' => 'Audience Growth', 'desc' => 'Reach more users.'],
            ['icon' => 'fa-solid fa-cart-shopping', 'title' => 'More Sales', 'desc' => 'Boost revenue.'],
            ['icon' => 'fa-solid fa-bullseye', 'title' => 'Targeted Ads', 'desc' => 'Reach ideal customers.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Data Driven', 'desc' => 'Optimize campaigns.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Dedicated experts.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Instagram Ads Results</span>',
        'subtitle' => 'See how we boosted engagement and sales.',
        'filter_categories' => ['instagram', 'ads', 'social']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What are Instagram Ads?',
                'a' => 'Instagram Ads are paid promotions that appear in feeds, stories, and reels to reach targeted audiences.'
            ],
            [
                'q' => 'Are Instagram Ads effective for sales?',
                'a' => 'Yes, especially for visual products and ecommerce businesses.'
            ],
            [
                'q' => 'What type of ads work best?',
                'a' => 'Reels and Story ads perform best due to high engagement.'
            ],
            [
                'q' => 'Do you design creatives?',
                'a' => 'Yes, we create high-quality visuals for better performance.'
            ],
            [
                'q' => 'How quickly can I see results?',
                'a' => 'Most campaigns start generating engagement and sales within days.',
            ],
        ]
    ]
];
