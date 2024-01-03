-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 09:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electrokart`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `postal code` int(10) NOT NULL,
  `state` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `username`, `address`, `city`, `postal code`, `state`) VALUES
(1, 'Bilen_07', 'Thengana-Perumthuruthy Road', 'Changanacherry', 686105, 'Kerala');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `quantity` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `delivery_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `product_name`, `username`, `quantity`, `total`, `delivery_date`) VALUES
(2, 1, '', 'Bilen_07', 1, 0, '0000-00-00'),
(3, 1, '', 'Bilen_07', 1, 0, '0000-00-00'),
(4, 1, '', 'Bilen_07', 2, 0, '0000-00-00'),
(5, 1, '', 'Bilen_07', 1, 0, '0000-00-00'),
(6, 1, '', 'Bilen_07', 1, 0, '0000-00-00'),
(7, 1, 'Apple Iphone 14', 'Bilen_07', 1, 54599, '0000-00-00'),
(8, 1, 'Apple Iphone 14', 'Bilen_07', 2, 109198, '0000-00-00'),
(9, 1, 'Apple Iphone 14', 'Bilen_07', 2, 109198, '0000-00-00'),
(10, 7, 'Apple Iphone 14', 'Bilen_07', 1, 60000, '0000-00-00'),
(11, 7, 'Apple Iphone 14', 'Bilen_07', 1, 60000, '0000-00-00'),
(12, 7, 'Apple Iphone 14', 'Bilen_07', 33, 1980000, '0000-00-00'),
(13, 7, 'Apple Iphone 14', 'Bilen_07', 33, 1980000, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `category_name`) VALUES
(1, 'Mobile Phones and Accessories'),
(2, 'Gaming Consoles'),
(3, 'PC and Laptops'),
(4, 'Camera and Accessories'),
(5, 'Audio and Home Entertainment'),
(6, 'Wearable Technology'),
(7, 'Home Appliances'),
(8, 'Personal Care Appliances');

-- --------------------------------------------------------

--
-- Table structure for table `ordered_items`
--

CREATE TABLE `ordered_items` (
  `orderitemid` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `address_id` int(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `totalamount` int(30) NOT NULL,
  `paid` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `cat_id` varchar(10) NOT NULL,
  `seller_id` int(10) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_title` varchar(50) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `highlights` longtext NOT NULL,
  `description` varchar(500) NOT NULL,
  `stock` varchar(100) NOT NULL,
  `size` varchar(10) NOT NULL,
  `color` varchar(20) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `inthebox` varchar(10) NOT NULL,
  `connectivity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `seller_id`, `product_name`, `product_title`, `brand`, `price`, `highlights`, `description`, `stock`, `size`, `color`, `weight`, `inthebox`, `connectivity`) VALUES
(1, '1', 0, 'Apple Iphone 14', 'adgiagruigqiugeriuir', '0', '54599', 'rwshrihwrhwliryhw', 'wfohruoswrfhwshrf', '2', ' 15.49 cm', 'Blue', '172g', '0', 'x€dcjll€cj'),
(2, '1', 0, 'Apple Iphone 14', 'adgiagruigqiugeriuir', '0', '54599', 'rwshrihwrhwliryhw', 'wfohruoswrfhwshrf', '2', ' 15.49 cm', 'Blue', '172g', '0', 'x€dcjll€cj'),
(3, '1', 0, 'Apple Iphone 14', 'adgiagruigqiugeriuir', '0', '54599', 'rwshrihwrhwliryhw', 'wfohruoswrfhwshrf', '2', ' 15.49 cm', 'Blue', '172g', '0', 'x€dcjll€cj'),
(4, '1', 0, 'Apple Iphone 14', 'adgiagruigqiugeriuir', '0', '54599', 'rwshrihwrhwliryhw', 'wfohruoswrfhwshrf', '2', ' 15.49 cm', 'Blue', '172g', '0', 'x€dcjll€cj'),
(5, '1', 0, 'Apple Iphone 14', 'jdljfbelsjqfbkvfk', 'Apple', '60000', 'efbvvehfvhvefvh', 'fbqejbejqbfjbejf', '33', '15.1 inch', 'Blue', '172g', '0', 'fng;emf;gl'),
(6, '1', 0, 'Apple Iphone 14', 'jdljfbelsjqfbkvfk', 'Apple', '60000', 'efbvvehfvhvefvh', 'fbqejbejqbfjbejf', '33', '15.1 inch', 'Blue', '172g', '0', 'fng;emf;gl'),
(7, '1', 0, 'Apple Iphone 14', 'jdljfbelsjqfbkvfk', 'Apple', '60000', 'efbvvehfvhvefvh', 'fbqejbejqbfjbejf', '33', '15.1 inch', 'Blue', '172g', '0', 'fng;emf;gl');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `image_id` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image1` mediumblob NOT NULL,
  `image2` mediumblob NOT NULL,
  `image3` mediumblob NOT NULL,
  `image4` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`image_id`, `product_id`, `image1`, `image2`, `image3`, `image4`) VALUES
(2, 7, 0x6970686f6e6531342e6a7067, 0x6970686f6e6531342d332e6a7067, 0x6970686f6e6531342d342e6a7067, '');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(10) NOT NULL,
  `shop_name` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `city` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `postal_code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `shop_name`, `firstname`, `lastname`, `address`, `email`, `password`, `phone`, `city`, `district`, `state`, `postal_code`) VALUES
(1, 'City Electronics', 'Arjun', 'Antony', 'Thengana-Perumthuruthy Road', 'test3@gmail.com', '@Testing123', 8590457685, 'Changanacherry', 'Kottayam', 'Kerala', 686105);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL DEFAULT 1,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `phone`, `password`) VALUES
(1, 'Bilen_07', 'Test', '123', 'test1@gmail.com', 8590457685, '@Testing123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `fk_username` (`username`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `fk_cart_products` (`product_id`),
  ADD KEY `fk_cart_username` (`username`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `ordered_items`
--
ALTER TABLE `ordered_items`
  ADD PRIMARY KEY (`orderitemid`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `fk_ordered_items_users` (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `username` (`username`),
  ADD KEY `fk_orders_address` (`address_id`),
  ADD KEY `fk_product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_categories_cat_id` (`cat_id`),
  ADD KEY `fk_products_seller` (`seller_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `fk_product_id` (`product_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `unique_username_email_phone_password` (`username`,`email`,`phone`,`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `image_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `fk_username` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cart_username` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON UPDATE CASCADE;

--
-- Constraints for table `ordered_items`
--
ALTER TABLE `ordered_items`
  ADD CONSTRAINT `fk_ordered_items_users` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_address` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`),
  ADD CONSTRAINT `fk_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `username` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
