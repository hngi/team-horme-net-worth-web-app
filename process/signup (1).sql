-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 02, 2019 at 10:34 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `networth`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `token_expire` varchar(255) NOT NULL,
  `signup_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`, `confirm_password`, `token`, `token_expire`, `signup_date`) VALUES
(16, 'djdjdj', 'jdjdjdj', 'sat@gmail.com', '888888888888888', '$2y$10$15sGO0zJkASH8uBHvJxtcOke3Mv24vbBLAAXavR90fb07miqQsNo6', '$2y$10$1Iv.dd9UkzIZ/x6XEdzerezkX/5Rjj0PhBBFIg9rofT3wDe9tF1La', '', '', '2019-09-24 21:25:08'),
(17, 'darell', 'dkdkdkd', 'west@gmail.com', '8484848484848484', '$2y$10$hVCLh45r8zWLe3O5lfKHp.yN2PyXb74xJuUgdXPhGVl0fXIxD7nTq', '$2y$10$5E30PEV1ngokSVJYid53q.ZkvIaPTfnWOY7lD0zAcFgBbaIztQSym', 'kefzmduj5k', '2019-09-25 20:04:16', '2019-09-24 22:40:38'),
(18, 'darell', 'west', 'babe@gmail.com', '', '$2y$10$gPEXJJALp03jWAXwYExKBuZ4QIo8zZhXKnsm4aq7fdCvVCkidvE3u', '', '', '', '2019-09-27 06:20:41'),
(19, 'ben', 'ben', 'ben@gmail.com', '', '$2y$10$NOmv4BjxBLBuPZ6viI/r3OUuEZI.V649MRJpBxuasVLqRX7cUCEei', '', '', '', '2019-09-27 08:12:03'),
(20, 'benson', 'ben', 'benson@gmail.com', '', '$2y$10$88F8cHi8nFpAMr4vv0f2Du.8yyN3sLpHQS5vmoCwwK72F6Y81r5ue', '', '', '', '2019-09-27 10:59:22'),
(21, 'benson', 'ben', 'be@gmail.com', '', '$2y$10$B/HYYOSP.vedsv6.xIutieEvpaAut9Q97VeVsGuZ0BZhWXWLJiU5S', '', '', '', '2019-09-27 11:03:38'),
(22, 'benson', 'ben', 'bet@gmail.com', '', '$2y$10$Ye.lNGLiMi8X6gmhPqhzpesaDecWEC3qj80Nm2PQMCfwYT4oryy0K', '', '', '', '2019-09-27 11:06:14'),
(23, 'benson', 'ben', 'dog@gmail.com', '', '$2y$10$ClCRuFZ7IMI9q6qtzGhGQ.p9vQfK71NcDK8Ovl8cfpytwKGE.pfWK', '', '', '', '2019-09-27 11:08:50'),
(24, 'benson', 'ben', 'bus@gmail.com', '', '$2y$10$fn5YueErJaTMa7I1.sKI2e1dCS3dwg7xiNV7l9641cGki3uhdgbjK', '', '', '', '2019-09-27 11:11:42'),
(25, 'darell', 'west', 'dd@gmail.com', '', '$2y$10$H/3lkeqkbkaYQzhXNeugVe.j6fRTIMmz1B5W0hIExG2Xpe8J3M4J2', '', '', '', '2019-09-27 11:12:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
