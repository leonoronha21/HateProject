-- phpMyAdmin SQL Dump
-- version 4.3.7
-- http://www.phpmyadmin.net
--
-- Host: mysql01-farm8.kinghost.net
-- Tempo de geração: 23/05/2021 às 21:17
-- Versão do servidor: 5.5.62-log
-- Versão do PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `cassolli18`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ong`
--

CREATE TABLE IF NOT EXISTS `ong` (
  `id` int(255) NOT NULL,
  `a_id` int(255) NOT NULL,
  `nome_fantasia` varchar(9999) NOT NULL,
  `nome_social` varchar(9999) NOT NULL,
  `registro_cartorio` varchar(9999) NOT NULL,
  `endereco` varchar(9999) NOT NULL,
  `numero_endereco` int(255) NOT NULL,
  `bairro` varchar(999) NOT NULL,
  `cep` int(255) NOT NULL,
  `estado` varchar(999) NOT NULL,
  `email` varchar(999) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `ong`
--

INSERT INTO `ong` (`id`, `a_id`, `nome_fantasia`, `nome_social`, `registro_cartorio`, `endereco`, `numero_endereco`, `bairro`, `cep`, `estado`, `email`, `status`, `data`) VALUES
(1, 1, 'nome', 'nome', 'registro', 'rua', 121, 'bairro', 12121212, 'SP', 'email2@email.com.br', '1', '2021-05-23 23:07:01'),
(2, 15, '', '', '', '', 0, '', 0, '', '', '0', '2021-05-23 20:26:50'),
(3, 0, '', '', '', '', 0, '', 0, '', '', '0', '2021-05-23 20:25:12'),
(5, 1, 'tertrt', 'nomesocial', 'registro_cadastro', 'endereco', 123, 'bairo', 342434242, 'RS', 'email@email.com.br', '1', '0000-00-00 00:00:00'),
(6, 1, 'tertrt', 'nomesocial', 'registro_cadastro', 'endereco', 123, 'bairo', 342434242, 'RS', 'email@email.com.br', '1', '0000-00-00 00:00:00'),
(7, 1, 'nomefantasia', 'nomefantasia', 'wqewe', 'rua', 2323, 'bairo', 34234324, 'RS', 'email@emai.com.br', '1', '0000-00-00 00:00:00'),
(8, 1, 'nomefantasia', 'nomefantasia', 'wqewe', 'rua', 2323, 'bairo', 34234324, 'RS', 'email@emai.com.br', '1', '0000-00-00 00:00:00'),
(9, 1, 'nomefantasia', 'nomefantasia', 'wqewe', 'rua', 2323, 'bairo', 34234324, 'RS', 'email@emai.com.br', '1', '0000-00-00 00:00:00'),
(10, 1, 'nomefantasia', 'nomefantasia', 'wqewe', 'rua', 2323, 'bairo', 34234324, 'RS', 'email@emai.com.br', '1', '0000-00-00 00:00:00'),
(11, 1, 'nomefantasia', 'nomefantasia', 'wqewe', 'rua', 2323, 'bairo', 34234324, 'RS', 'email@emai.com.br', '1', '0000-00-00 00:00:00'),
(12, 1, 'nomefantasia', 'nomefantasia', 'wqewe', 'rua', 2323, 'bairo', 34234324, 'RS', 'email@emai.com.br', '1', '0000-00-00 00:00:00'),
(13, 1, 'nomefantasia', 'nomefantasia', 'wqewe', 'rua', 2323, 'bairo', 34234324, 'RS', 'email@emai.com.br', '1', '0000-00-00 00:00:00'),
(14, 1, 'nomefantasia', 'nomefantasia', 'wqewe', 'rua', 2323, 'bairo', 34234324, 'RS', 'email@emai.com.br', '1', '0000-00-00 00:00:00'),
(15, 1, 'nomefantasia', 'nomefantasia', 'wqewe', 'rua', 2323, 'bairo', 34234324, 'RS', 'email@emai.com.br', '1', '0000-00-00 00:00:00'),
(16, 1, 'nomefantasia', 'nomefantasia', 'wqewe', 'rua', 2323, 'bairo', 34234324, 'RS', 'email@emai.com.br', '1', '0000-00-00 00:00:00'),
(17, 1, 'nomefantasia', 'nomefantasia', 'wqewe', 'rua', 2323, 'bairo', 34234324, 'RS', 'email@emai.com.br', '1', '0000-00-00 00:00:00'),
(18, 1, 'nomefantasia', 'nomefantasia', 'wqewe', 'rua', 2323, 'bairo', 34234324, 'RS', 'email@emai.com.br', '1', '0000-00-00 00:00:00'),
(19, 1, 'nomefantasia', 'nomefantasia', 'wqewe', 'rua', 2323, 'bairo', 34234324, 'RS', 'email@emai.com.br', '1', '0000-00-00 00:00:00'),
(20, 1, 'ertretr', 'etert', 'ertret', 'ertret', 0, 'retret', 0, 'ertert', 'ertert@dsds.com.br', '1', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` int(255) NOT NULL,
  `o_id` int(255) NOT NULL,
  `pe_id` int(255) NOT NULL,
  `tipo_pessoa` enum('adotante','ong','admin','parceiro') NOT NULL,
  `nome` varchar(9999) NOT NULL,
  `endereco` varchar(9999) NOT NULL,
  `rg` int(255) NOT NULL,
  `cnpj` int(255) NOT NULL,
  `cpf` int(255) NOT NULL,
  `data_nascimento` date NOT NULL,
  `email` varchar(9999) NOT NULL,
  `senha` varchar(9999) NOT NULL,
  `telefone` int(255) NOT NULL,
  `status` enum('A','I') NOT NULL DEFAULT 'I',
  `data` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `o_id`, `pe_id`, `tipo_pessoa`, `nome`, `endereco`, `rg`, `cnpj`, `cpf`, `data_nascimento`, `email`, `senha`, `telefone`, `status`, `data`) VALUES
(1, 1, 1, 'admin', 'admin', 'admin', 0, 0, 0, '0000-00-00', 'admin@admin.com.br', 'admin', 0, 'A', '0000-00-00');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `ong`
--
ALTER TABLE `ong`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD KEY `id_2` (`id`);

--
-- Índices de tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `ong`
--
ALTER TABLE `ong`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
