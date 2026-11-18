  const track = document.getElementById('carouselTrack');
  const container = document.getElementById('carouselContainer');
  const originalCards = Array.from(track.children);
  const group = document.createElement('div');
  group.className = 'carousel-group';
  group.setAttribute('role', 'list');
  originalCards.forEach(card => {
    card.setAttribute('role', 'listitem');
    group.appendChild(card);
  });

  const cloneGroup = group.cloneNode(true);
  cloneGroup.setAttribute('aria-hidden', 'true');
  cloneGroup.removeAttribute('role');
  track.replaceChildren(group, cloneGroup);

  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const speed = 36;
  let groupWidth = 0;
  let offset = 0;
  let lastFrameTime = 0;
  let isHovered = false;
  let isFocused = false;
  let isDragging = false;
  let dragStartX = 0;
  let dragStartOffset = 0;

  function applyOffset() {
    track.style.transform = `translate3d(${-offset}px, 0, 0)`;
  }

  function measureGroup() {
    groupWidth = group.getBoundingClientRect().width;
    if (groupWidth > 0) {
      offset %= groupWidth;
      applyOffset();
    }
  }

  function animate(time) {
    if (lastFrameTime && !reducedMotion && !isHovered && !isFocused && !isDragging && groupWidth > 0) {
      const elapsed = Math.min(time - lastFrameTime, 50);
      offset = (offset + elapsed * speed / 1000) % groupWidth;
      applyOffset();
    }
    lastFrameTime = time;
    requestAnimationFrame(animate);
  }

  container.addEventListener('pointerenter', () => { isHovered = true; });
  container.addEventListener('pointerleave', () => { isHovered = false; });
  container.addEventListener('focusin', () => { isFocused = true; });
  container.addEventListener('focusout', event => {
    if (!container.contains(event.relatedTarget)) isFocused = false;
  });

  container.addEventListener('pointerdown', event => {
    if (event.button !== 0) return;
    isDragging = true;
    dragStartX = event.clientX;
    dragStartOffset = offset;
    container.classList.add('is-dragging');
    container.setPointerCapture(event.pointerId);
  });

  container.addEventListener('pointermove', event => {
    if (!isDragging || groupWidth === 0) return;
    offset = ((dragStartOffset - (event.clientX - dragStartX)) % groupWidth + groupWidth) % groupWidth;
    applyOffset();
  });

  function stopDragging(event) {
    if (!isDragging) return;
    isDragging = false;
    container.classList.remove('is-dragging');
    if (container.hasPointerCapture(event.pointerId)) {
      container.releasePointerCapture(event.pointerId);
    }
  }

  container.addEventListener('pointerup', stopDragging);
  container.addEventListener('pointercancel', stopDragging);
  window.addEventListener('resize', measureGroup);

  measureGroup();
  requestAnimationFrame(animate);

  const revealElements = document.querySelectorAll(
    '.skills-strip, .about-grid, .certifications, .portfolio-header, .carousel-container, .contact-grid, footer'
  );
  revealElements.forEach(element => element.classList.add('fade-in'));

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -32px 0px' });
  revealElements.forEach(element => observer.observe(element));

  const contactForm = document.querySelector('.contact-form');
  contactForm.addEventListener('submit', async (event) => {
    event.preventDefault();

    const submitButton = contactForm.querySelector('.form-submit');
    const originalButtonText = submitButton.textContent;
    const formData = new FormData(contactForm);
    formData.append('sent', '1');

    submitButton.disabled = true;
    submitButton.textContent = 'Sending...';
    submitButton.setAttribute('aria-busy', 'true');

    try {
      const response = await fetch(contactForm.action || window.location.href, {
        method: 'POST',
        body: formData
      });

      if (!response.ok) {
        throw new Error(`Contact form request failed with status ${response.status}.`);
      }

      const responseDocument = new DOMParser().parseFromString(await response.text(), 'text/html');
      const newStatus = responseDocument.querySelector('.form-status');

      if (!newStatus) {
        throw new Error('The contact form response did not include a status message.');
      }

      const currentStatus = contactForm.querySelector('.form-status');
      if (currentStatus) {
        currentStatus.replaceWith(newStatus);
      } else {
        submitButton.insertAdjacentElement('afterend', newStatus);
      }

      if (newStatus.classList.contains('is-success')) {
        contactForm.reset();
      }
    } catch (error) {
      console.error('Contact form submission failed:', error);
      let status = contactForm.querySelector('.form-status');
      if (!status) {
        status = document.createElement('p');
        submitButton.insertAdjacentElement('afterend', status);
      }
      status.className = 'form-status is-error';
      status.setAttribute('role', 'alert');
      status.setAttribute('aria-live', 'polite');
      status.textContent = 'Your message could not be sent. Please check your connection and try again.';
    } finally {
      submitButton.disabled = false;
      submitButton.textContent = originalButtonText;
      submitButton.removeAttribute('aria-busy');
    }
  });

  const themeToggle = document.getElementById('themeToggle');
  const themeToggleIcon = themeToggle.querySelector('.theme-toggle-icon');
  const savedTheme = localStorage.getItem('theme');

  if (savedTheme === 'light') {
    document.documentElement.dataset.theme = 'light';
  }

  function updateThemeToggle() {
    const isLightMode = document.documentElement.dataset.theme === 'light';
    const nextMode = isLightMode ? 'dark' : 'light';
    themeToggleIcon.textContent = isLightMode ? '☾' : '☀';
    themeToggle.classList.toggle('is-light', isLightMode);
    themeToggle.setAttribute('aria-label', `Switch to ${nextMode} mode`);
    themeToggle.setAttribute('aria-pressed', String(isLightMode));
  }

  updateThemeToggle();
  themeToggle.addEventListener('click', () => {
    const nextTheme = document.documentElement.dataset.theme === 'light' ? 'dark' : 'light';
    document.documentElement.dataset.theme = nextTheme;
    localStorage.setItem('theme', nextTheme);
    updateThemeToggle();
  });