-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 21-Fev-2017 às 12:01
-- Versão do servidor: 5.5.52-MariaDB-1ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `12c_classificados`
--
CREATE DATABASE IF NOT EXISTS `12c_classificados` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `12c_classificados`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adds`
--

CREATE TABLE IF NOT EXISTS `adds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `average_rating` varchar(50) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000',
  `modified` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000',
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `type` enum('Venda','Compra','Troca') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `icon` varchar(80) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `selectable` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `adds_id` int(11) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000',
  `modified` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rates`
--

CREATE TABLE IF NOT EXISTS `rates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rating` int(11) NOT NULL,
  `rated` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `profile_picture` varchar(80) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `average_rating` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `status` enum('Ativado','Inativo','Bloqueado') NOT NULL DEFAULT 'Inativo',
  `hash` varchar(255) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
