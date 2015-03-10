-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2015 at 08:53 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `howdydoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `aka` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `tittle` varchar(255) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`ID`, `name`, `aka`, `location`, `tittle`, `bio`) VALUES
(1, 'scasc', 'CAsca', '0', 'casca', 'acac'),
(2, 'Ovayo', 'Ovi', '0', 'Developer', 'Developer'),
(3, 'Ovayo', 'Ovi', '0', 'Developer', 'tester'),
(4, 'Ovayo', 'Ovi', '0', 'Developer', 'tester'),
(5, 'Ovayo', 'Ovi', '0', 'Developer', 'tester'),
(6, 'Ovayo', 'Ovi', '0', 'Developer', 'tester'),
(7, 'Ova', 'Ovi', '0', 'Dev', 'asvas'),
(8, 'Ova', 'Ovi', '0', 'Dev', 'asvas'),
(9, 'Ovy', 'Ovay', '0', 'Developer', 'vasva'),
(10, 'Ovy', 'Ovay', '0', 'Developer', 'vasva'),
(11, 'Ovy', 'Ovay', '0', 'Dev', 'avasvv'),
(12, 'Ovy', 'Ovay', '0', 'Dev', 'avasvv'),
(13, 'Ova', 'Ovi', 'redworks', 'Bad', 'Good'),
(14, 'Ova', 'Ovi', 'redworks', 'Bad', 'Good'),
(15, 'Ovayo', 'Hovy', 'hogarth', 'Developer Thug', 'Nothing really'),
(16, 'Ovayo', 'Hovy', 'hogarth', 'Developer Thug', 'Nothing really');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
