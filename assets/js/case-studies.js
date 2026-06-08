document.addEventListener('DOMContentLoaded', () => {
    // 2. PROJECT FILTERING LOGIC
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    if (filterButtons.length > 0) {
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.getAttribute('data-filter').toLowerCase();

                // Update active state
                filterButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                // If grid is empty, just stop here (active class still toggles)
                if (projectCards.length === 0) return;

                // Filter cards with animations
                projectCards.forEach((card) => {
                    const categoryRaw = card.getAttribute('data-category') || '';
                    const categories = categoryRaw.toLowerCase().split(' ');
                    const isVisible = filter === 'all' || categories.includes(filter);

                    if (isVisible) {
                        card.classList.remove('hidden');
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px) scale(0.98)';
                    } else {
                        card.classList.add('hidden');
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px) scale(0.95)';
                    }
                });

                // Staggered reveal
                const activeCards = document.querySelectorAll('.project-grid .project-card:not(.hidden)');
                activeCards.forEach((card, index) => {
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0) scale(1)';
                    }, 40 * index);
                });
            });
        });
    }

    // 3. SMOOTH SCROLL TO PROJECT LIST
    const exploreBtn = document.querySelector('.btn-primary-lg');
    if (exploreBtn) {
        exploreBtn.addEventListener('click', (e) => {
            const href = exploreBtn.getAttribute('href');
            if (href.startsWith('#')) {
                e.preventDefault();
                const targetId = href.substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    const headerOffset = 80;
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    }
});
