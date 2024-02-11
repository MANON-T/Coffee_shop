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
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_employeeID` int(10) NOT NULL,
  `emp_username` varchar(30) NOT NULL,
  `emp_password` varchar(50) NOT NULL,
  `emp_employeelevel` varchar(1) NOT NULL,
  `emp_birthday` date NOT NULL,
  `emp_name` varchar(40) NOT NULL,
  `emp_sername` varchar(40) NOT NULL,
  `emp_ID` varchar(13) NOT NULL,
  `emp_address` varchar(200) NOT NULL,
  `emp_tell` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_employeeID`, `emp_username`, `emp_password`, `emp_employeelevel`, `emp_birthday`, `emp_name`, `emp_sername`, `emp_ID`, `emp_address`, `emp_tell`) VALUES
(1, 'john_doe', 'password123', 'A', '1990-05-15', 'john', 'doe', '163111111111', '99 หมู่ที่ 9 ถนน พิษณุโลก-นครสวรรค์ ตำบล ท่าโพธิ์ อำเภอเมืองพิษณุโลก พิษณุโลก 65000', '0654321000'),
(2, 'jane_smith', 'pass321', 'B', '1988-12-20', 'jane', 'smith', '163111111112', '99 หมู่ที่ 9 ถนน พิษณุโลก-นครสวรรค์ ตำบล ท่าโพธิ์ อำเภอเมืองพิษณุโลก พิษณุโลก 65000', '0654321001'),
(3, 'user3', 'password3', 'C', '1995-07-10', 'dome', 'toretto', '163111111113', '99 หมู่ที่ 9 ถนน พิษณุโลก-นครสวรรค์ ตำบล ท่าโพธิ์ อำเภอเมืองพิษณุโลก พิษณุโลก 65000', '0654321002'),
(4, 'user4', 'pass4', 'B', '1993-03-25', 'Tony', 'abubuya', '163111111114', '99 หมู่ที่ 9 ถนน พิษณุโลก-นครสวรรค์ ตำบล ท่าโพธิ์ อำเภอเมืองพิษณุโลก พิษณุโลก 65000', '0654321003'),
(5, 'user5', 'pwd5', 'A', '1991-09-05', 'sil', 'totoro', '163111111115', '99 หมู่ที่ 9 ถนน พิษณุโลก-นครสวรรค์ ตำบล ท่าโพธิ์ อำเภอเมืองพิษณุโลก พิษณุโลก 65000', '0654321004'),
(6, 'user6', 'pass6', 'C', '1992-11-12', 'Omen', 'bakelala', '163111111116', '99 หมู่ที่ 9 ถนน พิษณุโลก-นครสวรรค์ ตำบล ท่าโพธิ์ อำเภอเมืองพิษณุโลก พิษณุโลก 65000', '0654321005'),
(7, 'user7', 'pass7', 'A', '1989-04-17', 'bugayo', 'saka', '163111111117', '99 หมู่ที่ 9 ถนน พิษณุโลก-นครสวรรค์ ตำบล ท่าโพธิ์ อำเภอเมืองพิษณุโลก พิษณุโลก 65000', '0654321006'),
(8, 'user8', 'pass8', 'B', '1994-08-22', 'leonal', 'messi', '163111111118', '99 หมู่ที่ 9 ถนน พิษณุโลก-นครสวรรค์ ตำบล ท่าโพธิ์ อำเภอเมืองพิษณุโลก พิษณุโลก 65000', '0654321007'),
(9, 'user9', 'pass9', 'C', '1997-02-28', 'christano', 'ronaldo', '163111111119', '99 หมู่ที่ 9 ถนน พิษณุโลก-นครสวรรค์ ตำบล ท่าโพธิ์ อำเภอเมืองพิษณุโลก พิษณุโลก 65000', '0654321008'),
(10, 'user10', 'pass10', 'A', '1998-06-03', 'pep', 'b2', '1631111111100', '99 หมู่ที่ 9 ถนน พิษณุโลก-นครสวรรค์ ตำบล ท่าโพธิ์ อำเภอเมืองพิษณุโลก พิษณุโลก 65000', '0654321009');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_employeeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_employeeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
