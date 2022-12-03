-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2022 a las 02:06:03
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `api`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro`
--

CREATE TABLE `carro` (
  `id_carro` int(11) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `cant_pasajeros` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carro`
--

INSERT INTO `carro` (`id_carro`, `placa`, `marca`, `cant_pasajeros`) VALUES
(6, 'mzo13d', 'boxer', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `id_conductor` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `fecha_contratacion` date NOT NULL,
  `fecha_terminacion` date NOT NULL,
  `bono_extras` float NOT NULL,
  `email` varchar(200) NOT NULL,
  `id_vehiculo` int(11) NOT NULL,
  `FECHA` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`id_conductor`, `cedula`, `nombres`, `apellidos`, `fecha_contratacion`, `fecha_terminacion`, `bono_extras`, `email`, `id_vehiculo`, `FECHA`) VALUES
(7, 231321, 'valentina', 'montes', '2022-12-02', '2022-12-16', 312312, 'digoes2003@gmail.com', 6, '2022-12-02'),
(9, 546456456, 'DINA', 'ESTRELLA', '2022-12-02', '2022-12-23', 3, 'digoes2003@gmail.com', 6, '2022-12-02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`id_carro`);

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`id_conductor`),
  ADD KEY `id_vehiculo` (`id_vehiculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carro`
--
ALTER TABLE `carro`
  MODIFY `id_carro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `conductor`
--
ALTER TABLE `conductor`
  MODIFY `id_conductor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD CONSTRAINT `conductor_ibfk_1` FOREIGN KEY (`id_vehiculo`) REFERENCES `carro` (`id_carro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `conductor_ibfk_2` FOREIGN KEY (`id_vehiculo`) REFERENCES `carro` (`id_carro`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
