-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 08-Abr-2014 às 17:32
-- Versão do servidor: 5.5.32
-- versão do PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `avisos`
--
CREATE DATABASE IF NOT EXISTS `avisos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `avisos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisos`
--

CREATE TABLE IF NOT EXISTS `avisos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `Titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `avisos`
--

INSERT INTO `avisos` (`id`, `descricao`, `Titulo`, `data`) VALUES
(18, 'DescriÃ§Ã£o', 'ReuniÃ£o 1', '2014-01-01 07:35:00'),
(19, 'DescriÃ§Ã£o6555', 'ReuniÃ£o 2', '2014-02-08 09:20:00'),
(20, 'Daasdsadsa', 'ReuniÃ£o outra', '2014-07-14 13:00:00'),
(21, 'DescriÃ§Ã£o33', 'Teste', '2014-05-14 15:46:00'),
(22, 'DescriÃ§Ã£o', 'Uuuuuuuuuuu', '2014-05-14 03:06:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
