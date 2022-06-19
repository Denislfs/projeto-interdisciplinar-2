-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jun-2022 às 21:48
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bikelivery`
--
CREATE DATABASE IF NOT EXISTS `bikelivery` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bikelivery`;

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

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_entrega` ()  BEGIN

	SELECT d.id, a.data_pedido, b.nome_fantasia, a.destinatario, a.dimensao, a.peso,a.rua,a.numero,a.bairro,a.complemento, a.valor, c.nome, c.celular
    FROM pedido a, estabelecimento b, entregador c, entrega d
    WHERE b.cnpj = a.cnpj AND
    c.id = d.id_entregador AND
    a.id = d.id_pedido;

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
(2, 'alimenticio');

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
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `cpf` varchar(60) NOT NULL,
  `celular` varchar(60) NOT NULL,
  `data_nasc` date NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `numero` int(7) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `complemento` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estabelecimento`
--

CREATE TABLE `estabelecimento` (
  `cnpj` int(15) NOT NULL,
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `cnpj_estabelecimento` int(15) DEFAULT NULL,
  `id_entregador` int(11) DEFAULT NULL,
  `nome_completo` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `cnpj_estabelecimento`, `id_entregador`, `nome_completo`, `email`, `senha`) VALUES
(4, NULL, NULL, 'Denis', 'ertyrytr', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `cnpj` int(30) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `destinatario` varchar(60) NOT NULL,
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
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_entregador` (`id_entregador`),
  ADD KEY `cnpj_estabelecimento` (`cnpj_estabelecimento`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `entrega`
--
ALTER TABLE `entrega`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `entregador`
--
ALTER TABLE `entregador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Limitadores para a tabela `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`cnpj_estabelecimento`) REFERENCES `estabelecimento` (`cnpj`),
  ADD CONSTRAINT `login_ibfk_2` FOREIGN KEY (`id_entregador`) REFERENCES `entregador` (`id`);

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
