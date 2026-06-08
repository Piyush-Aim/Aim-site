document.addEventListener('DOMContentLoaded', () => {
  // Hero testimonial vertical carousel section
  const heroTestiTrack = document.getElementById('heroTestiTrack');
  const heroTestiWrapper = document.getElementById('heroTestiWrapper');

  if (heroTestiTrack && heroTestiWrapper) {
    const items = Array.from(heroTestiTrack.querySelectorAll('.testi-pill'));
    const trackWrapHeight = heroTestiWrapper.offsetHeight || 400;
    let currentIndex = Math.floor(items.length / 2);
    let itemHeight = 110;
    let startY = 0;
    let isDragging = false;
    let carouselInterval;
    let dragOffset = 0;

    function getTranslateY() {
      const activeItem = items[currentIndex];
      if (!activeItem) return 0;

      const itemHeightActual = activeItem.offsetHeight > 0 ? activeItem.offsetHeight : itemHeight;
      const centerOffset = activeItem.offsetTop + (itemHeightActual / 2);

      return (trackWrapHeight / 2) - centerOffset + dragOffset;
    }

    function updateCarousel(transition = true) {
      if (!items.length) return;
      const h = items[0].offsetHeight;
      if (h > 50) {
        itemHeight = h + 8; // Match CSS gap of 8px
      } else {
        itemHeight = 110; // Fallback
      }

      heroTestiTrack.style.transition = transition ? 'transform 0.5s cubic-bezier(0.25, 1, 0.5, 1)' : 'none';
      heroTestiTrack.style.transform = `translateY(${getTranslateY()}px)`;

      items.forEach((item, i) => {
        item.style.transform = '';
        if (i === currentIndex) {
          item.classList.add('is-active');
          item.style.opacity = '1';
        } else if (i === currentIndex - 1 || i === currentIndex + 1) {
          item.classList.remove('is-active');
          item.style.opacity = '0.7';
        } else {
          item.classList.remove('is-active');
          item.style.opacity = '0'; // Hide items outside the 3
        }
      });
    }

    function smoothDragUpdate() {
      if (!items.length) return;
      heroTestiTrack.style.transition = 'none';
      heroTestiTrack.style.transform = `translateY(${getTranslateY()}px)`;

      const centerView = trackWrapHeight / 2;
      items.forEach((item) => {
        const rect = item.getBoundingClientRect();
        const parentRect = heroTestiWrapper.getBoundingClientRect();
        const itemCenter = (rect.top - parentRect.top) + (rect.height / 2);

        const dist = Math.abs(centerView - itemCenter);
        const ratio = Math.max(0, 1 - (dist / (itemHeight * 1.5)));

        if (isDragging) {
          const scale = 0.85 + (0.15 * ratio);
          item.style.transform = `scale(${scale})`;

          if (dist > itemHeight * 1.2) {
            item.style.opacity = '0';
          } else {
            const opacity = 0.35 + (0.65 * ratio);
            item.style.opacity = opacity;
          }
          item.classList.remove('is-active');
        }
      });
    }

    function checkLoop() {
      const setSize = 5;
      if (currentIndex < setSize) {
        currentIndex += setSize * 2;
        updateCarousel(false);
      } else if (currentIndex >= items.length - setSize) {
        currentIndex -= setSize * 2;
        updateCarousel(false);
      }
    }

    function move(dir) {
      currentIndex += dir;
      dragOffset = 0;
      updateCarousel();
      setTimeout(checkLoop, 500);
    }

    function startAutoScroll() {
      clearInterval(carouselInterval);
      carouselInterval = setInterval(() => move(1), 2000);
    }

    setTimeout(() => {
      updateCarousel(false);
      startAutoScroll();
    }, 100);

    const handleStart = (y) => {
      isDragging = true;
      startY = y;
      dragOffset = 0;
      clearInterval(carouselInterval);
      heroTestiWrapper.classList.add('grabbing');
    };

    const handleMove = (y) => {
      if (!isDragging) return;
      dragOffset = y - startY;
      smoothDragUpdate();
    };

    const handleEnd = () => {
      if (!isDragging) return;
      isDragging = false;
      heroTestiWrapper.classList.remove('grabbing');
      const draggedItems = Math.round(dragOffset / itemHeight);
      if (draggedItems !== 0) currentIndex -= draggedItems;
      dragOffset = 0;
      updateCarousel();
      setTimeout(checkLoop, 50);
      startAutoScroll();
    };

    heroTestiWrapper.addEventListener('mousedown', (e) => handleStart(e.pageY));
    window.addEventListener('mousemove', (e) => handleMove(e.pageY));
    window.addEventListener('mouseup', handleEnd);
    heroTestiWrapper.addEventListener('touchstart', (e) => handleStart(e.touches[0].pageY), { passive: true });
    window.addEventListener('touchmove', (e) => {
      if (isDragging && e.cancelable) e.preventDefault();
      handleMove(e.touches[0].pageY);
    }, { passive: false });
    window.addEventListener('touchend', handleEnd);
  }

  // Reputation badges rotation logic
  const badges = document.querySelectorAll('.icon-grid-fancy .platform');
  const ratingTop = document.getElementById('ratingTop');
  const ratingBottom = document.getElementById('ratingBottom');
  const platformData = window.platformData || {};
  const allPlatformKeys = Object.keys(platformData);

  if (badges.length > 0 && allPlatformKeys.length > 0) {
    const platformsTop = allPlatformKeys.slice(0, 3);
    const platformsBottom = allPlatformKeys.slice(3, 6);
    let ratingIndex = 0;
    let iconIndex = 0;

    function updateCard(container, data) {
      if (!container || !data) return;
      setTimeout(() => {
        const url = data.url && data.url !== '#' ? data.url : 'javascript:void(0)';
        const target = data.url && data.url !== '#' ? 'target="_blank"' : '';
        container.innerHTML = `
          <a href="${url}" ${target} class="tp-link">
            <div class="tp-stars-row">
              <span class="tp-rating">${data.rating}</span>
              <div class="tp-icons">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              </div>
            </div>
            <div class="tp-logo-center"><img src="${data.logo}" alt="${data.name}"></div>
          </a>
        `;
        container.style.opacity = 1;
      }, 150);
    }

    function updateBadgeAnimation() {
      const topKey = platformsTop[ratingIndex];
      const bottomKey = platformsBottom[platformsBottom.length - 1 - ratingIndex];
      updateCard(ratingTop, platformData[topKey]);
      updateCard(ratingBottom, platformData[bottomKey]);
      ratingIndex = (ratingIndex + 1) % platformsTop.length;

      badges.forEach((el) => el.classList.remove('is-active'));
      const topBadgeItems = Array.from(badges).slice(0, 3);
      const bottomBadgeItems = Array.from(badges).slice(3, 6);
      const topB = topBadgeItems[iconIndex];
      const bottomB = bottomBadgeItems[bottomBadgeItems.length - 1 - iconIndex];
      if (topB) topB.classList.add('is-active');
      if (bottomB) bottomB.classList.add('is-active');
      iconIndex = (iconIndex + 1) % topBadgeItems.length;
    }

    updateBadgeAnimation();
    setInterval(updateBadgeAnimation, 2400); //control speed
  }
});

