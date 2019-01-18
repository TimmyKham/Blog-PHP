<?php
session_start ();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
     <title>Création article</title>
        <link rel="stylesheet" type="text/css" href="css/createcomment.css" />
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   </head>
   <body background="images/blurblogtimmy.jpg">
    <div id="container">  
      <form method="post">
        <h1>Création d'un commentaire</h1>
        <label><b>Commentaire</b></label>
        <input type="text" placeholder="Entrer le commentaire" name="commentaire" required>
        <label><b>Date de l'article</b></label>
        <input type="date" name="date_commentaire" required>
        <input type="submit" name="submit" value="Envoyer le commentaire">
      </form>
    </div>
  </body>
  
  <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy', 'root', 'root'); 

        if(isset($_POST['submit'])){
          $commentaire=$_POST['commentaire'];
          $date_commentaire=$_POST['date_commentaire'];

          $bdd->exec("INSERT INTO Comment (id_compte, commentaire, date_commentaire) 
                VALUES('12','$commentaire','$date_commentaire')");
          header('Location: newblogtimmy.php');
          exit();
        }
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    
  ?>
</html>