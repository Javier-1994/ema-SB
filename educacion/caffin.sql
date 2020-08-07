-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-02-2020 a las 12:05:18
-- Versión del servidor: 5.6.41-84.1
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `caffinad_wp112`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actas`
--

CREATE TABLE `actas` (
  `id_acta` int(11) NOT NULL COMMENT 'Autoincremental, llave primaria',
  `idalumno` int(11) NOT NULL COMMENT 'Id del alumno ',
  `fecha_a` date NOT NULL COMMENT 'Fecha de expulción',
  `descripcion_a` longtext COLLATE utf8_spanish_ci NOT NULL COMMENT 'Descripción de la expulción'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL COMMENT 'Autoincremental, llave primaria',
  `pnombre_a` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Primer nombre del alumno',
  `snombre_a` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Segundo nombre del alumno',
  `papellido_a` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Primer apellido del alumno',
  `sapellido_a` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Segundo apellido del alumno',
  `identidad_a` varchar(15) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Identidad del alumno',
  `direccion_a` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Dirección del alumno',
  `idencargado` int(11) NOT NULL COMMENT 'Nombre del encargado del alumno'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacionesm`
--

CREATE TABLE `asignacionesm` (
  `id_asignaciones` int(11) NOT NULL COMMENT 'Id autoincremental y llave primaria',
  `idmaestro` int(11) NOT NULL COMMENT 'id del maestro al que se le asignara un curso',
  `idperiodo` int(11) NOT NULL COMMENT 'id del periodo en el que se realiza la asignación',
  `asignatura_a` int(11) NOT NULL COMMENT 'Id de la primer asignatura',
  `estado_m` int(11) NOT NULL COMMENT 'Si esta activo o inactivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `id_asignatura` int(11) NOT NULL COMMENT 'Autoincremental, llave primaria',
  `nombre_asig` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre de la asignatura',
  `codigo_asig` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Codigo de la asignatura',
  `idcurso` int(11) NOT NULL COMMENT 'FK, curso al que se le asigna esta clase',
  `estado_a` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Activa o inactiva'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`id_asignatura`, `nombre_asig`, `codigo_asig`, `idcurso`, `estado_a`) VALUES
(1, 'EspaÃ±ol', 'ESP-7', 2, '1'),
(2, 'EspaÃ±ol', 'ESP-8', 2, '1'),
(3, 'EspaÃ±ol', 'ESP-9', 1, '1'),
(4, 'Matematicas', 'MAT-8', 2, '1'),
(5, 'Matematicas', 'MAT-9', 3, '1'),
(6, 'Matematicas', 'MAT-7', 1, '1'),
(7, 'EducaciÃ³n ArtÃ­stica', 'ART-7', 1, '1'),
(8, 'Ingles', 'ING-7', 1, '1'),
(9, 'Ingles', 'ING-8', 2, '1'),
(10, 'EducaciÃ³n ArtÃ­stica', 'ART-8', 2, '1'),
(11, ' Ingles', 'ING-9', 3, '1'),
(12, 'EducaciÃ³n Fisica', 'EDF-7', 1, '1'),
(13, 'EducaciÃ³n Fisica', 'EDF-8', 2, '1'),
(14, 'EducaciÃ³n Fisica', 'EDF-9', 3, '1'),
(15, 'Ciencias Naturales', 'CCN-7', 1, '1'),
(16, 'Ciencias Naturales', 'CCN-8', 2, '1'),
(17, 'Ciencias Naturales', 'CCN-9', 3, '1'),
(18, 'EducaciÃ³n ArtÃ­stica ', 'ART-9', 3, '1'),
(19, 'Ciencias Sociales', 'CCS-7', 1, '1'),
(20, 'Ciencias Sociales', 'CCS-8', 2, '1'),
(21, 'Ciencias Sociales', 'CCS-9', 3, '1'),
(22, 'EducaciÃ³n Civica', 'CIV-7', 1, '1'),
(23, 'EducaciÃ³n Civica', 'CIV-8', 2, '1'),
(24, 'EducaciÃ³n Civica', 'CIV-9', 3, '1'),
(25, 'Actividades practicas y tecnologÃ­a', 'APT-7', 1, '1'),
(26, 'Actividades practicas y tecnologÃ­a', 'APT-8', 2, '1'),
(27, 'Actividades practicas y tecnologÃ­a', 'APT-9', 3, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura1`
--

CREATE TABLE `asignatura1` (
  `id_asignatura` int(11) NOT NULL COMMENT 'Autoincremental, llave primaria',
  `nombre_asig` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre de la asignatura',
  `codigo_asig` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Codigo de la asignatura',
  `idcurso` int(11) NOT NULL COMMENT 'FK, curso al que se le asigna esta clase',
  `estado_a` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Activa o inactiva'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idalumno` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `idmaestro` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `idperiodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL COMMENT 'Autoincremental, llave primaria',
  `nombre_c` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del curso',
  `codigo_c` varchar(10) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Codigo del curso'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `nombre_c`, `codigo_c`) VALUES
(1, 'Septimo', 'SEP-1'),
(2, 'Octavo', 'OCT-1'),
(3, 'Noveno', 'NOV-1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion_pago`
--

CREATE TABLE `descripcion_pago` (
  `id_detalle` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `monto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_pagos` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `descripcion_pago`
--

INSERT INTO `descripcion_pago` (`id_detalle`, `descripcion`, `monto`, `estado`, `fecha_pagos`) VALUES
(1, 'Mensualidad', '280', 3, '2019-10-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargados`
--

CREATE TABLE `encargados` (
  `id_encargado` int(11) NOT NULL COMMENT 'Autoincremental, llave primaria',
  `nombre_e` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del encargado',
  `apellido_e` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Apellido del encargado',
  `identidad_e` varchar(15) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Identidad del encargado',
  `telefono_e` varchar(9) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Telefono del encargado',
  `tipo_e` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Parentesco con el alumno'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastosclim`
--

CREATE TABLE `gastosclim` (
  `id_gasto` int(11) NOT NULL COMMENT 'Autoincremental, llave primaria',
  `costo` decimal(10,0) NOT NULL COMMENT 'Precio al que nos venden el producto',
  `gasto` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Linea a la que pertece el producto',
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Id del usuario que modifica ',
  `fecha_creacion` date NOT NULL,
  `id_usuario_modifica` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_modifica` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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

CREATE TABLE `maestros` (
  `id_maestro` int(11) NOT NULL COMMENT 'Autoincremental, llave primaria',
  `nombre_m` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del maestro',
  `apellido_m` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Apellido del maestros',
  `identidad_m` varchar(15) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Identidad del maestro',
  `telefono_m` varchar(9) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Telefono del maestro',
  `estado_m` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Maestro activo o no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `id_matricula` int(11) NOT NULL COMMENT 'Autoincremental, llave primaria',
  `idalumno` varchar(15) COLLATE utf8_spanish_ci NOT NULL COMMENT 'FK, Nombre del alumno ',
  `idcurso` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'FK, Curso que cursa',
  `tipo_m` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Reincreso o promovido',
  `fecha` text COLLATE utf8_spanish_ci NOT NULL,
  `estado_ma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meses`
--

CREATE TABLE `meses` (
  `id_mes` int(11) NOT NULL,
  `mes` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `meses`
--

INSERT INTO `meses` (`id_mes`, `mes`) VALUES
(1, 'Marzo'),
(2, 'Abril'),
(3, 'Mayo'),
(4, 'Junio'),
(5, 'Julio'),
(6, 'Agosto'),
(7, 'Septiembre'),
(8, 'Octubre'),
(9, 'Noviembre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `Idnotas` int(11) NOT NULL COMMENT 'Llave primeria, autoincremental ',
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
  `estado_c` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id_pagos` int(11) NOT NULL,
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
  `estado2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos_detalle`
--

CREATE TABLE `pagos_detalle` (
  `id_detalle_p` int(11) NOT NULL,
  `id_pago` int(11) NOT NULL,
  `abono_d` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_abono` varchar(1000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos_varios`
--

CREATE TABLE `pagos_varios` (
  `id_pagov` int(11) NOT NULL,
  `alumnoid` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `fecha_varios` date NOT NULL,
  `estado_varios` int(11) NOT NULL,
  `id_pago` int(11) NOT NULL,
  `fa` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `src` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `src`, `date`) VALUES
(1, 'login.jpg', '2018-11-29 05:19:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id_periodo` int(11) NOT NULL COMMENT 'Autoincremental, llave primaria',
  `nombre_p` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del periodo',
  `codigo_p` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Codigo del periodo en curso',
  `anio_p` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Año en curso',
  `estado_p` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Activo o Inactivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
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
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `bio`, `image`, `name`, `lastname`, `username`, `email`, `password`, `phone`, `address`, `code`, `status`, `kind`, `created_at`) VALUES
(1, NULL, NULL, 'admin', 'admin', 'admin', 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', NULL, NULL, NULL, 1, 1, '2019-05-26 18:54:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL COMMENT 'Autoincremental, llave primaria',
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del que ingresa',
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Contraseña ',
  `tipo` int(11) NOT NULL COMMENT 'Nivel de acceso',
  `estado` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Es una cuenta activa o no',
  `fecha_ingreso` date NOT NULL COMMENT 'Fecha en que se hace el ingreso',
  `agregado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `modificado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_modificacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombre`, `usuario`, `pass`, `tipo`, `estado`, `fecha_ingreso`, `agregado`, `modificado`, `fecha_modificacion`) VALUES
(1, 'Vivian', '1006-1997-00888', '123', 1, 'A', '2019-03-01', '', 'Admin', '2019-04-19'),
(29, 'David Sandoval', '0318-1995-01400', '0318-1995-01400', 1, 'A', '0000-00-00', '', '', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actas`
--
ALTER TABLE `actas`
  ADD PRIMARY KEY (`id_acta`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `idencargado` (`idencargado`);

--
-- Indices de la tabla `asignacionesm`
--
ALTER TABLE `asignacionesm`
  ADD PRIMARY KEY (`id_asignaciones`),
  ADD KEY `idmaestro` (`idmaestro`),
  ADD KEY `asignatura_a` (`asignatura_a`),
  ADD KEY `idperiodo` (`idperiodo`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`id_asignatura`),
  ADD KEY `idcurso` (`idcurso`);

--
-- Indices de la tabla `asignatura1`
--
ALTER TABLE `asignatura1`
  ADD PRIMARY KEY (`id_asignatura`),
  ADD KEY `idcurso` (`idcurso`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `descripcion_pago`
--
ALTER TABLE `descripcion_pago`
  ADD PRIMARY KEY (`id_detalle`);

--
-- Indices de la tabla `encargados`
--
ALTER TABLE `encargados`
  ADD PRIMARY KEY (`id_encargado`);

--
-- Indices de la tabla `gastosclim`
--
ALTER TABLE `gastosclim`
  ADD PRIMARY KEY (`id_gasto`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`id_maestro`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`id_matricula`);

--
-- Indices de la tabla `meses`
--
ALTER TABLE `meses`
  ADD PRIMARY KEY (`id_mes`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`Idnotas`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id_pagos`);

--
-- Indices de la tabla `pagos_detalle`
--
ALTER TABLE `pagos_detalle`
  ADD PRIMARY KEY (`id_detalle_p`);

--
-- Indices de la tabla `pagos_varios`
--
ALTER TABLE `pagos_varios`
  ADD PRIMARY KEY (`id_pagov`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id_periodo`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actas`
--
ALTER TABLE `actas`
  MODIFY `id_acta` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria';

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria';

--
-- AUTO_INCREMENT de la tabla `asignacionesm`
--
ALTER TABLE `asignacionesm`
  MODIFY `id_asignaciones` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id autoincremental y llave primaria';

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `id_asignatura` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria', AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `asignatura1`
--
ALTER TABLE `asignatura1`
  MODIFY `id_asignatura` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria';

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `descripcion_pago`
--
ALTER TABLE `descripcion_pago`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `encargados`
--
ALTER TABLE `encargados`
  MODIFY `id_encargado` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria';

--
-- AUTO_INCREMENT de la tabla `gastosclim`
--
ALTER TABLE `gastosclim`
  MODIFY `id_gasto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
  MODIFY `id_maestro` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria';

--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `id_matricula` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria';

--
-- AUTO_INCREMENT de la tabla `meses`
--
ALTER TABLE `meses`
  MODIFY `id_mes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `Idnotas` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Llave primeria, autoincremental ';

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id_pagos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagos_detalle`
--
ALTER TABLE `pagos_detalle`
  MODIFY `id_detalle_p` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagos_varios`
--
ALTER TABLE `pagos_varios`
  MODIFY `id_pagov` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id_periodo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Autoincremental, llave primaria', AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacionesm`
--
ALTER TABLE `asignacionesm`
  ADD CONSTRAINT `asignacionesm_ibfk_1` FOREIGN KEY (`idmaestro`) REFERENCES `maestros` (`id_maestro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacionesm_ibfk_2` FOREIGN KEY (`idperiodo`) REFERENCES `periodo` (`id_periodo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacionesm_ibfk_3` FOREIGN KEY (`asignatura_a`) REFERENCES `asignatura` (`id_asignatura`) ON DELETE CASCADE ON UPDATE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
