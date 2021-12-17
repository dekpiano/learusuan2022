-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 10:16 AM
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
-- Database: `skjacth_admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_quota`
--

CREATE TABLE `tb_quota` (
  `quota_id` int(2) NOT NULL,
  `quota_key` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `quota_explain` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quota_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_quota`
--

INSERT INTO `tb_quota` (`quota_id`, `quota_key`, `quota_explain`, `quota_status`) VALUES
(1, 'quotaM1', 'รอบโควตา นักเรียนโรงเรียนในเขตพื้นที่บริการ', 'on'),
(2, 'quotaM4', 'รอบโควตา นักเรียนชั้น ม.3 จากโรงเรียนเดิม', 'off'),
(3, 'normal', 'รอบปกติ', 'on'),
(4, 'quotasport', 'รอบโควตา นักกีฬา', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_quota`
--
ALTER TABLE `tb_quota`
  ADD PRIMARY KEY (`quota_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_quota`
--
ALTER TABLE `tb_quota`
  MODIFY `quota_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
