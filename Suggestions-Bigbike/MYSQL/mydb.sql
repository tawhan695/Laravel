-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2020 at 01:04 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

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
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `Date_id` int(5) NOT NULL,
  `Date_name` varchar(20) NOT NULL,
  `Date_engine_size` float NOT NULL,
  `price` int(10) NOT NULL,
  `Date_using` varchar(50) NOT NULL,
  `Date_image` varchar(250) NOT NULL,
  `Date_years` int(4) NOT NULL,
  `Date_systems` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'นาย', 'สมดี', 'มากเด้อ', '2018-10-31', 22, 172, 'test', '123', 'teat@ku.th', ''),
(2, 'นาย', 'ทนงศักดิ์', 'บุญมา', '1997-11-02', 22, 175, 'tanongsak.bo@ku.th', '123', 'tanongsak.bo@ku.th', NULL),
(3, 'นาย', 'ทนงศักดิ์', 'บุญมา', '1997-11-02', 22, 175, 'tanongsak.bo@ku.th', '123', 'tanongsak.bo@ku.th', NULL),
(4, 'นาย', '123', '321', '1111-11-11', 22, 22, '123', '123', '123@tas', NULL),
(5, 'นาย', 'dsfdsfds', 'sdfgfdsg', '1998-03-31', 22, 175, '33333', '333', 'tanonoh@gmail.com', NULL),
(6, 'นาย', 'ะหฟหเกดห', 'หกดเหกดเ', '1997-12-12', 12, 197, 'tanongsak', '123', 'tanongsak.bo@ku.th', NULL),
(7, 'นาย', 'dsfdsfds', 'บุญมา', '8844-02-21', 22, 22, 'ำพไำ', '123', 'tanongsak.bo@ku.th', NULL),
(8, 'นาย', 'dsfdsfds', 'บุญมา', '1997-12-22', 198, 222, 'tanongsak.bo@ku.th', '22222', 'tanongsak.bo@ku.th', NULL),
(9, 'นาย', '123', '123212', '1997-02-11', 22, 127, '3212', '123456789', 'tanonoh@gmail.com', NULL),
(10, 'นาย', 'hhhhh', 'gfghfgh', '1997-02-28', 22, 1997, 'taaatatat', '123456789', 'tatat@gmail.com', NULL),
(11, 'นาย', 'dsfdsfds', '132', '1997-06-28', 22, 172, '111', '123456789', 'tatat@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_23_121518_create_members_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`) VALUES
(1, 1);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`Date_id`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_board_posts`
--
ALTER TABLE `web_board_posts`
  ADD PRIMARY KEY (`web_board_posts_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `date`
--
ALTER TABLE `date`
  MODIFY `Date_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guidance`
--
ALTER TABLE `guidance`
  MODIFY `guidance_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `Member_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `web_board_posts`
--
ALTER TABLE `web_board_posts`
  MODIFY `web_board_posts_id` int(13) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
