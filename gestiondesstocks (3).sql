-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 22 jan. 2022 à 00:33
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestiondesstocks`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`) VALUES
(1, 'FARINES'),
(2, 'RIZ'),
(3, 'LEVURES'),
(4, 'AMELEORANTS'),
(5, 'BEURES'),
(6, 'SELS'),
(7, 'HUILES'),
(8, 'SUCRES');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom_client` varchar(250) NOT NULL,
  `telephone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `telephone`) VALUES
(1, 'SOURCE MOKOLO', 0),
(2, 'DIVERS', 0),
(3, 'INNOCENT', 695164095),
(4, 'TIWA OLIVIER', 672308442),
(5, 'HILAIRE', 674067323),
(6, 'ACHIL MENDONG', 675639903),
(7, 'JEAN NOEL', 677184222),
(8, 'ANTOINE', 674589908),
(9, 'BRICE VOG ADA', 675836194),
(10, 'FREEDLANDFOOD', 698799880),
(11, 'ESPRIT', 699336432),
(12, 'GALAJIA', 679474314),
(13, 'BOUL DU PEUPLE', 695442072),
(14, 'SALI', 0),
(15, 'IBRAHIM TSINGA', 0),
(16, 'NJC', 0),
(17, 'CONFIANCE', 0),
(18, 'LE PRINCE', 682347913),
(19, 'BOUL STELLA', 0),
(20, 'SOCRATE', 0),
(21, 'MODO', 0),
(22, 'FAMILIALE', 0),
(23, 'SONEPAL', 0),
(24, 'ETS AUGUSTIN', 0),
(25, 'TCHINDA BRUNO', 0),
(26, 'TCHINDA CHARLES', 0),
(27, 'KOUAKAM', 0),
(28, 'SOCABO', 0),
(29, 'FELUX', 0),
(30, 'ACROPOLE', 0),
(31, 'FONTANA', 0),
(32, 'TIOMELA', 0),
(33, 'AUGUSTIN', 0),
(35, 'RENOVATION', 0),
(36, 'VICTORI', 0),
(37, 'FRANKI PASTA', 0),
(38, 'SGMC  GRAND MOULIN', 0),
(39, 'KENMOE SIMEON', 0),
(40, 'MATHURIN', 0),
(41, 'GEREMIE', 0);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_cmd` int(11) NOT NULL,
  `num_facture` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `destination` varchar(250) NOT NULL,
  `dates` varchar(235) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_cmd`, `num_facture`, `id_produit`, `id_client`, `quantite`, `destination`, `dates`) VALUES
(1, 357768, 25, 2, 6, 'victori', '07/10/2021'),
(2, 357768, 4, 2, 1, 'victori', '07/10/2021'),
(3, 357770, 7, 2, 3, 'divers', '07/10/2021'),
(4, 357769, 25, 2, 1, 'divers', '07/10/2021'),
(5, 357769, 11, 2, 1, 'divers', '07/10/2021'),
(6, 357772, 25, 2, 10, 'divers', '07/10/2021'),
(7, 357773, 13, 2, 1, 'divers', '07/10/2021'),
(8, 357773, 14, 2, 1, 'divers', '07/10/2021'),
(10, 357775, 13, 2, 9, 'ANDELA OLAM', '07/10/2021'),
(11, 357775, 14, 2, 24, 'ANDELA OLAM', '07/10/2021'),
(12, 357776, 25, 2, 1, 'divers', '07/10/2021'),
(13, 357777, 25, 2, 1, 'divers', '07/10/2021'),
(14, 357778, 12, 4, 60, 'EMANA', '07/10/2021'),
(15, 357779, 25, 2, 1, 'divers', '07/10/2021'),
(16, 357780, 13, 2, 1, 'divers', '07/10/2021'),
(17, 357781, 25, 14, 25, 'SALI', '07/10/2021'),
(18, 357782, 12, 15, 5, 'IBRAHIM TSINGA', '07/10/2021'),
(19, 357783, 3, 2, 0, 'INCONUE', '07/10/2021'),
(20, 357784, 4, 2, 1, 'INCONUE', '07/10/2021'),
(21, 357784, 18, 2, 1, 'INCONUE', '07/10/2021'),
(22, 357785, 10, 2, 1, 'INCONUE', '07/10/2021'),
(23, 357786, 12, 16, 1, 'INCONUE', '07/10/2021'),
(24, 357787, 25, 17, 40, 'FOTSO', '07/10/2021'),
(25, 357788, 7, 17, 60, 'GASTON', '07/10/2021'),
(26, 357788, 12, 17, 20, 'GASTON', '07/10/2021'),
(27, 357789, 25, 17, 50, 'JEROME', '07/10/2021'),
(28, 357789, 4, 17, 12, 'JEROME', '07/10/2021'),
(29, 357790, 12, 18, 40, 'BOUTIQUE', '07/10/2021'),
(30, 357790, 15, 18, 5, 'BOUTIQUE', '07/10/2021'),
(31, 357790, 4, 18, 20, 'BOUTIQUE', '07/10/2021'),
(32, 357790, 18, 18, 20, 'BOUTIQUE', '07/10/2021'),
(33, 357791, 12, 19, 30, 'COMMISARIAT 6EME', '07/10/2021'),
(34, 357791, 25, 19, 25, 'COMMISARIAT 6EME', '07/10/2021'),
(35, 357791, 4, 19, 3, 'COMMISARIAT 6EME', '07/10/2021'),
(36, 357791, 18, 19, 2, 'COMMISARIAT 6EME', '07/10/2021'),
(37, 357792, 25, 3, 100, 'EKOUNOU', '07/10/2021'),
(38, 357792, 5, 3, 10, 'EKOUNOU', '07/10/2021'),
(39, 357793, 12, 2, 5, 'INCONUE', '07/10/2021'),
(40, 357793, 14, 2, 1, 'INCONUE', '07/10/2021'),
(41, 357794, 12, 2, 10, 'INCONUE', '07/10/2021'),
(42, 357795, 4, 2, 1, 'INCONUE', '07/10/2021'),
(43, 357796, 8, 2, 3, 'divers', '08/10/2021'),
(44, 357798, 8, 2, 1, 'divers', '08/10/2021'),
(45, 357798, 14, 2, 1, 'divers', '08/10/2021'),
(47, 35779, 13, 2, 10, 'ANDELA OLAM', '08/10/2021'),
(48, 357800, 18, 2, 40, 'divers', '08/10/2021'),
(49, 357802, 8, 2, 1, 'divers', '08/10/2021'),
(50, 357803, 7, 2, 39, 'divers', '08/10/2021'),
(51, 357803, 4, 2, 1, 'divers', '08/10/2021'),
(52, 357804, 25, 2, 40, 'TSAGUE', '08/10/2021'),
(53, 357805, 25, 2, 2, 'divers', '08/10/2021'),
(54, 357806, 12, 2, 50, 'F. SOCRATE', '08/10/2021'),
(55, 357806, 5, 2, 3, 'F. SOCRATE', '08/10/2021'),
(56, 357807, 12, 15, 5, 'IBRAHIM TSINGA', '08/10/2021'),
(57, 357808, 8, 12, 25, 'GALADJIA', '08/10/2021'),
(58, 357808, 18, 12, 2, 'GALADJIA', '08/10/2021'),
(59, 357808, 4, 12, 1, 'GALADJIA', '08/10/2021'),
(60, 357809, 20, 2, 92, '', '08/10/2021'),
(61, 357809, 20, 2, 50, '', '08/10/2021'),
(62, 357801, 15, 2, 3, 'divers', '08/10/2021'),
(63, 357812, 8, 16, 1, 'NJC', '08/10/2021'),
(64, 357813, 12, 2, 1, 'INCONUE', '08/10/2021'),
(65, 357816, 10, 2, 0, 'INCONUE', '08/10/2021'),
(66, 357815, 13, 2, 1, 'INCONUE', '08/10/2021'),
(67, 357819, 9, 36, 3, 'INCONUE', '08/10/2021'),
(68, 357819, 25, 36, 4, 'INCONUE', '08/10/2021'),
(69, 357816, 8, 2, 3, 'INCONUE', '08/10/2021'),
(70, 357818, 20, 2, 2, 'INCONUE', '08/10/2021'),
(71, 357818, 7, 2, 2, 'INCONUE', '08/10/2021'),
(72, 357817, 7, 2, 3, 'INCONUE', '08/10/2021'),
(73, 357820, 12, 2, 4, 'INCONUE', '08/10/2021'),
(74, 357820, 14, 2, 1, 'INCONUE', '08/10/2021'),
(75, 357821, 25, 2, 1, 'INCONUE', '08/10/2021'),
(76, 357823, 8, 2, 1, 'divers', '09/10/2021'),
(77, 357823, 14, 2, 1, 'divers', '09/10/2021'),
(78, 357824, 4, 2, 1, 'divers', '09/10/2021'),
(80, 357826, 11, 2, 1, 'divers', '09/10/2021'),
(81, 357829, 3, 2, 2, 'divers', '09/10/2021'),
(82, 357830, 14, 2, 1, 'divers', '09/10/2021'),
(83, 357831, 8, 2, 1, 'divers', '09/10/2021'),
(84, 357832, 12, 15, 5, 'IBRAHIM TSINGA', '09/10/2021'),
(85, 357810, 25, 22, 25, 'divers', '09/10/2021'),
(86, 357822, 8, 33, 35, 'AUGUSTIN', '09/10/2021'),
(87, 357822, 25, 33, 30, 'AUGUSTIN', '09/10/2021'),
(88, 35728, 24, 2, 4, 'divers', '09/10/2021'),
(89, 35728, 21, 2, 3, 'divers', '09/10/2021'),
(90, 357833, 25, 2, 1, 'divers', '09/10/2021'),
(91, 357833, 11, 2, 1, 'divers', '09/10/2021'),
(92, 357834, 18, 2, 15, 'divers', '09/10/2021'),
(93, 357834, 12, 2, 15, 'divers', '09/10/2021'),
(94, 357835, 4, 2, 9, 'divers', '09/10/2021'),
(95, 357835, 18, 2, 4, 'divers', '09/10/2021'),
(96, 357836, 4, 2, 1, 'divers', '09/10/2021'),
(97, 357837, 18, 2, 1, 'divers', '09/10/2021'),
(98, 357838, 18, 2, 1, 'divers', '09/10/2021'),
(99, 357838, 4, 2, 1, 'divers', '09/10/2021'),
(100, 357839, 5, 2, 1, 'divers', '09/10/2021'),
(101, 357827, 14, 2, 1, 'divers', '09/10/2021'),
(102, 357853, 11, 2, 1, 'divers', '09/10/2021'),
(103, 357840, 21, 2, -2, 'divers', '09/10/2021'),
(104, 357841, 14, 2, 1, 'divers', '09/10/2021'),
(105, 357842, 12, 2, 1, 'divers', '09/10/2021'),
(106, 357843, 14, 2, 1, 'divers', '09/10/2021'),
(107, 357844, 9, 5, 50, 'HILAIRE', '09/10/2021'),
(108, 357844, 12, 5, 50, 'HILAIRE', '09/10/2021'),
(109, 357844, 18, 5, 4, 'HILAIRE', '09/10/2021'),
(110, 357844, 4, 5, 3, 'HILAIRE', '09/10/2021'),
(111, 357845, 12, 5, 45, 'HILAIRE', '09/10/2021'),
(112, 357845, 25, 5, 30, 'HILAIRE', '09/10/2021'),
(113, 357845, 4, 5, 2, 'HILAIRE', '09/10/2021'),
(114, 357845, 18, 5, 2, 'HILAIRE', '09/10/2021'),
(115, 357846, 12, 17, 35, 'CONFIANCE', '09/10/2021'),
(116, 357846, 7, 17, 25, 'CONFIANCE', '09/10/2021'),
(117, 357846, 25, 17, 25, 'CONFIANCE', '09/10/2021'),
(118, 357846, 8, 17, 25, 'CONFIANCE', '09/10/2021'),
(119, 357846, 9, 17, 10, 'CONFIANCE', '09/10/2021'),
(120, 357846, 4, 17, 15, 'CONFIANCE', '09/10/2021'),
(121, 357846, 5, 17, 15, 'CONFIANCE', '09/10/2021'),
(122, 357847, 12, 17, 30, 'CONFIANCE', '09/10/2021'),
(123, 357848, 25, 37, 35, 'FRANKI PASTA', '09/10/2021'),
(124, 357849, 14, 32, 12, 'TIOMELA', '09/10/2021'),
(125, 357849, 15, 32, 14, 'TIOMELA', '09/10/2021'),
(126, 357849, 25, 32, 10, 'TIOMELA', '09/10/2021'),
(127, 357849, 3, 32, 1, 'TIOMELA', '09/10/2021'),
(128, 357849, 18, 32, 1, 'TIOMELA', '09/10/2021'),
(129, 357849, 5, 32, 1, 'TIOMELA', '09/10/2021'),
(130, 357852, 25, 18, 10, 'LE PRINE', '09/10/2021'),
(131, 357852, 8, 18, 10, 'LE PRINE', '09/10/2021'),
(132, 357852, 7, 18, 10, 'LE PRINE', '09/10/2021'),
(133, 357850, 8, 18, 50, 'LE PRINCE', '09/10/2021'),
(134, 357850, 4, 18, 2, 'LE PRINCE', '09/10/2021'),
(135, 357850, 18, 18, 2, 'LE PRINCE', '09/10/2021'),
(136, 357851, 20, 38, 50, 'SGMC', '09/10/2021'),
(137, 357854, 9, 36, 4, 'victori', '09/10/2021'),
(138, 357854, 25, 36, 5, 'victori', '09/10/2021'),
(139, 357854, 4, 36, 1, 'victori', '09/10/2021'),
(140, 357855, 9, 36, 1, 'victori', '10/10/2021'),
(141, 357855, 25, 36, 1, 'victori', '10/10/2021'),
(142, 357856, 12, 2, 10, 'divers', '10/10/2021'),
(143, 357856, 3, 2, 2, 'divers', '10/10/2021'),
(144, 357857, 15, 2, 1, 'divers', '10/10/2021'),
(145, 357858, 14, 2, 1, 'divers', '10/10/2021'),
(146, 357859, 8, 2, 1, 'divers', '10/10/2021'),
(147, 357861, 25, 2, 3, 'divers', '10/10/2021'),
(148, 357861, 12, 2, 4, 'divers', '10/10/2021'),
(149, 357862, 10, 2, 1, 'divers', '10/10/2021'),
(150, 357863, 10, 2, 1, 'divers', '10/10/2021'),
(151, 357864, 12, 15, 6, 'IBRAHIM TSINGA', '10/10/2021'),
(152, 357864, 18, 15, 1, 'IBRAHIM TSINGA', '10/10/2021'),
(153, 357865, 8, 2, 1, 'divers', '10/10/2021'),
(154, 357860, 12, 2, 1, 'divers', '10/10/2021'),
(155, 357866, 7, 2, 2, 'divers', '10/10/2021'),
(156, 357868, 12, 2, 1, 'divers', '10/10/2021'),
(157, 357867, 7, 2, 2, 'divers', '10/10/2021'),
(158, 357867, 25, 2, 3, 'divers', '10/10/2021'),
(159, 357867, 20, 2, 4, 'divers', '10/10/2021'),
(160, 357867, 8, 2, -2, 'divers', '10/10/2021'),
(161, 357869, 18, 2, 1, 'divers', '10/10/2021'),
(162, 357869, 4, 2, 1, 'divers', '10/10/2021'),
(163, 357859, 14, 2, 1, 'divers', '11/10/2021'),
(164, 357867, 8, 2, 2, 'divers', '11/10/2021'),
(165, 357872, 8, 2, 1, 'divers', '11/10/2021'),
(166, 357872, 16, 2, 1, 'divers', '11/10/2021'),
(167, 357871, 12, 39, 100, 'KENMOE', '11/10/2021'),
(168, 35870, 8, 17, 60, 'MATHURIN', '11/10/2021'),
(169, 35870, 25, 17, 20, 'MATHURIN', '11/10/2021'),
(170, 35870, 7, 17, 20, 'MATHURIN', '11/10/2021'),
(171, 35870, 12, 17, 5, 'MATHURIN', '11/10/2021'),
(172, 357874, 8, 2, 5, 'divers', '11/10/2021'),
(173, 357874, 3, 2, 2, 'divers', '11/10/2021'),
(174, 357874, 11, 2, 1, 'divers', '11/10/2021'),
(175, 357877, 4, 2, 1, 'divers', '11/10/2021'),
(176, 357873, 18, 2, 15, 'divers', '11/10/2021'),
(177, 357875, 12, 2, 4, 'divers', '11/10/2021'),
(178, 357875, 16, 2, 1, 'divers', '11/10/2021'),
(179, 357881, 4, 2, 10, 'divers', '11/10/2021'),
(180, 357880, 16, 2, 1, '', '11/10/2021'),
(181, 357882, 25, 2, 5, 'divers', '11/10/2021'),
(182, 357883, 7, 29, 30, 'FELUX', '11/10/2021'),
(183, 357883, 4, 29, 2, 'FELUX', '11/10/2021'),
(184, 357883, 18, 29, 1, 'FELUX', '11/10/2021'),
(185, 357889, 25, 2, 1, 'divers', '11/10/2021'),
(186, 357889, 11, 2, 1, 'divers', '11/10/2021'),
(187, 357886, 11, 2, 1, 'divers', '11/10/2021'),
(188, 357885, 25, 2, 1, 'divers', '11/10/2021'),
(189, 357887, 3, 2, 2, 'divers', '11/10/2021'),
(190, 357891, 25, 7, 3, 'JEAN NOEL', '11/10/2021'),
(191, 357891, 7, 7, 3, 'JEAN NOEL', '11/10/2021'),
(192, 357891, 5, 7, 1, 'JEAN NOEL', '11/10/2021'),
(193, 357893, 8, 2, 4, 'divers', '11/10/2021'),
(194, 357892, 21, 2, 1, 'divers', '11/10/2021'),
(195, 35789, 4, 2, 1, 'divers', '11/10/2021'),
(196, 357896, 10, 2, 1, 'divers', '11/10/2021'),
(197, 357890, 12, 15, 5, 'IBRAHIM TSINGA', '11/10/2021'),
(198, 357890, 16, 15, 1, 'IBRAHIM TSINGA', '11/10/2021'),
(199, 357888, 10, 2, 1, 'divers', '11/10/2021'),
(200, 357897, 24, 2, 15, 'divers', '11/10/2021'),
(201, 357897, 16, 2, 6, 'divers', '11/10/2021'),
(202, 357897, 21, 2, 6, 'divers', '11/10/2021'),
(203, 357900, 25, 2, 2, 'divers', '11/10/2021'),
(204, 357900, 7, 2, 4, 'divers', '11/10/2021'),
(205, 35798, 10, 2, 1, 'divers', '11/10/2021'),
(206, 357901, 5, 2, 2, 'divers', '11/10/2021'),
(207, 357898, 10, 2, 1, 'divers', '11/10/2021'),
(208, 357884, 25, 22, 20, 'familiale', '11/10/2021'),
(209, 357876, 9, 41, 150, 'GEREMIE', '11/10/2021'),
(210, 357876, 4, 41, 10, 'GEREMIE', '11/10/2021'),
(211, 357876, 18, 41, 5, 'GEREMIE', '11/10/2021'),
(212, 357876, 20, 41, 20, 'GEREMIE', '11/10/2021'),
(213, 357876, 3, 41, 2, 'GEREMIE', '11/10/2021'),
(214, 357895, 5, 2, 1, 'divers', '11/10/2021'),
(215, 357895, 22, 2, 2, 'divers', '11/10/2021'),
(216, 357879, 12, 4, 40, 'TIWA', '11/10/2021'),
(217, 357879, 8, 4, 50, 'TIWA', '11/10/2021'),
(218, 357879, 5, 4, 4, 'TIWA', '11/10/2021'),
(219, 357879, 3, 4, 2, 'TIWA', '11/10/2021'),
(220, 357906, 4, 2, 4, 'divers', '11/10/2021'),
(221, 357906, 18, 2, 3, 'divers', '11/10/2021'),
(222, 357907, 9, 36, 4, 'victori', '11/10/2021'),
(223, 357907, 25, 36, 4, 'victori', '11/10/2021'),
(224, 357907, 4, 36, 1, 'victori', '11/10/2021'),
(225, 357907, 18, 36, 1, 'victori', '11/10/2021'),
(226, 357908, 11, 2, 1, 'divers', '11/10/2021'),
(227, 657909, 7, 2, 5, 'divers', '11/10/2021'),
(228, 357903, 12, 17, 50, 'CONFIANCE', '11/10/2021'),
(229, 357903, 8, 17, 50, 'CONFIANCE', '11/10/2021'),
(230, 357903, 9, 17, 30, 'CONFIANCE', '11/10/2021'),
(231, 357903, 25, 17, 20, 'CONFIANCE', '11/10/2021'),
(232, 357903, 4, 17, 15, 'CONFIANCE', '11/10/2021'),
(233, 357904, 25, 35, 30, 'RENOVATION', '11/10/2021'),
(234, 357904, 12, 35, 20, 'RENOVATION', '11/10/2021'),
(235, 357904, 5, 35, 3, 'RENOVATION', '11/10/2021'),
(236, 357904, 18, 35, 1, 'RENOVATION', '11/10/2021'),
(237, 357902, 7, 18, 60, 'LE PRINCE', '11/10/2021'),
(238, 357902, 12, 18, 20, 'LE PRINCE', '11/10/2021'),
(239, 357902, 8, 18, 15, 'LE PRINCE', '11/10/2021'),
(240, 357902, 16, 18, 5, 'LE PRINCE', '11/10/2021'),
(241, 357902, 4, 18, 10, 'LE PRINCE', '11/10/2021'),
(242, 357902, 18, 18, 10, 'LE PRINCE', '11/10/2021'),
(243, 357905, 20, 38, 50, 'SGMC', '11/10/2021'),
(244, 357910, 25, 36, 1, 'victori', '12/10/2021'),
(245, 357910, 9, 36, 1, 'victori', '12/10/2021'),
(246, 357911, 25, 2, 1, 'divers', '12/10/2021');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `id` int(11) NOT NULL,
  `nom_fournisseur` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`id`, `nom_fournisseur`) VALUES
(1, 'OLAM'),
(2, 'PASTA'),
(3, 'SCC'),
(4, 'SIRPACAM'),
(5, 'MIMOSA'),
(6, 'SCTB'),
(7, 'SGMC'),
(8, 'BOUL DU PEUPLE'),
(9, 'CCO');

-- --------------------------------------------------------

--
-- Structure de la table `livraison_fournisseur`
--

CREATE TABLE `livraison_fournisseur` (
  `id_livraison` int(11) NOT NULL,
  `id_fournisseur` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `dates` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livraison_fournisseur`
--

INSERT INTO `livraison_fournisseur` (`id_livraison`, `id_fournisseur`, `id_produit`, `quantite`, `dates`) VALUES
(1, 4, 18, 104, '07/10/2021'),
(2, 4, 4, 303, '07/10/2021'),
(3, 2, 25, 500, '07/10/2021'),
(4, 2, 9, 4, '07/10/2021'),
(5, 2, 11, 66, '07/10/2021'),
(6, 3, 7, 148, '07/10/2021'),
(7, 3, 15, 122, '07/10/2021'),
(8, 2, 10, 20, '07/10/2021'),
(9, 4, 3, 298, '07/10/2021'),
(10, 4, 19, 33, '07/10/2021'),
(11, 1, 22, 425, '07/10/2021'),
(12, 1, 24, 580, '07/10/2021'),
(13, 1, 14, 47, '07/10/2021'),
(14, 1, 13, 22, '07/10/2021'),
(15, 1, 12, 3593, '07/10/2021'),
(16, 1, 5, 36, '07/10/2021'),
(17, 7, 20, 27, '07/10/2021'),
(18, 3, 16, 19, '07/10/2021'),
(19, 7, 20, 650, '07/10/2021'),
(20, 2, 25, 240, '07/10/2021'),
(21, 2, 9, 400, '07/10/2021'),
(22, 4, 18, 467, '07/10/2021'),
(23, 1, 21, 214, '07/10/2021'),
(24, 5, 8, 640, '08/10/2021'),
(25, 2, 25, 640, '08/10/2021'),
(26, 8, 6, 12, '08/10/2021'),
(28, 3, 7, 600, '08/10/2021'),
(29, 4, 4, 500, '09/10/2021'),
(30, 9, 3, 30, '09/10/2021');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(250) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `Quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_produit`, `nom_produit`, `id_categorie`, `Quantite`) VALUES
(1, 'SEL 18Kg', 6, 0),
(2, 'SEL 25Kg', 6, 0),
(3, 'BEURE 20Kg', 5, 315),
(4, 'NEVADA', 3, 673),
(5, 'PAKMAYA', 3, 295),
(6, 'tidong', 3, 12),
(7, 'PAIN DORE', 1, 480),
(8, 'GALIMOISE', 1, 297),
(9, 'COLOMBE', 1, 151),
(10, 'AMIGO 50KG', 1, 13),
(11, 'AMIGO 25 KG', 1, 58),
(12, 'BIJ STANDART', 1, 2915),
(13, 'BIJ MAMY 50KG', 1, 0),
(14, 'BIJ MAMY 25KG', 1, 0),
(15, 'MAKALA SB 50KG', 1, 99),
(16, 'MAKALA SB 25KG', 1, 4),
(17, 'IBIS', 4, 0),
(18, 'MAGIMIX', 4, 438),
(19, 'AMONIAC', 3, 33),
(20, 'DUO', 1, 409),
(21, 'MAIN DANS LA MAIN 25KG', 2, 206),
(22, 'LUNE D\'AFRIQUE DELUXE 50KG', 2, 423),
(23, 'LUNE D\'AFRIQUE 25KG', 2, 0),
(24, 'OKI 50KG', 2, 561),
(25, 'CAMEROUNAISE', 1, 787),
(26, 'SUCRE IMPORTE', 8, 0),
(27, 'SUCRE SOSUCAM 50 KG', 8, 0),
(28, 'SUCRE SOSUCAM 25KG', 8, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_cmd`),
  ADD KEY `fk_produit_id_produit` (`id_produit`),
  ADD KEY `fk_clientt_id_client` (`id_client`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `livraison_fournisseur`
--
ALTER TABLE `livraison_fournisseur`
  ADD PRIMARY KEY (`id_livraison`),
  ADD KEY `fk_fournisseur_id` (`id_fournisseur`),
  ADD KEY `fk_produit_id_produit` (`id_produit`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `fk_categorie_id_categorie` (`id_categorie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_cmd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `livraison_fournisseur`
--
ALTER TABLE `livraison_fournisseur`
  MODIFY `id_livraison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_client_id_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `fk_produits_id_produit` FOREIGN KEY (`id_produit`) REFERENCES `produits` (`id_produit`);

--
-- Contraintes pour la table `livraison_fournisseur`
--
ALTER TABLE `livraison_fournisseur`
  ADD CONSTRAINT `fk_fournisseur_id` FOREIGN KEY (`id_fournisseur`) REFERENCES `fournisseur` (`id`),
  ADD CONSTRAINT `fk_produit_id_produit` FOREIGN KEY (`id_produit`) REFERENCES `produits` (`id_produit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
