-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 25, 2017 at 12:28 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qui5`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `Adm` varchar(255) DEFAULT NULL,
  `Total` int(255) DEFAULT NULL,
  UNIQUE KEY `Adm` (`Adm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`Adm`, `Total`) VALUES
('ds', 60),
('5576', 450),
('9999', 317),
('werds', 92);

-- --------------------------------------------------------

--
-- Table structure for table `studentmarks`
--

CREATE TABLE IF NOT EXISTS `studentmarks` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Adm` varchar(20) NOT NULL,
  `Maths` int(3) NOT NULL,
  `English` int(3) NOT NULL,
  `Kiswahili` int(3) NOT NULL,
  `Science` int(3) NOT NULL,
  `Sst` int(3) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `studentmarks`
--

INSERT INTO `studentmarks` (`Id`, `Adm`, `Maths`, `English`, `Kiswahili`, `Science`, `Sst`) VALUES
(1, 'ds', 12, 12, 12, 12, 12),
(2, '5576', 90, 90, 90, 90, 90),
(3, '9999', 99, 45, 67, 76, 30),
(4, 'werds', 12, 12, 13, 32, 23),
(5, 'werds', 12, 12, 13, 32, 23);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
