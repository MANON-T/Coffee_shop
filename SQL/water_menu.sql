-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 01:09 PM
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
-- Table structure for table `water_menu`
--

CREATE TABLE `water_menu` (
  `w_menuID` int(10) NOT NULL,
  `w_menuName` varchar(255) NOT NULL,
  `w_waterType` varchar(255) NOT NULL,
  `w_HotColdBlended` varchar(4) NOT NULL,
  `w_price` int(3) NOT NULL,
  `w_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `water_menu`
--

INSERT INTO `water_menu` (`w_menuID`, `w_menuName`, `w_waterType`, `w_HotColdBlended`, `w_price`, `w_picture`) VALUES
(1, 'อเมริกาโน่', 'coffee', 'Blen', 50, 'water_1.jpg'),
(2, 'อเมริกาโน่ส้ม', 'tea', 'Cold', 40, 'water_2.jpg'),
(3, 'เอสเพรสโซ่', 'milk', 'Blen', 60, 'water_3.jpg'),
(4, 'ลาเต้', 'coffee', 'Cold', 45, 'water_4.jpg'),
(5, 'มอคค่า', 'tea', 'Hot', 55, 'water_5.jpg'),
(6, 'คาปูชิโน่', 'milk', 'Blen', 65, 'water_6.jpg'),
(7, 'โกโก้', 'coffee', 'Cold', 70, 'water_7.jpg'),
(8, 'ชาเขียว', 'tea', 'Cold', 55, 'water_8.jpg'),
(9, 'ชากุหลาบ', 'milk', 'Hot', 45, 'water_9.jpg'),
(10, 'ชาแอปเปิ้ล', 'coffee', 'Cold', 60, 'water_10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `water_menu`
--
ALTER TABLE `water_menu`
  ADD PRIMARY KEY (`w_menuID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `water_menu`
--
ALTER TABLE `water_menu`
  MODIFY `w_menuID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
