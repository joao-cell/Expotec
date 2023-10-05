-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/10/2023 às 17:00
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

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
(286, 'AvisoTest2', '2023-09-30', 14, 'Aviso 2', 'ProfTest2'),
(287, 'AvisoTest3', '2023-09-30', 15, 'Aviso 3', 'ProfTest3'),
(288, 'AvisoTest1', '2023-09-30', 13, 'Aviso 1', 'ProfTest1'),
(289, 'AvisoTest2', '2023-09-30', 14, 'Aviso 2', 'ProfTest2'),
(290, 'AvisoTest3', '2023-09-30', 15, 'Aviso 3', 'ProfTest3'),
(291, 'AvisoTest1', '2023-09-30', 13, 'Aviso 1', 'ProfTest1'),
(292, 'AvisoTest2', '2023-09-30', 14, 'Aviso 2', 'ProfTest2'),
(293, 'AvisoTest3', '2023-09-30', 15, 'Aviso 3', 'ProfTest3'),
(294, 'AvisoTest1', '2023-09-30', 13, 'Aviso 1', 'ProfTest1'),
(295, 'AvisoTest2', '2023-09-30', 14, 'Aviso 2', 'ProfTest2'),
(296, 'AvisoTest3', '2023-09-30', 15, 'Aviso 3', 'ProfTest3'),
(297, 'AvisoTest1', '2023-09-30', 13, 'Aviso 1', 'ProfTest1'),
(298, 'AvisoTest2', '2023-09-30', 14, 'Aviso 2', 'ProfTest2'),
(299, 'AvisoTest3', '2023-09-30', 15, 'Aviso 3', 'ProfTest3'),
(300, 'AvisoTest1', '2023-09-30', 13, 'Aviso 1', 'ProfTest1'),
(301, 'AvisoTest2', '2023-09-30', 14, 'Aviso 2', 'ProfTest2'),
(302, 'AvisoTest3', '2023-09-30', 15, 'Aviso 3', 'ProfTest3'),
(303, 'AvisoTest1', '2023-09-30', 13, 'Aviso 1', 'ProfTest1'),
(304, 'AvisoTest2', '2023-09-30', 14, 'Aviso 2', 'ProfTest2'),
(305, 'AvisoTest3', '2023-09-30', 15, 'Aviso 3', 'ProfTest3'),
(306, 'AvisoTest1', '2023-09-30', 13, 'Aviso 1', 'ProfTest1'),
(307, 'AvisoTest2', '2023-09-30', 14, 'Aviso 2', 'ProfTest2'),
(308, 'AvisoTest3', '2023-09-30', 15, 'Aviso 3', 'ProfTest3'),
(309, 'AvisoTest1', '2023-09-30', 13, 'Aviso 1', 'ProfTest1'),
(310, 'AvisoTest2', '2023-09-30', 14, 'Aviso 2', 'ProfTest2'),
(311, 'AvisoTest3', '2023-09-30', 15, 'Aviso 3', 'ProfTest3'),
(312, 'AvisoTest1', '2023-09-30', 13, 'Aviso 1', 'ProfTest1'),
(313, 'AvisoTest2', '2023-09-30', 14, 'Aviso 2', 'ProfTest2'),
(314, 'AvisoTest3', '2023-09-30', 15, 'Aviso 3', 'ProfTest3'),
(315, 'AvisoTest1', '2023-09-30', 13, 'Aviso 1', 'ProfTest1'),
(316, 'AvisoTest2', '2023-09-30', 14, 'Aviso 2', 'ProfTest2'),
(317, 'AvisoTest3', '2023-09-30', 15, 'Aviso 3', 'ProfTest3'),
(318, 'AvisoTest1', '2023-09-30', 13, 'Aviso 1', 'ProfTest1'),
(319, 'AvisoTest2', '2023-09-30', 14, 'Aviso 2', 'ProfTest2'),
(320, 'AvisoTest3', '2023-09-30', 15, 'Aviso 3', 'ProfTest3'),
(321, 'test 123', '2023-09-30', 17, 'Teste', ''),
(322, 'asdasd', '2023-09-30', 17, 'Aviso top', ''),
(323, 'asdasd', '2023-09-30', 17, 'Aviso top', '');

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
(66281, 1, 3, 1, 13, 1),
(66282, 1, 3, 2, 22, 2),
(66283, 1, 3, 3, 17, 3),
(66284, 1, 3, 4, 16, 4),
(66285, 1, 3, 5, 17, 5),
(66286, 1, 3, 6, 18, 6),
(66287, 1, 3, 7, 19, 7),
(66288, 2, 3, 1, 13, 1),
(66289, 2, 3, 2, 22, 2),
(66290, 2, 3, 3, 17, 3),
(66291, 2, 3, 4, 16, 4),
(66292, 2, 3, 5, 17, 5),
(66293, 2, 3, 6, 18, 6),
(66294, 2, 3, 7, 19, 7),
(66295, 3, 3, 1, 13, 1),
(66296, 3, 3, 2, 22, 2),
(66297, 3, 3, 3, 17, 3),
(66298, 3, 3, 4, 16, 4),
(66299, 3, 3, 5, 17, 5),
(66300, 3, 3, 6, 18, 6),
(66301, 3, 3, 7, 19, 7),
(66302, 4, 3, 1, 13, 1),
(66303, 4, 3, 2, 22, 2),
(66304, 4, 3, 3, 17, 3),
(66305, 4, 3, 4, 16, 4),
(66306, 4, 3, 5, 17, 5),
(66307, 4, 3, 6, 18, 6),
(66308, 4, 3, 7, 19, 7),
(66309, 5, 3, 1, 13, 1),
(66310, 5, 3, 2, 22, 2),
(66311, 5, 3, 3, 17, 3),
(66312, 5, 3, 4, 16, 4),
(66313, 5, 3, 5, 17, 5),
(66314, 5, 3, 6, 18, 6),
(66315, 5, 3, 7, 19, 7),
(66317, 1, 4, 1, 13, 1),
(66318, 1, 4, 2, 22, 2),
(66319, 1, 4, 3, 17, 3),
(66320, 1, 4, 4, 16, 4),
(66321, 1, 4, 5, 17, 5),
(66322, 1, 4, 6, 18, 6),
(66323, 1, 4, 7, 19, 7),
(66324, 2, 4, 1, 13, 1),
(66325, 2, 4, 2, 22, 2),
(66326, 2, 4, 3, 17, 3),
(66327, 2, 4, 4, 16, 4),
(66328, 2, 4, 5, 17, 5),
(66329, 2, 4, 6, 18, 6),
(66330, 2, 4, 7, 19, 7),
(66331, 3, 4, 1, 13, 1),
(66332, 3, 4, 2, 22, 2),
(66333, 3, 4, 3, 17, 3),
(66334, 3, 4, 4, 16, 4),
(66335, 3, 4, 5, 17, 5),
(66336, 3, 4, 1, 13, 1),
(66337, 3, 4, 2, 22, 2),
(66338, 3, 4, 3, 17, 3),
(66339, 3, 4, 4, 16, 4),
(66340, 3, 4, 5, 17, 5),
(66341, 4, 4, 1, 13, 1),
(66342, 4, 4, 2, 22, 2),
(66343, 4, 4, 3, 17, 3),
(66344, 4, 4, 4, 16, 4),
(66345, 4, 4, 5, 17, 5),
(66346, 4, 4, 6, 18, 6),
(66347, 4, 4, 7, 19, 7),
(66348, 5, 4, 1, 13, 1),
(66349, 5, 4, 2, 22, 2),
(66350, 5, 4, 3, 17, 3),
(66351, 5, 4, 4, 16, 4),
(66352, 5, 4, 5, 17, 5),
(66353, 5, 4, 6, 18, 6),
(66354, 5, 4, 7, 19, 7),
(66355, 1, 5, 1, 13, 1),
(66356, 1, 5, 2, 22, 2),
(66357, 1, 5, 3, 17, 3),
(66358, 1, 5, 4, 16, 4),
(66359, 1, 5, 5, 17, 5),
(66360, 1, 5, 6, 18, 6),
(66361, 1, 5, 7, 19, 7),
(66362, 2, 5, 1, 13, 1),
(66363, 2, 5, 2, 22, 2),
(66364, 2, 5, 3, 17, 3),
(66365, 2, 5, 4, 16, 4),
(66366, 2, 5, 5, 17, 5),
(66367, 2, 5, 6, 18, 6),
(66368, 2, 5, 7, 19, 7),
(66369, 3, 5, 1, 13, 1),
(66370, 3, 5, 2, 22, 2),
(66371, 3, 5, 3, 17, 3),
(66372, 3, 5, 4, 16, 4),
(66373, 3, 5, 5, 17, 5),
(66374, 3, 5, 6, 18, 6),
(66375, 3, 5, 7, 19, 7),
(66376, 4, 5, 1, 13, 1),
(66377, 4, 5, 2, 22, 2),
(66378, 4, 5, 3, 17, 3),
(66379, 4, 5, 4, 16, 4),
(66380, 4, 5, 5, 17, 5),
(66381, 4, 5, 6, 18, 6),
(66382, 4, 5, 7, 19, 7),
(66383, 5, 5, 1, 13, 1),
(66384, 5, 5, 2, 22, 2),
(66385, 5, 5, 3, 17, 3),
(66386, 5, 5, 4, 16, 4),
(66387, 5, 5, 5, 17, 5),
(66388, 5, 5, 6, 18, 6),
(66389, 5, 5, 7, 19, 7),
(66390, 1, 6, 1, 13, 1),
(66391, 1, 6, 2, 22, 2),
(66392, 1, 6, 3, 17, 3),
(66393, 1, 6, 4, 16, 4),
(66394, 1, 6, 5, 17, 5),
(66395, 1, 6, 6, 18, 6),
(66396, 1, 6, 7, 19, 7),
(66397, 2, 6, 1, 13, 1),
(66398, 2, 6, 2, 22, 2),
(66399, 2, 6, 3, 17, 3),
(66400, 2, 6, 4, 16, 4),
(66401, 2, 6, 5, 17, 5),
(66402, 2, 6, 6, 18, 6),
(66403, 2, 6, 7, 19, 7),
(66404, 3, 6, 1, 13, 1),
(66405, 3, 6, 2, 22, 2),
(66406, 3, 6, 3, 17, 3),
(66407, 3, 6, 4, 16, 4),
(66408, 3, 6, 5, 17, 5),
(66409, 3, 6, 6, 18, 6),
(66410, 3, 6, 7, 19, 7),
(66411, 4, 6, 1, 13, 1),
(66412, 4, 6, 2, 22, 2),
(66413, 4, 6, 3, 17, 3),
(66414, 4, 6, 4, 16, 4),
(66415, 4, 6, 5, 17, 5),
(66416, 4, 6, 6, 18, 6),
(66417, 4, 6, 7, 19, 7),
(66418, 5, 6, 1, 13, 1),
(66419, 5, 6, 2, 22, 2),
(66420, 5, 6, 3, 17, 3),
(66421, 5, 6, 4, 16, 4),
(66422, 5, 6, 5, 17, 5),
(66423, 5, 6, 6, 18, 6),
(66424, 5, 6, 7, 19, 7),
(66425, 1, 7, 1, 13, 1),
(66426, 1, 7, 2, 22, 2),
(66427, 1, 7, 3, 17, 3),
(66428, 1, 7, 4, 16, 4),
(66429, 1, 7, 5, 17, 5),
(66430, 1, 7, 6, 18, 6),
(66431, 1, 7, 7, 19, 7),
(66432, 2, 7, 1, 13, 1),
(66433, 2, 7, 2, 22, 2),
(66434, 2, 7, 3, 17, 3),
(66435, 2, 7, 4, 16, 4),
(66436, 2, 7, 5, 17, 5),
(66437, 2, 7, 6, 18, 6),
(66438, 2, 7, 7, 19, 7),
(66439, 3, 7, 1, 13, 1),
(66440, 3, 7, 2, 22, 2),
(66441, 3, 7, 3, 17, 3),
(66442, 3, 7, 4, 16, 4),
(66443, 3, 7, 5, 17, 5),
(66444, 3, 7, 6, 18, 6),
(66445, 3, 7, 7, 19, 7),
(66446, 4, 7, 1, 13, 1),
(66447, 4, 7, 2, 22, 2),
(66448, 4, 7, 3, 17, 3),
(66449, 4, 7, 4, 16, 4),
(66450, 4, 7, 5, 17, 5),
(66451, 4, 7, 6, 18, 6),
(66452, 4, 7, 7, 19, 7),
(66453, 5, 7, 1, 13, 1),
(66454, 5, 7, 2, 22, 2),
(66455, 5, 7, 3, 17, 3),
(66456, 5, 7, 4, 16, 4),
(66457, 5, 7, 5, 17, 5),
(66458, 5, 7, 6, 18, 6),
(66459, 5, 7, 7, 19, 7),
(66460, 1, 8, 1, 13, 1),
(66461, 1, 8, 2, 22, 2),
(66462, 1, 8, 3, 17, 3),
(66463, 1, 8, 4, 16, 4),
(66464, 1, 8, 5, 17, 5),
(66465, 1, 8, 6, 18, 6),
(66466, 1, 8, 7, 19, 7),
(66467, 2, 8, 1, 13, 1),
(66468, 2, 8, 2, 22, 2),
(66469, 2, 8, 3, 17, 3),
(66470, 2, 8, 4, 16, 4),
(66471, 2, 8, 5, 17, 5),
(66472, 2, 8, 6, 18, 6),
(66473, 2, 8, 7, 19, 7),
(66474, 3, 8, 1, 13, 1),
(66475, 3, 8, 2, 22, 2),
(66476, 3, 8, 3, 17, 3),
(66477, 3, 8, 4, 16, 4),
(66478, 3, 8, 5, 17, 5),
(66479, 3, 8, 6, 18, 6),
(66480, 3, 8, 7, 19, 7),
(66481, 4, 8, 1, 13, 1),
(66482, 4, 8, 2, 22, 2),
(66483, 4, 8, 3, 17, 3),
(66484, 4, 8, 4, 16, 4),
(66485, 4, 8, 5, 17, 5),
(66486, 4, 8, 6, 18, 6),
(66487, 4, 8, 7, 19, 7),
(66488, 5, 8, 1, 13, 1),
(66489, 5, 8, 2, 22, 2),
(66490, 5, 8, 3, 17, 3),
(66491, 5, 8, 4, 16, 4),
(66492, 5, 8, 5, 17, 5),
(66493, 5, 8, 6, 18, 6),
(66494, 5, 8, 7, 19, 7),
(66495, 1, 9, 1, 13, 1),
(66496, 1, 9, 2, 22, 2),
(66497, 1, 9, 3, 17, 3),
(66498, 1, 9, 4, 16, 4),
(66499, 1, 9, 5, 17, 5),
(66500, 1, 9, 6, 18, 6),
(66501, 1, 9, 7, 19, 7),
(66502, 2, 9, 1, 13, 1),
(66503, 2, 9, 2, 22, 2),
(66504, 2, 9, 3, 17, 3),
(66505, 2, 9, 4, 16, 4),
(66506, 2, 9, 5, 17, 5),
(66507, 2, 9, 6, 18, 6),
(66508, 2, 9, 7, 19, 7),
(66509, 3, 9, 1, 13, 1),
(66510, 3, 9, 2, 22, 2),
(66511, 3, 9, 3, 17, 3),
(66512, 3, 9, 4, 16, 4),
(66513, 3, 9, 5, 17, 5),
(66514, 3, 9, 6, 18, 6),
(66515, 3, 9, 7, 19, 7),
(66516, 4, 9, 1, 13, 1),
(66517, 4, 9, 2, 22, 2),
(66518, 4, 9, 3, 17, 3),
(66519, 4, 9, 4, 16, 4),
(66520, 4, 9, 5, 17, 5),
(66521, 4, 9, 6, 18, 6),
(66522, 4, 9, 7, 19, 7),
(66523, 5, 9, 1, 13, 1),
(66524, 5, 9, 2, 22, 2),
(66525, 5, 9, 3, 17, 3),
(66526, 5, 9, 4, 16, 4),
(66527, 5, 9, 5, 17, 5),
(66528, 5, 9, 6, 18, 6),
(66529, 5, 9, 7, 19, 7),
(66530, 1, 10, 1, 13, 1),
(66531, 1, 10, 2, 22, 2),
(66532, 1, 10, 3, 17, 3),
(66533, 1, 10, 4, 16, 4),
(66534, 1, 10, 5, 17, 5),
(66535, 1, 10, 6, 18, 6),
(66536, 1, 10, 7, 19, 7),
(66537, 2, 10, 1, 13, 1),
(66538, 2, 10, 2, 22, 2),
(66539, 2, 10, 3, 17, 3),
(66540, 2, 10, 4, 16, 4),
(66541, 2, 10, 5, 17, 5),
(66542, 2, 10, 6, 18, 6),
(66543, 2, 10, 7, 19, 7),
(66544, 3, 10, 1, 13, 1),
(66545, 3, 10, 2, 22, 2),
(66546, 3, 10, 3, 17, 3),
(66547, 3, 10, 4, 16, 4),
(66548, 3, 10, 5, 17, 5),
(66549, 3, 10, 6, 18, 6),
(66550, 3, 10, 7, 19, 7),
(66551, 4, 10, 1, 13, 1),
(66552, 4, 10, 2, 22, 2),
(66553, 4, 10, 3, 17, 3),
(66554, 4, 10, 4, 16, 4),
(66555, 4, 10, 5, 17, 5),
(66556, 4, 10, 6, 18, 6),
(66557, 4, 10, 7, 19, 7),
(66558, 5, 10, 1, 13, 1),
(66559, 5, 10, 2, 22, 2),
(66560, 5, 10, 3, 17, 3),
(66561, 5, 10, 4, 16, 4),
(66562, 5, 10, 5, 17, 5),
(66563, 5, 10, 6, 18, 6),
(66564, 5, 10, 7, 19, 7),
(66565, 1, 11, 1, 13, 1),
(66566, 1, 11, 2, 22, 2),
(66567, 1, 11, 3, 17, 3),
(66568, 1, 11, 4, 16, 4),
(66569, 1, 11, 5, 17, 5),
(66570, 1, 11, 6, 18, 6),
(66571, 1, 11, 7, 19, 7),
(66572, 2, 11, 1, 13, 1),
(66573, 2, 11, 2, 22, 2),
(66574, 2, 11, 3, 17, 3),
(66575, 2, 11, 4, 16, 4),
(66576, 2, 11, 5, 17, 5),
(66577, 2, 11, 6, 18, 6),
(66578, 2, 11, 7, 19, 7),
(66579, 3, 11, 1, 13, 1),
(66580, 3, 11, 2, 22, 2),
(66581, 3, 11, 3, 17, 3),
(66582, 3, 11, 4, 16, 4),
(66583, 3, 11, 5, 17, 5),
(66584, 3, 11, 6, 18, 6),
(66585, 3, 11, 7, 19, 7),
(66586, 4, 11, 1, 13, 1),
(66587, 4, 11, 2, 22, 2),
(66588, 4, 11, 3, 17, 3),
(66589, 4, 11, 4, 16, 4),
(66590, 4, 11, 5, 17, 5),
(66591, 4, 11, 6, 18, 6),
(66592, 4, 11, 7, 19, 7),
(66593, 5, 11, 1, 13, 1),
(66594, 5, 11, 2, 22, 2),
(66595, 5, 11, 3, 17, 3),
(66596, 5, 11, 4, 16, 4),
(66597, 5, 11, 5, 17, 5),
(66598, 5, 11, 6, 18, 6),
(66599, 5, 11, 7, 19, 7),
(66600, 1, 12, 1, 13, 1),
(66601, 1, 12, 2, 22, 2),
(66602, 1, 12, 3, 17, 3),
(66603, 1, 12, 4, 16, 4),
(66604, 1, 12, 5, 17, 5),
(66605, 1, 12, 6, 18, 6),
(66606, 1, 12, 7, 19, 7),
(66607, 1, 12, 1, 13, 1),
(66608, 1, 12, 2, 22, 2),
(66609, 1, 12, 3, 17, 3),
(66610, 1, 12, 4, 16, 4),
(66611, 1, 12, 5, 17, 5),
(66612, 1, 12, 6, 18, 6),
(66613, 1, 12, 7, 19, 7),
(66614, 2, 12, 1, 13, 1),
(66615, 2, 12, 2, 22, 2),
(66616, 2, 12, 3, 17, 3),
(66617, 2, 12, 4, 16, 4),
(66618, 2, 12, 5, 17, 5),
(66619, 2, 12, 6, 18, 6),
(66620, 2, 12, 7, 19, 7),
(66621, 3, 12, 1, 13, 1),
(66622, 3, 12, 2, 22, 2),
(66623, 3, 12, 3, 17, 3),
(66624, 3, 12, 4, 16, 4),
(66625, 3, 12, 5, 17, 5),
(66626, 3, 12, 6, 18, 6),
(66627, 3, 12, 7, 19, 7),
(66628, 4, 12, 1, 13, 1),
(66629, 4, 12, 2, 22, 2),
(66630, 4, 12, 3, 17, 3),
(66631, 4, 12, 4, 16, 4),
(66632, 4, 12, 5, 17, 5),
(66633, 4, 12, 6, 18, 6),
(66634, 4, 12, 7, 19, 7),
(66635, 5, 12, 1, 13, 1),
(66636, 5, 12, 2, 22, 2),
(66637, 5, 12, 3, 17, 3),
(66638, 5, 12, 4, 16, 4),
(66639, 5, 12, 5, 17, 5),
(66640, 5, 12, 6, 18, 6),
(66641, 5, 12, 7, 19, 7),
(66642, 1, 13, 1, 13, 1),
(66643, 1, 13, 2, 22, 2),
(66644, 1, 13, 3, 17, 3),
(66645, 1, 13, 4, 16, 4),
(66646, 1, 13, 5, 17, 5),
(66647, 1, 13, 6, 18, 6),
(66648, 1, 13, 7, 19, 7),
(66649, 2, 13, 1, 13, 1),
(66650, 2, 13, 2, 22, 2),
(66651, 2, 13, 3, 17, 3),
(66652, 2, 13, 4, 16, 4),
(66653, 2, 13, 5, 17, 5),
(66654, 2, 13, 6, 18, 6),
(66655, 2, 13, 7, 19, 7),
(66656, 3, 13, 1, 13, 1),
(66657, 3, 13, 2, 22, 2),
(66658, 3, 13, 3, 17, 3),
(66659, 3, 13, 4, 16, 4),
(66660, 3, 13, 5, 17, 5),
(66661, 3, 13, 6, 18, 6),
(66662, 3, 13, 7, 19, 7),
(66663, 4, 13, 1, 13, 1),
(66664, 4, 13, 2, 22, 2),
(66665, 4, 13, 3, 17, 3),
(66666, 4, 13, 4, 16, 4),
(66667, 4, 13, 5, 17, 5),
(66668, 4, 13, 6, 18, 6),
(66669, 4, 13, 7, 19, 7),
(66670, 5, 13, 1, 13, 1),
(66671, 5, 13, 2, 22, 2),
(66672, 5, 13, 3, 17, 3),
(66673, 5, 13, 4, 16, 4),
(66674, 5, 13, 5, 17, 5),
(66675, 5, 13, 6, 18, 6),
(66676, 5, 13, 7, 19, 7),
(66677, 1, 14, 1, 13, 1),
(66678, 1, 14, 2, 22, 2),
(66679, 1, 14, 3, 17, 3),
(66680, 1, 14, 4, 16, 4),
(66681, 1, 14, 5, 17, 5),
(66682, 1, 14, 6, 18, 6),
(66683, 1, 14, 7, 19, 7),
(66684, 2, 14, 1, 13, 1),
(66685, 2, 14, 2, 22, 2),
(66686, 2, 14, 3, 17, 3),
(66687, 2, 14, 4, 16, 4),
(66688, 2, 14, 5, 17, 5),
(66689, 2, 14, 6, 18, 6),
(66690, 2, 14, 7, 19, 7),
(66691, 3, 14, 1, 13, 1),
(66692, 3, 14, 2, 22, 2),
(66693, 3, 14, 3, 17, 3),
(66694, 3, 14, 4, 16, 4),
(66695, 3, 14, 5, 17, 5),
(66696, 3, 14, 6, 18, 6),
(66697, 3, 14, 7, 19, 7),
(66698, 4, 14, 1, 13, 1),
(66699, 4, 14, 2, 22, 2),
(66700, 4, 14, 3, 17, 3),
(66701, 4, 14, 4, 16, 4),
(66702, 4, 14, 5, 17, 5),
(66703, 4, 14, 6, 18, 6),
(66704, 4, 14, 7, 19, 7),
(66705, 5, 14, 1, 13, 1),
(66706, 5, 14, 2, 22, 2),
(66707, 5, 14, 3, 17, 3),
(66708, 5, 14, 4, 16, 4),
(66709, 5, 14, 5, 17, 5),
(66710, 5, 14, 6, 18, 6),
(66711, 5, 14, 7, 19, 7),
(66712, 1, 15, 1, 13, 1),
(66713, 1, 15, 2, 22, 2),
(66714, 1, 15, 3, 17, 3),
(66715, 1, 15, 4, 16, 4),
(66716, 1, 15, 5, 17, 5),
(66717, 1, 15, 6, 18, 6),
(66718, 1, 15, 7, 19, 7),
(66719, 2, 15, 1, 13, 1),
(66720, 2, 15, 2, 22, 2),
(66721, 2, 15, 3, 17, 3),
(66722, 2, 15, 4, 16, 4),
(66723, 2, 15, 5, 17, 5),
(66724, 2, 15, 6, 18, 6),
(66725, 2, 15, 7, 19, 7),
(66726, 3, 15, 1, 13, 1),
(66727, 3, 15, 2, 22, 2),
(66728, 3, 15, 3, 17, 3),
(66729, 3, 15, 4, 16, 4),
(66730, 3, 15, 5, 17, 5),
(66731, 3, 15, 6, 18, 6),
(66732, 3, 15, 7, 19, 7),
(66733, 4, 15, 1, 13, 1),
(66734, 4, 15, 2, 22, 2),
(66735, 4, 15, 3, 17, 3),
(66736, 4, 15, 4, 16, 4),
(66737, 4, 15, 5, 17, 5),
(66738, 4, 15, 6, 18, 6),
(66739, 4, 15, 7, 19, 7),
(66740, 5, 15, 1, 13, 1),
(66741, 5, 15, 2, 22, 2),
(66742, 5, 15, 3, 17, 3),
(66743, 5, 15, 4, 16, 4),
(66744, 5, 15, 5, 17, 5),
(66745, 5, 15, 6, 18, 6),
(66746, 5, 15, 7, 19, 7),
(66747, 1, 16, 1, 13, 1),
(66748, 1, 16, 2, 22, 2),
(66749, 1, 16, 3, 17, 3),
(66750, 1, 16, 4, 16, 4),
(66751, 1, 16, 5, 17, 5),
(66752, 1, 16, 6, 18, 6),
(66753, 1, 16, 7, 19, 7),
(66754, 2, 16, 1, 13, 1),
(66755, 2, 16, 2, 22, 2),
(66756, 2, 16, 3, 17, 3),
(66757, 2, 16, 4, 16, 4),
(66758, 2, 16, 5, 17, 5),
(66759, 2, 16, 6, 18, 6),
(66760, 2, 16, 7, 19, 7),
(66761, 3, 16, 1, 13, 1),
(66762, 3, 16, 2, 22, 2),
(66763, 3, 16, 3, 17, 3),
(66764, 3, 16, 4, 16, 4),
(66765, 3, 16, 5, 17, 5),
(66766, 3, 16, 6, 18, 6),
(66767, 3, 16, 7, 19, 7),
(66768, 4, 16, 1, 13, 1),
(66769, 4, 16, 2, 22, 2),
(66770, 4, 16, 3, 17, 3),
(66771, 4, 16, 4, 16, 4),
(66772, 4, 16, 5, 17, 5),
(66773, 4, 16, 6, 18, 6),
(66774, 4, 16, 7, 19, 7),
(66775, 5, 16, 1, 13, 1),
(66776, 5, 16, 2, 22, 2),
(66777, 5, 16, 3, 17, 3),
(66778, 5, 16, 4, 16, 4),
(66779, 5, 16, 5, 17, 5),
(66780, 5, 16, 6, 18, 6),
(66781, 5, 16, 7, 19, 7),
(66782, 1, 17, 1, 13, 1),
(66783, 1, 17, 2, 22, 2),
(66784, 1, 17, 3, 17, 3),
(66785, 1, 17, 4, 16, 4),
(66786, 1, 17, 5, 17, 5),
(66787, 1, 17, 6, 18, 6),
(66788, 1, 17, 7, 19, 7),
(66789, 2, 17, 1, 13, 1),
(66790, 2, 17, 2, 22, 2),
(66791, 2, 17, 3, 17, 3),
(66792, 2, 17, 4, 16, 4),
(66793, 2, 17, 5, 17, 5),
(66794, 2, 17, 6, 18, 6),
(66795, 2, 17, 7, 19, 7),
(66796, 3, 17, 1, 13, 1),
(66797, 3, 17, 2, 22, 2),
(66798, 3, 17, 3, 17, 3),
(66799, 3, 17, 4, 16, 4),
(66800, 3, 17, 5, 17, 5),
(66801, 3, 17, 6, 18, 6),
(66802, 3, 17, 7, 19, 7),
(66803, 4, 17, 1, 13, 1),
(66804, 4, 17, 2, 22, 2),
(66805, 4, 17, 3, 17, 3),
(66806, 4, 17, 4, 16, 4),
(66807, 4, 17, 5, 17, 5),
(66808, 4, 17, 6, 18, 6),
(66809, 4, 17, 7, 19, 7),
(66810, 5, 17, 1, 13, 1),
(66811, 5, 17, 2, 22, 2),
(66812, 5, 17, 3, 17, 3),
(66813, 5, 17, 4, 16, 4),
(66814, 5, 17, 5, 17, 5),
(66815, 5, 17, 6, 18, 6),
(66816, 5, 17, 7, 19, 7);

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
(15, 32, 2, 4, 10),
(16, 15, 12, 4, 5),
(17, 15, 1, 1, 10),
(18, 15, 1, 1, 9),
(19, 21, 1, 1, 10);

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
(3, 'Fundamental 1'),
(4, 'Fundamental 2'),
(5, 'Fundamental 3'),
(6, 'Fundamental 4'),
(7, 'Fundamental 5'),
(8, 'Fundamental 6'),
(9, 'Fundamental 7'),
(10, 'Fundamental 8'),
(11, 'Fundamental 9'),
(12, 'Segundo Ensino Médio A'),
(13, 'Primeiro Ensino Médio B'),
(14, 'Primeiro Ensino Médio A'),
(15, 'Segundo Ensino Médio B'),
(16, 'Terceiro Ensino Médio A'),
(17, 'Terceiro Ensino Médio B');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT de tabela `bimestres`
--
ALTER TABLE `bimestres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66817;

--
-- AUTO_INCREMENT de tabela `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
