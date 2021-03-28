-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 28 mars 2021 à 10:28
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `msprfrontsoundnations`
--

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

DROP TABLE IF EXISTS `artiste`;
CREATE TABLE IF NOT EXISTS `artiste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_artiste` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `artiste`
--

INSERT INTO `artiste` (`id`, `nom_artiste`) VALUES
(1, 'David Guetta'),
(2, 'Rihanna'),
(3, 'Ariana Grande');

-- --------------------------------------------------------

--
-- Structure de la table `billeterie`
--

DROP TABLE IF EXISTS `billeterie`;
CREATE TABLE IF NOT EXISTS `billeterie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_prix` varchar(100) NOT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `billeterie`
--

INSERT INTO `billeterie` (`id`, `date_prix`, `prix`) VALUES
(1, 'Pass 3 jour', 90),
(2, 'Vendredi 18 juillet', 40),
(3, 'Samedi 19 juillet', 40),
(4, 'Dimanche 20 juillet', 40),
(5, 'Lundi 21 juillet', 40),
(6, 'Mardi 22 juillet', 40);

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

DROP TABLE IF EXISTS `formulaire`;
CREATE TABLE IF NOT EXISTS `formulaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formulaire`
--

INSERT INTO `formulaire` (`id`, `nom`, `prenom`, `mail`, `phone`, `message`) VALUES
(2, 'dfergg', '', 'ferzf.cc@gmal.c', '0949992', 'ezfertgrth'),
(3, 'marjorie', '', 'marjorie@gmail.com', '034834948', 'Le p\'tit message du formulaire'),
(5, 'Neyret', 'Mathieu', 'neyret.mathieu69@gmail.com', '0633266589', 'Petit formulaire de mathieu');

-- --------------------------------------------------------

--
-- Structure de la table `heure`
--

DROP TABLE IF EXISTS `heure`;
CREATE TABLE IF NOT EXISTS `heure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heure` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `heure`
--

INSERT INTO `heure` (`id`, `heure`) VALUES
(1, '20H'),
(2, '21H'),
(3, '22H');

-- --------------------------------------------------------

--
-- Structure de la table `programmes`
--

DROP TABLE IF EXISTS `programmes`;
CREATE TABLE IF NOT EXISTS `programmes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `idArtiste` int(11) NOT NULL,
  `idScene` int(11) NOT NULL,
  `idHeure` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idArtiste` (`idArtiste`),
  KEY `idScene` (`idScene`),
  KEY `idHeure` (`idHeure`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `programmes`
--

INSERT INTO `programmes` (`id`, `date`, `idArtiste`, `idScene`, `idHeure`) VALUES
(1, 'Vendredi 18 juillet', 1, 1, 1),
(2, 'Samedi 19 juillet', 2, 3, 3),
(3, 'Dimanche 20 juillet', 1, 2, 2),
(4, 'Lundi 21 juillet', 3, 1, 2),
(5, 'Mardi 22 juillet', 2, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `scene`
--

DROP TABLE IF EXISTS `scene`;
CREATE TABLE IF NOT EXISTS `scene` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_scene` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `scene`
--

INSERT INTO `scene` (`id`, `nom_scene`) VALUES
(1, 'Tour Eiffel'),
(2, 'Notre-Dame de Paris'),
(3, 'Gare Montparnasse');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `programmes`
--
ALTER TABLE `programmes`
  ADD CONSTRAINT `ArtisteProgrammes` FOREIGN KEY (`idArtiste`) REFERENCES `artiste` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `HeureProgrammes` FOREIGN KEY (`idHeure`) REFERENCES `heure` (`id`),
  ADD CONSTRAINT `SceneProgrammes` FOREIGN KEY (`idScene`) REFERENCES `scene` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
