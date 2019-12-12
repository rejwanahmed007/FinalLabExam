-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 05:15 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userid` int(3) NOT NULL,
  `id` varchar(12) NOT NULL,
  `passsword` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userid`, `id`, `passsword`, `name`, `email`, `usertype`) VALUES
(100, '12-20111-1', 'rejwan', 'Rejwan Ahmed', 'rejwan.ahmed@live.com', 'Admin'),
(101, '12-20111-2', 'rejwan', 'AHmed Fahad', 'rejwan.ahmed@live.com', 'User'),
(102, '12-20111-3', 'rejwan', 'Alamgir', 'rejwan.ahmed@live.com', 'User'),
(103, '12-20111-4', 'rejwan', 'Rifat', 'rejwan.ahmed@live.com', 'User'),
(104, '12-20111-5', 'rejwan', 'Forid', 'rejwan.ahmed@live.com', 'User');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
