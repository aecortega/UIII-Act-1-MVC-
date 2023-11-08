-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- CRUD creado por Oscar Amado
-- Contacto: oscarfamado@gmail.com
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-03-2017 a las 17:15:37
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_aecostreet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guia_de_envio`
--

CREATE TABLE `guia_de_envio` (
  `id_envio` int(40) NOT NULL,
  `id_producto` int(40) NOT NULL,
  `n_telefono` int(40) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `id_usuario` varchar(40) NOT NULL,
  `precio_de_envio` decimal(10,2) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `guia_de_envio`
--

INSERT INTO `guia_de_envio` (`id_envio`, `id_producto`,`n_telefono`, `direccion`, `correo`,`nombres`,`id_usuario`, `precio_de_envio`) VALUES
(1, 12, 6565702349, "Calle Cansada", "aeco@gmail.com", "angel", 1, 720.12);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `guia_de_envio`
--
ALTER TABLE `guia_de_envio`
  ADD PRIMARY KEY (`id_envio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `guia_de_envio`
--
ALTER TABLE `guia_de_envio`
  MODIFY `id_envio` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
