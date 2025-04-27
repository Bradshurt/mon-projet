<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/contact_style.css">
    <link rel="stylesheet" href="../assets/css/mode-sombre-contact.css">
    <link rel="stylesheet" href="../assets/css/media/responisve-contact.css">
    <?php include "../includes/link.php"?>
    <title>Contact</title>
</head>
<body>

    <?php include "../includes/header.php"?>



    <main class="container">
        <!-- contact.html -->
         <h1 class="title-form">
            Veuillez remplire ce formulaire
         </h1>
        <form action="../database/submit.php" method="post" class="form" id="contactForm">

            <div class="input-group">
                <label for="surname">Prénom</label>
                <input class="color" type="text" name="surname" id="surname" required placeholder="Entrez votre prénom" />
            </div>
            <div class="input-group">
                <label for="name">Nom</label>
                <input class="color" type="text" name="name" id="name" required placeholder="Entrez votre nom"/>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input class="color" type="email" name="email" id="email" required placeholder="Entrez votre adresse mail"/>
            </div>
            <div class="input-group">
                <label for="request_type">Type de demande</label>
                <select class="color" name="request_type" id="request_type" required>
                    <option value="">Choisir</option>
                    <option value="renseignement">Demande de renseignements</option>
                    <option value="rendezvous">Demande de rendez-vous</option>
                    <option value="autres">Autres</option>
                </select>
            </div>
            <div class="input-group">
                <label for="comment">Commentaire</label>
                <textarea name="comment" id="comment" rows="4" placeholder="..."></textarea>
            </div>

            <div class="form-buttons">
                <input class="submit button" type="submit" value="Envoyer" />
                <input class="reset button" type="reset" value="Annuler" />
            </div>
        </form>

    </main>



    <?php include "../includes/footer.php"?>
    <script src="../assets/js/form.js"></script>
    <script type="module" src="../assets/js/mode.js"></script>
</body>
</html>