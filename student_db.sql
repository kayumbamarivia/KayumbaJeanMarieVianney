-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 02:46 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `gender`) VALUES
(20, 'Akankunda', 'leticia', 'leticia@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'female'),
(21, 'Kayumba', 'John Mary', 'kayumbaj88@gmail.com', '202cb962ac59075b964b07152d234b70', 'Male'),
(22, 'Mugisha', 'Yves', 'shamiinnocent@gmail.com', '202cb962ac59075b964b07152d234b70', 'Male'),
(23, 'Nyirabahire', 'Jeanne', 'jeanne@gmail.com', '6e283ace2b5701cca6df1baf865dc407', 'Male'),
(24, 'Natukunda ', 'Leticia', 'leticia@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'female'),
(25, 'Kayiranga', 'Tristan', 'tristan@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'Male'),
(28, 'keza', 'Ange', 'pil@gmail.com', '202cb962ac59075b964b07152d234b70', 'Male'),
(29, 'Irumva', 'Gideon', 'irumva123@gmail.com', '7c51a5e6ea3214af970a86df89793b19', 'Male'),
(31, 'Aline', 'Sano', 'sano@gmail.com', '0640f9d4fc02c430110b4ceede56ba6a', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
