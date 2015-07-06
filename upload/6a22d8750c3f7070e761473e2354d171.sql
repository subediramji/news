-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2015 at 09:15 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `engg`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `file_orig_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `file_path` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `file_name`, `file_orig_name`, `file_path`, `upload_date`) VALUES
(1, 'c575758b9ed5eab987ed17ed23c81d77.sql', 'engg.sql', 'C:/xampp/htdocs/engg/upload/c575758b9ed5eab987ed17ed23c81d77.sql', '2015-07-01 14:31:20'),
(2, 'e23c869f81f5e4703f57c158d4f87cb5.php', 'index.php', 'C:/xampp/htdocs/engg/upload/e23c869f81f5e4703f57c158d4f87cb5.php', '2015-07-01 14:31:20'),
(3, '2a490e154c19b13858af61189dbbba61.xlsx', 'Load-shedding1.xlsx', 'C:/xampp/htdocs/engg/upload/2a490e154c19b13858af61189dbbba61.xlsx', '2015-07-04 20:52:28'),
(6, '41dcf40c1eecb7d16ff09103e74a1f58.xlsx', 'Load-shedding.xlsx', 'C:/xampp/htdocs/engg/upload/41dcf40c1eecb7d16ff09103e74a1f58.xlsx', '2015-07-04 20:56:48'),
(7, 'c13bfd240678b495178ea5f56bfe76e3.xlsx', 'r.xlsx', 'C:/xampp/htdocs/engg/upload/c13bfd240678b495178ea5f56bfe76e3.xlsx', '2015-07-04 20:56:48');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
