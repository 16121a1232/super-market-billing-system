-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2018 at 12:08 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market`
--
CREATE DATABASE IF NOT EXISTS `market` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `market`;

-- --------------------------------------------------------

--
-- Table structure for table `cbill`
--

CREATE TABLE `cbill` (
  `Id` int(10) NOT NULL,
  `cust` varchar(20) NOT NULL,
  `item1` text NOT NULL,
  `cost1` int(10) NOT NULL,
  `quantity1` int(10) NOT NULL,
  `total1` int(10) NOT NULL,
  `item2` text NOT NULL,
  `cost2` int(10) NOT NULL,
  `quantity2` int(10) NOT NULL,
  `total2` int(10) NOT NULL,
  `item3` text NOT NULL,
  `cost3` int(10) NOT NULL,
  `quantity3` int(10) NOT NULL,
  `total3` int(10) NOT NULL,
  `grandtotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cbill`
--

INSERT INTO `cbill` (`Id`, `cust`, `item1`, `cost1`, `quantity1`, `total1`, `item2`, `cost2`, `quantity2`, `total2`, `item3`, `cost3`, `quantity3`, `total3`, `grandtotal`) VALUES
(1, 'haziraa', 'pencil', 5, 3, 15, 'fruits', 10, 2, 20, 'biscuits', 20, 3, 60, 95),
(2, 'haziraa', 'pencil', 5, 4, 20, 'vegetables', 5, 6, 30, 'cosmetics', 50, 3, 150, 200),
(3, 'niha', 'pen', 10, 4, 40, 'vegetables', 5, 3, 15, 'cosmetics', 50, 10, 500, 555),
(4, 'niha', 'pencil', 5, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`) VALUES
('amar', 'amar1234', 'amar@gmail.com'),
('niha', 'niha1234', 'niha@gmail.com'),
('haziraa', 'haziraa', 'haziraa@gmail.com'),
('sudeephi', 'sudi', 'sudi@gmai.com'),
('niha', 'niha', 'niha@gmail.com'),
('suddi', 'suddi', 'suddi@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
