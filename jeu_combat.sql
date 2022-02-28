-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 16 fév. 2022 à 15:45
-- Version du serveur : 5.7.36
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jeu_combat`
--

-- --------------------------------------------------------

--
-- Structure de la table `combats`
--

CREATE TABLE `combats` (
  `id` int(11) NOT NULL,
  `id_personnage` int(11) NOT NULL,
  `id_personnage2` int(11) NOT NULL,
  `actif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `personnages`
--

CREATE TABLE `personnages` (
  `id` int(11) NOT NULL,
  `personnage` varchar(20) DEFAULT NULL,
  `HP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personnages`
--

INSERT INTO `personnages` (`id`, `personnage`, `HP`) VALUES
(1, 'suekko', NULL),
(2, 'akiseruo', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `combats`
--
ALTER TABLE `combats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `combat_perso` (`id_personnage`),
  ADD KEY `combat_perso2` (`id_personnage2`);

--
-- Index pour la table `personnages`
--
ALTER TABLE `personnages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `combats`
--
ALTER TABLE `combats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personnages`
--
ALTER TABLE `personnages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `combats`
--
ALTER TABLE `combats`
  ADD CONSTRAINT `combat_perso` FOREIGN KEY (`id_personnage`) REFERENCES `personnages` (`id`),
  ADD CONSTRAINT `combat_perso2` FOREIGN KEY (`id_personnage2`) REFERENCES `personnages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
