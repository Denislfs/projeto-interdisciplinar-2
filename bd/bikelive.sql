-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Maio-2022 às 21:46
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bikelive`
--
CREATE DATABASE IF NOT EXISTS `bikelive` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bikelive`;

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `entregador_select` ()  BEGIN
 SELECT * FROM entregador;
 
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `entrega_select` ()  BEGIN
 SELECT * FROM entrega;
 
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `estabelecimento_select` ()  BEGIN
 SELECT * FROM estabelecimento;
 
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pedido_select` ()  BEGIN
 SELECT * FROM pedido;
 
END$$

--
-- Funções
--
CREATE DEFINER=`root`@`localhost` FUNCTION `idade` (`data_inicio` DATE) RETURNS INT(11) BEGIN
    DECLARE data_atual DATE;
    Select current_date()into data_atual;
    RETURN year(data_atual)-year(data_inicio);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `tipo`) VALUES
(1, 'Alimenticio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrega`
--

CREATE TABLE `entrega` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_entregador` int(11) NOT NULL,
  `concluida` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `entrega`
--

INSERT INTO `entrega` (`id`, `data`, `id_pedido`, `id_entregador`, `concluida`) VALUES
(6, '2022-05-31 19:55:27', 1, 1, 0);

--
-- Acionadores `entrega`
--
DELIMITER $$
CREATE TRIGGER `TR_ENTREGA` AFTER INSERT ON `entrega` FOR EACH ROW BEGIN
	UPDATE pedido
	SET disponivel = 0
	WHERE id = NEW.id_pedido;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entregador`
--

CREATE TABLE `entregador` (
  `id` int(11) NOT NULL,
  `cpf` varchar(60) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `celular` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data_nasc` date NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `numero` int(7) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `complemento` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `entregador`
--

INSERT INTO `entregador` (`id`, `cpf`, `nome`, `celular`, `email`, `data_nasc`, `endereco`, `numero`, `bairro`, `cidade`, `complemento`) VALUES
(1, 'ygtggg', 'jose', '364657', 'hdhd@gmail.com', '1998-05-01', 'ruaanatonio', 89, 'jardim rr', 'leme', 'casa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estabelecimento`
--

CREATE TABLE `estabelecimento` (
  `cnpj` int(30) NOT NULL,
  `razao_social` varchar(60) NOT NULL,
  `nome_fantasia` varchar(60) NOT NULL,
  `telefone` int(30) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `uf` char(2) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `rua` varchar(60) NOT NULL,
  `numero` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estabelecimento`
--

INSERT INTO `estabelecimento` (`cnpj`, `razao_social`, `nome_fantasia`, `telefone`, `cep`, `uf`, `cidade`, `bairro`, `rua`, `numero`) VALUES
(32843845, 'teste', 'denis', 35548904, '13615470', 'sp', 'leme', 'antonio rosa', 'jjj', 89);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `cnpj` int(30) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `valor` decimal(15,2) NOT NULL,
  `data_pedido` datetime NOT NULL,
  `disponivel` int(1) NOT NULL DEFAULT 1,
  `dimensao` float NOT NULL,
  `peso` float NOT NULL,
  `rua` varchar(60) NOT NULL,
  `numero` int(7) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `complemento` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id`, `cnpj`, `id_categoria`, `valor`, `data_pedido`, `disponivel`, `dimensao`, `peso`, `rua`, `numero`, `bairro`, `cidade`, `complemento`) VALUES
(1, 32843845, 1, '45.00', '2022-05-11 19:29:12', 0, 76, 470, 'djhdjdfj', 89, 'jardim jj', 'leme ', 'casa');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `entrega`
--
ALTER TABLE `entrega`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_entregador` (`id_entregador`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- Índices para tabela `entregador`
--
ALTER TABLE `entregador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estabelecimento`
--
ALTER TABLE `estabelecimento`
  ADD PRIMARY KEY (`cnpj`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `cnpj` (`cnpj`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `entrega`
--
ALTER TABLE `entrega`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `entregador`
--
ALTER TABLE `entregador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `entrega`
--
ALTER TABLE `entrega`
  ADD CONSTRAINT `entrega_ibfk_1` FOREIGN KEY (`id_entregador`) REFERENCES `entregador` (`id`),
  ADD CONSTRAINT `entrega_ibfk_2` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`cnpj`) REFERENCES `estabelecimento` (`cnpj`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
