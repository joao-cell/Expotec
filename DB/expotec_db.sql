-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/09/2023 às 20:07
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
  `aviso` varchar(1000) NOT NULL,
  `data_aviso` date NOT NULL,
  `turma_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `criador` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `avisos`
--

INSERT INTO `avisos` (`id`, `aviso`, `data_aviso`, `turma_id`, `titulo`, `criador`) VALUES
(16, 'fwrgkwrmwmefkwmwkm', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'João Vitor'),
(17, 'frmgklrmtklbebjkentbken', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(18, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(19, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(20, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(21, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(22, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(23, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(24, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(25, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(26, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(27, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(28, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(29, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(30, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(31, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(32, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(33, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(34, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(35, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(36, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(37, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(38, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(39, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(40, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(41, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(42, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(43, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(44, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(45, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(46, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(47, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(48, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(49, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(50, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(51, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(52, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(53, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(54, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(55, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(56, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(57, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(58, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(59, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(60, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(61, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(62, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(63, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(64, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(65, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(66, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(67, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(68, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(69, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(70, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(71, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(72, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(73, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(74, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(75, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(76, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(77, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(78, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(79, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(80, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(81, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(82, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(83, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(84, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(85, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(86, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(87, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(88, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(89, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(90, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(91, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(92, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(93, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(94, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(95, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(96, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(97, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(98, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(99, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(100, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(101, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(102, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(103, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(104, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(105, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(106, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(107, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(108, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(109, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(110, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(111, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(112, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(113, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(114, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(115, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(116, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(117, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(118, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(119, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(120, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(121, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(122, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(123, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(124, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(125, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(126, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(127, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(128, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(129, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(130, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(131, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(132, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(133, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(134, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(135, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(136, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(137, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(138, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(139, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(140, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(141, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(142, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(143, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(144, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(145, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(146, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(147, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(148, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(149, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(150, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(151, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(152, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(153, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(154, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(155, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(156, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(157, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(158, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(159, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(160, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(161, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(162, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(163, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(164, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(165, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(166, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(167, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(168, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(169, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(170, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(171, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(172, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(173, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(174, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(175, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(176, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(177, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(178, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(179, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(180, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(181, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(182, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(183, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(184, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(185, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(186, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(187, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(188, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(189, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(190, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(191, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(192, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(193, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(194, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(195, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(196, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(197, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(198, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(199, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(200, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(201, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(202, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(203, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(204, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(205, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(206, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(207, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(208, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(209, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(210, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(211, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(212, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(213, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(214, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(215, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(216, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(217, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(218, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(219, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(220, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(221, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(222, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(223, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(224, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(225, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(226, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(227, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(228, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(229, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(230, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(231, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(232, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(233, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(234, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(235, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(236, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(237, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(238, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(239, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(240, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(241, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(242, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(243, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(244, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(245, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(246, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(247, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(248, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(249, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(250, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(251, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(252, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(253, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(254, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(255, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(256, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(257, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(258, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(259, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(260, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(261, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(262, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(263, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(264, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(265, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(266, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(267, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(268, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(269, '123', '2023-09-30', 14, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(270, 'tlhnrtmerlkhkmbelem', '2023-09-30', 6, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(271, 'tlhnrtmerlkhkmbelem', '2023-09-30', 6, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(272, 'tlhnrtmerlkhkmbelem', '2023-09-30', 6, 'O Aluno joão vitor não sabe front-end', 'JOAO SILVA'),
(273, 'jgrekenkejbnekb', '2023-09-30', 5, 'kfbnrkrbjnrjkbjn', 'JOAO SILVA'),
(274, 'jgrekenkejbnekb', '2023-09-30', 5, 'kfbnrkrbjnrjkbjn', 'JOAO SILVA');

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
(14, 15, 11, 3, 3),
(15, 32, 2, 4, 10);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;

--
-- AUTO_INCREMENT de tabela `bimestres`
--
ALTER TABLE `bimestres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
