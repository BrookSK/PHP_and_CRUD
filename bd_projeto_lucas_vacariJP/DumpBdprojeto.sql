-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 10-Nov-2021 às 00:36
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_projeto`
--
CREATE DATABASE IF NOT EXISTS `bd_projeto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_projeto`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_carro`
--

DROP TABLE IF EXISTS `tb_carro`;
CREATE TABLE IF NOT EXISTS `tb_carro` (
  `id_carro` int(11) NOT NULL AUTO_INCREMENT,
  `nome_carro` varchar(45) NOT NULL,
  `placa_carro` varchar(7) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  PRIMARY KEY (`id_carro`),
  KEY `cod_cliente` (`cod_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_carro`
--

INSERT INTO `tb_carro` (`id_carro`, `nome_carro`, `placa_carro`, `cod_cliente`) VALUES
(1, 'Corsa', '456gtyh', 1),
(2, 'Ferrari', '456ggek', 2),
(3, 'Maverick', '754ggek', 3),
(4, 'Uno', '754ggyy', 4),
(5, 'Mazda', '754ggii', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(45) NOT NULL,
  `rg_cliente` varchar(13) NOT NULL,
  `cpf_cliente` varchar(13) NOT NULL,
  `email_cliente` varchar(60) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `cpf_cliente` (`cpf_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`id_cliente`, `nome_cliente`, `rg_cliente`, `cpf_cliente`, `email_cliente`) VALUES
(1, 'Joao', '213213', '21321323', 'joao@gmail.com'),
(2, 'Ana', '6435', '213254354', 'ana@gmail.com'),
(3, 'Julia', '345324', '54634', 'julia@gmail.com'),
(4, 'Luiz', '3432', '435234', 'luiz@gmail.com'),
(5, 'Fernando', '3434545', '433443', 'fernando@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
