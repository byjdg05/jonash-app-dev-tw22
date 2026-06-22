-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2026 at 05:31 AM
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
-- Database: `dog_registry`
--

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `breed` varchar(100) NOT NULL,
  `age` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `color` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `name`, `breed`, `age`, `address`, `color`, `height`, `weight`) VALUES
(1, 'Atlas', 'Pug', '2 years old', 'Quezon City', 'White', '2 ft', '2.5 kilos'),
(2, 'Kerio', 'Siberian Husky', '3 years old', 'Malabon City', 'Brown', '3 ft', '5.5 kilos'),
(3, 'Zephyr', 'Golden Retriever', '4 years old', 'Makati City', 'Golden', '3.2 ft', '28 kilos'),
(4, 'Oreo', 'Shih Tzu', '1 year old', 'Pasig City', 'White and Brown', '1.5 ft', '4 kilos'),
(5, 'Rumi', 'German Shepherd', '5 years old', 'Manila City', 'Black and Tan', '3.5 ft', '30 kilos'),
(6, 'Lee', 'Beagle', '2 years old', 'Caloocan City', 'Brown and White', '2 ft', '10 kilos'),
(7, 'Cords', 'Aspin', '3 years old', 'Marikina City', 'Brown', '2.5 ft', '12 kilos'),
(8, 'Bruno', 'Labrador Retriever', '4 years old', 'Taguig City', 'Black', '3 ft', '25 kilos'),
(9, 'Nomu', 'Chihuahua', '2 years old', 'Parañaque City', 'Cream', '1 ft', '3.5 kilos'),
(10, 'Daisy', 'Pomeranian', '1 year old', 'Bulacan', 'Orange', '1.2 ft', '3 kilos'),
(11, 'Nikki', 'Aspin', '2 years old', 'Valenzuala City', 'White', '3 ft', '4 kilos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
