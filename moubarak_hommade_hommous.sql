-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 12 juin 2024 à 20:21
-- Version du serveur : 10.6.18-MariaDB
-- Version de PHP : 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `moubarak_hommade_hommous`
--

-- --------------------------------------------------------

--
-- Structure de la table `hh_atelier`
--

CREATE TABLE `hh_atelier` (
  `id_atelier` int(11) NOT NULL,
  `description` text NOT NULL,
  `activité` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `duree` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `capacite` int(11) NOT NULL,
  `nom_img` varchar(30) NOT NULL,
  `resume` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `hh_atelier`
--

INSERT INTO `hh_atelier` (`id_atelier`, `description`, `activité`, `img`, `duree`, `prix`, `capacite`, `nom_img`, `resume`) VALUES
(1, 'Découvrez l\'art de la cuisine libanaise lors de notre atelier d\'entrées libanaises. Apprenez à préparer des délices traditionnels tels que le hommous, le taboulé et la crème d\'aubergine, tout en explorant les saveurs exotiques de la Méditerranée. Rejoignez-nous pour une expérience culinaire inoubliable !', 'Atelier Mezze ', 'images/atelier_mezze.jpeg', '2h', '38€', 15, 'Mezze', 'Découvrez l\'art de la cuisine lors de notre atelier d\'entrées libanaises.'),
(2, 'Explorez la délicieuse tradition des desserts libanais lors de notre atelier sucré. Découvrez les secrets des baklavas et des maamouls des trésors de la pâtisserie orientale, avec nos chefs experts. Rejoignez-nous pour une expérience gourmande et exotique !', 'Atelier Desserts', 'images/atelier_desserts.jpg', '3h', '45€', 15, 'Baklava', 'Explorez la délicieuse tradition des desserts libanais lors de notre atelier sucré.'),
(3, 'Voyagez au cœur de la cuisine libanaise avec notre atelier culinaire dédié aux manakish. Découvrez l\'art de préparer ces délicieuses pizzas levantines, garnies de zaatar, de fromage ou de viande, selon vos préférences. Apprenez à pétrir et à garnir la pâte à la perfection, tout en explorant les saveurs authentiques de la Méditerranée orientale. ', 'Atelier Manakish', 'images/atelier_manakish.jpg', '1h', '27€', 15, 'Manakish', 'Voyagez au cœur de la cuisine libanaise avec notre atelier culinaire dédié aux manakish.'),
(6, 'Découvrez les secrets du shawarma et du taouk, deux délices emblématiques de la cuisine moyen-orientale, dans cet atelier convivial. Apprenez à mariner parfaitement la viande, à utiliser les épices traditionnelles et à maîtriser les techniques de cuisson pour obtenir des résultats authentiques et savoureux. Repartez avec des astuces pratiques et des recettes authentiques.', 'Atelier Shawarma / Taouk', 'images/Taouk.jpg', '2h', '27€', 15, 'Taouk', 'Découvrez les secrets du shawarma et du taouk, délices de la cuisine moyen-orientale.'),
(4, 'Plongez dans une aventure gustative unique avec notre atelier dédié aux Knefeh libanais. Laissez-vous transporter dans l\'univers envoûtant de ce dessert traditionnel, où la douceur du fromage et la texture croustillante de la pâte filo se marient harmonieusement avec un sirop parfumé à la fleur d\'oranger.', 'Atelier Knefeh', 'images/atelier_knefeh.jpg', '1h30', '38€', 15, 'Knefeh', 'Plongez dans une aventure gustative unique avec notre atelier dédié aux Knefeh libanais.'),
(5, 'Retrouvez les saveurs riches de la cuisine libanaise avec notre atelier de Kafta. Apprenez à préparer ce plat emblématique composé de viande hachée, d\'herbes fraîches, d\'épices aromatiques, façonné en brochettes ou en galettes. Découvrez les secrets pour obtenir une texture parfaite et un équilibre de saveurs authentiques. ', 'Atelier Kafta', 'images/atelier_kafta.jpeg', '1h45', '45€', 15, 'Kafta', 'Retrouvez les saveurs riches de la cuisine libanaise avec notre atelier de Kafta.');

-- --------------------------------------------------------

--
-- Structure de la table `hh_calendrier`
--

CREATE TABLE `hh_calendrier` (
  `id_cd` bigint(20) NOT NULL,
  `heure` varchar(20) NOT NULL,
  `fk_atelier` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

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
(16, '16h-17h45', 5),
(17, '10h-12h', 6),
(20, '14h-16h', 6),
(21, '16h-18h', 6);

-- --------------------------------------------------------

--
-- Structure de la table `hh_reservation`
--

CREATE TABLE `hh_reservation` (
  `id_reservation` int(11) NOT NULL,
  `date_reservation` varchar(20) NOT NULL,
  `creneau_reservation` varchar(20) NOT NULL,
  `atelier` varchar(50) NOT NULL,
  `fk_user` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `hh_reservation`
--

INSERT INTO `hh_reservation` (`id_reservation`, `date_reservation`, `creneau_reservation`, `atelier`, `fk_user`) VALUES
(50, '2024-06-21', '10h-12h', '1', 'clara.moubarak75@gmail.com'),
(51, '2024-06-20', '10h-12h', '1', 'clara.moubarak45@gmail.com'),
(52, '2024-06-28', '10h-11h', '3', 'clara.moubarak75@gmail.com'),
(53, '2024-06-29', '10h-13h', '2', 'sami_moubarak@hotmail.com'),
(54, '2024-06-14', '15h-18h', '2', 'clara.moubarak75@gmail.com'),
(55, '2024-06-14', '10h-12h', '1', 'clara.moubarak75@gmail.com'),
(56, '2024-06-22', '10h-13h', '2', 'clara.moubarak75@gmail.com'),
(57, '2024-06-07', '10h-13h', '2', 'clara.moubarak75@gmail.com'),
(58, '0000-00-00', '14h-16h', '1', 'clara.moubarak75@gmail.com'),
(59, '08/06/2024', '16h-18h', '1', 'clara.moubarak75@gmail.com'),
(60, '14/06/2024', '14h-16h', '1', 'clara.moubarak75@gmail.com'),
(61, '22/06/2024', '14h-16h', '1', 'sami_moubarak@hotmail.com'),
(62, '30/06/2024', '15h-18h', '2', 'notnintendo.ds@gmail.com'),
(63, '22/06/2024', '14h-16h', '1', 'hello@guerrillamail.de'),
(64, '22/06/2024', '15h-18h', '2', 'clara.moubarak75@gmail.com'),
(65, '22/06/2024', '15h-18h', '2', 'clara.moubarak75@gmail.com'),
(66, '15/06/2024', '10h-12h', '1', 'clara.moubarak75@gmail.com'),
(67, '29/06/2024', '16h-18h', '1', 'clara.moubarak75@gmail.com'),
(68, '22/06/2024', '14h-16h', '1', 'clara.moubarak75@gmail.com'),
(69, '30/06/2024', '14h-16h', '1', 'clara.moubarak75@gmail.com'),
(70, '29/06/2024', '14h-16h', '1', 'clara.moubarak@hotmail.fr');

-- --------------------------------------------------------

--
-- Structure de la table `hh_user`
--

CREATE TABLE `hh_user` (
  `nom_user` varchar(20) NOT NULL,
  `prenom_user` varchar(20) NOT NULL,
  `mail_user` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `hh_user`
--

INSERT INTO `hh_user` (`nom_user`, `prenom_user`, `mail_user`) VALUES
('moubarak', 'sami', 'sami_moubarak@hotmail.com'),
('moubarak', 'clara', 'clara.moubarak75@gmail.com'),
('Nooris', 'Chuck', 'notnintendo.ds@gmail.com'),
('moubarak', 'Emilie', 'hello@guerrillamail.de'),
('qvnks', 'bjkdvk', 'clara.moubarak@hotmail.fr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `hh_atelier`
--
ALTER TABLE `hh_atelier`
  ADD PRIMARY KEY (`id_atelier`);

--
-- Index pour la table `hh_calendrier`
--
ALTER TABLE `hh_calendrier`
  ADD PRIMARY KEY (`id_cd`);

--
-- Index pour la table `hh_reservation`
--
ALTER TABLE `hh_reservation`
  ADD PRIMARY KEY (`id_reservation`);

--
-- Index pour la table `hh_user`
--
ALTER TABLE `hh_user`
  ADD PRIMARY KEY (`mail_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `hh_atelier`
--
ALTER TABLE `hh_atelier`
  MODIFY `id_atelier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `hh_calendrier`
--
ALTER TABLE `hh_calendrier`
  MODIFY `id_cd` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `hh_reservation`
--
ALTER TABLE `hh_reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
