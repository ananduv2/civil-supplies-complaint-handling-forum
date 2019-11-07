-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 03:48 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cschf`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(10) NOT NULL,
  `Rno` int(12) NOT NULL,
  `Body` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `Rno`, `Body`, `message`, `status`) VALUES
(1, 1207076143, 'please fix the quality', 'will be fixed soon', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ocom`
--

CREATE TABLE `ocom` (
  `id` int(11) NOT NULL,
  `uid` varchar(25) NOT NULL,
  `body` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `des` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ocom`
--

INSERT INTO `ocom` (`id`, `uid`, `body`, `status`, `msg`, `des`) VALUES
(922, 'aswathy', 'test 1', 1, 'test ', 1),
(923, 'aswathy', 'test 2', 1, '', 1),
(924, 'aswathy', 'test 3', 1, '', 1),
(925, 'gopika', 'test vendor', 1, 'test response 1', 2),
(926, 'gopika', 'ven com', 1, 'test response 2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `officers`
--

CREATE TABLE `officers` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `post` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`id`, `username`, `name`, `post`) VALUES
(1, 'amal', 'AmalKSanthosh', '1'),
(9, 'aswathy', 'Aswathy', '2'),
(10, 'gopika', 'Gopika', '3');

-- --------------------------------------------------------

--
-- Table structure for table `pdata`
--

CREATE TABLE `pdata` (
  `id` int(10) NOT NULL,
  `Rno` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `members` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdata`
--

INSERT INTO `pdata` (`id`, `Rno`, `name`, `members`) VALUES
(12, '1207076143', 'Bindu.S', 4);

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `id` int(10) NOT NULL,
  `Rno` varchar(10) NOT NULL,
  `pswrd` varchar(32) NOT NULL,
  `utype` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public`
--

INSERT INTO `public` (`id`, `Rno`, `pswrd`, `utype`) VALUES
(1, '1207076143', '9544721939', 2),
(2, 'admin', 'password', 0),
(3, 'amal', 'amal', 1),
(11, 'aswathy', 'aswathy', 1),
(12, 'gopika', 'gopika', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Rno` (`Rno`);

--
-- Indexes for table `ocom`
--
ALTER TABLE `ocom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officers`
--
ALTER TABLE `officers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `pdata`
--
ALTER TABLE `pdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`Rno`,`pswrd`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ocom`
--
ALTER TABLE `ocom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=927;

--
-- AUTO_INCREMENT for table `officers`
--
ALTER TABLE `officers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pdata`
--
ALTER TABLE `pdata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `public`
--
ALTER TABLE `public`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
