<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/ifram.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <?php include "./includes/link.php"?>
    <title>los angeles</title>
  </head>
  <body>
    <?php include "./includes/header.php"?>

    <main class="container">
      <div class="carousel">
        <div class="carousel-slide" id="slide">
          <div class="overlay">
            <h1 id="carousel-titre"></h1>
            <p id="carousel-text"></p>
          </div>
        </div>
        <button class="carousel-btn prev-fly" onclick="prevSlide()">
          &#10094;
        </button>
        <button class="carousel-btn next-fly" onclick="nextSlide()">
          &#10095;
        </button>
      </div>
      <div class="la-intro-section">
        <h2 class="la-title">Bienvenue à Los Angeles</h2>
        <p class="la-subtitle">Plus qu’une ville, une légende vivante.</p>
      
        <div class="la-description">
          <p>
            Los Angeles, c’est ce frisson que tu ressens au premier regard. Des avenues infinies baignées de soleil, des plages où le sable rencontre les rêves, et un ciel si vaste qu’il semble embrasser l’océan.  
          </p>
          <p>
            Ici, chaque coin de rue raconte une histoire. Les lettres blanches d’Hollywood veillent sur une ville qui a vu naître les plus grands artistes, des films cultes, des musiques inoubliables. Mais L.A., c’est aussi Venice Beach et ses artistes de rue, Santa Monica et son coucher de soleil doré, ou encore les palmiers dansants de Beverly Hills.
          </p>
          <p>
            Dans cette ville aux mille visages, les cultures s’entrelacent, les food trucks parfument les trottoirs, et la créativité explose à chaque coin de mur. Que tu sois passionné d’art, de technologie, de skate ou de gastronomie, Los Angeles a quelque chose pour toi.
          </p>
          <p class="la-final-line">
            ✨ Laisse-toi emporter. Los Angeles t’attend. Pas seulement pour être visitée, mais pour être ressentie.
          </p>
        </div>
      </div>
      

      <div class="map-container">
        <iframe
          class="map-style"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d137072.8722344849!2d-118.38043488652461!3d34.02335942505698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20Californie%2C%20%C3%89tats-Unis!5e0!3m2!1sfr!2sfr!4v1744380472481!5m2!1sfr!2sfr"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
      <div class="display">
        <div class="carousel-container">
          <div class="carousel-track" id="carousel-track">
            <!-- Clones à gauche -->
            <img src="assets/img/img3.jpg" class="carousel-image" />

            <!-- Slides réels -->
            <img src="assets/img/img1.jpg" class="carousel-image" />
            <img src="assets/img/img2.jpg" class="carousel-image" />
            <img src="assets/img/img3.jpg" class="carousel-image" />

            <!-- Clones à droite -->
            <img src="assets/img/img1.jpg" class="carousel-image" />
          </div>
          <button class="carousel-btn-fly prev-fly" onclick="prevSlide()">
            &#10094;
          </button>
          <button class="carousel-btn-fly next-fly" onclick="nextSlide()">
            &#10095;
          </button>
        </div>
      </div>

      <div class="section-history">
        <div class="history-header">
          <h2>Los Angeles, une histoire vibrante</h2>
          <p>
            Bien plus qu'une ville, un rêve éveillé qui a traversé les âges.
          </p>
        </div>

        <div class="history-content">
          <div class="history-block">
            <h3>🌅 Aux origines du rêve</h3>
            <p>
              Fondée en 1781 par des colons espagnols, Los Angeles était d’abord
              un paisible village ensoleillé. Son nom, "El Pueblo de Nuestra
              Señora la Reina de los Ángeles", portait déjà la promesse d’un
              lieu à part, sacré et inspirant.
            </p>
          </div>

          <div class="history-block">
            <h3>🚂 Le boom de l’Ouest</h3>
            <p>
              Au 19ᵉ siècle, l’arrivée du chemin de fer transforme L.A. en
              carrefour de l’innovation. Des chercheurs d’or, des artistes, des
              visionnaires... tous y voyaient une terre d’opportunité où tout
              était possible.
            </p>
          </div>

          <div class="history-block">
            <h3>🎬 Naissance du mythe Hollywood</h3>
            <p>
              Dans les années 1920, L.A. devient le cœur battant du cinéma
              mondial. Hollywood illumine les rêves du monde entier, et les rues
              de la ville deviennent les coulisses de chefs-d’œuvre intemporels.
            </p>
          </div>

          <div class="history-block">
            <h3>🌍 Une ville de cultures, d’art et de lumière</h3>
            <p>
              Aujourd’hui, Los Angeles est un patchwork de cultures, de
              quartiers, d’histoires et de talents. De Venice Beach à Downtown,
              en passant par Griffith Park ou Beverly Hills, elle offre une
              diversité fascinante et une énergie unique.
            </p>
          </div>

          <div class="history-block end">
            <h3>💫 Pourquoi venir à L.A. ?</h3>
            <p>
              Parce que chaque coin de rue raconte une histoire. Parce qu’ici,
              les couchers de soleil embrasent l’océan. Parce qu’à Los Angeles,
              les rêves ne dorment jamais.
            </p>
          </div>
        </div>
      </div>
    </main>
    <?php include "./includes/footer.php"?>

    <script type="module" src="./assets/js/carousel.js"></script>
    <script type="module" src="./assets/js/carousel-fly.js"></script>
    <script type="module" src="./assets/js/history.js"></script>
    <script type="module" src="../assets/js/mode.js"></script>
  </body>
</html>
