-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 06:55 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `t1_c1_ct` int(100) NOT NULL,
  `t1_c1_final` int(100) NOT NULL,
  `t1_c2_ct` int(100) NOT NULL,
  `t1_c2_final` int(100) NOT NULL,
  `t1_c3_ct` int(100) NOT NULL,
  `t1_c3_final` int(100) NOT NULL,
  `t2_c1_ct` int(100) NOT NULL,
  `t2_c1_final` int(100) NOT NULL,
  `t2_c2_ct` int(100) NOT NULL,
  `t2_c2_final` int(100) NOT NULL,
  `t2_c3_ct` int(100) NOT NULL,
  `t2_c3_final` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `name`, `t1_c1_ct`, `t1_c1_final`, `t1_c2_ct`, `t1_c2_final`, `t1_c3_ct`, `t1_c3_final`, `t2_c1_ct`, `t2_c1_final`, `t2_c2_ct`, `t2_c2_final`, `t2_c3_ct`, `t2_c3_final`) VALUES
(1, 'Student 1', 0, 0, 0, 0, 0, 0, 5, 5, 5, 5, 5, 5),
(2, 'Student 2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'Student 3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Student 4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'Student 5', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
  MODIFY `student_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
