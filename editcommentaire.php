<?php
      if(isset($_POST['submit'])){
     extract($_POST);
      if(isset($_GET['id_commentaire'])) {
        $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy', 'root', 'root');
        $id_commentaire = htmlentities($bdd->quote($_GET['id_commentaire']));
        $edit = $bdd->prepare("UPDATE Comment SET commentaire = :commentaire WHERE id_commentaire = :id_commentaire");
        $edit->execute(array(
            'commentaire' => $commentaire,
            'id_commentaire' => $_GET['id_commentaire']));
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
      <h1>Editer un commentaire</h1>
      <label><b>Commentaire</b></label>
      <input type="text" name="commentaire" placeholder='Modifier votre commentaire'required >
      <input type="submit" name="submit" value="Modifier">
      <a href="modifycommentaire.php">Menu précédent</a><br>
      <a href="newblogtimmy.php">Menu principal</a>
    </form>
  <div>  
</body>
</html>

