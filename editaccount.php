<?php
      if(isset($_POST['submit'])){
     extract($_POST);
      if(isset($_GET['id'])) {
        $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy', 'root', 'root');
        $id = htmlentities($bdd->quote($_GET['id']));
        $edit = $bdd->prepare("UPDATE Account SET Nom = :Nom, Prenom= :Prenom, DateNaissance = :DateNaissance, Email = :Email, MotDePasse = :MotDePasse WHERE id = :id");
        $edit->execute(array(
            'Nom' => $Nom,
            'Prenom' => $Prenom,
            'DateNaissance' => $DateNaissance,
            'Email' => $Email,
            'MotDePasse' => $MotDePasse,
            'id' => $_GET['id']));
          if ($edit) {
            echo '<h1 style="color:white;">Modification effectué</h1>';
          }
          else{
            echo '<h1 style="color:white;">Erreur de modification"</h1>';
          }
      }
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Editer</title>
  <link rel="stylesheet" type="text/css" href="css/createcomment.css" />
</head>
<body background="images/blurblogtimmy.jpg">
  <div id="container">  
    <form method="post">
      <h1>Editer un compte</h1>
      <label><b>Nom</b></label>
        <input type="text" placeholder="Entrer votre Nom" name="Nom">
        <label><b>Prenom</b></label>
        <input type="text" placeholder="Entrer votre Prenom" name="Prenom">
        <label><b>Date de naissance</b></label>
        <input type="date" name="DateNaissance">
        <label><b>E-mail</b></label>
        <input type="email" placeholder="votre@email.fr" name="Email">
        <label><b>Mot de Passe</b></label>
        <input type="password" placeholder="********" name="MotDePasse">
        <input type="submit" name="submit" value="Création du compte">
      <a href="modifyaccount.php">Menu précédent</a><br>
      <a href="newblogtimmy.php">Menu principal</a>
    </form>
  <div>  
</body>
</html>

