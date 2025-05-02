(function () {
  document.addEventListener("DOMContentLoaded", () => {
    const slides = [
      {
        image: "assets/img/hollywood_P.jpg",
        title: "L’âme de Hollywood",
        text: "Ici, chaque étoile sur le trottoir cache une histoire folle. Hollywood, c’est pas juste du cinéma, c’est un rêve qui palpite dans chaque ruelle.",
      },
      {
        image: "assets/img/img2.jpg",
        title: "Entre vagues et gratte-ciel",
        text: "À LA, le soleil se couche dans l'océan comme un feu d’artifice silencieux. C’est une ville où la liberté et la démesure dansent ensemble.",
      },
      {
        image: "assets/img/img3.jpg",
        title: "La magie au coin de la rue",
        text: "Grandir à Los Angeles, c’est voir des histoires naître à chaque coin de rue — un clip de rap ici, un tournage là-bas, toujours un rêve en marche.",
      },
    ];
    

    let currentSlide = 0;
    const slide = document.getElementById("carousel-slide");
    const title = document.getElementById("carousel-titre");
    const text = document.getElementById("carousel-text");

    function showSlide(index) {
      slide.style.backgroundImage = `url(${slides[index].image})`;
      title.textContent = slides[index].title;
      text.textContent = slides[index].text;
    }

    function prevSlide1() {
      console.log("prevSlide");
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      showSlide(currentSlide);
    }

    function nextSlide1() {
      console.log("nextSlide");
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }

    window.prevSlide1 = prevSlide1;
    window.nextSlide1 = nextSlide1;

    showSlide(currentSlide);
    setInterval(nextSlide1, 10000); // Change toutes les 10 secondes
  });
})();