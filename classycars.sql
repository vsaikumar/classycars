-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 09, 2016 at 02:59 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pahiye`
--

-- --------------------------------------------------------

--
-- Table structure for table `audi`
--

CREATE TABLE IF NOT EXISTS `audi` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `millege` varchar(255) NOT NULL,
  `Engine` varchar(255) NOT NULL,
  `Cruisecontrol` varchar(255) NOT NULL,
  `parkingsensor` varchar(255) NOT NULL,
  `Duration` varchar(255) NOT NULL,
  `performance` varchar(255) NOT NULL,
  `comfort` varchar(255) NOT NULL,
  `safety` varchar(255) NOT NULL,
  `Automatic` varchar(255) NOT NULL,
  `rearacvents` varchar(255) NOT NULL,
  `abs` varchar(255) NOT NULL,
  `driverairbag` varchar(255) NOT NULL,
  `roof` varchar(255) NOT NULL,
  `car1` varchar(255) NOT NULL,
  `car2` varchar(255) NOT NULL,
  `car3` varchar(255) NOT NULL,
  `car4` varchar(255) NOT NULL,
  `car5` varchar(255) NOT NULL,
  `car6` varchar(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `audi`
--

INSERT INTO `audi` (`sno`, `model`, `cost`, `photo`, `millege`, `Engine`, `Cruisecontrol`, `parkingsensor`, `Duration`, `performance`, `comfort`, `safety`, `Automatic`, `rearacvents`, `abs`, `driverairbag`, `roof`, `car1`, `car2`, `car3`, `car4`, `car5`, `car6`) VALUES
(10, 'sbkj', 'hgsjgd', '86556-2.jpg', 'hjgjhd', 'gkhjsd', 'hjghjdghj', 'hghj', 'gh', 'ffgh', 'f', 'ghf', 'g', 'f', 'ghfkg', 'gfhjf', 'ghf', '85689-2.jpg', '2003-2.jpg', '79568-2.jpg', '68029-2.jpg', '77265-2.jpg', '80060-2.jpg'),
(11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'carr', '5000000', '54304-2.jpg', '10KMPL', '10KMPL', 'yes', 'yes', '5 years', 'good', 'good', 'good', 'yes', 'no', 'yes', 'yes', 'yes', '27514-2.jpg', '44992-2.jpg', '92284-2.jpg', '54195-2.jpg', '21846-2.jpg', '2634-2.jpg');
