-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2020 at 03:24 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `id` int(13) NOT NULL,
  `member_id` int(13) NOT NULL,
  `picture` varchar(1000) DEFAULT NULL,
  `accessories` varchar(255) DEFAULT NULL,
  `appraised_price` varchar(10) DEFAULT NULL COMMENT 'ราคาประเมิน',
  `years` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`id`, `member_id`, `picture`, `accessories`, `appraised_price`, `years`) VALUES
(31, 1, '1279.png', 'กันสะบัด ราคา  1000 บาท,', '127,666.67', '2018'),
(32, 1, '4213.png', 'โช๊ค ราคา  4000 บาท,ท่อไอเสีย ราคา  15000 บาท,', '176,111.11', '2017'),
(33, 1, '9805.png', NULL, '108,888.89', '2013');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Admin_id` int(11) NOT NULL,
  `Admin_name` varchar(50) NOT NULL,
  `Admin_email` varchar(50) NOT NULL,
  `Admin_username` varchar(50) NOT NULL,
  `Admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Admin_id`, `Admin_name`, `Admin_email`, `Admin_username`, `Admin_password`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(13) NOT NULL,
  `text` text NOT NULL COMMENT 'ข้อตวาม',
  `id_post` int(11) NOT NULL COMMENT 'ไอดีของโพส',
  `Time` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'เวลาโพส',
  `id_member` int(13) NOT NULL COMMENT 'ไอดี คนคอมเม้น'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `text`, `id_post`, `Time`, `id_member`) VALUES
(1, 'ควยยยยยยย', 1, '2020-01-19 13:20:58', 1),
(2, 'กฟหกฟหแแฟ', 5, '2020-01-19 13:48:24', 2),
(3, '123', 1, '2020-01-19 14:22:15', 1),
(4, '123', 3, '2020-01-19 14:23:10', 1),
(5, '123', 1, '2020-01-19 14:23:20', 1),
(6, '13', 5, '2020-01-19 14:23:39', 1),
(7, '15633', 5, '2020-01-19 14:27:26', 1),
(8, '123132', 5, '2020-01-19 14:28:27', 1),
(9, '123', 5, '2020-01-19 14:30:09', 1),
(10, '1234', 5, '2020-01-19 14:30:57', 1),
(11, '1234', 5, '2020-01-19 14:31:07', 1),
(12, '66666', 5, '2020-01-19 14:38:55', 1),
(13, '123', 5, '2020-01-19 14:39:39', 1),
(14, '654', 5, '2020-01-19 14:41:08', 1),
(15, 'gfhdffdgdf', 5, '2020-01-19 14:42:54', 1),
(16, 'qeqwea', 6, '2020-01-29 08:59:41', 1),
(17, 'ดีครับ', 6, '2020-01-29 09:01:39', 15);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Data_id` int(5) NOT NULL,
  `Data_name` varchar(20) NOT NULL,
  `Data_engine_size` float NOT NULL,
  `price` varchar(10) NOT NULL,
  `Data_using` varchar(50) NOT NULL,
  `Data_image` varchar(250) NOT NULL,
  `Date_years` int(4) NOT NULL,
  `show_type` varchar(20) NOT NULL COMMENT 'แสดงประเภท',
  `Ignition_system` varchar(255) NOT NULL COMMENT 'ระบบจุดระเบิด',
  `Fuel_type` varchar(255) NOT NULL COMMENT 'ประเภทน้ำมันเชื้อเพลิง',
  `Fuel_supply_system` varchar(255) NOT NULL COMMENT 'ระบบจ่ายน้ำมันเชื้อเพลิง',
  `Fuel_tank_capacity` varchar(255) NOT NULL COMMENT 'ความจุถังน้ำมันเชื้อเพลิง',
  `Suspension_system` varchar(255) NOT NULL COMMENT 'ระบบกันสะเทือน',
  `Brake_system` varchar(255) NOT NULL COMMENT 'ระบบเบรก',
  `Tire_size` varchar(255) NOT NULL COMMENT 'ขนาดยาง',
  `Size` varchar(255) NOT NULL COMMENT 'ขนาด (ยาวxกว้างxสูง มม.)',
  `weight` varchar(255) NOT NULL COMMENT 'น้ำหนักของรถ',
  `age` varchar(20) DEFAULT NULL COMMENT 'ช่วงอายุการตัดสินใจ',
  `sex` varchar(4) DEFAULT NULL,
  `height` varchar(11) DEFAULT NULL COMMENT 'ความสูงของคน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Data_id`, `Data_name`, `Data_engine_size`, `price`, `Data_using`, `Data_image`, `Date_years`, `show_type`, `Ignition_system`, `Fuel_type`, `Fuel_supply_system`, `Fuel_tank_capacity`, `Suspension_system`, `Brake_system`, `Tire_size`, `Size`, `weight`, `age`, `sex`, `height`) VALUES
(2, 'kawasaki z400', 400, '186,000', 'ขับขี่ในเมือง', 'storage/1279.png', 2019, 'แนะนำ', 'Battery and Coil', 'แก๊สโซฮอล์ 95 (E10), เบนซิน 95', 'หัวฉีด', '14 ลิตร', 'ล้อหน้า เทเลสโคปิค ขนาด 41 มม., ล้อหลัง Bottom-Link Uni-Trak, gas-charged shock with adjustable preload', 'ล้อหน้า ดิสก์เบรก (ดิสก์เบรกขนาด 310 มม. คาลิปเปอร์ลูกสูบคู่ พร้อมระบบ ABS), ล้อหลัง ดิสก์เบรก (ดิสก์เบรกขนาด 220 มม.ดิสก์เบรกขนาด 220 มม. คาลิปเปอร์ลูกสูบคู่ พร้อมระบบ ABS)', 'ล้อหน้า 110/70R17M/C 54H, ล้อหลัง 150/60R17M/C 66H', '1,990 x 800 x 1,095 มม.', '168.00 กก.', '41-60', 'ชาย', '170-179'),
(11, 's1000rr', 300, '125000', 'ขับขี่ในเมือง', 'storage/g37kFWYLx7BLQe7ENlib39B0LVifKsqMuf9cHpmC.jpeg', 1997, 'ทั่วไป', '123', '12312', '123123', '1000', '12312', '1231', '12312', '20x20x20มม.', '500', '21-40', 'ชาย', '160-169'),
(12, 'kawasaki z800', 700, '500', 'ขับขี่ในเมือง', 'storage/mzbRH9JCQszHvKhkbCk6eGAPMjy3o8pRKC7e4qhY.jpeg', 2018, 'แนะนำ', 'rer', '2222', '123', '222', '22', 'kawasaki z800', '222', '22x22x22มม.', '5000', '41-60', 'ชาย', '160-169');

-- --------------------------------------------------------

--
-- Table structure for table `guidance`
--

CREATE TABLE `guidance` (
  `guidance_id` int(5) NOT NULL,
  `guidance_name` varchar(20) NOT NULL,
  `guidance_engine_size` float NOT NULL,
  `price` int(10) NOT NULL,
  `guidance_using` varchar(50) NOT NULL,
  `guidance_image` varchar(250) NOT NULL,
  `guidance_years` int(4) NOT NULL,
  `guidance_systems` varchar(500) NOT NULL,
  `member_age` int(2) NOT NULL,
  `Member_heiht` float NOT NULL,
  `using` varchar(50) NOT NULL,
  `Member_sex` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Member_id` int(13) NOT NULL,
  `Member_titel` varchar(15) NOT NULL,
  `Member_name` varchar(50) NOT NULL,
  `Member_last_name` varchar(50) NOT NULL,
  `Date_birth` date DEFAULT NULL,
  `Member_age` int(2) DEFAULT NULL,
  `End_heiht` float DEFAULT NULL,
  `Member_username` varchar(50) NOT NULL,
  `Member_password` varchar(50) NOT NULL,
  `Member_email` varchar(50) NOT NULL,
  `status` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Member_id`, `Member_titel`, `Member_name`, `Member_last_name`, `Date_birth`, `Member_age`, `End_heiht`, `Member_username`, `Member_password`, `Member_email`, `status`) VALUES
(1, 'นาย', 'สมดี', 'มากเด้อ', '2018-10-31', 25, 170, 'test', '123', 'teat@ku.th.com', ''),
(2, 'นาย', 'ทนงศักดิ์', 'บุญมา', '1997-11-02', 22, 175, 'tanongsak.bo@ku.th', '123', 'tanongsak.bo@ku.th', NULL),
(3, 'นาย', 'ทนงศักดิ์', 'บุญมา', '1997-11-02', 22, 175, 'tanongsak.bo@ku.th', '123', 'tanongsak.bo@ku.th', NULL),
(4, 'นาย', 'good', 'bye', '1111-11-11', 0, 220, '123', '123', '123@tas', NULL),
(5, 'นาย', 'dsfdsfds', 'sdfgfdsg', '1998-03-31', 22, 175, '33333', '333', 'tanonoh@gmail.com', NULL),
(6, 'นาย', 'ะหฟหเกดห', 'หกดเหกดเ', '1997-12-12', 12, 197, 'tanongsak', '123', 'tanongsak.bo@ku.th', NULL),
(7, 'นาย', 'dsfdsfds', 'บุญมา', '8844-02-21', 22, 22, 'ำพไำ', '123', 'tanongsak.bo@ku.th', NULL),
(8, 'นาย', 'dsfdsfds', 'บุญมา', '1997-12-22', 198, 222, 'tanongsak.bo@ku.th', '22222', 'tanongsak.bo@ku.th', NULL),
(9, 'นาย', '123', '123212', '1997-02-11', 22, 127, '3212', '123456789', 'tanonoh@gmail.com', NULL),
(10, 'นาย', 'hhhhh', 'gfghfgh', '1997-02-28', 22, 1997, 'taaatatat', '123456789', 'tatat@gmail.com', NULL),
(11, 'นาย', 'dsfdsfds', '132', '1997-06-28', 22, 172, '111', '123456789', 'tatat@gmail.com', NULL),
(12, 'นางสาว', 'งาม', 'งามหลาย', '2002-10-02', 0, 120, 'bb3', '123', 'tanongsak.bo@ku.th', NULL),
(13, 'นางสาว', 'งาม', 'งามหลาย', '2002-10-02', 0, 120, 'bb3', '123', 'tanongsak.bo@ku.th', NULL),
(14, 'นาย', 'สมชาย', 'รักชาติ', '1998-02-04', 22, 174, 'mamacup', '00789', 'mama16@gmail.com', NULL),
(15, 'นาง', 'สมศรี', 'มากมายมาก', '1997-01-16', 23, 174, 'test12345', '1234', 'dawd2asc@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recommendation`
--

CREATE TABLE `recommendation` (
  `id` int(13) NOT NULL COMMENT 'คีย์หลัก',
  `id_member` int(13) NOT NULL COMMENT 'รหัสผู้เข้าชม',
  `id_data` int(5) NOT NULL COMMENT 'รหัสรถ',
  `count` int(13) NOT NULL COMMENT 'จำนวนการเข้าชม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recommendation`
--

INSERT INTO `recommendation` (`id`, `id_member`, `id_data`, `count`) VALUES
(1, 1, 2, 5),
(2, 1, 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `web_board_posts`
--

CREATE TABLE `web_board_posts` (
  `web_board_posts_id` int(13) NOT NULL,
  `web_board_posts_name` varchar(50) NOT NULL,
  `massages_date` date NOT NULL,
  `massages_time` time NOT NULL,
  `Web_board_posts_name_post` varchar(50) NOT NULL,
  `Web_board_imge` varchar(250) NOT NULL,
  `status` int(2) NOT NULL,
  `Web_board_message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_board_posts`
--

INSERT INTO `web_board_posts` (`web_board_posts_id`, `web_board_posts_name`, `massages_date`, `massages_time`, `Web_board_posts_name_post`, `Web_board_imge`, `status`, `Web_board_message`) VALUES
(1, 'name test post', '2020-01-18', '16:10:08', 'รับจดทะเบียนรถ', 'storage/1279.png', 0, 'รับจดทะเบียน(จดอย.อาหาร)ผลิตอาหาร นำเข้าอาหาร รับขอ อย. อาหาร\r\nขออนุญาตนำเข้าหรือสั่งอาหารเข้ามาในราชอาณาจักร ต่ออายุใบอนุญาตอย.ผลิต นำเข้าอาหาร \r\nขออนุญาตผลิตอาหาร ผลิตอาหารเสริม โฆษณาอาหาร โฆษณาเสริมอาหาร(โฆณษาอาหารเสริม) \r\nขออนุญาตใช้ฉลากอาหาร ขออนุญาตตั้งโรงงานผลิตอาหาร\r\nขออนุญาตนำเข้าหรือสั่งอาหารเป็นการเฉพาะคราว\r\nรับขอ อย เครื่องดื่ม ผลิตเครื่องดื่ม เช่น น้ำผลไม้ เครื่องดื่มทุกชนิด\r\nรับขึ้นทะเบียนอาหารและยาทุกชนิด จดสถานที่ผลิตอาหาร'),
(2, 'name test post', '2020-01-18', '15:15:15', 'รับจดทะเบียนรถ', 'storage/1279.png', 1, 'รับจดทะเบียน(จดอย.อาหาร)ผลิตอาหาร นำเข้าอาหาร รับขอ อย. อาหาร\r\nขออนุญาตนำเข้าหรือสั่งอาหารเข้ามาในราชอาณาจักร ต่ออายุใบอนุญาตอย.ผลิต นำเข้าอาหาร \r\nขออนุญาตผลิตอาหาร ผลิตอาหารเสริม โฆษณาอาหาร โฆษณาเสริมอาหาร(โฆณษาอาหารเสริม) \r\nขออนุญาตใช้ฉลากอาหาร ขออนุญาตตั้งโรงงานผลิตอาหาร\r\nขออนุญาตนำเข้าหรือสั่งอาหารเป็นการเฉพาะคราว\r\nรับขอ อย เครื่องดื่ม ผลิตเครื่องดื่ม เช่น น้ำผลไม้ เครื่องดื่มทุกชนิด\r\nรับขึ้นทะเบียนอาหารและยาทุกชนิด จดสถานที่ผลิตอาหาร'),
(3, 'สมดี มากเด้อ', '2020-01-18', '01:06:20', '123', 'storage/bab7yRaiPSW6TvBZKrxXfVk9e8v8jesH9DyEJeHl.png', 1, '123123123123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`,`id_member`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`Data_id`);

--
-- Indexes for table `guidance`
--
ALTER TABLE `guidance`
  ADD PRIMARY KEY (`guidance_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Member_id`);

--
-- Indexes for table `recommendation`
--
ALTER TABLE `recommendation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_data` (`id_data`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `web_board_posts`
--
ALTER TABLE `web_board_posts`
  ADD PRIMARY KEY (`web_board_posts_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access`
--
ALTER TABLE `access`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `Data_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `guidance`
--
ALTER TABLE `guidance`
  MODIFY `guidance_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `Member_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `recommendation`
--
ALTER TABLE `recommendation`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลัก', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `web_board_posts`
--
ALTER TABLE `web_board_posts`
  MODIFY `web_board_posts_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `access`
--
ALTER TABLE `access`
  ADD CONSTRAINT `access_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`Member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recommendation`
--
ALTER TABLE `recommendation`
  ADD CONSTRAINT `recommendation_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`Member_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recommendation_ibfk_2` FOREIGN KEY (`id_data`) REFERENCES `data` (`Data_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
