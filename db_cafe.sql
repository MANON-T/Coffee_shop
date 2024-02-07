-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 02:50 AM
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
-- Database: `db_cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `cus_username` varchar(255) NOT NULL,
  `cus_password` varchar(255) NOT NULL,
  `cus_email` varchar(255) NOT NULL,
  `cus_fristname` varchar(255) NOT NULL,
  `cus_lastname` varchar(255) NOT NULL,
  `cus_pnum` varchar(10) NOT NULL,
  `cus_gender` varchar(255) NOT NULL,
  `cus_bdate` date NOT NULL,
  `cus_age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cus_username`, `cus_password`, `cus_email`, `cus_fristname`, `cus_lastname`, `cus_pnum`, `cus_gender`, `cus_bdate`, `cus_age`) VALUES
(6, 'Nomanskyyy03', '123', 'fedkaz007.2@gmail.com', 'fname', 'lname', 'pnum', 'gender', '0000-00-00', 0),
(7, 'Nomanskyyy03', '123', 'fedkaz007.2@gmail.com', '', '', '', '', '0000-00-00', 0),
(8, 'Nomanskyyy03', '123', 'fedkaz007.2@gmail.com', '', '', '', '', '0000-00-00', 0),
(9, 'Nomanskyyy03', '123', 'fedkaz007.2@gmail.com', 'nnn', 'tttt', '123', 'male', '2024-01-31', 0),
(10, 'Nomanskyyy03', '123', 'fedkaz007.2@gmail.com', 'nnn', 'tttt', '123', 'male', '2024-01-31', 0),
(11, 'Nomanskyyy03', '123', 'fedkaz007.2@gmail.com', 'nnn', 'tttt', '123', 'other', '2024-01-23', 0),
(12, 'fedkaz', '123', 'fedkaz007.9@gmail.com', 'nnn', 'tttt', '123', 'male', '2024-02-18', 0),
(13, 'fedkaz', '123', 'fedkaz007.9@gmail.com', 'nnn', 'tttt', '123', 'male', '2024-02-18', 0),
(14, 'admin', '5423', 'test@gmail.com', 'nnn', 'tttt', '123', 'female', '2024-02-04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `water_menu`
--

CREATE TABLE `water_menu` (
  `w_menuID ` int(11) NOT NULL,
  `w_name` varchar(255) NOT NULL,
  `w_watertype` varchar(100) NOT NULL,
  `w_hcm` varchar(4) NOT NULL,
  `w_category ` varchar(10) NOT NULL,
  `w_price` int(11) NOT NULL,
  `w_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `water_menu`
--

INSERT INTO `water_menu` (`w_menuID `, `w_name`, `w_watertype`, `w_hcm`, `w_category `, `w_price`, `w_pic`) VALUES
(1, 'lato', '', '', '', 50, ''),
(2, 'capu', '', '', '', 45, ''),
(3, 'capu', '', '', '', 45, ''),
(4, 'capu', '', '', '', 45, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `water_menu`
--
ALTER TABLE `water_menu`
  ADD PRIMARY KEY (`w_menuID `);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `water_menu`
--
ALTER TABLE `water_menu`
  MODIFY `w_menuID ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
