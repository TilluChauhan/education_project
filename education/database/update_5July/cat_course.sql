-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 01:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat_course`
--

CREATE TABLE `cat_course` (
  `cat_id` int(50) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat_course`
--

INSERT INTO `cat_course` (`cat_id`, `cat_name`, `status`) VALUES
(1, 'ma', 1),
(2, 'ma', 1),
(5, 'Ankit', 1),
(10, 'Rajput', 0),
(11, 'Thakur', 1),
(12, 'Thakur Shahab', 0),
(13, 'Rajput shahab', 1),
(14, 'Tillu Rajput', 1),
(15, 'Tillu Rajput', 1),
(16, 'tushar', 1),
(17, 'Tillu Rajput', 1),
(18, 'Tillu Rajput', 1),
(19, 'Tushar', 1),
(20, 'Tushar', 1),
(21, 'manisha', 1),
(22, 'Manish', 0),
(23, 'Aakansha', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat_course`
--
ALTER TABLE `cat_course`
  ADD PRIMARY KEY (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat_course`
--
ALTER TABLE `cat_course`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
