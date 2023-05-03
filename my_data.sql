-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2023 at 10:59 AM
-- Server version: 5.6.38
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `connected`
--

CREATE TABLE `connected` (
  `id` int(11) NOT NULL,
  `requester` int(15) NOT NULL,
  `accepter` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `connected`
--

INSERT INTO `connected` (`id`, `requester`, `accepter`) VALUES
(167, 70, 73),
(166, 70, 72),
(165, 75, 72),
(164, 72, 66),
(163, 73, 75),
(162, 72, 73);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `msg_sender` int(50) NOT NULL,
  `msg_reciver` int(50) NOT NULL,
  `text_message` varchar(300) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `msg_sender`, `msg_reciver`, `text_message`, `status`) VALUES
(64, 72, 73, 'Hi', ''),
(65, 73, 70, 'Hii Sumi Im Siya', ''),
(63, 72, 70, 'Hi Sumi', ''),
(62, 75, 73, 'Okay thanks ', ''),
(61, 72, 73, 'You know Juliee is a best programmer ', ''),
(60, 73, 72, 'I am Siya', ''),
(59, 73, 72, 'I am Siya', ''),
(58, 73, 75, 'Hi Sweta', ''),
(57, 73, 72, 'Im talking with you ', ''),
(56, 72, 73, 'Hey Siya What are you doing ', ''),
(55, 72, 73, 'Hello Siya ', ''),
(54, 72, 73, 'Hi Smita', ''),
(53, 73, 72, 'Hi Smita Smith ', ''),
(52, 74, 72, 'Hii Smita ', ''),
(51, 73, 74, 'Hii Alina', ''),
(50, 75, 73, 'Hello ', ''),
(66, 72, 73, 'Awesome ', ''),
(67, 72, 73, '', ''),
(68, 72, 73, '', ''),
(69, 72, 73, '', ''),
(70, 72, 73, 'Wow', ''),
(71, 72, 73, 'Nice ', ''),
(72, 72, 73, 'Okay ', ''),
(73, 72, 73, 'Super ', ''),
(74, 72, 73, 'Never ', ''),
(75, 72, 73, 'Okay ', ''),
(76, 72, 73, 'Hmmm', ''),
(77, 72, 73, 'Hiii', ''),
(78, 72, 73, 'Nice ', ''),
(79, 72, 73, 'Ok ', ''),
(80, 72, 73, 'Something else ', ''),
(81, 72, 66, 'Something else to eat timely manner of ', ''),
(82, 72, 73, 'See you ', ''),
(83, 72, 73, 'Over the ', ''),
(84, 72, 73, 'Overflow Facebook ', ''),
(85, 72, 73, 'Never ', ''),
(86, 72, 73, 'Awesome ', ''),
(87, 72, 73, 'Nice', ''),
(88, 72, 70, 'Okay ', ''),
(89, 72, 73, 'Okay ', ''),
(90, 72, 73, 'Super ', ''),
(91, 72, 73, 'The name of the world when', ''),
(92, 72, 73, '9k', ''),
(93, 72, 73, 'Something else ', ''),
(94, 72, 73, 'Hii', ''),
(95, 72, 73, 'Okay bro I just got home from', ''),
(96, 72, 73, 'Ghs Julian', ''),
(97, 72, 66, 'Hiii', ''),
(98, 72, 73, 'Hii', ''),
(99, 72, 73, 'Hello sir ', ''),
(100, 72, 73, 'Hii', ''),
(101, 72, 73, 'Good morning', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `poster_id` int(15) NOT NULL,
  `post_content` varchar(500) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `count` int(200) NOT NULL,
  `love` int(200) NOT NULL,
  `comment` int(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `poster_id`, `post_content`, `post_time`, `count`, `love`, `comment`) VALUES
(58, 72, 'hi i am smita smith', '2023-03-31 04:19:13', 30, 8, 13),
(59, 72, 'hii im am juliee', '2023-04-02 06:06:33', 26, 4, 4),
(57, 73, 'how are you feeling today is our worship festival of hinduism and buddhism and hinduism and buddhism and hinduism and buddhism', '2023-03-31 03:39:44', 29, 8, 3),
(62, 72, 'something is happening', '2023-03-31 04:50:27', 2, 0, 5),
(61, 75, 'hi everyone i am sweta sharma', '2023-03-31 04:50:25', 5, 0, 19),
(60, 71, 'hi i am taniya smith', '2023-03-31 03:39:29', 9, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `reaction`
--

CREATE TABLE `reaction` (
  `id` int(11) NOT NULL,
  `post_id` int(10) NOT NULL,
  `liker` int(10) NOT NULL,
  `lover` int(10) NOT NULL,
  `commenter` int(10) NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reaction`
--

INSERT INTO `reaction` (`id`, `post_id`, `liker`, `lover`, `commenter`, `comment`) VALUES
(1162, 58, 0, 0, 75, 'Nice '),
(1161, 61, 75, 0, 0, ''),
(1160, 61, 0, 0, 75, 'Nice'),
(1159, 61, 0, 0, 75, 'Nice'),
(1158, 61, 0, 0, 75, 'Nice Website'),
(1157, 61, 0, 0, 75, 'Nice Website'),
(1156, 61, 0, 0, 75, 'Nice Website'),
(1155, 61, 0, 0, 75, 'Nice Website'),
(1154, 61, 0, 0, 75, 'Nice Website'),
(1152, 61, 0, 0, 75, 'Nice Website'),
(1153, 61, 0, 0, 75, 'Nice Website'),
(1151, 61, 0, 0, 75, 'Nice Website'),
(1150, 61, 0, 0, 75, 'Nice Website'),
(1149, 61, 0, 0, 75, 'Nice Website'),
(1148, 61, 0, 0, 75, 'Nice Website'),
(1147, 61, 0, 0, 75, 'Nice Website'),
(1146, 61, 0, 0, 75, 'Nice Website'),
(1145, 61, 0, 0, 75, 'Nice Website'),
(1144, 61, 0, 0, 75, 'Nice Website'),
(1143, 61, 0, 0, 75, 'Nice Website '),
(1142, 61, 0, 0, 75, 'Nice Website '),
(1141, 58, 0, 0, 75, 'Wow'),
(1183, 60, 0, 0, 72, 'Wow nice'),
(1175, 57, 0, 0, 72, 'Sojib'),
(1135, 57, 0, 0, 73, 'Super Website'),
(1193, 58, 72, 0, 0, ''),
(1136, 58, 75, 0, 0, ''),
(1119, 58, 0, 0, 74, 'Awesome Website Super '),
(1118, 56, 74, 0, 0, ''),
(1117, 57, 74, 0, 0, ''),
(1116, 58, 0, 0, 74, 'Yy4r5'),
(1115, 58, 74, 0, 0, ''),
(1114, 60, 0, 0, 70, 'Nice '),
(1113, 60, 0, 0, 70, 'Awesome '),
(1112, 60, 70, 0, 0, ''),
(1111, 60, 0, 0, 70, 'Something '),
(1110, 57, 0, 0, 70, 'Nice Web Developer '),
(1109, 58, 0, 0, 70, 'Super!'),
(1108, 59, 70, 0, 0, ''),
(1107, 58, 70, 0, 0, ''),
(1100, 58, 0, 0, 70, 'Wow thats awesome '),
(1099, 58, 0, 0, 75, 'Hello '),
(1163, 58, 0, 0, 75, 'Nice '),
(1164, 58, 0, 0, 75, 'Nice '),
(1165, 59, 0, 0, 75, 'Ok'),
(1166, 58, 0, 0, 75, 'Hmm'),
(1167, 58, 0, 0, 75, 'Not '),
(1168, 58, 0, 0, 75, 'Oh'),
(1169, 57, 75, 0, 0, ''),
(1192, 60, 72, 0, 0, ''),
(1184, 58, 0, 0, 72, 'Nice '),
(1191, 61, 72, 0, 0, ''),
(1190, 62, 72, 0, 0, ''),
(1194, 59, 72, 0, 0, ''),
(1195, 57, 72, 0, 0, ''),
(1196, 62, 0, 0, 72, 'Okay '),
(1197, 62, 0, 0, 72, 'Nice '),
(1201, 59, 0, 0, 72, 'Hiii '),
(1200, 62, 73, 0, 0, ''),
(1202, 59, 0, 0, 72, 'Cy[==⁵yh<])');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `sender_id` int(50) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `sender_image` varchar(50) NOT NULL,
  `reciver_id` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `sender_id`, `sender_name`, `sender_image`, `reciver_id`) VALUES
(347, 74, 'Alina Lopez ', 'Alina Lopez1904976782.jpeg', 68),
(350, 74, 'Alina Lopez ', 'Alina Lopez1904976782.jpeg', 76);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_image` varchar(50) NOT NULL,
  `user_profession` varchar(50) NOT NULL,
  `user_country` varchar(50) NOT NULL,
  `user_city` varchar(50) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_birth` varchar(50) NOT NULL,
  `user_school` varchar(50) NOT NULL,
  `user_status` varchar(50) NOT NULL,
  `user_role` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_image`, `user_profession`, `user_country`, `user_city`, `user_gender`, `user_birth`, `user_school`, `user_status`, `user_role`) VALUES
(71, 'Taniya Smith ', 'taniya@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Taniya Smith482151770.jpg', '', '', '', '', '', '', '', ''),
(66, 'Admin', 'admin@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Admin480655190.png', 'Web Developer', 'America', 'Washington DC', '', '', 'National University', 'admin', ''),
(70, 'Sumi Sharma', 'sumi@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Sumi Sharma897814456.jpg', 'Content Writer', 'India', 'New Delhi', '', '', 'Rajasthan Patrika', 'Offline', ''),
(74, 'Alina Lopez ', 'alina@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Alina Lopez1904976782.jpeg', 'SEO Experts', 'United Kingdom', 'London, England', '', '', 'UK National University', '', ''),
(73, 'Siya Rai', 'siya@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Siya Rai1306182709.jpg', 'Student Life', 'Nepal', 'Bhojpur City', '', '', 'Nepali University', 'Online', ''),
(72, 'Smita Smith ', 'smita@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Smita Smith1645625917.jpg', 'English Teacher', 'United States', 'New York', '', '', 'Hovard High School', 'Online', 'Admin'),
(77, 'Shilpi Yadav ', 'shilpi@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '', '', '', '', '', 'Offline', ''),
(68, 'Ratan Singh', 'ratan@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Ratan544230197.jpg', 'Graphics Designer', 'United States', 'New York', '', '', 'Washington Govt College', '', ''),
(69, 'Devid DM', 'devid@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Devid DM53773089.jpg', 'Front-End Developer', 'Japan', 'Japan City', '', '', 'Govt College', '', ''),
(75, 'Sweta Sharma ', 'sweta@gmail.com', '123456', 'Sweta Sharma1527173038.jpeg', 'Ebook Writer', 'India', 'Rajasthan Patrika', '', '', 'National University', 'Offline', ''),
(76, 'Priya Sharma', 'priya@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Priya Sharma1737574355.jpeg', 'Software Developer', 'India', 'New York', '', '', 'New York University', '', ''),
(78, 'This Test', 'test@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '', '', '', '', '', '', ''),
(79, 'Nipa Sharma', 'nipa@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '', '', '', '', '', '', ''),
(80, 'Krishna Das ', 'krishna@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '', '', '', '', '', '', ''),
(81, 'Suniya Sharma ', 'sunita@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '', '', '', '', '', '', ''),
(82, 'Sunita Sharma ', 'sunitaa@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '', '', '', '', '', '', ''),
(83, 'Sunny ', 'sunny@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '', '', '', '', '', '', ''),
(84, 'Amita Sharma ', 'amita@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '', '', '', '', '', 'Offline', ''),
(85, 'Dipali Singh', 'dipali@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '', '', '', '', '', 'Offline', ''),
(86, 'Swati Sharma', 'swati@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '', '', '', '', '', 'Offline', ''),
(87, 'Joti Singh', 'joti@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '', '', '', '', '', 'Offline', ''),
(88, 'Rimonto Bharduaj', 'rimonto@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '', '', '', '', '', 'Offline', ''),
(89, 'Sonu Bharduaj ', 'sonu@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '', '', '', '', '', 'Offline', ''),
(90, 'Samiya', 'samiya@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '', '', '', '', '', 'Offline', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `connected`
--
ALTER TABLE `connected`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `reaction`
--
ALTER TABLE `reaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `connected`
--
ALTER TABLE `connected`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `reaction`
--
ALTER TABLE `reaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1203;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=358;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
