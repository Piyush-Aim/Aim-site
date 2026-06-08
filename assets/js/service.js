// Sticky Nav Active State on Scroll
document.addEventListener("DOMContentLoaded", () => {
    const navLinks = Array.from(document.querySelectorAll('.s3-nav-link'));
    const stickyNav = document.querySelector('.s3-sticky-nav');
    const s3Section = document.querySelector('#services');
    if (!stickyNav || !s3Section || navLinks.length === 0) return;

    const getScrollSections = () => navLinks
        .map((link) => document.querySelector(link.getAttribute('href')))
        .filter(Boolean);

    const setActiveLink = (currentId) => {
        navLinks.forEach((link) => {
            const isActive = link.getAttribute('href') === `#${currentId}`;
            link.classList.toggle('active', isActive);
        });
    };

    const updateStickyNavState = () => {
        if (s3Section.getBoundingClientRect().top <= 80) {
            stickyNav.classList.add('floating');
        } else {
            stickyNav.classList.remove('floating');
        }
    };

    const updateActiveNavState = () => {
        const sections = getScrollSections();
        if (sections.length === 0) return;

        const stickyBottom = stickyNav.getBoundingClientRect().bottom;
        const activationLine = stickyBottom + 24;
        let currentId = sections[0].id;

        sections.forEach((section) => {
            const rect = section.getBoundingClientRect();
            if (rect.top <= activationLine && rect.bottom > activationLine) {
                currentId = section.id;
                return;
            }

            if (rect.top <= activationLine) {
                currentId = section.id;
            }
        });

        setActiveLink(currentId);
    };

    const onScroll = () => {
        updateStickyNavState();
        updateActiveNavState();
    };

    const scrollToTargetSection = (target) => {
        if (!target) return;
        const stickyBottom = stickyNav.getBoundingClientRect().bottom;
        const targetTop = window.scrollY + target.getBoundingClientRect().top;
        const offset = Math.max(stickyBottom + 16, 120);

        window.scrollTo({
            top: Math.max(targetTop - offset, 0),
            behavior: 'smooth'
        });
    };

    navLinks.forEach((link) => {
        link.addEventListener('click', (event) => {
            if (
                event.button !== 0 ||
                event.metaKey ||
                event.ctrlKey ||
                event.shiftKey ||
                event.altKey
            ) {
                return;
            }

            const target = document.querySelector(link.getAttribute('href'));
            if (!target) return;

            event.preventDefault();
            scrollToTargetSection(target);
            if (history.replaceState) {
                history.replaceState(null, '', link.getAttribute('href'));
            }
        });
    });

    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', updateActiveNavState);
    onScroll();
});

// Tab functionality for Tech Stack
function openTechTab(evt, tabId) {
    // Hide all panes
    const tabpanes = document.getElementsByClassName("s3-tab-pane");
    for (let i = 0; i < tabpanes.length; i++) {
        tabpanes[i].classList.remove("active");
    }

    // Remove active class from all buttons
    const tablinks = document.getElementsByClassName("s3-tab-btn");
    for (let i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
    }

    // Show current tab pane, activate current button
    document.getElementById(tabId).classList.add("active");
    evt.currentTarget.classList.add("active");

    // Slide the pill background
    const slider = document.getElementById('tech-tab-slider');
    if (slider) {
        slider.style.width = evt.currentTarget.offsetWidth + 'px';
        slider.style.height = evt.currentTarget.offsetHeight + 'px';
        slider.style.left = evt.currentTarget.offsetLeft + 'px';
        slider.style.top = evt.currentTarget.offsetTop + 'px';
    }
}

// Initialize Slider
function initTechTabSlider() {
    const activeBtn = document.querySelector('.s3-tech-tabs .s3-tab-btn.active');
    const slider = document.getElementById('tech-tab-slider');
    if (activeBtn && slider) {
        slider.style.width = activeBtn.offsetWidth + 'px';
        slider.style.height = activeBtn.offsetHeight + 'px';
        slider.style.left = activeBtn.offsetLeft + 'px';
        slider.style.top = activeBtn.offsetTop + 'px';
    }
}

window.addEventListener('resize', initTechTabSlider);
window.addEventListener('load', initTechTabSlider);
document.addEventListener('DOMContentLoaded', () => {
    initTechTabSlider();
    window.dispatchEvent(new Event('scroll'));
});
