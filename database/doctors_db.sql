-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2019 at 11:36 AM
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
('25', '34', '50', 'Diabetes', 'Nothing to add', 'Non alcoholic', 0),
('25', '34', '50', 'Diabetes', 'Nothing to add', 'Non alcoholic', 0),
('45', '50', '35', 'Epilespy', 'Patient Neutralized', 'Anaesthesia', 1234567899876);

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
('Dips', 'Methi', '2345', '0712345678', 'dips@gmail.com', 1234567891234),
('Josh', 'Altman', '4321', '0761734875', 'josh@gmail.com', 1234567899876),
('David ', 'Letterman', '32536', '0795114017', 'letterman@gmail.com', 7810312345678),
('Martin', 'Garrix', '5678', '5551167474', 'martin@fmf.com', 8605011234567),
('Dipolelo', 'Methi', '32536', '0795114017', 'dipolelodips@gmail.com', 8901051234567);

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
('David ', 'Letterman', 'letterman@gmail.com', '0795114017', 'Wynburg', 'Sandton', '7810312345678', '111', 'Dipolelo', 'Methi', '1234567891234', '0795114017', 'Wynburg', 'Sandton', 'Premium', 'Auto & General', '32536', '0795114017'),
('Dipolelo', 'Methi', 'dips@gmail.com', '0795114017', 'Rodeo Drive', 'Beverly Hills', '8901051234567', '1123', 'David', 'Hannerman', '1234567891234', '0701015678', 'Wynburg', 'Sandton', 'Premium', 'Auto & General', '32536', '0701015678'),
('Elon', 'Musk', 'elon@tesla.com', '5551167474', '41 Bel Aire Road', 'California', '7810312345678', '12453', 'David', 'Hannerman', '1234567891234', '0701015678', 'Wynburg', 'LA', 'Premium', 'AIG', '9876', '0917114248'),
('Elon', 'Musk', 'elon@tesla.com', '5551167474', '41 Bel Aire Road', 'California', '7810312345678', '98765', 'David', 'Hannerman', '1234567891234', '0701015678', 'Wynburg', 'Sandton', 'Premium', 'AIG', '9876', '0795114017'),
('Martin', 'Garrix', 'martin@fmf.com', '5551167474', '41 Bel Aire Road', 'California', '8605011234567', '67876567', 'David', 'Hannerman', '1234567891234', '0701015678', 'Wynburg', 'Sandton', 'Standard', 'Hosmed', '5678', '0795114017');

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



/****END******/

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 01:36 PM
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
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors_list`
--

CREATE TABLE `doctors_list` (
  `id` int(100) NOT NULL,
  `dLstName` varchar(50) NOT NULL,
  `dSpecial` varchar(50) NOT NULL,
  `dCity` varchar(50) NOT NULL,
  `dAddr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors_list`
--

INSERT INTO `doctors_list` (`id`, `dLstName`, `dSpecial`, `dCity`, `dAddr`) VALUES
(1, 'Falcon', 'Anesthesiologists ', 'Johannesburg', '8th Floor,Braamfontein 2000'),
(2, 'Cidraas', 'Cardiologists ', 'Pretoria', '1231	soshanguve'),
(3, 'Makomene', 'Nephrologists', 'Cape town', '12392 south point'),
(4, 'Malatswane', 'Internists ', 'Durban', '2455 kwa-mashu'),
(5, 'Hlungwane', 'Dermatologists', 'Johhannesburg', '2127 Chris Hani Rd,Soweto'),
(6, 'Franky', 'Gastroenterologists ', 'Polokwane', '143 Pietersburg'),
(7, 'Mhlongo', 'Hematologists ', 'Free State', '2566 midlands'),
(8, 'mashaba', 'dentist', 'Polokwane', '123 5tgbrrvb gbb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors_list`
--
ALTER TABLE `doctors_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors_list`
--
ALTER TABLE `doctors_list`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
 

