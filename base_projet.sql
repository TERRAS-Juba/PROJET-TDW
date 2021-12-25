-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 25 déc. 2021 à 14:16
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
  `id_administrateur` char(10) NOT NULL,
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
  `id_annonce` char(10) NOT NULL,
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
  `id_transporteur` char(10) DEFAULT NULL,
  PRIMARY KEY (`id_annonce`),
  KEY `id_transporteur` (`id_transporteur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `titre`, `description`, `emplacement_depart`, `emplacement_arrive`, `garantie`, `tarif`, `type_transport`, `fourchette_poid`, `fourchette_volume`, `moyen_transport`, `statut`, `date_publication`, `nombre_vues`, `id_transporteur`) VALUES
('Annon1', 'Transport matériels de logistique', 'Bonjour,\r\nJe suis a la recherche d\'un transport d\'un matériel de logistique depuis le port de Bejaia vers la ville de Hydra Alger.', 'Port de Bejaïa.', 'Rue de frères Kadri Hydra, Alger.', 1, 20000, 'Logistique', 'Entre 100 a 1000 kg.', 'Entre 0 a 10 mètres cubes.', 'Transport par camions.', 'valide', '2021-12-21 14:14:50', 3, NULL),
('Annon2', 'Transport de matériels hydroliques.', 'Bonjour,\r\nJe suis a la recherche d\'un transport d\'un matériel de hydrolique depuis la ville de Blida vers la ville de Cherchel,Tipaza. C\"est un transport délicat qui require aucun dommage sur le materiel transporté', 'la ville de Blida.', 'Centre-ville de Cherchel,Tipaza.', 1, 50000, 'Materiels hydroliques', 'Entre 1000 a 10000 kg.', 'Entre 0 a 100 mètres cubes.', 'Transport par camions.', 'valide', '2021-12-21 15:00:50', 0, NULL),
('Annon3', 'Transport d\'un colie de toute urgence.', 'Bonjour,\r\nJe suis a la recherche d\'un transport pour un colie de la plus haute importance depuis la ville d\'Oran vers la ville de Berrouaghia,Medea. Le transport doit etre effectuée le plus vite possible', 'la ville d\'Oran', 'Berrouaghia,Medea', 0, 20000, 'Colis leger', 'Entre 1 a 10 kg.', 'Entre 0 a 1 mètres cubes.', 'N\'import quel type', 'valide', '2021-12-21 16:00:50', 6, NULL),
('Annon4', 'Transport de transformateurs electriques.', 'Bonjour,\r\nMa société est a la recherche d\'un transport pour 3 transformateurs électriques depuis la ville de Tizi-Ouzou vers la ville de Boudouaou, Boumerdes.\r\nCordialement.', 'Ville de Tizi-Ouzou.', 'ville de Boudouaou, Boumerdes', 1, 90000, 'Transport de machines industriels.', 'Entre 1000 a 10000 kg.', 'Entre 1 a 10  mètres cubes.', 'Par camions.', 'valide', '2021-12-21 14:30:31', 6, NULL),
('Annon5', 'Transport de materiels medicales.', 'Bonjour,\r\nMa société est a la recherche d\'un transport pour du materils medicale tres chere depuis le port d\'Arzew,Oran vers l\'e CHU Nadir Mohamed de la ville de Tizi-Ouzou.\r\nCordialement.', 'Arzew,Oran.', 'CHU Nadir Mohamed de la ville de Tizi-Ouzou.', 1, 120000, 'Transport de materiels medicales.', 'Entre 1000 a 10000 kg.', 'Entre 10 a 100  mètres cubes.', 'Par camions.', 'valide', '2021-12-21 17:30:31', 2, NULL),
('Annon6', 'Transport de marchandises.', 'Bonjour,\r\nje cherche un transport pour transporter des marchandises de Alger-Centre vers El biar.\r\nCordialement.', 'Alger-Centre.', 'El-Biar, Alger.', 0, 5000, 'Transport de marchandises.', 'Entre 10 et 100 kg.', 'Entre 1 et 10 mètres cubes.', 'Par camionnette.', 'valide', '2021-12-21 19:39:47', 2, NULL),
('Annon7', 'Transport de marchandises.', 'Bonjour,\r\nje cherche un transport pour transporter des marchandises de Alger-Centre vers El biar.\r\nCordialement.', 'Alger-Centre.', 'El-Biar, Alger.', 0, 5000, 'Transport de marchandises.', 'Entre 10 et 100 kg.', 'Entre 1 et 10 mètres cubes.', 'Par camionnette.', 'valide', '2021-12-21 19:39:47', 1, NULL),
('Annon8', 'Transport de marchandises.', 'Bonjour,\r\nje cherche un transport pour transporter des marchandises de Alger-Centre vers El biar.\r\nCordialement.', 'Alger-Centre.', 'El-Biar, Alger.', 0, 5000, 'Transport de marchandises.', 'Entre 10 et 100 kg.', 'Entre 1 et 10 mètres cubes.', 'Par camionnette.', 'valide', '2021-12-21 19:39:47', 0, NULL),
('Annon9', 'Transport de marchandises.', 'Bonjour,\r\nje cherche un transport pour transporter des marchandises de Alger-Centre vers El biar.\r\nCordialement.', 'Alger-Centre.', 'El-Biar, Alger.', 0, 5000, 'Transport de marchandises.', 'Entre 10 et 100 kg.', 'Entre 1 et 10 mètres cubes.', 'Par camionnette.', 'valide', '2021-12-21 19:39:47', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `annoncearchivee`
--

DROP TABLE IF EXISTS `annoncearchivee`;
CREATE TABLE IF NOT EXISTS `annoncearchivee` (
  `id_annonce` char(10) NOT NULL,
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
  `id_transporteur` char(10) DEFAULT NULL,
  PRIMARY KEY (`id_annonce`),
  KEY `id_transporteur` (`id_transporteur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `annonce_image`
--

DROP TABLE IF EXISTS `annonce_image`;
CREATE TABLE IF NOT EXISTS `annonce_image` (
  `id_image` char(10) DEFAULT NULL,
  `id_annonce` char(10) DEFAULT NULL,
  KEY `id_image` (`id_image`),
  KEY `id_annonce` (`id_annonce`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `annonce_image`
--

INSERT INTO `annonce_image` (`id_image`, `id_annonce`) VALUES
('img3', 'Annon1'),
('img2', 'Annon2'),
('img1', 'Annon3'),
('img6', 'Annon4'),
('img5', 'Annon5'),
('img4', 'Annon6'),
('img4', 'Annon7'),
('img4', 'Annon8'),
('img4', 'Annon9'),
('img2', 'Annon1');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` char(10) NOT NULL,
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
('arezki', 'TERRAS', 'Arezki', '123', 'terrasarezki@gmail.com', 'Tala Mansour, Bouhinoune, Tizi-Ouzou'),
('juba', 'TERRAS', 'Juba', '134556', 'jubaterras600@gmail.com', 'Tala Mansour, Bouhinoune.'),
('koceila', 'TERRAS', 'Koceila', '123', 'terraskoceila@esi.dz', 'Tala Mansour, Bouhinoune, Tizi-Ouzou.');

-- --------------------------------------------------------

--
-- Structure de la table `demandecertification`
--

DROP TABLE IF EXISTS `demandecertification`;
CREATE TABLE IF NOT EXISTS `demandecertification` (
  `id_demande` char(10) NOT NULL,
  `id_transporteur` char(10) DEFAULT NULL,
  `statut` char(100) NOT NULL,
  `chemin` varchar(500) NOT NULL,
  PRIMARY KEY (`id_demande`),
  KEY `id_transporteur` (`id_transporteur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `demandecertification`
--

INSERT INTO `demandecertification` (`id_demande`, `id_transporteur`, `statut`, `chemin`) VALUES
('dem1', 'mohamed', 'En attente', '../Certifications/certification.pdf'),
('dem2', 'massinissa', 'En attente', '../Certifications/certification.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id_image` char(10) NOT NULL,
  `chemin` char(255) NOT NULL,
  PRIMARY KEY (`id_image`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id_image`, `chemin`) VALUES
('img1', '../Assets/coli.jpeg'),
('img2', '../Assets/hydrolique.jpg'),
('img3', '../Assets/logistique.jpg'),
('img4', '../Assets/marchandise.jpg'),
('img5', '../Assets/medical.jpg'),
('img6', '../Assets/transformateur.jpg'),
('img7', '../Assets/black-friday.jpg'),
('img8', '../Assets/edahabia.jpg'),
('img9', '../Assets/maintenance.png');

-- --------------------------------------------------------

--
-- Structure de la table `justificatif`
--

DROP TABLE IF EXISTS `justificatif`;
CREATE TABLE IF NOT EXISTS `justificatif` (
  `id_justificatif` char(10) NOT NULL,
  `chemin` char(255) NOT NULL,
  `id_demande` char(10) DEFAULT NULL,
  KEY `id_demande` (`id_demande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id_news` char(10) NOT NULL,
  `titre` char(100) NOT NULL,
  `description` char(255) NOT NULL,
  `nombre_vues` int DEFAULT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id_news`, `titre`, `description`, `nombre_vues`) VALUES
('News1', 'Maintenance programmée le 22/12/2021.', 'A notre aimable clientèle, notre site web sera en maintenance du 22/12/2021 a partir de 9h donc indisponible. \r\nLe site reprendra son activité normale a partir de 15 du même jour.\r\nNous vous remercions pour votre compréhension.\r\nCordialement.', 3),
('News2', 'Black Friday.', 'Bénéficiez d\'un transport gratuit totalement payé par notre entreprise pour 5 annonces validées sur notre site.\r\n', 3),
('News3', 'Paiement par carde de crédit edahbia.', 'A notre aimable clientèle,\r\nNous vous informons que le paiement via carte edahbia est désormais disponible via notre site.\r\nCordialement.', 2);

-- --------------------------------------------------------

--
-- Structure de la table `news_image`
--

DROP TABLE IF EXISTS `news_image`;
CREATE TABLE IF NOT EXISTS `news_image` (
  `id_image` char(10) DEFAULT NULL,
  `id_news` char(10) DEFAULT NULL,
  KEY `id_image` (`id_image`),
  KEY `id_news` (`id_news`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `news_image`
--

INSERT INTO `news_image` (`id_image`, `id_news`) VALUES
('img7', 'News2'),
('img9', 'News1'),
('img8', 'News3');

-- --------------------------------------------------------

--
-- Structure de la table `signalementclient`
--

DROP TABLE IF EXISTS `signalementclient`;
CREATE TABLE IF NOT EXISTS `signalementclient` (
  `id_signalement` char(10) NOT NULL,
  `description` char(255) NOT NULL,
  `titre` char(100) DEFAULT NULL,
  `id_transporteur` char(10) DEFAULT NULL,
  `id_client` char(10) DEFAULT NULL,
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
  `id_transporteur` char(10) DEFAULT NULL,
  `id_client` char(10) DEFAULT NULL,
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
  `id_transporteur` char(10) NOT NULL,
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
  `id_transporteur` char(10) NOT NULL,
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
