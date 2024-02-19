-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 04:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `pass`) VALUES
(1, ' itsd', 'itsd@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_records`
--

CREATE TABLE `inventory_records` (
  `inv_id` int(255) NOT NULL,
  `devicename` varchar(255) NOT NULL,
  `serialnum` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory_records`
--

INSERT INTO `inventory_records` (`inv_id`, `devicename`, `serialnum`, `department`, `status`) VALUES
(2, 'NUC', '1', ' ITSD', 'DAMANGE'),
(3, 'SYSTEM UNIT', ' 2-2-2-2-2', 'CRIM', ' DISPOSAL'),
(4, 'PRINTER', ' 3-3-3-3--3', ' WOrld', 'USED'),
(5, 'NUC', ' 11', '11', ' USED'),
(6, 'SYSTEM UNIT', '12121', 'ITSD', 'DAMANGE'),
(7, 'PRINTER', '12313', '   ITSD', 'DAMANGE'),
(8, 'PRINTER', '1', '  1234', 'AVAILABLE'),
(9, 'NUC', '123341', ' 13', 'USED'),
(12, 'MONITOR', '10-10-10--16', 'ITSSS', 'DAMANGE'),
(13, 'SYSTEM UNIT', '12131', 'qeqweq', 'USED');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `schoolid` varchar(255) NOT NULL,
  `department` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `pass`, `schoolid`, `department`) VALUES
(15, 'Carl', 'Anthony', 'carl@gmail.com', 'nays', '10-10-10', 'ITSD'),
(16, 'james', 'villanueva', 'jamesvillanueva@gmail.com', '123', '10-10-10', 'CITE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_records`
--
ALTER TABLE `inventory_records`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventory_records`
--
ALTER TABLE `inventory_records`
  MODIFY `inv_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
