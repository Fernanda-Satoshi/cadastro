-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Set-2021 às 16:17
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `carros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `bairro` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `nome` varchar(80) NOT NULL,
  `whatsapp` int(15) NOT NULL,
  `nome_imagem` varchar(220) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `bairro`, `created`, `modified`, `nome`, `whatsapp`, `nome_imagem`) VALUES
(17, 'japao', '2021-09-28 17:00:32', NULL, 'mercedes', 9698855, ''),
(16, 'Rocha', '2021-09-28 16:56:40', NULL, 'Pia', 8888777, ''),
(15, 'Trindade', '2021-09-28 16:53:56', NULL, 'Tuninho', 989898, ''),
(14, 'galo branco', '2021-09-28 16:53:22', NULL, 'Gabriel', 800, ''),
(13, 'Rocha', '2021-09-28 16:52:52', NULL, 'Silvia', 2147483647, ''),
(18, '', '2021-09-28 18:12:11', NULL, '', 0, ''),
(19, 'FOFOCA', '2021-09-28 18:12:25', NULL, 'rena', 78, ''),
(20, 'wdwadwwa', '2021-09-28 18:12:36', NULL, 'dwdwda', 313132, ''),
(21, '', '2021-09-28 18:15:18', NULL, '', 0, ''),
(22, 'quadro', '2021-09-28 18:15:36', NULL, 'bola', 9000, ''),
(23, 'popo', '2021-09-28 18:19:52', NULL, 'rei', 77777, ''),
(24, 'columbia', '2021-09-29 10:57:23', NULL, 'fernanda', 8957, ''),
(25, 'columbia', '2021-09-29 10:57:24', NULL, 'fernanda', 8957, ''),
(26, 'columbia', '2021-09-29 10:57:25', NULL, 'fernanda', 8957, ''),
(27, 'njgb', '2021-09-29 10:57:56', NULL, 'lucas', 847, ''),
(28, 'pedrao', '2021-09-29 10:58:54', NULL, 'marcelo', 9000688, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
