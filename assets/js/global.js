// Global site behavior - loaded on every page

// Includes navigation toggle, sticky navbar, scroll-to-top button, and fade-in animations.
document.addEventListener('DOMContentLoaded', () => {
  // Mobile menu toggle
  const hamburger = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobileMenu');
  const mobileOverlay = document.getElementById('mobileOverlay');
  const mobileClose = document.getElementById('mobileClose');

  const toggleMenu = (show) => {
    const shouldOpen = show !== undefined ? show : !mobileMenu.classList.contains('open');
    
    if (shouldOpen) {
      hamburger.classList.add('open');
      mobileMenu.classList.add('open');
      mobileOverlay.classList.add('active');
      document.body.classList.add('no-scroll');
    } else {
      hamburger.classList.remove('open');
      mobileMenu.classList.remove('open');
      mobileOverlay.classList.remove('active');
      document.body.classList.remove('no-scroll');
    }
  };

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', () => toggleMenu());
    if (mobileClose) mobileClose.addEventListener('click', () => toggleMenu(false));
    if (mobileOverlay) mobileOverlay.addEventListener('click', () => toggleMenu(false));

    // Mobile dropdown toggle logic (Top level like Services, Our Work)
    mobileMenu.querySelectorAll('.mobile-dropdown-toggle').forEach((toggle) => {
      toggle.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        const parent = toggle.closest('.mobile-dropdown');
        parent.classList.toggle('open');
      });
    });

    // Nested category dropdown toggle logic
    mobileMenu.querySelectorAll('.mobile-category-toggle').forEach((toggle) => {
      toggle.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        const wrap = toggle.closest('.mobile-category-wrap');
        const isOpen = wrap.classList.contains('open');

        // Close other categories (optional accordion behavior)
        const parentContent = wrap.closest('.mobile-dropdown-content');
        if (parentContent) {
          parentContent.querySelectorAll('.mobile-category-wrap').forEach((w) => w.classList.remove('open'));
        }

        // Toggle current category
        if (!isOpen) {
          wrap.classList.add('open');
        }
      });
    });

    mobileMenu.querySelectorAll('a').forEach((a) => {
      a.addEventListener('click', () => {
        // Only close menu if it's a direct link, not a dropdown or category toggle
        if (!a.classList.contains('mobile-dropdown-toggle') && !a.closest('.mobile-category-toggle')) {
          toggleMenu(false);
        }
      });
    });
  }

  // Sticky navbar and scroll-to-top button
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', () => {
    if (navbar) navbar.classList.toggle('scrolled', window.scrollY > 60);
    const btn = document.getElementById('scrollTop');
    if (btn) btn.classList.toggle('show', window.scrollY > 400);
  }, { passive: true });

  // Fade-in reveal for page sections as they enter the viewport
  const io = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

  document.querySelectorAll('.section-fade').forEach((el) => io.observe(el));

});