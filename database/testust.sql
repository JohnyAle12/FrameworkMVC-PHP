-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 05-11-2020 a las 17:50:48
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `TestUST`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `identification_type` varchar(255) NOT NULL,
  `identification_number` varchar(30) NOT NULL,
  `mobile_number` varchar(30) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `born_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`id`, `name`, `identification_type`, `identification_number`, `mobile_number`, `phone_number`, `born_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'paraguayo del rio', 'Cédula de extranjería', '213', '456', '123', '2020-11-27', '2020-11-05 12:44:51', '2020-11-05 17:34:47', '2020-11-05 17:34:47'),
(2, 'paraguayo del rio', 'Cédula de extranjería', '213', '456', '123', '2020-11-27', '2020-11-05 12:57:46', '2020-11-05 17:34:47', '2020-11-05 17:34:47'),
(3, 'paraguayo del rio', 'Cédula de extranjería', '213', '456', '123', '2020-11-27', '2020-11-05 16:28:24', '2020-11-05 17:34:46', '2020-11-05 17:34:46'),
(4, 'Johny Alejandro Prieto', 'Cédula de ciudadanía', '1031156901', '3137881165', '3927060', '1994-11-10', '2020-11-05 16:29:17', '2020-11-05 17:34:43', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
