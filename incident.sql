-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2018 at 10:50 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `incident`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ID_number` int(50) NOT NULL,
  PRIMARY KEY (`ID_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`First_name`, `Last_name`, `password`, `phone_number`, `Email`, `ID_number`) VALUES
('caroline', 'Kimutai', '67890', '0729806409', 'caroline@gmail.com', 25192580),
('caroline', 'Chepkoech', '1234', '0724555126', 'chepkoech.korir@yahoo.com', 32507985),
('Robert', 'Kimutai', '9876', '072488197', 'carolinekimutai49@gmail.com', 34507456),
('alvin', 'kim', 'ttttt', '089328489', 'alvi@gmai.com', 743682898);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
