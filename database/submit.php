<!-- submit.php -->
<?php
    // Connexion à la base de données
    include "../includes/config.php";

    // Vérification que les données sont bien envoyées par POST
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        http_response_code(403); // Erreur 403 = interdit
        exit("Accès non autorisé");
    }

    // Récupération des données du formulaire
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $request_type = $_POST['request_type'];
    $comment = $_POST['comment'];

    // vérification simple de l'email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("Email invalide.");
    }

    // Requête SQL sécurisée
    $sql = "INSERT INTO contacts (surname, name, email, request_type, comment)
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Erreur de préparation : " . $conn->error);
    }

    $stmt->bind_param("sssss", $surname, $name, $email, $request_type, $comment);

    // liaison des paramètre
    if ($stmt->execute()){
        echo "Message enregistré avec succès.";
    } else {
        echo "Erreur ors de l'enregistrement : " .$stmt->error;
    }

    $stmt->close();
    $conn->close();
?>
