-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2023 a las 15:45:18
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
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id` int(11) NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp(),
  `tipo_evento` varchar(50) DEFAULT NULL,
  `descripcion` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id`, `fecha_hora`, `tipo_evento`, `descripcion`, `usuario`) VALUES
(1, '2023-11-28 15:58:25', 'nuevo usuario', 'Se creó un nuevo usuario: Alfo', 'Alfonso'),
(2, '2023-12-03 01:05:07', 'nuevo usuario', 'Se creó un nuevo usuario: Alfo', 'Alfonso'),
(3, '2023-12-03 01:06:11', 'nuevo usuario', 'Se creó un nuevo usuario: Alfo', 'Alfonso'),
(4, '2023-12-03 01:13:44', 'nuevo usuario', 'Se creó un nuevo usuario: Alfo', 'Alfonso'),
(5, '2023-12-04 22:11:49', 'nuevo usuario', 'Se creó un nuevo usuario: Alfo', 'Alfonso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora_deletes`
--

CREATE TABLE `bitacora_deletes` (
  `id` int(11) NOT NULL,
  `id_eliminado` int(11) DEFAULT NULL,
  `dato_eliminado` varchar(100) DEFAULT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora_updates`
--

CREATE TABLE `bitacora_updates` (
  `id` int(11) NOT NULL,
  `id_original` int(11) DEFAULT NULL,
  `dato_anterior` varchar(100) DEFAULT NULL,
  `dato_nuevo` varchar(100) DEFAULT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bitacora_updates`
--

INSERT INTO `bitacora_updates` (`id`, `id_original`, `dato_anterior`, `dato_nuevo`, `fecha_hora`) VALUES
(1, 1, 'Alfonso', 'Jose', '2023-12-04 02:43:02');

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
  `Hora` time DEFAULT NULL,
  `Tipo_Cita` varchar(45) DEFAULT NULL,
  `Lugar` varchar(45) DEFAULT NULL,
  `FechaHora_Recordatorio` datetime DEFAULT NULL,
  `Observaciones` varchar(45) DEFAULT NULL,
  `Cve_paciente` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`idCitas`, `Fecha`, `Hora`, `Tipo_Cita`, `Lugar`, `FechaHora_Recordatorio`, `Observaciones`, `Cve_paciente`) VALUES
(8, '2023-12-06', '11:00:00', 'Analisis Clinicos', 'IMSS', NULL, 'Ninguna', 1);

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
  `apellidoP_paciente` varchar(30) NOT NULL,
  `apellidoM_paciente` varchar(30) NOT NULL,
  `nombre_usuario` varchar(45) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`Cve_paciente`, `nombre_paciente`, `apellidoP_paciente`, `apellidoM_paciente`, `nombre_usuario`, `contraseña`, `telefono`, `correo`) VALUES
(1, 'Jose', 'Gallardo', 'Magaña', '_alfonso', '123456', '123456', 'correo@correo.com'),
(19, 'Alfonso', 'Gallardo', 'Gallardo', 'usuario123', 'Contraseña', '4432733246', 'correo@correo432.com');

--
-- Disparadores `paciente`
--
DELIMITER $$
CREATE TRIGGER `editar_paciente_apellidoM` BEFORE UPDATE ON `paciente` FOR EACH ROW INSERT INTO bitacora_updates (id_original, dato_anterior, dato_nuevo)
    VALUES (OLD.Cve_paciente, OLD.apellidoM_paciente, NEW.apellidoM_paciente)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `editar_paciente_apellidoP` BEFORE UPDATE ON `paciente` FOR EACH ROW INSERT INTO bitacora_updates (id_original, dato_anterior, dato_nuevo)
    VALUES (OLD.Cve_paciente, OLD.apellidoP_paciente, NEW.apellidoP_paciente)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `editar_paciente_nombre` BEFORE UPDATE ON `paciente` FOR EACH ROW INSERT INTO bitacora_updates (id_original, dato_anterior, dato_nuevo)
    VALUES (OLD.Cve_paciente, OLD.nombre_paciente, NEW.nombre_paciente)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `editar_paciente_telefono` BEFORE UPDATE ON `paciente` FOR EACH ROW INSERT INTO bitacora_updates (id_original, dato_anterior, dato_nuevo)
    VALUES (OLD.Cve_paciente, OLD.telefono, NEW.telefono)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `editar_paciente_usuario` BEFORE UPDATE ON `paciente` FOR EACH ROW INSERT INTO bitacora_updates (id_original, dato_anterior, dato_nuevo)
    VALUES (OLD.Cve_paciente, OLD.nombre_usuario, NEW.nombre_usuario)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `nuevo_paciente` BEFORE INSERT ON `paciente` FOR EACH ROW INSERT INTO bitacora (tipo_evento, usuario, descripcion) 
    VALUES ('nuevo usuario', NEW.nombre_paciente, CONCAT('Se creó un nuevo usuario: ', NEW.nombre_paciente))
$$
DELIMITER ;

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
  `Fecha` date DEFAULT NULL,
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

INSERT INTO `registro_diario` (`idRegistro_diario`, `Fecha`, `glucosa`, `Tipo_insulina`, `Dosis`, `Tipo_dosis`, `Tipo_medicion`, `Cantidad_agua`, `Dia_atipico`, `Observaciones`, `Cve_paciente`) VALUES
(10, '2023-10-01', 0, 'lenta', '1', 'alimentos', 'prep_d', '0', 'menstruacion', '', 1),
(22, '2023-11-22', 1, 'lenta', '1', 'alimentos', 'Prepandrial - Desayuno', '0', 'ninguno', '', 1),
(23, '2023-11-23', 1, 'lenta', '1', 'alimentos', 'Prepandrial - Desayuno', '0', 'ninguno', 'ljkl', 1);

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
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bitacora_deletes`
--
ALTER TABLE `bitacora_deletes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bitacora_updates`
--
ALTER TABLE `bitacora_updates`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `bitacora_deletes`
--
ALTER TABLE `bitacora_deletes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bitacora_updates`
--
ALTER TABLE `bitacora_updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `catalogo_alimentos`
--
ALTER TABLE `catalogo_alimentos`
  MODIFY `Clave_alimento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `idCitas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `Cve_paciente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `registrodiario_alimentos`
--
ALTER TABLE `registrodiario_alimentos`
  MODIFY `idRegistroDiario_Alimentos` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `registro_diario`
--
ALTER TABLE `registro_diario`
  MODIFY `idRegistro_diario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
