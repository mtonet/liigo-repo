-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Mar-2018 às 20:13
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
-- Estrutura da tabela `tbl_depoimentos`
--

CREATE TABLE `tbl_depoimentos` (
  `id` int(30) NOT NULL,
  `id_cod` varchar(32) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `profissao` varchar(250) NOT NULL,
  `depoimento` text NOT NULL,
  `avatar` varchar(80) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_depoimentos`
--

INSERT INTO `tbl_depoimentos` (`id`, `id_cod`, `nome`, `profissao`, `depoimento`, `avatar`, `status`) VALUES
(1, 'd07a8a75f8521ba4252ea19b48b7f8d1', 'Robson', 'Webmaster', 'Apenas um teste de depoimento.', 'robson.jpg', 0),
(2, 'd712529dc32f0e8f92ba2bf6bb7714b7', 'Robson Cavalcante', 'Webmaster', 'Apenas outro depoimento de teste.', '', 1),
(4, '6045361060d726bb16320fe17c4f4b2b', 'Robson Costa Cavalcante', 'Webmaster', 'Mais um depoimento de teste de hoje.', 'robson-costa-cavalcante.jpg', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_favoritos`
--

CREATE TABLE `tbl_favoritos` (
  `id` int(30) NOT NULL,
  `id_cod` varchar(32) NOT NULL,
  `id_user` varchar(32) NOT NULL,
  `id_anuncio` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_img_internas`
--

CREATE TABLE `tbl_img_internas` (
  `id` int(20) NOT NULL,
  `id_cod` varchar(32) NOT NULL,
  `avatar` varchar(80) NOT NULL,
  `image` varchar(80) NOT NULL,
  `id_pagina` varchar(32) NOT NULL,
  `pagina` varchar(250) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_img_internas`
--

INSERT INTO `tbl_img_internas` (`id`, `id_cod`, `avatar`, `image`, `id_pagina`, `pagina`, `status`) VALUES
(1, '8e037bcf66a0237237448c2fd070866a', 'thumb-931539645.jpg', '931539645.jpg', '21b2e6efe1400635f92d0320eed420a5', 'Suprimentos', 1),
(2, '388df0fc61a5db4d3f3d3f5335f92607', 'thumb-517593191.jpg', '517593191.jpg', '318b9cddcea5ebcb2c1171fe1cf277db', 'ServiÃ§os', 1);

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
-- Estrutura da tabela `tbl_slide_home`
--

CREATE TABLE `tbl_slide_home` (
  `id` int(30) NOT NULL,
  `id_cod` varchar(32) NOT NULL,
  `avatar` varchar(80) NOT NULL,
  `image` varchar(80) NOT NULL,
  `texto1` text NOT NULL,
  `texto2` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_slide_home`
--

INSERT INTO `tbl_slide_home` (`id`, `id_cod`, `avatar`, `image`, `texto1`, `texto2`, `status`) VALUES
(2, '78f98855faaea294bd00dc90056a3b48', 'thumb-911571354banner.jpg.jpg', '911571354banner.jpg.jpg', 'Texto 1 do slilde', 'Texto 2 do slilde', 1),
(3, '438d33a22bb55f4dd24be1b44716b512', 'thumb-848765425banner2.jpg.jpg', '848765425banner2.jpg.jpg', 'Texto 1 do slilde 2', 'Texto 2 do slilde 2', 1);

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id` int(30) NOT NULL,
  `id_cod` varchar(32) NOT NULL,
  `avatar` varchar(80) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `descricao` text NOT NULL,
  `facebook` varchar(300) NOT NULL,
  `twitter` varchar(300) NOT NULL,
  `linkedin` varchar(300) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` varchar(25) NOT NULL,
  `celular` varchar(25) NOT NULL,
  `cpf_cnpj` varchar(40) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `s_v` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id`, `id_cod`, `avatar`, `nome`, `descricao`, `facebook`, `twitter`, `linkedin`, `email`, `telefone`, `celular`, `cpf_cnpj`, `estado`, `cidade`, `pass`, `s_v`) VALUES
(1, '69b2dc16d375e9da8f570d07806c09c2', '', 'Teste', '', '', '', '', 'teste@teste.com', '(11) 2899-0000', '(11) 9999-0000', '00000000', 'SP', 'São Paulo', 'e10adc3949ba59abbe56e057f20f883e', '123456'),
(2, 'ee4abf29721bd208ec30282b62ddc109', '', 'Teste2', '', '', '', '', 'teste2@teste2.com', '(11) 2899-0000', '(11) 9999-0000', '00000000', 'SP', 'São Paulo', 'e10adc3949ba59abbe56e057f20f883e', '123456');

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
-- Indexes for table `tbl_depoimentos`
--
ALTER TABLE `tbl_depoimentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_favoritos`
--
ALTER TABLE `tbl_favoritos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_img_internas`
--
ALTER TABLE `tbl_img_internas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slide_home`
--
ALTER TABLE `tbl_slide_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subcategoria`
--
ALTER TABLE `tbl_subcategoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tbl_depoimentos`
--
ALTER TABLE `tbl_depoimentos`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_favoritos`
--
ALTER TABLE `tbl_favoritos`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_img_internas`
--
ALTER TABLE `tbl_img_internas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_slide_home`
--
ALTER TABLE `tbl_slide_home`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_subcategoria`
--
ALTER TABLE `tbl_subcategoria`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
