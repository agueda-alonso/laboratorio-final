-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-06-2023 a las 19:04:49
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
-- Base de datos: `laboratorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `nombre` varchar(30) NOT NULL,
  `apellido1` varchar(30) NOT NULL,
  `apellido2` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`nombre`, `apellido1`, `apellido2`, `email`, `login`, `password`) VALUES
('Águeda', 'Alonso', 'Rodríguez', 'agueda@lapuputgrafica.com', 'login', 'lab55'),
('Judith', 'Serret', 'Almela', 'judith@serret.com', 'login', 'serret23'),
('Laura', 'García', 'Del Monte', 'lagarcia@montesina.org', 'login', 'lagarci*'),
('María', 'Fernández', 'Patino', 'maria@gmail.com', 'maria', 'mariag20'),
('Carlos', 'Marín', 'Enríquez', 'carlos@gmail.com', 'carlos', 'carlos23'),
('Javier', 'García', 'García', 'javier@gmail.com', 'javier', 'javier77'),
('Pedro', 'Morales', 'Delgado', 'pedro@gmail.com', 'pedro', 'pedro22'),
('Manuel', 'Alonso', 'Iglesias', 'manuel@gmail.com', 'manu', 'gbewdkj'),
('Rita', 'Calvo', 'Márquez', 'rita@hotmail.com', 'rita', 'sdvfhjdf'),
('Larisa', 'Santos', 'Pardo', 'larisa@yahoo.es', 'larisa', 'dhhjfd'),
('Carolina', 'Robles', 'Valero', 'carol@robles.es', 'carol', 'gqvdjn'),
('Hugo', 'Molina', 'Morales', 'hugo@yahoo.com', 'hugo', 'dhfdhj'),
('Leo', 'Lozano', 'Vaquero', 'vaquero@gmail.com', 'vaquero', 'dhhfg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
