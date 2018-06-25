<?php
$firstLastNameRegex = '/^[a-zA-Zéèëï\-]+$/';
preg_match($firstLastNameRegex, $_GET['prenom'], $_GET['nom']);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1 Partie 7 PHP Page user.php</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p class="rule">Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.</p>
    <!-- J'utilise sprintf pour l'affichage du contenu -->
    <p class="answer"><?= htmlspecialchars(sprintf ('Bonjour %s %s',$_GET['prenom'],$_GET['nom']));  var_dump($_GET['nom']);?></p>
  </body>
</html>
