-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-07-2023 a las 03:33:21
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clientes`
--

CREATE TABLE `tbl_clientes` (
  `id` int(10) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`id`, `cedula`, `nombre`, `direccion`, `celular`, `correo`) VALUES
(1, '1212', 'MATEO SANCHEZ      ', 'MZ 14 15 PP', '3134807212', 'acmysistemas@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_consecutivof`
--

CREATE TABLE `tbl_consecutivof` (
  `id` int(10) NOT NULL,
  `consecutivo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_consecutivof`
--

INSERT INTO `tbl_consecutivof` (`id`, `consecutivo`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_dfactura`
--

CREATE TABLE `tbl_dfactura` (
  `id` int(10) NOT NULL,
  `nfactura` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `cliente` varchar(300) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `iva` int(10) NOT NULL,
  `subtotal` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_dfactura`
--

INSERT INTO `tbl_dfactura` (`id`, `nfactura`, `fecha`, `cedula`, `cliente`, `tipo`, `descripcion`, `cantidad`, `precio`, `total`, `iva`, `subtotal`) VALUES
(1, '4', '2023-07-14', '1212', 'MATEO SANCHEZ     ', 'HARDWARE', 'disco duro', 2, 15000, 30000, 4790, 25210);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_dfacturap`
--

CREATE TABLE `tbl_dfacturap` (
  `id` int(10) NOT NULL,
  `nfactura` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `cliente` varchar(300) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `iva` int(10) NOT NULL,
  `subtotal` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_dfacturap`
--

INSERT INTO `tbl_dfacturap` (`id`, `nfactura`, `fecha`, `cedula`, `cliente`, `tipo`, `descripcion`, `cantidad`, `precio`, `total`, `iva`, `subtotal`) VALUES
(17, '9', '2023-07-14', '1212', 'MATEO SANCHEZ      ', 'SOFTWARE', 'SDAASDASDSA', 1, 222222, 222222, 35481, 186741),
(14, '5', '2023-07-14', '', '', 'SOFTWARE', '', 0, 0, 0, 0, 0),
(16, '7', '2023-07-14', '', '', 'SOFTWARE', 'CV', 3, 25000, 75000, 11975, 63025);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_equipos`
--

CREATE TABLE `tbl_equipos` (
  `id` int(10) NOT NULL,
  `equipo` varchar(100) NOT NULL,
  `discod` varchar(30) NOT NULL,
  `serialeq` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `falla` varchar(100) NOT NULL,
  `memoriar` varchar(50) NOT NULL,
  `procesador` varchar(50) NOT NULL,
  `obs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_equipos`
--

INSERT INTO `tbl_equipos` (`id`, `equipo`, `discod`, `serialeq`, `marca`, `falla`, `memoriar`, `procesador`, `obs`) VALUES
(1, 'cpu', 'asus', '12345', 'dell', 'SOFTWARE', '2 GB', 'INTEL', 'NA ARANCA'),
(2, 'PORTATIL', 'HITACHI', '5555', 'ASUS', 'SOFTWARE', '2 GB', 'INTEL', 'NA ARANCA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_factura`
--

CREATE TABLE `tbl_factura` (
  `id` int(10) NOT NULL,
  `nfactura` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `cliente` varchar(300) NOT NULL,
  `subtotal` int(10) NOT NULL,
  `iva` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_factura`
--

INSERT INTO `tbl_factura` (`id`, `nfactura`, `fecha`, `cedula`, `cliente`, `subtotal`, `iva`, `total`) VALUES
(2, '4', '2023-07-14', '1212', 'MATEO SANCHEZ     ', 25210, 4790, 30000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id` int(30) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `cedula` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id`, `nombre`, `apellido`, `correo`, `clave`, `fecha`, `cedula`) VALUES
(20, 'Jesus Antonio', 'Sanchez Sanchez', 'acmysistemas@gmail.com', 'Romeo1970', '2023-07-14', '79057182');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_consecutivof`
--
ALTER TABLE `tbl_consecutivof`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_dfactura`
--
ALTER TABLE `tbl_dfactura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_dfacturap`
--
ALTER TABLE `tbl_dfacturap`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_equipos`
--
ALTER TABLE `tbl_equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_factura`
--
ALTER TABLE `tbl_factura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbl_consecutivof`
--
ALTER TABLE `tbl_consecutivof`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `tbl_dfactura`
--
ALTER TABLE `tbl_dfactura`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbl_dfacturap`
--
ALTER TABLE `tbl_dfacturap`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `tbl_equipos`
--
ALTER TABLE `tbl_equipos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_factura`
--
ALTER TABLE `tbl_factura`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
