-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 09:19 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `loginid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `loginid`, `name`, `password`) VALUES
(1, 'techvegan', 'Tech Vegan', '534fc3dc50b1573791f6e96d62f18e0280ab4367');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `parents_contact_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adhaar_no` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `correspondence_address` varchar(255) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `academic_year` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `caste` varchar(255) NOT NULL,
  `sub_caste` varchar(255) NOT NULL,
  `ssc_roll` varchar(255) NOT NULL,
  `ssc_marks_obtained` int(11) NOT NULL,
  `ssc_total_marks` int(11) NOT NULL,
  `ssc_percentage` float(3,2) NOT NULL,
  `hssc_roll` varchar(255) NOT NULL,
  `hssc_marks_obtained` int(11) NOT NULL,
  `hssc_total_marks` int(11) NOT NULL,
  `hssc_percentage` float(3,2) NOT NULL,
  `mh_cet_marks` int(11) NOT NULL,
  `jee_marks` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `agent` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `adhaar_no` (`adhaar_no`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
