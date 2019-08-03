-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2019 a las 07:02:47
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `muebleriacm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(10) NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL,
  `categoria_idEstatus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombre_categoria`, `categoria_idEstatus`) VALUES
(1, 'Salas', 1),
(2, 'Antecomedores', 1),
(3, 'Recámaras', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `idComentario` int(11) NOT NULL,
  `comentario` varchar(250) DEFAULT NULL,
  `comentario_idEstatus` int(10) NOT NULL,
  `comentario_idCliente` int(10) NOT NULL,
  `comentario_idRespuesta` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`idComentario`, `comentario`, `comentario_idEstatus`, `comentario_idCliente`, `comentario_idRespuesta`) VALUES
(3, 'Perfecto', 2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `idCompra` int(10) NOT NULL,
  `fecha_compra` date NOT NULL,
  `pendiente` tinyint(1) NOT NULL,
  `compra_idPedido` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`idCompra`, `fecha_compra`, `pendiente`, `compra_idPedido`) VALUES
(4, '2019-08-01', 1, 8),
(5, '2019-08-01', 1, 8),
(6, '2019-08-01', 1, 8),
(7, '2019-08-01', 1, 8),
(8, '2019-08-01', 1, 8),
(9, '2019-08-01', 1, 8),
(10, '2019-08-01', 1, 8),
(11, '2019-08-01', 1, 8),
(12, '2019-08-01', 1, 8),
(13, '2019-08-01', 1, 8),
(14, '2019-08-01', 1, 8),
(15, '2019-08-01', 1, 8),
(16, '2019-08-01', 1, 8),
(17, '2019-08-01', 1, 8),
(18, '2019-08-01', 1, 8),
(19, '2019-08-01', 1, 8),
(20, '2019-08-01', 1, 8),
(21, '2019-08-01', 1, 8),
(22, '2019-08-01', 1, 8),
(23, '2019-08-01', 1, 8),
(24, '2019-08-01', 1, 8),
(25, '2019-08-01', 1, 8),
(26, '2019-08-01', 1, 8),
(27, '2019-08-01', 1, 8),
(28, '2019-08-01', 1, 8),
(29, '2019-08-01', 1, 8),
(30, '2019-08-01', 1, 8),
(31, '2019-08-01', 1, 8),
(32, '2019-08-01', 1, 8),
(33, '2019-08-01', 1, 8),
(34, '2019-08-01', 1, 8),
(35, '2019-08-01', 1, 8),
(36, '2019-08-01', 1, 8),
(37, '2019-08-01', 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `idDireccion` int(10) NOT NULL,
  `codigo_postal` varchar(5) NOT NULL,
  `estado_idEstado` int(10) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `cliente_idCliente` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`idDireccion`, `codigo_postal`, `estado_idEstado`, `municipio`, `colonia`, `calle`, `numero`, `telefono`, `cliente_idCliente`) VALUES
(4, '38670', 2, 'Acámbaro', 'San Isidro', '4 de Julio ', '9', '4171231326', 2),
(5, '38670', 2, 'Acámbaro', 'San Isidro', 'Avenida San Antonio', '162', '1790960', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(10) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `estado_idEstatus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `estado`, `estado_idEstatus`) VALUES
(2, 'Guanajuato', 1),
(3, 'Michoacán', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE `estatus` (
  `idEstatus` int(10) NOT NULL,
  `estatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`idEstatus`, `estatus`) VALUES
(1, 'Activo'),
(2, 'Desactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idPedido` int(10) NOT NULL,
  `cantidad_producto` int(11) NOT NULL,
  `fecha_pedido` date NOT NULL,
  `total` double NOT NULL,
  `pedido_idEstatus` int(10) NOT NULL,
  `pedido_idCliente` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idPedido`, `cantidad_producto`, `fecha_pedido`, `total`, `pedido_idEstatus`, `pedido_idCliente`) VALUES
(8, 1, '2019-07-31', 12900, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(10) NOT NULL,
  `imagen_producto` varchar(100) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `precio` double NOT NULL,
  `stock` int(10) NOT NULL,
  `fecha_registro` date NOT NULL,
  `detalles` varchar(500) NOT NULL,
  `producto_idEstatus` int(10) NOT NULL,
  `producto_idCategoria` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `imagen_producto`, `nombre_producto`, `precio`, `stock`, `fecha_registro`, `detalles`, `producto_idEstatus`, `producto_idCategoria`) VALUES
(1, 'a42db-cd74b-venecia.jpg', 'Venecia', 11605, 3, '2019-07-28', 'Tres-Dos-Uno', 1, 1),
(2, '0f636-4efd0-holanda.jpg', 'Holanda', 12900, 3, '2019-07-29', 'Tres-Dos-Uno', 1, 1),
(3, '4c8a8-bfca0-francia.jpg', 'Francia', 19050, 4, '2019-08-01', 'Tres-Dos-Uno', 1, 1),
(4, 'd6009-8dff6-bogota.jpg', 'Bogota', 5500, 5, '2019-08-01', '6 Sillas y Mesa', 1, 2),
(5, 'afef1-acc41-domino.jpg', 'Domino', 6750, 4, '2019-08-01', '6 Sillas y Mesa', 1, 2),
(7, '1d625-e99ef-buenosaires.jpg', 'Buenos Aires', 5500, 3, '2019-08-01', '6 Sillas y Mesa', 1, 2),
(8, '3452d-15d06-lucca.jpg', 'Lucca', 10560, 2, '2019-08-01', '4 piezas (No incluye base y colchón)', 1, 3),
(9, '6a7be-ad1b4-sicilia.jpg', 'Sicilia', 9850, 4, '2019-08-01', '4 piezas (No incluye base y colchón)', 1, 3),
(10, '96aa1-38227-logan.jpg', 'Logan', 10690, 6, '2019-08-01', '4 piezas (No incluye base y colchón)', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `idPromocion` int(10) NOT NULL,
  `nombre_promocion` varchar(50) NOT NULL,
  `fecha_inicial` date NOT NULL,
  `fecha_final` date NOT NULL,
  `descripcion_promo` text NOT NULL,
  `imagen_promo` varchar(70) NOT NULL,
  `promocion_idProducto` int(10) NOT NULL,
  `promocion_idEstatus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `promocion`
--

INSERT INTO `promocion` (`idPromocion`, `nombre_promocion`, `fecha_inicial`, `fecha_final`, `descripcion_promo`, `imagen_promo`, `promocion_idProducto`, `promocion_idEstatus`) VALUES
(1, 'El Mes 8', '2019-08-01', '2019-08-31', '<p>\n	Todo el mes de Agosto, 10% de descuentos en las Salas</p>\n', '57011-4efd0-holanda.jpg', 2, 1),
(2, 'Enero Loco', '2019-01-01', '2019-01-31', '<p>\n	Evita la cuesta de Enero a los mejores precios</p>\n', 'c8659-acc41-domino.jpg', 5, 2),
(3, 'Amor y Amistad', '2019-02-01', '2019-02-28', '<p>\n	Para la mejor pareja, la mejor r&eacute;camara&nbsp;</p>\n', '885be-38227-logan.jpg', 10, 2),
(4, 'Día de las Madres', '2019-05-01', '2019-05-31', '<p>\n	Con todo el amor de mam&aacute;</p>\n', '1b519-cd74b-venecia.jpg', 1, 2),
(5, 'Remates de Diciembre', '2019-12-01', '2019-12-31', '<p>\n	Pr&oacute;ximo a&ntilde;o nuevo, comedor nuevo</p>\n', 'd0084-e99ef-buenosaires.jpg', 7, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `idRespuesta` int(10) NOT NULL,
  `respuesta` varchar(250) NOT NULL,
  `respuesta_idEstatus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`idRespuesta`, `respuesta`, `respuesta_idEstatus`) VALUES
(1, 'Respuesta Pendiente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `idTipo` int(10) NOT NULL,
  `nombre_tipo_usuario` varchar(100) NOT NULL,
  `privilegios` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`idTipo`, `nombre_tipo_usuario`, `privilegios`) VALUES
(1, 'SuperAdministrador', 1),
(2, 'Usuario', 1),
(3, 'Administrador', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tipo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `apellido`, `email`, `password`, `tipo`) VALUES
(1, 'Ernesto', 'Rico', 'netoricow@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(2, 'Gilberto', 'Sanchez', 'gilsc678@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(4, 'Marco', 'Trenado', 'aleeth@outlook.com', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(5, 'Andrea', 'Garcia', 'viri_garcia16@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(6, 'Macario', 'Gutiérrez', 'maka@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`),
  ADD KEY `estatus` (`categoria_idEstatus`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idComentario`),
  ADD KEY `comentario_idCliente` (`comentario_idCliente`,`comentario_idRespuesta`),
  ADD KEY `comentario_idRespuesta` (`comentario_idRespuesta`),
  ADD KEY `estatus` (`comentario_idEstatus`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`idCompra`),
  ADD KEY `compra_idCliente` (`compra_idPedido`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`idDireccion`),
  ADD KEY `cliente_idCliente` (`cliente_idCliente`),
  ADD KEY `estado_idEstado` (`estado_idEstado`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`),
  ADD KEY `estado_idEstatus` (`estado_idEstatus`);

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`idEstatus`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `pedido_idCliente` (`pedido_idCliente`),
  ADD KEY `pedido_idEstatus` (`pedido_idEstatus`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `producto_idCategoria` (`producto_idCategoria`),
  ADD KEY `estatus` (`producto_idEstatus`);

--
-- Indices de la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD PRIMARY KEY (`idPromocion`),
  ADD KEY `promocion_idProducto` (`promocion_idProducto`),
  ADD KEY `promocion_idEstatus` (`promocion_idEstatus`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`idRespuesta`),
  ADD KEY `estatus` (`respuesta_idEstatus`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `tipo` (`tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `idCompra` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `idDireccion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
  MODIFY `idEstatus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `promocion`
--
ALTER TABLE `promocion`
  MODIFY `idPromocion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `idRespuesta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idTipo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`categoria_idEstatus`) REFERENCES `estatus` (`idEstatus`);

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`comentario_idRespuesta`) REFERENCES `respuesta` (`idRespuesta`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`comentario_idCliente`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `comentario_ibfk_3` FOREIGN KEY (`comentario_idEstatus`) REFERENCES `estatus` (`idEstatus`);

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`compra_idPedido`) REFERENCES `pedido` (`idPedido`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `direccion_ibfk_1` FOREIGN KEY (`cliente_idCliente`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `direccion_ibfk_2` FOREIGN KEY (`estado_idEstado`) REFERENCES `estado` (`idEstado`);

--
-- Filtros para la tabla `estado`
--
ALTER TABLE `estado`
  ADD CONSTRAINT `estado_ibfk_1` FOREIGN KEY (`estado_idEstatus`) REFERENCES `estatus` (`idEstatus`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`pedido_idCliente`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`pedido_idEstatus`) REFERENCES `estatus` (`idEstatus`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`producto_idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`producto_idEstatus`) REFERENCES `estatus` (`idEstatus`);

--
-- Filtros para la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD CONSTRAINT `promocion_ibfk_1` FOREIGN KEY (`promocion_idProducto`) REFERENCES `producto` (`idProducto`),
  ADD CONSTRAINT `promocion_ibfk_2` FOREIGN KEY (`promocion_idEstatus`) REFERENCES `estatus` (`idEstatus`);

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `respuesta_ibfk_1` FOREIGN KEY (`respuesta_idEstatus`) REFERENCES `estatus` (`idEstatus`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipo` (`idTipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
