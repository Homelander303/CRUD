-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 09:19 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(200) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `description` varchar(200) NOT NULL,
  `quantity` int(200) NOT NULL,
  `price` int(200) NOT NULL,
  `expire_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `Name`, `description`, `quantity`, `price`, `expire_date`) VALUES
(1, 'speaker', 'this is cool', 2, 233, '2022-10-26 19:03:53'),
(2, 'lighter', 'this is cool', 4, 455, '2022-10-26 19:03:53'),
(3, 'bottle', 'this is cool', 5, 577, '2022-10-26 19:03:53'),
(4, 'cord', 'this is cool', 56, 23, '2022-10-26 19:03:53'),
(5, 'phone', 'this is iced', 2, 2333, '2022-10-26 19:03:53'),
(7, 'cord', 'this is cool', 56, 23, '2022-10-26 00:00:00'),
(8, 'camera', 'this is warm', 12, 42222, '2022-10-26 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
