-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Mar-2023 às 00:21
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

create database aula09;
use aula09;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aula08`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_acessoadm`
--

CREATE TABLE `tbl_acessoadm` (
  `id` int(11) NOT NULL,
  `usuario_adm` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `senha_adm` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_situacao` int(11) DEFAULT NULL,
  `id_adm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_acessoadm`
--

INSERT INTO `tbl_acessoadm` (`id`, `usuario_adm`, `senha_adm`, `id_situacao`, `id_adm`) VALUES
(1, 'teste_adm@teste.com', '1234', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_acessos`
--

CREATE TABLE `tbl_acessos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `usuario` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `senha` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_situacao` int(11) DEFAULT NULL,
  `hash` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_categoria`
--

CREATE TABLE `tbl_categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `slug` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `visibilidade` char(1) COLLATE utf8mb4_bin NOT NULL,
  `id_situacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_categoria`
--

INSERT INTO `tbl_categoria` (`id`, `nome`, `img`, `slug`, `visibilidade`, `id_situacao`) VALUES
(2, 'Açougue', '', '', '', 1),
(7, 'Bebida', '', '1', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_clientes`
--

CREATE TABLE `tbl_clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `sobrenome` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `id_genero` int(11) DEFAULT NULL,
  `newsletter` char(1) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_situacao` int(11) NOT NULL,
  `hash` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`id_cliente`, `nome`, `sobrenome`, `data_nasc`, `id_genero`, `newsletter`, `id_situacao`, `hash`) VALUES
(1, 'pedro', 'dsds', '0000-00-00', 1, '1', 1, '37f1a7d311346d2054829735d1aaea7beb3b5526'),
(2, '', '', '0000-00-00', 1, '0', 1, '644efb4781833a89dcc165703b949ffad4c532cf'),
(3, 'pedro', 'dsds', '2000-12-18', 13, '1', 1, '37f1a7d311346d2054829735d1aaea7beb3b5526'),
(4, 'Pedro', 'Henrique', '2000-12-18', 13, '1', 1, '0c7f03e0376cf3b462f97bd857fb871b3e082ceb'),
(5, 'Pedro', 'Figueiredo', '2000-12-18', 13, '1', 1, '03abc430bfd326e79505019fc8c7f97c9d140a0c'),
(6, 'Henrique', 'ewew', '2112-02-11', 1, '1', 1, '7c93661798bcdc9d5e58cd23e2c30a612f01ac31'),
(7, 'pedro', 'dsdsdsdsds', '1222-12-12', 13, '1', 1, '75631d53af543a64b010a71fb7cd101aa6bd564d'),
(8, 'pedro', 'Henrique', '0000-00-00', 13, '1', 1, '02862f3a5b61b773414e2fb1fc2e024a939a4543'),
(9, 'Pedro', 'Henrique', '2000-12-18', 13, '1', 1, '9d8944d1891687aa4745abd13cf11b0d260059ae');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_contatos`
--

CREATE TABLE `tbl_contatos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `id_situacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_contatos_emails`
--

CREATE TABLE `tbl_contatos_emails` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_situacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_docs`
--

CREATE TABLE `tbl_docs` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_tipo_documento` int(11) DEFAULT NULL,
  `documento` char(14) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_situacao` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_genero`
--

CREATE TABLE `tbl_genero` (
  `id` int(11) NOT NULL,
  `genero` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_genero`
--

INSERT INTO `tbl_genero` (`id`, `genero`) VALUES
(1, 'Feminino'),
(3, 'Feminino'),
(13, 'Masculino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_situacao`
--

CREATE TABLE `tbl_situacao` (
  `id` int(11) NOT NULL,
  `situacao` varchar(20) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_situacao`
--

INSERT INTO `tbl_situacao` (`id`, `situacao`) VALUES
(7, 'Ativo'),
(8, 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_tipo_docs`
--

CREATE TABLE `tbl_tipo_docs` (
  `id` int(11) NOT NULL,
  `tipo_doc` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_tipo_docs`
--

INSERT INTO `tbl_tipo_docs` (`id`, `tipo_doc`) VALUES
(1, ''),
(2, ''),
(3, 'rg'),
(4, ''),
(5, ''),
(6, ''),
(7, 'RG1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_acessoadm`
--
ALTER TABLE `tbl_acessoadm`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_acessos`
--
ALTER TABLE `tbl_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `tbl_contatos`
--
ALTER TABLE `tbl_contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_contatos_emails`
--
ALTER TABLE `tbl_contatos_emails`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_docs`
--
ALTER TABLE `tbl_docs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_genero`
--
ALTER TABLE `tbl_genero`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_situacao`
--
ALTER TABLE `tbl_situacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_tipo_docs`
--
ALTER TABLE `tbl_tipo_docs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_acessoadm`
--
ALTER TABLE `tbl_acessoadm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbl_acessos`
--
ALTER TABLE `tbl_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tbl_contatos`
--
ALTER TABLE `tbl_contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_contatos_emails`
--
ALTER TABLE `tbl_contatos_emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_docs`
--
ALTER TABLE `tbl_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_genero`
--
ALTER TABLE `tbl_genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tbl_situacao`
--
ALTER TABLE `tbl_situacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbl_tipo_docs`
--
ALTER TABLE `tbl_tipo_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
