<?php
    ob_start();

    include "../includes/config.php"; // chemin de connexion à la BD

    ob_end_clean();

    // Suppression si un ID est passé via GET
    if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
        $id = intval($_GET['delete']);
        $stmt = $conn->prepare("DELETE FROM contacts WHERE id = ?");
        $stmt->bind_param("i", $id); 
        $stmt->execute(); 
      } 
    // Récupération des données    
    $result = $conn->query("SELECT * FROM contacts"); 

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../assets/css/secret_page.css" />
    <?php include "../includes/link.php"?>
    <title>Page Secrète</title>
  </head>
  <body>
    <main class="secret-container">
      <h1>Liste des données enregistrés</h1>
      <table>
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Type de demande</th>
            <th>Commentaire</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['surname']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= htmlspecialchars($row['request_type']) ?></td>
            <td><?= nl2br(htmlspecialchars($row['comment'])) ?></td>
            <td>
              <a
                class="delete-link"
                href="?delete=<?= $row['id'] ?>"
                onclick="return confirm('Voulez vous Supprimer ce message ?')"
                >Supprimer</a
              >
            </td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </main>
  </body>
</html>
