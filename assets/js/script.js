const track = document.querySelector('.carousel-track');
const slides = Array.from(track.children);
const nextButton = document.querySelector('.carousel-btn.next');
const prevButton = document.querySelector('.carousel-btn.prev');

let currentIndex = 0;

const updateCarousel = (index) => {
    track.style.transform = `translateX(-${index * 100}%)`;
};

nextButton.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % slides.length;
    updateCarousel(currentIndex);
});

prevButton.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    updateCarousel(currentIndex);
});

// Auto-play opcional (5 segundos)
setInterval(() => {
    nextButton.click();
}, 5000);