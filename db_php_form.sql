-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 11:03 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_php_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `code` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `shop_name` varchar(255) DEFAULT NULL,
  `shop_address` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `password`, `country`, `city`, `address`, `code`, `type`, `shop_name`, `shop_address`) VALUES
(1, 'Pavel', 'Parvej', 'admin@example.com', '202cb962ac59075b964b07152d234b70', 'Bangladesh', 'Dhaka', 'Mohakhali DOHS', 1206, 0, '', ''),
(2, 'Parvej', 'Pavel', 'parvej@example.com', '202cb962ac59075b964b07152d234b70', 'Bangladesh', 'Dhaka', 'Mohakhali', 1206, 1, 'EasyStore', 'Mohakhali DOHS'),
(3, 'Rasel', 'Munshi', 'rasel@example.com', '202cb962ac59075b964b07152d234b70', 'Bangladesh', 'Dhaka', 'Mohakhali', 1206, 2, '', ''),
(7, 'SM', 'Moni', 'moni@example.com', '202cb962ac59075b964b07152d234b70', 'Bangladesh', 'Dhaka', 'Panthopath, Frameget', 1215, 2, '', ''),
(8, 'Ahsan', 'Ullah', 'ahsan@example.com', '202cb962ac59075b964b07152d234b70', 'Bangladesh', 'Chittagong', 'Chittagong', 1620, 2, '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
