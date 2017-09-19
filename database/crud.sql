-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2017 at 03:33 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `country` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `email_address`, `contact`, `gender`, `country`, `datetime`) VALUES
(1, 'Rubel', 'r@a.com', '01712727574', 'Male', 'Bangladesh', '2017-08-23 10:15:23'),
(2, 'B', 'b@adf.com', '123', 'Male', '', '2017-08-23 10:15:23'),
(13, 'Abc', 'admin@bicri.com', 'asdf', 'Male', '', '2017-08-24 09:25:07'),
(12, 'Abc', 'admin@bicri.com', '34534532', 'Female', '43534', '2017-08-24 09:07:00'),
(6, 'asdf', 'bicri@admi.com', '345234', '', 'asdf', '2017-08-23 11:19:39'),
(7, 'dsfg', 'bicri@admi.com', 'Female', 'asdf', '3245', '2017-08-23 11:21:53'),
(8, 'Abc', 'bicri@admi.com', 'Male', 'dsa', '345', '2017-08-23 11:27:11'),
(9, 'dsfg', 'bicri@admi.com', 'Female', 'asdf', 'asdf', '2017-08-23 11:27:53'),
(10, 'ccde', 'admin@bicri.com', '53245', 'Male', 'asdf', '2017-08-23 11:30:37'),
(11, 'Abc', 'admin@bicri.com', '34534532', 'Female', '2345', '2017-08-24 08:10:34'),
(14, 'Abc', 'admin@bicri.com', '34534532', 'Male', 'asdf', '2017-08-24 09:44:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
