-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2022 a las 14:23:14
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lunes5`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `cod_alu` int(3) NOT NULL,
  `nom_alu` varchar(30) NOT NULL,
  `ape_alu` varchar(30) NOT NULL,
  `nomencri_alu` varchar(30) NOT NULL,
  `apeencri_alu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`cod_alu`, `nom_alu`, `ape_alu`, `nomencri_alu`, `apeencri_alu`) VALUES
(1, 'peche', 'fernandez', 'cGVjaGU=', 'ZmVybmFuZGV6'),
(2, 'pedro', 'fernando', 'cGVkcm8=', 'ZmVybmFuZG8=');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `codigo_cli` int(3) NOT NULL,
  `nombre_cli` varchar(25) NOT NULL,
  `email_cli` varchar(100) NOT NULL,
  `pass_cli` varchar(255) NOT NULL,
  `tlf_cli` int(9) NOT NULL,
  `codigo_pro` int(3) NOT NULL,
  `codigo_sex` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`codigo_cli`, `nombre_cli`, `email_cli`, `pass_cli`, `tlf_cli`, `codigo_pro`, `codigo_sex`) VALUES
(1, 'pedro', 'sdfldfñdsf', 'fdsfdsfdsfd', 22233343, 1, 1),
(2, 'lina', 'sdfldfñdsf', 'fdsfdsfdsfd', 22233343, 4, 2),
(3, 'pdsdfs', 'fdfsdf', 'rtrgtfd', 23213231, 5, 3),
(4, 'pedro', 'gfg@fdsd', 'fgfd', 333333, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `codigo_pro` int(3) NOT NULL,
  `nombre_pro` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`codigo_pro`, `nombre_pro`) VALUES
(1, 'madrid'),
(2, 'madridz'),
(3, 'barcelona'),
(4, 'A coru?a'),
(5, 'Sevilla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruebas`
--

CREATE TABLE `pruebas` (
  `cod_pru` int(3) NOT NULL,
  `texto_pru` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pruebas`
--

INSERT INTO `pruebas` (`cod_pru`, `texto_pru`) VALUES
(1, 'QWluaG9h'),
(2, 'UGVkcm8='),
(3, 'RGZzZA=='),
(4, 'RGZzZA=='),
(5, 'UmV0cnJ0'),
(6, 'R2ZkZ2Y='),
(7, 'VHloZ2g='),
(8, 'Smtqa2pra2pramhqa2hq'),
(9, 'WXl5eXk='),
(10, 'WXl5eXk='),
(11, 'WXl5eXk='),
(12, 'UmVyZXdy'),
(13, 'SGZn');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `codigo_sex` int(3) NOT NULL,
  `nombre_sex` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`codigo_sex`, `nombre_sex`) VALUES
(1, 'hombre'),
(2, 'mujer'),
(3, 'trans'),
(4, 'gay'),
(5, 'asexual');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`cod_alu`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codigo_cli`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`codigo_pro`);

--
-- Indices de la tabla `pruebas`
--
ALTER TABLE `pruebas`
  ADD PRIMARY KEY (`cod_pru`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`codigo_sex`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `cod_alu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `codigo_cli` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `codigo_pro` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pruebas`
--
ALTER TABLE `pruebas`
  MODIFY `cod_pru` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `codigo_sex` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
