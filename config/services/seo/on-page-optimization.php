<?php
// config/services/on-page-optimization.php

return [
    'menu_category' => 'seo',
    'menu_title' => 'On-Page Optimization',
    'menu_desc' => 'Improve your website rankings with comprehensive on-page SEO optimization.',
    'menu_icon' => 'fa-solid fa-magnifying-glass-chart',

    'pageTitle' => 'On-Page SEO Optimization Services | ' . COMPANY_NAME . ' - Improve Search Rankings',
    'pageDescription' => 'Professional On-Page SEO optimization services by ' . COMPANY_NAME . '. Optimize content, meta tags, headings, internal linking, schema markup, and technical SEO to improve organic rankings and website performance.',
    'pageKey' => 'on_page_optimization',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-magnifying-glass-chart"></i>&nbsp; On-Page SEO Services',
        'title' => 'Boost Rankings with <span class="gradient-text">On-Page SEO Optimization</span>',
        'subtitle' => COMPANY_NAME . ' helps businesses improve search visibility through strategic on-page SEO. We optimize website content, meta tags, headings, internal linking, schema markup, and technical SEO factors that help search engines understand and rank your website.',
        'metrics' => [
            ['val' => '500+', 'lbl' => 'Pages Optimized'],
            ['val' => '85%', 'lbl' => 'Ranking Improvement'],
            ['val' => '5+', 'lbl' => 'Years Experience'],
        ],
        'form_title' => 'Get Your SEO Audit',
        'form_sub' => 'Our SEO experts will analyze your website and recommend the best optimization strategy.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'Search Engine Optimization',
        'title' => 'Why <span class="gradient-text">On-Page SEO</span> Is Essential',
        'subtitle' => 'At ' . COMPANY_NAME . ', we optimize every important on-page SEO element to improve search engine rankings, organic traffic, and user experience. From keyword optimization and content improvements to technical SEO enhancements, we help your website perform better in search results.',
        'features' => [
            [
                'icon' => 'fa-solid fa-ranking-star',
                'title' => 'Higher Search Rankings',
                'desc' => 'Optimize important ranking signals that help your website achieve better visibility in search engine results.'
            ],
            [
                'icon' => 'fa-solid fa-chart-line',
                'title' => 'Organic Traffic Growth',
                'desc' => 'Improve website relevance and user experience to attract more qualified organic visitors.'
            ],
        ],
        'img' => 'assets/images/services/on-page-seo-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'SEO Performance',
            'val' => 'Optimized',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-magnifying-glass-chart',
            'label' => 'Search Visibility',
            'val' => 'Improved',
            'sub' => 'Higher Rankings'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-award',
            'lbl'  => 'SEO Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-list-check"></i>&nbsp; On-Page SEO Services',
        'title' => 'Our <span class="gradient-text">On-Page Optimization Solutions</span>',
        'subtitle' => 'Complete on-page SEO services designed to improve rankings, organic traffic, and website performance.',
        'panels' => [

            'content_optimization' => [
                'tab_name'  => 'Content SEO',
                'tab_icon'  => 'fa-solid fa-file-lines',
                'title'     => 'Content Optimization',
                'tagline'   => 'High-Quality SEO Content',
                'desc'      => 'We optimize website content by improving keyword relevance, readability, content structure, and search intent to help pages rank higher and engage visitors.',
                'image'     => 'assets/images/services/content-optimization.webp',
                'metric'    => ['val' => 'SEO Ready', 'lbl' => 'Content', 'icon' => 'fa-solid fa-file-lines'],
                'features'  => [
                    'Keyword Optimization',
                    'Content Structure',
                    'Content Readability'
                ],
                'techStack' => ['Google Search Console', 'Google Analytics', 'Surfer SEO']
            ],

            'meta_optimization' => [
                'tab_name'  => 'Meta SEO',
                'tab_icon'  => 'fa-solid fa-tags',
                'title'     => 'Meta Tags Optimization',
                'tagline'   => 'Improve Search Visibility',
                'desc'      => 'Optimize SEO titles, meta descriptions, heading hierarchy, and URLs to improve click-through rates and increase search engine visibility.',
                'image'     => 'assets/images/services/meta-tags-optimization.webp',
                'metric'    => ['val' => 'Higher', 'lbl' => 'CTR', 'icon' => 'fa-solid fa-arrow-pointer'],
                'features'  => [
                    'SEO Title Tags',
                    'Meta Descriptions',
                    'Heading Optimization'
                ],
                'techStack' => ['Rank Math', 'Yoast SEO', 'Google Search Console']
            ],

            'technical_seo' => [
                'tab_name'  => 'Technical SEO',
                'tab_icon'  => 'fa-solid fa-gears',
                'title'     => 'Technical On-Page SEO',
                'tagline'   => 'Strong SEO Foundation',
                'desc'      => 'Improve crawlability, indexing, internal linking, schema markup, image optimization, and page structure for better search engine performance.',
                'image'     => 'assets/images/services/technical-on-page-seo.webp',
                'metric'    => ['val' => 'Optimized', 'lbl' => 'Technical SEO', 'icon' => 'fa-solid fa-gears'],
                'features'  => [
                    'Schema Markup',
                    'Internal Linking',
                    'Image Optimization'
                ],
                'techStack' => ['Schema.org', 'PageSpeed Insights', 'Google Search Console']
            ],

            'seo_audit' => [
                'tab_name'  => 'SEO Audit',
                'tab_icon'  => 'fa-solid fa-magnifying-glass-chart',
                'title'     => 'On-Page SEO Audit',
                'tagline'   => 'Find SEO Opportunities',
                'desc'      => 'Perform a detailed on-page SEO audit to identify optimization opportunities, technical issues, duplicate content, and website improvements.',
                'image'     => 'assets/images/services/on-page-seo-audit.webp',
                'metric'    => ['val' => 'Complete', 'lbl' => 'SEO Audit', 'icon' => 'fa-solid fa-chart-column'],
                'features'  => [
                    'SEO Health Check',
                    'Technical Analysis',
                    'Optimization Report'
                ],
                'techStack' => ['Screaming Frog', 'Google Search Console', 'Google Analytics']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; SEO Process',
        'title' => 'Our <span class="gradient-text">On-Page SEO Process</span>',
        'subtitle' => 'A strategic process to optimize every on-page ranking factor for better search visibility and long-term organic growth.',
        'steps' => [
            [
                'title' => 'SEO Audit',
                'desc' => 'We analyze your website to identify technical issues, content gaps, keyword opportunities, and on-page optimization improvements.',
                'icon' => 'fa-solid fa-magnifying-glass-chart'
            ],
            [
                'title' => 'Keyword Research',
                'desc' => 'We identify relevant search terms and map target keywords to the most appropriate pages.',
                'icon' => 'fa-solid fa-key'
            ],
            [
                'title' => 'Content Optimization',
                'desc' => 'We optimize page content, headings, meta tags, URLs, and images to improve relevance and search performance.',
                'icon' => 'fa-solid fa-file-lines'
            ],
            [
                'title' => 'Technical Optimization',
                'desc' => 'We improve internal linking, schema markup, Core Web Vitals, image optimization, and crawlability.',
                'icon' => 'fa-solid fa-gears'
            ],
            [
                'title' => 'Monitoring & Reporting',
                'desc' => 'We monitor rankings, analyze performance, and continuously refine the optimization strategy for sustained growth.',
                'icon' => 'fa-solid fa-chart-line'
            ],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Why Choose Us',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'Our data-driven on-page SEO strategies help improve rankings, increase organic traffic, and create a better experience for both users and search engines.',
        'cards' => [
            [
                'icon' => 'fa-solid fa-ranking-star',
                'title' => 'Improved Rankings',
                'desc' => 'Optimize important on-page ranking factors to achieve better search engine visibility.'
            ],
            [
                'icon' => 'fa-solid fa-chart-line',
                'title' => 'Organic Traffic Growth',
                'desc' => 'Drive more qualified visitors through strategic keyword and content optimization.'
            ],
            [
                'icon' => 'fa-solid fa-gears',
                'title' => 'Technical SEO',
                'desc' => 'Improve website structure, crawlability, indexing, and overall search performance.'
            ],
            [
                'icon' => 'fa-solid fa-file-lines',
                'title' => 'Optimized Content',
                'desc' => 'Create content that satisfies user intent while supporting your target keywords.'
            ],
            [
                'icon' => 'fa-solid fa-gauge-high',
                'title' => 'Better User Experience',
                'desc' => 'Improve page speed, mobile usability, and content organization for higher engagement.'
            ],
            [
                'icon' => 'fa-solid fa-headset',
                'title' => 'SEO Experts',
                'desc' => 'Receive professional guidance, continuous optimization, and dedicated SEO support.'
            ]
        ]
    ],

    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is On-Page SEO?',
                'a' => 'On-Page SEO is the process of optimizing individual web pages by improving content, headings, meta tags, URLs, images, internal links, and technical elements to improve search engine rankings.'
            ],
            [
                'q' => 'Why is On-Page SEO important?',
                'a' => 'On-page optimization helps search engines understand your content, improves user experience, increases keyword relevance, and supports long-term organic growth.'
            ],
            [
                'q' => 'What does your On-Page SEO service include?',
                'a' => 'Our service includes content optimization, keyword optimization, meta tags, heading structure, internal linking, schema markup, image optimization, URL optimization, and technical SEO improvements.'
            ],
            [
                'q' => 'How long does On-Page SEO take to show results?',
                'a' => 'Implementation usually takes a few days to a few weeks depending on website size. Ranking improvements typically become visible after search engines recrawl and reindex the optimized pages.'
            ],
            [
                'q' => 'Do you optimize existing websites?',
                'a' => 'Yes. We audit existing websites, identify on-page SEO issues, implement improvements, and provide recommendations to maximize search visibility and organic traffic.'
            ]
        ]
    ]
];
