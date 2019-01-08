<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/newblogtimmy.css">
</head>
<body src="/images/blur-background.jpg">

<div class="header">
  <h2>Blog de Timmy</h2>
</div>

<div class="row">
  <nav class="card">
    <ul>
     <li><a class="nav" href="#">Accueil</a></li>
     <li><a class="nav" href="createaccount.php">Crée un compte</a></li>
     <li><a class="nav" href="connexion.php">Connexion</a></li>
    </ul>
  </nav>
  <div class="leftcolumn">
    <div class="card">
        <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy;charset=utf8', 'root', 'root');
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    $reponse = $bdd->query('SELECT * FROM Account INNER JOIN Article ON Account.id = Article.id_compte ORDER BY id_compte DESC');
    while ($donnees = $reponse->fetch())  {
    ?>
            <h2><?php echo $donnees['titre']; ?></h2>
            <h5><?php echo $donnees['Prenom']; ?> <?php echo $donnees['Nom']; ?>, <?php echo $donnees['date_article']; ?></h5> 
            <div><img class="fakeimg" style="height:200px;" src="images/bannersmash.jpg""></div>
            <p class="trailer"><strong><?php echo $donnees['gros_titre']; ?></strong></p>
            <p><?php echo $donnees['description']; ?></p>
    <?php
    }
    $reponse->closeCursor();
    ?>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Utilisateur</h2>
    <div class="comment" style="height:100px;">
    </div>
      <p>Bonjour</p>
    </div>

    <div class="card">
      <h3>Commentaires</h3>
      <div class="comment">
        <p>"WOW"</p>
        <p>Timmy.K</p>
      </div><br>
      <div class="comment">
      <p>"Excellent"</p>
      <p>Timmy.K</p>
    </div><br>
      <div class="comment">
      <p>"Génial"</p>
      <p>Timmy.K</p></div>
    </div>
    <div class="card">
      <h3>INFOS</h3>
      <p>blabla</p>
    </div>
  </div>
</div>

<div class="footer">
  <p>Poster par : Timmy Khamsithideth</p>
  <p>Contact: <a href="mailto:tkhamsithideth@gmail.com">
  tkhamsithideth@gmail.com</a>.</p>
</div>

</body>
</html>
