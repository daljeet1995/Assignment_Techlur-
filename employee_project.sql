-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2024 at 04:16 PM
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
-- Database: `employee_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_management`
--

CREATE TABLE `employee_management` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `joining_date` varchar(255) NOT NULL,
  `relieving_date` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_management`
--

INSERT INTO `employee_management` (`id`, `name`, `dob`, `salary`, `joining_date`, `relieving_date`, `contact`, `status`, `datetime`) VALUES
(2, 'DALJEET SINGH', '2024-01-06', '112212', '2024-01-12', '2024-01-20', '9876543212', 'Inactive', '2024-01-06 13:37:44'),
(5, 'DALJEET SINGH', '2024-01-06', '112212', '2024-01-06', '2024-01-07', '75675677666', 'Active', '2024-01-06 18:50:00'),
(6, 'Lorem1', '2024-01-02', '112212', '2024-01-04', '2024-01-05', '9876543212', 'Inactive', '2024-01-06 19:29:18'),
(7, 'Lorem', '2024-01-05', '112212', '2024-01-03', '2024-01-06', '75675677666', 'Inactive', '2024-01-06 19:32:19'),
(9, 'DALJEET SINGH', '2024-01-06', '112212', '2024-01-05', '2024-01-05', '75675677666', 'Active', '2024-01-06 20:08:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_management`
--
ALTER TABLE `employee_management`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_management`
--
ALTER TABLE `employee_management`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
