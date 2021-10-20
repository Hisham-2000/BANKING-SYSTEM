-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 07:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `Name`, `Email`, `Balance`) VALUES
(1, 'Ashiq', 'ashiq1@gmail.com', 2500),
(2, 'Bilal', 'billu@gmail.com', 2400),
(3, 'Ashwin', 'ashwinimp@gmail.com', 3775),
(4, 'Vaishnav', 'vaishnav111@gmail.co', 2350),
(5, 'Aravind', 'suniav@gmail.com', 3000),
(6, 'Vaishak', 'vnair@gmail.com', 2600),
(7, 'Rahul', 'r240@gmail.com', 4150),
(8, 'KP', 'kp10@gmail.com', 4200),
(9, 'Hadi', 'hadi@gmail.com', 4500),
(10, 'Nived', 'nmb@gmail.com', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Id` int(10) NOT NULL,
  `Sender` varchar(20) NOT NULL,
  `Receiver` varchar(20) NOT NULL,
  `Amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Id`, `Sender`, `Receiver`, `Amount`) VALUES
(1, 'Vaishnav', 'KP', 300),
(2, 'Vaishak', 'Rahul', 500),
(3, 'Ashiq', 'Ashwin', 400),
(4, 'Aravind', 'Hadi', 500),
(5, 'Hadi', 'Aravind', 500),
(6, 'Rahul', 'Vaishak', 350),
(7, 'Vaishak', 'Vaishnav', 350),
(8, 'Aravind', 'Bilal', 500),
(9, 'Ashwin', 'Vaishak', 350),
(10, 'Rahul', 'Ashiq', 500),
(11, 'KP', 'Bilal', 400),
(12, 'Ashwin', 'Vaishak', 150),
(13, 'Hadi', 'Aravind', 500),
(14, 'Aravind', 'Ashwin', 300),
(15, 'Aravind', 'KP', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
