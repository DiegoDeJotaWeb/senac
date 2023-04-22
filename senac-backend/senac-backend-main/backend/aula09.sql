-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Mar-2023 às 01:31
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aula09`
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
  `hash_usuario` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `usuario` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `senha` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_situacao` int(11) DEFAULT NULL,
  `hash` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_acessos`
--

INSERT INTO `tbl_acessos` (`id`, `hash_usuario`, `usuario`, `senha`, `id_situacao`, `hash`) VALUES
(1, '16', 'diegorodriguesdev@gmail.com', '$2b$06$3a4c8075d001ac0759410ugezgYljMGd/NKiWsT.bZm.oCq84Daai', 1, NULL),
(2, '1', 'diegorodriguesdev@gmail.com', '$2b$06$3a4c8075d001ac0759410ugezgYljMGd/NKiWsT.bZm.oCq84Daai', 1, NULL),
(3, '2', 'diegorodriguesdev1@gmail.com', '$2b$06$1a0c260dbbc3b26eb63d9uanMvLO8ocauhvvN8tYA901EOCO5f42i', 1, NULL),
(4, 'e8838478caf4926106971e10179a9274df29b259', 'diegorodriguesdevfasfdsa@gmail', '$2b$06$40f45ac0b16e73853deefuNMFfpFJ0miXgsvqMEP3tqO2SHqBOt5K', 1, NULL),
(5, '', 'diegorodriguesdevsss@gmail.com', '$2b$06$75d399678da8494faee3dewgfs5Ga0Bn0UzgdBTZSHaeo/LDocorG', 1, NULL),
(6, '', 'diegorodriguesdev@gmail.com3', '$2b$06$fb252511c0e619bc95dbeOBnJ17a8XhdRMfnJN3s7ICiM5h8qyabS', 1, NULL),
(7, '0c3df6cc06f02d0a2f2edeab0811bdb18fd6c10c', 'marceloalegrinho@caralegal.com', '$2b$06$b3b763f80d2f991c16d26e/1RWakSn4xqB3F3j5rxU7eC39JxRjVG', 1, NULL),
(8, '25048630472705061caaa838c23372717cac07f3', 'pedrobigode@bigode.com', '$2b$06$7694b390d7a05c396ee6bu34rx7/BdtT1spnGQMkSu4H5gApAuXxi', 1, NULL),
(9, 'c0d50eaaf91c5153b782e52b97ca780e4df8ffeb', 'gabriel@pedefimose.com', '$2b$06$f0f5c7bf0228f91b35a2fO.RG9xxmGZU1RaUgHMY8qOrPDkJt0c7S', 1, NULL);

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
  `hash` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `renda` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`id_cliente`, `nome`, `sobrenome`, `data_nasc`, `id_genero`, `newsletter`, `id_situacao`, `hash`, `renda`) VALUES
(1, 'Diego', 'Rodrigues', '1991-10-25', 13, '1', 1, '6b39cef7d91fe25a5174150f69dd1b4372f859ca', 1500.99),
(2, 'Diego', 'Rodrigues j', '1991-10-25', 13, '1', 1, '032dca133f4be85a07f01fbae331a9e78ee74ebf', 5000.89),
(3, 'Marcelo', 'alegrinho', '2006-01-07', 1, '1', 1, '0c3df6cc06f02d0a2f2edeab0811bdb18fd6c10c', 1000),
(4, 'Pedro', 'Bigode', '1995-10-10', 1, '1', 1, '25048630472705061caaa838c23372717cac07f3', 0),
(5, 'Gabriel', 'Pe de fimose', '1995-10-10', 1, '1', 1, 'c0d50eaaf91c5153b782e52b97ca780e4df8ffeb', 2500.55),
(6, 'Caipora', 'Caipora web', '0199-05-06', 1, '1', 1, 'c0d50eaaf91c5153b782e52b97ca780e4df8ffeb', 250);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_contatos`
--

CREATE TABLE `tbl_contatos` (
  `id` int(11) NOT NULL,
  `hash_usuario` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `id_situacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_contatos`
--

INSERT INTO `tbl_contatos` (`id`, `hash_usuario`, `numero`, `id_situacao`) VALUES
(1, '15', 2147483647, NULL),
(2, '15', 2147483647, NULL),
(3, '15', 2147483647, NULL),
(4, '15', 2147483647, NULL),
(5, '15', 2147483647, NULL),
(6, '15', 2147483647, NULL),
(7, '16', 2147483647, NULL),
(8, '16', 2147483647, NULL),
(9, '16', 2147483647, NULL),
(10, '16', 2147483647, NULL),
(11, '16', 2147483647, NULL),
(12, '1', 2147483647, NULL),
(13, '2', 2147483647, NULL),
(14, 'e8838478caf4926106971e10179a9274df29b259', 2147483647, NULL),
(15, '', 22222, NULL),
(16, '', 2147483647, NULL),
(17, '0c3df6cc06f02d0a2f2edeab0811bdb18fd6c10c', 2147483647, NULL),
(18, '25048630472705061caaa838c23372717cac07f3', 2147483647, NULL),
(19, 'c0d50eaaf91c5153b782e52b97ca780e4df8ffeb', 2147483647, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_contatos_emails`
--

CREATE TABLE `tbl_contatos_emails` (
  `id` int(11) NOT NULL,
  `hash_usuario` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_situacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_contatos_emails`
--

INSERT INTO `tbl_contatos_emails` (`id`, `hash_usuario`, `email`, `id_situacao`) VALUES
(1, '15', 'diegorodriguesdev@gmail.com', NULL),
(2, '15', 'diegorodriguesdev@gmail.com', NULL),
(3, '15', 'diegorodriguesdev@gmail.com', NULL),
(4, '15', 'diegorodriguesdev@gmail.com', NULL),
(5, '15', 'diegorodriguesdev@gmail.com', NULL),
(6, '15', 'diegorodriguesdev@gmail.com', NULL),
(7, '15', 'diegorodriguesdev@gmail.com', NULL),
(8, '16', 'diegorodriguesdev@gmail.com', NULL),
(9, '16', 'diegorodriguesdev@gmail.com', NULL),
(10, '16', 'diegorodriguesdev@gmail.com', NULL),
(11, '16', 'diegorodriguesdev@gmail.com', NULL),
(12, '16', 'diegorodriguesdev@gmail.com', NULL),
(13, '1', 'diegorodriguesdev@gmail.com', NULL),
(14, '2', 'diegorodriguesdev1@gmail.com', NULL),
(15, 'e8838478caf4926106971e10179a9274df29b259', 'diegorodriguesdevfasfdsa@gmail', NULL),
(16, '', 'diegorodriguesdevsss@gmail.com', NULL),
(17, '', 'diegorodriguesdev@gmail.com3', NULL),
(18, '0c3df6cc06f02d0a2f2edeab0811bdb18fd6c10c', 'marceloalegrinho@caralegal.com', NULL),
(19, '25048630472705061caaa838c23372717cac07f3', 'pedrobigode@bigode.com', NULL),
(20, 'c0d50eaaf91c5153b782e52b97ca780e4df8ffeb', 'gabriel@pedefimose.com', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_docs`
--

CREATE TABLE `tbl_docs` (
  `id` int(11) NOT NULL,
  `hash_usuario` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_tipo_documento` int(11) DEFAULT NULL,
  `documento` char(14) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_situacao` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_docs`
--

INSERT INTO `tbl_docs` (`id`, `hash_usuario`, `id_tipo_documento`, `documento`, `id_situacao`) VALUES
(1, '', 1, '', 1),
(2, '', 2, '', 1),
(3, '0c3df6cc06f02d0a2f2edeab0811bdb18fd6c10c', 1, '00000000000', 1),
(4, '0c3df6cc06f02d0a2f2edeab0811bdb18fd6c10c', 2, '0000000000', 1),
(5, '25048630472705061caaa838c23372717cac07f3', 1, '00000000000', 1),
(6, '25048630472705061caaa838c23372717cac07f3', 2, '0000000000', 1),
(7, 'c0d50eaaf91c5153b782e52b97ca780e4df8ffeb', 1, '00000000000', 1),
(8, 'c0d50eaaf91c5153b782e52b97ca780e4df8ffeb', 2, '0000000000', 1);

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
-- Estrutura da tabela `tbl_parceiros`
--

CREATE TABLE `tbl_parceiros` (
  `id` int(11) NOT NULL,
  `razao_social` varchar(50) DEFAULT NULL,
  `nome_fantasia` varchar(20) DEFAULT NULL,
  `ie` int(11) DEFAULT NULL,
  `im` int(11) DEFAULT NULL,
  `id_situacao` int(11) DEFAULT NULL,
  `hash` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_parceiros`
--

INSERT INTO `tbl_parceiros` (`id`, `razao_social`, `nome_fantasia`, `ie`, `im`, `id_situacao`, `hash`) VALUES
(1, 'Digital space ', 'Digital space soluçõ', 1, 1, 1, '1c3aecf848112441b6f718fa1dcf278cc9e2fda9'),
(2, 'Caipora', 'Caipora web', 1, 1, 1, '1c3aecf848112441b6f718fa1dcf278cc9e2fda9');

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
(1, 'Ativa'),
(2, 'Inativa');

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
(1, 'cpf'),
(2, 'rg'),
(3, 'cnpj');

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
-- Índices para tabela `tbl_parceiros`
--
ALTER TABLE `tbl_parceiros`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbl_contatos`
--
ALTER TABLE `tbl_contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tbl_contatos_emails`
--
ALTER TABLE `tbl_contatos_emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `tbl_docs`
--
ALTER TABLE `tbl_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbl_genero`
--
ALTER TABLE `tbl_genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tbl_parceiros`
--
ALTER TABLE `tbl_parceiros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbl_situacao`
--
ALTER TABLE `tbl_situacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbl_tipo_docs`
--
ALTER TABLE `tbl_tipo_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
