-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-07-2017 a las 04:31:05
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
-- Base de datos: `ClusterImpulsar`
--
CREATE DATABASE IF NOT EXISTS `ClusterImpulsar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ClusterImpulsar`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Asistentes`
--

CREATE TABLE `Asistentes` (
  `Id_Asistentes` int(11) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Asistencia` tinyint(1) NOT NULL,
  `CodigoEntrada` varchar(15) NOT NULL,
  `Id_Cargo` int(11) NOT NULL,
  `Id_Empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cargos`
--

CREATE TABLE `Cargos` (
  `Id_Cargo` int(11) NOT NULL,
  `NombreCargo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empresas`
--

CREATE TABLE `Empresas` (
  `Id_Empresa` int(11) NOT NULL,
  `NombreEmpresa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Asistentes`
--
ALTER TABLE `Asistentes`
  ADD PRIMARY KEY (`Id_Asistentes`),
  ADD KEY `Id_Cargo` (`Id_Cargo`),
  ADD KEY `Id_Empresa` (`Id_Empresa`);

--
-- Indices de la tabla `Cargos`
--
ALTER TABLE `Cargos`
  ADD PRIMARY KEY (`Id_Cargo`);

--
-- Indices de la tabla `Empresas`
--
ALTER TABLE `Empresas`
  ADD PRIMARY KEY (`Id_Empresa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Asistentes`
--
ALTER TABLE `Asistentes`
  MODIFY `Id_Asistentes` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Cargos`
--
ALTER TABLE `Cargos`
  MODIFY `Id_Cargo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Empresas`
--
ALTER TABLE `Empresas`
  MODIFY `Id_Empresa` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Asistentes`
--
ALTER TABLE `Asistentes`
  ADD CONSTRAINT `Asistentes_ibfk_1` FOREIGN KEY (`Id_Cargo`) REFERENCES `Cargos` (`Id_Cargo`),
  ADD CONSTRAINT `Asistentes_ibfk_2` FOREIGN KEY (`Id_Empresa`) REFERENCES `Empresas` (`Id_Empresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
