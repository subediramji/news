-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 26, 2015 at 01:58 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `news_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(14, 'Technology'),
(16, 'Headlines'),
(17, 'Slider'),
(18, 'World News'),
(19, 'Bussiness'),
(20, 'Travell'),
(21, 'Life Style'),
(22, 'Culture');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `summary` longtext CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `c_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `summary`, `image`, `c_id`) VALUES
(2, 'sport', 'news ', '', 13),
(5, 'SLC result published', 'Slc result&nbsp;  ', ' ', 16),
(6, 'WebSoft Nepal NEWS PORTAL', 'web sort ', ' ', 16),
(7, 'WebSoft Published infochitwan.com.np', 'sdfsdfsfsdf ', ' ', 16),
(8, 'First Slider', 'This is the first slider which upload ', 'image4.jpg', 17),
(9, 'Second Slider', 'sdfsdfsdfsfs sdfsdfsdf sdfsdf ', 'image16.jpg', 17),
(10, 'First Technology page', 'Hi this is first technology page ', 'logo2.jpg', 14),
(11, 'second technology', 'sdfdslafdsfj sdflsdjfsdf sdlfjsdlf ', 'image111.jpg', 14),
(12, 'new business file', 'sldfsdklfsdlfsd sldfsdfksjdflkjsfdf ', '45-728x410.jpg', 19),
(13, 'second data', 'lsdjf sdfljsdf sdlfsd fkksdf&nbsp; ', 'image5.jpg', 19),
(14, 'third business', 'sdfsdlfsd ksdlf sdf sdfls fsdfsdf sfdfsdf&nbsp; ', 'image17.jpg', 19),
(15, 'first world news', 'hi this is first news ', '45-728x4101.jpg', 18),
(16, 'second news', 'fdsdfskdfljsdflsdf sd dfsjdflkksjflksjdf ', 'image18.jpg', 18),
(18, 'first travell', 'lsdfjsdlf dsafkjflsdjf lsafdjsdlkfjsdf ', 'image19.jpg', 20),
(17, 'third news', 'dsfkjdsfljsdlkfs fkdsfsldfjsdfjsdlkkfjsdlf', 'image6.jpg', 18),
(19, 'second travell', 'lksfds lfjsdlfjsdlf lfjsdlfjsdlkf lksdfjlsdfjlsdf lksdfjlsf sf ', 'image7.jpg', 20),
(20, 'Third travell', 'sfdslf slfjsdfsdj flfjsdfjsdjf', '45-728x4102.jpg', 20),
(21, 'first Lifestyle', 'ngcjhvhv kghghg kghghjg jkfajdkldslk;lkdf ', '45-728x4103.jpg', 21),
(22, 'Second Lifestyle', 'Second life styleee<br> ', ' ', 21),
(23, 'Third Lifestyle', 'Third Lifestyle ', '45-728x4104.jpg', 21),
(24, 'Culture', 'afjkldakdsokjklssdfsad ', 'image8.jpg', 22),
(25, 'Culture Second', 'fsdkafjldlsfhkjsdhklfjdsakjfhjs ', 'image9.jpg', 22),
(26, 'Culture Third', 'dadfdfakhljjd ', 'image10.jpg', 22);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `key`) VALUES
(1, 'ramji', 'ramji', 'subedi', 'ramjisubedi1991@gmail.com', 'ae3274d5bfa170ca69bb534be5a22467', ''),
(2, 'admin', 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', ''),
(3, 'bipin', 'sdf', 'sdaf', 'bipin@pin.com', 'a83383d30b2da2f863cb12739254bb02', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
