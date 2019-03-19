-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 18 mars 2019 à 15:50
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `benarous`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `description`, `path`) VALUES
(2, 'MS-HARAS', 'Ms-haras c’est une application de gestion des haras qui permet\r\n•	Le suivi sanitaire\r\n•	Reproduction\r\n•	Alimentation des chevaux avec une traçabilité de pedigrees et de l’arbre généalogiques Qui détermine avec précision les origines de chaque cheval.', 'LogoFNARC.png'),
(3, 'Comptoir -Gestion Commerciale', 'le logiciel comptoir assure le suivi et le contrôle de toutes les activités commerciales de l\'entreprise.\r\nIl permet la réalisation des pièces comptables pour l\'achat et la vente des produits et services:\r\n• bons de livraison ou facture d\'achat\r\n•bons de livraisons \r\n,factures\r\n• offres de prix\r\n• commandes client/fournisseur ,avoir,...)\r\nOutre la facturation et la gestion du stock en multi-depots,Comptoir permet de nombreuses analyses multicritères.\r\n• Il assure, avec son échéancier intègre le suivi du paiement des factures d\'achat et de vente\r\n• Il permet également de calculer la marge bénéficiaire par article, par client ou pour opération bien détermine \r\n• II gère les commerciaux et calcule le chiffre d\'affaires réalisé par commercial \r\n• II S\'agit d\'un logiciel multiutilisateur pouvant fonctionner en réseau avec génération dynamique des menus en fonction des profils des utilisateurs \r\n• Ses éditions sont exportables aux formats pdf et html\r\n• II est hautement sécurisé avec des comptes d\'utilisateurs associés a des profils de gestion \r\n•Vous n\'aurez plus besoin de papier entete,les pièces commerciales et les états sont édités avec l\'entete\r\n•le logo et les coordonnées de l\'entreprise avec le modèle que vous choisissez.', 'affiche-MS comptoir-verso.jpg'),
(4, 'MS-Compta', 'MS-Compta assure une gestion une tenue rigoureuse de la comptabilité de votre entreprise : générale, analytique et des tiers.', 'ms-compta-recto-M.png'),
(5, 'ms-chequier', 'ms-chequier', 'affiche-ms-chequier.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `objet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sujet` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `mail`, `objet`, `sujet`) VALUES
(1, 'dfffd', 'a@gmail.com', 'zefzz', 'zfzffzeeeeeeee'),
(2, 'dfffdsd', 'a@gmail.com', 'zefzz', 'zfzffzeeeeeeee'),
(3, 'kkkkk', 'kkkk@gmail.com', 'hhhhh', 'ghhhhhhhhhhhhhhhhhhhhhhh'),
(4, 'kkkkk', 'kkkk@gmail.com', 'hhhhh', 'ghhhhhhhhhhhhhhhhhhhhhhh'),
(5, 'aaa', 'a@gmail.com', 'aaaaaaaaaaaa', 'aaaaaaaaa'),
(6, 'ezze', 'med@gmail.com', 'aaaaaaaaaaaa', 'aaaaaaaaaaaaaaa'),
(7, 'ezze', 'med@gmail.com', 'aaaaaaaaaaaa', 'aaaaaaaaaaaaaaa'),
(8, 'aaaa222', 'med@gmail.com', 'aaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaa'),
(9, 'aaaa222', 'med@gmail.com', 'aaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaa'),
(10, 'aaaa222', 'med@gmail.com', 'aaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaa'),
(11, 'ezze', 'med@gmail.com', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaa'),
(12, 'zzzzzzzzzzzzz', 'zzz@gmail.com', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Structure de la table `contact1`
--

DROP TABLE IF EXISTS `contact1`;
CREATE TABLE IF NOT EXISTS `contact1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `objet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sujet` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `devi`
--

DROP TABLE IF EXISTS `devi`;
CREATE TABLE IF NOT EXISTS `devi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `raisonsociale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sujet` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matriculefiscale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `produit_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9617B10FF347EFB` (`produit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `devi`
--

INSERT INTO `devi` (`id`, `raisonsociale`, `sujet`, `nom`, `prenom`, `mail`, `telephone`, `fax`, `adresse`, `matriculefiscale`, `produit_id`) VALUES
(1, 'ezfefe', 'dfzzzzzzzzzzzzz', 'zefzf', 'zefffe', 'fezfzfez@gmail.com', '77777', '71111225', 'feffze', 'zezee', 5);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `titre`) VALUES
(5, 'MS-Budget'),
(7, 'MS-Paie & RH'),
(8, 'MS-Vente'),
(9, 'MS-Cars'),
(12, 'Comptoir -Gestion Commerciale'),
(13, 'MS-Compta'),
(14, 'MS-Achat'),
(15, 'MS-HARAS');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `devi`
--
ALTER TABLE `devi`
  ADD CONSTRAINT `FK_9617B10FF347EFB` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
