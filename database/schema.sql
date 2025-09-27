-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 27, 2025 at 08:21 AM
-- Server version: 8.0.19
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int NOT NULL AUTO_INCREMENT,
  `p_img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
