-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Mar-2018 às 16:55
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
  `id_user` varchar(32) NOT NULL,
  `user` varchar(280) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(80) NOT NULL,
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
  `id_tipo_suprimento` varchar(32) NOT NULL,
  `tipo_suprimento` varchar(280) NOT NULL,
  `id_tipo_servico` varchar(32) NOT NULL,
  `tipo_servico` varchar(280) NOT NULL,
  `id_tipo_transporte` varchar(32) NOT NULL,
  `tipo_transporte` varchar(280) NOT NULL,
  `descricao` text NOT NULL,
  `avatar` varchar(80) NOT NULL,
  `image` varchar(80) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_anuncio`
--

INSERT INTO `tbl_anuncio` (`id`, `id_cod`, `id_user`, `user`, `estado`, `cidade`, `titulo`, `preco`, `id_categoria`, `categoria`, `id_marca`, `marca`, `id_cabeca_impressao`, `cabeca_impressao`, `id_tecnologia`, `tecnologia`, `id_condicao`, `condicao`, `id_tipo_suprimento`, `tipo_suprimento`, `id_tipo_servico`, `tipo_servico`, `id_tipo_transporte`, `tipo_transporte`, `descricao`, `avatar`, `image`, `data`, `status`) VALUES
(2, 'fa70dad59a6a2118d22dc3c8ef05c96f', '36aa411da83a9019132f8c207558f301', 'Robson Cavalcante', 'SP', 'suzano', 'Teste de anÃºncio 2', 1540.55, '4633a7bd213e1971059c2ce5b76c7e0e', 'Equipamentos', '2b5178fa058b9a1dc704473358ae8621', 'Opcao de teste Marca 2', '7e244d026b7821dff4f3a2330b76423d', 'Opcao de teste Cabeca de impressao 1', 'd86fc0a6010ec250a2b3dd1daca32b81', 'Opcao de teste Tecnologia 2', '891f1f215634f0abadfe3f39c4504b77', 'Opcao de teste Condicao equipamento 1', '', '', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin vel enim ut tincidunt. Phasellus suscipit aliquet orci, sed accumsan arcu ultricies sit amet. Morbi orci augue, mattis ac magna eget, aliquet lacinia neque. Praesent non mi vitae neque faucibus luctus. Nulla maximus, metus quis dictum eleifend, augue mi rhoncus nisl, eget laoreet tellus enim nec diam. Nullam ipsum tortor, gravida a fermentum at, molestie eget ante. Duis feugiat felis elit, in placerat dui eleifend sit amet. Etiam libero risus, facilisis a lacus eget, lobortis venenatis ex. Morbi lobortis fermentum lacus. Duis bibendum nec elit at euismod. Proin dolor nunc, condimentum ac turpis ut, porttitor sagittis mauris. Vivamus finibus maximus felis et auctor. Fusce at dictum libero. Morbi maximus lectus nunc, et rutrum arcu laoreet vitae. Pellentesque dictum massa ac nunc tempor, in porttitor lacus posuere. Donec facilisis a purus eget aliquet.', '', '', '2018-03-09 16:42:07', 1),
(4, '30278fb5afdfdf83c46bdc008ea0d403', '36aa411da83a9019132f8c207558f301', 'Robson Cavalcante', 'SP', 'suzano', 'TÃ­tulo teste Suprimento', 1450.55, '21b2e6efe1400635f92d0320eed420a5', 'Suprimentos', '', '', '', '', '2f3f17241f591954d666f2942383adcf', 'Opcao de teste Tecnologia 1', '', '', '60e5f0d53ad4dcf82e09063e5010fcee', 'Opcao de teste Tipo de Suprimento 2', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin vel enim ut tincidunt. Phasellus suscipit aliquet orci, sed accumsan arcu ultricies sit amet. Morbi orci augue, mattis ac magna eget, aliquet lacinia neque. Praesent non mi vitae neque faucibus luctus. Nulla maximus, metus quis dictum eleifend, augue mi rhoncus nisl, eget laoreet tellus enim nec diam. Nullam ipsum tortor, gravida a fermentum at, molestie eget ante. Duis feugiat felis elit, in placerat dui eleifend sit amet. Etiam libero risus, facilisis a lacus eget, lobortis venenatis ex. Morbi lobortis fermentum lacus. Duis bibendum nec elit at euismod. Proin dolor nunc, condimentum ac turpis ut, porttitor sagittis mauris. Vivamus finibus maximus felis et auctor. Fusce at dictum libero. Morbi maximus lectus nunc, et rutrum arcu laoreet vitae. Pellentesque dictum massa ac nunc tempor, in porttitor lacus posuere. Donec facilisis a purus eget aliquet.', 'thumb-614081484-titulo-teste-suprimento.jpg', '614081484-titulo-teste-suprimento.jpg', '2018-03-09 16:42:07', 1),
(5, 'eb89af1f72b0b760139f76e0910f2b98', '36aa411da83a9019132f8c207558f301', 'Robson Cavalcante', 'SP', 'suzano', 'Teste de tÃ­tulo serviÃ§os', 1505.53, '318b9cddcea5ebcb2c1171fe1cf277db', 'ServiÃ§os', '', '', '', '', '', '', '', '', '', '', '7fdb7d9fdbc23c6cea0b57feff0a7ecd', 'Opcao de teste Tipo de servicos 2', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin vel enim ut tincidunt. Phasellus suscipit aliquet orci, sed accumsan arcu ultricies sit amet. Morbi orci augue, mattis ac magna eget, aliquet lacinia neque. Praesent non mi vitae neque faucibus luctus. Nulla maximus, metus quis dictum eleifend, augue mi rhoncus nisl, eget laoreet tellus enim nec diam. Nullam ipsum tortor, gravida a fermentum at, molestie eget ante. Duis feugiat felis elit, in placerat dui eleifend sit amet. Etiam libero risus, facilisis a lacus eget, lobortis venenatis ex. Morbi lobortis fermentum lacus. Duis bibendum nec elit at euismod. Proin dolor nunc, condimentum ac turpis ut, porttitor sagittis mauris. Vivamus finibus maximus felis et auctor. Fusce at dictum libero. Morbi maximus lectus nunc, et rutrum arcu laoreet vitae. Pellentesque dictum massa ac nunc tempor, in porttitor lacus posuere. Donec facilisis a purus eget aliquet.', 'thumb-5877460-teste-de-titulo-servicos.jpg', '5877460-teste-de-titulo-servicos.jpg', '2018-03-09 16:42:07', 1),
(6, 'f8a3d4fe531a61eda06677b21baa314a', '36aa411da83a9019132f8c207558f301', 'Robson Cavalcante', 'SP', 'suzano', 'Teste de anuncio transportadoras', 150.55, '70f7e11763a006e605ec81c4a4858b10', 'Transportadoras', '', '', '', '', '', '', '', '', '', '', '', '', 'e0ea4d2418767f5db61e2a4c70f49569', 'Opcao de teste Tipo de Transporte 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin vel enim ut tincidunt. Phasellus suscipit aliquet orci, sed accumsan arcu ultricies sit amet. Morbi orci augue, mattis ac magna eget, aliquet lacinia neque. Praesent non mi vitae neque faucibus luctus. Nulla maximus, metus quis dictum eleifend, augue mi rhoncus nisl, eget laoreet tellus enim nec diam. Nullam ipsum tortor, gravida a fermentum at, molestie eget ante. Duis feugiat felis elit, in placerat dui eleifend sit amet. Etiam libero risus, facilisis a lacus eget, lobortis venenatis ex. Morbi lobortis fermentum lacus. Duis bibendum nec elit at euismod. Proin dolor nunc, condimentum ac turpis ut, porttitor sagittis mauris. Vivamus finibus maximus felis et auctor. Fusce at dictum libero. Morbi maximus lectus nunc, et rutrum arcu laoreet vitae. Pellentesque dictum massa ac nunc tempor, in porttitor lacus posuere. Donec facilisis a purus eget aliquet.', 'thumb-27541173-teste-de-anuncio-transportadoras.jpg', '27541173-teste-de-anuncio-transportadoras.jpg', '2018-03-09 16:42:07', 1),
(9, 'bf485d2b3e10ad9de98d10751f3fcb12', '36aa411da83a9019132f8c207558f301', 'Robson Cavalcante', 'SP', 'suzano', 'Teste de anÃºncio AssistÃªncia', 0, 'c614d0c0bb7cb5993004d956564b1687', 'AssistÃªncia TÃ©cnica', '2b5178fa058b9a1dc704473358ae8621', 'Opcao de teste Marca 2', '', '', '2f3f17241f591954d666f2942383adcf', 'Opcao de teste Tecnologia 1', '', '', '', '', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin vel enim ut tincidunt. Phasellus suscipit aliquet orci, sed accumsan arcu ultricies sit amet. Morbi orci augue, mattis ac magna eget, aliquet lacinia neque. Praesent non mi vitae neque faucibus luctus. Nulla maximus, metus quis dictum eleifend, augue mi rhoncus nisl, eget laoreet tellus enim nec diam. Nullam ipsum tortor, gravida a fermentum at, molestie eget ante. Duis feugiat felis elit, in placerat dui eleifend sit amet. Etiam libero risus, facilisis a lacus eget, lobortis venenatis ex. Morbi lobortis fermentum lacus. Duis bibendum nec elit at euismod. Proin dolor nunc, condimentum ac turpis ut, porttitor sagittis mauris. Vivamus finibus maximus felis et auctor. Fusce at dictum libero. Morbi maximus lectus nunc, et rutrum arcu laoreet vitae. Pellentesque dictum massa ac nunc tempor, in porttitor lacus posuere. Donec facilisis a purus eget aliquet.', 'thumb-198590313-teste-de-anuncio-assistencia.jpg', '198590313-teste-de-anuncio-assistencia.jpg', '2018-03-09 18:43:13', 1);

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
(2, 'b81a00de32e5a9639ce8dd0b2839a082', '419399bc42e54e0061dc0728737f0fc6', 'thumb-96036181-teste-de-anuncio-3-2.jpg', '96036181-teste-de-anuncio-3-2.jpg'),
(3, 'f3b76cac1d87e04881e1f87024ddc6b3', '726a26737ca0d3afa2db4c4ade5391f5', 'thumb-760113745-teste-de-anuncio.jpg', '760113745-teste-de-anuncio.jpg'),
(4, 'e290b0aa149ea12d4dc232f5a3042b75', '726a26737ca0d3afa2db4c4ade5391f5', 'thumb-1074407121-teste-de-anuncio-2.jpg', '1074407121-teste-de-anuncio-2.jpg'),
(7, '9a4a71225d144c99d0c8d2a50d72f07b', '6ca8165017fb32023a1c77014eda7af3', 'thumb-1012128656-titulo-teste-suprimentos.jpg', '1012128656-titulo-teste-suprimentos.jpg'),
(8, '0f2503b4c16f57fd8dfb3e57b9821a6b', '6ca8165017fb32023a1c77014eda7af3', 'thumb-8966894-titulo-teste-suprimentos-2.jpg', '8966894-titulo-teste-suprimentos-2.jpg'),
(9, '2ecebf4cb987a967f9ffa408407a7d1c', '30278fb5afdfdf83c46bdc008ea0d403', 'thumb-170031888-titulo-teste-suprimento.jpg', '170031888-titulo-teste-suprimento.jpg'),
(10, '701c201242bb6ea1a449c640461e17b7', '30278fb5afdfdf83c46bdc008ea0d403', 'thumb-419823914-titulo-teste-suprimento-2.jpg', '419823914-titulo-teste-suprimento-2.jpg'),
(11, '6a98ca872334eebdfaba1a81c629ef8a', 'eb89af1f72b0b760139f76e0910f2b98', 'thumb-448269311-teste-de-titulo-servicos.jpg', '448269311-teste-de-titulo-servicos.jpg'),
(12, '742e6d0f1af694077176237c9910b673', 'eb89af1f72b0b760139f76e0910f2b98', 'thumb-101574556-teste-de-titulo-servicos-2.jpg', '101574556-teste-de-titulo-servicos-2.jpg'),
(14, 'ce28a5150af0e5d3586a05002bd755a5', 'f8a3d4fe531a61eda06677b21baa314a', 'thumb-1096786678-teste-de-anuncio-transportadoras-2.jpg', '1096786678-teste-de-anuncio-transportadoras-2.jpg'),
(17, 'b4f5530eadf5dfca13473b513c0c72e0', 'bf485d2b3e10ad9de98d10751f3fcb12', 'thumb-910742481-teste-de-anuncio-assistencia.jpg', '910742481-teste-de-anuncio-assistencia.jpg');

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
(29, 'c614d0c0bb7cb5993004d956564b1687', 'AssistÃªncia TÃ©cnica', 1),
(30, '4633a7bd213e1971059c2ce5b76c7e0e', 'Equipamentos', 1),
(31, '318b9cddcea5ebcb2c1171fe1cf277db', 'ServiÃ§os', 1),
(32, '21b2e6efe1400635f92d0320eed420a5', 'Suprimentos', 1),
(33, '70f7e11763a006e605ec81c4a4858b10', 'Transportadoras', 1),
(37, 'f0050e596dece526488542816d034019', 'ImpressÃ£o', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `id` int(100) NOT NULL,
  `id_cod` varchar(32) NOT NULL,
  `id_user` varchar(32) NOT NULL,
  `nome_user` varchar(280) NOT NULL,
  `anuncio` varchar(280) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_chat_conversa`
--

CREATE TABLE `tbl_chat_conversa` (
  `id` int(100) NOT NULL,
  `id_chat` varchar(32) NOT NULL,
  `anuncio` varchar(280) NOT NULL,
  `id_user` varchar(32) NOT NULL,
  `nome_user` varchar(280) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Estrutura da tabela `tbl_termos_pesquisados`
--

CREATE TABLE `tbl_termos_pesquisados` (
  `id` int(30) NOT NULL,
  `termo` varchar(280) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_termos_pesquisados`
--

INSERT INTO `tbl_termos_pesquisados` (`id`, `termo`) VALUES
(1, 'ImpressÃ£o'),
(2, 'teste'),
(3, 'teste'),
(4, 'teste'),
(5, 'teste'),
(6, 'ImpressÃ£o'),
(7, 'teste'),
(8, 'ImpressÃ£o'),
(9, 'ImpressÃ£o'),
(10, 'ImpressÃ£o'),
(11, 'ImpressÃ£o'),
(12, 'teste'),
(13, 'Teste'),
(14, 'ServiÃ§os'),
(15, 'teste'),
(16, 'suprimento'),
(17, 'suprimento'),
(18, 'serviÃ§os'),
(19, 'assistÃªncia'),
(20, 'transportadoras'),
(21, 'teste'),
(22, 'suprimentos'),
(23, 'suprimento'),
(24, 'impressÃ£o'),
(25, 'assistÃªncia'),
(26, 'suprimentos'),
(27, 'teste'),
(28, 'teste'),
(29, 'impressÃ£o'),
(30, 'teste'),
(31, 'teste'),
(32, 'suprimento'),
(33, 'teste'),
(34, 'teste'),
(35, 'teste'),
(36, 'transportadoras'),
(37, 'transportadoras'),
(38, 'teste'),
(39, 'teste'),
(40, 'teste'),
(41, 'teste'),
(42, 'teste'),
(43, 'teste'),
(44, 'teste'),
(45, 'teste'),
(46, 'teste'),
(47, 'teste'),
(48, 'teste'),
(49, 'teste'),
(50, 'teste'),
(51, 'teste'),
(52, 'teste'),
(53, 'teste'),
(54, 'teste'),
(55, 'teste'),
(56, 'teste'),
(57, 'teste'),
(58, 'teste'),
(59, 'teste'),
(60, 'teste'),
(61, 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_tipo_servico`
--

CREATE TABLE `tbl_tipo_servico` (
  `id` int(30) NOT NULL,
  `id_cod` varchar(32) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_tipo_servico`
--

INSERT INTO `tbl_tipo_servico` (`id`, `id_cod`, `nome`, `status`) VALUES
(1, '26e76da10e6beaf305bd01620606ed57', 'Opcao de teste Tipo de servicos 1', 1),
(2, '7fdb7d9fdbc23c6cea0b57feff0a7ecd', 'Opcao de teste Tipo de servicos 2', 1);

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
(2, 'ee4abf29721bd208ec30282b62ddc109', '', 'Teste2', '', '', '', '', 'teste2@teste2.com', '(11) 2899-0000', '(11) 9999-0000', '00000000', 'SP', 'São Paulo', 'e10adc3949ba59abbe56e057f20f883e', '123456'),
(3, '36aa411da83a9019132f8c207558f301', '501543206.jpg', 'Robson Cavalcante', 'Teste de descriÃ§Ã£o.', 'face aqui', 'Twitter aqui', 'Linkedin aqui', 'webmaster@rcdesigners.com.br', '11 28913100', '11 9666666', '101010', 'SP', 'SÃ£o Paulo', '25f9e794323b453885f5181f1b624d0b', '123456789');

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
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_chat_conversa`
--
ALTER TABLE `tbl_chat_conversa`
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
-- Indexes for table `tbl_termos_pesquisados`
--
ALTER TABLE `tbl_termos_pesquisados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tipo_servico`
--
ALTER TABLE `tbl_tipo_servico`
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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_anuncio_galeria`
--
ALTER TABLE `tbl_anuncio_galeria`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_cabeca_impressao`
--
ALTER TABLE `tbl_cabeca_impressao`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_chat_conversa`
--
ALTER TABLE `tbl_chat_conversa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `tbl_termos_pesquisados`
--
ALTER TABLE `tbl_termos_pesquisados`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `tbl_tipo_servico`
--
ALTER TABLE `tbl_tipo_servico`
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
