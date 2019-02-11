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
      <h1>Session Administrateur</h1>
        <div class="big-cube">
          <button class="cube" onclick="location.href='gestion.php'"><p>Profil</p></button>
          <button class="cube" onclick="location.href='createarticle.php?id_compte=<?php echo $_GET['id'] ?>'"><p>Créer un Article</p></button>
          <button class="cube" onclick="location.href='modifyarticle.php'"><p>Modifier un Article</p></button>
          <button class="cube" onclick="location.href='createcommentaire.php?id_compte=<?php echo $_GET['id'] ?>'"><p>Créer Commentaire</p></button>
          <button class="cube" onclick="location.href='modifycommentaire.php'"><p>Modifier Comment </p></button>
          <button class="cube" onclick="location.href='createaccount.php'"><p>Créer un compte</p></button>
          <button class="cube" onclick="location.href='modifyaccount.php'"><p>Modifier un compte</p></button>
          <button class="cube" onclick="location.href='newblogtimmy.php'"><p>Accueil</p></button>
        </div> 
    </div>
  </body>
  
</html>
