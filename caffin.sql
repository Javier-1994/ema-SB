-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-08-2020 a las 17:18:11
-- Versión del servidor: 5.5.20
-- Versión de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `caffin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actas`
--

CREATE TABLE IF NOT EXISTS `actas` (
  `id_acta` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria',
  `idalumno` int(11) NOT NULL COMMENT 'Id del alumno ',
  `fecha_a` date NOT NULL COMMENT 'Fecha de expulción',
  `descripcion_a` longtext COLLATE utf8_spanish_ci NOT NULL COMMENT 'Descripción de la expulción',
  PRIMARY KEY (`id_acta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `actas`
--

INSERT INTO `actas` (`id_acta`, `idalumno`, `fecha_a`, `descripcion_a`) VALUES
(7, 1, '2020-06-21', 'Mala conducta en el salon de clases wfewfwedewewwefwefwefewfwefewfwefffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff ffffffffffffffffffffffffffffffffff ffffffffffffffffffffffffffffffffff ffffffffffffffffffffffffffffffffff fffffffffffffffffffffffffffeedwkndkwqjdhqwdkjwqd'),
(8, 8, '2020-06-22', 'hola\n'),
(9, 1, '2020-07-13', 'Tegucigalpa, 8 de julio. Con una reuniÃ³n donde se forman en grupos, vestidos con trajes blancos de bioseguridad para evitar contagiarse del coronavirus que tiene de rodillas al mundo y encomendÃ¡ndose a Dios inician su jornada las Brigadas MÃ©dicas que por instrucciones del presidente Juan Orlando HernÃ¡ndez visitan casa por casa barrios y colonias del Distrito Central para identificar a sospechosos o positivos de covid-19.'),
(10, 9, '2020-07-19', 'Falta de respeto a catedratico.'),
(11, 10, '2020-08-06', 'FALTA DE RESPETO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `id_alumno` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria',
  `pnombre_a` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Primer nombre del alumno',
  `snombre_a` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Segundo nombre del alumno',
  `papellido_a` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Primer apellido del alumno',
  `sapellido_a` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Segundo apellido del alumno',
  `identidad_a` varchar(15) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Identidad del alumno',
  `direccion_a` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Dirección del alumno',
  `idencargado` int(11) NOT NULL COMMENT 'Nombre del encargado del alumno',
  PRIMARY KEY (`id_alumno`),
  KEY `idencargado` (`idencargado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `pnombre_a`, `snombre_a`, `papellido_a`, `sapellido_a`, `identidad_a`, `direccion_a`, `idencargado`) VALUES
(9, 'Jose', 'Samuel ', 'Alvarado', 'lopez', '1232-3544-55413', 'asdasd', 5),
(10, 'Elvis', 'Alfondo', 'Barahona', 'Pacheco', '1625-2013', 'Barrio el mirador Frente parque barahona', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacionesm`
--

CREATE TABLE IF NOT EXISTS `asignacionesm` (
  `id_asignaciones` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id autoincremental y llave primaria',
  `idmaestro` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'id del maestro al que se le asignara un curso',
  `idperiodo` varchar(11) COLLATE utf8_spanish_ci NOT NULL COMMENT 'id del periodo en el que se realiza la asignación',
  `asignatura_a` int(11) NOT NULL COMMENT 'Id de la primer asignatura',
  `estado_m` int(11) NOT NULL COMMENT 'Si esta activo o inactivo',
  PRIMARY KEY (`id_asignaciones`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=198 ;

--
-- Volcado de datos para la tabla `asignacionesm`
--

INSERT INTO `asignacionesm` (`id_asignaciones`, `idmaestro`, `idperiodo`, `asignatura_a`, `estado_m`) VALUES
(195, '1601-1995-00168', '1', 74, 2),
(196, '1601-1995-00168', '1', 29, 2),
(197, '1601-1995-00168', '1', 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE IF NOT EXISTS `asignatura` (
  `id_asignatura` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria',
  `nombre_asig` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre de la asignatura',
  `codigo_asig` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Codigo de la asignatura',
  `idcurso` int(11) NOT NULL COMMENT 'FK, curso al que se le asigna esta clase',
  `estado_a` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Activa o inactiva',
  PRIMARY KEY (`id_asignatura`),
  KEY `idcurso` (`idcurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=75 ;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`id_asignatura`, `nombre_asig`, `codigo_asig`, `idcurso`, `estado_a`) VALUES
(3, 'CIENCIAS NATURALES', 'CCN-2', 5, '1'),
(28, 'CIENCIAS NATURALES', 'CCN-1', 4, '1'),
(29, 'CIENCIAS NATURALES', 'CCN-3', 6, '1'),
(31, 'CIENCIAS NATURALES', 'CCN-5', 8, '1'),
(32, 'CIENCIAS NATURALES', 'CCN-6', 9, '1'),
(33, 'CIENCIAS NATURALES', 'CCN-7', 1, '1'),
(34, 'CIENCIAS NATURALES', 'CCN-8', 2, '1'),
(35, 'CIENCIAS NATURALES', 'CCN-9', 3, '1'),
(36, 'ESPAÃ‘OL ', 'ESP-1', 4, '1'),
(37, 'ESPAÃ‘OL ', 'ESP-2', 5, '1'),
(38, 'ESPAÃ‘OL ', 'ESP-3', 6, '1'),
(40, 'ESPAÃ‘OL ', 'ESP-5', 8, '1'),
(41, 'ESPAÃ‘OL ', 'ESP-6', 9, '1'),
(42, 'ESPAÃ‘OL ', 'ESP-7', 1, '1'),
(43, 'ESPAÃ‘OL ', 'ESP-8', 2, '1'),
(44, 'ESPAÃ‘OL ', 'ESP-9', 3, '1'),
(45, 'CIENCIAS SOCIALES', 'CCS-1', 4, '1'),
(46, 'CIENCIAS SOCIALES', 'CCS-2', 5, '1'),
(47, 'CIENCIAS SOCIALES', 'CCS-3', 6, '1'),
(49, 'CIENCIAS SOCIALES', 'CCS-5', 8, '1'),
(50, 'CIENCIAS SOCIALES', 'CCS-6', 9, '1'),
(51, 'CIENCIAS SOCIALES', 'CCS-7', 1, '1'),
(52, 'CIENCIAS SOCIALES', 'CCS-8', 2, '1'),
(54, 'CIENCIAS SOCIALES', 'CCS-9', 3, '1'),
(55, 'MATEMATICAS', 'MAT-1', 4, '1'),
(56, 'MATEMATICAS', 'MAT-2', 5, '1'),
(57, 'MATEMATICAS', 'MAT-3', 6, '1'),
(59, 'MATEMATICAS', 'MAT-5', 8, '1'),
(60, 'MATEMATICAS', 'MAT-6', 9, '1'),
(61, 'MATEMATICAS', 'MAT-7', 1, '1'),
(62, 'MATEMATICAS', 'MAT-8', 2, '1'),
(63, 'MATEMATICAS', 'MAT-9', 3, '1'),
(64, 'BIBLIA', 'BB-1', 4, '1'),
(65, 'BIBLIA', 'BB-2', 5, '1'),
(66, 'BIBLIA', 'BB-3', 6, '1'),
(68, 'BIBLIA', 'BB-5', 8, '1'),
(69, 'BIBLIA', 'BB-6', 9, '1'),
(70, 'BIBLIA', 'BB-7', 1, '1'),
(71, 'BIBLIA', 'BB-8', 2, '1'),
(72, 'BIBLIA', 'BB-9', 3, '1'),
(73, 'BIBLIA', 'BB-4', 11, '1'),
(74, 'CIENCIAS NATURALES', 'CCN-4', 11, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura1`
--

CREATE TABLE IF NOT EXISTS `asignatura1` (
  `id_asignatura` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria',
  `nombre_asig` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre de la asignatura',
  `codigo_asig` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Codigo de la asignatura',
  `idcurso` int(11) NOT NULL COMMENT 'FK, curso al que se le asigna esta clase',
  `estado_a` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Activa o inactiva',
  PRIMARY KEY (`id_asignatura`),
  KEY `idcurso` (`idcurso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE IF NOT EXISTS `asistencia` (
  `id_asistencia` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `idalumno` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `idmaestro` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `idperiodo` int(11) NOT NULL,
  PRIMARY KEY (`id_asistencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asistencia`, `fecha`, `idalumno`, `tipo`, `idmaestro`, `idperiodo`) VALUES
(26, '2020-08-06', 10, 1, '1601-1995-00168', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria',
  `nombre_c` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del curso',
  `codigo_c` varchar(10) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Codigo del curso',
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `nombre_c`, `codigo_c`) VALUES
(1, 'Septimo', '7-SEP'),
(2, 'Octavo', '8-OCT'),
(3, 'Noveno', '9-NOV'),
(4, 'Primero', '1-ERO'),
(5, 'Segundo', '2-DO'),
(6, 'Tercero', '3-ERO'),
(8, 'Quinto', '5-TO'),
(9, 'Sexto', '6-TO'),
(10, 'Kinder', 'Kinder G'),
(11, 'Cuarto', '4-TO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion_pago`
--

CREATE TABLE IF NOT EXISTS `descripcion_pago` (
  `id_detalle` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `monto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_pagos` date NOT NULL,
  PRIMARY KEY (`id_detalle`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `descripcion_pago`
--

INSERT INTO `descripcion_pago` (`id_detalle`, `descripcion`, `monto`, `estado`, `fecha_pagos`) VALUES
(1, 'Mensualidad', '500', 3, '2019-10-01'),
(2, 'Excursion', '300', 1, '2019-10-24'),
(3, 'GraduaciÃ³n', '500', 1, '2019-11-06'),
(4, 'Camisa educaciÃ³n fÃ­sica', '200', 1, '2020-02-19'),
(5, 'Monogramas', '100', 1, '2020-06-25'),
(6, 'PAGO POR MATRICOLA', '1500', 1, '2020-06-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargados`
--

CREATE TABLE IF NOT EXISTS `encargados` (
  `id_encargado` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria',
  `nombre_e` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del encargado',
  `apellido_e` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Apellido del encargado',
  `identidad_e` varchar(15) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Identidad del encargado',
  `telefono_e` varchar(9) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Telefono del encargado',
  `tipo_e` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Parentesco con el alumno',
  PRIMARY KEY (`id_encargado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `encargados`
--

INSERT INTO `encargados` (`id_encargado`, `nombre_e`, `apellido_e`, `identidad_e`, `telefono_e`, `tipo_e`) VALUES
(5, 'Juan Alonso', 'Alvarado', '1234-5678-77996', '1232-4234', 'Padre'),
(6, 'Rafael ', 'Barahona', '1601-1965-00002', '9876-5643', 'Familiar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastosclim`
--

CREATE TABLE IF NOT EXISTS `gastosclim` (
  `id_gasto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria',
  `costo` decimal(10,0) NOT NULL COMMENT 'Precio al que nos venden el producto',
  `gasto` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Linea a la que pertece el producto',
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Id del usuario que modifica ',
  `fecha_creacion` date NOT NULL,
  `id_usuario_modifica` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_modifica` date NOT NULL,
  PRIMARY KEY (`id_gasto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `gastosclim`
--

INSERT INTO `gastosclim` (`id_gasto`, `costo`, `gasto`, `descripcion`, `id_usuario`, `fecha_creacion`, `id_usuario_modifica`, `fecha_modifica`) VALUES
(1, '100', 'Medicamentos', 'dyfhfh', 'admin', '2019-06-01', 'admin', '2019-06-20'),
(2, '250', 'huevos', 'ksudgfksdjgfksdjfjks', 'admin', '2019-06-20', 'admin', '2019-07-08'),
(3, '200', 'Medicamentos', 'Todos los medicamnetos son importantes para ayudarle a la salud', 'admin', '2019-07-08', 'admin', '2019-07-10'),
(4, '100', 'huevos', 'fghfghfgh', 'Admin', '2019-07-18', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE IF NOT EXISTS `maestros` (
  `id_maestro` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria',
  `nombre_m` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del maestro',
  `apellido_m` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Apellido del maestros',
  `identidad_m` varchar(15) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Identidad del maestro',
  `telefono_m` varchar(9) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Telefono del maestro',
  `estado_m` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Maestro activo o no',
  PRIMARY KEY (`id_maestro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`id_maestro`, `nombre_m`, `apellido_m`, `identidad_m`, `telefono_m`, `estado_m`) VALUES
(2, 'Daniela', 'Romero', '1006-1997-00882', '9898-9898', 'Activo'),
(4, 'Alba Clementina ', 'Rodriguez Caceres', '0801-1990-11222', '1111-1111', 'Activo'),
(10, 'Kelia Sarai ', 'Jimenez Perdomo', '1601-1995-00168', '1111-1111', 'Activo'),
(11, 'Mirna Leticia ', 'Paz Chavez', '1627-1999-00426', '1111-1111', 'Activo'),
(12, 'Marta Elizabeth ', 'Hernandez Leiva', '1601-1972-00305', '1111-1111', 'Activo'),
(13, 'Jannina Lizeth ', 'Mejia Pineda', '1601-1987-00187', '1111-1111', 'Activo'),
(14, 'Yeiny Jackeline ', 'ALvarado Giron', '1007-1990-00367', '1111-1111', 'Activo'),
(15, 'Sharon Johanna ', 'Velasquez Zavala', '0826-1987-00028', '9639-0008', 'Activo'),
(16, 'Saul Rainell ', 'Thompson ', '0101-1969-01774', '1234-5678', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE IF NOT EXISTS `matricula` (
  `id_matricula` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria',
  `idalumno` varchar(15) COLLATE utf8_spanish_ci NOT NULL COMMENT 'FK, Nombre del alumno ',
  `idcurso` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'FK, Curso que cursa',
  `tipo_m` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Reincreso o promovido',
  `fecha` text COLLATE utf8_spanish_ci NOT NULL,
  `estado_ma` int(11) NOT NULL,
  PRIMARY KEY (`id_matricula`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`id_matricula`, `idalumno`, `idcurso`, `tipo_m`, `fecha`, `estado_ma`) VALUES
(13, '1', '5-TO', 'Normal', '2020', 1),
(14, '8', '5-TO', 'Normal', '2020', 1),
(15, '9', '6-TO', 'Normal', '2020', 1),
(16, '10', '4-TO', 'Normal', '2020', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meses`
--

CREATE TABLE IF NOT EXISTS `meses` (
  `id_mes` int(11) NOT NULL AUTO_INCREMENT,
  `mes` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_mes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `meses`
--

INSERT INTO `meses` (`id_mes`, `mes`) VALUES
(1, 'FEBRERO'),
(2, 'MARZO'),
(3, 'ABRIL'),
(4, 'MAYO'),
(5, 'JUNIO'),
(6, 'JULIO'),
(7, 'AGOSTO'),
(8, 'SEPTIEMBRE'),
(9, 'OCTUBRE'),
(10, 'NOVIEMBRE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `Idnotas` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Llave primeria, autoincremental ',
  `Idalumno` int(11) NOT NULL,
  `Idperiodo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Idmateria` int(11) NOT NULL,
  `conducta` int(11) NOT NULL,
  `asistencia` int(11) NOT NULL,
  `acum1` int(11) NOT NULL,
  `acum2` int(11) NOT NULL,
  `acum3` int(11) NOT NULL,
  `prueba1` int(11) NOT NULL,
  `prueba2` int(11) NOT NULL,
  `prueba3` int(11) NOT NULL,
  `examen` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `nota_recuperacion` int(11) NOT NULL,
  `estado_n` int(11) NOT NULL,
  `fecha_notas` date NOT NULL,
  `estado_clase` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `estado_c` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Idnotas`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`Idnotas`, `Idalumno`, `Idperiodo`, `Idmateria`, `conducta`, `asistencia`, `acum1`, `acum2`, `acum3`, `prueba1`, `prueba2`, `prueba3`, `examen`, `total`, `nota_recuperacion`, `estado_n`, `fecha_notas`, `estado_clase`, `estado_c`) VALUES
(5, 10, '1', 74, 10, 5, 5, 5, 5, 10, 10, 10, 10, 70, 0, 2, '2020-08-06', 'Aprobada', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
  `id_pagos` int(11) NOT NULL AUTO_INCREMENT,
  `id_detalle` int(11) NOT NULL,
  `idalumno_p` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `mes_pago` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `fecha_a` date NOT NULL,
  `abono_p` decimal(10,2) NOT NULL,
  `pendiente` decimal(10,2) NOT NULL,
  `total_pago` decimal(10,2) NOT NULL,
  `fecha_an` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `estado_pago` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_pago` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `estado2` int(11) NOT NULL,
  PRIMARY KEY (`id_pagos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=150 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos_detalle`
--

CREATE TABLE IF NOT EXISTS `pagos_detalle` (
  `id_detalle_p` int(11) NOT NULL AUTO_INCREMENT,
  `id_pago` int(11) NOT NULL,
  `abono_d` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_abono` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_detalle_p`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos_varios`
--

CREATE TABLE IF NOT EXISTS `pagos_varios` (
  `id_pagov` int(11) NOT NULL AUTO_INCREMENT,
  `alumnoid` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `fecha_varios` date NOT NULL,
  `estado_varios` int(11) NOT NULL,
  `id_pago` int(11) NOT NULL,
  `fa` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_pagov`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `src`, `date`) VALUES
(1, 'login.jpg', '2018-11-29 05:19:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE IF NOT EXISTS `periodo` (
  `id_periodo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria',
  `nombre_p` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del periodo',
  `codigo_p` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Codigo del periodo en curso',
  `anio_p` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Año en curso',
  `estado_p` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Activo o Inactivo',
  PRIMARY KEY (`id_periodo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`id_periodo`, `nombre_p`, `codigo_p`, `anio_p`, `estado_p`) VALUES
(1, '', 'PRIMER PERIODO', '2020', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bio` text,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `kind` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `bio`, `image`, `name`, `lastname`, `username`, `email`, `password`, `phone`, `address`, `code`, `status`, `kind`, `created_at`) VALUES
(1, NULL, NULL, 'admin', 'admin', 'admin', 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', NULL, NULL, NULL, 1, 1, '2019-05-26 18:54:35'),
(2, NULL, NULL, 'caffinad_wp112', 'admin', 'caffinad_wp112', 'admin', 'Sq3p@7iv(2', NULL, NULL, NULL, 1, 1, '2019-05-26 18:54:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuarios` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria',
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del que ingresa',
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Contraseña ',
  `tipo` int(11) NOT NULL COMMENT 'Nivel de acceso',
  `estado` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Es una cuenta activa o no',
  `fecha_ingreso` date NOT NULL COMMENT 'Fecha en que se hace el ingreso',
  `agregado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `modificado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_modificacion` date NOT NULL,
  PRIMARY KEY (`id_usuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombre`, `usuario`, `pass`, `tipo`, `estado`, `fecha_ingreso`, `agregado`, `modificado`, `fecha_modificacion`) VALUES
(1, 'Alba Clementina ', '0801-1990-11222', '123', 2, 'A', '2020-01-01', '', 'Admin', '2019-04-19'),
(2, 'ADMIN-ASOCIACION', '1111-1111-11111', 'admin', 1, 'A', '2020-01-01', '', 'Admin', '2019-04-19'),
(22, 'Daniela', '1601-1990-00882', '123', 1, 'A', '2019-10-23', '1006-1997-00888', '', '0000-00-00'),
(36, 'Kelia Sarai ', '1601-1995-00168', '1601-1995-00168', 2, 'A', '2020-04-30', '0801-1990-11222', '0801-1990-11222', '2020-04-30'),
(37, 'Mirna Leticia ', '1627-1999-00426', '123456789', 2, 'A', '2020-04-30', '0801-1990-11222', '1111-1111-11111', '2020-06-16'),
(38, 'Marta Elizabeth ', '1601-1972-00305', '1601-1972-00305', 2, 'A', '2020-04-30', '0801-1990-11222', '0801-1990-11222', '2020-04-30'),
(39, 'Jannina Lizeth ', '1601-1987-00187', '1601-1987-00187', 2, 'A', '2020-04-30', '0801-1990-11222', '0801-1990-11222', '2020-04-30'),
(40, 'Yeiny Jackeline ', '1007-1990-00367', '1007-1990-00367', 2, 'A', '2020-04-30', '0801-1990-11222', '0801-1990-11222', '2020-04-30'),
(41, 'Sharon Johanna ', '0826-1987-00028', '0826-1987-00028', 2, 'A', '2020-06-21', '1111-1111-11111', '', '0000-00-00'),
(42, 'Saul Rainell ', '0101-1969-01774', '0101-1969-01774', 2, 'I', '2020-06-21', '1111-1111-11111', '', '0000-00-00');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_ibfk_1` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignatura1`
--
ALTER TABLE `asignatura1`
  ADD CONSTRAINT `asignatura1_ibfk_1` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
