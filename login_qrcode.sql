-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Jul-2019 às 16:31
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_qrcode`
--

-- --------------------------------------------------------



--
-- Estrutura da tabela `seguranca`
--

CREATE TABLE `seguranca` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pergunta1` varchar(11) NOT NULL,
  `pergunta2` varchar(11) NOT NULL,
  `pergunta3` varchar(11) NOT NULL,
  `resposta1` varchar(255) NOT NULL,
  `resposta2` varchar(255) NOT NULL,
  `resposta3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `seguranca`
--

INSERT INTO `seguranca` (`id`, `id_user`, `pergunta1`, `pergunta2`, `pergunta3`, `resposta1`, `resposta2`, `resposta3`) VALUES
(1, 1, '', '', '', '', '', '');

-- --------------------------------------------------------


--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_adicional` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `senha_descrypt` varchar(255) NOT NULL,
  `ddd` varchar(11) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `frase` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `login_status` tinyint(4) NOT NULL DEFAULT '0',
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `sobrenome`, `nickname`, `email`, `email_adicional`, `senha`, `senha_descrypt`, `ddd`, `telefone`, `frase`, `foto`, `login_status`, `last_login`) VALUES
(1, 'Fulano', 'de Tal', 'fulano2019', 'fulano@hotmail.com', '', '53ed73d2c3180ef428f3b9646f2109f3787ddc8d', 'q07w3070', '96', '991119111', 'Não há outro igual a Ti...', 'user.png', 0, '2019-07-04 10:31:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seguranca`
--
ALTER TABLE `seguranca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seguranca`
--
ALTER TABLE `seguranca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
