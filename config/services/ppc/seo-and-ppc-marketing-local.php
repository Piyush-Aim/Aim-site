<?php

return [
    'hide_from_menu' => true,
    'menu_category' => 'marketing',
    'menu_title' => 'SEO & PPC Marketing',

    'pageTitle' => 'SEO & PPC Marketing Services in {target_loc} | ' . COMPANY_NAME,
    'pageDescription' => 'Grow your business with expert SEO and PPC marketing services in {target_loc}. Increase rankings, leads, calls, and conversions across {state} with data-driven campaigns.',
    'pageKey' => 'seo_ppc_marketing_local',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-chart-line"></i>&nbsp; SEO + Paid Growth',
        'title' => 'SEO & PPC Marketing Services in <span class="gradient-text">{target_loc}</span>',
        'subtitle' => 'Combine long-term SEO growth with fast PPC lead generation. We help businesses in {target_loc} scale traffic, calls, and revenue.',
        'metrics' => [
            ['val' => '300+', 'lbl' => 'Campaigns Managed'],
            ['val' => '5X', 'lbl' => 'Average ROI'],
            ['val' => '95%', 'lbl' => 'Client Retention'],
        ],
        'form_title' => 'Get Your {target_loc} Growth Plan',
        'form_sub' => 'Speak with our SEO & PPC specialists today.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Growth Strategy',
        'title' => 'Why Choose <span class="gradient-text">SEO & PPC Together?</span>',
        'subtitle' => 'SEO builds sustainable organic visibility while PPC delivers immediate targeted traffic. Together they create a balanced growth engine for businesses in {target_loc}.',
        'features' => [
            [
                'icon' => 'fa-solid fa-magnifying-glass',
                'title' => 'Organic Rankings',
                'desc' => 'Appear in Google search results for valuable keywords.'
            ],
            [
                'icon' => 'fa-solid fa-bullseye',
                'title' => 'Instant Leads',
                'desc' => 'Run paid campaigns that generate calls and inquiries quickly.'
            ]
        ],
        'img' => 'assets/images/services/seo-and-ppc-marketing-local-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Traffic Growth',
            'val' => '400%',
            'width' => '88%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-sack-dollar',
            'label' => 'Ad ROI',
            'val' => '5X',
            'sub' => 'Average'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-star',
            'lbl' => 'Results Driven'
        ]
    ],

    /* ================= SERVICES GRID ================= */
    'types' => [
        'tag' => 'What We Offer',
        'title' => 'SEO & PPC Solutions in <span class="gradient-text">{target_loc}</span>',
        'subtitle' => 'Complete digital growth services for local, national, and ecommerce brands.',
        'panels' => [
            'seo' => [
                'tab_name' => 'SEO',
                'tab_icon' => 'fa-solid fa-ranking-star',
                'tagline' => 'Long-Term Growth',
                'title' => 'SEO Services in {target_loc}',
                'desc' => 'We improve rankings, traffic, and visibility through technical SEO, content strategy, and authority building.',
                'features' => [
                    'Keyword Research',
                    'On-Page SEO',
                    'Technical SEO',
                    'Link Building'
                ],
                'techStack' => ['Ahrefs', 'Semrush', 'Google Search Console'],
                'image' => 'assets/images/services/seo-and-ppc-marketing-local-seo.webp',
                'metric' => [
                    'icon' => 'fa-solid fa-arrow-up',
                    'val' => 'Top 10',
                    'lbl' => 'Keyword Growth'
                ]
            ],

            'ppc' => [
                'tab_name' => 'PPC',
                'tab_icon' => 'fa-solid fa-bullhorn',
                'tagline' => 'Instant Leads',
                'title' => 'PPC Advertising in {state}',
                'desc' => 'Launch high-converting campaigns on Google Ads, Search, Display, and remarketing channels.',
                'features' => [
                    'Google Search Ads',
                    'Display Ads',
                    'Remarketing Campaigns',
                    'Conversion Tracking'
                ],
                'techStack' => ['Google Ads', 'GA4', 'Tag Manager'],
                'image' => 'assets/images/services/seo-and-ppc-marketing-local-ppc.webp',
                'metric' => [
                    'icon' => 'fa-solid fa-hand-pointer',
                    'val' => 'Low CPC',
                    'lbl' => 'Optimized Click Cost'
                ]
            ],

            'local' => [
                'tab_name' => 'Local Growth',
                'tab_icon' => 'fa-solid fa-map-location-dot',
                'tagline' => 'Nearby Customers',
                'title' => 'Local SEO & Ads for {target_loc}',
                'desc' => 'Capture ready-to-buy customers searching near your business location.',
                'features' => [
                    'Google Business Profile',
                    'Maps Rankings',
                    'Call Campaigns',
                    'Location Extensions'
                ],
                'techStack' => ['Google Maps', 'Google Ads', 'BrightLocal'],
                'image' => 'assets/images/services/seo-and-ppc-marketing-local-local.webp',
                'metric' => [
                    'icon' => 'fa-solid fa-phone',
                    'val' => 'More Calls',
                    'lbl' => 'Lead Focused'
                ]
            ],

            'ecommerce' => [
                'tab_name' => 'Ecommerce',
                'tab_icon' => 'fa-solid fa-cart-shopping',
                'tagline' => 'Online Sales',
                'title' => 'Ecommerce SEO & PPC',
                'desc' => 'Drive product sales with shopping ads, category SEO, and conversion optimization.',
                'features' => [
                    'Shopping Ads',
                    'Product SEO',
                    'Feed Optimization',
                    'ROAS Scaling'
                ],
                'techStack' => ['Shopify', 'WooCommerce', 'Merchant Center'],
                'image' => 'assets/images/services/seo-and-ppc-marketing-local-ecommerce.webp',
                'metric' => [
                    'icon' => 'fa-solid fa-sack-dollar',
                    'val' => 'High ROAS',
                    'lbl' => 'Sales Growth'
                ]
            ]
        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our SEO & PPC Growth Process',
        'subtitle' => 'A structured strategy focused on leads, sales, and measurable ROI.',
        'steps' => [
            [
                'title' => 'Research & Audit',
                'desc' => 'We analyze your website, ads, competitors, and market opportunities in {target_loc}.'
            ],
            [
                'title' => 'Strategy Build',
                'desc' => 'We create a custom SEO roadmap and PPC campaign structure.'
            ],
            [
                'title' => 'Launch & Optimize',
                'desc' => 'We implement SEO fixes and launch ads with conversion tracking.'
            ],
            [
                'title' => 'Scale Results',
                'desc' => 'We improve rankings, lower CPC, and increase ROI month after month.'
            ]
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Benefits of SEO & PPC Marketing',
        'subtitle' => 'Own more search visibility and generate better leads.',
        'cards' => [
            [
                'icon' => 'fa-solid fa-clock',
                'title' => 'Fast Results',
                'desc' => 'PPC drives traffic quickly while SEO builds long-term growth.'
            ],
            [
                'icon' => 'fa-solid fa-ranking-star',
                'title' => 'More Visibility',
                'desc' => 'Appear in both paid ads and organic listings.'
            ],
            [
                'icon' => 'fa-solid fa-users',
                'title' => 'Qualified Leads',
                'desc' => 'Reach people actively searching for your services.'
            ],
            [
                'icon' => 'fa-solid fa-chart-line',
                'title' => 'Higher ROI',
                'desc' => 'Use data-backed optimization to improve returns.'
            ],
            [
                'icon' => 'fa-solid fa-location-dot',
                'title' => 'Local Growth',
                'desc' => 'Generate more calls and visits in {target_loc}.'
            ],
            [
                'icon' => 'fa-solid fa-scale-balanced',
                'title' => 'Balanced Strategy',
                'desc' => 'Combine immediate wins with sustainable traffic growth.'
            ]
        ]
    ],

    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'SEO & PPC Questions in {target_loc}',
        'list' => [
            [
                'q' => 'Is SEO better than PPC?',
                'a' => 'Both are valuable. SEO is ideal for long-term growth, while PPC delivers faster results.'
            ],
            [
                'q' => 'How much should I spend on PPC ads?',
                'a' => 'Budget depends on your industry, goals, competition, and target area in {target_loc}.'
            ],
            [
                'q' => 'How long does SEO take?',
                'a' => 'Most businesses see noticeable SEO progress in 3 to 6 months.'
            ],
            [
                'q' => 'Can SEO and PPC work together?',
                'a' => 'Yes. Combining both channels often improves total traffic and conversions.'
            ],
            [
                'q' => 'Do you track leads and ROI?',
                'a' => 'Yes, we set up analytics, call tracking, and conversion reporting.'
            ]
        ]
    ]
];
