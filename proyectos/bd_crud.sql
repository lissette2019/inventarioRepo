-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-02-2021 a las 03:46:09
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `empleadoId` bigint(20) NOT NULL AUTO_INCREMENT,
  `empleado` varchar(100) NOT NULL,
  PRIMARY KEY (`empleadoId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`empleadoId`, `empleado`) VALUES
(4, 'Guerra Martinez'),
(7, 'Ezequiel Arevalo'),
(8, 'Claudia Carcamo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitados`
--

CREATE TABLE IF NOT EXISTS `invitados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(150) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `telefono` int(15) NOT NULL,
  `fecha` date DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `invitados`
--

INSERT INTO `invitados` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `fecha`, `password`) VALUES
(3, 'Estela ', 'Hidalgo', 'San Marcos ', 21006655, '2021-02-18', NULL),
(4, 'claudia', 'Leiva', 'Soyafrong', 323233232, '2021-02-18', NULL),
(9, 'Paulina ', 'Juarez', 'Zacatecoluca', 21006655, '2021-02-21', NULL),
(10, 'Paulina ', 'Juarez', 'Zacatecoluca', 21006655, '2021-02-21', NULL),
(11, 'Juan', 'perez', 'San Marcos ', 21006655, '2021-02-22', NULL),
(12, 'juanFrankhhhh', 'perez', 'San Marcos ', 21006655, '2021-02-22', NULL),
(13, 'Juan', 'perez', 'San Marcos ', 21006655, '2021-02-22', NULL),
(14, 'Emanuel', 'guerra', 'San Marcos ', 41414141, '2021-02-22', 'prueba123'),
(15, 'EmanuelGGg', 'guerra', 'San Marcos ', 41414141, '2021-02-22', NULL),
(16, 'guerra', 'Hidalgo', 'Soyafrong', 77316190, '2021-02-22', NULL),
(17, 'Emanuel', 'Hidalgo', 'Zacatecoluca', 77316190, '2021-02-22', NULL),
(18, 'Emanuel', 'Hidalgo', 'Zacatecoluca', 77316190, '2021-02-22', NULL),
(19, 'rodrigo', 'guzman', 'Zacatecoluca', 32323232, '2021-02-22', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `rolId` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`rolId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rolId`, `nombre`) VALUES
(4, 'Super mega administrador '),
(6, 'Super admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
