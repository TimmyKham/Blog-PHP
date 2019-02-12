<?php
session_start ();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
     <title>Création article</title>
        <link rel="stylesheet" type="text/css" href="css/createarticle.css" />
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   </head>
   <body background="images/blurblogtimmy.jpg">
    <div id="container">  
      <form method="post">
        <h1>Création d'un article</h1>
        <label><b>Titre</b></label>
        <input type="text" placeholder="Entrer le titre" name="titre" required>
        <label><b>Date de l'article</b></label>
        <input type="date" name="date_article" required>
        <label><b>Titre aguicheur</b></label>
        <input type="text" placeholder="Entrer un titre aguicheur" name="gros_titre" required>
        <label><b>Description</b></label>
        <input type="text" placeholder="Description de l'article" name="description" required>
        <label><b>Image</b></label>
        <input type="text" placeholder="Entrer le lien de votre l'image" name="link_image" required>
        <input type="submit" name="submit" value="Création de l'article">
      </form>
    </div>
  </body>
  
  <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy', 'root', 'root'); 

        if(isset($_POST['submit'])){
          $titre=$_POST['titre'];
          $date_article=$_POST['date_article'];
          $gros_titre=$_POST['gros_titre'];
          $description=$_POST['description'];
          $link_image=$_POST['link_image'];
          $myid=$_GET['id_compte'];
          $bdd->exec("INSERT INTO Article (titre, id_compte, date_article, gros_titre, description, link_image) 
                VALUES('$titre','$myid','$date_article','$gros_titre','$description','$link_image')");
          header('Location: newblogtimmy.php');
          exit();
        }
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    
  ?>
</html>