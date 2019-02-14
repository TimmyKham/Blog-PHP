
<?php
      if(isset($_GET['id'])) {
        $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy', 'root', 'root');
        $id = htmlentities($bdd->quote($_GET['id']));
        $delete = $bdd->query("DELETE FROM Account WHERE id = $id");
          if ($delete) {
            echo "Le compte à bien été supprimé";
          }
          else{
            echo "Erreur de suppression.";
          }
      }
?>
<a href="modifyaccount.php">Menu précédent</a>
<br><a href="newblogtimmy.php">Menu principal</a>
