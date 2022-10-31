-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 06-10-2022 a las 00:27:23
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuelatortuga`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `numEmpleado` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellidoP` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellidoM` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `numeroIn` int(11) NOT NULL,
  `numeroEx` int(11) NOT NULL,
  `calle` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `colonia` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `municipio` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cedulaprofesional` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`numEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`numEmpleado`, `nombre`, `apellidoP`, `apellidoM`, `numeroIn`, `numeroEx`, `calle`, `colonia`, `municipio`, `estado`, `telefono`, `email`, `cedulaprofesional`) VALUES
('0', 'Adrian', 'Aguilar', 'Jimenez', 0, 3, 'Juarez', 'El calvario', 'Ixtacuixtla', 'Tlaxcala', 2461544567, 'adrian@gmail.com', '6890098'),
('12', 'Cristian ', 'Juarez ', 'Juarez ', 3, 2, 'Allende ', 'Centro ', 'Huejo ', 'Puebla ', 2271052086, 'cristian@hotmail.com', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `matricula` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellidoP` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellidoM` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `numeroIn` int(11) DEFAULT NULL,
  `numeroEx` int(11) NOT NULL,
  `calle` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `colonia` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `municipio` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`matricula`, `nombre`, `apellidoP`, `apellidoM`, `numeroIn`, `numeroEx`, `calle`, `colonia`, `municipio`, `estado`, `telefono`, `email`) VALUES
('1240003', 'Luis Angel', 'Marin', 'Coheto', 0, 32, 'Sol', 'Ocotlan', 'ocotlan', 'Tlaxcala', 2461715558, 'luis@gmail.com'),
('19240002', 'Rodrigo', 'Garcia', 'Garcia', 0, 12, 'Nueva', 'El alto', 'Santa Ana', 'Tlaxcala', 2461899987, 'dodigo@gmail.com'),
('19240007', 'David', 'Limon', 'Aguilar', 0, 7, 'Reforma', 'Popocatla', 'Ixtacuixtla', 'Tlaxcala', 2461715558, 'davidcjaguilar@gmail.com'),
('19240008', 'Jonny', 'Santos', 'Santos', 0, 4, 'Dr', 'Tepellanco', 'San MArtin', 'Puebla', 2451923433, 'Jonny@gmail.com'),
('19240020', 'Pedro', 'Lima', 'Aguirre', 9, 3, 'Dr.Ruíz', 'San Jorge', 'Panotla', 'Tlaxcala', 2471862723, 'Pedro@gmail.com'),
('19240022', 'Erick', 'Ojeda', 'Vazquez', 0, 67, 'Dr.Jero', 'Shenlong', 'DBZ', 'DBS', 2461738889, 'ElTATA@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

DROP TABLE IF EXISTS `docentes`;
CREATE TABLE IF NOT EXISTS `docentes` (
  `clave` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellidoP` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellidoM` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `numeroIn` int(11) NOT NULL,
  `numeroEx` int(11) NOT NULL,
  `calle` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `colonia` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `municipio` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ultimoGradoEstudios` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `especialidad1` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `especialidad2` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `numeroDeCedula` int(11) NOT NULL,
  `imagen` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`clave`, `nombre`, `apellidoP`, `apellidoM`, `numeroIn`, `numeroEx`, `calle`, `colonia`, `municipio`, `estado`, `telefono`, `email`, `ultimoGradoEstudios`, `especialidad1`, `especialidad2`, `numeroDeCedula`, `imagen`) VALUES
('123', 'Norma', 'Aguilar', 'Jimenez', 0, 7, 'Reforma', 'Popocatla', 'Ixtacuixtla', 'Tlaxcala', 2461544543, 'norma@gmail.com', 'Maestria', 'Lenguas', 'Matematicas', 192999, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados_grupos`
--

DROP TABLE IF EXISTS `grados_grupos`;
CREATE TABLE IF NOT EXISTS `grados_grupos` (
  `clave` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tutor` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`clave`),
  UNIQUE KEY `clave` (`tutor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

DROP TABLE IF EXISTS `materias`;
CREATE TABLE IF NOT EXISTS `materias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `grupo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `claveDocente` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `grupo` (`grupo`),
  UNIQUE KEY `claveDocente` (`claveDocente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `grados_grupos`
--
ALTER TABLE `grados_grupos`
  ADD CONSTRAINT `grados_grupos_ibfk_1` FOREIGN KEY (`tutor`) REFERENCES `docentes` (`clave`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`claveDocente`) REFERENCES `docentes` (`clave`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materias_ibfk_2` FOREIGN KEY (`grupo`) REFERENCES `grados_grupos` (`clave`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
