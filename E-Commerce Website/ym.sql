-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 07:33 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ym`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `productName` text NOT NULL,
  `productPrice` int(11) NOT NULL,
  `product_id` text NOT NULL,
  `productDesc` text NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `productAddingBy` text NOT NULL,
  `productImage1` text NOT NULL,
  `productImage2` text NOT NULL,
  `productImage3` text NOT NULL,
  `productImage4` text NOT NULL,
  `productImage5` text NOT NULL,
  `productSoldNo` mediumint(9) NOT NULL DEFAULT 0,
  `productTotalSold` mediumint(9) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `productName`, `productPrice`, `product_id`, `productDesc`, `productQuantity`, `productAddingBy`, `productImage1`, `productImage2`, `productImage3`, `productImage4`, `productImage5`, `productSoldNo`, `productTotalSold`) VALUES
(7, 'ewdfrgthy', 200, '123456', 'qwerty qwerty', 64, '123456789@gmail.com', 'product_img/152418instagram logo.png', 'product_img/206466instagram logo.png', 'product_img/496473instagram logo.png', 'product_img/300090photo2.jpg', 'product_img/941267instagram logo.png', 17, 0),
(8, 'product 2', 500, '1000', 'product 1 is awsome', 69, 'nagdatt@gmail.com', 'product_img/586071001-facebook.png', 'product_img/303558003-whatsapp.png', 'product_img/248692004-groupme.png', 'product_img/73678009-itunes.png', 'product_img/989298avatar.png', 16, 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` int(11) NOT NULL,
  `razorpay_payment_id` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `totalBill` int(11) NOT NULL,
  `bascket` int(11) NOT NULL,
  `status` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`id`, `razorpay_payment_id`, `date`, `totalBill`, `bascket`, `status`, `address`) VALUES
(1, 'pay_HOkOhl9LjprCsQ', '2021-06-19', 300, 0, 'paid', ''),
(2, 'pay_HOkOhl9LjprCsQ', '2021-06-19', 300, 0, 'paid', ''),
(3, 'pay_HOmJQlCq0da6K4', '2021-06-19', 300, 0, 'paid', ''),
(4, 'pay_HOmJQlCq0da6K4', '2021-06-19', 300, 0, 'paid', ''),
(5, 'pay_HOmNhRHN9KaVB8', '2021-06-19', 6500, 0, 'paid', ''),
(6, 'pay_HOmNhRHN9KaVB8', '2021-06-19', 6500, 0, 'paid', ''),
(7, 'pay_HOmNhRHN9KaVB8', '2021-06-19', 6500, 0, 'paid', ''),
(8, 'pay_HOnEIgpRAnHXiw', '2021-06-19', 253000, 509, 'paid', ''),
(9, 'pay_HOnSKC5Z46dIx0', '2021-06-19', 700, 2, 'paid', 'temprary address'),
(10, 'pay_HOnSKC5Z46dIx0', '2021-06-19', 700, 2, 'paid', 'temprary address'),
(11, 'pay_HOnSKC5Z46dIx0', '2021-06-19', 700, 2, 'paid', 'temprary address'),
(12, 'pay_HOnSKC5Z46dIx0', '2021-06-19', 700, 2, 'paid', 'temprary address'),
(13, 'pay_HOnSKC5Z46dIx0', '2021-06-19', 700, 2, 'paid', 'temprary address'),
(14, 'pay_HOpxOcyrz78u81', '2021-06-19', 700, 2, 'paid', 'wq'),
(15, 'pay_HT5FhcWi03qVh0', '2021-06-30', 4500, 9, 'paid', 'singer'),
(16, 'pay_HT5XIoey7U4HyN', '2021-06-30', 800, 4, 'paid', 'Newyork'),
(17, 'pay_HT5ubZE3XqVhHA', '2021-06-30', 200, 1, 'paid', 'creator address'),
(18, 'pay_HT5ubZE3XqVhHA', '2021-06-30', 200, 1, 'paid', 'creator address'),
(22, 'pay_HT5ubZE3XqVhHA', '2021-06-30', 200, 1, 'paid', 'creator address'),
(23, 'pay_HT5ubZE3XqVhHA', '2021-06-30', 200, 1, 'paid', 'creator address'),
(24, 'pay_HT5ubZE3XqVhHA', '2021-06-30', 200, 1, 'paid', 'creator address'),
(25, 'pay_HT5ubZE3XqVhHA', '2021-06-30', 200, 1, 'paid', 'creator address'),
(26, 'pay_HT5ubZE3XqVhHA', '2021-06-30', 200, 1, 'paid', 'creator address'),
(27, 'pay_HT5ubZE3XqVhHA', '2021-06-30', 200, 1, 'paid', 'creator address'),
(28, 'pay_HT5ubZE3XqVhHA', '2021-06-30', 200, 1, 'paid', 'creator address'),
(29, 'pay_HT5ubZE3XqVhHA', '2021-06-30', 200, 1, 'paid', 'creator address'),
(30, 'pay_HT5ubZE3XqVhHA', '2021-06-30', 200, 1, 'paid', 'creator address'),
(31, 'pay_HT6ga04CZj0PTe', '2021-06-30', 1800, 9, 'paid', 'Belgium'),
(32, 'pay_HT6ga04CZj0PTe', '2021-06-30', 1800, 9, 'paid', 'Belgium'),
(33, 'pay_HT6klxf9f7bCQm', '2021-06-30', 3300, 9, 'paid', 'hello demo'),
(34, 'pay_HT6klxf9f7bCQm', '2021-06-30', 3300, 9, 'paid', 'hello demo'),
(35, 'pay_HT6klxf9f7bCQm', '2021-06-30', 3300, 9, 'paid', 'hello demo'),
(36, 'pay_HT6klxf9f7bCQm', '2021-06-30', 3300, 9, 'paid', 'hello demo'),
(37, 'pay_HT6klxf9f7bCQm', '2021-06-30', 3300, 9, 'paid', 'hello demo'),
(38, 'pay_HT6klxf9f7bCQm', '2021-06-30', 3300, 9, 'paid', 'hello demo'),
(39, 'pay_HT6klxf9f7bCQm', '2021-06-30', 3300, 9, 'paid', 'hello demo'),
(40, 'pay_HT6klxf9f7bCQm', '2021-06-30', 3300, 9, 'paid', 'hello demo'),
(41, 'pay_HT9j6CrGd0g3iS', '2021-06-30', 1500, 6, 'paid', 'gav');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
