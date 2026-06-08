<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/data.php';
$pageKey = 'terms';

$extraCSS = [
    asset('css/terms-condition.css')
];

$pageTitle = "Terms & Conditions | " . COMPANY_NAME;
$pageDescription = "Review the terms and conditions for using " . COMPANY_NAME . " services and website.";
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
                <h1><span class="gradient-text">Terms and Conditions</span> for <?= COMPANY_NAME_LONG ?></h1>
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
                        These Terms and Conditions (“Terms”) govern your access to and use of the website, products, and services provided by <?= COMPANY_NAME_LONG ?> (“Company,” “we,” “us,” or “our”).
                    </p>
                    <p class="intro-text">
                        By accessing our website or using our services, you agree to be bound by these Terms. If you do not agree, you must discontinue use of our website and services.
                    </p>

                    <div class="policy-item">
                        <h2>1. Privacy Policy</h2>
                        <p>Your use of our website and services is also governed by our Privacy Policy, which explains how we collect, use, and protect your information.</p>
                    </div>

                    <div class="policy-item">
                        <h2>2. Eligibility</h2>
                        <p>By using our website or services, you represent that you are legally capable of entering into binding contracts under applicable law.</p>
                    </div>

                    <div class="policy-item">
                        <h2>3. Services</h2>
                        <p><?= COMPANY_NAME_LONG ?> provides digital and technology-related services including, but not limited to, web development, software development, UI/UX design, consulting, and related professional services.</p>
                        <p>We reserve the right to modify, suspend, or discontinue any service at any time without prior notice.</p>
                    </div>

                    <div class="policy-item">
                        <h2>4. Fees and Payments</h2>
                        <p>Fees for services shall be communicated separately through proposals, quotations, invoices, or agreements.</p>
                        <ul>
                            <li>Payments must be made in accordance with agreed terms.</li>
                            <li>We may use third-party payment processors, and such providers may apply their own terms and charges.</li>
                        </ul>
                    </div>

                    <div class="policy-item">
                        <h2>5. Refunds and Cancellations</h2>
                        <p>Unless otherwise agreed in writing, payments made for services are non-refundable once work has commenced.</p>
                        <p>Any refunds, if approved, shall be at the sole discretion of the Company.</p>
                    </div>

                    <div class="policy-item">
                        <h2>6. User Responsibilities</h2>
                        <p>You agree not to:</p>
                        <ul>
                            <li>Use our services for unlawful purposes</li>
                            <li>Attempt unauthorized access to our systems</li>
                            <li>Misuse, disrupt, or interfere with our website or services</li>
                            <li>Submit false, misleading, or fraudulent information</li>
                        </ul>
                    </div>

                    <div class="policy-item">
                        <h2>7. Intellectual Property</h2>
                        <p>All website content, materials, branding, graphics, code, and intellectual property displayed on this website are owned by or licensed to <?= COMPANY_NAME_LONG ?>.</p>
                        <p>No content may be copied, reproduced, distributed, or modified without prior written consent.</p>
                    </div>

                    <div class="policy-item">
                        <h2>8. Third-Party Links</h2>
                        <p>Our website may contain links to third-party websites or services. We are not responsible for the content, policies, or practices of such third parties.</p>
                    </div>

                    <div class="policy-item">
                        <h2>9. Disclaimer of Warranties</h2>
                        <p>All services and information are provided on an “as is” and “as available” basis without warranties of any kind, whether express or implied.</p>
                        <p>We disclaim all warranties including merchantability, fitness for a particular purpose, and non-infringement.</p>
                    </div>

                    <div class="policy-item">
                        <h2>10. Limitation of Liability</h2>
                        <p>To the fullest extent permitted by law, <?= COMPANY_NAME_LONG ?> shall not be liable for any indirect, incidental, consequential, special, or punitive damages arising from your use of our website or services.</p>
                    </div>

                    <div class="policy-item">
                        <h2>11. Indemnification</h2>
                        <p>You agree to indemnify and hold harmless <?= COMPANY_NAME_LONG ?>, its directors, employees, and affiliates from any claims, liabilities, damages, losses, or expenses arising from your violation of these Terms or misuse of our services.</p>
                    </div>

                    <div class="policy-item">
                        <h2>12. Termination</h2>
                        <p>We reserve the right to suspend or terminate your access to our website or services at our discretion, without notice, if you violate these Terms.</p>
                    </div>

                    <div class="policy-item">
                        <h2>13. Governing Law and Jurisdiction</h2>
                        <p>These Terms shall be governed by and construed in accordance with the laws of India.</p>
                        <p>Any disputes arising under these Terms shall be subject to the exclusive jurisdiction of the courts located in Rajkot, Gujarat.</p>
                    </div>

                    <div class="policy-item">
                        <h2>14. Changes to Terms</h2>
                        <p>We reserve the right to modify these Terms at any time. Updated versions will be posted on this page with revised effective dates.</p>
                    </div>

                    <div class="policy-item">
                        <h2>15. Contact Information</h2>
                        <p>If you have any questions regarding these Terms, please contact us:</p>
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