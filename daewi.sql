-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2017 a las 20:48:36
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `daewi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienes`
--

CREATE TABLE `bienes` (
  `id_bienes` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bienes`
--

INSERT INTO `bienes` (`id_bienes`, `descripcion`, `tipo`) VALUES
(1, 'es un computaor', 'electronica'),
(3, 'es basuraaa electronica', 'Computador'),
(4, 'peludo', 'gato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `idCargo` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `JefeArea` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`idCargo`, `descripcion`, `JefeArea`) VALUES
(1, 'encargado inventario', 0),
(2, 'hace algo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `id_cotizacion` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_responsable` int(11) NOT NULL,
  `id_solicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion-bienes`
--

CREATE TABLE `cotizacion-bienes` (
  `cotizacion_id_cotizacion` int(11) NOT NULL,
  `bienes_id_bienes` int(11) NOT NULL,
  `cantidad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE `ingreso` (
  `id_ingreso` int(11) NOT NULL,
  `fecha_ingreso` varchar(45) NOT NULL,
  `id_orden-compra` int(11) NOT NULL,
  `cantidad` varchar(45) NOT NULL,
  `valor_total` varchar(45) NOT NULL,
  `id_bienes` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_inventario` int(11) NOT NULL,
  `codigo_unico` varchar(45) NOT NULL,
  `id_bienes` int(11) NOT NULL,
  `ubicacion` varchar(45) NOT NULL,
  `fecha_ingreso` varchar(45) NOT NULL,
  `id_responsable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_inventario`, `codigo_unico`, `id_bienes`, `ubicacion`, `fecha_ingreso`, `id_responsable`) VALUES
(1, 'ABK4568RsY7', 1, 'hola', '31/04/98', 1),
(4, 'ABK45sY7', 3, 'casa', '04/05/2017', 1),
(6, 'AGAdt5rAW', 4, 'FREE', '30/08/15', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden-compra`
--

CREATE TABLE `orden-compra` (
  `id_orden-compra` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_bienes` int(11) NOT NULL,
  `aprobado` int(11) NOT NULL,
  `id_cotizacion` int(11) NOT NULL,
  `id_responsable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nro_orden` varchar(45) NOT NULL,
  `ruc` int(11) NOT NULL,
  `razon_social` varchar(255) NOT NULL,
  `fecha_orden` datetime NOT NULL,
  `monto_total` double NOT NULL,
  `fecha_entrega` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nro_orden`, `ruc`, `razon_social`, `fecha_orden`, `monto_total`, `fecha_entrega`) VALUES
(1, '34578', 1345, 'si se ', '2017-09-04 00:00:00', 250000, '2017-09-29'),
(2, '3443', 365, 'esa cosa', '0000-00-00 00:00:00', 23456, '0000-00-00'),
(3, '34', 2567, 'ESO', '0000-00-00 00:00:00', 2400, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable`
--

CREATE TABLE `responsable` (
  `id_responsable` int(11) NOT NULL,
  `dni` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `idCargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `responsable`
--

INSERT INTO `responsable` (`id_responsable`, `dni`, `nombre`, `idCargo`) VALUES
(1, '3456', 'camilo garcia', 1),
(2, '345690', 'andres perez', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id_solicitud` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_responsable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud-bienes`
--

CREATE TABLE `solicitud-bienes` (
  `id_solicitud-bienes` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_solicitud` int(11) NOT NULL,
  `id_bienes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_usu` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `usuario` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `tipo_usuario` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cod_usu`, `nombre`, `usuario`, `password`, `tipo_usuario`) VALUES
(1, 'alex', 'jiaz', '123456', '1'),
(2, 'brian', 'redes', '3456', '2'),
(3, 'Dae ', 'Wi', 'yu1', '3'),
(4, 'Mori', 'Jin', 'tae1', '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bienes`
--
ALTER TABLE `bienes`
  ADD PRIMARY KEY (`id_bienes`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`idCargo`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`id_cotizacion`),
  ADD KEY `id_responsable` (`id_responsable`),
  ADD KEY `id_solicitud` (`id_solicitud`),
  ADD KEY `id_responsable_2` (`id_responsable`);

--
-- Indices de la tabla `cotizacion-bienes`
--
ALTER TABLE `cotizacion-bienes`
  ADD KEY `cotizacion_id_cotizacion` (`cotizacion_id_cotizacion`,`bienes_id_bienes`),
  ADD KEY `bienes_id_bienes` (`bienes_id_bienes`);

--
-- Indices de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD PRIMARY KEY (`id_ingreso`),
  ADD KEY `id_orden-compra` (`id_orden-compra`,`id_bienes`,`id_proveedor`),
  ADD KEY `id_bienes` (`id_bienes`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_inventario`),
  ADD KEY `id_bienes` (`id_bienes`),
  ADD KEY `id_responsable` (`id_responsable`);

--
-- Indices de la tabla `orden-compra`
--
ALTER TABLE `orden-compra`
  ADD PRIMARY KEY (`id_orden-compra`),
  ADD KEY `id_proveedor` (`id_proveedor`,`id_bienes`,`id_cotizacion`,`id_responsable`),
  ADD KEY `id_responsable` (`id_responsable`),
  ADD KEY `id_cotizacion` (`id_cotizacion`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`id_responsable`),
  ADD KEY `idCargo` (`idCargo`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `id_responsable` (`id_responsable`);

--
-- Indices de la tabla `solicitud-bienes`
--
ALTER TABLE `solicitud-bienes`
  ADD PRIMARY KEY (`id_solicitud-bienes`),
  ADD KEY `id_solicitud` (`id_solicitud`,`id_bienes`),
  ADD KEY `id_bienes` (`id_bienes`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bienes`
--
ALTER TABLE `bienes`
  MODIFY `id_bienes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `idCargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `id_cotizacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `id_ingreso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_inventario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `orden-compra`
--
ALTER TABLE `orden-compra`
  MODIFY `id_orden-compra` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `responsable`
--
ALTER TABLE `responsable`
  MODIFY `id_responsable` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `solicitud-bienes`
--
ALTER TABLE `solicitud-bienes`
  MODIFY `id_solicitud-bienes` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD CONSTRAINT `cotizacion_ibfk_1` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud` (`id_solicitud`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cotizacion_ibfk_2` FOREIGN KEY (`id_responsable`) REFERENCES `responsable` (`id_responsable`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cotizacion-bienes`
--
ALTER TABLE `cotizacion-bienes`
  ADD CONSTRAINT `cotizacion-bienes_ibfk_1` FOREIGN KEY (`cotizacion_id_cotizacion`) REFERENCES `cotizacion` (`id_cotizacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cotizacion-bienes_ibfk_2` FOREIGN KEY (`bienes_id_bienes`) REFERENCES `bienes` (`id_bienes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD CONSTRAINT `ingreso_ibfk_1` FOREIGN KEY (`id_bienes`) REFERENCES `bienes` (`id_bienes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ingreso_ibfk_2` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ingreso_ibfk_3` FOREIGN KEY (`id_orden-compra`) REFERENCES `orden-compra` (`id_orden-compra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`id_responsable`) REFERENCES `responsable` (`id_responsable`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventario_ibfk_2` FOREIGN KEY (`id_bienes`) REFERENCES `bienes` (`id_bienes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `orden-compra`
--
ALTER TABLE `orden-compra`
  ADD CONSTRAINT `orden-compra_ibfk_1` FOREIGN KEY (`id_responsable`) REFERENCES `responsable` (`id_responsable`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orden-compra_ibfk_2` FOREIGN KEY (`id_cotizacion`) REFERENCES `cotizacion` (`id_cotizacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `responsable`
--
ALTER TABLE `responsable`
  ADD CONSTRAINT `responsable_ibfk_1` FOREIGN KEY (`idCargo`) REFERENCES `cargo` (`idCargo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`id_responsable`) REFERENCES `responsable` (`id_responsable`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `solicitud-bienes`
--
ALTER TABLE `solicitud-bienes`
  ADD CONSTRAINT `solicitud-bienes_ibfk_1` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud` (`id_solicitud`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `solicitud-bienes_ibfk_2` FOREIGN KEY (`id_bienes`) REFERENCES `bienes` (`id_bienes`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
