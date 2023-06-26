let slides = document.querySelectorAll('div#slideshow img');

if (slides && slides.length >= 1) {

  document.addEventListener('DOMContentLoaded', () => {
    slides[0].classList.replace('translate-x-full', 'translate-x-0');
  })
  let currentSlide = 1;
  var slideInterval = setInterval(nextSlide, 2500);

  function nextSlide() {
    slides[currentSlide].classList.replace('opacity-0', 'opacity-100');
    slides[currentSlide].classList.replace('translate-x-full', 'translate-x-0');
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.replace('translate-x-0', '-translate-x-full');
    setTimeout(() => {
      slides[currentSlide].classList.replace('opacity-100', 'opacity-0');
      slides[currentSlide].classList.replace('-translate-x-full', 'translate-x-full');
    }, 1000);
  }
}
