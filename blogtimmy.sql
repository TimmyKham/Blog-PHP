# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Hôte: 127.0.0.1 (MySQL 5.5.5-10.3.11-MariaDB)
# Base de données: blogtimmy
# Temps de génération: 2019-02-28 18:51:19 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table Account
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Account`;

CREATE TABLE `Account` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(40) NOT NULL,
  `Prenom` varchar(40) NOT NULL,
  `DateNaissance` date NOT NULL,
  `Email` varchar(40) NOT NULL,
  `MotDePasse` varchar(40) NOT NULL,
  `Profil` varchar(40) NOT NULL,
  `ImageProfil` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Account` WRITE;
/*!40000 ALTER TABLE `Account` DISABLE KEYS */;

INSERT INTO `Account` (`id`, `Nom`, `Prenom`, `DateNaissance`, `Email`, `MotDePasse`, `Profil`, `ImageProfil`)
VALUES
	(12,'Khamsithideth','Timmy','2019-01-03','admin@gmail.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','Admin','https://www.celuksilvervillage.com/images/user.png'),
	(13,'Curie','Marie','2019-02-14','cmarie@gmail.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','User','https://fr.cdn.v5.futura-sciences.com/buildsv6/images/largeoriginal/d/5/e/d5e0027ca1_50141908_curie-m-1000.jpg'),
	(17,'Schrödinger','Erwin','2019-01-10','serwin@gmail.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','Admin','data:image/jpeg;base64,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'),
	(19,'Tesla','Nikola','2019-02-06','tnikola@gmail.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','User','https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Tesla_Sarony.jpg/400px-Tesla_Sarony.jpg'),
	(20,'Einstein','Albert','2019-02-06','ealbert@gmail.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','User','https://static.mediapart.fr/etmagine/default/files/2017/12/10/estzin.jpg'),
	(21,'Hawking','Stephen','2019-02-06','hstephen@gmail.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','User','https://lamenteesmaravillosa.com/wp-content/uploads/2018/01/stephen-hawking.jpg'),
	(26,'Musk','Elon','2019-02-20','melon@gmail.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','User','https://trends.levif.be/medias/12384/6340841.jpg'),
	(27,'Gogh','Van','2019-02-20','gvan@gmail.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','User','https://aws-tiqets-cdn.imgix.net/images/content/9d3735fc2e334bc3a3b68822a2e801b4.jpg?auto=format&fit=crop&ixlib=python-1.1.2&q=25&s=8e090281269bd76640dc6bd57ef7ba3a&w=400&h=320&dpr=2.625'),
	(28,'random','user','2019-02-28','randomuser@gmail.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','User','https://image.flaticon.com/icons/png/512/622/622848.png');

/*!40000 ALTER TABLE `Account` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table Article
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Article`;

CREATE TABLE `Article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `id_compte` int(11) NOT NULL,
  `date_article` date NOT NULL,
  `gros_titre` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `link_image` varchar(255) NOT NULL,
  `id_cat` varchar(45) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Article` WRITE;
/*!40000 ALTER TABLE `Article` DISABLE KEYS */;

INSERT INTO `Article` (`id_article`, `titre`, `id_compte`, `date_article`, `gros_titre`, `description`, `link_image`, `id_cat`)
VALUES
	(1,'AVENGERS ENDGAME',12,'2019-01-07','LE PLAN DE DOCTOR STRANGE','Nick Fury, le directeur du S.H.I.E.L.D., l\'organisation qui préserve la paix dans le monde, veut former une équipe d\'irréductibles pour empêcher la destruction du monde. Iron Man, Hulk, Thor, Captain America, Hawkeye et Black Widow répondent présents. La nouvelle équipe, baptisée Avengers, a beau sembler soudée, il reste encore à ses illustres membres à apprendre à travailler ensemble.','http://cdn.collider.com/wp-content/uploads/2019/01/avengers-endgame-slice-600x200.jpg','4'),
	(3,'KINGDOM HEARTS',17,'2019-01-04','MAGIQUE','Kingdom Hearts (キングダム ハーツ, Kingudamu Hātsu?) est une série de jeux vidéo d\'action-RPG développée et éditée par Square Enix, qui marque l\'association entre Disney Interactive Studios et l\'univers des jeux de Square sous la direction de Tetsuya Nomura. Kingdom Hearts est donc un crossover entre plusieurs personnages de Square et l\'univers Disney qui a lieu dans un monde parallèle créé spécialement pour la série. Dans chacun des opus, les voix des personnages de Disney sont interprétées par les mêmes célébrités que dans leur œuvre d\'origine.\n\nLes personnages de la franchise de Square Enix Final Fantasy font eux aussi des apparitions et interagissent avec le joueur et avec les personnages de Disney. La série tourne autour de la recherche des amis de Sora, le personnage principal, et de ses rencontres avec les personnages de Disney et de Final Fantasy au travers de différents mondes.','http://www.leroystudio.fr/wordpress/wp-content/uploads/2018/08/Banni%C3%A8re.png','3'),
	(6,'SUPER SMASH BROS ULTIMATE',12,'2019-01-08','INCROYABLE','Super Smash Bros. consiste en l\'affrontement de nombreux personnages de Nintendo comme Mario, Link ou Pikachu sur divers terrains, le but étant de sortir l\'un (ou les) adversaire(s) du ring. La série Super Smash Bros. présente une spécificité importante par rapport à la plupart des jeux de combat : à chaque fois qu\'un personnage reçoit des dégâts, ce n\'est pas une « jauge de vie » qui diminue, mais un pourcentage de dégâts qui augmente. Ce pourcentage peut dépasser 100 %, et peut même aller jusqu\'à 999 %. Plus le pourcentage de dégâts est haut, plus il est facile d\'éjecter le personnage hors du stade. Lorsqu\'un personnage est éjecté, il peut tenter de revenir sur le terrain grâce à ses trois sauts : certains personnages peuvent sauter plus haut que d\'autres. Certains peuvent même voler (temporairement), comme Kirby. De plus, il est plus facile d\'éjecter un personnage léger qu\'un personnage lourd. Les commandes de Super Smash Bros. sont très simples par rapport aux jeux de combat traditionnels. Alors que ces derniers demandent au joueur de mémoriser des combinaisons de boutons souvent spécifiques aux personnages (comme dans Street Fighter et Tekken), Super Smash Bros. fait intervenir les mêmes commandes pour tous les personnages5, chaque mouvement ne demandant que l\'appui d\'un bouton avec le stick dans une direction donnée. Les personnages ne sont pas constamment en face de leur adversaire, et peuvent se déplacer librement. Enfin, une grande variété de mouvements est disponible : il est par exemple possible d\'attraper puis de jeter les autres personnages.','https://i.imgur.com/aEwNXVn.jpg','3'),
	(12,'BMW M340i xDrive',12,'2019-02-20','LA PERFORMANCE PORTÉE À LA PERFECTION.','BMW M est synonyme de sportivité à l\'état pur et la BMW M340i xDrive* n’en est rien d\'autre que l\'incarnation. L’ambition : porter la performance à la perfection, dans les moindres détails. Pour procurer des qualités dynamiques stupéfiantes et des poussées d\'adrénaline à chaque accélération.','https://www.ibericarcuzco.es/wp-content/themes/dt-the7-BMW/imagenes/seccionseo-adornos/ficha-modelos/bmw-serie-3--fnd-banner--cuzco.jpg','1'),
	(13,'Van Gogh, la nuit étoilée',12,'2019-02-20','L\'EXPOSITION IMMERSIVE À L\'ATELIER DES LUMIÈRES','L\'Atelier des Lumières nous entraine dans l\'univers de Van Gogh, le temps d\'une nouvelle exposition immersive du 22 février au 31 décembre 2019. Pendant 35 minutes, on se promène dans les plus beaux tableaux de Van Gogh, à la redécouverte de ce génie incompris de son époque.','https://www.kazoart.com/blog/wp-content/uploads/2017/03/van-gogh-la-nuit-etoilee-ciel-kazoart.jpg','2');

/*!40000 ALTER TABLE `Article` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table Category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Category`;

CREATE TABLE `Category` (
  `idCategory` int(11) NOT NULL AUTO_INCREMENT,
  `typeCat` varchar(45) NOT NULL,
  PRIMARY KEY (`idCategory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `Category` WRITE;
/*!40000 ALTER TABLE `Category` DISABLE KEYS */;

INSERT INTO `Category` (`idCategory`, `typeCat`)
VALUES
	(1,'Voiture'),
	(2,'Art'),
	(3,'Jeux Video'),
	(4,'Cinéma'),
	(5,'Musique'),
	(6,'Mode'),
	(7,'Politique');

/*!40000 ALTER TABLE `Category` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table Comment
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Comment`;

CREATE TABLE `Comment` (
  `id_article` int(11) NOT NULL,
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `id_compte` int(11) NOT NULL,
  `commentaire` varchar(128) NOT NULL,
  `date_commentaire` datetime NOT NULL,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Comment` WRITE;
/*!40000 ALTER TABLE `Comment` DISABLE KEYS */;

INSERT INTO `Comment` (`id_article`, `id_commentaire`, `id_compte`, `commentaire`, `date_commentaire`)
VALUES
	(1,1,12,'Cool','2019-01-08 00:00:00'),
	(6,2,17,'Bonjour','2019-01-08 00:00:00'),
	(6,5,18,'Incroyable','2019-02-06 00:00:00'),
	(1,7,20,'EZ PIZI','2019-02-07 00:00:00'),
	(6,8,11,'SUPER SMAAAAAAAASH','2019-02-07 00:00:00'),
	(3,9,20,'E=MC2','2019-02-07 00:00:00'),
	(3,10,13,'Physique Chimie','2019-02-11 00:00:00'),
	(6,11,11,'Lundi','2019-02-11 00:00:00'),
	(1,12,17,'MORT OU VIVANT','2019-02-11 00:00:00'),
	(6,15,18,'SMOKE W***','2019-02-11 00:00:00'),
	(6,16,19,'TASERRRRRRRR','2019-02-11 00:00:00'),
	(6,21,26,'Mode sentinelle !','2019-02-20 00:00:00'),
	(13,22,27,'Venez vite','2019-02-20 00:00:00'),
	(12,24,26,'Polution','2019-02-20 00:00:00'),
	(12,25,12,'M4 c\'est mieux','2019-02-28 09:24:10');

/*!40000 ALTER TABLE `Comment` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
