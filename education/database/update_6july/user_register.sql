-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 02:40 PM
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
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(20) NOT NULL,
  `gender` text NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `gender`, `first_name`, `last_name`, `image`, `email`, `password`, `address`, `mobile`) VALUES
(1, 'Mr.', 'Tillu', 'Chauhan', 'pic1642.jpg', 'chauhan@gmail.com', 'tushar', 'G-672/90 east jawahar nagar loni road', 7835906264),
(4, 'Mr.', 'Tillu', 'Chauhan', 'pic1642.jpg', 'chauhan11@gmial.com', 'tushar', 'G-672/90 east jawahar nagar loni road', 7835906264),
(5, 'Mr.', 'Tushar', 'Chauhan', 'pic9187.jpg', 'chauhan1234@gmail.com', '123', 'G-672/90 east jawahar nagar loni road', 7835906264),
(6, 'Mr.', 'Tushar', 'Chauhan', 'pic5423.jpg', 'chauhan111@gmail.com', '123', 'G-672/90 east jawahar nagar loni road', 7835906264),
(8, 'Mr.', 'Tushar', 'Chauhan', 'pic6181.jpg', 'chauhantushar282@gmail.com', 'tushar', 'G-672/90 east jawahar nagar loni road', 7835906264),
(9, 'Mr.', 'Sahil', 'malik', 'pic4666.jpg', 'sahil@gmail.com', '1234', 'G-672/90 east jawahar nagar loni road', 7835906264);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
