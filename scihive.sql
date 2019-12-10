-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 02:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scihive`
--

-- --------------------------------------------------------

--
-- Table structure for table `sci_activity`
--

CREATE TABLE `sci_activity` (
  `activity_ID` int(11) NOT NULL,
  `activity_name` varchar(255) DEFAULT NULL,
  `activity_likes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sci_convo`
--

CREATE TABLE `sci_convo` (
  `convo_ID` int(11) NOT NULL,
  `convo_name` varchar(255) DEFAULT NULL,
  `convo_content` varchar(255) DEFAULT NULL,
  `convo_user` varchar(255) DEFAULT NULL,
  `convo_loc` varchar(255) DEFAULT NULL,
  `convo_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sci_convo`
--

INSERT INTO `sci_convo` (`convo_ID`, `convo_name`, `convo_content`, `convo_user`, `convo_loc`, `convo_date_time`) VALUES
(1, NULL, 'wehehehe', 'Crizon', '', '2019-10-17 14:33:09'),
(2, NULL, 'Hello', 'Crizon', NULL, '2019-10-17 14:37:00'),
(3, NULL, 'Ot', 'Crizon', 'uploads/71284904_2193102694129495_553667781770346496_n.jpg', '2019-10-17 14:38:12'),
(4, NULL, 'Ppoyek', 'Crizon', 'uploads/71284904_2193102694129495_553667781770346496_n.jpg', '2019-10-17 14:38:12'),
(5, NULL, 'Ppoyekhahaa', 'Crizon', 'uploads/71284904_2193102694129495_553667781770346496_n.jpg', '2019-10-17 14:38:12'),
(6, NULL, 'What', 'Crizon', NULL, '2019-10-17 14:38:43'),
(7, NULL, 'What the fuck', 'Crizon', NULL, '2019-10-17 14:38:57'),
(8, NULL, 'Daamn', 'Crizon', 'uploads/66834128_443106139870595_2399654247533641728_n.jpg', '2019-10-17 14:39:34'),
(9, NULL, 'anything wrong?', 'Crizon', NULL, '2019-10-17 14:40:21'),
(10, NULL, 'You are wrong', 'Frenole', NULL, '2019-10-17 14:41:12'),
(11, NULL, 'Anything?', 'Frenole', NULL, '2019-10-17 14:42:07'),
(12, NULL, 'I think were missing something', 'Frenole', NULL, '2019-10-17 14:42:30'),
(13, NULL, 'What could that be', 'Frenole', NULL, '2019-10-17 14:42:39'),
(14, NULL, 'Mga loko loko hahaha', 'Frenole', NULL, '2019-10-17 14:42:59'),
(15, NULL, 'Why am i talking tomy self?', 'Frenole', NULL, '2019-10-17 14:43:15'),
(16, NULL, 'ðŸ˜', 'Frenole', NULL, '2019-10-17 14:43:23'),
(17, NULL, 'Ihopethat emoji issupported', 'Frenole', NULL, '2019-10-17 14:43:38'),
(18, NULL, 'Yeahhahaha', 'Frenole', NULL, '2019-10-17 14:43:46'),
(19, NULL, 'Weee', 'Frenole', NULL, '2019-10-17 14:44:34'),
(20, NULL, 'Hello', 'Crizon', NULL, '2019-10-17 14:45:50'),
(21, NULL, 'Zup frenny', 'Crizon', NULL, '2019-10-17 14:46:01'),
(22, NULL, 'Hu', 'Crizon', NULL, '2019-10-17 14:47:30'),
(23, NULL, 'What the hell', 'Crizon', NULL, '2019-10-17 14:47:58'),
(24, NULL, 'Back', 'Crizon', NULL, '2019-10-17 14:49:00'),
(25, NULL, 'Simple chat app', 'Crizon', NULL, '2019-10-17 14:49:28'),
(26, NULL, 'Itsgreate tho', 'Crizon', NULL, '2019-10-17 14:49:35'),
(27, NULL, 'Yu', 'Crizon', NULL, '2019-10-17 14:50:04'),
(28, NULL, 'Yu', 'Crizon', NULL, '2019-10-17 14:50:28'),
(29, NULL, 'You think its cool', 'Crizon', NULL, '2019-10-17 14:55:14'),
(30, NULL, 'Well i guess', 'Crizon', NULL, '2019-10-17 14:55:21'),
(31, NULL, 'Helo', 'Crizon', NULL, '2019-10-17 15:26:55'),
(32, NULL, 'Potek', 'Crizon', NULL, '2019-10-17 15:27:01'),
(33, NULL, 'The more you type', 'Crizon', NULL, '2019-10-17 15:27:09'),
(34, NULL, 'Kusa naman pala aangat', 'Crizon', NULL, '2019-10-17 15:29:17'),
(35, NULL, 'Yow', 'Crizon', NULL, '2019-10-17 15:58:20'),
(36, NULL, 'Yo', 'Crizon', NULL, '2019-10-17 15:58:27'),
(37, NULL, 'Hello', 'Crizon', NULL, '2019-10-21 18:39:04'),
(38, NULL, 'Charf', 'Crizon', NULL, '2019-10-22 05:55:28'),
(39, NULL, 'Nakabuntis pinsan ko', 'Frenole', NULL, '2019-10-22 05:55:49'),
(40, NULL, 'Pota ka', 'Crizon', NULL, '2019-10-22 05:55:56');

-- --------------------------------------------------------

--
-- Table structure for table `sci_likes`
--

CREATE TABLE `sci_likes` (
  `like_ID` int(11) NOT NULL,
  `like_for` varchar(255) DEFAULT NULL,
  `like_user` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sci_scores`
--

CREATE TABLE `sci_scores` (
  `score_ID` int(11) NOT NULL,
  `score_game` varchar(255) DEFAULT NULL,
  `score_actual` int(255) NOT NULL,
  `score_student` varchar(255) DEFAULT NULL,
  `score_date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sci_scores`
--

INSERT INTO `sci_scores` (`score_ID`, `score_game`, `score_actual`, `score_student`, `score_date_time`) VALUES
(1, 'quiz_1', 1, 'Crizon', '0000-00-00'),
(2, 'quiz_1', 3, 'CJ', '0000-00-00'),
(3, 'quiz_1', 3, 'Crzn', '0000-00-00'),
(4, 'quiz_1', 2, 'Lul', '0000-00-00'),
(5, 'quiz_1', 1, 'Toto', '0000-00-00'),
(6, 'quiz_1', 1, 'aako', '0000-00-00'),
(7, 'quiz_1', 3, 'RatBo', '0000-00-00'),
(8, 'quiz_1', 2, 'KingInadesu', '0000-00-00'),
(9, 'quiz_1', 3, 'Yawang', '0000-00-00'),
(10, 'quiz_1', 1, 'Jawa', '0000-00-00'),
(11, 'quiz_1', 1, 'Futa', '0000-00-00'),
(12, 'quiz_1', 2, 'Quing Ina', '0000-00-00'),
(13, 'quiz_1', 3, 'Damet', '0000-00-00'),
(14, 'quiz_1', 3, 'Jo', '0000-00-00'),
(15, 'quiz_1', 2, 'DIDI', '0000-00-00'),
(16, 'quiz_1', 1, 'FUTA', '0000-00-00'),
(17, 'quiz_1', 3, 'JAWA', '0000-00-00'),
(18, 'quiz_1', 1, 'awkko', '0000-00-00'),
(19, 'quiz_1', 3, 'aehmo', '0000-00-00'),
(20, 'quiz_1', 2, 'Dajkl', '0000-00-00'),
(37, 'quiz_1', 4, 'Waw', '0000-00-00'),
(38, 'quiz_1', 5, 'Chup', '0000-00-00'),
(39, 'quiz_1', 5, 'Buji', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sci_sections`
--

CREATE TABLE `sci_sections` (
  `section_ID` int(11) NOT NULL,
  `section_name` varchar(255) DEFAULT NULL,
  `section_teacher` varchar(255) DEFAULT NULL,
  `section_size` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sci_students`
--

CREATE TABLE `sci_students` (
  `s_ID` varchar(11) NOT NULL,
  `s_fname` varchar(255) DEFAULT NULL,
  `s_lname` varchar(255) DEFAULT NULL,
  `s_sname` varchar(255) DEFAULT NULL,
  `s_bday` date DEFAULT NULL,
  `s_gender` varchar(255) DEFAULT NULL,
  `s_uname` varchar(255) DEFAULT NULL,
  `s_password` varchar(255) DEFAULT NULL,
  `s_section` varchar(255) DEFAULT NULL,
  `s_teacher` varchar(255) DEFAULT NULL,
  `s_lastlogin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sci_students`
--

INSERT INTO `sci_students` (`s_ID`, `s_fname`, `s_lname`, `s_sname`, `s_bday`, `s_gender`, `s_uname`, `s_password`, `s_section`, `s_teacher`, `s_lastlogin`) VALUES
('14310792', 'Frenolie', 'Verses', 'III', '2019-11-06', 'FemaleX', 'FVNE', 'bbq', 'Flower Power', '911', NULL),
('16330006', 'Crizon', 'Parcia', 'Jr.', '1993-11-18', 'Male', 'crzn.io', 'crzn.io', '2', '911', '2019-11-06 13:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `sci_teachers`
--

CREATE TABLE `sci_teachers` (
  `t_ID` int(11) NOT NULL,
  `t_fname` varchar(255) DEFAULT NULL,
  `t_lname` varchar(255) DEFAULT NULL,
  `t_sname` varchar(255) DEFAULT NULL,
  `t_bday` date DEFAULT NULL,
  `t_gender` varchar(255) DEFAULT NULL,
  `t_uname` varchar(255) DEFAULT NULL,
  `t_password` varchar(255) DEFAULT NULL,
  `t_lastlogin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sci_teachers`
--

INSERT INTO `sci_teachers` (`t_ID`, `t_fname`, `t_lname`, `t_sname`, `t_bday`, `t_gender`, `t_uname`, `t_password`, `t_lastlogin`) VALUES
(911, 'John', 'Cena', 'Jr.', NULL, NULL, 'x@x.x', 'xxx', '2019-11-06 14:18:28'),
(1234, 'qwer', 'qwer', 'qwer', NULL, 'Male', 'qwer', 'qwer', NULL),
(123456, 'qwert', 'qwer', 'qwer', NULL, 'Female', 'qwer', 'qwer', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sci_activity`
--
ALTER TABLE `sci_activity`
  ADD PRIMARY KEY (`activity_ID`);

--
-- Indexes for table `sci_convo`
--
ALTER TABLE `sci_convo`
  ADD PRIMARY KEY (`convo_ID`);

--
-- Indexes for table `sci_likes`
--
ALTER TABLE `sci_likes`
  ADD PRIMARY KEY (`like_ID`);

--
-- Indexes for table `sci_scores`
--
ALTER TABLE `sci_scores`
  ADD PRIMARY KEY (`score_ID`);

--
-- Indexes for table `sci_sections`
--
ALTER TABLE `sci_sections`
  ADD PRIMARY KEY (`section_ID`);

--
-- Indexes for table `sci_students`
--
ALTER TABLE `sci_students`
  ADD PRIMARY KEY (`s_ID`);

--
-- Indexes for table `sci_teachers`
--
ALTER TABLE `sci_teachers`
  ADD PRIMARY KEY (`t_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sci_convo`
--
ALTER TABLE `sci_convo`
  MODIFY `convo_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `sci_scores`
--
ALTER TABLE `sci_scores`
  MODIFY `score_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
