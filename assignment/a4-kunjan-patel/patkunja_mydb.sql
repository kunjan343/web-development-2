-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2019 at 04:52 PM
-- Server version: 10.3.17-MariaDB
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
-- Database: `patkunja_mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblGames`
--

CREATE TABLE `tblGames` (
  `gameId` int(3) NOT NULL,
  `gameName` varchar(100) NOT NULL,
  `gamePrice` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblGames`
--

INSERT INTO `tblGames` (`gameId`, `gameName`, `gamePrice`) VALUES
(5, 'Assassins creed origin', 49),
(4, 'Rainbow six seige', 29),
(6, 'Call of duty', 139),
(7, 'Anthem', 35),
(8, 'Rocket League', 20),
(9, 'Risk of Rain 2', 25),
(10, 'Titanfall 2', 49);

-- --------------------------------------------------------

--
-- Table structure for table `tblUsers`
--

CREATE TABLE `tblUsers` (
  `userId` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblUsers`
--

INSERT INTO `tblUsers` (`userId`, `username`, `password`) VALUES
(1, 'kunjan', '$2y$10$JvjzAE/pTOLBjNP.cnrqneZIfK.BqSOEwgxnmbNp4iSLt8weOC4sG'),
(2, 'kunj', '$2y$10$obYheUdxdyIZDiaZhK1OXOIvm9/.k5jJc.PU2rU5G7MWD1OemOofy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblGames`
--
ALTER TABLE `tblGames`
  ADD PRIMARY KEY (`gameId`);

--
-- Indexes for table `tblUsers`
--
ALTER TABLE `tblUsers`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblGames`
--
ALTER TABLE `tblGames`
  MODIFY `gameId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblUsers`
--
ALTER TABLE `tblUsers`
  MODIFY `userId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
