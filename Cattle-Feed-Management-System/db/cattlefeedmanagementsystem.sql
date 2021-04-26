-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 09:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cattlefeedmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `Announcement` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`Announcement`) VALUES
('site under maintenance');

-- --------------------------------------------------------

--
-- Table structure for table `budgetreport`
--

CREATE TABLE `budgetreport` (
  `fUsername` varchar(10) NOT NULL,
  `sBudget` int(20) NOT NULL,
  `bUsed` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `budgetreport`
--

INSERT INTO `budgetreport` (`fUsername`, `sBudget`, `bUsed`) VALUES
('F-1', 7000, 5000),
('F-2', 6000, 5000),
('F-3', 2000, 500),
('F-4', 5000, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `busreport`
--

CREATE TABLE `busreport` (
  `Sectors` varchar(30) NOT NULL,
  `Base Year` int(10) NOT NULL,
  `Year 1` int(10) NOT NULL,
  `Year 2` int(10) NOT NULL,
  `Year 3` int(10) NOT NULL,
  `Year 4` int(10) NOT NULL,
  `Year 5` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `busreport`
--

INSERT INTO `busreport` (`Sectors`, `Base Year`, `Year 1`, `Year 2`, `Year 3`, `Year 4`, `Year 5`) VALUES
('Energy needed', 1411, 1876, 2047, 2231, 2395, 2544),
('Energy Shortage', 265, 636, 799, 238, 265, 390),
('Farmers', 785, 881, 931, 1014, 1067, 1158),
('Herd Growth', 1506, 2023, 2707, 2911, 3126, 3345),
('Meat Production', 50098, 51096, 53083, 60988, 65621, 69965),
('Milk Production', 32240, 32110, 33910, 36960, 39600, 42190);

-- --------------------------------------------------------

--
-- Table structure for table `cattledetails`
--

CREATE TABLE `cattledetails` (
  `fUsername` varchar(10) NOT NULL,
  `cAmount` int(10) NOT NULL,
  `scAmount` int(10) NOT NULL,
  `fReq` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cattledetails`
--

INSERT INTO `cattledetails` (`fUsername`, `cAmount`, `scAmount`, `fReq`) VALUES
('F-1', 30, 6, 120),
('F-2', 15, 3, 60),
('F-3', 10, 2, 50),
('F-4', 6, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cattlehealthdetails`
--

CREATE TABLE `cattlehealthdetails` (
  `aId` varchar(20) NOT NULL,
  `lSickness` varchar(30) NOT NULL,
  `nDisease` varchar(30) NOT NULL,
  `checked` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cattlehealthdetails`
--

INSERT INTO `cattlehealthdetails` (`aId`, `lSickness`, `nDisease`, `checked`) VALUES
('Buffalo3', '5-4-2021', 'anaplasmosis', 'Mr. Tom'),
('Cow1', '1-4-2021', 'Anthrax', 'Mr. Tom'),
('Goat2', '3-4-2021', 'Goat pox', 'Mr. Arnob'),
('Sheep3', '2-4-2021', 'Scabby mouth', 'Mr. Arnob');

-- --------------------------------------------------------

--
-- Table structure for table `cattleperformance`
--

CREATE TABLE `cattleperformance` (
  `fUsername` varchar(10) NOT NULL,
  `mProduced` int(10) NOT NULL,
  `weightGain` int(10) NOT NULL,
  `cIncrease` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cattleperformance`
--

INSERT INTO `cattleperformance` (`fUsername`, `mProduced`, `weightGain`, `cIncrease`) VALUES
('F-1', 70, 50, 12),
('F-2', 50, 30, 10),
('F-3', 60, 40, 8),
('F-4', 55, 45, 7);

-- --------------------------------------------------------

--
-- Table structure for table `cattlescheduleandfeedmixratio`
--

CREATE TABLE `cattlescheduleandfeedmixratio` (
  `type` varchar(20) NOT NULL,
  `fItems` varchar(30) NOT NULL,
  `ratio` varchar(10) NOT NULL,
  `schedule` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cattlescheduleandfeedmixratio`
--

INSERT INTO `cattlescheduleandfeedmixratio` (`type`, `fItems`, `ratio`, `schedule`) VALUES
('Buffalo', 'Grass,Straw,Rice', '3:2:1', '6am, 1pm, 6pm, 10pm'),
('Cow', 'Grass,Straw', '3:1	', '6am, 1pm, 6pm, 10pm'),
('Goat', 'Grass,Leaf', '2:1', '6am, 1pm, 6pm, 10pm'),
('Sheep', 'Grass,Rice', '4:1', '6am, 1pm, 6pm, 10pm');

-- --------------------------------------------------------

--
-- Table structure for table `contactadmin`
--

CREATE TABLE `contactadmin` (
  `text` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactadmin`
--

INSERT INTO `contactadmin` (`text`) VALUES
('F-2 requesting to reset password');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `Sources` varchar(20) NOT NULL,
  `Amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`Sources`, `Amount`) VALUES
('Cattle Feed', 10000),
('Depreciation', 5000),
('Interest', 10000),
('Maintenance', 10000),
('Marketing', 5000),
('Medical Treatment', 15000),
('Raw Materials', 10000),
('Salary', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `farmerpayroll`
--

CREATE TABLE `farmerpayroll` (
  `fUsername` varchar(10) NOT NULL,
  `aPaid` int(20) NOT NULL,
  `wAmount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmerpayroll`
--

INSERT INTO `farmerpayroll` (`fUsername`, `aPaid`, `wAmount`) VALUES
('F-1', 5000, 2000),
('F-2', 7000, 5000),
('F-3', 8000, 7000),
('F-4', 10000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `farmerperformance`
--

CREATE TABLE `farmerperformance` (
  `fUsername` varchar(10) NOT NULL,
  `cAmount` int(10) NOT NULL,
  `sCattle` int(10) NOT NULL,
  `pGained` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmerperformance`
--

INSERT INTO `farmerperformance` (`fUsername`, `cAmount`, `sCattle`, `pGained`) VALUES
('F-1', 25, 5, 20000),
('F-2', 15, 3, 22000),
('F-3', 10, 2, 25000),
('F-4', 12, 3, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `feedanalytics`
--

CREATE TABLE `feedanalytics` (
  `Feedstuff` varchar(30) NOT NULL,
  `CP` int(10) NOT NULL,
  `ME` int(10) NOT NULL,
  `Cost/kg` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedanalytics`
--

INSERT INTO `feedanalytics` (`Feedstuff`, `CP`, `ME`, `Cost/kg`) VALUES
('Maize Bran', 82, 115, 17),
('Maize Meal', 970, 1360, 35),
('Napier Grass', 1030, 80, 20),
('Soyabean Meal', 4510, 1210, 40),
('Star Grass Hay', 800, 75, 11);

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `Sources` varchar(20) NOT NULL,
  `Amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`Sources`, `Amount`) VALUES
('Sale of Livestock pr', 10000),
('Sale of produced mil', 50000),
('Surplus Feed', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `item` varchar(10) NOT NULL,
  `sInventory` int(10) NOT NULL,
  `dInventory` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`item`, `sInventory`, `dInventory`) VALUES
('Barley', 48, 27),
('Buckwheat', 46, 32),
('Corn', 56, 40),
('Grass', 90, 50),
('Rice', 50, 20),
('Straw', 65, 15),
('Wheat', 70, 30);

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `Username` varchar(10) NOT NULL,
  `User Type` text NOT NULL,
  `Priority` text NOT NULL,
  `Comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`Username`, `User Type`, `Priority`, `Comments`) VALUES
('bob42', 'Manager', 'Major', 'website crashed'),
('james4t', 'Health Expert', 'Minor', 'Couldn\'t find login option'),
('kent11', 'Manager', 'Minor', 'page stutters'),
('ryanH', 'Health Expert', 'Major', 'Site froze then could not enter registration details');

-- --------------------------------------------------------

--
-- Table structure for table `milk`
--

CREATE TABLE `milk` (
  `DMProduced` varchar(30) NOT NULL,
  `Volume` int(10) NOT NULL,
  `Price per unit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `milk`
--

INSERT INTO `milk` (`DMProduced`, `Volume`, `Price per unit`) VALUES
('Family Use', 2500, 100),
('Fed to calves', 5200, 100),
('Milk Sold', 7200, 120),
('Other usage', 4000, 80);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `Question` varchar(30) NOT NULL,
  `AnswerA` varchar(30) NOT NULL,
  `AnswerB` varchar(30) NOT NULL,
  `AnswerC` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transactionhistory`
--

CREATE TABLE `transactionhistory` (
  `type` varchar(10) NOT NULL,
  `aInvested` int(10) NOT NULL,
  `pGained` int(10) NOT NULL,
  `oExpenses` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactionhistory`
--

INSERT INTO `transactionhistory` (`type`, `aInvested`, `pGained`, `oExpenses`) VALUES
('Buffalo', 2200, 5000, 800),
('Cow', 2500, 5500, 1000),
('Goat', 1500, 4000, 500),
('Sheep', 2000, 3500, 700);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`) VALUES
('A-1', '@dMIN1', 'a1@gmail.com'),
('M-1', 'manager1', 'm1@gmail.com'),
('M-2', 'mAnAger2', 'm2@gmail.com'),
('M-3', 'manager3', 'm3@gmail.com'),
('M-4', 'mAnAger', 'm4@gmail.com'),
('M-5', 'mANAg', 'm55@gmail.com'),
('M-6', 'manager6', 'm6@gmail.com'),
('M-7', 'manager7', 'm7@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`Announcement`);

--
-- Indexes for table `budgetreport`
--
ALTER TABLE `budgetreport`
  ADD PRIMARY KEY (`fUsername`);

--
-- Indexes for table `busreport`
--
ALTER TABLE `busreport`
  ADD PRIMARY KEY (`Sectors`);

--
-- Indexes for table `cattledetails`
--
ALTER TABLE `cattledetails`
  ADD PRIMARY KEY (`fUsername`);

--
-- Indexes for table `cattlehealthdetails`
--
ALTER TABLE `cattlehealthdetails`
  ADD PRIMARY KEY (`aId`);

--
-- Indexes for table `cattleperformance`
--
ALTER TABLE `cattleperformance`
  ADD PRIMARY KEY (`fUsername`);

--
-- Indexes for table `cattlescheduleandfeedmixratio`
--
ALTER TABLE `cattlescheduleandfeedmixratio`
  ADD PRIMARY KEY (`type`);

--
-- Indexes for table `contactadmin`
--
ALTER TABLE `contactadmin`
  ADD PRIMARY KEY (`text`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`Sources`);

--
-- Indexes for table `farmerpayroll`
--
ALTER TABLE `farmerpayroll`
  ADD PRIMARY KEY (`fUsername`);

--
-- Indexes for table `farmerperformance`
--
ALTER TABLE `farmerperformance`
  ADD PRIMARY KEY (`fUsername`);

--
-- Indexes for table `feedanalytics`
--
ALTER TABLE `feedanalytics`
  ADD PRIMARY KEY (`Feedstuff`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`Sources`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`item`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `milk`
--
ALTER TABLE `milk`
  ADD PRIMARY KEY (`DMProduced`);

--
-- Indexes for table `transactionhistory`
--
ALTER TABLE `transactionhistory`
  ADD PRIMARY KEY (`type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
