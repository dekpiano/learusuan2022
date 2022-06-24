-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 11:57 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skjacth_learnsuan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_lesson`
--

CREATE TABLE `tb_lesson` (
  `lesson_id` int(5) NOT NULL,
  `lesson_subsid` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'สาระที่',
  `lesson_No` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'เรื่องที่',
  `lesson_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อเรื่อง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_substance`
--

CREATE TABLE `tb_substance` (
  `subs_id` int(5) NOT NULL,
  `subs_unit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `subs_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_substance`
--

INSERT INTO `tb_substance` (`subs_id`, `subs_unit`, `subs_title`) VALUES
(1, '1', 'asd'),
(2, '1', 'asd'),
(3, '2', 'zxc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_lesson`
--
ALTER TABLE `tb_lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `tb_substance`
--
ALTER TABLE `tb_substance`
  ADD PRIMARY KEY (`subs_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_lesson`
--
ALTER TABLE `tb_lesson`
  MODIFY `lesson_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_substance`
--
ALTER TABLE `tb_substance`
  MODIFY `subs_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
