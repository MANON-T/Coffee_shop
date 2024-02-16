-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2024 at 06:01 AM
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
(12, 'agosz2', 'Adolph', 'chanon', 'lovehee', '549-684-5545', 'Male', '2024-02-11', 'agosz2@cdc.gov'),
(13, 'dadaf', 'wafwffasfwa', 'ddd', 'ddd', '165-454-5445', 'Male', '2024-02-14', 'john@example.com');

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
(1, 'Chocolate Cake', 19, 100, 'des_1.jpg'),
(2, 'Cheesecake', 18, 120, 'des_2.jpg'),
(3, 'Apple Pie', 19, 110, 'des_3.jpg'),
(4, 'Brownie', 20, 90, 'des_4.jpg'),
(5, 'Ice Cream Sundae', 20, 130, 'des_5.jpg'),
(6, 'Fruit Tart', 18, 140, 'des_6.jpg');

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
(1, 'Apple', 13, 10, 'fru_1.jpg'),
(2, 'Banana', 14, 8, 'fru_2.jpg'),
(3, 'Orange', 19, 12, 'fru_3.jpg'),
(4, 'Grapes', 12, 15, 'fru_4.jpg'),
(5, 'Strawberry', 15, 20, 'fru_5.jpg'),
(6, 'Watermelon', 0, 25, 'fru_6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `ord_detailID` int(10) NOT NULL,
  `ord_productID` int(11) NOT NULL,
  `ord_orderID` int(10) NOT NULL,
  `ord_productName` varchar(255) NOT NULL,
  `ord_option` varchar(255) NOT NULL,
  `ord_quantity` int(3) NOT NULL,
  `ord_price` int(11) NOT NULL,
  `ord_totalPrice` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`ord_detailID`, `ord_productID`, `ord_orderID`, `ord_productName`, `ord_option`, `ord_quantity`, `ord_price`, `ord_totalPrice`) VALUES
(1, 6, 1, 'Watermelon', '', 1, 25, 25),
(2, 1, 2, 'Apple', '', 1, 10, 10),
(3, 0, 3, 'อเมริกาโน่', '', 2, 50, 100),
(4, 0, 3, 'Cheesecake', '', 2, 120, 240),
(5, 0, 3, 'Banana', '', 1, 8, 8),
(6, 0, 3, 'Watermelon', '', 2, 25, 50),
(7, 1, 4, 'อเมริกาโน่', '', 2, 50, 100),
(8, 0, 4, 'Chocolate Cake', '', 2, 100, 200),
(9, 0, 4, 'Apple', '', 2, 10, 20),
(10, 7, 4, 'โกโก้', '', 2, 70, 140),
(11, 1, 5, 'อเมริกาโน่', '', 1, 50, 50),
(12, 4, 5, 'ลาเต้', '', 1, 45, 45),
(13, 1, 6, 'Chocolate Cake', '', 1, 100, 100),
(14, 6, 6, 'Fruit Tart', '', 1, 140, 140),
(15, 6, 6, 'Watermelon', '', 1, 25, 25),
(16, 3, 6, 'Orange', '', 1, 12, 12),
(17, 1, 7, 'อเมริกาโน่', 'Blen', 3, 50, 150),
(18, 4, 7, 'ลาเต้', 'Cold', 1, 45, 45),
(19, 7, 7, 'โกโก้', 'Cold', 1, 70, 70),
(20, 2, 7, 'อเมริกาโน่ส้ม', 'Cold', 1, 40, 40),
(21, 3, 7, 'เอสเพรสโซ่', 'Blen', 1, 60, 60),
(22, 9, 7, 'ชากุหลาบ', 'Hot', 2, 45, 90),
(23, 5, 7, 'Ice Cream Sundae', '-', 1, 130, 130),
(24, 3, 7, 'Apple Pie', '-', 1, 110, 110),
(25, 2, 7, 'Banana', '-', 5, 8, 40),
(26, 6, 7, 'Watermelon', '-', 1, 25, 25),
(27, 4, 8, 'ลาเต้', 'Cold', 4, 45, 180),
(28, 7, 8, 'โกโก้', 'Cold', 1, 70, 70),
(29, 8, 8, 'ชาเขียว', 'Cold', 1, 55, 55),
(30, 1, 9, 'Chocolate Cake', '-', 1, 100, 100),
(31, 1, 10, 'Chocolate Cake', '-', 1, 100, 100),
(32, 1, 11, 'Chocolate Cake', '-', 1, 100, 100),
(33, 1, 12, 'Chocolate Cake', '-', 1, 100, 100),
(34, 1, 13, 'Chocolate Cake', '-', 6, 100, 600),
(35, 1, 0, 'อเมริกาโน่', 'Blen', 2, 50, 100),
(36, 1, 15, 'อเมริกาโน่', 'Blen', 2, 50, 100),
(37, 1, 0, 'อเมริกาโน่', 'Blen', 1, 50, 50),
(38, 3, 0, 'เอสเพรสโซ่', 'Blen', 1, 60, 60),
(39, 1, 22, 'อเมริกาโน่', 'Blen', 1, 50, 50),
(40, 10, 22, 'ชาแอปเปิ้ล', 'Cold', 1, 60, 60),
(41, 1, 23, 'Chocolate Cake', '-', 1, 100, 100),
(42, 1, 24, 'Chocolate Cake', '-', 1, 100, 100),
(43, 1, 25, 'Chocolate Cake', '-', 1, 100, 100),
(44, 1, 26, 'Chocolate Cake', '-', 1, 100, 100),
(45, 1, 27, 'Chocolate Cake', '-', 1, 100, 100),
(46, 3, 27, 'Apple Pie', '-', 1, 110, 110),
(47, 6, 27, 'Fruit Tart', '-', 2, 140, 280),
(48, 2, 28, 'Cheesecake', '-', 2, 120, 240),
(49, 3, 29, 'Orange', '-', 1, 12, 12),
(50, 4, 30, 'Grapes', '-', 1, 15, 15),
(51, 1, 31, 'อเมริกาโน่', 'Blen', 1, 50, 50),
(52, 3, 31, 'เอสเพรสโซ่', 'Blen', 1, 60, 60),
(53, 2, 31, 'อเมริกาโน่ส้ม', 'Cold', 1, 40, 40),
(54, 1, 32, 'อเมริกาโน่', 'Blen', 1, 50, 50),
(55, 3, 32, 'เอสเพรสโซ่', 'Blen', 2, 60, 120),
(56, 4, 33, 'Grapes', '-', 2, 15, 30),
(57, 1, 34, 'อเมริกาโน่', 'Blen', 2, 50, 100);

-- --------------------------------------------------------

--
-- Table structure for table `order_main`
--

CREATE TABLE `order_main` (
  `ord_orderID` int(255) NOT NULL,
  `ord_orderDate` date NOT NULL,
  `ord_customerID` int(10) NOT NULL,
  `ord_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_main`
--

INSERT INTO `order_main` (`ord_orderID`, `ord_orderDate`, `ord_customerID`, `ord_total`) VALUES
(1, '2024-02-14', 0, 230),
(2, '2024-02-14', 0, 160),
(3, '2024-02-14', 0, 398),
(4, '2024-02-14', 0, 460),
(5, '2024-02-14', 1, 95),
(6, '2024-02-14', 10, 277),
(7, '2024-02-16', 0, 760),
(8, '2024-02-16', 6, 305),
(9, '2024-02-16', 0, 100),
(10, '2024-02-16', 0, 100),
(11, '2024-02-16', 1, 100),
(12, '2024-02-16', 2, 100),
(13, '2024-02-16', 0, 600),
(14, '2024-02-16', 2, 100),
(15, '2024-02-16', 2, 100),
(16, '2024-02-16', 0, 160),
(17, '2024-02-16', 0, 160),
(18, '2024-02-16', 2, 160),
(19, '2024-02-16', 0, 210),
(20, '2024-02-16', 0, 210),
(21, '2024-02-16', 2, 110),
(22, '2024-02-16', 3, 110),
(23, '2024-02-16', 0, 100),
(24, '2024-02-16', 0, 100),
(25, '2024-02-16', 0, 100),
(26, '2024-02-16', 0, 100),
(27, '2024-02-16', 3, 490),
(28, '2024-02-16', 2, 240),
(29, '2024-02-16', 0, 12),
(30, '2024-02-16', 0, 15),
(31, '2024-02-16', 12, 150),
(32, '2024-02-16', 2, 170),
(33, '2024-02-16', 2, 30),
(34, '2024-02-16', 2, 100);

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `p_pointID` int(11) NOT NULL,
  `p_customerName` varchar(255) NOT NULL,
  `p_pointTotal` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`p_pointID`, `p_customerName`, `p_pointTotal`) VALUES
(1, 'jane_smith', 0),
(2, 'agosz2', 95400),
(3, 'dadaf', 95175);

-- --------------------------------------------------------

--
-- Table structure for table `recipe_of_water`
--

CREATE TABLE `recipe_of_water` (
  `rec_menuID` int(10) NOT NULL,
  `rec_description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe_of_water`
--

INSERT INTO `recipe_of_water` (`rec_menuID`, `rec_description`) VALUES
(1, 'ทดสอบ-1'),
(2, '1. Preheat oven to 350°F (175°C). 2. Mix flour, sugar, and baking powder. 3. Add milk, eggs, and vanilla. 4. Pour batter into greased pan. 5. Bake for 30 minutes.'),
(3, '1. Preheat oven to 350°F (175°C). 2. Mix flour, sugar, and baking powder. 3. Add milk, eggs, and vanilla. 4. Pour batter into greased pan. 5. Bake for 30 minutes.'),
(4, 'ทดสอบ-2'),
(5, '1. Preheat oven to 350°F (175°C). 2. Mix flour, sugar, and baking powder. 3. Add milk, eggs, and vanilla. 4. Pour batter into greased pan. 5. Bake for 30 minutes.'),
(6, '1. Preheat oven to 350°F (175°C). 2. Mix flour, sugar, and baking powder. 3. Add milk, eggs, and vanilla. 4. Pour batter into greased pan. 5. Bake for 30 minutes.'),
(7, 'ทดสอบ-3'),
(8, '1. Preheat oven to 350°F (175°C). 2. Mix flour, sugar, and baking powder. 3. Add milk, eggs, and vanilla. 4. Pour batter into greased pan. 5. Bake for 30 minutes.'),
(9, '1. Preheat oven to 350°F (175°C). 2. Mix flour, sugar, and baking powder. 3. Add milk, eggs, and vanilla. 4. Pour batter into greased pan. 5. Bake for 30 minutes.'),
(10, '1. Preheat oven to 350°F (175°C). 2. Mix flour, sugar, and baking powder. 3. Add milk, eggs, and vanilla. 4. Pour batter into greased pan. 5. Bake for 30 minutes.');

-- --------------------------------------------------------

--
-- Table structure for table `redeem`
--

CREATE TABLE `redeem` (
  `rd_redeemID` int(11) NOT NULL,
  `rd_customerName` varchar(255) NOT NULL,
  `rd_redeemOrder` varchar(255) NOT NULL,
  `rd_option` varchar(255) NOT NULL,
  `rd_expire` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `redeem`
--

INSERT INTO `redeem` (`rd_redeemID`, `rd_customerName`, `rd_redeemOrder`, `rd_option`, `rd_expire`) VALUES
(1, 'jane_smith', 'อเมริกาโน่', '', '2024-02-22'),
(2, 'jane_smith', 'Apple', '', '2024-02-22'),
(3, 'jane_smith', 'ลาเต้', '', '2024-02-23'),
(4, 'jane_smith', 'อเมริกาโน่', 'Blen', '2024-02-23'),
(5, 'jane_smith', 'ชากุหลาบ', 'Hot', '2024-02-23'),
(6, 'jane_smith', 'อเมริกาโน่ส้ม', 'Cold', '2024-02-23'),
(7, 'jane_smith', 'Apple Pie', '-', '2024-02-23'),
(8, 'jane_smith', 'Banana', '-', '2024-02-23'),
(9, 'jane_smith', 'Apple', '-', '2024-02-23');

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
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_customerID`);

--
-- Indexes for table `dessert_menu`
--
ALTER TABLE `dessert_menu`
  ADD PRIMARY KEY (`dess_menuID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_employeeID`);

--
-- Indexes for table `fruit_menu`
--
ALTER TABLE `fruit_menu`
  ADD PRIMARY KEY (`fruit_menuID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`ord_detailID`);

--
-- Indexes for table `order_main`
--
ALTER TABLE `order_main`
  ADD PRIMARY KEY (`ord_orderID`),
  ADD KEY `ord_customerID` (`ord_customerID`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`p_pointID`);

--
-- Indexes for table `recipe_of_water`
--
ALTER TABLE `recipe_of_water`
  ADD PRIMARY KEY (`rec_menuID`),
  ADD KEY `rec_menuID` (`rec_menuID`);

--
-- Indexes for table `redeem`
--
ALTER TABLE `redeem`
  ADD PRIMARY KEY (`rd_redeemID`);

--
-- Indexes for table `water_menu`
--
ALTER TABLE `water_menu`
  ADD PRIMARY KEY (`w_menuID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_customerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `dessert_menu`
--
ALTER TABLE `dessert_menu`
  MODIFY `dess_menuID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_employeeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fruit_menu`
--
ALTER TABLE `fruit_menu`
  MODIFY `fruit_menuID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `ord_detailID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `order_main`
--
ALTER TABLE `order_main`
  MODIFY `ord_orderID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `p_pointID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recipe_of_water`
--
ALTER TABLE `recipe_of_water`
  MODIFY `rec_menuID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `redeem`
--
ALTER TABLE `redeem`
  MODIFY `rd_redeemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `water_menu`
--
ALTER TABLE `water_menu`
  MODIFY `w_menuID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
