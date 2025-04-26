<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/ifram.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/mode-sombre-acceuil.css" />
    <?php include "./includes/link.php"?>
    <title>los angeles</title>
  </head>
  <body>
    <?php include "./includes/header.php"?>

    <main class="container">
      <div class="carousel">
        <div class="carousel-slide" id="carousel-slide">
          <div class="overlay">
            <h1 id="carousel-titre"></h1>
            <p id="carousel-text"></p>
          </div>
        </div>
        <button class="carousel-btn prev-fly yan" onclick="prevSlide1()">
          &#10094;
        </button>
        <button class="carousel-btn next-fly" onclick="nextSlide1()">
          &#10095;
        </button>
      </div>

      <div class="la-intro-section">
        <h2 class="la-title">Bienvenue à Los Angeles</h2>
        <p class="la-subtitle">Plus qu’une ville, une légende vivante.</p>

        <div class="la-description">
          <p>
            Los Angeles, c’est ce frisson qui te percute dès que ton regard se pose sur elle. Des avenues sans fin brûlées par le soleil, des plages où le sable se mêle aux rêves, et un ciel tellement immense qu’on dirait qu’il vient enlacer l’océan.
          </p>
          <p>
            Ici, chaque coin de rue te balance une histoire. Les lettres géantes d’Hollywood veillent sur une ville qui a vu naître des légendes, des films cultes, des sons qui font vibrer le monde entier. Mais LA, ce n’est pas que du cinéma : c’est Venice Beach avec ses artistes de rue déjantés, Santa Monica sous un ciel en feu au coucher du soleil, et les palmiers de Beverly Hills qui ondulent comme dans un rêve.  
          </p>
          <p>
            À LA, les cultures se mélangent comme nulle part ailleurs. Les food trucks font danser les odeurs dans les rues, et la créativité jaillit sur chaque mur, à chaque coin de quartier. Que tu sois fan d’art, mordu de tech, rider de skate ou amoureux de bonne bouffe, Los Angeles a forcément un bout de rêve taillé juste pour toi.
          </p>
          <p class="la-final-line">
            Qu'est-ce que t'attends ? Los Angeles, c'est pas juste une ville à
            visiter, c'est un endroit à vivre, à respirer, à ressentir jusqu'au
            bout des rêves. Ici, chaque rue, chaque coucher de soleil te raconte
            une histoire. LA, c'est une vibe, une énergie… et crois-moi, tu veux
            en faire partie.
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
            <img src="assets/img/Urban-buildings.jpg" class="carousel-image" />

            <!-- Slides réels -->
            <img src="assets/img/shot-with-drone.jpg" class="carousel-image" />
            <img src="assets/img/Urban-city-sunrise.jpg" class="carousel-image" />
            <img src="assets/img/Urban-buildings.jpg" class="carousel-image" />

            <!-- Clones à droite -->
            <img src="assets/img/shot-with-drone.jpg" class="carousel-image" />
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

    <script src="./assets/js/carousel.js?v=1.0"></script>
    <script type="module" src="./assets/js/carousel-fly.js"></script>
    <script type="module" src="./assets/js/history.js"></script>
    <script type="module" src="../assets/js/mode.js"></script>
  </body>
</html>
