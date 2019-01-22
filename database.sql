-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 22, 2019 at 11:06 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vanilla`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `age`, `country`, `created_at`, `updated_at`) VALUES
(1, 'John', 'Doe', 'john@example.com', 29, 'USA', '2019-01-20 10:21:59', NULL),
(2, 'Mary', 'Moe', 'mary@example.com', 32, 'UK', '2019-01-20 10:21:59', NULL),
(3, 'Erik', 'Nilsson', 'erik@example.com', 20, 'Sweden', '2019-01-20 10:21:59', NULL),
(4, 'Celal', 'Altun', 'celal@example.com', 26, 'Turkey', '2019-01-20 10:21:59', NULL),
(5, 'Amanda', 'Cerny', 'amanda@example.com', 23, 'Canada', '2019-01-20 10:21:59', NULL),
(18, 'John 2', 'Doe 2', 'john@example.com2', 29, 'USA', '2019-01-22 10:37:10', '2019-01-22 10:37:10'),
(19, 'John 2', 'Doe 2', 'john@example.com3', 29, 'USA', '2019-01-22 10:43:24', '2019-01-22 10:43:24'),
(20, 'John 2', 'Doe 2', 'john@example.com4', 29, 'USA', '2019-01-22 10:50:15', '2019-01-22 10:50:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
