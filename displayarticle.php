<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/displayarticle.css">
</head>
<body background="images/blurblogtimmy.jpg">
<div class="row">
  <nav class="card">
    <ul>
     <li><a class="nav" href="newblogtimmy.php">Accueil</a></li>
     <li><a class="nav" href="createaccount.php">Crée un compte</a></li>
     <li><a class="nav" href="connexion.php">Connexion</a></li>
    </ul>
  </nav>
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy;charset=utf8', 'root', 'root');
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    if(isset($_GET['id_article'])) {
    $reponse = $bdd->query('SELECT * FROM Account INNER JOIN Article ON Account.id = Article.id_compte WHERE id_article ='.$_GET['id_article']);
      while ($donnees = $reponse->fetch())  {
    ?>  
            <div class="card">
            <h2><?php echo $donnees['titre']; ?></h2>
            <h5><?php echo $donnees['Prenom']; ?> <?php echo $donnees['Nom']; ?> - <?php echo $donnees['date_article']; ?></h5> 
            <div><img class="fakeimg" src="<?php echo $donnees['link_image']; ?>" onclick="location.href='displayarticle.php?id_article=<?php echo $donnees['id_article']?>'"></div>
            <p class="trailer"><strong><?php echo $donnees['gros_titre']; ?></strong></p>
            <p><?php echo $donnees['description']; ?></p>
            </div>
    <?php
      }
    }
      $reponse->closeCursor();
    ?>
    
  </div>
  <h2 style="color: white">Commentaire</h2>
 
<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy;charset=utf8', 'root', 'root');
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    $reponse = $bdd->query('SELECT * FROM Comment INNER JOIN Account On Comment.id_compte = Account.id WHERE id_article ='.$_GET['id_article']);
    while ($donnees = $reponse->fetch())  {
    ?>  
            <div class="card">
            <h2><?php echo $donnees['commentaire']; ?></h2>
            <h5><?php echo $donnees['Prenom']; ?> <?php echo $donnees['Nom']; ?> - <?php echo $donnees['date_commentaire']; ?></h5>
            </div>
    <?php
    }
    $reponse->closeCursor();
    ?>

<div class="footer">
  <p>Poster par : Timmy Khamsithideth</p>
  <p>Contact: <a href="mailto:tkhamsithideth@gmail.com">
  tkhamsithideth@gmail.com</a>.</p>
</div>
 
</body>
</html>
