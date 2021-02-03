-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/01/2021 às 12:50
-- Versão do servidor: 10.4.14-MariaDB
-- Versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojinha_ceel`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `boleto`
--

CREATE TABLE `boleto` (
  `codigoPag` int(11) NOT NULL,
  `codigoBarras` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `boleto`
--

INSERT INTO `boleto` (`codigoPag`, `codigoBarras`) VALUES
(1, 123456789);

-- --------------------------------------------------------

--
-- Estrutura para tabela `bolsa`
--

CREATE TABLE `bolsa` (
  `codigoProd` int(11) NOT NULL,
  `Largura` int(11) NOT NULL,
  `Altura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `bolsa`
--

INSERT INTO `bolsa` (`codigoProd`, `Largura`, `Altura`) VALUES
(2, 15, 20);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cartão`
--

CREATE TABLE `cartão` (
  `codigoPag` int(11) NOT NULL,
  `tipo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `cartão`
--

INSERT INTO `cartão` (`codigoPag`, `tipo`) VALUES
(1, 'Crédito');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `codigoPag` int(11) NOT NULL,
  `frete` int(11) NOT NULL,
  `valor_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `pagamento`
--

INSERT INTO `pagamento` (`codigoPag`, `frete`, `valor_total`) VALUES
(1, 50, 200);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `codigoProduto` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `preço` int(11) NOT NULL,
  `imagens` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`codigoProduto`, `nome`, `preço`, `imagens`) VALUES
(1, 'tênis', 600, 3),
(2, 'bolsa channel', 100, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sapato`
--

CREATE TABLE `sapato` (
  `codigoProd` int(11) NOT NULL,
  `tipo` varchar(40) NOT NULL,
  `numeração` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `sapato`
--

INSERT INTO `sapato` (`codigoProd`, `tipo`, `numeração`) VALUES
(1, 'nike', 36);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `rua` varchar(40) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `CEP` int(11) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `pais` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `rua`, `numero`, `bairro`, `CEP`, `cidade`, `estado`, `pais`) VALUES
(1, 'Esther', 'esther@gmail.com', 'senha123', 'rua legal', 20, 'jardim alvoradas', 12364, 'sao carlos', 'SP', 'brasil');

-- --------------------------------------------------------

--
-- Estrutura para tabela `venda`
--

CREATE TABLE `venda` (
  `codigoPagV` int(11) NOT NULL,
  `cod_produtos` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `datahora` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `venda`
--

INSERT INTO `venda` (`codigoPagV`, `cod_produtos`, `id_usuario`, `datahora`) VALUES
(1, 1, 1, '14h');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `boleto`
--
ALTER TABLE `boleto`
  ADD PRIMARY KEY (`codigoPag`),
  ADD UNIQUE KEY `codigoPag` (`codigoPag`);

--
-- Índices de tabela `bolsa`
--
ALTER TABLE `bolsa`
  ADD PRIMARY KEY (`codigoProd`),
  ADD KEY `codigoProd` (`codigoProd`);

--
-- Índices de tabela `cartão`
--
ALTER TABLE `cartão`
  ADD PRIMARY KEY (`codigoPag`),
  ADD UNIQUE KEY `codigoPag` (`codigoPag`);

--
-- Índices de tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`codigoPag`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codigoProduto`);

--
-- Índices de tabela `sapato`
--
ALTER TABLE `sapato`
  ADD PRIMARY KEY (`codigoProd`),
  ADD KEY `codigoProd` (`codigoProd`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices de tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`codigoPagV`,`cod_produtos`,`id_usuario`),
  ADD KEY `cod_produtos` (`cod_produtos`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `codigoPagV` (`codigoPagV`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `codigoPag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `codigoProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `boleto`
--
ALTER TABLE `boleto`
  ADD CONSTRAINT `boleto_ibfk_1` FOREIGN KEY (`codigoPag`) REFERENCES `pagamento` (`codigoPag`);

--
-- Restrições para tabelas `bolsa`
--
ALTER TABLE `bolsa`
  ADD CONSTRAINT `bolsa_ibfk_1` FOREIGN KEY (`codigoProd`) REFERENCES `produto` (`codigoProduto`);

--
-- Restrições para tabelas `cartão`
--
ALTER TABLE `cartão`
  ADD CONSTRAINT `cartão_ibfk_1` FOREIGN KEY (`codigoPag`) REFERENCES `pagamento` (`codigoPag`);

--
-- Restrições para tabelas `sapato`
--
ALTER TABLE `sapato`
  ADD CONSTRAINT `sapato_ibfk_1` FOREIGN KEY (`codigoProd`) REFERENCES `produto` (`codigoProduto`);

--
-- Restrições para tabelas `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `venda_ibfk_1` FOREIGN KEY (`codigoPagV`) REFERENCES `pagamento` (`codigoPag`),
  ADD CONSTRAINT `venda_ibfk_2` FOREIGN KEY (`cod_produtos`) REFERENCES `produto` (`codigoProduto`),
  ADD CONSTRAINT `venda_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
