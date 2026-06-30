<?php

return [
    'hide_from_menu' => true,
    'menu_category' => 'seo',
    'menu_title' => 'On-Page Optimization',

    'pageTitle' => 'On-Page SEO Services in {target_loc} | ' . COMPANY_NAME,
    'pageDescription' => 'Professional On-Page SEO services in {target_loc}. Improve search rankings, organic traffic, and website performance with expert on-page optimization across {state}.',
    'pageKey' => 'on_page_optimization_local',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-magnifying-glass-chart"></i>&nbsp; Professional On-Page SEO',
        'title' => 'On-Page SEO Services in <span class="gradient-text">{target_loc}</span>',
        'subtitle' => 'Improve your website\'s search visibility with professional on-page optimization. We optimize content, meta tags, headings, internal linking, images, schema markup, and technical SEO factors that help businesses achieve higher rankings and more organic traffic.',
        'metrics' => [
            ['val' => '500+', 'lbl' => 'Pages Optimized'],
            ['val' => '90%', 'lbl' => 'SEO Score Improvement'],
            ['val' => '3X', 'lbl' => 'Organic Growth'],
        ],
        'form_title' => 'Get Your {target_loc} SEO Audit',
        'form_sub' => 'Talk with our SEO experts and improve your website rankings.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Search Engine Optimization',
        'title' => 'Why Choose <span class="gradient-text">Professional On-Page SEO?</span>',
        'subtitle' => 'A properly optimized website performs better in search engines and delivers a better experience for users. Our on-page SEO services help businesses in {target_loc} improve keyword rankings, increase organic traffic, and build a strong SEO foundation for long-term growth.',
        'features' => [
            [
                'icon' => 'fa-solid fa-ranking-star',
                'title' => 'Higher Search Rankings',
                'desc' => 'Optimize important on-page ranking factors that improve search engine visibility.'
            ],
            [
                'icon' => 'fa-solid fa-chart-line',
                'title' => 'Organic Traffic Growth',
                'desc' => 'Increase qualified organic visitors through strategic website optimization.'
            ]
        ],
        'img' => 'assets/images/services/on-page-optimization-local-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'Organic Growth',
            'val' => '300%',
            'width' => '88%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-magnifying-glass-chart',
            'label' => 'Pages',
            'val' => '500+',
            'sub' => 'Optimized'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-star',
            'lbl' => 'SEO Experts'
        ]
    ],

    /* ================= SERVICES GRID ================= */
    'types' => [
        'tag' => 'What We Offer',
        'title' => 'On-Page SEO Solutions in <span class="gradient-text">{target_loc}</span>',
        'subtitle' => 'Comprehensive on-page optimization services designed to improve rankings, traffic, and website performance.',
        'panels' => [

            'business' => [
                'tab_name' => 'Website SEO',
                'tab_icon' => 'fa-solid fa-building',
                'tagline' => 'Improve Organic Visibility',
                'title' => 'On-Page SEO for Business Websites in {target_loc}',
                'desc' => 'Optimize every important on-page SEO element to improve search rankings, increase website authority, and generate more qualified leads.',
                'features' => [
                    'Keyword Optimization',
                    'Meta Tags Optimization',
                    'Heading Structure',
                    'Internal Linking'
                ],
                'techStack' => ['Google Search Console', 'Google Analytics', 'Rank Math'],
                'image' => 'assets/images/services/on-page-business-seo.webp',
                'metric' => [
                    'icon' => 'fa-solid fa-ranking-star',
                    'val' => 'Higher',
                    'lbl' => 'Search Rankings'
                ]
            ],

            'ecommerce' => [
                'tab_name' => 'eCommerce SEO',
                'tab_icon' => 'fa-solid fa-cart-shopping',
                'tagline' => 'Optimize Product Pages',
                'title' => 'eCommerce On-Page SEO in {state}',
                'desc' => 'Improve category pages, product pages, metadata, structured data, and internal linking to increase organic traffic and online sales.',
                'features' => [
                    'Product Page SEO',
                    'Category Optimization',
                    'Schema Markup',
                    'Image SEO'
                ],
                'techStack' => ['WooCommerce', 'Shopify', 'Schema.org'],
                'image' => 'assets/images/services/on-page-ecommerce-seo.webp',
                'metric' => [
                    'icon' => 'fa-solid fa-chart-line',
                    'val' => 'More',
                    'lbl' => 'Organic Sales'
                ]
            ],

            'landing' => [
                'tab_name' => 'Content SEO',
                'tab_icon' => 'fa-solid fa-bullseye',
                'tagline' => 'Content That Ranks',
                'title' => 'Content Optimization Services in {target_loc}',
                'desc' => 'Optimize website content, headings, keyword placement, readability, and user intent to improve search visibility and user engagement.',
                'features' => [
                    'Content Optimization',
                    'Keyword Placement',
                    'Heading Optimization',
                    'SEO Content Structure'
                ],
                'techStack' => ['Google Docs', 'Surfer SEO', 'Google Analytics'],
                'image' => 'assets/images/services/on-page-content-seo.webp',
                'metric' => [
                    'icon' => 'fa-solid fa-arrow-up',
                    'val' => '+250%',
                    'lbl' => 'Organic Traffic'
                ]
            ],

            'redesign' => [
                'tab_name' => 'Technical SEO',
                'tab_icon' => 'fa-solid fa-pen-ruler',
                'tagline' => 'Technical Improvements',
                'title' => 'Technical On-Page SEO Services',
                'desc' => 'Enhance technical SEO with schema markup, URL optimization, image optimization, Core Web Vitals improvements, and better website crawlability.',
                'features' => [
                    'Schema Markup',
                    'Core Web Vitals',
                    'URL Optimization',
                    'Image Optimization'
                ],
                'techStack' => ['PageSpeed Insights', 'Schema.org', 'Google Search Console'],
                'image' => 'assets/images/services/on-page-technical-seo.webp',
                'metric' => [
                    'icon' => 'fa-solid fa-wand-magic-sparkles',
                    'val' => 'Technical',
                    'lbl' => 'SEO Boost'
                ]
            ]
        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">On-Page SEO</span> Process',
        'subtitle' => 'A structured SEO strategy focused on improving website relevance, search visibility, and organic performance.',
        'steps' => [
            [
                'title' => 'Website Audit',
                'desc' => 'We analyze your website to identify on-page SEO issues, technical errors, and optimization opportunities.'
            ],
            [
                'title' => 'Keyword Research',
                'desc' => 'We identify high-value keywords and map them to the right pages based on search intent.'
            ],
            [
                'title' => 'Content Optimization',
                'desc' => 'We optimize page content, headings, meta tags, URLs, and internal links for better search relevance.'
            ],
            [
                'title' => 'Technical Improvements',
                'desc' => 'We implement schema markup, image optimization, Core Web Vitals enhancements, and other technical SEO improvements.'
            ]
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Benefits of Professional On-Page SEO',
        'subtitle' => 'Build a stronger SEO foundation and achieve sustainable organic growth.',
        'cards' => [
            [
                'icon' => 'fa-solid fa-ranking-star',
                'title' => 'Higher Rankings',
                'desc' => 'Optimize key on-page factors that help improve search engine rankings.'
            ],
            [
                'icon' => 'fa-solid fa-chart-line',
                'title' => 'More Organic Traffic',
                'desc' => 'Increase qualified visitors through effective on-page optimization.'
            ],
            [
                'icon' => 'fa-solid fa-file-lines',
                'title' => 'Better Content',
                'desc' => 'Improve content quality, keyword relevance, and readability.'
            ],
            [
                'icon' => 'fa-solid fa-gears',
                'title' => 'Technical SEO',
                'desc' => 'Strengthen website structure, crawlability, and indexing.'
            ],
            [
                'icon' => 'fa-solid fa-magnifying-glass',
                'title' => 'Improved Visibility',
                'desc' => 'Increase your website visibility across relevant search results.'
            ],
            [
                'icon' => 'fa-solid fa-users',
                'title' => 'Better User Experience',
                'desc' => 'Deliver faster, more relevant, and user-friendly web pages.'
            ]
        ]
    ],

    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'On-Page SEO Questions in <span class="gradient-text">{target_loc}</span>',
        'list' => [
            [
                'q' => 'What is On-Page SEO?',
                'a' => 'On-Page SEO involves optimizing website content, HTML elements, and technical factors to improve search engine rankings and user experience.'
            ],
            [
                'q' => 'Why is On-Page SEO important?',
                'a' => 'It helps search engines understand your website, improves rankings, increases organic traffic, and enhances user engagement.'
            ],
            [
                'q' => 'Do you optimize existing websites?',
                'a' => 'Yes, we audit and optimize existing websites by improving content, metadata, internal linking, schema markup, and technical SEO elements.'
            ],
            [
                'q' => 'How long does On-Page SEO take?',
                'a' => 'The optimization process depends on your website size, but most projects are completed within a few days to several weeks.'
            ],
            [
                'q' => 'Do you provide ongoing SEO support?',
                'a' => 'Yes, we offer continuous SEO monitoring, reporting, optimization, and recommendations to maintain long-term search performance.'
            ]
        ]
    ]
];
