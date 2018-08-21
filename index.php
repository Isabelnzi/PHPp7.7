<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice7</title>
</head>
<body>
    <?php
    //création d'un formulaire
      if(empty($_POST) && empty($_GET)){
      ?>
    <form action="index.php" method="get">
        <select name="civility">
            <option>Mr</option>
            <option>Mme</option>
        </select>
      <label for="lastname">Nom : </label><input type="text" name="lastname" placeholder="Nom" />
      <label for="firstname">Prénom : </label><input type="text" name="firstname" placeholder="Prénom" />
      <label for="file">Fichier : </label><input type="file" name="file" placeholder="Fichier" />
      <input type="submit" value="Valider" />
    </form>
      <?php
      }
      ?>
  <?php
  //on récupère et on écrit les valeurs
    if(isset($_GET['civility']) && ($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['file'])){
        echo $_GET['civility'] . ' ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' ' . $_GET['file'];
    }
    elseif(isset($_POST['civility']) && ($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['file'])){
        echo $_POST['civility'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . ' ' . $_POST['file'];
    }
  ?>
</body>
</html>