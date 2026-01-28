-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2025 at 09:22 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Admin` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Manage` int(11) NOT NULL DEFAULT '1',
  `Register` int(11) DEFAULT '1',
  `Payment` int(11) DEFAULT '1',
  `Result` int(11) DEFAULT '1',
  `Others` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Admin`, `Password`, `Manage`, `Register`, `Payment`, `Result`, `Others`) VALUES
(1, 'admin', 'admin', 1, 1, 1, 1, 1),
(2, 'user', '1234', 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `average`
--

CREATE TABLE `average` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Class` varchar(100) DEFAULT NULL,
  `Average` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `day_rep`
--

CREATE TABLE `day_rep` (
  `Id` int(11) NOT NULL,
  `Day` int(11) NOT NULL,
  `Month` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Registered` int(11) DEFAULT '0',
  `Sp_Reg` int(11) DEFAULT '0',
  `Spo_Reg` int(11) DEFAULT '0',
  `Paid` int(11) DEFAULT '0',
  `Sp_Paid` int(11) DEFAULT '0',
  `Spo_Paid` int(11) DEFAULT '0',
  `Deactivated` int(11) DEFAULT '0',
  `Activated` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `Id` int(11) NOT NULL,
  `Day` int(11) DEFAULT NULL,
  `Month` int(11) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `Expense` varchar(255) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE `money` (
  `Id` int(11) NOT NULL,
  `Pay` int(11) DEFAULT '0',
  `Reg` int(11) DEFAULT '0',
  `Spe` int(11) DEFAULT '0',
  `Spe_Reg` int(11) DEFAULT '0',
  `Spo` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`Id`, `Pay`, `Reg`, `Spe`, `Spe_Reg`, `Spo`) VALUES
(1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mon_rep`
--

CREATE TABLE `mon_rep` (
  `Id` int(11) NOT NULL,
  `Month` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Registered` int(11) DEFAULT '0',
  `Sp_Reg` int(11) DEFAULT '0',
  `Spo_Reg` int(11) DEFAULT '0',
  `Deactivate` int(11) DEFAULT '0',
  `Activate` int(11) DEFAULT '0',
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registery`
--

CREATE TABLE `registery` (
  `Id` int(11) NOT NULL,
  `FName` varchar(255) DEFAULT NULL,
  `SDay` int(11) DEFAULT '0',
  `SMonth` int(11) DEFAULT '0',
  `SYear` int(11) DEFAULT '0',
  `Class` varchar(100) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `RDate` varchar(50) DEFAULT NULL,
  `Contact` varchar(100) DEFAULT NULL,
  `Shift` varchar(100) DEFAULT NULL,
  `Level` varchar(100) DEFAULT NULL,
  `Locker` varchar(100) DEFAULT NULL,
  `SType` varchar(50) DEFAULT NULL,
  `Active` int(11) DEFAULT '0',
  `Stay` int(11) DEFAULT '0',
  `Prepay` int(11) DEFAULT '0',
  `Con` int(11) DEFAULT '0',
  `PDay` int(11) DEFAULT '0',
  `PMonth` int(11) DEFAULT '0',
  `PYear` int(11) DEFAULT '0',
  `PreCon` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Id` int(11) NOT NULL,
  `SID` int(11) DEFAULT NULL,
  `TID` int(11) DEFAULT NULL,
  `Result` int(11) DEFAULT NULL,
  `OutOf` int(11) DEFAULT NULL,
  `Class` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Sex` varchar(50) DEFAULT NULL,
  `Per` varchar(100) DEFAULT NULL,
  `Contact` varchar(100) DEFAULT NULL,
  `Class` varchar(100) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teach_log`
--

CREATE TABLE `teach_log` (
  `Id` int(11) NOT NULL,
  `Day` int(11) DEFAULT NULL,
  `Month` int(11) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `TID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `Id` int(11) NOT NULL,
  `Date` varchar(50) DEFAULT NULL,
  `OutOf` int(11) DEFAULT NULL,
  `Scored` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `average`
--
ALTER TABLE `average`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `day_rep`
--
ALTER TABLE `day_rep`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `mon_rep`
--
ALTER TABLE `mon_rep`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registery`
--
ALTER TABLE `registery`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teach_log`
--
ALTER TABLE `teach_log`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `day_rep`
--
ALTER TABLE `day_rep`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `money`
--
ALTER TABLE `money`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mon_rep`
--
ALTER TABLE `mon_rep`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registery`
--
ALTER TABLE `registery`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teach_log`
--
ALTER TABLE `teach_log`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
