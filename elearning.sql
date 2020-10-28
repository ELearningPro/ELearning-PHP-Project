-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 09:45 PM
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
(8, 'test test', 'test@mailinator.com', '12131323', '$2y$10$6UB9/mjN4n.k6BuV0bD.pemQT2tO6tgfh7qEYZDJ.Z5zYlXRCMeHG', '$2y$10$OFGmETTDRpLc2nSbZQ1uoOn5kMDEvaNKzE5fJ2ScsZVtJy6oUh7FW', 'f6164c60c2e02f8127ef0ab2678e2d', 'in-active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
