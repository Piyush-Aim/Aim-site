/**
 * @file portfolio.js
 * @description Core interactive logic for the Portfolio page's project showcase and trust counters.
 */

document.addEventListener('DOMContentLoaded', () => {
  initPortfolioShowcase();
  initTrustCounters();
  initPortfolioGrid();
});

/**
 * Portfolio Grid Filtering Logic
 */
function initPortfolioGrid() {
  const filterButtons = document.querySelectorAll('.filter-btn');
  const projectCards = document.querySelectorAll('.project-card');

  if (filterButtons.length > 0 && projectCards.length > 0) {
    filterButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        const filter = btn.getAttribute('data-filter');

        // Update active state
        filterButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        // Filter cards with animations
        projectCards.forEach((card) => {
          const categories = card.getAttribute('data-category').split(' ');
          const isVisible = filter === 'all' || categories.includes(filter);

          if (isVisible) {
            card.classList.remove('hidden');
            // Quick reset for animation
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px) scale(0.98)';
          } else {
            card.classList.add('hidden');
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px) scale(0.95)';
          }
        });

        // Staggered reveal for visible cards
        const activeCards = document.querySelectorAll('.project-card:not(.hidden)');
        activeCards.forEach((card, index) => {
          setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0) scale(1)';
          }, 40 * index);
        });
      });
    });
  }
}

/**
 * Interactive Showcase Logic
 */
function initPortfolioShowcase() {
  const showcase = document.querySelector('.pshowcase');
  if (!showcase) return;

  const items = document.querySelectorAll('.pshow-item');
  const panels = document.querySelectorAll('.pshow-panel');
  const progressBarTotal = document.querySelectorAll('.pshow-progress-bar');
  const prevBtn = document.getElementById('pshowPrev');
  const nextBtn = document.getElementById('pshowNext');
  const currentNum = document.getElementById('pshowCurrent');

  if (!items.length) return;

  let activeIndex = 0;
  let timer = null;
  const duration = 6000; // 6 seconds per project
  let progressStart = Date.now();

  function updateShowcase(index) {
    if (index === activeIndex && timer) return;

    // Reset UI state
    items.forEach(item => item.classList.remove('is-active'));
    panels.forEach(panel => panel.classList.remove('is-active'));
    progressBarTotal.forEach(bar => (bar.style.width = '0%'));

    // Update active index
    activeIndex = (index + items.length) % items.length;

    // Activate new project
    items[activeIndex].classList.add('is-active');
    panels[activeIndex].classList.add('is-active');

    // Update Counter (01, 02, etc.)
    if (currentNum) {
      currentNum.textContent = String(activeIndex + 1).padStart(2, '0');
    }

    // Reset progress tracking
    progressStart = Date.now();
    startTimer();
  }

  function startTimer() {
    if (timer) clearInterval(timer);

    timer = setInterval(() => {
      const elapsed = Date.now() - progressStart;
      const percent = Math.min((elapsed / duration) * 100, 100);

      const activeBar = items[activeIndex].querySelector('.pshow-progress-bar');
      if (activeBar) {
        activeBar.style.width = percent + '%';
      }

      if (percent >= 100) {
        updateShowcase(activeIndex + 1);
      }
    }, 50);
  }

  // Click on list items
  items.forEach((item, idx) => {
    item.addEventListener('click', () => updateShowcase(idx));
  });

  // Nav buttons
  if (prevBtn) {
    prevBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      updateShowcase(activeIndex - 1);
    });
  }
  if (nextBtn) {
    nextBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      updateShowcase(activeIndex + 1);
    });
  }

  // Initialize first item
  updateShowcase(0);
}

/**
 * Count-up Animation for Hero Trust Row
 */
function initTrustCounters() {
  const io = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const target = +el.dataset.target;
        let current = 0;
        const duration = 2000;
        const startTime = performance.now();

        function animate(currentTime) {
          const elapsed = currentTime - startTime;
          const progress = Math.min(elapsed / duration, 1);

          current = Math.floor(progress * target);
          el.textContent = current;

          if (progress < 1) {
            requestAnimationFrame(animate);
          } else {
            el.textContent = target;
          }
        }

        requestAnimationFrame(animate);
        io.unobserve(el);
      }
    });
  }, { threshold: 0.5 });

  document.querySelectorAll('.trust-num').forEach(num => io.observe(num));
}
