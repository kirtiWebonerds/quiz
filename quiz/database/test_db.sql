-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2016 at 02:06 PM
-- Server version: 5.7.13-0ubuntu0.16.04.2
-- PHP Version: 7.0.8-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`, `created_at`) VALUES
(1, 'ssumit4078@gmail.com', 'sumit', '2016-09-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `descript`
--

CREATE TABLE `descript` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `descript`
--

INSERT INTO `descript` (`id`, `question`, `status`) VALUES
(1, 'This is a Descriptive Question ?', 0);

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `college` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`id`, `name`, `email`, `contact`, `college`, `password`, `status`, `created_at`) VALUES
(1, 'sumit', 'ssumit4067@gmail.com', '1234', 'ss', 'SS', 1, '2016-09-21 18:59:14'),
(4, 'q', 'q', 'w', 'q', 'w', 1, '2016-09-21 19:05:40'),
(5, 'q', 'q', 'w', 'q', 'ssss', 0, '2016-09-21 19:09:01'),
(6, 'q', 'q', 'w', 'q', 'sldsd', 0, '2016-09-21 19:09:22'),
(7, 'q', 'q', 'w', 'q', 'sldsd', 0, '2016-09-21 19:09:57'),
(8, 'q', 'q', 'w', 'q', 'sldsd', 0, '2016-09-21 19:10:37'),
(9, 'q', 'q', 'w', 'q', 'sldsd', 0, '2016-09-21 19:11:16'),
(10, 'sldmsld', 'ssumit4067@gmail.com', '122121', 'root', 'password', 0, '2016-09-23 07:51:11');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `questions` text NOT NULL,
  `1` varchar(255) NOT NULL,
  `2` varchar(255) NOT NULL,
  `3` varchar(255) NOT NULL,
  `4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questions`, `1`, `2`, `3`, `4`, `answer`, `status`) VALUES
(1, 'my question', 'ans1', 'ans2', 'ans3', 'ans4', 'ans3', 0),
(2, 'my questions', 'answer1', 'answer2', 'answer3', 'answer4', 'answer2', 0),
(3, 'silly question', 'op1', 'op2', 'op3', 'op4', 'op2', 0),
(4, 'silly question', 'op1', 'op2', 'op3', 'op4', 'op2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `marks` int(11) NOT NULL,
  `descript` text NOT NULL,
  `descriptans` text NOT NULL,
  `time` varchar(10) NOT NULL,
  `submit_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `participant_id`, `name`, `marks`, `descript`, `descriptans`, `time`, `submit_at`) VALUES
(1, 1, 'sumit', 2, '', '', '23-09-2016', '2016-09-23 00:00:19'),
(13, 1, 'sumit', 0, '', '', '23-09-2016', '2016-09-23 01:23:46'),
(14, 1, '', 0, 'This is a Descriptive Question ?', 'sdkjfdnfdskfn', '23-09-2016', '2016-09-23 12:29:10'),
(15, 1, '', 0, 'This is a Descriptive Question ?', 'dlmflsdflsdmlfmsdlfmsdmdsmsdlmfldsmfl', '23-09-2016', '2016-09-23 12:32:14'),
(16, 4, 'q', 0, 'This is a Descriptive Question ?', ';d,f;sfd', '23-09-2016', '2016-09-23 12:45:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `descript`
--
ALTER TABLE `descript`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `descript`
--
ALTER TABLE `descript`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
