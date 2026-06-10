<?php
// config/services/generative-engine-optimization.php

return [
    'menu_category' => 'seo',
    'menu_title' => 'GEO & AI SEO',
    'menu_desc' => 'Optimizing for generative search engines and AI assistants.',
    'menu_icon' => 'fa-solid fa-bolt',


    'pageTitle' => 'GEO & AI SEO Services | ' . COMPANY_NAME . ' - Rank in AI Search',
    'pageDescription' => 'GEO (Generative Engine Optimization) and AI SEO services by ' . COMPANY_NAME . '. Optimize your content for AI search engines like ChatGPT, Google SGE, and future search technologies.',
    'pageKey' => 'geo_ai_seo',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-brain"></i>&nbsp; GEO & AI SEO',
        'title' => 'Rank in the Future with <span class="gradient-text">AI SEO & GEO</span>',
        'subtitle' => 'We optimize your content for AI-powered search engines like ChatGPT, Google SGE, and voice assistants to increase visibility in the next generation of search.',
        'metrics' => [
            ['val' => '5X', 'lbl' => 'AI Visibility'],
            ['val' => '70%', 'lbl' => 'Search Evolution'],
            ['val' => '100+', 'lbl' => 'AI Projects'],
        ],
        'form_title' => 'Optimize for AI Search',
        'form_sub' => 'Get ahead of competitors with AI-driven SEO strategies.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'AI Search Optimization',
        'title' => 'Optimize for <span class="gradient-text">AI-Driven Search Engines</span>',
        'subtitle' => 'Traditional SEO is evolving. We help your business rank in AI-generated answers, featured snippets, and conversational search.',
        'features' => [
            [
                'icon' => 'fa-solid fa-robot',
                'title' => 'AI Search Visibility',
                'desc' => 'Appear in AI-generated answers and recommendations.'
            ],
            [
                'icon' => 'fa-solid fa-comments',
                'title' => 'Conversational SEO',
                'desc' => 'Optimize content for voice and chat-based queries.'
            ],
        ],
        'img' => 'assets/images/services/generative-engine-optimization-intro.webp',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-chart-line',
            'label' => 'AI Traffic',
            'val' => '+400%',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-brain',
            'label' => 'AI Reach',
            'val' => 'High',
            'sub' => 'Visibility'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-microchip',
            'lbl'  => 'AI SEO Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; AI SEO Services',
        'title' => 'Our <span class="gradient-text">GEO & AI SEO Solutions</span>',
        'subtitle' => 'Cutting-edge SEO strategies for AI-powered search.',
        'panels' => [

            'geo' => [
                'tab_name'  => 'GEO',
                'tab_icon'  => 'fa-solid fa-globe',
                'title'     => 'Generative Engine Optimization (GEO)',
                'tagline'   => 'Optimize for AI Answers',
                'desc'      => 'Structure your content to appear in AI-generated responses and summaries.',
                'image'     => 'assets/images/services/generative-engine-optimization-geo.webp',
                'metric'    => ['val' => 'Top', 'lbl' => 'AI Results', 'icon' => 'fa-solid fa-star'],
                'features'  => ['Answer Optimization', 'Content Structuring', 'Featured Snippets'],
                'techStack' => ['Schema.org', 'NLP Tools', 'AI Models']
            ],

            'ai_content' => [
                'tab_name'  => 'AI Content',
                'tab_icon'  => 'fa-solid fa-pen',
                'title'     => 'AI Content Optimization',
                'tagline'   => 'Content for AI Ranking',
                'desc'      => 'Create and optimize content that AI models can easily understand and rank.',
                'image'     => 'assets/images/services/generative-engine-optimization-ai_content.webp',
                'metric'    => ['val' => 'High', 'lbl' => 'Relevance', 'icon' => 'fa-solid fa-bullseye'],
                'features'  => ['Semantic SEO', 'Topic Clusters', 'Entity Optimization'],
                'techStack' => ['Surfer SEO', 'Clearscope', 'OpenAI']
            ],

            'schema' => [
                'tab_name'  => 'Structured Data',
                'tab_icon'  => 'fa-solid fa-code',
                'title'     => 'Schema & Structured Data SEO',
                'tagline'   => 'Machine-Readable Content',
                'desc'      => 'Implement structured data to help AI understand your website better.',
                'image'     => 'assets/images/services/generative-engine-optimization-schema.webp',
                'metric'    => ['val' => 'Rich', 'lbl' => 'Results', 'icon' => 'fa-solid fa-code'],
                'features'  => ['Schema Markup', 'Rich Snippets', 'Knowledge Graph'],
                'techStack' => ['JSON-LD', 'Schema.org', 'Google Rich Results']
            ],

            'voice' => [
                'tab_name'  => 'Voice SEO',
                'tab_icon'  => 'fa-solid fa-microphone',
                'title'     => 'Voice Search Optimization',
                'tagline'   => 'Optimize for Voice',
                'desc'      => 'Rank for voice queries and conversational search.',
                'image' => 'assets/images/services/generative-engine-optimization-voice.webp',
                'metric'    => ['val' => 'Top', 'lbl' => 'Voice Results', 'icon' => 'fa-solid fa-microphone'],
                'features'  => ['Natural Language SEO', 'FAQ Optimization', 'Long-tail Keywords'],
                'techStack' => ['Google Assistant', 'Alexa', 'Siri']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">AI SEO Process</span>',
        'subtitle' => 'A future-ready approach to SEO.',
        'steps' => [
            ['title' => 'AI SEO Audit', 'desc' => 'Analyzing AI visibility and gaps.', 'icon' => 'fa-solid fa-magnifying-glass'],
            ['title' => 'Content Structuring', 'desc' => 'Optimizing for AI understanding.', 'icon' => 'fa-solid fa-pen'],
            ['title' => 'Schema Implementation', 'desc' => 'Adding structured data.', 'icon' => 'fa-solid fa-code'],
            ['title' => 'AI Optimization', 'desc' => 'Improving AI rankings.', 'icon' => 'fa-solid fa-robot'],
            ['title' => 'Performance Tracking', 'desc' => 'Monitoring AI traffic.', 'icon' => 'fa-solid fa-chart-line'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We prepare your business for the future of search.',
        'cards' => [
            ['icon' => 'fa-solid fa-brain', 'title' => 'Future SEO', 'desc' => 'Stay ahead with AI search optimization.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Higher Visibility', 'desc' => 'Appear in AI-generated results.'],
            ['icon' => 'fa-solid fa-comments', 'title' => 'Voice Ready', 'desc' => 'Optimize for conversational queries.'],
            ['icon' => 'fa-solid fa-code', 'title' => 'Structured Data', 'desc' => 'Improve machine understanding.'],
            ['icon' => 'fa-solid fa-rocket', 'title' => 'Early Advantage', 'desc' => 'Beat competitors in AI search.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Continuous AI SEO optimization.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">AI SEO Results</span>',
        'subtitle' => 'See how we helped businesses rank in AI search.',
        'filter_categories' => ['ai', 'seo', 'geo']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is GEO (Generative Engine Optimization)?',
                'a' => 'GEO focuses on optimizing content to appear in AI-generated search results and answers.'
            ],
            [
                'q' => 'How is AI SEO different from traditional SEO?',
                'a' => 'AI SEO focuses on conversational queries, structured data, and machine-readable content for AI engines.'
            ],
            [
                'q' => 'Can my business rank in ChatGPT or AI tools?',
                'a' => 'Yes, with proper optimization, your content can be referenced in AI-generated responses.'
            ],
            [
                'q' => 'Do I need schema for AI SEO?',
                'a' => 'Yes, structured data helps AI understand and rank your content more effectively.'
            ],
            [
                'q' => 'Is AI SEO important for the future?',
                'a' => 'Absolutely. AI-driven search is growing rapidly and early adoption gives a strong competitive advantage.',
            ],
        ]
    ]
];
