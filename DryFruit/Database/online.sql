-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 06:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cno` varchar(15) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `name`, `email`, `cno`, `comment`) VALUES
(1, 'sanjeev', 'sg@gmail.com', '9687524146', 'Not Delivered My Product At a Time '),
(2, 'keyur', 'keyur@gmai.com', '9898787852', 'My Order Is Not Delivered'),
(3, 'Tushar', 'Tushar1@gmail.com', '9256574312', 'my order is not Confirm'),
(4, 'dixit', 'dikshit01@gmail.com', '9988775522', 'my oder is not delivered'),
(5, 'dixit', 'dixit1@gmail.com', '7881054585', 'my order is not Confirm');

-- --------------------------------------------------------

--
-- Table structure for table `dryfruit`
--

CREATE TABLE `dryfruit` (
  `id` int(11) NOT NULL,
  `nm` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `code` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `conti` int(15) NOT NULL,
  `price` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cat` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `photo` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dryfruit`
--

INSERT INTO `dryfruit` (`id`, `nm`, `code`, `conti`, `price`, `cat`, `photo`) VALUES
(1, 'KAJU (CASHEW)', '01', 45, '90', 'DRYFRUIT', 'CASHEW (KAJU).jpg'),
(2, 'COCOCNUT POWDER', '02', 765, '40', 'DRYFRUIT', 'COCONUT POWDER.webp'),
(3, 'ANJIR (FIGS)', '03', 593, '190', 'DRYFRUIT', 'ANJIR (FIGS).jpg'),
(4, 'SPRINKLES', '04', 495, '120', 'DRYFRUIT', 'SPRINKLES.jpg'),
(5, 'JARDALU (APRICOTS)', '05', 786, '170', 'DRYFRUIT', 'JARDALU (APRICOTS).jpg'),
(6, 'DRYFRUIT MILK POWDER', '06', 198, '260', 'DRYFRUIT', 'DRYFRUIT MILK POWDER.jpg'),
(7, 'BADAM (ALMOND)', '07', 581, '140', 'DRYFRUIT', 'ALMONDS ( BADAM).jpg'),
(8, 'KISHMISH (RAISINS)', '08', 295, '40', 'DRYFRUIT', 'KISDHMISH (RAISINS).webp'),
(10, 'AKHROT (WALNUTS)', '10', 302, '100', 'DRYFRUIT', 'WALNUTS (AKHROT).jpg'),
(11, 'PISTA (PISTACHIOS)', '11', 600, '250', 'DRYFRUIT', 'PISTACHIOS (PISTA).jpg'),
(12, 'ELAICHI', '12', 196, '300', 'DRYFRUIT', 'ELAICHI.webp');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cno` varchar(15) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `cno`, `comment`) VALUES
(1, 'sanjeev', 'sg@gmail.com', '9988775522', 'Very Nice....'),
(2, 'keyur', 'keyur@gmai.com', '9898787852', 'Very fast Delivered Product'),
(3, 'ajay', 'ajay@gmail.com', '9687524146', 'nice👍.....'),
(4, 'nikhil', 'nk@gmail.com', '9498587812', 'Fantastic...'),
(5, 'uday', 'uy@gmail.com', '9256574312', 'Nice Product and fastest delivered'),
(6, 'Jeet', 'jeet@gmai.com', '9019053531', 'nice'),
(7, 'Tushar', 'tusharkhanderiya@gmail.com', '7896541230', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `billno` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cno` varchar(11) NOT NULL,
  `date` varchar(500) NOT NULL,
  `amt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `billno`, `name`, `cno`, `date`, `amt`) VALUES
(1, 1001, 'dixit', '6355169264', '18-08-2023', '90'),
(2, 1002, 'dixit', '6355169264', '18-08-2023', '3420');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(11) NOT NULL,
  `mno` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `pass`, `mno`, `email`, `address`, `city`, `district`, `pincode`, `type`) VALUES
(1, 'Viral', '58581', '7862058581', '', '', '', '', '', 'admin'),
(2, 'Jeet', '87350', '8735021505', '', '', '', '', '', 'admin'),
(3, 'dixit', '1212', '6355169264', 'solankidikshit001@gmail.com', '201,vijay Nagar , near m.g road', 'junagadh', 'junagadh', '362001', 'user'),
(4, 'Tushar', '7878', '1234567890', 'tushar@gmail.com', 'gandhi chowk', 'junagadh', 'junagadh', '362001', 'user'),
(5, 'kishan', '4545', '9586600621', 'kishanyadav2093@gmail.com', 'khalilpur road', 'junagadh', 'junagadh', '362001', 'user'),
(6, 'viraj', '1010', '123456789', 'viralpetel5858@gmail.com', 'abcd', 'junagadh', 'junagadh', '362001', ''),
(7, 'viraj gajera', '0000', '9874563210', 'viralgajera477@gmail.com', 'khalilpur road', 'junagadh', 'junagadh', '362001', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `uorder`
--

CREATE TABLE `uorder` (
  `id` int(11) NOT NULL,
  `billno` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `qty` int(15) NOT NULL,
  `unit` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uorder`
--

INSERT INTO `uorder` (`id`, `billno`, `name`, `date`, `photo`, `pname`, `qty`, `unit`, `price`, `status`) VALUES
(1, 1001, 'dixit', '18-08-2023', 'CASHEW (KAJU).jpg', 'KAJU (CASHEW)', 1, '100 GM', '90', 'ok'),
(3, 1002, 'dixit', '18-08-2023', 'CASHEW (KAJU).jpg', 'KAJU (CASHEW)', 1, '100 GM', '90', 'ok'),
(4, 1002, 'dixit', '18-08-2023', 'CASHEW (KAJU).jpg', 'KAJU (CASHEW)', 2, '200 GM', '90', 'ok'),
(5, 1002, 'dixit', '18-08-2023', 'CASHEW (KAJU).jpg', 'KAJU (CASHEW)', 5, '500 GM', '90', 'ok'),
(6, 1002, 'dixit', '18-08-2023', 'CASHEW (KAJU).jpg', 'KAJU (CASHEW)', 10, '1 KG', '90', 'ok'),
(7, 1002, 'dixit', '18-08-2023', 'CASHEW (KAJU).jpg', 'KAJU (CASHEW)', 20, '2 KG', '90', 'ok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dryfruit`
--
ALTER TABLE `dryfruit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uorder`
--
ALTER TABLE `uorder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dryfruit`
--
ALTER TABLE `dryfruit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `uorder`
--
ALTER TABLE `uorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
