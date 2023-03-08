-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2023 a las 14:28:06
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fila3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `cod_adm` int(3) NOT NULL,
  `nom_adm` varchar(100) NOT NULL,
  `ema_adm` varchar(100) NOT NULL,
  `pas_adm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`cod_adm`, `nom_adm`, `ema_adm`, `pas_adm`) VALUES
(1, 'peche', 'pch@msn.com', '$2y$10$1xrcGk5el.qoCvt.X06E1ONSlvl/.gM3ZiRXFvcK.jl0nEvMU2vCa'),
(2, 'daniboy', 'daniboy@msn.com', '$2y$10$kw4SUWWH4V/1iMvT.eOz/.F0z44ScHC7bxk/MW22QUMVUOWLeuDWm'),
(3, 'manuel', 'manuel@msn.com', '$2y$10$cDV3LnZgc5vgaRsiF9LNiOaFstZenZeQb1LVygPqAh9AoJGG3Nnky');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaciones`
--

CREATE TABLE `asignaciones` (
  `cod_asi` int(3) NOT NULL,
  `cod_emp` int(3) NOT NULL,
  `cod_veh` int(3) NOT NULL,
  `fecha_asi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignaciones`
--

INSERT INTO `asignaciones` (`cod_asi`, `cod_emp`, `cod_veh`, `fecha_asi`) VALUES
(1, 1, 1, '2023-03-07'),
(2, 1, 2, '2023-03-07'),
(3, 1, 1, '2023-03-07'),
(4, 1, 2, '2023-03-07'),
(48, 1, 1, '2023-03-07'),
(49, 2, 2, '2023-03-07'),
(50, 3, 3, '2023-03-07'),
(51, 1, 1, '2023-03-07'),
(52, 2, 2, '2023-03-07'),
(53, 3, 3, '2023-03-07'),
(60, 5, 2, '2023-03-08'),
(61, 6, 1, '2023-03-08'),
(62, 7, 3, '2023-03-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `cod_emp` int(3) NOT NULL,
  `cod_mov` varchar(100) NOT NULL,
  `nom_emp` varchar(100) NOT NULL,
  `ape_emp` varchar(100) NOT NULL,
  `email_emp` varchar(100) NOT NULL,
  `est_veh` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`cod_emp`, `cod_mov`, `nom_emp`, `ape_emp`, `email_emp`, `est_veh`) VALUES
(5, '2', 'ManuBootstrap', 'cp', 'manucp@msn.com', 1),
(6, '1', 'DanielRG', 'Ramos', 'a@a.com', 1),
(7, '4', 'Peche', 'Fernandez', 'pch@pch.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moviles`
--

CREATE TABLE `moviles` (
  `cod_mov` int(3) NOT NULL,
  `num_mov` varchar(100) NOT NULL,
  `mar_mov` varchar(100) NOT NULL,
  `est_mov` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `moviles`
--

INSERT INTO `moviles` (`cod_mov`, `num_mov`, `mar_mov`, `est_mov`) VALUES
(1, '+34467786445', 'Xiaomi', 1),
(2, '+3465465465465', 'iphone', 1),
(3, '+34322446112', 'samsung', 0),
(4, '606852360', 'Nokia 5150', 1),
(5, '658776544', 'Huawei2', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `cod_veh` int(3) NOT NULL,
  `mar_veh` varchar(100) NOT NULL,
  `mat_veh` varchar(100) NOT NULL,
  `est_veh` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`cod_veh`, `mar_veh`, `mat_veh`, `est_veh`) VALUES
(1, 'Tesla model Y', '1234 ABC', 1),
(2, 'Seat León', '4567 LMB', 1),
(3, 'Ferrari F40', '4356 MZZ', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`cod_adm`);

--
-- Indices de la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD PRIMARY KEY (`cod_asi`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`cod_emp`);

--
-- Indices de la tabla `moviles`
--
ALTER TABLE `moviles`
  ADD PRIMARY KEY (`cod_mov`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`cod_veh`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `cod_adm` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  MODIFY `cod_asi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `cod_emp` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `moviles`
--
ALTER TABLE `moviles`
  MODIFY `cod_mov` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `cod_veh` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
