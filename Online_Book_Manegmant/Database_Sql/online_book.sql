-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2025 at 07:35 AM
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
-- Database: `online_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `language` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `confirm` varchar(200) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `gender`, `language`, `email`, `password_hash`, `profile_pic`, `confirm`) VALUES
(14, 'JIt', 'Changdar', 'Female', 'Bengali', 'jitchangdar@gimail.com', '$2y$10$1SXN5/YegJRPaF3ZL.weBeRaeowECo3bKUVKalBybLeyGv9WkZlQK', 'uploads/6776fb72d8b0f_download.jpg', 'jit@#123456'),
(15, 'JIt', 'Changdar', 'Female', 'Bengali', '', '$2y$10$U/Tb3aDeppGFoYczaBkvm.Sr4pT5EQ.cA1UjqFjbO04sf8eqAdNge', 'uploads/6776fc4a9e6dc_download.jpg', ''),
(16, 'shantanu', 'Setuya', 'Male', 'Spanish, ', 'shantanu@gimail.com', '$2y$10$GcR6RJj5EH760RMrGRLFYOSeKTPSr8MeMBj/R0RmGE..1CbkCBXJy', 'uploads/6776fffe5575d_image.jpg', 'shantanu');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
