<?php
require_once __DIR__ . '/config/config.php';
// contact.php
require_once __DIR__ . '/config/data.php';
$pageKey = 'contact';

$extraCSS = [
    asset('css/contact.css'),
];
$extraJS = [
    asset('js/contact.js')
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<?php include 'partials/head.php'; ?>

<body>
    <?php include 'partials/nav.php'; ?>

    <!-- HERO SECTION -->
    <section class="contact-hero">
        <div class="hero-bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
        </div>
        <div class="hero-bg-accent"></div>
        <div class="hero-orb-center"></div>
        <div class="grid-overlay"></div>

        <div class="container section-fade">
            <div class="hero-content">
                <?php render_breadcrumbs(['Home' => url(''), 'Contact Us' => '']); ?>
                <p class="tag tag-primary">Get In Touch</p>
                <h1>Let’s build something <span class="gradient-text">remarkable</span> together</h1>
                <p class="subtitle">Have a vision? We have the expertise. Reach out to start your digital transformation journey with our elite team of experts.</p>
            </div>
        </div>
    </section>

    <!-- CONTACT GRID SECTION -->
    <section class="contact-grid-sec">
        <div class="container section-fade">
            <div class="contact-wrapper glass-panel">
                <div class="contact-info-col">
                    <div class="info-header">
                        <h2>Contact Information</h2>
                        <p class="subtitle">Fill out the form and our team will get back to you within 24 hours.</p>
                    </div>

                    <div class="info-links">
                        <div class="info-item">
                            <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
                            <div class="info-text">
                                <span>Call us directly</span>
                                <a href="tel:<?= COMPANY_PHONE_LINK ?>"><?= COMPANY_PHONE ?></a>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
                            <div class="info-text">
                                <span>Email for inquiries</span>
                                <a href="mailto:<?= COMPANY_EMAIL ?>"><?= COMPANY_EMAIL ?></a>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="info-text">
                                <span>Our headquarters</span>
                                <p><?= COMPANY_ADDRESS ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="social-connect">
                        <h6>Follow our journey</h6>
                        <div class="social-links">
                            <a href="https://www.facebook.com/aiminfocorp" class="social-btn"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://in.linkedin.com/company/aim-infocorp-pvt-ltd-rajkot" class="social-btn"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>

                    <div class="info-decor-orb"></div>
                </div>

                <div class="contact-form-col section-fade">
                    <form id="contactForm" class="premium-form">
                        <input type="hidden" name="form_type" value="Contact Page">
                        <div class="form-grid">
                            <div class="form-group floating">
                                <input type="text" id="fname" name="fname" placeholder=" " required>
                                <label for="fname">First Name</label>
                                <div class="form-line"></div>
                            </div>
                            <div class="form-group floating">
                                <input type="text" id="lname" name="lname" placeholder=" " required>
                                <label for="lname">Last Name</label>
                                <div class="form-line"></div>
                            </div>
                            <div class="form-group floating">
                                <input type="tel" id="phone" name="phone" placeholder=" " required>
                                <label for="phone">Phone Number</label>
                                <div class="form-line"></div>
                            </div>
                            <div class="form-group floating">
                                <input type="email" id="email" name="email" placeholder=" " required>
                                <label for="email">Work Email</label>
                                <div class="form-line"></div>
                            </div>
                            <div class="form-group floating">
                                <input type="url" id="website" name="website" placeholder=" ">
                                <label for="website">Website URL</label>
                                <div class="form-line"></div>
                            </div>
                            <div class="form-group floating select-group">
                                <select id="budget" name="budget" required>
                                    <option value="" disabled selected hidden></option>
                                    <option value="$2,000–$5,000 a Month">$2,000–$5,000 a Month</option>
                                    <option value="$5,000–$10,000 a Month">$5,000–$10,000 a Month</option>
                                    <option value="$10,000–$20,000 a Month">$10,000–$20,000 a Month</option>
                                    <option value="North of $20,000 a Month">North of $20,000 a Month</option>
                                    <option value="I Am Not Sure, Let's Figure Out A Budget Together">I Am Not Sure, Let's Figure Out A Budget Together</option>
                                </select>
                                <label for="budget">Current Marketing Budget</label>
                                <div class="form-line"></div>
                                <i class="fa-solid fa-chevron-down select-icon"></i>
                            </div>
                            <div class="form-group floating full-width">
                                <textarea id="message" name="message" rows="4" placeholder=" " required></textarea>
                                <label for="message">Tell us how we can help?</label>
                                <div class="form-line"></div>
                            </div>
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary-lg">
                                Submit <i class="fa-solid fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- MAP SECTION -->
    <section class="map-sec section-fade">
        <div class="container">
            <div class="section-header">
                <p class="tag tag-primary">Global Presence</p>
                <h2>Visit our <span class="gradient-text">Headquarters</span></h2>
                <p class="subtitle">Located in the heart of Rajkot's business district, our office is where the magic happens.</p>
            </div>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d922.8874372749357!2d70.76886962876394!3d22.295039346355754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca2bc38af6bd%3A0xc94ec387cb639942!2sAlpha%20Plus!5e0!3m2!1sen!2sin!4v1775558523537!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <?php include 'partials/footer.php'; ?>
</body>

</html>