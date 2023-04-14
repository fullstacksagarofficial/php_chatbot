-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 21, 2023 at 09:49 AM
-- Server version: 8.0.27
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpchatbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot_hints`
--

DROP TABLE IF EXISTS `chatbot_hints`;
CREATE TABLE IF NOT EXISTS `chatbot_hints` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbot_hints`
--

INSERT INTO `chatbot_hints` (`id`, `question`, `reply`) VALUES
(3, 'what is your name||whats your name||what should I call you', 'My name is Atechseva Bot'),
(4, 'web design cost||cost of web design||web design ruppe||how much cost web design||web designing price', '9000 for static & 1599 for dynaic'),
(5, 'Where are your from', 'I m from Meerut,India'),
(6, 'Bye||See you later||Have a Good Day', 'Sad to see you are going. Have a nice day'),
(7, 'I\'m good.\r\nI\'m doing well.\r\nI\'m okay (or OK).\r\nI\'m alright.\r\nNot bad.\r\nNot too shabby.\r\nCan\'t compla', 'okay !'),
(9, 'what service you provide || cost of developement || price of dev || price of design||price of websit', 'whats your requirement'),
(47, 'Hi, How are you', 'I am good ! How can i help you'),
(49, 'hi', 'Hi ! How can i help you'),
(50, 'Are you happy today?', 'Yes, I am'),
(51, 'Did you have fun at the party.', 'No, I didn\'t.'),
(52, 'Where are you from?', 'I am from Meerut, Uttar Pradesh INDIA'),
(53, 'What\'s your name?', 'My name is AtechSeva Bot'),
(54, 'What\'s your surname/family name?', 'My Owner Surname is Sagar Kumar'),
(55, 'What\'s your first name?', 'Sagar'),
(56, 'What\'s your Last name?', 'Kumar'),
(57, 'Where do you live?', 'I live in Meerut, Uttar Pradesh'),
(58, 'What\'s your address? ', 'Atechseva is not a physically situated company !'),
(59, 'What\'s your telephone number?', '7017742830'),
(60, 'What\'s your email address?', 'atechseva@gmail.com'),
(61, 'Are you married?', 'No Personal Questions Please hehehe !!'),
(62, 'What is your marital status?', '	No Personal Questions Please hehehe !!'),
(63, 'What do you do?/What\'s your Job?', 'My Job is to answer your question ! By the way atechseva provides web development services'),
(64, 'Can I ask you a few personal questions?', 'Certainly'),
(65, 'can you help me | can you hear me', 'yes i can !'),
(66, 'are you with me', 'yes i am with you !'),
(67, 'do you speak english', 'yes !'),
(68, 'Hi', 'Hi ! How can i help you'),
(69, 'hi atechseva', '	Hi ! How can i help you');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `added_on` datetime NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
