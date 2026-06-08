document.addEventListener('DOMContentLoaded', () => {
    // 1. STICKY SIDEBAR TOC HIGHLIGHTING
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.case-toc a');

    const highlightNav = () => {
        const scrollY = window.scrollY || window.pageYOffset;
        const triggerPoint = 160; // Slightly larger buffer for better UX
        let activeId = null;

        // Get all elements targeted by TOC links and their absolute tops
        const targets = Array.from(navLinks)
            .map(link => {
                const el = document.getElementById(link.getAttribute('href').substring(1));
                if (!el) return null;
                // Get absolute top position
                const rect = el.getBoundingClientRect();
                return {
                    id: el.getAttribute('id'),
                    top: rect.top + scrollY
                };
            })
            .filter(item => item !== null)
            .sort((a, b) => a.top - b.top); // Ensure they are processed in scroll order

        // Find the last element that has passed the trigger line
        targets.forEach(target => {
            if (scrollY >= target.top - triggerPoint) {
                activeId = target.id;
            }
        });

        // Update link classes
        navLinks.forEach(link => {
            link.classList.toggle('active', link.getAttribute('href') === '#' + activeId);
        });
    };

    window.addEventListener('scroll', highlightNav);
    highlightNav(); // Run on load

    // 2. SMOOTH SCROLL FOR TOC
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                const headerOffset = 100;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // 3. MOBILE TOC DRAWER TOGGLE
    const tocToggle = document.getElementById('tocToggle');
    const sidebar = document.querySelector('.case-sidebar');
    const overlay = document.querySelector('.sidebar-overlay');

    if (tocToggle && sidebar && overlay) {
        const toggleDrawer = () => {
            sidebar.classList.toggle('is-open');
            overlay.classList.toggle('is-active');
            document.body.style.overflow = sidebar.classList.contains('is-open') ? 'hidden' : '';
        };

        tocToggle.addEventListener('click', toggleDrawer);
        overlay.addEventListener('click', toggleDrawer);

        // Close drawer when clicking a link
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth <= 1024) {
                    toggleDrawer();
                }
            });
        });
    }
});

