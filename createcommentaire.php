<?php
session_start ();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
     <title>Création commentaire</title>
        <link rel="stylesheet" type="text/css" href="css/createcomment.css" />
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   </head>
   <body background="images/blurblogtimmy.jpg">
    <div id="container">  
      <form method="post">
        <h1>Création d'un commentaire</h1>
        <label><b>Article</b></label><br>
    <select name="numarticle" id="numarticle">
        <?php
    try {

        $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy', 'root', 'root'); 
        $select = $bdd->query("SELECT * FROM Article ORDER BY id_article DESC");
        while ($donnees = $select->fetch()) {
    ?>  

        <option value=" <?php echo $donnees['id_article']; ?>"> <?php echo $donnees['titre']; ?></option>
    
    <?php
    }

    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    ?>
        </select><br><br>
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
          $numarticle=$_POST['numarticle'];
          $myid=$_GET['id_compte'];
          $bdd->exec("INSERT INTO Comment (id_article, id_compte, commentaire, date_commentaire) 
                VALUES('$numarticle','$myid','$commentaire','$date_commentaire')");
          header('Location: newblogtimmy.php');
          exit();
        }
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    
  ?>
</html>