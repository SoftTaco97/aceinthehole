-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 16, 2019 at 04:20 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redacted_database_name`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `telephone` varchar(256) NOT NULL,
  `message` varchar(256) NOT NULL,
  `date` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration_form`
--

CREATE TABLE `registration_form` (
  `Name` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Emergency Contact` varchar(256) NOT NULL,
  `Emergency Contact Number` varchar(256) NOT NULL,
  `Age` varchar(256) NOT NULL,
  `Gender` varchar(256) NOT NULL,
  `Saturday Event` varchar(256) NOT NULL,
  `Saturday Registration Type` varchar(256) NOT NULL,
  `Sunday Event` varchar(256) NOT NULL,
  `Sunday Registration Type` varchar(256) NOT NULL,
  `Special Notes` varchar(256) NOT NULL,
  `Date Submitted` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
