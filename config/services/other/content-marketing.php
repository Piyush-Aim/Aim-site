<?php
// config/services/content-marketing.php

return [
    'menu_category' => 'other',
    'menu_title' => 'Content Marketing',
    'menu_desc' => 'Strategic storytelling that informs and converts.',
    'menu_icon' => 'fa-solid fa-file-lines',

    'pageTitle' => 'Content Marketing Services | ' . COMPANY_NAME . ' - Drive Traffic & Leads',
    'pageDescription' => 'Professional content marketing services by ' . COMPANY_NAME . '. Create high-quality content that drives traffic, builds authority, and generates leads.',
    'pageKey' => 'content_marketing',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-pen-nib"></i>&nbsp; Content Marketing',
        'title' => 'Grow Your Brand with <span class="gradient-text">Content Marketing</span>',
        'subtitle' => 'We create strategic, high-quality content that attracts, engages, and converts your audience.',
        'metrics' => [
            ['val' => '3X', 'lbl' => 'Traffic Growth'],
            ['val' => '200%', 'lbl' => 'Lead Increase'],
            ['val' => '500+', 'lbl' => 'Content Pieces'],
        ],
        'form_title' => 'Start Content Marketing',
        'form_sub' => 'Build authority and generate leads with content.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Content Strategy',
        'title' => 'Attract, Engage & <span class="gradient-text">Convert with Content</span>',
        'subtitle' => 'Our content marketing strategies focus on delivering value, improving SEO, and driving conversions.',
        'features' => [
            [
                'icon' => 'fa-solid fa-file-lines',
                'title' => 'High-Quality Content',
                'desc' => 'Engaging and informative content tailored to your audience.'
            ],
            [
                'icon' => 'fa-solid fa-magnifying-glass',
                'title' => 'SEO Optimized',
                'desc' => 'Content designed to rank higher on search engines.'
            ],
        ],
        'img' => 'assets/images/services/content-marketing-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Traffic',
            'val' => '+300%',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-users',
            'label' => 'Leads',
            'val' => 'High',
            'sub' => 'Conversion'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'Content Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Content Marketing Services',
        'title' => 'Our <span class="gradient-text">Content Marketing Solutions</span>',
        'subtitle' => 'End-to-end content creation and strategy.',
        'panels' => [

            'blog' => [
                'tab_name'  => 'Blog Writing',
                'tab_icon'  => 'fa-solid fa-pen',
                'title'     => 'SEO Blog Writing',
                'tagline'   => 'Drive Organic Traffic',
                'desc'      => 'Create SEO-friendly blog posts that rank and attract visitors.',
                'image'     => 'assets/images/services/content-marketing-blog.webp',
                'metric'    => ['val' => 'High', 'lbl' => 'Traffic', 'icon' => 'fa-solid fa-chart-line'],
                'features'  => ['Keyword Research', 'SEO Writing', 'Content Optimization'],
                'techStack' => ['Surfer SEO', 'Ahrefs']
            ],

            'seo' => [
                'tab_name'  => 'SEO Content',
                'tab_icon'  => 'fa-solid fa-magnifying-glass',
                'title'     => 'SEO Content Creation',
                'tagline'   => 'Rank Higher',
                'desc'      => 'Create optimized content that ranks on search engines.',
                'image'     => 'assets/images/services/content-marketing-seo.webp',
                'metric'    => ['val' => 'Top', 'lbl' => 'Ranking', 'icon' => 'fa-solid fa-trophy'],
                'features'  => ['On-Page SEO', 'Keyword Optimization', 'Content Strategy'],
                'techStack' => ['Google Search Console', 'Analytics']
            ],

            'social' => [
                'tab_name'  => 'Social Content',
                'tab_icon'  => 'fa-solid fa-hashtag',
                'title'     => 'Social Media Content',
                'tagline'   => 'Engage Audience',
                'desc'      => 'Create engaging social media posts and creatives.',
                'image'     => 'assets/images/services/content-marketing-social.webp',
                'metric'    => ['val' => 'High', 'lbl' => 'Engagement', 'icon' => 'fa-solid fa-heart'],
                'features'  => ['Post Design', 'Captions', 'Content Planning'],
                'techStack' => ['Canva', 'Adobe']
            ],

            'strategy' => [
                'tab_name'  => 'Strategy',
                'tab_icon'  => 'fa-solid fa-chart-pie',
                'title'     => 'Content Marketing Strategy',
                'tagline'   => 'Plan for Growth',
                'desc'      => 'Develop data-driven strategies for long-term success.',
                'image'     => 'assets/images/services/content-marketing-strategy.webp',
                // 'metric'    => ['val' => 'Smart', 'lbl' => 'Strategy', 'icon' => 'fa-solid fa-brain'],
                'features'  => ['Content Calendar', 'Audience Research', 'Funnel Strategy'],
                'techStack' => ['Analytics', 'SEO Tools']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Content Marketing Process</span>',
        'subtitle' => 'A strategic approach to content success.',
        'steps' => [
            ['title' => 'Research', 'desc' => 'Understand audience & keywords.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Strategy', 'desc' => 'Plan content topics.', 'icon' => 'fa-solid fa-chart-pie'],
            ['title' => 'Creation', 'desc' => 'Write high-quality content.', 'icon' => 'fa-solid fa-pen'],
            ['title' => 'Optimization', 'desc' => 'Improve SEO performance.', 'icon' => 'fa-solid fa-chart-line'],
            ['title' => 'Distribution', 'desc' => 'Promote content.', 'icon' => 'fa-solid fa-bullhorn'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We create content that delivers results.',
        'cards' => [
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'More Traffic', 'desc' => 'Increase website visitors.'],
            ['icon' => 'fa-solid fa-users', 'title' => 'Lead Generation', 'desc' => 'Convert visitors into leads.'],
            ['icon' => 'fa-solid fa-star', 'title' => 'Brand Authority', 'desc' => 'Build trust and credibility.'],
            ['icon' => 'fa-solid fa-magnifying-glass', 'title' => 'SEO Growth', 'desc' => 'Improve search rankings.'],
            ['icon' => 'fa-solid fa-pen', 'title' => 'Quality Content', 'desc' => 'Engaging and valuable content.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Dedicated content team.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Content Work</span>',
        'subtitle' => 'See our successful content campaigns.',
        'filter_categories' => ['content', 'seo', 'marketing']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is content marketing?',
                'a' => 'Content marketing involves creating and distributing valuable content to attract and engage your audience.'
            ],
            [
                'q' => 'How does content marketing help SEO?',
                'a' => 'It improves rankings by targeting keywords and providing valuable information to users.'
            ],
            [
                'q' => 'What type of content do you create?',
                'a' => 'We create blogs, articles, social content, and more.'
            ],
            [
                'q' => 'How long does it take to see results?',
                'a' => 'Content marketing typically shows results within a few months.'
            ],
            [
                'q' => 'Do you provide content strategy?',
                'a' => 'Yes, we create data-driven content strategies for long-term growth.',
            ],
        ]
    ]
];
