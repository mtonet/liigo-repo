-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Mar-2018 às 20:32
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_liigo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) NOT NULL,
  `login` varchar(10) NOT NULL,
  `s_v` varchar(32) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nivel` varchar(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `login`, `s_v`, `senha`, `nome`, `nivel`, `status`) VALUES
(1, 'liigo', 'liigo2018now', '4d74a70f82ae82342ed0f42fe270cd83', 'Liigo', 'master', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_categoria`
--

CREATE TABLE `tbl_categoria` (
  `id` int(20) NOT NULL,
  `id_cod` varchar(32) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_categoria`
--

INSERT INTO `tbl_categoria` (`id`, `id_cod`, `nome`, `status`) VALUES
(29, 'c614d0c0bb7cb5993004d956564b1687', 'AssistÃªncia', 1),
(30, '4633a7bd213e1971059c2ce5b76c7e0e', 'Equipamentos', 1),
(31, '318b9cddcea5ebcb2c1171fe1cf277db', 'ServiÃ§os', 1),
(32, '21b2e6efe1400635f92d0320eed420a5', 'Suprimentos', 1),
(33, '70f7e11763a006e605ec81c4a4858b10', 'Transportadoras', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_newsletter`
--

CREATE TABLE `tbl_newsletter` (
  `id` int(40) NOT NULL,
  `id_cod` varchar(32) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_newsletter`
--

INSERT INTO `tbl_newsletter` (`id`, `id_cod`, `email`) VALUES
(3, 'dce8c1f63dfc752c7502e823763179a9', 'teste@teste.com.br'),
(4, '2077089eff32e3b862efed14c4f00acb', 'teste2@teste2.com.br'),
(5, '5423cdd0c2157ff5088b8f14e494f145', 'teste3@teste3.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_subcategoria`
--

CREATE TABLE `tbl_subcategoria` (
  `id` int(20) NOT NULL,
  `id_cod` varchar(32) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `id_categoria` varchar(32) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_subcategoria`
--

INSERT INTO `tbl_subcategoria` (`id`, `id_cod`, `nome`, `id_categoria`, `categoria`, `status`) VALUES
(2, '59b98e7b270ea106f065f5ef6d44de4e', 'Teste', '4633a7bd213e1971059c2ce5b76c7e0e', 'Equipamentos', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subcategoria`
--
ALTER TABLE `tbl_subcategoria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_subcategoria`
--
ALTER TABLE `tbl_subcategoria`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
