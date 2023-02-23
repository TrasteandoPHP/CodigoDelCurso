-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2023 a las 14:28:40
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
-- Base de datos: `practica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `cod_pais` int(4) NOT NULL,
  `nom_pais` varchar(20) NOT NULL,
  `pref_pais` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`cod_pais`, `nom_pais`, `pref_pais`) VALUES
(1, 'Albania', 355),
(2, 'Alemania', 49),
(3, 'Andorra', 376),
(4, 'Armenia', 374),
(5, 'Austria', 43),
(6, 'Azerbaiyán', 994),
(7, 'Bélgica', 32),
(8, 'Bielorrusia', 375),
(9, 'Bosnia y Herzegovina', 387),
(10, 'Bulgaria', 359),
(11, 'Chipre', 357),
(12, 'Ciudad del Vaticano', 379),
(13, 'Croacia', 385),
(14, 'Dinamarca', 45),
(15, 'Eslovaquia', 421),
(16, 'Eslovenia', 386),
(17, 'España', 34),
(18, 'Estonia', 372),
(19, 'Finlandia', 358),
(20, 'Francia', 33),
(21, 'Georgia', 995),
(22, 'Grecia', 30),
(23, 'Hungría', 36),
(24, 'Irlanda', 353),
(25, 'Islandia', 354),
(26, 'Italia', 39),
(27, 'Kazajistán', 7),
(28, 'Letonia', 371),
(29, 'Liechtenstein', 423),
(30, 'Lituania', 370),
(31, 'Luxemburgo', 352),
(32, 'Macedonia del Norte', 389),
(33, 'Malta', 356),
(34, 'Moldavia', 373),
(35, 'Mónaco', 377),
(36, 'Montenegro', 382),
(37, 'Noruega', 47),
(38, 'Países Bajos', 31),
(39, 'Polonia', 48),
(40, 'Portugal', 351),
(41, 'Reino Unido', 44),
(42, 'República Checa', 420),
(43, 'Rumanía', 40),
(44, 'Rusia', 7),
(45, 'San Marino', 378),
(46, 'Serbia', 381),
(47, 'Suecia', 46),
(48, 'Suiza', 41),
(49, 'Turquía', 90),
(50, 'Ucrania', 380);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `cod_per` int(4) NOT NULL,
  `cod_pais` int(4) NOT NULL,
  `nom_per` varchar(50) NOT NULL,
  `email_per` varchar(100) NOT NULL,
  `pass_per` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`cod_pais`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`cod_per`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `cod_pais` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `cod_per` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
