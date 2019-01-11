<?php
session_start ();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
     <title>Supprimer</title>
        <link rel="stylesheet" type="text/css" href="css/modifycommentaire.css" />
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   </head>
   <body background="images/blurblogtimmy.jpg">
    <div id="container">  
      <form method="post">
        <h1>Supprimer</h1>
        
  <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy', 'root', 'root'); 
        $select = $bdd->query("SELECT * FROM Comment");
        while ($tabCom = $select->fetch()) {

          echo "id : "."<b>".$tabCom[0]."</b>"." Commentaire :"."<b>".$tabCom[2]."</b>"." Date : "."<b>".$tabCom[3]."</b>"."<a href='suppcommentaire.php?id_commentaire=".$tabCom[0]."'>Supprimer</a><br>";
        }

    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    
  ?>
  <br><a href="newblogtimmy.php">Menu principal</a>
    </div>
  </body>
  
</html>
