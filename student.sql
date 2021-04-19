-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2018 at 08:36 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `studid` int(250) NOT NULL,
  `stname` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `internet` int(250) NOT NULL,
  `medu` int(250) NOT NULL,
  `fedu` int(250) NOT NULL,
  `fjob` varchar(250) NOT NULL,
  `traveltime` int(250) NOT NULL,
  `studytime` int(250) NOT NULL,
  `freetime` int(250) NOT NULL,
  `activity` int(250) NOT NULL,
  `t1` int(250) NOT NULL,
  `t2` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`studid`, `stname`, `address`, `internet`, `medu`, `fedu`, `fjob`, `traveltime`, `studytime`, `freetime`, `activity`, `t1`, `t2`) VALUES
(1, 'Atul', 'u', 1, 4, 4, 'Service', 1, 4, 4, 1, 18, 18),
(2, 'Guru', 'u', 1, 2, 4, 'service', 4, 3, 2, 0, 14, 9);

-- --------------------------------------------------------

--
-- Table structure for table `enter`
--

CREATE TABLE `enter` (
  `id` int(255) NOT NULL,
  `facname` varchar(500) NOT NULL,
  `emailid` varchar(200) NOT NULL,
  `pswd` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enter`
--

INSERT INTO `enter` (`id`, `facname`, `emailid`, `pswd`) VALUES
(9, 'Atul', '', '367cde6ef1fc3e07ebe63476bb4a6c3f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`studid`);

--
-- Indexes for table `enter`
--
ALTER TABLE `enter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `studid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enter`
--
ALTER TABLE `enter`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
