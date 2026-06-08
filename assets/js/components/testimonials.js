/**
 * Testimonials Component Logic
 * Handles the infinite vertical rotation and dragging of the testimonial stack.
 */
document.addEventListener('DOMContentLoaded', () => {
    const testiStack = document.querySelector('.testi-stack');
    const testiFeatured = document.querySelector('.testi-featured');

    if (testiStack && testiFeatured) {
        let rotationInterval;
        const gap = 24;

        const updateFeatured = (card) => {
            const { name, role, stars, text, avatar, color } = card.dataset;
            testiFeatured.classList.add('swapping');

            setTimeout(() => {
                const textEl = testiFeatured.querySelector('.tf-text');
                const nameEl = testiFeatured.querySelector('.tf-name');
                const roleEl = testiFeatured.querySelector('.tf-role');
                const avEl = testiFeatured.querySelector('.tf-av');
                const starContainer = testiFeatured.querySelector('.tf-stars');

                if (textEl) textEl.textContent = text;
                if (nameEl) nameEl.textContent = name;
                if (roleEl) roleEl.textContent = role;
                if (avEl) {
                    avEl.textContent = avatar;
                    avEl.style.background = color || '';
                }

                if (starContainer) {
                    starContainer.innerHTML = '';
                    const starCount = parseInt(stars, 10) || 5;
                    for (let i = 0; i < 5; i++) {
                        const star = document.createElement('i');
                        star.className = i < starCount ? 'fa-solid fa-star' : 'fa-regular fa-star';
                        starContainer.appendChild(star);
                    }
                }
                testiFeatured.classList.remove('swapping');
            }, 400);
        };

        const initInfinite = () => {
            const cards = testiStack.querySelectorAll('.testi-card');
            if (cards.length < 2) return;
            const lastCard = cards[cards.length - 1];
            testiStack.prepend(lastCard);
            const cardHeight = lastCard.offsetHeight;
            testiStack.style.marginTop = `-${cardHeight + gap}px`;
        };
        initInfinite();

        const rotateTestimonials = () => {
            const cards = testiStack.querySelectorAll('.testi-card');
            const firstCard = cards[0];
            const secondCard = cards[1];
            const nextCard = cards[2];
            const moveDistance = secondCard.offsetHeight + gap;

            testiStack.style.transition = 'transform 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
            testiStack.style.transform = `translateY(-${moveDistance}px)`;

            setTimeout(() => {
                testiStack.style.transition = 'none';
                testiStack.appendChild(firstCard);
                testiStack.style.marginTop = `-${secondCard.offsetHeight + gap}px`;
                testiStack.style.transform = 'translateY(0)';
                updateFeatured(nextCard);
            }, 600);
        };

        const rotateTestimonialsReverse = () => {
            const cards = testiStack.querySelectorAll('.testi-card');
            const firstCard = cards[0];
            const moveDistance = firstCard.offsetHeight + gap;

            testiStack.style.transition = 'transform 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
            testiStack.style.transform = `translateY(${moveDistance}px)`;

            setTimeout(() => {
                testiStack.style.transition = 'none';
                const lastCard = testiStack.lastElementChild;
                testiStack.prepend(lastCard);
                testiStack.style.marginTop = `-${lastCard.offsetHeight + gap}px`;
                testiStack.style.transform = 'translateY(0)';
                updateFeatured(firstCard);
            }, 600);
        };

        const startRotation = () => {
            stopRotation();
            rotationInterval = setInterval(rotateTestimonials, 3500);
        };

        const stopRotation = () => {
            if (rotationInterval) clearInterval(rotationInterval);
        };

        let startY = 0;
        let isDragging = false;

        const handleDragStart = (e) => {
            isDragging = true;
            startY = e.pageY || (e.touches ? e.touches[0].pageY : 0);
            testiStack.classList.add('grabbing');
            stopRotation();
        };

        const handleDragMove = (e) => {
            if (!isDragging) return;
            const currentY = e.pageY || (e.touches ? e.touches[0].pageY : 0);
            const diff = currentY - startY;
            testiStack.style.transform = `translateY(${diff * 0.45}px)`;
        };

        const handleDragEnd = (e) => {
            if (!isDragging) return;
            isDragging = false;
            testiStack.classList.remove('grabbing');

            const endY = e.pageY || (e.changedTouches ? e.changedTouches[0].pageY : 0);
            const diff = startY - endY;

            if (Math.abs(diff) > 60) {
                if (diff > 0) rotateTestimonials();
                else rotateTestimonialsReverse();
            } else {
                testiStack.style.transition = 'transform 0.4s ease';
                testiStack.style.transform = 'translateY(0)';
            }
            startRotation();
        };

        testiStack.addEventListener('mousedown', handleDragStart);
        testiStack.addEventListener('touchstart', handleDragStart, { passive: true });
        window.addEventListener('mousemove', handleDragMove);
        testiStack.addEventListener('touchmove', handleDragMove, { passive: true });
        window.addEventListener('mouseup', handleDragEnd);
        testiStack.addEventListener('touchend', handleDragEnd);

        startRotation();

        testiStack.querySelectorAll('.testi-card').forEach((card) => {
            card.addEventListener('click', (e) => {
                if (Math.abs(startY - (e.pageY || 0)) < 10) {
                    updateFeatured(card);
                }
            });
        });
    }
});
