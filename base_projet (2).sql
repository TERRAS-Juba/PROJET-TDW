-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 15 jan. 2022 à 17:21
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
  `id_annonce` varchar(100) NOT NULL,
  `titre` char(100) NOT NULL,
  `description` char(255) NOT NULL,
  `emplacement_depart` int NOT NULL,
  `emplacement_arrive` int NOT NULL,
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
('161d8ae14e059b', 'Transport de transformateurs électriques .', 'Je veux transporter des transformateurs électriques.', 1, 2, 0, NULL, 'électroménager', 'plus de 1000kg', 'plus de 100 mètres cube', 'camion', 'en attente', '2022-01-07 09:18:12', 7, 'NAIB Massinissa', 'TERRAS Juba');

-- --------------------------------------------------------

--
-- Structure de la table `annoncearchivee`
--

DROP TABLE IF EXISTS `annoncearchivee`;
CREATE TABLE IF NOT EXISTS `annoncearchivee` (
  `id_annonce` varchar(100) NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=3562 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `annoncearchivee`
--

INSERT INTO `annoncearchivee` (`id_annonce`, `titre`, `description`, `emplacement_depart`, `emplacement_arrive`, `garantie`, `tarif`, `type_transport`, `fourchette_poid`, `fourchette_volume`, `moyen_transport`, `statut`, `date_publication`, `nombre_vues`, `id_transporteur`, `id_client`) VALUES
('7', 'Transport de marchandises.', 'Bonjour,\r\nje cherche un transport pour transporter des marchandises de Alger-Centre vers El biar.\r\nCordialement.', 'Alger-Centre.', 'El-Biar, Alger.', 0, 5000, 'Transport de marchandises.', 'Entre 10 et 100 kg.', 'Entre 1 et 10 mètres cubes.', 'Par camionnette.', 'valide', '2021-12-21 19:39:47', 1, '0', '0'),
('6', 'Transport de marchandises.', 'Bonjour,\r\nje cherche un transport pour transporter des marchandises de Alger-Centre vers El biar.\r\nCordialement.', 'Alger-Centre.', 'El-Biar, Alger.', 0, 5000, 'Transport de marchandises.', 'Entre 10 et 100 kg.', 'Entre 1 et 10 mètres cubes.', 'Par camionnette.', 'valide', '2021-12-21 19:39:47', 3, '2', '2'),
('3561', 'Transport de matériel de logistique.', 'Je veux transporter du matériel de logistique.', '35', '34', 0, NULL, 'colis', 'entre 10kg et 100kg', 'plus de 100 mètres cube', 'camion', 'transaction', '2022-01-07 09:19:45', 1, 'KEDOUR Yacine', 'TERRAS Juba'),
('1661', 'Transport matériel informatique.', 'Je veux transporter du matériel informatique de Alger vers Tizi-Ouzou.', '16', '15', 0, 30000, 'électroménager', 'entre 10kg et 100kg', 'entre 1 et 10 mètres cube', 'camion', 'valide', '2022-01-07 09:17:06', 11, '', 'TERRAS Juba');

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
('Transport matériel informatique61d8a82d2a3af', 'dfgjklm dgjklmhgfdjk:,61d8a82d2a3a6'),
('Transport matériel informatique61d8a8a6c7816', 'dfhjghf sdghkjlmlhjgf!.61d8a8a6c7810'),
('61d8a922b64b2', '161d8a922b6246'),
('161d8a93ced03a', '161d8a93ced02f'),
('1561d8add22c60f', '1661d8add22c609'),
('261d8ae14e059e', '161d8ae14e059b'),
('3461d8ae71eb099', '3561d8ae71eb093'),
('261d96ee4af824', '161d96ee4af81e'),
('161df708a2aa77', '161df708a2aa62');

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
('TERRAS Arezki', 'TERRAS', 'AREZKI', '123', 'jubamadri@gmail.com', 'Bab', '0542853281'),
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `demandecertification`
--

INSERT INTO `demandecertification` (`id_demande`, `id_transporteur`, `statut`, `chemin`) VALUES
(1, 'LEKHEL Mohamed', 'En attente', '../Certifications/certification.pdf'),
(2, 'NAIB Massinissa', 'En attente', '../Certifications/certification.pdf'),
(7, 'MESBAHI Nassim', 'en attente', '../Certifications/certification.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `fourchette_poid`
--

DROP TABLE IF EXISTS `fourchette_poid`;
CREATE TABLE IF NOT EXISTS `fourchette_poid` (
  `id_fourchette` int NOT NULL AUTO_INCREMENT,
  `libele` char(100) NOT NULL,
  PRIMARY KEY (`id_fourchette`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `fourchette_poid`
--

INSERT INTO `fourchette_poid` (`id_fourchette`, `libele`) VALUES
(1, 'entre 1kg et 10kg'),
(2, 'entre 10kg et 100kg');

-- --------------------------------------------------------

--
-- Structure de la table `fourchette_volume`
--

DROP TABLE IF EXISTS `fourchette_volume`;
CREATE TABLE IF NOT EXISTS `fourchette_volume` (
  `id_fourchette` int NOT NULL AUTO_INCREMENT,
  `libele` char(100) NOT NULL,
  PRIMARY KEY (`id_fourchette`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `fourchette_volume`
--

INSERT INTO `fourchette_volume` (`id_fourchette`, `libele`) VALUES
(1, 'entre 10 et 10 mètres cube'),
(2, 'entre 10 et 100 mètres cube');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id_image` varchar(100) NOT NULL,
  `chemin` char(255) NOT NULL,
  PRIMARY KEY (`id_image`)
) ENGINE=MyISAM AUTO_INCREMENT=9223372036854775808 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id_image`, `chemin`) VALUES
('1', '../Assets/coli.jpeg'),
('2', '../Assets/hydrolique.jpg'),
('3', '../Assets/logistique.jpg'),
('4', '../Assets/marchandise.jpg'),
('5', '../Assets/medical.jpg'),
('6', '../Assets/transformateur.jpg'),
('7', '../News/black-friday.jpg'),
('8', '../News/edahabia.jpg'),
('9', '../News/maintenance.png'),
('10', '../News/متجر.jpg'),
('11', '../News/متجر.jpg'),
('12', '../News/متجر.jpg'),
('13', '../News/maintenance.png'),
('14', '../News/edahabia.jpg'),
('Transport matériel informatique61d8a82d2a3af', '../Assets/marchandise.jpg'),
('Transport matériel informatique61d8a8a6c7816', '../Assets/transformateur.jpg'),
('61d8a922b64b2', '../Assets/client.png'),
('161d8a93ced03a', '../Assets/client.png'),
('1561d8add22c60f', '../Assets/marchandise.jpg'),
('261d8ae14e059e', '../Assets/transformateur.jpg'),
('3461d8ae71eb099', '../Assets/logistique.jpg'),
('261d96ee4af824', '../Assets/hydrolique.jpg'),
('161df708a2aa77', '../Assets/projection_individus.PNG');

-- --------------------------------------------------------

--
-- Structure de la table `moyen_transport`
--

DROP TABLE IF EXISTS `moyen_transport`;
CREATE TABLE IF NOT EXISTS `moyen_transport` (
  `id_moyen` int NOT NULL AUTO_INCREMENT,
  `libele` char(100) NOT NULL,
  PRIMARY KEY (`id_moyen`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `moyen_transport`
--

INSERT INTO `moyen_transport` (`id_moyen`, `libele`) VALUES
(1, 'voiture'),
(2, 'fourgon'),
(3, 'camions'),
(4, 'train');

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
(2, 'Black Friday.', 'Bénéficiez d\'un transport gratuit totalement payé par notre entreprise pour 5 annonces validées sur notre site.\r\n', 4, '2021-12-19'),
(3, 'Paiement par carte de crédit edahbia.', 'A notre aimable clientèle,\r\nNous vous informons que le paiement via carte edahbia est désormais disponible via notre site.\r\nCordialement.', 3, '2021-12-23');

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
  `id_signalement` int NOT NULL AUTO_INCREMENT,
  `description` char(255) NOT NULL,
  `titre` char(100) DEFAULT NULL,
  `id_transporteur` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_client` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `emetteur` char(255) NOT NULL,
  `id_annonce` varchar(100) NOT NULL,
  PRIMARY KEY (`id_signalement`),
  KEY `id_transporteur` (`id_transporteur`),
  KEY `id_client` (`id_client`),
  KEY `id_annonce` (`id_annonce`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `signalement`
--

INSERT INTO `signalement` (`id_signalement`, `description`, `titre`, `id_transporteur`, `id_client`, `emetteur`, `id_annonce`) VALUES
(1, 'Bonjour,\r\nLe chauffeur n\'a pas livré le colis comme prévu.', 'Problème de livraison de colis.', 'LEKHEL Mohamed', 'TERRAS Juba', 'client', '2'),
(2, 'Bonjour, la marchandise que devait livré le chauffeur a subit des degats importants donc je reclamae un dédomagement.', 'Problème de livraison de marchandises.', 'NAIB Massinissa', 'TERRAS Arezki', 'client', '5'),
(3, 'Bonjour, le client refuse de me payer apres la livraison de sa marchandises comme convenu.', 'Problème de paiement', 'NAIB Massinissa', 'TERRAS Koceila', 'transporteur', '3');

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
  `certifie` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `numero_telephone` char(10) NOT NULL,
  PRIMARY KEY (`id_transporteur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `transporteur`
--

INSERT INTO `transporteur` (`id_transporteur`, `nom`, `prenom`, `mot_de_passe`, `email`, `adresse`, `certifie`, `numero_telephone`) VALUES
('NAIB Massinissa', 'NAIB', 'Massinissa', '123', 'naibmassinissa@gmail.com', 'Aoukass, Bejaia.', 'valide', '0542853281'),
('LEKHEL Mohamed', 'LEKHEL', 'Mohamed', '123', 'lekhelmohamed@gmail.com', 'BAB EL OUAD, Alger.', 'valide', ''),
('KEDOUR Yacine', 'KEDOUR', 'Yacine', '123', 'kedouryacine@esi.dz', 'Tala Mansour, Bouhinoune.', 'en cours de traitement', '0542853281'),
('MESBAHI Nassim', 'MESBAHI', 'Nassim', '123', 'ij_terras@esi.dz', 'Tala Mansour, Bouhinoune.', 'refusee', '0542853281');

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
('NAIB Massinissa', 1),
('NAIB Massinissa', 2),
('NAIB Massinissa', 3),
('NAIB Massinissa', 4),
('NAIB Massinissa', 5),
('LEKHEL Mohamed', 15),
('LEKHEL Mohamed', 16),
('LEKHEL Mohamed', 17),
('LEKHEL Mohamed', 18),
('LEKHEL Mohamed', 19),
('KEDOUR Yacine', 30),
('KEDOUR Yacine', 31),
('KEDOUR Yacine', 32),
('KEDOUR Yacine', 33),
('KEDOUR Yacine', 34),
('KEDOUR Yacine', 35),
('LEKHEL Mohamed', 1),
('LEKHEL Mohamed', 2),
('LEKHEL Mohamed', 3),
('LEKHEL Mohamed', 4),
('LEKHEL Mohamed', 5),
('MESBAHI Nassim', 25),
('MESBAHI Nassim', 26),
('MESBAHI Nassim', 27);

-- --------------------------------------------------------

--
-- Structure de la table `type_transport`
--

DROP TABLE IF EXISTS `type_transport`;
CREATE TABLE IF NOT EXISTS `type_transport` (
  `id_type` int NOT NULL AUTO_INCREMENT,
  `libele` char(100) NOT NULL,
  `garantie` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `type_transport`
--

INSERT INTO `type_transport` (`id_type`, `libele`, `garantie`) VALUES
(1, 'colis leger', 1),
(2, 'colis', 0),
(3, 'meuble', 0),
(4, 'électroménager', 1);

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
