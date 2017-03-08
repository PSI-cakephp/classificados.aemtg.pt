-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2017 at 09:51 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `12c_classificados`
--
CREATE DATABASE IF NOT EXISTS `12c_classificados` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `12c_classificados`;

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE `adds` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `average_rating` varchar(50) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000',
  `modified` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000',
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `type` enum('Venda','Compra','Troca') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `icon` varchar(250) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgth` int(11) DEFAULT NULL,
  `rght` int(11) NOT NULL,
  `selectable` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`, `parent_id`, `lft`, `rgth`, `rght`, `selectable`) VALUES
(14, 'Automoveis', 'categories_icon/img-1.png', NULL, 1, 4, 4, 0),
(15, 'Motores', NULL, 14, 2, 3, 3, 1),
(17, 'telemoveis e tablets', 'categories_icon/img-3.png', NULL, 5, 10, 10, 0),
(23, 'tablets', NULL, 17, 6, 7, 7, 1),
(24, 'telemoveis', NULL, 17, 8, 9, 9, 1),
(25, 'tecnologia', 'categories_icon/img-2.png', NULL, 11, 16, 16, 0),
(26, 'computadores', NULL, 25, 12, 13, 13, 1),
(27, 'eletronica', NULL, 25, 14, 15, 15, 1);


-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `adds_id` int(11) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000',
  `modified` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `rated` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `profile_picture` varchar(80) DEFAULT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `average_rating` varchar(50) DEFAULT NULL,
  `user_type` enum('user','admin') NOT NULL DEFAULT 'user',
  `status` enum('Ativado','Inativo','Bloqueado') NOT NULL DEFAULT 'Inativo',
  `hash` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adds`
--
ALTER TABLE `adds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `mobile_number` (`mobile_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adds`
--
ALTER TABLE `adds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
