document.addEventListener('DOMContentLoaded', () => {
    // Tab Switching Logic
    const tabButtons = document.querySelectorAll('.tech-tab-btn');
    const tabPanels = document.querySelectorAll('.tech-panel');
    const navIndicator = document.querySelector('.nav-indicator');

    function updateIndicator(btn) {
        if (!btn || !navIndicator) return;
        navIndicator.style.width = `${btn.offsetWidth}px`;
        navIndicator.style.left = `${btn.offsetLeft}px`;
    }

    // Initialize position
    const activeInitial = document.querySelector('.tech-tab-btn.active');
    if (activeInitial) {
        // Short timeout to ensure correct offset calculation after layout
        setTimeout(() => updateIndicator(activeInitial), 100);
    }

    tabButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const target = btn.getAttribute('data-target');

            // Reset buttons
            tabButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            updateIndicator(btn);

            // Reset panels
            tabPanels.forEach(p => {
                p.classList.remove('active');
                if (p.id === target) {
                    p.classList.add('active');
                }
            });
        });
    });

    // Update on resize
    window.addEventListener('resize', () => {
        const currentActive = document.querySelector('.tech-tab-btn.active');
        if (currentActive) updateIndicator(currentActive);
    });


    // Load More Logic - Updated to 6 at a time
    const loadMoreButtons = document.querySelectorAll('.btn-load-more');

    loadMoreButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const panelId = btn.getAttribute('data-target');
            const panel = document.getElementById(panelId);
            if (!panel) return;

            // Selection exactly 6 hidden cards
            const hiddenCards = Array.from(panel.querySelectorAll('.hidden-tech-card'));
            const cardsToReveal = hiddenCards.slice(0, 6);

            cardsToReveal.forEach((card, index) => {
                card.classList.remove('hidden-tech-card');
                card.classList.add('reveal-anim');
                // Stagger the animation slightly
                card.style.animationDelay = `${index * 80}ms`;
            });

            // Check if there are any hidden cards left in this panel
            const remainingHidden = panel.querySelectorAll('.hidden-tech-card').length;

            if (remainingHidden === 0) {
                // Hide the Load More button after full reveal
                const btnWrapper = btn.parentElement;
                btnWrapper.style.transition = 'all 0.4s ease';
                btnWrapper.style.opacity = '0';
                btnWrapper.style.transform = 'translateY(10px)';

                setTimeout(() => {
                    btnWrapper.style.display = 'none';
                }, 400);
            }
        });
    });

    // Sticky Nav Shrink Logic
    const stickySentinel = document.querySelector('#tech-sticky-sentinel');
    const techNav = document.querySelector('.tech-tabs-nav');

    if (stickySentinel && techNav) {
        const stickyObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                // Determine stickiness based on vertical position
                // When sentinel is NOT intersecting and is above the threshold
                if (!entry.isIntersecting && entry.boundingClientRect.top < 90) {
                    techNav.classList.add('is-shrunk');
                } else {
                    techNav.classList.remove('is-shrunk');
                }

                // Recalculate indicator position after the shrink/expand transition completes
                setTimeout(() => {
                    const currentActive = document.querySelector('.tech-tab-btn.active');
                    if (currentActive) updateIndicator(currentActive);
                }, 450); // Slightly longer than CSS transition (0.4s)
            });
        }, {
            // Threshold matches the 'top: 90px' sticky offset
            rootMargin: '-90px 0px 0px 0px',
            threshold: 0
        });

        stickyObserver.observe(stickySentinel);
    }
});