/**
 * VISHAL TOMAR — ADVOCATE, GUJARAT HIGH COURT
 * Interactive Script & Client Experience Engine
 */

document.addEventListener('DOMContentLoaded', () => {
  initDisclaimerModal();
  initHeaderScroll();
  initHeroCinematicSlider();
  initMobileNav();
  initFaqAccordions();
  initCategoryFilters();
  initLiveSearch();
  initContactForm();
  initScrollTop();
});

/* --- 01. BCI REGULATORY DISCLAIMER MODAL --- */
function initDisclaimerModal() {
  const modal = document.getElementById('bciDisclaimerModal');
  if (!modal) return;

  const agreeBtn = document.getElementById('bciAgreeBtn');
  const exitBtn = document.getElementById('bciExitBtn');
  const triggerLinks = document.querySelectorAll('[data-open-disclaimer]');

  // Check if previously accepted in this browser session/storage
  const hasAccepted = localStorage.getItem('vt_legal_disclaimer_accepted');

  // Only auto-show if not on standalone disclaimer page and not already accepted
  const isDisclaimerPage = window.location.pathname.includes('disclaimer.html');
  if (!hasAccepted && !isDisclaimerPage) {
    setTimeout(() => {
      modal.classList.add('active');
      document.body.style.overflow = 'hidden';
    }, 350);
  }

  // Agree & Proceed action
  if (agreeBtn) {
    agreeBtn.addEventListener('click', () => {
      localStorage.setItem('vt_legal_disclaimer_accepted', 'true');
      modal.classList.remove('active');
      document.body.style.overflow = '';
      showToast('Disclaimer accepted. Welcome to the Chambers of Vishal Tomar.');
    });
  }

  // Exit action
  if (exitBtn) {
    exitBtn.addEventListener('click', () => {
      if (confirm('You are choosing to exit this informational website. Redirect to Bar Council of India official portal?')) {
        window.location.href = 'https://www.barcouncilofindia.org/';
      }
    });
  }

  // Manual triggers from header / footer
  triggerLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      modal.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
  });

  // Close on outside click if already accepted
  modal.addEventListener('click', (e) => {
    if (e.target === modal && localStorage.getItem('vt_legal_disclaimer_accepted')) {
      modal.classList.remove('active');
      document.body.style.overflow = '';
    }
  });
}

/* --- 02. STICKY HEADER & SCROLL BEHAVIOR --- */
function initHeaderScroll() {
  const header = document.querySelector('.site-header');
  if (!header) return;

  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }, { passive: true });
}

/* --- 02B. FULL-BLEED CINEMATIC HERO SLIDER & CHARACTER ANIMATION --- */
function initHeroCinematicSlider() {
  const slider = document.getElementById('heroSlider');
  if (!slider) return;

  const slides = slider.querySelectorAll('.hero-slide');
  const contentSlides = slider.querySelectorAll('.hero-content-slide');
  const dots = slider.querySelectorAll('.slider-dot');
  const prevBtn = document.getElementById('heroPrevBtn');
  const nextBtn = document.getElementById('heroNextBtn');
  const scrollIndicator = slider.querySelector('.hero-scroll-indicator');

  if (!slides.length) return;

  let currentIndex = 0;
  const totalSlides = slides.length;
  const slideDuration = 6500; // 6.5s per slide
  let slideTimer = null;
  let isHovered = false;

  // Split headline text into individual characters for ink writing / typewriter animation
  function prepareHeadlineAnimations() {
    contentSlides.forEach(slide => {
      const headline = slide.querySelector('.hero-headline');
      if (!headline || headline.dataset.prepared) return;
      headline.dataset.prepared = 'true';

      const primary = headline.querySelector('.headline-primary');
      const gold = headline.querySelector('.headline-gold');

      let charCounter = 0;

      if (primary) {
        charCounter = wrapTextInSpans(primary, charCounter);
      }
      if (gold) {
        charCounter = wrapTextInSpans(gold, charCounter);
      }
    });
  }

  function wrapTextInSpans(element, startOffset) {
    const rawHTML = element.innerHTML;
    // Split preserving line breaks (<br>)
    const lineParts = rawHTML.split(/(<br\s*\/?>)/gi);
    let offset = startOffset;
    let newHTML = '';

    lineParts.forEach(linePart => {
      if (linePart.toLowerCase().startsWith('<br')) {
        newHTML += linePart;
      } else {
        // Split by spaces into individual words
        const words = linePart.split(' ');
        words.forEach((word, wIdx) => {
          if (wIdx > 0) {
            newHTML += ' ';
            offset++;
          }
          if (word.length > 0) {
            newHTML += '<span class="char-word">';
            for (let i = 0; i < word.length; i++) {
              const char = word[i];
              newHTML += `<span class="char-span" style="--char-idx: ${offset}">${char}</span>`;
              offset++;
            }
            newHTML += '</span>';
          }
        });
      }
    });

    element.innerHTML = newHTML;
    return offset;
  }

  prepareHeadlineAnimations();

  function restartSlideAnimations(contentSlide) {
    if (!contentSlide) return;

    // Restart character animations
    const charSpans = contentSlide.querySelectorAll('.char-span');
    charSpans.forEach(span => {
      span.style.animation = 'none';
      span.offsetHeight; // Trigger browser reflow
      span.style.animation = '';
    });

    // Restart eyebrow line
    const line = contentSlide.querySelector('.hero-eyebrow-line');
    if (line) {
      line.style.animation = 'none';
      line.offsetHeight;
      line.style.animation = '';
    }

    // Restart subtext, CTA, and badge
    const subtext = contentSlide.querySelector('.hero-subtext');
    if (subtext) {
      subtext.style.animation = 'none';
      subtext.offsetHeight;
      subtext.style.animation = '';
    }

    const cta = contentSlide.querySelector('.hero-cta-group');
    if (cta) {
      cta.style.animation = 'none';
      cta.offsetHeight;
      cta.style.animation = '';
    }

    const badge = contentSlide.querySelector('.hero-tag-badge');
    if (badge) {
      badge.style.animation = 'none';
      badge.offsetHeight;
      badge.style.animation = '';
    }
  }

  function goToSlide(newIndex) {
    if (newIndex === currentIndex && slides[currentIndex].classList.contains('active')) {
      return;
    }

    // Deactivate current slide
    slides[currentIndex].classList.remove('active');
    contentSlides[currentIndex].classList.remove('active');
    dots[currentIndex].classList.remove('active');

    // Reset old dot progress
    const oldProgress = dots[currentIndex].querySelector('.dot-progress');
    if (oldProgress) {
      oldProgress.style.animation = 'none';
      oldProgress.offsetHeight;
      oldProgress.style.animation = '';
    }

    // Calculate new index
    currentIndex = (newIndex + totalSlides) % totalSlides;

    // Activate new slide
    slides[currentIndex].classList.add('active');
    contentSlides[currentIndex].classList.add('active');
    dots[currentIndex].classList.add('active');

    // Trigger writing character animation on the newly active slide
    restartSlideAnimations(contentSlides[currentIndex]);

    // Restart timer
    resetTimer();
  }

  function nextSlide() {
    goToSlide(currentIndex + 1);
  }

  function prevSlide() {
    goToSlide(currentIndex - 1);
  }

  function resetTimer() {
    if (slideTimer) clearInterval(slideTimer);
    if (!isHovered) {
      slideTimer = setInterval(nextSlide, slideDuration);
    }
  }

  // Click listeners for arrows
  if (nextBtn) {
    nextBtn.addEventListener('click', (e) => {
      e.preventDefault();
      nextSlide();
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', (e) => {
      e.preventDefault();
      prevSlide();
    });
  }

  // Click listeners for pagination dots
  dots.forEach(dot => {
    dot.addEventListener('click', (e) => {
      e.preventDefault();
      const targetIdx = parseInt(dot.getAttribute('data-index'), 10);
      goToSlide(targetIdx);
    });
  });

  // Pause on hover
  slider.addEventListener('mouseenter', () => {
    isHovered = true;
    if (slideTimer) clearInterval(slideTimer);
  });

  slider.addEventListener('mouseleave', () => {
    isHovered = false;
    resetTimer();
  });

  // Keyboard navigation
  document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowRight') nextSlide();
    if (e.key === 'ArrowLeft') prevSlide();
  });

  // Touch Swipe for mobile/tablets
  let touchStartX = 0;
  let touchEndX = 0;

  slider.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
  }, { passive: true });

  slider.addEventListener('touchend', (e) => {
    touchEndX = e.changedTouches[0].screenX;
    if (touchEndX < touchStartX - 45) {
      nextSlide(); // Swiped left -> next slide
    } else if (touchEndX > touchStartX + 45) {
      prevSlide(); // Swiped right -> prev slide
    }
  }, { passive: true });

  // Scroll Down Indicator Smooth Scroll
  if (scrollIndicator) {
    scrollIndicator.addEventListener('click', (e) => {
      e.preventDefault();
      const targetSection = document.getElementById('credentialsStrip');
      if (targetSection) {
        targetSection.scrollIntoView({ behavior: 'smooth' });
      }
    });
  }

  // Kick off initial slide animations and auto-play
  restartSlideAnimations(contentSlides[0]);
  resetTimer();
}

/* --- 03. MOBILE NAVIGATION DRAWER --- */
function initMobileNav() {
  const toggleBtn = document.querySelector('.mobile-nav-toggle');
  const drawer = document.querySelector('.mobile-drawer');
  const overlay = document.querySelector('.mobile-drawer-overlay');

  if (!toggleBtn || !drawer || !overlay) return;

  function toggleMenu() {
    const isOpen = drawer.classList.contains('open');
    if (isOpen) {
      closeMenu();
    } else {
      openMenu();
    }
  }

  function openMenu() {
    toggleBtn.classList.add('open');
    drawer.classList.add('open');
    overlay.classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function closeMenu() {
    toggleBtn.classList.remove('open');
    drawer.classList.remove('open');
    overlay.classList.remove('open');
    document.body.style.overflow = '';
  }

  toggleBtn.addEventListener('click', toggleMenu);
  overlay.addEventListener('click', closeMenu);

  // Close when pressing Escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && drawer.classList.contains('open')) {
      closeMenu();
    }
  });

  // Close on inner mobile link click
  const drawerLinks = drawer.querySelectorAll('a');
  drawerLinks.forEach(link => {
    link.addEventListener('click', closeMenu);
  });
}

/* --- 04. FAQ ACCORDIONS --- */
function initFaqAccordions() {
  const faqItems = document.querySelectorAll('.faq-item');
  if (!faqItems.length) return;

  faqItems.forEach(item => {
    const header = item.querySelector('.faq-header');
    const body = item.querySelector('.faq-body');

    if (!header || !body) return;

    header.addEventListener('click', () => {
      const isActive = item.classList.contains('active');

      // Close other open siblings
      faqItems.forEach(other => {
        if (other !== item) {
          other.classList.remove('active');
          const otherBody = other.querySelector('.faq-body');
          if (otherBody) otherBody.style.maxHeight = null;
        }
      });

      if (!isActive) {
        item.classList.add('active');
        body.style.maxHeight = body.scrollHeight + 'px';
      } else {
        item.classList.remove('active');
        body.style.maxHeight = null;
      }
    });
  });
}

/* --- 05. CATEGORY FILTER (FOR PRACTICE & SECTORS) --- */
function initCategoryFilters() {
  const filterButtons = document.querySelectorAll('[data-filter-target]');
  if (!filterButtons.length) return;

  filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const targetCategory = btn.getAttribute('data-filter-target');

      // Update active button state
      filterButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      // Filter target items
      const filterableItems = document.querySelectorAll('[data-category]');
      filterableItems.forEach(item => {
        const itemCategories = item.getAttribute('data-category').split(' ');
        if (targetCategory === 'all' || itemCategories.includes(targetCategory)) {
          item.style.display = '';
          item.style.opacity = '1';
        } else {
          item.style.display = 'none';
          item.style.opacity = '0';
        }
      });
    });
  });
}

/* --- 06. REAL-TIME SEARCH (FOR INSIGHTS / BLOG) --- */
function initLiveSearch() {
  const searchInput = document.getElementById('articleSearchInput');
  const articlesList = document.querySelectorAll('[data-search-content]');
  const emptyMessage = document.getElementById('searchEmptyMessage');

  if (!searchInput || !articlesList.length) return;

  searchInput.addEventListener('input', (e) => {
    const query = e.target.value.toLowerCase().trim();
    let visibleCount = 0;

    articlesList.forEach(article => {
      const content = article.getAttribute('data-search-content').toLowerCase();
      if (content.includes(query)) {
        article.style.display = '';
        visibleCount++;
      } else {
        article.style.display = 'none';
      }
    });

    if (emptyMessage) {
      emptyMessage.style.display = visibleCount === 0 ? 'block' : 'none';
    }
  });
}

/* --- 07. CONTACT & CONSULTATION FORM VALIDATION --- */
function initContactForm() {
  const form = document.getElementById('consultationForm');
  if (!form) return;

  form.addEventListener('submit', (e) => {
    e.preventDefault();

    // Basic validation
    const name = form.querySelector('[name="name"]');
    const email = form.querySelector('[name="email"]');
    const phone = form.querySelector('[name="phone"]');
    const practice = form.querySelector('[name="practice_area"]');
    const message = form.querySelector('[name="message"]');
    const consent = form.querySelector('[name="consent"]');

    if (!name.value.trim()) {
      showToast('Please enter your full name.', 'error');
      name.focus();
      return;
    }

    if (!email.value.trim() || !email.value.includes('@')) {
      showToast('Please enter a valid business or personal email address.', 'error');
      email.focus();
      return;
    }

    if (!phone.value.trim() || phone.value.length < 8) {
      showToast('Please provide a contact phone number.', 'error');
      phone.focus();
      return;
    }

    if (consent && !consent.checked) {
      showToast('Please review and check the confidentiality acknowledgement.', 'error');
      consent.focus();
      return;
    }

    // Success Simulation
    const referenceId = 'VT-' + Math.floor(100000 + Math.random() * 900000);
    showConsultationConfirmationModal(name.value, referenceId);
    form.reset();
  });
}

function showConsultationConfirmationModal(name, refId) {
  // Create modal container
  const modal = document.createElement('div');
  modal.className = 'bci-modal-overlay active';
  modal.innerHTML = `
    <div class="bci-modal-card" style="max-width: 600px;">
      <div class="bci-modal-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <polyline points="20 6 9 17 4 12"></polyline>
        </svg>
      </div>
      <div class="bci-modal-subtitle">CHAMBERS OF VISHAL TOMAR</div>
      <h3 class="bci-modal-title" style="font-size: 1.8rem;">Enquiry Transmitted</h3>
      <p style="color: var(--color-gold-champagne); font-style: italic; margin-bottom: 1.5rem;">
        Reference: #${refId}
      </p>
      <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(197,161,91,0.25); padding: 1.25rem; text-align: left; margin-bottom: 1.75rem; font-size: 0.9rem; color: var(--color-text-light-muted); line-height: 1.6;">
        <p style="margin-bottom: 0.5rem;"><strong style="color: var(--color-text-light);">Thank you, ${name}.</strong></p>
        <p style="margin-bottom: 0;">This prototype demonstrates the frontend consultation transmission flow. Under Bar Council of India guidelines, all matter details are kept strictly privileged upon formal retainer.</p>
      </div>
      <button class="btn btn-gold" id="closeConfirmationBtn" style="width: 100%;">RETURN TO CHAMBERS</button>
    </div>
  `;

  document.body.appendChild(modal);
  document.body.style.overflow = 'hidden';

  const closeBtn = modal.querySelector('#closeConfirmationBtn');
  closeBtn.addEventListener('click', () => {
    modal.remove();
    document.body.style.overflow = '';
  });
}

/* --- 08. SCROLL TO TOP --- */
function initScrollTop() {
  const btn = document.getElementById('scrollTopBtn');
  if (!btn) return;

  window.addEventListener('scroll', () => {
    if (window.scrollY > 400) {
      btn.classList.add('visible');
    } else {
      btn.classList.remove('visible');
    }
  }, { passive: true });

  btn.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
}

/* --- 09. TOAST NOTIFICATION UTILITY --- */
function showToast(message, type = 'info') {
  let toast = document.querySelector('.toast-notice');
  if (!toast) {
    toast = document.createElement('div');
    toast.className = 'toast-notice';
    document.body.appendChild(toast);
  }

  toast.innerHTML = `
    <span style="color: var(--color-gold-antique); font-size: 1.2rem;">${type === 'error' ? '⚠' : '✦'}</span>
    <span>${message}</span>
  `;

  toast.classList.add('show');
  setTimeout(() => {
    toast.classList.remove('show');
  }, 4000);
}
