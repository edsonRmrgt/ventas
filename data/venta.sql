-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-07-2016 a las 02:55:48
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `venta`
--
CREATE DATABASE `venta` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `venta`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `IdCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCategoria` varchar(70) DEFAULT NULL,
  `Descripcion` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IdCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`IdCategoria`, `NombreCategoria`, `Descripcion`, `image`) VALUES
(1, 'Computadoras de Escritorio', NULL, NULL),
(2, 'Computadoras Personales', NULL, NULL),
(3, 'Accesorios', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `IdCliente` int(11) NOT NULL AUTO_INCREMENT,
  `carnet` varchar(10) NOT NULL,
  `Nombres` varchar(30) DEFAULT NULL,
  `Apellidos` varchar(30) DEFAULT NULL,
  `Direccion` varchar(30) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Ciudad` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IdCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`IdCliente`, `carnet`, `Nombres`, `Apellidos`, `Direccion`, `Telefono`, `Ciudad`) VALUES
(1, '95219391', 'EDUARDO', 'MASABI', 'C/LOS CUARTELES', '75333422', 'Cbba'),
(2, '7892922', 'Daniel', 'Casas Toledo', 'Z/ 16 de Julio C/ Bolivar N 9', '2677809', 'El Alto'),
(4, '467289', 'Fabiola', 'Perez Reyes', 'C/ Cochabamba 52', '2377772', 'La Paz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `idpedido` int(10) NOT NULL AUTO_INCREMENT,
  `idproducto` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `unidades` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  PRIMARY KEY (`idpedido`),
  KEY `idproducto` (`idproducto`),
  KEY `idcategoria` (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idpedido`, `idproducto`, `fecha`, `unidades`, `idcategoria`) VALUES
(1, 1, '2016-07-01', 7, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `idProducto` int(10) NOT NULL AUTO_INCREMENT,
  `NombreProducto` varchar(60) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `PrecioEntrada` float DEFAULT NULL,
  `PrecioSalida` float DEFAULT NULL,
  `Id_Categoria` int(11) DEFAULT NULL,
  `CantidadPorUnidad` int(5) DEFAULT NULL,
  PRIMARY KEY (`idProducto`),
  KEY `Id_Categoria` (`Id_Categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `NombreProducto`, `descripcion`, `PrecioEntrada`, `PrecioSalida`, `Id_Categoria`, `CantidadPorUnidad`) VALUES
(1, 'Laptop HP', 'Procesador Intel Celeron RAM 4GB', 4000, 4500, 1, 5),
(2, 'Laptop ASUS', 'Procesador Intel Corei3 RAM 8GB', 4580, 5500, 1, 2),
(3, 'Procesador', 'acer corei7 RAM 4GB', 2500, 3100, 1, 6),
(4, 'Teclado', 'Delux Multijuego', 70, 100, 3, 3),
(5, 'Parlentes', 'Delux 50 Watts', 150, 250, 3, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `NomUsuario` varchar(50) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Clave` varchar(60) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Nombres`, `Apellidos`, `NomUsuario`, `Email`, `Clave`, `image`) VALUES
(2, 'Ruben', 'Quispecahuana Limachi', 'Ruben', 'ruquispe@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `IdVenta` int(11) NOT NULL AUTO_INCREMENT,
  `IdCliente` int(11) DEFAULT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `idproducto` int(10) NOT NULL,
  `total` double DEFAULT NULL,
  `Efectivo` double DEFAULT NULL,
  `Descuento` double DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `cantidad` int(5) NOT NULL,
  PRIMARY KEY (`IdVenta`),
  KEY `IdUsuario` (`IdUsuario`),
  KEY `IdCliente` (`IdCliente`),
  KEY `idproducto` (`idproducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`IdVenta`, `IdCliente`, `IdUsuario`, `idproducto`, `total`, `Efectivo`, `Descuento`, `fecha`, `cantidad`) VALUES
(1, 2, 2, 1, 13500, 13500, NULL, '2016-07-29 00:00:00', 3);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`idcategoria`) REFERENCES `categorias` (`IdCategoria`),
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idProducto`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`Id_Categoria`) REFERENCES `categorias` (`IdCategoria`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`IdCliente`) REFERENCES `clientes` (`IdCliente`),
  ADD CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`IdCliente`) REFERENCES `clientes` (`IdCliente`),
  ADD CONSTRAINT `venta_ibfk_4` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idProducto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
