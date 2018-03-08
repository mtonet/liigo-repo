-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Mar-2018 às 21:10
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
-- Estrutura da tabela `tbl_anuncio`
--

CREATE TABLE `tbl_anuncio` (
  `id` int(30) NOT NULL,
  `id_cod` varchar(32) NOT NULL,
  `titulo` varchar(280) NOT NULL,
  `preco` float NOT NULL,
  `id_categoria` varchar(32) NOT NULL,
  `categoria` varchar(280) NOT NULL,
  `id_marca` varchar(32) NOT NULL,
  `marca` varchar(280) NOT NULL,
  `id_cabeca_impressao` varchar(32) NOT NULL,
  `cabeca_impressao` varchar(280) NOT NULL,
  `id_tecnologia` varchar(32) NOT NULL,
  `tecnologia` varchar(280) NOT NULL,
  `id_condicao` varchar(32) NOT NULL,
  `condicao` varchar(280) NOT NULL,
  `descricao` text NOT NULL,
  `avatar` varchar(80) NOT NULL,
  `image` varchar(80) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_anuncio`
--

INSERT INTO `tbl_anuncio` (`id`, `id_cod`, `titulo`, `preco`, `id_categoria`, `categoria`, `id_marca`, `marca`, `id_cabeca_impressao`, `cabeca_impressao`, `id_tecnologia`, `tecnologia`, `id_condicao`, `condicao`, `descricao`, `avatar`, `image`, `status`) VALUES
(1, '477eaf1f41c975903e0cff02a6693808', 'Teste de anÃºncio', 1500, '4633a7bd213e1971059c2ce5b76c7e0e', 'Equipamentos', '62a8d6e346c28b05db8f9c92ffd9bec9', 'Opcao de teste Marca 1', '7e244d026b7821dff4f3a2330b76423d', 'Opcao de teste Cabeca de impressao 1', '2f3f17241f591954d666f2942383adcf', 'Opcao de teste Tecnologia 1', '891f1f215634f0abadfe3f39c4504b77', 'Opcao de teste Condicao equipamento 1', 'teste de descriÃ§Ã£o.', '', '', 0),
(13, '165784552a161a8d2a6752623ad2114c', 'Teste de anÃºncio 2', 1500, '4633a7bd213e1971059c2ce5b76c7e0e', 'Equipamentos', '2b5178fa058b9a1dc704473358ae8621', 'Opcao de teste Marca 2', '7e244d026b7821dff4f3a2330b76423d', 'Opcao de teste Cabeca de impressao 1', 'd86fc0a6010ec250a2b3dd1daca32b81', 'Opcao de teste Tecnologia 2', '891f1f215634f0abadfe3f39c4504b77', 'Opcao de teste Condicao equipamento 1', 'Testeeee', 'thumb-339724691-teste-de-anuncio-2.jpg', '339724691-teste-de-anuncio-2.jpg', 0),
(15, '419399bc42e54e0061dc0728737f0fc6', 'Teste de anÃºncio 3', 155000, '4633a7bd213e1971059c2ce5b76c7e0e', 'Equipamentos', '2b5178fa058b9a1dc704473358ae8621', 'Opcao de teste Marca 2', '7e244d026b7821dff4f3a2330b76423d', 'Opcao de teste Cabeca de impressao 1', '2f3f17241f591954d666f2942383adcf', 'Opcao de teste Tecnologia 1', 'f379851a90283d74318c072f46bd56c4', 'Opcao de teste Condicao equipamento 2', 'testeeeeee now', 'thumb-1111329622-teste-de-anuncio-3.jpg', '1111329622-teste-de-anuncio-3.jpg', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_anuncio_galeria`
--

CREATE TABLE `tbl_anuncio_galeria` (
  `id` int(30) NOT NULL,
  `id_cod` varchar(32) NOT NULL,
  `id_anuncio` varchar(32) NOT NULL,
  `avatar` varchar(80) NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_anuncio_galeria`
--

INSERT INTO `tbl_anuncio_galeria` (`id`, `id_cod`, `id_anuncio`, `avatar`, `image`) VALUES
(1, 'af6f073ae2528479a9da69bd85ca0f85', '419399bc42e54e0061dc0728737f0fc6', 'thumb-336333849-teste-de-anuncio-3.jpg', '336333849-teste-de-anuncio-3.jpg'),
(2, 'b81a00de32e5a9639ce8dd0b2839a082', '419399bc42e54e0061dc0728737f0fc6', 'thumb-96036181-teste-de-anuncio-3-2.jpg', '96036181-teste-de-anuncio-3-2.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_cabeca_impressao`
--

CREATE TABLE `tbl_cabeca_impressao` (
  `id` int(30) NOT NULL,
  `id_cod` varchar(32) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_cabeca_impressao`
--

INSERT INTO `tbl_cabeca_impressao` (`id`, `id_cod`, `nome`, `status`) VALUES
(1, '7e244d026b7821dff4f3a2330b76423d', 'Opcao de teste Cabeca de impressao 1', 1),
(2, '4353989d1c9dcfdad2975e3776cc7ef3', 'Opcao de teste Cabeca de impressao 2', 1);

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
-- Estrutura da tabela `tbl_condicao_equipamento`
--

CREATE TABLE `tbl_condicao_equipamento` (
  `id` int(30) NOT NULL,
  `id_cod` varchar(32) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_condicao_equipamento`
--

INSERT INTO `tbl_condicao_equipamento` (`id`, `id_cod`, `nome`, `status`) VALUES
(1, '891f1f215634f0abadfe3f39c4504b77', 'Opcao de teste Condicao equipamento 1', 1),
(2, 'f379851a90283d74318c072f46bd56c4', 'Opcao de teste Condicao equipamento 2', 1);

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
(2, '388df0fc61a5db4d3f3d3f5335f92607', 'thumb-517593191.jpg', '517593191.jpg', '318b9cddcea5ebcb2c1171fe1cf277db', 'ServiÃ§os', 1),
(8, 'bac36c130d1c4932e0085cf5edd94567', 'thumb-29198918.jpg', '29198918.jpg', '1', 'Cadastre-se', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_marca`
--

CREATE TABLE `tbl_marca` (
  `id` int(30) NOT NULL,
  `id_cod` varchar(32) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_marca`
--

INSERT INTO `tbl_marca` (`id`, `id_cod`, `nome`, `status`) VALUES
(1, '62a8d6e346c28b05db8f9c92ffd9bec9', 'Opcao de teste Marca 1', 1),
(2, '2b5178fa058b9a1dc704473358ae8621', 'Opcao de teste Marca 2', 1);

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
(5, '5423cdd0c2157ff5088b8f14e494f145', 'teste3@teste3.com.br'),
(10, '5e5458a8e2405089040167934b684ce8', 'teste@teste2.com.br');

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
(1, '78f98855faaea294bd00dc90056a3b48', 'thumb-911571354banner.jpg.jpg', '911571354banner.jpg.jpg', 'Texto 1 do slilde', 'Texto 2 do slilde', 1),
(2, '438d33a22bb55f4dd24be1b44716b512', 'thumb-848765425banner2.jpg.jpg', '848765425banner2.jpg.jpg', 'Texto 1 do slilde 2', 'Texto 2 do slilde 2', 1);

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
-- Estrutura da tabela `tbl_tecnologia`
--

CREATE TABLE `tbl_tecnologia` (
  `id` int(30) NOT NULL,
  `id_cod` varchar(32) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_tecnologia`
--

INSERT INTO `tbl_tecnologia` (`id`, `id_cod`, `nome`, `status`) VALUES
(1, '2f3f17241f591954d666f2942383adcf', 'Opcao de teste Tecnologia 1', 1),
(2, 'd86fc0a6010ec250a2b3dd1daca32b81', 'Opcao de teste Tecnologia 2', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_tipo_suprimento`
--

CREATE TABLE `tbl_tipo_suprimento` (
  `id` int(30) NOT NULL,
  `id_cod` varchar(32) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_tipo_suprimento`
--

INSERT INTO `tbl_tipo_suprimento` (`id`, `id_cod`, `nome`, `status`) VALUES
(1, '38de8f8344e2026805cb1af7eac8f584', 'Opcao de teste Tipo de Suprimento 1', 1),
(2, '60e5f0d53ad4dcf82e09063e5010fcee', 'Opcao de teste Tipo de Suprimento 2', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_tipo_transporte`
--

CREATE TABLE `tbl_tipo_transporte` (
  `id` int(30) NOT NULL,
  `id_cod` varchar(32) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_tipo_transporte`
--

INSERT INTO `tbl_tipo_transporte` (`id`, `id_cod`, `nome`, `status`) VALUES
(1, '286f9d3bc0f00b56ec5ab6a6ebc978aa', 'Opcao de teste Tipo de Transporte 1', 1),
(2, 'e0ea4d2418767f5db61e2a4c70f49569', 'Opcao de teste Tipo de Transporte 2', 1);

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
(2, 'ee4abf29721bd208ec30282b62ddc109', '', 'Teste2', '', '', '', '', 'teste2@teste2.com', '(11) 2899-0000', '(11) 9999-0000', '00000000', 'SP', 'São Paulo', 'e10adc3949ba59abbe56e057f20f883e', '123456'),
(3, '36aa411da83a9019132f8c207558f301', '501543206.jpg', 'Robson Cavalcante', 'Teste de descriÃ§Ã£o.', 'face aqui', 'Twitter aqui', 'Linkedin aqui', 'webmaster@rcdesigners.com.br', '11 28913100', '11 9666666', '101010', 'SP', 'suzano', '25f9e794323b453885f5181f1b624d0b', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_anuncio`
--
ALTER TABLE `tbl_anuncio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_anuncio_galeria`
--
ALTER TABLE `tbl_anuncio_galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cabeca_impressao`
--
ALTER TABLE `tbl_cabeca_impressao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_condicao_equipamento`
--
ALTER TABLE `tbl_condicao_equipamento`
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
-- Indexes for table `tbl_marca`
--
ALTER TABLE `tbl_marca`
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
-- Indexes for table `tbl_tecnologia`
--
ALTER TABLE `tbl_tecnologia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tipo_suprimento`
--
ALTER TABLE `tbl_tipo_suprimento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tipo_transporte`
--
ALTER TABLE `tbl_tipo_transporte`
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
-- AUTO_INCREMENT for table `tbl_anuncio`
--
ALTER TABLE `tbl_anuncio`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_anuncio_galeria`
--
ALTER TABLE `tbl_anuncio_galeria`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_cabeca_impressao`
--
ALTER TABLE `tbl_cabeca_impressao`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tbl_condicao_equipamento`
--
ALTER TABLE `tbl_condicao_equipamento`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_marca`
--
ALTER TABLE `tbl_marca`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_slide_home`
--
ALTER TABLE `tbl_slide_home`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_subcategoria`
--
ALTER TABLE `tbl_subcategoria`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_tecnologia`
--
ALTER TABLE `tbl_tecnologia`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_tipo_suprimento`
--
ALTER TABLE `tbl_tipo_suprimento`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_tipo_transporte`
--
ALTER TABLE `tbl_tipo_transporte`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
