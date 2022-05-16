-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 15 mai 2022 à 21:25
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mydatabase`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categorie` varchar(25) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `text` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `categorie`, `titre`, `text`, `price`, `image`) VALUES
(1, 'Fille', 'Baskets', 'La plupart des parents ne se souviennent pas de leurs premiers pas. Cette basket plate de sport pour les bébés est la copie exacte du modèle original connu depuis des années !', 32, 'https://www.maboutiquebebe.fr/wp-content/uploads/2021/04/20921-htfori.jpg'),
(2, 'Fille', 'Combinaison fille', 'Une combinaison barboteuse trop mignonne pour l’été. Cette combinaison sans manche à froufrou fera de votre petite fille la plus belle des bébés.', 15, 'https://catalogue.aubert.com/images/specific/textile/vetements_fille/robes.jpg'),
(3, 'Garçon', 'Veste', 'Une veste à capuche arc-en-ciel à col rond et capuche, parfaite pour les promenades ensoleillées ou sous la pluie. Convient à tous les enfants qui ont le sourire aux lèvres !', 84, 'https://www.elleestoulamer.fr/media/EHE602701-totems-veste-marine-bebe-garcon-a.jpg'),
(4, 'Garçon', 'Ensemble naissance 3 pièces point mousse', 'Quelle bonne idée : une tenue souple et clin d\'oeil à offrir aux tout petits dès 45 cm !!! L\'ensemble spécial premiers jours de bébé est LA very bonne idée !', 16, 'https://media.vertbaudet.fr/Pictures/vertbaudet/98072/ensemble-naissance-3-pieces-point-mousse.jpg?w'),
(5, 'unisex', 'Pyjama bébé velours dos fantaisie ouverture naissance', 'Un pyjama comme ça s\'offre avec beaucoup d\'amour ! En velours pour offrir à bébé encore plus de douceur, ce pyjama est joliment brodé avec des surprises sous toutes les coutures !', 12, 'https://www.3suisses.fr/media/header-listing/3-suisses/32542/3S-Banniere-mode-bebe.webp'),
(6, 'unisex', 'Nid d\'ange transformable en peluche Ourson - beige', 'Aussi astucieux que confortable, ce nid d\'ange intelligent se déplie pour se transformer en tapis à langer ! Il possède 5 points d\'attache dans le dos afin d\'y passer les sangles de la coque, de la poussette ou du siège-auto.', 30, 'https://media.vertbaudet.fr/Pictures/vertbaudet/202723/nid-dange-transformable-en-peluche-ourson.jpg'),
(7, 'Fille', 'Chaussures rock roses pour bébé filles', 'Chaussures pour bébé à l’esprit très rock pour faire de votre petit bout de choux un vrai petit rocker. De couleur rose, avec un effet pailleté, elles sont essentiellement aux petites filles.', 24, 'https://rockcity.fr/wp-content/uploads/2021/01/chaussures-paillettes-roses-bebe.jpg'),
(8, 'Unisex', 'Ensemble Bebe Garcon Hiver Vetement bébé', 'Manteau Printemps garçon Mode Manche Longue Chemise Blouse Mode Haut Top Sweatshirt t Shirt + Pantalons', 15, 'https://m.media-amazon.com/images/I/61jjOrJuy2L._AC_UX679_.jpg'),
(9, 'Unisex', 'Body bébé ACDC', 'Des pompons farceurs, des lapins joueurs sur un pyjama extra-doux ! Un beau cadeau tendresse à offrir pour l\'arrivée d\'un nouveau-né.', 18, 'https://rockcity.fr/wp-content/uploads/2019/02/body-baby-acdc-noir-768x768.jpg'),
(10, 'Fille', 'Nid d\'ange 2 en 1 transformable', 'Body pour bébé noir et logo rouge à l’effigie du groupe AC/DC.\n\nBody pour bébé noir et logo rouge à l’effigie du groupe AC/DC.\nBody pour bébé noir et logo rouge à l’effigie du groupe AC/DC.\n', 45, 'https://media.vertbaudet.fr/Pictures/vertbaudet/67954/nid-dange-2-en-1-transformable.jpg?width=800'),
(11, 'Garçon', 'Chaussures rock noires pour bébé', 'Chaussures pour bébé à l’esprit très rock pour faire de votre petit bout de choux un vrai petit rocker. Elles sont brillantes avec un effet un peu pailleté.', 26, 'https://rockcity.fr/wp-content/uploads/2021/01/chaussures-brillantes-noires-bebe-768x768.jpg'),
(12, 'Garçon', 'Dors bien bébé garçon en coton', 'Votre petit ourson sera très mignon dans ces 2 pyjamas légers et confortables en coton, vivement l\'heure du dodo !\r\n', 27, 'https://media.cyrillus.fr/Pictures/cyrillus/101983/body-par-lot-de-2-coton-bio.jpg?width=885'),
(13, 'Fille', 'Lot de 2 pyjamas en molleton bébé ouverture naissance', 'Molleton confort, coupe adaptée aux plus petits et cerise sur le gâteau... un imprimé délicatement coloré et fantaisie !', 33, 'https://m.media-amazon.com/images/I/613dwFqzoFL._AC_UY445_.jpg'),
(14, 'Unisex', 'Coffret cadeau de Noël bébé dors-bien en velours + bavoir', 'Pour le roi de la fête, un pyjama tout doux et son bavoir \"couronne\" ! Un coffret cadeau à déposer au pied du sapin pour le plaisir des parents et le sourire des enfants !', 19, 'https://i.pinimg.com/originals/10/1f/e8/101fe8cd2f212dd0da96ec8e66afd572.jpg'),
(15, 'Garçon', 'Combinaison courte bébé animal', 'Léger, confortable et coloré, le combi-short joue la carte de l\'humour et de la bonne humeur pour bien commencer l\'été !', 10, 'https://media.vertbaudet.fr/Pictures/vertbaudet/217707/combinaison-courte-bebe-animal.jpg?width=800'),
(16, 'Fille', 'Ensemble combinaison + bandeau imprimés bébé fille', 'Une combinaison pantalon pleine de charme avec son joli imprimé fleuri et ses manches volantées, complétée par le bandeau assorti pour une tenue parfaite !\r\n\r\n', 20, 'https://i.pinimg.com/originals/47/d5/28/47d528d88ff82cf314eb0da57c7d5872.jpg'),
(17, 'Fille', 'Ensemble combinaison + bandeau imprimés bébé fille ', 'Une combinaison pantalon pleine de charme avec son joli imprimé fleuri et ses manches volantées, complétée par le bandeau assorti pour une tenue parfaite !\r\n\r\n', 16, 'https://image.yfswebstatic.com/fit-in/750x750/origin/product/oc/clothing/shooting/61f35fd1b4080.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `numbers` int NOT NULL,
  `mail` varchar(25) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `numbers`, `mail`, `password`) VALUES
(1, 'Achref', 'GAIEB', 606060606, 'achref.gaieb@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$MTVsNGU0Z3ZwZHBLNy96Zw$4AeedzHC7G9ZKNDTaxxhyhlzWpUxqzo9vNwwLfgu7as'),
(4, 'Ach', 'gb7', 606060611, 'a@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$M0xwWERhVVg5TzVqRnZqYg$lopI4BP3xdWi2rxbhHalScm/ZIlur8Ju/uVn9kIsVMY'),
(3, 'Ach', 'gb', 606060606, 'achref.gaieb@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$TWNwL3Fha1lsNVBVcUxJZQ$oLZbBlCE2Cvn2Y2LVkys+JwVYAPjP2c3th0VcVM1WJk'),
(5, 'ach', 'gb', 768922177, 'achgb42@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$c1BONVBRaXVDYkFUNW40dg$bbL8z8AtTxv7z0hfNKbU15cIHMgmGQdNVVWFY4oxpC4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
