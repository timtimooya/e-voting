-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2017 at 03:38 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `timo`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` text,
  `secondname` text,
  `othername` text,
  `rgno` varchar(50) NOT NULL,
  `scho` text,
  `dep` text,
  `course` text,
  `post` text,
  `gender` text,
  `image` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `rgno_2` (`rgno`),
  KEY `image` (`image`),
  FULLTEXT KEY `rgno` (`rgno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `firstname`, `secondname`, `othername`, `rgno`, `scho`, `dep`, `course`, `post`, `gender`, `image`) VALUES
(1, 'sam', 'kamau', 'o', 'ci/00081/014', 'computing and informating', 'informatin technology', 'information technology', 'president', 'male', 'a'),
(2, 'caro', 'caro', 'othername', 'ci/0002/014', 'education', 'education', 'maths/chem', 'president', 'female', 'e'),
(3, 'rachael', 'wangari', NULL, 'ci/0003/014', 'agriculture', 'soil', 'soil', 'president', 'female', 'e'),
(4, 'timothy', 'hh', 'o', 'bv/000/012', '1', 'maths and informatics', 'statistics', 'president', '1', 'g'),
(5, 'Robert', 'serem', 'o', 'mt/00077/016', 'school of medicine', 'statistics', 'acturial', 'president', 'male', 'bcj'),
(19, 'Revived ', 'Ben', 'o', 'MT/00078/014', 'school of public health', 'mathematics', 'bsc mathematical science', 'sec gen', 'male', 'ghn');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
