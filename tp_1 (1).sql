-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 26 sep. 2023 à 17:28
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp_1`
--

-- --------------------------------------------------------

--
-- Structure de la table `etagere`
--

CREATE TABLE `etagere` (
  `id` int(11) UNSIGNED NOT NULL,
  `material` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `quantite` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `etagere`
--

INSERT INTO `etagere` (`id`, `material`, `size`, `color`, `quantite`) VALUES
(1, 'inox', '120x90cm', 'blache', 10),
(4, '', '', 'blache', 4),
(5, 'bois', '120x80cm', 'noire', 18),
(7, 'bois', '90x65cm', 'marron', 5),
(8, 'inoxe', '190x645cm', 'noire', 15),
(11, 'faux bois', '150x90cm', 'grise', 23),
(12, 'bois', '90x65cm', 'marron', 5),
(14, 'inoxe', '90x65cm', 'grise', 10),
(59, 'faux bois', '130x65cm', 'marron', 5),
(60, 'bois', '190x40cm', 'noire', 5),
(61, 'inox', '180x65cm', 'marron', 5),
(62, 'bois', '187x68cm', 'grise', 5),
(64, 'plastique', '190x65cm', 'marron', 15),
(65, 'bois', '190x60cm', 'marron', 15),
(66, 'aliminum', '190x74cm', 'marron', 45),
(67, 'bois', '190x65cm', 'grise', 10),
(68, 'inox', '190x65cm', 'marron', 15),
(69, 'bois', '190x65cm', 'noire', 32),
(92, 'plastique', '90x50cm', 'marron', 16),
(93, 'plastique', '90x50cm', 'marron', 16),
(94, 'plastique', '90x50cm', 'marron', 16),
(95, 'plastique', '90x50cm', 'marron', 16),
(96, 'plastique', '90x50cm', 'marron', 16);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etagere`
--
ALTER TABLE `etagere`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etagere`
--
ALTER TABLE `etagere`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
