document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('.faq-toggle').forEach(btn => {
        btn.addEventListener('click', () => {
            const item = btn.parentElement;
            const content = item.querySelector('.faq-content');

            // Close all others
            document.querySelectorAll('.faq-item').forEach(other => {
                if (other !== item) {
                    other.querySelector('.faq-toggle').classList.remove('active');
                    const otherIcon = other.querySelector('.faq-icon');
                    if (otherIcon) {
                        otherIcon.classList.remove('fa-xmark');
                        otherIcon.classList.add('fa-plus');
                    }
                    const otherContent = other.querySelector('.faq-content');
                    if (otherContent) {
                        otherContent.style.maxHeight = null;
                    }
                }
            });

            // Toggle current
            btn.classList.toggle('active');
            const icon = btn.querySelector('.faq-icon');

            if (btn.classList.contains('active')) {
                content.style.maxHeight = content.scrollHeight + 'px';
                if (icon) {
                    icon.classList.remove('fa-plus');
                    icon.classList.add('fa-xmark');
                }
            } else {
                content.style.maxHeight = null;
                if (icon) {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-plus');
                }
            }
        });
    });
});
