-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 15 jan. 2022 à 22:56
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `base_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

DROP TABLE IF EXISTS `annonce`;
CREATE TABLE IF NOT EXISTS `annonce` (
  `id_annonce` varchar(100) NOT NULL,
  `titre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `emplacement_depart` int NOT NULL,
  `emplacement_arrive` int NOT NULL,
  `garantie` tinyint(1) NOT NULL,
  `tarif` double DEFAULT NULL,
  `type_transport` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fourchette_poid` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fourchette_volume` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `moyen_transport` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `statut` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_publication` datetime NOT NULL,
  `nombre_vues` int DEFAULT NULL,
  `id_transporteur` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_client` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_annonce`),
  KEY `id_transporteur` (`id_transporteur`),
  KEY `id_client` (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=2147483648 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `titre`, `description`, `emplacement_depart`, `emplacement_arrive`, `garantie`, `tarif`, `type_transport`, `fourchette_poid`, `fourchette_volume`, `moyen_transport`, `statut`, `date_publication`, `nombre_vues`, `id_transporteur`, `id_client`) VALUES
('161e32d198117e', 'Transport de matériel de logistique.', 'Bonjour,\r\nJe suis a la recherche pour transporter du matériel de logistique très sensible.\r\nCordialement.', 1, 5, 1, 100000, 'matériel', 'entre 100kg et 1000kg', 'entre 1 mètre cube et 2 mètre cube', 'camion', 'valide', '2022-01-15 08:22:49', 2, NULL, 'TERRAS Juba'),
('1561e32dc0f387d', 'Transport de matériel chirurgical.', 'Bonjour,\r\nJe suis a la recherche d\'un transport pour du matériel médical.\r\nCordialement.', 15, 16, 1, 120000, 'matériel', 'entre 10kg et 100kg', 'entre 1 mètre cube et 2 mètre cube', 'fourgon', 'valide', '2022-01-15 08:25:37', 1, NULL, 'TERRAS Juba'),
('761e32e1b732e3', 'Transport de marchandises.', 'Bonjour,\r\nJe suis a la recherche d\'un transport pour des marchandises de première nécessité.\r\nCordialement.', 7, 3, 1, 150000, 'marchandises', 'entre 100kg et 1000kg', 'entre 2 mètre cube et 5 mètre cube', 'semi-remorque', 'valide', '2022-01-15 08:27:07', 0, NULL, 'TERRAS Juba'),
('561e32eb87971a', 'Transport de matériel hydrolique.', 'Bonjour,\r\nJe suis a la recherche d\'un transport pour du matériel hydrolique.\r\nCordialement.', 5, 6, 1, 200000, 'matériel', 'plus de 1000kg', 'entre 5 mètre cube et 10 mètre cube', 'semi-remorque', 'valide', '2022-01-15 08:29:44', 1, NULL, 'SLIMANI Hafid'),
('1461e32f1133b8e', 'Transport d\'un colis léger.', 'Bonjour,\r\nJe suis a la recherche d\'un transport pour un colis leger.\r\nCordialement.', 14, 15, 0, 40000, 'colis leger', 'entre 1kg et 10kg', 'entre 1 mètre cube et 2 mètre cube', 'fourgon', 'valide', '2022-01-15 08:31:13', 0, NULL, 'SLIMANI Hafid'),
('1861e331790a4fe', 'Transport de matériel de construction.', 'Bonjour,\r\nJe suis a la recherche d\'un transport pour du matériel de construction.\r\nCordialement.', 18, 13, 1, 200000, 'matériel', 'plus de 1000kg', 'entre 5 mètre cube et 10 mètre cube', 'semi-remorque', 'valide', '2022-01-15 08:41:29', 0, NULL, 'SLIMANI Hafid'),
('661e33329b0b2f', 'Transport de produits alimentaires.', 'Bonjour,\r\nJe suis a la recherche d\'un transport pour des produits alimentaires pour du bétail.\r\nCordialement.', 6, 2, 1, 100000, 'marchandises', 'entre 100kg et 1000kg', 'entre 1 mètre cube et 2 mètre cube', 'camion', 'valide', '2022-01-15 08:48:41', 0, NULL, 'MAHFOUDI Samir'),
('1561e33438ad428', 'Transport matériel informatique', 'Bonjour,\r\nJe suis a la recherche d\'un transport pour du matériel informatique.\r\nCordialement.', 15, 16, 1, 90000, 'matériel', 'entre 100kg et 1000kg', 'entre 1 mètre cube et 2 mètre cube', 'camion', 'valide', '2022-01-15 08:53:12', 0, NULL, 'MAHFOUDI Samir'),
('561e334bb555f9', 'Transport matériel electrique.', 'Bonjour,\r\nJe suis a la recherche d\'un transport pour du matériel electrique.\r\nCordialement.', 5, 3, 1, 100000, 'matériel', 'entre 10kg et 100kg', 'entre 1 mètre cube et 2 mètre cube', 'semi-remorque', 'valide', '2022-01-15 08:55:23', 0, NULL, 'MAHFOUDI Samir');

-- --------------------------------------------------------

--
-- Structure de la table `annoncearchivee`
--

DROP TABLE IF EXISTS `annoncearchivee`;
CREATE TABLE IF NOT EXISTS `annoncearchivee` (
  `id_annonce` varchar(100) NOT NULL,
  `titre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `emplacement_depart` int NOT NULL,
  `emplacement_arrive` int NOT NULL,
  `garantie` tinyint(1) NOT NULL,
  `tarif` double DEFAULT NULL,
  `type_transport` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fourchette_poid` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fourchette_volume` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `moyen_transport` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `statut` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_publication` datetime NOT NULL,
  `nombre_vues` int DEFAULT NULL,
  `id_transporteur` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_client` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  KEY `id_transporteur` (`id_transporteur`),
  KEY `id_annonce` (`id_annonce`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3562 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `annonce_image`
--

DROP TABLE IF EXISTS `annonce_image`;
CREATE TABLE IF NOT EXISTS `annonce_image` (
  `id_image` varchar(100) NOT NULL,
  `id_annonce` varchar(100) NOT NULL,
  KEY `id_annonce` (`id_annonce`),
  KEY `id_image` (`id_image`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `annonce_image`
--

INSERT INTO `annonce_image` (`id_image`, `id_annonce`) VALUES
('561e32d1981181', '161e32d198117e'),
('1661e32dc0f3887', '1561e32dc0f387d'),
('361e32e1b732eb', '761e32e1b732e3'),
('661e32eb879720', '561e32eb87971a'),
('1561e32f1133b94', '1461e32f1133b8e'),
('1361e331790a502', '1861e331790a4fe'),
('261e33329b0b33', '661e33329b0b2f'),
('1661e33438ad42f', '1561e33438ad428'),
('361e334bb555ff', '561e334bb555f9');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prenom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mot_de_passe` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `adresse` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `numero_telephone` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `mot_de_passe`, `email`, `adresse`, `numero_telephone`) VALUES
('TERRAS Juba', 'TERRAS', 'Juba', '123', 'ij_terras@esi.dz', 'Tala Mansour, Bouhinoune.', '0541251311'),
('MAHFOUDI Samir', 'MAHFOUDI', 'Samir', '123', 'mahfoudisamir@gmail.com', 'Alger centre, Alger.', '0542851324'),
('SLIMANI Hafid', 'SLIMANI', 'Hafid', '123', 'slimanihafid@esi.dz', 'Lekser, Bejaia.', '0534127789');

-- --------------------------------------------------------

--
-- Structure de la table `demandecertification`
--

DROP TABLE IF EXISTS `demandecertification`;
CREATE TABLE IF NOT EXISTS `demandecertification` (
  `id_demande` int NOT NULL AUTO_INCREMENT,
  `id_transporteur` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `statut` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `chemin` varchar(500) NOT NULL,
  PRIMARY KEY (`id_demande`),
  KEY `id_transporteur` (`id_transporteur`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `demandecertification`
--

INSERT INTO `demandecertification` (`id_demande`, `id_transporteur`, `statut`, `chemin`) VALUES
(9, 'NAIB Massinissa', 'en attente', '../Certifications/certification.pdf'),
(10, 'LARBI Ahmed', 'en attente', '../Certifications/certification.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `fourchette_poid`
--

DROP TABLE IF EXISTS `fourchette_poid`;
CREATE TABLE IF NOT EXISTS `fourchette_poid` (
  `id_fourchette` int NOT NULL AUTO_INCREMENT,
  `libele` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_fourchette`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `fourchette_poid`
--

INSERT INTO `fourchette_poid` (`id_fourchette`, `libele`) VALUES
(9, 'entre 1kg et 10kg'),
(10, 'entre 10kg et 100kg'),
(11, 'entre 100kg et 1000kg'),
(12, 'plus de 1000kg');

-- --------------------------------------------------------

--
-- Structure de la table `fourchette_volume`
--

DROP TABLE IF EXISTS `fourchette_volume`;
CREATE TABLE IF NOT EXISTS `fourchette_volume` (
  `id_fourchette` int NOT NULL AUTO_INCREMENT,
  `libele` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_fourchette`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `fourchette_volume`
--

INSERT INTO `fourchette_volume` (`id_fourchette`, `libele`) VALUES
(5, 'entre 1 mètre cube et 2 mètre cube'),
(6, 'entre 2 mètre cube et 5 mètre cube'),
(7, 'moins d\'un mètre cube'),
(8, 'entre 5 mètre cube et 10 mètre cube'),
(9, 'plus de 10 mètre cube');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id_image` varchar(100) NOT NULL,
  `chemin` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_image`)
) ENGINE=MyISAM AUTO_INCREMENT=9223372036854775808 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id_image`, `chemin`) VALUES
('561e32d1981181', '../Assets/logistique.jpg'),
('1661e32dc0f3887', '../Assets/medical.jpg'),
('361e32e1b732eb', '../Assets/marchandise.jpg'),
('661e32eb879720', '../Assets/hydrolique.jpg'),
('1561e32f1133b94', '../Assets/coli.jpeg'),
('1361e331790a502', '../Assets/construction.jfif'),
('261e33329b0b33', '../Assets/marchandise.jpg'),
('1661e33438ad42f', '../Assets/informatique.jfif'),
('361e334bb555ff', '../Assets/electrique.jfif'),
('black-friday.jpg61e344fab1cd8', '../News/black-friday.jpg'),
('edahabia.jpg61e345c955006', '../News/edahabia.jpg'),
('black-friday.jpg61e346c6c1646', '../News/black-friday.jpg'),
('black-friday.jpg61e3473dda7c8', '../News/black-friday.jpg'),
('black-friday.jpg61e34f7657d07', '../News/black-friday.jpg'),
('edahabia.jpg61e34fd807bc6', '../News/edahabia.jpg'),
('متجر.jpg61e35046985ce', '../News/متجر.jpg'),
('maintenance.png61e350ae6ad42', '../News/maintenance.png');

-- --------------------------------------------------------

--
-- Structure de la table `moyen_transport`
--

DROP TABLE IF EXISTS `moyen_transport`;
CREATE TABLE IF NOT EXISTS `moyen_transport` (
  `id_moyen` int NOT NULL AUTO_INCREMENT,
  `libele` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_moyen`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `moyen_transport`
--

INSERT INTO `moyen_transport` (`id_moyen`, `libele`) VALUES
(6, 'camion'),
(7, 'avion'),
(8, 'bateau'),
(9, 'train'),
(10, 'fourgon'),
(11, 'semi-remorque');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id_news` varchar(100) NOT NULL,
  `titre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nombre_vues` int DEFAULT '0',
  `date_ajout` date NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=MyISAM AUTO_INCREMENT=2147483648 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id_news`, `titre`, `description`, `nombre_vues`, `date_ajout`) VALUES
('Black Friday61e34f7657cfe', 'Black Friday', 'A notre chère clientèle,\r\nProfitez d\'un bon de réduction de 20% sur tout type de transport.\r\nProfitez on tant qu\'il est temps.', 0, '2022-01-06'),
('Paiement en ligne.61e34fd807bc2', 'Paiement en ligne.', 'A notre chère clientèle,\r\nNous mettons dés a présent a votre disposition la possibilité de paiement en ligne via carte edahabaia.\r\nCordialement.', 0, '2022-01-13'),
('Lancement de notre application mobile.61e35046985c9', 'Lancement de notre application mobile.', 'A notre chère clientèle,\r\nNous vous informons que nous lançons la version mobile de notre site web, disponible dés a présent sur ios et android.\r\nCordialement.', 2, '2022-01-14'),
('Maintenance informatique.61e350ae6ad3d', 'Maintenance informatique.', 'A notre chère clientèle,\r\nNous vous informons que notre site sera disponibles durant les prochaines heures pour des raisons de maintenance.\r\nNous vous remercions pour votre compréhension.\r\nCordialement.', 1, '2022-01-08');

-- --------------------------------------------------------

--
-- Structure de la table `news_image`
--

DROP TABLE IF EXISTS `news_image`;
CREATE TABLE IF NOT EXISTS `news_image` (
  `id_image` varchar(100) NOT NULL,
  `id_news` varchar(100) NOT NULL,
  KEY `id_image` (`id_image`) USING BTREE,
  KEY `id_news` (`id_news`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `news_image`
--

INSERT INTO `news_image` (`id_image`, `id_news`) VALUES
('black-friday.jpg61e34f7657d07', 'Black Friday61e34f7657cfe'),
('edahabia.jpg61e34fd807bc6', 'Paiement en ligne.61e34fd807bc2'),
('متجر.jpg61e35046985ce', 'Lancement de notre application mobile.61e35046985c9'),
('maintenance.png61e350ae6ad42', 'Maintenance informatique.61e350ae6ad3d');

-- --------------------------------------------------------

--
-- Structure de la table `signalement`
--

DROP TABLE IF EXISTS `signalement`;
CREATE TABLE IF NOT EXISTS `signalement` (
  `id_signalement` int NOT NULL AUTO_INCREMENT,
  `description` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `titre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_transporteur` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_client` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `emetteur` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_annonce` varchar(100) NOT NULL,
  PRIMARY KEY (`id_signalement`),
  KEY `id_transporteur` (`id_transporteur`),
  KEY `id_client` (`id_client`),
  KEY `id_annonce` (`id_annonce`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `transporteur`
--

DROP TABLE IF EXISTS `transporteur`;
CREATE TABLE IF NOT EXISTS `transporteur` (
  `id_transporteur` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prenom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mot_de_passe` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `adresse` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `certifie` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `numero_telephone` char(10) NOT NULL,
  PRIMARY KEY (`id_transporteur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `transporteur`
--

INSERT INTO `transporteur` (`id_transporteur`, `nom`, `prenom`, `mot_de_passe`, `email`, `adresse`, `certifie`, `numero_telephone`) VALUES
('NAIB Massinissa', 'NAIB', 'Massinissa', '123', 'naibmassinissa@gmail.com', 'Nouvelle ville, Tizi Ouzou.', 'en attente', '0532119987'),
('LEKHEL Mohammed', 'LEKHEL', 'Mohammed', '123', 'lekhelmohammed@gmail.com', 'Hydra, Alger.', 'en attente', '0622374591'),
('LARBI Ahmed', 'LARBI', 'Ahmed', '123', 'larbiahmed@gmail.com', 'Corso, Boumerdes.', 'en attente', '0788912364');

-- --------------------------------------------------------

--
-- Structure de la table `transporteur_wilaya`
--

DROP TABLE IF EXISTS `transporteur_wilaya`;
CREATE TABLE IF NOT EXISTS `transporteur_wilaya` (
  `id_transporteur` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `num_wilaya` int NOT NULL,
  KEY `id_transporteur` (`id_transporteur`),
  KEY `num_wilaya` (`num_wilaya`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `transporteur_wilaya`
--

INSERT INTO `transporteur_wilaya` (`id_transporteur`, `num_wilaya`) VALUES
('NAIB Massinissa', 1),
('NAIB Massinissa', 2),
('NAIB Massinissa', 3),
('NAIB Massinissa', 4),
('NAIB Massinissa', 5),
('LEKHEL Mohammed', 1),
('LEKHEL Mohammed', 2),
('LEKHEL Mohammed', 3),
('LEKHEL Mohammed', 4),
('LEKHEL Mohammed', 5),
('LEKHEL Mohammed', 6),
('LEKHEL Mohammed', 7),
('LEKHEL Mohammed', 8),
('LEKHEL Mohammed', 9),
('LEKHEL Mohammed', 10),
('LARBI Ahmed', 1),
('LARBI Ahmed', 2),
('LARBI Ahmed', 3),
('LARBI Ahmed', 4),
('LARBI Ahmed', 5),
('LARBI Ahmed', 6),
('LARBI Ahmed', 7),
('LARBI Ahmed', 8),
('LARBI Ahmed', 9),
('LARBI Ahmed', 10),
('LARBI Ahmed', 11),
('LARBI Ahmed', 12),
('LARBI Ahmed', 13),
('LARBI Ahmed', 14),
('LARBI Ahmed', 15),
('LARBI Ahmed', 16),
('LARBI Ahmed', 17),
('LARBI Ahmed', 18),
('LARBI Ahmed', 19),
('LARBI Ahmed', 20),
('LARBI Ahmed', 21),
('LARBI Ahmed', 22),
('LARBI Ahmed', 23),
('LARBI Ahmed', 24),
('LARBI Ahmed', 25),
('LARBI Ahmed', 26),
('LARBI Ahmed', 27),
('LARBI Ahmed', 28),
('LARBI Ahmed', 29),
('LARBI Ahmed', 30),
('LARBI Ahmed', 31),
('LARBI Ahmed', 32),
('LARBI Ahmed', 33),
('LARBI Ahmed', 34),
('LARBI Ahmed', 35),
('LARBI Ahmed', 36),
('LARBI Ahmed', 37),
('LARBI Ahmed', 38),
('LARBI Ahmed', 39),
('LARBI Ahmed', 40),
('LARBI Ahmed', 41),
('LARBI Ahmed', 42),
('LARBI Ahmed', 43),
('LARBI Ahmed', 44),
('LARBI Ahmed', 45),
('LARBI Ahmed', 46),
('LARBI Ahmed', 47),
('LARBI Ahmed', 48);

-- --------------------------------------------------------

--
-- Structure de la table `type_transport`
--

DROP TABLE IF EXISTS `type_transport`;
CREATE TABLE IF NOT EXISTS `type_transport` (
  `id_type` int NOT NULL AUTO_INCREMENT,
  `libele` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `garantie` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `type_transport`
--

INSERT INTO `type_transport` (`id_type`, `libele`, `garantie`) VALUES
(5, 'lettre', 0),
(6, 'colis leger', 0),
(7, 'meuble', 1),
(8, 'électroménager', 1),
(9, 'déménagement', 1),
(10, 'marchandises', 1),
(11, 'matériel', 1);

-- --------------------------------------------------------

--
-- Structure de la table `wilaya`
--

DROP TABLE IF EXISTS `wilaya`;
CREATE TABLE IF NOT EXISTS `wilaya` (
  `num_wilaya` int NOT NULL,
  `libele` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`num_wilaya`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `wilaya`
--

INSERT INTO `wilaya` (`num_wilaya`, `libele`) VALUES
(1, 'Adrar'),
(2, 'Chlef'),
(3, 'Laghouat'),
(4, 'Oum El Bouaghi'),
(5, 'Batna'),
(6, 'Bejaia'),
(7, 'Biskra'),
(8, 'Bechar'),
(9, 'Blida'),
(10, 'Buira'),
(11, 'Tamanrasset'),
(12, 'Tebessa'),
(13, 'Tlemcen'),
(14, 'Tiaret'),
(15, 'Tizi Ouzou'),
(16, 'Alger'),
(17, 'Djelfa'),
(18, 'Jijel'),
(19, 'Setif'),
(20, 'Saida'),
(21, 'Skikda'),
(22, 'Sidi Bel Abbes'),
(23, 'Annaba'),
(24, 'Guelma'),
(25, 'Constantine'),
(26, 'Medea'),
(27, 'Mostaganem'),
(28, 'M\'Sila'),
(29, 'Mascara'),
(30, 'Ouargla'),
(31, 'Oran'),
(32, 'El Bayadh'),
(33, 'Illizi'),
(34, 'Bourdj Bou Arreridj'),
(35, 'Boumerdes'),
(36, 'El Tarf'),
(37, 'Tindouf'),
(38, 'Tissemsilt'),
(39, 'El Oued'),
(40, 'Khenchela'),
(41, 'Souk Ahras'),
(42, 'Tipaza'),
(43, 'Mila'),
(44, 'Ain Defla'),
(45, 'Naama'),
(46, 'Ain Temouchent'),
(47, 'Gherdaia'),
(48, 'Relizane');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
