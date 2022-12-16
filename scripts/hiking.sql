-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql:3306
-- Généré le : ven. 16 déc. 2022 à 15:16
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hiking`
--

-- --------------------------------------------------------

--
-- Structure de la table `Hikes`
--

CREATE TABLE `Hikes` (
  `ID` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_nn_0900_ai_ci NOT NULL,
  `date` varchar(255) NOT NULL,
  `distance` float NOT NULL,
  `duration` varchar(255) NOT NULL,
  `elevation_gain` varchar(255) NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `update` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Hikes`
--

INSERT INTO `Hikes` (`ID`, `name`, `date`, `distance`, `duration`, `elevation_gain`, `description`, `update`) VALUES
(1, 'Le jardin d\'O', '12/16/2022', 13.04, '4h40', '+326', 'Partez à la découverte de la jolie cité de Nismes aux belles maisons de pierre, de sa nature préservée. Remontez le cours de l\'Eau Noire jusqu\'à Petigny, partez à l\'assaut de ses collines boisées et découvrez, par des sentiers moins fréquentés, le Fondry des Chiens et terminez la randonnée par la découverte du Jardin d\'O', 'No'),
(2, 'Une boucle depuis la gare de Libramont', '12/16/2022', 7.91, '2h30', '+92', 'Voici la promenade parfaite si vous souhaitez profiter de la neige, quand il y en a, en venant en train.\r\nLe départ et l\'arrivée se font depuis la gare de Libramont, dans les Ardennes.\r\nCette balade de 8 km ne présente pas de difficultés majeures, elle n\'a pour but que de se changer les idées sans s\'encombrer d\'une voiture.', 'No'),
(3, 'Petite promenade autour de Hamois', '12/16/2022', 6.1, '1h50', '+44', 'Un itinéraire principalement sur asphalte et surfaces dures  et basé sur des promenades plus ou moins bien connues, y compris un GR®, sur le Ravel et sur des plus ou moins petites rues dans et autour de Hamois. Une petite séquence de sentier pouvant être assez boueux par temps de pluie et impossible avec une poussette pour enfants agrémente ce parcours. Un itinéraire de remplacement est proposé dans le descriptif mais réduit la distance parcourue.', 'No'),
(4, 'Nagimont et Chemin de Sedan depuis Sugny', '12/16/2022', 13.07, '4h25', '+241', 'Très belle promenade, quelque peu physique, au départ de Sugny, principalement dans les bois mais offrant quelques belles vues. Retour par la crête sur le Chemin de Sedan.', 'No'),
(5, ' Promenade des points de vue à Dohan', '12/16/2022', 7.72, '2h45', '+203', 'Promenade des points de vue dans le village de Dohan, entre Bouillon et Florenville. Un parcours tracé presque entièrement sur des chemins de forêts.', 'No'),
(6, 'Chapelle Notre-Dame de Fatima, Bois de Ligne et Maquis de Saint-Marcoult', '12/16/2022', 14.59, '2h45', '+154', 'Partez, par les chemins, les sentiers et les belles allées forestières, à la découverte du Bois de Ligne, du maquis de Saint-Marcoult et profitez des larges panoramas de la Wallonie Picarde.\r\nCette randonnée reprend le début et la fin de la très belle randonnée Boucle à Silly, quartier Mauvinage.\r\nC\'est en quelque sorte une version longue qui vous fera découvrir les Bois de Ligne, d\'Enghien et le Maquis de Saint-Marcoult.', 'No'),
(7, 'Nature, verdure et bord de Sambre entre Floriffoux et Floreffe', '12/16/2022', 7.72, '2h15', '+11', 'Découvrir une partie du village de Floriffoux vers Floreffe, en passant par des petits chemins et un halage naturel, un passage au pied de l\'abbaye de Floreffe : calme et nature assurés.\r\nLe départ est accessible par le train (gare de Floreffe à proximité).', 'No'),
(8, ' Par le hameau de Borsu et le parc du château de Hoyoux depuis Méan', '12/16/2022', 11.88, '3h50', '+140', 'Boucle proposant des portions entre les champs, dans les sous-bois et sur la route. Parcours assez accessible et agréable, avec notamment un passage par le parc du château de Hoyoux.\r\n\r\nUne alternative plus courte est proposée. Ce parcours de 6,7 km ne passe pas par le château de Hoyoux.', 'No');

-- --------------------------------------------------------

--
-- Structure de la table `Tags`
--

CREATE TABLE `Tags` (
  `ID` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Tags`
--

INSERT INTO `Tags` (`ID`, `name`) VALUES
(1, 'Facile'),
(2, 'Moyenne'),
(3, 'Difficile');

-- --------------------------------------------------------

--
-- Structure de la table `Tags_hikes`
--

CREATE TABLE `Tags_hikes` (
  `hike_id` int UNSIGNED NOT NULL,
  `tag_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Tags_hikes`
--

INSERT INTO `Tags_hikes` (`hike_id`, `tag_id`) VALUES
(1, 2),
(2, 1),
(3, 1),
(4, 2),
(5, 1),
(6, 2),
(7, 1),
(8, 2);

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `ID` int UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Hikes`
--
ALTER TABLE `Hikes`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Tags`
--
ALTER TABLE `Tags`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Tags_hikes`
--
ALTER TABLE `Tags_hikes`
  ADD KEY `hike_id` (`hike_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Hikes`
--
ALTER TABLE `Hikes`
  MODIFY `ID` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `Tags`
--
ALTER TABLE `Tags`
  MODIFY `ID` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `ID` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Tags_hikes`
--
ALTER TABLE `Tags_hikes`
  ADD CONSTRAINT `tags_hikes_ibfk_1` FOREIGN KEY (`hike_id`) REFERENCES `Hikes` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tags_hikes_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `Tags` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Users`
--
ALTER TABLE `Users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `Hikes` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
