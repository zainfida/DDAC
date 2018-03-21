-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2017 at 12:34 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `containerbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingvassel`
--

CREATE TABLE `bookingvassel` (
  `id` int(11) NOT NULL,
  `totalBays` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `companyName` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `vasselId` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookingvassel`
--

INSERT INTO `bookingvassel` (`id`, `totalBays`, `companyName`, `vasselId`) VALUES
(18, '4', '2', '1'),
(19, '3', '3', '1'),
(20, '2', '3', '8'),
(21, '12', '1', '4'),
(22, '4', '1', '1'),
(23, '5', '2', '1'),
(24, '5', '3', '1'),
(25, '34', '5', '7'),
(26, '3', '1', '3'),
(27, '37', '1', '3');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `address`, `contact`) VALUES
(1, 'sdfdssdfsdf', 'sdfd@fdsdsf.sdf', 'sdfsd', '2345678'),
(2, 'Robin', 'sdfd@fdsdsf.sdf', 'sdfsd', '2345678'),
(3, 'New User', 'sdfd@fdsdsf.sdf', 'sdfsd', '2345678'),
(4, 'Test User', 'sdfd@fdsdsf.sdf', 'sdfsd', '2345678'),
(5, 'dfdfg', 'dfgfdgdfg@fdfdg', 'dfgdfg', '3534645');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`, `address`, `contact`, `status`) VALUES
(42, 'robin', 'a@a.a', 'a', 'ADMIN', 'sdfdsf', '243546', 'ACTIVE'),
(44, 'dfgh', 'b@b.b', 'b', 'AGENT', 'dsfdg', '46456571', 'ACTIVE'),
(46, 'cccc', 'a@a.aa', 'a@a.a', 'ADMIN', '24324535', '213452', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `viewroute`
--

CREATE TABLE `viewroute` (
  `id` int(11) NOT NULL,
  `vessel` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `dep_date` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `dep_time` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `dep_from` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `dep_to` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `availableBay` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `viewroute`
--

INSERT INTO `viewroute` (`id`, `vessel`, `dep_date`, `dep_time`, `dep_from`, `dep_to`, `price`, `availableBay`) VALUES
(1, 'V111', '20-Jan-2018', '10:00 a.m', 'Johor Port', 'Port of Tanjung', '2000', '40'),
(2, 'V111', '20-Jan-2018', '10:00 a.m', 'Johor Port', 'Port of Tanjung', '2000', '40'),
(3, 'V111', '20-Jan-2018', '10:00 a.m', 'Johor Port', 'Port of Tanjung', '2000', '0'),
(4, 'V111', '20-Jan-2018', '10:00 a.m', 'Johor Port', 'Port of Tanjung', '2000', '40'),
(5, 'V111', '20-Jan-2018', '10:00 a.m', 'Johor Port', 'Port of Tanjung', '2000', '40'),
(6, 'V111', '20-Jan-2018', '10:00 a.m', 'Johor Port', 'Port of Tanjung', '2000', '40'),
(7, 'V111', '20-Jan-2018', '10:00 a.m', 'Johor Port', 'Port of Tanjung', '2000', '40'),
(8, 'V111', '20-Jan-2018', '10:00 a.m', 'Johor Port', 'Port of Tanjung', '2000', '40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingvassel`
--
ALTER TABLE `bookingvassel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viewroute`
--
ALTER TABLE `viewroute`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingvassel`
--
ALTER TABLE `bookingvassel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `viewroute`
--
ALTER TABLE `viewroute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
