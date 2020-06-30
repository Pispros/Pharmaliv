-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 30 Juin 2020 à 17:36
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
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `ID` int(11) NOT NULL,
  `ID_client` int(11) NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `quantité_produit` int(11) NOT NULL,
  `region` varchar(100) NOT NULL,
  `ID_pharmacie` int(11) NOT NULL,
  `choix_date` varchar(25) NOT NULL,
  `date_commande` varchar(50) NOT NULL,
  `payement` varchar(50) NOT NULL,
  `photo_ordonnance` varchar(255) NOT NULL,
  `zone_livraison` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commandes`
--

INSERT INTO `commandes` (`ID`, `ID_client`, `nom_produit`, `quantité_produit`, `region`, `ID_pharmacie`, `choix_date`, `date_commande`, `payement`, `photo_ordonnance`, `zone_livraison`) VALUES
(8, 4, 'Mouton_mÃ©chant', 1, 'thies', 10, '30-06-2020', '30-06-2020 03:13:50', 'OM', 'Capture du 2019-08-19 16-23-56.png', 'C');

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

CREATE TABLE `livreur` (
  `ID` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `zone_livraison` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pending_commands`
--

CREATE TABLE `pending_commands` (
  `ID` int(11) NOT NULL,
  `ID_pharmacie` int(11) NOT NULL,
  `ID_client` int(11) NOT NULL,
  `Zone_livraison` varchar(255) NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `qte` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pharmacie`
--

CREATE TABLE `pharmacie` (
  `ID` int(11) NOT NULL,
  `region` varchar(100) NOT NULL,
  `nom_pharm` varchar(255) NOT NULL,
  `nom_gerant` varchar(255) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `tel` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pharmacie`
--

INSERT INTO `pharmacie` (`ID`, `region`, `nom_pharm`, `nom_gerant`, `mail`, `adresse`, `tel`, `password`) VALUES
(3, 'dakar', 'GUIGON', 'nom_gerant', 'GUIGON@gmail.com', 'adresse', 'tel', '$2y$10$g9kc91tvAMi5XJe3cZxHj.DInsPaQS5aEspIevggALXUU6TvCTIii'),
(4, 'dakar', 'GAMBETTA', 'nom_gerant', 'GAMBETTA@gmail.com', 'adresse', 'tel', '$2y$10$uU6umdhrJfszSx4lIQ5pp.eusTc1q2G9FMzpQGmFvex.8Ilb81Axy'),
(5, 'dakar', 'ROLLAND', 'nom_gerant', 'ROLLAND@gmail.com', 'adresse', 'tel', '$2y$10$6f0P5XZafORxHteTFj7jj.APGNolAbk8dG9teTyP98P4CMrxObnuS'),
(6, 'dakar', 'GUEDIAWAYE', 'nom_gerant', 'GUEDIAWAYE@gmail.com', 'adresse', 'tel', '$2y$10$Cqz2c5FeT3TCYL.Y03jNd.ei0gWIVCVSyjkT44JaVRHzI1nkBI2t6'),
(7, 'dakar', 'TERANGA', 'nom_gerant', 'TERANGA@gmail.com', 'adresse', 'tel', '$2y$10$.b0bn/jsAN36y1lTQjsr9OfUK.stCOfZHdmmTHPRkmglIp3WieuM6'),
(8, 'thies', 'BABYLONE', 'nom_gerant', 'BABYLONE@gmail.com', 'adresse', 'tel', '$2y$10$/K.ENYDDYkkCRhhGLISfpumiAQTTGAr/xUPlQegs8iDWvr/QlHmFW'),
(9, 'thies', 'COULANGE', 'nom_gerant', 'COULANGE@gmail.com', 'adresse', 'tel', '$2y$10$Lr3faB2aCPb0WaRBXfld4.kJMdE3AcVoc.NeESj2CSOxFBMrb9wk6'),
(10, 'thies', 'KARAFA', 'nom_gerant', 'KARAFA@gmail.com', 'adresse', 'tel', '$2y$10$4YV1kuaAtWcsrszmBTEpKe/jkVQksCNDIs1B0oq8PdpH..AYNir.S'),
(11, 'thies', 'MADELAINE', 'nom_gerant', 'MADELAINE@gmail.com', 'adresse', 'tel', '$2y$10$O/u7JYjIwMRR7qY2iZvwXeog3hhNaa3FDwAr3jan6XmVnPHLjAAMe'),
(12, 'thies', 'MARGOUS', 'nom_gerant', 'MARGOUS@gmail.com', 'adresse', 'tel', '$2y$10$gDTXvBckTroYbe0S7yMfZ.1SXd2RnElPRIQ9u9FYC6LbIinwAQk4a'),
(13, 'sl', 'PASCALINE', 'nom_gerant', 'PASCALINE@gmail.com', 'adresse', 'tel', '$2y$10$IfFQdYth6ByO9BTKPISEf.ajrmk7Dsqn1sKe6kogi7SbgwkMBgPIW'),
(14, 'sl', 'PIKINOISE', 'nom_gerant', 'PIKINOISE@gmail.com', 'adresse', 'tel', '$2y$10$QpoPSTJlaPlRSvaYOhJ2NevRyE1Ll/Q4C/F1mvvAva.DIT8nTxshO'),
(15, 'sl', 'PODOR', 'nom_gerant', 'PODOR@gmail.com', 'adresse', 'tel', '$2y$10$QQ1i8nX81ragSLU4696W6eSiM5l8e5snWHAt74Fn1BP7KlUCWKhpa'),
(16, 'sl', 'PRINCIPAL', 'nom_gerant', 'PRINCIPAL@gmail.com', 'adresse', 'tel', '$2y$10$oC6dU6lzyICD7MHd2BKTAeCTJ3qnaj8EVoRyO7A3nPV9YsYtBHzXi'),
(17, 'sl', 'SOGUI', 'nom_gerant', 'SOGUI@gmail.com', 'adresse', 'tel', '$2y$10$HckTrvJLHLiT23.LBlFfne8hb1xGLLsfQcH8iex5TyYJyg9re/yre');

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
(4, 'ldk@gmail.com', '$2y$10$pig0Peky8VmM.lOcQk94JejqGY1elMXb77yNNAzPAzHA45OlOZV1C', '', 'Ldk', 'Fabio', '785982493', '21-08-2002', 'homme', 'Statut ...', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `livreur`
--
ALTER TABLE `livreur`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `pending_commands`
--
ALTER TABLE `pending_commands`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `livreur`
--
ALTER TABLE `livreur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pending_commands`
--
ALTER TABLE `pending_commands`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pharmacie`
--
ALTER TABLE `pharmacie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
