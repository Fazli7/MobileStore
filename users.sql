-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2024 at 09:25 PM
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
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'ErvinJakupi', 'avdijakupi@hotmail.com', '$2y$10$4lnBV1xsNOmNS3cJ7tzOLuLhTiKsz2YEV21aucCFtk8eeI6s/IxL2', 'admin'),
(2, 'ErvinJakupi', 'avdijakupi@hotmail.com', '$2y$10$3U6kJcYdG6WW9NvFjktMZ.Wq51WKYe5Zd2csQoOsaFFJjkoOfhYsS', 'admin'),
(3, 'ErvinJakupi', 'avdijakupi@hotmail.com', '$2y$10$l0zA/vapDCqCQc3PvIwcy.xIJ7BSszMKmlY5pNS/kThCYc.n6uYcW', 'admin'),
(4, 'ErvinJakupi', 'avdijakupi@hotmail.com', '$2y$10$L88OzKBrCuzM.kmHyEKLyeJVH1ir6smhqPvEJr6i6jwOwQnuZ0pAq', 'admin'),
(5, 'ErvinJakupi', 'avdijakupi@hotmail.com', '$2y$10$Lr7nUoMpTECBAfkKUagWU.tJRzhbK3w7WNTiC2WvX4a9Xxq7.qlXm', 'admin'),
(6, 'ErvinJakupi', 'asd1asf@sdgsdgsg.com', '$2y$10$SQ/dt45FUrCrPGSZHqswB.DZECHp2bxJ6dxvg81fayvLtDUYK8.BO', 'admin'),
(7, 'ErvinJakupi', 'asdasf@sdgsdgsg.com', '$2y$10$LECgqywP77tm.JYiIXMaPeMpj4jE3ODJpU75k6m/ROzZkZVKN.lqm', 'admin'),
(8, 'test', 'assdasf@sdgsdgsg.com', '$2y$10$cHAqZWZ6UF/Mprn9GFP5bOYTMTEXHzFwK1CSBKj2RrCZzZgnDib4W', 'admin');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
