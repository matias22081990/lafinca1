-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2024 a las 03:00:37
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edificio`
--

CREATE TABLE `edificio` (
  `id` int(11) NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `codigoPostal` int(11) DEFAULT NULL,
  `localidad` varchar(50) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `idPropietario` int(11) DEFAULT NULL,
  `idInquilino` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inquilino`
--

CREATE TABLE `inquilino` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `codigoPostal` int(11) DEFAULT NULL,
  `localidad` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `cuit` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `local`
--

CREATE TABLE `local` (
  `id` int(11) NOT NULL,
  `denominacion` varchar(1) DEFAULT NULL,
  `idEdificio` int(11) DEFAULT NULL,
  `idPropietario` int(11) DEFAULT NULL,
  `idInquilino` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piso`
--

CREATE TABLE `piso` (
  `id` int(11) NOT NULL,
  `denominacion` varchar(1) DEFAULT NULL,
  `idEdificio` int(11) DEFAULT NULL,
  `idPropietario` int(11) DEFAULT NULL,
  `idInquilino` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `codigoPostal` int(11) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `cuit` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `propietario`
--

INSERT INTO `propietario` (`id`, `nombre`, `apellido`, `direccion`, `numero`, `codigoPostal`, `localidad`, `telefono`, `cuit`) VALUES
(1, '1', '1', '1', 1, 1, '1', '1', '1'),
(2, '2', '2', '2', 2, 2, '2', '2', '2'),
(3, '3', '3', '3', 3, 3, '3', '3', '3'),
(4, '3', '3', '3', 3, 3, '3', '3', '3'),
(5, '5', '5', '5', 5, 5, '5', '5', '5'),
(11, '10', '10', '9', 9, 0, '9', '9', '9');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `edificio`
--
ALTER TABLE `edificio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPropietario` (`idPropietario`),
  ADD KEY `idInquilino` (`idInquilino`);

--
-- Indices de la tabla `inquilino`
--
ALTER TABLE `inquilino`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEdificio` (`idEdificio`),
  ADD KEY `idPropietario` (`idPropietario`),
  ADD KEY `idInquilino` (`idInquilino`);

--
-- Indices de la tabla `piso`
--
ALTER TABLE `piso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEdificio` (`idEdificio`),
  ADD KEY `idPropietario` (`idPropietario`),
  ADD KEY `idInquilino` (`idInquilino`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `edificio`
--
ALTER TABLE `edificio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `inquilino`
--
ALTER TABLE `inquilino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `local`
--
ALTER TABLE `local`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `piso`
--
ALTER TABLE `piso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `propietario`
--
ALTER TABLE `propietario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `edificio`
--
ALTER TABLE `edificio`
  ADD CONSTRAINT `edificio_ibfk_1` FOREIGN KEY (`idPropietario`) REFERENCES `propietario` (`id`),
  ADD CONSTRAINT `edificio_ibfk_2` FOREIGN KEY (`idInquilino`) REFERENCES `inquilino` (`id`);

--
-- Filtros para la tabla `local`
--
ALTER TABLE `local`
  ADD CONSTRAINT `local_ibfk_1` FOREIGN KEY (`idEdificio`) REFERENCES `edificio` (`id`),
  ADD CONSTRAINT `local_ibfk_2` FOREIGN KEY (`idPropietario`) REFERENCES `propietario` (`id`),
  ADD CONSTRAINT `local_ibfk_3` FOREIGN KEY (`idInquilino`) REFERENCES `inquilino` (`id`);

--
-- Filtros para la tabla `piso`
--
ALTER TABLE `piso`
  ADD CONSTRAINT `piso_ibfk_1` FOREIGN KEY (`idEdificio`) REFERENCES `edificio` (`id`),
  ADD CONSTRAINT `piso_ibfk_2` FOREIGN KEY (`idPropietario`) REFERENCES `propietario` (`id`),
  ADD CONSTRAINT `piso_ibfk_3` FOREIGN KEY (`idInquilino`) REFERENCES `inquilino` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
