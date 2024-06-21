-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-04-2024 a las 23:19:40
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `racknowledge`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`id`, `nombre`) VALUES
(1, 'Biologia'),
(2, 'Matematicas'),
(3, 'Espanol'),
(4, 'Ingles'),
(5, 'Sociales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `temas` varchar(20) NOT NULL,
  `foto` blob NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `metodo_pago` varchar(25) NOT NULL,
  `id_configuracion` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciones`
--

CREATE TABLE `evaluaciones` (
  `nombre` varchar(30) NOT NULL,
  `nota` decimal(5,0) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `id_evaluacion` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `id_asignaturas` int(11) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `imagen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`id`, `nombre`, `descripcion`, `id_asignaturas`, `fecha_alta`, `imagen`) VALUES
(38, 'prueba', 'esto es una prueba', 1, '2024-04-06 22:29:14', '../datos/imagen/38.jpg'),
(39, 'Felicidad', 'Que se siente ser feliz', 1, '2024-04-06 22:57:15', '../datos/imagen/39.jpg'),
(40, 'Piedra', 'Roca', 2, '2024-04-06 23:03:06', '../datos/imagen/40.jpg'),
(41, 'montaña', 'montaña', 3, '2024-04-06 23:03:28', '../datos/imagen/41.jpg'),
(42, 'paisaje', 'paisaje', 4, '2024-04-06 23:03:51', '../datos/imagen/42.jpg'),
(43, 'hogan', 'hulkster', 5, '2024-04-06 23:04:08', '../datos/imagen/43.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `minijuegos`
--

CREATE TABLE `minijuegos` (
  `nombre` varchar(30) NOT NULL,
  `puntaje` decimal(5,0) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `id_minijuego` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(150) NOT NULL,
  `rol` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `rol`) VALUES
(1, 'estudiante'),
(2, 'profesor'),
(3, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `servicio` varchar(20) NOT NULL,
  `id_servicio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soporte_tecnico`
--

CREATE TABLE `soporte_tecnico` (
  `solicitud` varchar(50) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `id_soporte` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `tipo_documento` varchar(10) NOT NULL,
  `numero_documento` varchar(20) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `rol` int(150) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `tipo_documento`, `numero_documento`, `correo`, `telefono`, `fecha_nacimiento`, `rol`, `contrasena`) VALUES
(8, 'Angel David', 'Martinez Chaparro', 'TI', '10004658', 'angelishoo@gmail.com', '3124568980', '2006-02-26', 3, '$2y$10$.kYm3FGsW0lG.QjnIy83JuLEruWUZ4D5sP5U5tNR/zkAF/lwjeQA2'),
(10, 'Juan David', 'Miranda', 'TI', '1033696667', 'juandavid2545@gmail.com', '3124286696', '2006-04-25', 3, '$2y$10$jlZSSknlsLyQ/xaHSjOcae8DBRGCmhU7zHtg1dKYRz3KsT43JCqrq'),
(14, 'Anderson Julian', 'Avila', 'TI', '1022950018', 'andersonjulian3407@gmail.com', '3102278348', '2007-04-03', 3, '$2y$10$q2LoPe5dhtbsO3fwr2JhOuTp3wGo57stfEqn278CXkQUUaOh0oBFO'),
(15, 'Dayro', 'Moreno', 'CC', '102255646', 'dayro@gmail.com', '3212321560', '1988-06-14', 1, '$2y$10$AeB6NdK5vMGrJZRcev8fBOjLBDn42noYcFg1/uv53BCcGwQURey6O'),
(16, 'Messi', 'Ronaldo', 'CC', '1022569789', 'ronaldo@gmail.com', '3125468945', '1983-10-18', 2, '$2y$10$2c.vXQTfPLKUWDx/Sz9HyOtG3J.M6tGZBLXlUz6OoG0HTDstjVsFy');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_temas_asignaturas` (`id_asignaturas`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD CONSTRAINT `fk_temas_asignaturas` FOREIGN KEY (`id_asignaturas`) REFERENCES `asignaturas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
