-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2025 a las 08:41:00
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
-- Base de datos: `bybpro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonios`
--

CREATE TABLE `testimonios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `empresa` varchar(100) DEFAULT NULL,
  `mensaje` text NOT NULL,
  `calificacion` int(11) DEFAULT NULL CHECK (`calificacion` between 1 and 5),
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `testimonios`
--

INSERT INTO `testimonios` (`id`, `nombre`, `cargo`, `empresa`, `mensaje`, `calificacion`, `fecha`) VALUES
(1, 'Camilo Andres', 'PRUEBA', 'PRUEBA', 'PRUEBA 1', 5, '2025-07-15 18:21:03'),
(2, 'Camilo Andres', 'PRUEBA', 'PRUEBA', 'PRUEBA 2', 1, '2025-07-15 18:25:26'),
(3, 'Instalar cableado.', 'PRUEBA', 'KNAUF DE COLOMBIA S.A.S', 'ff', 3, '2025-07-15 18:57:13'),
(4, 'prueba 33', 'PRUEBA', 'EGA-KAT ZONA FRANCA S.A.S.', 'gg', 2, '2025-07-15 19:20:16'),
(5, 'jorge quejada', '', '', 'ss', 4, '2025-07-15 19:20:40'),
(6, 'prueba actualizá', '', '', 'yyy', 4, '2025-07-15 19:21:15'),
(7, 'prueba 2', 'PRUEBA', 'EGA-KAT ZONA FRANCA S.A.S.', 'holla aa', 3, '2025-07-16 23:41:37'),
(8, 'prueba', 'PRUEBA', 'TGS TRANSPORT GLOBAL SUPPLIERS S.A.S.', 'oooo', 5, '2025-07-17 06:37:10'),
(9, 'Instalar cableado.', '', 'PHOENIX PACKAGING CARIBE S.A.S.', 'kkkk', 5, '2025-07-17 06:37:47'),
(10, 'prueba actualizar', '', 'LOGICOMER S.A.S.', 'lllllllllllllllll', 1, '2025-07-17 06:38:02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
