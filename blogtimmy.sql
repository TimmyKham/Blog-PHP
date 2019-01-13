-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  Dim 13 jan. 2019 à 17:08
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blogTimmy`
--

-- --------------------------------------------------------

--
-- Structure de la table `Account`
--

CREATE TABLE `Account` (
  `id` int(255) NOT NULL,
  `Nom` varchar(40) NOT NULL,
  `Prenom` varchar(40) NOT NULL,
  `DateNaissance` date NOT NULL,
  `Email` varchar(40) NOT NULL,
  `MotDePasse` varchar(40) NOT NULL,
  `Profil` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Account`
--

INSERT INTO `Account` (`id`, `Nom`, `Prenom`, `DateNaissance`, `Email`, `MotDePasse`, `Profil`) VALUES
(12, 'Khamsithideth', 'Timmy', '2019-01-08', 'admin@gmail.com', 'admin', 'Admin'),
(13, 'Simple', 'Visiteur', '2018-12-31', 'visiteur@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'User'),
(17, 'Pas', 'Admin', '2019-01-10', 'pasadmin@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `Article`
--

CREATE TABLE `Article` (
  `id_article` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `id_compte` int(11) NOT NULL,
  `date_article` date NOT NULL,
  `gros_titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Article`
--

INSERT INTO `Article` (`id_article`, `titre`, `id_compte`, `date_article`, `gros_titre`, `description`) VALUES
(1, 'Test 1', 12, '2019-01-07', 'COOL', 'INCROYABLE INCROYABLE INCROYABLE INCROYABLE INCROYABLE INCROYABLE '),
(3, 'Test 2', 12, '2019-01-04', 'MAGIQUE', 'COOL COOL COOL COOL COOL COOL COOL COOL COOL COOL COOL COOL '),
(6, 'SUPER SMASH BROS ULTIMATE', 12, '2019-01-08', 'LE JEU DE L\'ANNÉE ', 'WOW WOW WOW WOW WOW');

-- --------------------------------------------------------

--
-- Structure de la table `Comment`
--

CREATE TABLE `Comment` (
  `id_commentaire` int(11) NOT NULL,
  `id_compte` int(11) NOT NULL,
  `commentaire` varchar(128) NOT NULL,
  `date_commentaire` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Comment`
--

INSERT INTO `Comment` (`id_commentaire`, `id_compte`, `commentaire`, `date_commentaire`) VALUES
(1, 12, 'Cool', '2019-01-08'),
(2, 12, 'Le blog\r\n', '2019-01-08'),
(3, 12, 'Test', '2019-01-13');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Account`
--
ALTER TABLE `Account`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Article`
--
ALTER TABLE `Article`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `Comment`
--
ALTER TABLE `Comment`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Account`
--
ALTER TABLE `Account`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `Article`
--
ALTER TABLE `Article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `Comment`
--
ALTER TABLE `Comment`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
