<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../includes/link.php"?>
    <link rel="stylesheet" href="../assets/css/style-lieux.css" />
    <link rel="stylesheet" href="../assets/css/mode-sombre-lieux.css" />
    <link rel="stylesheet" href="../assets/css/media/responsive-lieux.css" />
    <title>Lieux</title>
  </head>
  <body>
    <?php include "../includes/header.php"?>

    <main>
      <div class="card-container">
        <div class="card">
          <img
            src="../assets/img/Griffith Observatory.jpg"
            alt="Griffith Observatory"
          />
          <div class="card-content">
            <h2>Griffith Observatory</h2>
            <p>
              Une vue imprenable sur Los Angeles et des expositions fascinantes
              sur l'astronomie.
            </p>
          </div>
        </div>

        <div class="card">
          <img src="../assets/img/Hollywood Sign.jpg" alt="Hollywood Sign" />
          <div class="card-content">
            <h2>Hollywood Sign</h2>
            <p>
              Un symbole emblématique de l'industrie cinématographique mondiale.
            </p>
          </div>
        </div>

        <div class="card">
          <img
            src="../assets/img/Santa Monica Pier.jpg"
            alt="Santa Monica Pier"
          />
          <div class="card-content">
            <h2>Santa Monica Pier</h2>
            <p>
              Une jetée animée avec plage, manèges, musiciens et ambiance
              californienne.
            </p>
          </div>
        </div>

        <div class="card">
          <img
            src="../assets/img/The Getty Center.jpg"
            alt="The Getty Center"
          />
          <div class="card-content">
            <h2>The Getty Center</h2>
            <p>
              Un musée d'art avec des jardins luxuriants et une vue
              spectaculaire sur la ville.
            </p>
          </div>
        </div>
      </div>
    </main>

    <?php include "../includes/footer.php"?>

    <script type="module" src="../assets/js/mode.js"></script>
  </body>
</html>
