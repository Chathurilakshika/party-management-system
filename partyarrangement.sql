-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 08:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `partyarrangement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `UserName` varchar(30) NOT NULL,
  `Pasword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UserName`, `Pasword`) VALUES
('admin1', '123'),
('admin2', '456'),
('admin3', '789'),
('admin4', '741'),
('admin5', '852'),
('admin6', '963');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `UserName` varchar(30) NOT NULL,
  `ContactNo` int(10) NOT NULL,
  `Addresses` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `CreatePassword` varchar(10) NOT NULL,
  `ConfirmPassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`UserName`, `ContactNo`, `Addresses`, `Gender`, `CreatePassword`, `ConfirmPassword`) VALUES
('uoc', 123456, 'abc', 'male', 'uoc', 'uoc'),
('Chathuri', 115789854, '112/A, Galle road, Akuressa.', 'female', '753', '753'),
('Chathumi', 117845961, '788/D, Kandy road, Hanwella.', 'female', '951', '951'),
('Ruwani', 111258496, '45/5E, Mathara road, Yatiyana.', 'female', '842', '842'),
('Pramod', 119851365, '34/1, Temple road, Kelaniya.', 'male', '862', '862');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
