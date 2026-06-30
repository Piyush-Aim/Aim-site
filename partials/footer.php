<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-brand-col">
                <a href="<?= url('') ?>" class="footer-logo">
                    <img src="<?= asset('images/footer_logo.webp') ?>" alt="Footer Logo">
                </a>
                <p class="footer-desc">
                    Aim Infocorp core activities related into online web development as well as software development since 10 years.
                </p>
                <div class="footer-contact-info">
                    <a href="mailto:<?= COMPANY_EMAIL ?>" class="footer-nap">
                        <i class="fa-solid fa-envelope"></i> <?= COMPANY_EMAIL ?>
                    </a>
                    <a href="tel:<?= COMPANY_PHONE_LINK ?>" class="footer-nap">
                        <i class="fa-solid fa-phone"></i> <?= COMPANY_PHONE ?>
                    </a>
                    <p class="footer-nap">
                        <i class="fa-solid fa-location-dot"></i> <?= COMPANY_ADDRESS ?>
                    </p>
                </div>
                <div class="footer-socials">
                    <a href="https://www.facebook.com/aiminfocorp" class="fs-link" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://in.linkedin.com/company/aim-infocorp-pvt-ltd-rajkot" class="fs-link" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h6 class="footer-h6">Services</h6>
                <ul class="footer-links">
                    <?php foreach (['website-development', 'seo', 'search-engine-ppc', 'social-media-marketing', 'ui-ux-design'] as $slug): ?>
                        <?php if (isset($allServicesData[$slug])): ?>
                            <li>
                                <a href="<?= url('services/' . $slug) ?>" class="<?php echo isActive(str_replace('-', '_', $slug), $pageKey ?? ''); ?>"><?= $allServicesData[$slug]['menu_title'] ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="footer-col">
                <h6 class="footer-h6">Company</h6>
                <ul class="footer-links">
                    <li><a href="<?= url('about-us') ?>" class="<?php echo isActive('about-us', $pageKey ?? ''); ?>">About Us</a></li>
                    <li><a href="<?= url('portfolio') ?>" class="<?php echo isActive('portfolio', $pageKey ?? ''); ?>">Our Portfolio</a></li>
                    <li><a href="<?= url('case-studies') ?>" class="<?php echo isActive('cases', $pageKey ?? ''); ?>">Case Studies</a></li>
                    <li><a href="<?= url('contact') ?>" class="<?php echo isActive('contact', $pageKey ?? ''); ?>">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h6 class="footer-h6">Resources</h6>
                <ul class="footer-links">
                    <li><a href="<?= url('privacy-policy') ?>" class="<?php echo isActive('privacy', $pageKey ?? ''); ?>">Privacy Policy</a></li>
                    <li><a href="<?= url('terms-condition') ?>" class="<?php echo isActive('terms', $pageKey ?? ''); ?>">Terms & Conditions</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-middle">
            <div class="newsletter-content">
                <h4 class="newsletter-h4">Subscribe to Our Newsletter</h4>
                <p class="newsletter-p">Get the latest updates on technology trends, tips, and exclusive offers.</p>
            </div>
            <form class="newsletter-form premium-form" data-success="Subscribed!">
                <input type="hidden" name="form_type" value="Newsletter">
                <input type="email" name="email" placeholder="Enter your email" required class="newsletter-input">
                <button type="submit" class="newsletter-btn btn">Subscribe</button>
            </form>
        </div>

        <div class="footer-bottom">
            <div class="copyright">
                &copy; <?= date('Y') ?> <?= COMPANY_NAME_LONG ?> All rights reserved.
            </div>
            <div class="footer-legal">
                <a href="<?= url('privacy-policy') ?>" class="<?php echo isActive('privacy-policy', $pageKey ?? ''); ?>">Privacy Policy</a>
                <a href="<?= url('terms-condition') ?>" class="<?php echo isActive('terms-condition', $pageKey ?? ''); ?>">Terms & Conditions</a>
            </div>
        </div>
    </div>
</footer>

<script src="<?= asset('js/global.js') ?>?v=<?= time() ?>"></script>
<script>
    window.CONTACT_HANDLER = "<?= url('handlers/contact-handler.php') ?>";
    window.RECAPTCHA_SITE_KEY = "<?= defined('RECAPTCHA_SITE_KEY') ? RECAPTCHA_SITE_KEY : '' ?>";
</script>
<script src="https://www.google.com/recaptcha/api.js?render=<?= defined('RECAPTCHA_SITE_KEY') ? RECAPTCHA_SITE_KEY : '' ?>"></script>
<script src="<?= asset('js/form-handler.js') ?>?v=<?= time() ?>"></script>

<?php
if (isset($extraJS)) {
    if (is_array($extraJS)) {
        foreach ($extraJS as $js) {
            echo '<script src="' . $js . '"></script>' . "\n";
        }
    } else {
        echo '<script src="' . $extraJS . '"></script>' . "\n";
    }
}
?>