<?php
// config/services/ai-ml-integration.php

return [
    'menu_category' => 'core',
    'menu_title' => 'AI/ML Integration',
    'menu_desc' => 'Leveraging intelligence to automate and enhance your products.',
    'menu_icon' => 'fa-solid fa-microchip',


    'pageTitle' => 'AI & ML Integration Services | ' . COMPANY_NAME . ' - Intelligent Automation Solutions',
    'pageDescription' => 'AI and Machine Learning integration services by ' . COMPANY_NAME . '. Automate processes, gain insights, and build intelligent systems using advanced AI technologies.',
    'pageKey' => 'ai_ml_integration',

    /* ================= HERO ================= */
    'hero' => [
        'tag' => '<i class="fa-solid fa-brain"></i>&nbsp; AI/ML Integration',
        'title' => 'Transform Your Business with <span class="gradient-text">AI-Powered Solutions</span>',
        'subtitle' => 'Leverage Artificial Intelligence and Machine Learning to automate processes, improve decision-making, and unlock new growth opportunities.',
        'metrics' => [
            ['val' => '80+', 'lbl' => 'AI Projects'],
            ['val' => '60%', 'lbl' => 'Automation Boost'],
            ['val' => '95%', 'lbl' => 'Accuracy Rate'],
        ],
        'form_title' => 'Integrate AI Into Your Business',
        'form_sub' => 'Consult with our AI experts and explore intelligent solutions.',
    ],

    /* ================= INTRO ================= */
    'intro' => [
        'tag' => 'AI Solutions',
        'title' => 'Where <span class="gradient-text">Data Meets Intelligence</span>',
        'subtitle' => 'We integrate AI and ML into your systems to create smarter workflows, automate decisions, and enhance user experiences.',
        'features' => [
            [
                'icon' => 'fa-solid fa-robot',
                'title' => 'Intelligent Automation',
                'desc' => 'Automate repetitive tasks using AI-driven systems.'
            ],
            [
                'icon' => 'fa-solid fa-chart-line',
                'title' => 'Predictive Insights',
                'desc' => 'Use machine learning to forecast trends and make better decisions.'
            ],
        ],
        'img' => 'assets/images/services/aiml-intro.png',
        'glass_card_1' => [
            'icon' => 'fa-solid fa-brain',
            'label' => 'AI Accuracy',
            'val' => '95%',
            'width' => '95%'
        ],
        'glass_card_2' => [
            'icon' => 'fa-solid fa-shield-halved',
            'label' => 'Security',
            'val' => 'Advanced',
            'sub' => 'Protected'
        ],
        'floating_badge' => [
            'icon' => 'fa-solid fa-microchip',
            'lbl'  => 'AI Experts'
        ]
    ],

    /* ================= TYPES ================= */
    'types' => [
        'tag' => '<i class="fa-solid fa-layer-group"></i>&nbsp; AI Services',
        'title' => 'Our <span class="gradient-text">AI/ML Integration Services</span>',
        'subtitle' => 'End-to-end AI solutions tailored for modern businesses.',
        'panels' => [

            'chatbot' => [
                'tab_name'  => 'AI Chatbots',
                'tab_icon'  => 'fa-solid fa-comments',
                'title'     => 'AI Chatbot Development',
                'tagline'   => '24/7 Smart Support',
                'desc'      => 'Deploy intelligent chatbots for customer support, lead generation, and automation.',
                'image'     => 'assets/images/services/aiml-automation.png',
                'metric'    => ['val' => '24/7', 'lbl' => 'Availability', 'icon' => 'fa-solid fa-clock'],
                'features'  => ['NLP Processing', 'Multi-platform Integration', 'Context Awareness'],
                'techStack' => ['OpenAI API', 'Dialogflow', 'Rasa']
            ],

            'analytics' => [
                'tab_name'  => 'Predictive Analytics',
                'tab_icon'  => 'fa-solid fa-chart-line',
                'title'     => 'Machine Learning & Predictive Analytics',
                'tagline'   => 'Data-Driven Decisions',
                'desc'      => 'Analyze data patterns and predict future outcomes using advanced ML models.',
                'image'     => 'assets/images/services/aiml-analytics.png',
                'metric'    => ['val' => 'High', 'lbl' => 'Accuracy', 'icon' => 'fa-solid fa-bullseye'],
                'features'  => ['Data Modeling', 'Forecasting', 'Anomaly Detection'],
                'techStack' => ['Python', 'TensorFlow', 'Scikit-learn']
            ],

            'vision' => [
                'tab_name'  => 'Computer Vision',
                'tab_icon'  => 'fa-solid fa-eye',
                'title'     => 'Computer Vision Solutions',
                'tagline'   => 'See with AI',
                'desc'      => 'Build systems that analyze images and videos for automation and insights.',
                'image'     => 'assets/images/services/aiml-nlp.png',
                'metric'    => ['val' => 'Real-time', 'lbl' => 'Processing', 'icon' => 'fa-solid fa-video'],
                'features'  => ['Object Detection', 'Face Recognition', 'Image Classification'],
                'techStack' => ['OpenCV', 'YOLO', 'PyTorch']
            ],

            'automation' => [
                'tab_name'  => 'Automation',
                'tab_icon'  => 'fa-solid fa-gears',
                'title'     => 'AI Process Automation',
                'tagline'   => 'Work Smarter',
                'desc'      => 'Automate business workflows using AI-driven decision-making systems.',
                'image'     => 'assets/images/services/aiml-computer-vision.png',
                'metric'    => ['val' => '60%', 'lbl' => 'Efficiency Boost', 'icon' => 'fa-solid fa-bolt'],
                'features'  => ['Workflow Automation', 'Smart Decision Engines', 'AI Integration'],
                'techStack' => ['Python', 'Node.js', 'Zapier']
            ],

        ]
    ],

    /* ================= PROCESS ================= */
    'process' => [
        'tag' => '<i class="fa-solid fa-route"></i>&nbsp; Process',
        'title' => 'Our <span class="gradient-text">AI Implementation Process</span>',
        'subtitle' => 'A structured approach to build intelligent systems.',
        'steps' => [
            ['title' => 'Data Analysis', 'desc' => 'Understanding your data and business needs.', 'icon' => 'fa-solid fa-database'],
            ['title' => 'Model Design', 'desc' => 'Designing AI/ML models tailored to your use case.', 'icon' => 'fa-solid fa-brain'],
            ['title' => 'Development', 'desc' => 'Building and training machine learning models.', 'icon' => 'fa-solid fa-code'],
            ['title' => 'Testing', 'desc' => 'Validating accuracy and performance.', 'icon' => 'fa-solid fa-vial'],
            ['title' => 'Deployment', 'desc' => 'Integrating AI into your systems.', 'icon' => 'fa-solid fa-rocket'],
        ]
    ],

    /* ================= BENEFITS ================= */
    'benefits' => [
        'tag' => '<i class="fa-solid fa-trophy"></i>&nbsp; Benefits',
        'title' => 'Why Choose <span class="gradient-text">' . COMPANY_NAME . '</span>',
        'subtitle' => 'We deliver intelligent, scalable AI solutions.',
        'cards' => [
            ['icon' => 'fa-solid fa-brain', 'title' => 'Smart Automation', 'desc' => 'Reduce manual work using AI-driven systems.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Better Decisions', 'desc' => 'Make data-driven business decisions.'],
            ['icon' => 'fa-solid fa-bolt', 'title' => 'High Efficiency', 'desc' => 'Improve productivity and performance.'],
            ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Secure AI', 'desc' => 'Safe and reliable AI implementations.'],
            ['icon' => 'fa-solid fa-expand', 'title' => 'Scalable', 'desc' => 'AI systems that grow with your business.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support', 'desc' => 'Continuous monitoring and updates.'],
        ]
    ],

    /* ================= PORTFOLIO ================= */
    'portfolio' => [
        'tag' => '<i class="fa-solid fa-briefcase"></i>&nbsp; Portfolio',
        'title' => 'Our <span class="gradient-text">AI Projects</span>',
        'subtitle' => 'Explore our intelligent AI/ML solutions.',
        'filter_categories' => ['chatbot', 'analytics', 'automation']
    ],

    /* ================= TESTIMONIALS ================= */
    /* ================= FAQ ================= */
    'faq' => [
        'tag' => '<i class="fa-solid fa-circle-question"></i>&nbsp; FAQ',
        'title' => 'Frequently Asked Questions',
        'list' => [
            [
                'q' => 'What is AI/ML integration in business?',
                'a' => 'AI/ML integration involves embedding intelligent algorithms into your systems to automate tasks, analyze data, and improve decision-making.'
            ],
            [
                'q' => 'Do I need large data to implement AI?',
                'a' => 'While more data improves accuracy, we can work with existing datasets and also help in data collection and preparation.'
            ],
            [
                'q' => 'Can AI be integrated into existing software?',
                'a' => 'Yes, we can integrate AI features into your current applications using APIs and custom solutions.'
            ],
            [
                'q' => 'How accurate are AI models?',
                'a' => 'Accuracy depends on data quality and use case, but most models achieve 85–95% accuracy after proper training.'
            ],
            [
                'q' => 'Is AI secure for business use?',
                'a' => 'Yes, we implement secure architectures, encryption, and compliance standards to ensure safe AI deployment.'
            ],
        ]
    ]
];
