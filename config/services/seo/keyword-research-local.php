    <?php

return [
    'hide_from_menu' => true,
    'menu_category' => 'seo',
    'menu_title' => 'Keyword Research',

    'pageTitle' => 'Keyword Research Services in {target_loc} | ' . COMPANY_NAME,
    'pageDescription' => 'Professional keyword research services in {target_loc}. Discover profitable keywords, analyze competitors, identify search intent, and build SEO strategies that help businesses increase rankings, traffic, and conversions in {state}.',
    'pageKey' => 'keyword_research_local',

    /* ================= HERO ================= */

    'hero' => [
        'tag' => '<i class="fa-solid fa-map-location-dot"></i>&nbsp; Keyword Research Services',
        'title' => 'Keyword Research Services in <span class="gradient-text">{target_loc}</span>',
        'subtitle' => 'Identify what your customers search for and build SEO campaigns that attract targeted traffic, increase rankings, and generate more leads in {target_loc}.',

        'metrics' => [
            ['val' => '15K+', 'lbl' => 'Keywords Analyzed'],
            ['val' => '300%', 'lbl' => 'Traffic Growth Potential'],
            ['val' => '95%', 'lbl' => 'Search Intent Accuracy'],
        ],

        'form_title' => 'Get a Keyword Strategy for {target_loc}',
        'form_sub' => 'Receive a customized keyword research report and growth recommendations.',
    ],

    /* ================= INTRO ================= */

    'intro' => [
        'tag' => 'Local Search Intelligence',
        'title' => 'Grow Rankings With <span class="gradient-text">Strategic Keyword Research</span>',
        'subtitle' => 'Keyword research helps businesses in {target_loc} understand search behavior, customer intent, and market demand. We identify opportunities that drive qualified traffic and support long-term SEO growth.',

        'features' => [
            [
                'icon' => 'fa-solid fa-chart-column',
                'title' => 'Search Opportunity Discovery',
                'desc' => 'Identify keywords with strong traffic and conversion potential.'
            ],
            [
                'icon' => 'fa-solid fa-crosshairs',
                'title' => 'Intent Mapping',
                'desc' => 'Target informational, commercial, and transactional searches.'
            ],
        ],

        'img' => 'assets/images/services/keyword-research-local-intro.webp',

        'glass_card_1' => [
            'icon' => 'fa-solid fa-arrow-trend-up',
            'label' => 'Growth Potential',
            'val' => '+300%',
            'width' => '92%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-key',
            'label' => 'Keywords',
            'val' => '15K+',
            'sub' => 'Analyzed'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-magnifying-glass-chart',
            'lbl' => 'SEO Keyword Experts'
        ]
    ],

    /* ================= SERVICES GRID ================= */

    'types' => [
        'tag' => 'Keyword Capabilities',
        'title' => 'Keyword Research Services in <span class="gradient-text">{target_loc}</span>',
        'subtitle' => 'Comprehensive keyword analysis services designed to improve rankings and organic visibility.',

        'panels' => [
            'competitive' => [
                'tab_name' => 'Competitor Research',
                'tab_icon' => 'fa-solid fa-chess',
                'tagline' => 'Competitive Advantage',
                'title' => 'Competitor Keyword Analysis in {target_loc}',
                'desc' => 'Analyze competitor rankings and identify keyword gaps that can help your business gain visibility in {target_loc}.',

                'features' => [
                    'Competitor Keyword Gap Analysis',
                    'Ranking Opportunity Discovery',
                    'SERP Feature Research',
                    'Keyword Difficulty Analysis'
                ],

                'techStack' => ['Ahrefs', 'SEMrush', 'SpyFu'],

                'image' => 'assets/images/services/keyword-research-local-competitive.webp',

                'metric' => [
                    'icon' => 'fa-solid fa-chess-knight',
                    'val' => '#1',
                    'lbl' => 'Competitive Edge'
                ]
            ],

            'local' => [
                'tab_name' => 'Local Keywords',
                'tab_icon' => 'fa-solid fa-location-dot',
                'tagline' => 'Local Visibility',

                'title' => 'Local Keyword Research in {target_loc}',

                'desc' => 'Target local search traffic and nearby customers using geo-specific keyword research.',

                'features' => [
                    'Near Me Search Terms',
                    'Google Business Keywords',
                    'Regional Search Analysis',
                    'Local Intent Discovery'
                ],

                'techStack' => ['BrightLocal', 'Google Trends', 'Whitespark'],

                'image' => 'assets/images/services/keyword-research-local-local.webp',

                'metric' => [
                    'icon' => 'fa-solid fa-location-crosshairs',
                    'val' => 'Top 3',
                    'lbl' => 'Local Results'
                ]
            ],

            'longtail' => [
                'tab_name' => 'Long Tail',
                'tab_icon' => 'fa-solid fa-filter',
                'tagline' => 'Targeted Searches',

                'title' => 'Long Tail Keyword Research in {target_loc}',

                'desc' => 'Find lower competition keywords with stronger conversion opportunities and buying intent.',

                'features' => [
                    'Question-Based Searches',
                    'Voice Search Research',
                    'Keyword Grouping',
                    'Semantic Search Analysis'
                ],

                'techStack' => ['AnswerThePublic', 'Ahrefs', 'Search Console'],

                'image' => 'assets/images/services/keyword-research-local-longtail.webp',

                'metric' => [
                    'icon' => 'fa-solid fa-bullseye',
                    'val' => '5X',
                    'lbl' => 'Higher Conversions'
                ]
            ],

            'ecommerce' => [
                'tab_name' => 'Ecommerce',
                'tab_icon' => 'fa-solid fa-cart-shopping',
                'tagline' => 'Sales Growth',

                'title' => 'Ecommerce Keyword Research in {target_loc}',

                'desc' => 'Identify buyer-intent keywords that help ecommerce websites increase traffic and product visibility.',

                'features' => [
                    'Product Keyword Mapping',
                    'Category Research',
                    'Shopping Intent Analysis',
                    'Buyer Search Trends'
                ],

                'techStack' => ['Google Shopping', 'SEMrush', 'Ahrefs'],

                'image' => 'assets/images/services/keyword-research-local-ecommerce.webp',

                'metric' => [
                    'icon' => 'fa-solid fa-bag-shopping',
                    'val' => '+220%',
                    'lbl' => 'Sales Potential'
                ]
            ]

        ]
    ],

    /* ================= PROCESS ================= */

    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our Process in <span class="gradient-text">{target_loc}</span>',
        'subtitle' => 'A structured keyword research process focused on search visibility and measurable SEO growth.',

        'steps' => [
            [
                'title' => 'Business Discovery',
                'desc' => 'We understand your audience, goals, and market opportunities in {target_loc}.'
            ],
            [
                'title' => 'Keyword Analysis',
                'desc' => 'We identify high-value keywords based on search volume, intent, and competition.'
            ],
            [
                'title' => 'Competitor Research',
                'desc' => 'We analyze leading competitors in {target_loc} and discover keyword opportunities.'
            ],
            [
                'title' => 'Strategy Delivery',
                'desc' => 'Receive a complete keyword roadmap with actionable SEO recommendations.'
            ]
        ]
    ],

    /* ================= BENEFITS ================= */

    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Benefits of Keyword Research in <span class="gradient-text">{target_loc}</span>',
        'subtitle' => 'Discover opportunities that help businesses improve rankings and organic growth.',

        'cards' => [
            [
                'icon' => 'fa-solid fa-bullseye',
                'title' => 'Target Better Traffic',
                'desc' => 'Reach users actively searching for your services.'
            ],
            [
                'icon' => 'fa-solid fa-chart-line',
                'title' => 'Improve Rankings',
                'desc' => 'Target keywords with stronger ranking opportunities.'
            ],
            [
                'icon' => 'fa-solid fa-users',
                'title' => 'Qualified Leads',
                'desc' => 'Attract visitors more likely to convert.'
            ],
            [
                'icon' => 'fa-solid fa-chess',
                'title' => 'Beat Competitors',
                'desc' => 'Find and target missed search opportunities.'
            ],
            [
                'icon' => 'fa-solid fa-ranking-star',
                'title' => 'Increase Visibility',
                'desc' => 'Improve organic presence across {target_loc}.'
            ],
            [
                'icon' => 'fa-solid fa-chart-column',
                'title' => 'Data Driven SEO',
                'desc' => 'Build strategies using search behavior data.'
            ]
        ]
    ],

    /* ================= FAQ ================= */

    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'FAQs About Keyword Research in <span class="gradient-text">{target_loc}</span>',
        'list' => [
            [
                'q' => 'Why is keyword research important?',
                'a' => 'Keyword research helps identify search terms your audience uses and supports targeted SEO campaigns.'
            ],
            [
                'q' => 'Can keyword research improve rankings?',
                'a' => 'Yes. Targeting relevant keywords improves search visibility and organic traffic.'
            ],
            [
                'q' => 'How often should keyword research be updated?',
                'a' => 'Keyword trends change over time, so periodic updates are recommended.'
            ],
            [
                'q' => 'Do you research competitors in {target_loc}?',
                'a' => 'Yes. We analyze local competitors and identify keyword opportunities.'
            ],
            [
                'q' => 'Which tools do you use?',
                'a' => 'We use Ahrefs, SEMrush, Google Search Console, BrightLocal, and Google Trends.'
            ]
        ]
    ]
];
