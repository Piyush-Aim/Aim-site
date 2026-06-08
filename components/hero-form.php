<?php

/**
 * Reusable Hero Lead Form Component
 */

$formTitle = isset($formTitle) ? $formTitle : 'Get a Free Consultation';
$formSub = isset($formSub) ? $formSub : 'Discuss your project with our technical experts.';
$formId = isset($formId) ? $formId : 'heroLeadForm';
?>
<div class="webdev-hero-form-wrapper section-fade">
    <div class="webdev-glass-form">
        <h3><?= htmlspecialchars($formTitle) ?></h3>
        <p class="form-sub"><?= htmlspecialchars($formSub) ?></p>
        <form id="<?= htmlspecialchars($formId) ?>" class="premium-form webdev-form" action="#" method="POST">
            <input type="hidden" name="form_type" value="Hero Form">
            <div class="form-grid webdev-form-grid">
                <div class="form-group floating">
                    <input type="text" id="<?= htmlspecialchars($formId) ?>_fname" name="fname" placeholder=" " required>
                    <label for="<?= htmlspecialchars($formId) ?>_fname">First Name</label>
                    <div class="form-line"></div>
                </div>
                <div class="form-group floating">
                    <input type="text" id="<?= htmlspecialchars($formId) ?>_lname" name="lname" placeholder=" " required>
                    <label for="<?= htmlspecialchars($formId) ?>_lname">Last Name</label>
                    <div class="form-line"></div>
                </div>
                <div class="form-group floating">
                    <input type="email" id="<?= htmlspecialchars($formId) ?>_email" name="email" placeholder=" " required>
                    <label for="<?= htmlspecialchars($formId) ?>_email">Work Email</label>
                    <div class="form-line"></div>
                </div>
                <div class="form-group floating">
                    <input type="tel" id="<?= htmlspecialchars($formId) ?>_phone" name="phone" placeholder=" " required>
                    <label for="<?= htmlspecialchars($formId) ?>_phone">Phone Number</label>
                    <div class="form-line"></div>
                </div>
                <div class="form-group floating select-group full-width">
                    <select id="<?= htmlspecialchars($formId) ?>_budget" name="budget" required>
                        <option value="" disabled selected hidden></option>
                        <option value="$2,000–$5,000 a Month">$2,000–$5,000 a Month</option>
                        <option value="$5,000–$10,000 a Month">$5,000–$10,000 a Month</option>
                        <option value="$10,000–$20,000 a Month">$10,000–$20,000 a Month</option>
                        <option value="North of $20,000 a Month">North of $20,000 a Month</option>
                        <option value="I Am Not Sure, Let's Figure Out A Budget Together">I Am Not Sure, Let's Figure Out A Budget Together</option>
                    </select>
                    <label for="<?= htmlspecialchars($formId) ?>_budget">Current Marketing Budget</label>
                    <div class="form-line"></div>
                    <i class="fa-solid fa-chevron-down select-icon"></i>
                </div>
                <div class="form-group floating full-width">
                    <textarea id="<?= htmlspecialchars($formId) ?>_message" name="message" rows="3" placeholder=" " required></textarea>
                    <label for="<?= htmlspecialchars($formId) ?>_message">Tell us about your project goals</label>
                    <div class="form-line"></div>
                </div>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-primary btn-primary-lg wd-submit-btn">
                    Get Free Consultation <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
        </form>
    </div>
</div>