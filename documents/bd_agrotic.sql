-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-09-2015 a las 13:56:43
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_agrotic`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradors`
--

CREATE TABLE IF NOT EXISTS `administradors` (
  `id` bigint(20) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `genero_id` bigint(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administradors`
--

INSERT INTO `administradors` (`id`, `nombres`, `apellidos`, `user_id`, `genero_id`, `created`, `updated`) VALUES
(15, 'carlos miguel', 'valencia rojas', 46, 2, '2015-09-27 16:13:32', '2015-09-27 16:13:32'),
(16, 'luis alberto', 'sarmiento rojas', 49, 2, '2015-09-27 16:20:40', '2015-09-27 16:20:40'),
(17, 'bethy', 'klinger', 50, 1, '2015-09-27 16:22:46', '2015-09-27 16:22:46'),
(18, 'jessica lorena', 'lopez garcia', 51, 1, '2015-09-27 16:24:20', '2015-09-27 16:24:20'),
(19, 'alberto luis', 'palacios moya', 52, 2, '2015-09-27 16:25:39', '2015-09-27 16:25:39'),
(20, 'francys', 'ceballos', 82, 2, '2015-09-27 19:04:25', '2015-09-27 19:04:25'),
(21, 'carlos miguel', 'garcia milla', 83, 2, '2015-09-27 19:06:43', '2015-09-27 19:06:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agricultors`
--

CREATE TABLE IF NOT EXISTS `agricultors` (
  `id` bigint(20) NOT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `genero_id` bigint(20) NOT NULL,
  `ciudad_id` bigint(20) DEFAULT NULL,
  `asociacion_id` bigint(20) NOT NULL,
  `corregimiento_id` bigint(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `agricultors`
--

INSERT INTO `agricultors` (`id`, `nombres`, `apellidos`, `user_id`, `genero_id`, `ciudad_id`, `asociacion_id`, `corregimiento_id`, `created`, `updated`) VALUES
(1, 'luis carlos', 'bedoya rojas', 53, 2, 1062, 0, 9, '2015-09-27 17:00:03', '2015-09-27 17:00:03'),
(2, 'julio', 'cortes garcia', 54, 2, 1063, 0, 23, '2015-09-27 17:06:32', '2015-09-27 17:06:32'),
(3, 'camila', '45454545', 55, 1, 1062, 0, 9, '2015-09-27 17:43:58', '2015-09-27 17:43:58'),
(4, 'camila', '45454545', 56, 1, 1062, 0, 9, '2015-09-27 17:56:49', '2015-09-27 17:56:49'),
(7, 'carlos damian', 'rojas', 59, 2, 1062, 0, 9, '2015-09-27 17:59:16', '2015-09-27 17:59:16'),
(8, 'carlos damian', 'rojas', 60, 2, 1062, 0, 9, '2015-09-27 18:01:21', '2015-09-27 18:01:21'),
(9, 'carlos damian', 'rojas', 61, 2, 1062, 0, 9, '2015-09-27 18:02:22', '2015-09-27 18:02:22'),
(10, 'carlos damian', 'rojas', 62, 2, 1062, 0, 9, '2015-09-27 18:03:54', '2015-09-27 18:03:54'),
(11, 'carlos damian', 'rojas', 63, 2, 1062, 0, 9, '2015-09-27 18:04:27', '2015-09-27 18:04:27'),
(12, 'carlos damian', 'rojas', 64, 2, 1062, 0, 9, '2015-09-27 18:04:59', '2015-09-27 18:04:59'),
(13, 'carlos damian', 'rojas', 65, 2, 1062, 0, 9, '2015-09-27 18:06:31', '2015-09-27 18:06:31'),
(25, 'carlos damian', 'rojas', 77, 2, 1062, 0, 9, '2015-09-27 18:25:46', '2015-09-27 18:25:46'),
(27, 'carlos damian', 'rojas', 79, 2, 1062, 0, 9, '2015-09-27 18:30:19', '2015-09-27 18:30:19'),
(28, 'carlos damian', 'rojas', 80, 2, 1062, 0, 9, '2015-09-27 18:31:49', '2015-09-27 18:31:49'),
(29, 'fredy gaza', 'montero rojas', 81, 2, 1062, 1, 9, '2015-09-27 18:36:38', '2015-09-27 18:36:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agricultor_asociacions`
--

CREATE TABLE IF NOT EXISTS `agricultor_asociacions` (
  `id` bigint(20) NOT NULL,
  `agricultor_id` bigint(20) NOT NULL,
  `asociacion_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agricultor_certificacions`
--

CREATE TABLE IF NOT EXISTS `agricultor_certificacions` (
  `id` bigint(20) NOT NULL,
  `agricultor_id` bigint(20) NOT NULL,
  `certificacion_id` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `agricultor_certificacions`
--

INSERT INTO `agricultor_certificacions` (`id`, `agricultor_id`, `certificacion_id`) VALUES
(1, 27, 1),
(2, 28, 1),
(3, 28, 2),
(4, 28, 3),
(5, 29, 1),
(6, 29, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agricultor_tipo_agriculturas`
--

CREATE TABLE IF NOT EXISTS `agricultor_tipo_agriculturas` (
  `id` bigint(20) NOT NULL,
  `agricultor_id` bigint(20) NOT NULL,
  `tipoAgricultura_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociacions`
--

CREATE TABLE IF NOT EXISTS `asociacions` (
  `id` bigint(20) NOT NULL,
  `nit` varchar(45) DEFAULT NULL,
  `rut` varchar(45) DEFAULT NULL,
  `razon_social` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `persona_contacto` varchar(45) DEFAULT NULL,
  `telefono_contacto` varchar(45) DEFAULT NULL,
  `celular_contacto` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asociacions`
--

INSERT INTO `asociacions` (`id`, `nit`, `rut`, `razon_social`, `descripcion`, `persona_contacto`, `telefono_contacto`, `celular_contacto`, `direccion`, `email`, `created`, `updated`) VALUES
(1, '111111111', '111111111', 'Asociación 1', 'Asociacion 1', 'Rodrigo 1', '898989899', '98989898998', 'Calle 45', NULL, NULL, NULL),
(2, '22222222222', '22222222222', 'Asociación 2', 'Asociación 2', 'Juan 2', '898989898', '212121212', 'calle 84', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brillos`
--

CREATE TABLE IF NOT EXISTS `brillos` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calidads`
--

CREATE TABLE IF NOT EXISTS `calidads` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_directorios`
--

CREATE TABLE IF NOT EXISTS `categoria_directorios` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_novedads`
--

CREATE TABLE IF NOT EXISTS `categoria_novedads` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificacions`
--

CREATE TABLE IF NOT EXISTS `certificacions` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `codigo` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `certificacions`
--

INSERT INTO `certificacions` (`id`, `nombre`, `codigo`, `created`, `updated`) VALUES
(1, 'Certificación 1', NULL, NULL, NULL),
(2, 'Certificación 2', NULL, NULL, NULL),
(3, 'Certificación 3', NULL, NULL, NULL),
(4, 'Certificación 4', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudads`
--

CREATE TABLE IF NOT EXISTS `ciudads` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `departamento_id` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1113 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudads`
--

INSERT INTO `ciudads` (`id`, `nombre`, `departamento_id`) VALUES
(1, 'EL ENCANTO', 1),
(2, 'LA CHORRERA', 1),
(3, 'LA PEDRERA', 1),
(4, 'LA VICTORIA', 1),
(5, 'LETICIA', 1),
(6, 'MIRITI', 1),
(7, 'PUERTO ALEGRIA', 1),
(8, 'PUERTO ARICA', 1),
(9, 'PUERTO NARIÑO', 1),
(10, 'PUERTO SANTANDER', 1),
(11, 'TURAPACA', 1),
(12, 'ABEJORRAL', 2),
(13, 'ABRIAQUI', 2),
(14, 'ALEJANDRIA', 2),
(15, 'AMAGA', 2),
(16, 'AMALFI', 2),
(17, 'ANDES', 2),
(18, 'ANGELOPOLIS', 2),
(19, 'ANGOSTURA', 2),
(20, 'ANORI', 2),
(21, 'ANTIOQUIA', 2),
(22, 'ANZA', 2),
(23, 'APARTADO', 2),
(24, 'ARBOLETES', 2),
(25, 'ARGELIA', 2),
(26, 'ARMENIA', 2),
(27, 'BARBOSA', 2),
(28, 'BELLO', 2),
(29, 'BELMIRA', 2),
(30, 'BETANIA', 2),
(31, 'BETULIA', 2),
(32, 'BOLIVAR', 2),
(33, 'BRICEÑO', 2),
(34, 'BURITICA', 2),
(35, 'CACERES', 2),
(36, 'CAICEDO', 2),
(37, 'CALDAS', 2),
(38, 'CAMPAMENTO', 2),
(39, 'CANASGORDAS', 2),
(40, 'CARACOLI', 2),
(41, 'CARAMANTA', 2),
(42, 'CAREPA', 2),
(43, 'CARMEN DE VIBORAL', 2),
(44, 'CAROLINA DEL PRINCIPE', 2),
(45, 'CAUCASIA', 2),
(46, 'CHIGORODO', 2),
(47, 'CISNEROS', 2),
(48, 'COCORNA', 2),
(49, 'CONCEPCION', 2),
(50, 'CONCORDIA', 2),
(51, 'COPACABANA', 2),
(52, 'DABEIBA', 2),
(53, 'DONMATIAS', 2),
(54, 'EBEJICO', 2),
(55, 'EL BAGRE', 2),
(56, 'EL PENOL', 2),
(57, 'EL RETIRO', 2),
(58, 'ENTRERRIOS', 2),
(59, 'ENVIGADO', 2),
(60, 'FREDONIA', 2),
(61, 'FRONTINO', 2),
(62, 'GIRALDO', 2),
(63, 'GIRARDOTA', 2),
(64, 'GOMEZ PLATA', 2),
(65, 'GRANADA', 2),
(66, 'GUADALUPE', 2),
(67, 'GUARNE', 2),
(68, 'GUATAQUE', 2),
(69, 'HELICONIA', 2),
(70, 'HISPANIA', 2),
(71, 'ITAGUI', 2),
(72, 'ITUANGO', 2),
(73, 'JARDIN', 2),
(74, 'JERICO', 2),
(75, 'LA CEJA', 2),
(76, 'LA ESTRELLA', 2),
(77, 'LA PINTADA', 2),
(78, 'LA UNION', 2),
(79, 'LIBORINA', 2),
(80, 'MACEO', 2),
(81, 'MARINILLA', 2),
(82, 'MEDELLIN', 2),
(83, 'MONTEBELLO', 2),
(84, 'MURINDO', 2),
(85, 'MUTATA', 2),
(86, 'NARINO', 2),
(87, 'NECHI', 2),
(88, 'NECOCLI', 2),
(89, 'OLAYA', 2),
(90, 'PEQUE', 2),
(91, 'PUEBLORRICO', 2),
(92, 'PUERTO BERRIO', 2),
(93, 'PUERTO NARE', 2),
(94, 'PUERTO TRIUNFO', 2),
(95, 'REMEDIOS', 2),
(96, 'RIONEGRO', 2),
(97, 'SABANALARGA', 2),
(98, 'SABANETA', 2),
(99, 'SALGAR', 2),
(100, 'SAN ANDRES DE CUERQUIA', 2),
(101, 'SAN CARLOS', 2),
(102, 'SAN FRANCISCO', 2),
(103, 'SAN JERONIMO', 2),
(104, 'SAN JOSE DE LA MONTAÑA', 2),
(105, 'SAN JUAN DE URABA', 2),
(106, 'SAN LUIS', 2),
(107, 'SAN PEDRO DE LOS MILAGROS', 2),
(108, 'SAN PEDRO DE URABA', 2),
(109, 'SAN RAFAEL', 2),
(110, 'SAN ROQUE', 2),
(111, 'SAN VICENTE', 2),
(112, 'SANTA BARBARA', 2),
(113, 'SANTA ROSA DE OSOS', 2),
(114, 'SANTO DOMINGO', 2),
(115, 'SANTUARIO', 2),
(116, 'SEGOVIA', 2),
(117, 'SONSON', 2),
(118, 'SOPETRAN', 2),
(119, 'TAMESIS', 2),
(120, 'TARAZA', 2),
(121, 'TARSO', 2),
(122, 'TITIRIBI', 2),
(123, 'TOLEDO', 2),
(124, 'TURBO', 2),
(125, 'URAMITA', 2),
(126, 'URRAO', 2),
(127, 'VALDIVIA', 2),
(128, 'VALPARAISO', 2),
(129, 'VEGACHI', 2),
(130, 'VENECIA', 2),
(131, 'VIGIA DEL FUERTE', 2),
(132, 'YALI', 2),
(133, 'YARUMAL', 2),
(134, 'YOLOMBO', 2),
(135, 'YONDO', 2),
(136, 'ZARAGOZA', 2),
(137, 'ARAUCA', 3),
(138, 'ARAUQUITA', 3),
(139, 'CRAVO NORTE', 3),
(140, 'FORTUL', 3),
(141, 'PUERTO RONDON', 3),
(142, 'SARAVENA', 3),
(143, 'TAME', 3),
(144, 'BARANOA', 4),
(145, 'BARRANQUILLA', 4),
(146, 'CAMPO DE LA CRUZ', 4),
(147, 'CANDELARIA', 4),
(148, 'GALAPA', 4),
(149, 'JUAN DE ACOSTA', 4),
(150, 'LURUACO', 4),
(151, 'MALAMBO', 4),
(152, 'MANATI', 4),
(153, 'PALMAR DE VARELA', 4),
(154, 'PIOJO', 4),
(155, 'POLO NUEVO', 4),
(156, 'PONEDERA', 4),
(157, 'PUERTO COLOMBIA', 4),
(158, 'REPELON', 4),
(159, 'SABANAGRANDE', 4),
(160, 'SABANALARGA', 4),
(161, 'SANTA LUCIA', 4),
(162, 'SANTO TOMAS', 4),
(163, 'SOLEDAD', 4),
(164, 'SUAN', 4),
(165, 'TUBARA', 4),
(166, 'USIACURI', 4),
(167, 'ACHI', 5),
(168, 'ALTOS DEL ROSARIO', 5),
(169, 'ARENAL', 5),
(170, 'ARJONA', 5),
(171, 'ARROYOHONDO', 5),
(172, 'BARRANCO DE LOBA', 5),
(173, 'BRAZUELO DE PAPAYAL', 5),
(174, 'CALAMAR', 5),
(175, 'CANTAGALLO', 5),
(176, 'CARTAGENA DE INDIAS', 5),
(177, 'CICUCO', 5),
(178, 'CLEMENCIA', 5),
(179, 'CORDOBA', 5),
(180, 'EL CARMEN DE BOLIVAR', 5),
(181, 'EL GUAMO', 5),
(182, 'EL PENION', 5),
(183, 'HATILLO DE LOBA', 5),
(184, 'MAGANGUE', 5),
(185, 'MAHATES', 5),
(186, 'MARGARITA', 5),
(187, 'MARIA LA BAJA', 5),
(188, 'MONTECRISTO', 5),
(189, 'MORALES', 5),
(190, 'MORALES', 5),
(191, 'NOROSI', 5),
(192, 'PINILLOS', 5),
(193, 'REGIDOR', 5),
(194, 'RIO VIEJO', 5),
(195, 'SAN CRISTOBAL', 5),
(196, 'SAN ESTANISLAO', 5),
(197, 'SAN FERNANDO', 5),
(198, 'SAN JACINTO', 5),
(199, 'SAN JACINTO DEL CAUCA', 5),
(200, 'SAN JUAN DE NEPOMUCENO', 5),
(201, 'SAN MARTIN DE LOBA', 5),
(202, 'SAN PABLO', 5),
(203, 'SAN PABLO NORTE', 5),
(204, 'SANTA CATALINA', 5),
(205, 'SANTA CRUZ DE MOMPOX', 5),
(206, 'SANTA ROSA', 5),
(207, 'SANTA ROSA DEL SUR', 5),
(208, 'SIMITI', 5),
(209, 'SOPLAVIENTO', 5),
(210, 'TALAIGUA NUEVO', 5),
(211, 'TUQUISIO', 5),
(212, 'TURBACO', 5),
(213, 'TURBANA', 5),
(214, 'VILLANUEVA', 5),
(215, 'ZAMBRANO', 5),
(216, 'AQUITANIA', 6),
(217, 'ARCABUCO', 6),
(218, 'BELÉN', 6),
(219, 'BERBEO', 6),
(220, 'BETÉITIVA', 6),
(221, 'BOAVITA', 6),
(222, 'BOYACÁ', 6),
(223, 'BRICEÑO', 6),
(224, 'BUENAVISTA', 6),
(225, 'BUSBANZÁ', 6),
(226, 'CALDAS', 6),
(227, 'CAMPO HERMOSO', 6),
(228, 'CERINZA', 6),
(229, 'CHINAVITA', 6),
(230, 'CHIQUINQUIRÁ', 6),
(231, 'CHÍQUIZA', 6),
(232, 'CHISCAS', 6),
(233, 'CHITA', 6),
(234, 'CHITARAQUE', 6),
(235, 'CHIVATÁ', 6),
(236, 'CIÉNEGA', 6),
(237, 'CÓMBITA', 6),
(238, 'COPER', 6),
(239, 'CORRALES', 6),
(240, 'COVARACHÍA', 6),
(241, 'CUBARA', 6),
(242, 'CUCAITA', 6),
(243, 'CUITIVA', 6),
(244, 'DUITAMA', 6),
(245, 'EL COCUY', 6),
(246, 'EL ESPINO', 6),
(247, 'FIRAVITOBA', 6),
(248, 'FLORESTA', 6),
(249, 'GACHANTIVÁ', 6),
(250, 'GÁMEZA', 6),
(251, 'GARAGOA', 6),
(252, 'GUACAMAYAS', 6),
(253, 'GÜICÁN', 6),
(254, 'IZA', 6),
(255, 'JENESANO', 6),
(256, 'JERICÓ', 6),
(257, 'LA UVITA', 6),
(258, 'LA VICTORIA', 6),
(259, 'LABRANZA GRANDE', 6),
(260, 'MACANAL', 6),
(261, 'MARIPÍ', 6),
(262, 'MIRAFLORES', 6),
(263, 'MONGUA', 6),
(264, 'MONGUÍ', 6),
(265, 'MONIQUIRÁ', 6),
(266, 'MOTAVITA', 6),
(267, 'MUZO', 6),
(268, 'NOBSA', 6),
(269, 'NUEVO COLÓN', 6),
(270, 'OICATÁ', 6),
(271, 'OTANCHE', 6),
(272, 'PACHAVITA', 6),
(273, 'PÁEZ', 6),
(274, 'PAIPA', 6),
(275, 'PAJARITO', 6),
(276, 'PANQUEBA', 6),
(277, 'PAUNA', 6),
(278, 'PAYA', 6),
(279, 'PAZ DE RÍO', 6),
(280, 'PESCA', 6),
(281, 'PISBA', 6),
(282, 'PUERTO BOYACA', 6),
(283, 'QUÍPAMA', 6),
(284, 'RAMIRIQUÍ', 6),
(285, 'RÁQUIRA', 6),
(286, 'RONDÓN', 6),
(287, 'SABOYÁ', 6),
(288, 'SÁCHICA', 6),
(289, 'SAMACÁ', 6),
(290, 'SAN EDUARDO', 6),
(291, 'SAN JOSÉ DE PARE', 6),
(292, 'SAN LUÍS DE GACENO', 6),
(293, 'SAN MATEO', 6),
(294, 'SAN MIGUEL DE SEMA', 6),
(295, 'SAN PABLO DE BORBUR', 6),
(296, 'SANTA MARÍA', 6),
(297, 'SANTA ROSA DE VITERBO', 6),
(298, 'SANTA SOFÍA', 6),
(299, 'SANTANA', 6),
(300, 'SATIVANORTE', 6),
(301, 'SATIVASUR', 6),
(302, 'SIACHOQUE', 6),
(303, 'SOATÁ', 6),
(304, 'SOCHA', 6),
(305, 'SOCOTÁ', 6),
(306, 'SOGAMOSO', 6),
(307, 'SORA', 6),
(308, 'SORACÁ', 6),
(309, 'SOTAQUIRÁ', 6),
(310, 'SUSACÓN', 6),
(311, 'SUTARMACHÁN', 6),
(312, 'TASCO', 6),
(313, 'TIBANÁ', 6),
(314, 'TIBASOSA', 6),
(315, 'TINJACÁ', 6),
(316, 'TIPACOQUE', 6),
(317, 'TOCA', 6),
(318, 'TOGÜÍ', 6),
(319, 'TÓPAGA', 6),
(320, 'TOTA', 6),
(321, 'TUNJA', 6),
(322, 'TUNUNGUÁ', 6),
(323, 'TURMEQUÉ', 6),
(324, 'TUTA', 6),
(325, 'TUTAZÁ', 6),
(326, 'UMBITA', 6),
(327, 'VENTA QUEMADA', 6),
(328, 'VILLA DE LEYVA', 6),
(329, 'VIRACACHÁ', 6),
(330, 'ZETAQUIRA', 6),
(331, 'AGUADAS', 7),
(332, 'ANSERMA', 7),
(333, 'ARANZAZU', 7),
(334, 'BELALCAZAR', 7),
(335, 'CHINCHINÁ', 7),
(336, 'FILADELFIA', 7),
(337, 'LA DORADA', 7),
(338, 'LA MERCED', 7),
(339, 'MANIZALES', 7),
(340, 'MANZANARES', 7),
(341, 'MARMATO', 7),
(342, 'MARQUETALIA', 7),
(343, 'MARULANDA', 7),
(344, 'NEIRA', 7),
(345, 'NORCASIA', 7),
(346, 'PACORA', 7),
(347, 'PALESTINA', 7),
(348, 'PENSILVANIA', 7),
(349, 'RIOSUCIO', 7),
(350, 'RISARALDA', 7),
(351, 'SALAMINA', 7),
(352, 'SAMANA', 7),
(353, 'SAN JOSE', 7),
(354, 'SUPÍA', 7),
(355, 'VICTORIA', 7),
(356, 'VILLAMARÍA', 7),
(357, 'VITERBO', 7),
(358, 'ALBANIA', 8),
(359, 'BELÉN ANDAQUIES', 8),
(360, 'CARTAGENA DEL CHAIRA', 8),
(361, 'CURILLO', 8),
(362, 'EL DONCELLO', 8),
(363, 'EL PAUJIL', 8),
(364, 'FLORENCIA', 8),
(365, 'LA MONTAÑITA', 8),
(366, 'MILÁN', 8),
(367, 'MORELIA', 8),
(368, 'PUERTO RICO', 8),
(369, 'SAN  VICENTE DEL CAGUAN', 8),
(370, 'SAN JOSÉ DE FRAGUA', 8),
(371, 'SOLANO', 8),
(372, 'SOLITA', 8),
(373, 'VALPARAÍSO', 8),
(374, 'AGUAZUL', 9),
(375, 'CHAMEZA', 9),
(376, 'HATO COROZAL', 9),
(377, 'LA SALINA', 9),
(378, 'MANÍ', 9),
(379, 'MONTERREY', 9),
(380, 'NUNCHIA', 9),
(381, 'OROCUE', 9),
(382, 'PAZ DE ARIPORO', 9),
(383, 'PORE', 9),
(384, 'RECETOR', 9),
(385, 'SABANA LARGA', 9),
(386, 'SACAMA', 9),
(387, 'SAN LUIS DE PALENQUE', 9),
(388, 'TAMARA', 9),
(389, 'TAURAMENA', 9),
(390, 'TRINIDAD', 9),
(391, 'VILLANUEVA', 9),
(392, 'YOPAL', 9),
(393, 'ALMAGUER', 10),
(394, 'ARGELIA', 10),
(395, 'BALBOA', 10),
(396, 'BOLÍVAR', 10),
(397, 'BUENOS AIRES', 10),
(398, 'CAJIBIO', 10),
(399, 'CALDONO', 10),
(400, 'CALOTO', 10),
(401, 'CORINTO', 10),
(402, 'EL TAMBO', 10),
(403, 'FLORENCIA', 10),
(404, 'GUAPI', 10),
(405, 'INZA', 10),
(406, 'JAMBALÓ', 10),
(407, 'LA SIERRA', 10),
(408, 'LA VEGA', 10),
(409, 'LÓPEZ', 10),
(410, 'MERCADERES', 10),
(411, 'MIRANDA', 10),
(412, 'MORALES', 10),
(413, 'PADILLA', 10),
(414, 'PÁEZ', 10),
(415, 'PATIA (EL BORDO)', 10),
(416, 'PIAMONTE', 10),
(417, 'PIENDAMO', 10),
(418, 'POPAYÁN', 10),
(419, 'PUERTO TEJADA', 10),
(420, 'PURACE', 10),
(421, 'ROSAS', 10),
(422, 'SAN SEBASTIÁN', 10),
(423, 'SANTA ROSA', 10),
(424, 'SANTANDER DE QUILICHAO', 10),
(425, 'SILVIA', 10),
(426, 'SOTARA', 10),
(427, 'SUÁREZ', 10),
(428, 'SUCRE', 10),
(429, 'TIMBÍO', 10),
(430, 'TIMBIQUÍ', 10),
(431, 'TORIBIO', 10),
(432, 'TOTORO', 10),
(433, 'VILLA RICA', 10),
(434, 'AGUACHICA', 11),
(435, 'AGUSTÍN CODAZZI', 11),
(436, 'ASTREA', 11),
(437, 'BECERRIL', 11),
(438, 'BOSCONIA', 11),
(439, 'CHIMICHAGUA', 11),
(440, 'CHIRIGUANÁ', 11),
(441, 'CURUMANÍ', 11),
(442, 'EL COPEY', 11),
(443, 'EL PASO', 11),
(444, 'GAMARRA', 11),
(445, 'GONZÁLEZ', 11),
(446, 'LA GLORIA', 11),
(447, 'LA JAGUA IBIRICO', 11),
(448, 'MANAURE BALCÓN DEL CESAR', 11),
(449, 'PAILITAS', 11),
(450, 'PELAYA', 11),
(451, 'PUEBLO BELLO', 11),
(452, 'RÍO DE ORO', 11),
(453, 'ROBLES (LA PAZ)', 11),
(454, 'SAN ALBERTO', 11),
(455, 'SAN DIEGO', 11),
(456, 'SAN MARTÍN', 11),
(457, 'TAMALAMEQUE', 11),
(458, 'VALLEDUPAR', 11),
(459, 'ACANDI', 12),
(460, 'ALTO BAUDO (PIE DE PATO)', 12),
(461, 'ATRATO', 12),
(462, 'BAGADO', 12),
(463, 'BAHIA SOLANO (MUTIS)', 12),
(464, 'BAJO BAUDO (PIZARRO)', 12),
(465, 'BOJAYA (BELLAVISTA)', 12),
(466, 'CANTON DE SAN PABLO', 12),
(467, 'CARMEN DEL DARIEN', 12),
(468, 'CERTEGUI', 12),
(469, 'CONDOTO', 12),
(470, 'EL CARMEN', 12),
(471, 'ISTMINA', 12),
(472, 'JURADO', 12),
(473, 'LITORAL DEL SAN JUAN', 12),
(474, 'LLORO', 12),
(475, 'MEDIO ATRATO', 12),
(476, 'MEDIO BAUDO (BOCA DE PEPE)', 12),
(477, 'MEDIO SAN JUAN', 12),
(478, 'NOVITA', 12),
(479, 'NUQUI', 12),
(480, 'QUIBDO', 12),
(481, 'RIO IRO', 12),
(482, 'RIO QUITO', 12),
(483, 'RIOSUCIO', 12),
(484, 'SAN JOSE DEL PALMAR', 12),
(485, 'SIPI', 12),
(486, 'TADO', 12),
(487, 'UNGUIA', 12),
(488, 'UNIÓN PANAMERICANA', 12),
(489, 'AYAPEL', 13),
(490, 'BUENAVISTA', 13),
(491, 'CANALETE', 13),
(492, 'CERETÉ', 13),
(493, 'CHIMA', 13),
(494, 'CHINÚ', 13),
(495, 'CIENAGA DE ORO', 13),
(496, 'COTORRA', 13),
(497, 'LA APARTADA', 13),
(498, 'LORICA', 13),
(499, 'LOS CÓRDOBAS', 13),
(500, 'MOMIL', 13),
(501, 'MONTELÍBANO', 13),
(502, 'MONTERÍA', 13),
(503, 'MOÑITOS', 13),
(504, 'PLANETA RICA', 13),
(505, 'PUEBLO NUEVO', 13),
(506, 'PUERTO ESCONDIDO', 13),
(507, 'PUERTO LIBERTADOR', 13),
(508, 'PURÍSIMA', 13),
(509, 'SAHAGÚN', 13),
(510, 'SAN ANDRÉS SOTAVENTO', 13),
(511, 'SAN ANTERO', 13),
(512, 'SAN BERNARDO VIENTO', 13),
(513, 'SAN CARLOS', 13),
(514, 'SAN PELAYO', 13),
(515, 'TIERRALTA', 13),
(516, 'VALENCIA', 13),
(517, 'AGUA DE DIOS', 14),
(518, 'ALBAN', 14),
(519, 'ANAPOIMA', 14),
(520, 'ANOLAIMA', 14),
(521, 'ARBELAEZ', 14),
(522, 'BELTRÁN', 14),
(523, 'BITUIMA', 14),
(524, 'BOGOTÁ DC', 14),
(525, 'BOJACÁ', 14),
(526, 'CABRERA', 14),
(527, 'CACHIPAY', 14),
(528, 'CAJICÁ', 14),
(529, 'CAPARRAPÍ', 14),
(530, 'CAQUEZA', 14),
(531, 'CARMEN DE CARUPA', 14),
(532, 'CHAGUANÍ', 14),
(533, 'CHIA', 14),
(534, 'CHIPAQUE', 14),
(535, 'CHOACHÍ', 14),
(536, 'CHOCONTÁ', 14),
(537, 'COGUA', 14),
(538, 'COTA', 14),
(539, 'CUCUNUBÁ', 14),
(540, 'EL COLEGIO', 14),
(541, 'EL PEÑÓN', 14),
(542, 'EL ROSAL1', 14),
(543, 'FACATATIVA', 14),
(544, 'FÓMEQUE', 14),
(545, 'FOSCA', 14),
(546, 'FUNZA', 14),
(547, 'FÚQUENE', 14),
(548, 'FUSAGASUGA', 14),
(549, 'GACHALÁ', 14),
(550, 'GACHANCIPÁ', 14),
(551, 'GACHETA', 14),
(552, 'GAMA', 14),
(553, 'GIRARDOT', 14),
(554, 'GRANADA2', 14),
(555, 'GUACHETÁ', 14),
(556, 'GUADUAS', 14),
(557, 'GUASCA', 14),
(558, 'GUATAQUÍ', 14),
(559, 'GUATAVITA', 14),
(560, 'GUAYABAL DE SIQUIMA', 14),
(561, 'GUAYABETAL', 14),
(562, 'GUTIÉRREZ', 14),
(563, 'JERUSALÉN', 14),
(564, 'JUNÍN', 14),
(565, 'LA CALERA', 14),
(566, 'LA MESA', 14),
(567, 'LA PALMA', 14),
(568, 'LA PEÑA', 14),
(569, 'LA VEGA', 14),
(570, 'LENGUAZAQUE', 14),
(571, 'MACHETÁ', 14),
(572, 'MADRID', 14),
(573, 'MANTA', 14),
(574, 'MEDINA', 14),
(575, 'MOSQUERA', 14),
(576, 'NARIÑO', 14),
(577, 'NEMOCÓN', 14),
(578, 'NILO', 14),
(579, 'NIMAIMA', 14),
(580, 'NOCAIMA', 14),
(581, 'OSPINA PÉREZ', 14),
(582, 'PACHO', 14),
(583, 'PAIME', 14),
(584, 'PANDI', 14),
(585, 'PARATEBUENO', 14),
(586, 'PASCA', 14),
(587, 'PUERTO SALGAR', 14),
(588, 'PULÍ', 14),
(589, 'QUEBRADANEGRA', 14),
(590, 'QUETAME', 14),
(591, 'QUIPILE', 14),
(592, 'RAFAEL REYES', 14),
(593, 'RICAURTE', 14),
(594, 'SAN  ANTONIO DEL  TEQUENDAMA', 14),
(595, 'SAN BERNARDO', 14),
(596, 'SAN CAYETANO', 14),
(597, 'SAN FRANCISCO', 14),
(598, 'SAN JUAN DE RIOSECO', 14),
(599, 'SASAIMA', 14),
(600, 'SESQUILÉ', 14),
(601, 'SIBATÉ', 14),
(602, 'SILVANIA', 14),
(603, 'SIMIJACA', 14),
(604, 'SOACHA', 14),
(605, 'SOPO', 14),
(606, 'SUBACHOQUE', 14),
(607, 'SUESCA', 14),
(608, 'SUPATÁ', 14),
(609, 'SUSA', 14),
(610, 'SUTATAUSA', 14),
(611, 'TABIO', 14),
(612, 'TAUSA', 14),
(613, 'TENA', 14),
(614, 'TENJO', 14),
(615, 'TIBACUY', 14),
(616, 'TIBIRITA', 14),
(617, 'TOCAIMA', 14),
(618, 'TOCANCIPÁ', 14),
(619, 'TOPAIPÍ', 14),
(620, 'UBALÁ', 14),
(621, 'UBAQUE', 14),
(622, 'UBATÉ', 14),
(623, 'UNE', 14),
(624, 'UTICA', 14),
(625, 'VERGARA', 14),
(626, 'VIANI', 14),
(627, 'VILLA GOMEZ', 14),
(628, 'VILLA PINZÓN', 14),
(629, 'VILLETA', 14),
(630, 'VIOTA', 14),
(631, 'YACOPÍ', 14),
(632, 'ZIPACÓN', 14),
(633, 'ZIPAQUIRÁ', 14),
(634, 'BARRANCO MINAS', 15),
(635, 'CACAHUAL', 15),
(636, 'INÍRIDA', 15),
(637, 'LA GUADALUPE', 15),
(638, 'MAPIRIPANA', 15),
(639, 'MORICHAL', 15),
(640, 'PANA PANA', 15),
(641, 'PUERTO COLOMBIA', 15),
(642, 'SAN FELIPE', 15),
(643, 'CALAMAR', 16),
(644, 'EL RETORNO', 16),
(645, 'MIRAFLOREZ', 16),
(646, 'SAN JOSÉ DEL GUAVIARE', 16),
(647, 'ACEVEDO', 17),
(648, 'AGRADO', 17),
(649, 'AIPE', 17),
(650, 'ALGECIRAS', 17),
(651, 'ALTAMIRA', 17),
(652, 'BARAYA', 17),
(653, 'CAMPO ALEGRE', 17),
(654, 'COLOMBIA', 17),
(655, 'ELIAS', 17),
(656, 'GARZÓN', 17),
(657, 'GIGANTE', 17),
(658, 'GUADALUPE', 17),
(659, 'HOBO', 17),
(660, 'IQUIRA', 17),
(661, 'ISNOS', 17),
(662, 'LA ARGENTINA', 17),
(663, 'LA PLATA', 17),
(664, 'NATAGA', 17),
(665, 'NEIVA', 17),
(666, 'OPORAPA', 17),
(667, 'PAICOL', 17),
(668, 'PALERMO', 17),
(669, 'PALESTINA', 17),
(670, 'PITAL', 17),
(671, 'PITALITO', 17),
(672, 'RIVERA', 17),
(673, 'SALADO BLANCO', 17),
(674, 'SAN AGUSTÍN', 17),
(675, 'SANTA MARIA', 17),
(676, 'SUAZA', 17),
(677, 'TARQUI', 17),
(678, 'TELLO', 17),
(679, 'TERUEL', 17),
(680, 'TESALIA', 17),
(681, 'TIMANA', 17),
(682, 'VILLAVIEJA', 17),
(683, 'YAGUARA', 17),
(684, 'ALBANIA', 18),
(685, 'BARRANCAS', 18),
(686, 'DIBULLA', 18),
(687, 'DISTRACCIÓN', 18),
(688, 'EL MOLINO', 18),
(689, 'FONSECA', 18),
(690, 'HATO NUEVO', 18),
(691, 'LA JAGUA DEL PILAR', 18),
(692, 'MAICAO', 18),
(693, 'MANAURE', 18),
(694, 'RIOHACHA', 18),
(695, 'SAN JUAN DEL CESAR', 18),
(696, 'URIBIA', 18),
(697, 'URUMITA', 18),
(698, 'VILLANUEVA', 18),
(699, 'ALGARROBO', 19),
(700, 'ARACATACA', 19),
(701, 'ARIGUANI', 19),
(702, 'CERRO SAN ANTONIO', 19),
(703, 'CHIVOLO', 19),
(704, 'CIENAGA', 19),
(705, 'CONCORDIA', 19),
(706, 'EL BANCO', 19),
(707, 'EL PIÑON', 19),
(708, 'EL RETEN', 19),
(709, 'FUNDACION', 19),
(710, 'GUAMAL', 19),
(711, 'NUEVA GRANADA', 19),
(712, 'PEDRAZA', 19),
(713, 'PIJIÑO DEL CARMEN', 19),
(714, 'PIVIJAY', 19),
(715, 'PLATO', 19),
(716, 'PUEBLO VIEJO', 19),
(717, 'REMOLINO', 19),
(718, 'SABANAS DE SAN ANGEL', 19),
(719, 'SALAMINA', 19),
(720, 'SAN SEBASTIAN DE BUENAVISTA', 19),
(721, 'SAN ZENON', 19),
(722, 'SANTA ANA', 19),
(723, 'SANTA BARBARA DE PINTO', 19),
(724, 'SANTA MARTA', 19),
(725, 'SITIONUEVO', 19),
(726, 'TENERIFE', 19),
(727, 'ZAPAYAN', 19),
(728, 'ZONA BANANERA', 19),
(729, 'ACACIAS', 20),
(730, 'BARRANCA DE UPIA', 20),
(731, 'CABUYARO', 20),
(732, 'CASTILLA LA NUEVA', 20),
(733, 'CUBARRAL', 20),
(734, 'CUMARAL', 20),
(735, 'EL CALVARIO', 20),
(736, 'EL CASTILLO', 20),
(737, 'EL DORADO', 20),
(738, 'FUENTE DE ORO', 20),
(739, 'GRANADA', 20),
(740, 'GUAMAL', 20),
(741, 'LA MACARENA', 20),
(742, 'LA URIBE', 20),
(743, 'LEJANÍAS', 20),
(744, 'MAPIRIPÁN', 20),
(745, 'MESETAS', 20),
(746, 'PUERTO CONCORDIA', 20),
(747, 'PUERTO GAITÁN', 20),
(748, 'PUERTO LLERAS', 20),
(749, 'PUERTO LÓPEZ', 20),
(750, 'PUERTO RICO', 20),
(751, 'RESTREPO', 20),
(752, 'SAN  JUAN DE ARAMA', 20),
(753, 'SAN CARLOS GUAROA', 20),
(754, 'SAN JUANITO', 20),
(755, 'SAN MARTÍN', 20),
(756, 'VILLAVICENCIO', 20),
(757, 'VISTA HERMOSA', 20),
(758, 'ALBAN', 21),
(759, 'ALDAÑA', 21),
(760, 'ANCUYA', 21),
(761, 'ARBOLEDA', 21),
(762, 'BARBACOAS', 21),
(763, 'BELEN', 21),
(764, 'BUESACO', 21),
(765, 'CHACHAGUI', 21),
(766, 'COLON (GENOVA)', 21),
(767, 'CONSACA', 21),
(768, 'CONTADERO', 21),
(769, 'CORDOBA', 21),
(770, 'CUASPUD', 21),
(771, 'CUMBAL', 21),
(772, 'CUMBITARA', 21),
(773, 'EL CHARCO', 21),
(774, 'EL PEÑOL', 21),
(775, 'EL ROSARIO', 21),
(776, 'EL TABLÓN', 21),
(777, 'EL TAMBO', 21),
(778, 'FUNES', 21),
(779, 'GUACHUCAL', 21),
(780, 'GUAITARILLA', 21),
(781, 'GUALMATAN', 21),
(782, 'ILES', 21),
(783, 'IMUES', 21),
(784, 'IPIALES', 21),
(785, 'LA CRUZ', 21),
(786, 'LA FLORIDA', 21),
(787, 'LA LLANADA', 21),
(788, 'LA TOLA', 21),
(789, 'LA UNION', 21),
(790, 'LEIVA', 21),
(791, 'LINARES', 21),
(792, 'LOS ANDES', 21),
(793, 'MAGUI', 21),
(794, 'MALLAMA', 21),
(795, 'MOSQUEZA', 21),
(796, 'NARIÑO', 21),
(797, 'OLAYA HERRERA', 21),
(798, 'OSPINA', 21),
(799, 'PASTO', 21),
(800, 'PIZARRO', 21),
(801, 'POLICARPA', 21),
(802, 'POTOSI', 21),
(803, 'PROVIDENCIA', 21),
(804, 'PUERRES', 21),
(805, 'PUPIALES', 21),
(806, 'RICAURTE', 21),
(807, 'ROBERTO PAYAN', 21),
(808, 'SAMANIEGO', 21),
(809, 'SAN BERNARDO', 21),
(810, 'SAN LORENZO', 21),
(811, 'SAN PABLO', 21),
(812, 'SAN PEDRO DE CARTAGO', 21),
(813, 'SANDONA', 21),
(814, 'SANTA BARBARA', 21),
(815, 'SANTACRUZ', 21),
(816, 'SAPUYES', 21),
(817, 'TAMINANGO', 21),
(818, 'TANGUA', 21),
(819, 'TUMACO', 21),
(820, 'TUQUERRES', 21),
(821, 'YACUANQUER', 21),
(822, 'ABREGO', 22),
(823, 'ARBOLEDAS', 22),
(824, 'BOCHALEMA', 22),
(825, 'BUCARASICA', 22),
(826, 'CÁCHIRA', 22),
(827, 'CÁCOTA', 22),
(828, 'CHINÁCOTA', 22),
(829, 'CHITAGÁ', 22),
(830, 'CONVENCIÓN', 22),
(831, 'CÚCUTA', 22),
(832, 'CUCUTILLA', 22),
(833, 'DURANIA', 22),
(834, 'EL CARMEN', 22),
(835, 'EL TARRA', 22),
(836, 'EL ZULIA', 22),
(837, 'GRAMALOTE', 22),
(838, 'HACARI', 22),
(839, 'HERRÁN', 22),
(840, 'LA ESPERANZA', 22),
(841, 'LA PLAYA', 22),
(842, 'LABATECA', 22),
(843, 'LOS PATIOS', 22),
(844, 'LOURDES', 22),
(845, 'MUTISCUA', 22),
(846, 'OCAÑA', 22),
(847, 'PAMPLONA', 22),
(848, 'PAMPLONITA', 22),
(849, 'PUERTO SANTANDER', 22),
(850, 'RAGONVALIA', 22),
(851, 'SALAZAR', 22),
(852, 'SAN CALIXTO', 22),
(853, 'SAN CAYETANO', 22),
(854, 'SANTIAGO', 22),
(855, 'SARDINATA', 22),
(856, 'SILOS', 22),
(857, 'TEORAMA', 22),
(858, 'TIBÚ', 22),
(859, 'TOLEDO', 22),
(860, 'VILLA CARO', 22),
(861, 'VILLA DEL ROSARIO', 22),
(862, 'COLÓN', 23),
(863, 'MOCOA', 23),
(864, 'ORITO', 23),
(865, 'PUERTO ASÍS', 23),
(866, 'PUERTO CAYCEDO', 23),
(867, 'PUERTO GUZMÁN', 23),
(868, 'PUERTO LEGUÍZAMO', 23),
(869, 'SAN FRANCISCO', 23),
(870, 'SAN MIGUEL', 23),
(871, 'SANTIAGO', 23),
(872, 'SIBUNDOY', 23),
(873, 'VALLE DEL GUAMUEZ', 23),
(874, 'VILLAGARZÓN', 23),
(875, 'ARMENIA', 24),
(876, 'BUENAVISTA', 24),
(877, 'CALARCÁ', 24),
(878, 'CIRCASIA', 24),
(879, 'CÓRDOBA', 24),
(880, 'FILANDIA', 24),
(881, 'GÉNOVA', 24),
(882, 'LA TEBAIDA', 24),
(883, 'MONTENEGRO', 24),
(884, 'PIJAO', 24),
(885, 'QUIMBAYA', 24),
(886, 'SALENTO', 24),
(887, 'APIA', 25),
(888, 'BALBOA', 25),
(889, 'BELÉN DE UMBRÍA', 25),
(890, 'DOS QUEBRADAS', 25),
(891, 'GUATICA', 25),
(892, 'LA CELIA', 25),
(893, 'LA VIRGINIA', 25),
(894, 'MARSELLA', 25),
(895, 'MISTRATO', 25),
(896, 'PEREIRA', 25),
(897, 'PUEBLO RICO', 25),
(898, 'QUINCHÍA', 25),
(899, 'SANTA ROSA DE CABAL', 25),
(900, 'SANTUARIO', 25),
(901, 'PROVIDENCIA', 26),
(902, 'SAN ANDRES', 26),
(903, 'SANTA CATALINA', 26),
(904, 'AGUADA', 27),
(905, 'ALBANIA', 27),
(906, 'ARATOCA', 27),
(907, 'BARBOSA', 27),
(908, 'BARICHARA', 27),
(909, 'BARRANCABERMEJA', 27),
(910, 'BETULIA', 27),
(911, 'BOLÍVAR', 27),
(912, 'BUCARAMANGA', 27),
(913, 'CABRERA', 27),
(914, 'CALIFORNIA', 27),
(915, 'CAPITANEJO', 27),
(916, 'CARCASI', 27),
(917, 'CEPITA', 27),
(918, 'CERRITO', 27),
(919, 'CHARALÁ', 27),
(920, 'CHARTA', 27),
(921, 'CHIMA', 27),
(922, 'CHIPATÁ', 27),
(923, 'CIMITARRA', 27),
(924, 'CONCEPCIÓN', 27),
(925, 'CONFINES', 27),
(926, 'CONTRATACIÓN', 27),
(927, 'COROMORO', 27),
(928, 'CURITÍ', 27),
(929, 'EL CARMEN', 27),
(930, 'EL GUACAMAYO', 27),
(931, 'EL PEÑÓN', 27),
(932, 'EL PLAYÓN', 27),
(933, 'ENCINO', 27),
(934, 'ENCISO', 27),
(935, 'FLORIÁN', 27),
(936, 'FLORIDABLANCA', 27),
(937, 'GALÁN', 27),
(938, 'GAMBITA', 27),
(939, 'GIRÓN', 27),
(940, 'GUACA', 27),
(941, 'GUADALUPE', 27),
(942, 'GUAPOTA', 27),
(943, 'GUAVATÁ', 27),
(944, 'GUEPSA', 27),
(945, 'HATO', 27),
(946, 'JESÚS MARIA', 27),
(947, 'JORDÁN', 27),
(948, 'LA BELLEZA', 27),
(949, 'LA PAZ', 27),
(950, 'LANDAZURI', 27),
(951, 'LEBRIJA', 27),
(952, 'LOS SANTOS', 27),
(953, 'MACARAVITA', 27),
(954, 'MÁLAGA', 27),
(955, 'MATANZA', 27),
(956, 'MOGOTES', 27),
(957, 'MOLAGAVITA', 27),
(958, 'OCAMONTE', 27),
(959, 'OIBA', 27),
(960, 'ONZAGA', 27),
(961, 'PALMAR', 27),
(962, 'PALMAS DEL SOCORRO', 27),
(963, 'PÁRAMO', 27),
(964, 'PIEDECUESTA', 27),
(965, 'PINCHOTE', 27),
(966, 'PUENTE NACIONAL', 27),
(967, 'PUERTO PARRA', 27),
(968, 'PUERTO WILCHES', 27),
(969, 'RIONEGRO', 27),
(970, 'SABANA DE TORRES', 27),
(971, 'SAN ANDRÉS', 27),
(972, 'SAN BENITO', 27),
(973, 'SAN GIL', 27),
(974, 'SAN JOAQUÍN', 27),
(975, 'SAN JOSÉ DE MIRANDA', 27),
(976, 'SAN MIGUEL', 27),
(977, 'SAN VICENTE DE CHUCURÍ', 27),
(978, 'SANTA BÁRBARA', 27),
(979, 'SANTA HELENA', 27),
(980, 'SIMACOTA', 27),
(981, 'SOCORRO', 27),
(982, 'SUAITA', 27),
(983, 'SUCRE', 27),
(984, 'SURATA', 27),
(985, 'TONA', 27),
(986, 'VALLE SAN JOSÉ', 27),
(987, 'VÉLEZ', 27),
(988, 'VETAS', 27),
(989, 'VILLANUEVA', 27),
(990, 'ZAPATOCA', 27),
(991, 'BUENAVISTA', 28),
(992, 'CAIMITO', 28),
(993, 'CHALÁN', 28),
(994, 'COLOSO', 28),
(995, 'COROZAL', 28),
(996, 'EL ROBLE', 28),
(997, 'GALERAS', 28),
(998, 'GUARANDA', 28),
(999, 'LA UNIÓN', 28),
(1000, 'LOS PALMITOS', 28),
(1001, 'MAJAGUAL', 28),
(1002, 'MORROA', 28),
(1003, 'OVEJAS', 28),
(1004, 'PALMITO', 28),
(1005, 'SAMPUES', 28),
(1006, 'SAN BENITO ABAD', 28),
(1007, 'SAN JUAN DE BETULIA', 28),
(1008, 'SAN MARCOS', 28),
(1009, 'SAN ONOFRE', 28),
(1010, 'SAN PEDRO', 28),
(1011, 'SINCÉ', 28),
(1012, 'SINCELEJO', 28),
(1013, 'SUCRE', 28),
(1014, 'TOLÚ', 28),
(1015, 'TOLUVIEJO', 28),
(1016, 'ALPUJARRA', 29),
(1017, 'ALVARADO', 29),
(1018, 'AMBALEMA', 29),
(1019, 'ANZOATEGUI', 29),
(1020, 'ARMERO (GUAYABAL)', 29),
(1021, 'ATACO', 29),
(1022, 'CAJAMARCA', 29),
(1023, 'CARMEN DE APICALÁ', 29),
(1024, 'CASABIANCA', 29),
(1025, 'CHAPARRAL', 29),
(1026, 'COELLO', 29),
(1027, 'COYAIMA', 29),
(1028, 'CUNDAY', 29),
(1029, 'DOLORES', 29),
(1030, 'ESPINAL', 29),
(1031, 'FALÁN', 29),
(1032, 'FLANDES', 29),
(1033, 'FRESNO', 29),
(1034, 'GUAMO', 29),
(1035, 'HERVEO', 29),
(1036, 'HONDA', 29),
(1037, 'IBAGUÉ', 29),
(1038, 'ICONONZO', 29),
(1039, 'LÉRIDA', 29),
(1040, 'LÍBANO', 29),
(1041, 'MARIQUITA', 29),
(1042, 'MELGAR', 29),
(1043, 'MURILLO', 29),
(1044, 'NATAGAIMA', 29),
(1045, 'ORTEGA', 29),
(1046, 'PALOCABILDO', 29),
(1047, 'PIEDRAS PLANADAS', 29),
(1048, 'PRADO', 29),
(1049, 'PURIFICACIÓN', 29),
(1050, 'RIOBLANCO', 29),
(1051, 'RONCESVALLES', 29),
(1052, 'ROVIRA', 29),
(1053, 'SALDAÑA', 29),
(1054, 'SAN ANTONIO', 29),
(1055, 'SAN LUIS', 29),
(1056, 'SANTA ISABEL', 29),
(1057, 'SUÁREZ', 29),
(1058, 'VALLE DE SAN JUAN', 29),
(1059, 'VENADILLO', 29),
(1060, 'VILLAHERMOSA', 29),
(1061, 'VILLARRICA', 29),
(1062, 'ALCALÁ', 30),
(1063, 'ANDALUCÍA', 30),
(1064, 'ANSERMA NUEVO', 30),
(1065, 'ARGELIA', 30),
(1066, 'BOLÍVAR', 30),
(1067, 'BUENAVENTURA', 30),
(1068, 'BUGA', 30),
(1069, 'BUGALAGRANDE', 30),
(1070, 'CAICEDONIA', 30),
(1071, 'CALI', 30),
(1072, 'CALIMA (DARIEN)', 30),
(1073, 'CANDELARIA', 30),
(1074, 'CARTAGO', 30),
(1075, 'DAGUA', 30),
(1076, 'EL AGUILA', 30),
(1077, 'EL CAIRO', 30),
(1078, 'EL CERRITO', 30),
(1079, 'EL DOVIO', 30),
(1080, 'FLORIDA', 30),
(1081, 'GINEBRA GUACARI', 30),
(1082, 'JAMUNDÍ', 30),
(1083, 'LA CUMBRE', 30),
(1084, 'LA UNIÓN', 30),
(1085, 'LA VICTORIA', 30),
(1086, 'OBANDO', 30),
(1087, 'PALMIRA', 30),
(1088, 'PRADERA', 30),
(1089, 'RESTREPO', 30),
(1090, 'RIO FRÍO', 30),
(1091, 'ROLDANILLO', 30),
(1092, 'SAN PEDRO', 30),
(1093, 'SEVILLA', 30),
(1094, 'TORO', 30),
(1095, 'TRUJILLO', 30),
(1096, 'TULÚA', 30),
(1097, 'ULLOA', 30),
(1098, 'VERSALLES', 30),
(1099, 'VIJES', 30),
(1100, 'YOTOCO', 30),
(1101, 'YUMBO', 30),
(1102, 'ZARZAL', 30),
(1103, 'CARURÚ', 31),
(1104, 'MITÚ', 31),
(1105, 'PACOA', 31),
(1106, 'PAPUNAUA', 31),
(1107, 'TARAIRA', 31),
(1108, 'YAVARATÉ', 31),
(1109, 'CUMARIBO', 32),
(1110, 'LA PRIMAVERA', 32),
(1111, 'PUERTO CARREÑO', 32),
(1112, 'SANTA ROSALIA', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` bigint(20) NOT NULL,
  `tema_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `comentario` text,
  `created` date DEFAULT NULL,
  `updated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprador_internacionals`
--

CREATE TABLE IF NOT EXISTS `comprador_internacionals` (
  `id` bigint(20) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `ciudad` varchar(145) DEFAULT NULL,
  `paiss_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `genero_id` bigint(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comprador_internacionals`
--

INSERT INTO `comprador_internacionals` (`id`, `nombres`, `apellidos`, `ciudad`, `paiss_id`, `user_id`, `genero_id`, `created`, `updated`) VALUES
(1, 'raul', 'gotze', 'meill', 5, 88, 2, '2015-09-28 18:31:31', '2015-09-28 18:31:31'),
(2, 'herson', 'lopez', 'Madrid', 73, 89, 2, '2015-09-28 18:34:17', '2015-09-28 18:34:17'),
(3, 'lynoll', 'garcia', 'andorra', 5, 90, 2, '2015-09-28 18:37:15', '2015-09-28 18:37:15'),
(4, 'camilo', 'perdomo', 'cali', 3, 92, 2, '2015-09-28 18:52:15', '2015-09-28 18:52:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprador_nacionals`
--

CREATE TABLE IF NOT EXISTS `comprador_nacionals` (
  `id` bigint(20) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `ciudad_id` bigint(20) NOT NULL,
  `genero_id` bigint(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comprador_nacionals`
--

INSERT INTO `comprador_nacionals` (`id`, `nombres`, `apellidos`, `user_id`, `ciudad_id`, `genero_id`, `created`, `updated`) VALUES
(1, 'helsin', 'gallego', 91, 13, 2, '2015-09-28 18:51:08', '2015-09-28 18:51:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corregimientos`
--

CREATE TABLE IF NOT EXISTS `corregimientos` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `ciudad_id` bigint(20) NOT NULL,
  `tipo` varchar(1) DEFAULT 'c' COMMENT 'v = vereda\nc = corregimiento\nr = resguardo',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1060 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `corregimientos`
--

INSERT INTO `corregimientos` (`id`, `nombre`, `ciudad_id`, `tipo`, `created`, `updated`) VALUES
(9, 'El Edén', 1062, 'v', NULL, NULL),
(10, 'La Unión', 1062, 'v', NULL, NULL),
(11, 'El Higuerón', 1062, 'v', NULL, NULL),
(12, 'Los Sauces', 1062, 'v', NULL, NULL),
(13, 'Playas Verdes', 1062, 'v', NULL, NULL),
(14, 'La Floresta', 1062, 'v', NULL, NULL),
(15, 'San Felipe', 1062, 'v', NULL, NULL),
(16, 'Trincheras', 1062, 'v', NULL, NULL),
(17, 'La Polonia', 1062, 'v', NULL, NULL),
(18, 'Bélgica', 1062, 'v', NULL, NULL),
(21, 'Maraveles', 1062, 'v', NULL, NULL),
(22, 'La Caña', 1062, 'v', NULL, NULL),
(23, 'Altaflor', 1063, 'c', NULL, NULL),
(24, 'Campoalegre', 1063, 'c', NULL, NULL),
(25, 'El Salto', 1063, 'c', NULL, NULL),
(26, 'Pardo Alto', 1063, 'c', NULL, NULL),
(27, 'Pardo Bajo', 1063, 'c', NULL, NULL),
(28, 'Potrerillo', 1063, 'c', NULL, NULL),
(29, 'Zabaletas', 1063, 'c', NULL, NULL),
(30, 'El Oriente', 1063, 'v', NULL, NULL),
(31, 'El Placer', 1063, 'v', NULL, NULL),
(32, 'Madre Vieja', 1063, 'v', NULL, NULL),
(33, 'Monte Hermoso', 1063, 'v', NULL, NULL),
(34, 'Pardo bajo', 1063, 'v', NULL, NULL),
(35, 'Tamboral', 1063, 'v', NULL, NULL),
(36, 'Unión Cascajeros', 1063, 'v', NULL, NULL),
(37, 'Zanjón de Piedra', 1063, 'v', NULL, NULL),
(38, 'Anacaro', 1064, 'c', NULL, NULL),
(39, 'El Roble', 1064, 'c', NULL, NULL),
(40, 'Gramalote', 1064, 'c', NULL, NULL),
(41, 'La Cabaña', 1064, 'c', NULL, NULL),
(42, 'La Diamantina ', 1064, 'c', NULL, NULL),
(43, 'San Agustín ', 1064, 'c', NULL, NULL),
(44, 'Tres Esquinas ', 1064, 'c', NULL, NULL),
(45, 'Vergel', 1064, 'c', NULL, NULL),
(46, 'Villar', 1064, 'c', NULL, NULL),
(47, 'La Raiz', 1064, 'v', NULL, NULL),
(48, 'Lusitania ', 1064, 'v', NULL, NULL),
(49, 'Embera Chami', 1064, 'r', NULL, NULL),
(50, 'LAS BRISAS', 1065, 'v', NULL, NULL),
(51, 'LA MARINA', 1065, 'v', NULL, NULL),
(52, 'EL RAIZAL', 1065, 'v', NULL, NULL),
(53, 'LA AURORA', 1065, 'v', NULL, NULL),
(54, 'CALENTADEROS', 1065, 'v', NULL, NULL),
(55, 'LA ESTRELLA', 1065, 'v', NULL, NULL),
(56, 'LA PAZ', 1065, 'v', NULL, NULL),
(57, 'LA PALMA', 1065, 'v', NULL, NULL),
(58, 'LA TEBAIDA', 1065, 'v', NULL, NULL),
(59, 'LA BELLA', 1065, 'v', NULL, NULL),
(60, 'LAS MARGARITAS', 1065, 'v', NULL, NULL),
(61, 'EL RIO ', 1065, 'v', NULL, NULL),
(62, 'TARRITOS ', 1065, 'v', NULL, NULL),
(63, 'MARACAIBO ', 1065, 'v', NULL, NULL),
(64, 'LA SOLEDAD ', 1065, 'v', NULL, NULL),
(65, 'LA CRISTALINA ', 1065, 'v', NULL, NULL),
(66, 'CASCO URBANO', 1065, 'v', NULL, NULL),
(67, 'Cabecera Municipal', 1066, 'c', NULL, NULL),
(68, 'Ricaurte', 1066, 'c', NULL, NULL),
(69, 'Primavera', 1066, 'c', NULL, NULL),
(70, 'La Tulia', 1066, 'c', NULL, NULL),
(71, 'Naranjal', 1066, 'c', NULL, NULL),
(72, 'Cerro Azul', 1066, 'c', NULL, NULL),
(73, 'San Isidro', 1066, 'c', NULL, NULL),
(74, 'La Herradura', 1066, 'c', NULL, NULL),
(75, 'Aguas Lindas', 1066, 'c', NULL, NULL),
(76, 'Betania', 1066, 'c', NULL, NULL),
(77, 'San Fernando', 1066, 'c', NULL, NULL),
(78, 'San Antonio de Guare', 1066, 'c', NULL, NULL),
(79, 'La Herradura', 1066, 'c', NULL, NULL),
(80, 'El Catre', 1066, 'c', NULL, NULL),
(81, 'Río Dovio', 1066, 'c', NULL, NULL),
(82, 'Villa Estella', 1067, 'c', NULL, NULL),
(83, 'La Brea', 1067, 'c', NULL, NULL),
(84, 'El Crucero', 1067, 'c', NULL, NULL),
(85, 'Km 11', 1067, 'c', NULL, NULL),
(86, 'Km 12', 1067, 'c', NULL, NULL),
(87, 'Bajo Calima', 1067, 'c', NULL, NULL),
(88, 'Bellavista (Carretera)', 1067, 'c', NULL, NULL),
(89, 'El Guineo (Km 14)', 1067, 'c', NULL, NULL),
(90, 'Las Brisas (Km 12)', 1067, 'c', NULL, NULL),
(91, 'La Esperanza', 1067, 'c', NULL, NULL),
(92, 'Ceibito', 1067, 'c', NULL, NULL),
(93, 'La Paz (Km 27)', 1067, 'c', NULL, NULL),
(94, 'La Aurora', 1067, 'c', NULL, NULL),
(95, 'Cola Barco', 1067, 'c', NULL, NULL),
(96, 'San Isidro', 1067, 'c', NULL, NULL),
(97, 'Trojitas', 1067, 'c', NULL, NULL),
(98, 'Guadual', 1067, 'c', NULL, NULL),
(99, 'San Joaquin (Km 8)', 1067, 'c', NULL, NULL),
(100, 'Tatabro (Km 15)', 1067, 'c', NULL, NULL),
(101, 'La 40', 1067, 'c', NULL, NULL),
(102, 'La Lucha', 1067, 'c', NULL, NULL),
(103, 'Juanchaco', 1067, 'c', NULL, NULL),
(104, 'Ladrilleros', 1067, 'c', NULL, NULL),
(105, 'La Plata', 1067, 'c', NULL, NULL),
(106, 'Bocas del San Juan', 1067, 'c', NULL, NULL),
(107, 'Malaga', 1067, 'c', NULL, NULL),
(108, 'La Barra', 1067, 'c', NULL, NULL),
(109, 'Cabezon', 1067, 'c', NULL, NULL),
(110, 'La Muerte', 1067, 'c', NULL, NULL),
(111, 'La Platica', 1067, 'c', NULL, NULL),
(112, 'La Bocana', 1067, 'c', NULL, NULL),
(113, 'Pianguita', 1067, 'c', NULL, NULL),
(114, 'Piedra Piedra', 1067, 'c', NULL, NULL),
(115, 'Santa Delicia', 1067, 'c', NULL, NULL),
(116, 'Piangua', 1067, 'c', NULL, NULL),
(117, 'Bazan', 1067, 'c', NULL, NULL),
(118, 'Aguadulce', 1067, 'c', NULL, NULL),
(119, 'Arrieral', 1067, 'c', NULL, NULL),
(120, 'Bocas de Cangrejo', 1067, 'c', NULL, NULL),
(121, 'Punta Arena', 1067, 'c', NULL, NULL),
(122, 'Punta Soldado', 1067, 'c', NULL, NULL),
(123, 'La Contra', 1067, 'c', NULL, NULL),
(124, 'Bellavista', 1067, 'c', NULL, NULL),
(125, 'Cocalito', 1067, 'c', NULL, NULL),
(126, 'Santa Barbara', 1067, 'c', NULL, NULL),
(127, 'Machetero', 1067, 'c', NULL, NULL),
(128, 'La Popa', 1067, 'c', NULL, NULL),
(129, 'Papayal', 1067, 'c', NULL, NULL),
(130, 'Punteño', 1067, 'c', NULL, NULL),
(131, 'El Bajito', 1067, 'c', NULL, NULL),
(132, 'Amaine', 1067, 'c', NULL, NULL),
(133, 'Cabecera Rio Cuquito', 1067, 'c', NULL, NULL),
(134, 'Dupar', 1067, 'c', NULL, NULL),
(135, 'Cuellar', 1067, 'c', NULL, NULL),
(136, 'Cabeceras', 1067, 'c', NULL, NULL),
(137, 'Rio Dagua', 1067, 'c', NULL, NULL),
(138, 'Chachajo', 1067, 'c', NULL, NULL),
(139, 'Bocas de Calima', 1067, 'c', NULL, NULL),
(140, 'Malaguita', 1067, 'c', NULL, NULL),
(141, 'Puerto Pizarro', 1067, 'c', NULL, NULL),
(142, 'Alto Potedo', 1067, 'c', NULL, NULL),
(143, 'Guadualito', 1067, 'c', NULL, NULL),
(144, 'La Meseta', 1067, 'c', NULL, NULL),
(145, 'Colonia Jaci', 1067, 'c', NULL, NULL),
(146, 'Calle Larga', 1067, 'c', NULL, NULL),
(147, 'Pitirri', 1067, 'c', NULL, NULL),
(148, 'Limoncito', 1067, 'c', NULL, NULL),
(149, 'Posedo', 1067, 'c', NULL, NULL),
(150, 'Mondomito', 1067, 'c', NULL, NULL),
(151, 'Bajo Potedo', 1067, 'c', NULL, NULL),
(152, 'Campo Hermoso', 1067, 'c', NULL, NULL),
(153, 'La Playita', 1067, 'c', NULL, NULL),
(154, 'Limonita', 1067, 'c', NULL, NULL),
(155, 'Limones', 1067, 'c', NULL, NULL),
(156, 'La Choma', 1067, 'c', NULL, NULL),
(157, 'Mondomo', 1067, 'c', NULL, NULL),
(158, 'Zacarias', 1067, 'c', NULL, NULL),
(159, 'Zabaletas', 1067, 'c', NULL, NULL),
(160, 'Guaimia', 1067, 'c', NULL, NULL),
(161, 'Llano Bajo', 1067, 'c', NULL, NULL),
(162, 'San Pedro', 1067, 'c', NULL, NULL),
(163, 'Agua Clara', 1067, 'c', NULL, NULL),
(164, 'Bogota', 1067, 'c', NULL, NULL),
(165, 'Limones', 1067, 'c', NULL, NULL),
(166, 'San Marcos', 1067, 'c', NULL, NULL),
(167, 'Bartolo', 1067, 'c', NULL, NULL),
(168, 'Tatabro', 1067, 'c', NULL, NULL),
(169, 'Ladrilleros', 1067, 'c', NULL, NULL),
(170, 'Pueblo de la Cruz', 1067, 'c', NULL, NULL),
(171, 'Colonia', 1067, 'c', NULL, NULL),
(172, 'San Pedro', 1067, 'c', NULL, NULL),
(173, 'Alto Agua Clara', 1067, 'c', NULL, NULL),
(174, 'El Llano', 1067, 'c', NULL, NULL),
(175, 'San Antonio', 1067, 'c', NULL, NULL),
(176, 'Amazona', 1067, 'c', NULL, NULL),
(177, 'Taparal', 1067, 'c', NULL, NULL),
(178, 'La Herradura', 1067, 'c', NULL, NULL),
(179, 'Bartolo', 1067, 'c', NULL, NULL),
(180, 'Santa Barbara', 1067, 'c', NULL, NULL),
(181, 'San José', 1067, 'c', NULL, NULL),
(182, 'El Barcito', 1067, 'c', NULL, NULL),
(183, 'Calle Larga', 1067, 'c', NULL, NULL),
(184, 'Machetajero', 1067, 'c', NULL, NULL),
(185, 'El Tigre', 1067, 'c', NULL, NULL),
(186, 'Calle Honda', 1067, 'c', NULL, NULL),
(187, 'Leticia', 1067, 'c', NULL, NULL),
(188, 'Auca', 1067, 'c', NULL, NULL),
(189, 'Rio Raposo', 1067, 'c', NULL, NULL),
(190, 'San Francisco Javier', 1067, 'c', NULL, NULL),
(191, 'Caracolí', 1067, 'c', NULL, NULL),
(192, 'Bocas de Tatauro', 1067, 'c', NULL, NULL),
(193, 'Anchicaya', 1067, 'c', NULL, NULL),
(194, 'El Pital', 1067, 'c', NULL, NULL),
(195, 'Timbal', 1067, 'c', NULL, NULL),
(196, 'La Sierpe', 1067, 'c', NULL, NULL),
(197, 'Punta Bonita', 1067, 'c', NULL, NULL),
(198, 'Umane', 1067, 'c', NULL, NULL),
(199, 'Comba', 1067, 'c', NULL, NULL),
(200, 'Isla Pelada', 1067, 'c', NULL, NULL),
(201, 'Fray Juan', 1067, 'c', NULL, NULL),
(202, 'Mayorquin', 1067, 'c', NULL, NULL),
(203, 'Marroquin', 1067, 'c', NULL, NULL),
(204, 'Papayal', 1067, 'c', NULL, NULL),
(205, 'Santa Ana', 1067, 'c', NULL, NULL),
(206, 'Secadero', 1067, 'c', NULL, NULL),
(207, 'Contra', 1067, 'c', NULL, NULL),
(208, 'Silva', 1067, 'c', NULL, NULL),
(209, 'El Chorro', 1067, 'c', NULL, NULL),
(210, 'Guapicito', 1067, 'c', NULL, NULL),
(211, 'Barco', 1067, 'c', NULL, NULL),
(212, 'La Fragua', 1067, 'c', NULL, NULL),
(213, 'Santa Rosa', 1067, 'c', NULL, NULL),
(214, 'Punta de Luca', 1067, 'c', NULL, NULL),
(215, 'Las Rosas', 1067, 'c', NULL, NULL),
(216, 'Boca de Brazo', 1067, 'c', NULL, NULL),
(217, 'San Isidro', 1067, 'c', NULL, NULL),
(218, 'Arango', 1067, 'c', NULL, NULL),
(219, 'San Vicente', 1067, 'c', NULL, NULL),
(220, 'Marroquin', 1067, 'c', NULL, NULL),
(221, 'Timba', 1067, 'c', NULL, NULL),
(222, 'Planeta', 1067, 'c', NULL, NULL),
(223, 'Veneral', 1067, 'c', NULL, NULL),
(224, 'La Isla', 1067, 'c', NULL, NULL),
(225, 'Isla del Venado', 1067, 'c', NULL, NULL),
(226, 'El Aguila', 1067, 'c', NULL, NULL),
(227, 'San Jeronimo', 1067, 'c', NULL, NULL),
(228, 'San Miguel', 1067, 'c', NULL, NULL),
(229, 'El Barranco', 1067, 'c', NULL, NULL),
(230, 'Firme Bonito', 1067, 'c', NULL, NULL),
(231, 'Papayo', 1067, 'c', NULL, NULL),
(232, 'El Firme', 1067, 'c', NULL, NULL),
(233, 'Primavera', 1067, 'c', NULL, NULL),
(234, 'Rastrojo Largo', 1067, 'c', NULL, NULL),
(235, 'El Encanto', 1067, 'c', NULL, NULL),
(236, 'San Antonio', 1067, 'c', NULL, NULL),
(237, 'El Aguacate', 1067, 'c', NULL, NULL),
(238, 'Omoño', 1067, 'c', NULL, NULL),
(239, 'Juntas', 1067, 'c', NULL, NULL),
(240, 'Santa Rita', 1067, 'c', NULL, NULL),
(241, 'San Antonio', 1067, 'c', NULL, NULL),
(242, 'El Morro', 1067, 'c', NULL, NULL),
(243, 'San José', 1067, 'c', NULL, NULL),
(244, 'Nuevo San José', 1067, 'c', NULL, NULL),
(245, 'Chamuscado', 1067, 'c', NULL, NULL),
(246, 'Santa Cruz', 1067, 'c', NULL, NULL),
(247, 'San Joaquincito', 1067, 'c', NULL, NULL),
(248, 'San Miguel', 1067, 'c', NULL, NULL),
(249, 'Alambique', 1067, 'c', NULL, NULL),
(250, 'Azucena', 1067, 'c', NULL, NULL),
(251, 'San Martin', 1067, 'c', NULL, NULL),
(252, 'El Cacao', 1067, 'c', NULL, NULL),
(253, 'El Ají', 1067, 'c', NULL, NULL),
(254, 'Isla Ají', 1067, 'c', NULL, NULL),
(255, 'Puerto Merizalde', 1067, 'c', NULL, NULL),
(256, 'Horizonte', 1067, 'c', NULL, NULL),
(257, 'Villa Lonna', 1067, 'c', NULL, NULL),
(258, 'San José', 1067, 'c', NULL, NULL),
(259, 'Conchirito', 1067, 'c', NULL, NULL),
(260, 'San Fernando', 1067, 'c', NULL, NULL),
(261, 'La Vuelta', 1067, 'c', NULL, NULL),
(262, 'San Pedro', 1067, 'c', NULL, NULL),
(263, 'El Triunfo', 1067, 'c', NULL, NULL),
(264, 'Pastico', 1067, 'c', NULL, NULL),
(265, 'El Trueno', 1067, 'c', NULL, NULL),
(266, 'Limones', 1067, 'c', NULL, NULL),
(267, 'Ajicito', 1067, 'c', NULL, NULL),
(268, 'Aguamanza', 1067, 'c', NULL, NULL),
(269, 'Sagrada Familia', 1067, 'c', NULL, NULL),
(270, 'Santa Maria', 1067, 'c', NULL, NULL),
(271, 'El Carmen', 1067, 'c', NULL, NULL),
(272, 'Calle Larga', 1067, 'c', NULL, NULL),
(273, 'San Antonio', 1067, 'c', NULL, NULL),
(274, 'Betania', 1067, 'c', NULL, NULL),
(275, 'Chaviruz', 1067, 'c', NULL, NULL),
(276, 'Dotoza', 1067, 'c', NULL, NULL),
(277, 'Chabirat', 1067, 'c', NULL, NULL),
(278, 'Corrientes', 1067, 'c', NULL, NULL),
(279, 'Bartola', 1067, 'c', NULL, NULL),
(280, 'Dos Quebradas', 1067, 'c', NULL, NULL),
(281, 'Vijugual', 1067, 'c', NULL, NULL),
(282, 'Marucha', 1067, 'c', NULL, NULL),
(283, 'El Pasto', 1067, 'c', NULL, NULL),
(284, 'Santa Catalina', 1067, 'c', NULL, NULL),
(285, 'El Queso', 1067, 'c', NULL, NULL),
(286, 'La Playa', 1067, 'c', NULL, NULL),
(287, 'La Boca', 1067, 'c', NULL, NULL),
(288, 'Juan Nuñez', 1067, 'c', NULL, NULL),
(289, 'Juan Santos', 1067, 'c', NULL, NULL),
(290, 'San Bartolo', 1067, 'c', NULL, NULL),
(291, 'San Lorenzo', 1067, 'c', NULL, NULL),
(292, 'California', 1067, 'c', NULL, NULL),
(293, 'El Venado', 1067, 'c', NULL, NULL),
(294, 'Nicolas Ramos', 1067, 'c', NULL, NULL),
(295, 'Hidalgo', 1067, 'c', NULL, NULL),
(296, 'Redondito', 1067, 'c', NULL, NULL),
(297, 'Concepcion', 1067, 'c', NULL, NULL),
(298, 'Callanero', 1067, 'c', NULL, NULL),
(299, 'San Pablo', 1067, 'c', NULL, NULL),
(300, 'Cascajita', 1067, 'c', NULL, NULL),
(301, 'Puerto Naya', 1067, 'c', NULL, NULL),
(302, 'Guadualito', 1067, 'c', NULL, NULL),
(303, 'Solano', 1067, 'c', NULL, NULL),
(304, 'Saladito', 1067, 'c', NULL, NULL),
(305, 'Mina', 1067, 'c', NULL, NULL),
(306, 'Baudo', 1067, 'c', NULL, NULL),
(307, 'Marucha', 1067, 'c', NULL, NULL),
(308, 'Calle Larga', 1067, 'c', NULL, NULL),
(309, 'Merejildo', 1067, 'c', NULL, NULL),
(310, 'Cordoba', 1067, 'c', NULL, NULL),
(311, 'Bendiciones', 1067, 'c', NULL, NULL),
(312, 'Santa Helena', 1067, 'c', NULL, NULL),
(313, 'La Esperanza', 1067, 'c', NULL, NULL),
(314, 'Bodegas (Km 34)', 1067, 'c', NULL, NULL),
(315, 'Palito', 1067, 'c', NULL, NULL),
(316, 'Camino Viejo (Km 40)', 1067, 'c', NULL, NULL),
(317, 'Km 21', 1067, 'c', NULL, NULL),
(318, 'Km 32', 1067, 'c', NULL, NULL),
(319, 'El Cafetal', 1067, 'c', NULL, NULL),
(320, 'Citronela', 1067, 'c', NULL, NULL),
(321, 'La Sierpe', 1067, 'c', NULL, NULL),
(322, 'Zaragoza', 1067, 'c', NULL, NULL),
(323, 'Triana', 1067, 'c', NULL, NULL),
(324, 'San Cipriano', 1067, 'c', NULL, NULL),
(325, 'El Salto', 1067, 'c', NULL, NULL),
(326, 'El Oso', 1067, 'c', NULL, NULL),
(327, 'Caserio I', 1067, 'c', NULL, NULL),
(328, 'Caserio II', 1067, 'c', NULL, NULL),
(329, 'Cisneros', 1067, 'c', NULL, NULL),
(330, 'La Delfina', 1067, 'c', NULL, NULL),
(331, 'Pueblo Nuevo', 1067, 'c', NULL, NULL),
(332, 'La Sipia', 1067, 'c', NULL, NULL),
(333, 'Planadas', 1067, 'c', NULL, NULL),
(334, 'El Cedro', 1067, 'c', NULL, NULL),
(335, 'Balsitos', 1067, 'c', NULL, NULL),
(336, 'Bendiciones', 1067, 'c', NULL, NULL),
(337, 'Caserio III', 1067, 'c', NULL, NULL),
(338, 'Caserio IV', 1067, 'c', NULL, NULL),
(339, 'Caserio V', 1067, 'c', NULL, NULL),
(340, 'El Carmelo', 1067, 'c', NULL, NULL),
(341, 'La Vibora', 1067, 'c', NULL, NULL),
(342, 'La Laguna', 1067, 'c', NULL, NULL),
(343, 'Limones', 1067, 'c', NULL, NULL),
(344, 'Julio Villegas', 1067, 'c', NULL, NULL),
(345, 'Peñitos', 1067, 'c', NULL, NULL),
(346, 'Perito', 1067, 'c', NULL, NULL),
(347, 'Playa Larga', 1067, 'c', NULL, NULL),
(348, 'Sombrerillo', 1067, 'c', NULL, NULL),
(349, 'La Delfinsa', 1067, 'c', NULL, NULL),
(1054, 'El Congal', 1054, 'v', NULL, NULL),
(1055, 'La Estrella', 1054, 'v', NULL, NULL),
(1056, 'La Cuchilla', 1054, 'v', NULL, NULL),
(1059, 'El Dinde', 1054, 'v', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `paiss_id` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`, `paiss_id`) VALUES
(1, 'Amazonas', 52),
(2, 'Antioquia', 52),
(3, 'Arauca', 52),
(4, 'Atlántico', 52),
(5, 'Bolívar', 52),
(6, 'Boyacá', 52),
(7, 'Caldas', 52),
(8, 'Caquetá', 52),
(9, 'Casanare', 52),
(10, 'Cauca', 52),
(11, 'Cesar', 52),
(12, 'Chocó', 52),
(13, 'Córdoba', 52),
(14, 'Cundinamarca', 52),
(15, 'Guainía', 52),
(16, 'Guaviare', 52),
(17, 'Huila', 52),
(18, 'La guajira', 52),
(19, 'Magdalena', 52),
(20, 'Meta', 52),
(21, 'Nariño', 52),
(22, 'Norte de santander', 52),
(23, 'Putumayo', 52),
(24, 'Quindío', 52),
(25, 'Risaralda', 52),
(26, 'San andrés y providencia', 52),
(27, 'Santander', 52),
(28, 'Sucre', 52),
(29, 'Tolima', 52),
(30, 'Valle del cauca', 52),
(31, 'Vaupés', 52),
(32, 'Vichada', 52);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directorios`
--

CREATE TABLE IF NOT EXISTS `directorios` (
  `id` bigint(20) NOT NULL,
  `titulo` varchar(145) DEFAULT NULL,
  `descripcion` text,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `direccion` text,
  `categoria_directorio_id` bigint(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `embalajes`
--

CREATE TABLE IF NOT EXISTS `embalajes` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `embalajes`
--

INSERT INTO `embalajes` (`id`, `nombre`) VALUES
(3, 'Bolsa'),
(2, 'Caja'),
(1, 'Costal'),
(4, 'Maduro'),
(5, 'Verde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa_internacionals`
--

CREATE TABLE IF NOT EXISTS `empresa_internacionals` (
  `id` bigint(20) NOT NULL,
  `persona_contacto` varchar(45) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `paiss_id` bigint(20) NOT NULL,
  `ciudad` varchar(145) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa_internacionals`
--

INSERT INTO `empresa_internacionals` (`id`, `persona_contacto`, `nombre`, `user_id`, `paiss_id`, `ciudad`, `created`, `updated`) VALUES
(1, 'FRANK MOSSE', NULL, 97, 1, 'maaa', '2015-09-28 19:27:19', '2015-09-28 19:27:19'),
(2, 'FRANK MOSSE', NULL, 98, 1, 'maaa', '2015-09-28 19:27:56', '2015-09-28 19:27:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa_nacionals`
--

CREATE TABLE IF NOT EXISTS `empresa_nacionals` (
  `id` bigint(20) NOT NULL,
  `razon_social` varchar(45) NOT NULL,
  `representante_legal` varchar(45) NOT NULL,
  `persona_contacto` varchar(45) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `ciudad_id` bigint(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa_nacionals`
--

INSERT INTO `empresa_nacionals` (`id`, `razon_social`, `representante_legal`, `persona_contacto`, `user_id`, `ciudad_id`, `created`, `updated`) VALUES
(16, 'luis bedoya', 'carlos bejarano', 'luis jaramillo', 84, 12, '2015-09-27 19:39:34', '2015-09-27 19:39:34'),
(17, 'empresa jjjjj', 'laura lopez', 'cristina sofia', 87, 1, '2015-09-27 19:50:57', '2015-09-27 19:50:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL COMMENT 'usuario que creo',
  `titulo` varchar(45) DEFAULT NULL,
  `descripcion` text,
  `fecha_evento` datetime DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `google_map_id` bigint(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `firmezas`
--

CREATE TABLE IF NOT EXISTS `firmezas` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formas`
--

CREATE TABLE IF NOT EXISTS `formas` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foros`
--

CREATE TABLE IF NOT EXISTS `foros` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) NOT NULL COMMENT 'nombre del tema',
  `descripcion` text,
  `estado` int(11) DEFAULT NULL,
  `categoria_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE IF NOT EXISTS `generos` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `nombre`, `created`, `updated`) VALUES
(1, 'Femenino', '2015-09-25 00:00:00', '2015-09-25 00:00:00'),
(2, 'Masculino', '2015-09-25 00:00:00', '2015-09-25 00:00:00'),
(3, 'LGTBI', '2015-09-25 00:00:00', '2015-09-25 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `google_maps`
--

CREATE TABLE IF NOT EXISTS `google_maps` (
  `id` int(11) NOT NULL,
  `owner_id` bigint(20) DEFAULT NULL,
  `address1` varchar(200) DEFAULT 'Dirección con barrio',
  `latitude1` float DEFAULT NULL,
  `longitude1` float DEFAULT NULL,
  `formated_address1` varchar(200) DEFAULT NULL,
  `address2` varchar(200) DEFAULT 'Dirección sin barrio',
  `latitude2` float DEFAULT NULL,
  `longitude2` float DEFAULT NULL,
  `formated_address2` varchar(200) DEFAULT NULL,
  `address3` varchar(200) DEFAULT 'Dirección de votación',
  `latitude3` float DEFAULT NULL,
  `longitude3` float DEFAULT NULL,
  `formated_address3` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interaccions`
--

CREATE TABLE IF NOT EXISTS `interaccions` (
  `id` bigint(20) NOT NULL,
  `mensaje` text,
  `user_id` bigint(20) DEFAULT NULL COMMENT 'Usuario que escribe',
  `producto_id` bigint(20) NOT NULL,
  `created` date DEFAULT NULL,
  `updated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lavados`
--

CREATE TABLE IF NOT EXISTS `lavados` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `madurezs`
--

CREATE TABLE IF NOT EXISTS `madurezs` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `munipicio_accions`
--

CREATE TABLE IF NOT EXISTS `munipicio_accions` (
  `id` bigint(20) NOT NULL,
  `administrador_id` bigint(20) NOT NULL,
  `ciudad_id` bigint(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedads`
--

CREATE TABLE IF NOT EXISTS `novedads` (
  `id` bigint(20) NOT NULL,
  `titulo` varchar(105) DEFAULT NULL,
  `texto` text,
  `user_id` bigint(20) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `categoria_novedad_id` bigint(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paiss`
--

CREATE TABLE IF NOT EXISTS `paiss` (
  `id` bigint(20) NOT NULL,
  `PAI_ISONUM` varchar(45) DEFAULT NULL,
  `PAI_ISO2` varchar(45) DEFAULT NULL,
  `PAI_ISO3` varchar(45) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paiss`
--

INSERT INTO `paiss` (`id`, `PAI_ISONUM`, `PAI_ISO2`, `PAI_ISO3`, `nombre`) VALUES
(1, '4', 'AF', 'AFG', 'Afganistán'),
(2, '248', 'AX', 'ALA', 'Islas Gland'),
(3, '8', 'AL', 'ALB', 'Albania'),
(4, '276', 'DE', 'DEU', 'Alemania'),
(5, '20', 'AD', 'AND', 'Andorra'),
(6, '24', 'AO', 'AGO', 'Angola'),
(7, '660', 'AI', 'AIA', 'Anguilla'),
(8, '10', 'AQ', 'ATA', 'Antártida'),
(9, '28', 'AG', 'ATG', 'Antigua y Barbuda'),
(10, '530', 'AN', 'ANT', 'Antillas Holandesas'),
(11, '682', 'SA', 'SAU', 'Arabia Saudí'),
(12, '12', 'DZ', 'DZA', 'Argelia'),
(13, '32', 'AR', 'ARG', 'Argentina'),
(14, '51', 'AM', 'ARM', 'Armenia'),
(15, '533', 'AW', 'ABW', 'Aruba'),
(16, '36', 'AU', 'AUS', 'Australia'),
(17, '40', 'AT', 'AUT', 'Austria'),
(18, '31', 'AZ', 'AZE', 'Azerbaiyán'),
(19, '44', 'BS', 'BHS', 'Bahamas'),
(20, '48', 'BH', 'BHR', 'Bahréin'),
(21, '50', 'BD', 'BGD', 'Bangladesh'),
(22, '52', 'BB', 'BRB', 'Barbados'),
(23, '112', 'BY', 'BLR', 'Bielorrusia'),
(24, '56', 'BE', 'BEL', 'Bélgica'),
(25, '84', 'BZ', 'BLZ', 'Belice'),
(26, '204', 'BJ', 'BEN', 'Benin'),
(27, '60', 'BM', 'BMU', 'Bermudas'),
(28, '64', 'BT', 'BTN', 'Bhután'),
(29, '68', 'BO', 'BOL', 'Bolivia'),
(30, '70', 'BA', 'BIH', 'Bosnia y Herzegovina'),
(31, '72', 'BW', 'BWA', 'Botsuana'),
(32, '74', 'BV', 'BVT', 'Isla Bouvet'),
(33, '76', 'BR', 'BRA', 'Brasil'),
(34, '96', 'BN', 'BRN', 'Brunéi'),
(35, '100', 'BG', 'BGR', 'Bulgaria'),
(36, '854', 'BF', 'BFA', 'Burkina Faso'),
(37, '108', 'BI', 'BDI', 'Burundi'),
(38, '132', 'CV', 'CPV', 'Cabo Verde'),
(39, '136', 'KY', 'CYM', 'Islas Caimán'),
(40, '116', 'KH', 'KHM', 'Camboya'),
(41, '120', 'CM', 'CMR', 'Camerún'),
(42, '124', 'CA', 'CAN', 'Canadá'),
(43, '140', 'CF', 'CAF', 'República Centroafricana'),
(44, '148', 'TD', 'TCD', 'Chad'),
(45, '203', 'CZ', 'CZE', 'República Checa'),
(46, '152', 'CL', 'CHL', 'Chile'),
(47, '156', 'CN', 'CHN', 'China'),
(48, '196', 'CY', 'CYP', 'Chipre'),
(49, '162', 'CX', 'CXR', 'Isla de Navidad'),
(50, '336', 'VA', 'VAT', 'Ciudad del Vaticano'),
(51, '166', 'CC', 'CCK', 'Islas Cocos'),
(52, '170', 'CO', 'COL', 'Colombia'),
(53, '174', 'KM', 'COM', 'Comoras'),
(54, '180', 'CD', 'COD', 'República Democrática del Congo'),
(55, '178', 'CG', 'COG', 'Congo'),
(56, '184', 'CK', 'COK', 'Islas Cook'),
(57, '408', 'KP', 'PRK', 'Corea del Norte'),
(58, '410', 'KR', 'KOR', 'Corea del Sur'),
(59, '384', 'CI', 'CIV', 'Costa de Marfil'),
(60, '188', 'CR', 'CRI', 'Costa Rica'),
(61, '191', 'HR', 'HRV', 'Croacia'),
(62, '192', 'CU', 'CUB', 'Cuba'),
(63, '208', 'DK', 'DNK', 'Dinamarca'),
(64, '212', 'DM', 'DMA', 'Dominica'),
(65, '214', 'DO', 'DOM', 'República Dominicana'),
(66, '218', 'EC', 'ECU', 'Ecuador'),
(67, '818', 'EG', 'EGY', 'Egipto'),
(68, '222', 'SV', 'SLV', 'El Salvador'),
(69, '784', 'AE', 'ARE', 'Emiratos Árabes Unidos'),
(70, '232', 'ER', 'ERI', 'Eritrea'),
(71, '703', 'SK', 'SVK', 'Eslovaquia'),
(72, '705', 'SI', 'SVN', 'Eslovenia'),
(73, '724', 'ES', 'ESP', 'España'),
(74, '581', 'UM', 'UMI', 'Islas ultramarinas de Estados Unidos'),
(75, '840', 'US', 'USA', 'Estados Unidos'),
(76, '233', 'EE', 'EST', 'Estonia'),
(77, '231', 'ET', 'ETH', 'Etiopía'),
(78, '234', 'FO', 'FRO', 'Islas Feroe'),
(79, '608', 'PH', 'PHL', 'Filipinas'),
(80, '246', 'FI', 'FIN', 'Finlandia'),
(81, '242', 'FJ', 'FJI', 'Fiyi'),
(82, '250', 'FR', 'FRA', 'Francia'),
(83, '266', 'GA', 'GAB', 'Gabón'),
(84, '270', 'GM', 'GMB', 'Gambia'),
(85, '268', 'GE', 'GEO', 'Georgia'),
(86, '239', 'GS', 'SGS', 'Islas Georgias del Sur y Sandwich del Sur'),
(87, '288', 'GH', 'GHA', 'Ghana'),
(88, '292', 'GI', 'GIB', 'Gibraltar'),
(89, '308', 'GD', 'GRD', 'Granada'),
(90, '300', 'GR', 'GRC', 'Grecia'),
(91, '304', 'GL', 'GRL', 'Groenlandia'),
(92, '312', 'GP', 'GLP', 'Guadalupe'),
(93, '316', 'GU', 'GUM', 'Guam'),
(94, '320', 'GT', 'GTM', 'Guatemala'),
(95, '254', 'GF', 'GUF', 'Guayana Francesa'),
(96, '324', 'GN', 'GIN', 'Guinea'),
(97, '226', 'GQ', 'GNQ', 'Guinea Ecuatorial'),
(98, '624', 'GW', 'GNB', 'Guinea-Bissau'),
(99, '328', 'GY', 'GUY', 'Guyana'),
(100, '332', 'HT', 'HTI', 'Haití'),
(101, '334', 'HM', 'HMD', 'Islas Heard y McDonald'),
(102, '340', 'HN', 'HND', 'Honduras'),
(103, '344', 'HK', 'HKG', 'Hong Kong'),
(104, '348', 'HU', 'HUN', 'Hungría'),
(105, '356', 'IN', 'IND', 'India'),
(106, '360', 'ID', 'IDN', 'Indonesia'),
(107, '364', 'IR', 'IRN', 'Irán'),
(108, '368', 'IQ', 'IRQ', 'Iraq'),
(109, '372', 'IE', 'IRL', 'Irlanda'),
(110, '352', 'IS', 'ISL', 'Islandia'),
(111, '376', 'IL', 'ISR', 'Israel'),
(112, '380', 'IT', 'ITA', 'Italia'),
(113, '388', 'JM', 'JAM', 'Jamaica'),
(114, '392', 'JP', 'JPN', 'Japón'),
(115, '400', 'JO', 'JOR', 'Jordania'),
(116, '398', 'KZ', 'KAZ', 'Kazajstán'),
(117, '404', 'KE', 'KEN', 'Kenia'),
(118, '417', 'KG', 'KGZ', 'Kirguistán'),
(119, '296', 'KI', 'KIR', 'Kiribati'),
(120, '414', 'KW', 'KWT', 'Kuwait'),
(121, '418', 'LA', 'LAO', 'Laos'),
(122, '426', 'LS', 'LSO', 'Lesotho'),
(123, '428', 'LV', 'LVA', 'Letonia'),
(124, '422', 'LB', 'LBN', 'Líbano'),
(125, '430', 'LR', 'LBR', 'Liberia'),
(126, '434', 'LY', 'LBY', 'Libia'),
(127, '438', 'LI', 'LIE', 'Liechtenstein'),
(128, '440', 'LT', 'LTU', 'Lituania'),
(129, '442', 'LU', 'LUX', 'Luxemburgo'),
(130, '446', 'MO', 'MAC', 'Macao'),
(131, '807', 'MK', 'MKD', 'ARY Macedonia'),
(132, '450', 'MG', 'MDG', 'Madagascar'),
(133, '458', 'MY', 'MYS', 'Malasia'),
(134, '454', 'MW', 'MWI', 'Malawi'),
(135, '462', 'MV', 'MDV', 'Maldivas'),
(136, '466', 'ML', 'MLI', 'Malí'),
(137, '470', 'MT', 'MLT', 'Malta'),
(138, '238', 'FK', 'FLK', 'Islas Malvinas'),
(139, '580', 'MP', 'MNP', 'Islas Marianas del Norte'),
(140, '504', 'MA', 'MAR', 'Marruecos'),
(141, '584', 'MH', 'MHL', 'Islas Marshall'),
(142, '474', 'MQ', 'MTQ', 'Martinica'),
(143, '480', 'MU', 'MUS', 'Mauricio'),
(144, '478', 'MR', 'MRT', 'Mauritania'),
(145, '175', 'YT', 'MYT', 'Mayotte'),
(146, '484', 'MX', 'MEX', 'México'),
(147, '583', 'FM', 'FSM', 'Micronesia'),
(148, '498', 'MD', 'MDA', 'Moldavia'),
(149, '492', 'MC', 'MCO', 'Mónaco'),
(150, '496', 'MN', 'MNG', 'Mongolia'),
(151, '500', 'MS', 'MSR', 'Montserrat'),
(152, '508', 'MZ', 'MOZ', 'Mozambique'),
(153, '104', 'MM', 'MMR', 'Myanmar'),
(154, '516', 'NA', 'NAM', 'Namibia'),
(155, '520', 'NR', 'NRU', 'Nauru'),
(156, '524', 'NP', 'NPL', 'Nepal'),
(157, '558', 'NI', 'NIC', 'Nicaragua'),
(158, '562', 'NE', 'NER', 'Níger'),
(159, '566', 'NG', 'NGA', 'Nigeria'),
(160, '570', 'NU', 'NIU', 'Niue'),
(161, '574', 'NF', 'NFK', 'Isla Norfolk'),
(162, '578', 'NO', 'NOR', 'Noruega'),
(163, '540', 'NC', 'NCL', 'Nueva Caledonia'),
(164, '554', 'NZ', 'NZL', 'Nueva Zelanda'),
(165, '512', 'OM', 'OMN', 'Omán'),
(166, '528', 'NL', 'NLD', 'Países Bajos'),
(167, '586', 'PK', 'PAK', 'Pakistán'),
(168, '585', 'PW', 'PLW', 'Palau'),
(169, '275', 'PS', 'PSE', 'Palestina'),
(170, '591', 'PA', 'PAN', 'Panamá'),
(171, '598', 'PG', 'PNG', 'Papúa Nueva Guinea'),
(172, '600', 'PY', 'PRY', 'Paraguay'),
(173, '604', 'PE', 'PER', 'Perú'),
(174, '612', 'PN', 'PCN', 'Islas Pitcairn'),
(175, '258', 'PF', 'PYF', 'Polinesia Francesa'),
(176, '616', 'PL', 'POL', 'Polonia'),
(177, '620', 'PT', 'PRT', 'Portugal'),
(178, '630', 'PR', 'PRI', 'Puerto Rico'),
(179, '634', 'QA', 'QAT', 'Qatar'),
(180, '826', 'GB', 'GBR', 'Reino Unido'),
(181, '638', 'RE', 'REU', 'Reunión'),
(182, '646', 'RW', 'RWA', 'Ruanda'),
(183, '642', 'RO', 'ROU', 'Rumania'),
(184, '643', 'RU', 'RUS', 'Rusia'),
(185, '732', 'EH', 'ESH', 'Sahara Occidental'),
(186, '90', 'SB', 'SLB', 'Islas Salomón'),
(187, '882', 'WS', 'WSM', 'Samoa'),
(188, '16', 'AS', 'ASM', 'Samoa Americana'),
(189, '659', 'KN', 'KNA', 'San Cristóbal y Nevis'),
(190, '674', 'SM', 'SMR', 'San Marino'),
(191, '666', 'PM', 'SPM', 'San Pedro y Miquelón'),
(192, '670', 'VC', 'VCT', 'San Vicente y las Granadinas'),
(193, '654', 'SH', 'SHN', 'Santa Helena'),
(194, '662', 'LC', 'LCA', 'Santa Lucía'),
(195, '678', 'ST', 'STP', 'Santo Tomé y Príncipe'),
(196, '686', 'SN', 'SEN', 'Senegal'),
(197, '891', 'CS', 'SCG', 'Serbia y Montenegro'),
(198, '690', 'SC', 'SYC', 'Seychelles'),
(199, '694', 'SL', 'SLE', 'Sierra Leona'),
(200, '702', 'SG', 'SGP', 'Singapur'),
(201, '760', 'SY', 'SYR', 'Siria'),
(202, '706', 'SO', 'SOM', 'Somalia'),
(203, '144', 'LK', 'LKA', 'Sri Lanka'),
(204, '748', 'SZ', 'SWZ', 'Suazilandia'),
(205, '710', 'ZA', 'ZAF', 'Sudáfrica'),
(206, '736', 'SD', 'SDN', 'Sudán'),
(207, '752', 'SE', 'SWE', 'Suecia'),
(208, '756', 'CH', 'CHE', 'Suiza'),
(209, '740', 'SR', 'SUR', 'Surinam'),
(210, '744', 'SJ', 'SJM', 'Svalbard y Jan Mayen'),
(211, '764', 'TH', 'THA', 'Tailandia'),
(212, '158', 'TW', 'TWN', 'Taiwán'),
(213, '834', 'TZ', 'TZA', 'Tanzania'),
(214, '762', 'TJ', 'TJK', 'Tayikistán'),
(215, '86', 'IO', 'IOT', 'Territorio Británico del Océano Índico'),
(216, '260', 'TF', 'ATF', 'Territorios Australes Franceses'),
(217, '626', 'TL', 'TLS', 'Timor Oriental'),
(218, '768', 'TG', 'TGO', 'Togo'),
(219, '772', 'TK', 'TKL', 'Tokelau'),
(220, '776', 'TO', 'TON', 'Tonga'),
(221, '780', 'TT', 'TTO', 'Trinidad y Tobago'),
(222, '788', 'TN', 'TUN', 'Túnez'),
(223, '796', 'TC', 'TCA', 'Islas Turcas y Caicos'),
(224, '795', 'TM', 'TKM', 'Turkmenistán'),
(225, '792', 'TR', 'TUR', 'Turquía'),
(226, '798', 'TV', 'TUV', 'Tuvalu'),
(227, '804', 'UA', 'UKR', 'Ucrania'),
(228, '800', 'UG', 'UGA', 'Uganda'),
(229, '858', 'UY', 'URY', 'Uruguay'),
(230, '860', 'UZ', 'UZB', 'Uzbekistán'),
(231, '548', 'VU', 'VUT', 'Vanuatu'),
(232, '862', 'VE', 'VEN', 'Venezuela'),
(233, '704', 'VN', 'VNM', 'Vietnam'),
(234, '92', 'VG', 'VGB', 'Islas Vírgenes Británicas'),
(235, '850', 'VI', 'VIR', 'Islas Vírgenes de los Estados Unidos'),
(236, '876', 'WF', 'WLF', 'Wallis y Futuna'),
(237, '887', 'YE', 'YEM', 'Yemen'),
(238, '262', 'DJ', 'DJI', 'Yibuti'),
(239, '894', 'ZM', 'ZMB', 'Zambia'),
(240, '716', 'ZW', 'ZWE', 'Zimbabue');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntasfrecuentes`
--

CREATE TABLE IF NOT EXISTS `preguntasfrecuentes` (
  `id` bigint(20) NOT NULL,
  `pregunta` text NOT NULL,
  `respuesta` text,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preregistros`
--

CREATE TABLE IF NOT EXISTS `preregistros` (
  `id` int(11) NOT NULL,
  `codigo` varchar(45) DEFAULT NULL,
  `identificacion` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `num_consulado` varchar(45) DEFAULT NULL,
  `num_idoniedad` varchar(45) DEFAULT NULL,
  `nit` varchar(45) DEFAULT NULL,
  `rut` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `usuario_preregistro` bigint(20) DEFAULT NULL COMMENT 'Usuario a quien se le genera el pre-registro',
  `user_id` bigint(20) NOT NULL COMMENT 'USUARIO QUE CREO QUE EL PREREGISTRO',
  `estado` varchar(45) DEFAULT NULL,
  `ubicacion` varchar(45) DEFAULT NULL,
  `paiss_id` varchar(45) DEFAULT NULL,
  `departamento_id` varchar(45) DEFAULT NULL,
  `ciudad_id` varchar(45) DEFAULT NULL,
  `created` varchar(45) DEFAULT NULL,
  `updated` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `preregistros`
--

INSERT INTO `preregistros` (`id`, `codigo`, `identificacion`, `email`, `nombres`, `apellidos`, `num_consulado`, `num_idoniedad`, `nit`, `rut`, `tipo`, `usuario_preregistro`, `user_id`, `estado`, `ubicacion`, `paiss_id`, `departamento_id`, `ciudad_id`, `created`, `updated`) VALUES
(1, 'uOFqlLkF5w', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'agr', NULL, 0, NULL, NULL, NULL, NULL, NULL, '1443150402', '1443150402'),
(2, 'xjNj8GOYte', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'agr', NULL, 0, NULL, NULL, NULL, NULL, NULL, '1443150405', '1443150405'),
(3, '69LDKp1uca', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'agr', NULL, 0, NULL, NULL, NULL, NULL, NULL, '1443150406', '1443150406'),
(4, '38mTLAZstj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'com', NULL, 0, NULL, NULL, NULL, NULL, NULL, '1443150408', '1443150408'),
(5, 'SmkRKRteCh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'com', NULL, 0, NULL, NULL, NULL, NULL, NULL, '1443150409', '1443150409'),
(6, 'UwwAp36Ozl', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'emp', NULL, 0, NULL, NULL, NULL, NULL, NULL, '1443150412', '1443150412'),
(7, '5U0AbbbmG7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'emp', NULL, 0, NULL, NULL, NULL, NULL, NULL, '1443150413', '1443150413'),
(8, 'o5C4aJRKWL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'agr', NULL, 0, NULL, NULL, NULL, NULL, NULL, '1443156677', '1443156677'),
(9, 'cfoWeDDEGK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'emp', NULL, 0, NULL, NULL, NULL, NULL, NULL, '1443156681', '1443156681'),
(10, 'BwdMLI8ux1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'com', NULL, 0, NULL, NULL, NULL, NULL, NULL, '1443156686', '1443156686'),
(11, 'zt8lBunexh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'emp', NULL, 0, NULL, NULL, NULL, NULL, NULL, '1443156691', '1443156691'),
(12, 'Fyd61i3RFp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'com', NULL, 0, NULL, NULL, NULL, NULL, NULL, '1443156705', '1443156705'),
(13, 'Umh6OrQCI2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'empnac', NULL, 0, NULL, NULL, NULL, NULL, NULL, '1443156936', '1443156936'),
(14, 'm9eYfMryDJ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'comnac', NULL, 0, NULL, NULL, NULL, NULL, NULL, '1443156938', '1443156938'),
(15, 'emNHM60DbC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'empint', NULL, 0, NULL, NULL, NULL, NULL, NULL, '1443156940', '1443156940'),
(16, 'gWPnStFzXd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'comint', NULL, 0, NULL, NULL, NULL, NULL, NULL, '1443156943', '1443156943'),
(17, 'nX9WjePtXa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'empnac', NULL, 0, NULL, NULL, NULL, NULL, NULL, '1443156998', '1443156998'),
(18, 'Lc7kMlPQYF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'comnac', NULL, 0, NULL, NULL, NULL, NULL, NULL, '1443157001', '1443157001'),
(21, 'CY0Cf7SW3B', '7878787878', 'jaime1515', 'raul mejo', 'carlos', NULL, NULL, NULL, NULL, 'agr', NULL, 62, NULL, NULL, NULL, NULL, NULL, '1443501445', '1443501445'),
(22, 'b4a8GIPK0A', NULL, 'carrefour', NULL, NULL, NULL, NULL, '78787878', NULL, 'empnac', NULL, 62, NULL, NULL, NULL, '2', '13', '1443501744', '1443501744'),
(23, 'nkXAUMCC1u', '989898989', 'nnnnnnn@gmail.com', 'kailklk', 'gonzales', NULL, NULL, NULL, NULL, 'comint', NULL, 62, NULL, NULL, '4', NULL, NULL, '1443501902', '1443501902'),
(24, 'uh0jkLPPQK', NULL, 'rrrrrrrr@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'empint', NULL, 62, NULL, NULL, '8', NULL, NULL, '1443501988', '1443501988');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentacions`
--

CREATE TABLE IF NOT EXISTS `presentacions` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `presentacions`
--

INSERT INTO `presentacions` (`id`, `nombre`) VALUES
(1, 'Presentación 1'),
(2, 'Presentación 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productobases`
--

CREATE TABLE IF NOT EXISTS `productobases` (
  `id` bigint(20) NOT NULL,
  `nombre_cientifico` varchar(45) NOT NULL,
  `nombre_comun` varchar(45) NOT NULL,
  `variedad_id` bigint(20) NOT NULL,
  `foto_por_defecto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productobases`
--

INSERT INTO `productobases` (`id`, `nombre_cientifico`, `nombre_comun`, `variedad_id`, `foto_por_defecto`) VALUES
(7, 'limotus', 'limon', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` bigint(20) NOT NULL,
  `productobase_id` bigint(20) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `lavado_id` bigint(20) NOT NULL,
  `embalaje_id` bigint(20) NOT NULL,
  `fecha_cosecha` varchar(25) DEFAULT NULL,
  `fecha_siembra` varchar(25) DEFAULT NULL,
  `estado_id` bigint(20) NOT NULL,
  `peso_gr` float DEFAULT NULL,
  `peso_lb` float DEFAULT NULL,
  `peso_kg` float DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `cantidad` bigint(20) DEFAULT NULL,
  `color_id` bigint(20) NOT NULL,
  `temperatura` bigint(20) DEFAULT NULL,
  `altura_msnm` bigint(20) DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `calidad_id` bigint(20) NOT NULL,
  `forma_id` bigint(20) NOT NULL,
  `firmeza_id` bigint(20) DEFAULT NULL,
  `presentacion_id` bigint(20) NOT NULL,
  `brillo_id` bigint(20) NOT NULL,
  `sanidad_id` bigint(20) NOT NULL,
  `madurez_id` bigint(20) NOT NULL,
  `created` date DEFAULT NULL,
  `updated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_usuarios`
--

CREATE TABLE IF NOT EXISTS `productos_usuarios` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `producto_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntuacions`
--

CREATE TABLE IF NOT EXISTS `puntuacions` (
  `id` bigint(20) NOT NULL,
  `puntaje` int(11) DEFAULT NULL,
  `calificador` int(11) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `comentarios` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE IF NOT EXISTS `rols` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `abr` varchar(45) NOT NULL DEFAULT 'Abreviatura' COMMENT 'Abreviatura'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id`, `nombre`, `abr`) VALUES
(1, 'Administrador', 'adm'),
(2, 'Agricultor', 'agr'),
(3, 'Empresa nacional', 'empnac'),
(4, 'Sub-Administrador', 'subadmin'),
(5, 'Comprador nacional', 'comnac'),
(6, 'Comprador internacional', 'comint'),
(7, 'Empresa internacional', 'empint');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sanidads`
--

CREATE TABLE IF NOT EXISTS `sanidads` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE IF NOT EXISTS `temas` (
  `id` bigint(20) NOT NULL,
  `contenido` varchar(45) DEFAULT NULL,
  `foro_id` bigint(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoAgriculturas`
--

CREATE TABLE IF NOT EXISTS `tipoAgriculturas` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipoAgriculturas`
--

INSERT INTO `tipoAgriculturas` (`id`, `nombre`) VALUES
(1, 'De secano'),
(2, 'De regadío'),
(3, 'Agricultura de subsistencia'),
(4, 'Agricultura industrial'),
(5, 'Agricultura de mercado'),
(6, 'Agricultura intensiva'),
(7, 'Agricultura extensiva'),
(8, 'Agricultura tradicional'),
(9, 'Agricultura industrial'),
(10, 'Agricultura biológica'),
(11, 'Agricultura ecológica'),
(12, 'Agricultura natural');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `identificacion` varchar(45) DEFAULT NULL COMMENT 'Cedula de persona o NIT',
  `rut` varchar(45) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `rol_id` bigint(20) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `comentarios` text,
  `created` date DEFAULT NULL,
  `updated` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `foto`, `username`, `password`, `identificacion`, `rut`, `email`, `rol_id`, `telefono`, `celular`, `direccion`, `comentarios`, `created`, `updated`) VALUES
(46, '', 'rambo1', '123456789', '2566656', NULL, 'carlos@gmail.com', 1, '32655696', '32555656', 'calle 45 # 45 - 96', 'hola esto es un comentario', '2015-09-27', '2015-09-27'),
(49, '', 'luis2424', '123456789', '2121212', NULL, 'luis@gmail.com', 1, '6333333', '32166566', 'calle 45 # 10 - 25', 'comentario', '2015-09-27', '2015-09-27'),
(50, '', 'klinger22', '123456789', '8989898989', NULL, 'bethy@gmail.com', 1, '78787878', '32656566', 'calle 45 # 42 - 96', 'comentario', '2015-09-27', '2015-09-27'),
(51, '', 'jessica21', '123456789', '6656565656', NULL, 'jessica@gmail.com', 1, '74545545', '23333333', 'calle 42 # 12 - 96', 'comentatio', '2015-09-27', '2015-09-27'),
(52, '', 'albert21', '123456789', '898989899', NULL, 'albert25@gmail.com', 1, '78787878', '32323232', 'calle 42 # 12 - 36', 'comentario', '2015-09-27', '2015-09-27'),
(53, '', 'luis2121', '123456789', '36333656', NULL, 'luis222@gmail.com', 2, '96666989', '32222222', NULL, 'comentario', '2015-09-27', '2015-09-27'),
(54, '', 'mlai222', '123456789', '3656565656', NULL, 'jjhhj@gmail.com', 2, '889898989', '32112121', NULL, 'comentario', '2015-09-27', '2015-09-27'),
(55, '', 'camilo25656', '123456789', '2323232', NULL, 'miguel@gmail.com', 2, '2565656', '212121212', NULL, '', '2015-09-27', '2015-09-27'),
(56, '', 'camilo25656q', '123456789', '23232324', NULL, 'miguelq@gmail.com', 2, '2565656', '212121212', NULL, '', '2015-09-27', '2015-09-27'),
(59, '', 'killlloaaa', '123456789', '123365656', NULL, 'jjjjjjj@gmail.com', 2, '25656565', '122232332', NULL, 'comentario', '2015-09-27', '2015-09-27'),
(60, '', 'krrilllloaaa', '123456789', '1233625656', NULL, 'rrrjjjjjjj@gmail.com', 2, '25656565', '122232332', NULL, 'comentario', '2015-09-27', '2015-09-27'),
(61, '', 'krrilla', '123456789', '123656', NULL, 'rrrjjjj@gmail.com', 2, '25656565', '122232332', NULL, 'comentario', '2015-09-27', '2015-09-27'),
(62, '', 'krril', '123456789', '12223656', NULL, 'rrrjj@gmail.com', 2, '25656565', '122232332', NULL, 'comentario', '2015-09-27', '2015-09-27'),
(63, '', 'krril24', '123456789', '1224223656', NULL, 'rrrjj22@gmail.com', 2, '25656565', '122232332', NULL, 'comentario', '2015-09-27', '2015-09-27'),
(64, '', 'krril242', '123456789', '1224223', NULL, 'rr2rjj22@gmail.com', 2, '25656565', '122232332', NULL, 'comentario', '2015-09-27', '2015-09-27'),
(65, '', 'vvvvvv', '123456789', '23232323', NULL, 'vvvvv@gmail.com', 2, '25656565', '122232332', NULL, 'comentario', '2015-09-27', '2015-09-27'),
(77, '', 'camilo1515', '123456789', '1114114111411', NULL, 'camilo1515@gmail.com', 2, '25656565', '122232332', NULL, 'comentario', '2015-09-27', '2015-09-27'),
(79, '', 'camil1o1515', '123456789', '1114114111', NULL, 'cami1lo1515@gmail.com', 2, '25656565', '122232332', NULL, 'comentario', '2015-09-27', '2015-09-27'),
(80, '', 'camio1515', '123456789', '14114111', NULL, 'ca1515@gmail.com', 2, '25656565', '122232332', NULL, 'comentario', '2015-09-27', '2015-09-27'),
(81, '', 'maja25', '123456789', '2222222', NULL, 'fredy@gmail.com', 2, '3656565', '7855565', NULL, 'hola amigos', '2015-09-27', '2015-09-27'),
(82, '', 'francys22', '123456789', '78887878', NULL, 'francys@gmail.com', 4, '989898989', '12121212', 'calle 45 # 225 - 63', 'hola', '2015-09-27', '2015-09-27'),
(83, '', 'miller2525', '123456789', '145455454', NULL, 'nnnnnnnn@gmail.com', 1, '787878787', '78787878', 'calle 45 # 45 - 52', 'hola', '2015-09-27', '2015-09-27'),
(84, '', 'raul3636', '123456789', '', NULL, 'raul@gmail.com', 3, '12121212', '2565656', 'calle 45 # 12 - 96', 'hoa', '2015-09-27', '2015-09-27'),
(87, '', 'juliok22', '123456789', '87878788', '36556565656', 'nnnjk@gmail.com', 3, '788989899', '3212121212', 'calle 45 # 25 - 63', 'hola', '2015-09-27', '2015-09-27'),
(88, '', 'gotze21', '123456789', '12121212', NULL, 'raulqq@gmail.com', 6, '989898989', '12121212', 'calle 45 # 25 - 85', '', '2015-09-28', '2015-09-28'),
(89, 'BIMXWZGWEZQUCX1BNJAYPRPNZ.png', 'herson21', '123456789', '8989819899', NULL, 'herson@gmail.com', 6, '98989898', '32323232', 'calle 45 # 25', 'hola', '2015-09-28', '2015-09-28'),
(90, 'MECXSDFWJRCA1GFHUPZJOHKGP.png', 'lynoll2121', '123456789', '2322232323', NULL, 'nnnnnn@gmail.com', 6, '223232323', '212121212', 'calle 45 # 12 - 65', '', '2015-09-28', '2015-09-28'),
(91, 'MPBIWCIL1DAZSBCSSB1ERSJH1.png', 'helsin222', '123456789', '312121212', NULL, 'gelsin@gmail.com', 5, '1212121212', '32656565', 'calle 45 # 25 - 36', '', '2015-09-28', '2015-09-28'),
(92, 'JOFR0SXSFFWK2WS4WJA2QUHGU.png', 'camilo1', '123456789', '966996959', NULL, 'camilo@gmail.com', 6, '745454545', '65656565', 'calle 45 # 25 - 63', '', '2015-09-28', '2015-09-28'),
(97, 'AOYHSHDXXCM3FQNL0ZM3BEOOY.png', 'frank1322', '123456789', NULL, NULL, 'frank@gmail.com', 7, '9898989', '212121212', 'CALLE 12 - 25 # 23', '', '2015-09-28', '2015-09-28'),
(98, 'EQYKWBXSRRDGWWYBZ7XNOEF7L.png', 'frank13221', '123456789', NULL, NULL, 'frankq@gmail.com', 7, '9898989', '212121212', 'CALLE 12 - 25 # 23', '', '2015-09-28', '2015-09-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variedads`
--

CREATE TABLE IF NOT EXISTS `variedads` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `variedads`
--

INSERT INTO `variedads` (`id`, `nombre`) VALUES
(1, 'dad');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradors`
--
ALTER TABLE `administradors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_administradors_users1_idx` (`user_id`),
  ADD KEY `fk_administradors_generos1_idx` (`genero_id`);

--
-- Indices de la tabla `agricultors`
--
ALTER TABLE `agricultors`
  ADD PRIMARY KEY (`id`,`asociacion_id`),
  ADD KEY `fk_agricultors_users1_idx` (`user_id`),
  ADD KEY `fk_agricultors_generos1_idx` (`genero_id`),
  ADD KEY `fk_agricultors_corregimientos1_idx` (`corregimiento_id`),
  ADD KEY `fk_agricultors_asociacions1_idx` (`asociacion_id`);

--
-- Indices de la tabla `agricultor_asociacions`
--
ALTER TABLE `agricultor_asociacions`
  ADD PRIMARY KEY (`id`,`agricultor_id`,`asociacion_id`),
  ADD KEY `fk_agricultors_has_asociacions_asociacions1_idx` (`asociacion_id`),
  ADD KEY `fk_agricultors_has_asociacions_agricultors1_idx` (`agricultor_id`);

--
-- Indices de la tabla `agricultor_certificacions`
--
ALTER TABLE `agricultor_certificacions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_agricultors_has_certificacions_certificacions1_idx` (`certificacion_id`),
  ADD KEY `fk_agricultors_has_certificacions_agricultors1_idx` (`agricultor_id`);

--
-- Indices de la tabla `agricultor_tipo_agriculturas`
--
ALTER TABLE `agricultor_tipo_agriculturas`
  ADD PRIMARY KEY (`id`,`agricultor_id`,`tipoAgricultura_id`),
  ADD KEY `fk_agricultors_has_tipoAgriculturas_tipoAgriculturas1_idx` (`tipoAgricultura_id`),
  ADD KEY `fk_agricultors_has_tipoAgriculturas_agricultors1_idx` (`agricultor_id`);

--
-- Indices de la tabla `asociacions`
--
ALTER TABLE `asociacions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nit_UNIQUE` (`nit`),
  ADD UNIQUE KEY `rut_UNIQUE` (`rut`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indices de la tabla `brillos`
--
ALTER TABLE `brillos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calidads`
--
ALTER TABLE `calidads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria_directorios`
--
ALTER TABLE `categoria_directorios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria_novedads`
--
ALTER TABLE `categoria_novedads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `certificacions`
--
ALTER TABLE `certificacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ciudads`
--
ALTER TABLE `ciudads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ciudads_departamentos1_idx` (`departamento_id`);

--
-- Indices de la tabla `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_repuestas_posts1_idx` (`tema_id`),
  ADD KEY `fk_comentarios_users1_idx` (`user_id`);

--
-- Indices de la tabla `comprador_internacionals`
--
ALTER TABLE `comprador_internacionals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comprador_internacionals_paiss1_idx` (`paiss_id`),
  ADD KEY `fk_comprador_internacionals_users1_idx` (`user_id`),
  ADD KEY `fk_comprador_internacionals_generos1_idx` (`genero_id`);

--
-- Indices de la tabla `comprador_nacionals`
--
ALTER TABLE `comprador_nacionals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comprador_nacionals_users1_idx` (`user_id`),
  ADD KEY `fk_comprador_nacionals_generos1_idx` (`genero_id`);

--
-- Indices de la tabla `corregimientos`
--
ALTER TABLE `corregimientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_corregimientos_ciudads1_idx` (`ciudad_id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_departamentos_paiss1_idx` (`paiss_id`);

--
-- Indices de la tabla `directorios`
--
ALTER TABLE `directorios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_directorios_categoria_directorios1_idx` (`categoria_directorio_id`);

--
-- Indices de la tabla `embalajes`
--
ALTER TABLE `embalajes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `empresa_internacionals`
--
ALTER TABLE `empresa_internacionals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_empresa_internacionals_users1_idx` (`user_id`),
  ADD KEY `fk_empresa_internacionals_paiss1_idx` (`paiss_id`);

--
-- Indices de la tabla `empresa_nacionals`
--
ALTER TABLE `empresa_nacionals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_empresa_nacionals_users1_idx` (`user_id`),
  ADD KEY `fk_empresa_nacionals_ciudads1_idx` (`ciudad_id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `firmezas`
--
ALTER TABLE `firmezas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formas`
--
ALTER TABLE `formas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `foros`
--
ALTER TABLE `foros`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`),
  ADD KEY `fk_temas_categorias1_idx` (`categoria_id`),
  ADD KEY `fk_foros_users1_idx` (`user_id`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `google_maps`
--
ALTER TABLE `google_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `interaccions`
--
ALTER TABLE `interaccions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_interaccions_productos1_idx` (`producto_id`);

--
-- Indices de la tabla `lavados`
--
ALTER TABLE `lavados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `madurezs`
--
ALTER TABLE `madurezs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `munipicio_accions`
--
ALTER TABLE `munipicio_accions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_munipicio_accions_administradors1_idx` (`administrador_id`),
  ADD KEY `fk_munipicio_accions_ciudads1_idx` (`ciudad_id`);

--
-- Indices de la tabla `novedads`
--
ALTER TABLE `novedads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_novedads_categoria_novedads1_idx` (`categoria_novedad_id`),
  ADD KEY `fk_novedads_users1_idx` (`user_id`);

--
-- Indices de la tabla `paiss`
--
ALTER TABLE `paiss`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preguntasfrecuentes`
--
ALTER TABLE `preguntasfrecuentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preregistros`
--
ALTER TABLE `preregistros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_preregistros_users1_idx` (`user_id`);

--
-- Indices de la tabla `presentacions`
--
ALTER TABLE `presentacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productobases`
--
ALTER TABLE `productobases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_cientifico_UNIQUE` (`nombre_cientifico`),
  ADD UNIQUE KEY `nombre_comun_UNIQUE` (`nombre_comun`),
  ADD KEY `fk_productobases_variedads1_idx` (`variedad_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_productos_lavados1_idx` (`lavado_id`),
  ADD KEY `fk_productos_almacenamientos1_idx` (`embalaje_id`),
  ADD KEY `fk_productos_estados1_idx` (`estado_id`),
  ADD KEY `fk_productos_colors1_idx` (`color_id`),
  ADD KEY `fk_productos_calidads1_idx` (`calidad_id`),
  ADD KEY `fk_productos_formas1_idx` (`forma_id`),
  ADD KEY `fk_productos_presentacions1_idx` (`presentacion_id`),
  ADD KEY `fk_productos_brillos1_idx` (`brillo_id`),
  ADD KEY `fk_productos_sanidads1_idx` (`sanidad_id`),
  ADD KEY `fk_productos_madurezs1_idx` (`madurez_id`),
  ADD KEY `fk_productos_productobases1_idx` (`productobase_id`);

--
-- Indices de la tabla `productos_usuarios`
--
ALTER TABLE `productos_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_productos_usuarios_users1_idx` (`user_id`),
  ADD KEY `fk_productos_usuarios_productos1_idx` (`producto_id`);

--
-- Indices de la tabla `puntuacions`
--
ALTER TABLE `puntuacions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_puntuacions_users1_idx` (`user_id`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `abr_UNIQUE` (`abr`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `sanidads`
--
ALTER TABLE `sanidads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_temas_foros1_idx` (`foro_id`);

--
-- Indices de la tabla `tipoAgriculturas`
--
ALTER TABLE `tipoAgriculturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD KEY `fk_compradors_tipos1_idx` (`rol_id`);

--
-- Indices de la tabla `variedads`
--
ALTER TABLE `variedads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradors`
--
ALTER TABLE `administradors`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `agricultors`
--
ALTER TABLE `agricultors`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `agricultor_asociacions`
--
ALTER TABLE `agricultor_asociacions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `agricultor_certificacions`
--
ALTER TABLE `agricultor_certificacions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `agricultor_tipo_agriculturas`
--
ALTER TABLE `agricultor_tipo_agriculturas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `asociacions`
--
ALTER TABLE `asociacions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `brillos`
--
ALTER TABLE `brillos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `calidads`
--
ALTER TABLE `calidads`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categoria_novedads`
--
ALTER TABLE `categoria_novedads`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `certificacions`
--
ALTER TABLE `certificacions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ciudads`
--
ALTER TABLE `ciudads`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1113;
--
-- AUTO_INCREMENT de la tabla `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comprador_internacionals`
--
ALTER TABLE `comprador_internacionals`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `comprador_nacionals`
--
ALTER TABLE `comprador_nacionals`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `corregimientos`
--
ALTER TABLE `corregimientos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1060;
--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `embalajes`
--
ALTER TABLE `embalajes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `empresa_internacionals`
--
ALTER TABLE `empresa_internacionals`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `empresa_nacionals`
--
ALTER TABLE `empresa_nacionals`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `firmezas`
--
ALTER TABLE `firmezas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `formas`
--
ALTER TABLE `formas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `foros`
--
ALTER TABLE `foros`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `google_maps`
--
ALTER TABLE `google_maps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `interaccions`
--
ALTER TABLE `interaccions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `lavados`
--
ALTER TABLE `lavados`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `madurezs`
--
ALTER TABLE `madurezs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `munipicio_accions`
--
ALTER TABLE `munipicio_accions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `novedads`
--
ALTER TABLE `novedads`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `paiss`
--
ALTER TABLE `paiss`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=241;
--
-- AUTO_INCREMENT de la tabla `preguntasfrecuentes`
--
ALTER TABLE `preguntasfrecuentes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `preregistros`
--
ALTER TABLE `preregistros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `presentacions`
--
ALTER TABLE `presentacions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `productobases`
--
ALTER TABLE `productobases`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos_usuarios`
--
ALTER TABLE `productos_usuarios`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `puntuacions`
--
ALTER TABLE `puntuacions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipoAgriculturas`
--
ALTER TABLE `tipoAgriculturas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT de la tabla `variedads`
--
ALTER TABLE `variedads`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradors`
--
ALTER TABLE `administradors`
  ADD CONSTRAINT `fk_administradors_generos1` FOREIGN KEY (`genero_id`) REFERENCES `generos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_administradors_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `agricultors`
--
ALTER TABLE `agricultors`
  ADD CONSTRAINT `fk_agricultors_asociacions1` FOREIGN KEY (`asociacion_id`) REFERENCES `asociacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agricultors_corregimientos1` FOREIGN KEY (`corregimiento_id`) REFERENCES `corregimientos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agricultors_generos1` FOREIGN KEY (`genero_id`) REFERENCES `generos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agricultors_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `agricultor_asociacions`
--
ALTER TABLE `agricultor_asociacions`
  ADD CONSTRAINT `fk_agricultors_has_asociacions_agricultors1` FOREIGN KEY (`agricultor_id`) REFERENCES `agricultors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agricultors_has_asociacions_asociacions1` FOREIGN KEY (`asociacion_id`) REFERENCES `asociacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `agricultor_certificacions`
--
ALTER TABLE `agricultor_certificacions`
  ADD CONSTRAINT `fk_agricultors_has_certificacions_agricultors1` FOREIGN KEY (`agricultor_id`) REFERENCES `agricultors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agricultors_has_certificacions_certificacions1` FOREIGN KEY (`certificacion_id`) REFERENCES `certificacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `agricultor_tipo_agriculturas`
--
ALTER TABLE `agricultor_tipo_agriculturas`
  ADD CONSTRAINT `fk_agricultors_has_tipoAgriculturas_agricultors1` FOREIGN KEY (`agricultor_id`) REFERENCES `agricultors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agricultors_has_tipoAgriculturas_tipoAgriculturas1` FOREIGN KEY (`tipoAgricultura_id`) REFERENCES `tipoAgriculturas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ciudads`
--
ALTER TABLE `ciudads`
  ADD CONSTRAINT `fk_ciudads_departamentos1` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_comentarios_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_repuestas_posts1` FOREIGN KEY (`tema_id`) REFERENCES `temas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comprador_internacionals`
--
ALTER TABLE `comprador_internacionals`
  ADD CONSTRAINT `fk_comprador_internacionals_generos1` FOREIGN KEY (`genero_id`) REFERENCES `generos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comprador_internacionals_paiss1` FOREIGN KEY (`paiss_id`) REFERENCES `paiss` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comprador_internacionals_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comprador_nacionals`
--
ALTER TABLE `comprador_nacionals`
  ADD CONSTRAINT `fk_comprador_nacionals_generos1` FOREIGN KEY (`genero_id`) REFERENCES `generos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comprador_nacionals_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `corregimientos`
--
ALTER TABLE `corregimientos`
  ADD CONSTRAINT `fk_corregimientos_ciudads1` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudads` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD CONSTRAINT `fk_departamentos_paiss1` FOREIGN KEY (`paiss_id`) REFERENCES `paiss` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `directorios`
--
ALTER TABLE `directorios`
  ADD CONSTRAINT `fk_directorios_categoria_directorios1` FOREIGN KEY (`categoria_directorio_id`) REFERENCES `categoria_directorios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresa_internacionals`
--
ALTER TABLE `empresa_internacionals`
  ADD CONSTRAINT `fk_empresa_internacionals_paiss1` FOREIGN KEY (`paiss_id`) REFERENCES `paiss` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empresa_internacionals_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresa_nacionals`
--
ALTER TABLE `empresa_nacionals`
  ADD CONSTRAINT `fk_empresa_nacionals_ciudads1` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudads` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empresa_nacionals_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `foros`
--
ALTER TABLE `foros`
  ADD CONSTRAINT `fk_foros_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_temas_categorias1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `interaccions`
--
ALTER TABLE `interaccions`
  ADD CONSTRAINT `fk_interaccions_productos1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `munipicio_accions`
--
ALTER TABLE `munipicio_accions`
  ADD CONSTRAINT `fk_munipicio_accions_administradors1` FOREIGN KEY (`administrador_id`) REFERENCES `administradors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_munipicio_accions_ciudads1` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudads` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `novedads`
--
ALTER TABLE `novedads`
  ADD CONSTRAINT `fk_novedads_categoria_novedads1` FOREIGN KEY (`categoria_novedad_id`) REFERENCES `categoria_novedads` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_novedads_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `preregistros`
--
ALTER TABLE `preregistros`
  ADD CONSTRAINT `fk_preregistros_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productobases`
--
ALTER TABLE `productobases`
  ADD CONSTRAINT `fk_productobases_variedads1` FOREIGN KEY (`variedad_id`) REFERENCES `variedads` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_almacenamientos1` FOREIGN KEY (`embalaje_id`) REFERENCES `embalajes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_brillos1` FOREIGN KEY (`brillo_id`) REFERENCES `brillos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_calidads1` FOREIGN KEY (`calidad_id`) REFERENCES `calidads` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_colors1` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_estados1` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_formas1` FOREIGN KEY (`forma_id`) REFERENCES `formas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_lavados1` FOREIGN KEY (`lavado_id`) REFERENCES `lavados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_madurezs1` FOREIGN KEY (`madurez_id`) REFERENCES `madurezs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_presentacions1` FOREIGN KEY (`presentacion_id`) REFERENCES `presentacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_productobases1` FOREIGN KEY (`productobase_id`) REFERENCES `productobases` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_sanidads1` FOREIGN KEY (`sanidad_id`) REFERENCES `sanidads` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos_usuarios`
--
ALTER TABLE `productos_usuarios`
  ADD CONSTRAINT `fk_productos_usuarios_productos1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_usuarios_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `puntuacions`
--
ALTER TABLE `puntuacions`
  ADD CONSTRAINT `fk_puntuacions_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `temas`
--
ALTER TABLE `temas`
  ADD CONSTRAINT `fk_temas_foros1` FOREIGN KEY (`foro_id`) REFERENCES `foros` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_compradors_tipos1` FOREIGN KEY (`rol_id`) REFERENCES `rols` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
