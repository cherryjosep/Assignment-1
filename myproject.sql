-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2014 at 02:38 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `site_feedback_form`
--

CREATE TABLE IF NOT EXISTS `site_feedback_form` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `site_feedback_form`
--

INSERT INTO `site_feedback_form` (`sno`, `name`, `email`, `sub`, `message`) VALUES
(1, 'Cherry Jose', 'cherryjosep@gmail.com', 'csdsad', 'sadsadsa'),
(2, 'ssdsdsds', 'cherryjose1@gmail.com', 'sadsadsa', 'asdsadsad'),
(3, 'sdsdsd', 'cherryjose1@gmail.com', 'sadsadsa', 'sadsadsadsd'),
(4, 'cherryjose1@gmail.com', 'cherryjose1@gmail.com', 'csdsad', 'cccc'),
(5, 'Satheesh', 'sathe@gmail.com', 'jdoaksdhasihd', 'hello');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
