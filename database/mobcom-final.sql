-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 01:17 PM
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
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(25) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_status`) VALUES
(1, 'MobCOM ADMIN', 'mobcom.admn@gmail.com', '$2y$10$nZuRwMkOl9tIvztg6NcQ9uGV6ObuN19MZpIXHcmvG0Cz8uNz1YFim', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `cities_master`
--

CREATE TABLE `cities_master` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities_master`
--

INSERT INTO `cities_master` (`city_id`, `city_name`, `state_id`) VALUES
(1, 'North and Middle Andaman', 32),
(2, 'South Andaman', 32),
(3, 'Nicobar', 32),
(4, 'Adilabad', 1),
(5, 'Anantapur', 1),
(6, 'Chittoor', 1),
(7, 'East Godavari', 1),
(8, 'Guntur', 1),
(9, 'Hyderabad', 1),
(10, 'Kadapa', 1),
(11, 'Karimnagar', 1),
(12, 'Khammam', 1),
(13, 'Krishna', 1),
(14, 'Kurnool', 1),
(15, 'Mahbubnagar', 1),
(16, 'Medak', 1),
(17, 'Nalgonda', 1),
(18, 'Nellore', 1),
(19, 'Nizamabad', 1),
(20, 'Prakasam', 1),
(21, 'Rangareddi', 1),
(22, 'Srikakulam', 1),
(23, 'Vishakhapatnam', 1),
(24, 'Vizianagaram', 1),
(25, 'Warangal', 1),
(26, 'West Godavari', 1),
(27, 'Anjaw', 3),
(28, 'Changlang', 3),
(29, 'East Kameng', 3),
(30, 'Lohit', 3),
(31, 'Lower Subansiri', 3),
(32, 'Papum Pare', 3),
(33, 'Tirap', 3),
(34, 'Dibang Valley', 3),
(35, 'Upper Subansiri', 3),
(36, 'West Kameng', 3),
(37, 'Barpeta', 2),
(38, 'Bongaigaon', 2),
(39, 'Cachar', 2),
(40, 'Darrang', 2),
(41, 'Dhemaji', 2),
(42, 'Dhubri', 2),
(43, 'Dibrugarh', 2),
(44, 'Goalpara', 2),
(45, 'Golaghat', 2),
(46, 'Hailakandi', 2),
(47, 'Jorhat', 2),
(48, 'Karbi Anglong', 2),
(49, 'Karimganj', 2),
(50, 'Kokrajhar', 2),
(51, 'Lakhimpur', 2),
(52, 'Marigaon', 2),
(53, 'Nagaon', 2),
(54, 'Nalbari', 2),
(55, 'North Cachar Hills', 2),
(56, 'Sibsagar', 2),
(57, 'Sonitpur', 2),
(58, 'Tinsukia', 2),
(59, 'Araria', 4),
(60, 'Aurangabad', 4),
(61, 'Banka', 4),
(62, 'Begusarai', 4),
(63, 'Bhagalpur', 4),
(64, 'Bhojpur', 4),
(65, 'Buxar', 4),
(66, 'Darbhanga', 4),
(67, 'Purba Champaran', 4),
(68, 'Gaya', 4),
(69, 'Gopalganj', 4),
(70, 'Jamui', 4),
(71, 'Jehanabad', 4),
(72, 'Khagaria', 4),
(73, 'Kishanganj', 4),
(74, 'Kaimur', 4),
(75, 'Katihar', 4),
(76, 'Lakhisarai', 4),
(77, 'Madhubani', 4),
(78, 'Munger', 4),
(79, 'Madhepura', 4),
(80, 'Muzaffarpur', 4),
(81, 'Nalanda', 4),
(82, 'Nawada', 4),
(83, 'Patna', 4),
(84, 'Purnia', 4),
(85, 'Rohtas', 4),
(86, 'Saharsa', 4),
(87, 'Samastipur', 4),
(88, 'Sheohar', 4),
(89, 'Sheikhpura', 4),
(90, 'Saran', 4),
(91, 'Sitamarhi', 4),
(92, 'Supaul', 4),
(93, 'Siwan', 4),
(94, 'Vaishali', 4),
(95, 'Pashchim Champaran', 4),
(96, 'Bastar', 36),
(97, 'Bilaspur', 36),
(98, 'Dantewada', 36),
(99, 'Dhamtari', 36),
(100, 'Durg', 36),
(101, 'Jashpur', 36),
(102, 'Janjgir-Champa', 36),
(103, 'Korba', 36),
(104, 'Koriya', 36),
(105, 'Kanker', 36),
(106, 'Kawardha', 36),
(107, 'Mahasamund', 36),
(108, 'Raigarh', 36),
(109, 'Rajnandgaon', 36),
(110, 'Raipur', 36),
(111, 'Surguja', 36),
(112, 'Diu', 29),
(113, 'Daman', 29),
(114, 'Central Delhi', 25),
(115, 'East Delhi', 25),
(116, 'New Delhi', 25),
(117, 'North Delhi', 25),
(118, 'North East Delhi', 25),
(119, 'North West Delhi', 25),
(120, 'South Delhi', 25),
(121, 'South West Delhi', 25),
(122, 'West Delhi', 25),
(123, 'North Goa', 26),
(124, 'South Goa', 26),
(125, 'Ahmedabad', 5),
(126, 'Amreli District', 5),
(127, 'Anand', 5),
(128, 'Banaskantha', 5),
(129, 'Bharuch', 5),
(130, 'Bhavnagar', 5),
(131, 'Dahod', 5),
(132, 'The Dangs', 5),
(133, 'Gandhinagar', 5),
(134, 'Jamnagar', 5),
(135, 'Junagadh', 5),
(136, 'Kutch', 5),
(137, 'Kheda', 5),
(138, 'Mehsana', 5),
(139, 'Narmada', 5),
(140, 'Navsari', 5),
(141, 'Patan', 5),
(142, 'Panchmahal', 5),
(143, 'Porbandar', 5),
(144, 'Rajkot', 5),
(145, 'Sabarkantha', 5),
(146, 'Surendranagar', 5),
(147, 'Surat', 5),
(148, 'Vadodara', 5),
(149, 'Valsad', 5),
(150, 'Ambala', 6),
(151, 'Bhiwani', 6),
(152, 'Faridabad', 6),
(153, 'Fatehabad', 6),
(154, 'Gurgaon', 6),
(155, 'Hissar', 6),
(156, 'Jhajjar', 6),
(157, 'Jind', 6),
(158, 'Karnal', 6),
(159, 'Kaithal', 6),
(160, 'Kurukshetra', 6),
(161, 'Mahendragarh', 6),
(162, 'Mewat', 6),
(163, 'Panchkula', 6),
(164, 'Panipat', 6),
(165, 'Rewari', 6),
(166, 'Rohtak', 6),
(167, 'Sirsa', 6),
(168, 'Sonepat', 6),
(169, 'Yamuna Nagar', 6),
(170, 'Palwal', 6),
(171, 'Bilaspur', 7),
(172, 'Chamba', 7),
(173, 'Hamirpur', 7),
(174, 'Kangra', 7),
(175, 'Kinnaur', 7),
(176, 'Kulu', 7),
(177, 'Lahaul and Spiti', 7),
(178, 'Mandi', 7),
(179, 'Shimla', 7),
(180, 'Sirmaur', 7),
(181, 'Solan', 7),
(182, 'Una', 7),
(183, 'Anantnag', 8),
(184, 'Badgam', 8),
(185, 'Bandipore', 8),
(186, 'Baramula', 8),
(187, 'Doda', 8),
(188, 'Jammu', 8),
(189, 'Kargil', 8),
(190, 'Kathua', 8),
(191, 'Kupwara', 8),
(192, 'Leh', 8),
(193, 'Poonch', 8),
(194, 'Pulwama', 8),
(195, 'Rajauri', 8),
(196, 'Srinagar', 8),
(197, 'Samba', 8),
(198, 'Udhampur', 8),
(199, 'Bokaro', 34),
(200, 'Chatra', 34),
(201, 'Deoghar', 34),
(202, 'Dhanbad', 34),
(203, 'Dumka', 34),
(204, 'Purba Singhbhum', 34),
(205, 'Garhwa', 34),
(206, 'Giridih', 34),
(207, 'Godda', 34),
(208, 'Gumla', 34),
(209, 'Hazaribagh', 34),
(210, 'Koderma', 34),
(211, 'Lohardaga', 34),
(212, 'Pakur', 34),
(213, 'Palamu', 34),
(214, 'Ranchi', 34),
(215, 'Sahibganj', 34),
(216, 'Seraikela and Kharsawan', 34),
(217, 'Pashchim Singhbhum', 34),
(218, 'Ramgarh', 34),
(219, 'Bidar', 9),
(220, 'Belgaum', 9),
(221, 'Bijapur', 9),
(222, 'Bagalkot', 9),
(223, 'Bellary', 9),
(224, 'Bangalore Rural District', 9),
(225, 'Bangalore Urban District', 9),
(226, 'Chamarajnagar', 9),
(227, 'Chikmagalur', 9),
(228, 'Chitradurga', 9),
(229, 'Davanagere', 9),
(230, 'Dharwad', 9),
(231, 'Dakshina Kannada', 9),
(232, 'Gadag', 9),
(233, 'Gulbarga', 9),
(234, 'Hassan', 9),
(235, 'Haveri District', 9),
(236, 'Kodagu', 9),
(237, 'Kolar', 9),
(238, 'Koppal', 9),
(239, 'Mandya', 9),
(240, 'Mysore', 9),
(241, 'Raichur', 9),
(242, 'Shimoga', 9),
(243, 'Tumkur', 9),
(244, 'Udupi', 9),
(245, 'Uttara Kannada', 9),
(246, 'Ramanagara', 9),
(247, 'Chikballapur', 9),
(248, 'Yadagiri', 9),
(249, 'Alappuzha', 10),
(250, 'Ernakulam', 10),
(251, 'Idukki', 10),
(252, 'Kollam', 10),
(253, 'Kannur', 10),
(254, 'Kasaragod', 10),
(255, 'Kottayam', 10),
(256, 'Kozhikode', 10),
(257, 'Malappuram', 10),
(258, 'Palakkad', 10),
(259, 'Pathanamthitta', 10),
(260, 'Thrissur', 10),
(261, 'Thiruvananthapuram', 10),
(262, 'Wayanad', 10),
(263, 'Alirajpur', 11),
(264, 'Anuppur', 11),
(265, 'Ashok Nagar', 11),
(266, 'Balaghat', 11),
(267, 'Barwani', 11),
(268, 'Betul', 11),
(269, 'Bhind', 11),
(270, 'Bhopal', 11),
(271, 'Burhanpur', 11),
(272, 'Chhatarpur', 11),
(273, 'Chhindwara', 11),
(274, 'Damoh', 11),
(275, 'Datia', 11),
(276, 'Dewas', 11),
(277, 'Dhar', 11),
(278, 'Dindori', 11),
(279, 'Guna', 11),
(280, 'Gwalior', 11),
(281, 'Harda', 11),
(282, 'Hoshangabad', 11),
(283, 'Indore', 11),
(284, 'Jabalpur', 11),
(285, 'Jhabua', 11),
(286, 'Katni', 11),
(287, 'Khandwa', 11),
(288, 'Khargone', 11),
(289, 'Mandla', 11),
(290, 'Mandsaur', 11),
(291, 'Morena', 11),
(292, 'Narsinghpur', 11),
(293, 'Neemuch', 11),
(294, 'Panna', 11),
(295, 'Rewa', 11),
(296, 'Rajgarh', 11),
(297, 'Ratlam', 11),
(298, 'Raisen', 11),
(299, 'Sagar', 11),
(300, 'Satna', 11),
(301, 'Sehore', 11),
(302, 'Seoni', 11),
(303, 'Shahdol', 11),
(304, 'Shajapur', 11),
(305, 'Sheopur', 11),
(306, 'Shivpuri', 11),
(307, 'Sidhi', 11),
(308, 'Singrauli', 11),
(309, 'Tikamgarh', 11),
(310, 'Ujjain', 11),
(311, 'Umaria', 11),
(312, 'Vidisha', 11),
(313, 'Ahmednagar', 12),
(314, 'Akola', 12),
(315, 'Amrawati', 12),
(316, 'Aurangabad', 12),
(317, 'Bhandara', 12),
(318, 'Beed', 12),
(319, 'Buldhana', 12),
(320, 'Chandrapur', 12),
(321, 'Dhule', 12),
(322, 'Gadchiroli', 12),
(323, 'Gondiya', 12),
(324, 'Hingoli', 12),
(325, 'Jalgaon', 12),
(326, 'Jalna', 12),
(327, 'Kolhapur', 12),
(328, 'Latur', 12),
(329, 'Mumbai City', 12),
(330, 'Mumbai suburban', 12),
(331, 'Nandurbar', 12),
(332, 'Nanded', 12),
(333, 'Nagpur', 12),
(334, 'Nashik', 12),
(335, 'Osmanabad', 12),
(336, 'Parbhani', 12),
(337, 'Pune', 12),
(338, 'Raigad', 12),
(339, 'Ratnagiri', 12),
(340, 'Sindhudurg', 12),
(341, 'Sangli', 12),
(342, 'Solapur', 12),
(343, 'Satara', 12),
(344, 'Thane', 12),
(345, 'Wardha', 12),
(346, 'Washim', 12),
(347, 'Yavatmal', 12),
(348, 'Bishnupur', 13),
(349, 'Churachandpur', 13),
(350, 'Chandel', 13),
(351, 'Imphal East', 13),
(352, 'Senapati', 13),
(353, 'Tamenglong', 13),
(354, 'Thoubal', 13),
(355, 'Ukhrul', 13),
(356, 'Imphal West', 13),
(357, 'East Garo Hills', 14),
(358, 'East Khasi Hills', 14),
(359, 'Jaintia Hills', 14),
(360, 'Ri-Bhoi', 14),
(361, 'South Garo Hills', 14),
(362, 'West Garo Hills', 14),
(363, 'West Khasi Hills', 14),
(364, 'Aizawl', 15),
(365, 'Champhai', 15),
(366, 'Kolasib', 15),
(367, 'Lawngtlai', 15),
(368, 'Lunglei', 15),
(369, 'Mamit', 15),
(370, 'Saiha', 15),
(371, 'Serchhip', 15),
(372, 'Dimapur', 16),
(373, 'Kohima', 16),
(374, 'Mokokchung', 16),
(375, 'Mon', 16),
(376, 'Phek', 16),
(377, 'Tuensang', 16),
(378, 'Wokha', 16),
(379, 'Zunheboto', 16),
(380, 'Angul', 17),
(381, 'Boudh', 17),
(382, 'Bhadrak', 17),
(383, 'Bolangir', 17),
(384, 'Bargarh', 17),
(385, 'Baleswar', 17),
(386, 'Cuttack', 17),
(387, 'Debagarh', 17),
(388, 'Dhenkanal', 17),
(389, 'Ganjam', 17),
(390, 'Gajapati', 17),
(391, 'Jharsuguda', 17),
(392, 'Jajapur', 17),
(393, 'Jagatsinghpur', 17),
(394, 'Khordha', 17),
(395, 'Kendujhar', 17),
(396, 'Kalahandi', 17),
(397, 'Kandhamal', 17),
(398, 'Koraput', 17),
(399, 'Kendrapara', 17),
(400, 'Malkangiri', 17),
(401, 'Mayurbhanj', 17),
(402, 'Nabarangpur', 17),
(403, 'Nuapada', 17),
(404, 'Nayagarh', 17),
(405, 'Puri', 17),
(406, 'Rayagada', 17),
(407, 'Sambalpur', 17),
(408, 'Subarnapur', 17),
(409, 'Sundargarh', 17),
(410, 'Karaikal', 27),
(411, 'Mahe', 27),
(412, 'Puducherry', 27),
(413, 'Yanam', 27),
(414, 'Amritsar', 18),
(415, 'Bathinda', 18),
(416, 'Firozpur', 18),
(417, 'Faridkot', 18),
(418, 'Fatehgarh Sahib', 18),
(419, 'Gurdaspur', 18),
(420, 'Hoshiarpur', 18),
(421, 'Jalandhar', 18),
(422, 'Kapurthala', 18),
(423, 'Ludhiana', 18),
(424, 'Mansa', 18),
(425, 'Moga', 18),
(426, 'Mukatsar', 18),
(427, 'Nawan Shehar', 18),
(428, 'Patiala', 18),
(429, 'Rupnagar', 18),
(430, 'Sangrur', 18),
(431, 'Ajmer', 19),
(432, 'Alwar', 19),
(433, 'Bikaner', 19),
(434, 'Barmer', 19),
(435, 'Banswara', 19),
(436, 'Bharatpur', 19),
(437, 'Baran', 19),
(438, 'Bundi', 19),
(439, 'Bhilwara', 19),
(440, 'Churu', 19),
(441, 'Chittorgarh', 19),
(442, 'Dausa', 19),
(443, 'Dholpur', 19),
(444, 'Dungapur', 19),
(445, 'Ganganagar', 19),
(446, 'Hanumangarh', 19),
(447, 'Juhnjhunun', 19),
(448, 'Jalore', 19),
(449, 'Jodhpur', 19),
(450, 'Jaipur', 19),
(451, 'Jaisalmer', 19),
(452, 'Jhalawar', 19),
(453, 'Karauli', 19),
(454, 'Kota', 19),
(455, 'Nagaur', 19),
(456, 'Pali', 19),
(457, 'Pratapgarh', 19),
(458, 'Rajsamand', 19),
(459, 'Sikar', 19),
(460, 'Sawai Madhopur', 19),
(461, 'Sirohi', 19),
(462, 'Tonk', 19),
(463, 'Udaipur', 19),
(464, 'East Sikkim', 20),
(465, 'North Sikkim', 20),
(466, 'South Sikkim', 20),
(467, 'West Sikkim', 20),
(468, 'Ariyalur', 21),
(469, 'Chennai', 21),
(470, 'Coimbatore', 21),
(471, 'Cuddalore', 21),
(472, 'Dharmapuri', 21),
(473, 'Dindigul', 21),
(474, 'Erode', 21),
(475, 'Kanchipuram', 21),
(476, 'Kanyakumari', 21),
(477, 'Karur', 21),
(478, 'Madurai', 21),
(479, 'Nagapattinam', 21),
(480, 'The Nilgiris', 21),
(481, 'Namakkal', 21),
(482, 'Perambalur', 21),
(483, 'Pudukkottai', 21),
(484, 'Ramanathapuram', 21),
(485, 'Salem', 21),
(486, 'Sivagangai', 21),
(487, 'Tiruppur', 21),
(488, 'Tiruchirappalli', 21),
(489, 'Theni', 21),
(490, 'Tirunelveli', 21),
(491, 'Thanjavur', 21),
(492, 'Thoothukudi', 21),
(493, 'Thiruvallur', 21),
(494, 'Thiruvarur', 21),
(495, 'Tiruvannamalai', 21),
(496, 'Vellore', 21),
(497, 'Villupuram', 21),
(498, 'Dhalai', 22),
(499, 'North Tripura', 22),
(500, 'South Tripura', 22),
(501, 'West Tripura', 22),
(502, 'Almora', 33),
(503, 'Bageshwar', 33),
(504, 'Chamoli', 33),
(505, 'Champawat', 33),
(506, 'Dehradun', 33),
(507, 'Haridwar', 33),
(508, 'Nainital', 33),
(509, 'Pauri Garhwal', 33),
(510, 'Pithoragharh', 33),
(511, 'Rudraprayag', 33),
(512, 'Tehri Garhwal', 33),
(513, 'Udham Singh Nagar', 33),
(514, 'Uttarkashi', 33),
(515, 'Agra', 23),
(516, 'Allahabad', 23),
(517, 'Aligarh', 23),
(518, 'Ambedkar Nagar', 23),
(519, 'Auraiya', 23),
(520, 'Azamgarh', 23),
(521, 'Barabanki', 23),
(522, 'Badaun', 23),
(523, 'Bagpat', 23),
(524, 'Bahraich', 23),
(525, 'Bijnor', 23),
(526, 'Ballia', 23),
(527, 'Banda', 23),
(528, 'Balrampur', 23),
(529, 'Bareilly', 23),
(530, 'Basti', 23),
(531, 'Bulandshahr', 23),
(532, 'Chandauli', 23),
(533, 'Chitrakoot', 23),
(534, 'Deoria', 23),
(535, 'Etah', 23),
(536, 'Kanshiram Nagar', 23),
(537, 'Etawah', 23),
(538, 'Firozabad', 23),
(539, 'Farrukhabad', 23),
(540, 'Fatehpur', 23),
(541, 'Faizabad', 23),
(542, 'Gautam Buddha Nagar', 23),
(543, 'Gonda', 23),
(544, 'Ghazipur', 23),
(545, 'Gorkakhpur', 23),
(546, 'Ghaziabad', 23),
(547, 'Hamirpur', 23),
(548, 'Hardoi', 23),
(549, 'Mahamaya Nagar', 23),
(550, 'Jhansi', 23),
(551, 'Jalaun', 23),
(552, 'Jyotiba Phule Nagar', 23),
(553, 'Jaunpur District', 23),
(554, 'Kanpur Dehat', 23),
(555, 'Kannauj', 23),
(556, 'Kanpur Nagar', 23),
(557, 'Kaushambi', 23),
(558, 'Kushinagar', 23),
(559, 'Lalitpur', 23),
(560, 'Lakhimpur Kheri', 23),
(561, 'Lucknow', 23),
(562, 'Mau', 23),
(563, 'Meerut', 23),
(564, 'Maharajganj', 23),
(565, 'Mahoba', 23),
(566, 'Mirzapur', 23),
(567, 'Moradabad', 23),
(568, 'Mainpuri', 23),
(569, 'Mathura', 23),
(570, 'Muzaffarnagar', 23),
(571, 'Pilibhit', 23),
(572, 'Pratapgarh', 23),
(573, 'Rampur', 23),
(574, 'Rae Bareli', 23),
(575, 'Saharanpur', 23),
(576, 'Sitapur', 23),
(577, 'Shahjahanpur', 23),
(578, 'Sant Kabir Nagar', 23),
(579, 'Siddharthnagar', 23),
(580, 'Sonbhadra', 23),
(581, 'Sant Ravidas Nagar', 23),
(582, 'Sultanpur', 23),
(583, 'Shravasti', 23),
(584, 'Unnao', 23),
(585, 'Varanasi', 23),
(586, 'Birbhum', 24),
(587, 'Bankura', 24),
(588, 'Bardhaman', 24),
(589, 'Darjeeling', 24),
(590, 'Dakshin Dinajpur', 24),
(591, 'Hooghly', 24),
(592, 'Howrah', 24),
(593, 'Jalpaiguri', 24),
(594, 'Cooch Behar', 24),
(595, 'Kolkata', 24),
(596, 'Malda', 24),
(597, 'Midnapore', 24),
(598, 'Murshidabad', 24),
(599, 'Nadia', 24),
(600, 'North 24 Parganas', 24),
(601, 'South 24 Parganas', 24),
(602, 'Purulia', 24),
(603, 'Uttar Dinajpur', 24);

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

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `order_id` bigint(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `deli_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `product_id` int(100) DEFAULT NULL,
  `order_address` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `order_status` varchar(25) NOT NULL,
  `track_status` varchar(255) NOT NULL,
  `track_timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `order_otp` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`order_id`, `user_id`, `deli_id`, `name`, `product_id`, `order_address`, `state_id`, `city_id`, `date_added`, `order_status`, `track_status`, `track_timestamp`, `order_otp`) VALUES
(132001620210812, 1, 1, 'Ethan Winters', 1, 'The Village 8 Street , PIN = 833201', 34, 214, '2021-08-12 16:18:49', 'Delivered', 'Delivered', '2021-08-12 16:18:49', '132002');

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE `product_master` (
  `product_id` int(10) NOT NULL,
  `product_desc` varchar(512) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `model_number` varchar(255) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `model_colour` varchar(255) NOT NULL,
  `display_size` float NOT NULL,
  `display_resolution` varchar(255) NOT NULL,
  `operating_system` varchar(100) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `internal_storage` int(10) NOT NULL,
  `ram` int(10) NOT NULL,
  `memory_card_available` varchar(100) NOT NULL,
  `primary_camera` varchar(255) NOT NULL,
  `secondary_camera` varchar(255) NOT NULL,
  `network_type` varchar(255) NOT NULL,
  `battery_capacity` int(10) NOT NULL,
  `mobile_width` float NOT NULL,
  `mobile_depth` float NOT NULL,
  `mobile_weight` float NOT NULL,
  `mobile_price` float NOT NULL,
  `mobile_availabilty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`product_id`, `product_desc`, `brand_name`, `model_number`, `model_name`, `model_colour`, `display_size`, `display_resolution`, `operating_system`, `processor`, `internal_storage`, `ram`, `memory_card_available`, `primary_camera`, `secondary_camera`, `network_type`, `battery_capacity`, `mobile_width`, `mobile_depth`, `mobile_weight`, `mobile_price`, `mobile_availabilty`) VALUES
(1, 'Meet Pixel 4a. It comes packed with the things you want most in a phone, for a lot less than you’d expect. And it’s unlocked – so you can pick the carrier and data plan that work best for you.', 'Google', 'G025J', 'Pixel 4a', 'Just Black', 14.73, '2340 x 1080', 'android 10', 'Qualcomm Snapdragon 730G', 128, 6, '64GB', '12.2MP', '8MP', '4G VOLTE, 4G, 3G, 2G', 3140, 69, 144, 8, 35000, 500),
(2, 'Apple iPhone 7 (32GB) - Black', 'Apple', '\r\nMN8X2HN/A', 'iPhone 7', '\r\nBlack', 11.94, '1334 x 750', 'IOS 12', '\r\nApple A10 Fusion 64-bit processor and Embedded M10 Motion Co-processor\r\n', 32, 2, '64GB', '12MP', '\r\n7MP', '3G, 4G LTE, GPRS, WiFi, EDGE', 2700, 67, 138, 138, 52000, 500),
(3, 'Apple iPhone 11 (Green, 64 GB)', 'Apple', '\r\nMHDG3HN/A', 'iPhone 11', '\r\nGreen', 15.49, '1792 x 828', '\r\niOS 14.2', 'A13 Bionic Chip', 64, 4, '32GB', '12MP + 12MP', '12MP', '\r\n4G VOLTE, 4G, 3G, 2G', 0, 76, 151, 194, 35000, 500),
(4, 'Apple iPhone 12 Pro Max (Pacific Blue, 512 GB)', 'Apple', '\r\nMGDL3HN/A', 'iPhone 12 Pro Max', '\r\nPacific Blue', 17.02, '\r\n2778 x 1284', '\r\niOS 14', 'A14 Bionic Chip with Next Generation Neural Engine', 512, 4, '32BG', '12MP + 12MP + 12MP', '12MP', '\r\n5G, 4G, 3G, 2G', 3500, 78, 161, 226, 45200, 500),
(5, 'Apple iPhone SE (White, 64 GB)', 'Apple', '\r\nMHGQ3HN/A', 'iPhone SE', 'White', 11.94, '\r\n1334 x 750', '\r\niOS 14.2', '\r\nA13 Bionic Chip with 3rd Gen Neural Engine', 64, 3, '128GB', '\r\n12MP', '\r\n7MP', '4G VOLTE, 4G, 3G, 2G', 2700, 67, 7, 148, 35200, 500),
(6, 'Apple iPhone XR (Black, 64 GB) (Includes EarPods, Power Adapter)', 'Apple', '\r\nMRY42HN/A', 'iPhone XR', '\r\nBlack', 15.5, '\r\n\r\n1792 x 828', '\r\niOS 12', '\r\nA12 Bionic Chip', 64, 3, '64GB', '\r\n12MP', '7MP', '\r\n3G, 4G, 2G', 2700, 76, 8, 194, 45200, 500),
(7, 'Asus Zenfone 3 Max ZC520TL-4H122IN (Grey, 32GB)', 'Asus', 'ZC520TL', 'Asus Zenfone 3 Max', 'Silver', 13.2, '1280 x 720', 'Android', 'MediaTek MT6737 64-bit', 32, 3, '32GB', '13MP', '5MP', 'dual SIM dual-standby (4G+4G)', 4130, 15, 1, 150, 13000, 500),
(8, 'Asus Zenfone Max Pro M1 (Blue, 32 GB)  (3 GB RAM)', 'Asus', 'ZB601KL-4D101IN', 'Zenfone Max Pro M1', 'Silver', 15.21, '\r\n2160 x 1080', '\r\nAndroid Oreo 8.1', 'Qualcomm Snapdragon 636 Octa Core', 32, 3, '2TB', '13MP + 5MP', '\r\n8MP', '\r\n3G, 4G VOLTE, 2G', 5000, 76, 8, 180, 14000, 500),
(9, 'Asus ZenFone Max Pro M2 (Blue, 64 GB)  (4 GB RAM)', 'Asus', 'ZB630KL-4D001IN', 'ZenFone Max Pro M2', 'Blue', 15.9, '\r\n2280 x 1080', '\r\nAndroid Oreo 8.1', 'Qualcomm Snapdragon 660 Octa Core', 64, 4, '2TB', '\r\n12MP + 5MP', '\r\n13MP', '\r\n3G, 4G VOLTE, 4G, 2G', 5000, 76, 9, 175, 15600, 500),
(10, 'Asus ROG Phone 3 (Black, 128 GB)  (12 GB RAM)', 'Asus', 'ZS661KS-6A039IN', 'ROG Phone 3', '\r\nBlack', 16.74, '2340 x 1080', '\r\nAndroid 10', '\r\nQualcomm Snapdragon 865+ (SM8250)', 128, 12, '512GB', '64MP + 13MP + 5MP', '24MP', '\r\n5G, 4G, 3G, 2G', 6000, 78, 10, 240, 62000, 500),
(11, 'Asus ROG Phone II (Black, 128 GB)  (8 GB RAM)', 'Asus', '\r\nZS660KL-1A017IN', 'ROG Phone II\r\n', '\r\nBlack', 16.74, '\r\n2340 x 1080', 'Android Pie 9', 'Qualcomm Snapdragon 855 Plus', 128, 8, '512GB', '48MP + 13MP', '24MP', '\r\n3G, 4G VOLTE, 4G, 2G', 6000, 78, 10, 240, 72000, 500),
(12, 'Honor 9X (Midnight Black, 128 GB)  (4 GB RAM)', 'Honor', '\r\nSTK-L22', '9X', '\r\nMidnight Blue', 16.74, '\r\n2340 x 1080', '\r\nAndroid Pie 9', '\r\nKirin 710F', 128, 4, '512GB', '48MP + 8MP + 2MP', '\r\n16MP', '\r\n4G VOLTE, 3G, 2G', 4000, 77, 9, 197, 16000, 500),
(13, 'Honor 20 (Midnight Black, 128 GB)  (6 GB RAM)', 'Honor', '\r\nYAL-AL00', '20', '\r\nMidnight Black', 15.9, '\r\n2340 x 1080', 'Android Pie 9.0', 'HiSilicon Kirin 980', 128, 6, '64BG', '48MP + 2MP + 16MP\r\n', '32MP', '\r\n3G, 4G VOLTE, 4G, 2G', 3750, 74, 8, 174, 20000, 500),
(14, 'LG G8X (Black, 128 GB)  (6 GB RAM)', 'LG', '\r\nLMG850EMW', 'G8X', '\r\nBlack', 16.26, '\r\n2340 x 1080', 'Android Pie 9', '\r\nQualcomm Snapdragon™ 855 Octa-core', 128, 6, '2TB', '12MP + 13MP\r\n', '32MP ', '\r\n4G VOLTE, 3G', 4000, 76, 8, 191, 26000, 500),
(15, 'LG Velvet Dual Screen (Aurora Silver, 128 GB)  (6 GB RAM)', 'LG', '\r\nLMG910EMW', 'Velvet Dual Screen', 'Aurora Silver', 17.27, '2460 x 1080', 'Android 10', 'Qualcomm Snapdragon 845', 128, 6, '2TB', '48MP + 8MP + 5MP', '16MP ', '\r\n4G VOLTE, 4G, 3G, 2G', 4300, 74, 8, 180, 53000, 500),
(16, 'LG Wing (Illusion Sky, 128 GB)  (8 GB RAM)', 'LG', '\r\nLMF100EMW', 'Wing', '\r\nIllusion Sky', 17.27, '2460 x 1080', '\r\nAndroid 10', '\r\nQualcomm Snapdragon 765G', 128, 8, '2TB', '\r\n64MP + 13MP + 12MP', '32MP', '5G, 4G VOLTE, 4G, 3G, 2G', 4000, 75, 11, 260, 45000, 500),
(17, 'Nokia 5.3 (CHARCOAL, 64 GB)  (6 GB RAM)', 'Nokia', '\r\n5.3 DS 6/64', '5.3', '\r\nCHARCOAL', 16.64, '720 x 1600', 'Android Android Q 10', 'Qualcomm Snapdragon 665', 64, 6, '32GB', '\r\n13MP', '8 MP, f/2.0, (wide)', '\r\n3G, 4G VOLTE, 4G, 2G', 4000, 67, 9, 180, 16000, 0),
(18, 'Nokia 6.1 Plus (Blue, 64 GB)  (6 GB RAM)', 'Nokia', '', '6.1 Plus', 'Blue', 14.73, '2280 x 1080', '\r\nAndroid Oreo 8.1.0', '\r\nQualcomm Snapdragon 636 Octacore', 64, 4, '400GB', '16MP + 5MP', '\r\n16MP ', '\r\n3G, 4G, 2G', 3630, 71, 8, 151, 7000, 0),
(19, 'Nokia TA-1174 / TA-1299  (Black)', 'Nokia', '\r\nTA-1174/NOKIA 105 DS / 105 ta-1174 ds', 'TA1174', '\r\nBlack', 4.57, '\r\n320 x 240', '', '', 4, 4, '1GB', '', '', '\r\n2G', 800, 0, 0, 0, 3500, 0),
(20, 'Nokia 150 DS 2020  (Black)', 'Nokia', '\r\nTA-1235 / 12GMNB21A01', '150 DS 2020', '\r\nBlack', 6.1, '\r\n320 x 240', '\r\nSeries 30+', 'MediaTek', 4, 4, '32GB', '0.3MP', '', '\r\n2G', 1020, 51, 15, 91, 8000, 0),
(21, 'Nokia C3 (Nordic Blue, 16 GB)  (2 GB RAM)', 'Nokia', '\r\nSP01Z01Z2249Y', 'C3', '\r\nNordic Blue', 15.21, '\r\n1440 x 720', 'Android 10', 'SC9863A Octa Core', 16, 2, '128GB', '8MP', '8MP ', '\r\n4G VOLTE, 4G, 3G, 2G', 3040, 77, 9, 185, 5000, 0),
(22, 'OnePlus 7T', 'OnePlus', 'B082K96P6W', 'OnePlus 7T', 'Glacier Blue', 16.6, '2400 x 1080', 'Android', 'Qualcomm Snapdragon 865', 256, 8, '256GB', '48MP+8MP+5MP+2MP', '48MP', 'GSM, TDS, (B1/2/4/5/8/9/19), FDD-LTE, (B1/2/3/4/5/7/8/12/13/17/18/19/20/26/28/29), (B2/3/5/8), CDMA, TDD-LTE, UMTS, (B34/38/39/40/41), 4G, 2G, (B34/B39), (BC0/BC1)', 3800, 16, 7, 190, 35000, 0),
(23, 'OnePlus 7 Pro (Nebula Blue, 8GB RAM, Fluid AMOLED Display, 256GB Storage, 4000mAH Battery)', 'OnePlus', 'B07HGJK535', 'OnePlus 7 Pro', 'Nebula Blue', 16.9, '3120 x 1440', 'Android 9.0', 'Qualcomm Snapdragon 865', 256, 8, '256GB', '48 MP', '48MP+8MP+16MP', '4G;FDD;LTE;(B1/2/3/4/5/7/8/12/13/17/18/19/20/25/26/28/29/32/66);TDD-LTE;(B34/38/39/40/41);TDS;(B34/39);UMTS;(B1/2/4/5/8/9/19);CDMA;(BC0/BC1);GSM;(B2/3/5/8)', 4000, 16, 8, 206, 39000, 0),
(24, 'OnePlus 8 Pro (Glacial Green 8GB RAM+128GB Storage)', 'OnePlus', 'B078BN2H3R', 'OnePlus 8 Pro', 'Glacial Green', 17.2, '\r\nAMOLED', 'Android', 'Qualcomm Snapdragon 865', 256, 8, '256GB', '48', '48MP+8MP+48MP+5MP', 'GSM, BC0(Roaming), Wi-Fi 802.11 a/b/g/n/ac/ax, 2.4G/5G, Wi-Fi 6, Bluetooth 5.1, support aptX & aptX HD & LDAC & AAC, NFC enabled, LTE-FDD, NR, WCDMA, CDMA, (B1/2/3/4/5/7/8/12/17/18/19/20/26), N78, (B1/B2/B4/B5/B8/B9/B19), 5G, (850/900/1800/1900), (B1/3/41', 4510, 17, 7, 199, 45200, 0),
(25, 'OnePlus Nord 5G (Blue Marble, 12GB RAM, 256GB Storage)', 'OnePlus', 'B0869855B8', 'OnePlus Nord 5G', 'Marble Blue', 16.4, '2400 x 1080', 'Android', 'Qualcomm Snapdragon 765G 5G mobile platform', 4, 64, '64GB', '48', '48MP+8MP+5MP+2MP', 'GSM, LTE-FDD, IN, WCDMA, (B1/2/3/4/5/7/8/12/17/18/19/20/26), (B38/39/40/41/46), N78, (B1/B2/B4/B5/B8/B9/B19), 5G, (850/900/1800/1900), MIMO:LTE: B1, 3, 40 NR: N78, LTE-TDD, Network connectivity may vary depending on carrier’s network and related service d', 4115, 16, 7, 184, 35999, 0),
(26, 'POCO C3 (Arctic Blue, 64 GB)  (4 GB RAM)', 'POCO', 'MZB07RJIN', 'C3', 'Arctic Blue', 16.59, '1600 x 720', 'Android 10', 'Mediatek Helio G35', 64, 4, '512GB', '13MP + 2MP + 2MP', '5MP ', '4G VOLTE, 4G, 3G, 2G', 5000, 77, 9, 194, 16999, 0),
(27, 'POCO F1 (Graphite Black, 64 GB)  (6 GB RAM)', 'POCO', 'MZB6645IN', 'F1', 'Graphite Black', 15.7, '2160 x 1080', 'Android Oreo 8.1', 'Qualcomm Snapdragon 845', 64, 6, '256GB', '\r\n12MP + 5MP', '20MP ', '3G, 4G VOLTE, 2G', 4000, 75, 9, 180, 13999, 0),
(28, 'POCO M2 (Brick Red, 128 GB)  (6 GB RAM)', 'POCO', '\r\nMZB9922IN', 'M2', 'Brick Red', 16.59, '2340 x 1080', 'Android 10', 'MediaTek Helio G80', 128, 6, '512GB', '13MP + 8MP + 5MP + 2MP', '8MP ', '4G VOLTE, 4G, 3G, 2G', 5000, 77, 9, 198, 13599, 0),
(29, 'POCO M2 Pro (Out of the Blue, 64 GB)  (6 GB RAM)', 'POCO', '\r\nMZB9627IN', 'M2 Pro', 'Out of the Blue', 16.94, '2400 x 1080', '\r\nAndroid 10', 'Qualcomm Snapdragon 720G', 64, 6, '512GB', '\r\n48MP + 8MP + 5MP + 2MP', '16MP', '\r\n4G, 3G, 2G', 5000, 77, 9, 209, 17999, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart_master`
--

CREATE TABLE `shopping_cart_master` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `time_stamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `state_master`
--

CREATE TABLE `state_master` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_master`
--

INSERT INTO `state_master` (`state_id`, `state_name`) VALUES
(1, 'ANDHRA PRADESH'),
(2, 'ASSAM'),
(3, 'ARUNACHAL PRADESH'),
(4, 'BIHAR'),
(5, 'GUJRAT'),
(6, 'HARYANA'),
(7, 'HIMACHAL PRADESH'),
(8, 'JAMMU & KASHMIR'),
(9, 'KARNATAKA'),
(10, 'KERALA'),
(11, 'MADHYA PRADESH'),
(12, 'MAHARASHTRA'),
(13, 'MANIPUR'),
(14, 'MEGHALAYA'),
(15, 'MIZORAM'),
(16, 'NAGALAND'),
(17, 'ORISSA'),
(18, 'PUNJAB'),
(19, 'RAJASTHAN'),
(20, 'SIKKIM'),
(21, 'TAMIL NADU'),
(22, 'TRIPURA'),
(23, 'UTTAR PRADESH'),
(24, 'WEST BENGAL'),
(25, 'DELHI'),
(26, 'GOA'),
(27, 'PONDICHERY'),
(28, 'LAKSHDWEEP'),
(29, 'DAMAN & DIU'),
(30, 'DADRA & NAGAR'),
(31, 'CHANDIGARH'),
(32, 'ANDAMAN & NICOBAR'),
(33, 'UTTARANCHAL'),
(34, 'JHARKHAND'),
(35, 'CHATTISGARH');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `user_id` int(100) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` bigint(10) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_address_1` varchar(255) NOT NULL,
  `user_address_2` varchar(255) DEFAULT NULL,
  `state_id` int(3) NOT NULL,
  `city_id` int(3) NOT NULL,
  `user_pincode` int(25) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `user_date_added` varchar(255) NOT NULL,
  `user_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`user_id`, `first_name`, `last_name`, `user_email`, `user_phone`, `user_gender`, `user_address_1`, `user_address_2`, `state_id`, `city_id`, `user_pincode`, `user_pwd`, `user_date_added`, `user_status`) VALUES
(1, 'Ethan', 'Winters', 'laknonidra@biyac.com', 1234567890, 'Male', 'The Village', '8 Street', 34, 214, 833201, '$2y$10$NWR.bKaREenx77yq3vGa3uELw3p7Kr4MY4WYqeGF//98k85AP7QYq', '21-08-12 15:58:41', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cities_master`
--
ALTER TABLE `cities_master`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `delivery_master`
--
ALTER TABLE `delivery_master`
  ADD PRIMARY KEY (`deli_id`);

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `state_master`
--
ALTER TABLE `state_master`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_master`
--
ALTER TABLE `admin_master`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities_master`
--
ALTER TABLE `cities_master`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=604;

--
-- AUTO_INCREMENT for table `delivery_master`
--
ALTER TABLE `delivery_master`
  MODIFY `deli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `state_master`
--
ALTER TABLE `state_master`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
