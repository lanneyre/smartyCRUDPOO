-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 18 mai 2021 à 07:05
-- Version du serveur :  10.5.1-MariaDB-log
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jeuxancien`
--
CREATE DATABASE IF NOT EXISTS `jeuxancien` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `jeuxancien`;

-- --------------------------------------------------------

--
-- Structure de la table `jeuxvideoanciens`
--

CREATE TABLE IF NOT EXISTS `jeuxvideoanciens` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `realisateur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plateforme` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jeuxvideoanciens`
--

INSERT INTO `jeuxvideoanciens` (`ID`, `nom`, `realisateur`, `annee`, `plateforme`) VALUES
(1, 'Zelda3', 'Takashi Tezuka', '1991', 'Super Nintendo'),
(2, 'Mario Kart 64', 'Shigeru Miyamoto', '1996', ' Nintendo 64'),
(3, 'Donkey Kong', 'Gunpei Yokoi', '1981', ' Jeu darcade'),
(4, 'Animal Crossing', 'Hisashi Nogami', ' 2001', 'Nintendo 64'),
(6, 'trux', 'jfbd;hkcbj', '2000', 'vnflcbg:');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
