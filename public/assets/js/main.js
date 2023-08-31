const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');
const carouselItems = document.querySelectorAll('.carousel-item');
const secondaryCarousel = document.querySelector('.secondary-carousel .carousel');
const secondaryCarouselItems = secondaryCarousel.querySelectorAll('.carousel-item');

let currentIndex = 0;

prevButton.addEventListener('click', () => {
  currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
  updateCarousel();
});

nextButton.addEventListener('click', () => {
  currentIndex = (currentIndex + 1) % carouselItems.length;
  updateCarousel();
});

function updateCarousel() {
  carouselItems.forEach((item, index) => {
    if (index === currentIndex) {
      item.classList.add('active');
    } else {
      item.classList.remove('active');
    }
  });

  secondaryCarouselItems.forEach((item, index) => {
    if (index === currentIndex) {
      item.classList.add('active');
    } else {
      item.classList.remove('active');
    }
  });
}

carouselInner.addEventListener('transitionend', () => {
  // Encuentra el índice de la imagen actual en el carrusel principal
  const activeItem = document.querySelector('.carousel-item.active');
  currentIndex = Array.from(carouselItems).indexOf(activeItem);

  // Actualiza ambos carruseles al final de la transición
  updateCarousel();
});