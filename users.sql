-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 04:58 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spectrum`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `year` varchar(4) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `mobile`, `branch`, `year`, `domain`, `password`) VALUES
(1, '', '', '', '', '', '', ''),
(2, 'sumanshadangi', 'sumanshadangi@gmail.com', '07735240643', 'Information Technology', '2nd', 'Software', 'd0fb963ff976f9c37fc81fe03c21ea7b'),
(3, 'kiran', 'sumansh234adangi@gmail.com', '07735240643', 'Information Technology', '2nd', 'Software', 'a591024321c5e2bdbd23ed35f0574dde'),
(4, 'chunchun', 'chunchun@gmail.com', '773524064', 'Information Technology', '2nd', 'Software', 'f1981e4bd8a0d6d8462016d2fc6276b3'),
(5, 'jyoti', 'jyoti@gmail.com', '123456789', 'Information Technology', '2nd', 'hardware', 'd0fb963ff976f9c37fc81fe03c21ea7b'),
(6, 'papa', 'papa@gmail.com', '123456789', 'Information Technology', '3rd', 'hardware', 'dd055f53a45702fe05e449c30ac80df9'),
(7, 'Rohan Singh', 'rohan@gmail.com', '8765653342', 'Mechanical', '4th', 'Design', '1437751a77305a0c4c8d44127bd8c285'),
(9, 'varun sharma', 'varun@gmail.com', '9935240643', 'CSE', '1st', 'hardware', '15de21c670ae7c3f6f3f1f37029303c9'),
(10, 'sanjaya shadangi', 'sanjaya@gmail.com', '70449311197', 'electrical', '4th', 'hardware', 'f80bf05527157a8c2a7bb63b22f49aaa'),
(11, 'leela dash', 'leela@gmail.com', '5566224433', 'Instrumentations and electronics', '4th', 'Software', 'd0fb963ff976f9c37fc81fe03c21ea7b'),
(12, 'Ram mahapatra', 'ram@gmail.com', '1122334455', 'fashion technology', '2nd', 'hardware', 'd0fb963ff976f9c37fc81fe03c21ea7b'),
(13, 'sweta mohanty', 'sweta@gmail.com', '4455773422', 'civil', '4th', 'Design', 'd0fb963ff976f9c37fc81fe03c21ea7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
