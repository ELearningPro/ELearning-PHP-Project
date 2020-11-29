-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 11:10 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `course_desc` text NOT NULL,
  `course_author` varchar(255) NOT NULL,
  `course_img` text NOT NULL,
  `course_duration` text NOT NULL,
  `course_price` varchar(11) NOT NULL,
  `course_original_price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_desc`, `course_author`, `course_img`, `course_duration`, `course_price`, `course_original_price`) VALUES
(6, 'test', 'demo', 'demo', 'angular.png', '129', '100', '100'),
(7, 'React JS', 'demo', '1212', 'img1.jpg', '121', '121', '212'),
(10, 'test', 'test', 'test', 'john-schnobrich-2FPjlAyMQTA-unsplash.jpg', 'test', '1000', '1200'),
(12, 'wjhswjh', 'yssgyt', 'ysdwuy', 'logo.png', 'uysduytqu', '542', '25'),
(13, 'sahdhas', 'hsdjg', 'ussgduyug', 'php.jpeg', 'ydgyu', '12', '21'),
(14, 'demo', '12121', '1212', 'covidIcon.png', '1212', '1000', '2212');

-- --------------------------------------------------------

--
-- Table structure for table `student_feedback`
--

CREATE TABLE `student_feedback` (
  `pvid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `profile_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmation_password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `user_name`, `email`, `mobile_number`, `password`, `confirmation_password`, `token`, `status`) VALUES
(6, 'Afroz Sorathiya', 'test9008@mailinator.com', '1231212331', '$2y$10$TOMEWXcX5qHrh1q3ORfEXeqnAGHCpxLzF7bYQdqxHOywAbC5TeecS', '$2y$10$sBliOjFWLy/THcTeDz0Dd.z6/uDMGmbqoe/iDwHwP7hi39oMPLgi.', '122ee1559e76800645ca6f9acd5da7', 'active'),
(7, 'Mahir  Sodagar', 'mahirsodagar007@mailinator.com', '1231212331', '$2y$10$DXPMFgsAtzPrzFyWsgz5DuoSuAMkEPDeOMgX5RGMm5iE.tfLNZBie', '$2y$10$aZzGHNUP1fNqFtCTIQA/8u5ffDXcrYyu70Pf4nbfkTVTg/d6SoleS', 'f17ef3a69f649537dc57643af15ae9', 'active'),
(8, 'test test', 'test@mailinator.com', '12131323', '$2y$10$6UB9/mjN4n.k6BuV0bD.pemQT2tO6tgfh7qEYZDJ.Z5zYlXRCMeHG', '$2y$10$OFGmETTDRpLc2nSbZQ1uoOn5kMDEvaNKzE5fJ2ScsZVtJy6oUh7FW', 'f6164c60c2e02f8127ef0ab2678e2d', 'active'),
(12, 'test test', 'test@123.com', '1873163', '$2y$10$vvF063/L1eJOuN9Ngl9PrOz8idITVPmYxN1nvPGHbFXZgxCCRoe6K', '$2y$10$nGMm09UH/4Auv92eiXrHBOEEpZv3.kc2ixTFlqqCTskTvkG6PstXS', 'a44d4780c2dc79564d549d9d172db8', 'active'),
(19, 'test test', 'elearning00@mailinator.com', '1111111111', '$2y$10$FAnSNH4ORNSiIlsv86IXge6GvvmMXWMIognYrrXVYfZXv6jXXlVkS', '$2y$10$XcDkhsK55W3bOe1.vPtSuuPWsOR2pPcSGoGSps8a1.SSk1MgMSpUu', '400a0d4033392bba1b383d3153cc32', 'in-active'),
(20, 'Mahir Sodagar', 'mahirsdr007@gmail.com', '7874152669', '$2y$10$O7T78xEz98ZCOx9Vr0eTtO1xutYwitjeL6CbFATRm3vYxDSsT3HN2', '$2y$10$OIIQmq4Yhl9J8/f0xBq0DOU0G2TFzy1X.lcYCcKZiqNCm3xoyxazm', '2c7a17f683811642482f4e2e24ec42', 'active'),
(23, 'Altaf Saikh', 'akking2424@gmail.com', '6355603440', '$2y$10$mQqbOoCx.a.cCkfg0LFCK.U1/sEjm0K5nm8Q9qFMS44.xTQB2Ucwi', '$2y$10$hrtNzjvc65VUP3NqGKK2Ae7oPSEl.cCZfH2rlLBXulAlE9h2DwRn2', '1040cf6be02f7c5236e895c37970dc', 'active'),
(24, 'Vicky Dixit', 'dixitvicky521@gmail.com', '7698025244', '$2y$10$0vwDjmzJlTnHlYNaLZSuje9Z2h3theuCgxjLQF3YgEO8lFSHAN4nq', '$2y$10$sqJ0uXUUTg2/dYVz9/o3iel7bcYrMEsbS.HmHwkc9xItg4Z63.6m.', '835f4a6e89548ff355f93989d5013e', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `student_feedback`
--
ALTER TABLE `student_feedback`
  ADD PRIMARY KEY (`pvid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_feedback`
--
ALTER TABLE `student_feedback`
  MODIFY `pvid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
