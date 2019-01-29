-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 12:53 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apply`
--

CREATE TABLE `tbl_apply` (
  `apply_id` int(11) NOT NULL,
  `application_number` varchar(20) DEFAULT NULL,
  `stu_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `user_id` int(4) NOT NULL,
  `class` int(2) NOT NULL,
  `father` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mother` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `gender` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `birth` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `religion` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `quota` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `home` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `post` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `vill` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `dist` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `upozila` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mobile_father` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mobile_mother` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `gurdian_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `relation` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `gurdian_mobile` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_institute` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_institute_addr` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tcno` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `last_institute_gpa` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `last_institute_roll` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `trans_id` varchar(50) DEFAULT NULL,
  `status` varchar(25) DEFAULT 'active',
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_apply`
--

INSERT INTO `tbl_apply` (`apply_id`, `application_number`, `stu_name`, `user_id`, `class`, `father`, `mother`, `gender`, `birth`, `religion`, `quota`, `image`, `home`, `post`, `vill`, `dist`, `upozila`, `mobile_father`, `mobile_mother`, `gurdian_name`, `relation`, `gurdian_mobile`, `last_institute`, `last_institute_addr`, `tcno`, `last_institute_gpa`, `last_institute_roll`, `trans_id`, `status`, `date`) VALUES
(6, '0000001', 'আরিফুল ইসলাম', 4, 3, 'নাসির উদ্দিন', 'পারভীন আক্তার', 'ছেলে', '১২-১২-১৯৯০', 'ইসলাম', 'মুক্তিযোদ্ধা/শহীদ মুক্তিযোদ্ধাদের পুত্র-কন্যার পুত্র-কন্যা', 'persona-5-avatar-png-3.png', 'এলেংগা ফুলতলা', 'কুচটি', 'ফুলতলা', 'টাংগাইল', 'কালিহাতি', '01752563333', '01750840217', 'ইকবাল হোসেন', 'মামা', '01740261711', 'স্কয়ার শিক্ষাঙ্গন', 'কামাল আতার্তুক রোড, ডেওরা', '৫৬৫', '4.56', '56789', NULL, 'active', '2018-11-24'),
(9, '0000002', 'শাহাদাত হোসাইন', 4, 3, 'নাসির', 'আক্তার', 'ছেলে', '১২-১২-১৯৯০', 'ইসলাম', 'মুক্তিযোদ্ধা/শহীদ মুক্তিযোদ্ধাদের পুত্র-কন্যার পুত্র-কন্যা', 'persona-5-avatar-png-3.png', 'এলেংগা ফুলতলা', 'কুচটি', 'ফুলতলা', 'টাংগাইল', 'কালিহাতি', '01752563333', '01750840217', 'ইকবাল হোসেন', 'মামা', '01740261711', 'স্কয়ার শিক্ষাঙ্গন', 'কামাল আতার্তুক রোড, ডেওরা', '৪৩', '4.56', '56789', NULL, 'active', '2018-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `sl` int(11) NOT NULL,
  `apply_id` int(11) NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `paid_amount` varchar(10) DEFAULT NULL,
  `trans_id` varchar(50) DEFAULT NULL,
  `status` varchar(25) DEFAULT 'pending',
  `apply_date` date DEFAULT NULL,
  `pay_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`sl`, `apply_id`, `payment_id`, `user_id`, `paid_amount`, `trans_id`, `status`, `apply_date`, `pay_date`) VALUES
(3, 6, NULL, 4, '700', '567', 'verified', '2018-11-24', NULL),
(6, 9, NULL, 4, '700', '234567', 'verified', '2018-11-24', '2018-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `organization_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `organization_head` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `contact_person` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `dist` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `upozila` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mobile` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `website` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `signature` varchar(80) DEFAULT NULL,
  `comment` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fee_amount` int(11) NOT NULL,
  `switch_system` varchar(10) NOT NULL DEFAULT 'on',
  `switch_admit` varchar(10) NOT NULL DEFAULT 'on',
  `apply_rule` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pay_rule` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `admit_rule` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `status` varchar(25) DEFAULT 'active',
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `organization_name`, `organization_head`, `contact_person`, `dist`, `upozila`, `address`, `mobile`, `email`, `username`, `password`, `website`, `image`, `signature`, `comment`, `fee_amount`, `switch_system`, `switch_admit`, `apply_rule`, `pay_rule`, `admit_rule`, `status`, `last_update`) VALUES
(1, 'বসুরহাট সরকারী উচ্চ বিদ্যালয়', 'প্রধান শিক্ষক', 'Abdul Kader', 'নোয়াখালী', 'কোম্পানীগঞ্জ', 'এলেংগা কালিহাতি টাঙ্গাইল', '01777615690', 'bahcghs@admin.com', 'result', 'b4a88417b3d0170d754c647c30b7216a', 'www.bahcghs.edu.bd', '5219426_orig.png', 'ariful_islam', '', 500, 'on', 'on', 'ইয়েস', 'সাধারন বিবেচনাধীন পেমেন্টের ক্ষেত্রে', 'এডমিট কার্ড পাওয়ার ক্ষেত্রে', 'active', '2018-11-20 16:22:56'),
(4, 'ফুলতলা উচ্চ বিদ্যালয়', 'আরিফুল ইসলাম', '', 'টাংগাইল', 'কালিহাতি', 'এলেংগা কালিহাতি টাঙ্গাইল', '017256335554', 'arif98741@gmail.co', 'admission', '281edb7c3cf81e3b67aaa09df4e313f5', 'www.web.com', 'download.png', '5219426_orig.png', NULL, 700, 'on', 'off', '্তিসসসসদফদস্ফদস', 'পাওয়ার ক্ষেতsdfdsfsdf', 'কার্ড পাওয়ার ক্ষেত', 'active', '2018-11-24 09:26:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_apply`
--
ALTER TABLE `tbl_apply`
  ADD PRIMARY KEY (`apply_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_apply`
--
ALTER TABLE `tbl_apply`
  MODIFY `apply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
