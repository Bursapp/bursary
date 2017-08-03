-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2017 at 04:24 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bursapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `org_tbl`
--

CREATE TABLE `org_tbl` (
  `id` int(11) NOT NULL,
  `org_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org_tbl`
--

INSERT INTO `org_tbl` (`id`, `org_name`) VALUES
(1, 'The Rockefeller Foundation'),
(2, 'Prof Muriuki');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'kefa', 'hamisi', 'hamis@gmail.com', 'ee9377371c488408c0abfc4f9ae870c2'),
(2, 'kefa', 'hamisi', 'hamis@gmail.com', 'ee9377371c488408c0abfc4f9ae870c2'),
(3, 'kefa', 'hamisi', 'hamis@gmail.com', 'ee9377371c488408c0abfc4f9ae870c2'),
(4, 'kefa', 'hamisi', 'hamis@gmail.com', 'ee9377371c488408c0abfc4f9ae870c2'),
(5, 'Kevin', 'Nyanducha', 'Kevin@gmail.com', 'd9ed1409232bc32dc4ead20c870c2167'),
(6, 'Kevin', 'Nyanducha', 'Kevin@gmail.com', '65ba841e01d6db7733e90a5b7f9e6f80'),
(7, 'Brenda', 'Odero', 'Brenda@gmail.com', 'de14a9a40f860098b0b3c35d24627395');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `org_tbl`
--
ALTER TABLE `org_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `org_tbl`
--
ALTER TABLE `org_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
