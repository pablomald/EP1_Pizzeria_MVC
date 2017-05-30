-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2017 a las 05:56:40
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pizzeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Pizzas', 'Pizzas al estilo italiano'),
(2, 'Pastas', 'Pastas al estilo italiano'),
(3, 'Ensaladas', 'Ensaladas al estilo italiano'),
(4, 'Bebidas', 'Bebidas al estilo italiano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `direccion`, `telefono`) VALUES
(1, 'Miguel', 'Av. Roble verde #15 col. Delfines', NULL),
(2, 'Joaquin', 'Calle Nogales 20 Colonia amp. Vicente Guerrero', '2147483647'),
(3, 'Pablo', 'Calle eucalipto Numero 20 San francisco Texcalpan', '2147483647'),
(4, '', 'Jona', '7771412690'),
(5, '', 'Jona2', '7771412690'),
(6, '', 'Jona3', '7771412690'),
(7, 'Diana', 'ds', '7771412690'),
(8, 'Juanito', '8098', '7070'),
(9, 'Rocio', '', '7772340987'),
(10, 'Rocio', '', '7771234567'),
(11, 'Rocio', '', '7771234567');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `fecha` datetime(6) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `estado` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `fecha`, `cliente_id`, `estado`) VALUES
(172, '2017-05-29 21:51:46.000000', 7, 'pendiente'),
(173, '2017-05-29 21:51:46.000000', 7, 'pendiente'),
(174, '2017-05-29 21:55:54.000000', 7, 'pendiente'),
(175, '2017-05-29 21:55:54.000000', 7, 'pendiente'),
(176, '2017-05-29 21:57:23.000000', 7, 'pendiente'),
(177, '2017-05-29 21:57:23.000000', 7, 'pendiente'),
(178, '2017-05-29 21:59:26.000000', 7, 'pendiente'),
(179, '2017-05-29 21:59:26.000000', 7, 'pendiente'),
(180, '2017-05-29 22:00:36.000000', 7, 'pendiente'),
(181, '2017-05-29 22:00:36.000000', 7, 'pendiente'),
(182, '2017-05-29 22:01:11.000000', 7, 'pendiente'),
(183, '2017-05-29 22:01:11.000000', 7, 'pendiente'),
(184, '2017-05-29 22:01:45.000000', 7, 'pendiente'),
(185, '2017-05-29 22:01:45.000000', 7, 'pendiente'),
(186, '2017-05-29 22:02:52.000000', 7, 'pendiente'),
(187, '2017-05-29 22:02:52.000000', 7, 'pendiente'),
(188, '2017-05-29 22:03:36.000000', 7, 'pendiente'),
(189, '2017-05-29 22:03:36.000000', 7, 'pendiente'),
(190, '2017-05-29 22:06:36.000000', 7, 'pendiente'),
(191, '2017-05-29 22:06:36.000000', 7, 'pendiente'),
(192, '2017-05-29 22:08:12.000000', 7, 'pendiente'),
(193, '2017-05-29 22:08:12.000000', 7, 'pendiente'),
(194, '2017-05-29 22:09:52.000000', 7, 'pendiente'),
(195, '2017-05-29 22:09:52.000000', 7, 'pendiente'),
(196, '2017-05-29 22:10:01.000000', 7, 'pendiente'),
(197, '2017-05-29 22:10:01.000000', 7, 'pendiente'),
(198, '2017-05-29 22:11:49.000000', 7, 'pendiente'),
(199, '2017-05-29 22:11:49.000000', 7, 'pendiente'),
(200, '2017-05-29 22:14:52.000000', 7, 'pendiente'),
(201, '2017-05-29 22:14:52.000000', 7, 'pendiente'),
(202, '2017-05-29 22:15:44.000000', 7, 'pendiente'),
(203, '2017-05-29 22:15:44.000000', 7, 'pendiente'),
(204, '2017-05-29 22:19:24.000000', 7, 'pendiente'),
(205, '2017-05-29 22:19:24.000000', 7, 'pendiente'),
(206, '2017-05-29 22:35:35.000000', 7, 'pendiente'),
(207, '2017-05-29 22:35:36.000000', 7, 'pendiente'),
(208, '2017-05-29 22:39:48.000000', 7, 'pendiente'),
(209, '2017-05-29 22:39:48.000000', 7, 'pendiente'),
(210, '2017-05-29 22:40:18.000000', 7, 'pendiente'),
(211, '2017-05-29 22:40:18.000000', 7, 'pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_producto`
--

CREATE TABLE `pedido_producto` (
  `id` int(11) NOT NULL,
  `pedido_id` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedido_producto`
--

INSERT INTO `pedido_producto` (`id`, `pedido_id`, `producto_id`, `cantidad`) VALUES
(1, 205, 1, 3),
(2, 205, 2, 3),
(3, 207, 1, 3),
(4, 207, 2, 4),
(5, 207, 4, 3),
(6, 211, 1, 3),
(7, 211, 4, 5),
(8, 211, 2, 5),
(9, 211, 3, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` text,
  `precio` decimal(6,2) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `precio`, `categoria_id`) VALUES
(1, 'Pizza hawaiana', 'Pizza con jamón y piña', '150.00', 1),
(2, 'Pizza mexicana', 'Pizza con frijoles, chile, chorizo', '150.00', 1),
(3, 'Refresco de 2 litros', 'Coca cola 2 litros', '30.00', 4),
(4, 'Ensalada de la casa', 'Ensalada con las mejores hojas verdes y aderezos de la casa', '100.00', 3),
(36, 'Pizza alemana', 'Pizza con carnes frias', '200.00', 1),
(38, 'Refresco de 1lt', 'Refresco sabor Cola', '12.00', 4),
(39, 'Refresco de 1lt', 'Refresco sabor Cola', '13.00', 4),
(40, 'Ensalada Mexicana', 'Ensalada con aguacate', '35.00', 3),
(41, 'Ensalada Mexicana', 'Ensalada con aguacate', '35.00', 3),
(42, 'Pizza V', 'Contiene solo vegetales', '233.00', 1),
(44, 'Pizza de quesos', 'Contiene cuatro tipos de quesos', '300.00', 1),
(45, 'Pizza de quesos Grande', 'Contiene cuatro tipos de quesos', '350.00', 1),
(46, 'Pizza Alemana2', 'Solo para amantes de los hornos', '233.00', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedido_cliente_idx` (`cliente_id`);

--
-- Indices de la tabla `pedido_producto`
--
ALTER TABLE `pedido_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pproducto_producto_idx` (`producto_id`),
  ADD KEY `pproducto_pedido_idx` (`pedido_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_categoria_idx` (`categoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;
--
-- AUTO_INCREMENT de la tabla `pedido_producto`
--
ALTER TABLE `pedido_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedido_producto`
--
ALTER TABLE `pedido_producto`
  ADD CONSTRAINT `pproducto_pedido` FOREIGN KEY (`pedido_id`) REFERENCES `pedido` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pproducto_producto` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
