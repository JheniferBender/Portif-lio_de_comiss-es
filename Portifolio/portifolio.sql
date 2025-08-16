-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16/08/2025 às 21:29
-- Versão do servidor: 8.0.42
-- Versão do PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `portifolio`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `artes`
--

DROP TABLE IF EXISTS `artes`;
CREATE TABLE IF NOT EXISTS `artes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `plataforma` varchar(100) DEFAULT NULL,
  `tempo_execucao` varchar(50) DEFAULT NULL,
  `ano_criacao` year DEFAULT NULL,
  `tipo_desenho` varchar(50) DEFAULT NULL,
  `proprietario` varchar(255) DEFAULT NULL,
  `link_proprietario` varchar(255) DEFAULT NULL,
  `descricao` text,
  `data_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `artes`
--

INSERT INTO `artes` (`id`, `titulo`, `imagem`, `plataforma`, `tempo_execucao`, `ano_criacao`, `tipo_desenho`, `proprietario`, `link_proprietario`, `descricao`, `data_cadastro`) VALUES
(1, 'Lune', 'img/uploads/BB.png', 'Ibis Paint X', '10 horas e 47min', '2023', 'Icon | Renderizado', 'Astra Soul', NULL, 'Uma arte que busca representar a magia e a fantasia em um único cenário repleto de cores.', '2025-08-10 22:19:37'),
(2, 'Lobi Rain', 'img/uploads/LobiRain.png', 'Ibis Paint X', '5 horas', '2022', 'Full Body | Renderizado', '@Lobinha_Ana | Astra Soul', 'https://instagram.com/lobinha_ana', 'Uma arte que demostra a chuva de uma forma nostálgica e alegre.', '2025-08-12 20:06:29'),
(3, 'Zunzo', 'img/uploads/Zunzo Concept.png', 'Ibis Paint X', '22h e 49min', '2025', 'Full Body | Concept Art', 'Astra Soul', NULL, 'Uma mistura divertida de Dragão e Jamanta. Eis a obra prima \'Dracomanta\'.', '2025-08-12 20:12:00'),
(4, 'Neory', 'img/uploads/Neory Concept.png', 'Ibis Paint X', '39h 14min', '2025', 'Full Body | Concept Art', '@Lobinha_Ana | Astra Soul', 'https://instagram.com/lobinha_ana', 'Neory é uma criatura rara de uma fauna mística — uma fusão graciosa de serpente e coruja.', '2025-08-12 20:15:33'),
(5, 'Fallen', 'img/uploads/Fall.png', 'Ibis Paint X', '24h 28min', '2025', 'Full Body | Renderizado', 'Astra Soul', NULL, 'Fallen aquela que domina os céus!', '2025-08-12 20:48:11'),
(6, 'Void', 'img/uploads/void.png', 'Ibis Paint X', '8h 32min', '2023', 'Icon | Renderizado', '@pinkiewolfyt | Astra Soul', 'https://www.instagram.com/pinkiewolfyt/', 'Um ataque feito durante o Art Fight de 2023 para PinkieWolfYT.', '2025-08-12 20:53:56'),
(7, 'Chalia', 'img/uploads/demon.png', 'Ibis Paint X', '9h 25min', '2023', 'Icon | Renderizado', 'ConflictInMyBrain | Astra Soul', NULL, 'Um ataque feito durante o Art Fight de 2023 para ConflictInMyBrain.', '2025-08-12 20:57:54'),
(8, 'Comets of Burning Light', 'img/uploads/iterator.png', 'Ibis Paint X', '31h 23min', '2023', 'Full Body | Renderizado', 'VeLLHale | Astra Soul', 'https://toyhou.se/VeLLHale', 'Um ataque feito durante o Art Fight de 2023 para VeLLHale.', '2025-08-12 21:49:17'),
(9, 'Luke', 'img/uploads/luke.png', 'Ibis Paint X', '7h 14min', '2025', 'Icon | Renderizado', 'realzester999 | Astra Soul', NULL, 'Um ataque feito durante o Art Fight de 2025 para realzester999', '2025-08-12 21:52:29'),
(10, 'Pookie', 'img/uploads/Pookie.png', 'Ibis Paint X', '5h 16min', '2023', 'Full Body | Renderizado', 'Lambpaws | Astra Soul', 'https://toyhou.se/Lambpaws', 'Um ataque feito durante o Art Fight de 2023 para Lambpaws.', '2025-08-12 21:55:32'),
(11, 'Rixana', 'img/uploads/rixana.png', 'Ibis Paint X', '7h 8min', '2025', 'Icon | Renderizado', 'CapMatArt | Astra Soul', 'https://www.instagram.com/cap.mat_art/', 'um ataque feito durante o Art Fight de 2025 para CapMatArt', '2025-08-12 21:57:39'),
(12, 'Yoseff', 'img/uploads/Yoseff.png', 'Ibis Paint X', '11h 14min', '2025', 'Icon | Renderizado', 'giovanne_sartori | Astra Soul', 'https://www.instagram.com/yourlocal.giovanne/', 'Uma fanart feita para um grande amigo.', '2025-08-12 22:05:01'),
(13, 'Adronus', 'img/uploads/Adron.png', 'Ibis Paint X', '6h 28min', '2025', 'Icon | Renderizado', 'Astra Soul', NULL, 'O guardião daqueles que vagam...', '2025-08-12 22:07:01'),
(14, 'Flay', 'img/uploads/Flay.png', 'Ibis Paint X', '12 horas', '2025', 'Icon | Renderizado', 'Astra Soul', NULL, 'Uma personagem fofa e doce.', '2025-08-12 22:08:26'),
(15, 'Naka', 'img/uploads/Naka.png', 'Ibis Paint X', '18h 37min', '2025', 'Full Body | Renderizado', 'marmitrex | Astra Soul', 'https://artfight.net/~Marmitrex', 'Uma fanart de um personagem cômico feita para um grande amigo.', '2025-08-12 22:11:14'),
(16, 'Flame', 'img/uploads/Flame.png', 'Ibis Paint X', '15h 36min', '2023', 'Half Body | Renderizado', 'mcool124 | Astra Soul', 'https://www.instagram.com/mcool_124/', 'Um ataque feito durante o Art Fight de 2023 para mcool124.', '2025-08-12 22:14:23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
