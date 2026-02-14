-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 14 fév. 2026 à 14:23
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nexus_digital`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

DROP TABLE IF EXISTS `actualite`;
CREATE TABLE IF NOT EXISTS `actualite` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `actualite`
--

INSERT INTO `actualite` (`id`, `titre`, `image`, `contenu`, `date`) VALUES
(1, 'Windev', 'post281474976711183_73543e66443a4ce0adb0fe259e43f7fa_mceclip0-4012033961.png', '<div>Aujourd\'hui, je vous présente notre nouveau langage de programmation que nous allons utiliser pour faire certaines applications. Ce nouveau langage s\'appelle Windev.&nbsp;</div>', '2026-02-12'),
(2, 'Symfony', 'symfony-1652057771.png', '<div>Aujourd\'hui, nous venons de créer une nouvelle application en Symfony. Dans cet article nous présenterons notre nouvelle application.&nbsp;</div>', '2026-02-10'),
(3, 'Twig', 'twig-logo-147704559.png', '<div>Pour faire notre nouvelle application, nous avons utilisé le template Twig que nous allons vous présenter dans cet article.&nbsp;</div>', '2026-02-11'),
(4, 'PHP', 'OIP-1537077735.jpg', '<div>Aujourd\'hui on aimerait vous présenter le langage de programmation PHP.&nbsp;</div>', '2026-02-13');

-- --------------------------------------------------------

--
-- Structure de la table `actualite_categorie`
--

DROP TABLE IF EXISTS `actualite_categorie`;
CREATE TABLE IF NOT EXISTS `actualite_categorie` (
  `actualite_id` int NOT NULL,
  `categorie_id` int NOT NULL,
  PRIMARY KEY (`actualite_id`,`categorie_id`),
  KEY `IDX_EC878E9DA2843073` (`actualite_id`),
  KEY `IDX_EC878E9DBCF5E72D` (`categorie_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `actualite_categorie`
--

INSERT INTO `actualite_categorie` (`actualite_id`, `categorie_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`) VALUES
(1, 'WinDev'),
(2, 'Symfony'),
(3, 'Twig'),
(4, 'PHP');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `actualite_id` int NOT NULL,
  `utilisateur_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_67F068BCA2843073` (`actualite_id`),
  KEY `IDX_67F068BCFB88E14F` (`utilisateur_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `libelle`, `actualite_id`, `utilisateur_id`) VALUES
(1, 'L\'article nous plaît bien.', 1, 1),
(2, 'Symfony est un super langage de programmation.', 2, 1),
(3, 'Merci pour l\'article.', 3, 1),
(4, 'Twig, je le trouve intéressant.', 3, 1),
(5, 'Pourquoi cet article ne décrit-il que cela ?', 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `piece_jointe` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `email`, `telephone`, `message`, `piece_jointe`) VALUES
(1, 'John', 'Doe', 'Doe.John@gmail.com', '0612345675', 'J\'aimerais effectuer un stage dans votre entreprise', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20260212133915', '2026-02-12 13:39:28', 170);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
CREATE TABLE IF NOT EXISTS `messenger_messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750` (`queue_name`,`available_at`,`delivered_at`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `messenger_messages`
--

INSERT INTO `messenger_messages` (`id`, `body`, `headers`, `queue_name`, `created_at`, `available_at`, `delivered_at`) VALUES
(1, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":5:{i:0;s:30:\\\"emails/contact_admin.html.twig\\\";i:1;N;i:2;a:1:{s:7:\\\"contact\\\";O:18:\\\"App\\\\Entity\\\\Contact\\\":7:{s:22:\\\"\\0App\\\\Entity\\\\Contact\\0id\\\";i:1;s:23:\\\"\\0App\\\\Entity\\\\Contact\\0nom\\\";s:4:\\\"John\\\";s:26:\\\"\\0App\\\\Entity\\\\Contact\\0prenom\\\";s:3:\\\"Doe\\\";s:25:\\\"\\0App\\\\Entity\\\\Contact\\0email\\\";s:18:\\\"Doe.John@gmail.com\\\";s:29:\\\"\\0App\\\\Entity\\\\Contact\\0telephone\\\";s:10:\\\"0612345675\\\";s:27:\\\"\\0App\\\\Entity\\\\Contact\\0message\\\";s:51:\\\"J\\\'aimerais effectuer un stage dans votre entreprise\\\";s:32:\\\"\\0App\\\\Entity\\\\Contact\\0piece_jointe\\\";N;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:4:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"ode36093@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:19:\\\"code36093@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:8:\\\"reply-to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:8:\\\"Reply-To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:18:\\\"Doe.John@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:27:\\\"Nouveau message de John Doe\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}i:4;N;}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2026-02-12 14:07:35', '2026-02-12 14:07:35', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `presentation_entreprise`
--

DROP TABLE IF EXISTS `presentation_entreprise`;
CREATE TABLE IF NOT EXISTS `presentation_entreprise` (
  `id` int NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `service_proposee` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` int NOT NULL,
  `adresse_postal` varchar(255) NOT NULL,
  `code_postal` int NOT NULL,
  `commune` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `presentation_entreprise`
--

INSERT INTO `presentation_entreprise` (`id`, `logo`, `image`, `service_proposee`, `email`, `telephone`, `adresse_postal`, `code_postal`, `commune`) VALUES
(1, 'Logo entreprise.png', 'service.png', '<ul><li>Lancement stratégique et refonte</li><li>Produits digitaux et applications</li><li>Optimisation continue et stratégie</li></ul>', 'contact@nexusdigital.com', 423456789, '25 rue des montagnes', 15000, 'Aurillac');

-- --------------------------------------------------------

--
-- Structure de la table `signaler_commentaire`
--

DROP TABLE IF EXISTS `signaler_commentaire`;
CREATE TABLE IF NOT EXISTS `signaler_commentaire` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `commentaire_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EEF92385BA9CD190` (`commentaire_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `signaler_commentaire`
--

INSERT INTO `signaler_commentaire` (`id`, `libelle`, `commentaire_id`) VALUES
(1, 'Le commentaire n\'est pas approprié figuré sur cette page', 3);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_IDENTIFIER_EMAIL` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `nom`, `prenom`, `telephone`) VALUES
(1, 'Doe.John@gmail.com', '[\"ROLE_USER\"]', '$2y$13$I3z9mkWw93ucqfgzCpsDQuBRduodIgKNBH5YKL6S7jLlx/6Qh5sOq', 'Doe', 'John', '+33 6 15 12 48 54'),
(3, 'Doe.jane@gmail.com', '[\"ROLE_COLLABORATEUR\"]', '$2y$13$a6wCcS1I6cBKumdOeOUJhOUojAxT4yBQEFBI0neLuS4O1MWszV/mi', 'Doe', 'Jane', '+33 6 15 12 48 54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
