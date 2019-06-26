-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 26 juin 2019 à 07:23
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cms_explo`
--

-- --------------------------------------------------------

--
-- Structure de la table `cms`
--

DROP TABLE IF EXISTS `cms`;
CREATE TABLE IF NOT EXISTS `cms` (
  `id_cms` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cms` varchar(255) NOT NULL,
  PRIMARY KEY (`id_cms`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms`
--

INSERT INTO `cms` (`id_cms`, `nom_cms`) VALUES
(1, 'wordpress'),
(2, 'prestashop'),
(3, 'magkit'),
(4, 'magento'),
(5, 'micrologiciel'),
(6, 'shopify'),
(7, 'opencart');

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

DROP TABLE IF EXISTS `informations`;
CREATE TABLE IF NOT EXISTS `informations` (
  `id_informations` int(11) NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  `version` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `siret` varchar(50) DEFAULT NULL,
  `woocommerce` int(11) DEFAULT NULL,
  `raisonsociale` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `codepostal` int(11) DEFAULT NULL,
  `adresse` text,
  `datecreation` date DEFAULT NULL,
  `dirigeant` varchar(255) DEFAULT NULL,
  `speedmobile` int(11) DEFAULT NULL,
  `speedcomputer` int(11) DEFAULT NULL,
  `id_cms` int(11) NOT NULL,
  PRIMARY KEY (`id_informations`),
  KEY `informations_cms_FK` (`id_cms`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `level`
--

DROP TABLE IF EXISTS `level`;
CREATE TABLE IF NOT EXISTS `level` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `statut_level` varchar(255) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `level`
--

INSERT INTO `level` (`id_level`, `statut_level`) VALUES
(1, 'utilisateur'),
(2, 'administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id_membres` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mdp` text NOT NULL,
  `id_level` int(11) NOT NULL,
  PRIMARY KEY (`id_membres`),
  KEY `membres_level_FK` (`id_level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `informations`
--
ALTER TABLE `informations`
  ADD CONSTRAINT `informations_cms_FK` FOREIGN KEY (`id_cms`) REFERENCES `cms` (`id_cms`);

--
-- Contraintes pour la table `membres`
--
ALTER TABLE `membres`
  ADD CONSTRAINT `membres_level_FK` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
