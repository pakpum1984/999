-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 01:48 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coding_mysqli_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `price`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'sClass1 FullCourse Bootstrap4 PHP MySQLi', 'FullCourse หลักสูตรที่ออกแบบมาสำหรับมือใหม่\r\nในการเรียนรู้เครื่องมือภาษา HTML5 CSS Bootstrap4 และ PHP MySQLi\r\n', 3290, 3, '2021-11-11 19:44:54', '2021-11-11 19:45:33'),
(2, 'sClass2 Weblog Bootstrap5 + Vuejs SFC + PHP OOP', 'Bootstrap5 + Vuejs Single File Component + PHP OOP ในการสร้าง REST API ขึ้นมาใช้งาน\r\n', 2390, 2, '2021-11-11 19:45:16', '2021-11-11 19:46:04'),
(3, 'PHP Ajax Basic REST API (BasicCourse1)', 'สอนเขียน REST API ด้วย PHP OOP ทั้ง CRUD เพิ่ม ลบ แก้ไข เรียกดูข้อมูล', 1290, 1, '2021-11-11 19:45:51', '2021-11-11 19:45:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
