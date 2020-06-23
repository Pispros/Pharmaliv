-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 23 Juin 2020 à 19:58
-- Version du serveur :  5.7.29-0ubuntu0.16.04.1
-- Version de PHP :  7.0.33-0ubuntu0.16.04.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pharmaliv`
--

-- --------------------------------------------------------

--
-- Structure de la table `pharmacie`
--

CREATE TABLE `pharmacie` (
  `ID` int(11) NOT NULL,
  `nom_pharm` varchar(255) NOT NULL,
  `nom_gerant` varchar(255) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pharmacie`
--

INSERT INTO `pharmacie` (`ID`, `nom_pharm`, `nom_gerant`, `mail`, `adresse`, `tel`, `password`) VALUES
(2, 'passer', 'passer', 'vox', 'passer', 'passer', '$2y$10$0g3HDGmpI5MtZrc/aPeZvubDKXb/FcRq3aaZ93fg.i0uj8DH.E50W');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo_path` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `tel` varchar(25) NOT NULL,
  `date_naissance` varchar(25) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `symptome` text NOT NULL,
  `inf_suppl` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`ID`, `login`, `password`, `photo_path`, `nom`, `prenom`, `tel`, `date_naissance`, `sexe`, `symptome`, `inf_suppl`) VALUES
(0, 'vox', '$2y$10$VDqvxdrrk4UPH5VsI0zXF.94YDwesJCptLj.Y6Cy574/5lRZVVnjC', '', 'k,kl,kl,', 'k,kl,kl', ',kl,kl,', '17-06-2020', 'homme', 'Statut ...', 'jnkjn');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pharmacie`
--
ALTER TABLE `pharmacie`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`login`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `pharmacie`
--
ALTER TABLE `pharmacie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
