-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 04:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cov-aid`
--

-- --------------------------------------------------------

--
-- Table structure for table `surplus`
--

CREATE TABLE `surplus` (
  `surplus_id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surplus`
--

INSERT INTO `surplus` (`surplus_id`, `email`, `item_name`, `status`) VALUES
(12, 'jain.nikhil2001@gmail.com', 'med', 'available'),
(14, 'jain.nikhil2001@gmail.com', 'blood pressure monitor', 'available'),
(15, 'jain.nikhil2001@gmail.com', 'oxymeter', 'available'),
(16, 'jain.nikhil2001@gmail.com', 'oxyzen', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` text NOT NULL,
  `address` varchar(200) NOT NULL,
  `landmark` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `address`, `landmark`) VALUES
(3, 'Nikhil ', 'jain.nikhil2001@gmail.com', '874a615557757055fb62712d3b0d0609', '8178046967', '1598', 'Tota Ram Bazaar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surplus`
--
ALTER TABLE `surplus`
  ADD PRIMARY KEY (`surplus_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surplus`
--
ALTER TABLE `surplus`
  MODIFY `surplus_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
