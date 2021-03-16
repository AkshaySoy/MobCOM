-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 06:18 AM
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

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`product_id`, `product_desc`, `brand_id`, `model_number`, `model_name`, `model_colour`, `display_size`, `display_resolution`, `operating_system`, `processor`, `internal_storage`, `ram`, `memory_card_available`, `primary_camera`, `secondary_camera`, `network_type`, `battery_capacity`, `mobile_width`, `mobile_depth`, `mobile_weight`, `mobile_price`, `mobile_availabilty`) VALUES
(1, 'Meet Pixel 4a. It comes packed with the things you want most in a phone, for a lot less than you’d expect. And it’s unlocked – so you can pick the carrier and data plan that work best for you.', 1, 'G025J', 'Pixel 4a', 'Just Black', '14.73', '2340 x 1080', 'android 10', 'Qualcomm Snapdragon 730G', 128, 6, 'microSD', '12.2', '8', '4G VOLTE, 4G, 3G, 2G', 3140, 69, 144, 8, 143, 50),
(2, 'Apple iPhone 7 (32GB) - Black', 0, '\r\nMN8X2HN/A', '\r\niPhone 7', '\r\nBlack', '\r\n11.94 cm (4.7 inch)', '1334 x 750 Pixels', 'IOS 12', '\r\nApple A10 Fusion 64-bit processor and Embedded M10 Motion Co-processor\r\n', 32, 2, '', '12MP Rear Camera', '\r\n7MP Front Camera', '3G, 4G LTE, GPRS, WiFi, EDGE', 2700, 67, 138, 138, 0, 0),
(3, 'Apple iPhone 11 (Green, 64 GB)', 0, '\r\nMHDG3HN/A', '\r\niPhone 11', '\r\nGreen', '\r\n15.49 cm (6.1 inch)', '1792 x 828 Pixels', '\r\niOS 14.2', 'A13 Bionic Chip', 64, 4, '', '12MP + 12MP', '12MP Front Camera', '\r\n4G VOLTE, 4G, 3G, 2G', 0, 76, 151, 194, 0, 0),
(4, 'Apple iPhone 12 Pro Max (Pacific Blue, 512 GB)', 0, '\r\nMGDL3HN/A', '\r\niPhone 12 Pro Max', '\r\nPacific Blue', '\r\n17.02 cm (6.7 inch)', '\r\n2778 x 1284 Pixels', '\r\niOS 14', 'A14 Bionic Chip with Next Generation Neural Engine', 512, 4, '', '12MP + 12MP + 12MP', '12MP Front Camera', '\r\n5G, 4G, 3G, 2G', 3500, 78, 161, 226, 0, 0),
(5, 'Apple iPhone SE (White, 64 GB)', 0, '\r\nMHGQ3HN/A', '\r\niPhone SE', 'White', '\r\n11.94 cm (4.7 inch)', '\r\n1334 x 750 Pixels', '\r\niOS 14.2', '\r\nA13 Bionic Chip with 3rd Gen Neural Engine', 64, 3, '', '\r\n12MP Rear Camera', '\r\n7MP Front Camera', '4G VOLTE, 4G, 3G, 2G', 2700, 67, 7, 148, 0, 0),
(6, 'Apple iPhone XR (Black, 64 GB) (Includes EarPods, Power Adapter)', 0, '\r\nMRY42HN/A', 'iPhone XR', '\r\nBlack', '\r\n15.5 cm (6.102 inch)', '\r\n1792 x 828 pixels', '\r\niOS 12', '\r\nA12 Bionic Chip', 64, 3, '', '\r\n12MP Rear Camera', '7MP Front Camera', '\r\n3G, 4G, 2G', 2700, 76, 8, 194, 0, 0),
(7, 'Asus Zenfone 3 Max ZC520TL-4H122IN (Grey, 32GB)', 0, 'ZC520TL', 'Asus Zenfone 3 Max', 'Silver', '5.2 in', '1280 x 720', 'Android', 'MediaTek MT6737 64-bit', 32, 3, '32', '13', '5MP (Front camera)', 'dual SIM dual-standby (4G+4G)', 4130, 15, 1, 150, 0, 0),
(8, 'Asus Zenfone Max Pro M1 (Blue, 32 GB)  (3 GB RAM)', 0, 'ZB601KL-4D101IN', 'Zenfone Max Pro M1', 'Silver', '\r\n15.21 cm (5.99 inch)', '\r\n2160 x 1080 Pixels', '\r\nAndroid Oreo 8.1', 'Qualcomm Snapdragon 636 Octa Core', 32, 3, '2TB', '13MP + 5MP', '\r\n8MP Front Camera', '\r\n3G, 4G VOLTE, 2G', 5000, 76, 8, 180, 0, 0),
(9, 'Asus ZenFone Max Pro M2 (Blue, 64 GB)  (4 GB RAM)', 0, 'ZB630KL-4D001IN', 'ZenFone Max Pro M2', 'Blue', '15.9 cm (6.26 inch)', '\r\n2280 x 1080 pixels', '\r\nAndroid Oreo 8.1', 'Qualcomm Snapdragon 660 Octa Core', 64, 4, '2TB', '\r\n12MP + 5MP', '\r\n13MP Front Camera', '\r\n3G, 4G VOLTE, 4G, 2G', 5000, 76, 9, 175, 0, 0),
(10, 'Asus ROG Phone 3 (Black, 128 GB)  (12 GB RAM)', 0, 'ZS661KS-6A039IN', '\r\nROG Phone 3', '\r\nBlack', '16.74 cm (6.59 inch)', '2340 x 1080 Pixels', '\r\nAndroid 10', '\r\nQualcomm Snapdragon 865+ (SM8250)', 128, 12, '', '64MP + 13MP + 5MP', '24MP Front Camera', '\r\n5G, 4G, 3G, 2G', 6000, 78, 10, 240, 0, 0),
(11, 'Asus ROG Phone II (Black, 128 GB)  (8 GB RAM)', 0, '\r\nZS660KL-1A017IN', 'ROG Phone II\r\n', '\r\nBlack', '16.74 cm (6.59 inch)', '\r\n2340 x 1080 Pixels', 'Android Pie 9', 'Qualcomm Snapdragon 855 Plus', 128, 8, '', '48MP + 13MP', '24MP Front Camera', '\r\n3G, 4G VOLTE, 4G, 2G', 6000, 78, 10, 240, 0, 0),
(12, 'Honor 9X (Midnight Black, 128 GB)  (4 GB RAM)', 0, '\r\nSTK-L22', '\r\n9X', '\r\nMidnight Blue', '16.74 cm (6.59 inch)', '\r\n2340 x 1080 Pixels', '\r\nAndroid Pie 9', '\r\nKirin 710F', 128, 4, '512', '48MP + 8MP + 2MP', '\r\n16MP Front Camera', '\r\n4G VOLTE, 3G, 2G', 4000, 77, 9, 197, 0, 0),
(13, 'Honor 20 (Midnight Black, 128 GB)  (6 GB RAM)', 0, '\r\nYAL-AL00', '\r\n20', '\r\nMidnight Black', '15.9 cm (6.26 inch)', '\r\n2340 x 1080 pixels', 'Android Pie 9.0', 'HiSilicon Kirin 980', 128, 6, '', '48MP + 2MP + 16MP\r\n', '32MP Front Camera', '\r\n3G, 4G VOLTE, 4G, 2G', 3750, 74, 8, 174, 0, 0),
(14, 'LG G8X (Black, 128 GB)  (6 GB RAM)', 0, '\r\nLMG850EMW', '\r\nG8X', '\r\nBlack', '\r\n16.26 cm (6.4 inch)', '\r\n2340 x 1080 pixel', 'Android Pie 9', '\r\nQualcomm Snapdragon™ 855 Octa-core', 128, 6, '2TB', '12MP + 13MP\r\n', '32MP Front Camera', '\r\n4G VOLTE, 3G', 4000, 76, 8, 191, 0, 0),
(15, 'LG Velvet Dual Screen (Aurora Silver, 128 GB)  (6 GB RAM)', 0, '\r\nLMG910EMW', 'Velvet Dual Screen', 'Aurora Silver', '\r\n17.27 cm (6.8 inch)', '2460 x 1080 Pixels', 'Android 10', 'Qualcomm Snapdragon 845', 128, 6, '2TB', '48MP + 8MP + 5MP', '16MP Front Camera', '\r\n4G VOLTE, 4G, 3G, 2G', 4300, 74, 8, 180, 0, 0),
(16, 'LG Wing (Illusion Sky, 128 GB)  (8 GB RAM)', 0, '\r\nLMF100EMW', 'Wing', '\r\nIllusion Sky', '17.27 cm (6.8 inch)', '2460 x 1080 Pixels', '\r\nAndroid 10', '\r\nQualcomm Snapdragon 765G', 128, 8, '2TB', '\r\n64MP + 13MP + 12MP', '32MP Front Camera', '5G, 4G VOLTE, 4G, 3G, 2G', 4000, 75, 11, 260, 0, 0),
(17, 'Nokia 5.3 (CHARCOAL, 64 GB)  (6 GB RAM)', 0, '\r\n5.3 DS 6/64', '\r\n5.3', '\r\nCHARCOAL', '16.64 cm (6.55 inch)', '720 x 1600$$pixels', 'Android Android Q 10', 'Qualcomm Snapdragon 665', 64, 6, 'microSD', '\r\n13MP Rear Camera', '8 MP, f/2.0, (wide)', '\r\n3G, 4G VOLTE, 4G, 2G', 4000, 67, 9, 180, 0, 0),
(18, 'Nokia 6.1 Plus (Blue, 64 GB)  (6 GB RAM)', 0, '', '6.1 Plus', 'Blue', '14.73 cm (5.8 inch)', '2280 x 1080 pixels', '\r\nAndroid Oreo 8.1.0', '\r\nQualcomm Snapdragon 636 Octacore', 64, 4, '400GB', '16MP + 5MP', '\r\n16MP Front Camera', '\r\n3G, 4G, 2G', 3630, 71, 8, 151, 0, 0),
(19, 'Nokia TA-1174 / TA-1299  (Black)', 0, '\r\nTA-1174/NOKIA 105 DS / 105 ta-1174 ds', 'TA-1174 / TA-1299', '\r\nBlack', '\r\n4.57 cm (1.8 inch)', '\r\n320 x 240 Pixels', '', '', 4, 4, '', '', '', '\r\n2G', 800, 0, 0, 0, 0, 0),
(20, 'Nokia 150 DS 2020  (Black)', 0, '\r\nTA-1235 / 12GMNB21A01', '150 DS 2020', '\r\nBlack', '\r\n6.1 cm (2.4 inch)', '\r\n320 x 240 Pixels', '\r\nSeries 30+', 'MediaTek', 4, 4, '32', '0.3MP Rear Camera', '', '\r\n2G', 1020, 51, 15, 91, 0, 0),
(21, 'Nokia C3 (Nordic Blue, 16 GB)  (2 GB RAM)', 0, '\r\nSP01Z01Z2249Y', 'C3', '\r\nNordic Blue', '15.21 cm (5.99 inch)', '\r\n1440 x 720 Pixels', 'Android 10', 'SC9863A Octa Core', 16, 2, '128', '8MP Rear Camera', '8MP Rear Camera', '\r\n4G VOLTE, 4G, 3G, 2G', 3040, 77, 9, 185, 0, 0),
(22, 'OnePlus 7T', 0, 'B082K96P6W', 'OnePlus 7T', 'Glacier Blue', '6.55 in', '2400 x 1080', 'Android', 'Qualcomm Snapdragon 865', 256, 8, '256', '48MP+8MP+5MP+2MP', '48', 'GSM, TDS, (B1/2/4/5/8/9/19), FDD-LTE, (B1/2/3/4/5/7/8/12/13/17/18/19/20/26/28/29), (B2/3/5/8), CDMA, TDD-LTE, UMTS, (B34/38/39/40/41), 4G, 2G, (B34/B39), (BC0/BC1)', 3800, 16, 7, 190, 0, 0),
(23, 'OnePlus 7 Pro (Nebula Blue, 8GB RAM, Fluid AMOLED Display, 256GB Storage, 4000mAH Battery)', 0, 'B07HGJK535', 'OnePlus 7 Pro', 'Nebula Blue', '6.67 in', '3120 x 1440', 'Android 9.0', 'Qualcomm Snapdragon 865', 256, 8, '256', '48 MP', '48MP+8MP+16MP', '4G;FDD;LTE;(B1/2/3/4/5/7/8/12/13/17/18/19/20/25/26/28/29/32/66);TDD-LTE;(B34/38/39/40/41);TDS;(B34/39);UMTS;(B1/2/4/5/8/9/19);CDMA;(BC0/BC1);GSM;(B2/3/5/8)', 4000, 16, 8, 206, 0, 0),
(24, 'OnePlus 8 Pro (Glacial Green 8GB RAM+128GB Storage)', 0, 'B078BN2H3R', 'OnePlus 8 Pro', 'Glacial Green', '\r\n6.78 in', '\r\nAMOLED', 'Android', 'Qualcomm Snapdragon 865', 256, 8, '256', '48', '48MP+8MP+48MP+5MP', 'GSM, BC0(Roaming), Wi-Fi 802.11 a/b/g/n/ac/ax, 2.4G/5G, Wi-Fi 6, Bluetooth 5.1, support aptX & aptX HD & LDAC & AAC, NFC enabled, LTE-FDD, NR, WCDMA, CDMA, (B1/2/3/4/5/7/8/12/17/18/19/20/26), N78, (B1/B2/B4/B5/B8/B9/B19), 5G, (850/900/1800/1900), (B1/3/41', 4510, 17, 7, 199, 0, 0),
(25, 'OnePlus Nord 5G (Blue Marble, 12GB RAM, 256GB Storage)', 0, 'B0869855B8', 'OnePlus Nord 5G', 'Marble Blue', '6.44 in', '2400 x 1080', 'Android', 'Qualcomm Snapdragon 765G 5G mobile platform', 4, 64, '64', '48', '48MP+8MP+5MP+2MP', 'GSM, LTE-FDD, IN, WCDMA, (B1/2/3/4/5/7/8/12/17/18/19/20/26), (B38/39/40/41/46), N78, (B1/B2/B4/B5/B8/B9/B19), 5G, (850/900/1800/1900), MIMO:LTE: B1, 3, 40 NR: N78, LTE-TDD, Network connectivity may vary depending on carrier’s network and related service d', 4115, 16, 7, 184, 0, 0),
(26, 'POCO C3 (Arctic Blue, 64 GB)  (4 GB RAM)', 0, 'MZB07RJIN', 'C3', 'Arctic Blue', '\r\n16.59 cm (6.53 inch)', '1600 x 720 Pixels', 'Android 10', 'Mediatek Helio G35', 64, 4, '512', '13MP + 2MP + 2MP', '5MP Front Camera', '4G VOLTE, 4G, 3G, 2G', 5000, 77, 9, 194, 0, 0),
(27, 'POCO F1 (Graphite Black, 64 GB)  (6 GB RAM)', 0, 'MZB6645IN', '\r\nF1', 'Graphite Black', '15.7 cm (6.18 inch)', '2160 x 1080 pixels', 'Android Oreo 8.1', 'Qualcomm Snapdragon 845', 64, 6, '256', '\r\n12MP + 5MP', '20MP Front Camera', '3G, 4G VOLTE, 2G', 4000, 75, 9, 180, 0, 0),
(28, 'POCO M2 (Brick Red, 128 GB)  (6 GB RAM)', 0, '\r\nMZB9922IN', '\r\nM2', 'Brick Red', '16.59 cm (6.53 inch)', '2340 x 1080 Pixels', 'Android 10', 'MediaTek Helio G80', 128, 6, '512', '13MP + 8MP + 5MP + 2MP', '8MP Front Camera', '4G VOLTE, 4G, 3G, 2G', 5000, 77, 9, 198, 0, 0),
(29, 'POCO M2 Pro (Out of the Blue, 64 GB)  (6 GB RAM)', 0, '\r\nMZB9627IN', 'M2 Pro', 'Out of the Blue', '16.94 cm (6.67 inch)', '2400 x 1080 Pixels', '\r\nAndroid 10', 'Qualcomm Snapdragon 720G', 64, 6, '512', '\r\n48MP + 8MP + 5MP + 2MP', '16MP Front Camera', '\r\n4G, 3G, 2G', 5000, 77, 9, 209, 0, 0);

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
  `last_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` bigint(10) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_address_1` varchar(255) NOT NULL,
  `user_address_2` varchar(255) NOT NULL,
  `state_id` varchar(255) NOT NULL,
  `city_id` varchar(255) NOT NULL,
  `user_pincode` int(25) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `date_added` varchar(255) NOT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`user_id`, `first_name`, `last_name`, `user_email`, `user_phone`, `user_gender`, `user_address_1`, `user_address_2`, `state_id`, `city_id`, `user_pincode`, `user_pwd`, `date_added`, `user_status`) VALUES
(1, 'Akshay', 'Soy', 'akshay.soy@gmail.com', 8757115761, 'Male', 'C/O Sukhmati Alda, Alda Niwas, Near Satypal Cycle Store, Matkamhatu, West Singhbhum', 'Near Satyapal Cycle Store, Matkamhatu', 'Jharkhand', 'Jamshedpur', 833201, '$2y$10$LhJm3oSQ8RD53.C88fllP.QTTS99nmgDWfMNu8g3ezdQqUkiCyhfi', 'Tue, 16 Mar 2021 10:40:31 +0530', 1);

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
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

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
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `shopping_cart_master`
--
ALTER TABLE `shopping_cart_master`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
