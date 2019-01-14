<?php
session_start ();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
     <title>Modifier</title>
        <link rel="stylesheet" type="text/css" href="css/modifyaccount.css" />
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   </head>
   <body background="images/blurblogtimmy.jpg">
    <div id="container">  
      <form method="post">
        <h1>Modifier</h1>
        
  <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy', 'root', 'root'); 
        $select = $bdd->query("SELECT * FROM Account");
        while ($tabAccount = $select->fetch()) {

          echo "id : "."<b>".$tabAccount[0]."</b>"." Nom :"."<b>".$tabAccount[1]."</b>"." Prenom : "."<b>".$tabAccount[2]."</b>"." Date de naissance :"."<b>".$tabAccount[3]."</b>"." Email :"."<b>".$tabAccount[4]."</b>"." Mot de passe : "."<b>".$tabAccount[5]."</b>"." Profil : "."<b>".$tabAccount[6]."</b>"."<a href='editaccount.php?id=".$tabAccount[0]."'>Modifier</a>"."<a href='suppaccount.php?id=".$tabAccount[0]."'>Supprimer</a><br>";
        }

    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    
  ?> 
  <br><a href="newblogtimmy.php">Menu principal</a>
    </div>
  </body>
  
</html>
