-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2018 at 05:51 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umtsocial`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `c_id` int(11) NOT NULL,
  `user1_email` varchar(50) NOT NULL,
  `user2_email` varchar(50) NOT NULL,
  `user_name1` varchar(30) NOT NULL,
  `user_name2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`c_id`, `user1_email`, `user2_email`, `user_name1`, `user_name2`) VALUES
(1, 'haseeb@gmail.com', 'ahmad@gmail.com', 'HaseebQamar', 'AhmadJamal'),
(2, 'haseeb@gmail.com', 'jalal@gmail.com', 'HaseebQamar', 'JalalKhan'),
(24, 'jalal@gmail.com', 'ahmad@gmail.com', 'JalalKhan', 'AhmadJamal'),
(25, 'fakhar@gmail.com', 'haseeb@gmail.com', 'FakharAbbas', 'HaseebQamar');

-- --------------------------------------------------------

--
-- Table structure for table `chat_details`
--

CREATE TABLE `chat_details` (
  `chatid` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `sender_email` varchar(50) NOT NULL,
  `sender_name` varchar(30) NOT NULL,
  `content` varchar(200) NOT NULL,
  `sent_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_details`
--

INSERT INTO `chat_details` (`chatid`, `c_id`, `sender_email`, `sender_name`, `content`, `sent_time`) VALUES
(62, 2, 'haseeb@gmail.com', 'HaseebQamar', 'Dummy Entry', '02:50:08'),
(63, 1, 'haseeb@gmail.com', 'HaseebQamar', 'Dummy ENtry', '02:50:18'),
(64, 1, 'ahmad@gmail.com', 'AhmadJamal', 'I am stupid', '03:42:59'),
(65, 1, 'ahmad@gmail.com', 'AhmadJamal', 'Hello boy.', '13:35:48'),
(66, 1, 'ahmad@gmail.com', 'AhmadJamal', 'Hello boy.', '13:36:01'),
(67, 1, 'ahmad@gmail.com', 'AhmadJamal', 'Take my words for it.', '13:36:08'),
(68, 1, 'ahmad@gmail.com', 'AhmadJamal', 'Hi.', '13:36:57'),
(69, 1, 'ahmad@gmail.com', 'AhmadJamal', 'Bitch.', '13:37:00'),
(70, 1, 'ahmad@gmail.com', 'AhmadJamal', 'I am bitch.', '13:37:33'),
(71, 1, 'ahmad@gmail.com', 'AhmadJamal', 'I am bitch.', '13:37:38'),
(72, 1, 'ahmad@gmail.com', 'AhmadJamal', 'I am bitch.', '13:37:43'),
(73, 1, 'haseeb@gmail.com', 'HaseebQamar', 'shut up', '13:37:55'),
(74, 1, 'ahmad@gmail.com', 'AhmadJamal', 'You shut up', '13:38:04'),
(75, 1, 'haseeb@gmail.com', 'HaseebQamar', 'shut the fuck up', '13:38:09'),
(76, 1, 'haseeb@gmail.com', 'HaseebQamar', 'bitch', '13:38:58'),
(77, 1, 'ahmad@gmail.com', 'AhmadJamal', 'For fucks sake.', '13:39:06'),
(78, 1, 'ahmad@gmail.com', 'AhmadJamal', 'shit', '13:40:19'),
(79, 1, 'ahmad@gmail.com', 'AhmadJamal', 'shit', '13:40:27'),
(80, 1, 'ahmad@gmail.com', 'AhmadJamal', 'fuck', '13:40:33'),
(81, 1, 'ahmad@gmail.com', 'AhmadJamal', 'haskdakjshdk', '13:40:41'),
(82, 1, 'ahmad@gmail.com', 'AhmadJamal', 'hl;fkhm;kfdljhx;lf', '13:40:45'),
(83, 1, 'ahmad@gmail.com', 'AhmadJamal', 'hello', '13:41:37'),
(84, 1, 'ahmad@gmail.com', 'AhmadJamal', 'hi', '13:41:41'),
(85, 1, 'haseeb@gmail.com', 'HaseebQamar', 'bitch', '13:41:48'),
(86, 1, 'haseeb@gmail.com', 'HaseebQamar', 'shitface', '13:41:55'),
(87, 1, 'ahmad@gmail.com', 'AhmadJamal', '55', '13:41:58'),
(88, 1, 'ahmad@gmail.com', 'AhmadJamal', '66', '13:42:22'),
(89, 1, 'ahmad@gmail.com', 'AhmadJamal', 'ajgshdhjagdhgajshdjhagsdhgajghdjhgasdajghsdhgsdhahgsdhashdjahgsdjhajghdjhagdhgashgdjasgdhgjahsdjagdgajshdhgasdgjagsdj', '13:43:19'),
(90, 2, 'jalal@gmail.com', 'JalalKhan', 'shit', '13:47:01'),
(91, 2, 'haseeb@gmail.com', 'HaseebQamar', 'bitch', '13:47:12'),
(92, 1, 'ahmad@gmail.com', 'AhmadJamal', 'Testing', '14:50:58'),
(93, 1, 'ahmad@gmail.com', 'AhmadJamal', 'Dude', '15:59:47'),
(94, 1, 'ahmad@gmail.com', 'AhmadJamal', 'i am stupid', '16:53:34'),
(95, 2, 'jalal@gmail.com', 'JalalKhan', 'kamina', '17:45:57'),
(96, 1, 'ahmad@gmail.com', 'AhmadJamal', 'fuck this shit', '22:04:58'),
(111, 24, 'ahmad@gmail.com', 'Admin', 'Chat Started', '00:11:55'),
(112, 24, 'ahmad@gmail.com', 'AhmadJamal', 'i am jamal', '00:12:18'),
(113, 24, 'jalal@gmail.com', 'JalalKhan', 'i am jalal', '00:12:30'),
(114, 25, 'haseeb@gmail.com', 'Admin', 'Chat Started', '16:32:18'),
(115, 25, 'haseeb@gmail.com', 'HaseebQamar', 'i hate you', '16:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `convos`
--

CREATE TABLE `convos` (
  `convo_id` int(11) NOT NULL,
  `user1` varchar(50) NOT NULL,
  `user2` varchar(50) NOT NULL,
  `name1` varchar(50) NOT NULL,
  `name2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `convos`
--

INSERT INTO `convos` (`convo_id`, `user1`, `user2`, `name1`, `name2`) VALUES
(2, 'haseeb@gmail.com', 'ahmad@gmail.com', 'HaseebQamar', 'AhmadJamal');

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `timestamp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

CREATE TABLE `servers` (
  `server_id` int(11) NOT NULL,
  `server_name` varchar(50) NOT NULL,
  `server_desc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servers`
--

INSERT INTO `servers` (`server_id`, `server_name`, `server_desc`) VALUES
(1, 'Dhushie', NULL),
(2, 'Pushie', NULL),
(3, 'pubg', 'paid app');

-- --------------------------------------------------------

--
-- Table structure for table `server_chats`
--

CREATE TABLE `server_chats` (
  `sid` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `content` varchar(200) NOT NULL,
  `user_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `server_chats`
--

INSERT INTO `server_chats` (`sid`, `user_email`, `content`, `user_name`) VALUES
(1, 'ahmad@gmail.com', 'sickhead', 'AhmadJamal');

-- --------------------------------------------------------

--
-- Table structure for table `server_members`
--

CREATE TABLE `server_members` (
  `s_members_id` int(11) NOT NULL,
  `server_id` int(50) NOT NULL,
  `server_name` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `server_members`
--

INSERT INTO `server_members` (`s_members_id`, `server_id`, `server_name`, `user_id`) VALUES
(1, 1, 'Dhushie', 'haseeb@gmail.com'),
(3, 1, 'Dhushie', 'ahmad@gmail.com'),
(4, 1, 'Dhushie', 'jalal@gmail.com'),
(5, 2, 'Pushie', 'ahmad@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `avatar` varchar(100) NOT NULL DEFAULT '0',
  `status` int(12) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `email`, `password`, `avatar`, `status`) VALUES
(12, 'HaseebQamar', 'haseeb@gmail.com', 'haseeb', '0', 0),
(13, 'AhmadJamal', 'ahmad@gmail.com', 'ahmad', '0', 0),
(14, 'JalalKhan', 'jalal@gmail.com', 'jalal', '0', 1),
(15, 'MuhammadUsman', 'usman@gmail.com', 'usman', '0', 0),
(16, 'AsadSaleem', 'asad@gmail.com', 'asad', '0', 0),
(17, 'FakharAbbas', 'fakhar@gmail.com', 'fakhar', '0', 0),
(18, 'WajahatHussain', 'wajahat@gmail.com', 'wajahat', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `chat_details`
--
ALTER TABLE `chat_details`
  ADD PRIMARY KEY (`chatid`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `convos`
--
ALTER TABLE `convos`
  ADD PRIMARY KEY (`convo_id`);

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`server_id`),
  ADD KEY `server_id` (`server_id`);

--
-- Indexes for table `server_chats`
--
ALTER TABLE `server_chats`
  ADD KEY `sid` (`sid`),
  ADD KEY `user_email` (`user_email`);

--
-- Indexes for table `server_members`
--
ALTER TABLE `server_members`
  ADD PRIMARY KEY (`s_members_id`),
  ADD KEY `server_id` (`server_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `chat_details`
--
ALTER TABLE `chat_details`
  MODIFY `chatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `convos`
--
ALTER TABLE `convos`
  MODIFY `convo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `online`
--
ALTER TABLE `online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `servers`
--
ALTER TABLE `servers`
  MODIFY `server_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `server_members`
--
ALTER TABLE `server_members`
  MODIFY `s_members_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat_details`
--
ALTER TABLE `chat_details`
  ADD CONSTRAINT `chat_details_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `chat` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `server_chats`
--
ALTER TABLE `server_chats`
  ADD CONSTRAINT `server_chats_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `servers` (`server_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `server_chats_ibfk_2` FOREIGN KEY (`user_email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `server_members`
--
ALTER TABLE `server_members`
  ADD CONSTRAINT `server_members_ibfk_1` FOREIGN KEY (`server_id`) REFERENCES `servers` (`server_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `server_members_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
