-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 07-Jul-2019 às 15:56
-- Versão do servidor: 8.0.13-4
-- versão do PHP: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zFG2rQJeB5`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Adm_Sistema`
--

CREATE TABLE `Adm_Sistema` (
  `login` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `Adm_Sistema`
--

INSERT INTO `Adm_Sistema` (`login`, `senha`, `tipo`) VALUES
('carlos.matheus', 'senhapadrao', 0),
('joseane.ferreira', 'senhapadrao', 1),
('maria.clara', 'senhapadrao', 1),
('pedro.araujo', 'senhapadrao', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Departamento`
--

CREATE TABLE `Departamento` (
  `id_departamento` bigint(20) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `exigencia` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `Departamento`
--

INSERT INTO `Departamento` (`id_departamento`, `nome`, `exigencia`) VALUES
(1, 'Departamento de Computação', 'exigencia??');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Diretor`
--

CREATE TABLE `Diretor` (
  `id_membro_dpt` bigint(20) NOT NULL,
  `login_adm_sistema` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `Diretor`
--

INSERT INTO `Diretor` (`id_membro_dpt`, `login_adm_sistema`) VALUES
(10, 'carlos.matheus');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Encaminhamentos`
--

CREATE TABLE `Encaminhamentos` (
  `id_processo` bigint(20) NOT NULL,
  `login_adm_sistema` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_professor` bigint(20) NOT NULL,
  `data_entrega` datetime NOT NULL,
  `data_devolucao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `Encaminhamentos`
--

INSERT INTO `Encaminhamentos` (`id_processo`, `login_adm_sistema`, `id_professor`, `data_entrega`, `data_devolucao`) VALUES
(4, 'pedro.araujo', 6, '2019-07-05 00:00:00', '2019-07-05 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `FluxoProcessos`
--

CREATE TABLE `FluxoProcessos` (
  `id_processo` bigint(20) NOT NULL,
  `login_adm_sistema` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dt_entrada` date NOT NULL,
  `dt_saida` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `FluxoProcessos`
--

INSERT INTO `FluxoProcessos` (`id_processo`, `login_adm_sistema`, `dt_entrada`, `dt_saida`) VALUES
(1, 'maria.clara', '2018-04-09', '2018-04-13'),
(1, 'maria.clara', '2019-05-31', '2019-07-05'),
(2, 'pedro.araujo', '2018-09-17', '2018-09-21'),
(2, 'pedro.araujo', '2019-06-28', '2019-07-05'),
(3, 'joseane.ferreira', '2019-06-24', '2019-06-24'),
(3, 'joseane.ferreira', '2019-07-03', '2019-07-03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Membro_Departamento`
--

CREATE TABLE `Membro_Departamento` (
  `id_membro_dpt` bigint(20) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_departamento` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `Membro_Departamento`
--

INSERT INTO `Membro_Departamento` (`id_membro_dpt`, `nome`, `email`, `id_departamento`) VALUES
(1, 'Maria Clara da Silva', 'clara.silva@gmail.com', 1),
(2, 'Pedro Araújo Santos', 'pedro.araujo@gmail.com', 1),
(3, 'Joseane Ferreira Lima', 'jf_lima@gmail.com', 1),
(4, 'Marcos Antônio Brasileiro', 'mabrasileiro@gmail.com', 1),
(5, 'Marcela Oliveira', 'marcela_oliivia@gmail.com', 1),
(6, 'Otávio Rafael Guerra', 'rafael.guerra@gmail.com', 1),
(7, 'Antônia Carla do Nascimento', 'carla.nascimento@gmail.com', 1),
(8, 'Daniel Marcelo Aguiar', 'dmaguiar@gmail.com', 1),
(9, 'Ana Catarina Serafim', 'ana_serafim@gmail.com', 1),
(10, 'Carlos Matheus da Silva', 'carlos.matheus@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Notificacoes`
--

CREATE TABLE `Notificacoes` (
  `id_professor` bigint(20) NOT NULL,
  `id_processo` bigint(20) NOT NULL,
  `data_envio` date NOT NULL,
  `conteudo` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_adm_sistema` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `Notificacoes`
--

INSERT INTO `Notificacoes` (`id_professor`, `id_processo`, `data_envio`, `conteudo`, `login_adm_sistema`) VALUES
(6, 4, '2019-07-05', 'Processo em atraso, favor terminar e enviar o processo de volta para o departamento', 'pedro.araujo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Processo`
--

CREATE TABLE `Processo` (
  `numero_processo` int(11) NOT NULL,
  `data_cadastro` date NOT NULL,
  `local_atual` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assunto` text COLLATE utf8_unicode_ci,
  `solicitante` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_processo` bigint(20) NOT NULL,
  `no_dpt` tinyint(1) NOT NULL,
  `status_atual` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `Processo`
--

INSERT INTO `Processo` (`numero_processo`, `data_cadastro`, `local_atual`, `assunto`, `solicitante`, `id_processo`, `no_dpt`, `status_atual`) VALUES
(15, '2018-04-09', 'Finalizado', 'Licença Maternidade', 'Luísa Fagundes', 1, 1, 1),
(22, '2018-09-17', 'Finalizado', 'Licença Paternidade', 'Caio Pereira Barros', 2, 1, 2),
(29, '2019-07-03', 'Em Andamento', 'Licença para Tratamento de Saúde', 'Felipe Souza Medeiros', 3, 1, 1),
(31, '2019-06-28', 'Em Andamento', 'Licença para Capacitação', 'Nadine Costa', 4, 0, 0),
(38, '2019-05-31', 'Atrasado', 'Licença à Adotante', 'Melissa Arruda Lemos', 5, 0, 1),
(44, '2019-06-24', 'Atrasado', 'Licença para Tratar de Interesses Particulares', 'Paulo Francisco Lima', 6, 0, 2),
(234123413, '2019-07-07', 'Departamento', 'dispensa', 'José Inaldo da Silva', 1638402670444744, 1, 0),
(1123123, '2019-07-07', 'Departamento', 'Licença médica ', 'Amarildo dos Santos', 1638408838104798, 1, 0),
(123123123, '2019-07-07', 'Departamento', 'Viagem de Pesquisa', 'Arlindo da Cruz', 1638409347349345, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Professor`
--

CREATE TABLE `Professor` (
  `id_membro_dpt` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `Professor`
--

INSERT INTO `Professor` (`id_membro_dpt`) VALUES
(4),
(5),
(6),
(7),
(8),
(9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Secretario`
--

CREATE TABLE `Secretario` (
  `id_membro_dpt` bigint(20) NOT NULL,
  `login_adm_sistema` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `Secretario`
--

INSERT INTO `Secretario` (`id_membro_dpt`, `login_adm_sistema`) VALUES
(3, 'joseane.ferreira'),
(1, 'maria.clara'),
(2, 'pedro.araujo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Adm_Sistema`
--
ALTER TABLE `Adm_Sistema`
  ADD PRIMARY KEY (`login`);

--
-- Indexes for table `Departamento`
--
ALTER TABLE `Departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indexes for table `Diretor`
--
ALTER TABLE `Diretor`
  ADD PRIMARY KEY (`id_membro_dpt`),
  ADD UNIQUE KEY `login_adm_sistema` (`login_adm_sistema`);

--
-- Indexes for table `Encaminhamentos`
--
ALTER TABLE `Encaminhamentos`
  ADD PRIMARY KEY (`id_processo`,`id_professor`,`data_entrega`),
  ADD KEY `fk_quem_encaminhou` (`login_adm_sistema`),
  ADD KEY `fk_encaminhamentos_professor` (`id_professor`);

--
-- Indexes for table `FluxoProcessos`
--
ALTER TABLE `FluxoProcessos`
  ADD PRIMARY KEY (`id_processo`,`dt_entrada`),
  ADD KEY `fk_quem_recebeu_processo` (`login_adm_sistema`);

--
-- Indexes for table `Membro_Departamento`
--
ALTER TABLE `Membro_Departamento`
  ADD PRIMARY KEY (`id_membro_dpt`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_id_departamento` (`id_departamento`);

--
-- Indexes for table `Notificacoes`
--
ALTER TABLE `Notificacoes`
  ADD PRIMARY KEY (`id_processo`,`id_professor`,`data_envio`),
  ADD KEY `fk_professor_notificado` (`id_professor`),
  ADD KEY `fk_quem_notificou` (`login_adm_sistema`);

--
-- Indexes for table `Processo`
--
ALTER TABLE `Processo`
  ADD PRIMARY KEY (`id_processo`),
  ADD UNIQUE KEY `numero_processo` (`numero_processo`);

--
-- Indexes for table `Professor`
--
ALTER TABLE `Professor`
  ADD KEY `fk_membro_dpt_professor` (`id_membro_dpt`);

--
-- Indexes for table `Secretario`
--
ALTER TABLE `Secretario`
  ADD PRIMARY KEY (`id_membro_dpt`),
  ADD UNIQUE KEY `login_adm_sistema` (`login_adm_sistema`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `Diretor`
--
ALTER TABLE `Diretor`
  ADD CONSTRAINT `fk_adm_sistema_diretor` FOREIGN KEY (`login_adm_sistema`) REFERENCES `Adm_Sistema` (`login`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_diretor_membro_dpt` FOREIGN KEY (`id_membro_dpt`) REFERENCES `Membro_Departamento` (`id_membro_dpt`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `Encaminhamentos`
--
ALTER TABLE `Encaminhamentos`
  ADD CONSTRAINT `fk_encaminhamentos_professor` FOREIGN KEY (`id_professor`) REFERENCES `Professor` (`id_membro_dpt`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_processo_encaminhado` FOREIGN KEY (`id_processo`) REFERENCES `Processo` (`id_processo`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_quem_encaminhou` FOREIGN KEY (`login_adm_sistema`) REFERENCES `Adm_Sistema` (`login`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `FluxoProcessos`
--
ALTER TABLE `FluxoProcessos`
  ADD CONSTRAINT `fk_fluxoprocessos_processo` FOREIGN KEY (`id_processo`) REFERENCES `Processo` (`id_processo`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_quem_recebeu_processo` FOREIGN KEY (`login_adm_sistema`) REFERENCES `Adm_Sistema` (`login`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `Membro_Departamento`
--
ALTER TABLE `Membro_Departamento`
  ADD CONSTRAINT `fk_id_departamento` FOREIGN KEY (`id_departamento`) REFERENCES `Departamento` (`id_departamento`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `Notificacoes`
--
ALTER TABLE `Notificacoes`
  ADD CONSTRAINT `fk_notificacoes_processo` FOREIGN KEY (`id_processo`) REFERENCES `Processo` (`id_processo`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_professor_notificado` FOREIGN KEY (`id_professor`) REFERENCES `Professor` (`id_membro_dpt`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_quem_notificou` FOREIGN KEY (`login_adm_sistema`) REFERENCES `Adm_Sistema` (`login`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `Professor`
--
ALTER TABLE `Professor`
  ADD CONSTRAINT `fk_membro_dpt_professor` FOREIGN KEY (`id_membro_dpt`) REFERENCES `Membro_Departamento` (`id_membro_dpt`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `Secretario`
--
ALTER TABLE `Secretario`
  ADD CONSTRAINT `fk_secretario_adm_sistema` FOREIGN KEY (`login_adm_sistema`) REFERENCES `Adm_Sistema` (`login`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_secretario_membro_dpt` FOREIGN KEY (`id_membro_dpt`) REFERENCES `Membro_Departamento` (`id_membro_dpt`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
