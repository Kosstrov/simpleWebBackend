-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2020 at 05:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assign2`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `completed`, `updated`, `price`) VALUES
(1, 'Kimchi', 'Kimchi is good for stopping COVID-19', 0, '2020-10-03 04:06:01', '30.00'),
(2, 'Sushi', 'Sushi is so tasty', 1, '2020-10-03 03:57:25', '20.00'),
(3, 'Udon', 'Popular japanese noodle', 0, '2020-10-01 06:10:22', '20.00'),
(4, 'Fried chicken', 'Korean style sweet chicken', 0, '2020-10-01 06:04:34', '40.00'),
(5, 'Kimchi pancake', 'Crispy kimchi pancake', 0, '2020-10-01 06:04:34', '17.00'),
(6, 'Jokbal', 'Pork feet', 0, '2020-10-01 07:28:15', '32.00'),
(7, 'Dakbal', 'Chicken feet', 0, '2020-10-01 07:28:15', '28.00'),
(8, 'Borsch', 'Beet root soup', 0, '2020-10-01 07:28:15', '30.00'),
(9, 'Ravioli', 'Type of pasta comprising a filling enveloped in thin past dough', 0, '2020-10-03 02:09:05', '28.00'),
(10, 'Piroschiki', 'Fried dough food (meat, vegies, seafood', 0, '2020-10-01 07:28:15', '35.00'),
(11, NULL, 'sadf', 1, '2020-10-03 12:26:02', '0.00'),
(12, 'kimchi', 'dfg', 0, '2020-10-03 06:47:35', '0.00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
