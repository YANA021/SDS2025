(function () {
  const slider = document.querySelector('.home-slider');
  if (!slider) return;

  const track = slider.querySelector('.home-slider__track');
  const slides = Array.from(track.querySelectorAll('.home-slider__item'));
  const indicators = Array.from(slider.querySelectorAll('.home-slider__indicators button'));

  if (!slides.length) return;

  let activeIndex = slides.findIndex((slide) => slide.classList.contains('is-active'));
  if (activeIndex < 0) activeIndex = 0;

  let timerId = null;
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const interval = prefersReducedMotion ? 10000 : 6000;

  const setActive = (nextIndex) => {
    slides[activeIndex]?.classList.remove('is-active');
    indicators[activeIndex]?.classList.remove('is-active');
    activeIndex = nextIndex;
    slides[activeIndex]?.classList.add('is-active');
    indicators[activeIndex]?.classList.add('is-active');
  };

  const gotoNext = () => setActive((activeIndex + 1) % slides.length);

  const restartTimer = () => {
    if (timerId) clearInterval(timerId);
    timerId = setInterval(gotoNext, interval);
  };

  indicators.forEach((button) => {
    button.addEventListener('click', () => {
      const index = Number.parseInt(button.dataset.slide, 10);
      if (Number.isNaN(index) || index === activeIndex) return;
      setActive(index);
      restartTimer();
    });
  });

  slider.addEventListener('mouseenter', () => {
    if (timerId) clearInterval(timerId);
  });

  slider.addEventListener('mouseleave', () => {
    restartTimer();
  });

  restartTimer();
})();
