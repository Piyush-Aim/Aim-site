<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/data.php';
$pageKey = 'privacy';

$extraCSS = [
    asset('css/privacy-policy.css')
];

$pageTitle = "Privacy Policy | " . COMPANY_NAME;
$pageDescription = "Read the Privacy Policy of " . COMPANY_NAME . " to understand how we collect, use, and protect your personal data.";
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<?php include 'partials/head.php'; ?>

<body>
    <?php include 'partials/nav.php'; ?>

    <!-- Hero Header -->
    <section class="policy-hero">
        <div class="hero-bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
        </div>
        <div class="hero-bg-accent"></div>
        <div class="hero-orb-center"></div>
        <div class="grid-overlay"></div>

        <div class="container">
            <div class="policy-hero-inner section-fade">
                <p class="tag tag-primary">Legal Documentation</p>
                <h1><span class="gradient-text">Privacy Policy</span> for <?= COMPANY_NAME_LONG ?></h1>
                <p class="last-updated">Last Updated: April 27, 2026</p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="policy-content-section">
        <div class="container">
            <div class="policy-card">
                <div class="policy-body">
                    <p class="intro-text">
                        <?= COMPANY_NAME_LONG ?> (“Company,” “we,” “us,” or “our”) respects your privacy and is committed to protecting your personal data. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website, engage with our services, or otherwise interact with us.
                    </p>
                    <p class="intro-text">
                        By using our website or services, you agree to the collection and use of information in accordance with this Privacy Policy.
                    </p>

                    <div class="policy-item">
                        <h2>1. Information We Collect</h2>
                        <p>We may collect the following categories of personal information:</p>
                        <div class="sub-item">
                            <h3>Personal Information:</h3>
                            <p>Name, email address, phone number, company name, billing details, and any other information you voluntarily provide to us.</p>
                        </div>
                        <div class="sub-item">
                            <h3>Technical and Usage Data:</h3>
                            <p>IP address, browser type, device information, operating system, referral URLs, pages visited, time spent on pages, and other diagnostic data.</p>
                        </div>
                        <div class="sub-item">
                            <h3>Cookies and Tracking Data:</h3>
                            <p>We may use cookies, web beacons, pixels, and similar technologies to improve user experience and analyze website traffic.</p>
                        </div>
                    </div>

                    <div class="policy-item">
                        <h2>2. How We Use Your Information</h2>
                        <p>We may use the collected information for purposes including:</p>
                        <ul>
                            <li>To provide, operate, and maintain our website and services</li>
                            <li>To communicate with you regarding inquiries, projects, or support requests</li>
                            <li>To improve website functionality, performance, and user experience</li>
                            <li>To send service updates, promotional communications, or marketing materials (where permitted by law)</li>
                            <li>To monitor and analyze usage patterns and trends</li>
                            <li>To comply with legal obligations and enforce our agreements</li>
                        </ul>
                    </div>

                    <div class="policy-item">
                        <h2>3. Analytics and Third-Party Services</h2>
                        <p>We may use trusted third-party tools and service providers, including but not limited to:</p>
                        <ul>
                            <li>Google Analytics</li>
                            <li>Google Search Console</li>
                            <li>Meta/Facebook Pixel</li>
                            <li>Advertising and remarketing platforms</li>
                        </ul>
                        <p>These providers may collect information in accordance with their own privacy policies.</p>
                    </div>

                    <div class="policy-item">
                        <h2>4. Sharing of Information</h2>
                        <p>We do not sell your personal information. We may share your information with:</p>
                        <ul>
                            <li>Service providers and contractors assisting in website hosting, analytics, communications, and operations</li>
                            <li>Legal, regulatory, or government authorities when required by law</li>
                            <li>Professional advisors including accountants, lawyers, and auditors where necessary</li>
                        </ul>
                    </div>

                    <div class="policy-item">
                        <h2>5. Data Retention</h2>
                        <p>We retain personal information only for as long as necessary to fulfill the purposes outlined in this Privacy Policy, comply with legal obligations, resolve disputes, and enforce our agreements.</p>
                    </div>

                    <div class="policy-item">
                        <h2>6. Data Security</h2>
                        <p>We implement commercially reasonable technical and organizational safeguards to protect your personal information. However, no method of transmission over the Internet or electronic storage is completely secure.</p>
                    </div>

                    <div class="policy-item">
                        <h2>7. Your Rights</h2>
                        <p>Subject to applicable law, you may have the right to:</p>
                        <ul>
                            <li>Request access to your personal data</li>
                            <li>Request correction of inaccurate or incomplete data</li>
                            <li>Request deletion of your personal data</li>
                            <li>Withdraw consent where processing is based on consent</li>
                        </ul>
                        <p>To exercise any of these rights, contact us using the details below.</p>
                    </div>

                    <div class="policy-item">
                        <h2>8. Children’s Privacy</h2>
                        <p>Our services are not directed to individuals under the age of 18, and we do not knowingly collect personal information from children.</p>
                    </div>

                    <div class="policy-item">
                        <h2>9. International Data Transfers</h2>
                        <p>If you access our services from outside India, your information may be transferred to, stored, and processed in jurisdictions outside your location where our service providers operate.</p>
                    </div>

                    <div class="policy-item">
                        <h2>10. Compliance with Indian Law</h2>
                        <p>We process personal data in accordance with applicable Indian laws, including the Digital Personal Data Protection Act, 2023 and other applicable regulations.</p>
                    </div>

                    <div class="policy-item">
                        <h2>11. Changes to This Privacy Policy</h2>
                        <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page with the revised “Last Updated” date.</p>
                    </div>

                    <div class="policy-item">
                        <h2>12. Contact Us</h2>
                        <p>If you have any questions regarding this Privacy Policy, please contact us:</p>
                        <address class="contact-info">
                            <strong><?= COMPANY_NAME_LONG ?></strong><br>
                            <?= COMPANY_ADDRESS ?><br>
                            Email: <a href="mailto:<?= COMPANY_EMAIL ?>"><?= COMPANY_EMAIL ?></a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'partials/footer.php'; ?>
</body>

</html>