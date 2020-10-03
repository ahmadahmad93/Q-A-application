-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 09:06 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assist`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `pwd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `q_id`, `usr_id`, `answer`, `time`) VALUES
(1, 1, 1, 'asldnalsndasd', '2018-03-18 00:02:00'),
(2, 1, 1, 'ads', '2018-03-19 19:11:59'),
(3, 1, 1, 'ads', '2018-03-19 19:12:14'),
(4, 1, 1, 'sdfsdf', '2018-03-19 19:12:53'),
(5, 1, 3, 'sdfghjkl', '2018-03-29 14:49:07');

-- --------------------------------------------------------

--
-- Table structure for table `articals`
--

CREATE TABLE `articals` (
  `id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `img` text NOT NULL,
  `details` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articals`
--

INSERT INTO `articals` (`id`, `usr_id`, `title`, `img`, `details`, `time`) VALUES
(1, 0, 'ØªØ¬Ø±Ø¨Ø©', '28741543_1685912504806936_161589647_n.png', 'ØªØ³Ø¬ÙŠÙ„ Ø§Ù„Ù…ÙˆØ§Ø¯ Ø¶Ù…Ù† Ø§Ù„Ø¬Ø§Ù…Ø¹Ø© Ø§Ù„Ø§ÙØªØ±Ø§Ø¶ÙŠØ© - Ù…Ù‚Ø§Ù„ ØªØ¬Ø±Ø¨ÙŠ', '2018-05-01 22:43:24');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `a_id`, `usr_id`, `comment`, `time`) VALUES
(1, 1, 1, 'sdfghjkl;asdkasd asdkasdaosdasldbasdas dasdasd\r\ndsfslfkdsdlfaslflasbkasfjas', '2018-03-18 09:59:26'),
(2, 1, 1, 'Ø´Ø³ÙŠ', '2018-03-19 20:21:01'),
(3, 1, 1, 'Ø´Ø³ÙŠ', '2018-03-19 20:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `msgs`
--

CREATE TABLE `msgs` (
  `id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `reciver` int(11) NOT NULL,
  `subject` text NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `cat` text NOT NULL,
  `details` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `usr_id`, `title`, `cat`, `details`, `time`) VALUES
(1, 1, 'alskdn', 'Ø¨Ø±Ù…Ø¬Ø© ØªØ·Ø¨ÙŠÙ‚Ø§Øª Ø§Ù„ÙˆÙŠØ¨', 'Ø´Ø³ÙŠ', '2018-03-17 23:29:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `mail` text NOT NULL,
  `pwd` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `mail`, `pwd`, `time`) VALUES
(1, 'aff@nnn.vim', '*123456789*', '2018-03-24 22:40:54'),
(2, 'a@a', '*123456789*', '2018-03-29 14:46:09'),
(3, 'a@a.com', '123', '2018-03-29 14:46:36');

-- --------------------------------------------------------

--
-- Table structure for table `users_personal`
--

CREATE TABLE `users_personal` (
  `id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `website` text NOT NULL,
  `address` text NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_personal`
--

INSERT INTO `users_personal` (`id`, `reg_id`, `name`, `img`, `website`, `address`, `about`) VALUES
(2, 1, 'Ø´Ø³ÙŠ', 'Image 007.png', 'http://www.coasd.asd', 'asdasdasdaksdaksdbkasbdjbasd asdasdklasdl kasd asd;alsdjasd', ''),
(3, 3, 'rawad', 'f027278c-4f76-4f72-a4b9-19da63e38deb.jpg', 'http://googl.com', 'syria - tartous', 'love to program');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articals`
--
ALTER TABLE `articals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msgs`
--
ALTER TABLE `msgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_personal`
--
ALTER TABLE `users_personal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_id` (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `articals`
--
ALTER TABLE `articals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `msgs`
--
ALTER TABLE `msgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_personal`
--
ALTER TABLE `users_personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
