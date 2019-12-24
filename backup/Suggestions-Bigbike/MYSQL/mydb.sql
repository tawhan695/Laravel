-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 03:21 PM
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
  `Member_sex` varchar(50) NOT NULL,
  `Date_birth` date NOT NULL,
  `Member_age` int(2) NOT NULL,
  `End_heiht` float NOT NULL,
  `Member_username` varchar(50) NOT NULL,
  `Member_password` varchar(50) NOT NULL,
  `Member_email` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `web_board_posts`
--
ALTER TABLE `web_board_posts`
  MODIFY `web_board_posts_id` int(13) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
