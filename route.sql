-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2017 at 05:30 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `route`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cID` int(11) NOT NULL,
  `cName` varchar(50) NOT NULL,
  `cAddress` varchar(50) NOT NULL,
  `cTelp` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cID`, `cName`, `cAddress`, `cTelp`, `username`) VALUES
(1, 'Telkomsel', 'Jl. Telkomsel', '08121212', '');

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `mID` int(11) NOT NULL,
  `mName` varchar(50) NOT NULL,
  `mPort` int(50) NOT NULL,
  `mCapacity` int(50) NOT NULL,
  `ClientType` tinyint(1) NOT NULL,
  `vID` int(11) NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`mID`, `mName`, `mPort`, `mCapacity`, `ClientType`, `vID`, `username`) VALUES
(5, 'OCR10T-Client', 10, 10, 1, 1, ''),
(6, 'ORC10T', 10, 10, 0, 1, ''),
(7, 'Repeater Card', 10, 0, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `modulne`
--

CREATE TABLE `modulne` (
  `mneID` int(11) NOT NULL,
  `mID` int(11) NOT NULL,
  `nID` int(11) NOT NULL,
  `rack` int(11) NOT NULL,
  `subrack` int(11) NOT NULL,
  `slot` int(11) NOT NULL,
  `port` int(11) NOT NULL,
  `mneCapacity` varchar(15) NOT NULL,
  `mneDirection` int(20) NOT NULL,
  `location` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modulne`
--

INSERT INTO `modulne` (`mneID`, `mID`, `nID`, `rack`, `subrack`, `slot`, `port`, `mneCapacity`, `mneDirection`, `location`, `username`) VALUES
(0, 5, 1, 1, 1, 10, 1, '', 1, '', ''),
(2, 5, 1, 1, 1, 2, 1, '', 2, '', ''),
(3, 7, 2, 1, 1, 1, 1, '', 1, '', ''),
(4, 7, 2, 1, 1, 1, 1, '', 3, '', ''),
(5, 5, 3, 1, 1, 12, 1, '', 3, '', ''),
(6, 6, 3, 1, 1, 2, 1, '', 2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `networkelement`
--

CREATE TABLE `networkelement` (
  `nID` int(11) NOT NULL,
  `nName` varchar(50) NOT NULL,
  `nDesc` varchar(50) NOT NULL,
  `nLat` int(11) NOT NULL,
  `nLong` int(11) NOT NULL,
  `tID` int(11) NOT NULL,
  `repeater` tinyint(1) NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `networkelement`
--

INSERT INTO `networkelement` (`nID`, `nName`, `nDesc`, `nLat`, `nLong`, `tID`, `repeater`, `username`) VALUES
(1, 'Jatinegara 1', 'Jatinegara 100G', 1000, 10000, 1, 0, ''),
(2, 'Cirebon', 'Cirebon reapeater', 1000, 1000, 1, 1, ''),
(3, 'Semarang', 'Semarang 100G', 1000, 10000, 1, 1, ''),
(4, 'Kebalen 1', 'Kebalen 100G', 1000, 1000, 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `rID` int(11) NOT NULL,
  `rNEa` varchar(50) NOT NULL,
  `rNEz` varchar(50) NOT NULL,
  `rTipe` varchar(15) NOT NULL,
  `rDesc` varchar(50) NOT NULL,
  `cID` int(11) NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `routedetil`
--

CREATE TABLE `routedetil` (
  `rID` int(11) NOT NULL,
  `rDetilID` int(11) NOT NULL,
  `mneID` int(11) NOT NULL,
  `rdDirectionType` varchar(10) NOT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transmission`
--

CREATE TABLE `transmission` (
  `TID` int(50) NOT NULL,
  `TName` varchar(50) NOT NULL,
  `TDescription` varchar(50) NOT NULL,
  `VID` int(50) NOT NULL,
  `username` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transmission`
--

INSERT INTO `transmission` (`TID`, `TName`, `TDescription`, `VID`, `username`) VALUES
(1, 'Java BB 100G', 'Java BB 100G', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='1';

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vID` int(11) NOT NULL,
  `vName` varchar(11) NOT NULL,
  `vDesc` varchar(40) DEFAULT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vID`, `vName`, `vDesc`, `username`) VALUES
(1, 'Huawei', 'PT. Huawei Tech Investment', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cID`),
  ADD UNIQUE KEY `cName` (`cName`),
  ADD KEY `cName_2` (`cName`),
  ADD KEY `cName_3` (`cName`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`mID`),
  ADD KEY `mName` (`mName`),
  ADD KEY `vID` (`vID`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `modulne`
--
ALTER TABLE `modulne`
  ADD PRIMARY KEY (`mneID`),
  ADD KEY `nID` (`nID`),
  ADD KEY `mID` (`mID`),
  ADD KEY `mneDirection` (`mneDirection`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `networkelement`
--
ALTER TABLE `networkelement`
  ADD PRIMARY KEY (`nID`),
  ADD KEY `nName` (`nName`),
  ADD KEY `tID` (`tID`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`rID`),
  ADD KEY `cID` (`cID`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `routedetil`
--
ALTER TABLE `routedetil`
  ADD PRIMARY KEY (`rDetilID`),
  ADD KEY `mneID` (`mneID`),
  ADD KEY `rID` (`rID`),
  ADD KEY `no` (`no`);

--
-- Indexes for table `transmission`
--
ALTER TABLE `transmission`
  ADD PRIMARY KEY (`TID`),
  ADD KEY `VID` (`VID`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vID`),
  ADD KEY `vName` (`vName`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `mID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `networkelement`
--
ALTER TABLE `networkelement`
  MODIFY `nID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `rID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `routedetil`
--
ALTER TABLE `routedetil`
  MODIFY `rDetilID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transmission`
--
ALTER TABLE `transmission`
  MODIFY `TID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `modul`
--
ALTER TABLE `modul`
  ADD CONSTRAINT `modul_ibfk_1` FOREIGN KEY (`vID`) REFERENCES `vendor` (`vID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `modulne`
--
ALTER TABLE `modulne`
  ADD CONSTRAINT `modulne_ibfk_1` FOREIGN KEY (`nID`) REFERENCES `networkelement` (`nID`),
  ADD CONSTRAINT `modulne_ibfk_2` FOREIGN KEY (`mID`) REFERENCES `modul` (`mID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `modulne_ibfk_3` FOREIGN KEY (`mneDirection`) REFERENCES `networkelement` (`nID`);

--
-- Constraints for table `networkelement`
--
ALTER TABLE `networkelement`
  ADD CONSTRAINT `networkelement_ibfk_1` FOREIGN KEY (`tID`) REFERENCES `transmission` (`TID`);

--
-- Constraints for table `route`
--
ALTER TABLE `route`
  ADD CONSTRAINT `route_ibfk_1` FOREIGN KEY (`cID`) REFERENCES `customer` (`cID`);

--
-- Constraints for table `routedetil`
--
ALTER TABLE `routedetil`
  ADD CONSTRAINT `routedetil_ibfk_1` FOREIGN KEY (`rDetilID`) REFERENCES `route` (`rID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `routedetil_ibfk_2` FOREIGN KEY (`mneID`) REFERENCES `modulne` (`mneID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transmission`
--
ALTER TABLE `transmission`
  ADD CONSTRAINT `transmission_ibfk_1` FOREIGN KEY (`VID`) REFERENCES `vendor` (`vID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
