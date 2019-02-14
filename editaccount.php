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
            'MotDePasse' => sha1($MotDePasse),
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
      <?php
      $mysqli = new mysqli('localhost', 'root', 'root', 'blogtimmy');
      $requete = 'SELECT * FROM Account WHERE id='.$_GET['id'];
      $resultat = $mysqli->query($requete);
    while ($donnees = $resultat->fetch_assoc()) {
    ?>
      <h1>Editer un compte</h1>
      <label><b>Nom</b></label>
        <input type="text" value="<?php echo $donnees['Nom']; ?>" name="Nom">
        <label><b>Prenom</b></label>
        <input type="text" value="<?php echo $donnees['Prenom']; ?>" name="Prenom">
        <label><b>Date de naissance</b></label>
        <input type="date" name="DateNaissance" required>
        <label><b>E-mail</b></label>
        <input type="email" value="<?php echo $donnees['Email']; ?>" name="Email">
        <label><b>Mot de Passe</b></label>
        <input type="password" value="<?php echo $donnees['MotDePasse']; ?>" name="MotDePasse">
        <input type="submit" name="submit" value="Editer le compte">
      <a href="newblogtimmy.php">Menu principal</a>
      <?php
}
$mysqli->close();
?>
    </form>
  <div>  
</body>
</html>

