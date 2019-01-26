-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2017 at 07:18 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `timo`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

CREATE TABLE IF NOT EXISTS `academics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `othername` text,
  `rgno` varchar(50) NOT NULL,
  `scho` text NOT NULL,
  `dep` text NOT NULL,
  `course` text NOT NULL,
  `post` text NOT NULL,
  `gender` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `academics`
--


-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('tim', 'tim'),
('caro', 'caro');

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
  KEY `image` (`image`),
  FULLTEXT KEY `rgno` (`rgno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `firstname`, `secondname`, `othername`, `rgno`, `scho`, `dep`, `course`, `post`, `gender`, `image`) VALUES
(1, 'sam', 'kamau', 'o', 'ci/00081/014', 'computing and informating', 'informatin technology', 'information technology', 'president', 'male', 'a'),
(2, 'caro', 'caro', 'othername', 'ci/0002/014', 'education', 'education', 'maths/chem', 'president', 'female', 'e'),
(3, 'rachael', 'wangari', NULL, 'ci/0003/014', 'agriculture', 'soil', 'soil', 'president', 'female', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE IF NOT EXISTS `entertainment` (
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `othername` text,
  `rgno` varchar(50) NOT NULL,
  `scho` text NOT NULL,
  `dep` text NOT NULL,
  `course` text NOT NULL,
  `post` text NOT NULL,
  `gender` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`rgno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entertainment`
--


-- --------------------------------------------------------

--
-- Table structure for table `equator1-7`
--

CREATE TABLE IF NOT EXISTS `equator1-7` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `othername` text,
  `rgno` varchar(50) NOT NULL,
  `scho` text NOT NULL,
  `dep` text NOT NULL,
  `course` text NOT NULL,
  `post` text NOT NULL,
  `gender` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `equator1-7`
--


-- --------------------------------------------------------

--
-- Table structure for table `equator7-14`
--

CREATE TABLE IF NOT EXISTS `equator7-14` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `othername` text,
  `rgno` varchar(50) NOT NULL,
  `scho` text NOT NULL,
  `dep` text NOT NULL,
  `course` text NOT NULL,
  `post` text NOT NULL,
  `gender` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `equator7-14`
--


-- --------------------------------------------------------

--
-- Table structure for table `finance-secretary`
--

CREATE TABLE IF NOT EXISTS `finance-secretary` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` int(50) NOT NULL,
  `secondname` int(50) NOT NULL,
  `othername` int(50) DEFAULT NULL,
  `rgno` varchar(50) NOT NULL,
  `scho` int(50) NOT NULL,
  `dep` int(50) NOT NULL,
  `course` int(50) NOT NULL,
  `post` int(100) NOT NULL,
  `gender` int(50) NOT NULL,
  `image` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `finance-secretary`
--


-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE IF NOT EXISTS `health` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `othername` text,
  `rgno` varchar(50) NOT NULL,
  `scho` text NOT NULL,
  `dep` text NOT NULL,
  `course` text NOT NULL,
  `post` text NOT NULL,
  `gender` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `health`
--


-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE IF NOT EXISTS `institute` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `othername` text,
  `rgno` varchar(50) NOT NULL,
  `scho` text NOT NULL,
  `dep` text NOT NULL,
  `course` text NOT NULL,
  `post` text NOT NULL,
  `gender` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `institute`
--


-- --------------------------------------------------------

--
-- Table structure for table `kilimanjaro`
--

CREATE TABLE IF NOT EXISTS `kilimanjaro` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `othername` text,
  `rgno` varchar(50) NOT NULL,
  `scho` text NOT NULL,
  `dep` text NOT NULL,
  `course` text NOT NULL,
  `post` text NOT NULL,
  `gender` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `kilimanjaro`
--


-- --------------------------------------------------------

--
-- Table structure for table `new mark`
--

CREATE TABLE IF NOT EXISTS `new mark` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `othername` text,
  `rgno` varchar(50) NOT NULL,
  `scho` text NOT NULL,
  `dep` text NOT NULL,
  `course` text NOT NULL,
  `post` text NOT NULL,
  `gender` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `new mark`
--


-- --------------------------------------------------------

--
-- Table structure for table `new sunrise`
--

CREATE TABLE IF NOT EXISTS `new sunrise` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `othername` text,
  `rgno` varchar(50) NOT NULL,
  `scho` text NOT NULL,
  `dep` text NOT NULL,
  `course` text NOT NULL,
  `post` text NOT NULL,
  `gender` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `new sunrise`
--


-- --------------------------------------------------------

--
-- Table structure for table `non-resident`
--

CREATE TABLE IF NOT EXISTS `non-resident` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `othername` text,
  `rgno` varchar(50) NOT NULL,
  `scho` text NOT NULL,
  `dep` text NOT NULL,
  `course` text NOT NULL,
  `post` text NOT NULL,
  `gender` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `non-resident`
--


-- --------------------------------------------------------

--
-- Table structure for table `oldmark`
--

CREATE TABLE IF NOT EXISTS `oldmark` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `othername` text,
  `rgno` varchar(50) NOT NULL,
  `scho` text NOT NULL,
  `dep` text NOT NULL,
  `course` text NOT NULL,
  `post` text NOT NULL,
  `gender` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `oldmark`
--

INSERT INTO `oldmark` (`id`, `firstname`, `secondname`, `othername`, `rgno`, `scho`, `dep`, `course`, `post`, `gender`, `image`) VALUES
(1, 'll', 'jj', 'o', 'ci/00031/014', 'computing and informatics', 'information technology', 'information technology', 'hall rep', 'female', 'j');

-- --------------------------------------------------------

--
-- Table structure for table `president`
--

CREATE TABLE IF NOT EXISTS `president` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `othername` text NOT NULL,
  `rgno` varchar(50) NOT NULL,
  `scho` text NOT NULL,
  `dep` text NOT NULL,
  `course` text NOT NULL,
  `post` text NOT NULL,
  `gender` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `president`
--

INSERT INTO `president` (`id`, `firstname`, `secondname`, `othername`, `rgno`, `scho`, `dep`, `course`, `post`, `gender`, `image`) VALUES
(1, 'caro', 'chep', 'o', 'ci/000101/014', 'computing and informating', 'informatin technology', 'information technology', 'president', 'male', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `secretary general`
--

CREATE TABLE IF NOT EXISTS `secretary general` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `othername` text,
  `rgno` varchar(50) NOT NULL,
  `scho` text NOT NULL,
  `dep` text NOT NULL,
  `course` text NOT NULL,
  `post` text NOT NULL,
  `gender` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `secretary general`
--


-- --------------------------------------------------------

--
-- Table structure for table `studet`
--

CREATE TABLE IF NOT EXISTS `studet` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `firstname` text,
  `secondname` text,
  `othername` text NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `rgno` varchar(50) NOT NULL,
  `school` text,
  `dep` text,
  `course` text,
  PRIMARY KEY (`rgno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studet`
--

INSERT INTO `studet` (`username`, `password`, `firstname`, `secondname`, `othername`, `email`, `rgno`, `school`, `dep`, `course`) VALUES
('carochep', '1234', 'caro', 'chep', 'o', 'carochep@student.php', 'ci/00081/014', 'computing and informating', 'informatin technology', 'information technology'),
('timoyaro', '5678', 'tim', 'oyaro', 'o', 'timothyoyaro@gmail.com', 'ci/00084/014', 'computing and informatics', 'information technology', 'information technology');

-- --------------------------------------------------------

--
-- Table structure for table `sunrise`
--

CREATE TABLE IF NOT EXISTS `sunrise` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `othername` text,
  `rgno` varchar(50) NOT NULL,
  `scho` text NOT NULL,
  `dep` text NOT NULL,
  `course` text NOT NULL,
  `post` text NOT NULL,
  `gender` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sunrise`
--

INSERT INTO `sunrise` (`id`, `firstname`, `secondname`, `othername`, `rgno`, `scho`, `dep`, `course`, `post`, `gender`, `image`) VALUES
(1, 'caroline', 'caro', 'o', 'ci/00081/014', 'computing and informatics', 'information technology', 'information technology', 'vicepresident', 'male', 'l');

-- --------------------------------------------------------

--
-- Table structure for table `vetfarmladies`
--

CREATE TABLE IF NOT EXISTS `vetfarmladies` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `othername` text,
  `rgno` varchar(50) NOT NULL,
  `scho` text NOT NULL,
  `dep` text NOT NULL,
  `course` text NOT NULL,
  `post` text NOT NULL,
  `gender` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `vetfarmladies`
--


-- --------------------------------------------------------

--
-- Table structure for table `vetfarmmen`
--

CREATE TABLE IF NOT EXISTS `vetfarmmen` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `othername` text,
  `rgno` varchar(50) NOT NULL,
  `scho` text NOT NULL,
  `dep` text NOT NULL,
  `course` text NOT NULL,
  `post` text NOT NULL,
  `gender` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `vetfarmmen`
--


-- --------------------------------------------------------

--
-- Table structure for table `vice president`
--

CREATE TABLE IF NOT EXISTS `vice president` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `othername` text NOT NULL,
  `rgno` varchar(50) NOT NULL,
  `scho` text NOT NULL,
  `dep` text NOT NULL,
  `course` text NOT NULL,
  `post` text NOT NULL,
  `gender` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `vice president`
--


-- --------------------------------------------------------

--
-- Table structure for table `votesacademics`
--

CREATE TABLE IF NOT EXISTS `votesacademics` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `v_id` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `votesacademics`
--


-- --------------------------------------------------------

--
-- Table structure for table `votesentertainment`
--

CREATE TABLE IF NOT EXISTS `votesentertainment` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `v_id` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `votesentertainment`
--


-- --------------------------------------------------------

--
-- Table structure for table `votesequator1-7`
--

CREATE TABLE IF NOT EXISTS `votesequator1-7` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `v_id` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `votesequator1-7`
--


-- --------------------------------------------------------

--
-- Table structure for table `votesequator7-14`
--

CREATE TABLE IF NOT EXISTS `votesequator7-14` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `v_id` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `votesequator7-14`
--


-- --------------------------------------------------------

--
-- Table structure for table `votesfinance-secretary`
--

CREATE TABLE IF NOT EXISTS `votesfinance-secretary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `v_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `votesfinance-secretary`
--


-- --------------------------------------------------------

--
-- Table structure for table `voteshealth`
--

CREATE TABLE IF NOT EXISTS `voteshealth` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `v_id` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `voteshealth`
--


-- --------------------------------------------------------

--
-- Table structure for table `votesinstitute`
--

CREATE TABLE IF NOT EXISTS `votesinstitute` (
  `id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votesinstitute`
--


-- --------------------------------------------------------

--
-- Table structure for table `voteskilimanjaro`
--

CREATE TABLE IF NOT EXISTS `voteskilimanjaro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `v_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `voteskilimanjaro`
--


-- --------------------------------------------------------

--
-- Table structure for table `votesnew mark`
--

CREATE TABLE IF NOT EXISTS `votesnew mark` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `v_id` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `votesnew mark`
--


-- --------------------------------------------------------

--
-- Table structure for table `votesnew sunrise`
--

CREATE TABLE IF NOT EXISTS `votesnew sunrise` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `v_id` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `votesnew sunrise`
--


-- --------------------------------------------------------

--
-- Table structure for table `votesnon-residents`
--

CREATE TABLE IF NOT EXISTS `votesnon-residents` (
  `id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votesnon-residents`
--


-- --------------------------------------------------------

--
-- Table structure for table `votesoldmark`
--

CREATE TABLE IF NOT EXISTS `votesoldmark` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `v_id` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `votesoldmark`
--


-- --------------------------------------------------------

--
-- Table structure for table `votespresident`
--

CREATE TABLE IF NOT EXISTS `votespresident` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `v_id` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `votespresident`
--

INSERT INTO `votespresident` (`id`, `v_id`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `votessecertary general`
--

CREATE TABLE IF NOT EXISTS `votessecertary general` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `v_id` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `votessecertary general`
--


-- --------------------------------------------------------

--
-- Table structure for table `votessunrise`
--

CREATE TABLE IF NOT EXISTS `votessunrise` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `v_id` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `votessunrise`
--


-- --------------------------------------------------------

--
-- Table structure for table `votesvetfarmladies`
--

CREATE TABLE IF NOT EXISTS `votesvetfarmladies` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `v_id` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `votesvetfarmladies`
--


-- --------------------------------------------------------

--
-- Table structure for table `votesvetfarmmen`
--

CREATE TABLE IF NOT EXISTS `votesvetfarmmen` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `v_id` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `votesvetfarmmen`
--


-- --------------------------------------------------------

--
-- Table structure for table `votesvice president`
--

CREATE TABLE IF NOT EXISTS `votesvice president` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `v_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `votesvice president`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
