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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_customerID` int(10) NOT NULL,
  `cus_username` varchar(40) NOT NULL,
  `cus_password` varchar(40) NOT NULL,
  `cus_firstname` varchar(40) NOT NULL,
  `cus_lastname` varchar(40) NOT NULL,
  `cus_phoneNumber` varchar(12) NOT NULL,
  `cus_gender` varchar(255) NOT NULL,
  `cus_birthday` date NOT NULL,
  `cus_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_customerID`, `cus_username`, `cus_password`, `cus_firstname`, `cus_lastname`, `cus_phoneNumber`, `cus_gender`, `cus_birthday`, `cus_email`) VALUES
(1, 'john_doe', 'password123', 'John', 'Doe', '1234567890', 'Male', '1990-01-20', 'john@example.com'),
(2, 'jane_smith', 'pass321', 'jane', 'Smith', '654-845-4545', 'Male', '2015-05-11', 'jane@example.com'),
(3, 'user3', 'password3', 'Alice', 'Johnson', '5551234567', 'Fema', '2010-05-16', 'alice@example.com'),
(4, 'user4', 'pass4', 'Bob', 'Johnson', '5559876543', 'Male', '1998-10-05', 'bob@example.com'),
(5, 'user5', 'pwd5', 'David', 'Brown', '1112223333', 'Male', '1970-09-24', 'david@example.com'),
(6, 'user6', 'pass6', 'Emma', 'Davis', '4445556666', 'Fema', '1989-03-30', 'emma@example.com'),
(7, 'user7', 'pass7', 'Michael', 'Wilson', '7778889999', 'Male', '2003-09-08', 'michael@example.com'),
(8, 'user8', 'pass8', 'Olivia', 'Taylor', '2223334444', 'Fema', '2002-09-08', 'olivia@example.com'),
(9, 'user9', 'pass9', 'James', 'Martinez', '6667778888', 'Male', '2005-08-18', 'james@example.com'),
(10, 'user10', 'pass10', 'Sophia', 'Anderson', '9998887777', 'Fema', '2011-11-11', 'sophia@example.com'),
(11, 'cheffy', 'Heffy', 'Berne', 'Santacrole', '294-525-6931', 'Male', '2024-02-11', 'bsantacrole0@skype.com'),
(12, 'agosz2', 'Adolph', 'chanon', 'lovehee', '549-684-5545', 'Male', '2024-02-11', 'agosz2@cdc.gov');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_customerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_customerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
