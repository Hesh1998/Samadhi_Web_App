-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 16, 2021 at 03:16 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samadichildrenhome`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

DROP TABLE IF EXISTS `child`;
CREATE TABLE IF NOT EXISTS `child` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` longblob DEFAULT NULL,
  `initialname` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `fullname`, `dob`, `gender`, `image`, `initialname`) VALUES
(15, 'Heshan Nanayakkara', '2021-08-11', 'Male', NULL, 'N Nanayakkara');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

DROP TABLE IF EXISTS `donation`;
CREATE TABLE IF NOT EXISTS `donation` (
  `donarId` int(11) NOT NULL AUTO_INCREMENT,
  `donarName` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `address` text NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`donarId`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donarId`, `donarName`, `contact`, `address`, `type`) VALUES
(22, 'Heshan Nanayakkara', '0779654083', '256-E, Karapitiya, Galle.', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `labor`
--

DROP TABLE IF EXISTS `labor`;
CREATE TABLE IF NOT EXISTS `labor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(50) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `address` text NOT NULL,
  `company` varchar(15) NOT NULL,
  `initialname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labor`
--

INSERT INTO `labor` (`id`, `fullName`, `firstName`, `dob`, `gender`, `contact`, `address`, `company`, `initialname`) VALUES
(22, 'Heshan Nanayakkara', 'Heshan', '1998-07-21', 'male', '0779654083', '256-E, Karapitiya, Galle.', 'Sunshine', 'N K K H Nanayakkara');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `nic` varchar(12) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `initialName` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(35) NOT NULL,
  `post` varchar(10) NOT NULL,
  `image` longblob DEFAULT NULL,
  `contact` varchar(11) NOT NULL,
  PRIMARY KEY (`nic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`nic`, `firstName`, `lastName`, `initialName`, `dob`, `gender`, `address`, `email`, `post`, `image`, `contact`) VALUES
('199820302083', 'Heshan', 'Nanayakkara', 'N K K H Nanayakkara', '1998-07-21', 'male', '256-E, Karapitiya, Galle.', 'heshan@gmail.como', 'Admin', NULL, '0779654083');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
