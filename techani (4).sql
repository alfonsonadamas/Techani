-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2023 a las 20:14:37
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
-- Base de datos: `techani`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `análisis_archivos`
--

CREATE TABLE `análisis_archivos` (
  `Fecha` date NOT NULL,
  `Tipo de estudio` varchar(45) NOT NULL,
  `Archivo pdf` varchar(45) NOT NULL,
  `Imagen` varchar(45) NOT NULL,
  `Observaciones` varchar(45) NOT NULL,
  `idAnálisis_archivos` varchar(45) NOT NULL,
  `Cve_paciente` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_alimentos`
--

CREATE TABLE `catalogo_alimentos` (
  `Clave_alimento` int(10) UNSIGNED NOT NULL,
  `Tipo_alimento` varchar(45) DEFAULT NULL,
  `Nombre_alimento` varchar(45) DEFAULT NULL,
  `Cantidad_gramos` varchar(45) DEFAULT NULL,
  `Cantidad_racion` varchar(45) DEFAULT NULL,
  `Cantidad_carbo` varchar(45) DEFAULT NULL,
  `Unidad_medida` varchar(45) DEFAULT NULL,
  `Grasas` varchar(45) DEFAULT NULL,
  `Proteina` varchar(45) DEFAULT NULL,
  `Sodio` varchar(45) DEFAULT NULL,
  `Colesterol` varchar(45) DEFAULT NULL,
  `Indice_glicemico` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `catalogo_alimentos`
--

INSERT INTO `catalogo_alimentos` (`Clave_alimento`, `Tipo_alimento`, `Nombre_alimento`, `Cantidad_gramos`, `Cantidad_racion`, `Cantidad_carbo`, `Unidad_medida`, `Grasas`, `Proteina`, `Sodio`, `Colesterol`, `Indice_glicemico`) VALUES
(1, 'Proteina', 'Bistec', '100', '100', '100', 'Gr', '100', '100', '100', '100', '100'),
(2, 'Grasa', 'Cacahuate', '100', '100', '100', 'Gr', '100', '100', '100', '100', '100'),
(3, 'Lacteo', 'Leche', '100', '100', '100', 'Gr', '100', '100', '100', '100', '100'),
(4, 'Proteina', 'Pollo', '100', '100', '100', 'Gr', '100', '100', '100', '100', '100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `idCitas` int(10) UNSIGNED NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Hora` datetime DEFAULT NULL,
  `Tipo_Cita` varchar(45) DEFAULT NULL,
  `Lugar` varchar(45) DEFAULT NULL,
  `FechaHora_Recordatorio` datetime DEFAULT NULL,
  `Observaciones` varchar(45) DEFAULT NULL,
  `Cve_paciente` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_emergencia`
--

CREATE TABLE `contacto_emergencia` (
  `idContacto Emergencia` int(10) UNSIGNED NOT NULL,
  `Nombre_ContEmergencia` varchar(45) DEFAULT NULL,
  `Contrasenia` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `Cve_paciente` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_medico`
--

CREATE TABLE `contacto_medico` (
  `idContacto_medico` int(10) UNSIGNED NOT NULL,
  `Tipo de medico` varchar(45) DEFAULT NULL,
  `Medico_tratante` varchar(45) DEFAULT NULL,
  `Cedula` varchar(45) DEFAULT NULL,
  `Contrasenia_medico` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `Cve_paciente` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio`
--

CREATE TABLE `ejercicio` (
  `idEjercicio` int(10) UNSIGNED NOT NULL,
  `Fecha_ejercicio` varchar(45) DEFAULT NULL,
  `Hora_ejercicio` varchar(45) DEFAULT NULL,
  `Medicion_glucosa` varchar(45) DEFAULT NULL,
  `Tipo_insulina` varchar(45) DEFAULT NULL,
  `Dosis_insulina` varchar(45) DEFAULT NULL,
  `Cantidad_carbo` varchar(45) DEFAULT NULL,
  `Tipo_ejercicio` varchar(45) DEFAULT NULL,
  `Intensidad` varchar(45) DEFAULT NULL,
  `Tiempo` varchar(45) DEFAULT NULL,
  `Cve_paciente` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio_alimentos`
--

CREATE TABLE `ejercicio_alimentos` (
  `idEjercicio_Alimentos` int(10) UNSIGNED NOT NULL,
  `Ejercicio_idEjercicio` int(10) UNSIGNED NOT NULL,
  `Catalogo_alimentos_Clave_alimento` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_animo`
--

CREATE TABLE `estado_animo` (
  `idEstado animo` int(10) UNSIGNED NOT NULL,
  `Fecha` varchar(45) DEFAULT NULL,
  `Hora` varchar(45) DEFAULT NULL,
  `Estado_animo` varchar(45) DEFAULT NULL,
  `Cve_paciente` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expediente`
--

CREATE TABLE `expediente` (
  `idExpediente` int(10) UNSIGNED NOT NULL,
  `Fecha` varchar(45) DEFAULT NULL,
  `Peso` varchar(45) DEFAULT NULL,
  `Talla` varchar(45) DEFAULT NULL,
  `IMC` varchar(45) DEFAULT NULL,
  `Emoglobina_glicosilada` varchar(45) DEFAULT NULL,
  `Presion` varchar(45) DEFAULT NULL,
  `Glucosa_ayuno` varchar(45) DEFAULT NULL,
  `Colesterol_total` varchar(45) DEFAULT NULL,
  `Colesterol_HDL` varchar(45) DEFAULT NULL,
  `Trigliceridos` varchar(45) DEFAULT NULL,
  `Acido_urico` varchar(45) DEFAULT NULL,
  `Fecha_nacimiento` date DEFAULT NULL,
  `Edad` varchar(45) DEFAULT NULL,
  `Sexo_biologico` varchar(45) DEFAULT NULL,
  `Medicamentos` varchar(45) DEFAULT NULL,
  `Padecimientos_adicionales` varchar(45) DEFAULT NULL,
  `Estatus_crecimiento` varchar(45) DEFAULT NULL,
  `Observaciones_pies` varchar(45) DEFAULT NULL,
  `Examen_neuro` varchar(45) DEFAULT NULL,
  `Meta_glucosa_inf` varchar(45) DEFAULT NULL,
  `Meta_glucosa_sup` varchar(45) DEFAULT NULL,
  `Tiempo_rango` varchar(45) DEFAULT NULL,
  `Glucosa_prom` varchar(45) DEFAULT NULL,
  `Emoglobina_glicosilada_calc` varchar(45) DEFAULT NULL,
  `Cve_paciente` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `Cve_paciente` int(10) UNSIGNED NOT NULL,
  `nombre_paciente` varchar(45) DEFAULT NULL,
  `apodo` varchar(45) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`Cve_paciente`, `nombre_paciente`, `apodo`, `contraseña`, `telefono`, `correo`) VALUES
(1, 'Alfonso', '_alfonso', '123456', '123456', 'correo@correo.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrodiario_alimentos`
--

CREATE TABLE `registrodiario_alimentos` (
  `idRegistroDiario_Alimentos` int(10) UNSIGNED NOT NULL,
  `Registro_diario_idRegistro_diario` int(10) UNSIGNED NOT NULL,
  `Catalogo_alimentos_Clave_alimento` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `registrodiario_alimentos`
--

INSERT INTO `registrodiario_alimentos` (`idRegistroDiario_Alimentos`, `Registro_diario_idRegistro_diario`, `Catalogo_alimentos_Clave_alimento`) VALUES
(6, 10, 1),
(7, 10, 1),
(8, 10, 1),
(9, 10, 1),
(10, 10, 1),
(11, 10, 1),
(12, 10, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_diario`
--

CREATE TABLE `registro_diario` (
  `idRegistro_diario` int(10) UNSIGNED NOT NULL,
  `Fecha_Hora` datetime DEFAULT NULL,
  `glucosa` int(11) NOT NULL,
  `Tipo_insulina` varchar(45) DEFAULT NULL,
  `Dosis` varchar(45) DEFAULT NULL,
  `Tipo_dosis` varchar(45) DEFAULT NULL,
  `Tipo_medicion` varchar(45) DEFAULT NULL,
  `Cantidad_agua` varchar(45) DEFAULT NULL,
  `Dia_atipico` varchar(45) DEFAULT NULL,
  `Observaciones` longtext DEFAULT NULL,
  `Cve_paciente` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `registro_diario`
--

INSERT INTO `registro_diario` (`idRegistro_diario`, `Fecha_Hora`, `glucosa`, `Tipo_insulina`, `Dosis`, `Tipo_dosis`, `Tipo_medicion`, `Cantidad_agua`, `Dia_atipico`, `Observaciones`, `Cve_paciente`) VALUES
(5, '2023-09-11 21:09:37', 0, 'lenta', '1', 'alimentos', 'prep_d', '0', 'menstruacion', 'asdasda', 1),
(8, '2023-09-23 17:36:24', 0, 'lenta', '1', 'alimentos', 'prep_d', '0', 'menstruacion', '', 1),
(9, '2023-09-25 17:36:24', 0, 'lenta', '1', 'alimentos', 'prep_d', '0', 'menstruacion', '', 1),
(10, '2023-10-01 16:40:09', 0, 'lenta', '1', 'alimentos', 'prep_d', '0', 'menstruacion', '', 1),
(11, '2023-10-02 16:40:09', 0, 'lenta', '1', 'alimentos', 'prep_d', '0', 'menstruacion', '', 1),
(12, '2023-10-05 22:12:11', 0, 'lenta', '1', 'alimentos', 'prep_d', '0', 'menstruacion', '', 1),
(13, '2023-10-05 22:13:41', 0, 'lenta', '1', 'alimentos', 'prep_d', '0', 'menstruacion', '', 1),
(14, '2023-10-05 22:14:04', 0, 'lenta', '1', 'alimentos', 'prep_d', '0', 'menstruacion', '', 1),
(15, '2023-10-06 09:24:12', 0, 'lenta', '1', 'alimentos', 'prep_d', '0', 'ninguno', '', 1),
(16, '2023-10-06 12:49:01', 0, 'rapida', '2', 'alimentos', 'prep_d', '2', 'ninguno', '', 1),
(17, '2023-10-07 19:01:17', 0, 'lenta', '1', 'alimentos', 'prep_d', '0', 'ninguno', '', 1),
(18, '2023-10-07 19:29:31', 0, 'lenta', '1', 'alimentos', 'prep_d', '0', 'ninguno', '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `análisis_archivos`
--
ALTER TABLE `análisis_archivos`
  ADD PRIMARY KEY (`idAnálisis_archivos`),
  ADD KEY `fk_Análisis_archivos_Contacto_paciente_idx` (`Cve_paciente`);

--
-- Indices de la tabla `catalogo_alimentos`
--
ALTER TABLE `catalogo_alimentos`
  ADD PRIMARY KEY (`Clave_alimento`),
  ADD UNIQUE KEY `idCatalogo_alimentos_UNIQUE` (`Clave_alimento`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`idCitas`),
  ADD UNIQUE KEY `idCitas_UNIQUE` (`idCitas`),
  ADD KEY `fk_Citas_Paciente1_idx` (`Cve_paciente`);

--
-- Indices de la tabla `contacto_emergencia`
--
ALTER TABLE `contacto_emergencia`
  ADD PRIMARY KEY (`idContacto Emergencia`),
  ADD UNIQUE KEY `idContacto Emergencia_UNIQUE` (`idContacto Emergencia`),
  ADD KEY `fk_Contacto Emergencia_Contacto_paciente1_idx` (`Cve_paciente`);

--
-- Indices de la tabla `contacto_medico`
--
ALTER TABLE `contacto_medico`
  ADD PRIMARY KEY (`idContacto_medico`),
  ADD UNIQUE KEY `idContacto_medico_UNIQUE` (`idContacto_medico`),
  ADD KEY `fk_Contacto_medico_Contacto_paciente1_idx` (`Cve_paciente`);

--
-- Indices de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD PRIMARY KEY (`idEjercicio`),
  ADD UNIQUE KEY `idEjercicio_UNIQUE` (`idEjercicio`),
  ADD KEY `fk_Ejercicio_Paciente1_idx` (`Cve_paciente`);

--
-- Indices de la tabla `ejercicio_alimentos`
--
ALTER TABLE `ejercicio_alimentos`
  ADD PRIMARY KEY (`idEjercicio_Alimentos`),
  ADD UNIQUE KEY `idEjercicio_Alimentos_UNIQUE` (`idEjercicio_Alimentos`),
  ADD KEY `fk_Ejercicio_Alimentos_Ejercicio1_idx` (`Ejercicio_idEjercicio`),
  ADD KEY `fk_Ejercicio_Alimentos_Catalogo_alimentos1_idx` (`Catalogo_alimentos_Clave_alimento`);

--
-- Indices de la tabla `estado_animo`
--
ALTER TABLE `estado_animo`
  ADD PRIMARY KEY (`idEstado animo`),
  ADD UNIQUE KEY `idEstado animo_UNIQUE` (`idEstado animo`),
  ADD KEY `fk_Estado animo_Paciente1_idx` (`Cve_paciente`);

--
-- Indices de la tabla `expediente`
--
ALTER TABLE `expediente`
  ADD PRIMARY KEY (`idExpediente`),
  ADD UNIQUE KEY `idExpediente_UNIQUE` (`idExpediente`),
  ADD KEY `fk_Expediente_Paciente1_idx` (`Cve_paciente`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`Cve_paciente`),
  ADD UNIQUE KEY `idContacto_paciente_UNIQUE` (`Cve_paciente`);

--
-- Indices de la tabla `registrodiario_alimentos`
--
ALTER TABLE `registrodiario_alimentos`
  ADD PRIMARY KEY (`idRegistroDiario_Alimentos`),
  ADD UNIQUE KEY `idRegistroDiario_Alimentos_UNIQUE` (`idRegistroDiario_Alimentos`),
  ADD KEY `fk_RegistroDiario_Alimentos_Registro diario1_idx` (`Registro_diario_idRegistro_diario`),
  ADD KEY `fk_RegistroDiario_Alimentos_Catalogo_alimentos1_idx` (`Catalogo_alimentos_Clave_alimento`);

--
-- Indices de la tabla `registro_diario`
--
ALTER TABLE `registro_diario`
  ADD PRIMARY KEY (`idRegistro_diario`),
  ADD UNIQUE KEY `idRegistro diario_UNIQUE` (`idRegistro_diario`),
  ADD KEY `fk_Registro diario_Contacto_paciente1_idx` (`Cve_paciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo_alimentos`
--
ALTER TABLE `catalogo_alimentos`
  MODIFY `Clave_alimento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `idCitas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `contacto_emergencia`
--
ALTER TABLE `contacto_emergencia`
  MODIFY `idContacto Emergencia` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto_medico`
--
ALTER TABLE `contacto_medico`
  MODIFY `idContacto_medico` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  MODIFY `idEjercicio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ejercicio_alimentos`
--
ALTER TABLE `ejercicio_alimentos`
  MODIFY `idEjercicio_Alimentos` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_animo`
--
ALTER TABLE `estado_animo`
  MODIFY `idEstado animo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `expediente`
--
ALTER TABLE `expediente`
  MODIFY `idExpediente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `Cve_paciente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registrodiario_alimentos`
--
ALTER TABLE `registrodiario_alimentos`
  MODIFY `idRegistroDiario_Alimentos` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `registro_diario`
--
ALTER TABLE `registro_diario`
  MODIFY `idRegistro_diario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `análisis_archivos`
--
ALTER TABLE `análisis_archivos`
  ADD CONSTRAINT `fk_Análisis_archivos_Contacto_paciente` FOREIGN KEY (`Cve_paciente`) REFERENCES `paciente` (`Cve_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `fk_Citas_Paciente1` FOREIGN KEY (`Cve_paciente`) REFERENCES `paciente` (`Cve_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `contacto_emergencia`
--
ALTER TABLE `contacto_emergencia`
  ADD CONSTRAINT `fk_Contacto Emergencia_Contacto_paciente1` FOREIGN KEY (`Cve_paciente`) REFERENCES `paciente` (`Cve_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `contacto_medico`
--
ALTER TABLE `contacto_medico`
  ADD CONSTRAINT `fk_Contacto_medico_Contacto_paciente1` FOREIGN KEY (`Cve_paciente`) REFERENCES `paciente` (`Cve_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD CONSTRAINT `fk_Ejercicio_Paciente1` FOREIGN KEY (`Cve_paciente`) REFERENCES `paciente` (`Cve_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ejercicio_alimentos`
--
ALTER TABLE `ejercicio_alimentos`
  ADD CONSTRAINT `fk_Ejercicio_Alimentos_Catalogo_alimentos1` FOREIGN KEY (`Catalogo_alimentos_Clave_alimento`) REFERENCES `catalogo_alimentos` (`Clave_alimento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Ejercicio_Alimentos_Ejercicio1` FOREIGN KEY (`Ejercicio_idEjercicio`) REFERENCES `ejercicio` (`idEjercicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `estado_animo`
--
ALTER TABLE `estado_animo`
  ADD CONSTRAINT `fk_Estado animo_Paciente1` FOREIGN KEY (`Cve_paciente`) REFERENCES `paciente` (`Cve_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `expediente`
--
ALTER TABLE `expediente`
  ADD CONSTRAINT `fk_Expediente_Paciente1` FOREIGN KEY (`Cve_paciente`) REFERENCES `paciente` (`Cve_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `registrodiario_alimentos`
--
ALTER TABLE `registrodiario_alimentos`
  ADD CONSTRAINT `fk_RegistroDiario_Alimentos_Catalogo_alimentos1` FOREIGN KEY (`Catalogo_alimentos_Clave_alimento`) REFERENCES `catalogo_alimentos` (`Clave_alimento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_RegistroDiario_Alimentos_Registro diario1` FOREIGN KEY (`Registro_diario_idRegistro_diario`) REFERENCES `registro_diario` (`idRegistro_diario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `registro_diario`
--
ALTER TABLE `registro_diario`
  ADD CONSTRAINT `fk_Registro diario_Contacto_paciente1` FOREIGN KEY (`Cve_paciente`) REFERENCES `paciente` (`Cve_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
