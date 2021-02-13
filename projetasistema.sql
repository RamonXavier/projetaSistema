-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Nov-2020 às 19:58
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetasistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carga_horaria`
--

CREATE TABLE `carga_horaria` (
  `cod_proj` int(11) DEFAULT NULL,
  `mat` int(11) DEFAULT NULL,
  `c_horaria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `carga_horaria`
--

INSERT INTO `carga_horaria` (`cod_proj`, `mat`, `c_horaria`) VALUES
(1, 11, 251),
(2, 111, 125),
(3, 101, 59),
(2, 209, 95),
(5, 129, 125),
(4, 149, 985),
(6, 254, 259),
(2, 165, 354),
(2, 101, 30),
(14, 959, 125),
(15, 959, 125),
(19, 961, 125);

-- --------------------------------------------------------

--
-- Estrutura da tabela `depto`
--

CREATE TABLE `depto` (
  `cod_depto` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8_bin NOT NULL,
  `endereco` varchar(200) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `depto`
--

INSERT INTO `depto` (`cod_depto`, `nome`, `endereco`) VALUES
(123, 'Planejamento', 'RUA A, 25'),
(125, 'Segurança', 'RUA C, 125'),
(221, 'Administrativo', 'RUA B, 36'),
(232, 'Suprimentos', 'RUA G, 127'),
(257, 'Recursos Humanos', 'RUA D, 225'),
(854, 'Tecnologia', 'RUA F, 27'),
(859, 'OnBoarding', 'RUA E, 285');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empregado`
--

CREATE TABLE `empregado` (
  `mat` int(11) NOT NULL,
  `nome_emp` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `endereco` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `rg` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `cpf` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `cod_depto` varchar(200) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `empregado`
--

INSERT INTO `empregado` (`mat`, `nome_emp`, `endereco`, `rg`, `cpf`, `cod_depto`) VALUES
(11, 'JOAO', 'AV. CLIMERIO N. 45', '2781230', '126543987-11', '123'),
(101, 'JOAQUIM', 'RUA DA PRAIA S/N', '1582650', '168572598-55', '123'),
(103, 'ERICA', 'RUA FLORIANO, 982', '1236578', '367895128-57', '8593'),
(111, 'CARLOS', 'AV. PAULISTA 1236', '1215191', '126874598-58 ', '221'),
(129, 'MARIA', 'RUA PADRE CAFÉ, 125', '1800589', '125987720-18', '221'),
(149, 'JOSE', 'RUA LOPES, 154', '1245789', '854966521-14', '859'),
(165, 'PAULA', 'RUA SILVA JARDIM, 2', '1534648', '363524198-55', '232'),
(167, 'JULIA', 'RUA JK, 1512', '1805874', '369857198-51', '854'),
(185, 'MARCOS', 'RUA LOPES MENDES 152', '1115489', '364578518-66', '854'),
(194, 'EDUARDO', 'RUA LOPES MENDES 578', '1789589', '195678968-55', '232'),
(209, 'ANA', 'RUA LOPES MENDES 12', '1800589', '369857198-55', '221'),
(254, 'PEDRO', 'RUA BATISTA, 222', '3601551', '124567898-55', '221'),
(259, 'PEDRO', 'RUA BOM JARDIM, 254', '1875921', '361254978-55', '232'),
(296, 'PAULO', 'RUA RIO BRANCO, 1284', '1459758', '125478998-15', '221'),
(952, 'ANDREIA', 'RUA MARECHAL, 112', '1254698', '325145698-55', '859'),
(959, 'teste', '123', '123', '123', '123'),
(960, 'teste', '123', '123', '123', '221'),
(961, 'Zilney silva', 'Rua teste 14', 'mg 123456', '987.654.321-00', '854');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empregado_dependente`
--

CREATE TABLE `empregado_dependente` (
  `mat_emp` int(11) DEFAULT NULL,
  `dependente` int(11) DEFAULT NULL,
  `nome_dep` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `data_nasc` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `tipo` varchar(30) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `empregado_dependente`
--

INSERT INTO `empregado_dependente` (`mat_emp`, `dependente`, `nome_dep`, `data_nasc`, `tipo`) VALUES
(11, 1, 'Joana', '04/11/1989', 'Cônjuge'),
(11, 1, 'Joana', '04/11/1989', 'Cônjuge'),
(11, 2, 'Marcos', '01/04/2009', 'Filho(a)'),
(11, 3, 'Mariana', '08/09/2011', 'Filho(a)'),
(103, 1, 'Matheus', '09/04/2006', 'Filho(a)'),
(129, 1, 'João Carlos', '04/05/1978', 'Cônjuge'),
(952, 1, 'Sabrina', '2007-05-02', 'Filho');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `codigo` int(11) NOT NULL,
  `descricao` varchar(200) COLLATE utf8_bin NOT NULL,
  `cod_depto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`codigo`, `descricao`, `cod_depto`) VALUES
(14, 'ENGENHARIA', 123),
(15, 'URBANISMO', 221),
(16, 'TRANSPORTE', 123),
(17, 'INFORMÁTICA', 854),
(18, 'TELEMARKETING', 859),
(19, 'REDES', 232),
(22, 'Projeto teste mocadk', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `depto`
--
ALTER TABLE `depto`
  ADD PRIMARY KEY (`cod_depto`);

--
-- Índices para tabela `empregado`
--
ALTER TABLE `empregado`
  ADD PRIMARY KEY (`mat`);

--
-- Índices para tabela `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `depto`
--
ALTER TABLE `depto`
  MODIFY `cod_depto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=863;

--
-- AUTO_INCREMENT de tabela `empregado`
--
ALTER TABLE `empregado`
  MODIFY `mat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=962;

--
-- AUTO_INCREMENT de tabela `projeto`
--
ALTER TABLE `projeto`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
