-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 06 jan. 2022 à 17:18
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
) ENGINE=MyISAM AUTO_INCREMENT=2147483648 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `titre`, `description`, `emplacement_depart`, `emplacement_arrive`, `garantie`, `tarif`, `type_transport`, `fourchette_poid`, `fourchette_volume`, `moyen_transport`, `statut`, `date_publication`, `nombre_vues`, `id_transporteur`, `id_client`) VALUES
(1, 'Transport de matériels hydroliques.', 'Bonjour,\r\nJe suis a la recherche d\'un transport d\'un matériel de hydrolique depuis la ville de Blida vers la ville de Cherchel,Tipaza. C\"est un transport délicat qui require aucun dommage sur le materiel transporté', 'la ville de Blida.', 'Centre-ville de Cherchel,Tipaza.', 1, 15000, 'Materiels hydroliques', 'Entre 1000 a 10000 kg.', 'Entre 0 a 100 mètres cubes.', 'Transport par camions.', 'valide', '2021-12-21 15:00:50', 10, 'NAIB Massinissa', 'TERRAS Juba'),
(2, 'Transport d\'un colie de toute urgence.', 'Bonjour,\r\nJe suis a la recherche d\'un transport pour un colie de la plus haute importance depuis la ville d\'Oran vers la ville de Berrouaghia,Medea. Le transport doit etre effectuée le plus vite possible', 'la ville d\'Oran', 'Berrouaghia,Medea', 0, 20000, 'Colis leger', 'Entre 1 a 10 kg.', 'Entre 0 a 1 mètres cubes.', 'N\'import quel type', 'valide', '2021-12-21 16:00:50', 7, 'LEKHEL Mohamed', 'TERRAS Koceila'),
(3, 'Transport de transformateurs electriques.', 'Bonjour,\r\nMa société est a la recherche d\'un transport pour 3 transformateurs électriques depuis la ville de Tizi-Ouzou vers la ville de Boudouaou, Boumerdes.\r\nCordialement.', 'Ville de Tizi-Ouzou.', 'ville de Boudouaou, Boumerdes', 1, 90000, 'Transport de machines industriels.', 'Entre 1000 a 10000 kg.', 'Entre 1 a 10  mètres cubes.', 'Par camions.', 'valide', '2021-12-21 14:30:31', 12, 'KEDOUR Yacine', 'TERRAS Arezki');

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `annoncearchivee`
--

INSERT INTO `annoncearchivee` (`id_annonce`, `titre`, `description`, `emplacement_depart`, `emplacement_arrive`, `garantie`, `tarif`, `type_transport`, `fourchette_poid`, `fourchette_volume`, `moyen_transport`, `statut`, `date_publication`, `nombre_vues`, `id_transporteur`, `id_client`) VALUES
(7, 'Transport de marchandises.', 'Bonjour,\r\nje cherche un transport pour transporter des marchandises de Alger-Centre vers El biar.\r\nCordialement.', 'Alger-Centre.', 'El-Biar, Alger.', 0, 5000, 'Transport de marchandises.', 'Entre 10 et 100 kg.', 'Entre 1 et 10 mètres cubes.', 'Par camionnette.', 'valide', '2021-12-21 19:39:47', 1, '0', '0'),
(6, 'Transport de marchandises.', 'Bonjour,\r\nje cherche un transport pour transporter des marchandises de Alger-Centre vers El biar.\r\nCordialement.', 'Alger-Centre.', 'El-Biar, Alger.', 0, 5000, 'Transport de marchandises.', 'Entre 10 et 100 kg.', 'Entre 1 et 10 mètres cubes.', 'Par camionnette.', 'valide', '2021-12-21 19:39:47', 3, '2', '2');

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
(4, 7),
(582302429, 422406281);

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
  `numero_telephone` char(10) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `mot_de_passe`, `email`, `adresse`, `numero_telephone`) VALUES
('TERRAS Arezki', 'TERRAS', 'AREZKI', '123', 'jubamadri@gmail.com', 'Bab EZZOUAR, Alger', '0542853281'),
('TERRAS Juba', 'TERRAS', 'Juba', '123', 'jubaterras600@gmail.com', 'Tala Mansour, Bouhinoune.', '0542853281'),
('TERRAS Koceila', 'TERRAS', 'Koceila', '123', 'terraskoceila@esi.dz', 'Tala Mansour, Bouhinoune, Tizi-Ouzou.', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `demandecertification`
--

INSERT INTO `demandecertification` (`id_demande`, `id_transporteur`, `statut`, `chemin`) VALUES
(1, 'LEKHEL Mohamed', 'En attente', '../Certifications/certification.pdf'),
(2, 'NAIB Massinissa', 'En attente', '../Certifications/certification.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `fourchette_poid`
--

DROP TABLE IF EXISTS `fourchette_poid`;
CREATE TABLE IF NOT EXISTS `fourchette_poid` (
  `id_fourchette` int NOT NULL,
  `libele` char(100) NOT NULL,
  PRIMARY KEY (`id_fourchette`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `fourchette_poid`
--

INSERT INTO `fourchette_poid` (`id_fourchette`, `libele`) VALUES
(1, 'entre 1kg et 10kg'),
(2, 'entre 10kg et 100kg'),
(3, 'entre 100kg et 1000kg'),
(4, 'plus de 1000kg');

-- --------------------------------------------------------

--
-- Structure de la table `fourchette_volume`
--

DROP TABLE IF EXISTS `fourchette_volume`;
CREATE TABLE IF NOT EXISTS `fourchette_volume` (
  `id_fourchette` int NOT NULL,
  `libele` char(100) NOT NULL,
  PRIMARY KEY (`id_fourchette`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `fourchette_volume`
--

INSERT INTO `fourchette_volume` (`id_fourchette`, `libele`) VALUES
(1, 'entre 1 et 10 mètres cube'),
(2, 'entre 10 et 100 mètres cube'),
(3, 'plus de 100 mètres cube');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id_image` bigint NOT NULL AUTO_INCREMENT,
  `chemin` char(255) NOT NULL,
  PRIMARY KEY (`id_image`)
) ENGINE=MyISAM AUTO_INCREMENT=4266125220 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(10, '../News/متجر.jpg'),
(11, '../News/متجر.jpg'),
(12, '../News/متجر.jpg'),
(13, '../News/maintenance.png'),
(14, '../News/edahabia.jpg'),
(4184772959, '../News/maintenance.png'),
(2674775066, '../News/black-friday.jpg'),
(2150797903, '../News/edahabia.jpg'),
(4266125219, '../News/متجر.jpg'),
(582302429, '../Assets/coli.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `moyen_transport`
--

DROP TABLE IF EXISTS `moyen_transport`;
CREATE TABLE IF NOT EXISTS `moyen_transport` (
  `id_moyen` int NOT NULL,
  `libele` char(100) NOT NULL,
  PRIMARY KEY (`id_moyen`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `moyen_transport`
--

INSERT INTO `moyen_transport` (`id_moyen`, `libele`) VALUES
(1, 'voiture'),
(2, 'fourgon'),
(3, 'camion'),
(4, 'avion');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int NOT NULL AUTO_INCREMENT,
  `titre` char(100) NOT NULL,
  `description` char(255) NOT NULL,
  `nombre_vues` int DEFAULT '0',
  `date_ajout` date NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=MyISAM AUTO_INCREMENT=2147483648 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id_news`, `titre`, `description`, `nombre_vues`, `date_ajout`) VALUES
(1, 'Maintenance programmée le 22/12/2021.', 'A notre aimable clientèle, notre site web sera en maintenance du 22/12/2021 a partir de 9h donc indisponible. \r\nLe site reprendra son activité normale a partir de 15 du même jour.\r\nNous vous remercions pour votre compréhension.\r\nCordialement.', 3, '2021-12-07'),
(2, 'Black Friday.', 'Bénéficiez d\'un transport gratuit totalement payé par notre entreprise pour 5 annonces validées sur notre site.\r\n', 4, '2021-12-19'),
(3, 'Paiement par carte de crédit edahbia.', 'A notre aimable clientèle,\r\nNous vous informons que le paiement via carte edahbia est désormais disponible via notre site.\r\nCordialement.', 2, '2021-12-23'),
(4, '00', '000000000000', 124, '2021-12-15');

-- --------------------------------------------------------

--
-- Structure de la table `news_image`
--

DROP TABLE IF EXISTS `news_image`;
CREATE TABLE IF NOT EXISTS `news_image` (
  `id_image` bigint NOT NULL,
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
(4184772959, 544170897),
(2674775066, 4),
(2674775066, 2147483647),
(4184772959, 582302429),
(4266125219, 404288374);

-- --------------------------------------------------------

--
-- Structure de la table `signalement`
--

DROP TABLE IF EXISTS `signalement`;
CREATE TABLE IF NOT EXISTS `signalement` (
  `id_signalement` char(10) NOT NULL,
  `description` char(255) NOT NULL,
  `titre` char(100) DEFAULT NULL,
  `id_transporteur` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_client` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `emetteur` char(255) NOT NULL,
  `id_annonce` int NOT NULL,
  PRIMARY KEY (`id_signalement`),
  KEY `id_transporteur` (`id_transporteur`),
  KEY `id_client` (`id_client`),
  KEY `id_annonce` (`id_annonce`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `signalement`
--

INSERT INTO `signalement` (`id_signalement`, `description`, `titre`, `id_transporteur`, `id_client`, `emetteur`, `id_annonce`) VALUES
('1', 'Bonjour,\r\nLe chauffeur n\'a pas livré le colis comme prévu.', 'Problème de livraison de colis.', 'LEKHEL Mohamed', 'TERRAS Juba', 'client', 2),
('2', 'Bonjour, la marchandise que devait livré le chauffeur a subit des degats importants donc je reclamae un dédomagement.', 'Problème de livraison de marchandises.', 'NAIB Massinissa', 'TERRAS Arezki', 'client', 5),
('3', 'Bonjour, le client refuse de me payer apres la livraison de sa marchandises comme convenu.', 'Problème de paiement', 'NAIB Massinissa', 'TERRAS Koceila', 'transporteur', 3);

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
  `numero_telephone` char(10) NOT NULL,
  PRIMARY KEY (`id_transporteur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `transporteur`
--

INSERT INTO `transporteur` (`id_transporteur`, `nom`, `prenom`, `mot_de_passe`, `email`, `adresse`, `certifie`, `numero_telephone`) VALUES
('NAIB Massinissa', 'NAIB', 'Massinissa', '123', 'naibmassinissa@gmail.com', 'Aoukass, Bejaia.', 0, '0542853281'),
('LEKHEL Mohamed', 'LEKHEL', 'Mohamed', '123', 'lekhelmohamed@gmail.com', 'BAB EL OUAD, Alger.', 1, ''),
('KEDOUR Yacine', 'KEDOUR', 'Yacine', '123', 'kedouryacine@esi.dz', 'Tala Mansour, Bouhinoune.', 0, '0542853281');

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

--
-- Déchargement des données de la table `transporteur_wilaya`
--

INSERT INTO `transporteur_wilaya` (`id_transporteur`, `num_wilaya`) VALUES
('lol', 14),
('lol', 15),
('lil', 15),
('lil', 19),
('kk', 9),
('kk', 10),
('zz', 1),
('zz', 2),
('ll', 1),
('ll', 2),
('aa', 47),
('aa', 48),
('bb', 33),
('bb', 34),
('cc', 9),
('cc', 10),
('ee', 28),
('ee', 29),
('ff', 20),
('ff', 21),
('jj', 9),
('jj', 10),
('hh', 1),
('hh', 2),
('hh', 28),
('hh', 29),
('KEDOUR Yacine', 12),
('KEDOUR Yacine', 15),
('KEDOUR Yacine', 16);

-- --------------------------------------------------------

--
-- Structure de la table `type_transport`
--

DROP TABLE IF EXISTS `type_transport`;
CREATE TABLE IF NOT EXISTS `type_transport` (
  `id_type` int NOT NULL,
  `libele` char(100) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `type_transport`
--

INSERT INTO `type_transport` (`id_type`, `libele`) VALUES
(1, 'lettre'),
(2, 'colis'),
(3, 'meuble'),
(4, 'électroménager'),
(5, 'déménagement');

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
