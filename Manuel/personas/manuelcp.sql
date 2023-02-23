-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2023 a las 12:03:29
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
-- Base de datos: `manuelcp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `cod_adm` int(3) NOT NULL,
  `nom_adm` varchar(50) NOT NULL,
  `email_adm` varchar(100) NOT NULL,
  `pass_adm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`cod_adm`, `nom_adm`, `email_adm`, `pass_adm`) VALUES
(1, 'admin', 'admin@correo.com', '$2y$10$lYzwwAcDbXWhDrfk/78u9OyjDh5RVK5PtBtKEvPwzMUzQ3IpkAFFy'),
(2, 'manuelcp', 'manuelcp@correo.com', '$2y$10$cTDk3l0YWM2QKcghsoGLJOshtPl7imRAiJceI6liW423ehJd0ZNIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `identidad`
--

CREATE TABLE `identidad` (
  `cod_prg` int(3) NOT NULL,
  `nom_prg` varchar(50) NOT NULL,
  `desc_prg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `identidad`
--

INSERT INTO `identidad` (`cod_prg`, `nom_prg`, `desc_prg`) VALUES
(1, 'Hosteleria', 'Programa de gestión de un restaurante.'),
(2, 'Peluquería', 'Programa de gestión de una peluquería.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `cod_pas` int(5) NOT NULL,
  `nom_pas` varchar(100) NOT NULL,
  `continente_pas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`cod_pas`, `nom_pas`, `continente_pas`) VALUES
(1, 'España', 'Europa'),
(2, 'Albania  ', 'Europa  \r'),
(3, 'Andorra  ', 'Europa  \r'),
(4, 'Bosnia y Herzegovina  ', 'Europa  \r'),
(5, 'Croacia  ', 'Europa  \r'),
(6, 'Eslovenia  ', 'Europa  \r'),
(7, 'Grecia  ', 'Europa  \r'),
(8, 'Italia  ', 'Europa  \r'),
(9, 'Macedonia  ', 'Europa  \r'),
(10, 'Malta  ', 'Europa  \r'),
(11, 'Montenegro  ', 'Europa  \r'),
(12, 'Portugal  ', 'Europa  \r'),
(13, 'San Marino  ', 'Europa  \r'),
(14, 'Santa Sede  ', 'Europa  \r'),
(15, 'Serbia  ', 'Europa  \r'),
(16, 'Alemania  ', 'Europa  \r'),
(17, 'Austria  ', 'Europa  \r'),
(18, 'Bélgica  ', 'Europa  \r'),
(19, 'Francia  ', 'Europa  \r'),
(20, 'Liechtenstein  ', 'Europa  \r'),
(21, 'Luxemburgo  ', 'Europa  \r'),
(22, 'Mónaco  ', 'Europa  \r'),
(23, 'Países Bajos  ', 'Europa  \r'),
(24, 'Suiza  ', 'Europa  \r'),
(25, 'Belarús  ', 'Europa  \r'),
(26, 'Bulgaria  ', 'Europa  \r'),
(27, 'Hungría  ', 'Europa  \r'),
(28, 'Moldavia  ', 'Europa  \r'),
(29, 'Polonia  ', 'Europa  \r'),
(30, 'República Checa  ', 'Europa  \r'),
(31, 'República Eslovaca  ', 'Europa  \r'),
(32, 'Rumanía  ', 'Europa  \r'),
(33, 'Rusia  ', 'Europa  \r'),
(34, 'Ucrania  ', 'Europa  \r'),
(35, 'Dinamarca  ', 'Europa  \r'),
(36, 'Estonia  ', 'Europa  \r'),
(37, 'Finlandia  ', 'Europa  \r'),
(38, 'Irlanda  ', 'Europa  \r'),
(39, 'Islandia  ', 'Europa  \r'),
(40, 'Letonia  ', 'Europa  \r'),
(41, 'Lituania  ', 'Europa  \r'),
(42, 'Noruega  ', 'Europa  \r'),
(43, 'Reino Unido  ', 'Europa  \r'),
(44, 'Suecia  ', 'Europa  \r'),
(45, 'Angola  ', 'África  \r'),
(46, 'Camerún  ', 'África  \r'),
(47, 'Congo  ', 'África  \r'),
(48, 'Gabón  ', 'África  \r'),
(49, 'Guinea Ecuatorial  ', 'África  \r'),
(50, 'República Centroafricana  ', 'África  \r'),
(51, 'República Democrática del Congo  ', 'África  \r'),
(52, 'Santo Tomé y Príncipe  ', 'África  \r'),
(53, 'Chad  ', 'África  \r'),
(54, 'Botswana  ', 'África  \r'),
(55, 'Lesotho  ', 'África  \r'),
(56, 'Namibia  ', 'África  \r'),
(57, 'Sudáfrica  ', 'África  \r'),
(58, 'Swazilandia  ', 'África  \r'),
(59, 'Benin  ', 'África  \r'),
(60, 'Burkina Faso  ', 'África  \r'),
(61, 'Cabo Verde  ', 'África  \r'),
(62, 'Costa de Marfil  ', 'África  \r'),
(63, 'Gambia  ', 'África  \r'),
(64, 'Ghana  ', 'África  \r'),
(65, 'Guinea  ', 'África  \r'),
(66, 'Guinea-Bissau  ', 'África  \r'),
(67, 'Liberia  ', 'África  \r'),
(68, 'Mali  ', 'África  \r'),
(69, 'Mauritania  ', 'África  \r'),
(70, 'Níger  ', 'África  \r'),
(71, 'Nigeria  ', 'África  \r'),
(72, 'Senegal  ', 'África  \r'),
(73, 'Sierra Leona  ', 'África  \r'),
(74, 'Togo  ', 'África  \r'),
(75, 'Burundi  ', 'África  \r'),
(76, 'Comores  ', 'África  \r'),
(77, 'Djibouti  ', 'África  \r'),
(78, 'Eritrea  ', 'África  \r'),
(79, 'Etiopía  ', 'África  \r'),
(80, 'Kenia  ', 'África  \r'),
(81, 'Madagascar  ', 'África  \r'),
(82, 'Malawi  ', 'África  \r'),
(83, 'Mauricio  ', 'África  \r'),
(84, 'Mozambique  ', 'África  \r'),
(85, 'Ruanda  ', 'África  \r'),
(86, 'Seychelles  ', 'África  \r'),
(87, 'Somalia  ', 'África  \r'),
(88, 'Tanzania  ', 'África  \r'),
(89, 'Uganda  ', 'África  \r'),
(90, 'Zambia  ', 'África  \r'),
(91, 'Zimbabwe  ', 'África  \r'),
(92, 'Argelia  ', 'África  \r'),
(93, 'Egipto  ', 'África  \r'),
(94, 'Libia  ', 'África  \r'),
(95, 'Marruecos  ', 'África  \r'),
(96, 'Sáhara Occidental  ', 'África  \r'),
(97, 'Sudán del Sur  ', 'África  \r'),
(98, 'Sudán   ', 'África  \r'),
(99, 'Túnez  ', 'África  \r'),
(100, 'Belice  ', 'América  \r'),
(101, 'Costa Rica  ', 'América  \r'),
(102, 'El Salvador  ', 'América  \r'),
(103, 'Guatemala  ', 'América  \r'),
(104, 'Honduras  ', 'América  \r'),
(105, 'México  ', 'América  \r'),
(106, 'Nicaragua  ', 'América  \r'),
(107, 'Panamá  ', 'América  \r'),
(108, 'Canadá  ', 'América  \r'),
(109, 'Estados Unidos de América  ', 'América  \r'),
(110, 'Argentina  ', 'América  \r'),
(111, 'Bolivia  ', 'América  \r'),
(112, 'Brasil  ', 'América  \r'),
(113, 'Colombia  ', 'América  \r'),
(114, 'Ecuador  ', 'América  \r'),
(115, 'Guyana  ', 'América  \r'),
(116, 'Paraguay  ', 'América  \r'),
(117, 'Perú  ', 'América  \r'),
(118, 'Surinam  ', 'América  \r'),
(119, 'Uruguay  ', 'América  \r'),
(120, 'Venezuela  ', 'América  \r'),
(121, 'Chile  ', 'América  \r'),
(122, 'Antigua y Barbuda  ', 'América  \r'),
(123, 'Bahamas  ', 'América  \r'),
(124, 'Barbados  ', 'América  \r'),
(125, 'Cuba  ', 'América  \r'),
(126, 'Dominica  ', 'América  \r'),
(127, 'Granada  ', 'América  \r'),
(128, 'Haití  ', 'América  \r'),
(129, 'Jamaica  ', 'América  \r'),
(130, 'República Dominicana  ', 'América  \r'),
(131, 'San Cristóbal y Nieves  ', 'América  \r'),
(132, 'Santa Lucía  ', 'América  \r'),
(133, 'San Vicente y las Granadinas  ', 'América  \r'),
(134, 'Trinidad y Tobago  ', 'América  \r'),
(135, 'Kazajstán  ', 'Asia  \r'),
(136, 'Kirguistán  ', 'Asia  \r'),
(137, 'Tadyikistán  ', 'Asia  \r'),
(138, 'Turkmenistán  ', 'Asia  \r'),
(139, 'Uzbekistán  ', 'Asia  \r'),
(140, 'Afganistán  ', 'Asia  \r'),
(141, 'Bangladesh  ', 'Asia  \r'),
(142, 'Bhután  ', 'Asia  \r'),
(143, 'India  ', 'Asia  \r'),
(144, 'Irán  ', 'Asia  \r'),
(145, 'Maldivas  ', 'Asia  \r'),
(146, 'Nepal  ', 'Asia  \r'),
(147, 'Pakistán  ', 'Asia  \r'),
(148, 'Sri Lanka  ', 'Asia  \r'),
(149, 'Arabia Saudí  ', 'Asia  \r'),
(150, 'Armenia  ', 'Asia  \r'),
(151, 'Azerbaiyán  ', 'Asia  \r'),
(152, 'Bahréin  ', 'Asia  \r'),
(153, 'Emiratos Árabes Unidos  ', 'Asia  \r'),
(154, 'Georgia  ', 'Asia  \r'),
(155, 'Yemen  ', 'Asia  \r'),
(156, 'Iraq  ', 'Asia  \r'),
(157, 'Israel  ', 'Asia  \r'),
(158, 'Jordania  ', 'Asia  \r'),
(159, 'Kuwait  ', 'Asia  \r'),
(160, 'Líbano  ', 'Asia  \r'),
(161, 'Omán  ', 'Asia  \r'),
(162, 'Qatar  ', 'Asia  \r'),
(163, 'Siria  ', 'Asia  \r'),
(164, 'Territorios Palestinos (o Palestina)  ', 'Asia  \r'),
(165, 'Turquía  ', 'Asia  \r'),
(166, 'Chipre  ', 'Asia  \r'),
(167, 'Corea del Norte  ', 'Asia  \r'),
(168, 'Corea del Sur  ', 'Asia  \r'),
(169, 'Japón  ', 'Asia  \r'),
(170, 'Mongolia  ', 'Asia  \r'),
(171, 'Taiwán, China  ', 'Asia  \r'),
(172, 'China  ', 'Asia  \r'),
(173, 'Brunei  ', 'Asia  \r'),
(174, 'Camboya  ', 'Asia  \r'),
(175, 'Filipinas  ', 'Asia  \r'),
(176, 'Indonesia  ', 'Asia  \r'),
(177, 'Laos  ', 'Asia  \r'),
(178, 'Malasia  ', 'Asia  \r'),
(179, 'Myanmar  ', 'Asia  \r'),
(180, 'Singapur  ', 'Asia  \r'),
(181, 'Tailandia  ', 'Asia  \r'),
(182, 'Timor Oriental  ', 'Asia  \r'),
(183, 'Vietnam  ', 'Asia  \r'),
(184, 'Australia  ', 'Oceanía  \r'),
(185, 'Nueva Zelanda  ', 'Oceanía  \r'),
(186, 'Fiji  ', 'Oceanía  \r'),
(187, 'Islas Salomón  ', 'Oceanía  \r'),
(188, 'Papúa Nueva Guinea  ', 'Oceanía  \r'),
(189, 'Vanuatu  ', 'Oceanía  \r'),
(190, 'Islas Marshall  ', 'Oceanía  \r'),
(191, 'Kiribati  ', 'Oceanía  \r'),
(192, 'Micronesia  ', 'Oceanía  \r'),
(193, 'Nauru  ', 'Oceanía  \r'),
(194, 'Palaos  ', 'Oceanía  \r'),
(195, 'Samoa  ', 'Oceanía  \r'),
(196, 'Tonga  ', 'Oceanía  \r'),
(197, 'Tuvalu  ', 'Oceanía\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `cod_per` int(3) NOT NULL,
  `nom_per` varchar(50) NOT NULL,
  `edad_per` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`cod_per`, `nom_per`, `edad_per`) VALUES
(1, 'Alfonso', 42),
(2, 'Pablo', 39),
(3, 'Javi', 45),
(4, 'Dino', 47),
(5, 'Luis', 23),
(6, 'Isa', 32),
(7, 'Manolo', 42),
(8, 'Isa', 32),
(9, 'Pedro', 21),
(10, 'Manu', 20),
(11, 'Pablo F.', 66),
(12, 'Manuel C.', 48),
(13, 'Dani', 38),
(14, 'Pedro P.', 32),
(15, 'Alfonso', 42),
(16, 'Pablo', 39),
(17, 'Javi', 45),
(18, 'Dino', 47),
(19, 'Luis', 23),
(20, 'Isa', 32),
(21, 'Manolo', 42),
(22, 'Isa', 32),
(23, 'Pedro', 21),
(24, 'Manu', 20),
(25, 'Pablo F.', 66),
(26, 'Manuel C.', 48),
(27, 'Dani', 38),
(28, 'Pedro P.', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `cod_pro` int(3) NOT NULL,
  `nom_pro` varchar(50) NOT NULL,
  `desc_pro` varchar(200) NOT NULL,
  `img_pro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `cod_prov` int(3) NOT NULL,
  `nom_prov` varchar(100) NOT NULL,
  `comunidad_prov` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`cod_prov`, `nom_prov`, `comunidad_prov`) VALUES
(1, 'Ávila', 'Castilla y León\r'),
(2, 'Cádiz', 'Andalucía\r'),
(3, 'Valencia', 'Comunitat Valenciana\r'),
(4, 'Jaén', 'Andalucía\r'),
(5, 'Madrid', 'Comunidad de Madrid\r'),
(6, 'Cantabria', 'Cantabria\r'),
(7, 'Vizcaya', 'País Vasco\r'),
(8, 'Asturias', 'Principado de Asturias\r'),
(9, 'Las Palmas', 'Canarias\r'),
(10, 'Pontevedra', 'Galicia\r'),
(11, 'Guadalajara', 'Castilla - La Mancha\r'),
(12, 'Islas Baleares', 'Illes Balears\r'),
(13, 'Navarra', 'Comunidad Foral de Navarra\r'),
(14, 'Granada', 'Andalucía\r'),
(15, 'La Rioja', 'Rioja, La\r'),
(16, 'La Coruña', 'Galicia\r'),
(17, 'Teruel', 'Aragón\r'),
(18, 'Zaragoza', 'Aragón\r'),
(19, 'Málaga', 'Andalucía\r'),
(20, 'Badajoz', 'Extremadura\r'),
(21, 'Huesca', 'Aragón\r'),
(22, 'Alicante', 'Comunitat Valenciana\r'),
(23, 'Murcia', 'Región de Murcia\r'),
(24, 'Álava', 'País Vasco\r'),
(25, 'Gerona', 'Cataluña\r'),
(26, 'Palencia', 'Castilla y León\r'),
(27, 'Segovia', 'Castilla y León\r'),
(28, 'Zamora', 'Castilla y León\r'),
(29, 'Lugo', 'Galicia\r'),
(30, 'Soria', 'Castilla y León\r'),
(31, 'Toledo', 'Castilla - La Mancha\r'),
(32, 'Barcelona', 'Cataluña\r'),
(33, 'Cuenca', 'Castilla - La Mancha\r'),
(34, 'Almería', 'Andalucía\r'),
(35, 'Albacete', 'Castilla - La Mancha\r'),
(36, 'Cáceres', 'Extremadura\r'),
(37, 'Ciudad Real', 'Castilla - La Mancha\r'),
(38, 'Lleida', 'Cataluña\r'),
(39, 'Córdoba', 'Andalucía\r'),
(40, 'León', 'Castilla y León\r'),
(41, 'Orense', 'Galicia\r'),
(42, 'Tarragona', 'Cataluña\r'),
(43, 'Castellón', 'Comunitat Valenciana\r'),
(44, 'Huelva', 'Andalucía\r'),
(45, 'Santa Cruz de Tenerife', 'Canarias\r'),
(46, 'Burgos', 'Castilla y León\r'),
(47, 'Guipúzcoa', 'País Vasco\r'),
(48, 'Salamanca', 'Castilla y León\r'),
(49, 'Melilla', 'Melilla\r'),
(50, 'Sevilla', 'Andalucía\r'),
(51, 'Valladolid', 'Castilla y León\r'),
(52, 'Ceuta', 'Ceuta\r');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`cod_adm`),
  ADD UNIQUE KEY `email_adm` (`email_adm`);

--
-- Indices de la tabla `identidad`
--
ALTER TABLE `identidad`
  ADD PRIMARY KEY (`cod_prg`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`cod_pas`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`cod_per`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`cod_pro`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`cod_prov`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `cod_adm` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `identidad`
--
ALTER TABLE `identidad`
  MODIFY `cod_prg` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `cod_pas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `cod_per` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `cod_pro` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `cod_prov` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
