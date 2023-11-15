-- phpMyAdmin SQL Dump
-- version 5.2.1deb1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 25-10-2023 a las 20:59:42
-- Versión del servidor: 10.11.4-MariaDB-1
-- Versión de PHP: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoZoonosis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acompanante_propietario`
--

CREATE TABLE `acompanante_propietario` (
  `id_dueno` int(11) NOT NULL,
  `celular` int(20) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `tipo_dueno` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `telefono` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agresor`
--

CREATE TABLE `agresor` (
  `id_agresor` int(11) NOT NULL,
  `especie` varchar(250) NOT NULL,
  `raza` varchar(250) NOT NULL,
  `edad` varchar(50) DEFAULT NULL,
  `color` varchar(250) NOT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `sexo` tinyint(1) NOT NULL,
  `fecha_vacunacion_agresor` date NOT NULL DEFAULT current_timestamp(),
  `nombre_dueno_denunciado` varchar(250) DEFAULT NULL,
  `telfDenunciado` bigint(20) DEFAULT NULL,
  `DirDenunciado` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denunciante`
--

CREATE TABLE `denunciante` (
  `id_denunciante` int(11) NOT NULL,
  `nombres_apellidos` varchar(250) NOT NULL,
  `ci` bigint(20) NOT NULL,
  `barrio` varchar(250) NOT NULL,
  `calle` varchar(250) NOT NULL,
  `telfcel` bigint(20) NOT NULL,
  `ocupacion` varchar(250) DEFAULT NULL,
  `lugar_trabajo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento_denuncia`
--

CREATE TABLE `documento_denuncia` (
  `id_denuncia` int(11) NOT NULL,
  `problematica` varchar(250) NOT NULL,
  `fecha_denuncia` date NOT NULL DEFAULT current_timestamp(),
  `croquis` int(11) DEFAULT NULL,
  `seguimiento` varchar(500) NOT NULL,
  `id_denunciante` int(11) NOT NULL,
  `id_agresor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento_esterilizacion`
--

CREATE TABLE `documento_esterilizacion` (
  `id` int(11) NOT NULL,
  `tatuaje` varchar(50) NOT NULL,
  `fecha_esterilizacion` date NOT NULL DEFAULT current_timestamp(),
  `dataType` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`dataType`)),
  `id_dueno` int(11) DEFAULT NULL,
  `id_animal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento_rabia`
--

CREATE TABLE `documento_rabia` (
  `id_doc_rabia` int(11) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `area` tinyint(1) NOT NULL,
  `fecha_registro_rabia` date NOT NULL DEFAULT current_timestamp(),
  `json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`json`)),
  `id_dueno` int(11) NOT NULL,
  `id_animal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente_animal`
--

CREATE TABLE `paciente_animal` (
  `id_animal` int(11) NOT NULL,
  `nombre_animal` varchar(50) DEFAULT NULL,
  `genero` tinyint(1) NOT NULL,
  `zona_direccion` varchar(250) NOT NULL,
  `tipo_dueno` int(11) NOT NULL,
  `edad` varchar(50) NOT NULL,
  `especie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Veterinario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `contrasena`, `id_rol`) VALUES
(1, 'admin', 'admin', 1),
(2, 'veterinario', 'veterinario', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acompanante_propietario`
--
ALTER TABLE `acompanante_propietario`
  ADD PRIMARY KEY (`id_dueno`);

--
-- Indices de la tabla `agresor`
--
ALTER TABLE `agresor`
  ADD PRIMARY KEY (`id_agresor`);

--
-- Indices de la tabla `denunciante`
--
ALTER TABLE `denunciante`
  ADD PRIMARY KEY (`id_denunciante`);

--
-- Indices de la tabla `documento_denuncia`
--
ALTER TABLE `documento_denuncia`
  ADD PRIMARY KEY (`id_denuncia`),
  ADD KEY `id_denunciante` (`id_denunciante`),
  ADD KEY `id_agresor` (`id_agresor`);

--
-- Indices de la tabla `documento_esterilizacion`
--
ALTER TABLE `documento_esterilizacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_esterilizacion_dueno` (`id_dueno`),
  ADD KEY `FK_esterilizacion_animal` (`id_animal`);

--
-- Indices de la tabla `documento_rabia`
--
ALTER TABLE `documento_rabia`
  ADD PRIMARY KEY (`id_doc_rabia`),
  ADD KEY `FK_rabia_dueno` (`id_dueno`),
  ADD KEY `FK_rabia_animal` (`id_animal`);

--
-- Indices de la tabla `paciente_animal`
--
ALTER TABLE `paciente_animal`
  ADD PRIMARY KEY (`id_animal`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acompanante_propietario`
--
ALTER TABLE `acompanante_propietario`
  MODIFY `id_dueno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `agresor`
--
ALTER TABLE `agresor`
  MODIFY `id_agresor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `denunciante`
--
ALTER TABLE `denunciante`
  MODIFY `id_denunciante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documento_denuncia`
--
ALTER TABLE `documento_denuncia`
  MODIFY `id_denuncia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documento_esterilizacion`
--
ALTER TABLE `documento_esterilizacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documento_rabia`
--
ALTER TABLE `documento_rabia`
  MODIFY `id_doc_rabia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paciente_animal`
--
ALTER TABLE `paciente_animal`
  MODIFY `id_animal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `documento_denuncia`
--
ALTER TABLE `documento_denuncia`
  ADD CONSTRAINT `FK_denuncia_agresor` FOREIGN KEY (`id_agresor`) REFERENCES `agresor` (`id_agresor`),
  ADD CONSTRAINT `FK_denuncia_denunciante` FOREIGN KEY (`id_denunciante`) REFERENCES `denunciante` (`id_denunciante`);

--
-- Filtros para la tabla `documento_esterilizacion`
--
ALTER TABLE `documento_esterilizacion`
  ADD CONSTRAINT `FK_esterilizacion_animal` FOREIGN KEY (`id_animal`) REFERENCES `paciente_animal` (`id_animal`),
  ADD CONSTRAINT `FK_esterilizacion_dueno` FOREIGN KEY (`id_dueno`) REFERENCES `acompanante_propietario` (`id_dueno`);

--
-- Filtros para la tabla `documento_rabia`
--
ALTER TABLE `documento_rabia`
  ADD CONSTRAINT `FK_rabia_animal` FOREIGN KEY (`id_animal`) REFERENCES `paciente_animal` (`id_animal`),
  ADD CONSTRAINT `FK_rabia_dueno` FOREIGN KEY (`id_dueno`) REFERENCES `acompanante_propietario` (`id_dueno`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
