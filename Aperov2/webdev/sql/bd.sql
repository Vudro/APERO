-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 10 Mai 2017 à 09:24
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `apero`
--

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `idc` int(11) NOT NULL,
  `idetablissement` int(11) DEFAULT NULL,
  `niveauclasse` varchar(20) DEFAULT NULL,
  `section` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `enfant`
--

CREATE TABLE `enfant` (
  `idenfant` int(11) NOT NULL,
  `idfamille` int(11) DEFAULT NULL,
  `idc` int(11) DEFAULT NULL,
  `prenomenfant` varchar(20) DEFAULT NULL,
  `classeenfant` varchar(10) DEFAULT NULL,
  `nomenfant` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etablissement`
--

CREATE TABLE `etablissement` (
  `idetablissement` int(11) NOT NULL,
  `nometablissement` varchar(50) DEFAULT NULL,
  `teletablissement` varchar(15) DEFAULT NULL,
  `adresseetablissement` varchar(50) DEFAULT NULL,
  `cpetablissement` int(11) DEFAULT NULL,
  `villeetablissement` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

CREATE TABLE `etat` (
  `nometat` varchar(20) NOT NULL,
  `decote` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exemplaire`
--

CREATE TABLE `exemplaire` (
  `idexemplaire` int(11) NOT NULL,
  `nometat` varchar(20) DEFAULT NULL,
  `idfamille` int(11) DEFAULT NULL,
  `id_livre` int(11) DEFAULT NULL,
  `idfamille_acheter` int(11) DEFAULT NULL,
  `exemplaireetat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

CREATE TABLE `famille` (
  `idfamille` int(11) NOT NULL,
  `nomfamille` varchar(20) DEFAULT NULL,
  `adressefamille` varchar(50) DEFAULT NULL,
  `cpfamille` int(11) DEFAULT NULL,
  `villefamille` varchar(50) DEFAULT NULL,
  `telfamille` varchar(15) DEFAULT NULL,
  `mailfamille` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `id_livre` int(11) NOT NULL,
  `idc` int(11) DEFAULT NULL,
  `nommatiere` varchar(20) DEFAULT NULL,
  `nomlivre` varchar(50) DEFAULT NULL,
  `editionlivre` varchar(50) DEFAULT NULL,
  `prineuf` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `nommatiere` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`idc`),
  ADD KEY `idetablissement` (`idetablissement`);

--
-- Index pour la table `enfant`
--
ALTER TABLE `enfant`
  ADD PRIMARY KEY (`idenfant`),
  ADD KEY `idfamille` (`idfamille`),
  ADD KEY `idc` (`idc`);

--
-- Index pour la table `etablissement`
--
ALTER TABLE `etablissement`
  ADD PRIMARY KEY (`idetablissement`);

--
-- Index pour la table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`nometat`);

--
-- Index pour la table `exemplaire`
--
ALTER TABLE `exemplaire`
  ADD PRIMARY KEY (`idexemplaire`),
  ADD KEY `nometat` (`nometat`),
  ADD KEY `idfamille` (`idfamille`),
  ADD KEY `id_livre` (`id_livre`),
  ADD KEY `idfamille_acheter` (`idfamille_acheter`);

--
-- Index pour la table `famille`
--
ALTER TABLE `famille`
  ADD PRIMARY KEY (`idfamille`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id_livre`),
  ADD KEY `idc` (`idc`),
  ADD KEY `nommatiere` (`nommatiere`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`nommatiere`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `classe`
--
ALTER TABLE `classe`
  ADD CONSTRAINT `classe_ibfk_1` FOREIGN KEY (`idetablissement`) REFERENCES `etablissement` (`idetablissement`);

--
-- Contraintes pour la table `enfant`
--
ALTER TABLE `enfant`
  ADD CONSTRAINT `enfant_ibfk_1` FOREIGN KEY (`idfamille`) REFERENCES `famille` (`idfamille`),
  ADD CONSTRAINT `enfant_ibfk_2` FOREIGN KEY (`idc`) REFERENCES `classe` (`idc`);

--
-- Contraintes pour la table `exemplaire`
--
ALTER TABLE `exemplaire`
  ADD CONSTRAINT `exemplaire_ibfk_1` FOREIGN KEY (`nometat`) REFERENCES `etat` (`nometat`),
  ADD CONSTRAINT `exemplaire_ibfk_2` FOREIGN KEY (`idfamille`) REFERENCES `famille` (`idfamille`),
  ADD CONSTRAINT `exemplaire_ibfk_3` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`),
  ADD CONSTRAINT `exemplaire_ibfk_4` FOREIGN KEY (`idfamille_acheter`) REFERENCES `famille` (`idfamille`);

--
-- Contraintes pour la table `livre`
--
ALTER TABLE `livre`
  ADD CONSTRAINT `livre_ibfk_1` FOREIGN KEY (`idc`) REFERENCES `classe` (`idc`),
  ADD CONSTRAINT `livre_ibfk_2` FOREIGN KEY (`nommatiere`) REFERENCES `matiere` (`nommatiere`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
