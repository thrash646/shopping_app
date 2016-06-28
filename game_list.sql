-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2016 at 04:27 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `game_list`
--

CREATE TABLE IF NOT EXISTS `game_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `console` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `game_list`
--

INSERT INTO `game_list` (`id`, `name`, `picture`, `description`, `price`, `console`) VALUES
(1, 'Super Paper Mario', 'img/wii-paper-mario-full.jpg', NULL, '22.99', 'Wii U'),
(2, 'Mario Galaxy', 'img/wii-mario-galaxy-full.jpg', NULL, '25.99', 'Wii U'),
(3, 'Mario Galaxy 2', 'img/wii-mario-galaxy-2-full.jpg', NULL, '30.99', 'Wii U'),
(4, 'Resident Evil', 'img/wii-res-evil-4-full.jpg', NULL, '25.99', 'Wii U'),
(5, 'Super Smash Bros. Brawl', 'img/wii-smash-bros-full.jpg', NULL, '31.99', 'Wii U'),
(6, 'Zelda Twilight Princess', 'img/wii-zelda-twilight-full.jpg', NULL, '21.99', 'Wii U');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
