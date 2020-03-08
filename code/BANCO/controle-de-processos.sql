-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Jul-2019 às 04:51
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `controle-de-processos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `diretor`
--

CREATE TABLE `diretor` (
  `id` int(11) NOT NULL,
  `tNome` varchar(255) NOT NULL,
  `tUser` varchar(255) NOT NULL,
  `tEmail` varchar(255) NOT NULL,
  `tSenha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `diretor`
--

INSERT INTO `diretor` (`id`, `tNome`, `tUser`, `tEmail`, `tSenha`) VALUES
(1, 'Gabriel Vinicius', 'Diretor', 'email@email.com', '123456789');

-- --------------------------------------------------------

--
-- Estrutura da tabela `processos`
--

CREATE TABLE `processos` (
  `id` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `data` date NOT NULL,
  `assunto` varchar(500) NOT NULL,
  `interessado` varchar(250) NOT NULL,
  `local` varchar(255) NOT NULL,
  `situacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `processos`
--

INSERT INTO `processos` (`id`, `num`, `data`, `assunto`, `interessado`, `local`, `situacao`) VALUES
(12, 51321321, '2019-06-10', 'estou querendo abrir um processo', 'Gabriel Vinicius', 'Departamento de Computacao', 'inativo'),
(15, 2147483647, '2019-06-14', 'estou querendo abrir um processo', 'Gabriel Vinicius', 'Departamento de Computacao', 'ativo'),
(16, 122335415, '2019-06-30', 'estou querendo abrir um processo', 'Gabriel Vinicius', 'Departamento de Computacao', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `tNome` varchar(255) NOT NULL,
  `tUser` varchar(255) NOT NULL,
  `tEmail` varchar(255) NOT NULL,
  `tSenha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `tNome`, `tUser`, `tEmail`, `tSenha`) VALUES
(1, 'Gabriel Vinicius', 'Professor', 'email@email.com', '654321987');

-- --------------------------------------------------------

--
-- Estrutura da tabela `secretario`
--

CREATE TABLE `secretario` (
  `id` int(11) NOT NULL,
  `tNome` varchar(255) NOT NULL,
  `tUser` varchar(255) NOT NULL,
  `tEmail` varchar(255) NOT NULL,
  `tSenha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `secretario`
--

INSERT INTO `secretario` (`id`, `tNome`, `tUser`, `tEmail`, `tSenha`) VALUES
(1, 'Gabriel Vinicius', 'Secretario', 'email@email.com', '987654321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diretor`
--
ALTER TABLE `diretor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processos`
--
ALTER TABLE `processos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secretario`
--
ALTER TABLE `secretario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diretor`
--
ALTER TABLE `diretor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `processos`
--
ALTER TABLE `processos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `secretario`
--
ALTER TABLE `secretario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
