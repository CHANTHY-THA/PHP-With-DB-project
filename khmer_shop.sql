-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 11:56 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khmer_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryname`) VALUES
(1, 'clothes'),
(2, 'food'),
(3, 'electronice');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `username`, `password`, `phone`, `country`, `role`) VALUES
(19, 'CHANTHY THA', '$2y$10$WCLonFgciswItwvXekArf.2XImOZm11lP2izhVtYH9wx/T3OQG4QO', '123', 'Cambodia', 'Admin'),
(25, 'thin', '$2y$10$6GrPvESkBzkFiA3uc103qufXZ65gRRZ8buZfVCncqjkkGHYeNZaVW', '099887766', 'Thailand', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `orderdate` datetime NOT NULL DEFAULT current_timestamp(),
  `customerid` int(11) NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `postDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `productname`, `image`, `price`, `categoryid`, `postDate`) VALUES
(54, 'Sandwich', '1.jpg', 6, 2, '2021-08-20 16:32:53'),
(55, 'chanthy', 'images (1).jpg', 2, 3, '2021-08-20 16:34:50'),
(58, 'Hot dog', 'food.jpg', 3, 2, '2021-08-20 16:40:13'),
(59, 'Procoly', 'veg-1.png', 4, 2, '2021-08-20 16:40:52'),
(60, 'Pizza', 'maxresdefault.jpg', 4, 2, '2021-08-20 16:41:17'),
(61, 'Cocacola', 'images.jpg', 1, 3, '2021-08-20 16:41:40'),
(67, 'T-shirts ', '210614_64-M2296_B_DP_Tops.jpg', 5, 1, '2021-08-21 01:08:58'),
(69, 'Clothes for woman ', '85078780-set-of-stylish-clothes-collection-of-women-s-clothing.jpg', 20, 1, '2021-08-21 01:09:27'),
(72, 'Computer for worker', 'computer.jpg', 500, 3, '2021-08-21 01:11:32'),
(73, 'Real me', 'images (2).jpg', 200, 3, '2021-08-21 01:12:13'),
(74, 'computer for gamming', 'images (5).jpg', 5000, 3, '2021-08-21 01:13:56'),
(75, 'Telephone TV ', 'camera.jpg', 200, 3, '2021-08-21 01:14:52'),
(76, 'Pone', 'phone.jpg', 200, 3, '2021-08-21 21:39:14'),
(77, 'computer for worker', 'banner.jpg', 500, 3, '2021-08-22 16:24:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `customerid` (`customerid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `categoryid` (`categoryid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customers` (`customerid`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `products` (`pro_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
