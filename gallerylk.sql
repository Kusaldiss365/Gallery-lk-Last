-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2023 at 10:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallerylk`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `ad_id` int(100) NOT NULL,
  `adName` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `ad_desc` varchar(500) NOT NULL,
  `img_dir` varchar(256) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ad_id`, `adName`, `category`, `ad_desc`, `img_dir`, `price`) VALUES
(33, 'Night Time', 'Drawing', 'Walking at night', '../uploads/63b6faf6a73628.24244295.jpg', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `ad_id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `ad_id`, `message`) VALUES
(1, 5, ' weff w efwfewfey bwfw wfe'),
(2, 234, ' egerg ergg erg eer gethb jrehgmeytjyrnyr nnrn'),
(3, 235, ' egerg ergg erg eer gethb jrehgmeytjyrnyr nnrner verv ev verve vever vev eve'),
(4, 0, ' kkkkkkkk'),
(5, 2, ' ytui'),
(6, 2, ' ytui');

-- --------------------------------------------------------

--
-- Table structure for table `postads`
--

CREATE TABLE `postads` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(150) NOT NULL,
  `category` varchar(20) NOT NULL,
  `ad_description` varchar(256) NOT NULL,
  `price` int(20) NOT NULL,
  `img_dir` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postads`
--

INSERT INTO `postads` (`ad_id`, `ad_name`, `category`, `ad_description`, `price`, `img_dir`) VALUES
(1, 'eye ', '', '', 0, ''),
(2, 'eye ', '', '', 0, ''),
(3, 'warrior ', '', '', 0, ''),
(5, 'eye ', '', '', 0, ''),
(6, ' ', '', '', 0, ''),
(7, 'prod1 ', '', '', 0, ''),
(8, 'prod1 ', '', '', 0, ''),
(9, 'prod2 ', '', '', 0, ''),
(10, 'name ', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `PhoneNumber` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `firstName`, `lastName`, `PhoneNumber`, `email`, `password`) VALUES
(3, 'kusal22', '', '', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postads`
--
ALTER TABLE `postads`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `PhoneNumber` (`PhoneNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `ad_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `postads`
--
ALTER TABLE `postads`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
