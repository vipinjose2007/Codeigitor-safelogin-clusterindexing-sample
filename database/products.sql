-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2018 at 02:35 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(350) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Mobile Phone'),
(2, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `name` varchar(350) NOT NULL,
  `descr` varchar(1000) NOT NULL,
  `img` varchar(350) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `name`, `descr`, `img`) VALUES
(1, 1, 'Apple X', 'Color  : White<br>Ram : 4GB <br>Primary Storage :256GB', ''),
(2, 2, 'HP Pavilion g6', 'Colour : Black<br>Ram : 4GB<br>HDD : 1TB', ''),
(3, 1, 'Samsung Galaxy', 'Color  : Red<br>Ram : 4GB <br>Primary Storage :256GB', ''),
(4, 1, 'Sony Z2', 'Color  : Red<br>Ram : 4GB <br>Primary Storage :256GB', ''),
(5, 2, 'Sony Vio', 'Colour : Silver<br>Ram : 4GB<br>HDD : 1TB', ''),
(6, 2, 'Lenovo G', 'Colour : Silver<br>Ram : 4GB<br>HDD : 1TB', ''),
(24, 1, 'Moto', 'Colour : Red ', 'uploads/4cc041e8c81e74e06acab92bbda5277a.jpg'),
(25, 1, 'lenovo', 'kjhsdiufqw ', 'uploads/466371781a6c14dbdbd19b622d09e4f0.jpg'),
(26, 2, 'test test', 'khougiuogiugiugiugiugiugiugiugiugiugiu ', 'uploads/a8afb6d6abe7fc88882d154aa64b8614.jpg'),
(27, 2, 'test test', 'khougiuogiugiugiugiugiugiugiugiugiugiu ', 'uploads/17e7fccc6543f7cc72c29e101804e7e2.jpg'),
(28, 2, 'test test', 'khougiuogiugiugiugiugiugiugiugiugiugiu ', 'uploads/7351c5312ee2bea638cdf5f858342a01.jpg'),
(29, 2, 'test test', 'khougiuogiugiugiugiugiugiugiugiugiugiu ', 'uploads/0f93fd8718c38700fdecc5d625c478fc.jpg'),
(30, 2, 'final test', 'nothing  ', 'uploads/865dc68a7e7bcbd451e561552474e327.jpg'),
(31, 1, 'ljsdf', ' we', 'uploads/b4d6ef8c14de349d64df5c9f9d385c37.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'TqfmkD34ez7p7Hgo1S9YIdFpWerpuR0jVKAjM+JFvF1eBOOEK08399qNnkSVSSzk60TDG/Bf+fujekZoD4891w==', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
