-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 07:03 AM
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
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `order_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE `product_master` (
  `product_id` int(100) NOT NULL,
  `product_desc` varchar(512) NOT NULL,
  `brand_id` int(100) NOT NULL,
  `model_number` varchar(255) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `model_colour` varchar(255) NOT NULL,
  `display_size` varchar(255) NOT NULL,
  `display_resolution` varchar(255) NOT NULL,
  `operating_system` varchar(100) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `internal_storage` int(100) NOT NULL,
  `ram` int(100) NOT NULL,
  `memory_card_available` varchar(100) NOT NULL,
  `primary_camera` varchar(255) NOT NULL,
  `secondary_camera` varchar(255) NOT NULL,
  `network_type` varchar(255) NOT NULL,
  `battery_capacity` int(100) NOT NULL,
  `mobile_width` int(100) NOT NULL,
  `mobile_depth` int(100) NOT NULL,
  `mobile_weight` int(100) NOT NULL,
  `mobile_price` int(100) NOT NULL,
  `mobile_availabilty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart_master`
--

CREATE TABLE `shopping_cart_master` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `user_id` int(100) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_address_1` varchar(255) NOT NULL,
  `user_address_2` varchar(255) DEFAULT NULL,
  `state_id` int(3) NOT NULL,
  `city_id` int(3) NOT NULL,
  `user_pincode` int(25) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `user_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shopping_cart_master`
--
ALTER TABLE `shopping_cart_master`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shopping_cart_master`
--
ALTER TABLE `shopping_cart_master`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
