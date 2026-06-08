<?php
// config/services/seo/keyword-research.php

return [
    'menu_category' => 'seo',
    'menu_title'    => 'Keyword Research',
    'menu_desc'     => 'Data-driven keyword strategies designed to increase rankings, traffic, and conversions.',
    'menu_icon'     => 'fa-solid fa-key',

    'pageTitle'       => 'Keyword Research Services | ' . COMPANY_NAME . ' - Discover High-Value SEO Opportunities',
    'pageDescription' => 'Professional keyword research services by ' . COMPANY_NAME . '. Discover profitable keywords, analyze competitors, uncover search opportunities, and build SEO strategies that drive targeted organic traffic.',
    'pageKey'         => 'keyword_research',

    /* ================= HERO ================= */

    'hero' => [
        'tag'      => '<i class="fa-solid fa-key"></i>&nbsp; Keyword Research',
        'title'    => 'Find High-Value <span class="gradient-text">Keywords That Drive Real Growth</span>',
        'subtitle' => 'Discover the exact keywords your audience searches for and build an SEO strategy that increases rankings, traffic, and conversions.',
        'metrics'  => [
            ['val' => '15K+', 'lbl' => 'Keywords Analyzed'],
            ['val' => '300%', 'lbl' => 'Traffic Growth'],
            ['val' => '95%', 'lbl' => 'Search Intent Accuracy'],
        ],

        'form_title' => 'Get Your Keyword Research Report',
        'form_sub'   => 'Speak with our SEO experts and uncover hidden search opportunities.',
    ],

    /* ================= INTRO ================= */

    'intro' => [
        'tag'      => 'SEO Keyword Intelligence',
        'title'    => 'Build Better Rankings With <span class="gradient-text">Smart Keyword Strategy</span>',
        'subtitle' => 'Keyword research is the foundation of SEO success. We identify search opportunities, understand user intent, and create a roadmap that attracts qualified traffic.',

        'features' => [
            [
                'icon'  => 'fa-solid fa-chart-column',
                'title' => 'Search Volume Analysis',
                'desc'  => 'Discover keywords with strong traffic potential and measurable SEO value.'
            ],
            [
                'icon'  => 'fa-solid fa-crosshairs',
                'title' => 'Intent Mapping',
                'desc'  => 'Match keywords to customer intent and every stage of the buying journey.'
            ],
        ],

        'img' => 'assets/images/services/keyword-research-intro.png',

        'glass_card_1' => [
            'icon'  => 'fa-solid fa-arrow-trend-up',
            'label' => 'Traffic Growth',
            'val'   => '+300%',
            'width' => '90%'
        ],

        'glass_card_2' => [
            'icon'  => 'fa-solid fa-key',
            'label' => 'Keywords',
            'val'   => '15K+',
            'sub'   => 'Analyzed'
        ],

        'floating_badge' => [
            'icon' => 'fa-solid fa-magnifying-glass-chart',
            'lbl'  => 'SEO Research Experts'
        ]
    ],

    /* ================= TYPES ================= */

    'types' => [
        'tag'      => '<i class="fa-solid fa-layer-group"></i>&nbsp; Research Services',
        'title'    => 'Our <span class="gradient-text">Keyword Research Solutions</span>',
        'subtitle' => 'Comprehensive keyword intelligence services built for every SEO objective.',

        'panels' => [
            'competitive' => [
                'tab_name' => 'Competitor Analysis',
                'tab_icon' => 'fa-solid fa-chess',
                'title'   => 'Competitor Keyword Research',
                'tagline' => 'Outrank Your Competition',
                'desc' => 'Discover the keywords your competitors rank for and uncover untapped opportunities.',
                'features' => [
                    'Competitor Keyword Gap Analysis',
                    'SERP Opportunity Discovery',
                    'Ranking Analysis',
                    'Keyword Difficulty Research'
                ],
                'techStack' => [
                    'Ahrefs',
                    'SEMrush',
                    'SpyFu'
                ],
                'image' => 'assets/images/services/keyword-research-competitive.png',
                'metric' => [
                    'icon' => 'fa-solid fa-chess-knight',
                    'val' => '#1',
                    'lbl' => 'Beat Competitors'
                ]
            ],

            'longtail' => [
                'tab_name' => 'Long Tail Keywords',
                'tab_icon' => 'fa-solid fa-filter',
                'title' => 'Long Tail Keyword Research',
                'tagline' => 'Low Competition, High Intent',
                'desc' => 'Find highly targeted long-tail search phrases that bring visitors ready to take action.',
                'features' => [
                    'Question Keyword Discovery',
                    'Voice Search Optimization',
                    'Semantic Keyword Grouping',
                    'Low Competition Opportunities'
                ],
                'techStack' => [
                    'AnswerThePublic',
                    'Ahrefs',
                    'Google Search Console'
                ],
                'image' => 'assets/images/services/keyword-research-longtail.png',
                'metric' => [
                    'icon' => 'fa-solid fa-bullseye',
                    'val' => '5X',
                    'lbl' => 'Higher Conversion'
                ]
            ],

            'local' => [
                'tab_name' => 'Local Keywords',
                'tab_icon' => 'fa-solid fa-location-dot',
                'title' => 'Local Keyword Research',
                'tagline' => 'Reach Nearby Customers',
                'desc' => 'Discover geo-focused search terms that help businesses dominate local search visibility.',
                'features' => [
                    'Near Me Search Research',
                    'Location-Based Keywords',
                    'Google Business Keywords',
                    'Local Search Trends'
                ],
                'techStack' => [
                    'BrightLocal',
                    'Whitespark',
                    'Google Trends'
                ],
                'image' => 'assets/images/services/keyword-research-local.png',
                'metric' => [
                    'icon' => 'fa-solid fa-location-crosshairs',
                    'val' => 'Top 3',
                    'lbl' => 'Local Results'
                ]
            ],

            'ecommerce' => [
                'tab_name' => 'Ecommerce Keywords',
                'tab_icon' => 'fa-solid fa-cart-shopping',
                'title' => 'Ecommerce Keyword Strategy',
                'tagline' => 'Increase Product Visibility',
                'desc' => 'Find transactional keywords shoppers use when searching and purchasing products online.',
                'features' => [
                    'Product Keyword Mapping',
                    'Category Keyword Analysis',
                    'Buyer Intent Research',
                    'Shopping Search Optimization'
                ],
                'techStack' => [
                    'SEMrush',
                    'Ahrefs',
                    'Google Shopping'
                ],
                'image' => 'assets/images/services/keyword-research-ecommerce.png',
                'metric' => [
                    'icon' => 'fa-solid fa-bag-shopping',
                    'val' => '+200%',
                    'lbl' => 'Sales Growth'
                ]
            ],
        ]
    ],

    /* ================= PROCESS ================= */

    'process' => [
        'tag'      => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title'    => 'Our <span class="gradient-text">Keyword Research Process</span>',
        'subtitle' => 'A proven process focused on uncovering profitable search opportunities.',
        'steps' => [
            ['title' => 'Business Discovery', 'desc' => 'Understand your audience, industry, and SEO goals.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Seed Keyword Collection', 'desc' => 'Generate an initial list of relevant search terms.', 'icon' => 'fa-solid fa-seedling'],
            ['title' => 'Search Data Analysis', 'desc' => 'Evaluate volume, competition, and intent signals.', 'icon' => 'fa-solid fa-chart-bar'],
            ['title' => 'Competitor Research', 'desc' => 'Analyze competitor rankings and identify keyword gaps.', 'icon' => 'fa-solid fa-chess'],
            ['title' => 'Strategy Delivery', 'desc' => 'Deliver a complete keyword roadmap and recommendations.', 'icon' => 'fa-solid fa-file-lines'],
        ]
    ],

    /* ================= BENEFITS ================= */

    'benefits' => [
        'tag'      => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title'    => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'Research-backed keyword strategies designed for long-term growth.',
        'cards' => [
            ['icon' => 'fa-solid fa-bullseye', 'title' => 'Targeted Traffic', 'desc' => 'Reach users actively searching for your products or services.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Better Rankings', 'desc' => 'Target keywords with strong ranking opportunities.'],
            ['icon' => 'fa-solid fa-sack-dollar', 'title' => 'Higher ROI', 'desc' => 'Focus SEO efforts on profitable keywords.'],
            ['icon' => 'fa-solid fa-chess', 'title' => 'Competitor Insights', 'desc' => 'Identify hidden opportunities your competitors miss.'],
            ['icon' => 'fa-solid fa-magnifying-glass', 'title' => 'Data-Driven Decisions', 'desc' => 'Build strategies based on search behavior and real data.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'SEO Expert Support', 'desc' => 'Work with specialists experienced in advanced SEO research.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */

    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">SEO Success Stories</span>',
        'subtitle' => 'Real growth driven through strategic keyword research.',
        'filter_categories' => ['seo', 'content', 'ecommerce']
    ],

    /* ================= FAQ ================= */

    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is keyword research?',
                'a' => 'Keyword research identifies search terms users enter into search engines and helps create content that attracts targeted traffic.'
            ],
            [
                'q' => 'Why is keyword research important?',
                'a' => 'It helps improve rankings, attract qualified visitors, and create SEO strategies based on user intent.'
            ],
            [
                'q' => 'What tools do you use?',
                'a' => 'We use Ahrefs, SEMrush, Google Search Console, Google Trends, and AnswerThePublic.'
            ],
            [
                'q' => 'Do you research competitors?',
                'a' => 'Yes. Competitor keyword analysis is included to identify opportunities and gaps.'
            ],
            [
                'q' => 'Can keyword research improve conversions?',
                'a' => 'Yes. Targeting high-intent keywords helps attract users more likely to convert.'
            ]
        ]
    ]
];
