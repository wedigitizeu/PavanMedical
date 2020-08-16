-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 06, 2019 at 10:48 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quick_intime_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `date` varchar(15) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(60) NOT NULL,
  `blog` text NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog-comments`
--

DROP TABLE IF EXISTS `blog-comments`;
CREATE TABLE IF NOT EXISTS `blog-comments` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `date` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `blog_id` int(20) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

DROP TABLE IF EXISTS `blog_category`;
CREATE TABLE IF NOT EXISTS `blog_category` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `category`, `status`) VALUES
(21, 'Gadget', 1),
(24, 'Electronics', 1),
(25, 'Computer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `date` varchar(25) NOT NULL,
  `productType` varchar(100) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `serviceType` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `book_time` varchar(25) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `date`, `productType`, `productName`, `serviceType`, `name`, `email`, `mobile`, `address`, `book_time`, `status`) VALUES
(56, '15-06-2019', '', '', '', '', '', '', '', '', '1'),
(57, '15-06-2019', '', '', '', '', '', '', '', '', '1'),
(55, '15-06-2019', '', '', '', '', '', '', '', '', '1'),
(53, '10-06-2019', '', '', '', '', '', '', '', '', '0'),
(54, '10-06-2019', '', '', '', '', '', '', '', '', '1'),
(52, '10-06-2019', '', 'Refrigirator', 'Uninstallation', 'Rajesh', 'prakashk827@gmail.com', '7090565991', '456, 1st Main Road, 2nd Phase, 7th Cross, Gokula Extension,Yeshwanthpur\nBengaluru, Karnataka 560022, India', '', '0'),
(51, '10-06-2019', '', 'Refrigirator', 'Uninstallation', 'Rajesh', 'prakashk827@gmail.com', '7090565991', '456, 1st Main Road, 2nd Phase, 7th Cross, Gokula Extension,Yeshwanthpur\nBengaluru, Karnataka 560022, India', '', '1'),
(50, '10-06-2019', 'Not sure', 'Washing Machine', 'Repair', 'prakashk827@gmail.com', 'prakashk827@gmail.om', '7090565991', '456, 1st Main Road, 2nd Phase, 7th Cross, Gokula Extension,Yeshwanthpur\n\nBengaluru, Karnataka 560022, India', '', '1'),
(49, '10-06-2019', 'Not sure', 'Washing Machine', 'Repair', 'prakashk827@gmail.com', 'prakashk827@gmail.om', '7090565991', '456, 1st Main Road, 2nd Phase, 7th Cross, Gokula Extension,Yeshwanthpur\n\nBengaluru, Karnataka 560022, India', '', '1'),
(48, '10-06-2019', 'Not sure', 'Washing Machine', 'Repair', 'prakashk827@gmail.com', 'prakashk827@gmail.om', '7090565991', '456, 1st Main Road, 2nd Phase, 7th Cross, Gokula Extension,Yeshwanthpur\n\nBengaluru, Karnataka 560022, India', '', '1'),
(47, '10-06-2019', 'Not sure', 'Washing Machine', 'Repair', 'prakashk827@gmail.com', 'prakashk827@gmail.om', '7090565991', '456, 1st Main Road, 2nd Phase, 7th Cross, Gokula Extension,Yeshwanthpur\n\nBengaluru, Karnataka 560022, India', '', '1'),
(46, '10-06-2019', 'Not sure', 'Washing Machine', 'Repair', 'prakashk827@gmail.com', 'prakashk827@gmail.om', '7090565991', '456, 1st Main Road, 2nd Phase, 7th Cross, Gokula Extension,Yeshwanthpur\n\nBengaluru, Karnataka 560022, India', '', '0'),
(45, '10-06-2019', 'Not sure', 'Washing Machine', 'Repair', 'prakashk827@gmail.com', 'prakashk827@gmail.om', '7090565991', '456, 1st Main Road, 2nd Phase, 7th Cross, Gokula Extension,Yeshwanthpur\n\nBengaluru, Karnataka 560022, India', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `call_counter`
--

DROP TABLE IF EXISTS `call_counter`;
CREATE TABLE IF NOT EXISTS `call_counter` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `date` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `call_counter`
--

INSERT INTO `call_counter` (`id`, `date`, `time`) VALUES
(1, '05-07-2019', '03:12:59 PM'),
(2, '05-07-2019', '03:15:03 PM'),
(3, '05-07-2019', '03:16:31 PM'),
(4, '05-07-2019', '03:17:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `customer_enquiry`
--

DROP TABLE IF EXISTS `customer_enquiry`;
CREATE TABLE IF NOT EXISTS `customer_enquiry` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `ip_add` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS `enquiry` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `date`, `name`, `email`, `mobile`, `msg`) VALUES
(35, '11-06-2019', 'Rakshith', 'rakshit@gmail.com', '7090565991', 'Hello'),
(33, '10-06-2019', '', '', '', ''),
(34, '11-06-2019', 'Rakshith', 'rakshit@gmail.com', '7090565991', 'Hello'),
(31, '09-06-2019', 'Kavitha', 'kavithak827@gmail.com', '7090565991', 'Hello'),
(32, '09-06-2019', '', '', '', ''),
(30, '09-06-2019', 'Prakash', 'prakashk827@gmail.com', '7090565991', 'Hiii'),
(36, '11-06-2019', 'ss', 'prakashk827@gmail.com', '7090565991', 'Hwlll'),
(37, '24-07-2019', 'tester', 'tester@gmail.com', '7090565991', 'kkk');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `mobile`, `status`) VALUES
(1, 'Quick Intime Service', 'admin', 'admin', 8618696064, 1);

-- --------------------------------------------------------

--
-- Table structure for table `my-earnings`
--

DROP TABLE IF EXISTS `my-earnings`;
CREATE TABLE IF NOT EXISTS `my-earnings` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `day` int(3) NOT NULL,
  `month` int(3) NOT NULL,
  `year` int(6) NOT NULL,
  `credit` varchar(20) NOT NULL,
  `debit` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `reason` text NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

DROP TABLE IF EXISTS `reminder`;
CREATE TABLE IF NOT EXISTS `reminder` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `conv` varchar(3) NOT NULL,
  `note` text NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`id`, `name`, `mobile`, `email`, `date`, `time`, `conv`, `note`, `status`) VALUES
(20, 'Prakash', '7090565991', 'prakashk827@gmail.com', '2019-06-09', '12:22', 'PM', 'Testing', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review_booster`
--

DROP TABLE IF EXISTS `review_booster`;
CREATE TABLE IF NOT EXISTS `review_booster` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `mobile` bigint(25) NOT NULL,
  `status` int(2) NOT NULL,
  `sms_counter` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_booster`
--

INSERT INTO `review_booster` (`id`, `mobile`, `status`, `sms_counter`) VALUES
(20, 9110289543, 1, '1'),
(19, 7090565991, 1, '1'),
(18, 7090565991, 1, '1'),
(17, 7090565991, 1, '1'),
(16, 7090565991, 1, '1'),
(15, 7090565991, 1, '1'),
(14, 7090565991, 1, '1'),
(13, 7090565991, 1, '1'),
(21, 9945959278, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

DROP TABLE IF EXISTS `visitor`;
CREATE TABLE IF NOT EXISTS `visitor` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lon` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `date`, `time`, `ip`, `city`, `region`, `country`, `lat`, `lon`) VALUES
(21, '03-07-2019', '03:22:15 PM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(20, '03-07-2019', '03:22:03 PM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(19, '03-07-2019', '03:21:19 PM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(18, '03-07-2019', '03:21:04 PM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(16, '25-06-2019', '06:27:38 PM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(17, '27-06-2019', '11:04:15 AM', '157.45.212.156', '', '', '', '', ''),
(15, '25-06-2019', '06:27:18 PM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(14, '25-06-2019', '06:26:55 PM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(22, '03-07-2019', '03:22:35 PM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(23, '03-07-2019', '03:23:48 PM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(24, '03-07-2019', '03:24:36 PM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(25, '03-07-2019', '03:27:32 PM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(26, '03-07-2019', '03:43:47 PM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(27, '04-07-2019', '09:39:59 AM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(28, '05-07-2019', '09:16:47 AM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(29, '05-07-2019', '09:16:47 AM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(30, '08-07-2019', '07:35:52 AM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(31, '08-07-2019', '07:53:50 AM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(32, '08-07-2019', '07:53:51 AM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(33, '08-07-2019', '07:54:45 AM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(34, '08-07-2019', '07:55:58 AM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(35, '08-07-2019', '07:58:11 AM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(36, '08-07-2019', '07:58:31 AM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(37, '08-07-2019', '07:58:58 AM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(38, '08-07-2019', '07:59:44 AM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(39, '08-07-2019', '08:01:03 AM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(40, '08-07-2019', '08:01:56 AM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(41, '08-07-2019', '08:25:26 AM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(42, '09-07-2019', '06:20:59 PM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833'),
(43, '24-07-2019', '01:41:22 PM', '157.45.212.156', '', '', '', '', ''),
(44, '24-07-2019', '01:42:16 PM', '157.45.212.156', '', '', '', '', ''),
(45, '24-07-2019', '01:43:27 PM', '157.45.212.156', '', '', '', '', ''),
(46, '24-07-2019', '01:48:30 PM', '157.45.212.156', '', '', '', '', ''),
(47, '25-07-2019', '02:53:21 PM', '157.45.212.156', '', '', '', '', ''),
(48, '26-07-2019', '07:57:54 AM', '157.45.212.156', '', '', '', '', ''),
(49, '26-07-2019', '08:03:22 AM', '157.45.212.156', '', '', '', '', ''),
(50, '26-07-2019', '08:05:57 AM', '157.45.212.156', '', '', '', '', ''),
(51, '26-07-2019', '08:07:43 AM', '157.45.212.156', '', '', '', '', ''),
(52, '01-08-2019', '05:31:52 PM', '157.45.212.156', '', '', '', '', ''),
(53, '01-08-2019', '05:32:19 PM', '157.45.212.156', '', '', '', '', ''),
(54, '01-08-2019', '05:32:43 PM', '157.45.212.156', '', '', '', '', ''),
(55, '01-08-2019', '05:32:50 PM', '157.45.212.156', '', '', '', '', ''),
(56, '01-08-2019', '05:33:03 PM', '157.45.212.156', '', '', '', '', ''),
(57, '10-08-2019', '06:18:11 AM', '157.45.212.156', 'Bengaluru', 'Karnataka', 'India', '12.9833', '77.5833');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

DROP TABLE IF EXISTS `visitors`;
CREATE TABLE IF NOT EXISTS `visitors` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `ip` text NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
