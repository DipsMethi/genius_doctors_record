-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2019 at 08:33 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

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
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `sub` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `loc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `startTime` datetime NOT NULL,
  `endTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Stores patient appointments';

-- --------------------------------------------------------

--
-- Table structure for table `patient_medical_record`
--

CREATE TABLE `patient_medical_record` (
  `blood_pressure` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_sugar` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ht_rate` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `other` varchar(10000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prescription` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `idNum` bigint(13) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Stores patient''s medical record ';

--
-- Dumping data for table `patient_medical_record`
--

INSERT INTO `patient_medical_record` (`blood_pressure`, `blood_sugar`, `ht_rate`, `other`, `summary`, `prescription`, `idNum`) VALUES
('50', '20', '60', 'Flu', 'Diagnosis complete', 'Med Lemon', 1234567891234),
('20', '25', '68', 'Allergy', 'Weak', 'Allegex', 1234567891234),
('25', '34', '68', 'Allergy', 'Patient', 'Allegex', 1234567891234),
('30', '34', '50', 'Diabetes', 'Diagnosed with Type 2. Patient Coughs excessively.', 'Tier 2 Medicine', 0),
('30', '34', '50', 'Diabetes', 'Diagnosed with Type 2. Patient Coughs excessively.', 'Tier 2 Medicine', 0),
('25', '34', '50', 'Allergy', 'Diagnosis Complete', 'Allegex', 0),
('30', '34', '50', 'Allergy', 'QWERTY', 'YTREWQ', 0),
('30', '34', '50', 'Allergy', 'QWERTY', 'YTREWQ', 0),
('30', '34', '50', 'Allergy', 'QWERTY', 'YTREWQ', 0),
('30', '34', '50', 'Allergy', 'QWERTY', 'YTREWQ', 0),
('25', '34', '50', 'Diabetes', 'Nothing to add', 'Non alcoholic', 0),
('25', '34', '50', 'Diabetes', 'Nothing to add', 'Non alcoholic', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_profile`
--

CREATE TABLE `patient_profile` (
  `fst_name` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lst_name` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pswd` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cel_num` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `idNum` bigint(13) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_profile`
--

INSERT INTO `patient_profile` (`fst_name`, `lst_name`, `pswd`, `cel_num`, `email`, `idNum`) VALUES
('Dipolelo', 'Methi', '1234', '0712345678', 'dips@gmail.com', 1234567891234),
('Josh', 'Altman', '4321', '0761734875', 'josh@gmail.com', 1234567899876),
('David ', 'Letterman', '32536', '0795114017', 'letterman@gmail.com', 7810312345678);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `pFstName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pLstName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pEmail` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pCellNum` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pAddr1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pCity` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pID` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pSOSNum` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gFstName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gLstName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gID` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gCellNum` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gAddr` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gCity` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iPlanType` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `iInsurer` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `iPlcyID` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `iContacts` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`pFstName`, `pLstName`, `pEmail`, `pCellNum`, `pAddr1`, `pCity`, `pID`, `pSOSNum`, `gFstName`, `gLstName`, `gID`, `gCellNum`, `gAddr`, `gCity`, `iPlanType`, `iInsurer`, `iPlcyID`, `iContacts`) VALUES
('David', 'Letterman', 'letterman@gmail.com', '0781234567', 'Willshire', 'New York', '7810312345678', '111', 'Dipolelo', 'Methi', '9401055364088', '0795114017', 'California', 'Baverly Hills', 'Premium', 'OUTSurance', '32536', '0795114017'),
('Peter', 'Thiel', 'peter@gmail.com', '0795114017', 'Los Angela', 'Mabopane', '7810312345678', '0795114017', 'Dipolelo', 'Methi', '1234567891234', '0795114017', 'Lucas Mangope', 'Beverly Hills', 'Starter', 'Auto & General', '32536', '0795114017'),
('David ', 'Letterman', 'letterman@gmail.com', '0795114017', 'Wynburg', 'Sandton', '7810312345678', '111', 'Dipolelo', 'Methi', '1234567891234', '0795114017', 'Wynburg', 'Sandton', 'Premium', 'Auto & General', '32536', '0795114017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_profile`
--
ALTER TABLE `patient_profile`
  ADD PRIMARY KEY (`idNum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
