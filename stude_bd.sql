-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 12 mai 2024 à 17:47
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `stude_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `compteur`
--

CREATE TABLE `compteur` (
  `ID` int(11) NOT NULL,
  `Nom_prop` varchar(45) NOT NULL,
  `Nom_voie` varchar(100) NOT NULL,
  `Num_voie` int(11) NOT NULL,
  `CP` int(11) NOT NULL,
  `Ville` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `compteur`
--

INSERT INTO `compteur` (`ID`, `Nom_prop`, `Nom_voie`, `Num_voie`, `CP`, `Ville`) VALUES
(13, 'JOSEPH', 'Avenue republique', 11, 28000, 'Chartres'),
(14, 'BELVETH', 'Bd Heurteloup', 11, 37000, 'Tours'),
(15, 'AURELION', 'Bd Heurteloup', 11, 37000, 'Tours'),
(17, 'ZYRA', 'Bd Heurteloup', 11, 37000, 'Tours'),
(19, 'SYNDRA', 'rue Georges Bizet', 11, 28400, 'Nogent-le-rotrou'),
(20, 'BRAUM', 'rue Bernard', 15, 28400, 'Nogent-le-rotrou'),
(21, 'VIEGO', 'Bd Heurteloup', 11, 37000, 'Tours'),
(22, 'DAVID', 'Bd Heurteloup', 11, 37000, 'Tours');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `type_user` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`ID`, `login`, `mdp`, `type_user`, `nom`, `prenom`) VALUES
(1, 'allan', '$2y$10$u9ZNoJ6qki8ZvQphbPP0qeAYvczZyAMo16Jo1C.OKbKkgNvcFlzlG', 'admin', 'FRANCIN', 'allan'),
(2, 'free', '$2y$10$JfAKL8D7CYohYMEFxmqwuO6QUSyy7VDH7QY38te0FsK3yHQJE2x/6', 'client', 'xavier', 'niel');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compteur`
--
ALTER TABLE `compteur`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `compteur`
--
ALTER TABLE `compteur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
