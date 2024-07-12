-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 07:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `gname` varchar(200) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `class` varchar(10) NOT NULL,
  `shift` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blgroup` varchar(5) NOT NULL,
  `division` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `sname`, `gname`, `contact`, `email`, `address`, `class`, `shift`, `gender`, `blgroup`, `division`) VALUES
(41, 'My Name', 'My Names', '01788529332', 'jhbjakir@gmail.com', 's123', 'fdd,md', 1, 'male', 'A+', 1),
(56, 'Jakir', 'Hossen Ali', '01788529332', 'Jhbjakirfnns@gmail.com', 'Noyapara', 'Nine', 2, 'male', 'A+', 2),
(57, 'My Name', 'My Names', '01788529332', 'jhbjakirfb@gmail.com', 'Hobigonj', 'Nine', 1, 'male', 'A+', 3),
(58, 'Jakir Hossen', 'My Names', '01788529332', 'Jhbjakirfbjk@gmail.com', 'nhjnkjnsdns', 'Nine', 2, 'male', 'A+', 3),
(59, 'Jakir Hossen', 'Abdul Jalil', '01788529332', 'Jhbjakirfbggh@gmail.com', 'Noyapara', 'Nine', 1, 'male', 'A+', 1),
(60, 'Jakiya', 'My Names', '01788529332', 'Jhbjakirfbfsf@gmail.com', 'Noyapra', 'Nine', 1, 'female', 'A+', 1),
(63, 'Aquila Williamson', 'Griffith Mcdowell', '01728704205', 'zater@mailinator.com', 'Recusandae Proident', 'Nostrum om', 1, 'male', 'A+', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
