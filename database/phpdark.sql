-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2019 at 03:22 AM
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
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `album_name` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `album_name`, `status`) VALUES
(1, 'Blog', 'active'),
(2, 'Post', 'active'),
(3, 'Page', 'active'),
(4, 'Post Category', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `photo_name` varchar(30) NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `photo_details` varchar(100) DEFAULT NULL,
  `source` varchar(20) DEFAULT NULL,
  `storage_at` varchar(50) DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `blog_description` text CHARACTER SET utf8 COLLATE utf8_bin,
  `tbcid` int(11) NOT NULL,
  `blog_slug` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `thumb` varchar(100) DEFAULT 'default.png',
  `blog_attachment` varchar(200) NOT NULL,
  `blog_status` varchar(30) NOT NULL DEFAULT 'published',
  `create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `blog_title`, `blog_description`, `tbcid`, `blog_slug`, `view`, `thumb`, `blog_attachment`, `blog_status`, `create`, `update`) VALUES
(62, 'Test Blog 2', 'The next step is to decide, if you want to integrate Intervention Image into the <strong>Laravel framework</strong>. If you want to use the li.\r\n', 5, 'test-blgo-2', 21, '62-1563649563-235X180.jpg', '62-1563649563.jpeg', 'published', '2019-07-23 08:05:38', '2019-07-20 19:06:03'),
(63, 'Test BLog 32', '<p>dsfdsf</p>\r\n', 5, 'te', 8, '63-1563649799-235X180.jpg', '63-1563649799.jpeg', 'published', '2019-07-23 08:18:49', '2019-07-20 19:09:59'),
(65, 'Blog 7', '<p>sdfsdf</p>\r\n', 4, 'test', 11, '65-1563649884-235X180.jpg', '65-1563649884.jpeg', 'published', '2019-07-20 19:24:10', '2019-07-20 19:11:24'),
(66, 'Best of Luck Dear', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', 5, 'best-of-luck', 47, '66-1563651420-235X180.jpg', '66-1563651420.jpg', 'published', '2019-07-20 22:21:27', '2019-07-20 19:54:05'),
(67, 'Final Testing Blog ', '<p>Traffic Jam. Traffic jam is a common affair in big citites and towns. Now it has become one of the major problems in our country.</p>\r\n', 5, 'it-is-important-to-move-arround-the-world-as-soon-as-possible', 56, '67-1563650573-235X180.jpg', '67-1563650573.jpeg', 'published', '2019-07-23 08:18:47', '2019-07-20 19:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog_category`
--

CREATE TABLE `tbl_blog_category` (
  `tbcid` int(11) NOT NULL,
  `category_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog_category`
--

INSERT INTO `tbl_blog_category` (`tbcid`, `category_title`, `created_at`, `updated_at`) VALUES
(3, 'Recent News', NULL, '0000-00-00 00:00:00'),
(4, 'Important', NULL, '0000-00-00 00:00:00'),
(5, 'Ecommerce', '2019-03-12 15:16:05', '2019-03-12 15:16:05'),
(7, 'Cyber Crimes', '2019-03-12 15:16:55', '2019-03-12 15:18:10');

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
(23, 'About Us', '<h3>What is PHPDark</h3>\r\n\r\n<p><strong>PHPDark </strong>is a professional and fully helping website to give support to the PHP lovers. The concept of making this website was not so old. In this internet world, there are a lot of resources for learning and gathering knowledge. Most of them are not so professional and user friendly. In this point we have never compromised at all.</p>\r\n\r\n<p> </p>\r\n\r\n<h3>Features</h3>\r\n\r\n<p><strong>PHPdark</strong> always believes in user’s experience. For better quality we have tried to design our blog homepage with several section like nav, tutorial, and update section. Also there is a blog section from where a user can easily go to blog page and read full articles. The most important and helpful features of our website is project section. Here we have designed project page differently. Project page will help you to get help, get answer of your questions etc. You will also be able to download most common projects for totally free. For download we are going to use github  repository</p>\r\n\r\n<p> </p>\r\n\r\n<h3>Our Goal</h3>\r\n\r\n<p>Our goal is to give guidelines and support to the php developers and lovers also. We always try to give feedback to our visitors. For this reason, we have added facebook comment box in the post details page so that we can interact with the visitors as much as  possible early. In future our users will get proper guidelines of frameworks from this website also. For this, we will have to go a long way. We need your supports and help.</p>\r\n\r\n<p> </p>\r\n\r\n<h3>Development Background</h3>\r\n\r\n<p><strong>PHPdark</strong> is still under in beta version. We are noticing our user’s review and feedback. Hope that, you will contribute to this journey for making our website so much friendly.</p>\r\n\r\n<p>We have added a Tech Blog section for reading blog about technology such as present, past and upcoming. You can easily get ideas about several technologies by reading this technology. Most of the time we try to update blog everyday for better user’s experience. If you want to know about new technologies you can easily request us or also can suggest us to give details articles about that subject.</p>\r\n\r\n<p><strong>PHPdark</strong> is proudly developed by most trusted and used blogging platform, wordpress. Front-end design has done with the help of bootstrap.  You can easily share our website page to any social media such as facebook, twitter, instagram, linkedin, whatsapp by using “Share on Social Media” block situated in every page under post details.</p>\r\n\r\n<p><em>For knowing something new posts, blog see <strong>Latest Updates </strong>option in every page.</em></p>\r\n\r\n<p> </p>\r\n\r\n<h3>Contributors:</h3>\r\n\r\n<p>Developer: Ariful Islam</p>\r\n\r\n<p>Designer: Roudro Mehedi</p>\r\n', 13, 'about-us', '', 'published', '2019-07-03 13:18:29', '2019-07-03 13:18:29'),
(24, 'Privacy Policy', '<p><strong>PHPDark </strong>is a free and open source website, developed for giving supports to PHP lovers and developers. This website is totally free to use. There is no hidden cost for browsing our website. Your Internet Service Provider(ISP) or phone company may charge data for browsing.</p>\r\n\r\n<p>You can read our post, blog and other pages as much as you wish. Usually <strong>PHPDark </strong>deals with code. All php programs available in our website are unique and written by maintaining coding standard. You are free to use our website’s code in any place for personal use. But you are not allowed to use it for commercial purpose. You can use it commercially by giving proper credit to our website. We usually store our php programs in <strong>github </strong>as a <strong>zip</strong> file. You are free to download <strong>zip</strong> from <strong>github </strong>without any kind of inform to us.</p>\r\n\r\n<p>We never use your personal information for commercial use. We sometime want our user’s <strong>mobile no, address, email</strong> for giving better user experience. You are highly suggested not to share any phone, email or contact information publicly so that no one can harm you in cyber world .  We sometime use cookie to identify our user for giving service as usual.</p>\r\n\r\n<p>We never allow any kind of spam or link in our website. This is might illegal in internet world. We don’t take direct action against that user but we warn him not to do that again. If a user do so for three or more times then he/she will be blocked from our website for our protection.</p>\r\n\r\n<p>If we find any kind of continuous fraud request from a ip then it will be our mandatory duty to block that user for our server safety.</p>\r\n\r\n<p><strong>PHPDark </strong>is in initial stage and its still updating. For this reason, our user may find unknown error several times. Though its rate is not so high. We are sorry for that. You may find <strong>404 Error. </strong>This means that your requested page may be broken or deleted from the server.</p>\r\n\r\n<p>Our website time is maintain according to GMT+6. You may manage it according to your GMT.</p>\r\n\r\n<p>As our website is made based on giving guidelines and supports. So, different types of user visits our website having different choices and interests. If we find any kind of personal attacks, threats or hates against any user then it will be also our mandatory duty to warn him. All the users of our website are highly requested and suggested that, they should follow community rules, regulations and standard so that they can easily get their answer by other users. Because most of the time admin will not have capability to answer. At that time, this community will help them to talk with each other.</p>\r\n', 13, 'privacy-policy', '', 'published', '2019-07-03 13:20:51', '2019-07-03 13:20:51'),
(25, 'Faq', '<p>Frequently Ask Question(FAQ) is developed for giving answer of such kind of questions those are grown inside visitor’s mind. Look down for getting your answer</p>\r\n\r\n<p> </p>\r\n\r\n<h4>Is This Website is Free?</h4>\r\n\r\n<p>Ya, this website is completely free for using. There is no hidden charge or cost for browsing <strong>PHPLearningHub</strong>. But you may be charged by your ISP or phone company for using data service. It depends on you.</p>\r\n\r\n<p> </p>\r\n\r\n<h4>Will I get Basic Idea About PHP Here?</h4>\r\n\r\n<p>Off course, you will get all kinds of basic php post in our website. There is a section called php basic. From here you will get proper A-Z idea of php fundamental like data types, variable, function, array etc. After completing php basic it will be helpful for you to learn php advanced. In this way you will have to complete all step for staring journey with php project. We also have project section. Wait for getting answer regarding project.</p>\r\n\r\n<p> </p>\r\n\r\n<h4>Is This Website Better for OOP?</h4>\r\n\r\n<p>In our php oop section we have tried our best to give most common ideas regarding object oriented programming that means oop. Object oriented programming concept is the basis for starting journey with project. This makes a work so easy and also helps a coder to write code in sequential way.</p>\r\n\r\n<p> </p>\r\n\r\n<h4>Can I Share Website Content to Other?</h4>\r\n\r\n<p>Yes you can share our website contents, page or posts in anywhere of the internet. But if you want to copy our website’s content then you are not allowed. If you do so, then it is needed to give proper credit to our website. This is a good habit of surfing internet.</p>\r\n\r\n<p> </p>\r\n\r\n<h4>Can I Get Personal Help?</h4>\r\n\r\n<p>Yes you can get personal help from us. For getting personal help you can contact with as contact page. If you want to contact with us at facebook then you are suggested to inbox in our official page.</p>\r\n\r\n<p> </p>\r\n\r\n<h4>What I Will Do if I was Threaten  By Other User?</h4>\r\n\r\n<p>It is responsible to give you better judgement. If you face this type of situation inside our website then you are requested to inform us with proper prove such as screenshot, video, photo.  According to your submission we will take legal action.</p>\r\n\r\n<h4> </h4>\r\n\r\n<h4>Does Your Website Give Service For Payment?</h4>\r\n\r\n<p>This service is still in beta stage. We are making plan and team so that we can give our visitors supports for completing their project by project. The cost of this service will not be so high. You can contact with us for doing that.</p>\r\n', 13, 'faq', '', 'published', '2019-07-03 13:21:14', '2019-07-03 13:21:14'),
(26, 'Contact Us', '<p>dsfd</p>\r\n', 14, 'contact-us', '', 'published', '2019-06-24 22:24:46', '2019-06-24 22:24:46'),
(27, 'Terms and Policy', '<p>dsfd</p>\r\n', 13, 'terms-and-policy', '', 'published', '2019-07-03 14:07:27', '2019-06-25 00:12:28');

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
(13, 'Main', '2019-06-24 22:23:01', '2019-06-24 22:23:01'),
(14, 'Helper', '2019-06-24 22:23:05', '2019-06-24 22:23:05'),
(15, 'Optional', '2019-06-24 22:23:10', '2019-06-24 22:23:10');

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
  `thumb` varchar(100) DEFAULT NULL,
  `post_attachment` varchar(200) NOT NULL,
  `post_status` varchar(30) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `post_title`, `post_description`, `catid`, `post_slug`, `thumb`, `post_attachment`, `post_status`, `created`, `updated`) VALUES
(38, 'Laravel Introduction', '<p>laravel first post</p>', 19, 'laravel-introduction-5.8', NULL, '', 'published', '2019-07-03 13:37:49', '2019-07-03 13:45:06'),
(39, 'HTML First Post', '<p><strong>L</strong>orem ipsum dolor sit amet, consectetur adipisicing elit. Tempore repellat sed tenetur aspernatur ut ex rerum non eveniet. Officiis natus, quia necessitatibus, similique aliquid modi incidunt doloremque doloribus nobis blanditiis. Velit quasi assumenda minima amet delectus accusantium, recusandae, dicta libero accusamus, sed ad sequi veniam. Neque provident ea dolor! Sunt nisi praesentium libero sapiente blanditiis sint reiciendis ad illo, repudiandae repellat provident neque, non, sit corrupti vel culpa eveniet voluptates in sequi magni, iure dicta. Sapiente ex ea magni, earum porro quam impedit itaque illo quis suscipit, laborum sit eum at, omnis. Dignissimos deleniti alias, aperiam tempora ipsam tempore, saepe? <a href=\"http://localhost/phpdarkpvt/#\">Read more...</a></p>\r\n\r\n<p><strong>L</strong>orem ipsum dolor sit amet, consectetur adipisicing elit. Tempore repellat sed tenetur aspernatur ut ex rerum non eveniet. Officiis natus, quia necessitatibus, similique aliquid modi incidunt doloremque doloribus nobis blanditiis. Velit quasi assumenda minima amet delectus accusantium, recusandae, dicta libero accusamus, sed ad sequi veniam. Neque provident ea dolor! Sunt nisi praesentium libero sapiente blanditiis sint reiciendis ad illo, repudiandae repellat provident neque, non, sit corrupti vel culpa eveniet voluptates in sequi magni, iure dicta. Sapiente ex ea magni, earum porro quam impedit itaque illo quis suscipit, laborum sit eum at, omnis. Dignissimos deleniti alias, aperiam tempora ipsam tempore, saepe? <a href=\"http://localhost/phpdarkpvt/#\">Read more...</a></p>\r\n\r\n<hr>', 13, 'html-first-post', NULL, '', 'published', '2019-07-03 13:39:09', '2019-07-03 14:43:42'),
(40, 'Introduction to Codeigniter', '<p>We always try to give priority to our user&#39;s interest. So this section is designed specially to show most popular posts among the users. From here you can simply see which post is doing better. This will also help to find out our choices</p>\r\n\r\n<ul>\r\n <li>\r\n <p>We always try to give priority to our user&#39;s interest. So this section is designed specially to show most popular posts among the users. From here you can simply see which post is doing better. This will also help to find out our choices</p>\r\n </li>\r\n <li>\r\n <p>We always try to give priority to our user&#39;s interest. So this section is designed specially to show most popular posts among the users. From here you can simply see which post is doing better. This will also help to find out our choices</p>\r\n </li>\r\n <li> </li>\r\n <li>\r\n <p>We always try to give priority to our user&#39;s interest. So this section is designed specially to show most popular posts among the users. From here you can simply see which post is doing better. This will also help to find out our choices</p>\r\n </li>\r\n <li>\r\n <p>We always try to give priority to our user&#39;s interest. So this section is designed specially to show most popular posts among the users. From here you can simply see which post is doing better. This will also help to find out our choices</p>\r\n </li>\r\n</ul>\r\n', 20, 'introduction-to-codeigniter', NULL, '', 'published', '2019-07-03 13:45:45', '2019-07-03 13:45:45'),
(41, 'Introduction to PHP', '<p>introduction to php</p>\r\n', 15, 'introduction-to-php', NULL, '', 'published', '2019-07-03 13:48:46', '2019-07-03 13:48:46'),
(42, 'Advanced PHP Introduction', '<p>advanced php introduction</p>\r\n', 16, 'php-advanced-introduction', NULL, '', 'published', '2019-07-03 13:50:01', '2019-07-03 13:50:01'),
(43, 'Introduction to Jquery', 'introduction to jquery', 18, 'introduction-to-jquery', NULL, '', 'published', '2019-07-03 14:09:31', '2019-07-03 14:09:31'),
(44, 'Jquery Important Functions', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page <br><br>editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 18, 'jquery-important-functions', NULL, '', 'published', '2019-07-03 14:10:03', '2019-07-03 14:10:03'),
(46, 'Admin Controller Test', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and s <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and s<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and s</p>\r\n\r\n<pre>\r\n/*\r\n    !--------------------------------------------------------\r\n    !       Blog View @id\r\n    !--------------------------------------------------------\r\n    */\r\n    public function view_blog($slug,$id)\r\n    {\r\n        $data[&#39;title&#39;] = &#39;&#39;;\r\n        $data[&#39;blog&#39;] = $this->db\r\n            ->join(&#39;tbl_blog_category&#39;,&#39;tbl_blog_category.tbcid = tbl_blog.tbcid&#39;)\r\n            ->order_by(&#39;tbl_blog.blog_id&#39;,&#39;desc&#39;)\r\n            ->where(&#39;blog_id&#39;,$id)\r\n            ->get(&#39;tbl_blog&#39;)->result_object();\r\n\r\n        $category = &#39;&#39;;\r\n\r\n        if (count($data[&#39;blog&#39;]) > 0) {\r\n            $category = $data[&#39;blog&#39;][0]->tbcid;\r\n            $data[&#39;title&#39;] = ucfirst($data[&#39;blog&#39;][0]->blog_title);\r\n        }\r\n\r\n        $this->db->join(&#39;tbl_blog_category&#39;,&#39;tbl_blog_category.tbcid = tbl_blog.tbcid&#39;)->order_by(&#39;rand()&#39;);\r\n        $this->db->where([&#39;tbl_blog.tbcid&#39;=>$category]);\r\n        $this->db->where([&#39;tbl_blog.blog_id !=&#39;=>$id])->limit(4);\r\n        $data[&#39;related_blogs&#39;] = $this->db->get(&#39;tbl_blog&#39;)->result_object();\r\n\r\n        $this->load->view(&#39;front/lib/header&#39;,$data);\r\n        $this->load->view(&#39;front/blog_details&#39;);\r\n        $this->load->view(&#39;front/lib/footer&#39;);\r\n    }</pre>\r\n\r\n<p>The basic and advance dle content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<pre>\r\n /*\r\n    !--------------------------------------------------------\r\n    !       Blog View @id\r\n    !--------------------------------------------------------\r\n    */\r\n    public function blog($page_id = 1)\r\n    {\r\n         $data[&#39;title&#39;] = &#39;Blog&#39;;\r\n\r\n        $row  = $this->db->get(&#39;tbl_blog&#39;)->num_rows();\r\n        $perpage = PER_PAGE;\r\n        $offset = ($page_id-1) * $perpage;\r\n        $previous_page      = $page_id - 1;\r\n        $next_page          = $page_id + 1;\r\n        $total_no_of_pages  = ceil($row / $perpage);\r\n        $this->db->select(\"*\");\r\n        $this->db->join(&#39;tbl_blog_category&#39;,&#39;tbl_blog_category.tbcid=tbl_blog.tbcid&#39;);\r\n        $this->db->order_by(&#39;tbl_blog.create&#39;,&#39;desc&#39;);\r\n        $this->db->limit($perpage,$offset);\r\n        $query          = $this->db->get(&#39;tbl_blog&#39;);\r\n        if ($query->num_rows() > 0) {\r\n\r\n            $data[&#39;blogs&#39;]  = $query->result(); \r\n            $data[&#39;row&#39;]    = $row;\r\n            $data[&#39;page&#39;]   = $page_id;\r\n            $data[&#39;pages&#39;]  = (int)$total_no_of_pages;\r\n            $data[&#39;previous_page&#39;]  = $previous_page;\r\n            $data[&#39;next_page&#39;]      = $next_page;\r\n           \r\n            $this->load->view(&#39;front/lib/header&#39;,$data);\r\n            $this->load->view(&#39;front/blog&#39;);\r\n            $this->load->view(&#39;front/lib/footer&#39;);\r\n        }else{\r\n            redirect(&#39;/&#39;,&#39;refresh&#39;);\r\n        }\r\n    }\r\n</pre>', 15, 'admincontroller-basic', NULL, '', 'published', '2019-07-06 23:43:35', '2019-07-10 22:59:14'),
(47, 'Object Oriented Programming Introduction', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n', 17, 'oop-oriented-programming-introduction', NULL, '', 'published', '2019-07-10 22:49:23', '2019-07-10 22:49:23'),
(48, 'CSS Introduction', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 14, 'css-introduction-', NULL, '', 'published', '2019-07-10 22:51:40', '2019-07-10 22:51:40'),
(49, 'Javascript Introduction', '<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>\r\n\r\n<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>\r\n\r\n<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>\r\n\r\n<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>\r\n\r\n<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>\r\n\r\n<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>\r\n\r\n<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>\r\n\r\n<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>\r\n\r\n<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>\r\n\r\n<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>\r\n\r\n<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>\r\n\r\n<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>\r\n\r\n<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>\r\n', 21, 'javascript-introduction', NULL, '', 'published', '2019-07-10 22:53:41', '2019-07-10 22:53:41'),
(50, 'Strlen Function in PHP', '<p>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>\r\n\r\n<p>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>\r\n\r\n<p>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>\r\n\r\n<p>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>', 15, 'php-strlen-function', NULL, '', 'published', '2019-07-10 23:10:23', '2019-07-20 17:06:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_category`
--

CREATE TABLE `tbl_post_category` (
  `catid` int(11) NOT NULL,
  `category_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `category_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post_category`
--

INSERT INTO `tbl_post_category` (`catid`, `category_title`, `category_order`, `created_at`, `updated_at`) VALUES
(13, 'HTML', 1, '2019-07-03 13:31:37', '0000-00-00 00:00:00'),
(14, 'CSS3', 2, '2019-07-03 13:31:42', '0000-00-00 00:00:00'),
(15, 'PHP Basic', 3, '2019-07-03 13:31:46', '2019-07-03 13:31:52'),
(16, 'PHP Advanced', 4, '2019-07-03 13:31:58', '0000-00-00 00:00:00'),
(17, 'PHP OOP', 6, '2019-07-03 13:32:18', '0000-00-00 00:00:00'),
(18, 'Jquery', 5, '2019-07-03 13:32:26', '0000-00-00 00:00:00'),
(19, 'Laravel', 7, '2019-07-03 13:32:30', '0000-00-00 00:00:00'),
(20, 'Codeigniter', 8, '2019-07-03 13:32:38', '0000-00-00 00:00:00'),
(21, 'Javascript', 4, '2019-07-10 22:52:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_tag`
--

CREATE TABLE `tbl_post_tag` (
  `tptid` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `tagid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site`
--

CREATE TABLE `tbl_site` (
  `id` int(11) NOT NULL,
  `site_title` varchar(100) DEFAULT NULL,
  `site_meta` varchar(200) DEFAULT NULL,
  `site_tag` varchar(200) DEFAULT NULL,
  `site_contact` varchar(100) DEFAULT NULL,
  `site_address` varchar(100) DEFAULT NULL,
  `site_data_create` date DEFAULT NULL,
  `site_data_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_site`
--

INSERT INTO `tbl_site` (`id`, `site_title`, `site_meta`, `site_tag`, `site_contact`, `site_address`, `site_data_create`, `site_data_update`) VALUES
(1, 'PHPDark- Your Ultimate PHP Guid', '<p>sdfds</p>\r\n', 'php, learning, something, ab', '01750-84021', 'Savar, Dhaka, Banglades', '2019-02-06', '2019-02-19');

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
(1, 'Blog'),
(3, 'Javas'),
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

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_introduction` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `highlighter` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `site_name`, `title`, `short_introduction`, `meta_description`, `logo`, `highlighter`, `email`, `mobile`, `address`, `facebook`, `youtube`, `github`, `version`, `created_at`, `updated_at`) VALUES
(1, 'PHPDark.com', 'PHPDark.com – Your Ultimate PHP Guide', 'PHPDark.com is a platform for giving facility of learning resources of programming language mainly PHP and it\'s cooperative frameworks such as Laravel, Codeigniter, Yii2, Symphony etc. Others are also available in phpdark for supplying easy guidance', 'PHPDark is a php related tutorial site where basic, advanced, oop can be learned. PHPDark provides project related support and guidelines.PHPDark is a php related tutorial site where basic, advanced, oop can be learned. PHPDark provides project related support and guidelines.', 'logo.png', 'ocean', 'arif98741@gmail.com', '01750840217', 'Dhaka, Bangladesh', 'https://facebook.com/arifulislammmc007', '', 'https://github.com/arif98741', NULL, '2019-06-30 18:00:00', '2019-07-10 18:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_id` (`album_id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `tbcid` (`tbcid`);

--
-- Indexes for table `tbl_blog_category`
--
ALTER TABLE `tbl_blog_category`
  ADD PRIMARY KEY (`tbcid`);

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
-- Indexes for table `tbl_site`
--
ALTER TABLE `tbl_site`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tbl_blog_category`
--
ALTER TABLE `tbl_blog_category`
  MODIFY `tbcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_page_category`
--
ALTER TABLE `tbl_page_category`
  MODIFY `tpcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_post_category`
--
ALTER TABLE `tbl_post_category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_post_tag`
--
ALTER TABLE `tbl_post_tag`
  MODIFY `tptid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_site`
--
ALTER TABLE `tbl_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD CONSTRAINT `tbl_blog_ibfk_1` FOREIGN KEY (`tbcid`) REFERENCES `tbl_blog_category` (`tbcid`) ON DELETE CASCADE;

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
