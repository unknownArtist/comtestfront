-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2012 at 11:34 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `comtest.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `contest`
--

CREATE TABLE IF NOT EXISTS `contest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contestName` varchar(255) NOT NULL,
  `contestType` text NOT NULL,
  `prize` text NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `contestDetail` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contest`
--

INSERT INTO `contest` (`id`, `contestName`, `contestType`, `prize`, `startDate`, `endDate`, `contestDetail`, `status`) VALUES
(1, 'Contest No. 1', 'youtube', 'option2', '2012-11-11', '2012-12-19', 'ghxfgh', 'Deactive'),
(3, 'Contest No.2', 'youtube', 'option1', '2012-11-08', '2012-11-23', 'ghdfgfdx', 'Active'),
(4, 'Contest No. 3', 'youtube', 'option1', '2012-11-08', '2012-11-14', 'sfsdfsd', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `prize`
--

CREATE TABLE IF NOT EXISTS `prize` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prizeName` varchar(255) NOT NULL,
  `pointEX` text NOT NULL,
  `prizeValue` varchar(255) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `prizeDetail` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `prize`
--

INSERT INTO `prize` (`id`, `prizeName`, `pointEX`, `prizeValue`, `startDate`, `endDate`, `prizeDetail`, `status`) VALUES
(1, 'fdsgsf', 'dfgdfg', 'dfgdf', '2012-11-11', '2012-12-19', 'dfdfgdfgd', 1),
(3, 'fdsgsf', 'dfgdfg', 'dfgdf', '2012-11-11', '2012-12-19', 'fxdgfhdfhdgfhfdgggggggggggggg', 1),
(5, 'fdsgsf', 'dfgdfg', 'dfgdf', '2012-11-11', '2012-12-19', 'jhhgjgkjgjkmghk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taskName` text NOT NULL,
  `taskType` text NOT NULL,
  `taskLink` text NOT NULL,
  `postbLink` text NOT NULL,
  `networkName` text NOT NULL,
  `networkPay` double NOT NULL,
  `taskPoint` double NOT NULL,
  `taskPay` double NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `status` int(11) NOT NULL,
  `taskDetail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `taskName`, `taskType`, `taskLink`, `postbLink`, `networkName`, `networkPay`, `taskPoint`, `taskPay`, `startDate`, `endDate`, `status`, `taskDetail`) VALUES
(18, 'asfda', 'hasghasdga', 'asdad', 'asda', 'fdgfghg', 34, 78, 454, '2012-11-11', '2012-12-19', 1, 'sdfdghghghghghghghghghghg'),
(19, 'survey', 'hasghasdga', 'hagfdksjhgj', 'dsfasgfdf', 'fdgfghg', 34, 3, 454, '2012-11-14', '2012-12-19', 1, 'sdfdghghghghghghghghghghg'),
(20, 'survey', 'hasghasdga', 'hagfdksjhgj', 'dsfasgfdf', 'fdgfghg', 34, 3, 454, '2012-11-14', '2012-12-19', 1, 'sdfdghghghghghghghghghghg'),
(22, 'task1', 'uerywu', 'wuer', 'dsfghs', 'hsfgshd', 346, 475, 47, '2012-11-11', '2012-12-19', 1, 'jhgdjfgvfdg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `zipcode` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `password`, `zipcode`, `status`) VALUES
(6, 'farah habib', 'shujaat57@yahoo.com', 'ccb0989662211f61edae2e26d58ea92f', 20101, 0),
(8, 'sehrish habib', 'habibsehrish@gmail.com', '4dcd33cecdc2123d1cbd3e62cad4083ed82fba46', 2389, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `emailID` text NOT NULL,
  `status` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `phoneNo` int(11) NOT NULL,
  `streetAdd` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `referral` text NOT NULL,
  `userImgs` text NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `userName`, `password`, `emailID`, `status`, `role`, `phoneNo`, `streetAdd`, `city`, `referral`, `userImgs`) VALUES
(7, '', '', 'admin', 'admin', 'admin@gmail.com', 0, '', 54645, 'hgfdd', 'hgfdhf', 'fhdjhg', 'eccbc87e4b5ce2fe28308fd9f2a7baf31354060111.jpg'),
(8, '', '', 'sehrish', 'sehrish', 'sehrish@gnail.com', 0, '', 4536, 'hfsjhd', 'dhsfj', 'dhsj', 'd3d9446802a44259755d38e6d163e8201353926273.jpg'),
(9, '', '', 'ali', 'ali', 'ali@gmail.com', 0, '', 3424, 'dsfks', 'kdfs', 'kdsfs', 'c9f0f895fb98ab9159f51fd0297e236d1353927192.jpg'),
(12, '', '', 'fara', 'fara', 'fara@gmail.com', 0, '', 67778, 'hdg', 'bhn', 'hghj', '1679091c5a880faf6fb5e6087eb1b2dc1353988652.jpg'),
(13, '', '', 'umer', 'umer', 'umer@gmail.com', 0, '', 635462, 'fhsdg', 'hfgds', 'jfdhs', 'c9f0f895fb98ab9159f51fd0297e236d1353989116.jpg'),
(15, '', '', 'fgshfdg', 'hdsg', 'ali@gmail.com', 0, '', 23131, 'dsfa', 'dfsdf', 'sfdsf', 'a87ff679a2f3e71d9181a67b7542122c1354060084.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
