document.querySelectorAll('.accordion-button').forEach(button => {
  button.addEventListener('click', () => {
      const accordionContent = button.nextElementSibling;
      
      button.classList.toggle('active');

      if (button.classList.contains('active')) {
          accordionContent.style.display = 'block';
      } else {
          accordionContent.style.display = 'none';
      }
  });
});

function smoothScroll(target) {
    const startPosition = window.pageYOffset;
    const targetElement = document.querySelector(target);
    const targetPosition = targetElement.getBoundingClientRect().top + startPosition;
    const distance = targetPosition - startPosition;
    const duration = 1000; // Durasi animasi dalam milidetik
    let startTime = null;

    function animation(currentTime) {
        if (startTime === null) startTime = currentTime;
        const timeElapsed = currentTime - startTime;
        const run = easeInOutQuad(timeElapsed, startPosition, distance, duration);
        window.scrollTo(0, run);
        if (timeElapsed < duration) requestAnimationFrame(animation);
    }

    // Fungsi easing untuk animasi
    function easeInOutQuad(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    }

    requestAnimationFrame(animation);
}

document.getElementById('join-button-1').addEventListener('click', () => smoothScroll('#section-bergabung'));