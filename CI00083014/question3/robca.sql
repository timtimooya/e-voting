-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 25, 2017 at 12:27 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `robca`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `suggest` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `firstname` text,
  `secondname` text,
  `surname` text,
  `identification` varchar(9) NOT NULL DEFAULT '',
  `no` int(3) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`identification`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `secondname`, `surname`, `identification`, `no`, `date`, `occupation`, `gender`) VALUES
('Nixon', 'kimutai', '1', '65438q9', 6, '1942-11-24', 'teaching', '1'),
('caroline', 'chepkoech', '1', '32507985', 1, '1995-05-13', 'teaching', '0'),
('kamau', 'Ann', '1', '63278391', 5, '1945-11-27', 'teaching', '0'),
('caren', 'mumbi', '1', '412267', 5, '1954-10-09', 'teaching', '0'),
('Tony', 'munene', '1', '3521789', 3, '1954-07-12', 'janitor', '1'),
('Tony', 'munene', '1', '3521759', 3, '1954-07-12', 'janitor', '1'),
('Eunice', 'Njoki', '1', '98786732', 4, '1985-10-20', 'lab technician', '0'),
('Vivian', 'Adero', '1', '73499737', 3, '1990-10-15', 'janitor', '0'),
('Mercy', 'Adero', '1', '243511', 3, '1990-07-12', 'bedrock', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
