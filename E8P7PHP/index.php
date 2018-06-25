<?php
$gender_array = array(1 => 'Mr', 2 => 'Mme', 3 => 'Autre');
if (!empty($_FILES['fileSelect'])){
  $fileInfo = pathinfo($_FILES['fileSelect']['name']);
  $fileExtension = $fileInfo['extension'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" /> -->
  <link rel="stylesheet" href="style.css" />
  <title>Partie 7 Exercice 8</title>
</head>
<body>
  <h1>Partie 7 Exercice 8</h1>
  <div id="enonce">
    <p>Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>
  </div>
  <div id="result">
    <?php
    // Nous verifions si le tableau $_POST est non vide avec la fonction !empty, si non vide nous faisons un echo pour afficher les valeurs
    // nous verifions également que le tableau $_POST is set via isset
    if (!empty($_POST['gender']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_FILES['fileSelect']) && ($fileExtension == 'pdf'))  {
      ?>
      <!-- On affiche les valeurs via echo -->
      <p>Civilité : <?= $gender_array[$_POST['gender']]; ?></p>
      <p>NOM : <?= htmlspecialchars($_POST['lastname']); ?></p>
      <p>Prénom : <?= htmlspecialchars($_POST['firstname']); ?></p>
      <p>Nom du fichier : <?= $fileInfo['filename']; ?></p>
      <p>Extension du fichier: <?= $fileInfo['extension']; ?></p>
      <?php
    } else { // on affiche le formulaire pour recupérer les valeurs
      ?>
      <form action="index.php" method="POST" enctype="multipart/form-data">
        <!-- liste déroulante pour Mr ou Mme -->
        <select id="gender" name="gender">
          <option value="0" disabled selected>Choisir</option>
          <option value="1">Mr</option>
          <option value="2">Mme</option>
          <option value="3">Autre</option>
        </select>
        <!-- Input type text -->
        <label for="lastname">NOM : </label><input type="text" name="lastname" id="lastname" />
        <label for="firstname">Prénom : </label><input type="text" name="firstname" id="firstname" />
        <input type="file" name="fileSelect" />
        <input type="submit" value="Valider" />
      </form>
      <?php echo 'Merci de respecter les conditions indiquées';
        }
    ?>
  </div>
</body>
</html>
