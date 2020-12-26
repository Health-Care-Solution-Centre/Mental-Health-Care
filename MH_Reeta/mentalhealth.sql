-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 03:38 PM
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
  `main_page_tips1` varchar(4000) NOT NULL,
  `main_page_tips2` varchar(4000) NOT NULL,
  `story1` varchar(4000) NOT NULL,
  `story2` varchar(4000) NOT NULL,
  `admin_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mainpage`
--

INSERT INTO `mainpage` (`main_page_id`, `update_date`, `main_page_tips1`, `main_page_tips2`, `story1`, `story2`, `admin_id`) VALUES
(1, '2020-12-26', 'Do something you enjoy\r\nTry to make time for doing the fun things you enjoy. If you like going for a walk, painting or a specific TV show, try to set aside time to enjoy yourself. If we don\'t spend an', 'Avoid alcohol, smoking and drugs\r\nDrinking and smoking aren\'t things which we always associate with withdrawal symptoms, but they can cause some which impact on your mental health. When you\'ve had a f', 'When I was 26 years old, my symptoms of mental illness caused many problems for me. I started to have emotional problems for the first time and was hospitalized in Texas. One of my darkest moments was when I was having a lot of fear and feeling angry about life. In addition, not getting along with family and friends was causing problems for me in my life. I was not able to hold a job and was havin', 'Having achieved two bachelor\'s degrees and a master\'s degree public health, she thought she \"had the world by the tail.\" Although she had experienced dark feelings and insecurities before, she never would have believed they would lead to full-blown depression. But by the time Katherine was 28, her depression had impacted her life in a major way. She had been hospitalized numerous times, lost her a', 1),
(2, '2020-12-26', 'Do something you enjoy\r\nTry to make time for doing the fun things you enjoy. If you like going for a walk, painting or a specific TV show, try to set aside time to enjoy yourself. If we don\'t spend any time doing things we enjoy, we can become irritable and unhappy.\r\n\r\nWhether you need help to get out and about or not take a look at our Things To Do section, or go to our Events calendar, for ideas and information on what is going on in your area.\r\n\r\nConnect with others and be sociable\r\nMake an effort to maintain good relationships and talk to people whenever you get the chance. Having friends is important not just for your self-esteem, but also for providing support when you\'re not feeling too great. Research has found that talking to others for just ten minutes can improve memory and test scores!\r\n', 'Avoid alcohol, smoking and drugs\r\nDrinking and smoking aren\'t things which we always associate with withdrawal symptoms, but they can cause some which impact on your mental health. When you\'ve had a few drinks you can feel more depressed and anxious the next day, and it can be harder to concentrate. Excessive drinking for prolonged periods can leave you with a thiamine deficiency. Thiamine is important for our brain function and a deficiency can lead to severe memory problems, motor (coordination) problems, confusion and eye problems.  If you smoke, between cigarettes your body and brain go into withdrawal which makes you irritable and anxious.\r\n\r\nOther drugs will often leave you in withdrawal and can often cause very low moods and anxiety. More severe effects of drugs include paranoia and delusions. There is some research that suggests drug use is related to developing mental disorders like schizophrenia.\r\n\r\nEat well\r\nEating well isn\'t just important for our bodies, but it\'s also impo', 'When I was 26 years old, my symptoms of mental illness caused many problems for me. I started to have emotional problems for the first time and was hospitalized in Texas. One of my darkest moments was when I was having a lot of fear and feeling angry about life. In addition, not getting along with family and friends was causing problems for me in my life. I was not able to hold a job and was having dealings with the police. I felt as if I had a void in my life and nowhere to go. Not being able to function in society was a problem for me. These are some of the feelings I was experiencing at my first hospitalization.\r\n\r\nHaving acceptance of my mental illness means taking charge of my life and moving forward. This has played a big part in my recovery. I started to have acceptance of my mental illness after giving myself credit for my strengths and weaknesses and accepting my limitations. Also, believing that I have something to offer in society and doing positive, healthy things in my lif', 'Having achieved two bachelor\'s degrees and a master\'s degree public health, she thought she \"had the world by the tail.\" Although she had experienced dark feelings and insecurities before, she never would have believed they would lead to full-blown depression. But by the time Katherine was 28, her depression had impacted her life in a major way. She had been hospitalized numerous times, lost her apartment, job and benefits, ultimately forcing her to file for bankruptcy and move in with her parents.\r\n\r\nI truly believed that any hope of having any semblance of a normal adult life was over and I would forever remain an adult-child dreaming of the life that could have been.\r\n\r\n<p>But at a hospital dialectical behaviour therapy (DBT) day-program she attended, life began to turn around. Through the program\'s individual and group therapy (most helpful for people who have difficultly managing their emotions), She learned new skills to manage and cope with her emotions and tolerate emotional di', 1),
(3, '2020-12-26', 'Do something you enjoy\r\nTry to make time for doing the fun things you enjoy. If you like going for a walk, painting or a specific TV show, try to set aside time to enjoy yourself. If we don\'t spend any time doing things we enjoy, we can become irritable and unhappy.\r\n\r\nWhether you need help to get out and about or not take a look at our Things To Do section, or go to our Events calendar, for ideas and information on what is going on in your area.\r\n\r\nConnect with others and be sociable\r\nMake an effort to maintain good relationships and talk to people whenever you get the chance. Having friends is important not just for your self-esteem, but also for providing support when you\'re not feeling too great. Research has found that talking to others for just ten minutes can improve memory and test scores!\r\n', 'Avoid alcohol, smoking and drugs\r\nDrinking and smoking aren\'t things which we always associate with withdrawal symptoms, but they can cause some which impact on your mental health. When you\'ve had a few drinks you can feel more depressed and anxious the next day, and it can be harder to concentrate. Excessive drinking for prolonged periods can leave you with a thiamine deficiency. Thiamine is important for our brain function and a deficiency can lead to severe memory problems, motor (coordination) problems, confusion and eye problems.  If you smoke, between cigarettes your body and brain go into withdrawal which makes you irritable and anxious.\r\n\r\nOther drugs will often leave you in withdrawal and can often cause very low moods and anxiety. More severe effects of drugs include paranoia and delusions. There is some research that suggests drug use is related to developing mental disorders like schizophrenia.\r\n\r\nEat well\r\nEating well isn\'t just important for our bodies, but it\'s also important for our minds. Certain mineral deficiencies, such as iron and vitamin B12 deficiencies, can give us a low mood. Try to eat a balanced diet. If you find you\'re a particularly stressed or anxious person, you should try limiting or cutting out caffeine as this can make you feel jittery and anxious.\r\n', 'When I was 26 years old, my symptoms of mental illness caused many problems for me. I started to have emotional problems for the first time and was hospitalized in Texas. One of my darkest moments was when I was having a lot of fear and feeling angry about life. In addition, not getting along with family and friends was causing problems for me in my life. I was not able to hold a job and was having dealings with the police. I felt as if I had a void in my life and nowhere to go. Not being able to function in society was a problem for me. These are some of the feelings I was experiencing at my first hospitalization.\r\n\r\nHaving acceptance of my mental illness means taking charge of my life and moving forward. This has played a big part in my recovery. I started to have acceptance of my mental illness after giving myself credit for my strengths and weaknesses and accepting my limitations. Also, believing that I have something to offer in society and doing positive, healthy things in my life. Not giving up in life has been a positive thing for me. It has helped me to make a lot of progress in my life. In my journey as a Peer Support Specialist and being involved with NAMI has helped me with acceptance. Also, having family, friends, and being a student has very much helped me to accept my mental illness. Staying in treatment and taking my medications has also helped me with acceptance.\r\n\r\nIt is very important for me to use coping skills that can help me get through a tough day. Having good coping skills for me, means I have a plan in managing my mental illness. There are several coping skills that I use. You can take a hot shower, listen to music, watch television, and keep a balance with your schedule during the week. Medication is also important to me and my treatment. Also, take plenty of breaks when you are doing your school assignments and do not procrastinate in getting your homework done. It\'s a good idea to have a good support system to help manage your symptoms and people who can help you with moral support. Also, I make sure to get enough sleep and eat healthy, plus exercise. I want to make sure to keep a balance in my life and have activities to do during the week. It\'s been beneficial for me to be attend my support group meetings at NAMI, which has been a big part of my support system. I like facilitating groups and making friends. Basically, pull something out of your toolbox to help you cope better. This helps you cope better when you are having a bad day.\r\n\r\nKnowing that hope is the \"cornerstone of recovery\" and believing you can have success with your life is critical. Your successes and dreams take on many different directions to arrive at your destination. Success means to me means building upon my strengths and moving forward in my life. Hope means that you believe in yourself and feeling positive never accepting defeat.\r\n', 'Having achieved two bachelor\'s degrees and a master\'s degree public health, she thought she \"had the world by the tail.\" Although she had experienced dark feelings and insecurities before, she never would have believed they would lead to full-blown depression. But by the time Katherine was 28, her depression had impacted her life in a major way. She had been hospitalized numerous times, lost her apartment, job and benefits, ultimately forcing her to file for bankruptcy and move in with her parents.\r\n\r\nI truly believed that any hope of having any semblance of a normal adult life was over and I would forever remain an adult-child dreaming of the life that could have been.\r\n\r\nBut at a hospital dialectical behaviour therapy (DBT) day-program she attended, life began to turn around. Through the program\'s individual and group therapy (most helpful for people who have difficultly managing their emotions), She learned new skills to manage and cope with her emotions and tolerate emotional distress.  Eight years after her life fell apart, She re-entered the job market and her life \"took giant leap forward.\"\r\n\r\nIn her words,\r\nRecovery is possible for most everyone because it is defined by the person doing it. There is no right or wrong way to recover - rather it is about living a life that has ups and downs, successes and failures, dreams and hopes - one that is fulfilling. It is about building or rebuilding a life in spite of being diagnosed with a mental illness. I never thought that I would be able to take the most disenfranchising event in my life, being diagnosed as seriously mental ill, and turn it into one of the most empowering.\r\n', 1);

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
  MODIFY `main_page_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
