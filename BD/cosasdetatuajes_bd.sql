-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2022 a las 06:12:33
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cosasdetatuajes_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `existencia` int(11) UNSIGNED NOT NULL,
  `precio` int(10) UNSIGNED NOT NULL,
  `imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `categoria`, `descripcion`, `existencia`, `precio`, `imagen`) VALUES
(1, 'Pluma Black', 'Maquinas', 'Máquina de tatuaje de cromo para principiantes', 5, 4000, 'pluma.jpg'),
(2, 'Flower', 'Maquinas', 'Máquina de bobina para tatuar básica de 10 vueltas', 5, 3500, 'flower.jpg'),
(3, 'Pájaro', 'Maquinas', 'Muy ligera, de fácil manejo, ideal para ser utilizada en trabajos finos y estilizados', 4, 5000, 'pajaro.jpg'),
(4, 'TM3037C', 'Maquinas', 'Máquina para tatuar de Bobina línea económica, modelo TM3037C', 7, 10000, 'tm3037c.jpg'),
(5, 'BLUE MAGIC', 'Tintas', 'La magia azul es una fórmula avanzada de lavado de grises que se mezcla con su negro', 5, 2000, 'tintaazul.jpg'),
(6, 'HENNA', 'Tintas', 'Henna Blackmamba utiliza solo ingredientes de la mejor calidad.', 6, 3000, 'tintahenna.jpg'),
(7, 'Heavy Black', 'Tintas', 'Set de 5 tintas negras', 7, 6000, 'heavy.jpg'),
(8, 'Nuclear Blacklight', 'Tintas', 'Colores nucleares de mamá por Millennium Colorworks Inc.', 4, 7000, 'nuclear.jpg'),
(9, 'RUST', 'Tintas', 'Fabricado con orgullo en los EE. UU. Las tintas World Famous Inks están respaldadas por los artistas más buscados de todo el mundo', 8, 3000, 'rust.jpg'),
(10, 'Robin’s Egg', 'Tintas', 'Una de las mejores tintas para tatuajes', 6, 3150, 'robin.jpg'),
(11, 'Mast P20 Permanent Makeup', 'Maquinas', 'Maquina para tatuar varios colores', 5, 3500, 'mast.jpeg'),
(12, 'Estrellas', 'Maquinas', 'Máquina de bobina para tatuar básica de 10 vueltas, se puede utilizar para línea sombra y relleno.', 8, 4000, 'estrellas.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
