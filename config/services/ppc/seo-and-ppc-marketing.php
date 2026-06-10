<?php
// config/services/seo-ppc-marketing.php

return [
    'menu_category' => 'ppc',
    'menu_title' => 'SEO & PPC Marketing',
    'menu_desc' => 'Integrated SEO and paid advertising strategies for traffic, leads, and ROI.',
    'menu_icon' => 'fa-solid fa-chart-line',

    'pageTitle' => 'SEO & PPC Marketing Services | ' . COMPANY_NAME . ' - Grow Faster',
    'pageDescription' => 'SEO & PPC marketing services by ' . COMPANY_NAME . '. Combine organic SEO and paid advertising to increase visibility, traffic, leads, and revenue.',
    'pageKey' => 'seo_ppc_marketing',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-rocket"></i>&nbsp; SEO + Paid Growth',
        'title' => 'Grow Faster with <span class="gradient-text">SEO & PPC Marketing</span>',
        'subtitle' => 'We combine long-term SEO growth with high-converting paid campaigns to generate measurable business results.',
        'metrics' => [
            ['val' => '5X', 'lbl' => 'ROI'],
            ['val' => '400%', 'lbl' => 'Traffic Growth'],
            ['val' => '250+', 'lbl' => 'Campaigns Managed'],
        ],
        'form_title' => 'Start Your Growth Campaign',
        'form_sub' => 'Get a custom SEO & PPC strategy tailored to your goals.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Digital Marketing',
        'title' => 'Get Better Results with <span class="gradient-text">SEO + PPC</span>',
        'subtitle' => 'SEO builds lasting organic visibility while PPC drives instant traffic and qualified leads. Together they create a complete growth system.',
        'features' => [
            [
                'icon' => 'fa-solid fa-ranking-star',
                'title' => 'Organic Growth',
                'desc' => 'Improve search rankings and attract long-term traffic.'
            ],
            [
                'icon' => 'fa-solid fa-bullseye',
                'title' => 'Instant Leads',
                'desc' => 'Launch paid campaigns that generate fast inquiries and sales.'
            ],
        ],
        'img' => 'assets/images/SEO_PPC_results.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Growth',
            'val' => '+400%',
            'width' => '92%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-dollar-sign',
            'label' => 'ROI',
            'val' => '5X',
            'sub' => 'Average'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'Growth Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; Marketing Services',
        'title' => 'Our <span class="gradient-text">SEO & PPC Solutions</span>',
        'subtitle' => 'Performance-driven strategies for traffic, leads, and conversions.',
        'panels' => [

            'seo' => [
                'tab_name'  => 'SEO',
                'tab_icon'  => 'fa-solid fa-magnifying-glass-chart',
                'title'     => 'Search Engine Optimization',
                'tagline'   => 'Long-Term Rankings',
                'desc'      => 'Improve visibility, authority, and traffic through strategic SEO execution.',
                'image'     => 'assets/images/services/seo-and-ppc-marketing-seo.webp',
                'metric'    => ['val' => 'Top', 'lbl' => 'Rankings', 'icon' => 'fa-solid fa-trophy'],
                'features'  => ['Keyword Research', 'On-Page SEO', 'Technical SEO'],
                'techStack' => ['Ahrefs', 'Semrush', 'Search Console']
            ],

            'ppc' => [
                'tab_name'  => 'PPC Ads',
                'tab_icon'  => 'fa-solid fa-bullhorn',
                'title'     => 'Google Ads Management',
                'tagline'   => 'Instant Visibility',
                'desc'      => 'Drive qualified traffic quickly with expertly managed PPC campaigns.',
                'image'     => 'assets/images/services/seo-and-ppc-marketing-ppc.webp',
                'metric'    => ['val' => 'Low', 'lbl' => 'CPC', 'icon' => 'fa-solid fa-dollar-sign'],
                'features'  => ['Search Ads', 'Display Ads', 'Lead Campaigns'],
                'techStack' => ['Google Ads', 'Analytics']
            ],

            'social' => [
                'tab_name'  => 'Social Ads',
                'tab_icon'  => 'fa-solid fa-share-nodes',
                'title'     => 'Social Media Advertising',
                'tagline'   => 'Audience Growth',
                'desc'      => 'Reach targeted users through paid campaigns on social platforms.',
                'image'     => 'assets/images/services/seo-and-ppc-marketing-social.webp',
                'metric'    => ['val' => 'High', 'lbl' => 'Reach', 'icon' => 'fa-solid fa-users'],
                'features'  => ['Facebook Ads', 'Instagram Ads', 'Retargeting'],
                'techStack' => ['Meta Ads', 'LinkedIn Ads']
            ],

            'remarketing' => [
                'tab_name'  => 'Remarketing',
                'tab_icon'  => 'fa-solid fa-rotate',
                'title'     => 'Remarketing Campaigns',
                'tagline'   => 'Recover Lost Leads',
                'desc'      => 'Reconnect with previous visitors and increase conversions.',
                'image'     => 'assets/images/services/seo-and-ppc-marketing-remarketing.webp',
                'metric'    => ['val' => '2X', 'lbl' => 'Conversions', 'icon' => 'fa-solid fa-repeat'],
                'features'  => ['Audience Lists', 'Display Retargeting', 'Sales Recovery'],
                'techStack' => ['Google Ads', 'Meta Pixel']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">Growth Process</span>',
        'subtitle' => 'A proven system focused on performance and ROI.',
        'steps' => [
            ['title' => 'Research', 'desc' => 'Analyze competitors, keywords, and opportunities.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Strategy', 'desc' => 'Build a custom SEO + PPC roadmap.', 'icon' => 'fa-solid fa-lightbulb'],
            ['title' => 'Launch', 'desc' => 'Deploy campaigns and optimizations.', 'icon' => 'fa-solid fa-rocket'],
            ['title' => 'Optimize', 'desc' => 'Improve rankings, CTR, and conversions.', 'icon' => 'fa-solid fa-chart-line'],
            ['title' => 'Scale', 'desc' => 'Expand what performs best.', 'icon' => 'fa-solid fa-arrow-up-right-dots'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver marketing campaigns focused on real business growth.',
        'cards' => [
            ['icon' => 'fa-solid fa-bolt', 'title' => 'Fast Results', 'desc' => 'Paid ads generate immediate traffic.'],
            ['icon' => 'fa-solid fa-ranking-star', 'title' => 'Long-Term SEO', 'desc' => 'Build lasting organic visibility.'],
            ['icon' => 'fa-solid fa-bullseye', 'title' => 'Qualified Leads', 'desc' => 'Reach users ready to convert.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Higher ROI', 'desc' => 'Optimize campaigns for profit.'],
            ['icon' => 'fa-solid fa-magnifying-glass', 'title' => 'Clear Insights', 'desc' => 'Track every click and lead.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Expert Support', 'desc' => 'Dedicated marketing specialists.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">Marketing Results</span>',
        'subtitle' => 'See campaigns that increased traffic and conversions.',
        'filter_categories' => ['seo', 'ppc', 'marketing']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'Is SEO better than PPC?',
                'a' => 'They serve different goals. SEO is long-term, PPC is immediate.'
            ],
            [
                'q' => 'Can SEO and PPC work together?',
                'a' => 'Yes, combining both usually improves total traffic and conversions.'
            ],
            [
                'q' => 'How long does SEO take?',
                'a' => 'SEO typically shows strong growth within 3 to 6 months.'
            ],
            [
                'q' => 'How much budget is needed for PPC?',
                'a' => 'Budget depends on goals, competition, and industry.'
            ],
            [
                'q' => 'Do you provide monthly reports?',
                'a' => 'Yes, we provide detailed performance and ROI reports.'
            ],
        ]
    ]
];
