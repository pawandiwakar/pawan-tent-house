-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2018 at 12:44 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pawan_success`
--
CREATE DATABASE `pawan_success` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pawan_success`;

-- --------------------------------------------------------

--
-- Table structure for table `cust_info`
--

CREATE TABLE IF NOT EXISTS `cust_info` (
  `c_id` int(10) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(30) NOT NULL,
  `c_adrs` varchar(100) NOT NULL,
  `c_num` text NOT NULL,
  `c_eml` varchar(30) NOT NULL,
  `c_select` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cust_info`
--

INSERT INTO `cust_info` (`c_id`, `c_name`, `c_adrs`, `c_num`, `c_eml`, `c_select`) VALUES
(1, ' fgdgdgdg', '23423gddg', '2147483647', 'psffspf@gmail.com', ' Birthday'),
(2, ' sunil', '11323/76 Adarsh nagar', '2147483647', 'sunilkumar@gmail.com', ' Birthday'),
(3, ' raju', '9867/i98 javahar nagar', '2147483647', 'raju8769time@gmail.com', ' Mundan'),
(4, ' Kumar verma', '1324/k-block ', '2147483647', 'kumarnilkumar@gmail.com', ' Baloon Dcoration'),
(5, ' shyam kumar', '12/745kd kanpur ', '2147483647', 'shyam243kam@gmail.com', ' Baloon Dcoration'),
(6, ' sunil kumar', '232/54 l-block kakadev', '8599594588', 'kumarsunil@gmail.com', ' Mundan'),
(7, ' lalit kumar', '213/44 harsh nagar', '9593953957', 'kumlalit321@gmail.com', ' Mundan'),
(8, ' pawandiwakar', '116/845 rawatpur gaon', '8546026023', 'mathurkumar8318@gmail.com', ' Baloon Dcoration');

-- --------------------------------------------------------

--
-- Table structure for table `parties`
--

CREATE TABLE IF NOT EXISTS `parties` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(30) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `services` varchar(50) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `imgs` varchar(50) NOT NULL,
  `imgss` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `parties`
--

INSERT INTO `parties` (`id`, `p_id`, `heading`, `services`, `image_name`, `comments`, `imgs`, `imgss`) VALUES
(7, '5abfc1902c9cb', 'pth bottom logo', 'bottom image', 'logo', 'this a top header image', 'pth9.jpg', 'pth-png.png'),
(19, '5ad71cacdb720', 'Christmas-Party-Decorations', 'wedding', 'Christmas-Party-Decorations', 'Christmas-Party-Decorations', 'Christmas-Party-Decorations.jpg', 'dinner-decoration2.JPG'),
(16, '5ac877b79902c', 'office2', 'Office image', ' worrk office', 'office in keshavpuram kanpur nagar', 'office2.jpg', ''),
(17, '5ad4af46628ed', 'pth llogo', 'left logo', 'logo', 'this is a beautifull', 'pth-png.png', 'pth9.jpg'),
(18, '5ad71c5eececa', 'gardden-decoration', 'wedding', 'gardden-decoration', 'gardden-decoration', 'gardden-decoration.jpg', 'Christmas-Party-Decorations.jpg'),
(15, '5ac876216ed01', 'party-table-decorations', 'wedding', 'party-table-decorations', 'party-table-decorations', 'party-table-decorations.jpg', 'baloon1.jpg'),
(20, '5b33e2327d513', 'muusical events part', 'Musical Events', 'musical', 'so comfertable feeling in music', 'Christmas-Party-Decorations.jpg', 'Cheap-Party-Decoration-baloon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `s_id` int(10) NOT NULL AUTO_INCREMENT,
  `u_id` varchar(30) NOT NULL,
  `all_services` varchar(50) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `u_id`, `all_services`) VALUES
(1, '5abad38bcd4bc', 'wedding'),
(2, '5abad3efeffcc', 'Pandal decoration'),
(3, '5abad3ffb13b5', 'catering'),
(4, '5abad413c3809', 'Fllower'),
(5, '5abad42c49487', 'Videography'),
(6, '5abad443b4509', 'Musical Events'),
(7, '5abad45f70e42', 'Birthday Parties'),
(8, '5abfbfb6e9028', 'left logo'),
(9, '5abfbfd64cd99', 'bottom image'),
(10, '5ac09a185cc06', 'Map Image'),
(11, '5ac86fce52fe3', 'Office image');
