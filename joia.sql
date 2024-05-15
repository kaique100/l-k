-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jul-2020 às 04:18
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `joia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `nj_categorias`
--

CREATE TABLE `nj_categorias` (
  `cate_id` int(11) NOT NULL,
  `cate_nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cate_slug` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `nj_categorias`
--

INSERT INTO `nj_categorias` (`cate_id`, `cate_nome`, `cate_slug`) VALUES
(1, 'Aneis', 'aneis'),
(2, 'Colares', 'colares'),
(3, 'Pulseiras', 'pulseiras'),
(4, 'Alianças', 'aliancas'),
(5, 'Brincos', 'brincos'),
(6, 'Piercings', 'piercings'),
(7, 'Tornozeleiras', 'tornozeleiras'),
(9, 'Correntes', 'correntes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nj_clientes`
--

CREATE TABLE `nj_clientes` (
  `cli_id` int(11) NOT NULL,
  `cli_nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cli_sobrenome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cli_endereco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cli_numero` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cli_bairro` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cli_cidade` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cli_uf` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `cli_cep` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cli_cpf` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `cli_rg` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cli_ddd` int(2) NOT NULL,
  `cli_fone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cli_celular` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cli_email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cli_pass` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `cli_data_nasc` date NOT NULL,
  `cli_data_cad` date NOT NULL,
  `cli_hora_cad` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `nj_clientes`
--

INSERT INTO `nj_clientes` (`cli_id`, `cli_nome`, `cli_sobrenome`, `cli_endereco`, `cli_numero`, `cli_bairro`, `cli_cidade`, `cli_uf`, `cli_cep`, `cli_cpf`, `cli_rg`, `cli_ddd`, `cli_fone`, `cli_celular`, `cli_email`, `cli_pass`, `cli_data_nasc`, `cli_data_cad`, `cli_hora_cad`) VALUES
(1, 'Hugo', 'Vasconcelos', 'Rua A', '55', 'Cabana', 'BH', 'MG', '31535522', '00233566900', '3333333333333333', 31, '975275084', '975275084', 'hugovasconcelosf@hotmail.com', '123', '2017-08-16', '2017-08-30', '15:30:00'),
(2, 'Pedro', 'Freitas', 'Rua X', '555', '5555', '5555', 'MG', '00000000', '5555555', '55555555', 55, '5555555', '555555555', 'pedro@hotmail.com', '123', '2017-08-30', '2017-08-30', '15:30:00'),
(4, 'Larissa ', 'De Cassia Dezuani', 'Rua Dos xmens', '666', 'Da Marvel', 'Disney', 'sp', '68903-34', '516.335.193', '15.715.586-9', 11, '955555555', '95555555', 'Lolly888@gmail.com', '15e2f8afd5c0d81d67e4585f5e16f9e8', '2000-01-20', '2020-05-29', '02:40:11'),
(20, 'Larissa', 'De Cassia', 'Rua x', '1', 'Los doidos', 'Los loucos', 'sp', '00000000', '51633519019', '15.715.586-9', 11, '0', '0', 'dezuanilariss@gmail.com', '3315675455b2390e5068254d665df015', '2000-01-01', '2020-06-03', '02:56:23'),
(23, 'Kaique', 'Santos', 'Rua Dos Britos', '13', 'Cidade de Deus', 'São Paulo', 'sp', '08180665', '52880283892', '15.715.586-9', 11, '957061694', '957061694', 'skaique833@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-06-03', '2020-06-03', '10:47:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nj_imagens`
--

CREATE TABLE `nj_imagens` (
  `img_id` int(11) NOT NULL,
  `img_nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img_pro_id` int(11) NOT NULL,
  `img_pasta` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `nj_imagens`
--

INSERT INTO `nj_imagens` (`img_id`, `img_nome`, `img_pro_id`, `img_pasta`) VALUES
(1, '111.png', 1, ''),
(2, '222.png', 1, ''),
(3, '22.png', 1, ''),
(4, '200605081728an00050827-v-copia.png.png', 13, ''),
(5, '200605081741al00060000-1-copia.png.png', 13, ''),
(6, '200605081806an00048833-v11.png.png', 13, ''),
(8, '200605115950al00028000-1.png.png', 14, ''),
(10, '200610192612476517-copia.png.png', 14, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nj_pedidos`
--

CREATE TABLE `nj_pedidos` (
  `ped_id` int(11) NOT NULL,
  `ped_data` date NOT NULL,
  `ped_hora` time NOT NULL,
  `ped_cliente` int(11) NOT NULL,
  `ped_cod` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ped_ref` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ped_pag_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ped_pag_forma` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ped_pag_tipo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ped_pag_codigo` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `ped_frete_valor` double(9,2) DEFAULT 0.00,
  `ped_frete_tipo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `nj_pedidos`
--

INSERT INTO `nj_pedidos` (`ped_id`, `ped_data`, `ped_hora`, `ped_cliente`, `ped_cod`, `ped_ref`, `ped_pag_status`, `ped_pag_forma`, `ped_pag_tipo`, `ped_pag_codigo`, `ped_frete_valor`, `ped_frete_tipo`) VALUES
(292, '2020-06-21', '20:14:19', 23, '20062119065123', '20062119065123', 'Cancelado', 'Cartao', 'PAGSEGURO', '647C0859-A017-4965-937E-6B091F46CC00', 59.00, NULL),
(293, '2020-06-21', '20:34:09', 23, '20062120060523', '20062120060523', 'Pago', 'Cartao', 'PAGSEGURO', 'C38B6BA0-1590-43E2-ADC7-3AE3F2EE6B52', 59.00, NULL),
(294, '2020-07-03', '20:07:55', 23, '20070320073923', '20070320073923', 'NAO', '', '', '', 59.00, NULL),
(295, '2020-07-03', '20:13:51', 23, '20070320074823', '20070320074823', 'Aguardando pagamento', 'Cartao', 'PAGSEGURO', 'A04A2F66-36A3-482F-878A-03C180063C83', 59.00, NULL),
(296, '2020-07-04', '22:48:25', 23, '20070422071923', '20070422071923', 'Aguardando pagamento', 'Cartao', 'PAGSEGURO', 'BE05B519-E420-4648-A60E-94470528C9C8', 59.00, NULL),
(297, '2020-07-04', '23:12:31', 23, '20070423072723', '20070423072723', 'Aguardando pagamento', 'Cartao', 'PAGSEGURO', 'BB4F18B3-CABD-4EB0-B36A-9D3FFBEFE097', 59.00, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nj_pedidos_itens`
--

CREATE TABLE `nj_pedidos_itens` (
  `item_id` int(11) NOT NULL,
  `item_produto` int(11) NOT NULL,
  `item_valor` double(9,2) NOT NULL,
  `item_qtd` int(6) NOT NULL,
  `item_ped_cod` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `nj_pedidos_itens`
--

INSERT INTO `nj_pedidos_itens` (`item_id`, `item_produto`, `item_valor`, `item_qtd`, `item_ped_cod`) VALUES
(387, 15, 500.00, 1, '20062119065123'),
(388, 15, 500.00, 1, '20062120060523'),
(389, 18, 2000.00, 1, '20070320073923'),
(390, 19, 500.00, 1, '20070320074823'),
(391, 19, 500.00, 1, '20070422071923'),
(392, 18, 2000.00, 1, '20070423072723'),
(393, 19, 500.00, 1, '20070423072723');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nj_produtos`
--

CREATE TABLE `nj_produtos` (
  `pro_id` int(11) NOT NULL,
  `pro_categoria` int(11) NOT NULL,
  `pro_nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `pro_peso` double(9,3) NOT NULL,
  `pro_valor` double(9,2) NOT NULL,
  `pro_largura` int(11) NOT NULL,
  `pro_altura` int(11) NOT NULL,
  `pro_comprimento` int(11) NOT NULL,
  `pro_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_img_dois` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_img_tres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_estoque` int(11) NOT NULL,
  `pro_modelo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_ref` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_fabricante` int(11) NOT NULL,
  `pro_ativo` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `pro_frete_free` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Não',
  `pro_material` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_acabamento` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_pedras` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `nj_produtos`
--

INSERT INTO `nj_produtos` (`pro_id`, `pro_categoria`, `pro_nome`, `pro_desc`, `pro_peso`, `pro_valor`, `pro_largura`, `pro_altura`, `pro_comprimento`, `pro_img`, `pro_img_dois`, `pro_img_tres`, `pro_slug`, `pro_estoque`, `pro_modelo`, `pro_ref`, `pro_fabricante`, `pro_ativo`, `pro_frete_free`, `pro_material`, `pro_acabamento`, `pro_pedras`) VALUES
(1, 0, 'Brinco ouro', '<p>Materiais: Os produtos s&atilde;o fabricados com materiais de alta qualidade e &oacute;timos acabamentos passando por rigorosos testes antes de chegar a voc&ecirc;, visando o conforto e bem-estar. Possu&iacute;mos f&aacute;brica pr&oacute;pria sendo produtos exclusivos. Gola remalhada. &Oacute;timo caimento e acabamento, as barra e punhos s&atilde;o canelados com elastano para melhorar a fun&ccedil;&atilde;o dos canelados. Composi&ccedil;&atilde;o de 50% Algod&atilde;o e 50% Acr&iacute;lico um produto extremamente leve e macio. Tricot de &oacute;tima qualidade! Um dos melhores do mercado!</p>', 0.080, 80.00, 80, 80, 80, '222.png', '22.png', '111.png', 'brinco-de-feche', 1, '01', '1354641', 1, '1', 'gratuito', '', '', ''),
(3, 0, 'Colar', '<p>Materiais: Os produtos s&atilde;o fabricados com materiais de alta qualidade e &oacute;timos acabamentos passando por rigorosos testes antes de chegar a voc&ecirc;, visando o conforto e bem-estar. Possu&iacute;mos f&aacute;brica pr&oacute;pria sendo produtos exclusivos. Gola remalhada. &Oacute;timo caimento e acabamento, as barra e punhos s&atilde;o canelados com elastano para melhorar a fun&ccedil;&atilde;o dos canelados. Composi&ccedil;&atilde;o de 50% Algod&atilde;o e 50% Acr&iacute;lico um produto extremamente leve e macio. Tricot de &oacute;tima qualidade! Um dos melhores do mercado!</p>', 0.050, 60.00, 50, 50, 50, '2006041941227.png.png', '0', '0', 'colar', 10, 'modelo 054515', '548421', 1, '1', 'Não', '', '', ''),
(4, 0, 'Brinco de feche', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s</span></p>', 0.200, 1500.00, 10, 10, 10, '2006032147509.png.png', '', '', 'brinco-de-feche', 50, '3512165', '1351354', 0, 'S', 'Não', '', '', ''),
(6, 1, 'Anel ouro branco', '<p>bla</p>', 0.200, 1000.00, 10, 10, 10, '2006041910295.png.png', '', '', 'anel-ouro-branco', 50, '3512165', '1351354', 0, 'S', 'Não', '', '', ''),
(7, 2, 'Colar com pedras cravejada', '<p>bla</p>', 0.200, 2000.00, 10, 10, 10, '2006041946177.png.png', '', '', 'colar-com-pedras-cravejada', 50, '3512165', '1351354', 0, 'S', 'Não', '', '', ''),
(8, 6, 'Piercing de Boy', '<p>bla</p>', 0.200, 50.00, 10, 10, 10, '20060420045011.png.png', '', '', 'piercing-de-boy', 50, '3512165', '1351354', 0, 'S', 'Não', '', '', ''),
(9, 4, 'Alianças de casamento', '<p>bla</p>', 0.200, 500.00, 10, 10, 10, '20060420335610.png.png', '', '', 'aliancas-de-casamento', 50, '3512165', '', 0, 'S', 'Não', '', '', ''),
(10, 1, 'Anel super xique', '<p>bla</p>', 0.200, 2000.00, 10, 10, 10, '200604203647anel5-copia.png.png', '', '', 'anel-super-xique', 50, '3512165', '1351354', 0, 'S', 'Não', '', '', ''),
(11, 1, 'Anel com lindo laço', '<p>bla</p>', 0.200, 500.00, 10, 10, 10, '200604203754anel.png.png', '', '', 'anel-com-lindo-laco', 50, '3512165', '1351354', 0, 'S', 'Não', '', '', ''),
(12, 1, 'Anel mega caro', '<p>bl&aacute;</p>', 0.200, 10000.00, 10, 10, 10, '200604203915dia.png.png', '', '', 'anel-mega-caro', 50, '3512165', '1351354', 0, 'N', 'Não', '', '', ''),
(13, 1, 'Anel cravejado em diamantes', '<p>bl&aacute;</p>', 0.200, 2000.00, 10, 10, 10, '200604204028an00048833-v11-copia.png.png', '', '', 'anel-cravejado-em-diamantes', 50, '3512165', '1351354', 0, 'N', 'Não', '', '', ''),
(14, 2, 'Colar super lindo ', 'blá', 0.200, 500.00, 10, 10, 10, '200605115755colar.png.png', '', '', 'colar-super-lindo', 50, '3512165', '1351354', 0, 'S', 'Não', '', '', ''),
(15, 5, 'Brinco de feche', '<p>bla</p>', 0.200, 500.00, 10, 10, 10, '2006111803089.png.png', '', '', 'brinco-de-feche', 50, '3512165', '1351354', 0, 'S', 'Não', '', '', ''),
(16, 5, 'Brinco de feche duplo', '', 0.200, 500.00, 10, 10, 10, '200622105004222.png.png', '', '', 'brinco-de-feche-duplo', 50, '3512166', '1351354', 0, 'S', 'Não', '', '', ''),
(17, 5, 'Brinco lindo', '', 0.200, 500.00, 10, 10, 10, '2006221052053.png.png', '', '', 'brinco-lindo', 50, '3512165', '1351354', 0, 'S', 'Não', '', '', ''),
(18, 5, 'Brinco de feche', '', 0.200, 2000.00, 10, 10, 10, '200622110215222.png.png', '', '', 'brinco-de-feche', 50, '3512165', '1351354', 0, 'S', 'Não', '', '', ''),
(19, 5, 'Brinco de feche', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; outline: none; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; vertical-align: baseline; color: #333333; background-color: #ffffff;\">Material: ouro 18k</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; outline: none; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; vertical-align: baseline; color: #333333; background-color: #ffffff;\">Acabamento: polido</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; outline: none; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; vertical-align: baseline; color: #333333; background-color: #ffffff;\">Tamanho: mm de largura x mm de altura</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; outline: none; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; vertical-align: baseline; color: #333333; background-color: #ffffff;\">Peso m&eacute;dio: 0,60 g</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; outline: none; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; vertical-align: baseline; color: #333333; background-color: #ffffff;\">Pedras: 2 diamantes de 4 pontos cada</p>', 0.200, 500.00, 10, 10, 10, '2006221146267.png.png', '', '', 'brinco-de-feche', 50, '3512165', '1351354', 0, 'N', 'Não', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nj_user`
--

CREATE TABLE `nj_user` (
  `user_id` int(11) NOT NULL,
  `user_nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_pw` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `nj_user`
--

INSERT INTO `nj_user` (`user_id`, `user_nome`, `user_email`, `user_pw`) VALUES
(1, 'Hugo Vasconcelos', 'qcursos@hotmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Administrador Loja Freitas', 'lojavirtualfreitas@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Kaique Santos', 'skaique5424@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `nj_categorias`
--
ALTER TABLE `nj_categorias`
  ADD PRIMARY KEY (`cate_id`);

--
-- Índices para tabela `nj_clientes`
--
ALTER TABLE `nj_clientes`
  ADD PRIMARY KEY (`cli_id`);

--
-- Índices para tabela `nj_imagens`
--
ALTER TABLE `nj_imagens`
  ADD PRIMARY KEY (`img_id`);

--
-- Índices para tabela `nj_pedidos`
--
ALTER TABLE `nj_pedidos`
  ADD PRIMARY KEY (`ped_id`);

--
-- Índices para tabela `nj_pedidos_itens`
--
ALTER TABLE `nj_pedidos_itens`
  ADD PRIMARY KEY (`item_id`);

--
-- Índices para tabela `nj_produtos`
--
ALTER TABLE `nj_produtos`
  ADD PRIMARY KEY (`pro_id`);

--
-- Índices para tabela `nj_user`
--
ALTER TABLE `nj_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `nj_categorias`
--
ALTER TABLE `nj_categorias`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `nj_clientes`
--
ALTER TABLE `nj_clientes`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `nj_imagens`
--
ALTER TABLE `nj_imagens`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `nj_pedidos`
--
ALTER TABLE `nj_pedidos`
  MODIFY `ped_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=298;

--
-- AUTO_INCREMENT de tabela `nj_pedidos_itens`
--
ALTER TABLE `nj_pedidos_itens`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=394;

--
-- AUTO_INCREMENT de tabela `nj_produtos`
--
ALTER TABLE `nj_produtos`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `nj_user`
--
ALTER TABLE `nj_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
