<?php
session_start ();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
     <title>Editer</title>
        <link rel="stylesheet" type="text/css" href="css/modifyarticle.css" />
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   </head>
   <body background="images/blurblogtimmy.jpg">
    <div id="container">  
      <form method="post">
        <h1>Editer</h1>
        
  <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy', 'root', 'root'); 
        $select = $bdd->query("SELECT * FROM Article");
        

        while ($tabArticle = $select->fetch()) {

          echo "<table>"."<td>".$tabArticle['id_article']."</td>"."<td>".$tabArticle['titre']."</td>"."<td>".$tabArticle['date_article']."</td>"."<td>".$tabArticle['gros_titre']."</td>"."<td>".$tabArticle['description']."</td>"."<td><a href='editarticle.php?id_article=".$tabArticle['id_article']."'>Modifier </a></td>"."<td><a href='supparticle.php?id_article=".$tabArticle['id_article']."'>Supprimer</a></td><br></table>";
        }

    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    ?>
    <a href="newblogtimmy.php">Menu principal</a>
    </div>
  </body>
  
</html>