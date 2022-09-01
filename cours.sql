-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 01 sep. 2022 à 12:11
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gest_biblio`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `matiere` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `classe` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `semestre` int(2) NOT NULL,
  `couverture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `matiere`, `auteur`, `classe`, `lien`, `semestre`, `couverture`) VALUES
(1, 'Matiere', 'auteur', 'RGL1', './pdf/cours/cours1.pdf', 1, 'https://cdn.pixabay.com/photo/2017/08/13/16/43/notebook-2637757_960_720.jpg'),
(2, 'Matiere', 'auteur', 'RGL1', './pdf/cours/cours1.pdf', 1, 'https://cdn.pixabay.com/photo/2017/08/13/16/43/notebook-2637757_960_720.jpg'),
(3, 'Matiere', 'auteur', 'RGL1', './pdf/cours/cours1.pdf', 2, 'https://cdn.pixabay.com/photo/2017/08/13/16/43/notebook-2637757_960_720.jpg'),
(4, 'Matiere', 'auteur', 'RGL1', './pdf/cours/cours1.pdf', 2, 'https://cdn.pixabay.com/photo/2017/08/13/16/43/notebook-2637757_960_720.jpg'),
(5, 'Matiere', 'auteur', 'RGL2', './pdf/cours/cours1.pdf', 3, 'https://cdn.pixabay.com/photo/2017/08/13/16/43/notebook-2637757_960_720.jpg'),
(6, 'Matiere', 'auteur', 'RGL2', './pdf/cours/cours1.pdf', 3, 'https://cdn.pixabay.com/photo/2017/08/13/16/43/notebook-2637757_960_720.jpg'),
(7, 'Matiere', 'auteur', 'RGL2', './pdf/cours/cours1.pdf', 4, 'https://cdn.pixabay.com/photo/2017/08/13/16/43/notebook-2637757_960_720.jpg'),
(8, 'Matiere', 'auteur', 'RGL2', './pdf/cours/cours1.pdf', 4, 'https://cdn.pixabay.com/photo/2017/08/13/16/43/notebook-2637757_960_720.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
