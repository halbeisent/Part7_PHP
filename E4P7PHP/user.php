<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4 Partie 7 PHP Page user.php</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p class="rule">Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.</p>
    <p class="answer"><?= htmlspecialchars(sprintf ('Bonjour %s %s',$_POST['prenom'],$_POST['nom'])); ?></p>
  </body>
</html>
