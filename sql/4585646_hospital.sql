-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: fdb1030.awardspace.net
-- Generation Time: May 09, 2025 at 02:51 PM
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
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `CodigoArea` int NOT NULL,
  `Hospital` varchar(30) COLLATE utf32_spanish_ci DEFAULT NULL,
  `ZonaDeRiesgo` varchar(15) COLLATE utf32_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`CodigoArea`, `Hospital`, `ZonaDeRiesgo`) VALUES
(1, 'AMERICAS', 'BAJO'),
(100, 'TRIUNFO', 'MEDIO'),
(105, 'SENDERO', 'ALTO');

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `id` int NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb3_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8mb3_spanish_ci NOT NULL,
  `curp` varchar(18) COLLATE utf8mb3_spanish_ci NOT NULL,
  `imss` int NOT NULL,
  `foto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Dumping data for table `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `apellido`, `curp`, `imss`, `foto`) VALUES
(2, 'Amelie', 'Maheshwaran', '', 0, ''),
(3, 'Anali', 'Watterson', '', 0, ''),
(4, 'Gubmall ', 'Watterson', '', 0, ''),
(9, 'Paulina ', 'Mendez', '', 0, ''),
(10, 'OLIMPIA', 'NAVARRO', '', 0, '');

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

-- --------------------------------------------------------

--
-- Table structure for table `farmacia`
--

CREATE TABLE `farmacia` (
  `Folio` int NOT NULL,
  `Medicamento` varchar(30) COLLATE utf32_spanish_ci DEFAULT NULL,
  `Cantidad` varchar(30) COLLATE utf32_spanish_ci DEFAULT NULL,
  `IdEmpleado` int DEFAULT NULL,
  `IdPaciente` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Dumping data for table `farmacia`
--

INSERT INTO `farmacia` (`Folio`, `Medicamento`, `Cantidad`, `IdEmpleado`, `IdPaciente`) VALUES
(2, 'PARACETAMOL', '3', 324501, 346),
(201, 'PENICILINA', '100ML', 324501, 346),
(324570, 'PARACETAMOL', '650MG', 219630, 12);

-- --------------------------------------------------------

--
-- Table structure for table `paciente`
--

CREATE TABLE `paciente` (
  `IdPaciente` int NOT NULL,
  `Nombre` varchar(30) COLLATE utf32_spanish_ci DEFAULT NULL,
  `Apellido` varchar(30) COLLATE utf32_spanish_ci DEFAULT NULL,
  `IdEmpleado` int DEFAULT NULL,
  `CodigoArea` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Dumping data for table `paciente`
--

INSERT INTO `paciente` (`IdPaciente`, `Nombre`, `Apellido`, `IdEmpleado`, `CodigoArea`) VALUES
(1, 'ROSAURA ', 'PEREZ GODINEZ', 324501, 105),
(12, 'LUIS', 'GUERRA', 219630, 1),
(346, 'MATEO', 'GASCÓN', 324501, 105);

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `IdEmpleado` int NOT NULL,
  `Rol` varchar(15) COLLATE utf32_spanish_ci DEFAULT NULL,
  `CodigoArea` int DEFAULT NULL,
  `Nombre` varchar(30) COLLATE utf32_spanish_ci NOT NULL,
  `Apellido` varchar(30) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`IdEmpleado`, `Rol`, `CodigoArea`, `Nombre`, `Apellido`) VALUES
(219630, 'ENFERMERO', 1, 'MARIA', 'HERNANDEZ'),
(324501, 'DOCTOR', 105, 'CARMEN', 'GRAVER');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `email`, `password`) VALUES
(1, 'hola', 'ola@gmail.com', '123456'),
(2, 'hola', 'tony@gmail.com', '$2y$10$2PFRwypnaGsowQgOQilwlOSMsMBpqQfpJfAeTmgwQ/8iiStm6CeGS'),
(3, 'amalia', 'amalia@gmail.com', '$2y$10$EGFA1VwXy.cH6l/PVrMlXugDUqC7SH11N4QqJWVCtRBbNqaup6guS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`CodigoArea`);

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `falconi`
--
ALTER TABLE `falconi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmacia`
--
ALTER TABLE `farmacia`
  ADD PRIMARY KEY (`Folio`),
  ADD KEY `IdPaciente` (`IdPaciente`),
  ADD KEY `IdEmpleado` (`IdEmpleado`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`IdPaciente`),
  ADD KEY `CodigoArea` (`CodigoArea`),
  ADD KEY `IdEmpleado` (`IdEmpleado`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`IdEmpleado`),
  ADD KEY `CodigoArea` (`CodigoArea`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `CodigoArea` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `falconi`
--
ALTER TABLE `falconi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `farmacia`
--
ALTER TABLE `farmacia`
  MODIFY `Folio` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324571;

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `IdPaciente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=550;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `IdEmpleado` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324502;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `farmacia`
--
ALTER TABLE `farmacia`
  ADD CONSTRAINT `farmacia_ibfk_1` FOREIGN KEY (`IdPaciente`) REFERENCES `paciente` (`IdPaciente`),
  ADD CONSTRAINT `farmacia_ibfk_2` FOREIGN KEY (`IdEmpleado`) REFERENCES `personal` (`IdEmpleado`);

--
-- Constraints for table `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`CodigoArea`) REFERENCES `area` (`CodigoArea`),
  ADD CONSTRAINT `paciente_ibfk_2` FOREIGN KEY (`IdEmpleado`) REFERENCES `personal` (`IdEmpleado`);

--
-- Constraints for table `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`CodigoArea`) REFERENCES `area` (`CodigoArea`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
