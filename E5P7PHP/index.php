<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 5 Partie 7 PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="rule">
    <p>Créer un formulaire sur la page index.php avec :</p>
    <ul>
      <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
      <li>Un champ texte pour le nom</li>
      <li>Un champ texte pour le prénom</li>
    </ul>
    <p>Ce formulaire doit rediriger vers la page index.php. Vous avez le choix de la méthode.</p>
  </div>
  <div class="answer">
    <!-- j'utilise la méthode $_POST[''] et demande un rechargement de la page avec la réponse au submit -->
    <form method="post" action="index.php">
      <p>Civilité</p>
      <select name="gender">
        <option value="mr">Mr.</option>
        <option value="mrs">Mme.</option>
      </select>
      <p>Veuillez entrer votre prénom svp</p>
      <input type="text" placeholder="Prénom" name="prenom" />
      <p>Veuillez entrer votre nom svp</p>
      <input type="text" placeholder="Nom" name="nom" />
      <input type="submit"  name="submit" value="valider" />
    </form>
    <!-- J'utilise ici sprintf et récupère les valeurs de gender, prenom et nom via la méthode $_POST['']-->
    <!-- Pour éviter d'avoir des erreurs au chargement de la page, j'utilise isset pour ne l'afficher qu'au submit -->
    <?php if (isset($_POST['submit'])) { ?>
      <p><?= htmlspecialchars(sprintf('Bonjour %s %s %s',$_POST['gender'],$_POST['prenom'],$_POST['nom'])); ?></p>
    <?php } ?>
  </div>
</body>
</html>
