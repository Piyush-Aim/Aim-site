<?php
// config/services/tiktok-ads.php

return [
    'menu_category' => 'social',
    'menu_title' => 'TikTok Ads',
    'menu_desc' => 'Engaging short-form video ads for viral growth.',
    'menu_icon' => 'fa-solid fa-video',

    'pageTitle' => 'TikTok Ads Services | ' . COMPANY_NAME . ' - Viral Growth & Sales',
    'pageDescription' => 'Professional TikTok Ads services by ' . COMPANY_NAME . '. Create viral campaigns, increase engagement, and drive sales with high-performing TikTok ads.',
    'pageKey' => 'tiktok_ads',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-brands fa-tiktok"></i>&nbsp; TikTok Ads',
        'title' => 'Go Viral with <span class="gradient-text">TikTok Ads</span>',
        'subtitle' => 'We create engaging TikTok ad campaigns that drive massive reach, engagement, and conversions.',
        'metrics' => [
            ['val' => '10X', 'lbl' => 'Reach'],
            ['val' => '5X', 'lbl' => 'Engagement'],
            ['val' => '100+', 'lbl' => 'Campaigns Managed'],
        ],
        'form_title' => 'Start Your TikTok Ads',
        'form_sub' => 'Launch viral campaigns and grow your brand.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Short-Form Video Marketing',
        'title' => 'Turn Views into <span class="gradient-text">Engagement & Sales</span>',
        'subtitle' => 'Our TikTok ad strategies focus on creative storytelling, viral content, and performance optimization.',
        'features' => [
            [
                'icon' => 'fa-solid fa-video',
                'title' => 'Creative Video Ads',
                'desc' => 'Engaging short-form videos designed to go viral.'
            ],
            [
                'icon' => 'fa-solid fa-fire',
                'title' => 'Viral Reach',
                'desc' => 'Maximize visibility with trending content.'
            ],
        ],
        'img' => 'assets/images/services/tiktok-ads-intro.png',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-eye',
            'label' => 'Views',
            'val' => '+500%',
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
            'lbl'  => 'TikTok Ads Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; TikTok Ads Services',
        'title' => 'Our <span class="gradient-text">TikTok Advertising Solutions</span>',
        'subtitle' => 'Complete TikTok marketing services.',
        'panels' => [

            'infeed' => [
                'tab_name'  => 'In-Feed Ads',
                'tab_icon'  => 'fa-solid fa-mobile-screen',
                'title'     => 'TikTok In-Feed Ads',
                'tagline'   => 'Native Content Ads',
                'desc'      => 'Display ads within the user feed for maximum engagement.',
                'image'     => 'assets/images/services/tiktok-ads-infeed.png',
                'metric'    => ['val' => 'High', 'lbl' => 'Engagement', 'icon' => 'fa-solid fa-heart'],
                'features'  => ['Native Ads', 'Full-Screen Video', 'CTA Optimization'],
                'techStack' => ['TikTok Ads Manager']
            ],

            'spark' => [
                'tab_name'  => 'Spark Ads',
                'tab_icon'  => 'fa-solid fa-bolt',
                'title'     => 'TikTok Spark Ads',
                'tagline'   => 'Boost Organic Content',
                'desc'      => 'Promote organic posts to increase reach and engagement.',
                'image'     => 'assets/images/services/tiktok-ads-spark.png',
                'metric'    => ['val' => 'Viral', 'lbl' => 'Reach', 'icon' => 'fa-solid fa-fire'],
                'features'  => ['Content Boosting', 'Organic Integration', 'Engagement Growth'],
                'techStack' => ['TikTok Ads']
            ],

            'ecommerce' => [
                'tab_name'  => 'Ecommerce Ads',
                'tab_icon'  => 'fa-solid fa-cart-shopping',
                'title'     => 'TikTok Ecommerce Ads',
                'tagline'   => 'Drive Sales',
                'desc'      => 'Promote products with engaging video ads.',
                'image'     => 'assets/images/services/tiktok-ads-ecommerce.png',
                'metric'    => ['val' => '4X', 'lbl' => 'ROAS', 'icon' => 'fa-solid fa-chart-line'],
                'features'  => ['Product Ads', 'UGC Style Content', 'Retargeting'],
                'techStack' => ['TikTok Ads', 'Shopify']
            ],

            'remarketing' => [
                'tab_name'  => 'Remarketing',
                'tab_icon'  => 'fa-solid fa-rotate',
                'title'     => 'TikTok Remarketing Ads',
                'tagline'   => 'Convert Visitors',
                'desc'      => 'Re-target users who interacted with your brand.',
                'image'     => 'assets/images/services/tiktok-ads-remarketing.png',
                'metric'    => ['val' => '2X', 'lbl' => 'Conversions', 'icon' => 'fa-solid fa-repeat'],
                'features'  => ['Custom Audiences', 'Dynamic Ads', 'Conversion Tracking'],
                'techStack' => ['TikTok Pixel', 'Analytics']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">TikTok Ads Process</span>',
        'subtitle' => 'A creative-first approach for viral success.',
        'steps' => [
            ['title' => 'Trend Research', 'desc' => 'Identify trending content.', 'icon' => 'fa-solid fa-fire'],
            ['title' => 'Creative Production', 'desc' => 'Create engaging videos.', 'icon' => 'fa-solid fa-video'],
            ['title' => 'Campaign Launch', 'desc' => 'Run ads.', 'icon' => 'fa-solid fa-rocket'],
            ['title' => 'Optimization', 'desc' => 'Improve performance.', 'icon' => 'fa-solid fa-chart-line'],
            ['title' => 'Scaling', 'desc' => 'Maximize reach and ROI.', 'icon' => 'fa-solid fa-arrow-up'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver viral and performance-driven TikTok campaigns.',
        'cards' => [
            ['icon' => 'fa-solid fa-fire', 'title' => 'Viral Reach', 'desc' => 'Reach millions of users.'],
            ['icon' => 'fa-solid fa-heart', 'title' => 'High Engagement', 'desc' => 'Increase interactions.'],
            ['icon' => 'fa-solid fa-cart-shopping', 'title' => 'More Sales', 'desc' => 'Boost conversions.'],
            ['icon' => 'fa-solid fa-video', 'title' => 'Creative Ads', 'desc' => 'Engaging video content.'],
            ['icon' => 'fa-solid fa-bullseye', 'title' => 'Targeted Ads', 'desc' => 'Reach ideal audience.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Expert campaign management.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">TikTok Ads Results</span>',
        'subtitle' => 'See how we created viral campaigns.',
        'filter_categories' => ['tiktok', 'ads', 'social']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What are TikTok Ads?',
                'a' => 'TikTok Ads are video-based ads that appear in user feeds and other placements on TikTok.'
            ],
            [
                'q' => 'Are TikTok Ads good for business?',
                'a' => 'Yes, especially for brands targeting younger audiences and visual content.'
            ],
            [
                'q' => 'What type of content works best?',
                'a' => 'Short, engaging, and creative videos perform best.'
            ],
            [
                'q' => 'Can TikTok Ads drive sales?',
                'a' => 'Yes, TikTok Ads are highly effective for ecommerce and brand growth.'
            ],
            [
                'q' => 'How quickly can I see results?',
                'a' => 'Campaigns can start generating engagement and traffic within days.',
            ],
        ]
    ]
];
