-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 02-Abr-2014 às 15:26
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisos`
--

CREATE TABLE IF NOT EXISTS `avisos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` text NOT NULL,
  `hora` int(11) NOT NULL,
  `min` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `Titulo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `avisos`
--

INSERT INTO `avisos` (`id`, `descricao`, `hora`, `min`, `dia`, `mes`, `ano`, `Titulo`) VALUES
(1, 'I really don''t understand how people play Diablo. I spent just about seven hours in Act V on the first day and I was only 2/3 through it. Does no one stop in town to talk to every single character with a white star above their head? Am I the only one that spends time browsing/using the artisan shops after every return trip to town? ', 6, 30, 15, 11, 2014, 'Reunião mySQL muito legal'),
(2, 'I suppose that''s true. I didn''t think about what difficulty people played on. Even if the Artisans are useless I still like to stop at the jeweler and combine some gems every few hours, which takes some time. Hell, there are even times when I have to rearrange my stash like it has animal crossing feng shui. But that''s clearly getting into territory that doesn''t include the normal Diablo player.', 11, 15, 11, 3, 2014, 'Reuniao passada que passou :('),
(3, 'essa eh de hojemaluco!', 16, 23, 2, 4, 2014, 'HOJE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
