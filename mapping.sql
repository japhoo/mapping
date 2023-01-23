-- phpMyAdmin SQL Dump
-- version 5.2.0-dev+20220501.56bbdb7fd7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 01:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mapping`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `lga` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL DEFAULT 'Ondo',
  `lt` varchar(20) NOT NULL,
  `lg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `lga`, `state`, `lt`, `lg`) VALUES
(2, 'FUTA, Akure', 'Ondo', '7.29611111', '5.15'),
(3, 'Funbos Consult, Oke-Aro, Akure\r\n', 'Ondo', '7.25211812', '5.19229095'),
(4, 'Orelope Quarters, Awule Rd, Akure\r\n', 'Ondo', '7.266944444', '5.15888889'),
(5, 'Adilewa street, Akure\r\n', 'Ondo', '7.25836785', '5.17619099'),
(6, 'Abayomi Sawmill, Akure\r\n', 'Ondo', '7.25034206', '5.16404327'),
(7, 'Ajipowo street, Off Ondo rd, Akure\r\n', 'Ondo', '7.24496296', '5.16364999'),
(8, 'Temidire street, Akure\r\n', 'Ondo', '7.24234174', '5.18864416'),
(9, 'Swan Hotel, Ilesha - Akure Road, Akure\r\n', 'Ondo', '7.293055556', '5.158055556'),
(10, 'Aiyedun Quarters, Akure \r\n', 'Ondo', '7.261944444', '5.180555556'),
(11, 'Fayanju street, Off Leo, Akure\r\n', 'Ondo', '7.26262331', '5.17031662'),
(12, 'Rasak Oil & Gas, Akure\r\n', 'Ondo', '7.25606433', '5.18437408'),
(13, 'Oja Oba market, Akure\r\n', 'Ondo', '7.25596987', '5.1895665'),
(14, 'FUTA Gate\r\n', 'Ondo', '7.3077919', '5.14064066'),
(15, 'State Industrial Estate, Akure\r\n', 'Ondo', '7.29', '5.166111111'),
(16, 'Stateline Road, Akure\r\n', 'Ondo', '7.28535733', '5.16285237'),
(17, 'Osele Layout, Akure\r\n', 'Ondo', '7.24885735', '5.15743431'),
(18, 'Okuta Elerinla, Akure\r\n', 'Ondo', '7.27388889', '5.15388889'),
(19, 'New Town, Akure\r\n', 'Ondo', '7.22', '5.173055556'),
(20, 'Elizade Junction, Akure\r\n', 'Ondo', '7.31721269', '5.12965132'),
(21, 'Fanibi street, Akure\r\n', 'Ondo', '7.23416866', '5.18375985'),
(22, 'Aficola, off Old Apamu Road, Akure\r\n', 'Ondo', '7.25329683', '5.13538856'),
(23, 'FUTA MOBILE\r\n', 'Ondo', '7.29895456', '5.13724733'),
(24, 'Arowosafe\r\n', 'Ondo', '7.299277778', '5.136916667'),
(25, 'Shagari Estate\r\n', 'Ondo', '7.28349993', '5.19049689'),
(26, 'Ijapo Estate\r\n', 'Ondo', '7.265505882', '5.20527788'),
(27, 'Owo Close Ijapo\r\n', 'Ondo', '7.26480906', '5.21833487'),
(28, 'St. Mary The Virgin\r\n', 'Ondo', '7.27203706', '5.15995156'),
(29, 'Ondo Civil Service Commission\r\n', 'Ondo', '7.23985354', '5.22543535'),
(30, 'Oda Road\r\n', 'Ondo', '7.23277778', '5.1235'),
(31, 'Idiagba Tuntun\r\n', 'Ondo', '7.239111111', '5.204027778');

-- --------------------------------------------------------

--
-- Table structure for table `website_details`
--

CREATE TABLE `website_details` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website_details`
--

INSERT INTO `website_details` (`id`, `name`, `phone`, `email`) VALUES
(1, 'Geo Mapping', '08101079431', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_details`
--
ALTER TABLE `website_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `website_details`
--
ALTER TABLE `website_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
