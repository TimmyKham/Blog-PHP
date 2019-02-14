<?php
session_start ();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
     <title>Création</title>
        <link rel="stylesheet" type="text/css" href="css/createaccount.css" />
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   </head>
   <body background="images/blurblogtimmy.jpg">
    <div id="container">  
      <form method="post">
        <h1>Création</h1>
        <label><b>Nom</b></label>
        <input type="text" placeholder="Entrer votre Nom" name="Nom" required>
        <label><b>Prenom</b></label>
        <input type="text" placeholder="Entrer votre Prenom" name="Prenom" required>
        <label><b>Date de naissance</b></label>
        <input type="date" name="DateNaissance" required>
        <label><b>E-mail</b></label>
        <input type="email" placeholder="votre@email.fr" name="Email" required>
        <label><b>Mot de Passe</b></label>
        <input type="password" placeholder="********" name="MotDePasse" required>
        <input type="submit" name="submit" value="Création du compte">
      </form>
    </div>
  </body>
  
  <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy', 'root', 'root'); 

        if(isset($_POST['submit'])){
          $Nom=$_POST['Nom'];
          $Prenom=$_POST['Prenom'];
          $DateNaissance=$_POST['DateNaissance'];
          $Email=$_POST['Email'];
          $MotDePasse=sha1($_POST['MotDePasse']);

          $bdd->exec("INSERT INTO Account(Nom, Prenom, DateNaissance, Email, MotDePasse, Profil) 
                VALUES('$Nom','$Prenom','$DateNaissance','$Email','$MotDePasse','User')");
          header('Location: connexion.php');
          exit();
        }
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    
  ?>
</html>