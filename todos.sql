-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 24, 2019 at 10:16 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todos`
--

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `activity` varchar(100) NOT NULL,
  `priority` set('high','medium','low') NOT NULL,
  `deadline` date DEFAULT NULL,
  `finished` tinyint(1) DEFAULT 0,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `activity`, `priority`, `deadline`, `finished`, `description`) VALUES
(1, 'Making a website', 'high', '2019-12-06', 1, 'Final test project for \'Praktikum Sistem Basis Data\''),
(2, 'yayAAAAAAAAAA', 'high', '2019-12-03', 1, 'Test123'),
(3, 'qwe', '', '0000-00-00', 1, 'qwe'),
(5, 'qweq', 'high', '0000-00-00', 0, 'qasdzxc'),
(6, 'zxc', 'high', '0000-00-00', 0, 'asd'),
(7, 'qweadsa', 'high', '0000-00-00', 0, 'zxczx'),
(11, 'twqrewq', 'low', '0000-00-00', 0, 'xzcz'),
(12, '123', 'low', '0000-00-00', 0, 'zxc'),
(13, '123', 'medium', '0000-00-00', 0, '213'),
(14, '1', 'low', '2018-07-22', 1, '1'),
(17, 'Test', 'high', '2019-12-02', NULL, '11313'),
(18, 'qwe', 'medium', '1111-12-01', NULL, 'qwe'),
(19, 'yay', 'high', '1131-12-21', NULL, 'Update'),
(20, 'LMAO XD', 'high', '0000-00-00', NULL, '12321321'),
(21, 'qweqwqweqweq', 'low', '2019-12-19', NULL, 'qweqweqwe'),
(22, 'Naon Weh', 'medium', '2019-12-12', NULL, 'qweqwe'),
(23, 'Send haelp', 'low', '2019-12-05', NULL, 'wat ?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
