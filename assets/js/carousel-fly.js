const track = document.getElementById("carousel-track");
const slides = document.querySelectorAll(".carousel-image");
const slideWidth = slides[0].clientWidth;

let currentSlide = 1; // Commence sur img1 (réel)
track.style.transform = `translateX(-${slideWidth * currentSlide}px)`;

// Fonction de transition
function goToSlide(index) {
  track.style.transition = 'transform 0.5s ease-in-out';
  track.style.transform = `translateX(-${slideWidth * index}px)`;
}

// Réinitialisation invisible (quand on passe de clone à vrai)
function resetTransition() {
  track.style.transition = 'none';
  track.style.transform = `translateX(-${slideWidth * currentSlide}px)`;
}

function nextSlide() {
  currentSlide++;
  goToSlide(currentSlide);
  track.addEventListener("transitionend", () => {
    if (currentSlide === slides.length - 1) {
      currentSlide = 1;
      resetTransition();
    } 
  }, { once: true });
}
console.log("Current Slide:", currentSlide);

function prevSlide() {
  currentSlide--;
  goToSlide(currentSlide);

  track.addEventListener("transitionend", () => {
    if (currentSlide === 0) {
      currentSlide = slides.length - 2;
      resetTransition();
    } 
  }, { once: true });
}

// Auto défilement
setInterval(() => {
  nextSlide();
}, 6000);
