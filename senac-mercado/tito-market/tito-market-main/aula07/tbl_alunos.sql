-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jan-2023 às 23:27
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
-- Banco de dados: `aula07`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_alunos`
--

CREATE TABLE `tbl_alunos` (
  `cod_aluno` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `data_nascimento` varchar(10) NOT NULL,
  `genero` char(1) NOT NULL,
  `situacao` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_alunos`
--

INSERT INTO `tbl_alunos` (`cod_aluno`, `nome`, `sobrenome`, `data_nascimento`, `genero`, `situacao`) VALUES
(1, 'Marcelo', 'Nascimento', '07/01/2006', 'M', 'A'),
(2, 'Marcelo', 'Nascimento', '07/01/2006', 'M', 'A'),
(3, 'Marcelo', 'Nascimento', '07/01/2006', 'M', 'A'),
(4, 'Marcelo', 'Nascimento', '07/01/2006', 'M', 'A'),
(5, 'Marcelo', 'Nascimento', '07/01/2006', 'M', 'A'),
(6, 'Marcelo', 'Nascimento', '07/01/2006', 'M', 'A'),
(7, 'Marcelo', 'Nascimento', '07/01/2006', 'M', 'A'),
(8, 'Marcelo', 'Nascimento', '07/01/2006', 'M', 'A'),
(9, 'Marcelo', 'Nascimento', '07/01/2006', 'M', 'A'),
(10, 'Marcelo', 'Nascimento', '07/01/2006', 'M', 'A'),
(11, 'Marcelo', 'Nascimento', '07/01/2006', 'M', 'A'),
(12, 'Marcelo', 'Nascimento', '07/01/2006', 'M', 'A'),
(13, 'Marcelo', 'Nascimento', '07/01/2006', 'M', 'A'),
(14, 'Marcelo', 'Nascimento', '07/01/2006', 'M', 'A'),
(15, 'Marcelo', 'Nascimento', '07/01/2006', 'M', 'A');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_alunos`
--
ALTER TABLE `tbl_alunos`
  ADD PRIMARY KEY (`cod_aluno`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_alunos`
--
ALTER TABLE `tbl_alunos`
  MODIFY `cod_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
