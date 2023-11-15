-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2023 a las 22:56:10
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grupoinkillay`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_empresa`
--

CREATE TABLE tb_empresa (
  RazonSocial varchar(250) NOT NULL,
  DocumentoFiscal char(11) PRIMARY KEY NOT NULL,
  Ciudad varchar(250) NOT NULL,
  Direccion varchar(250) NOT NULL,
  Telefono varchar(30) DEFAULT NULL,
  CorreoElectronico varchar(50) NOT NULL,
  Clave varchar(50) NOT NULL,
  Estado char(1) NOT NULL
) 

--
-- Volcado de datos para la tabla `tb_empresa`
--

INSERT INTO tb_empresa (RazonSocial, DocumentoFiscal, Ciudad, Direccion, Telefono, CorreoElectronico, Clave, Estado) VALUES
('DAREMA TECHNOLOGY S.A.C.', '20611362871', 'Huacho', 'Jr. Los Olivos #256', '2321177', 'darema@gmail.com', '147', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario`
--

CREATE TABLE tb_usuario (
  ID integer PRIMARY KEY IDENTITY(1,1) NOT NULL,
  ApellidoPaterno varchar(150) NOT NULL,
  ApellidoMaterno varchar(150) NOT NULL,
 Nombres varchar(100) NOT NULL,
  Cargo varchar(250) NOT NULL,
  CorreoElectronico varchar(50) NOT NULL,
  Telefono varchar(50) DEFAULT NULL,
  NumeroCelular char(9) NOT NULL,
  FechaRegistro datetime NOT NULL,
  FechaInicio datetime NOT NULL,
  FechaFinal datetime NOT NULL,
  ImporteContrato decimal(18,6) NOT NULL,
  Usuario varchar(50) NOT NULL,
  Password varchar(50) NOT NULL,
  Foto varchar(255) NOT NULL,
  Estado char(1) NOT NULL,
  Token varchar(255) DEFAULT NULL
) 

--
-- Volcado de datos para la tabla `tb_usuario`
--

INSERT INTO tb_usuario (ApellidoPaterno, ApellidoMaterno, Nombres, Cargo, CorreoElectronico, Telefono, NumeroCelular, FechaRegistro, FechaInicio, FechaFinal, ImporteContrato, Usuario, Password, Foto, Estado, Token) VALUES
('Bonatti', 'Pajuelo', 'Diego', 'Usuario', 'diego@gmail.com', '2321177', '987456321', '2023-09-10 06:45:31', '2023-10-10 06:45:31', '2023-12-11 06:45:31', 1500.000000, 'diego', '123', 'avatar.png', '1', 'c572a971dab675389548-d1d04ad59770a926db55-dcdb878287d4dc8fa3dc-89e92102ebcdf2d20b3d'),
('Jara', 'Salazar', 'Efrain', 'Usuario', 'efrain@gmail.com', NULL, '951000741', '2023-10-24 10:37:22', '2023-10-24 10:37:00', '2023-11-11 10:37:00', 1500.000000, 'efrain', '123', 'avatar1.jpg', '1', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario_empresa`
--

CREATE TABLE tb_usuario_empresa (
  ID integer PRIMARY KEY IDENTITY(1,1) NOT NULL,
  Usuario integer NOT NULL,
  Empresa char(11) NOT NULL,
  FOREIGN KEY (Usuario) REFERENCES tb_usuario(ID),
  FOREIGN KEY (Empresa) REFERENCES tb_empresa(DocumentoFiscal)
) 

--
-- Volcado de datos para la tabla `tb_usuario_empresa`
--

INSERT INTO tb_usuario_empresa(Usuario, Empresa) VALUES
(1, '20611362871'),
(2, '20611362871');

