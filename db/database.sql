-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 01:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

-- Membuat database ecoshopper
CREATE DATABASE ecoshopper;

-- Menggunakan database ecoshopper
USE ecoshopper;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecoshopper`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `rating` float DEFAULT 0,
  `description` text DEFAULT NULL,
  `image_urls` text DEFAULT NULL,
  `category` enum('Pakaian','Accesories','Skincare','Furniture','Elektronik') NOT NULL DEFAULT 'Pakaian'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `rating`, `description`, `image_urls`, `category`) VALUES
(1, 'Dobujack Tshirt Stripe Snuffy Blue White Tees', 65000.00, 4.8, 'Kaos lengan pendek berkualitas tinggi dengan warna biru dan putih.', 'img2/hitam.png', 'Pakaian'),
(2, 'Unisex Oversize Hoodie Black Edition', 120000.00, 4.7, 'Hoodie hitam oversize dengan bahan lembut dan nyaman.', 'url_gambar_utama2.jpg, url_gambar_samping2.jpg, url_gambar_belakang2.jpg', 'Pakaian'),
(3, 'Casual Denim Jacket Classic Blue', 175000.00, 4.9, 'Jaket denim klasik berwarna biru dengan desain trendi untuk sehari-hari.', 'url_gambar_utama3.jpg, url_gambar_samping3.jpg, url_gambar_belakang3.jpg', 'Pakaian'),
(4, 'Slim Fit Chinos Pants Khaki', 90000.00, 4.6, 'Celana chinos slim fit warna khaki untuk penampilan semi-formal dan santai.', 'url_gambar_utama4.jpg, url_gambar_samping4.jpg, url_gambar_belakang4.jpg', 'Pakaian'),
(5, 'Round Neck Sweater Soft Pink', 80000.00, 4.8, 'Sweater leher bulat dengan warna soft pink, cocok untuk musim dingin.', 'url_gambar_utama5.jpg, url_gambar_samping5.jpg, url_gambar_belakang5.jpg', 'Pakaian'),
(6, 'Dobujack Tshirt Stripe Snuffy Blue White Tees', 65000.00, 4.8, 'Kaos lengan pendek berkualitas tinggi.', 'url_gambar_utama1.jpg, url_gambar_samping1.jpg', 'Pakaian'),
(7, 'Unisex Oversize Hoodie Black Edition', 120000.00, 4.7, 'Hoodie hitam oversize yang nyaman dipakai.', 'url_gambar_utama2.jpg, url_gambar_belakang2.jpg', 'Pakaian'),
(8, 'Leather Wallet Classic Black', 95000.00, 4.5, 'Dompet kulit hitam klasik untuk pria.', 'url_gambar_utama3.jpg', 'Accesories'),
(9, 'Moisturizer Hydrating Cream 50ml', 150000.00, 4.9, 'Krim pelembap wajah untuk kulit kering.', 'url_gambar_utama4.jpg', 'Skincare'),
(10, 'Minimalist Wooden Coffee Table', 250000.00, 4.6, 'Meja kopi kayu minimalis untuk ruang tamu.', 'url_gambar_utama5.jpg, url_gambar_samping5.jpg', 'Furniture');

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `size_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`size_id`, `product_id`, `size_name`) VALUES
(1, 1, 'S'),
(2, 1, 'M'),
(3, 1, 'L'),
(4, 1, 'XL'),
(5, 1, 'XXL'),
(6, 2, 'M'),
(7, 2, 'L'),
(8, 2, 'XL'),
(9, 2, 'XXL'),
(10, 3, 'S'),
(11, 3, 'M'),
(12, 3, 'L'),
(13, 4, 'S'),
(14, 4, 'M'),
(15, 4, 'L'),
(16, 4, 'XL'),
(17, 5, 'S'),
(18, 5, 'M'),
(19, 5, 'L'),
(20, 5, 'XL'),
(21, 5, 'XXL');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'sultan', 'sultan2@gmail.com', '$2y$10$m6iVQP1nSMguufY.s4ey6ePqftuV9qScpg3FpU9S5ORc/VoZFv.y2', '2024-12-12 14:34:13'),
(2, 'zafran', 'zafran@gmail.com', '$2y$10$IjOBUuS1DRjTaYmS3udr.OXbKstvcuHyxE5D.0iUwk.PM38QoAs8O', '2024-12-12 16:14:18'),
(3, 'reza', 'reza02@gmail.com', '$2y$10$n6bZ2j.IPEkUJ9e6kJBud.0jb1s/vL5HRA9XQESdjvzGfBhCCme9i', '2024-12-16 05:54:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`size_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD CONSTRAINT `product_sizes_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
