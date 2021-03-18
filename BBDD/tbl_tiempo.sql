-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 11-03-2021 a les 02:12:41
-- Versió del servidor: 10.1.38-MariaDB
-- Versió de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `bd_thatzweather`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `tbl_tiempo`
--

CREATE TABLE `tbl_tiempo` (
  `id` int(11) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `cpostal` int(5) NOT NULL,
  `temperatura` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Bolcament de dades per a la taula `tbl_tiempo`
--

INSERT INTO `tbl_tiempo` (`id`, `ciudad`, `cpostal`, `temperatura`) VALUES
(1, 'Cornella De Llobregat', 8940, 10),
(2, 'Leon', 24002, 6);

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `tbl_tiempo`
--
ALTER TABLE `tbl_tiempo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `tbl_tiempo`
--
ALTER TABLE `tbl_tiempo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
