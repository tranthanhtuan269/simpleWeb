-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2015 at 07:54 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tuhoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

CREATE TABLE IF NOT EXISTS `advisor` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `dateCreated` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `lastUpdate` timestamp NULL DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `ipAddress` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(4) DEFAULT '0',
  `lastLogin` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `answerquestion`
--

CREATE TABLE IF NOT EXISTS `answerquestion` (
  `id` int(11) NOT NULL,
  `questionId` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `type` smallint(6) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `lastUpdate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `createdBy` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `receiverId` int(11) NOT NULL,
  `parentId` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

CREATE TABLE IF NOT EXISTS `moderator` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `createdDate` datetime DEFAULT NULL,
  `createdBy` int(11) NOT NULL,
  `lastUpdate` timestamp NULL DEFAULT NULL,
  `ipAddress` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Active` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL,
  `dateCreated` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `subjectId` int(11) DEFAULT NULL,
  `active` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `dateCreated` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `lastUpdate` timestamp NULL DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `ipAdress` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(4) DEFAULT '0',
  `lastLogin` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studentviewanswer`
--

CREATE TABLE IF NOT EXISTS `studentviewanswer` (
  `student_id` int(11) NOT NULL,
  `answerQuestionId` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `like` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studentviewquestion`
--

CREATE TABLE IF NOT EXISTS `studentviewquestion` (
  `questionId` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `view` int(11) DEFAULT '0',
  `like` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` tinyint(4) DEFAULT '0',
  `date_of_birth` datetime DEFAULT NULL,
  `phoneN1` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phoneN2` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateCreated` datetime NOT NULL,
  `lastUpdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `address`, `gender`, `date_of_birth`, `phoneN1`, `phoneN2`, `image`, `roles`, `dateCreated`, `lastUpdate`) VALUES
(1, 'tuantt', 'tuantt', '', NULL, 0, NULL, NULL, NULL, NULL, 'admin', '2015-12-15 10:29:39', '2015-12-16 08:13:18'),
(2, 'admin', 'admin', '', NULL, 0, NULL, NULL, NULL, NULL, 'user', '2015-12-15 08:13:48', '2015-12-16 08:13:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisor`
--
ALTER TABLE `advisor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `updatedBy` (`updatedBy`);

--
-- Indexes for table `answerquestion`
--
ALTER TABLE `answerquestion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questionId` (`questionId`),
  ADD KEY `createdBy` (`createdBy`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `receiverId` (`receiverId`),
  ADD KEY `createdBy` (`createdBy`);

--
-- Indexes for table `moderator`
--
ALTER TABLE `moderator`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `createdBy` (`createdBy`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjectId` (`subjectId`),
  ADD KEY `createdBy` (`createdBy`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `createdBy` (`createdBy`),
  ADD KEY `updatedBy` (`updatedBy`);

--
-- Indexes for table `studentviewanswer`
--
ALTER TABLE `studentviewanswer`
  ADD PRIMARY KEY (`student_id`,`answerQuestionId`);

--
-- Indexes for table `studentviewquestion`
--
ALTER TABLE `studentviewquestion`
  ADD PRIMARY KEY (`questionId`,`studentId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD KEY `role_id` (`roles`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advisor`
--
ALTER TABLE `advisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `answerquestion`
--
ALTER TABLE `answerquestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `moderator`
--
ALTER TABLE `moderator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
