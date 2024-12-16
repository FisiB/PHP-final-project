-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2024 at 10:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `besashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `nr_items` int(10) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `user_id`, `product_id`, `nr_items`, `size`) VALUES
(3, 5, 1, 23, 'large'),
(4, 5, 1, 2, 'medium'),
(5, 5, 1, 2, 'medium'),
(6, 5, 4, 2, 'medium'),
(7, 5, 2, 12, 'large');

-- --------------------------------------------------------

--
-- Table structure for table `iteams`
--

CREATE TABLE `iteams` (
  `id` int(5) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iteams`
--

INSERT INTO `iteams` (`id`, `product_name`, `quantity`, `price`, `image`, `product_desc`) VALUES
(1, 'Work Tools', '103', 10.99, 'vegla.jpeg', 'Work tools are instruments used for performing tasks in various professions, from construction to maintenance and repair. Common work tools include hammers, screwdrivers, drills, pliers, wrenches, and saws.'),
(2, 'Pots', '8', 29.99, 'pots.jpeg', '\nPots are versatile containers used for cooking, gardening, and storage. In the kitchen, they are essential tools for boiling, simmering, and frying food, with various materials like stainless steel, cast iron, and non-stick coatings.'),
(3, 'Glass Cups', '40', 40.99, 'glasscups.jpeg', 'Glass cups are transparent drinking vessels made from glass, commonly used for beverages like water, juice, tea, coffee, and cocktails. They come in various shapes and sizes, from simple, functional designs to ornate, decorative styles.'),
(4, 'Kids Toys', '197', 5.49, 'kidtoys.jpeg', 'Toys are objects designed for play, entertainment, and often education, primarily aimed at children. They come in a wide range of shapes, sizes, and functions, from plush dolls and action figures to building blocks, puzzles, and electronic devices. '),
(5, 'Kitchen Utensils', '100', 35.99, 'kitchenutensils.jpeg', 'Kitchen utensils are essential tools used for preparing, cooking, and serving food. Common examples include knives, spatulas, whisks, tongs, and peelers. '),
(9, 'Razer mouse', '10', 60, 'razer.jpg', 'Mouses are used to make computers easier to use.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `isadmin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `username`, `email`, `password`, `confirmpassword`, `isadmin`) VALUES
(1, 'fis', 'fis', 'fis', 'fisi@gmail.com', '$2y$10$xHmx0W76MLmfyjaUCdt81O1Q8kkkgSdQuW05f2M8NJR5ctYfXVI/a', '$2y$10$v8HYxOY6u5JurPs1zj0XjOXJAc6AvdtErbDIRxPSZ7pCaa/wuYisy', 'true'),
(5, 'besarti', 'besarti', 'besarti', 'besi@gmail.com', '$2y$10$S/6IjrIHkp68WOFg3f1g.Oh/n/Gm2PITGeTewwEc3f77TsQW9nF2K', '$2y$10$7vihtB/nHQ9.GCBkHWscwuEevEPdbkn0pgBvjjk6fkwOYrfH5NRSO', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iteams`
--
ALTER TABLE `iteams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `iteams`
--
ALTER TABLE `iteams`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
