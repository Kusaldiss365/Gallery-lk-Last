-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 06:30 AM
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
  `price` int(100) NOT NULL,
  `user_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ad_id`, `adName`, `category`, `ad_desc`, `img_dir`, `price`, `user_id`) VALUES
(34, 'Warrior', 'Sculptures', 'Roman Warrior', '../uploads/63bac1b0f017e6.95408376.jpg', 3000, NULL),
(35, 'Eye', 'Drawing', 'Drawing of an Eye', '../uploads/63bac1ef93cc34.43128920.jpg', 1000, NULL),
(36, 'Hand Drawn', 'Photographs', 'Photo of drawings', '../uploads/63bacc6f7c2206.82762800.jpeg', 500, NULL),
(37, 'Race Car', 'Photographs', 'Photo of a race car', '../uploads/63baccae90b6e4.48726636.jpg', 800, NULL),
(38, 'Race Car 2', 'Photographs', 'Cars', '../uploads/63bb8e2c867a27.49361414.jpg', 2000, NULL);

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
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `user_id` int(10) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `usertype` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`user_id`, `firstname`, `lastname`, `username`, `phonenumber`, `email`, `password`, `usertype`) VALUES
(1, 'kusal', 'dissanayake', 'kusal22', '0768871660', 'kusaldissanayake2@gmail.com', 'Kusal123', 0),
(2, 'Sandun', 'Perera', 'Sandun1', '0768871690', 'sandunper@gmail.com', 'Sandun123', 0);

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
  ADD PRIMARY KEY (`ad_id`),
  ADD KEY `user_id` (`user_id`);

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
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`user_id`);

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
  MODIFY `ad_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userdetails` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
