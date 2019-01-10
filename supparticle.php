<?php
      if(isset($_GET['id_article'])) {
        $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy', 'root', 'root');
        $id_article = htmlentities($bdd->quote($_GET['id_article']));
        $delete = $bdd->query("DELETE FROM Article WHERE id_article = $id_article");
          if ($delete) {
            echo "Le compte à bien été supprimé";
          }
          else{
            echo "Erreur de suppression.";
          }
      }
?>
<a href="modifyarticle.php">Menu précédent</a>
<br><a href="newblogtimmy.php">Menu principal</a>
