-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2019 at 12:35 PM
-- Server version: 5.7.25
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gittigidiyor`
--

-- --------------------------------------------------------

--
-- Table structure for table `beverage_cupboard`
--

CREATE TABLE `beverage_cupboard` (
  `id` int(11) NOT NULL,
  `door` int(11) NOT NULL DEFAULT '0',
  `cover` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beverage_cupboard`
--

INSERT INTO `beverage_cupboard` (`id`, `door`, `cover`) VALUES
(1, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `beverage_rack`
--

CREATE TABLE `beverage_rack` (
  `id` int(11) NOT NULL,
  `cupboard_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `max_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beverage_rack`
--

INSERT INTO `beverage_rack` (`id`, `cupboard_id`, `quantity`, `max_quantity`) VALUES
(1, 1, 16, 20),
(2, 1, 14, 20),
(3, 1, 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `rack_id` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `rack_id`, `type`) VALUES
(2, 2, 1),
(11, 1, 2),
(12, 1, 2),
(13, 1, 2),
(14, 1, 2),
(15, 1, 2),
(16, 1, 2),
(17, 1, 2),
(18, 1, 2),
(19, 1, 1),
(20, 1, 1),
(21, 1, 1),
(22, 1, 1),
(23, 2, 2),
(24, 2, 2),
(25, 2, 2),
(26, 2, 2),
(27, 2, 2),
(28, 2, 2),
(29, 2, 2),
(30, 2, 2),
(31, 2, 2),
(32, 2, 1),
(33, 3, 2),
(34, 3, 2),
(35, 3, 2),
(36, 3, 2),
(37, 3, 2),
(38, 3, 2),
(39, 3, 2),
(40, 3, 2),
(41, 3, 2),
(42, 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beverage_cupboard`
--
ALTER TABLE `beverage_cupboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beverage_rack`
--
ALTER TABLE `beverage_rack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beverage_cupboard`
--
ALTER TABLE `beverage_cupboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beverage_rack`
--
ALTER TABLE `beverage_rack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
