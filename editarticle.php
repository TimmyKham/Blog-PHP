<?php
      if(isset($_POST['submit'])){
     extract($_POST);
      if(isset($_GET['id_article'])) {
        $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy', 'root', 'root');
        $id_article = htmlentities($bdd->quote($_GET['id_article']));
        $edit = $bdd->prepare("UPDATE Article SET titre = :titre, gros_titre = :gros_titre, description = :description, link_image = :link_image WHERE id_article = :id_article");
        $edit->execute(array(
            'titre' => $titre,
            'gros_titre' => $gros_titre,
            'description' => $description,
            'link_image' => $link_image,
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
      <?php
      $mysqli = new mysqli('localhost', 'root', 'root', 'blogtimmy');
      $requete = 'SELECT * FROM article WHERE id_article='.$_GET['id_article'];
      $resultat = $mysqli->query($requete);
    while ($donnees = $resultat->fetch_assoc()) {
    ?>
      <h1>Editer un article</h1>
      <label><b>Titre</b></label>
      <input type="text" name="titre" value='<?php echo $donnees['titre']; ?>'>
      <label><b>Gros Titre</b></label>
      <input type="text" name="gros_titre" value='<?php echo $donnees['gros_titre']; ?>'>
      <label><b>Description</b></label>
      <input type="text" name="description" value='<?php echo $donnees['description']; ?>'>
      <label><b>Image</b></label>
      <input type="text" name="link_image" value='<?php echo $donnees['link_image']; ?>'>
      <input type="submit" name="submit" value="Modifier">
      <a href="newblogtimmy.php">Menu principal</a>
    </form>
    <?php
}
$mysqli->close();
?>
  <div>  
</body>
</html>

