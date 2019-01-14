<?php
      if(isset($_POST['submit'])){
     extract($_POST);
      if(isset($_GET['id_article'])) {
        $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy', 'root', 'root');
        $id_article = htmlentities($bdd->quote($_GET['id_article']));
        $edit = $bdd->prepare("UPDATE Article SET titre = :titre, gros_titre = :gros_titre, description = :description WHERE id_article = :id_article");
        $edit->execute(array(
            'titre' => $titre,
            'gros_titre' => $gros_titre,
            'description' => $description,
            'id_article' => $_GET['id_article']));
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
      <h1>Editer un article</h1>
      <label><b>Titre</b></label>
      <input type="text" name="titre" placeholder='Modifier le titre'>
      <label><b>Gros Titre</b></label>
      <input type="text" name="gros_titre" placeholder='Modifier le gros titre'>
      <label><b>Description</b></label>
      <input type="text" name="description" placeholder='Modifier la description'>
      <input type="submit" name="submit" value="Modifier">
      <a href="modifyarticle.php">Menu précédent</a><br>
      <a href="newblogtimmy.php">Menu principal</a>
    </form>
  <div>  
</body>
</html>

