-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Temps de generació: 14-03-2016 a les 11:49:29
-- Versió del servidor: 10.1.9-MariaDB
-- Versió de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `pasqualitirado`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `CicleIA`
--

CREATE TABLE `CicleIA` (
  `DNI` varchar(9) NOT NULL,
  `Torn` varchar(60) NOT NULL,
  `Validada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de la taula `CilceIIB`
--

CREATE TABLE `CilceIIB` (
  `DNI` varchar(9) NOT NULL,
  `Torn` varchar(60) NOT NULL,
  `Optativa1` varchar(30) NOT NULL,
  `Optativa2` varchar(30) NOT NULL,
  `Validada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de la taula `CursosPolivalents`
--

CREATE TABLE `CursosPolivalents` (
  `DNI` varchar(30) NOT NULL,
  `Torn` varchar(60) NOT NULL,
  `Validada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de la taula `Estudiant`
--

CREATE TABLE `Estudiant` (
  `DNI` varchar(9) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Cognoms` varchar(60) NOT NULL,
  `Direccio` varchar(60) NOT NULL,
  `CP` int(5) NOT NULL,
  `Poblacio` varchar(30) NOT NULL,
  `Sexe` varchar(10) NOT NULL,
  `DataNaixement` date NOT NULL,
  `PaisNaixement` varchar(40) NOT NULL,
  `Nacionalitat` varchar(30) NOT NULL,
  `LocalitatNaixement` varchar(30) NOT NULL,
  `ProvinciaNaixement` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefon` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de la taula `ProgramaC`
--

CREATE TABLE `ProgramaC` (
  `DNI` varchar(9) NOT NULL,
  `Torn` varchar(60) NOT NULL,
  `Validada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de la taula `ProgramaJAnglés`
--

CREATE TABLE `ProgramaJAnglés` (
  `DNI` varchar(9) NOT NULL,
  `Torn` varchar(60) NOT NULL,
  `Validada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de la taula `usuaris`
--

CREATE TABLE `usuaris` (
  `id` int(11) NOT NULL,
  `Nom` varchar(15) NOT NULL,
  `usuari` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexos per taules bolcades
--

--
-- Index de la taula `CicleIA`
--
ALTER TABLE `CicleIA`
  ADD PRIMARY KEY (`DNI`);

--
-- Index de la taula `CilceIIB`
--
ALTER TABLE `CilceIIB`
  ADD PRIMARY KEY (`DNI`);

--
-- Index de la taula `CursosPolivalents`
--
ALTER TABLE `CursosPolivalents`
  ADD PRIMARY KEY (`DNI`);

--
-- Index de la taula `Estudiant`
--
ALTER TABLE `Estudiant`
  ADD PRIMARY KEY (`DNI`),
  ADD UNIQUE KEY `DNI` (`DNI`);

--
-- Index de la taula `ProgramaC`
--
ALTER TABLE `ProgramaC`
  ADD PRIMARY KEY (`DNI`);

--
-- Index de la taula `ProgramaJAnglés`
--
ALTER TABLE `ProgramaJAnglés`
  ADD PRIMARY KEY (`DNI`);

--
-- Index de la taula `usuaris`
--
ALTER TABLE `usuaris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuari` (`usuari`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `usuaris`
--
ALTER TABLE `usuaris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
