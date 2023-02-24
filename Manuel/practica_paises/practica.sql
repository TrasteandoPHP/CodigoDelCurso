-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2023 a las 12:21:42
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
-- Estructura de tabla para la tabla `concellos`
--

CREATE TABLE `concellos` (
  `cod_con` int(3) NOT NULL,
  `cod_pro` int(3) NOT NULL,
  `nom_con` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `concellos`
--

INSERT INTO `concellos` (`cod_con`, `cod_pro`, `nom_con`) VALUES
(1, 1, 'A Baña\r'),
(2, 1, 'A Capela\r'),
(3, 1, 'A Coruña\r'),
(4, 1, 'A Laracha\r'),
(5, 1, 'A Pobra do Caramiñal\r'),
(6, 1, 'Abegondo\r'),
(7, 1, 'Ames\r'),
(8, 1, 'Aranga\r'),
(9, 1, 'Ares\r'),
(10, 1, 'Arteixo\r'),
(11, 1, 'Arzúa\r'),
(12, 1, 'As Pontes de García Rodríguez\r'),
(13, 1, 'As Somozas\r'),
(14, 1, 'Bergondo\r'),
(15, 1, 'Betanzos\r'),
(16, 1, 'Boimorto\r'),
(17, 1, 'Boiro\r'),
(18, 1, 'Boqueixón\r'),
(19, 1, 'Brión\r'),
(20, 1, 'Cabana de Bergantiños\r'),
(21, 1, 'Cabanas\r'),
(22, 1, 'Camariñas\r'),
(23, 1, 'Cambre\r'),
(24, 1, 'Cariño\r'),
(25, 1, 'Carnota\r'),
(26, 1, 'Carral\r'),
(27, 1, 'Cedeira\r'),
(28, 1, 'Cee (A Coruña)\r'),
(29, 1, 'Cerdido\r'),
(30, 1, 'Coirós\r'),
(31, 1, 'Corcubión\r'),
(32, 1, 'Coristanco\r'),
(33, 1, 'Culleredo\r'),
(34, 1, 'Curtis\r'),
(35, 1, 'Dodro\r'),
(36, 1, 'Dumbría\r'),
(37, 1, 'Fene\r'),
(38, 1, 'Ferrol\r'),
(39, 1, 'Fisterra\r'),
(40, 1, 'Frades\r'),
(41, 1, 'Irixoa\r'),
(42, 1, 'Laxe\r'),
(43, 1, 'Lousame\r'),
(44, 1, 'Malpica de Bergantiños\r'),
(45, 1, 'Mazaricos\r'),
(46, 1, 'Mañón\r'),
(47, 1, 'Mellid\r'),
(48, 1, 'Mesía\r'),
(49, 1, 'Miño\r'),
(50, 1, 'Moeche\r'),
(51, 1, 'Monfero\r'),
(52, 1, 'Mugardos\r'),
(53, 1, 'Muros (A Coruña)\r'),
(54, 1, 'Muxía\r'),
(55, 1, 'Narón\r'),
(56, 1, 'Neda\r'),
(57, 1, 'Negreira\r'),
(58, 1, 'Noia\r'),
(59, 1, 'O Pino\r'),
(60, 1, 'Oleiros\r'),
(61, 1, 'Ordes\r'),
(62, 1, 'Oroso\r'),
(63, 1, 'Ortigueira\r'),
(64, 1, 'Outes\r'),
(65, 1, 'Oza-Cesuras\r'),
(66, 1, 'Paderne\r'),
(67, 1, 'Padrón\r'),
(68, 1, 'Ponteceso\r'),
(69, 1, 'Pontedeume\r'),
(70, 1, 'Porto do Son\r'),
(71, 1, 'Rianxo\r'),
(72, 1, 'Ribeira\r'),
(73, 1, 'Rois\r'),
(74, 1, 'Sada\r'),
(75, 1, 'San Sadurniño\r'),
(76, 1, 'Santa Comba\r'),
(77, 1, 'Santiago de Compostela\r'),
(78, 1, 'Santiso\r'),
(79, 1, 'Sobrado (A Coruña)\r'),
(80, 1, 'Teo\r'),
(81, 1, 'Toques\r'),
(82, 1, 'Tordoia\r'),
(83, 1, 'Touro\r'),
(84, 1, 'Trazo\r'),
(85, 1, 'Val do Dubra\r'),
(86, 1, 'Valdoviño\r'),
(87, 1, 'Vedra\r'),
(88, 1, 'Vilarmaior\r'),
(89, 1, 'Vilasantar\r'),
(90, 1, 'Vimianzo\r'),
(91, 1, 'Zas\r'),
(92, 2, 'A Fonsagrada\r'),
(93, 2, 'A Pastoriza\r'),
(94, 2, 'A Pobra do Brollón\r'),
(95, 2, 'A Pontenova\r'),
(96, 2, 'Abadín\r'),
(97, 2, 'Alfoz\r'),
(98, 2, 'Antas de Ulla\r'),
(99, 2, 'As Nogais\r'),
(100, 2, 'Baleira\r'),
(101, 2, 'Baralla\r'),
(102, 2, 'Barreiros\r'),
(103, 2, 'Becerreá\r'),
(104, 2, 'Begonte\r'),
(105, 2, 'Burela\r'),
(106, 2, 'Bóveda\r'),
(107, 2, 'Carballedo\r'),
(108, 2, 'Castro de Rei\r'),
(109, 2, 'Castroverde\r'),
(110, 2, 'Cervantes (Lugo)\r'),
(111, 2, 'Cervo\r'),
(112, 2, 'Chantada\r'),
(113, 2, 'Cospeito\r'),
(114, 2, 'Folgoso do Courel\r'),
(115, 2, 'Foz\r'),
(116, 2, 'Friol\r'),
(117, 2, 'Guitiriz\r'),
(118, 2, 'Guntín\r'),
(119, 2, 'Lourenzá\r'),
(120, 2, 'Lugo\r'),
(121, 2, 'Láncara\r'),
(122, 2, 'Meira\r'),
(123, 2, 'Mondoñedo\r'),
(124, 2, 'Monforte de Lemos\r'),
(125, 2, 'Monterroso\r'),
(126, 2, 'Muras\r'),
(127, 2, 'Navia de Suarna\r'),
(128, 2, 'Negueira de Muñiz\r'),
(129, 2, 'O Corgo\r'),
(130, 2, 'O Incio\r'),
(131, 2, 'O Páramo\r'),
(132, 2, 'O Saviñao\r'),
(133, 2, 'O Valadouro\r'),
(134, 2, 'O Vicedo\r'),
(135, 2, 'Ourol\r'),
(136, 2, 'Outeiro de Rei\r'),
(137, 2, 'Palas de Rei\r'),
(138, 2, 'Pantón\r'),
(139, 2, 'Paradela\r'),
(140, 2, 'Pedrafita do Cebreiro\r'),
(141, 2, 'Pol\r'),
(142, 2, 'Portomarín\r'),
(143, 2, 'Quiroga\r'),
(144, 2, 'Ribadeo\r'),
(145, 2, 'Ribas de Sil\r'),
(146, 2, 'Ribeira de Piquín\r'),
(147, 2, 'Riotorto\r'),
(148, 2, 'Rábade\r'),
(149, 2, 'Samos\r'),
(150, 2, 'Sarria (Lugo)\r'),
(151, 2, 'Sober\r'),
(152, 2, 'Taboada\r'),
(153, 2, 'Trabada\r'),
(154, 2, 'Triacastela\r'),
(155, 2, 'Vilalba\r'),
(156, 2, 'Viveiro\r'),
(157, 2, 'Xermade\r'),
(158, 2, 'Xove\r'),
(159, 3, 'A Arnoia\r'),
(160, 3, 'A Bola\r'),
(161, 3, 'A Gudiña\r'),
(162, 3, 'A Merca\r'),
(163, 3, 'A Mezquita\r'),
(164, 3, 'A Peroxa\r'),
(165, 3, 'A Pobra de Trives\r'),
(166, 3, 'A Rúa\r'),
(167, 3, 'A Teixeira\r'),
(168, 3, 'A Veiga\r'),
(169, 3, 'Allariz\r'),
(170, 3, 'Amoeiro\r'),
(171, 3, 'Avión\r'),
(172, 3, 'Baltar\r'),
(173, 3, 'Bande\r'),
(174, 3, 'Barbadás\r'),
(175, 3, 'Baños de Molgas\r'),
(176, 3, 'Beade\r'),
(177, 3, 'Beariz\r'),
(178, 3, 'Boborás\r'),
(179, 3, 'Calvos de Randín\r'),
(180, 3, 'Carballeda de Avia\r'),
(181, 3, 'Carballeda de Valdeorras\r'),
(182, 3, 'Cartelle\r'),
(183, 3, 'Castrelo de Miño\r'),
(184, 3, 'Castrelo do Val\r'),
(185, 3, 'Castro Caldelas\r'),
(186, 3, 'Celanova\r'),
(187, 3, 'Cenlle\r'),
(188, 3, 'Chandrexa de Queixa\r'),
(189, 3, 'Coles\r'),
(190, 3, 'Cortegada\r'),
(191, 3, 'Cualedro\r'),
(192, 3, 'Entrimo\r'),
(193, 3, 'Esgos\r'),
(194, 3, 'Gomesende\r'),
(195, 3, 'Larouco\r'),
(196, 3, 'Laza\r'),
(197, 3, 'Leiro\r'),
(198, 3, 'Lobera\r'),
(199, 3, 'Lobios\r'),
(200, 3, 'Maceda\r'),
(201, 3, 'Manzaneda\r'),
(202, 3, 'Maside\r'),
(203, 3, 'Melón\r'),
(204, 3, 'Montederramo\r'),
(205, 3, 'Monterrei\r'),
(206, 3, 'Muíños\r'),
(207, 3, 'Nogueira de Ramuín\r'),
(208, 3, 'O Barco de Valdeorras\r'),
(209, 3, 'O Bolo\r'),
(210, 3, 'O Carballiño\r'),
(211, 3, 'O Irixo\r'),
(212, 3, 'O Pereiro de Aguiar\r'),
(213, 3, 'Os Blancos\r'),
(214, 3, 'Ourense\r'),
(215, 3, 'Oímbra\r'),
(216, 3, 'Paderne de Allariz\r'),
(217, 3, 'Padrenda\r'),
(218, 3, 'Parada de Sil\r'),
(219, 3, 'Petín\r'),
(220, 3, 'Piñor\r'),
(221, 3, 'Pontedeva\r'),
(222, 3, 'Porquera\r'),
(223, 3, 'Punxín\r'),
(224, 3, 'Quintela de Leirado\r'),
(225, 3, 'Rairiz de Veiga\r'),
(226, 3, 'Ramirás\r'),
(227, 3, 'Ribadavia\r'),
(228, 3, 'Riós\r'),
(229, 3, 'Rubiá\r'),
(230, 3, 'San Amaro\r'),
(231, 3, 'San Cibrao das Viñas\r'),
(232, 3, 'San Cristovo de Cea\r'),
(233, 3, 'San Xoán de Río\r'),
(234, 3, 'Sandiás\r'),
(235, 3, 'Sarreaus\r'),
(236, 3, 'Taboadela\r'),
(237, 3, 'Toén\r'),
(238, 3, 'Trasmiras\r'),
(239, 3, 'Verea\r'),
(240, 3, 'Verín\r'),
(241, 3, 'Viana do Bolo\r'),
(242, 3, 'Vilamartín de Valdeorras\r'),
(243, 3, 'Vilamarín\r'),
(244, 3, 'Vilar de Barrio\r'),
(245, 3, 'Vilar de Santos\r'),
(246, 3, 'Vilardevós\r'),
(247, 3, 'Vilariño de Conso\r'),
(248, 3, 'Xinzo de Limia\r'),
(249, 3, 'Xunqueira de Ambía\r'),
(250, 3, 'Xunqueira de Espadanedo\r'),
(251, 4, 'A Cañiza\r'),
(252, 4, 'A Estrada\r'),
(253, 4, 'A Guarda\r'),
(254, 4, 'A Illa de Arousa\r'),
(255, 4, 'A Lama\r'),
(256, 4, 'Agolada\r'),
(257, 4, 'Arbo\r'),
(258, 4, 'As Neves\r'),
(259, 4, 'Baiona\r'),
(260, 4, 'Barro\r'),
(261, 4, 'Bueu\r'),
(262, 4, 'Caldas de Reis\r'),
(263, 4, 'Cambados\r'),
(264, 4, 'Campo Lameiro\r'),
(265, 4, 'Cangas\r'),
(266, 4, 'Catoira\r'),
(267, 4, 'Cerdedo\r'),
(268, 4, 'Cerdedo-Cotobade\r'),
(269, 4, 'Cotobade\r'),
(270, 4, 'Covelo\r'),
(271, 4, 'Crecente\r'),
(272, 4, 'Cuntis\r'),
(273, 4, 'Dozón\r'),
(274, 4, 'Forcarei\r'),
(275, 4, 'Fornelos de Montes\r'),
(276, 4, 'Gondomar\r'),
(277, 4, 'Lalín\r'),
(278, 4, 'Marín\r'),
(279, 4, 'Meaño\r'),
(280, 4, 'Meis\r'),
(281, 4, 'Moaña\r'),
(282, 4, 'Mondariz\r'),
(283, 4, 'Mondariz-Balneario\r'),
(284, 4, 'Moraña\r'),
(285, 4, 'Mos\r'),
(286, 4, 'Nigrán\r'),
(287, 4, 'O Grove\r'),
(288, 4, 'O Porriño\r'),
(289, 4, 'O Rosal\r'),
(290, 4, 'Oia\r'),
(291, 4, 'Pazos de Borbén\r'),
(292, 4, 'Poio\r'),
(293, 4, 'Ponte Caldelas\r'),
(294, 4, 'Ponteareas\r'),
(295, 4, 'Pontecesures\r'),
(296, 4, 'Pontevedra\r'),
(297, 4, 'Portas\r'),
(298, 4, 'Redondela\r'),
(299, 4, 'Ribadumia\r'),
(300, 4, 'Rodeiro\r'),
(301, 4, 'Salceda de Caselas\r'),
(302, 4, 'Salvaterra de Miño\r'),
(303, 4, 'Sanxenxo\r'),
(304, 4, 'Silleda\r'),
(305, 4, 'Soutomaior\r'),
(306, 4, 'Tomiño\r'),
(307, 4, 'Tui\r'),
(308, 4, 'Valga\r'),
(309, 4, 'Vigo\r'),
(310, 4, 'Vila de Cruces\r'),
(311, 4, 'Vilaboa\r'),
(312, 4, 'Vilagarcía de Arousa\r'),
(313, 4, 'Vilanova de Arousa\r');

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
  `nom_per` varchar(50) NOT NULL,
  `email_per` varchar(100) NOT NULL,
  `pass_per` varchar(100) NOT NULL,
  `pref_per` varchar(4) NOT NULL,
  `tel_per` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`cod_per`, `nom_per`, `email_per`, `pass_per`, `pref_per`, `tel_per`) VALUES
(1, 'Johnny Be Good', 'Johnny@correo.com', '$2y$10$v7qo5crLnvDU63H8QahVW.5T/rmbvHBw83lFad33S6mgfMcumPPO.', '+49', 123456789),
(2, 'Johnny Be Good', 'Johnny@correo.com', '$2y$10$Rm.HLsnWow9ibMq2P1kl1O5Y.ngQP84XyxieyKYS3N3aVXUxybdq2', '+49', 123456789),
(3, 'Johnny Be Good', 'Johnny@correo.com', '$2y$10$ynyN7M1Ohr6Wbfor/KnMbOpqCCNq/7SEYw/pxGeE1fP/gTNt4kYRG', '+49', 123456789);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `cod_prov` int(3) NOT NULL,
  `nom_prov` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`cod_prov`, `nom_prov`) VALUES
(1, 'A Coruña\r'),
(2, 'Lugo\r'),
(3, 'Ourense\r'),
(4, 'Pontevedra\r');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `concellos`
--
ALTER TABLE `concellos`
  ADD PRIMARY KEY (`cod_con`);

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
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`cod_prov`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `concellos`
--
ALTER TABLE `concellos`
  MODIFY `cod_con` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `cod_pais` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `cod_per` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `cod_prov` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
