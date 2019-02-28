<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/newblogtimmy.css">
</head>
<body background="images/blurblogtimmy.jpg">
<div class="header">
  <img style="width: 100%;" src="http://blackwirefrs.com/wp-content/themes/capitalx/capitalx/assets/images/news_banner.jpg">
</div>

<div class="row">
  <nav class="card">
    <ul>
     <li><a class="nav" href="newblogtimmy.php">Accueil</a></li>
     <li><a class="nav" href="createaccount.php">Crée un compte</a></li>
     <li><a class="nav" href="connexion.php">Connexion</a></li>
     <li><a class="nav" href="connexion.php">Menu</a></li>
     <li><a class="nav"><select name="id_cat" id="id_cat">
        <?php
    try {

        $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy', 'root', 'root'); 
        $select = $bdd->query("SELECT * FROM Category ORDER BY idCategory ASC");
        while ($donnees = $select->fetch()) {
    ?>  

        <option value=" <?php echo $donnees['idCategory']; ?>"> <?php echo $donnees['typeCat']; ?>
        </option>
    
    <?php
    }

    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    ?></select>
    </a></li>
    </ul>
  </nav>
  <div class="leftcolumn">
    <?php
    try {

        $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy', 'root', 'root');
        $select = $bdd->query("SELECT * FROM Account INNER JOIN Article ON Account.id = Article.id_compte INNER JOIN Category 
                            ON Article.id_cat = Category.idCategory ORDER BY id_article DESC");
        while ($donnees = $select->fetch()) {
    ?>  
            <div class="card">
            <h2><a href='displayarticle.php?id_article=<?php echo $donnees['id_article']?>'><?php echo $donnees['titre']; ?></a> - <strong style="color: orange"><?php echo $donnees['typeCat']; ?></strong></h2>
            <h5><?php echo $donnees['Prenom']; ?> <?php echo $donnees['Nom']; ?> - <?php echo $donnees['date_article']; ?></h5> 
            <div><img class="fakeimg" src="<?php echo $donnees['link_image']; ?>" onclick="location.href='displayarticle.php?id_article=<?php echo $donnees['id_article']?>'"></div>
            <p class="trailer">"<strong><?php echo $donnees['gros_titre']; ?></strong>"</p>
            </div>
    <?php
    }

    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    ?>
    
  </div>
  <div class="rightcolumn">
    <div class="card">
      <?php
        session_start();
        echo '<img width="150" height="150" src="'.$_SESSION['ImageProfil'].'">';
        echo '<h3>'.$_SESSION['Prenom'].' '.$_SESSION['Nom'].'</h3>';
        echo '<form>';
        echo '<a href="deconnexion.php">Déconnexion</a><br/>';
        echo '</form>';
      ?>
    </div>

    <div class="card">
      <h3>Derniers Commentaires</h3>
      <?php
      try {
          $bdd = new PDO('mysql:host=localhost;dbname=blogtimmy;charset=utf8', 'root', 'root');
      }
      catch(Exception $e) {
          die('Erreur : '.$e->getMessage());
      }
      $reponse = $bdd->query('SELECT * FROM Account INNER JOIN Comment ON Account.id = Comment.id_compte ORDER BY date_commentaire DESC LIMIT 8');
      while ($donnees = $reponse->fetch())  {
      ?>
        <div class="comment">
            <img width="50" height="50" src="<?php echo $donnees['ImageProfil']; ?>"><p><strong><?php echo $donnees['commentaire']; ?></strong></p>
            <p><strong><?php echo $donnees['Prenom']; ?> <?php echo $donnees['Nom']; ?> </strong> à <?php echo $donnees['date_commentaire']; ?></p>
          
        </div><br>
    <?php
    }
    $reponse->closeCursor();
    ?>

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
