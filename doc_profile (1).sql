-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 03:00 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctors_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `doc_profile`
--

CREATE TABLE `doc_profile` (
  `id` int(250) NOT NULL,
  `name` text NOT NULL,
  `rate` int(250) NOT NULL,
  `dLstName` varchar(50) NOT NULL,
  `dSpecial` varchar(50) NOT NULL,
  `dCity` varchar(50) NOT NULL,
  `dAddr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_profile`
--

INSERT INTO `doc_profile` (`id`, `name`, `rate`, `dLstName`, `dSpecial`, `dCity`, `dAddr`) VALUES
(1, 'Khan', 2, 'Falcon', 'Anesthesiologists ', 'Johannesburg', '8th Floor,Braamfontein 2000'),
(2, 'Thom', 3, 'Cidraas', 'Cardiologists ', 'Pretoria', '1231	soshanguve'),
(3, 'James', 3, 'Makomene', 'Nephrologists', 'Cape town', '12392 south point'),
(4, 'Makhubela', 4, 'Malatswane', 'Internists ', 'Durban', '2455 kwa-mashu'),
(5, 'Keneilwe', 5, 'Hlungwane', 'Dermatologists', 'Johhannesburg', '2127 Chris Hani Rd,Soweto'),
(6, 'Thabo', 2, 'Franky', 'Gastroenterologists ', 'Polokwane', '143 Pietersburg'),
(7, 'Rinah', 4, 'Mhlongo', 'Hematologists ', 'Free State', '2566 midlands'),
(8, 'Thato', 1, 'mashaba', 'dentist', 'Polokwane', '123 5tgbrrvb gbb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doc_profile`
--
ALTER TABLE `doc_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doc_profile`
--
ALTER TABLE `doc_profile`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
