-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 09:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `jucies`
--

CREATE TABLE `jucies` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jucies`
--

INSERT INTO `jucies` (`id`, `name`, `price`, `quantity`) VALUES
(1, 'carrot', 30, 1),
(2, 'banana', 50, 1),
(3, 'pinapple', 30, 1),
(4, 'beetroot', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nonvegstarters`
--

CREATE TABLE `nonvegstarters` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nonvegstarters`
--

INSERT INTO `nonvegstarters` (`id`, `name`, `price`, `quantity`) VALUES
(1, 'muttion starters', 200, 1),
(2, 'biriyani starters', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roti`
--

CREATE TABLE `roti` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roti`
--

INSERT INTO `roti` (`id`, `name`, `price`, `quantity`) VALUES
(1, 'rumal', 200, 1),
(2, 'naan', 300, 2);

-- --------------------------------------------------------

--
-- Table structure for table `salaad`
--

CREATE TABLE `salaad` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salaad`
--

INSERT INTO `salaad` (`id`, `name`, `price`, `quantity`) VALUES
(1, 'greeak salaad', 30, 1),
(2, 'fruit salaad', 20, 1),
(3, 'grape salaad', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sweets`
--

CREATE TABLE `sweets` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sweets`
--

INSERT INTO `sweets` (`id`, `name`, `price`, `quantity`) VALUES
(1, 'Double ka meeta', 30, 1),
(2, 'kaja', 20, 1),
(3, 'kaddhu ka keer', 30, 1),
(4, 'halwa', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `veg`
--

CREATE TABLE `veg` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `veg`
--

INSERT INTO `veg` (`id`, `name`, `price`, `quantity`) VALUES
(1, 'veg rice', 30, 1),
(2, 'white rice', 30, 1),
(3, 'zeera rice', 100, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jucies`
--
ALTER TABLE `jucies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nonvegstarters`
--
ALTER TABLE `nonvegstarters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roti`
--
ALTER TABLE `roti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaad`
--
ALTER TABLE `salaad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sweets`
--
ALTER TABLE `sweets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `veg`
--
ALTER TABLE `veg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jucies`
--
ALTER TABLE `jucies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nonvegstarters`
--
ALTER TABLE `nonvegstarters`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roti`
--
ALTER TABLE `roti`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salaad`
--
ALTER TABLE `salaad`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sweets`
--
ALTER TABLE `sweets`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `veg`
--
ALTER TABLE `veg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
