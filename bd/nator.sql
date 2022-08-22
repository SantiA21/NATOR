-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2022 a las 01:18:43
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nator`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `ID` int(11) NOT NULL,
  `ROL` varchar(50) NOT NULL,
  `IMAGEN_PERFIL` longblob NOT NULL,
  `USUARIO` varchar(50) NOT NULL,
  `CONTRASEÑA` varchar(50) NOT NULL,
  `TELEFONO` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `COMPRAS_REALIZADAS` int(11) NOT NULL DEFAULT 0,
  `COMPRAS_PENDIENTES` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`ID`, `ROL`, `IMAGEN_PERFIL`, `USUARIO`, `CONTRASEÑA`, `TELEFONO`, `EMAIL`, `COMPRAS_REALIZADAS`, `COMPRAS_PENDIENTES`) VALUES
(1, 'CLIENTE', '', 'damsh', 'a3dcb4d229de6fde0db5686dee47145d', 'damsh1@outlook.com', '58671287', 0, 0),
(2, 'CLIENTE', '', 'damsh', 'a3dcb4d229de6fde0db5686dee47145d', '58671287', 'damsh1@outlook.com', 0, 0),
(3, 'CLIENTE', '', 'damsh', 'a3dcb4d229de6fde0db5686dee47145d', '58671287', 'damsh1@outlook.com', 0, 0),
(4, 'CLIENTE', '', 'damsh', 'a3dcb4d229de6fde0db5686dee47145d', '58671287', 'damsh1@outlook.com', 0, 0),
(5, 'CLIENTE', '', 'damsh', 'a3dcb4d229de6fde0db5686dee47145d', '58671287', 'damsh1@outlook.com', 0, 0),
(6, 'CLIENTE', '', 'damsh', 'a3dcb4d229de6fde0db5686dee47145d', '58671287', 'damsh1@outlook.com', 0, 0),
(7, 'CLIENTE', '', 'damsh', 'a3dcb4d229de6fde0db5686dee47145d', '58671287', 'damsh1@outlook.com', 0, 0),
(8, 'CLIENTE', '', 'damsh', 'a3dcb4d229de6fde0db5686dee47145d', '+54 9 1158671233', 'damsh1@outlook.com', 0, 0),
(9, 'CLIENTE', '', 'damsh', 'f5bb0c8de146c67b44babbf4e6584cc0', '+54 9 1158671233', 'damsh1@outlook.com', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
