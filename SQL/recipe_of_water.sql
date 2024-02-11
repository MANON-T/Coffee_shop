-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 01:08 PM
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
(1, '1. Preheat oven to 350°F (175°C). 2. Mix flour, sugar, and baking powder. 3. Add milk, eggs, and vanilla. 4. Pour batter into greased pan. 5. Bake for 30 minutes.'),
(2, '1. Crush graham crackers and mix with melted butter. 2. Press mixture into a pan to form a crust. 3. Mix cream cheese, sugar, and vanilla until smooth. 4. Pour mixture onto crust. 5. Refrigerate for 4 hours.'),
(3, '1. Preheat oven to 375°F (190°C). 2. Mix sliced apples, sugar, and cinnamon. 3. Pour mixture into pie crust. 4. Cover with another pie crust. 5. Bake for 45 minutes.'),
(4, '1. Melt chocolate and butter. 2. Mix with sugar and eggs. 3. Add flour and mix until smooth. 4. Pour batter into greased pan. 5. Bake for 25 minutes.'),
(5, '1. Scoop ice cream into a bowl. 2. Top with whipped cream, chocolate syrup, and a cherry.'),
(6, '1. Preheat oven to 350°F (175°C). 2. Mix flour, sugar, and baking powder. 3. Add milk, eggs, and vanilla. 4. Pour batter into greased pan. 5. Bake for 30 minutes.'),
(7, '1. Crush graham crackers and mix with melted butter. 2. Press mixture into a pan to form a crust. 3. Mix cream cheese, sugar, and vanilla until smooth. 4. Pour mixture onto crust. 5. Refrigerate for 4 hours.'),
(8, '1. Preheat oven to 375°F (190°C). 2. Mix sliced apples, sugar, and cinnamon. 3. Pour mixture into pie crust. 4. Cover with another pie crust. 5. Bake for 45 minutes.'),
(9, '1. Melt chocolate and butter. 2. Mix with sugar and eggs. 3. Add flour and mix until smooth. 4. Pour batter into greased pan. 5. Bake for 25 minutes.'),
(10, '1. Scoop ice cream into a bowl. 2. Top with whipped cream, chocolate syrup, and a cherry.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipe_of_water`
--
ALTER TABLE `recipe_of_water`
  ADD KEY `rec_menuID` (`rec_menuID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
