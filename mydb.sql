-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 07:05 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `upassword` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `urole` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`id`, `username`, `upassword`, `email`, `urole`) VALUES
(1, 'gunktp1', '12345', 'exesport2546188@gmail.com', 'user'),
(2, 'gunktp2', '12345', 'arrliver@gmail.com', 'user'),
(3, 'gunktp4', '12345', 'xx@gamil.com', 'user'),
(4, 'gunktp3', '123456', 'xx@gmail.com', 'user'),
(5, 'gunktp4', '12345', 'xxx@gmail.com', 'user'),
(6, 'gunktp5', '123456', 'xxxx@gmail.com', 'user'),
(7, 'gunktp6', 'gunktp6', 'exesport254618@gamil.com', 'user'),
(8, 'gunktp7', 'gunktp7', 'gunktp7@gmail.com', 'user'),
(9, 'gunktp8', 'gunktp8', 'gunktp8@gmail.com', 'user'),
(10, 'gunktp20', 'gunktp20', 'gunktp20@gmail.com', 'admin'),
(11, 'gunktp201', 'gunktp20', 'gunktp201@gmai.com', 'admin'),
(12, 'gunktp14', 'gunktp14', 'gunktp14@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`id`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
