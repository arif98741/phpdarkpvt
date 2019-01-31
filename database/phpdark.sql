-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2019 at 11:53 PM
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
  `page_type` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `page_attachment` varchar(200) NOT NULL,
  `create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_category`
--

CREATE TABLE `tbl_page_category` (
  `tpcid` int(11) NOT NULL,
  `category_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `post_description` text CHARACTER SET utf8 COLLATE utf8_bin,
  `catid` int(11) NOT NULL,
  `post_type` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `post_attachment` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `post_title`, `post_description`, `catid`, `post_type`, `post_attachment`, `created`, `updated`) VALUES
(1, 'PHP BASIC Introduction', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat cumque quibusdam minima! Debitis quasi, dolorum deleniti sunt, eveniet doloremque nulla nostrum eum architecto ex nesciunt. Ea a velit magnam numquam, consequuntur explicabo perspiciatis necessitatibus vel pariatur tenetur quasi asperiores iusto voluptatibus accusantium sunt illum recusandae facilis laborum ab labore eligendi vero modi ex sequi. Cupiditate ducimus deleniti soluta pariatur accusamus eveniet provident eum, nesciunt a, magni qui dolorum ullam natus, aut mollitia exercitationem, non blanditiis. Neque, fuga quas cupiditate deserunt delectus. Ex, suscipit! Qui quasi libero magni tempora aperiam, officia necessitatibus, deserunt, obcaecati saepe repellat dolor beatae nemo laborum cum.<br><br>\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat cumque quibusdam minima! Debitis quasi, dolorum deleniti sunt, eveniet doloremque nulla nostrum eum architecto ex nesciunt. Ea a velit magnam numquam, consequuntur explicabo perspiciatis necessitatibus vel pariatur tenetur quasi asperiores iusto voluptatibus accusantium sunt illum recusandae facilis laborum ab labore eligendi vero modi ex sequi. Cupiditate ducimus deleniti soluta pariatur accusamus eveniet provident eum, nesciunt a, magni qui dolorum ullam natus, aut mollitia exercitationem, non blanditiis. Neque, fuga quas cupiditate deserunt delectus. Ex, suscipit! Qui quasi libero magni tempora aperiam, officia necessitatibus, deserunt, obcaecati saepe repellat dolor beatae nemo laborum cum.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat cumque quibusdam minima! Debitis quasi, dolorum deleniti sunt, eveniet doloremque nulla nostrum eum architecto ex nesciunt. Ea a velit magnam numquam, consequuntur explicabo perspiciatis necessitatibus vel pariatur tenetur quasi asperiores iusto voluptatibus accusantium sunt illum recusandae facilis laborum ab labore eligendi vero modi ex sequi. Cupiditate ducimus deleniti soluta pariatur accusamus eveniet provident eum, nesciunt a, magni qui dolorum ullam natus, aut mollitia exercitationem, non blanditiis. Neque, fuga quas cupiditate deserunt delectus. Ex, suscipit! Qui quasi libero magni tempora aperiam, officia necessitatibus, deserunt, obcaecati saepe repellat dolor beatae nemo laborum cum.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat cumque quibusdam minima! Debitis quasi, dolorum deleniti sunt, eveniet doloremque nulla nostrum eum architecto ex nesciunt. Ea a velit magnam numquam, consequuntur explicabo perspiciatis necessitatibus vel pariatur tenetur quasi asperiores iusto voluptatibus accusantium sunt illum recusandae facilis laborum ab labore eligendi vero modi ex sequi. Cupiditate ducimus deleniti soluta pariatur accusamus eveniet provident eum, nesciunt a, magni qui dolorum ullam natus, aut mollitia exercitationem, non blanditiis. Neque, fuga quas cupiditate deserunt delectus. Ex, suscipit! Qui quasi libero magni tempora aperiam, officia necessitatibus, deserunt, obcaecati saepe repellat dolor beatae nemo laborum cum.<br><br>', 1, 'Something', '', '2019-01-29 18:42:31', '0000-00-00 00:00:00'),
(2, 'PHP Object Oriented PRogram', 'Everything is basic and introduction dolor sit amet, consectetur adipisicing elit. Fugiat cumque quibusdam minima! Debitis quasi, dolorum deleniti sunt, eveniet doloremque nulla nostrum eum architecto ex nesciunt. Ea a velit magnam numquam, consequuntur explicabo perspiciatis necessitatibus vel pariatur tenetur quasi asperiores iusto voluptatibus accusantium sunt illum recusandae facilis laborum ab labore eligendi vero modi ex sequi. Cupiditate ducimus deleniti soluta pariatur accusamus eveniet provident eum, nesciunt a, magni qui dolorum ullam natus, aut mollitia exercitationem, non blanditiis. Neque, fuga quas cupiditate deserunt delectus. Ex, suscipit! Qui quasi libero magni tempora aperiam, officia necessitatibus, deserunt, obcaecati saepe repellat dolor beatae nemo laborum cum.<br><br>\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat cumque quibusdam minima! Debitis quasi, dolorum deleniti sunt, eveniet doloremque nulla nostrum eum architecto ex nesciunt. Ea a velit magnam numquam, consequuntur explicabo perspiciatis necessitatibus vel pariatur tenetur quasi asperiores iusto voluptatibus accusantium sunt illum recusandae facilis laborum ab labore eligendi vero modi ex sequi. Cupiditate ducimus deleniti soluta pariatur accusamus eveniet provident eum, nesciunt a, magni qui dolorum ullam natus, aut mollitia exercitationem, non blanditiis. Neque, fuga quas cupiditate deserunt delectus. Ex, suscipit! Qui quasi libero magni tempora aperiam, officia necessitatibus, deserunt, obcaecati saepe repellat dolor beatae nemo laborum cum.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat cumque quibusdam minima! Debitis quasi, dolorum deleniti sunt, eveniet doloremque nulla nostrum eum architecto ex nesciunt. Ea a velit magnam numquam, consequuntur explicabo perspiciatis necessitatibus vel pariatur tenetur quasi asperiores iusto voluptatibus accusantium sunt illum recusandae facilis laborum ab labore eligendi vero modi ex sequi. Cupiditate ducimus deleniti soluta pariatur accusamus eveniet provident eum, nesciunt a, magni qui dolorum ullam natus, aut mollitia exercitationem, non blanditiis. Neque, fuga quas cupiditate deserunt delectus. Ex, suscipit! Qui quasi libero magni tempora aperiam, officia necessitatibus, deserunt, obcaecati saepe repellat dolor beatae nemo laborum cum.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat cumque quibusdam minima! Debitis quasi, dolorum deleniti sunt, eveniet doloremque nulla nostrum eum architecto ex nesciunt. Ea a velit magnam numquam, consequuntur explicabo perspiciatis necessitatibus vel pariatur tenetur quasi asperiores iusto voluptatibus accusantium sunt illum recusandae facilis laborum ab labore eligendi vero modi ex sequi. Cupiditate ducimus deleniti soluta pariatur accusamus eveniet provident eum, nesciunt a, magni qui dolorum ullam natus, aut mollitia exercitationem, non blanditiis. Neque, fuga quas cupiditate deserunt delectus. Ex, suscipit! Qui quasi libero magni tempora aperiam, officia necessitatibus, deserunt, obcaecati saepe repellat dolor beatae nemo laborum cum.<br><br>', 3, 'ds', 'sdfd', '2019-01-29 18:43:11', '0000-00-00 00:00:00'),
(3, 'PHP Object Creation', 'Object Oriented Program is and gendi vero modi ex sequi. Cupiditate ducimus deleniti soluta pariatur accusamus eveniet provident eum, nesciunt a, magni qui dolorum ullam natus, aut mollitia exercitationem, non blanditiis. Neque, fuga quas cupiditate deserunt delectus. Ex, suscipit! Qui quasi libero magni tempora aperiam, officia necessitatibus, deserunt, obcaecati saepe repellat dolor beatae nemo laborum cum.<br><br>\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat cumque quibusdam minima! Debitis quasi, dolorum deleniti sunt, eveniet doloremque nulla nostrum eum architecto ex nesciunt. Ea a velit magnam numquam, consequuntur explicabo perspiciatis necessitatibus vel pariatur tenetur quasi asperiores iusto voluptatibus accusantium sunt illum recusandae facilis laborum ab labore eligendi vero modi ex sequi. Cupiditate ducimus deleniti soluta pariatur accusamus eveniet provident eum, nesciunt a, magni qui dolorum ullam natus, aut mollitia exercitationem, non blanditiis. Neque, fuga quas cupiditate deserunt delectus. Ex, suscipit! Qui quasi libero magni tempora aperiam, officia necessitatibus, deserunt, obcaecati saepe repellat dolor beatae nemo laborum cum.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat cumque quibusdam minima! Debitis quasi, dolorum deleniti sunt, eveniet doloremque nulla nostrum eum architecto ex nesciunt. Ea a velit magnam numquam, consequuntur explicabo perspiciatis necessitatibus vel pariatur tenetur quasi asperiores iusto voluptatibus accusantium sunt illum recusandae facilis laborum ab labore eligendi vero modi ex sequi. Cupiditate ducimus deleniti soluta pariatur accusamus eveniet provident eum, nesciunt a, magni qui dolorum ullam natus, aut mollitia exercitationem, non blanditiis. Neque, fuga quas cupiditate deserunt delectus. Ex, suscipit! Qui quasi libero magni tempora aperiam, officia necessitatibus, deserunt, obcaecati saepe repellat dolor beatae nemo laborum cum.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat cumque quibusdam minima! Debitis quasi, dolorum deleniti sunt, eveniet doloremque nulla nostrum eum architecto ex nesciunt. Ea a velit magnam numquam, consequuntur explicabo perspiciatis necessitatibus vel pariatur tenetur quasi asperiores iusto voluptatibus accusantium sunt illum recusandae facilis laborum ab labore eligendi vero modi ex sequi. Cupiditate ducimus deleniti soluta pariatur accusamus eveniet provident eum, nesciunt a, magni qui dolorum ullam natus, aut mollitia exercitationem, non blanditiis. Neque, fuga quas cupiditate deserunt delectus. Ex, suscipit! Qui quasi libero magni tempora aperiam, officia necessitatibus, deserunt, obcaecati saepe repellat dolor beatae nemo laborum cum.<br><br>', 3, 'sdf', 'dsf', '2019-01-29 18:44:13', '0000-00-00 00:00:00'),
(5, 'CRUD Data Validation', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.\r\n\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.\r\n\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.\r\n\r\n', 4, 'ds', 'fds', '2019-01-29 18:45:03', '2019-01-06 18:00:00');

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
(1, 'PHP Basic', '2019-01-29 21:43:08', '2019-01-09 18:00:00'),
(2, 'PHP Advancedsoi', '2019-01-29 23:13:10', '2019-01-29 23:14:11'),
(3, 'PHP Tutorial', '2019-01-29 22:42:04', '2019-01-06 21:13:16'),
(4, 'PHP CRUD', '2019-01-29 21:43:17', '2019-01-16 00:13:10'),
(8, 'PHP Framework', '2019-01-29 22:17:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tag`
--

CREATE TABLE `tbl_tag` (
  `tagid` int(11) NOT NULL,
  `tag_name` varchar(40) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_dated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `tbl_tag`
--
ALTER TABLE `tbl_tag`
  ADD PRIMARY KEY (`tagid`),
  ADD KEY `post_id` (`post_id`);

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
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_page_category`
--
ALTER TABLE `tbl_page_category`
  MODIFY `tpcid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_post_category`
--
ALTER TABLE `tbl_post_category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_tag`
--
ALTER TABLE `tbl_tag`
  MODIFY `tagid` int(11) NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `tbl_tag`
--
ALTER TABLE `tbl_tag`
  ADD CONSTRAINT `tbl_tag_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `tbl_post` (`post_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
