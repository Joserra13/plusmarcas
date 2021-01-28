-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 11:41 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plusmarcas`
--

-- --------------------------------------------------------

--
-- Table structure for table `100mvallash`
--

CREATE TABLE `100mvallash` (
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `marca` text COLLATE utf8_spanish_ci NOT NULL,
  `lugar` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `100mvallash`
--

INSERT INTO `100mvallash` (`nombre`, `pais`, `marca`, `lugar`) VALUES
('Jon Ander Perez', 'España', '12,8', 'Getxo'),
('Julen Castañeda', 'España', '12,88', 'San Sebastián'),
('Ivan Crespo', 'España', '12,9', 'El Sardinero'),
('Adrían Gonzalez', 'Moldavia', '12,98', 'Alto de maliaño'),
('David Barral', 'España', '12,99', 'Cádiz'),
('Jose Ramón Hoz Torre', 'España', '16', 'Muriedas');

-- --------------------------------------------------------

--
-- Table structure for table `100mvallasw`
--

CREATE TABLE `100mvallasw` (
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `marca` text COLLATE utf8_spanish_ci NOT NULL,
  `lugar` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `100mvallasw`
--

INSERT INTO `100mvallasw` (`nombre`, `pais`, `marca`, `lugar`) VALUES
('maria Jose Torre', 'Angola', '12,10', 'Luanda'),
('Alex Morgan', 'EEUU', '12,22', 'Tucson'),
('Rebeca Herrera', 'España', '12,35', 'Albacete'),
('Lindsey Horan', 'UK', '12,36', 'Londres'),
('Bettine Jahn', 'Alemania', '12,42', 'Berlin');

-- --------------------------------------------------------

--
-- Table structure for table `200mlisosh`
--

CREATE TABLE `200mlisosh` (
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `marca` text COLLATE utf8_spanish_ci NOT NULL,
  `lugar` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `200mlisosh`
--

INSERT INTO `200mlisosh` (`nombre`, `pais`, `marca`, `lugar`) VALUES
('David Gutierrez', 'España', '19,19', 'Muriedas'),
('Claudio Fernandez', 'España', '19,25', 'Barcelona'),
('Francisco López', 'Suecia', '19,30', 'Madrid'),
('Adrián Bocal', 'Rusia', '19,33', 'Moscú'),
('José Ramón Hoz', 'España', '19,40', 'Santander');

-- --------------------------------------------------------

--
-- Table structure for table `200mlisosw`
--

CREATE TABLE `200mlisosw` (
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `marca` text COLLATE utf8_spanish_ci NOT NULL,
  `lugar` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `200mlisosw`
--

INSERT INTO `200mlisosw` (`nombre`, `pais`, `marca`, `lugar`) VALUES
('Clara Hoz', 'Rumania', '22,00', 'Muriedas'),
('Noelia Benito', 'España', '22,68', 'Madrid'),
('Tania Rodriguez', 'España', '23.32', 'Malaga'),
('Sandra Gutierrez', 'Rusia', '24,35', 'Madrid'),
('Andrea De Juana', 'EEUU', '25,45', 'New York');

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `Lugar` text COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` text COLLATE utf8_spanish_ci NOT NULL,
  `Competicion` text COLLATE utf8_spanish_ci NOT NULL,
  `Sexo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`Lugar`, `Fecha`, `Competicion`, `Sexo`) VALUES
('Santander', '2019-03-31', 'jabalina', 'Masculino'),
('Los Ángeles', '2019-07-12', 'triplesalto', 'Femenino');

-- --------------------------------------------------------

--
-- Table structure for table `ficha`
--

CREATE TABLE `ficha` (
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Pais` text COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` text COLLATE utf8_spanish_ci NOT NULL,
  `Altura` text COLLATE utf8_spanish_ci NOT NULL,
  `Peso` text COLLATE utf8_spanish_ci NOT NULL,
  `Numero` text COLLATE utf8_spanish_ci NOT NULL,
  `Hobby` text COLLATE utf8_spanish_ci NOT NULL,
  `Comida` text COLLATE utf8_spanish_ci NOT NULL,
  `Color` text COLLATE utf8_spanish_ci NOT NULL,
  `Foto` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `ficha`
--

INSERT INTO `ficha` (`Nombre`, `Pais`, `Fecha`, `Altura`, `Peso`, `Numero`, `Hobby`, `Comida`, `Color`, `Foto`) VALUES
('Jose Ramón Hoz Torre', 'España', '08-06-1997', '1,75', '70', '13', 'Salir con los amigos', 'Pasta', 'Azul', 'perfilJoserra.jpg'),
('Cara Delevigne', 'Reino Unido', '12-08-1992', '1,73', '60', '22', 'Dormir', 'Filete con queso', 'Green', '');

-- --------------------------------------------------------

--
-- Table structure for table `jabalinah`
--

CREATE TABLE `jabalinah` (
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `marca` text COLLATE utf8_spanish_ci NOT NULL,
  `lugar` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `jabalinah`
--

INSERT INTO `jabalinah` (`nombre`, `pais`, `marca`, `lugar`) VALUES
('Luis Lastra', 'Francia', '97,52', 'Paris'),
('Alberto Gandara', 'España', '96,75', 'Santander'),
('Alvaro Bustamante', 'Alemania', '95,38', 'Muriedas'),
('Pedro Fernandez', 'Marruecos', '93,45', 'Madrid'),
('Manu Sanchez', 'España', '91,87', 'Astillero');

-- --------------------------------------------------------

--
-- Table structure for table `jabalinaw`
--

CREATE TABLE `jabalinaw` (
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `marca` text COLLATE utf8_spanish_ci NOT NULL,
  `lugar` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `jabalinaw`
--

INSERT INTO `jabalinaw` (`nombre`, `pais`, `marca`, `lugar`) VALUES
('Tania Lombera', 'España', '73,00', 'Guriezo'),
('Alba Merrickan', 'EEUU', '70,32', 'Los Angeles'),
('Alba Garcia', 'España', '69,82', 'Grao'),
('Agueda Fernandez', 'China', '67,49', 'orlando'),
('Natalia Lopez', 'España', '63,48', 'Reinosa');

-- --------------------------------------------------------

--
-- Table structure for table `pertigah`
--

CREATE TABLE `pertigah` (
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `marca` text COLLATE utf8_spanish_ci NOT NULL,
  `lugar` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `pertigah`
--

INSERT INTO `pertigah` (`nombre`, `pais`, `marca`, `lugar`) VALUES
('Javier Velasco', 'Moldavia', '6,09', 'Munich'),
('Francisco Alamo', 'España', '6,07', 'Valencia'),
('Mikel Santiago', 'UK', '6,06', 'Madrid'),
('Rodrigo Cano', 'España', '6,01', 'La Albericia'),
('Enrique Salvador', 'Argelia', '6,00', 'Kyoto');

-- --------------------------------------------------------

--
-- Table structure for table `pertigaw`
--

CREATE TABLE `pertigaw` (
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `marca` text COLLATE utf8_spanish_ci NOT NULL,
  `lugar` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `pertigaw`
--

INSERT INTO `pertigaw` (`nombre`, `pais`, `marca`, `lugar`) VALUES
('Carmen de la Hera', 'España', '5,06', 'Santander'),
('Sara García', 'España', '4,92', 'Santander'),
('Belen San Miguel', 'España', '4,91', 'Oviedo'),
('Laura del Valle', 'España', '4,88', 'Barcelona'),
('Cristina Castanedo', 'España', '4,85', 'Londres');

-- --------------------------------------------------------

--
-- Table structure for table `solevent`
--

CREATE TABLE `solevent` (
  `Lugar` text COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` text COLLATE utf8_spanish_ci NOT NULL,
  `Competicion` text COLLATE utf8_spanish_ci NOT NULL,
  `Sexo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solficha`
--

CREATE TABLE `solficha` (
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Pais` text COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` text COLLATE utf8_spanish_ci NOT NULL,
  `Altura` text COLLATE utf8_spanish_ci NOT NULL,
  `Peso` text COLLATE utf8_spanish_ci NOT NULL,
  `Numero` text COLLATE utf8_spanish_ci NOT NULL,
  `Hobby` text COLLATE utf8_spanish_ci NOT NULL,
  `Comida` text COLLATE utf8_spanish_ci NOT NULL,
  `Color` text COLLATE utf8_spanish_ci NOT NULL,
  `Foto` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solicitudes`
--

CREATE TABLE `solicitudes` (
  `Email` text COLLATE utf8_spanish_ci,
  `Nombre` text COLLATE utf8_spanish_ci,
  `Sexo` text COLLATE utf8_spanish_ci NOT NULL,
  `Pais` text COLLATE utf8_spanish_ci NOT NULL,
  `Competicion` text COLLATE utf8_spanish_ci NOT NULL,
  `Marca` text COLLATE utf8_spanish_ci NOT NULL,
  `Lugar` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `triplesaltoh`
--

CREATE TABLE `triplesaltoh` (
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `marca` text COLLATE utf8_spanish_ci NOT NULL,
  `lugar` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `triplesaltoh`
--

INSERT INTO `triplesaltoh` (`nombre`, `pais`, `marca`, `lugar`) VALUES
('Jonathan Edwards', 'UK', '18,29', 'Gotemburgo'),
('Cristian Taylor', 'EEUU', '18,21', 'Pekin'),
('Kenny Harrison', 'EEUU', '18,09', 'Atlanta'),
('Pedro Pichardo', 'Cuba', '18,08', 'Doha'),
('Ted Mosby', 'EEUU', '17,97', 'Nueva York');

-- --------------------------------------------------------

--
-- Table structure for table `triplesaltow`
--

CREATE TABLE `triplesaltow` (
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `marca` text COLLATE utf8_spanish_ci NOT NULL,
  `lugar` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `triplesaltow`
--

INSERT INTO `triplesaltow` (`nombre`, `pais`, `marca`, `lugar`) VALUES
('Taylor Swift', 'EEUU', '15,50', 'Tennessee'),
('Miley Cyrus', 'EEUU', '15,39', 'LOs Angeles'),
('Rihanna', 'Barbados', '15,31', 'Atlanta'),
('Selena Gomez', 'EEUU', '15,25', 'Texas'),
('Demi Lovato', 'EEUU', '15,20', 'Albuquerque');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
