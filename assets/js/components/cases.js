/**
 * Portfolio Case Studies Slider Component Logic
 * Used on the cases section of the homepage.
 */
document.addEventListener('DOMContentLoaded', () => {
    const psSlider = document.querySelector('.ps-slider');
    const psSlides = document.querySelectorAll('.ps-slide');
    const psPrev = document.getElementById('psPrev');
    const psNext = document.getElementById('psNext');
    const currIndexEl = document.getElementById('currIndex');

    if (psSlider && psSlides.length > 0) {
        let currentSlide = 0;
        const totalSlides = psSlides.length;
        let autoSlide;

        function updateSlider() {
            psSlides.forEach((slide, idx) => {
                slide.classList.toggle('active', idx === currentSlide);
            });

            if (currIndexEl) {
                currIndexEl.textContent = (currentSlide + 1).toString().padStart(2, '0');
            }
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlider();
        }

        function startAutoSlide() {
            autoSlide = setInterval(nextSlide, 3000);
        }

        function stopAutoSlide() {
            clearInterval(autoSlide);
        }

        if (psNext) {
            psNext.addEventListener('click', () => {
                nextSlide();
                stopAutoSlide();
                startAutoSlide();
            });
        }

        if (psPrev) {
            psPrev.addEventListener('click', () => {
                prevSlide();
                stopAutoSlide();
                startAutoSlide();
            });
        }

        updateSlider();
        startAutoSlide();
    }
});
