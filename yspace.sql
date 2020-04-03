-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2020 at 10:03 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `yspace`
--

CREATE TABLE `yspace` (
  `id` int(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yspace`
--

INSERT INTO `yspace` (`id`, `username`, `email`, `password`, `phone`) VALUES
(4, 'Rahul', 'r@g.com', '$2y$10$gd9DZfr6CMSsA', '9876942484'),
(5, 'Mohit', 'm@g.com', '$2y$10$0dEIjj9jUOl/AAxa/lE6S.DjeKRI0Zxzm3WebCPoMR5zU7zGq.otS', '9876942484'),
(6, 'Mohit', 'mo@g.com', '$2y$10$R8HmCLbLASZ4YtFOkuvPsupkOTLkL/li3QpewSBp4WvGOl9BZt/Xe', '9876942484'),
(7, 'shivam', 's@g.com', '$2y$10$PAwDfon0xtov0a5Y2dG72.0NVB13kMJhTdmoN15Z5/.Z/vwY25Tmq', '9879879879');

-- --------------------------------------------------------

--
-- Table structure for table `yspace1`
--

CREATE TABLE `yspace1` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `rooms` varchar(200) NOT NULL,
  `members` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yspace1`
--

INSERT INTO `yspace1` (`name`, `email`, `rooms`, `members`, `date`, `price`) VALUES
('Mohit', 'm@g.com', '2', '3', '01 01 19', '1500 IN');

-- --------------------------------------------------------

--
-- Table structure for table `yspace2`
--

CREATE TABLE `yspace2` (
  `name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yspace2`
--

INSERT INTO `yspace2` (`name`, `phone`, `email`) VALUES
('Mohit', '9876942484', 'm@g.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yspace`
--
ALTER TABLE `yspace`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `yspace`
--
ALTER TABLE `yspace`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
