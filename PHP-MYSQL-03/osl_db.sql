-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 24, 2022 at 01:34 PM
-- Server version: 8.0.30-0ubuntu0.22.04.1
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osl_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `PHP_MYSQL_02`
--

CREATE TABLE `PHP_MYSQL_02` (
  `id` int NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `uname` varchar(250) NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `nationality` varchar(250) NOT NULL,
  `phone` bigint NOT NULL,
  `dob` date NOT NULL,
  `pimage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `PHP_MYSQL_02`
--

INSERT INTO `PHP_MYSQL_02` (`id`, `fname`, `lname`, `uname`, `gender`, `email`, `nationality`, `phone`, `dob`, `pimage`) VALUES
(1, 'test', 'test', 'test', 'male', 'test@gmail.com', 'indian', 12345678900, '2000-01-01', 'test.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `PHP_MYSQL_03`
--

CREATE TABLE `PHP_MYSQL_03` (
  `id` int NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `PHP_MYSQL_03`
--

INSERT INTO `PHP_MYSQL_03` (`id`, `email`) VALUES
(1, 'adwivedi008@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Registration`
--

CREATE TABLE `Registration` (
  `id` int NOT NULL,
  `fname` varchar(500) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` bigint NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Registration`
--

INSERT INTO `Registration` (`id`, `fname`, `email`, `phone`, `dob`) VALUES
(1, 'test', 'test@123.com', 8962294997, '2001-02-08'),
(27, 'namo', 'aman@63.go', 7974745656, '2022-08-10'),
(28, 'namo', 'ashish.dwivedi@opensenselabs.com', 7676767676, '2022-08-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PHP_MYSQL_02`
--
ALTER TABLE `PHP_MYSQL_02`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `PHP_MYSQL_03`
--
ALTER TABLE `PHP_MYSQL_03`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Registration`
--
ALTER TABLE `Registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `PHP_MYSQL_02`
--
ALTER TABLE `PHP_MYSQL_02`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `PHP_MYSQL_03`
--
ALTER TABLE `PHP_MYSQL_03`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Registration`
--
ALTER TABLE `Registration`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
