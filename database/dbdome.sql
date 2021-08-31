-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2015 at 08:10 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbdome`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE IF NOT EXISTS `tbladmin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`Id`, `uname`, `pwd`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbldateposted`
--

CREATE TABLE IF NOT EXISTS `tbldateposted` (
  `dateId` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `mobile_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`dateId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbldateposted`
--

INSERT INTO `tbldateposted` (`dateId`, `date`, `mobile_Id`) VALUES
(1, '2015-03-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblmessage`
--

CREATE TABLE IF NOT EXISTS `tblmessage` (
  `message_Id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text,
  `sender_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`message_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblmobilepost`
--

CREATE TABLE IF NOT EXISTS `tblmobilepost` (
  `mobile_Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`mobile_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblmobilepost`
--

INSERT INTO `tblmobilepost` (`mobile_Id`, `name`, `brand`, `description`, `image`) VALUES
(1, 'sample', 'Samsung', 'sample', 'nokia-asha-202-203-25.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblsender`
--

CREATE TABLE IF NOT EXISTS `tblsender` (
  `sender_Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sender_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
