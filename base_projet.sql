-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 28 déc. 2021 à 08:13
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
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id_administrateur` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nom` char(255) NOT NULL,
  `prenom` char(255) NOT NULL,
  `mot_de_passe` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `adresse` char(255) NOT NULL,
  PRIMARY KEY (`id_administrateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

DROP TABLE IF EXISTS `annonce`;
CREATE TABLE IF NOT EXISTS `annonce` (
  `id_annonce` int NOT NULL AUTO_INCREMENT,
  `titre` char(100) NOT NULL,
  `description` char(255) NOT NULL,
  `emplacement_depart` char(255) NOT NULL,
  `emplacement_arrive` char(255) NOT NULL,
  `garantie` tinyint(1) NOT NULL,
  `tarif` double DEFAULT NULL,
  `type_transport` char(100) DEFAULT NULL,
  `fourchette_poid` char(100) DEFAULT NULL,
  `fourchette_volume` char(100) DEFAULT NULL,
  `moyen_transport` char(100) DEFAULT NULL,
  `statut` char(100) NOT NULL,
  `date_publication` datetime NOT NULL,
  `nombre_vues` int DEFAULT NULL,
  `id_transporteur` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_client` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_annonce`),
  KEY `id_transporteur` (`id_transporteur`),
  KEY `id_client` (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `titre`, `description`, `emplacement_depart`, `emplacement_arrive`, `garantie`, `tarif`, `type_transport`, `fourchette_poid`, `fourchette_volume`, `moyen_transport`, `statut`, `date_publication`, `nombre_vues`, `id_transporteur`, `id_client`) VALUES
(1, 'Transport de matériels hydroliques.', 'Bonjour,\r\nJe suis a la recherche d\'un transport d\'un matériel de hydrolique depuis la ville de Blida vers la ville de Cherchel,Tipaza. C\"est un transport délicat qui require aucun dommage sur le materiel transporté', 'la ville de Blida.', 'Centre-ville de Cherchel,Tipaza.', 1, 50000, 'Materiels hydroliques', 'Entre 1000 a 10000 kg.', 'Entre 0 a 100 mètres cubes.', 'Transport par camions.', 'valide', '2021-12-21 15:00:50', 0, '0', '0'),
(2, 'Transport d\'un colie de toute urgence.', 'Bonjour,\r\nJe suis a la recherche d\'un transport pour un colie de la plus haute importance depuis la ville d\'Oran vers la ville de Berrouaghia,Medea. Le transport doit etre effectuée le plus vite possible', 'la ville d\'Oran', 'Berrouaghia,Medea', 0, 20000, 'Colis leger', 'Entre 1 a 10 kg.', 'Entre 0 a 1 mètres cubes.', 'N\'import quel type', 'valide', '2021-12-21 16:00:50', 6, '0', '0'),
(3, 'Transport de transformateurs electriques.', 'Bonjour,\r\nMa société est a la recherche d\'un transport pour 3 transformateurs électriques depuis la ville de Tizi-Ouzou vers la ville de Boudouaou, Boumerdes.\r\nCordialement.', 'Ville de Tizi-Ouzou.', 'ville de Boudouaou, Boumerdes', 1, 90000, 'Transport de machines industriels.', 'Entre 1000 a 10000 kg.', 'Entre 1 a 10  mètres cubes.', 'Par camions.', 'valide', '2021-12-21 14:30:31', 9, '0', '0'),
(4, 'Transport de materiels medicales.', 'Bonjour,\r\nMa société est a la recherche d\'un transport pour du materils medicale tres chere depuis le port d\'Arzew,Oran vers l\'e CHU Nadir Mohamed de la ville de Tizi-Ouzou.\r\nCordialement.', 'Arzew,Oran.', 'CHU Nadir Mohamed de la ville de Tizi-Ouzou.', 1, 120000, 'Transport de materiels medicales.', 'Entre 1000 a 10000 kg.', 'Entre 10 a 100  mètres cubes.', 'Par camions.', 'en attente', '2021-12-21 17:30:31', 2, '0', '0'),
(5, 'Transport de marchandises.', 'Bonjour,\r\nje cherche un transport pour transporter des marchandises de Alger-Centre vers El biar.\r\nCordialement.', 'Alger-Centre.', 'El-Biar, Alger.', 0, 5000, 'Transport de marchandises.', 'Entre 10 et 100 kg.', 'Entre 1 et 10 mètres cubes.', 'Par camionnette.', 'valide', '2021-12-21 19:39:47', 4, '0', '0'),
(6, 'Transport de marchandises.', 'Bonjour,\r\nje cherche un transport pour transporter des marchandises de Alger-Centre vers El biar.\r\nCordialement.', 'Alger-Centre.', 'El-Biar, Alger.', 0, 5000, 'Transport de marchandises.', 'Entre 10 et 100 kg.', 'Entre 1 et 10 mètres cubes.', 'Par camionnette.', 'valide', '2021-12-21 19:39:47', 3, '0', '0'),
(7, 'Transport de marchandises.', 'Bonjour,\r\nje cherche un transport pour transporter des marchandises de Alger-Centre vers El biar.\r\nCordialement.', 'Alger-Centre.', 'El-Biar, Alger.', 0, 5000, 'Transport de marchandises.', 'Entre 10 et 100 kg.', 'Entre 1 et 10 mètres cubes.', 'Par camionnette.', 'valide', '2021-12-21 19:39:47', 1, '0', '0');

-- --------------------------------------------------------

--
-- Structure de la table `annoncearchivee`
--

DROP TABLE IF EXISTS `annoncearchivee`;
CREATE TABLE IF NOT EXISTS `annoncearchivee` (
  `id_annonce` int NOT NULL AUTO_INCREMENT,
  `titre` char(100) NOT NULL,
  `description` char(255) NOT NULL,
  `emplacement_depart` char(255) NOT NULL,
  `emplacement_arrive` char(255) NOT NULL,
  `garantie` tinyint(1) NOT NULL,
  `tarif` double DEFAULT NULL,
  `type_transport` char(100) DEFAULT NULL,
  `fourchette_poid` char(100) DEFAULT NULL,
  `fourchette_volume` char(100) DEFAULT NULL,
  `moyen_transport` char(100) DEFAULT NULL,
  `statut` char(100) NOT NULL,
  `date_publication` datetime NOT NULL,
  `nombre_vues` int DEFAULT NULL,
  `id_transporteur` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_client` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  KEY `id_transporteur` (`id_transporteur`),
  KEY `id_annonce` (`id_annonce`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `annonce_image`
--

DROP TABLE IF EXISTS `annonce_image`;
CREATE TABLE IF NOT EXISTS `annonce_image` (
  `id_image` int NOT NULL,
  `id_annonce` int NOT NULL,
  KEY `id_annonce` (`id_annonce`),
  KEY `id_image` (`id_image`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `annonce_image`
--

INSERT INTO `annonce_image` (`id_image`, `id_annonce`) VALUES
(2, 1),
(1, 2),
(6, 3),
(5, 4),
(4, 5),
(4, 6),
(4, 7);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nom` char(255) NOT NULL,
  `prenom` char(255) NOT NULL,
  `mot_de_passe` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `adresse` char(255) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `mot_de_passe`, `email`, `adresse`) VALUES
('TERRAS-Are', 'TERRAS', 'Arezki', '123', 'terrasarezki@gmail.com', 'Tala Mansour, Bouhinoune, Tizi-Ouzou'),
('TERRAS-Jub', 'TERRAS', 'Juba', '134556', 'jubaterras600@gmail.com', 'Tala Mansour, Bouhinoune.'),
('TERRAS-Koc', 'TERRAS', 'Koceila', '123', 'terraskoceila@esi.dz', 'Tala Mansour, Bouhinoune, Tizi-Ouzou.');

-- --------------------------------------------------------

--
-- Structure de la table `demandecertification`
--

DROP TABLE IF EXISTS `demandecertification`;
CREATE TABLE IF NOT EXISTS `demandecertification` (
  `id_demande` int NOT NULL AUTO_INCREMENT,
  `id_transporteur` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `statut` char(100) NOT NULL,
  `chemin` varchar(500) NOT NULL,
  PRIMARY KEY (`id_demande`),
  KEY `id_transporteur` (`id_transporteur`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `demandecertification`
--

INSERT INTO `demandecertification` (`id_demande`, `id_transporteur`, `statut`, `chemin`) VALUES
(1, 'mohamed', 'En attente', '../Certifications/certification.pdf'),
(2, 'massinissa', 'En attente', '../Certifications/certification.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id_image` int NOT NULL AUTO_INCREMENT,
  `chemin` char(255) NOT NULL,
  PRIMARY KEY (`id_image`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id_image`, `chemin`) VALUES
(1, '../Assets/coli.jpeg'),
(2, '../Assets/hydrolique.jpg'),
(3, '../Assets/logistique.jpg'),
(4, '../Assets/marchandise.jpg'),
(5, '../Assets/medical.jpg'),
(6, '../Assets/transformateur.jpg'),
(7, '../News/black-friday.jpg'),
(8, '../News/edahabia.jpg'),
(9, '../News/maintenance.png'),
(10, '../News/متجر.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int NOT NULL AUTO_INCREMENT,
  `titre` char(100) NOT NULL,
  `description` char(255) NOT NULL,
  `nombre_vues` int DEFAULT NULL,
  `date_ajout` date NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id_news`, `titre`, `description`, `nombre_vues`, `date_ajout`) VALUES
(1, 'Maintenance programmée le 22/12/2021.', 'A notre aimable clientèle, notre site web sera en maintenance du 22/12/2021 a partir de 9h donc indisponible. \r\nLe site reprendra son activité normale a partir de 15 du même jour.\r\nNous vous remercions pour votre compréhension.\r\nCordialement.', 3, '2021-12-07'),
(2, 'Black Friday.', 'Bénéficiez d\'un transport gratuit totalement payé par notre entreprise pour 5 annonces validées sur notre site.\r\n', 4, '2021-12-19'),
(3, 'Paiement par carte de crédit edahbia.', 'A notre aimable clientèle,\r\nNous vous informons que le paiement via carte edahbia est désormais disponible via notre site.\r\nCordialement.', 2, '2021-12-23'),
(4, 'Application mobile.', 'A notre aimable clientèle. \r\nNous avons le plaisir de vous informer le lancement de notre application mobile disponible sur ios et android.\r\nTéléchargez la dés maintenant.\r\nCordialement.', 124, '2021-12-15');

-- --------------------------------------------------------

--
-- Structure de la table `news_image`
--

DROP TABLE IF EXISTS `news_image`;
CREATE TABLE IF NOT EXISTS `news_image` (
  `id_image` int NOT NULL,
  `id_news` int NOT NULL,
  KEY `id_image` (`id_image`) USING BTREE,
  KEY `id_news` (`id_news`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `news_image`
--

INSERT INTO `news_image` (`id_image`, `id_news`) VALUES
(9, 1),
(7, 2),
(8, 3),
(10, 4);

-- --------------------------------------------------------

--
-- Structure de la table `signalementclient`
--

DROP TABLE IF EXISTS `signalementclient`;
CREATE TABLE IF NOT EXISTS `signalementclient` (
  `id_signalement` int NOT NULL AUTO_INCREMENT,
  `description` char(255) NOT NULL,
  `titre` char(100) DEFAULT NULL,
  `id_transporteur` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_client` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_signalement`),
  KEY `id_transporteur` (`id_transporteur`),
  KEY `id_client` (`id_client`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `signalementtransporteur`
--

DROP TABLE IF EXISTS `signalementtransporteur`;
CREATE TABLE IF NOT EXISTS `signalementtransporteur` (
  `id_signalement` char(10) NOT NULL,
  `description` char(255) NOT NULL,
  `titre` char(100) DEFAULT NULL,
  `id_transporteur` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_client` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_signalement`),
  KEY `id_transporteur` (`id_transporteur`),
  KEY `id_client` (`id_client`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `transporteur`
--

DROP TABLE IF EXISTS `transporteur`;
CREATE TABLE IF NOT EXISTS `transporteur` (
  `id_transporteur` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nom` char(255) NOT NULL,
  `prenom` char(255) NOT NULL,
  `mot_de_passe` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `adresse` char(255) NOT NULL,
  `certifie` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_transporteur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `transporteur`
--

INSERT INTO `transporteur` (`id_transporteur`, `nom`, `prenom`, `mot_de_passe`, `email`, `adresse`, `certifie`) VALUES
('juba', 'TERRAS', 'Juba', '123', 'ij_terras@esi.dz', 'Alger', 1),
('mohamed', 'LEKHEL', 'Mohamed', '123', 'lekhelmohamed@gmail.com', 'Mekla, Tizi-Ouzou.', 1),
('massinissa', 'NAIB', 'Massinissa', '123', 'naibmassinissa@gmail.com', 'Lekser, Bejaia', 0);

-- --------------------------------------------------------

--
-- Structure de la table `transporteur_wilaya`
--

DROP TABLE IF EXISTS `transporteur_wilaya`;
CREATE TABLE IF NOT EXISTS `transporteur_wilaya` (
  `id_transporteur` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `num_wilaya` int NOT NULL,
  KEY `id_transporteur` (`id_transporteur`),
  KEY `num_wilaya` (`num_wilaya`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wilaya`
--

DROP TABLE IF EXISTS `wilaya`;
CREATE TABLE IF NOT EXISTS `wilaya` (
  `num_wilaya` int NOT NULL,
  `libele` char(255) NOT NULL,
  PRIMARY KEY (`num_wilaya`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
