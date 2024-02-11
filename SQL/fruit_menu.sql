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
-- Table structure for table `fruit_menu`
--

CREATE TABLE `fruit_menu` (
  `fruit_menuID` int(10) NOT NULL,
  `fruit_menuName` varchar(255) NOT NULL,
  `fruit_quantity` int(3) DEFAULT NULL,
  `fruit_price` int(3) NOT NULL,
  `fruit_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fruit_menu`
--

INSERT INTO `fruit_menu` (`fruit_menuID`, `fruit_menuName`, `fruit_quantity`, `fruit_price`, `fruit_picture`) VALUES
(1, 'Apple', 50, 10, 'fru_1.jpg'),
(2, 'Banana', 60, 8, 'fru_2.jpg'),
(3, 'Orange', 40, 12, 'fru_3.jpg'),
(4, 'Grapes', 30, 15, 'fru_4.jpg'),
(5, 'Strawberry', 45, 20, 'fru_5.jpg'),
(6, 'Watermelon', 20, 25, 'fru_6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruit_menu`
--
ALTER TABLE `fruit_menu`
  ADD PRIMARY KEY (`fruit_menuID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fruit_menu`
--
ALTER TABLE `fruit_menu`
  MODIFY `fruit_menuID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
