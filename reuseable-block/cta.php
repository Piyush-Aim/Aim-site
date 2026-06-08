  <!-- 8. CTA -->
  <section id="cta" class="cta-section">
    <div class="container text-center max-w-[1024px]">
      <div class="cta-content">
        <h2 class="cta-title">Ready to Transform Your Digital Presence?</h2>
        <p class="cta-description">
          Let's discuss how we can help you achieve your business goals with cutting-edge technology and expert strategy
        </p>

        <!-- CTA Buttons -->
        <div class="cta-buttons">
          <a href="<?= url('contact') ?>" class="btn-white-solid btn">
            Start Your Project
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
          <a href="<?= url('contact') ?>" class="btn btn-outline-white">Schedule a Call</a>
        </div>

        <!-- Contact Options -->
        <div class="contact-grid">
          <div class="contact-card">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="2" y="4" width="20" height="16" rx="2"></rect>
              <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
            </svg>
            <h4 class="contact-card-title">Email Us</h4>
            <a href="mailto:<?= COMPANY_EMAIL ?>" class="contact-card-link"><?= COMPANY_EMAIL ?></a>
          </div>

          <div class="contact-card">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
              </path>
            </svg>
            <h4 class="contact-card-title">Call Us</h4>
            <a href="tel:<?= COMPANY_PHONE_LINK ?>" class="contact-card-link"><?= COMPANY_PHONE ?></a>
          </div>

          <div class="contact-card">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
            </svg>
            <h4 class="contact-card-title">Live Chat</h4>
            <button class="contact-card-link">Start a Conversation</button>
          </div>
        </div>
      </div>
    </div>
  </section>