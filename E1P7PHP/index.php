<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1 Partie 7 PHP</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p class="rule">Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.</p>
    <form class="answer" method="GET" action="user.php">
      <p>Veuillez entrer votre prénom svp
      <p>Veuillez entrer votre nom svp
      <input type="text" placeholder="Nom" name="nom" /></p>
      <input type="submit" value="valider" />
    </form>
  </body>
</html>
