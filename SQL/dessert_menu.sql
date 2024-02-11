-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 01:07 PM
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
-- Database: `nofk4`
--

-- --------------------------------------------------------

--
-- Table structure for table `dessert_menu`
--

CREATE TABLE `dessert_menu` (
  `dess_menuID` int(10) NOT NULL,
  `dess_menuName` varchar(255) NOT NULL,
  `dess_quantity` int(3) DEFAULT NULL,
  `dess_price` int(3) NOT NULL,
  `dess_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dessert_menu`
--

INSERT INTO `dessert_menu` (`dess_menuID`, `dess_menuName`, `dess_quantity`, `dess_price`, `dess_picture`) VALUES
(1, 'Chocolate Cake', 20, 100, 'des_1.jpg'),
(2, 'Cheesecake', 15, 120, 'des_2.jpg'),
(3, 'Apple Pie', 18, 110, 'des_3.jpg'),
(4, 'Brownie', 25, 90, 'des_4.jpg'),
(5, 'Ice Cream Sundae', 22, 130, 'des_5.jpg'),
(6, 'Fruit Tart', 17, 140, 'des_6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dessert_menu`
--
ALTER TABLE `dessert_menu`
  ADD PRIMARY KEY (`dess_menuID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dessert_menu`
--
ALTER TABLE `dessert_menu`
  MODIFY `dess_menuID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
