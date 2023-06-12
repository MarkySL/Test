-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 04:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petalliesadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `petinfo`
--

CREATE TABLE `petinfo` (
  `id` int(11) NOT NULL,
  `o_name` varchar(50) DEFAULT NULL,
  `phone` bigint(13) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `p_name` varchar(50) DEFAULT NULL,
  `b_day` varchar(50) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `species` varchar(50) DEFAULT NULL,
  `breed` varchar(50) DEFAULT NULL,
  `c_markings` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petinfo`
--

INSERT INTO `petinfo` (`id`, `o_name`, `phone`, `address`, `p_name`, `b_day`, `gender`, `species`, `breed`, `c_markings`) VALUES
(1, 'Keysha', 0, 'Pasay City', 'Akira', '0001-01-01', 'Female', 'Cat', 'Persian', 'None'),
(2, 'Nheil', 0, 'Manila City', 'Sky', '0001-01-01', 'Male', 'Dog', 'Pomeranian', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `phone` bigint(13) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `usertype`, `password`) VALUES
(1, 'admin1', 639354389561, 'petalliesadmin@gmail.com', 'Administrator', 'admin1235'),
(2, 'superadmin1', 637854972143, 'supermin@gmail.com', 'SuperAdministrator', 'superadmin1235');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `petinfo`
--
ALTER TABLE `petinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petinfo`
--
ALTER TABLE `petinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
