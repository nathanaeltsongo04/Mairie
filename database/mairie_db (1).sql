-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 16 fév. 2024 à 10:29
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mairie_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `citoyen`
--

CREATE TABLE `citoyen` (
  `CODECITOYEN` int(11) NOT NULL,
  `NOM` text DEFAULT NULL,
  `POSTNOM` text DEFAULT NULL,
  `PRENOM` text DEFAULT NULL,
  `GENRE` char(1) DEFAULT NULL,
  `DATEDENAISSANCE` date DEFAULT NULL,
  `LIEUDENAISSANCE` text DEFAULT NULL,
  `ADRESSE` text DEFAULT NULL,
  `CONTACT` text DEFAULT NULL,
  `EMAIL` text DEFAULT NULL,
  `PERE` text DEFAULT NULL,
  `MERE` text DEFAULT NULL,
  `PARTENAIRE` text DEFAULT NULL,
  `ENFANT` text DEFAULT NULL,
  `ETATCIVIL` text DEFAULT NULL,
  `PROFESSION` text DEFAULT NULL,
  `CHEFFERIE` text DEFAULT NULL,
  `TERRITOIRE` text DEFAULT NULL,
  `PROVINCE` text DEFAULT NULL,
  `NATIONALITE` text DEFAULT NULL,
  `IDCARTE` text DEFAULT NULL,
  `VISIBLE` int(11) DEFAULT NULL,
  `AUTEUR` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `citoyen`
--

INSERT INTO `citoyen` (`CODECITOYEN`, `NOM`, `POSTNOM`, `PRENOM`, `GENRE`, `DATEDENAISSANCE`, `LIEUDENAISSANCE`, `ADRESSE`, `CONTACT`, `EMAIL`, `PERE`, `MERE`, `PARTENAIRE`, `ENFANT`, `ETATCIVIL`, `PROFESSION`, `CHEFFERIE`, `TERRITOIRE`, `PROVINCE`, `NATIONALITE`, `IDCARTE`, `VISIBLE`, `AUTEUR`) VALUES
(1, 'Mumbere', 'Tsongo', 'Nathanael', 'M', '2000-10-04', NULL, 'Goma/KARISIMBI/Virunga', '0995247814', 'nathanaeltsongo04@gmail.com', 'Tsongo', 'Penghele', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '09876', 1, NULL),
(2, 'Mumbere', 'Tsongo', 'Nathanael', NULL, '2000-10-04', 'Beni', 'Goma/Virunga', '0995247814', 'n@gmail.com', 'Tsongo', 'Penghele', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Congolaise', NULL, 1, NULL),
(3, 'Mumbere', 'Tsongo', 'Nathanael', NULL, '2000-10-04', 'Beni', NULL, '0995247814', 'n@gmail.com', 'Tsongo', 'Penghele', NULL, NULL, 'Celibataire', 'Etudiant', NULL, 'Beni', 'Nord-Kivu', 'Congolaise', NULL, 1, NULL),
(4, 'Kahindo', 'Tsongo', 'Laurence', NULL, '2002-07-27', 'Beni', 'Beni/Kalinda/Ntoni', '0995247814', 'n@gmail.com', 'Tsongo', 'Penghele', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Congolaise', NULL, 1, NULL),
(5, 'Mumbere', 'Tsongo', 'Nathanael', 'M', '2023-10-04', NULL, 'Goma/Karisimbi/Virunga', '0995247814', 'nathanaeltsongo04@gmail.com', 'Tsongo', 'Penghele', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '09959', 1, NULL),
(6, 'Mumbere', 'Tsongo', 'Nathanael', 'M', '2023-10-04', NULL, 'Goma/Karisimbi/Virunga', '0995247814', 'nathanaeltsongo04@gmail.com', 'Tsongo', 'Penghele', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '09959', 1, NULL),
(7, 'Dorcas', 'Mbonyimbuga', 'Promesse', NULL, '2002-10-10', 'Goma', 'Goma/Virunga', '0995247814', 'dorcasmbonyimbuga@gmail.com', 'Don', 'Helene', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Congolaise', NULL, 1, NULL),
(8, 'Mumbere', 'Tsongo', 'Nathanael', 'M', '2024-02-02', NULL, 'virunga', '0995247814', 'n@gmail.com', 'tsongo', 'penghele', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '00000', 1, NULL),
(9, 'Mumbere', 'Tsongo', 'Nathanael', 'M', '2024-02-02', NULL, 'virunga', '0995247814', 'n@gmail.com', 'tsongo', 'penghele', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '00000', 1, NULL),
(10, 'q', 'q', 'q', NULL, '2024-02-02', 'q', 'v', '0995247814', 'n@gmail.com', 'q', 'q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'q', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `CODECOMMANDE` int(11) NOT NULL,
  `DECLARANT` int(11) DEFAULT NULL,
  `DOCUMENT` int(11) DEFAULT NULL,
  `STATUT` int(11) DEFAULT NULL,
  `DDATE` datetime DEFAULT current_timestamp(),
  `VISIBLE` int(11) DEFAULT NULL,
  `AUTEUR` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`CODECOMMANDE`, `DECLARANT`, `DOCUMENT`, `STATUT`, `DDATE`, `VISIBLE`, `AUTEUR`) VALUES
(1, 1, 1, 1, '2023-10-19 07:31:11', 1, NULL),
(2, 2, 2, 1, '2023-10-19 11:10:39', 1, NULL),
(3, 3, 3, 1, '2023-10-19 15:16:44', 1, NULL),
(4, 4, 2, 1, '2023-10-19 18:50:01', 1, NULL),
(5, 5, 1, 1, '2023-10-19 19:08:22', 1, NULL),
(6, 6, 1, 1, '2023-10-19 19:15:03', 1, NULL),
(7, 7, 2, 1, '2023-10-19 21:35:36', 1, NULL),
(8, 8, 1, 0, '2024-02-16 11:09:34', 1, NULL),
(9, 9, 1, 0, '2024-02-16 11:18:40', 1, NULL),
(10, 10, 2, 0, '2024-02-16 11:23:44', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `CODECOMPTE` int(11) NOT NULL,
  `UTILISATEUR` int(11) DEFAULT NULL,
  `NOMUTILISATEUR` text DEFAULT NULL,
  `MOTDEPASSE` text DEFAULT NULL,
  `VISIBLE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`CODECOMPTE`, `UTILISATEUR`, `NOMUTILISATEUR`, `MOTDEPASSE`, `VISIBLE`) VALUES
(1, 1, 'admin', 'admin', 1),
(2, 2, 'malaika', '12', 1),
(3, 3, 'nathanael', '12', 1);

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

CREATE TABLE `document` (
  `CODEDOCUMENT` int(11) NOT NULL,
  `DESIGNATION` text DEFAULT NULL,
  `PRIX` float DEFAULT NULL,
  `DESCRIPTION` text DEFAULT NULL,
  `VISIBLE` int(11) DEFAULT NULL,
  `AUTEUR` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `document`
--

INSERT INTO `document` (`CODEDOCUMENT`, `DESIGNATION`, `PRIX`, `DESCRIPTION`, `VISIBLE`, `AUTEUR`) VALUES
(1, 'Attestation de Residence', 20000, 'Témoignage de residence', 1, 'admin admin'),
(2, 'Acte de Naissance', 10000, 'Naissance', 1, 'Masaka Désanges'),
(3, 'Attestation de bonne conduite vie et moeurs', 15000, 'vie et moeurs', 1, 'Masaka Désanges');

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE `livraison` (
  `CODELIVRAISON` int(11) NOT NULL,
  `PAYEMENT` int(11) DEFAULT NULL,
  `DDATE` datetime DEFAULT NULL,
  `VISIBLE` int(11) DEFAULT NULL,
  `AUTEUR` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `payement`
--

CREATE TABLE `payement` (
  `CODEPAYEMENT` int(11) NOT NULL,
  `COMMANDE` int(11) DEFAULT NULL,
  `MONTANT` float DEFAULT NULL,
  `DDATE` datetime DEFAULT current_timestamp(),
  `VISIBLE` int(11) DEFAULT NULL,
  `STATUT` int(11) DEFAULT NULL,
  `AUTEUR` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `payement`
--

INSERT INTO `payement` (`CODEPAYEMENT`, `COMMANDE`, `MONTANT`, `DDATE`, `VISIBLE`, `STATUT`, `AUTEUR`) VALUES
(1, 1, 20000, '2023-10-19 07:37:12', 1, 1, 'Masaka Désanges'),
(2, 2, 10000, '2023-10-19 11:11:05', 1, 1, 'Masaka Désanges'),
(3, 3, 15000, '2023-10-19 15:17:11', 1, 1, 'Masaka Désanges'),
(4, 5, 20000, '2023-10-19 21:25:18', 1, 1, 'admin admin'),
(5, 7, 10000, '2023-10-19 21:36:36', 1, 0, 'admin admin'),
(6, 6, 20000, '2023-10-20 08:56:25', 1, 1, 'admin admin'),
(7, 4, 10000, '2023-10-20 08:57:15', 1, 0, 'admin admin');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `CODESERVICE` int(11) NOT NULL,
  `DESIGNATION` text DEFAULT NULL,
  `EMAIL` text DEFAULT NULL,
  `VISIBLE` int(11) DEFAULT NULL,
  `AUTEUR` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`CODESERVICE`, `DESIGNATION`, `EMAIL`, `VISIBLE`, `AUTEUR`) VALUES
(1, 'Administrateur', NULL, 1, 'Administrateur'),
(2, 'Bureau I', 'bureau01@gmail.com', 1, 'admin admin'),
(3, 'Bureau II', 'N@gmail.com', 1, 'Masaka Désanges');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `CODEUTILISATEUR` int(11) NOT NULL,
  `NOM` text DEFAULT NULL,
  `POSTNOM` text DEFAULT NULL,
  `PRENOM` text DEFAULT NULL,
  `FONCTION` int(11) DEFAULT NULL,
  `VISIBLE` int(11) DEFAULT NULL,
  `AUTEUR` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`CODEUTILISATEUR`, `NOM`, `POSTNOM`, `PRENOM`, `FONCTION`, `VISIBLE`, `AUTEUR`) VALUES
(1, 'admin', 'admin', 'admin', 1, 1, 'Administrateur'),
(2, 'Mwamini', 'Masaka', 'Désanges', 2, 1, 'admin admin'),
(3, 'Mumbere', 'Tsongo', 'Nathanael', 3, 1, 'Masaka Désanges');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `citoyen`
--
ALTER TABLE `citoyen`
  ADD PRIMARY KEY (`CODECITOYEN`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`CODECOMMANDE`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`CODECOMPTE`);

--
-- Index pour la table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`CODEDOCUMENT`);

--
-- Index pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`CODELIVRAISON`);

--
-- Index pour la table `payement`
--
ALTER TABLE `payement`
  ADD PRIMARY KEY (`CODEPAYEMENT`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`CODESERVICE`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`CODEUTILISATEUR`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `citoyen`
--
ALTER TABLE `citoyen`
  MODIFY `CODECITOYEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `CODECOMMANDE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `CODECOMPTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `document`
--
ALTER TABLE `document`
  MODIFY `CODEDOCUMENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `CODELIVRAISON` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `payement`
--
ALTER TABLE `payement`
  MODIFY `CODEPAYEMENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `CODESERVICE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `CODEUTILISATEUR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
