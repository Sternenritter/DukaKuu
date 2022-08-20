-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD
-- Host: localhost
-- Generation Time: Aug 18, 2022 at 01:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6
=======
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 05:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13
>>>>>>> a14f3f9f21495e90f10f74f7198c9d29a3769263

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dukakuu`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
<<<<<<< HEAD
  `user_id` int(11) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `status` text NOT NULL
=======
  `total` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
>>>>>>> a14f3f9f21495e90f10f74f7198c9d29a3769263
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `cart_item_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
=======
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `item_id` int(11) NOT NULL,
  `cart_id` int(11) DEFAULT NULL,
>>>>>>> a14f3f9f21495e90f10f74f7198c9d29a3769263
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
<<<<<<< HEAD
  `category_name` varchar(20) NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0'
=======
  `category_name` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL
>>>>>>> a14f3f9f21495e90f10f74f7198c9d29a3769263
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`user_id`, `username`, `first_name`, `last_name`, `email`, `password`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'dummy_user', 'Dummy', 'User', 'dummyuser@gmail.com', 'DummyUser123', '0', '2022-08-16 09:18:06', '2022-08-16 09:18:06'),
(4, 'cypriankoech', 'Cyprian', 'Koech', 'cypriankibet46@gmail.com', '$2y$10$nf/vrvYkYq0s9Z3J8L243.RGw6RIbwOz3uE/6Wm3h6sEieRRDUUc.', '0', '2022-08-16 09:37:12', '2022-08-16 09:37:12'),
(5, 'qehecyhivo', 'Martha', 'Gonzales', 'rupuq@mailinator.com', '$2y$10$Px6m0rAQTwVWAb/UANrY2exCtwSpZ/WUKysLlixME.T3Rl0bHHSFe', '0', '2022-08-16 10:09:03', '2022-08-16 10:09:03'),
(6, 'syxyr', 'Nelle', 'Joyce', 'hunyhubuto@mailinator.com', '$2y$10$.dSL1.H4HF9Rp74ZjiK2iuONy4fGcBquBR81Nsrhylh3MedosAqMG', '0', '2022-08-16 16:03:50', '2022-08-16 16:03:50'),
(7, 'gysor', 'Patricia', 'Harvey', 'funocote@mailinator.com', '$2y$10$RzV/iJBxQwIZp07gd1AgDupZJWbYST599Su/2rUfA4r2FwUynq4bW', '0', '2022-08-16 18:58:02', '2022-08-16 18:58:02'),
(8, 'tilidydalu', 'Jana', 'Finley', 'fixuzojaho@mailinator.com', '$2y$10$Y5IbK8KUiLEeM1nOU1wogOh/0BbgG2BDqj4cvvadJcJyy1CRKpy/i', '0', '2022-08-16 19:01:10', '2022-08-16 19:01:10'),
(9, 'ryheluziwi', 'Penelope', 'Faulkner', 'lolovocu@mailinator.com', '$2y$10$OKbC3W2AZ0TvHeAb7zIH4OMrW2/RwrWFDIVy2o/dC.N1guKE2eFGC', '0', '2022-08-16 19:02:56', '2022-08-16 19:02:56');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_description` varchar(255) DEFAULT NULL,
  `category` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` varchar(200) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image_path` varchar(200) NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
<<<<<<< HEAD
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`cart_item_id`),
  ADD KEY `fk_cart_id` (`cart_id`),
  ADD KEY `fk_product_id` (`product_id`);
=======
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `cart_id` (`cart_id`);
>>>>>>> a14f3f9f21495e90f10f74f7198c9d29a3769263

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
<<<<<<< HEAD
  ADD KEY `fk_category` (`category`);
=======
  ADD KEY `category_id` (`category_id`);
>>>>>>> a14f3f9f21495e90f10f74f7198c9d29a3769263

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
<<<<<<< HEAD
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `cart_item_id` int(11) NOT NULL AUTO_INCREMENT;
=======
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;
>>>>>>> a14f3f9f21495e90f10f74f7198c9d29a3769263

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
<<<<<<< HEAD
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
=======
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
>>>>>>> a14f3f9f21495e90f10f74f7198c9d29a3769263

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
<<<<<<< HEAD
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `customers` (`user_id`);

--
-- Constraints for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD CONSTRAINT `fk_cart_id` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`),
  ADD CONSTRAINT `fk_product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
=======
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `customers` (`user_id`);

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`);
>>>>>>> a14f3f9f21495e90f10f74f7198c9d29a3769263

--
-- Constraints for table `product`
--
ALTER TABLE `product`
<<<<<<< HEAD
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category`) REFERENCES `category` (`category_id`);
=======
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
>>>>>>> a14f3f9f21495e90f10f74f7198c9d29a3769263
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
