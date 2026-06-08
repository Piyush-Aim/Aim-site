document.addEventListener('DOMContentLoaded', () => {
    // Scroll Progress for Conduit
    const conduitLine = document.getElementById('conduitLine');
    const nodes = document.querySelectorAll('.reveal-node');
    const steps = document.querySelectorAll('.conduit-step');

    window.addEventListener('scroll', () => {
        const container = document.querySelector('.conduit-timeline-container');
        if (!container || !conduitLine) return;

        const rect = container.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        const activePoint = windowHeight / 1.5;
        let progress = (activePoint - rect.top) / rect.height;
        progress = Math.max(0, Math.min(1, progress));
        conduitLine.style.height = (progress * 100) + '%';

        // Sync node activation with conduit progress
        steps.forEach(step => {
            const node = step.querySelector('.reveal-node');
            if (node) {
                const nodeRect = node.getBoundingClientRect();
                // Activate exactly when the conduit line (ending at activePoint) touches the node
                if (nodeRect.top <= activePoint) {
                    node.classList.add('active');
                } else {
                    node.classList.remove('active');
                }
            }
        });
    });

    // Intersection Observer for basic visibility (fading in)
    const observerOptions = {
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px"
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // Observe all fade elements
    document.querySelectorAll('.section-fade').forEach(el => observer.observe(el));
    // Observe .conduit-step
    document.querySelectorAll('.conduit-step').forEach(el => observer.observe(el));
});
