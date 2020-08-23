-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 06:04 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assetmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `CompID` int(10) NOT NULL,
  `CompName` varchar(30) NOT NULL,
  `IP` varchar(30) NOT NULL,
  `Manufacturer` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `OS` varchar(70) NOT NULL,
  `AssTag` varchar(10) NOT NULL,
  `Capacity` int(20) NOT NULL,
  `Processor` int(10) NOT NULL,
  `SN` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `printer`
--

CREATE TABLE `printer` (
  `PrinterID` int(11) NOT NULL,
  `PrinterName` varchar(30) NOT NULL,
  `Branch` varchar(30) NOT NULL,
  `Vendor` varchar(30) NOT NULL,
  `IP` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `routers`
--

CREATE TABLE `routers` (
  `RouterID` int(10) NOT NULL,
  `RouterName` varchar(30) NOT NULL,
  `IP` varchar(30) NOT NULL,
  `Manufacturer` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `IOS` varchar(70) NOT NULL,
  `RAM` int(20) NOT NULL,
  `YearMake` int(10) NOT NULL,
  `SN` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

CREATE TABLE `servers` (
  `ServID` int(10) NOT NULL,
  `ServName` varchar(30) NOT NULL,
  `IP` varchar(30) NOT NULL,
  `Manufacturer` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `OS` varchar(70) NOT NULL,
  `AssTag` varchar(10) NOT NULL,
  `Capacity` int(20) NOT NULL,
  `Processor` int(10) NOT NULL,
  `SN` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `switch`
--

CREATE TABLE `switch` (
  `SwitchID` int(10) NOT NULL,
  `SwitchName` varchar(30) NOT NULL,
  `IP` varchar(30) NOT NULL,
  `Manufacturer` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `IOS` varchar(70) NOT NULL,
  `RAM` int(20) NOT NULL,
  `YearMake` int(10) NOT NULL,
  `SN` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`CompID`);

--
-- Indexes for table `printer`
--
ALTER TABLE `printer`
  ADD PRIMARY KEY (`PrinterID`);

--
-- Indexes for table `routers`
--
ALTER TABLE `routers`
  ADD PRIMARY KEY (`RouterID`);

--
-- Indexes for table `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`ServID`);

--
-- Indexes for table `switch`
--
ALTER TABLE `switch`
  ADD PRIMARY KEY (`SwitchID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `CompID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `printer`
--
ALTER TABLE `printer`
  MODIFY `PrinterID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `routers`
--
ALTER TABLE `routers`
  MODIFY `RouterID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servers`
--
ALTER TABLE `servers`
  MODIFY `ServID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `switch`
--
ALTER TABLE `switch`
  MODIFY `SwitchID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
