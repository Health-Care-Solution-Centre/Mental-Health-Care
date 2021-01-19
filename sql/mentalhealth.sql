-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 11:13 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `expert_profile`
--

CREATE TABLE `expert_profile` (
  `expert_id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `dob` date NOT NULL,
  `education` varchar(100) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `status` enum('Active','Deactive') NOT NULL,
  `password` varchar(8) NOT NULL,
  `regDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expert_profile`
--

INSERT INTO `expert_profile` (`expert_id`, `name`, `email`, `mobile`, `address`, `gender`, `dob`, `education`, `pic`, `status`, `password`, `regDate`) VALUES
(8, 'Kamal', 'kamal@gmail.com', '0165421113', 'Terengganu', 'm', '1975-02-18', 'PHD', 'bart-simpson-5k-99690-1360x768-46.jpg', 'Active', '', '2021-01-05 22:46:49'),
(9, 'Mikhail', 'mk@gmail.com', '0187653451', 'Selangor', 'm', '1988-10-07', 'Master', 'photo-1497384401032-2182d2687715.jfif', 'Deactive', '', '2021-01-07 03:08:59'),
(10, 'expert', 'expert@gmail.com', '0198765678', 'Kl', 'f', '1989-06-06', 'Master', 'cut-the-rope-game-rope-face-wallpaper-thumb.jpg', 'Active', 'exp123', '2021-01-17 00:50:26');

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
  `mobile` varchar(11) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `expert_education` varchar(20) NOT NULL,
  `expert_password` varchar(6) NOT NULL,
  `expert_tips` varchar(400) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `admin_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `psychology_expert`
--

INSERT INTO `psychology_expert` (`expert_id`, `expert_name`, `expert_email`, `mobile`, `address`, `expert_education`, `expert_password`, `expert_tips`, `status`, `admin_id`) VALUES
(1, 'expert', 'expert@gmail.com', '019876787', 'perak', 'Master', 'exp123', 'testing', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `tip_id` int(10) NOT NULL,
  `tip` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`tip_id`, `tip`, `date`) VALUES
(1, 'Try to make time for doing the fun things you enjoy. If you like going for a walk, painting or a specific TV show, try to set aside time to enjoy yourself. If we don''t spend any time doing things we enjoy, we can become irritable and unhappy. Whether you need help to get out and about or not take a look at our Things To Do section, or go to our Events calendar, for ideas and information on what is going on in your area.', '2021-01-18'),
(2, 'Connect with others and be sociable.\nMake an effort to maintain good relationships and talk to people whenever you get the chance. Having friends is important not just for your self-esteem, but also for providing support when you''re not feeling too great. Research has found that talking to others for just ten minutes can improve memory and test scores!', '2021-01-17'),
(3, 'Eat well.\nEating well isn''t just important for our bodies, but it''s also important for our minds. Certain mineral deficiencies, such as iron and vitamin B12 deficiencies, can give us a low mood. Try to eat a balanced diet. If you find you''re a particularly stressed or anxious person, you should try limiting or cutting out caffeine as this can make you feel jittery and anxious.', '2021-01-17'),
(4, 'Avoid alcohol, smoking and drugs.\nDrinking and smoking aren''t things which we always associate with withdrawal symptoms, but they can cause some which impact on your mental health. When you''ve had a few drinks you can feel more depressed and anxious the next day, and it can be harder to concentrate. Excessive drinking for prolonged periods can leave you with a thiamine deficiency. Thiamine is important for our brain function and a deficiency can lead to severe memory problems, motor (coordination) problems, confusion and eye problems. If you smoke, between cigarettes your body and brain go into withdrawal which makes you irritable and anxious. Other drugs will often leave you in withdrawal and can often cause very low moods and anxiety. More severe effects of drugs include paranoia and delusions. There is some research that suggests drug use is related to developing mental disorders like schizophrenia.', '2021-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` enum('Female','Male','Other','') NOT NULL,
  `user_password` varchar(6) NOT NULL,
  `mental_score` int(10) DEFAULT NULL,
  `mental_activity` varchar(200) DEFAULT NULL,
  `story` varchar(400) DEFAULT NULL,
  `register_date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `story_user` mediumtext NOT NULL,
  `statuspost` int(50) NOT NULL DEFAULT '0',
  `reg_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `user_email`, `age`, `gender`, `user_password`, `mental_score`, `mental_activity`, `story`, `register_date`, `status`, `admin_id`, `title`, `story_user`, `statuspost`, `reg_Date`) VALUES
(1, 'reeta', 'reeta@gmail.com', 23, 'Female', '111111', 9, NULL, NULL, NULL, 1, 1, 'stress', 'pressure because of the due date of assignment', 0, '2021-01-01'),
(3, 'sabrina', 'sb@gmail.com', 30, 'Female', '123456', 2, NULL, NULL, NULL, 1, 1, 'anxiety', 'always feeling not confident and sacred', 1, '2021-01-03'),
(4, 'kamal', 'km@gmail.com', 43, 'Female', 'kamal', 5, NULL, NULL, NULL, 1, 1, 'stress', 'My boss give me a pressure to make sure that the work will always be perfect.', 1, '2021-01-03'),
(5, 'Biha', 'biha@gmail.com', 25, 'Female', 'biha', 6, NULL, NULL, NULL, 1, 1, 'Stress', 'stress because of the assignment and the project.', 1, '2021-01-03'),
(6, 'Meor', 'mm@gmail.com', 24, 'Female', 'meor', 6, NULL, NULL, NULL, 1, 1, 'Stress', 'because of the assignment and the project. also I need to meet other people expectation.', 1, '2021-01-03'),
(12, 'althirah', 'at@gmail.com', 28, '', 'althir', 5, NULL, NULL, '0000-00-00', 1, 1, 'depression', 'no one care', 0, '2021-01-12'),
(13, 'testsing', 'test1@test.com', 23, 'Male', 'testin', 9, NULL, NULL, '0000-00-00', 1, 1, 'stress', 'my boss pressure me', 0, '2021-01-15'),
(14, 'kilah', 'kh@gmail.com', 24, 'Female', 'kilah', 8, NULL, NULL, '0000-00-00', 1, 1, 'stress', 'get fired', 0, '2021-02-01'),
(15, 'mia', 'mia@gmail.com', 28, 'Female', 'mia', 8, NULL, NULL, '0000-00-00', 1, 1, 'stress', 'stress with surrunding', 0, '2021-02-03'),
(17, 'Nasuha', 'ns@gmail.com', 20, 'Female', 'nasuha', 7, NULL, NULL, '0000-00-00', 1, 1, 'stress', 'my parent pressure me', 0, '2021-02-03'),
(18, 'afifi', 'afifi@gmail.com', 28, 'Male', 'afifi', 2, NULL, NULL, '0000-00-00', 1, 1, 'stress', 'my parent like to compare me with my sibling', 0, '2021-02-03'),
(19, 'aizat', 'aizat@gmai.com', 20, 'Male', 'aizat', 1, NULL, NULL, '0000-00-00', 1, 1, 'stress', 'my husband did not help me', 0, '2021-02-03'),
(20, 'aiman', 'aiman@gmail.com', 27, 'Male', 'aiman', 2, NULL, NULL, '0000-00-00', 1, 1, 'stress', 'stress because of study. how im going to do my spm', 0, '2021-02-03'),
(21, 'afifah', 'afifah@gamil.com', 20, 'Female', 'afifah', 2, NULL, NULL, '0000-00-00', 1, 1, 'stress', 'cannot be a good child to my parent', 0, '2021-02-08'),
(22, 'nazihah', 'nazihah@gmail.com', 27, 'Female', 'naziha', 2, NULL, NULL, '0000-00-00', 1, 1, 'stress', 'missing my parent', 0, '2021-02-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `expert_profile`
--
ALTER TABLE `expert_profile`
  ADD PRIMARY KEY (`expert_id`);

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
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`tip_id`);

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
-- AUTO_INCREMENT for table `expert_profile`
--
ALTER TABLE `expert_profile`
  MODIFY `expert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `tip_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
