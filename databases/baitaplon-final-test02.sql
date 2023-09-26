-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 08:32 PM
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
-- Database: `baitaplon-final-test02`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ItemName` varchar(100) NOT NULL,
  `ItemType` varchar(100) NOT NULL,
  `Specs` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`Specs`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ItemName`, `ItemType`, `Specs`) VALUES
('iPhone 14', 'iPhone', '{ \"id\": \"ip14\", \"display\": \"6,1 inch Super Retina XDR OLED\", \"main_camera\": \"12MP|f1.5 (Wide), 12MP|f2.4 (Ultra Wide)\", \"selfie_camera\": \"12MP|f1.9 (Wide)\", \"chipset\": \"Apple A15 Bionic (5nm)\", \"ram\": \"6GB\", \"storage\": [ { \"size\": \"128GB\", \"price\": \"699$\" }, { \"size\": \"256GB\", \"price\": \"799$\" }, { \"size\": \"512GB\", \"price\": \"899$\" } ], \"color\": [ { \"color\": \"red\", \"hex\": \"#a6b9ca\" }, { \"color\": \"pink\", \"hex\": \"#e5ddea\" }, { \"color\": \"yellow\", \"hex\": \"#fff498\" }, { \"color\": \"black\", \"hex\": \"#323940\" } ], \"battery\": \"3,279mAH\", \"os\": \"IOS 16\", \"imagesource\": [ { \"color\": \"red\", \"source\": \"/baitaplon-final/img-files/products/ip14s/ip14.png\" }, { \"color\": \"pink\", \"source\": \"/baitaplon-final/img-files/products/ip14s/ip14-p.png\" }, { \"color\": \"yellow\", \"source\": \"/baitaplon-final/img-files/products/ip14s/ip14-pr.png\" }, { \"color\": \"black\", \"source\": \"/baitaplon-final/img-files/products/ip14s/ip14-prm.png\" } ] }');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `PhoneNumber` varchar(10) NOT NULL,
  `EmailAddress` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`, `Type`, `Name`, `PhoneNumber`, `EmailAddress`, `Address`) VALUES
('guest01', '12345678', 'customer', 'Seira Parradox', '0123456789', 'fake@email', '119 Baker London England'),
('guest02', '12345678', 'customer', 'Seira Vasta', '0123456780', 'fake@email2', '109 Baker London England');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ItemName`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `PhoneNumber` (`PhoneNumber`),
  ADD UNIQUE KEY `EmailAddress` (`EmailAddress`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
