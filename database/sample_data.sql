-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 29, 2025 at 03:00 PM
-- Server version: 8.0.19
-- PHP Version: 8.0.1

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aria`
--
CREATE DATABASE IF NOT EXISTS `aria` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `aria`;

-- --------------------------------------------------------

--
-- Table structure for table `about_info`
--

DROP TABLE IF EXISTS `about_info`;
CREATE TABLE IF NOT EXISTS `about_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `a_count` int NOT NULL,
  `count_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_info`
--

INSERT INTO `about_info` (`id`, `a_count`, `count_name`) VALUES
(1, 236, 'Happy Users'),
(2, 144, 'Issues Solved'),
(3, 178, 'Good Reviews');

-- --------------------------------------------------------

--
-- Table structure for table `callme_form`
--

DROP TABLE IF EXISTS `callme_form`;
CREATE TABLE IF NOT EXISTS `callme_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `interested` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `callme_form`
--

INSERT INTO `callme_form` (`id`, `name`, `phone`, `email`, `interested`) VALUES
(1, 'm', 123, 'ad@gmail.com', 'Off The Ground');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

DROP TABLE IF EXISTS `contact_form`;
CREATE TABLE IF NOT EXISTS `contact_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `message`) VALUES
(1, 'Yusufxon', 'ak@gmail.com', 'qwe'),
(27, 'Meubles', 'akramovyu@gmail.com', 'sASSAW'),
(28, 'Abdulmajit', 'abdulmajitkocha@gmail.com', 'Narxi qancha ekan ');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `c_info` text NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `c_info`, `c_name`, `c_img`) VALUES
(1, 'The guys from Aria helped with getting my business off the ground and turning into a profitable company.', 'Jude Thorn', 'testimonial-1.jpg'),
(2, 'I purchased the Growth Accelerator service pack a few years ago and I renewed the contract each year.', 'Marsha Singer', 'testimonial-2.jpg'),
(3, 'Aria\'s CEO personally attends client meetings and gives his feedback on business growth strategies.', 'Roy Smith', 'testimonial-3.jpg'),
(4, 'At the beginning I thought the prices are a little high for what they offer but they over deliver each and every time.', 'Ronald Spice', 'testimonial-4.jpg'),
(5, 'I recommend Aria to every business owner or growth leader that wants to take his company to the next level.', 'Lindsay Rune', 'testimonial-5.jpg'),
(6, 'My goals for using Aria\'s services seemed high when I first set them but they\'ve met them with no problems.', 'Ann Black', 'testimonial-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

DROP TABLE IF EXISTS `home`;
CREATE TABLE IF NOT EXISTS `home` (
  `id` int NOT NULL AUTO_INCREMENT,
  `h_title` varchar(100) NOT NULL,
  `h_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `h_title`, `h_content`) VALUES
(5, 'BUSINESS CONSULTIN', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, accusamus nesciunt atqu.');

-- --------------------------------------------------------

--
-- Table structure for table `intro`
--

DROP TABLE IF EXISTS `intro`;
CREATE TABLE IF NOT EXISTS `intro` (
  `id` int NOT NULL AUTO_INCREMENT,
  `i_title` varchar(100) NOT NULL,
  `i_content` text NOT NULL,
  `i_contents` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `i_img` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `intro`
--

INSERT INTO `intro` (`id`, `i_title`, `i_content`, `i_contents`, `i_img`) VALUES
(1, 'We Offer Some Of The Best Business Growth Services In Town', 'Launching a new company or developing the market position of an existing one can be quite an overwhelming processs at times.', 'Our mission here at Aira is to get you through those tough moments relying on our team\'s expertise in starting and growing companies.', 'intro-office.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `intro_card`
--

DROP TABLE IF EXISTS `intro_card`;
CREATE TABLE IF NOT EXISTS `intro_card` (
  `id` int NOT NULL AUTO_INCREMENT,
  `c_title` varchar(100) NOT NULL,
  `c_content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `c_icon` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `intro_card`
--

INSERT INTO `intro_card` (`id`, `c_title`, `c_content`, `c_icon`) VALUES
(5, 'Environment Analysis', 'The starting point of any success story is knowing your current position in the business environment', 'fas fa-binoculars'),
(6, 'Development Planning', 'After completing the environmental analysis the next stage is to design and  plan your development strategy', 'fas fa-list-alt'),
(7, 'Execution & Evaluation', 'In this phase you will focus on executing the actions plan and evaluating the results after each marketing campaign', 'fas fa-chart-pie');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int NOT NULL AUTO_INCREMENT,
  `p_img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `p_img`) VALUES
(1, 'project-1.jpg'),
(2, 'project-2.jpg'),
(3, 'project-3.jpg'),
(4, 'project-4.jpg'),
(5, 'project-5.jpg'),
(6, 'project-6.jpg'),
(7, 'project-7.jpg'),
(8, 'project-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `s_title` varchar(100) NOT NULL,
  `s_content` text NOT NULL,
  `s_field1` varchar(100) NOT NULL,
  `s_field2` varchar(100) NOT NULL,
  `s_price` varchar(100) NOT NULL,
  `s_img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `s_title`, `s_content`, `s_field1`, `s_field2`, `s_price`, `s_img`) VALUES
(1, 'Off The Ground Off The Ground', 'Perfect for fresh ideas or young startups, this package will help get the business off the ground', 'Environment and competition', 'Designing the marketing plan', '199', 'services-1.jpg'),
(2, 'Accelerated Growth', 'Use this service pack to give your company the necessary impulse to become an industry leader', 'Business strategy planning', 'Taking the planned actions', '299', 'services-2.jpg'),
(3, 'Market Domination', 'You already are a reference point in your industry now you need to learn about acquisitions', 'Maintaining the leader status', 'Acquisitions the right way', '299', 'services-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service_types`
--

DROP TABLE IF EXISTS `service_types`;
CREATE TABLE IF NOT EXISTS `service_types` (
  `id` int NOT NULL AUTO_INCREMENT,
  `st_title` varchar(100) NOT NULL,
  `st_title1` varchar(100) NOT NULL,
  `st_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_types`
--

INSERT INTO `service_types` (`id`, `st_title`, `st_title1`, `st_content`) VALUES
(1, 'Accelerate Business Growth To Improve Revenue Numbers', 'How Can Aria Help Your Business', ' At Aria solutions, we’ve taken the consultancy concept one step further by offering a full service management organization with expertise.'),
(2, '', 'Great Strategic Business Planning', 'Aria partners with businesses to business growth and development ideas including environment analysis, plan execution and evaluation.'),
(3, '', 'Online Marketing Campaigns', 'An awesome online marketing plan won\'t save your bad product but paired with a good product, the sky is the limit for what can be achieved.');

-- --------------------------------------------------------

--
-- Table structure for table `stuff`
--

DROP TABLE IF EXISTS `stuff`;
CREATE TABLE IF NOT EXISTS `stuff` (
  `id` int NOT NULL AUTO_INCREMENT,
  `stuff_img` varchar(100) NOT NULL,
  `stuff_name` varchar(100) NOT NULL,
  `stuff_position` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stuff`
--

INSERT INTO `stuff` (`id`, `stuff_img`, `stuff_name`, `stuff_position`) VALUES
(1, 'team-1.png', 'John Whitelong', 'General Manager'),
(2, 'team-2.png', 'Veronique Smith', 'Business Developer'),
(3, 'team-3.png', 'Chris Zimerman', 'Online Marketer'),
(4, 'team-4.png', 'Mary Villalonga', 'Community Manager');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
