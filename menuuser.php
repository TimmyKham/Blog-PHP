<?php 
session_start()
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
     <title>Profil</title>
        <link rel="stylesheet" type="text/css" href="css/menuadmin.css" />
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   </head>
   <body background="images/blurblogtimmy.jpg">
    <div id="container"> 
      <h1>Session Utilisateur</h1>
        <div class="big-cube">
          <button class="cube" onclick="location.href='gestion.php'"><p>Mon Profil</p></button>
          <button class="cube" onclick="location.href='#'"><p>Mes Commentaires</p></button>
          <button class="cube" onclick="location.href='#'"><p>Modifier Commentaire</p></button>
          <button class="cube" onclick="location.href='#'"><p>Supprimer Commentaire</p></button>
          <button class="cube" onclick="location.href='#'"><p>Supprimer compte</p></button>
          <button class="cube" onclick="location.href='#'"><p> </p></button>
          <button class="cube" onclick="location.href='#'"><p> </p></button>
          <button class="cube" onclick="location.href='newblogtimmy.php'"><p>Déconnexion</p></button>
        </div> 
    </div>
  </body>
  
</html>
