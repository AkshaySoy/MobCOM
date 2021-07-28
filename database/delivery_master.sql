-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 12:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobcom`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery_master`
--

CREATE TABLE `delivery_master` (
  `deli_id` int(11) NOT NULL,
  `deli_name` varchar(255) NOT NULL,
  `deli_phone` int(11) NOT NULL,
  `deli_password` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `deli_status` varchar(25) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_master`
--

INSERT INTO `delivery_master` (`deli_id`, `deli_name`, `deli_phone`, `deli_password`, `state_id`, `city_id`, `deli_status`, `date_added`) VALUES
(1, 'Tofu Master', 123456789, '$2y$10$7LS7EKWo91VbUDa09zLdBupEykiEk1lHGt.lZ5HckTfZ1r48B6Q0i', 34, 214, 'active', '2021-07-29 03:14:57'),
(2, 'Pizza Cart', 987654321, '$2y$10$eKJXnUodjVJ6oIR0..GZbefA6.AndYwoIQ0nnQcmzFdIJ0TMVmkza', 29, 112, 'Active', '2021-07-29 03:48:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery_master`
--
ALTER TABLE `delivery_master`
  ADD PRIMARY KEY (`deli_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery_master`
--
ALTER TABLE `delivery_master`
  MODIFY `deli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
