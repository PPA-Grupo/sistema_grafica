-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Out-2022 às 21:31
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ppa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivo`
--

CREATE TABLE `arquivo` (
  `id_arquivo` int(11) NOT NULL,
  `tipo` varchar(3) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tamanho_arquivo` int(11) NOT NULL,
  `data_entrega` varchar(10) DEFAULT NULL,
  `qtd_impressao` int(11) NOT NULL,
  `situacao` varchar(100) DEFAULT '0',
  `data_envio` varchar(20) DEFAULT NULL,
  `cor` varchar(25) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `assunto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `arquivo`
--

INSERT INTO `arquivo` (`id_arquivo`, `tipo`, `nome`, `tamanho_arquivo`, `data_entrega`, `qtd_impressao`, `situacao`, `data_envio`, `cor`, `titulo`, `assunto`) VALUES
(17, 'pdf', '309243209483209', 12, NULL, 12, '0', NULL, 'Colorido', 'Pesquisa', 'Pesquisa sobre animais marinhos'),
(18, 'pdf', 'Pedro', 12, NULL, 5, '0', NULL, 'Preto e Branco', 'Pesquisa de Física', 'Campo Magnético'),
(19, 'pdf', '634b0879bd72b9.78977355.pdf', 290985, NULL, 12, '1', '2022-10-15', 'Preto e Branco', 'Bernardo', 'Sobre golfinhos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_funcionario` int(11) NOT NULL,
  `siape` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telefone` int(11) NOT NULL,
  `cargo` varchar(30) DEFAULT NULL,
  `senha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `siape` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int(11) NOT NULL,
  `senha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `relacao_funcionario`
--

CREATE TABLE `relacao_funcionario` (
  `id_funcionario` int(11) NOT NULL,
  `id_arquivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `arquivo`
--
ALTER TABLE `arquivo`
  ADD PRIMARY KEY (`id_arquivo`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`siape`);

--
-- Índices para tabela `relacao_funcionario`
--
ALTER TABLE `relacao_funcionario`
  ADD KEY `id_arquivo` (`id_arquivo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `arquivo`
--
ALTER TABLE `arquivo`
  MODIFY `id_arquivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `siape` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `relacao_funcionario`
--
ALTER TABLE `relacao_funcionario`
  ADD CONSTRAINT `relacao_funcionario_ibfk_1` FOREIGN KEY (`id_arquivo`) REFERENCES `arquivo` (`id_arquivo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
