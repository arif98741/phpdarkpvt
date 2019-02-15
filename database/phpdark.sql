-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 09:20 PM
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
-- Database: `phpdark`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `page_description` text CHARACTER SET utf8 COLLATE utf8_bin,
  `tpcid` int(11) NOT NULL,
  `page_slug` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `page_attachment` varchar(200) NOT NULL,
  `page_status` varchar(30) NOT NULL DEFAULT 'published',
  `create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`page_id`, `page_title`, `page_description`, `tpcid`, `page_slug`, `page_attachment`, `page_status`, `create`, `update`) VALUES
(21, 'sdf', '<p>sdf</p>\r\n', 11, 'dsfds', '21-1550261841.PNG', 'published', '2019-02-15 20:17:21', '2019-02-15 20:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_category`
--

CREATE TABLE `tbl_page_category` (
  `tpcid` int(11) NOT NULL,
  `category_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page_category`
--

INSERT INTO `tbl_page_category` (`tpcid`, `category_title`, `created_at`, `updated_at`) VALUES
(2, 'Blog Page', '2019-02-14 19:44:40', '0000-00-00 00:00:00'),
(11, 'Data Table', '2019-02-14 20:18:01', '2019-02-14 20:18:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `post_description` text CHARACTER SET utf8 COLLATE utf8_bin,
  `catid` int(11) NOT NULL,
  `post_slug` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `post_attachment` varchar(200) NOT NULL,
  `post_status` varchar(30) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `post_title`, `post_description`, `catid`, `post_slug`, `post_attachment`, `post_status`, `created`, `updated`) VALUES
(21, 'Test Post Fo', '<p>dsf sdf dsf </p>\r\n\r\n<p>A</p>', 1, 'php-learning-ginious', '21-1549834613.PNG', 'pending', '2019-02-10 21:36:10', '2019-02-10 21:42:16'),
(22, 'avb', '<p>sd sdfsdf</p>\r\n', 1, 'dsf-786-bjhk-sdaf-2342', '22-1549837168.PNG', 'published', '2019-02-10 22:19:28', '2019-02-10 22:19:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_category`
--

CREATE TABLE `tbl_post_category` (
  `catid` int(11) NOT NULL,
  `category_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post_category`
--

INSERT INTO `tbl_post_category` (`catid`, `category_title`, `created_at`, `updated_at`) VALUES
(1, 'PHP Basics', '2019-01-29 21:43:08', '2019-02-10 22:57:49'),
(2, 'PHP Advanceds', '2019-01-29 23:13:10', '2019-02-10 22:57:55'),
(4, 'PHP CRUD', '2019-01-29 21:43:17', '2019-02-10 22:57:52'),
(10, 'ABCD', '2019-02-10 22:45:56', '2019-02-10 22:57:36'),
(11, 'DEF', '2019-02-10 22:46:06', '2019-02-10 22:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_tag`
--

CREATE TABLE `tbl_post_tag` (
  `tptid` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `tagid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post_tag`
--

INSERT INTO `tbl_post_tag` (`tptid`, `post_id`, `tagid`) VALUES
(22, 21, 4),
(23, 21, 5),
(24, 22, 1),
(25, 22, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tag`
--

CREATE TABLE `tbl_tag` (
  `tagid` int(11) NOT NULL,
  `tag_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tag`
--

INSERT INTO `tbl_tag` (`tagid`, `tag_name`) VALUES
(1, 'Blogs'),
(3, 'Java'),
(4, 'Tutorial'),
(5, 'Learning');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(35) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `organization_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `logo` varchar(150) DEFAULT NULL,
  `role` varchar(25) DEFAULT 'admin',
  `status` varchar(25) DEFAULT 'active',
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `password`, `email`, `organization_name`, `address`, `logo`, `role`, `status`, `last_update`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@phpdark.com', 'Dhaka', 'Elenga, Tangail', 'something.jpg', 'admin', 'active', '2019-01-29 20:06:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`page_id`),
  ADD KEY `tpcid` (`tpcid`);

--
-- Indexes for table `tbl_page_category`
--
ALTER TABLE `tbl_page_category`
  ADD PRIMARY KEY (`tpcid`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `tid` (`catid`);

--
-- Indexes for table `tbl_post_category`
--
ALTER TABLE `tbl_post_category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `tbl_post_tag`
--
ALTER TABLE `tbl_post_tag`
  ADD PRIMARY KEY (`tptid`),
  ADD KEY `tagid` (`tagid`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `tbl_tag`
--
ALTER TABLE `tbl_tag`
  ADD PRIMARY KEY (`tagid`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_page_category`
--
ALTER TABLE `tbl_page_category`
  MODIFY `tpcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_post_category`
--
ALTER TABLE `tbl_post_category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_post_tag`
--
ALTER TABLE `tbl_post_tag`
  MODIFY `tptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_tag`
--
ALTER TABLE `tbl_tag`
  MODIFY `tagid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD CONSTRAINT `tbl_page_ibfk_1` FOREIGN KEY (`tpcid`) REFERENCES `tbl_page_category` (`tpcid`);

--
-- Constraints for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD CONSTRAINT `tbl_post_ibfk_1` FOREIGN KEY (`catid`) REFERENCES `tbl_post_category` (`catid`);

--
-- Constraints for table `tbl_post_tag`
--
ALTER TABLE `tbl_post_tag`
  ADD CONSTRAINT `tbl_post_tag_ibfk_1` FOREIGN KEY (`tagid`) REFERENCES `tbl_tag` (`tagid`),
  ADD CONSTRAINT `tbl_post_tag_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `tbl_post` (`post_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
