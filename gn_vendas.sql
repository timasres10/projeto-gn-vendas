-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 14/12/2020 às 02h22min
-- Versão do Servidor: 5.5.16
-- Versão do PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `gn_vendas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `id_compra` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quant_produto` int(11) NOT NULL,
  `nome_comprador` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf_comprador` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_comprador` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_compra` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_compra`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `compras`
--

INSERT INTO `compras` (`id_compra`, `id_produto`, `quant_produto`, `nome_comprador`, `cpf_comprador`, `tel_comprador`, `valor_compra`) VALUES
(1, 8, 20, 'Leandro Ferreira Carneiro', '125752', '980135477', '20'),
(2, 9, 40, 'Leandro Ferreira Carneiro', '2147483647', '980135477', '40'),
(3, 11, 1, 'Alesssandro', '065.495.536', '984440481', '15'),
(4, 12, 20, 'Leandro Ferreira Carneiro', '12575247632', '980135477', '900');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome_prod` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estoque` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome_prod`, `codigo`, `valor`, `estoque`) VALUES
(5, 'Arroz', '2222222222222', '0', '150'),
(6, 'Feijão', '3333333333333', '45', '280'),
(7, 'Maionese ', '4444444444444', '14,80', '300'),
(8, 'cerveja', '5555555555555', '1,00', '300'),
(9, 'café bom demais', '6666666666666', '1,000', '500,000'),
(11, 'leite', '1515151515151', '15,00', '240'),
(12, 'teste', '1234567891111', '45', '5'),
(13, 'cerveja', '1515151515151', '15,00', '350');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
