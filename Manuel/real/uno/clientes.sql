-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-01-2023 a las 12:18:41
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
-- Base de datos: `real`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cod_cli` int(3) NOT NULL,
  `nom_cli` varchar(20) NOT NULL,
  `ap1_cli` varchar(100) NOT NULL,
  `ap2_cli` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cod_cli`, `nom_cli`, `ap1_cli`, `ap2_cli`) VALUES
(10, 'Pablo', 'Gesto', 'Rodríguez'),
(11, 'Javier', 'Antón', 'Cortés'),
(12, 'Dino', 'Núñez', 'Ruíz'),
(13, 'Luis', 'Garcia', 'Pazos'),
(14, 'Manolo', 'González', 'García'),
(15, 'Isabel', 'Rodríguez', 'Leiras'),
(16, 'Gladys', 'Jaen', 'Rodríguez'),
(17, 'Pedro', 'Sánchez', 'Corral'),
(18, 'Manuel', 'González', 'Veiga'),
(19, 'Pablo', 'Ferreño', 'Veiga'),
(20, 'Isabel', 'Rodríguez', 'Ennes'),
(21, 'Manuel', 'Casado', 'Portillo'),
(22, 'Daniel', 'Ramos', 'García'),
(23, 'Pedro', 'Peche', 'Fernández'),
(24, 'Alfonso', 'Carro', 'Moris');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cod_cli`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cod_cli` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
