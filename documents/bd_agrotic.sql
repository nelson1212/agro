-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-09-2015 a las 19:29:27
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

DELIMITER $$
--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `UC_Words`( str VARCHAR(255) ) RETURNS varchar(255) CHARSET utf8
BEGIN  
  DECLARE c CHAR(1);  
  DECLARE s VARCHAR(255);  
  DECLARE i INT DEFAULT 1;  
  DECLARE bool INT DEFAULT 1;  
  DECLARE punct CHAR(17) DEFAULT ' ()[]{},.-_!@;:?/';  
  SET s = LCASE( str );  
  WHILE i < LENGTH( str ) DO  
     BEGIN  
       SET c = SUBSTRING( s, i, 1 );  
       IF LOCATE( c, punct ) > 0 THEN  
        SET bool = 1;  
      ELSEIF bool=1 THEN  
        BEGIN  
          IF c >= 'a' AND c <= 'z' THEN  
             BEGIN  
               SET s = CONCAT(LEFT(s,i-1),UCASE(c),SUBSTRING(s,i+1));  
               SET bool = 0;  
             END;  
           ELSEIF c >= '0' AND c <= '9' THEN  
            SET bool = 0;  
          END IF;  
        END;  
      END IF;  
      SET i = i+1;  
    END;  
  END WHILE;  
  RETURN s;  
END$$

DELIMITER ;

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
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Agroquimicos'),
(2, 'Fertilizantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_directorios`
--

CREATE TABLE IF NOT EXISTS `categoria_directorios` (
  `id` int(11) NOT NULL,
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
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `certificacions`
--

INSERT INTO `certificacions` (`id`, `nombre`) VALUES
(1, 'Manejo de frutas rojas'),
(2, 'Manejo de fresas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudads`
--

CREATE TABLE IF NOT EXISTS `ciudads` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `departamento_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudads`
--

INSERT INTO `ciudads` (`id`, `nombre`, `departamento_id`) VALUES
(1, 'Alcalá', 31),
(2, 'Andalucía', 31),
(3, 'Ansermanuevo', 31),
(4, 'Argelia', 31),
(5, 'Bolívar', 31),
(6, 'Buenaventura', 31),
(7, 'Buga', 31),
(8, 'Bugalagrande', 31),
(9, 'Caicedonia', 31),
(10, 'Cali', 31),
(11, 'Candelaria', 31),
(12, 'Cartago', 31),
(13, 'Dagua', 31),
(14, 'El Darién', 31),
(15, 'El Águila', 31),
(16, 'El Cairo', 31),
(17, 'El Cerrito', 31),
(18, 'El Dovio', 31),
(19, 'Florida', 31),
(20, 'Ginebra', 31),
(21, 'Guacarí', 31),
(22, 'Jamundí', 31),
(23, 'La Cumbre', 31),
(24, 'La Unión', 31),
(25, 'La Victoria', 31),
(26, 'Obando', 31),
(27, 'Palmira', 31),
(28, 'Pradera', 31),
(29, 'Restrepo', 31),
(30, 'Riofrío', 31),
(31, 'Roldanillo', 31),
(32, 'San Pedro', 31),
(33, 'Sevilla', 31),
(34, 'Toro', 31),
(35, 'Trujillo', 31),
(36, 'Tuluá', 31),
(37, 'Ulloa', 31),
(38, 'Versalles', 31),
(39, 'Vijesa', 31),
(40, 'Yotoco', 31),
(41, 'Yumbo', 31),
(42, 'Zarzal', 31);

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
  `user_id` bigint(20) DEFAULT NULL,
  `comentario` text,
  `created` date DEFAULT NULL,
  `updated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corregimientos`
--

CREATE TABLE IF NOT EXISTS `corregimientos` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `ciudad_id` bigint(20) DEFAULT NULL,
  `tipo` varchar(1) DEFAULT 'c' COMMENT 'v = vereda\nc = corregimiento\nr = resguardo'
) ENGINE=InnoDB AUTO_INCREMENT=350 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `corregimientos`
--

INSERT INTO `corregimientos` (`id`, `nombre`, `ciudad_id`, `tipo`) VALUES
(1, 'El Congal', 1, 'v'),
(2, 'La Estrella', 1, 'v'),
(3, 'La Cuchilla', 1, 'v'),
(6, 'El Dinde', 1, 'v'),
(9, 'El Edén', 1, 'v'),
(10, 'La Unión', 1, 'v'),
(11, 'El Higuerón', 1, 'v'),
(12, 'Los Sauces', 1, 'v'),
(13, 'Playas Verdes', 1, 'v'),
(14, 'La Floresta', 1, 'v'),
(15, 'San Felipe', 1, 'v'),
(16, 'Trincheras', 1, 'v'),
(17, 'La Polonia', 1, 'v'),
(18, 'Bélgica', 1, 'v'),
(21, 'Maraveles', 1, 'v'),
(22, 'La Caña', 1, 'v'),
(23, 'Altaflor', 2, 'c'),
(24, 'Campoalegre', 2, 'c'),
(25, 'El Salto', 2, 'c'),
(26, 'Pardo Alto', 2, 'c'),
(27, 'Pardo Bajo', 2, 'c'),
(28, 'Potrerillo', 2, 'c'),
(29, 'Zabaletas', 2, 'c'),
(30, 'El Oriente', 2, 'v'),
(31, 'El Placer', 2, 'v'),
(32, 'Madre Vieja', 2, 'v'),
(33, 'Monte Hermoso', 2, 'v'),
(34, 'Pardo bajo', 2, 'v'),
(35, 'Tamboral', 2, 'v'),
(36, 'Unión Cascajeros', 2, 'v'),
(37, 'Zanjón de Piedra', 2, 'v'),
(38, 'Anacaro', 3, 'c'),
(39, 'El Roble', 3, 'c'),
(40, 'Gramalote', 3, 'c'),
(41, 'La Cabaña', 3, 'c'),
(42, 'La Diamantina ', 3, 'c'),
(43, 'San Agustín ', 3, 'c'),
(44, 'Tres Esquinas ', 3, 'c'),
(45, 'Vergel', 3, 'c'),
(46, 'Villar', 3, 'c'),
(47, 'La Raiz', 3, 'v'),
(48, 'Lusitania ', 3, 'v'),
(49, 'Embera Chami', 3, 'r'),
(50, 'LAS BRISAS', 4, 'v'),
(51, 'LA MARINA', 4, 'v'),
(52, 'EL RAIZAL', 4, 'v'),
(53, 'LA AURORA', 4, 'v'),
(54, 'CALENTADEROS', 4, 'v'),
(55, 'LA ESTRELLA', 4, 'v'),
(56, 'LA PAZ', 4, 'v'),
(57, 'LA PALMA', 4, 'v'),
(58, 'LA TEBAIDA', 4, 'v'),
(59, 'LA BELLA', 4, 'v'),
(60, 'LAS MARGARITAS', 4, 'v'),
(61, 'EL RIO ', 4, 'v'),
(62, 'TARRITOS ', 4, 'v'),
(63, 'MARACAIBO ', 4, 'v'),
(64, 'LA SOLEDAD ', 4, 'v'),
(65, 'LA CRISTALINA ', 4, 'v'),
(66, 'CASCO URBANO', 4, 'v'),
(67, 'Cabecera Municipal', 5, 'c'),
(68, 'Ricaurte', 5, 'c'),
(69, 'Primavera', 5, 'c'),
(70, 'La Tulia', 5, 'c'),
(71, 'Naranjal', 5, 'c'),
(72, 'Cerro Azul', 5, 'c'),
(73, 'San Isidro', 5, 'c'),
(74, 'La Herradura', 5, 'c'),
(75, 'Aguas Lindas', 5, 'c'),
(76, 'Betania', 5, 'c'),
(77, 'San Fernando', 5, 'c'),
(78, 'San Antonio de Guare', 5, 'c'),
(79, 'La Herradura', 5, 'c'),
(80, 'El Catre', 5, 'c'),
(81, 'Río Dovio', 5, 'c'),
(82, 'Villa Estella', 6, 'c'),
(83, 'La Brea', 6, 'c'),
(84, 'El Crucero', 6, 'c'),
(85, 'Km 11', 6, 'c'),
(86, 'Km 12', 6, 'c'),
(87, 'Bajo Calima', 6, 'c'),
(88, 'Bellavista (Carretera)', 6, 'c'),
(89, 'El Guineo (Km 14)', 6, 'c'),
(90, 'Las Brisas (Km 12)', 6, 'c'),
(91, 'La Esperanza', 6, 'c'),
(92, 'Ceibito', 6, 'c'),
(93, 'La Paz (Km 27)', 6, 'c'),
(94, 'La Aurora', 6, 'c'),
(95, 'Cola Barco', 6, 'c'),
(96, 'San Isidro', 6, 'c'),
(97, 'Trojitas', 6, 'c'),
(98, 'Guadual', 6, 'c'),
(99, 'San Joaquin (Km 8)', 6, 'c'),
(100, 'Tatabro (Km 15)', 6, 'c'),
(101, 'La 40', 6, 'c'),
(102, 'La Lucha', 6, 'c'),
(103, 'Juanchaco', 6, 'c'),
(104, 'Ladrilleros', 6, 'c'),
(105, 'La Plata', 6, 'c'),
(106, 'Bocas del San Juan', 6, 'c'),
(107, 'Malaga', 6, 'c'),
(108, 'La Barra', 6, 'c'),
(109, 'Cabezon', 6, 'c'),
(110, 'La Muerte', 6, 'c'),
(111, 'La Platica', 6, 'c'),
(112, 'La Bocana', 6, 'c'),
(113, 'Pianguita', 6, 'c'),
(114, 'Piedra Piedra', 6, 'c'),
(115, 'Santa Delicia', 6, 'c'),
(116, 'Piangua', 6, 'c'),
(117, 'Bazan', 6, 'c'),
(118, 'Aguadulce', 6, 'c'),
(119, 'Arrieral', 6, 'c'),
(120, 'Bocas de Cangrejo', 6, 'c'),
(121, 'Punta Arena', 6, 'c'),
(122, 'Punta Soldado', 6, 'c'),
(123, 'La Contra', 6, 'c'),
(124, 'Bellavista', 6, 'c'),
(125, 'Cocalito', 6, 'c'),
(126, 'Santa Barbara', 6, 'c'),
(127, 'Machetero', 6, 'c'),
(128, 'La Popa', 6, 'c'),
(129, 'Papayal', 6, 'c'),
(130, 'Punteño', 6, 'c'),
(131, 'El Bajito', 6, 'c'),
(132, 'Amaine', 6, 'c'),
(133, 'Cabecera Rio Cuquito', 6, 'c'),
(134, 'Dupar', 6, 'c'),
(135, 'Cuellar', 6, 'c'),
(136, 'Cabeceras', 6, 'c'),
(137, 'Rio Dagua', 6, 'c'),
(138, 'Chachajo', 6, 'c'),
(139, 'Bocas de Calima', 6, 'c'),
(140, 'Malaguita', 6, 'c'),
(141, 'Puerto Pizarro', 6, 'c'),
(142, 'Alto Potedo', 6, 'c'),
(143, 'Guadualito', 6, 'c'),
(144, 'La Meseta', 6, 'c'),
(145, 'Colonia Jaci', 6, 'c'),
(146, 'Calle Larga', 6, 'c'),
(147, 'Pitirri', 6, 'c'),
(148, 'Limoncito', 6, 'c'),
(149, 'Posedo', 6, 'c'),
(150, 'Mondomito', 6, 'c'),
(151, 'Bajo Potedo', 6, 'c'),
(152, 'Campo Hermoso', 6, 'c'),
(153, 'La Playita', 6, 'c'),
(154, 'Limonita', 6, 'c'),
(155, 'Limones', 6, 'c'),
(156, 'La Choma', 6, 'c'),
(157, 'Mondomo', 6, 'c'),
(158, 'Zacarias', 6, 'c'),
(159, 'Zabaletas', 6, 'c'),
(160, 'Guaimia', 6, 'c'),
(161, 'Llano Bajo', 6, 'c'),
(162, 'San Pedro', 6, 'c'),
(163, 'Agua Clara', 6, 'c'),
(164, 'Bogota', 6, 'c'),
(165, 'Limones', 6, 'c'),
(166, 'San Marcos', 6, 'c'),
(167, 'Bartolo', 6, 'c'),
(168, 'Tatabro', 6, 'c'),
(169, 'Ladrilleros', 6, 'c'),
(170, 'Pueblo de la Cruz', 6, 'c'),
(171, 'Colonia', 6, 'c'),
(172, 'San Pedro', 6, 'c'),
(173, 'Alto Agua Clara', 6, 'c'),
(174, 'El Llano', 6, 'c'),
(175, 'San Antonio', 6, 'c'),
(176, 'Amazona', 6, 'c'),
(177, 'Taparal', 6, 'c'),
(178, 'La Herradura', 6, 'c'),
(179, 'Bartolo', 6, 'c'),
(180, 'Santa Barbara', 6, 'c'),
(181, 'San José', 6, 'c'),
(182, 'El Barcito', 6, 'c'),
(183, 'Calle Larga', 6, 'c'),
(184, 'Machetajero', 6, 'c'),
(185, 'El Tigre', 6, 'c'),
(186, 'Calle Honda', 6, 'c'),
(187, 'Leticia', 6, 'c'),
(188, 'Auca', 6, 'c'),
(189, 'Rio Raposo', 6, 'c'),
(190, 'San Francisco Javier', 6, 'c'),
(191, 'Caracolí', 6, 'c'),
(192, 'Bocas de Tatauro', 6, 'c'),
(193, 'Anchicaya', 6, 'c'),
(194, 'El Pital', 6, 'c'),
(195, 'Timbal', 6, 'c'),
(196, 'La Sierpe', 6, 'c'),
(197, 'Punta Bonita', 6, 'c'),
(198, 'Umane', 6, 'c'),
(199, 'Comba', 6, 'c'),
(200, 'Isla Pelada', 6, 'c'),
(201, 'Fray Juan', 6, 'c'),
(202, 'Mayorquin', 6, 'c'),
(203, 'Marroquin', 6, 'c'),
(204, 'Papayal', 6, 'c'),
(205, 'Santa Ana', 6, 'c'),
(206, 'Secadero', 6, 'c'),
(207, 'Contra', 6, 'c'),
(208, 'Silva', 6, 'c'),
(209, 'El Chorro', 6, 'c'),
(210, 'Guapicito', 6, 'c'),
(211, 'Barco', 6, 'c'),
(212, 'La Fragua', 6, 'c'),
(213, 'Santa Rosa', 6, 'c'),
(214, 'Punta de Luca', 6, 'c'),
(215, 'Las Rosas', 6, 'c'),
(216, 'Boca de Brazo', 6, 'c'),
(217, 'San Isidro', 6, 'c'),
(218, 'Arango', 6, 'c'),
(219, 'San Vicente', 6, 'c'),
(220, 'Marroquin', 6, 'c'),
(221, 'Timba', 6, 'c'),
(222, 'Planeta', 6, 'c'),
(223, 'Veneral', 6, 'c'),
(224, 'La Isla', 6, 'c'),
(225, 'Isla del Venado', 6, 'c'),
(226, 'El Aguila', 6, 'c'),
(227, 'San Jeronimo', 6, 'c'),
(228, 'San Miguel', 6, 'c'),
(229, 'El Barranco', 6, 'c'),
(230, 'Firme Bonito', 6, 'c'),
(231, 'Papayo', 6, 'c'),
(232, 'El Firme', 6, 'c'),
(233, 'Primavera', 6, 'c'),
(234, 'Rastrojo Largo', 6, 'c'),
(235, 'El Encanto', 6, 'c'),
(236, 'San Antonio', 6, 'c'),
(237, 'El Aguacate', 6, 'c'),
(238, 'Omoño', 6, 'c'),
(239, 'Juntas', 6, 'c'),
(240, 'Santa Rita', 6, 'c'),
(241, 'San Antonio', 6, 'c'),
(242, 'El Morro', 6, 'c'),
(243, 'San José', 6, 'c'),
(244, 'Nuevo San José', 6, 'c'),
(245, 'Chamuscado', 6, 'c'),
(246, 'Santa Cruz', 6, 'c'),
(247, 'San Joaquincito', 6, 'c'),
(248, 'San Miguel', 6, 'c'),
(249, 'Alambique', 6, 'c'),
(250, 'Azucena', 6, 'c'),
(251, 'San Martin', 6, 'c'),
(252, 'El Cacao', 6, 'c'),
(253, 'El Ají', 6, 'c'),
(254, 'Isla Ají', 6, 'c'),
(255, 'Puerto Merizalde', 6, 'c'),
(256, 'Horizonte', 6, 'c'),
(257, 'Villa Lonna', 6, 'c'),
(258, 'San José', 6, 'c'),
(259, 'Conchirito', 6, 'c'),
(260, 'San Fernando', 6, 'c'),
(261, 'La Vuelta', 6, 'c'),
(262, 'San Pedro', 6, 'c'),
(263, 'El Triunfo', 6, 'c'),
(264, 'Pastico', 6, 'c'),
(265, 'El Trueno', 6, 'c'),
(266, 'Limones', 6, 'c'),
(267, 'Ajicito', 6, 'c'),
(268, 'Aguamanza', 6, 'c'),
(269, 'Sagrada Familia', 6, 'c'),
(270, 'Santa Maria', 6, 'c'),
(271, 'El Carmen', 6, 'c'),
(272, 'Calle Larga', 6, 'c'),
(273, 'San Antonio', 6, 'c'),
(274, 'Betania', 6, 'c'),
(275, 'Chaviruz', 6, 'c'),
(276, 'Dotoza', 6, 'c'),
(277, 'Chabirat', 6, 'c'),
(278, 'Corrientes', 6, 'c'),
(279, 'Bartola', 6, 'c'),
(280, 'Dos Quebradas', 6, 'c'),
(281, 'Vijugual', 6, 'c'),
(282, 'Marucha', 6, 'c'),
(283, 'El Pasto', 6, 'c'),
(284, 'Santa Catalina', 6, 'c'),
(285, 'El Queso', 6, 'c'),
(286, 'La Playa', 6, 'c'),
(287, 'La Boca', 6, 'c'),
(288, 'Juan Nuñez', 6, 'c'),
(289, 'Juan Santos', 6, 'c'),
(290, 'San Bartolo', 6, 'c'),
(291, 'San Lorenzo', 6, 'c'),
(292, 'California', 6, 'c'),
(293, 'El Venado', 6, 'c'),
(294, 'Nicolas Ramos', 6, 'c'),
(295, 'Hidalgo', 6, 'c'),
(296, 'Redondito', 6, 'c'),
(297, 'Concepcion', 6, 'c'),
(298, 'Callanero', 6, 'c'),
(299, 'San Pablo', 6, 'c'),
(300, 'Cascajita', 6, 'c'),
(301, 'Puerto Naya', 6, 'c'),
(302, 'Guadualito', 6, 'c'),
(303, 'Solano', 6, 'c'),
(304, 'Saladito', 6, 'c'),
(305, 'Mina', 6, 'c'),
(306, 'Baudo', 6, 'c'),
(307, 'Marucha', 6, 'c'),
(308, 'Calle Larga', 6, 'c'),
(309, 'Merejildo', 6, 'c'),
(310, 'Cordoba', 6, 'c'),
(311, 'Bendiciones', 6, 'c'),
(312, 'Santa Helena', 6, 'c'),
(313, 'La Esperanza', 6, 'c'),
(314, 'Bodegas (Km 34)', 6, 'c'),
(315, 'Palito', 6, 'c'),
(316, 'Camino Viejo (Km 40)', 6, 'c'),
(317, 'Km 21', 6, 'c'),
(318, 'Km 32', 6, 'c'),
(319, 'El Cafetal', 6, 'c'),
(320, 'Citronela', 6, 'c'),
(321, 'La Sierpe', 6, 'c'),
(322, 'Zaragoza', 6, 'c'),
(323, 'Triana', 6, 'c'),
(324, 'San Cipriano', 6, 'c'),
(325, 'El Salto', 6, 'c'),
(326, 'El Oso', 6, 'c'),
(327, 'Caserio I', 6, 'c'),
(328, 'Caserio II', 6, 'c'),
(329, 'Cisneros', 6, 'c'),
(330, 'La Delfina', 6, 'c'),
(331, 'Pueblo Nuevo', 6, 'c'),
(332, 'La Sipia', 6, 'c'),
(333, 'Planadas', 6, 'c'),
(334, 'El Cedro', 6, 'c'),
(335, 'Balsitos', 6, 'c'),
(336, 'Bendiciones', 6, 'c'),
(337, 'Caserio III', 6, 'c'),
(338, 'Caserio IV', 6, 'c'),
(339, 'Caserio V', 6, 'c'),
(340, 'El Carmelo', 6, 'c'),
(341, 'La Vibora', 6, 'c'),
(342, 'La Laguna', 6, 'c'),
(343, 'Limones', 6, 'c'),
(344, 'Julio Villegas', 6, 'c'),
(345, 'Peñitos', 6, 'c'),
(346, 'Perito', 6, 'c'),
(347, 'Playa Larga', 6, 'c'),
(348, 'Sombrerillo', 6, 'c'),
(349, 'La Delfinsa', 6, 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `paiss_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`, `paiss_id`) VALUES
(2, 'Amazonas', 1),
(3, 'Antioquia', 1),
(4, 'Arauca', 1),
(5, 'Atlántico', 1),
(6, 'Bolívar', 1),
(7, 'Boyacá', 1),
(8, 'Caldas', 1),
(9, 'Caquetá', 1),
(10, 'Casanare', 1),
(11, 'Cauca', 1),
(12, 'Cesar', 1),
(13, 'Chocó', 1),
(14, 'Córdoba', 1),
(15, 'Cundinamarca', 1),
(16, 'Guainía', 1),
(17, 'Guaviare', 1),
(18, 'Huila', 1),
(19, 'La guajira', 1),
(20, 'Magdalena', 1),
(21, 'Meta', 1),
(22, 'Nariño', 1),
(23, 'Norte de santander', 1),
(24, 'Putumayo', 1),
(25, 'Quindío', 1),
(26, 'Risaralda', 1),
(27, 'San andrés y providencia', 1),
(28, 'Santander', 1),
(29, 'Sucre', 1),
(30, 'Tolima', 1),
(31, 'Valle del cauca', 1),
(32, 'Vaupés', 1),
(33, 'Vichada', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directorios`
--

CREATE TABLE IF NOT EXISTS `directorios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(145) DEFAULT NULL,
  `descripcion` text,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `direccion` text,
  `categoria_directorio_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `embalajes`
--

CREATE TABLE IF NOT EXISTS `embalajes` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `nombre` varchar(45) DEFAULT NULL COMMENT 'nombre del tema',
  `descripcion` text,
  `user_id` varchar(45) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `categoria_id` bigint(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `nombre` varchar(45) DEFAULT NULL
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
-- Estructura de tabla para la tabla `nombresComuns`
--

CREATE TABLE IF NOT EXISTS `nombresComuns` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `producto_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedads`
--

CREATE TABLE IF NOT EXISTS `novedads` (
  `id` bigint(20) NOT NULL,
  `titulo` varchar(105) DEFAULT NULL,
  `texto` text,
  `user_id` bigint(20) DEFAULT NULL,
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
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paiss`
--

INSERT INTO `paiss` (`id`, `nombre`) VALUES
(1, 'Colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntasfrecuentes`
--

CREATE TABLE IF NOT EXISTS `preguntasfrecuentes` (
  `id` bigint(20) NOT NULL,
  `pregunta` text,
  `respuesta` text,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentacions`
--

CREATE TABLE IF NOT EXISTS `presentacions` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` bigint(20) NOT NULL,
  `nombre_cientifico` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `lavado_id` bigint(20) NOT NULL,
  `embalaje_id` bigint(20) NOT NULL,
  `perido_cosecha` date DEFAULT NULL,
  `estado_id` bigint(20) NOT NULL,
  `peso_gr` float DEFAULT NULL,
  `peso_lb` float DEFAULT NULL,
  `peso_kg` float DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `cotactado` int(11) DEFAULT NULL,
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
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE IF NOT EXISTS `rols` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Agricultor'),
(3, 'Comprador'),
(4, 'Empresa');

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
  `user_id` bigint(20) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipoAgriculturas`
--

INSERT INTO `tipoAgriculturas` (`id`, `nombre`) VALUES
(1, 'De secano'),
(2, 'De regadío'),
(3, 'Agricultura de subsistencia'),
(4, 'Agricultura industrial'),
(5, 'Agricultura intensiva'),
(6, 'Agricultura extensiva'),
(7, 'Agricultura tradicional'),
(8, 'Agricultura industrial'),
(9, 'Agricultura ecológica'),
(10, 'Agricultura natural');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL,
  `identificacion` varchar(45) DEFAULT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `nit` varchar(45) DEFAULT NULL,
  `razon_social` varchar(45) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `vereda_id` bigint(20) DEFAULT NULL,
  `departamento_id` bigint(20) DEFAULT NULL,
  `paiss_id` bigint(20) DEFAULT NULL,
  `ciudad_id` bigint(20) DEFAULT NULL,
  `corregimiento_id` bigint(20) DEFAULT '0',
  `tipo_agricultura_id` bigint(20) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefono_contacto` int(11) DEFAULT NULL,
  `celular_contacto` int(11) DEFAULT NULL,
  `rol_id` bigint(20) NOT NULL,
  `created` date DEFAULT NULL,
  `updated` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `identificacion`, `nombres`, `apellidos`, `nit`, `razon_social`, `foto`, `vereda_id`, `departamento_id`, `paiss_id`, `ciudad_id`, `corregimiento_id`, `tipo_agricultura_id`, `username`, `password`, `email`, `telefono_contacto`, `celular_contacto`, `rol_id`, `created`, `updated`) VALUES
(6, '12022529', 'Nelson American Express', NULL, NULL, NULL, NULL, NULL, 31, NULL, 6, 103, 3, 'nelson1212', '12345678', 'nelson.hidalgo1@gmail.com', 54545454, 3177099, 4, '2015-09-15', '2015-09-15'),
(7, '12022529', 'Nelson American Express', NULL, NULL, NULL, NULL, NULL, 31, NULL, 6, 103, 3, 'nelson1212', '12345678', 'nelson.hidalgo1@gmail.com', 54545454, 3177099, 4, '2015-09-15', '2015-09-15'),
(8, '12022529', 'Nelson American Express', NULL, NULL, NULL, NULL, NULL, 31, NULL, 6, 103, 3, 'nelson1212', '12345678', 'nelson.hidalgo1@gmail.com', 54545454, 3177099, 4, '2015-09-15', '2015-09-15'),
(9, '12022529', 'nelson', 'lopez', NULL, NULL, NULL, NULL, 31, NULL, 1, 1, 4, 'nelson1212', '123456789', 'nelson.hidalgo1@gmail.com', 3255656, 31454542, 2, '2015-09-17', '2015-09-17'),
(10, '12022529', 'nelson', 'lopez', NULL, NULL, NULL, NULL, 31, NULL, 1, 1, 4, 'nelson1212', '123456789', 'nelson.hidalgo1@gmail.com', 3255656, 31454542, 2, '2015-09-17', '2015-09-17'),
(11, '12022529', 'nelson', 'lopez', NULL, NULL, NULL, NULL, 31, NULL, 1, 1, 4, 'nelson1212', '123456789', 'nelson.hidalgo1@gmail.com', 3255656, 31454542, 2, '2015-09-17', '2015-09-17'),
(12, '2323', '2323', '2323', NULL, NULL, '2323.png', NULL, 31, NULL, 10, 1, 2, '232', '123456789', 'nelson.hidalgo2@gmail.com', 2147483647, 312565656, 2, '2015-09-17', '2015-09-17'),
(13, '120225292', 'nelson', 'lopez', NULL, NULL, '120225292.png', NULL, 31, NULL, 10, 24, 2, '12121212', '123456789', 'nelson.hidalgo12@gmail.com', NULL, NULL, 2, '2015-09-17', '2015-09-17'),
(19, '152121', 'carlos', NULL, NULL, NULL, '152121.jpg', NULL, 31, NULL, 10, 1, NULL, 'nelson211', '123456789', 'nelson.hidalgo122@gmail.com', 656566, 365656, 1, '2015-09-17', '2015-09-17'),
(20, '15212122', 'carlos', NULL, NULL, NULL, '15212122.jpg', NULL, 31, NULL, 10, 1, NULL, 'nelson21122', '123456789', 'nelson.hidalgo2122@gmail.com', 656566, 365656, 1, '2015-09-17', '2015-09-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_certificacions`
--

CREATE TABLE IF NOT EXISTS `user_certificacions` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `certificacion_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veredas`
--

CREATE TABLE IF NOT EXISTS `veredas` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `corregimiento_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

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
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `fk_repuestas_posts1_idx` (`tema_id`);

--
-- Indices de la tabla `corregimientos`
--
ALTER TABLE `corregimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `fk_temas_categorias1_idx` (`categoria_id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `madurezs`
--
ALTER TABLE `madurezs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nombresComuns`
--
ALTER TABLE `nombresComuns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nombresComuns_productos1_idx` (`producto_id`);

--
-- Indices de la tabla `novedads`
--
ALTER TABLE `novedads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_novedads_categoria_novedads1_idx` (`categoria_novedad_id`);

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
-- Indices de la tabla `presentacions`
--
ALTER TABLE `presentacions`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `fk_productos_madurezs1_idx` (`madurez_id`);

--
-- Indices de la tabla `productos_usuarios`
--
ALTER TABLE `productos_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_productos_usuarios_users1_idx` (`user_id`),
  ADD KEY `fk_productos_usuarios_productos1_idx` (`producto_id`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `fk_compradors_veredas_idx` (`vereda_id`),
  ADD KEY `fk_compradors_departamentos1_idx` (`departamento_id`),
  ADD KEY `fk_compradors_paiss1_idx` (`paiss_id`),
  ADD KEY `fk_compradors_ciudads1_idx` (`ciudad_id`),
  ADD KEY `fk_compradors_corregimientos1_idx` (`corregimiento_id`),
  ADD KEY `fk_compradors_tipoAgriculturas1_idx` (`tipo_agricultura_id`),
  ADD KEY `fk_compradors_tipos1_idx` (`rol_id`);

--
-- Indices de la tabla `user_certificacions`
--
ALTER TABLE `user_certificacions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_certificacions_users1_idx` (`user_id`),
  ADD KEY `fk_user_certificacions_certificacions1_idx` (`certificacion_id`);

--
-- Indices de la tabla `veredas`
--
ALTER TABLE `veredas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `categoria_directorios`
--
ALTER TABLE `categoria_directorios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categoria_novedads`
--
ALTER TABLE `categoria_novedads`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `certificacions`
--
ALTER TABLE `certificacions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ciudads`
--
ALTER TABLE `ciudads`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
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
-- AUTO_INCREMENT de la tabla `corregimientos`
--
ALTER TABLE `corregimientos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=350;
--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `directorios`
--
ALTER TABLE `directorios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `embalajes`
--
ALTER TABLE `embalajes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT de la tabla `nombresComuns`
--
ALTER TABLE `nombresComuns`
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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `preguntasfrecuentes`
--
ALTER TABLE `preguntasfrecuentes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `presentacions`
--
ALTER TABLE `presentacions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipoAgriculturas`
--
ALTER TABLE `tipoAgriculturas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `user_certificacions`
--
ALTER TABLE `user_certificacions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `veredas`
--
ALTER TABLE `veredas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_repuestas_posts1` FOREIGN KEY (`tema_id`) REFERENCES `temas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `directorios`
--
ALTER TABLE `directorios`
  ADD CONSTRAINT `fk_directorios_categoria_directorios1` FOREIGN KEY (`categoria_directorio_id`) REFERENCES `categoria_directorios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `foros`
--
ALTER TABLE `foros`
  ADD CONSTRAINT `fk_temas_categorias1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `interaccions`
--
ALTER TABLE `interaccions`
  ADD CONSTRAINT `fk_interaccions_productos1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `nombresComuns`
--
ALTER TABLE `nombresComuns`
  ADD CONSTRAINT `fk_nombresComuns_productos1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `novedads`
--
ALTER TABLE `novedads`
  ADD CONSTRAINT `fk_novedads_categoria_novedads1` FOREIGN KEY (`categoria_novedad_id`) REFERENCES `categoria_novedads` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_productos_sanidads1` FOREIGN KEY (`sanidad_id`) REFERENCES `sanidads` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos_usuarios`
--
ALTER TABLE `productos_usuarios`
  ADD CONSTRAINT `fk_productos_usuarios_productos1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_usuarios_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `temas`
--
ALTER TABLE `temas`
  ADD CONSTRAINT `fk_temas_foros1` FOREIGN KEY (`foro_id`) REFERENCES `foros` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_compradors_ciudads1` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudads` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compradors_corregimientos1` FOREIGN KEY (`corregimiento_id`) REFERENCES `corregimientos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compradors_departamentos1` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compradors_paiss1` FOREIGN KEY (`paiss_id`) REFERENCES `paiss` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compradors_tipoAgriculturas1` FOREIGN KEY (`tipo_agricultura_id`) REFERENCES `tipoAgriculturas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compradors_tipos1` FOREIGN KEY (`rol_id`) REFERENCES `rols` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compradors_veredas` FOREIGN KEY (`vereda_id`) REFERENCES `veredas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `user_certificacions`
--
ALTER TABLE `user_certificacions`
  ADD CONSTRAINT `fk_user_certificacions_certificacions1` FOREIGN KEY (`certificacion_id`) REFERENCES `certificacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_certificacions_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
