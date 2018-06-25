<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 6 Partie 7 PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="rule">
    <p>Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse. Utiliser qu'une seule page.</p>
  </div>
  <div class="answer">
    <?php
    // On initialise la variable $displayForm à true pour afficher le formulaire au chargement
    $displayForm = True;
    if (isset($_POST['submit'])) {
      // Une fois la validation du formulaire effectuée, on affiche ce message et on cache le formulaire
      echo htmlspecialchars(sprintf('Bonjour %s %s %s',$_POST['gender'],$_POST['prenom'],$_POST['nom']));
      $displayForm = False;
    } else { ?>
    <!-- j'utilise la méthode $_POST[''] et demande un rechargement de la page avec la réponse au submit -->
    <form method="post" action="index.php">
      <p>Civilité</p>
      <select name="gender">
        <option value="0" selected disabled>Faites un choix</option>
        <option value="1">Mr.</option>
        <option value="2">Mme.</option>
        <option value="3">Autre</option>
      </select>
      <p>Veuillez entrer votre prénom svp</p>
      <input type="text" placeholder="Prénom" name="prenom" />
      <p>Veuillez entrer votre nom svp</p>
      <input type="text" placeholder="Nom" name="nom" />
      <input type="submit" name="submit" value="valider" />
    </form>
  <?php } ?>
  </div>
</body>
</html>
