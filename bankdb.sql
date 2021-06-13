-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 02:49 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` text NOT NULL,
  `email` varchar(60) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Madhushree T', 'Guna', 3000, '2021-06-12 12:08:10'),
(2, 'Enola', 'Deepika', 7000, '2021-06-13 16:38:29'),
(3, 'Guna', 'Thangavel', 5000, '2021-06-13 16:43:38'),
(4, 'Raahul', 'Azmathunisa', 3600, '2021-06-13 16:49:13'),
(5, 'Madhana', 'Sanjjushri', 15000, '2021-06-13 17:47:44'),
(6, 'Supriya', 'Akshara', 8000, '2021-06-13 17:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Madhushree T', 'madhushreethangavel@gmail.com', 57000),
(2, 'Guna', 'guna1999@gmail.com', 76000),
(3, 'Deepika', 'DeepikaChauhan@gmail.com', 74000),
(4, 'Azmathunisa', 'azmath@gmail.com', 83600),
(5, 'Enola', 'enolaholmes@gmail.com', 27000),
(6, 'Karthik', 'karthik123@gmail.com', 100000),
(7, 'Harry Potter', 'harry@gmailcom', 78000),
(8, 'Thangavel', 'thangavel68@gmail.com', 125000),
(9, 'Raahul', 'raahulsandra@gmail.com', 76400),
(10, 'Akshara', 'akshu@gmail.com', 77000),
(11, 'Sanjjushri', 'sanjju@gmail.com', 94000),
(12, 'Madhana', 'madhana@gmail.com', 155000),
(13, 'Priya', 'pm123@gmail.com', 98000),
(14, 'Supriya', 'supey@gmail.com', 124000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`name`(30));

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
