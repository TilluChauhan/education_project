-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 02:38 PM
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
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(50) NOT NULL,
  `category` int(30) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dimage` varchar(50) NOT NULL,
  `trainer_name` varchar(50) NOT NULL,
  `price` bigint(50) NOT NULL,
  `seat` bigint(50) NOT NULL,
  `start_time` time NOT NULL,
  `closed_time` time NOT NULL,
  `status` tinyint(1) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `category`, `course_name`, `image`, `dimage`, `trainer_name`, `price`, `seat`, `start_time`, `closed_time`, `status`, `description`) VALUES
(1, 1, '07835906264', 'pic22-07-06-02-01-345661263.jpg', 'pic22-07-06-02-01-34565383.jpg', 'awsudhaws', 10, 0, '00:00:00', '00:00:17', 2, '<p>sergrd</p>\r\n'),
(2, 2, 'Tushar', 'pic22-07-06-02-05-073269329.jpg', 'pic22-07-06-02-05-07524133.jpg', 'Rajput', 20, 0, '00:00:00', '00:00:17', 1, '<p>Hel;akslfsrdf</p>\r\n'),
(3, 2, 'Tushar', 'pic22-07-06-02-07-503257678.jpg', 'pic22-07-06-02-07-50579199.jpg', 'Rajput', 20, 0, '18:34:00', '17:35:00', 1, '<p>Hel;akslfsrdf</p>\r\n'),
(4, 3, 'Tillu', 'pic22-07-06-02-10-322172326.jpg', 'pic22-07-06-02-10-32388000.jpg', 'Rajp', 31, 0, '18:34:00', '17:35:00', 1, '<p>Hel;akslfsrdf</p>\r\n'),
(5, 3, 'Tillu', 'pic22-07-06-02-12-008616858.jpg', 'pic22-07-06-02-12-00856211.jpg', 'Rajp', 31, 0, '18:34:00', '17:35:00', 1, '<p>Hel;akslfsrdf</p>\r\n'),
(6, 3, 'Tillu', 'pic22-07-06-02-13-032849228.jpg', 'pic22-07-06-02-13-03700056.jpg', 'Rajp', 31, 0, '18:34:00', '17:35:00', 1, '<p>Hel;akslfsrdf</p>\r\n'),
(7, 3, 'Tillu', 'pic22-07-06-02-14-122970689.jpg', 'pic22-07-06-02-14-12816275.jpg', 'Rajp', 31, 0, '18:34:00', '17:35:00', 1, '<p>Hel;akslfsrdf</p>\r\n'),
(8, 3, 'Tillu', 'pic22-07-06-02-14-418691331.jpg', 'pic22-07-06-02-14-41901190.jpg', 'Rajp', 31, 0, '18:34:00', '17:35:00', 1, '<p>Hel;akslfsrdf</p>\r\n'),
(9, 1, 'Tillu Rajput', 'pic22-07-06-02-16-002520782.jpg', 'pic22-07-06-02-16-00982671.jpg', 'Thakaur', 20, 20, '17:45:00', '17:45:00', 1, '<p>Hello i m</p>\r\n'),
(10, 1, 'Tillu Rajput', 'pic22-07-06-02-16-495910881.jpg', 'pic22-07-06-02-16-49195852.jpg', 'Thakaur', 20, 20, '17:45:00', '17:45:00', 1, '<p>Hello i m</p>\r\n'),
(11, 2, 'Tillu Rajp', 'pic22-07-06-02-17-022966975.jpg', 'pic22-07-06-02-17-02734123.jpg', 'Thakaur', 20, 20, '17:45:00', '17:45:00', 1, '<p>Hello i m</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
