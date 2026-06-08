document.addEventListener('DOMContentLoaded', () => {
    // Cyber-Glass Tabs Logic
    const tabs = document.querySelectorAll('.exp-tab');
    const panels = document.querySelectorAll('.expertise-panel');
    const indicator = document.querySelector('.tab-indicator');

    function updateIndicator(tab) {
        if (!indicator) return;
        const index = Array.from(tabs).indexOf(tab);
        indicator.style.transform = `translateX(${index * 100}%)`;
    }

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = tab.getAttribute('data-tab');

            // Remove active from all
            tabs.forEach(t => t.classList.remove('active'));
            panels.forEach(p => p.classList.remove('active'));

            // Add active to current
            tab.classList.add('active');
            document.querySelector(`.expertise-panel[data-panel="${target}"]`).classList.add('active');

            // Update indicator
            updateIndicator(tab);
        });
    });

    // Section Fade Observer (Animation)
    const fadeElements = document.querySelectorAll('.section-fade');
    const fadeObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    fadeElements.forEach(el => {
        fadeObserver.observe(el);
    });

    // Form Submission
    const form = document.getElementById('webdevLeadForm') || document.getElementById('localLeadForm');
    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const btn = form.querySelector('.wd-submit-btn');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending...';

            // Mock submission
            setTimeout(() => {
                form.innerHTML = '<div style="text-align:center; padding: 2.5rem 0;"><i class="fa-solid fa-circle-check" style="color:var(--primary); font-size:3.5rem; margin-bottom:1.5rem; display:block;"></i><h3 style="color:var(--white);">Success!</h3><p style="color:rgba(255,255,255,0.6); font-size:0.95rem;">Our lead engineer will contact you shortly.</p></div>';
            }, 1200);
        });
    }
});
