-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2023 at 02:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `incident_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `id` int(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id`, `user_name`, `admin_password`) VALUES
(1, 'Tomas', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `bank_users`
--

CREATE TABLE `bank_users` (
  `userid` int(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `bankname` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `account_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_users`
--

INSERT INTO `bank_users` (`userid`, `username`, `bankname`, `position`, `Department`, `account_password`) VALUES
(1, 'Tomas', 'FNB', 'IT Infrastructure Manager ', 'IT', ' 123'),
(2, 'jhon', 'Bank win', 'CTO', 'IT', '123456jhon'),
(3, ' matias', 'standard bank', 'CFO', 'Finance', ' 123456matias'),
(4, ' Bank A', 'absa', 'liaison', 'payments', ' 123');

-- --------------------------------------------------------

--
-- Table structure for table `incidents`
--

CREATE TABLE `incidents` (
  `incident_id` int(30) NOT NULL,
  `incident_name` varchar(255) NOT NULL,
  `inicdent_content` varchar(400) NOT NULL,
  `publish_at` date NOT NULL,
  `author_name` varchar(30) NOT NULL,
  `author_position` varchar(30) NOT NULL,
  `author_organization` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `incidents`
--

INSERT INTO `incidents` (`incident_id`, `incident_name`, `inicdent_content`, `publish_at`, `author_name`, `author_position`, `author_organization`) VALUES
(1, 'jjjjjjjj', 'nnnnnnnnnn', '2023-09-30', 'jhon', 'CTO', 'Bank win'),
(2, 'server down', 'nnnnnnnnnn', '2023-09-30', 'jhon', 'CTO', 'Bank win'),
(3, 'Payment systems are down', 'uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', '2023-09-30', 'jhon', 'CTO', 'Bank win');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_users`
--
ALTER TABLE `bank_users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `incidents`
--
ALTER TABLE `incidents`
  ADD PRIMARY KEY (`incident_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank_users`
--
ALTER TABLE `bank_users`
  MODIFY `userid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `incidents`
--
ALTER TABLE `incidents`
  MODIFY `incident_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
