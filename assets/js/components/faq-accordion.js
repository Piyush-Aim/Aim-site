document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('.faq-toggle').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation(); // Support nested clicks
            const item = btn.parentElement;
            const content = btn.nextElementSibling;
            const parentContainer = item.parentElement;

            // Close siblings only
            if (parentContainer) {
                Array.from(parentContainer.children).forEach(other => {
                    if (other.classList.contains('faq-item') && other !== item) {
                        const otherBtn = other.querySelector('.faq-toggle');
                        const otherContent = otherBtn ? otherBtn.nextElementSibling : null;
                        
                        if (otherBtn && otherBtn.classList.contains('active')) {
                            otherBtn.classList.remove('active');
                            const otherIcon = otherBtn.querySelector('.faq-icon');
                            if (otherIcon) {
                                otherIcon.classList.remove('fa-xmark');
                                otherIcon.classList.add('fa-plus');
                            }
                            if (otherContent) {
                                if (otherContent.style.maxHeight === 'none') {
                                    otherContent.style.maxHeight = otherContent.scrollHeight + 'px';
                                    void otherContent.offsetWidth; // Force reflow
                                }
                                setTimeout(() => {
                                    otherContent.style.maxHeight = null;
                                }, 10);
                            }
                        }
                    }
                });
            }

            // Toggle current
            btn.classList.toggle('active');
            const icon = btn.querySelector('.faq-icon');

            if (btn.classList.contains('active')) {
                content.style.maxHeight = content.scrollHeight + 'px';
                // Remove fixed max-height so nested accordions can expand
                setTimeout(() => {
                    if (btn.classList.contains('active')) {
                        content.style.maxHeight = 'none';
                    }
                }, 350);
                
                if (icon) {
                    icon.classList.remove('fa-plus');
                    icon.classList.add('fa-xmark');
                }
            } else {
                if (content.style.maxHeight === 'none') {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    void content.offsetWidth; // Force reflow
                }
                setTimeout(() => {
                    content.style.maxHeight = null;
                }, 10);
                
                if (icon) {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-plus');
                }
            }
        });
    });
});
