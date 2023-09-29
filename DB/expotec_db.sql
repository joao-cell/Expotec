-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/09/2023 às 23:44
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `expotec_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `user` varchar(120) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `administradores`
--

INSERT INTO `administradores` (`id`, `user`, `senha`) VALUES
(1, 'MasterUser', 'root');

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `user` varchar(120) DEFAULT NULL,
  `senha` varchar(120) DEFAULT NULL,
  `turma_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`id`, `user`, `senha`, `turma_id`) VALUES
(15, 'test', '123', 14),
(16, 'Bruno Teles de Lira', '123', 13),
(17, 'JOAO GUSTAVO', 'senha123', 3),
(18, 'PEDRO VITOR', 'senha456', 4),
(19, 'JOAO VITOR', 'senha789', 5),
(20, 'RAFAEL SILVA', 'senhaabc', 6),
(21, 'PAULO NERES', 'senhaxyz', 7),
(22, 'BRUNO TELES', 'senha7890', 8),
(23, 'ROBERTO MIRANDA', 'senhamnop', 9),
(24, 'SALVADOR DA SILVA', 'senhaqwerty', 10),
(25, 'ROGERIO NOGUEIRA', 'senhaasdf', 11),
(26, 'RAFAELA SILVA', 'senhazxcv', 12),
(27, 'ROBERTA ALVES', 'senha123', 3),
(28, 'MARIA SILVA', 'senha456', 4),
(29, 'MARIA DA ESPERANÇA', 'senha789', 5),
(30, 'CLARA CALVACANTE', 'senhaabc', 6),
(31, 'VITORIA SILVA', 'senhaxyz', 7),
(32, 'DIEGO DE MELLO', 'senha7890', 8),
(33, 'MIGUEL VITOR', 'senhamnop', 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `avisos`
--

CREATE TABLE `avisos` (
  `id` int(11) NOT NULL,
  `aviso` varchar(255) NOT NULL,
  `data_aviso` date NOT NULL,
  `turma_id` int(11) NOT NULL,
  `titulo` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `avisos`
--

INSERT INTO `avisos` (`id`, `aviso`, `data_aviso`, `turma_id`, `titulo`) VALUES
(2, 'BlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBla', '2023-09-04', 14, 'Alunos, Sejam Bem vindos Aos Avisos!'),
(4, 'Texto do Aviso', '2023-09-21', 14, 'Titulo do aviso'),
(5, 'fkrngikanrsnjrn', '2023-09-28', 14, 'O Aluno joão vitor não sabe front-end'),
(6, 'O Aluno joão vitor não sabe front-endO Aluno joão vitor não sabe front-endO Aluno joão vitor não sabe front-endO Aluno joão vitor não sabe front-endO Aluno joão vitor não sabe front-endO Aluno joão vitor não sabe front-endO Aluno joão vitor não sabe front', '2023-09-29', 14, 'O Aluno joão vitor não sabe front-endO Aluno joão vitor não sabe front-endO Aluno joão vitor não sabe front-endO Aluno j');

-- --------------------------------------------------------

--
-- Estrutura para tabela `bimestres`
--

CREATE TABLE `bimestres` (
  `id` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `bimestres`
--

INSERT INTO `bimestres` (`id`, `numero`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `dias`
--

CREATE TABLE `dias` (
  `id` int(11) NOT NULL,
  `dia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `dias`
--

INSERT INTO `dias` (`id`, `dia`) VALUES
(3, 'Quarta'),
(4, 'Quinta'),
(1, 'Segunda'),
(5, 'Sexta'),
(2, 'Terça');

-- --------------------------------------------------------

--
-- Estrutura para tabela `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `dias_id` int(11) NOT NULL,
  `turma_id` int(11) NOT NULL,
  `horas_id` int(11) NOT NULL,
  `professores_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `horarios`
--

INSERT INTO `horarios` (`id`, `dias_id`, `turma_id`, `horas_id`, `professores_id`, `materia_id`) VALUES
(15, 1, 14, 1, 13, 1),
(16, 1, 14, 2, 13, 1),
(17, 1, 14, 3, 14, 2),
(18, 1, 14, 4, 15, 3),
(19, 1, 14, 5, 16, 4),
(20, 1, 14, 6, 17, 5),
(21, 1, 14, 7, 18, 6),
(29, 2, 14, 1, 13, 1),
(30, 2, 14, 2, 13, 1),
(31, 2, 14, 3, 14, 2),
(32, 2, 14, 4, 15, 3),
(33, 2, 14, 5, 16, 4),
(34, 2, 14, 6, 17, 5),
(35, 2, 14, 7, 18, 6),
(36, 3, 14, 1, 13, 1),
(37, 3, 14, 2, 13, 1),
(38, 3, 14, 3, 14, 2),
(39, 3, 14, 4, 15, 3),
(40, 3, 14, 5, 16, 4),
(41, 3, 14, 6, 17, 5),
(42, 3, 14, 7, 18, 6),
(43, 4, 14, 1, 13, 1),
(44, 4, 14, 2, 13, 1),
(45, 4, 14, 3, 14, 2),
(46, 4, 14, 4, 15, 3),
(47, 4, 14, 5, 16, 4),
(48, 4, 14, 6, 17, 5),
(49, 4, 14, 7, 18, 6),
(50, 5, 14, 1, 13, 1),
(51, 5, 14, 2, 13, 1),
(52, 5, 14, 3, 14, 2),
(53, 5, 14, 4, 15, 3),
(54, 5, 14, 5, 16, 4),
(55, 5, 14, 6, 17, 5),
(56, 5, 14, 7, 18, 6);

-- --------------------------------------------------------

--
-- Estrutura para tabela `horas`
--

CREATE TABLE `horas` (
  `id` int(11) NOT NULL,
  `hora` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `horas`
--

INSERT INTO `horas` (`id`, `hora`) VALUES
(1, '07H30 / 08H20'),
(2, '08H20 / 09H10'),
(3, '09H10 / 10H00'),
(4, '10H15 / 11H05'),
(5, '11H05 / 11H55'),
(6, '11H55 / 12H45'),
(7, '12H45 / 13H35');

-- --------------------------------------------------------

--
-- Estrutura para tabela `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `materias`
--

INSERT INTO `materias` (`id`, `nome`) VALUES
(1, 'Matemática'),
(2, 'Língua Portuguesa'),
(3, 'Biologia'),
(4, 'Química'),
(5, 'Física'),
(6, 'História'),
(7, 'Geografia'),
(8, 'Sociologia'),
(9, 'Filosofia'),
(10, 'Língua Estrangeira'),
(11, 'Educação Física'),
(12, 'Artes');

-- --------------------------------------------------------

--
-- Estrutura para tabela `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `alunos_id` int(11) DEFAULT NULL,
  `materias_id` int(11) DEFAULT NULL,
  `bimestres_id` int(11) DEFAULT NULL,
  `nota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `notas`
--

INSERT INTO `notas` (`id`, `alunos_id`, `materias_id`, `bimestres_id`, `nota`) VALUES
(13, 15, 12, 1, 10),
(14, 15, 11, 3, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `professores`
--

CREATE TABLE `professores` (
  `id` int(11) NOT NULL,
  `user` varchar(120) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `professores`
--

INSERT INTO `professores` (`id`, `user`, `senha`) VALUES
(13, 'JOAO SILVA', 'senha123'),
(14, 'MARIA SANTOS', 'senha456'),
(15, 'CARLOS OLIVEIRA', 'senha789'),
(16, 'ANA PEREIRA', 'senhaabc'),
(17, 'PEDRO SOUZA', 'senhaxyz'),
(18, 'ISABELA ALMEIDA', 'senha7890'),
(19, 'LUCAS FERREIRA', 'senhamnop'),
(20, 'MARIANA COSTA', 'senhaqwerty'),
(21, 'RAFAELA SANTOS', 'senhaasdf'),
(22, 'PAULO ROCHA', 'senhazxcv');

-- --------------------------------------------------------

--
-- Estrutura para tabela `turmas`
--

CREATE TABLE `turmas` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `turmas`
--

INSERT INTO `turmas` (`id`, `nome`) VALUES
(3, 'fund1'),
(4, 'fund2'),
(5, 'fund3'),
(6, 'fund4'),
(7, 'fund5'),
(8, 'fund6'),
(9, 'fund7'),
(10, 'fund8'),
(11, 'fund9'),
(12, 'medio1'),
(13, 'medio2'),
(14, 'medio3');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_turma_id` (`turma_id`);

--
-- Índices de tabela `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_turma_id_avisos` (`turma_id`);

--
-- Índices de tabela `bimestres`
--
ALTER TABLE `bimestres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `numero` (`numero`);

--
-- Índices de tabela `dias`
--
ALTER TABLE `dias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dia` (`dia`);

--
-- Índices de tabela `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_horarios_dias` (`dias_id`),
  ADD KEY `fk_horarios_turma` (`turma_id`),
  ADD KEY `fk_horarios_horas` (`horas_id`),
  ADD KEY `fk_horarios_professores` (`professores_id`),
  ADD KEY `fk_horarios_materia` (`materia_id`);

--
-- Índices de tabela `horas`
--
ALTER TABLE `horas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hora` (`hora`),
  ADD UNIQUE KEY `hora_2` (`hora`);

--
-- Índices de tabela `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aluno_id` (`alunos_id`),
  ADD KEY `materias_id` (`materias_id`,`bimestres_id`),
  ADD KEY `fk_bimestres` (`bimestres_id`);

--
-- Índices de tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `avisos`
--
ALTER TABLE `avisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `bimestres`
--
ALTER TABLE `bimestres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de tabela `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `fk_turma_id` FOREIGN KEY (`turma_id`) REFERENCES `turmas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `avisos`
--
ALTER TABLE `avisos`
  ADD CONSTRAINT `fk_turma_id_avisos` FOREIGN KEY (`turma_id`) REFERENCES `turmas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `fk_horarios_dias` FOREIGN KEY (`dias_id`) REFERENCES `dias` (`id`),
  ADD CONSTRAINT `fk_horarios_horas` FOREIGN KEY (`horas_id`) REFERENCES `horas` (`id`),
  ADD CONSTRAINT `fk_horarios_materia` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`),
  ADD CONSTRAINT `fk_horarios_professores` FOREIGN KEY (`professores_id`) REFERENCES `professores` (`id`),
  ADD CONSTRAINT `fk_horarios_turma` FOREIGN KEY (`turma_id`) REFERENCES `turmas` (`id`);

--
-- Restrições para tabelas `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `fk_alunos` FOREIGN KEY (`alunos_id`) REFERENCES `alunos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_bimestres` FOREIGN KEY (`bimestres_id`) REFERENCES `bimestres` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_materias` FOREIGN KEY (`materias_id`) REFERENCES `materias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`alunos_id`) REFERENCES `alunos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
