-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 18/06/2022 às 16:52
-- Versão do servidor: 10.5.15-MariaDB-cll-lve
-- Versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u570383782_login`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `anime`
--

CREATE TABLE `anime` (
  `nome` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `anime`
--

INSERT INTO `anime` (`nome`) VALUES
('Bleach');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pudim`
--

CREATE TABLE `pudim` (
  `cod_pudim` int(11) NOT NULL,
  `sabor` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtd` int(11) NOT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `pudim`
--

INSERT INTO `pudim` (`cod_pudim`, `sabor`, `descricao`, `qtd`, `valor`) VALUES
(1, 'Chocolate', 'Pudim sabor cholate 500 gramas', 50, 4.5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contato` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`, `nome`, `email`, `data_cadastro`) VALUES
(1, 'brunno', 'dbf76d3d471d5e91dccb05ad7e2f6307', 'BRUNNO HENRIQUE VILAS BOAS', 'brunnohenrique50@gmail.com', '2022-06-10'),
(2, 'jose50', 'dbf76d3d471d5e91dccb05ad7e2f6307', 'jose silva santos', 'jose50@gmail.com', '2022-06-10'),
(3, 'lucas123', 'e10adc3949ba59abbe56e057f20f883e', 'lucas silva santos', 'brunnohenrique50@gmail.com', '2022-06-10'),
(4, 'adm', 'dbf76d3d471d5e91dccb05ad7e2f6307', 'BRUNNO HENRIQUE VILAS BOAS', 'brunnohenrique50@gmail.com', '2022-06-11'),
(5, 'mat23', '4e13878a9ab922abb7947436a5c4540f', 'MATHEUS SANTOS', 'mat13@gmail', '2022-06-11'),
(6, 'Leonardomaxi', 'e7d80ffeefa212b7c5c55700e4f7193e', 'Leonardo', 'leonardoasus5@gmail.com', '2022-06-13'),
(7, 'Shalltear', '7cfca0b1ad0451ad852e52a28a35b221', 'Joao MATOS', 'joaooom900@gmail.com', '2022-06-15');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario_vip_ti`
--

CREATE TABLE `usuario_vip_ti` (
  `ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `login` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senha` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuario_vip_ti`
--

INSERT INTO `usuario_vip_ti` (`ID`, `login`, `senha`) VALUES
(0000000001, 'login', 'e8d95a51f3af4a3b134bf6bb680a213a'),
(0000000002, 'adm', 'dbf76d3d471d5e91dccb05ad7e2f6307');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pudim`
--
ALTER TABLE `pudim`
  ADD PRIMARY KEY (`cod_pudim`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Índices de tabela `usuario_vip_ti`
--
ALTER TABLE `usuario_vip_ti`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pudim`
--
ALTER TABLE `pudim`
  MODIFY `cod_pudim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuario_vip_ti`
--
ALTER TABLE `usuario_vip_ti`
  MODIFY `ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
