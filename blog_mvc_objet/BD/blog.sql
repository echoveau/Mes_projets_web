-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 15 Février 2019 à 13:20
-- Version du serveur :  5.7.22-0ubuntu0.16.04.1
-- Version de PHP :  7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `T_BILLET`
--

CREATE TABLE `T_BILLET` (
  `BIL_ID` int(11) NOT NULL,
  `BIL_DATE` datetime NOT NULL,
  `BIL_TITRE` varchar(100) NOT NULL,
  `BIL_CONTENU` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `T_BILLET`
--

INSERT INTO `T_BILLET` (`BIL_ID`, `BIL_DATE`, `BIL_TITRE`, `BIL_CONTENU`) VALUES
(1, '2019-02-15 13:08:14', 'Premier billet', 'Bonjour monde ! Ceci est le premier billet sur mon blog.'),
(2, '2019-02-15 13:08:14', 'Au travail', 'Il faut enrichir ce blog dès maintenant.'),
(3, '2019-02-15 00:00:00', 'Kévin aime Apex', 'Mais il préfère overwatch. En effet, Kévin,20ans, à découvert tout recemment ce jeu phénomène. Rapidement addicte, il aurait déclaré avoir tout de même une préfférence pour Overwatch'),
(4, '2019-02-15 13:19:24', 'Matrix fan de Del Arte', 'Révalation choque ! Le célèbre chanteur de KPop Matrix aurait été apperçu hier soir prêt de Del Arte. Ses proches ont déclarés qu ils ignoraient l addiction de Matflix pour ce restaurent à connotation Italienne.');

-- --------------------------------------------------------

--
-- Structure de la table `T_COMMENTAIRE`
--

CREATE TABLE `T_COMMENTAIRE` (
  `COM_ID` int(11) NOT NULL,
  `COM_DATE` datetime NOT NULL,
  `COM_AUTEUR` varchar(100) NOT NULL,
  `COM_CONTENU` varchar(200) NOT NULL,
  `BIL_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `T_COMMENTAIRE`
--

INSERT INTO `T_COMMENTAIRE` (`COM_ID`, `COM_DATE`, `COM_AUTEUR`, `COM_CONTENU`, `BIL_ID`) VALUES
(1, '2019-02-15 13:08:14', 'A. Nonyme', 'Bravo pour ce début', 1),
(2, '2019-02-15 13:08:14', 'Moi', 'Merci ! Je vais continuer sur ma lancée', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `T_BILLET`
--
ALTER TABLE `T_BILLET`
  ADD PRIMARY KEY (`BIL_ID`);

--
-- Index pour la table `T_COMMENTAIRE`
--
ALTER TABLE `T_COMMENTAIRE`
  ADD PRIMARY KEY (`COM_ID`),
  ADD KEY `fk_com_bil` (`BIL_ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `T_BILLET`
--
ALTER TABLE `T_BILLET`
  MODIFY `BIL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `T_COMMENTAIRE`
--
ALTER TABLE `T_COMMENTAIRE`
  MODIFY `COM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `T_COMMENTAIRE`
--
ALTER TABLE `T_COMMENTAIRE`
  ADD CONSTRAINT `fk_com_bil` FOREIGN KEY (`BIL_ID`) REFERENCES `T_BILLET` (`BIL_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
