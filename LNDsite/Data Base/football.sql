-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Гру 14 2021 р., 22:15
-- Версія сервера: 8.0.27
-- Версія PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `football`
--
CREATE DATABASE IF NOT EXISTS `football` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `football`;

-- --------------------------------------------------------

--
-- Структура таблиці `player`
--

DROP TABLE IF EXISTS `player`;
CREATE TABLE IF NOT EXISTS `player` (
  `PlayerId` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `PlayerNm` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `PlayerSn` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `TeamId` int NOT NULL,
  `Goals` smallint UNSIGNED NOT NULL,
  `Assists` smallint UNSIGNED NOT NULL,
  PRIMARY KEY (`PlayerId`),
  KEY `TeamIdKey` (`TeamId`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `player`
--

INSERT INTO `player` (`PlayerId`, `PlayerNm`, `PlayerSn`, `TeamId`, `Goals`, `Assists`) VALUES
(1, 'Dejvid', 'Sinani', 1, 10, 7),
(2, 'Adel', 'Bettaieb', 1, 8, 10),
(3, 'Edvin', 'Muratovic', 1, 5, 6),
(4, 'Kevin', 'Kerkhof', 1, 4, 3),
(5, 'Samir', 'Hadji', 1, 4, 8),
(6, 'Mehdi', 'Kirch', 1, 5, 2),
(7, 'Kobe', 'Cools', 1, 3, 4),
(8, 'Aleixo', 'Delgado', 1, 1, 3),
(9, 'Jules', 'Diouf', 1, 2, 6),
(10, 'Filip', 'Bojić', 1, 1, 1),
(11, 'Antonio', 'Luisi', 2, 9, 4),
(12, 'Mayron', 'De Almeida', 2, 8, 2),
(13, 'Belmin', 'Muratovic', 2, 4, 7),
(14, 'Ryan', 'Klapp', 2, 5, 4),
(15, 'Antoine', 'Hanus Mazure', 2, 2, 5),
(16, 'Lamine', 'Ba', 2, 6, 2),
(17, 'Ben', 'Vogel', 2, 4, 7),
(18, 'Florian', 'Bohnert', 2, 7, 10),
(19, 'Yannick', 'Bastos', 2, 1, 3),
(20, 'Aldin', 'Skenderovic', 2, 0, 1),
(21, 'Nicolas', 'Perez', 5, 13, 4),
(22, 'Brian', 'Rouffignac', 5, 5, 8),
(23, 'Cédric', 'Cossou', 5, 3, 2),
(24, 'Mohamed', 'Diaf', 5, 3, 5),
(25, 'Kévin', 'Bacconnier', 5, 4, 1),
(26, 'Gautier', 'Bernardelli', 5, 1, 6),
(27, 'Alen', 'Agovic', 5, 2, 1),
(28, 'Cédric', 'Baiverlin', 5, 7, 4),
(29, 'Kevin', 'Lourenço', 5, 1, 0),
(30, 'Benjamin', 'Runser', 5, 0, 3),
(31, 'Yann', 'Mabella', 6, 9, 8),
(32, 'Mana', 'Dembélé', 6, 3, 2),
(33, 'Emmanuel', 'Françoise', 6, 6, 1),
(34, 'Karim', 'Rossi', 6, 3, 8),
(35, 'Jonathan', 'Hennetier', 6, 5, 1),
(36, 'Kévin', 'Nakache', 6, 2, 4),
(37, 'Loris', 'Tinelli', 6, 3, 3),
(38, 'Dwayn', 'Holter', 6, 7, 2),
(39, 'Luca', 'D\'Orlando', 6, 4, 0),
(40, 'Guilherme', 'Pereira', 6, 1, 5),
(41, 'Grégory', 'Grisez', 7, 5, 8),
(42, 'Bruno', 'Correia', 7, 2, 3),
(43, 'Mirza', 'Mustafić', 7, 5, 0),
(44, 'Idir', 'Boutrif', 7, 4, 6),
(45, 'Diogo', 'Zambujo', 7, 7, 0),
(46, 'Michael', 'Omosanya', 7, 3, 2),
(47, 'Rodrigo', 'Reis', 7, 1, 3),
(48, 'Denis', 'Ahmetxhekaj', 7, 0, 2),
(49, 'Nenad', 'Dragović', 7, 2, 2),
(50, 'Bruno', 'Freire', 7, 4, 0),
(51, 'Dominik', 'Stolz', 8, 11, 3),
(52, 'Maxime', 'Electeur', 8, 4, 7),
(53, 'Florik', 'Shala', 8, 2, 1),
(54, 'Hamidou', 'Séné', 8, 3, 4),
(55, 'Cédric', 'Sacras', 8, 2, 0),
(56, 'Tom', 'Schnell', 8, 1, 3),
(57, 'Blankson', 'Anoff', 8, 1, 1),
(58, 'Franck', 'Koré', 8, 0, 2),
(59, 'Rayan', 'Philippe', 8, 4, 5),
(60, 'Ivan', 'Englaro', 8, 0, 1),
(61, 'Jordy', 'Soladio', 9, 14, 7),
(62, 'Dāvis', 'Sprūds', 9, 4, 6),
(63, 'Gilles', 'Feltes', 9, 3, 2),
(64, 'Johannes', 'Steinbach', 9, 1, 4),
(65, 'Gabriel', 'Gaspar', 9, 0, 2),
(66, 'Brian', 'Moding', 9, 2, 1),
(67, 'Kevin', 'Marques', 9, 3, 7),
(68, 'Noah', 'Rossler', 9, 2, 3),
(69, 'Johann', 'De Doncker', 9, 0, 1),
(70, 'Mathieu', 'Leroux', 9, 1, 1),
(71, 'Bertino', 'Cabral', 10, 10, 11),
(72, 'Andreas', 'Buch', 10, 4, 9),
(73, 'Aurélien', 'Joachim', 10, 5, 2),
(74, 'Gonçalo', 'Almeida', 10, 3, 6),
(75, 'Moïse', 'Sakava', 10, 2, 1),
(76, 'Théo', 'Brusco', 10, 2, 6),
(77, 'Maxime', 'De Taddeo', 10, 5, 7),
(78, 'Dylan', 'Lempereur', 10, 1, 3),
(79, 'Daniel', 'da Mota', 10, 0, 4),
(80, 'Erkan', 'Agovic', 10, 3, 0),
(81, 'Artur', 'Abreu', 11, 4, 2),
(82, 'Kai', 'Merk', 11, 2, 1),
(83, 'Mike', 'Schneider', 11, 1, 1),
(84, 'António', 'Pina', 11, 0, 3),
(85, 'Patrik', 'Teixeira', 11, 2, 0),
(86, 'Vincent', 'Collet', 11, 0, 1),
(87, 'Niklas', 'Jeck', 11, 2, 2),
(88, 'Tiago', 'Rodrigues', 11, 0, 0),
(89, 'Yannick', 'Schaus', 11, 1, 4),
(90, 'Mohamed', 'Diaby', 11, 5, 3),
(91, 'Bryan', 'Nouvier', 12, 6, 1),
(92, 'Ouwo', 'Maâzou', 12, 1, 4),
(93, 'Clayton', 'de Sousa', 12, 3, 4),
(94, 'Stélvio', 'da Cruz', 12, 1, 2),
(95, 'Maxime', 'Deruffe', 12, 0, 2),
(96, 'Amâncio', 'Pinto', 12, 1, 0),
(97, 'Andrea', 'Deidda', 12, 2, 5),
(98, 'Almir', 'Klica', 12, 0, 1),
(99, 'Jailson', 'de Pina', 12, 5, 0),
(100, 'Lucas', 'Fox', 12, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `TeamId` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `TeamNm` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Wins` smallint UNSIGNED NOT NULL,
  `Draws` smallint UNSIGNED NOT NULL,
  `Loses` smallint UNSIGNED NOT NULL,
  PRIMARY KEY (`TeamId`),
  UNIQUE KEY `TeamNm` (`TeamNm`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `team`
--

INSERT INTO `team` (`TeamId`, `TeamNm`, `Wins`, `Draws`, `Loses`) VALUES
(1, 'F91 DUDELANGE', 9, 3, 2),
(2, 'Progrès Niederkorn', 9, 2, 3),
(5, 'UNA Strassen', 8, 4, 2),
(6, 'Racing Union Luxembourg\r\n', 9, 0, 5),
(7, 'Fola Esch', 7, 5, 2),
(8, 'Swift Hesperange', 7, 3, 4),
(9, 'Victoria Rosport', 7, 2, 5),
(10, 'Differdange 03', 6, 4, 4),
(11, 'UT Pétange', 6, 0, 8),
(12, 'Jeunesse d\'Esch', 5, 3, 6);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
