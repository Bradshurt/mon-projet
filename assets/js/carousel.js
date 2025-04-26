(function () {
  document.addEventListener("DOMContentLoaded", () => {
    const slides = [
      {
        image: "assets/img/img1.jpg",
        title: "Au cœur du cinéma mondial",
        text: "Hollywood n’est pas qu’un nom, c’est un mythe vivant où naissent les stars et où chaque rue a son histoire à raconter.",
      },
      {
        image: "assets/img/img2.jpg",
        title: "Los Angeles, entre ciel et mer",
        text: "Une ville où chaque coucher de soleil embrase l’horizon, et où la modernité flirte avec le rêve californien.",
      },
      {
        image: "assets/img/img3.jpg",
        title: "Au cœur du cinéma mondial",
        text: "Hollywood n’est pas qu’un nom, c’est un mythe vivant où naissent les stars et où chaque rue a son histoire à raconter.",
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