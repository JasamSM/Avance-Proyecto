-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 31-10-2020 a las 22:34:09
-- Versión del servidor: 8.0.21-0ubuntu0.20.04.4
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`) VALUES
(1, 'prueba1@mail.com', '$2y$10$rWBlhBMPzvGzMIPl.c88q.dC61TjT0fx/rZ6ZiDUKrP/O8LtMi2jW'),
(2, 'prueba2@mail.com', '$2y$10$HryY4aKCayOh6YVIB.eECeBVtE8MHmzPmps/k/19Jpiw1oRC0LqM6'),
(3, '1', '$2y$10$.IRB7.vQ7osk0kcViA6SuOMTS/bG1aeR4pptNo6dqL5DOLoUIrGgO'),
(4, '2', '$2y$10$LODfw4g49gM05aPkL94R3ebCXcBb8aqFjxW5SQ/yHiHf5dANwT11y'),
(5, '3', '$2y$10$r7dupY5FePlrO/9vox9hsO76dFalJxkj/Sc/DBpSA0z3cSUv.dXyW'),
(6, 'prueba4', '$2y$10$lICFOKoIj53Jed9UoN1WVerTn7w0PvDg4tWJzRHWQYzun2js0sQ0O'),
(7, 'prueba3@mail.com', '$2y$10$9YehYHc9COE/rAFv9TJimusvuufeglMfLaLv2gjPYD4ZEd3uDC/c6'),
(8, 'carlosDaniel@mail.com', '$2y$10$cRE3eJKSwz70sl0HAlYN9.Kg0LIqPJ15JB24hnrzFn/fpdB9HyAva');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
