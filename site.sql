-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2016 at 07:31 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL,
  `nomeProduto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`idProduto`, `nomeProduto`) VALUES
(1, 'banana');

-- --------------------------------------------------------

--
-- Table structure for table `Usuarios`
--

CREATE TABLE `Usuarios` (
  `nomec` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nomeu` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Usuarios`
--

INSERT INTO `Usuarios` (`nomec`, `nomeu`, `email`, `senha`, `foto`) VALUES
('Giovani', 'gio', 'exemplo', '3da54155', ''),
('Giovani', 'gio', 'exemplo', '3da54155', ''),
('Giovani2', 'Gio2', 'exemplo', '3da54155', ''),
('Giovani Castilho', 'giovanirose', 'gigiocastilho@hotmail.com', '7c4a8d09', ''),
('ggg', 'ggg', 'ggg', '07dcd371', ''),
('Otavio Villela', 'otavio', 'otavio@gmail.com', '7110eda4', ''),
('Giovani Castilho', 'gio3', 'exemplo', '7110eda4', ''),
('Giovani Castilho', 'gio4', 'exemplo', '7110eda4', ''),
('Giovani3', 'gioo3', 'exemplo', '7110eda4', ''),
('jjj', 'jjj', 'jjj', 'jjj', ''),
('hhh', 'hhh', 'hhh', 'hhh', ''),
('jjj', 'jjj', 'jjj', 'jjj', ''),
('kkk', 'kkk', 'kkk', 'kkk', ''),
('Giovani10', 'gio10', 'exemplo', '1234', ''),
('Giovani11', 'gio11', 'exemplo', '1234', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
