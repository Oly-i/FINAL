-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: fdb1030.awardspace.net
-- Generation Time: May 09, 2025 at 02:50 PM
-- Server version: 8.0.32
-- PHP Version: 8.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4585646_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `falconi`
--

CREATE TABLE `falconi` (
  `id` int NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb3_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8mb3_spanish_ci NOT NULL,
  `sucursal` varchar(30) COLLATE utf8mb3_spanish_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8mb3_spanish_ci NOT NULL,
  `cantidad` int NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Dumping data for table `falconi`
--

INSERT INTO `falconi` (`id`, `nombre`, `telefono`, `sucursal`, `tipo`, `cantidad`, `fecha`, `hora`) VALUES
(1, 'Greg Universe', '6563378337', 'Melchor', 'San Valentin', 350, '2025-05-13', '10:30:00'),
(2, 'Olimpia Navarro', '656 884 12', 'Torres', 'Navidad', 7, '2025-05-08', '10:00:00'),
(3, 'Alma Navarrete', '656 884 13', 'Torres', 'Navidad', 200, '2025-05-30', '12:30:00'),
(4, 'Joshua Gomez', '6565555555', 'Las lomas', 'Normal', 2, '2025-05-10', '11:51:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `falconi`
--
ALTER TABLE `falconi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `falconi`
--
ALTER TABLE `falconi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
