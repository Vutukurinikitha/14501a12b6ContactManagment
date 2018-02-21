-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2018 at 05:45 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `promptcreate`
--

CREATE TABLE IF NOT EXISTS `promptcreate` (
`id` int(100) NOT NULL,
  `gname` varchar(256) NOT NULL,
  `gid` varchar(256) NOT NULL,
  `gmail` varchar(256) NOT NULL,
  `gphone` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promptcreate`
--

INSERT INTO `promptcreate` (`id`, `gname`, `gid`, `gmail`, `gphone`) VALUES
(3, '', '', '', 0),
(4, 'vsfgg', 'undefined', 'undefined', 0),
(5, '2uu2u', 'undefined', 'bhfjf', 54246),
(6, 'undefined', '5443', 'dfahj', 0),
(7, 'undefined', 'undefined', 'vuty', 0),
(8, 'nikitha', 'undefined', 'vuty', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `promptcreate`
--
ALTER TABLE `promptcreate`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `promptcreate`
--
ALTER TABLE `promptcreate`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
