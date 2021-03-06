-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : db5000911488.hosting-data.io
-- Généré le : jeu. 19 nov. 2020 à 20:39
-- Version du serveur :  5.7.30-log
-- Version de PHP : 7.0.33-0+deb9u10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbs797187`
--
CREATE DATABASE IF NOT EXISTS `dbs797187` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbs797187`;

-- --------------------------------------------------------

--
-- Structure de la table `avis_cashback`
--

CREATE TABLE `avis_cashback` (
  `id` int(11) NOT NULL,
  `id_cashback` int(11) NOT NULL,
  `avis` text NOT NULL,
  `id_users` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `nbr_start` int(11) NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avis_cashback`
--

INSERT INTO `avis_cashback` (`id`, `id_cashback`, `avis`, `id_users`, `user_name`, `nbr_start`, `date_time`) VALUES
(1, 4, '', 170, 'Carine', 1, '2020-09-02'),
(2, 4, 'dszcfxdczx', 170, 'Carine', 1, '2020-09-02'),
(3, 4, 'Achat rapide et envoi soignÃ©. Grand choix d\'articles, attention au rapport qualitÃ©/prix. Cashback validÃ© rapidement et colis expÃ©diÃ© dans les dÃ©lais.', 170, 'Carine', 2, '2020-09-02'),
(4, 4, 'Achat rapide et envoi soignÃ©. Grand choix d\'articles, attention au rapport qualitÃ©/prix. Cashback validÃ© rapidement et colis expÃ©diÃ© dans les dÃ©lais.', 170, 'Carine', 6, '2020-09-02'),
(5, 4, 'Achat rapide et envoi soignÃ©. Grand choix d\'articles, attention au rapport qualitÃ©/prix. Cashback validÃ© rapidement et colis expÃ©diÃ© dans les dÃ©lais.', 170, 'Carine', 0, '2020-09-02'),
(6, 4, 'Achat rapide et envoi soignÃ©. Grand choix d\'articles, attention au rapport qualitÃ©/prix. Cashback validÃ© rapidement et colis expÃ©diÃ© dans les dÃ©lais.', 170, 'Carine', 5, '2020-09-02'),
(7, 4, 'Achat rapide et envoi soignÃ©. Grand choix d\'articles, attention au rapport qualitÃ©/prix. Cashback validÃ© rapidement et colis expÃ©diÃ© dans les dÃ©lais.', 170, 'Carine', 4, '2020-09-02'),
(8, 4, 'Achat rapide et envoi soignÃ©. Grand choix d\'articles, attention au rapport qualitÃ©/prix. Cashback validÃ© rapidement et colis expÃ©diÃ© dans les dÃ©lais.', 170, 'Carine', 5, '2020-09-02'),
(9, 4, 'Achat rapide et envoi soignÃ©. Grand choix d\'articles, attention au rapport qualitÃ©/prix. Cashback validÃ© rapidement et colis expÃ©diÃ© dans les dÃ©lais.', 170, 'Carine', 5, '2020-09-02'),
(10, 4, 'Achat rapide et envoi soignÃ©. Grand choix d\'articles, attention au rapport qualitÃ©/prix. Cashback validÃ© rapidement et colis expÃ©diÃ© dans les dÃ©lais.', 170, 'Carine', 4, '2020-09-02'),
(11, 4, 'ghgh', 170, 'Carine', 4, '2020-09-03'),
(12, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 1, 'Ranaivomanana', 4, '2020-09-10'),
(13, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 1, 'Ranaivomanana', 4, '2020-09-10'),
(14, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 1, 'Ranaivomanana', 4, '2020-09-10'),
(15, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 1, 'Ranaivomanana', 4, '2020-09-10'),
(16, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(17, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(18, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(19, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(20, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(21, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(22, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(23, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(24, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(25, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(26, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(27, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(28, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(29, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(30, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(31, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(32, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(33, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(34, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(35, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(36, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(37, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(38, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(39, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(40, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(41, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(42, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(43, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(44, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(45, 10, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 0, '', 4, '2020-09-10'),
(46, 3, 'cdfvcdvc', 1, 'Ranaivomanana', 3, '2020-09-11'),
(47, 3, 'vcvcv', 1, 'Ranaivomanana', 5, '2020-09-11'),
(48, 14, 'cvcv', 23, 'Ranaivomana  ', 5, '2020-09-15'),
(49, 2, 'dsfgsd', 24, 'RANAIVOMANANA Vololoniriana', 0, '2020-09-24'),
(50, 2, 'dsfgsd', 24, 'RANAIVOMANANA Vololoniriana', 0, '2020-09-24'),
(51, 2, 'ghgchncg', 24, 'RANAIVOMANANA Vololoniriana', 5, '2020-09-24'),
(52, 2, 'ghgchncg', 24, 'RANAIVOMANANA Vololoniriana', 5, '2020-09-24'),
(53, 2, 'ghgchncg', 24, 'RANAIVOMANANA Vololoniriana', 5, '2020-09-24'),
(54, 2, 'ghgchncg', 24, 'RANAIVOMANANA Vololoniriana', 5, '2020-09-24'),
(55, 2, 'ghgchncg', 24, 'RANAIVOMANANA Vololoniriana', 5, '2020-09-24'),
(56, 2, 'ghgchncg', 24, 'RANAIVOMANANA Vololoniriana', 5, '2020-09-24'),
(57, 2, 'ghgchncg', 24, 'RANAIVOMANANA Vololoniriana', 5, '2020-09-24'),
(58, 2, 'ghgchncg', 24, 'RANAIVOMANANA Vololoniriana', 5, '2020-09-24'),
(59, 1, 'jhdrtjhcfghj', 24, 'RANAIVOMANANA Vololoniriana', 3, '2020-09-30'),
(60, 1, 'jhdrtjhcfghj', 24, 'RANAIVOMANANA Vololoniriana', 3, '2020-09-30'),
(61, 1, 'gdfgfgfgfgf', 24, 'RANAIVOMANANA Vololoniriana', 5, '2020-09-30'),
(62, 1, 'gdfgfgfgfgf', 24, 'RANAIVOMANANA Vololoniriana', 5, '2020-09-30'),
(63, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(64, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(65, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(66, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(67, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(68, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(69, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(70, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(71, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(72, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(73, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(74, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(75, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(76, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(77, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(78, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(79, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(80, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(81, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(82, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(83, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(84, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(85, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(86, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(87, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(88, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(89, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(90, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(91, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(92, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(93, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(94, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(95, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(96, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(97, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(98, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(99, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(100, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(101, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(102, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(103, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(104, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(105, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(106, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(107, 1, 'vdxv', 24, 'RANAIVOMANANA Vololoniriana', 5, '2020-09-30'),
(108, 1, 'vvvvv', 24, 'RANAIVOMANANA Vololoniriana', 3, '2020-09-30'),
(109, 1, 'vvvvv', 24, 'RANAIVOMANANA Vololoniriana', 3, '2020-09-30'),
(110, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 1, '2020-09-30'),
(111, 1, 'q', 24, 'RANAIVOMANANA Vololoniriana', 1, '2020-09-30'),
(112, 1, 'qq', 24, 'RANAIVOMANANA Vololoniriana', 1, '2020-09-30'),
(113, 1, 'qq', 24, 'RANAIVOMANANA Vololoniriana', 1, '2020-09-30'),
(114, 1, 'dddd', 24, 'RANAIVOMANANA Vololoniriana', 1, '2020-09-30'),
(115, 1, 'd', 24, 'RANAIVOMANANA Vololoniriana', 0, '2020-09-30'),
(116, 1, 'd', 24, 'RANAIVOMANANA Vololoniriana', 0, '2020-09-30'),
(117, 1, 'd', 24, 'RANAIVOMANANA Vololoniriana', 0, '2020-09-30'),
(118, 3, 'xcxcx', 24, 'RANAIVOMANANA Vololoniriana', 5, '2020-09-30'),
(119, 3, 'qqq', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-09-30'),
(120, 3, 'p', 24, 'RANAIVOMANANA Vololoniriana', 3, '2020-09-30'),
(121, 60, 'fgfdgdfgdfgdg', 24, 'RANAIVOMANANA Vololoniriana', 0, '2020-10-15'),
(122, 60, 'grand pere', 24, 'RANAIVOMANANA Vololoniriana', 0, '2020-10-15'),
(123, 60, 'grand pere', 24, 'RANAIVOMANANA Vololoniriana', 0, '2020-10-15'),
(124, 60, 'grand pere', 24, 'RANAIVOMANANA Vololoniriana', 0, '2020-10-15'),
(125, 60, 'grand pere', 24, 'RANAIVOMANANA Vololoniriana', 0, '2020-10-15'),
(126, 60, 'grand pere', 24, 'RANAIVOMANANA Vololoniriana', 0, '2020-10-15'),
(127, 60, 'grand pere', 24, 'RANAIVOMANANA Vololoniriana', 0, '2020-10-15'),
(128, 60, 'grand pere', 24, 'RANAIVOMANANA Vololoniriana', 0, '2020-10-15'),
(129, 60, 'grand pere', 24, 'RANAIVOMANANA Vololoniriana', 0, '2020-10-15'),
(130, 60, 'grand pere', 24, 'RANAIVOMANANA Vololoniriana', 0, '2020-10-15'),
(131, 60, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 24, 'RANAIVOMANANA Vololoniriana', 0, '2020-10-15'),
(132, 60, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 24, 'RANAIVOMANANA Vololoniriana', 0, '2020-10-15'),
(133, 64, 'gvbnvbmn', 24, 'RANAIVOMANANA Vololoniriana', 5, '2020-10-15'),
(134, 64, ',n,jn,', 24, 'RANAIVOMANANA Vololoniriana', 5, '2020-10-15'),
(135, 64, '', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-10-15'),
(136, 19, 'ghjkhgkj', 24, 'RANAIVOMANANA Vololoniriana', 5, '2020-10-15'),
(137, 19, 'ghjkhgkj', 24, 'RANAIVOMANANA Vololoniriana', 5, '2020-10-15'),
(138, 19, 'ghjkhgkj', 24, 'RANAIVOMANANA Vololoniriana', 5, '2020-10-15'),
(139, 19, 'fsfsfs', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-10-15'),
(140, 19, 'sss', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-10-15'),
(141, 19, 'sss', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-10-15'),
(142, 19, 'sss', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-10-15'),
(143, 19, 'sss', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-10-15'),
(144, 19, 'sss', 24, 'RANAIVOMANANA Vololoniriana', 6, '2020-10-15'),
(145, 19, 'sffs', 24, 'RANAIVOMANANA Vololoniriana', 4, '2020-10-15'),
(146, 79, 'fsfsf', 1, 'Sasasa         ', 4, '2020-10-24'),
(147, 79, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 1, 'Sasasa         ', 5, '2020-10-24'),
(148, 79, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 1, 'Sasasa         ', 3, '2020-10-24'),
(149, 79, '', 1, 'Sasasa         ', 4, '2020-10-24'),
(150, 79, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans.', 1, 'Sasasa         ', 3, '2020-10-24'),
(151, 79, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans. ', 1, 'Sasasa         ', 0, '2020-10-24'),
(152, 79, 'Pour Ã©conomiser sur votre commande Cdiscount, retrouvez sur Poulpeo les meilleurs codes promo et des bons de rÃ©duction parfaitement fonctionnels. Chaque code de rÃ©duction Cdiscount est testÃ©, validÃ© et mis Ã  jour quotidiennement par notre Ã©quipe de chasseurs de bons plans. ', 1, 'Sasasa         ', 0, '2020-10-24'),
(153, 79, 'ljlj', 1, 'Sasasa         ', 4, '2020-10-24'),
(154, 84, 'Avec plus de 100 000 rÃ©fÃ©rences Ã  prix discount prÃ©sentes dans leur catalogue, cette boutique est LE site pour faire des affaires et acheter au meilleur prix sur Internet. Cdiscount est spÃ©cialisÃ© dans la ', 1, 'Sasasa         ', 5, '2020-10-24'),
(155, 84, '', 1, 'Sasasa         ', 6, '2020-10-24'),
(156, 84, 'Avec plus de 100 000 rÃ©fÃ©rences Ã  prix discount prÃ©sentes dans leur catalogue, cette boutique est LE site pour faire des affaires et acheter au meilleur prix sur Internet. Cdiscount est spÃ©cialisÃ© dans la ', 1, 'Sasasa         ', 0, '2020-10-24'),
(157, 84, 'Avec plus de 100 000 rÃ©fÃ©rences Ã  prix discount prÃ©sentes dans leur catalogue, cette boutique est LE site pour faire des affaires et acheter au meilleur prix sur Internet. Cdiscount est spÃ©cialisÃ© dans la ', 1, 'Sasasa         ', 5, '2020-10-24'),
(158, 84, 'Avec plus de 100 000 rÃ©fÃ©rences Ã  prix discount prÃ©sentes dans leur catalogue, cette boutique est LE site pour faire des affaires et acheter au meilleur prix sur Internet. Cdiscount est spÃ©cialisÃ© dans la ', 1, 'Sasasa         ', 6, '2020-10-24'),
(159, 84, 'Avec plus de 100 000 rÃ©fÃ©rences Ã  prix discount prÃ©sentes dans leur catalogue, cette boutique est LE site pour faire des affaires et acheter au meilleur prix sur Internet. Cdiscount est spÃ©cialisÃ© dans la ', 1, 'Sasasa         ', 6, '2020-10-24');

-- --------------------------------------------------------

--
-- Structure de la table `bannier`
--

CREATE TABLE `bannier` (
  `id` int(11) NOT NULL,
  `img_src` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bannier`
--

INSERT INTO `bannier` (`id`, `img_src`) VALUES
(1, './images/bannier/1.jpg'),
(2, './images/bannier/2.jpg'),
(3, './images/bannier/3.jpg'),
(4, './images/bannier/4.jpg'),
(5, './images/bannier/5.jpg'),
(6, './images/bannier/6.jpg'),
(7, './images/bannier/7.jpg'),
(8, './images/bannier/8.jpg'),
(9, './images/bannier/9.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `bonuslogin`
--

CREATE TABLE `bonuslogin` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `winner` varchar(250) NOT NULL,
  `actif` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bonuslogin`
--

INSERT INTO `bonuslogin` (`id`, `name`, `date`, `winner`, `actif`) VALUES
(1, 'gains 0.10', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `boutique`
--

CREATE TABLE `boutique` (
  `id` int(11) NOT NULL,
  `categorieId` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `actif` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `boutique`
--

INSERT INTO `boutique` (`id`, `categorieId`, `nom`, `image`, `actif`) VALUES
(1, 1, 'Virement Bancaire', 'images/magasin/virement bancaire.png', 1),
(2, 2, 'Amazon', 'images/magasin/amazon.jpg', 1),
(3, 2, 'google play', 'images/magasin/googleplay.jpg', 1),
(4, 2, 'Itunes', 'images/magasin/itunes.jpg', 1),
(5, 2, 'Psn', 'images/magasin/psn.jpg', 1),
(6, 2, 'Xbox', 'images/magasin/xbox.jpg', 1),
(7, 2, 'Zalando', 'images/magasin/zalando.jpg', 1),
(8, 2, 'Paysafecard', 'images/magasin/paysafecard.jpg', 1),
(12, 1, 'Paypal', 'images/magasin/paypal.jpg', 1),
(13, 3, 'AWcode', 'http://www.multi-cadeaux.com/images/magasin/awcode.jpg', 1),
(14, 3, 'NewPack', 'http://www.multi-cadeaux.com/images/magasin/newpack.png', 1),
(15, 3, 'CaraPass', 'http://www.multi-cadeaux.com/images/magasin/carapass.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `boutiquecategorie`
--

CREATE TABLE `boutiquecategorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `boutiquecategorie`
--

INSERT INTO `boutiquecategorie` (`id`, `nom`) VALUES
(1, 'Paiement'),
(2, 'Carte-Cadeaux');

-- --------------------------------------------------------

--
-- Structure de la table `boutiquemontant`
--

CREATE TABLE `boutiquemontant` (
  `id` int(11) NOT NULL,
  `boutiqueId` int(11) NOT NULL,
  `montant` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `boutiquemontant`
--

INSERT INTO `boutiquemontant` (`id`, `boutiqueId`, `montant`) VALUES
(2, 2, '10.00'),
(3, 2, '20.00'),
(6, 4, '10.00'),
(7, 4, '20.00'),
(8, 8, '10.00'),
(10, 5, '10.00'),
(11, 5, '20.00'),
(12, 6, '10.00'),
(13, 6, '20.00'),
(14, 7, '10.00'),
(15, 7, '20.00'),
(16, 5, '50.00'),
(17, 3, '15.00'),
(18, 3, '25.00'),
(19, 3, '50.00'),
(20, 6, '5.00'),
(21, 6, '15.00'),
(22, 6, '25.00'),
(23, 6, '30.00'),
(24, 1, '10.00'),
(25, 1, '20.00'),
(26, 9, '20.00'),
(27, 9, '30.00'),
(28, 9, '40.00'),
(29, 9, '50.00'),
(30, 10, '10.00'),
(31, 10, '20.00'),
(32, 10, '25.00'),
(33, 10, '30.00'),
(34, 1, '10.00'),
(35, 10, '5.00'),
(36, 11, '5.00'),
(37, 11, '10.00'),
(38, 11, '15.00'),
(39, 11, '20.00'),
(40, 11, '1.00'),
(41, 11, '2.00'),
(42, 11, '3.00'),
(43, 1, '1.00'),
(44, 12, '1.00'),
(45, 12, '5.00'),
(46, 12, '10.00'),
(47, 12, '10.00'),
(48, 12, '20.00'),
(49, 13, '1.30'),
(50, 14, '1.50'),
(51, 15, '1.00'),
(52, 12, '0.90');

-- --------------------------------------------------------

--
-- Structure de la table `cashbackengine_affnetworks`
--

CREATE TABLE `cashbackengine_affnetworks` (
  `network_id` int(11) NOT NULL,
  `network_name` varchar(250) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `subid` varchar(250) DEFAULT NULL,
  `csv_format` text,
  `confirmeds` varchar(250) DEFAULT NULL,
  `pendings` varchar(250) DEFAULT NULL,
  `declineds` varchar(250) DEFAULT NULL,
  `status` varchar(250) NOT NULL,
  `added` datetime NOT NULL,
  `last_csv_upload` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cashbackengine_affnetworks`
--

INSERT INTO `cashbackengine_affnetworks` (`network_id`, `network_name`, `image`, `subid`, `csv_format`, `confirmeds`, `pendings`, `declineds`, `status`, `added`, `last_csv_upload`) VALUES
(8, 'cxxcxdsadad', NULL, 'cx', '                                {TITLE},{NETWORK},{PROGRAM},{CATEGORY},{IMAGE_URL},{URL},{CASHBACK},{CASHBACK_SIGN},{DESCRIPTION},{CONDITIONS}', '1', '1', '1', 'active', '2020-09-26 17:51:34', '2020-09-26 17:51:34');

-- --------------------------------------------------------

--
-- Structure de la table `cashbackengine_cashabck`
--

CREATE TABLE `cashbackengine_cashabck` (
  `id` int(11) NOT NULL,
  `histo_retailler_id` text NOT NULL,
  `histo_retailler_id_user` text NOT NULL,
  `histo_retailler_ip` text NOT NULL,
  `gains` text NOT NULL,
  `etat` varchar(255) NOT NULL DEFAULT 'En attente',
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cashbackengine_cashabck`
--

INSERT INTO `cashbackengine_cashabck` (`id`, `histo_retailler_id`, `histo_retailler_id_user`, `histo_retailler_ip`, `gains`, `etat`, `date_time`) VALUES
(1, '90', '1', '::1', '10', 'En attente', '2020-11-01 04:22:12'),
(2, '90', '1', '::1', '10', 'En attente', '2020-11-01 04:22:14'),
(3, '90', '1', '::1', '10', 'En attente', '2020-11-01 04:26:29');

-- --------------------------------------------------------

--
-- Structure de la table `cashbackengine_categories`
--

CREATE TABLE `cashbackengine_categories` (
  `category_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `show_in_menu` int(11) NOT NULL,
  `category_url` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img_categorie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cashbackengine_categories`
--

INSERT INTO `cashbackengine_categories` (`category_id`, `parent_id`, `sort_order`, `name`, `slug`, `show_in_menu`, `category_url`, `meta_description`, `meta_keywords`, `description`, `img_categorie`) VALUES
(32, 0, 0, 'Mode Femme', '', 58, '', '', '', '', './images/categorie/1.png'),
(33, 0, 0, 'Mode Homme', '', 0, '', '', '', '', './images/categorie/2.png'),
(34, 0, 0, 'Sport', '', 0, '', '', '', '', './images/categorie/3.png'),
(35, 0, 0, 'Enfant', '', 0, '', '', '', '', './images/categorie/4.png'),
(36, 0, 0, 'Voyages et Locations', '', 0, '', '', '', '', './images/categorie/5.png'),
(37, 0, 0, 'Beaut&eacute; et Bien-&ecirc;tre', '', 0, '', '', '', '', './images/categorie/6.png'),
(38, 0, 0, 'Loisirs et Culture', '', 0, '', '', '', '', './images/categorie/7.png'),
(39, 0, 0, 'High-Tech et Electrom&eacute;nager', '', 78, '', '', '', '', './images/categorie/8.png'),
(40, 0, 0, 'Maison et Jardin', '', 0, '', '', '', '', './images/categorie/9.png'),
(41, 0, 0, 'Cadeaux', '', 0, '', '', '', '', './images/categorie/10.png'),
(42, 0, 0, 'Alimentation et Vins', '', 0, '', '', '', '', './images/categorie/11.png'),
(43, 0, 0, 'Autos, Motos et Scooters', '', 0, '', '', '', '', './images/categorie/12.png'),
(44, 0, 0, 'Banques, Assurances, et Cr&eacute;dits', '', 0, '', '', '', '', './images/categorie/13.png'),
(45, 0, 0, 'Achats Entreprise', '', 0, '', '', '', '', './images/categorie/14.png'),
(46, 0, 0, 'Restauration', '', 0, '', '', '', '', './images/categorie/15.png'),
(47, 0, 0, 'Accessoires de mode', '', 0, '', '', '', '', './images/categorie/16.png'),
(48, 32, 0, 'Chaussures femme', '', 55, '', '', '', '', ''),
(49, 32, 0, 'Lingerie et Sous-v&ecirc;tements', '', 3, '', '', '', '', ''),
(50, 32, 0, 'Pr&ecirc;t-&agrave;-porter femme', '', 0, '', '', '', '', ''),
(51, 33, 0, 'Chaussures homme', '', 0, '', '', '', '', ''),
(52, 33, 0, 'Pr&ecirc;t-&agrave;-porter Homme', '', 0, '', '', '', '', ''),
(53, 33, 0, 'Sous-v&ecirc;tements homme', '', 0, '', '', '', '', ''),
(54, 39, 0, 'Cr&eacute;ation et H&eacute;bergement de Sites Web', '', 0, '', 'Cr&eacute;ation et H&eacute;bergement de Sites Web', 'Cr&eacute;ation et H&eacute;bergement de Sites Web', 'Cr&eacute;ation et H&eacute;bergement de Sites Web', ''),
(55, 39, 0, 'Electrom&eacute;nager', '', 1, '', 'Electrom&eacute;nager', 'Electrom&eacute;nager', 'Electrom&eacute;nager', ''),
(56, 39, 0, 'Image et son', '', 26, '', 'Image et son', 'Image et sonImage et son', 'Image et son', ''),
(57, 39, 0, 'Internet et Mobiles', '', 1, '', 'Internet et Mobiles', 'Internet et Mobiles', 'Internet et Mobiles', ''),
(58, 39, 0, 'Logiciels', '', 0, '', 'Logiciels', 'Logiciels', 'Logiciels', ''),
(59, 39, 0, 'Mat&eacute;riel informatique', '', 0, '', 'Mat&eacute;riel informatique', 'Mat&eacute;riel informatique', 'Mat&eacute;riel informatique', '');

-- --------------------------------------------------------

--
-- Structure de la table `cashbackengine_clickhistory`
--

CREATE TABLE `cashbackengine_clickhistory` (
  `click_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `retailer_id` int(11) NOT NULL,
  `click_ref` text NOT NULL,
  `retailer` text NOT NULL,
  `click_ip` text NOT NULL,
  `click_pourcentage` text NOT NULL,
  `added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `view_int` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `cashbackengine_countries`
--

CREATE TABLE `cashbackengine_countries` (
  `country_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `signup` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `cashbackengine_coupons`
--

CREATE TABLE `cashbackengine_coupons` (
  `sort_order` text NOT NULL,
  `title` text NOT NULL,
  `coupon_type` text,
  `coupon_id` int(11) NOT NULL,
  `retailer_id` int(11) NOT NULL,
  `status` text NOT NULL,
  `gains_coupons` text NOT NULL,
  `trending_sale` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `description` text NOT NULL,
  `viewed` int(11) DEFAULT NULL,
  `retailer_slug` varchar(255) DEFAULT NULL,
  `added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_visit` date NOT NULL,
  `visits` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `categorie_coupons` int(11) NOT NULL,
  `souscategorie_coupons` text NOT NULL,
  `exclusive` int(11) NOT NULL,
  `img_coupons` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cashbackengine_coupons`
--

INSERT INTO `cashbackengine_coupons` (`sort_order`, `title`, `coupon_type`, `coupon_id`, `retailer_id`, `status`, `gains_coupons`, `trending_sale`, `start_date`, `end_date`, `description`, `viewed`, `retailer_slug`, `added`, `last_visit`, `visits`, `user_id`, `code`, `link`, `categorie_coupons`, `souscategorie_coupons`, `exclusive`, `img_coupons`) VALUES
('', 'New | Livraison offerte sur Le Mobilier', '5', 65, 84, 'expired', '+ 10 % cashabck', 0, '2021-11-07', '2020-10-28', '&lt;p&gt;&rsaquo; Veuillez v&eacute;rifier que vous avez renseign&eacute; tous les champs avec *&lt;/p&gt;&lt;p&gt;&rsaquo; Veuillez v&eacute;rifier que vous avez renseign&eacute; tous les champs avec *&lt;/p&gt;&lt;p&gt;&rsaquo; Veuillez v&eacute;rifier que vous avez renseign&eacute; tous les champs avec *&lt;/p&gt;', NULL, NULL, '2020-10-24 18:13:39', '0000-00-00', 0, '0', '10 euro', 'https://www.youtube.com/watch?v=iLMs_EqUICs', 39, '57', 0, './images/coupon/1.jpg'),
('', 'dgdgdgd', '6', 66, 84, 'active', '101010', 0, '2020-11-25', '2020-12-02', '&lt;p&gt;gdgdgd&lt;/p&gt;', NULL, NULL, '2020-10-27 14:58:45', '0000-00-00', 0, '', '1001', 'https://www.youtube.com/watch?v=iLMs_EqUICs', 39, '57', 1, './images/coupon/2.jpg'),
('0', '&lt;p&gt;cdcsd&lt;/p&gt;', '1', 67, 90, 'active', 'hgfh', 0, '2020-12-04', '2020-12-04', '<p>&lt;p&gt;cdsds&lt;/p&gt;</p>', NULL, NULL, '2020-11-13 03:55:43', '0000-00-00', 0, '', 'hgfh', 'https://www.youtube.com/watch?v=iLMs_EqUICs', 32, '', 1, ''),
('0', '&lt;p&gt;50% reduction&lt;/p&gt;', '4', 68, 90, 'active', '10%', 0, '2020-11-28', '2020-12-04', '<ul><li>- Le cashback est calcul&eacute; sur le montant HT et hors frais de port</li><li>- Remarque : pour que votre achat soit correctement enregistr&eacute;, vous devez accepter tous les cookies sur le site du marchand.</li><li>- Pas de cashback si utilisation de codes promo non relay&eacute;s par iGraal (dont ceux envoy&eacute;s par Sarenza par newsletter). Cashback non cumulable avec les codes affich&eacute;s sur le site de Sarenza et les ventes privil&egrave;ges ou priv&eacute;es Sarenza</li><li>- Pas de cashback pour les achats effectu&eacute;s sur l&#039;application mobile Sarenza (application pour smartphone ou tablette)</li></ul>', NULL, NULL, '2020-11-13 21:48:23', '0000-00-00', 0, '', 'nana', 'https://fr.igraal.com/codes-promo/Sarenza/code-promotionnel', 32, '', 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `cashbackengine_favorites`
--

CREATE TABLE `cashbackengine_favorites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `retailer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `cashbackengine_reports`
--

CREATE TABLE `cashbackengine_reports` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reporter_id` int(11) NOT NULL,
  `retailer_id` int(11) NOT NULL,
  `report` text NOT NULL,
  `viewed` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `cashbackengine_retailers`
--

CREATE TABLE `cashbackengine_retailers` (
  `retailer_id` int(11) NOT NULL,
  `network_id` int(11) DEFAULT NULL,
  `cashback` text NOT NULL,
  `image` text,
  `image_fond` text NOT NULL,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `retailler_categorie` int(11) NOT NULL,
  `retailler_sous_categorie` int(11) NOT NULL,
  `featured` int(11) NOT NULL,
  `is_profile_completed` int(11) DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `status` text NOT NULL,
  `top_retailer` varchar(255) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `retailer_slug` varchar(255) NOT NULL,
  `sort_order` varchar(255) DEFAULT NULL,
  `program_id` varchar(255) DEFAULT NULL,
  `old_cashback` varchar(255) DEFAULT NULL,
  `conditions` varchar(255) DEFAULT NULL,
  `description` text,
  `apropos` text NOT NULL,
  `website` text NOT NULL,
  `tags` text NOT NULL,
  `seo_title` text NOT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `popular_retailer` int(11) DEFAULT NULL,
  `deal_of_week` int(11) DEFAULT NULL,
  `image_original` varchar(255) DEFAULT NULL,
  `image_120x60` varchar(255) DEFAULT NULL,
  `image_300x100` varchar(255) DEFAULT NULL,
  `visits` int(11) DEFAULT '0',
  `total_avis` int(11) NOT NULL,
  `nbr_total_star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cashbackengine_retailers`
--

INSERT INTO `cashbackengine_retailers` (`retailer_id`, `network_id`, `cashback`, `image`, `image_fond`, `title`, `url`, `retailler_categorie`, `retailler_sous_categorie`, `featured`, `is_profile_completed`, `end_date`, `status`, `top_retailer`, `added`, `retailer_slug`, `sort_order`, `program_id`, `old_cashback`, `conditions`, `description`, `apropos`, `website`, `tags`, `seo_title`, `meta_description`, `meta_keywords`, `popular_retailer`, `deal_of_week`, `image_original`, `image_120x60`, `image_300x100`, `visits`, `total_avis`, `nbr_total_star`) VALUES
(84, 8, '15%', './images/cashback/1.png', './images/cashbackFond/1.jpg', 'Cdiscount', 'http://www.googel.com?cx={USERID}', 39, 57, 1, NULL, '2020-10-30 14:50:00', 'active', '', '2020-10-24 11:49:59', '', NULL, 'Cdiscount', '12%', '&lt;p&gt;Avec plus de 100 000 r&eacute;f&eacute;rences &agrave; prix discount pr&eacute;sentes dans leur catalogue, cette boutique est LE site pour faire des affaires et acheter au meilleur prix sur Internet. Cdiscount est sp&eacute;cialis&eacute; dans la', '<p>Avec plus de 100 000 rÃ©fÃ©rences Ã  prix discount prÃ©sentes dans leur catalogue, cette boutique est LE site pour faire des affaires et acheter au meilleur prix sur Internet. Cdiscount est spÃ©cialisÃ© dans la vente de divers articles de loisirs et dâ€™Ã©quipements. En France, il est classÃ© au premier rang dans son domaine dâ€™activitÃ©. Ce mÃ©rite lui est attribuÃ© en raison de ses prix trÃ¨s attractifs et de la multitude dâ€™articles divers et variÃ©s disponibles sur son catalogue. Les prix sont affichÃ©s avec des remises allant de 20 Ã  50% ce qui en fait une des boutiques en ligne les moins chÃ¨res du net. Au sein du catalogue, nous pouvons citer les articles de jeux, tÃ©lÃ©phonie, Ã©lectromÃ©nager, prÃªt Ã  porter, maison, informatique, sports et loisirs...</p><p>Au fil du temps, ses services se sont Ã©largis pour attirer de nouveaux clients. De ce fait, vous pouvez actuellement y dÃ©couvrir plusieurs catÃ©gories dâ€™articles rÃ©partis dans 40 univers comme les services qui incluent les assurances, financement, les voyagesâ€¦ Dans le rayon high tech, nous retrouvons la catÃ©gorie informatique (PC, Ã©crans, imprimantes, unitÃ© centrale...), les appareils mobiles (Smartphones, tÃ©lÃ©, appareils photos...). Ensuite, Cdiscount propose dâ€™autres catÃ©gories tels que les Ã©quipements et accessoires (lunettes, habillement, bijoux, chaussures...), les articles culturels (DVD, musique, livres,..), la santÃ© et forme (gastronomie, produits de soins...) et les Ã©quipements pour la maison (dÃ©coration, machine Ã©lectromÃ©nagÃ¨re...)</p><p>Cdiscount a Ã©galement pensÃ© aux nouveaux nÃ©s et aux bÃ©bÃ©s en proposant une rubrique consacrÃ©e Ã  la puÃ©riculture pour les petits budgets. Dans celle-ci, vous pouvez retrouver des jouets tels les jeux dâ€™Ã©veils ou des jeux de 1er Ã¢ge, des poussettes, des siÃ¨ges autos et dâ€™autres nombreux Ã©quipements indispensables comme les couches, biberons, des tapis de jeu, des chaises hautes, des sacs Ã  langer, des pyjamas pour bÃ©bÃ©... Ceux qui dÃ©sirent faire une commande devront avant tout avoir un compte client sur le site. Pour en crÃ©er un, cous devez inscrire vos coordonnÃ©es sur le site ou vous pouvez vous connecter via Facebook pour plus de facilitÃ©.</p>', '<h3>Ã‰conomisez sur Cdiscount</h3><h2>Economisez sur tous vos achats en ligne sur Cdiscount</h2><ul><li><a href=\\\"https://www.poulpeo.com/reductions-cdiscount.htm#CodesPromo\\\">Les meilleurs codes promo du mois sur Cdiscount</a></li><li><a href=\\\"https://www.poulpeo.com/reductions-cdiscount.htm#CPVal\\\">Des codes promo valides et fonctionnels sur Cdiscount</a></li><li><a href=\\\"https://www.poulpeo.com/reductions-cdiscount.htm#Livraison\\\">Comment profiter de la livraison gratuite sur Cdiscount ?</a></li><li><a href=\\\"https://www.poulpeo.com/reductions-cdiscount.htm#Garanties\\\">Des garanties pour chacun de vos achats en ligne</a></li><li><a href=\\\"https://www.poulpeo.com/reductions-cdiscount.htm#Fidelite\\\">Cdiscount Ã  volontÃ© votre fidÃ©litÃ© vous avantage</a></li><li><a href=\\\"https://www.poulpeo.com/reductions-cdiscount.htm#Appli\\\">Les avantantages de l\\\'application mobile Cdiscount</a></li><li><a href=\\\"https://www.poulpeo.com/reductions-cdiscount.htm#Catalogue\\\">DÃ©couvrez le grand Ã©ventail d\\\'article proposÃ© sur la boutique Cdiscount</a></li><li><a href=\\\"https://www.poulpeo.com/reductions-cdiscount.htm#Ecommerce\\\">Le ecommerce pas cher en France</a></li><li><a href=\\\"https://www.poulpeo.com/reductions-cdiscount.htm#Prez\\\">Cdiscount qu\\\'est-ce c\\\'est ?</a></li></ul><h2>Les meilleurs codes promo Cdiscount valides en mars 2019 :</h2><figure class=\\\"table\\\"><table><thead><tr><th>RÃ©duction</th><th>DÃ©tails du code</th><th>Expire le</th><th>VÃ©rifiÃ©</th></tr></thead><tbody><tr><td>10â‚¬</td><td>10â‚¬ de remise Ã  partir de 99â‚¬ d\\\'achat</td><td>14/10/2020</td><td>Oui</td></tr><tr><td>40%</td><td>Remise 40 % sur une sÃ©lection de produits</td><td>31/12/2020</td><td>Oui</td></tr><tr><td>50%</td><td>Remise 50 % sur la chaise de salle Ã  manger Vintou</td><td>03/03/2021</td><td>Oui</td></tr><tr><td>10%</td><td>10% de rÃ©duc sur une sÃ©lection de produits</td><td>21/03/2021</td><td>Oui</td></tr><tr><td>20%</td><td>Remise 20 % sur une sÃ©lection de produits</td><td>31/12/2020</td><td>Oui</td></tr><tr><td>30%</td><td>Jusqu\\\'Ã  30% de remise sur une sÃ©lection d\\\'articles</td><td>22/10/2020</td><td>Oui</td></tr></tbody></table></figure><figure class=\\\"table\\\"><table><tbody><tr><td>Nombre de rÃ©ductions</td><td>41</td></tr><tr><td>Cashback</td><td>Jusqu\\\'Ã  3%</td></tr><tr><td>Nombre de codes</td><td>12</td></tr><tr><td>Meilleure offre</td><td>30%</td></tr></tbody></table></figure><p>&nbsp;</p><p>Et en ce moment, de nombreuses offres promotionnelles sont affichÃ©es sur le site. Vous avez notamment l\\\'occasion de profiter <a href=\\\"https://www.poulpeo.com/promo-nintendo-switch.htm\\\">des prix les plus bas sur la Switch</a>, d\\\'une <a href=\\\"https://www.poulpeo.com/promo-ps4-bundles.htm\\\">rÃ©duction sur la PS4 Pro</a> ou encore d\\\'<a href=\\\"https://www.poulpeo.com/promo-meilleurs-lego-playmobil.htm\\\">offres avantages sur les Playmobil et les Lego</a>. Si vous Ãªtes Ã  la recherche d\\\'un nouveau smartphone Ã  tarif rÃ©duit, sachez que l\\\'enseigne propose des remises trÃ¨s intÃ©ressantes avec <a href=\\\"https://www.poulpeo.com/promo-smartphone-ios.htm\\\">les derniers iPhone en promotion</a>.</p><p>&nbsp;</p><h2>Des codes promo valides et fonctionnels sur Cdiscount</h2><p>Concernant les codes de rÃ©duction, les coupons proposÃ©s sur notre site sont trÃ¨s simple utilisation (un seul clic sur l\\\'offre suffit). Ensuite, une page contenant le code de rÃ©duction Cdiscount sâ€™affichera sur votre navigateur. Ce code promo Cdiscount devra par la suite recopiÃ© dans la case prÃ©vue pour les codes de rÃ©duction lors de la validation dâ€™un achat. GrÃ¢ce Ã  cette mÃ©thode, vous pouvez bÃ©nÃ©ficier dâ€™une remise considÃ©rable sur votre commande. Au cas oÃ¹ ce que vous cherchez nâ€™est pas disponible sur Cdiscount, dâ€™autres bons de rÃ©ductions sont disponibles sur Poulpeo pour des magasins similaires. Pour trouver des meilleurs produits, optez pour le CmarchÃ© avec ses innombrables rÃ©fÃ©rences vendues par des vendeurs tiers, c\\\'est Ã  dire qui ajoutent leurs propres articles sur le catalogue Cdiscount.</p><p>Pour simplifier lâ€™achat de ses clients, Cdiscount a collaborÃ© avec la Banque Casino pour mettre en place la Solution CrÃ©dit. Il sâ€™agit dâ€™une mÃ©thode qui consiste Ã  faciliter le paiement des achats. Les clients qui effectuent un achat de plus de 600 â‚¬ profitent dâ€™un mode de paiement par tranche. Vous pouvez rembourser votre achat pendant 12, 24, 36, 48 ou 60 mois. Pour bÃ©nÃ©ficier de cette offre, il ne vous suffit que de remplir votre panier avec les articles de votre choix. Au moment de la validation de lâ€™achat, cochez la mention Â« Solution CrÃ©dit Â». Une Ã©quipe de Cdiscount analysera dâ€™abord votre dossier et une approbation vous sera envoyÃ©e si votre dossier est acceptÃ©. Vos articles vous seront livrÃ©s aprÃ¨s lâ€™accord de financement par la Banque Casino.</p><p>Les acheteurs recherchent Ã©galement des bons plans sur : code parrainage, calendrier photo, objets photo, acheter moins cher, logitech, faire des Ã©conomies, tv led, Ã©conomiser de l\\\'argent, offre de parrainage, achats sur internet, offres exceptionnelles, promotion en cours, dÃ©marque, articles de jardin, code promotion, code avantage, code promotionnel, utiliser un code, coupons de rÃ©duction, frais de port offerts, bon d\\\'achat, port offerts, code remise, shopping en ligne, bon de rÃ©duction, ventes flash, livraison express, cadeau gratuit, deals, ventes privÃ©es, remise supplÃ©mentaire, reduc cdiscount</p><h2>Comment profiter de la livraison gratuite sur Cdiscount ?</h2><p>Pour tous vos petits colis, la livraison dans l\\\'un des trÃ¨s nombreux points relais est totalement gratuite ! En effet le site propose la livraison gratuite dÃ¨s 25â‚¬ de commande dans plus de 15 000 points relais partout en France. La livraison Ã  domicile pour vos petits colis de moins de 30kg est proposÃ©e Ã  un tout petit prix de 2,99â‚¬. Enfin, ponctuellement tout au long de l\\\'annÃ©e, l\\\'enseigne propose aussi la livraison gratuite Ã  domicile sur certains produits, comme les tÃ©lÃ©viseurs d\\\'une valeur supÃ©rieure Ã  300â‚¬, les nouveautÃ©s consoles de jeux, et le petit Ã©lectromÃ©nager. Profitez-en !</p><h2>Des garanties pour chacun de vos achats en ligne</h2><p>Les produits de Cdiscount peuvent Ãªtre acquis avec une extension de garantie (payante). La durÃ©e de garantie peut Ãªtre trÃ¨s longue dont la modalitÃ© la plus choisie est la garantie sÃ©rÃ©nitÃ©. Celle-ci vous prÃ©serve contre les problÃ¨mes de pannes et les soucis techniques de votre matÃ©riel. Elle peut-Ãªtre de 2 ans, 3ans ou 5ans. GrÃ¢ce Ã  un systÃ¨me dâ€™alerte employÃ© par Cdiscount, vous pouvez Ãªtre au courant de la situation de votre commande et de la livraison. Il sâ€™agit dâ€™un service qui ne coÃ»te de 0,60 â‚¬. La notification se fait par trois SMS. Le premier SMS confirme votre commande, le second vous prÃ©vient quâ€™elle est en prÃ©paration et le dernier vous informe que la livraison se fera trÃ¨s prochainement.</p><h2>Cdiscount Ã  volontÃ© votre fidÃ©litÃ© vous avantage</h2><p>Ã€ l\\\'instar de bons nombres de sites e-commerce, Cdiscount a crÃ©Ã© un programme de fidÃ©litÃ© trÃ¨s intÃ©ressant pour ses adhÃ©rents. Ce programme a pour nom Cdiscount Ã  volontÃ© sur le plus grand site e-commerce franÃ§ais.</p><p>Ce systÃ¨me propose les options classiques des programmes de fidÃ©litÃ© des sites de ventes en ligne. En effet, Cdiscount propose Ã  ses abonnÃ©s la livraison gratuite et illimitÃ©e en un jour ouvrÃ©. Cependant, il faudra que le montant de votre commande soit supÃ©rieur Ã  10â‚¬ pour en bÃ©nÃ©ficier.&nbsp;</p><p>En Ã©change de 29â‚¬ par an, vous aurez Ã©galement accÃ¨s Ã  20% de rÃ©duction grÃ¢ce au code VIPCDAC. Ces 20% sont cumulables avec des codes promo classiques ainsi que le cashback Cdiscount Poulpeo. Cdiscount Ã  volontÃ© vous permet Ã©galement d\\\'accÃ©der Ã  des ventes exclusives rÃ©servÃ©es aux souscripteurs du programme.&nbsp;</p><p>Pour terminer, cet abonnement offre deux ultimes avantages. Vous pourrez partager vos avantages avec deux de vos proches, et profiter de la lecture de nombreux titres de presse en version dÃ©matÃ©rialisÃ©e.</p><p>Il est intÃ©ressant de savoir que Cdiscount offre un mois d\\\'abonnement gratuit, afin que vous vous fassiez une idÃ©e de l\\\'utilitÃ© d\\\'un tel programme pour vous.</p><h2>Les avantages de l\\\'application mobile Cdiscount</h2><p>Le gÃ©ant franÃ§ais du e-commerce propose Ã©galement Ã  ses clients de tÃ©lÃ©charger une application mobile disponible sur les stores iOS (App Store) et Android (Google Play Store).&nbsp;</p><p>Cette application ne se contente pas de copier le site web classique de la boutique. En effet, Cdiscount offre rÃ©guliÃ¨rement aux utilisateurs de l\\\'appli mobile des codes promo. Ces coupons ne peuvent Ãªtre utilisÃ©s ailleurs que sur la version mobile ou l\\\'application de Cdiscount. La navigation via smartphone Ã©tant un enjeu de plus en plus important, on comprend aisÃ©ment pourquoi la boutique propose des codes exclusifs via ce biais.</p><p>La distribution de ces codes promotionnels s\\\'effectue gÃ©nÃ©ralement durant les week-ends, ainsi que lors des ventes flash d\\\'une durÃ©e de 24h.</p><h2>DÃ©couvrez le grand Ã©ventail d\\\'article proposÃ© sur la boutique Cdiscount</h2><ul><li>Petit &amp; gros Ã©lectromÃ©nager : cuisine, lavage, entretien, produits mÃ©nager</li><li>Maison &amp; dÃ©co : meubles, literie, dÃ©coration pour toutes les piÃ¨ces de votre maison (salon et sÃ©jour, chambre et bureau, cuisine, salle de bain et WC)</li><li>Bricolage &amp; chauffage : climatisation, outils de rÃ©paration et atelier, nettoyage, sÃ©curitÃ© et domotique, sanitaire et traitement de l\\\'eau, matÃ©riel de construction, menuiserie</li><li>Jardin &amp; animalerie : mobilier, loisirs et amÃ©nagements, outillage de jardin, plantes &amp; jardinerie, nourriture et accessoires pour animaux domestiques</li><li>MatÃ©riel &amp; composants informatiques : ordinateurs portables, PC de bureau, tablettes tactiles, pÃ©riphÃ©riques et accessoires, stockages, disques durs et rÃ©seau, PC assemblÃ©s</li><li>TÃ©lÃ©phonie &amp; objets connectÃ©s : smartphone, forfait mobile, accessoires et cartes mÃ©moires, montres connectÃ©s et coach sportif</li><li>TV, hifi &amp; mp3 : tÃ©lÃ©visions et vidÃ©oprojecteurs, home cinÃ©ma et vidÃ©o, enceintes bluetooth, casque audio, lecteurs mp3 et mp4</li><li>Photo &amp; camÃ©scope : appareils photo numÃ©riques, camÃ©ras, packs photo, accessoires</li><li>Auto, moto &amp; GPS : systÃ¨mes de navigation GPS, audio et sono pour la voiture, boutique pneus et piÃ¨ces dÃ©tachÃ©es pour vÃ©hicule, Ã©quipement et accessoires moto</li><li>VÃªtements &amp; chaussures : articles de mode pour femmes (manteaux, vestes, jeans, robes, pulls, lingerie), hommes (blousons, pantalons, t-shirts, polos, sweats, sous-vÃªtements) et enfants</li><li>Bagages &amp; bijouterie : bijoux, montres et lunettes, valises et sacs de voyage, petite maroquinerie et sac de loisir</li><li>BÃ©bÃ© &amp; puÃ©riculture : poussettes pour les ballades, Ã©quipements pour la maison, jouets pour l\\\'Ã©veil de bÃ©bÃ© et la mode de 0 Ã  36 mois</li><li>Jeux &amp; jouets : jeux d\\\'Ã©veil, d\\\'imagination et de construction, jouets pour enfants, loisirs de plein air et jeux de bar, hÃ©ros Disney et super hÃ©ros Marvel</li><li>Culture, jeux vidÃ©os &amp; consoles : sÃ©lections et nouveautÃ©s jeux vidÃ©os, consoles Nintendo/Xbox/Playstation, DVD, livres et musique, instruments de musique et arts crÃ©atifs</li><li>Articles de sport &amp; loisirs : football, basketball, rugby, fitness, cardio et musculation, BMX et VTT, ski et snowboard, natation, randonnÃ©e, Ã©quitation, escalade</li><li>Vin &amp; supermarchÃ© : vin rouge / blanc / rosÃ©, grands crus et coffrets cadeaux, champagne et alcools forts, alimentaire et boissons, hygiÃ¨ne, beautÃ© et produits d\\\'entretien</li></ul><h2>Le ecommerce pas cher en France</h2><p>Avec plus de 100 000 rÃ©fÃ©rences Ã  prix discount prÃ©sentes dans leur catalogue, cette boutique est LE site pour faire des affaires et acheter au meilleur prix sur Internet. Cdiscount est spÃ©cialisÃ© dans la vente de divers articles de loisirs et dâ€™Ã©quipements. En France, il est classÃ© au premier rang dans son domaine dâ€™activitÃ©. Ce mÃ©rite lui est attribuÃ© en raison de ses prix trÃ¨s attractifs et de la multitude dâ€™articles divers et variÃ©s disponibles sur son catalogue. Les prix sont affichÃ©s avec des remises allant de 20 Ã  50% ce qui en fait une des boutiques en ligne les moins chÃ¨res du net. Au sein du catalogue, nous pouvons citer les articles de jeux, tÃ©lÃ©phonie, Ã©lectromÃ©nager, prÃªt Ã  porter, maison, informatique, sports et loisirs...</p><p>Au fil du temps, ses services se sont Ã©largis pour attirer de nouveaux clients. De ce fait, vous pouvez actuellement y dÃ©couvrir plusieurs catÃ©gories dâ€™articles rÃ©partis dans 40 univers comme les services qui incluent les assurances, financement, les voyagesâ€¦ Dans le rayon high tech, nous retrouvons la catÃ©gorie informatique (PC, Ã©crans, imprimantes, unitÃ© centrale...), les appareils mobiles (Smartphones, tÃ©lÃ©, appareils photos...). Ensuite, Cdiscount propose dâ€™autres catÃ©gories tels que les Ã©quipements et accessoires (lunettes, habillement, bijoux, chaussures...), les articles culturels (DVD, musique, livres,..), la santÃ© et forme (gastronomie, produits de soins...) et les Ã©quipements pour la maison (dÃ©coration, machine Ã©lectromÃ©nagÃ¨re...)</p><p>Cdiscount a Ã©galement pensÃ© aux nouveaux nÃ©s et aux bÃ©bÃ©s en proposant une rubrique consacrÃ©e Ã  la puÃ©riculture pour les petits budgets. Dans celle-ci, vous pouvez retrouver des jouets tels les jeux dâ€™Ã©veils ou des jeux de 1er Ã¢ge, des poussettes, des siÃ¨ges autos et dâ€™autres nombreux Ã©quipements indispensables comme les couches, biberons, des tapis de jeu, des chaises hautes, des sacs Ã  langer, des pyjamas pour bÃ©bÃ©... Ceux qui dÃ©sirent faire une commande devront avant tout avoir un compte client sur le site. Pour en crÃ©er un, cous devez inscrire vos coordonnÃ©es sur le site ou vous pouvez vous connecter via Facebook pour plus de facilitÃ©.</p><h2>Cdiscount qu\\\'est-ce que c\\\'est ?</h2><ul><li>Des Ã©conomies et des promos toute l\\\'annÃ©e sur des milliers de produits</li><li>Une multitude de code promo Cdiscount Ã  utiliser pour gagner de l\\\'argent sur votre panier</li><li>16 univers regroupant plusieurs centaines de catÃ©gories de produits hi-tech, mode, puÃ©riculture, pratique ou alimentaire</li><li>La livraison gratuite dans plus de 15 000 points retrait dÃ¨s 25 â‚¬ d\\\'achat</li><li>Une carte de fidÃ©litÃ© donnant droit jusqu\\\'Ã  20 % de rÃ©duction sur votre commande</li><li>Une multitude d\\\'offres et de rÃ©duction pour les journÃ©es shopping du <a href=\\\"https://www.poulpeo.com/promo-black-friday-1.htm\\\">Black Friday</a></li></ul><p>DÃ©couvrez de nombreux codes de promotion pour payer moins cher votre commande chez Cdiscount. Lâ€™enseigne propose une large gamme de produits dans le petit et gros Ã©lectromÃ©nager, informatique, son et image, Hi-tech, consoles, jeux vidÃ©o, Hifi, photo, GPS, accessoires pour la maison, vÃªtement et maroquinerie. Avec un code promo Cdiscount, vous avez le droit Ã  des promos et des codes de rÃ©duction toute l\\\'annÃ©e ! SpÃ©cialiste des promos renversantes et des soldes jusqu\\\'Ã  -95%, Cdiscount est lâ€™un des leaders de la vente en ligne Ã  bas prix et propose des offres promotionnelles en continu !</p>', '', '', '', '', '', NULL, 1, NULL, NULL, NULL, 5, 6, 28),
(85, 8, '12%', './images/cashback/2.png', './images/cashbackFond/2.jpg', 'pr&eacute;sentes', 'http://www.google.fr?cx={USERID}', 39, 56, 1, NULL, '2020-11-07 14:51:00', 'active', '', '2020-10-24 11:50:58', '', NULL, 'pr&eacute;sentes', '12%', '&lt;p&gt;Avec plus de 100 000 r&eacute;f&eacute;rences &agrave; prix discount pr&eacute;sentes dans leur catalogue, cette boutique est LE site pour faire des affaires et acheter au meilleur prix sur Internet. Cdiscount est sp&eacute;cialis&eacute; dans la', '<p>Avec plus de 100 000 rÃ©fÃ©rences Ã  prix discount prÃ©sentes dans leur catalogue, cette boutique est LE site pour faire des affaires et acheter au meilleur prix sur Internet. Cdiscount est spÃ©cialisÃ© dans la vente de divers articles de loisirs et dâ€™Ã©quipements. En France, il est classÃ© au premier rang dans son domaine dâ€™activitÃ©. Ce mÃ©rite lui est attribuÃ© en raison de ses prix trÃ¨s attractifs et de la multitude dâ€™articles divers et variÃ©s disponibles sur son catalogue. Les prix sont affichÃ©s avec des remises allant de 20 Ã  50% ce qui en fait une des boutiques en ligne les moins chÃ¨res du net. Au sein du catalogue, nous pouvons citer les articles de jeux, tÃ©lÃ©phonie, Ã©lectromÃ©nager, prÃªt Ã  porter, maison, informatique, sports et loisirs...</p><p>Au fil du temps, ses services se sont Ã©largis pour attirer de nouveaux clients. De ce fait, vous pouvez actuellement y dÃ©couvrir plusieurs catÃ©gories dâ€™articles rÃ©partis dans 40 univers comme les services qui incluent les assurances, financement, les voyagesâ€¦ Dans le rayon high tech, nous retrouvons la catÃ©gorie informatique (PC, Ã©crans, imprimantes, unitÃ© centrale...), les appareils mobiles (Smartphones, tÃ©lÃ©, appareils photos...). Ensuite, Cdiscount propose dâ€™autres catÃ©gories tels que les Ã©quipements et accessoires (lunettes, habillement, bijoux, chaussures...), les articles culturels (DVD, musique, livres,..), la santÃ© et forme (gastronomie, produits de soins...) et les Ã©quipements pour la maison (dÃ©coration, machine Ã©lectromÃ©nagÃ¨re...)</p><p>Cdiscount a Ã©galement pensÃ© aux nouveaux nÃ©s et aux bÃ©bÃ©s en proposant une rubrique consacrÃ©e Ã  la puÃ©riculture pour les petits budgets. Dans celle-ci, vous pouvez retrouver des jouets tels les jeux dâ€™Ã©veils ou des jeux de 1er Ã¢ge, des poussettes, des siÃ¨ges autos et dâ€™autres nombreux Ã©quipements indispensables comme les couches, biberons, des tapis de jeu, des chaises hautes, des sacs Ã  langer, des pyjamas pour bÃ©bÃ©... Ceux qui dÃ©sirent faire une commande devront avant tout avoir un compte client sur le site. Pour en crÃ©er un, cous devez inscrire vos coordonnÃ©es sur le site ou vous pouvez vous connecter via Facebook pour plus de facilitÃ©.</p>', '<p>Avec plus de 100 000 rÃ©fÃ©rences Ã  prix discount prÃ©sentes dans leur catalogue, cette boutique est LE site pour faire des affaires et acheter au meilleur prix sur Internet. Cdiscount est spÃ©cialisÃ© dans la vente de divers articles de loisirs et dâ€™Ã©quipements. En France, il est classÃ© au premier rang dans son domaine dâ€™activitÃ©. Ce mÃ©rite lui est attribuÃ© en raison de ses prix trÃ¨s attractifs et de la multitude dâ€™articles divers et variÃ©s disponibles sur son catalogue. Les prix sont affichÃ©s avec des remises allant de 20 Ã  50% ce qui en fait une des boutiques en ligne les moins chÃ¨res du net. Au sein du catalogue, nous pouvons citer les articles de jeux, tÃ©lÃ©phonie, Ã©lectromÃ©nager, prÃªt Ã  porter, maison, informatique, sports et loisirs...</p><p>Au fil du temps, ses services se sont Ã©largis pour attirer de nouveaux clients. De ce fait, vous pouvez actuellement y dÃ©couvrir plusieurs catÃ©gories dâ€™articles rÃ©partis dans 40 univers comme les services qui incluent les assurances, financement, les voyagesâ€¦ Dans le rayon high tech, nous retrouvons la catÃ©gorie informatique (PC, Ã©crans, imprimantes, unitÃ© centrale...), les appareils mobiles (Smartphones, tÃ©lÃ©, appareils photos...). Ensuite, Cdiscount propose dâ€™autres catÃ©gories tels que les Ã©quipements et accessoires (lunettes, habillement, bijoux, chaussures...), les articles culturels (DVD, musique, livres,..), la santÃ© et forme (gastronomie, produits de soins...) et les Ã©quipements pour la maison (dÃ©coration, machine Ã©lectromÃ©nagÃ¨re...)</p><p>Cdiscount a Ã©galement pensÃ© aux nouveaux nÃ©s et aux bÃ©bÃ©s en proposant une rubrique consacrÃ©e Ã  la puÃ©riculture pour les petits budgets. Dans celle-ci, vous pouvez retrouver des jouets tels les jeux dâ€™Ã©veils ou des jeux de 1er Ã¢ge, des poussettes, des siÃ¨ges autos et dâ€™autres nombreux Ã©quipements indispensables comme les couches, biberons, des tapis de jeu, des chaises hautes, des sacs Ã  langer, des pyjamas pour bÃ©bÃ©... Ceux qui dÃ©sirent faire une commande devront avant tout avoir un compte client sur le site. Pour en crÃ©er un, cous devez inscrire vos coordonnÃ©es sur le site ou vous pouvez vous connecter via Facebook pour plus de facilitÃ©.</p>', '', '', '', '', '', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(86, 8, '12%', './images/cashback/3.png', './images/cashbackFond/3.jpg', 'Get Flat 30% OFF on Payment Via RBL Bank', 'https://www.poulpeo.com/reductions-adidas.htm?cx={USERID}', 39, 56, 1, NULL, '2020-11-08 14:58:00', 'active', '', '2020-10-24 11:57:40', '', NULL, 'Get Flat 30% OFF on Payment Via RBL Bank', '10%', '&lt;p&gt;Avec plus de 100 000 r&eacute;f&eacute;rences &agrave; prix discount pr&eacute;sentes dans leur catalogue, cette boutique est LE site pour faire des affaires et acheter au meilleur prix sur Internet. Cdiscount est sp&eacute;cialis&eacute; dans la', '<p>Avec plus de 100 000 rÃ©fÃ©rences Ã  prix discount prÃ©sentes dans leur catalogue, cette boutique est LE site pour faire des affaires et acheter au meilleur prix sur Internet. Cdiscount est spÃ©cialisÃ© dans la vente de divers articles de loisirs et dâ€™Ã©quipements. En France, il est classÃ© au premier rang dans son domaine dâ€™activitÃ©. Ce mÃ©rite lui est attribuÃ© en raison de ses prix trÃ¨s attractifs et de la multitude dâ€™articles divers et variÃ©s disponibles sur son catalogue. Les prix sont affichÃ©s avec des remises allant de 20 Ã  50% ce qui en fait une des boutiques en ligne les moins chÃ¨res du net. Au sein du catalogue, nous pouvons citer les articles de jeux, tÃ©lÃ©phonie, Ã©lectromÃ©nager, prÃªt Ã  porter, maison, informatique, sports et loisirs...</p><p>Au fil du temps, ses services se sont Ã©largis pour attirer de nouveaux clients. De ce fait, vous pouvez actuellement y dÃ©couvrir plusieurs catÃ©gories dâ€™articles rÃ©partis dans 40 univers comme les services qui incluent les assurances, financement, les voyagesâ€¦ Dans le rayon high tech, nous retrouvons la catÃ©gorie informatique (PC, Ã©crans, imprimantes, unitÃ© centrale...), les appareils mobiles (Smartphones, tÃ©lÃ©, appareils photos...). Ensuite, Cdiscount propose dâ€™autres catÃ©gories tels que les Ã©quipements et accessoires (lunettes, habillement, bijoux, chaussures...), les articles culturels (DVD, musique, livres,..), la santÃ© et forme (gastronomie, produits de soins...) et les Ã©quipements pour la maison (dÃ©coration, machine Ã©lectromÃ©nagÃ¨re...)</p><p>Cdiscount a Ã©galement pensÃ© aux nouveaux nÃ©s et aux bÃ©bÃ©s en proposant une rubrique consacrÃ©e Ã  la puÃ©riculture pour les petits budgets. Dans celle-ci, vous pouvez retrouver des jouets tels les jeux dâ€™Ã©veils ou des jeux de 1er Ã¢ge, des poussettes, des siÃ¨ges autos et dâ€™autres nombreux Ã©quipements indispensables comme les couches, biberons, des tapis de jeu, des chaises hautes, des sacs Ã  langer, des pyjamas pour bÃ©bÃ©... Ceux qui dÃ©sirent faire une commande devront avant tout avoir un compte client sur le site. Pour en crÃ©er un, cous devez inscrire vos coordonnÃ©es sur le site ou vous pouvez vous connecter via Facebook pour plus de facilitÃ©.</p>', '<p>Avec plus de 100 000 rÃ©fÃ©rences Ã  prix discount prÃ©sentes dans leur catalogue, cette boutique est LE site pour faire des affaires et acheter au meilleur prix sur Internet. Cdiscount est spÃ©cialisÃ© dans la vente de divers articles de loisirs et dâ€™Ã©quipements. En France, il est classÃ© au premier rang dans son domaine dâ€™activitÃ©. Ce mÃ©rite lui est attribuÃ© en raison de ses prix trÃ¨s attractifs et de la multitude dâ€™articles divers et variÃ©s disponibles sur son catalogue. Les prix sont affichÃ©s avec des remises allant de 20 Ã  50% ce qui en fait une des boutiques en ligne les moins chÃ¨res du net. Au sein du catalogue, nous pouvons citer les articles de jeux, tÃ©lÃ©phonie, Ã©lectromÃ©nager, prÃªt Ã  porter, maison, informatique, sports et loisirs...</p><p>Au fil du temps, ses services se sont Ã©largis pour attirer de nouveaux clients. De ce fait, vous pouvez actuellement y dÃ©couvrir plusieurs catÃ©gories dâ€™articles rÃ©partis dans 40 univers comme les services qui incluent les assurances, financement, les voyagesâ€¦ Dans le rayon high tech, nous retrouvons la catÃ©gorie informatique (PC, Ã©crans, imprimantes, unitÃ© centrale...), les appareils mobiles (Smartphones, tÃ©lÃ©, appareils photos...). Ensuite, Cdiscount propose dâ€™autres catÃ©gories tels que les Ã©quipements et accessoires (lunettes, habillement, bijoux, chaussures...), les articles culturels (DVD, musique, livres,..), la santÃ© et forme (gastronomie, produits de soins...) et les Ã©quipements pour la maison (dÃ©coration, machine Ã©lectromÃ©nagÃ¨re...)</p><p>Cdiscount a Ã©galement pensÃ© aux nouveaux nÃ©s et aux bÃ©bÃ©s en proposant une rubrique consacrÃ©e Ã  la puÃ©riculture pour les petits budgets. Dans celle-ci, vous pouvez retrouver des jouets tels les jeux dâ€™Ã©veils ou des jeux de 1er Ã¢ge, des poussettes, des siÃ¨ges autos et dâ€™autres nombreux Ã©quipements indispensables comme les couches, biberons, des tapis de jeu, des chaises hautes, des sacs Ã  langer, des pyjamas pour bÃ©bÃ©... Ceux qui dÃ©sirent faire une commande devront avant tout avoir un compte client sur le site. Pour en crÃ©er un, cous devez inscrire vos coordonnÃ©es sur le site ou vous pouvez vous connecter via Facebook pour plus de facilitÃ©.</p>', '', '', '', '', '', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(87, 0, '10%', './images/cashback/4.png', './images/cashbackFond/4.jpg', 'informatique, sports et loisirs', 'https://www.poulpeo.com/reductions-adidas.htm', 39, 56, 1, NULL, '2020-11-06 14:59:00', 'active', '', '2020-10-24 11:58:47', '', NULL, '', '10%', '&lt;p&gt;Avec plus de 100 000 r&eacute;f&eacute;rences &agrave; prix discount pr&eacute;sentes dans leur catalogue, cette boutique est LE site pour faire des affaires et acheter au meilleur prix sur Internet. Cdiscount est sp&eacute;cialis&eacute; dans la', '<p>Avec plus de 100 000 rÃ©fÃ©rences Ã  prix discount prÃ©sentes dans leur catalogue, cette boutique est LE site pour faire des affaires et acheter au meilleur prix sur Internet. Cdiscount est spÃ©cialisÃ© dans la vente de divers articles de loisirs et dâ€™Ã©quipements. En France, il est classÃ© au premier rang dans son domaine dâ€™activitÃ©. Ce mÃ©rite lui est attribuÃ© en raison de ses prix trÃ¨s attractifs et de la multitude dâ€™articles divers et variÃ©s disponibles sur son catalogue. Les prix sont affichÃ©s avec des remises allant de 20 Ã  50% ce qui en fait une des boutiques en ligne les moins chÃ¨res du net. Au sein du catalogue, nous pouvons citer les articles de jeux, tÃ©lÃ©phonie, Ã©lectromÃ©nager, prÃªt Ã  porter, maison, informatique, sports et loisirs...</p><p>Au fil du temps, ses services se sont Ã©largis pour attirer de nouveaux clients. De ce fait, vous pouvez actuellement y dÃ©couvrir plusieurs catÃ©gories dâ€™articles rÃ©partis dans 40 univers comme les services qui incluent les assurances, financement, les voyagesâ€¦ Dans le rayon high tech, nous retrouvons la catÃ©gorie informatique (PC, Ã©crans, imprimantes, unitÃ© centrale...), les appareils mobiles (Smartphones, tÃ©lÃ©, appareils photos...). Ensuite, Cdiscount propose dâ€™autres catÃ©gories tels que les Ã©quipements et accessoires (lunettes, habillement, bijoux, chaussures...), les articles culturels (DVD, musique, livres,..), la santÃ© et forme (gastronomie, produits de soins...) et les Ã©quipements pour la maison (dÃ©coration, machine Ã©lectromÃ©nagÃ¨re...)</p><p>Cdiscount a Ã©galement pensÃ© aux nouveaux nÃ©s et aux bÃ©bÃ©s en proposant une rubrique consacrÃ©e Ã  la puÃ©riculture pour les petits budgets. Dans celle-ci, vous pouvez retrouver des jouets tels les jeux dâ€™Ã©veils ou des jeux de 1er Ã¢ge, des poussettes, des siÃ¨ges autos et dâ€™autres nombreux Ã©quipements indispensables comme les couches, biberons, des tapis de jeu, des chaises hautes, des sacs Ã  langer, des pyjamas pour bÃ©bÃ©... Ceux qui dÃ©sirent faire une commande devront avant tout avoir un compte client sur le site. Pour en crÃ©er un, cous devez inscrire vos coordonnÃ©es sur le site ou vous pouvez vous connecter via Facebook pour plus de facilitÃ©.</p>', '<p>Avec plus de 100 000 rÃ©fÃ©rences Ã  prix discount prÃ©sentes dans leur catalogue, cette boutique est LE site pour faire des affaires et acheter au meilleur prix sur Internet. Cdiscount est spÃ©cialisÃ© dans la vente de divers articles de loisirs et dâ€™Ã©quipements. En France, il est classÃ© au premier rang dans son domaine dâ€™activitÃ©. Ce mÃ©rite lui est attribuÃ© en raison de ses prix trÃ¨s attractifs et de la multitude dâ€™articles divers et variÃ©s disponibles sur son catalogue. Les prix sont affichÃ©s avec des remises allant de 20 Ã  50% ce qui en fait une des boutiques en ligne les moins chÃ¨res du net. Au sein du catalogue, nous pouvons citer les articles de jeux, tÃ©lÃ©phonie, Ã©lectromÃ©nager, prÃªt Ã  porter, maison, informatique, sports et loisirs...</p><p>Au fil du temps, ses services se sont Ã©largis pour attirer de nouveaux clients. De ce fait, vous pouvez actuellement y dÃ©couvrir plusieurs catÃ©gories dâ€™articles rÃ©partis dans 40 univers comme les services qui incluent les assurances, financement, les voyagesâ€¦ Dans le rayon high tech, nous retrouvons la catÃ©gorie informatique (PC, Ã©crans, imprimantes, unitÃ© centrale...), les appareils mobiles (Smartphones, tÃ©lÃ©, appareils photos...). Ensuite, Cdiscount propose dâ€™autres catÃ©gories tels que les Ã©quipements et accessoires (lunettes, habillement, bijoux, chaussures...), les articles culturels (DVD, musique, livres,..), la santÃ© et forme (gastronomie, produits de soins...) et les Ã©quipements pour la maison (dÃ©coration, machine Ã©lectromÃ©nagÃ¨re...)</p><p>Cdiscount a Ã©galement pensÃ© aux nouveaux nÃ©s et aux bÃ©bÃ©s en proposant une rubrique consacrÃ©e Ã  la puÃ©riculture pour les petits budgets. Dans celle-ci, vous pouvez retrouver des jouets tels les jeux dâ€™Ã©veils ou des jeux de 1er Ã¢ge, des poussettes, des siÃ¨ges autos et dâ€™autres nombreux Ã©quipements indispensables comme les couches, biberons, des tapis de jeu, des chaises hautes, des sacs Ã  langer, des pyjamas pour bÃ©bÃ©... Ceux qui dÃ©sirent faire une commande devront avant tout avoir un compte client sur le site. Pour en crÃ©er un, cous devez inscrire vos coordonnÃ©es sur le site ou vous pouvez vous connecter via Facebook pour plus de facilitÃ©.</p>', '', 'Get Flat 30% OFF on Payment Via RBL Bank', '', '', '', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(88, 8, '10%', './images/cashback/5.png', './images/cashbackFond/5.jpg', 'Dashboard Interface', 'https://www.poulpeo.com/reductions-adidas.htm?cx={USERID}', 39, 56, 1, NULL, '2020-10-31 19:46:00', 'active', '', '2020-10-24 16:45:36', '', NULL, 'Administration Les validations Boutique Accecibiliter Parametre Logout Ajout Cashback', '10%', '&lt;p&gt;Administration Les validations Boutique Accecibiliter Parametre Logout Ajout Cashback&lt;/p&gt;', '<p>Administration Les validations Boutique Accecibiliter Parametre Logout Ajout Cashback</p>', '', 'http://Administration Les validations Boutique Accecibiliter Parametre Logout Ajout Cashback', 'Administration Les validations Boutique Accecibiliter Parametre Logout Ajout Cashback', '', '', '', NULL, 1, NULL, NULL, NULL, 1, 0, 0),
(90, 8, '10%', './images/cashback/6.png', './images/cashbackFond/6.jpg', 'grand pere', 'https://www.poulpeo.com/reductions-adidas.htm?cx={USERID}', 32, 48, 1, NULL, '2020-11-07 19:52:00', 'active', '', '2020-10-27 17:51:48', '', NULL, 'wsdsdsd', '10%', '&lt;h3&gt;Comment fonctionne le cashback AliExpress?&lt;/h3&gt;&lt;ul&gt;&lt;li&gt;- Le cashback est calcul&eacute; sur le montant HT et hors frais de port&lt;/li&gt;&lt;li&gt;- Remarque : pour que votre achat soit correctement enregistr&eacute;, vous dev', '<h3>Comment fonctionne le cashback AliExpress?</h3><ul><li>- Le cashback est calculÃ© sur le montant HT et hors frais de port</li><li>- Remarque : pour que votre achat soit correctement enregistrÃ©, vous devez accepter tous les cookies sur le site du marchand.</li><li>- Pas de cashback pour les achats effectuÃ©s auprÃ¨s de vendeurs non chinois</li><li>- Pas de cashback sur les livres et les cartes cadeaux</li><li>- Offre limitÃ©e Ã  20â‚¬ de cashback maximum par achat</li><li>- Pour que votre cashback soit validÃ© par le marchand, veillez Ã  bien confirmer la rÃ©ception de vos produits sur le site Aliexpress</li></ul>', '', '', '', '', '', '', NULL, 1, NULL, NULL, NULL, 3, 0, 0),
(91, 8, '', './images/cashback/7.png', './images/cashbackFond/7.jpg', 'veuro', 'https://www.poulpeo.com/reductions-adidas.htm?cx={USERID}', 32, 48, 1, NULL, '2020-12-05 05:30:00', 'active', '', '2020-11-01 03:29:55', '', NULL, 'sdsdsd', '', '&lt;p&gt;view_int&amp;nbsp;=&amp;nbsp;1&lt;/p&gt;', '<p>view_int&nbsp;=&nbsp;1</p>', '', 'http://view_int = 1', 'view_int = 1', 'view_int = 1', 'view_int = 1', '', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(92, 8, '12%', './images/cashback/8.jpg', './images/cashbackFond/8.jpg', 'CBCB', 'http://google.com?cx={USERID}', 32, 49, 1, NULL, '2020-11-25 05:56:00', 'active', '', '2020-11-16 03:55:18', '', NULL, 'BCBCBC', '12%', '12', '         12                           ', '', 'http://12', '12', '12', '12', '12', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(93, 8, '12&euro;', './images/cashback/12.jpg', './images/cashbackFond/9.jpg', 'papa', 'http://google.com?cx={USERID}', 32, 49, 1, NULL, '2020-11-27 05:57:00', 'active', '', '2020-11-16 03:56:14', '', NULL, 'MB', '12&euro;', 'asa', 'sa', '', 'http://as', 'as', 'as', '', 'sa', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(94, 8, '', './images/cashback/10.jpg', './images/cashbackFond/10.jpg', 'adssas', 'http://google.com?cx={USERID}', 32, 48, 1, NULL, '2020-12-03 06:12:00', 'active', '', '2020-11-16 04:11:48', '', NULL, 'sas', '', '', '    as                                ', '      a                              ', 'http://sa', '', 'sa', 'as', '', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(95, 8, '', './images/cashback/11.jpg', '', 'fhfhf', 'http://google.com?cx={USERID}', 32, 48, 1, NULL, '2020-11-25 06:16:00', 'active', '', '2020-11-16 04:16:03', '', NULL, 'hfh', '', 'kjkj', '          jkjkjk                          ', '    jjikjk                                ', 'http://jkjkj', 'kjkj', 'ljlklk', 'lklk', 'lklk', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(96, 0, '', './images/cashback/12.jpg', './images/cashbackFond/12.jpg', 'fbhfghf', 'http://google.com', 32, 48, 1, NULL, '2020-12-05 06:36:00', 'active', '', '2020-11-16 04:36:03', '', NULL, 'bvn', '', 'nvnv', '                    nvnv                ', '                    nv                ', 'http://nv', 'nv', 'nv', 'nv', 'nv', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(97, 8, '', './images/cashback/13.jpg', './images/cashbackFond/13.jpg', 'vbnvbnv', 'http://google.com?cx={USERID}', 32, 48, 1, NULL, '2020-12-03 06:37:00', 'active', '', '2020-11-16 04:36:42', '', NULL, 'bv', '', 'hfh', '                               hfhf     ', '                   hfhfh                ', 'http://hfh', 'hf', 'hfh', 'hf', 'h', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(98, 8, '', './images/cashback/14.jpg', './images/cashbackFond/14.jpg', 'vbnvbnv', 'http://google.com?cx={USERID}', 32, 48, 1, NULL, '2020-12-03 06:37:00', 'active', '', '2020-11-16 04:37:15', '', NULL, 'bv', '', 'hfh', '                               hfhf     ', '                   hfhfh                ', 'http://hfh', 'hf', 'hfh', 'hf', 'h', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(99, 8, '', './images/cashback/15.jpg', './images/cashbackFond/15.jpg', 'vbnvbnv', 'http://google.com?cx={USERID}', 32, 48, 1, NULL, '2020-12-03 06:37:00', 'active', '', '2020-11-16 04:37:29', '', NULL, 'bv', '', 'hfh', '                               hfhf     ', '                   hfhfh                ', 'http://hfh', 'hf', 'hfh', 'hf', 'h', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(100, 8, '', './images/cashback/16.jpg', './images/cashbackFond/16.jpg', 'vbnvbnv', 'http://google.com?cx={USERID}', 32, 48, 1, NULL, '2020-12-03 06:37:00', 'active', '', '2020-11-16 04:37:46', '', NULL, 'bv', '', 'hfh', '                               hfhf     ', '                   hfhfh                ', 'http://hfh', 'hf', 'hfh', 'hf', 'h', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(101, 8, '', './images/cashback/17.jpg', './images/cashbackFond/17.jpg', 'dtdte', 'http://google.com?cx={USERID}', 32, 48, 1, NULL, '2021-12-01 06:44:00', 'active', '1', '2020-11-16 04:44:26', '', NULL, 'te', '', 'dg', '                                 gd   ', '                      dtdg              ', 'http://gd', 'gd', 'dg', 'gd', 'gd', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(102, 8, '', './images/cashback/18.jpg', '', 'express', 'http://google.com?cx={USERID}', 32, 48, 1, NULL, '2020-11-25 00:00:00', 'active', '1', '2020-11-16 04:45:44', '', NULL, 'fs', '', 'fs', '                         fs           ', '             fs                       ', '', '', '', '', '', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(103, 8, '12&euro;', 'noimg.gif', './images/cashbackFond/20.jpg', 'ffffffffffffff', '', 32, 48, 1, NULL, '2020-12-06 06:56:00', 'active', '1', '2020-11-16 04:55:41', '', NULL, 'f', '12&euro;', 'yr', 'yr', 'ry', 'http://yr', 'yr', 'yryr', '', 'yr', NULL, 1, NULL, NULL, NULL, 0, 0, 0),
(104, 8, '', './images/cashback/20.jpg', './images/cashbackFond/20.jpg', 'mac book', 'http://?cx={USERID}', 32, 48, 1, NULL, '2020-12-04 08:29:00', 'active', '1', '2020-11-16 06:28:33', '', NULL, 'fghfgh', '', '12', '                             12       ', '           12                         ', 'http://12', '12', '12', '2', '12', NULL, 1, NULL, NULL, NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `cashbackengine_retailer_to_category`
--

CREATE TABLE `cashbackengine_retailer_to_category` (
  `category_id` int(20) NOT NULL,
  `retailer_id` int(20) NOT NULL,
  `category_on_top` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `cashbackengine_retailer_to_country`
--

CREATE TABLE `cashbackengine_retailer_to_country` (
  `id` int(11) NOT NULL,
  `retailer_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `cashbackengine_reviews`
--

CREATE TABLE `cashbackengine_reviews` (
  `review_id` int(11) NOT NULL,
  `retailer_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `review_title` varchar(250) DEFAULT NULL,
  `review` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `added` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cashbackengine_transactions`
--

CREATE TABLE `cashbackengine_transactions` (
  `transaction_id` int(11) NOT NULL,
  `reference_id` int(11) NOT NULL,
  `transaction_date` datetime NOT NULL,
  `transaction_amount` float NOT NULL,
  `status` varchar(255) NOT NULL,
  `transaction_commision` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `network_id` int(11) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `amount` float DEFAULT NULL,
  `retailer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `cashbackengine_users`
--

CREATE TABLE `cashbackengine_users` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `ip` varchar(200) DEFAULT NULL,
  `last_ip` varchar(255) NOT NULL,
  `status` varchar(200) DEFAULT NULL,
  `ref_id` varchar(255) DEFAULT NULL,
  `activation_key` varchar(200) DEFAULT NULL,
  `unsubscribe_key` varchar(200) DEFAULT NULL,
  `last_login` varchar(200) DEFAULT NULL,
  `login_count` varchar(200) DEFAULT NULL,
  `newsletter` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `country` int(11) NOT NULL,
  `auth_provider` text NOT NULL,
  `reg_source` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `chatbox`
--

CREATE TABLE `chatbox` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `Name_users` text NOT NULL,
  `message` text NOT NULL,
  `date_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `concours`
--

CREATE TABLE `concours` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `description` mediumtext NOT NULL,
  `dateDebut` datetime NOT NULL,
  `dateFin` datetime NOT NULL,
  `actif` int(11) NOT NULL,
  `gagnant1` varchar(250) NOT NULL,
  `gagnant2` varchar(250) NOT NULL,
  `gagnant3` varchar(250) NOT NULL,
  `gagnant4` varchar(250) NOT NULL,
  `gagnant5` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `concours`
--

INSERT INTO `concours` (`id`, `nom`, `description`, `dateDebut`, `dateFin`, `actif`, `gagnant1`, `gagnant2`, `gagnant3`, `gagnant4`, `gagnant5`) VALUES
(3, 'Concours Parrainage', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '', '', '', ''),
(4, 'Grand Offres', 'Coming soon...fgdfgdfgdfgdfg', '2018-08-17 20:58:00', '2018-08-30 18:00:00', 0, '0.00', '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Structure de la table `connectes`
--

CREATE TABLE `connectes` (
  `ip` varchar(250) NOT NULL,
  `timestamp` varchar(250) NOT NULL,
  `idUser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `connectes`
--

INSERT INTO `connectes` (`ip`, `timestamp`, `idUser`) VALUES
('37.166.86.110', '1605521709', 'dJlFW75BysbRk5tFjdG2bNe2R');

-- --------------------------------------------------------

--
-- Structure de la table `e_offers`
--

CREATE TABLE `e_offers` (
  `id` int(11) NOT NULL,
  `e_idoffre` varchar(50) NOT NULL,
  `e_nom` varchar(250) NOT NULL,
  `e_url` varchar(250) NOT NULL,
  `e_description` mediumtext NOT NULL,
  `e_description2` mediumtext NOT NULL,
  `e_pays` varchar(250) NOT NULL,
  `e_remuneration` decimal(15,2) NOT NULL DEFAULT '0.00',
  `e_montant` decimal(15,2) NOT NULL DEFAULT '0.00',
  `e_valid` int(10) NOT NULL DEFAULT '0',
  `e_actif` int(10) NOT NULL DEFAULT '0',
  `e_date` varchar(250) NOT NULL,
  `e_regie` varchar(250) NOT NULL,
  `e_annonceur` varchar(255) DEFAULT NULL,
  `e_quota` int(11) NOT NULL,
  `e_premium` int(11) NOT NULL DEFAULT '0',
  `e_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `e_offers`
--

INSERT INTO `e_offers` (`id`, `e_idoffre`, `e_nom`, `e_url`, `e_description`, `e_description2`, `e_pays`, `e_remuneration`, `e_montant`, `e_valid`, `e_actif`, `e_date`, `e_regie`, `e_annonceur`, `e_quota`, `e_premium`, `e_image`) VALUES
(1, 'IjQAoxvynwAyn1k5ByKTpLtG1g3mrv', 'grand Pere', 'http://www.googel.com', 'LatinAutor, LatinAutor -  ', 'LatinAutor, LatinAutor - SonyATV, LatinAutorPerf, Sony ATV Publishing, EMI Music Publishing, UNIAO BRASILEIRA DE EDITORAS DE MUSICA - UBEM, SOLAR Music Rights Management et 2 sociÃ©tÃ©s de gestion des droits LatinAutor, LatinAutor - SonyATV, LatinAutorPerf, Sony ATV Publishing, EMI Music Publishing, UNIAO BRASILEIRA DE EDITORAS DE MUSICA - UBEM, SOLAR Music Rights Management et 2 sociÃ©tÃ©s de gestion des droits ', '', '0.01', '0.01', 1, 1, '17/10/2020 Ã  23:24:15', 'jmvbhjmb', 'jlkjl', 3, 0, ' http://localhost/ddd/images/emailing/1.jpg'),
(2, 'Cv3SjXhOR2hAgWvY7YBvyYlf7W6gtO', 'fdsfasfsdf', 'hfgh', 'hfghfg', 'hfghfgh', '', '0.01', '0.01', 1, 1, '02/10/2020 Ã  23:46:45', ';kmmkl;k;l', 'jlkjl', 1, 0, 'http://localhost/ddd/images/emailing/2.jpg'),
(3, 'a8rEW7qfEDB8X3plLs2m2YcYU4aNcs', 'dsdsd', 'dsd', 'dsdsds', '', '', '0.01', '0.00', 1, 1, '19/10/2020 Ã  20:30:51', '', '', 2, 0, 'http://localhost/ddd/images/emailing/3.jpg'),
(4, 'VjUrdCubijm2wEsjgQRpjzB7aboLML', 'dsdsd', 'dsd', 'dsdsds', '', '', '0.01', '0.00', 1, 1, '16/10/2020 Ã  16:42:35', '', NULL, 2, 0, 'http://localhost/ddd/images/emailing/4.jpg'),
(5, 'Ic8cxjd9YSc8cUzUBWzWSuqnI6eBg1', 'dsdsd', 'dsd', 'dsdsds', '', '', '0.01', '0.00', 1, 1, '16/10/2020 Ã  16:43:14', '', NULL, 2, 0, 'http://localhost/ddd/images/emailing/5.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` mediumtext NOT NULL,
  `reponse` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id`, `question`, `reponse`) VALUES
(2, 'En quoi consistent les campagnes ?', 'Les missions sont des actions Ã  effectuer pour recevoir de l\'argent. Les campagnes peuvent te demander de :\r\nâ€¢Participer Ã  des tirages au sort\r\nâ€¢Participer Ã  des sondages\r\nâ€¢Jouer Ã  des jeux en ligne\r\nâ€¢S\'inscrire Ã  des communautÃ©s'),
(3, 'Combien de comptes membres sont autorisÃ©s ?', 'Un seul compte par personne est autorisÃ©.\r\nDes comptes membres supplÃ©mentaires n\'apportent aucun avantage, car les campagnes sont bloquÃ©es en fonction de l\'adresse IP, et non par compte membre.'),
(4, 'Parrainage et combien rapporte-t-il ?', 'Multi-cadeaux Ã  un systÃ¨me de Parrainage, oui. Vous gagnez 15% des gains de vos filleuls, cependant, les clics ne sont pas pris en compte dans le systÃ¨me. Vous pouvez recrutez des filleuls de diffÃ©rentes maniÃ¨res.'),
(5, 'Qui sont les filleuls ?', 'Les membres qui s\'inscrivent grÃ¢ce Ã  la publicitÃ© que tu as faite sont appelÃ©s des filleuls. Dans le menu &quot;Parrainage et filleul&quot;, tu trouveras plusieurs moyens d\'inviter des amis ou des visiteurs.\r\n\r\n'),
(6, 'Qu\'est-ce que le &quot;faking&quot;?', 'Le &quot;Faking&quot; est le fait de participer Ã  une campagne en utilisant de fausses informations personnelles dans le but de gagner plus d\'argent. Cela inclut les \r\nfausses informations, l\'usurpation d\'identitÃ©, ou le spam. Bien sÃ»r, ce comportement est interdit et sera puni par une suppression de compte et une remise Ã  zÃ©ro de son solde.'),
(7, 'Puis-je signaler un membre ou un site Web qui triche ?', 'Oui, contacte notre service assistance pour signaler ce genre de comportement.\r\nBien sÃ»r, nous traitons ta demande de maniÃ¨re strictement confidentielle !');

-- --------------------------------------------------------

--
-- Structure de la table `favoris_mission`
--

CREATE TABLE `favoris_mission` (
  `id` int(11) NOT NULL,
  `id_mission` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `favoris_mission`
--

INSERT INTO `favoris_mission` (`id`, `id_mission`, `id_user`) VALUES
(2, 'ylIz2IFXk4vuhkHtgmt9Mv4j3IHu1L', 1);

-- --------------------------------------------------------

--
-- Structure de la table `gagnants`
--

CREATE TABLE `gagnants` (
  `id` int(11) NOT NULL,
  `idUser` int(20) NOT NULL,
  `montant` decimal(15,2) NOT NULL,
  `type` varchar(250) NOT NULL,
  `code` varchar(250) NOT NULL,
  `categorie` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `dateSend` date NOT NULL,
  `etat` varchar(250) NOT NULL DEFAULT 'En attente',
  `view_gagnant` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gagnants`
--

INSERT INTO `gagnants` (`id`, `idUser`, `montant`, `type`, `code`, `categorie`, `date`, `dateSend`, `etat`, `view_gagnant`, `ip`) VALUES
(1, 4, '0.00', 'Virement Bancaire', '', 'Paiement', '16/10/2020 Ã  22:47:11', '0000-00-00', 'Valid&eacute;', 0, '::1'),
(2, 4, '0.00', 'Virement Bancaire', '', 'Paiement', '16/10/2020 Ã  22:47:19', '0000-00-00', 'Valid&eacute;', 0, '::1'),
(3, 4, '0.00', 'Virement Bancaire', '', 'Paiement', '16/10/2020 Ã  22:48:13', '2020-10-16', 'Valid&eacute;', 0, '::1'),
(4, 4, '1.00', 'Virement Bancaire', '', 'Paiement', '16/10/2020 Ã  22:49:12', '2020-10-16', 'Valid&eacute;', 0, '::1');

-- --------------------------------------------------------

--
-- Structure de la table `histo_cashback`
--

CREATE TABLE `histo_cashback` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `UserName` text NOT NULL,
  `idcashback` int(11) NOT NULL,
  `cashback_name` text NOT NULL,
  `renumeration` text NOT NULL,
  `ip` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `histo_cashback`
--

INSERT INTO `histo_cashback` (`id`, `idUser`, `UserName`, `idcashback`, `cashback_name`, `renumeration`, `ip`, `etat`, `date`) VALUES
(1, 1, '', 5, 'uber', '', '::1', 'Valid&eacute;', '2020-09-06 01:42:40'),
(2, 1, '', 5, 'uber', '10%', '::1', 'Valid&eacute;', '2020-09-06 01:43:17'),
(3, 1, '', 5, 'uber', '10%', '::1', 'Valid&eacute;', '2020-09-06 01:43:32'),
(4, 1, '4', 0, 'Fnac', '10%', '::1', 'Valid&eacute;', '2020-09-06 02:05:43'),
(5, 1, 'Ranaivomanana', 4, 'Fnac', '10%', '::1', 'Valid&eacute;', '2020-09-06 02:10:26'),
(6, 1, 'Ranaivomanana', 4, 'Fnac', '10%', '::1', 'Valid&eacute;', '2020-09-06 02:10:27'),
(7, 1, 'Ranaivomanana', 4, 'Fnac', '10%', '::1', 'Valid&eacute;', '2020-09-06 02:10:28'),
(8, 1, 'Ranaivomanana', 4, 'Fnac', '10%', '::1', 'Valid&eacute;', '2020-09-06 02:10:29'),
(9, 1, 'Ranaivomanana', 4, 'Fnac', '10%', '::1', 'Valid&eacute;', '2020-09-06 02:10:32'),
(10, 1, '4', 4, 'Fnac', '10%', '::1', 'Valid&eacute;', '2020-09-06 02:10:52'),
(11, 1, '4', 4, 'Fnac', '10%', '::1', 'Valid&eacute;', '2020-09-06 02:10:54'),
(12, 1, '4', 4, 'Fnac', '10%', '::1', 'Valid&eacute;', '2020-09-06 02:10:57'),
(13, 1, '4', 4, 'Fnac', '10%', '::1', 'Valid&eacute;', '2020-09-06 02:11:00'),
(14, 1, '', 4, 'Fnac', '10%', '::1', 'Valid&eacute;', '2020-09-06 02:11:43'),
(15, 1, '', 4, 'Fnac', '10%', '::1', 'Valid&eacute;', '2020-09-06 02:11:45'),
(16, 1, '', 4, 'Fnac', '10%', '::1', 'Valid&eacute;', '2020-09-06 02:11:47'),
(17, 1, '', 4, 'Fnac', '10%', '::1', 'Valid&eacute;', '2020-09-06 02:14:37'),
(18, 1, '', 4, 'Fnac', '10%', '::1', 'Valid&eacute;', '2020-09-06 02:14:40'),
(19, 1, '4', 0, 'Fnac', '10%', '::1', 'Valid&eacute;', '2020-09-06 02:16:25'),
(20, 1, '4', 0, 'Fnac', '10%', '::1', 'Valid&eacute;', '2020-09-06 02:16:53'),
(21, 1, '4', 0, 'Fnac', '10%', '::1', 'Valid&eacute;', '2020-09-06 02:16:57'),
(22, 1, 'Tahina', 4, 'Fnac', '10%', '::1', 'Valid&eacute;', '2020-09-06 02:17:26'),
(23, 1, 'Tahina', 10, 'cdiscount', '10%', '::1', 'Refus&eacute;', '2020-09-10 20:32:51'),
(24, 1, 'Tahina', 21, 'Crocs', '10%', '197.158.119.129', 'Refus&eacute;', '2020-09-11 19:06:29'),
(25, 23, 'Tahiana  ', 0, '', '', '197.158.119.140', 'Refus&eacute;', '2020-09-14 13:13:00'),
(26, 23, 'Tahiana  ', 11, 'Potagercity', '10%', '197.158.119.140', 'Refus&eacute;', '2020-09-14 13:36:41'),
(27, 23, 'Tahiana  ', 14, 'Bang Good', '10%', '197.158.119.141', 'Refus&eacute;', '2020-09-15 17:10:34'),
(28, 23, 'Tahiana  ', 5, 'uber', '10%', '197.158.119.141', 'Refus&eacute;', '2020-09-15 17:38:01'),
(29, 23, 'Tahiana  ', 5, 'uber', '10%', '197.158.119.141', 'Refus&eacute;', '2020-09-15 17:40:25'),
(30, 23, 'Tahiana   ', 2, 'fdhdfh', '10%', '197.158.119.150', 'Refus&eacute;', '2020-09-16 13:14:40'),
(32, 24, 'Anjanahary', 11, 'Potagercity', '10%', '::1', 'En attente', '2020-09-21 16:06:05'),
(33, 24, 'Anjanahary', 11, 'Potagercity', '10%', '::1', 'En attente', '2020-09-21 16:06:29'),
(34, 24, 'Anjanahary', 2, 'fdhdfh', '10%', '127.0.0.1', 'En attente', '2020-09-24 10:16:46');

-- --------------------------------------------------------

--
-- Structure de la table `histo_clics`
--

CREATE TABLE `histo_clics` (
  `id` int(11) NOT NULL,
  `idUser` varchar(50) NOT NULL,
  `idOffers` varchar(250) NOT NULL,
  `remuneration` decimal(15,3) NOT NULL,
  `date` varchar(250) NOT NULL,
  `ip` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `histo_clics`
--

INSERT INTO `histo_clics` (`id`, `idUser`, `idOffers`, `remuneration`, `date`, `ip`) VALUES
(1, '1', 'bmzFVkBHj8QaSlXOBsZ9b1VpZFSqSl', '0.020', '13/04/2018 Ã  23:10:18', '90.89.123.181'),
(2, '1', 'FcIQpHYJT63HUs3nVFW8kRHHT4uxF2', '0.200', '13/04/2018 Ã  23:10:21', '90.89.123.181'),
(3, '1', 'BDyrjgVu2iF6rYrwJClmPHhw6ScuiY', '0.200', '13/04/2018 Ã  23:10:24', '90.89.123.181'),
(4, '0', 'BDyrjgVu2iF6rYrwJClmPHhw6ScuiY', '0.200', '14/04/2018 Ã  13:23:09', '77.136.84.140'),
(5, '0', 'FcIQpHYJT63HUs3nVFW8kRHHT4uxF2', '0.200', '14/04/2018 Ã  13:45:10', '77.136.84.140'),
(6, '0', 'bmzFVkBHj8QaSlXOBsZ9b1VpZFSqSl', '0.020', '14/04/2018 Ã  13:45:19', '77.136.84.140'),
(7, '9', 'BDyrjgVu2iF6rYrwJClmPHhw6ScuiY', '0.200', '14/04/2018 Ã  13:50:47', '85.192.212.186'),
(8, '9', 'FcIQpHYJT63HUs3nVFW8kRHHT4uxF2', '0.200', '14/04/2018 Ã  13:50:59', '85.192.212.186'),
(9, '9', 'bmzFVkBHj8QaSlXOBsZ9b1VpZFSqSl', '0.020', '14/04/2018 Ã  13:51:04', '85.192.212.186'),
(10, 'nmtvVgi4dVZSmfPcseJt3Wtjh', 'BDyrjgVu2iF6rYrwJClmPHhw6ScuiY', '0.200', '14/04/2018 Ã  15:01:27', '81.254.64.247'),
(11, 'nmtvVgi4dVZSmfPcseJt3Wtjh', 'FcIQpHYJT63HUs3nVFW8kRHHT4uxF2', '0.200', '14/04/2018 Ã  15:01:30', '81.254.64.247'),
(12, 'nmtvVgi4dVZSmfPcseJt3Wtjh', 'bmzFVkBHj8QaSlXOBsZ9b1VpZFSqSl', '0.020', '14/04/2018 Ã  15:01:32', '81.254.64.247'),
(13, 'cVsSWpzmLvFm4r592Nkzbzki3', 'FcIQpHYJT63HUs3nVFW8kRHHT4uxF2', '0.200', '14/04/2018 Ã  16:24:45', '90.110.163.49'),
(14, 'cVsSWpzmLvFm4r592Nkzbzki3', 'BDyrjgVu2iF6rYrwJClmPHhw6ScuiY', '0.200', '14/04/2018 Ã  16:24:50', '90.110.163.49'),
(15, 'cVsSWpzmLvFm4r592Nkzbzki3', 'bmzFVkBHj8QaSlXOBsZ9b1VpZFSqSl', '0.020', '14/04/2018 Ã  16:24:56', '90.110.163.49'),
(16, 'c83LV7LJd9T8d2KY2TKNzmd7n', 'BDyrjgVu2iF6rYrwJClmPHhw6ScuiY', '0.200', '14/04/2018 Ã  19:24:27', '90.23.120.189'),
(17, 'c83LV7LJd9T8d2KY2TKNzmd7n', 'FcIQpHYJT63HUs3nVFW8kRHHT4uxF2', '0.200', '14/04/2018 Ã  19:24:41', '90.23.120.189'),
(18, 'c83LV7LJd9T8d2KY2TKNzmd7n', 'bmzFVkBHj8QaSlXOBsZ9b1VpZFSqSl', '0.020', '14/04/2018 Ã  19:24:50', '90.23.120.189'),
(19, 'nmtvVgi4dVZSmfPcseJt3Wtjh', 'BDyrjgVu2iF6rYrwJClmPHhw6ScuiY', '0.200', '15/04/2018 Ã  08:09:49', '90.45.180.131'),
(20, 'nmtvVgi4dVZSmfPcseJt3Wtjh', 'FcIQpHYJT63HUs3nVFW8kRHHT4uxF2', '0.200', '15/04/2018 Ã  08:09:52', '90.45.180.131'),
(21, 'nmtvVgi4dVZSmfPcseJt3Wtjh', 'bmzFVkBHj8QaSlXOBsZ9b1VpZFSqSl', '0.020', '15/04/2018 Ã  08:09:55', '90.45.180.131'),
(22, '0', 'BDyrjgVu2iF6rYrwJClmPHhw6ScuiY', '0.200', '15/04/2018 Ã  08:18:41', '77.136.15.3'),
(23, '0', 'FcIQpHYJT63HUs3nVFW8kRHHT4uxF2', '0.200', '15/04/2018 Ã  08:18:48', '77.136.15.3'),
(24, '0', 'bmzFVkBHj8QaSlXOBsZ9b1VpZFSqSl', '0.020', '15/04/2018 Ã  08:18:53', '77.136.15.3'),
(25, '9', 'BDyrjgVu2iF6rYrwJClmPHhw6ScuiY', '0.200', '15/04/2018 Ã  08:24:04', '85.192.212.214'),
(26, '9', 'FcIQpHYJT63HUs3nVFW8kRHHT4uxF2', '0.200', '15/04/2018 Ã  08:24:09', '85.192.212.214'),
(27, '9', 'bmzFVkBHj8QaSlXOBsZ9b1VpZFSqSl', '0.020', '15/04/2018 Ã  08:24:13', '85.192.212.214'),
(28, 'cVsSWpzmLvFm4r592Nkzbzki3', 'BDyrjgVu2iF6rYrwJClmPHhw6ScuiY', '0.200', '15/04/2018 Ã  08:48:45', '81.254.137.127'),
(29, 'cVsSWpzmLvFm4r592Nkzbzki3', 'FcIQpHYJT63HUs3nVFW8kRHHT4uxF2', '0.200', '15/04/2018 Ã  08:48:48', '81.254.137.127'),
(30, 'cVsSWpzmLvFm4r592Nkzbzki3', 'bmzFVkBHj8QaSlXOBsZ9b1VpZFSqSl', '0.020', '15/04/2018 Ã  08:48:50', '81.254.137.127'),
(31, 'uBClJtb3dZ2JHtfCPOLb2PDUE', 'BDyrjgVu2iF6rYrwJClmPHhw6ScuiY', '0.200', '15/04/2018 Ã  09:10:08', '37.174.73.16'),
(32, 'uBClJtb3dZ2JHtfCPOLb2PDUE', 'FcIQpHYJT63HUs3nVFW8kRHHT4uxF2', '0.200', '15/04/2018 Ã  09:10:25', '37.174.73.16'),
(33, 'uBClJtb3dZ2JHtfCPOLb2PDUE', 'bmzFVkBHj8QaSlXOBsZ9b1VpZFSqSl', '0.020', '15/04/2018 Ã  09:10:32', '37.174.73.16'),
(34, 'c83LV7LJd9T8d2KY2TKNzmd7n', 'BDyrjgVu2iF6rYrwJClmPHhw6ScuiY', '0.200', '15/04/2018 Ã  09:29:43', '90.23.120.189'),
(35, 'c83LV7LJd9T8d2KY2TKNzmd7n', 'FcIQpHYJT63HUs3nVFW8kRHHT4uxF2', '0.200', '15/04/2018 Ã  09:29:52', '90.23.120.189'),
(36, 'c83LV7LJd9T8d2KY2TKNzmd7n', 'bmzFVkBHj8QaSlXOBsZ9b1VpZFSqSl', '0.020', '15/04/2018 Ã  09:29:58', '90.23.120.189'),
(37, 'CdIPH8jqpAaWBbXdkzlh2tAu6', 'BDyrjgVu2iF6rYrwJClmPHhw6ScuiY', '0.200', '15/04/2018 Ã  10:31:06', '176.134.253.108'),
(38, 'CdIPH8jqpAaWBbXdkzlh2tAu6', 'bmzFVkBHj8QaSlXOBsZ9b1VpZFSqSl', '0.020', '15/04/2018 Ã  10:31:13', '176.134.253.108'),
(39, 'CdIPH8jqpAaWBbXdkzlh2tAu6', 'FcIQpHYJT63HUs3nVFW8kRHHT4uxF2', '0.200', '15/04/2018 Ã  10:31:17', '176.134.253.108'),
(40, '1', 'BDyrjgVu2iF6rYrwJClmPHhw6ScuiY', '0.200', '15/04/2018 Ã  15:08:40', '90.89.123.181'),
(41, 'ddy8dTnvRM1LRVMZLPuv5Snpz', '', '0.000', '03/11/2018 Ã  18:05:56', '78.193.222.129');

-- --------------------------------------------------------

--
-- Structure de la table `histo_offers`
--

CREATE TABLE `histo_offers` (
  `id` int(11) NOT NULL,
  `idUser` varchar(50) NOT NULL,
  `offerwall` varchar(250) NOT NULL,
  `idt` varchar(250) NOT NULL,
  `regie` varchar(250) NOT NULL,
  `remuneration` decimal(20,6) NOT NULL DEFAULT '0.000000',
  `date` date NOT NULL,
  `dateUsTime` datetime NOT NULL,
  `data` varchar(250) NOT NULL,
  `etat` varchar(250) NOT NULL DEFAULT 'En cours',
  `ip` varchar(250) NOT NULL,
  `vu` int(11) NOT NULL DEFAULT '0',
  `vu_header` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `histo_offers`
--

INSERT INTO `histo_offers` (`id`, `idUser`, `offerwall`, `idt`, `regie`, `remuneration`, `date`, `dateUsTime`, `data`, `etat`, `ip`, `vu`, `vu_header`) VALUES
(10, 'dJlFW75BysbRk5tFjdG2bNe2R', 'emailing', 'dsdsd', '', '0.010000', '2020-10-27', '2020-10-27 01:45:28', 'a8rEW7qfEDB8X3plLs2m2YcYU4aNcs', 'En cours', '::1', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `livredor`
--

CREATE TABLE `livredor` (
  `id` int(11) NOT NULL,
  `nbr_start` int(11) NOT NULL DEFAULT '0',
  `nom_user` text NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  `statut` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `livredor`
--

INSERT INTO `livredor` (`id`, `nbr_start`, `nom_user`, `message`, `date`, `statut`) VALUES
(14, 4, 'Ranaivomanana', 'Vous aimez notre site ou vous souhaitez contribuer &agrave; son am&eacute;lioration ?\r\nN\'h&eacute;sitez pas &agrave; nous le faire savoir en remplissant le Livre d\'or.', '2020-09-11 13:29:46', 1),
(15, 4, 'Ranaivomanana', 'Vous aimez notre site ou vous souhaitez contribuer &agrave; son am&eacute;lioration ?\r\nN\'h&eacute;sitez pas &agrave; nous le faire savoir en remplissant le Livre d\'or.', '2020-09-11 13:29:55', 1),
(16, 4, 'Ranaivomanana', 'Vous aimez notre site ou vous souhaitez contribuer &agrave; son am&eacute;lioration ?\r\nN\'h&eacute;sitez pas &agrave; nous le faire savoir en remplissant le Livre d\'or', '2020-09-11 13:30:01', 1),
(17, 3, 'Ranaivomanana', 'Vous aimez notre site ou vous souhaitez contribuer &agrave; son am&eacute;lioration ?\r\nN\'h&eacute;sitez pas &agrave; nous le faire savoir en remplissant le Livre d\'or.', '2020-09-11 13:30:07', 1),
(18, 5, 'Ranaivomanana', 'Vous aimez notre site ou vous souhaitez contribuer &agrave; son am&eacute;lioration ?\r\nN\'h&eacute;sitez pas &agrave; nous le faire savoir en remplissant le Livre d\'or.', '2020-09-11 13:41:23', 1),
(19, 5, 'Ranaivomanana', 'Vous aimez notre site ou vous souhaitez contribuer &agrave; son am&eacute;lioration ?\r\nN\'h&eacute;sitez pas &agrave; nous le faire savoir en remplissant le Livre d\'or.', '2020-09-11 13:41:26', 1),
(20, 4, 'Ranaivomanana', 'Vous aimez notre site ou vous souhaitez contribuer &agrave; son am&eacute;lioration ?\r\nN\'h&eacute;sitez pas &agrave; nous le faire savoir en remplissant le Livre d\'or.', '2020-09-11 13:41:29', 1),
(21, 3, 'Ranaivomanana', 'Vous aimez notre site ou vous souhaitez contribuer &agrave; son am&eacute;lioration ?\r\nN\'h&eacute;sitez pas &agrave; nous le faire savoir en remplissant le Livre d\'or.', '2020-09-11 13:41:33', 1),
(22, 4, 'Ranaivomanana', 'Vous aimez notre site ou vous souhaitez contribuer &agrave; son am&eacute;lioration ?\r\nN\'h&eacute;sitez pas &agrave; nous le faire savoir en remplissant le Livre d\'or.', '2020-09-11 13:41:37', 1),
(23, 4, 'Ranaivomanana', 'Vous aimez notre site ou vous souhaitez contribuer &agrave; son am&eacute;lioration ?\r\nN\'h&eacute;sitez pas &agrave; nous le faire savoir en remplissant le Livre d\'or.', '2020-09-11 13:41:40', 1),
(24, 4, 'Ranaivomanana', 'Vous aimez notre site ou vous souhaitez contribuer &agrave; son am&eacute;lioration ?\r\nN\'h&eacute;sitez pas &agrave; nous le faire savoir en remplissant le Livre d\'or.', '2020-09-11 13:41:43', 1),
(25, 3, 'Ranaivomanana', 'Vous aimez notre site ou vous souhaitez contribuer &agrave; son am&eacute;lioration ?\r\nN\'h&eacute;sitez pas &agrave; nous le faire savoir en remplissant le Livre d\'or.', '2020-09-11 13:41:46', 1),
(26, 6, 'Ranaivomanana   ', 'sdfdsfdsfsdfds', '2020-09-12 19:06:37', 1),
(27, 0, 'Sasasa         ', '                                                        gdgdgdg', '2020-10-19 20:23:45', 1);

-- --------------------------------------------------------

--
-- Structure de la table `mail_emailling`
--

CREATE TABLE `mail_emailling` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `emailling` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mail_emailling`
--

INSERT INTO `mail_emailling` (`id`, `nom`, `emailling`) VALUES
(0, 'tahiana', 'sarobisasasdyalliance@dddd.com'),
(0, 'sadada@fsfs.fs', 'sadada@fsfs.fs'),
(0, 'dgsdgsd', 'sarobidyalliance@gmail.com'),
(0, 'sadad', 'sasa@fd.bo'),
(0, 'sasasa', 'sarosasabidyalliance@outlook.com'),
(0, 'sarobidyalliace@outlook.com', 'sarobidyalliance@outlook.com'),
(0, 'sfgsdg', 'fsdsdsffsf@fs.gg'),
(0, 'fdsfasfsdf', 'sarobidsssyalliance@outlook.com'),
(0, 'sarobidyalliace@outlook.com', 'sarobisdsdsddyalliace@outlook.com');

-- --------------------------------------------------------

--
-- Structure de la table `marque_magasin`
--

CREATE TABLE `marque_magasin` (
  `id` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `name_marque` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `marque_magasin`
--

INSERT INTO `marque_magasin` (`id`, `id_categorie`, `name_marque`) VALUES
(5, 39, 'apple'),
(6, 39, 'sumsung'),
(7, 39, 'huawei'),
(8, 39, 'LG');

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

CREATE TABLE `messagerie` (
  `id` int(11) NOT NULL,
  `id2` varchar(30) NOT NULL,
  `titre` varchar(300) NOT NULL,
  `message` mediumtext NOT NULL,
  `user` varchar(250) NOT NULL,
  `user2` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `minute` varchar(50) NOT NULL,
  `lu` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messagerie`
--

INSERT INTO `messagerie` (`id`, `id2`, `titre`, `message`, `user`, `user2`, `date`, `minute`, `lu`) VALUES
(1, 'oCb1uAFEYV4ezgi', 'salut', 'sa va mr pepy', 'Timothee Duda', 'Jeanfrancois Blanvillin', '09/11/2018 Ã  22:05:59', '', 1),
(2, '1fNFhuuambQTEAu', 'salut', 'salut', 'Timothee Duda', 'CEDRIC BADJAH', '09/11/2018 Ã  22:23:28', '', 1),
(3, 'ai4HYeLJwhLEE4q', 'salut', 'salut', 'Timothee Duda', 'CEDRIC BADJAH', '09/11/2018 Ã  23:24:48', '', 1),
(4, 'c6EwfvbrIuZUgxe', 'salut', 'salut', 'Timothee Duda', 'CEDRIC BADJAH', '09/11/2018 Ã  23:28:39', '', 1),
(5, 'w6QOyzfG7tjOdnM', 'site', 'agrandi la police du captcha on voie rien lol', 'Jeanfrancois Blanvillin', 'Timothee Duda', '10/11/2018 Ã  11:10:46', '', 1),
(6, 'YUjK5pufpT8Lram', 'offertoro', 'tu ces d\'ou Ã§a vient pour offertoro moi j\'ai fait que 3 sÃ©rie cette nuit avec 1 heure entre chaque sÃ©rie ', 'Paule Basset', 'Timothee Duda', '22/11/2018 Ã  17:49:10', '', 1),
(7, 'F5ztZwuMh9YAnOm', 'fermer mon compte svp !!!!!', 'fermer le compte svp', 'Frederic Bedel', 'Jonathan Moreau', '22/12/2018 Ã  01:27:27', '', 1),
(8, 'CBQ46X29mCQto57', 'fhfghfghfg', 'fhfghgfhgfhgfhfgh', 'Xavier Richard', 'Timothee Duda', '08/08/2019 Ã  14:45:30', '', 0),
(9, '8FVNpXcJdY8BvBR', 'xfdgdfgfdgdfg', 'ggdfgfdgdfgfdg', 'TimotÃ©e   Dudda  ', 'Esther  Choux', '09/08/2019 Ã  17:28:12', '', 0),
(10, '', 'sdsqdqsdsq', 'dqsdqsdsqdqsd', 'Ranaivomanana    Tahina   ', 'Lisa  Leroy ', '12/09/2020 Ã  19:06:05', '', 0),
(11, '', 'adsads', 'mnmnmn', 'Ranaivomana    Tahiana   ', 'RANAIVOMANANA Vololoniriana Anjanahary', '16/09/2020 à 10:36:54', '', 0),
(12, '', 'cbvcbcbc', 'bcbcb', 'RANAIVOMANANA Vololoniriana Anjanahary', 'Timothee Duda', '20/09/2020 Ã  21:56:27', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `messagerie_all`
--

CREATE TABLE `messagerie_all` (
  `id` int(11) NOT NULL,
  `id_send` int(11) NOT NULL,
  `id_recive` int(11) NOT NULL,
  `titre_text` text NOT NULL,
  `message_text` text NOT NULL,
  `id_response` int(11) NOT NULL,
  `message_lu` int(11) NOT NULL DEFAULT '0',
  `date_time_publish` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messagerie_all`
--

INSERT INTO `messagerie_all` (`id`, `id_send`, `id_recive`, `titre_text`, `message_text`, `id_response`, `message_lu`, `date_time_publish`) VALUES
(1, 24, 24, 'sarobidyalliance@outlook.com', 'sarobidyalliance@outlook.com\r\n                        ', 0, 1, '2020-09-23 20:12:08'),
(2, 24, 24, 'adasd', 'sdsadasd\r\n                        ', 0, 1, '2020-09-23 20:12:16'),
(15, 24, 24, 'adasd', 'bhcfbhcvbh', 2, 0, '2020-09-23 21:31:18'),
(16, 24, 24, 'adasd', 'dfghdfhdfhfdh', 2, 0, '2020-09-23 21:31:36'),
(17, 24, 24, 'adasd', 'hfdhdfhfdhfdhdf', 2, 0, '2020-09-23 21:32:44'),
(18, 24, 24, 'sarobidyalliance@outlook.com', 'fsdfdsf', 1, 0, '2020-09-23 21:33:56'),
(19, 24, 24, 'adasd', 'vcxvxcv', 2, 0, '2020-09-23 21:34:42'),
(20, 24, 24, 'adasd', 'scsacs', 2, 0, '2020-09-23 21:35:18'),
(21, 24, 24, 'adasd', 'asdasdasdasd', 2, 0, '2020-09-23 21:35:35'),
(22, 24, 24, 'adasd', 'asdasd', 2, 0, '2020-09-23 21:36:16'),
(23, 24, 24, 'adasd', 'fsaasf', 2, 0, '2020-09-23 21:36:51'),
(24, 24, 24, 'adasd', 'fdhdfhdfh', 2, 0, '2020-09-23 21:37:33'),
(25, 24, 24, 'adasd', 'gjfg', 2, 0, '2020-09-23 21:38:12'),
(26, 24, 24, 'adasd', 'gjfg', 2, 0, '2020-09-23 21:38:39'),
(27, 24, 24, 'adasd', 'gjfg', 2, 0, '2020-09-23 21:38:53'),
(28, 24, 24, 'adasd', 'gjfg', 2, 0, '2020-09-23 21:39:02'),
(29, 24, 24, 'adasd', 'gjfg', 2, 0, '2020-09-23 21:40:14'),
(30, 24, 24, 'adasd', 'gjfg', 2, 0, '2020-09-23 21:40:56'),
(31, 24, 24, 'adasd', 'gjfg', 2, 0, '2020-09-23 21:41:00'),
(32, 24, 24, 'adasd', 'dgdgdfg', 2, 0, '2020-09-23 21:41:36'),
(33, 24, 24, 'adasd', 'dgdfgdfgdfg', 2, 0, '2020-09-23 21:41:42'),
(34, 24, 24, 'adasd', 'gdfgdgdfgf', 2, 0, '2020-09-23 21:46:51'),
(35, 24, 24, 'sarobidyalliance@outlook.com', 'bn,.bjbl.bnj', 1, 0, '2020-09-23 21:47:00'),
(36, 24, 24, 'sarobidyalliance@outlook.com', 'bvcbcvbvc', 1, 0, '2020-09-23 21:53:06'),
(37, 24, 24, 'adasd', 'gdfgdfg', 2, 0, '2020-09-23 22:09:18'),
(38, 24, 24, 'adasd', 'vx', 2, 0, '2020-10-13 20:26:35'),
(39, 24, 24, 'sarobidyalliance@outlook.com', 'cbcvbc', 1, 0, '2020-10-13 20:35:19');

-- --------------------------------------------------------

--
-- Structure de la table `newletter`
--

CREATE TABLE `newletter` (
  `id` int(11) NOT NULL,
  `newLetter_email` text NOT NULL,
  `newLetter_prenom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `newletter`
--

INSERT INTO `newletter` (`id`, `newLetter_email`, `newLetter_prenom`) VALUES
(1, 'sasasa@es.dsds', 'Sasasa'),
(2, 'sarobidyalliance@outlook.com', 'Sasasa'),
(3, 'sarobidyalliance@gmail.com', 'Sasasa'),
(4, 'xzxsa@ds.ds', 'Sasasa'),
(5, 'asasa!@sfsfs.fs', 'Z'),
(6, 'asasa@asdasa.com', 'Sa'),
(7, 'sarobisasasdyalliance@dddd.com', 'Wsa'),
(8, 'sadada@fsfs.fs', 'Sxas'),
(9, 'sasa@da.dd', ''),
(10, 'x_sandz_x_@outlook.com', ''),
(11, 'fochsy0816@gmail.com', '');

-- --------------------------------------------------------

--
-- Structure de la table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `idoffre` varchar(50) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `description` mediumtext NOT NULL,
  `pays` varchar(250) NOT NULL,
  `remuneration` decimal(15,2) NOT NULL DEFAULT '0.00',
  `valid` int(10) NOT NULL DEFAULT '0',
  `actif` int(10) NOT NULL DEFAULT '0',
  `date` varchar(250) NOT NULL,
  `quota` int(11) NOT NULL,
  `premium` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `offers`
--

INSERT INTO `offers` (`id`, `idoffre`, `nom`, `url`, `description`, `pays`, `remuneration`, `valid`, `actif`, `date`, `quota`, `premium`, `image`) VALUES
(1, 'RGSMWQjbNOIBsN6Z5PFlrdsMe9CbbW', 'grand pere pi', 'https://www.google1.com,https://www.google2.com,https://www.google3.com', 'jgg', 'MG', '0.01', 1, 1, '26/10/2020 Ã  03:12:27', 3, 0, '../images/missions/87UNHSN7UgFbEzCacVghRXt8obthAG25I2a.png'),
(2, 'ylIz2IFXk4vuhkHtgmt9Mv4j3IHu1L', 'Bidyss', 'https://www.google.com,https://www.google.com,https://www.google.com,https://www.google.com', 'sasasasa', 'MG', '0.02', 1, 1, '26/10/2020 Ã  03:11:59', 4, 1, '../images/missions/PpraSNK1OdTI9BXKxhEALbfQxsYsAB2FZO5.png'),
(3, 'MoE6hSbWamjQwUTnaATc9OLNZGRyTv', 'dada', 'https://www.google.com,https://www.google.com,https://www.google.com,https://www.google.com,https://www.google.com', 'sasasasa', 'MG', '0.04', 1, 1, '26/10/2020 Ã  03:12:18', 5, 0, '../images/missions/7dQQ3ASSw7poLM8gDPwHV6ojX5q6nwgXiW8.png');

-- --------------------------------------------------------

--
-- Structure de la table `offers_clics`
--

CREATE TABLE `offers_clics` (
  `id` int(11) NOT NULL,
  `idoffre` varchar(50) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `pays` varchar(250) NOT NULL,
  `remuneration` decimal(15,3) NOT NULL,
  `actif` int(10) NOT NULL,
  `date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `offers_clics`
--

INSERT INTO `offers_clics` (`id`, `idoffre`, `nom`, `url`, `pays`, `remuneration`, `actif`, `date`) VALUES
(1, 'BDyrjgVu2iF6rYrwJClmPHhw6ScuiY', 'FHGFHF', 'http://afflight.postaffiliatepro.com/scripts/c2q2a879kk?a_aid=cameron12300&a_bid=b1a330f2&data1=#IDM', 'fr', '0.200', 1, '13/04/2018 Ã  22:56:06'),
(2, 'FcIQpHYJT63HUs3nVFW8kRHHT4uxF2', 'gfgfd', 'http://afflight.postaffiliatepro.com/scripts/c2q2a879kk?a_aid=cameron12300&a_bid=b1a330f2&data1=#IDM', 'fr', '0.200', 0, '13/04/2018 Ã  22:58:12'),
(3, 'bmzFVkBHj8QaSlXOBsZ9b1VpZFSqSl', 'roro', 'http://afflight.postaffiliatepro.com/scripts/c2q2a879kk?a_aid=cameron12300&a_bid=2dba7b2a&data1=#IDM', 'fr', '0.020', 0, '13/04/2018 Ã  22:58:22');

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `contenu` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pages`
--

INSERT INTO `pages` (`id`, `nom`, `contenu`) VALUES
(1, 'Mentions l&eacute;©gales', '\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `parrainage`
--

CREATE TABLE `parrainage` (
  `id` int(11) NOT NULL,
  `inscription` float NOT NULL,
  `ami` float NOT NULL,
  `commission` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `parrainage`
--

INSERT INTO `parrainage` (`id`, `inscription`, `ami`, `commission`) VALUES
(1, 5, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tchat`
--

CREATE TABLE `tchat` (
  `id` int(11) NOT NULL,
  `time` text NOT NULL,
  `idUser` text NOT NULL,
  `message` text NOT NULL,
  `date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tchat`
--

INSERT INTO `tchat` (`id`, `time`, `idUser`, `message`, `date`) VALUES
(88, '2020-09-23 15:48:52', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'ncvnvb', '23/09/2020 Ã  15:48'),
(89, '2020-09-23 15:52:40', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'sadsadsaasdsa', '23/09/2020 Ã  15:52'),
(90, '2020-09-23 15:55:14', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'xdcdsc', '23/09/2020 Ã  15:55'),
(91, '2020-09-23 15:58:54', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'gbfcbhcvbn', '23/09/2020 Ã  15:58'),
(92, '2020-09-23 16:01:08', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'gdfgfd', '23/09/2020 Ã  16:01'),
(93, '2020-09-23 16:12:43', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'vnmvbmnbv', '23/09/2020 Ã  16:12'),
(94, '2020-09-23 16:12:48', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'nnn', '23/09/2020 Ã  16:12'),
(95, '2020-09-23 16:12:58', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'gggggggggggg', '23/09/2020 Ã  16:12'),
(96, '2020-09-23 16:13:00', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'ggggggg', '23/09/2020 Ã  16:13'),
(97, '2020-09-23 16:13:02', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'ggg', '23/09/2020 Ã  16:13'),
(98, '2020-09-23 16:13:04', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'gggg', '23/09/2020 Ã  16:13'),
(99, '2020-09-23 16:18:21', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'vcvc', '23/09/2020 Ã  16:18'),
(100, '2020-09-23 16:18:29', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'vcvcvc', '23/09/2020 Ã  16:18'),
(101, '2020-09-23 16:27:02', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'dffd', '23/09/2020 Ã  16:27'),
(102, '2020-09-23 16:29:42', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'hjkhjk', '23/09/2020 Ã  16:29'),
(103, '2020-09-23 16:30:03', 'cAN9mP9fOTslHbLVFMhbf5cGW', '\'kl;\'l;\'', '23/09/2020 Ã  16:30'),
(104, '2020-09-23 17:00:13', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'dfgdsg', '23/09/2020 Ã  17:00'),
(105, '2020-09-23 17:00:17', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'p;kl;kl', '23/09/2020 Ã  17:00'),
(106, '2020-09-23 17:00:19', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'kl;k;', '23/09/2020 Ã  17:00'),
(107, '2020-09-23 17:08:38', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'gvdfgvdfgv', '23/09/2020 Ã  17:08'),
(108, '2020-09-23 17:08:45', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'fgbdfgbfhbgcfvnbvbnvb', '23/09/2020 Ã  17:08'),
(109, '2020-09-23 17:12:19', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'cvxcvbcbcvb', '23/09/2020 Ã  17:12'),
(110, '2020-09-23 17:16:31', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'ddxfvdxvfdx', '23/09/2020 Ã  17:16'),
(111, '2020-09-23 17:16:54', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'kmhnk', '23/09/2020 Ã  17:16'),
(112, '2020-09-23 17:40:09', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'sxdasdxas', '23/09/2020 Ã  17:40'),
(113, '2020-09-23 17:40:47', 'cAN9mP9fOTslHbLVFMhbf5cGW', 'cxcxcx', '23/09/2020 Ã  17:40'),
(114, '2020-10-16 13:01:31', 'WR8LIzlE9eRBS7lLCYKHqkMXX', 'dada', '16/10/2020 Ã  13:01'),
(115, '2020-10-31 09:48:55', 'dJlFW75BysbRk5tFjdG2bNe2R', 'gdgdgdg', '31/10/2020 Ã  09:48'),
(116, '2020-10-31 10:03:59', 'dJlFW75BysbRk5tFjdG2bNe2R', 'sdsds', '31/10/2020 Ã  10:03');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `hashId` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mdp` varchar(250) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `adresse` text NOT NULL,
  `ville` varchar(250) NOT NULL,
  `codePostal` varchar(50) NOT NULL,
  `pays` varchar(250) NOT NULL,
  `pmessage` varchar(3000) NOT NULL,
  `euros` decimal(20,6) NOT NULL,
  `euros_histo` decimal(15,2) NOT NULL DEFAULT '0.00',
  `ip` varchar(250) NOT NULL,
  `actif` int(10) NOT NULL,
  `level` int(15) NOT NULL DEFAULT '1',
  `premium` int(11) NOT NULL DEFAULT '0',
  `idParrain` int(11) NOT NULL,
  `eurosParrain` decimal(15,3) NOT NULL,
  `barrePrcnt` decimal(15,2) NOT NULL,
  `barrePrcntNb` int(15) NOT NULL,
  `banni` int(10) NOT NULL,
  `banni_chat` int(10) NOT NULL,
  `iban` varchar(250) NOT NULL,
  `swift` varchar(250) NOT NULL,
  `paypal` varchar(250) NOT NULL,
  `skrill` varchar(250) NOT NULL,
  `code_verif` varchar(50) NOT NULL,
  `code_verif_date` varchar(250) NOT NULL,
  `ident_recto` text NOT NULL,
  `ident_verso` text NOT NULL,
  `ident_verif` int(12) NOT NULL,
  `datelastco` date NOT NULL,
  `ticketTombola` int(12) NOT NULL DEFAULT '0',
  `news` int(11) NOT NULL,
  `view_ident_verf` int(11) NOT NULL DEFAULT '0',
  `view_message_notif` int(11) NOT NULL DEFAULT '0',
  `view_bani_notif` int(11) NOT NULL DEFAULT '0',
  `date_Inscription` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `hashId`, `email`, `mdp`, `nom`, `prenom`, `adresse`, `ville`, `codePostal`, `pays`, `pmessage`, `euros`, `euros_histo`, `ip`, `actif`, `level`, `premium`, `idParrain`, `eurosParrain`, `barrePrcnt`, `barrePrcntNb`, `banni`, `banni_chat`, `iban`, `swift`, `paypal`, `skrill`, `code_verif`, `code_verif_date`, `ident_recto`, `ident_verso`, `ident_verif`, `datelastco`, `ticketTombola`, `news`, `view_ident_verf`, `view_message_notif`, `view_bani_notif`, `date_Inscription`) VALUES
(1, 'dJlFW75BysbRk5tFjdG2bNe2R', 'sarobidyalliance@outlook.com', '9093ba71786c4eb87bcd0c13ec9367a584c280f8', 'Bidy         ', 'Sasasa         ', 'gdgd', 'gdgd', 'dggd', 'grand pere ', '', '140.100000', '140.24', '41.204.110.145', 1, 99, 1, 0, '0.000', '0.95', 0, 0, 0, 'adad', 'da', 'dada', 'da', '1', '2020-10-23', 'images/identites/zINKjMbNo4ER4Z8h3nxQCMlCMvWPxYWCiyG.png', 'images/identites/3n1OVKgC4JyZIN7sY6w2KeUtOoLB6tQ4wnn.png', 1, '0000-00-00', 19, 1, 0, 0, 0, '2020-10-16');

-- --------------------------------------------------------

--
-- Structure de la table `users_infos`
--

CREATE TABLE `users_infos` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `sexe` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `birth` varchar(255) NOT NULL,
  `postal` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `users_infos`
--

INSERT INTO `users_infos` (`id`, `idUser`, `sexe`, `name`, `first_name`, `birth`, `postal`, `email`, `ip`, `created_at`) VALUES
(1, 1, '', '', '', '', '', '', '', '2020-11-15 22:37:59'),
(2, 1, '', '', '', '', '', '', '', '2020-11-15 22:38:05'),
(3, 1, 'jlkj', '', '', '', '', '', '', '2020-11-15 22:44:58'),
(4, 1, 'jlkj', '', '', '', '', '', '', '2020-11-15 22:45:31'),
(5, 1, 'homme', '', '', '', '', '', '', '2020-11-15 22:46:07'),
(6, 1, 'homme', 'Ssa', 'Sa', '', '101', 'sarobidyalliance@outlook.com', '::1', '2020-11-15 22:47:24'),
(7, 1, 'homme', 'Sa', 'Sa', '', '101', 'sarobidyalliance@outlook.com', '::1', '2020-11-15 22:48:10'),
(8, 1, 'homme', 'Sasa', 'Sasas', '', '101', 'sarobidyalliance@outlook.com', '::1', '2020-11-15 22:49:02'),
(9, 1, 'homme', 'Ds', 'Ds', '', '101', 'sarobidyalliancdsdsde@outlook.com', '197.158.119.140', '2020-11-16 10:56:47');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis_cashback`
--
ALTER TABLE `avis_cashback`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bannier`
--
ALTER TABLE `bannier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bonuslogin`
--
ALTER TABLE `bonuslogin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `boutique`
--
ALTER TABLE `boutique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `boutiquecategorie`
--
ALTER TABLE `boutiquecategorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `boutiquemontant`
--
ALTER TABLE `boutiquemontant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cashbackengine_affnetworks`
--
ALTER TABLE `cashbackengine_affnetworks`
  ADD PRIMARY KEY (`network_id`);

--
-- Index pour la table `cashbackengine_cashabck`
--
ALTER TABLE `cashbackengine_cashabck`
  ADD KEY `id` (`id`);

--
-- Index pour la table `cashbackengine_categories`
--
ALTER TABLE `cashbackengine_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Index pour la table `cashbackengine_clickhistory`
--
ALTER TABLE `cashbackengine_clickhistory`
  ADD PRIMARY KEY (`click_id`);

--
-- Index pour la table `cashbackengine_countries`
--
ALTER TABLE `cashbackengine_countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Index pour la table `cashbackengine_coupons`
--
ALTER TABLE `cashbackengine_coupons`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Index pour la table `cashbackengine_favorites`
--
ALTER TABLE `cashbackengine_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cashbackengine_reports`
--
ALTER TABLE `cashbackengine_reports`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cashbackengine_retailers`
--
ALTER TABLE `cashbackengine_retailers`
  ADD PRIMARY KEY (`retailer_id`);

--
-- Index pour la table `cashbackengine_reviews`
--
ALTER TABLE `cashbackengine_reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Index pour la table `cashbackengine_transactions`
--
ALTER TABLE `cashbackengine_transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Index pour la table `cashbackengine_users`
--
ALTER TABLE `cashbackengine_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `chatbox`
--
ALTER TABLE `chatbox`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `concours`
--
ALTER TABLE `concours`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `e_offers`
--
ALTER TABLE `e_offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `e_pays` (`e_pays`),
  ADD KEY `e_actif` (`e_actif`),
  ADD KEY `e_nom` (`e_nom`),
  ADD KEY `e_annonceur` (`e_annonceur`);

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `favoris_mission`
--
ALTER TABLE `favoris_mission`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gagnants`
--
ALTER TABLE `gagnants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `histo_cashback`
--
ALTER TABLE `histo_cashback`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `histo_clics`
--
ALTER TABLE `histo_clics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `ip` (`ip`),
  ADD KEY `idm` (`idUser`);

--
-- Index pour la table `histo_offers`
--
ALTER TABLE `histo_offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idt` (`idt`),
  ADD KEY `date` (`date`),
  ADD KEY `etat` (`etat`),
  ADD KEY `ip` (`ip`),
  ADD KEY `idm` (`idUser`);

--
-- Index pour la table `livredor`
--
ALTER TABLE `livredor`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `marque_magasin`
--
ALTER TABLE `marque_magasin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messagerie_all`
--
ALTER TABLE `messagerie_all`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newletter`
--
ALTER TABLE `newletter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pays` (`pays`),
  ADD KEY `actif` (`actif`),
  ADD KEY `nom` (`nom`);

--
-- Index pour la table `offers_clics`
--
ALTER TABLE `offers_clics`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `parrainage`
--
ALTER TABLE `parrainage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tchat`
--
ALTER TABLE `tchat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users_infos`
--
ALTER TABLE `users_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis_cashback`
--
ALTER TABLE `avis_cashback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT pour la table `bannier`
--
ALTER TABLE `bannier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `bonuslogin`
--
ALTER TABLE `bonuslogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `boutique`
--
ALTER TABLE `boutique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `boutiquecategorie`
--
ALTER TABLE `boutiquecategorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `boutiquemontant`
--
ALTER TABLE `boutiquemontant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `cashbackengine_affnetworks`
--
ALTER TABLE `cashbackengine_affnetworks`
  MODIFY `network_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `cashbackengine_cashabck`
--
ALTER TABLE `cashbackengine_cashabck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `cashbackengine_categories`
--
ALTER TABLE `cashbackengine_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT pour la table `cashbackengine_clickhistory`
--
ALTER TABLE `cashbackengine_clickhistory`
  MODIFY `click_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cashbackengine_countries`
--
ALTER TABLE `cashbackengine_countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cashbackengine_coupons`
--
ALTER TABLE `cashbackengine_coupons`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT pour la table `cashbackengine_favorites`
--
ALTER TABLE `cashbackengine_favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cashbackengine_reports`
--
ALTER TABLE `cashbackengine_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cashbackengine_retailers`
--
ALTER TABLE `cashbackengine_retailers`
  MODIFY `retailer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT pour la table `cashbackengine_reviews`
--
ALTER TABLE `cashbackengine_reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cashbackengine_transactions`
--
ALTER TABLE `cashbackengine_transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cashbackengine_users`
--
ALTER TABLE `cashbackengine_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `chatbox`
--
ALTER TABLE `chatbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `concours`
--
ALTER TABLE `concours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `e_offers`
--
ALTER TABLE `e_offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `favoris_mission`
--
ALTER TABLE `favoris_mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `gagnants`
--
ALTER TABLE `gagnants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `histo_cashback`
--
ALTER TABLE `histo_cashback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `histo_clics`
--
ALTER TABLE `histo_clics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `histo_offers`
--
ALTER TABLE `histo_offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `livredor`
--
ALTER TABLE `livredor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `marque_magasin`
--
ALTER TABLE `marque_magasin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `messagerie`
--
ALTER TABLE `messagerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `messagerie_all`
--
ALTER TABLE `messagerie_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `newletter`
--
ALTER TABLE `newletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `offers_clics`
--
ALTER TABLE `offers_clics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `parrainage`
--
ALTER TABLE `parrainage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tchat`
--
ALTER TABLE `tchat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users_infos`
--
ALTER TABLE `users_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
