
<?php
      if(isset($_GET['id_commentaire'])) {
        $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy', 'root', 'root');
        $id_commentaire = htmlentities($bdd->quote($_GET['id_commentaire']));
        $delete = $bdd->query("DELETE FROM Comment WHERE id_commentaire = $id_commentaire");
          if ($delete) {
            echo "Le compte à bien été supprimé";
          }
          else{
            echo "Erreur de suppression.";
          }
      }
?>
<a href="modifycommentaire.php">Menu précédent</a>
<br><a href="newblogtimmy.php">Menu principal</a>
