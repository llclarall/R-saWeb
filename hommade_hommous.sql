-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 21 mai 2024 à 20:02
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données : `hommade_hommous`
--

-- --------------------------------------------------------

--
-- Structure de la table `hh_atelier`
--

DROP TABLE IF EXISTS `hh_atelier`;
CREATE TABLE IF NOT EXISTS `hh_atelier` (
  `id_atelier` int NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `activité` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `img` varchar(255) NOT NULL,
  `duree` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `capacite` int NOT NULL,
  `nom_img` varchar(30) NOT NULL,
  PRIMARY KEY (`id_atelier`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `hh_atelier`
--

INSERT INTO `hh_atelier` (`id_atelier`, `description`, `activité`, `img`, `duree`, `prix`, `capacite`, `nom_img`) VALUES
(1, 'Découvrez l\'art de la cuisine libanaise lors de notre atelier d\'entrées libanaises. Apprenez à préparer des délices traditionnels tels que le hommous, le taboulé et la crème d\'aubergine, tout en explorant les saveurs exotiques de la Méditerranée. Rejoignez-nous pour une expérience culinaire inoubliable !', 'Atelier Mezze', 'images/atelier_mezze.jpeg', '2h', '30€', 15, 'Mezze'),
(2, 'Explorez la délicieuse tradition des desserts libanais lors de notre atelier sucré. Découvrez les secrets des baklavas et des maamouls des trésors de la pâtisserie orientale, avec nos chefs experts. Rejoignez-nous pour une expérience gourmande et exotique !', 'Atelier Desserts', 'images/atelier_desserts.jpg', '3h', '45€', 15, 'Baklava'),
(3, 'Voyagez au cœur de la cuisine libanaise avec notre atelier culinaire dédié aux manakish. Découvrez l\'art de préparer ces délicieuses pizzas levantines, garnies de zaatar, de fromage ou de viande, selon vos préférences. Apprenez à pétrir et à garnir la pâte à la perfection, tout en explorant les saveurs authentiques de la Méditerranée orientale. Rejoignez-nous pour une expérience culinaire qui éveillera vos papilles et vous transportera directement dans les rues animées de Beyrouth.', 'Atelier Manakish', 'images/atelier_manakish.jpg', '1h', '27€', 15, 'Manakish'),
(4, 'Plongez dans une aventure gustative unique avec notre atelier dédié aux Knefeh libanais. Laissez-vous transporter dans l\'univers envoûtant de ce dessert traditionnel, où la douceur du fromage et la texture croustillante de la pâte filo se marient harmonieusement avec un sirop parfumé à la fleur d\'oranger.', 'Atelier Knefeh', 'images/atelier_knefeh.jpg', '1h30', '38€', 15, 'Knefeh'),
(5, 'Retrouvez les saveurs riches de la cuisine libanaise avec notre atelier de Kafta. Apprenez à préparer ce plat emblématique composé de viande hachée, d\'herbes fraîches, d\'épices aromatiques, façonné en brochettes ou en galettes. Découvrez les secrets pour obtenir une texture parfaite et un équilibre de saveurs authentiques. ', 'Atelier Kafta', 'images/atelier_kafta.jpeg', '1h45', '40€', 15, 'Kafta');

-- --------------------------------------------------------

--
-- Structure de la table `hh_calendrier`
--

DROP TABLE IF EXISTS `hh_calendrier`;
CREATE TABLE IF NOT EXISTS `hh_calendrier` (
  `id_cd` bigint NOT NULL AUTO_INCREMENT,
  `heure` varchar(20) NOT NULL,
  `fk_atelier` int NOT NULL,
  PRIMARY KEY (`id_cd`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `hh_calendrier`
--

INSERT INTO `hh_calendrier` (`id_cd`, `heure`, `fk_atelier`) VALUES
(1, '10h-12h', 1),
(2, '14h-16h', 1),
(3, '16h-18h', 1),
(4, '10h-13h', 2),
(5, '15h-18h', 2),
(13, '12h-13h', 3),
(7, '10h-11h', 3),
(8, '15h-16h', 3),
(9, '17h-18h', 3),
(10, '10h-11h30', 4),
(11, '14h-15h30', 4),
(12, '16h-17h30', 4),
(14, '10h15-12h', 5),
(15, '13h-14h45', 5),
(16, '16h-17h45', 5);

-- --------------------------------------------------------

--
-- Structure de la table `hh_reservation`
--

DROP TABLE IF EXISTS `hh_reservation`;
CREATE TABLE IF NOT EXISTS `hh_reservation` (
  `id_reservation` int NOT NULL AUTO_INCREMENT,
  `date_reservation` varchar(50) NOT NULL,
  `creneau_reservation` varchar(20) NOT NULL,
  `atelier` varchar(50) NOT NULL,
  `fk_user` varchar(255) NOT NULL,
  PRIMARY KEY (`id_reservation`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `hh_reservation`
--

INSERT INTO `hh_reservation` (`id_reservation`, `date_reservation`, `creneau_reservation`, `atelier`, `fk_user`) VALUES
(17, '2024-05-10', '17-18', '3', '0'),
(18, '2024-05-28', '11-12', '3', '0'),
(19, '2024-05-15', '17-18', '3', 'clara.moubarak45@gmail.com'),
(20, '2024-05-15', '14-16', '1', 'clara.moubarak75@gmail.com'),
(21, '2024-05-29', '15-16', '3', 'clara.moubarak75@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `hh_user`
--

DROP TABLE IF EXISTS `hh_user`;
CREATE TABLE IF NOT EXISTS `hh_user` (
  `nom_user` varchar(20) NOT NULL,
  `prenom_user` varchar(20) NOT NULL,
  `mail_user` varchar(30) NOT NULL,
  PRIMARY KEY (`mail_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `hh_user`
--

INSERT INTO `hh_user` (`nom_user`, `prenom_user`, `mail_user`) VALUES
('moubarak', 'clara', 'clara.moubarak75@gmail.com'),
('moubarak', 'clara', 'df@gmail.com'),
('moubarak', 'clara', 'clara.moubarak@gmail.com'),
('moubarak', 'clara', 'clara.moubarak1@gmail.com'),
('moubarak', 'clara', 'clara.moubarak@hotmail.com'),
('moubarak', 'clara', 'clara.moubarak45@gmail.com'),
('moubarak', 'clara', 'df@gmail.fr'),
('qvnks', 'clara', 'jknvfsdjnl@gmail.com'),
('moubarak', 'clara', 'df@hotmail.fr'),
('o', 'l', 'clara.moubarak7@gmail.com'),
('moubarak', 'clara', 'dfkhi@gmail.fr'),
('kara', 'aly', 'aly.kara@hotmail.fr'),
('desgranges', 'Emilie', 'emilie.cfdghsjqksj@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
