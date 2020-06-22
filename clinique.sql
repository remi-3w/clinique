-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 28 mai 2020 à 14:24
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `clinique`
--

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `datedécès` date DEFAULT NULL,
  `idPropriétaire` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `idAnimal` int(11) NOT NULL,
  `taille` int(11) DEFAULT NULL,
  `poids` int(11) DEFAULT NULL,
  `idRace` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAnimal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `chien`
--

DROP TABLE IF EXISTS `chien`;
CREATE TABLE IF NOT EXISTS `chien` (
  `idAnimal` int(11) NOT NULL,
  `taille` int(11) DEFAULT NULL,
  `poids` int(11) DEFAULT NULL,
  `idRace` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAnimal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `dossier`
--

DROP TABLE IF EXISTS `dossier`;
CREATE TABLE IF NOT EXISTS `dossier` (
  `id` int(11) NOT NULL,
  `Antécedants` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `effectuer`
--

DROP TABLE IF EXISTS `effectuer`;
CREATE TABLE IF NOT EXISTS `effectuer` (
  `id` int(11) NOT NULL,
  `id_1` int(11) NOT NULL,
  `idGarde` int(11) DEFAULT NULL,
  `idVétérinaire` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`id_1`),
  KEY `id_1` (`id_1`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `garde`
--

DROP TABLE IF EXISTS `garde`;
CREATE TABLE IF NOT EXISTS `garde` (
  `id` int(11) NOT NULL,
  `jour` date DEFAULT NULL,
  `heure_Début` time DEFAULT NULL,
  `heure_fin` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `horaire`
--

DROP TABLE IF EXISTS `horaire`;
CREATE TABLE IF NOT EXISTS `horaire` (
  `id` int(11) NOT NULL,
  `jour` date DEFAULT NULL,
  `heure_Début` time DEFAULT NULL,
  `heure_fin` decimal(15,2) DEFAULT NULL,
  `idVétérinaire` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `médicament`
--

DROP TABLE IF EXISTS `médicament`;
CREATE TABLE IF NOT EXISTS `médicament` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `dosage` int(11) DEFAULT NULL,
  `indications` varchar(50) DEFAULT NULL,
  `effetsSecondaires` varchar(50) DEFAULT NULL,
  `laboratoire` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `prescrire`
--

DROP TABLE IF EXISTS `prescrire`;
CREATE TABLE IF NOT EXISTS `prescrire` (
  `id` int(11) NOT NULL,
  `id_1` int(11) NOT NULL,
  `idVisite` int(11) DEFAULT NULL,
  `idMedicament` int(11) DEFAULT NULL,
  `posologie` decimal(15,5) DEFAULT NULL,
  PRIMARY KEY (`id`,`id_1`),
  KEY `id_1` (`id_1`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `propriétaire`
--

DROP TABLE IF EXISTS `propriétaire`;
CREATE TABLE IF NOT EXISTS `propriétaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `Prénom` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `cp` int(11) DEFAULT NULL,
  `téléphone` int(11) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `race__chat`
--

DROP TABLE IF EXISTS `race__chat`;
CREATE TABLE IF NOT EXISTS `race__chat` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `race__chien`
--

DROP TABLE IF EXISTS `race__chien`;
CREATE TABLE IF NOT EXISTS `race__chien` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

DROP TABLE IF EXISTS `visite`;
CREATE TABLE IF NOT EXISTS `visite` (
  `id` int(11) NOT NULL,
  `dateVisite` date DEFAULT NULL,
  `raison` text,
  `idDossier` int(11) DEFAULT NULL,
  `id_Animal` int(11) DEFAULT NULL,
  `idVétérinaire` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vétérinaire`
--

DROP TABLE IF EXISTS `vétérinaire`;
CREATE TABLE IF NOT EXISTS `vétérinaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prénom` varchar(255) DEFAULT NULL,
  `téléphone` int(11) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
