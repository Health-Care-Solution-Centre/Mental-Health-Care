-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 11:41 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentalhealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_password` varchar(6) NOT NULL,
  `admin_email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_password`, `admin_email`) VALUES
(1, '010101', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mainpage`
--

CREATE TABLE `mainpage` (
  `main_page_id` int(6) NOT NULL,
  `update_date` date NOT NULL,
  `main_page_tips1` varchar(200) NOT NULL,
  `main_page_tips2` varchar(200) NOT NULL,
  `story1` varchar(400) NOT NULL,
  `story2` varchar(400) NOT NULL,
  `story3` varchar(400) NOT NULL,
  `story4` varchar(400) NOT NULL,
  `admin_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `psychology_expert`
--

CREATE TABLE `psychology_expert` (
  `expert_id` int(11) NOT NULL,
  `expert_name` varchar(20) NOT NULL,
  `expert_email` varchar(20) NOT NULL,
  `expert_education` varchar(20) NOT NULL,
  `expert_password` varchar(6) NOT NULL,
  `expert_tips` varchar(400) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `admin_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `psychology_expert`
--

INSERT INTO `psychology_expert` (`expert_id`, `expert_name`, `expert_email`, `expert_education`, `expert_password`, `expert_tips`, `status`, `admin_id`) VALUES
(1, 'expert', 'expert@gmail.com', 'Masters', 'exp123', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `age` int(10) NOT NULL,
  `user_password` varchar(6) NOT NULL,
  `mental_score` int(10) DEFAULT NULL,
  `mental_activity` varchar(200) DEFAULT NULL,
  `story` varchar(400) DEFAULT NULL,
  `register_date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `user_email`, `age`, `user_password`, `mental_score`, `mental_activity`, `story`, `register_date`, `status`, `admin_id`) VALUES
(1, 'Reeta', 'reeta@gmail.com', 22, '111111', NULL, NULL, NULL, NULL, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `mainpage`
--
ALTER TABLE `mainpage`
  ADD PRIMARY KEY (`main_page_id`),
  ADD KEY `FK` (`admin_id`);

--
-- Indexes for table `psychology_expert`
--
ALTER TABLE `psychology_expert`
  ADD PRIMARY KEY (`expert_id`),
  ADD KEY `FK2` (`admin_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `FK1` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mainpage`
--
ALTER TABLE `mainpage`
  MODIFY `main_page_id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `psychology_expert`
--
ALTER TABLE `psychology_expert`
  MODIFY `expert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mainpage`
--
ALTER TABLE `mainpage`
  ADD CONSTRAINT `FK` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `psychology_expert`
--
ALTER TABLE `psychology_expert`
  ADD CONSTRAINT `FK2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
