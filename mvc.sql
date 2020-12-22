-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb28.awardspace.net
-- Generation Time: 21-Dez-2020 às 11:44
-- Versão do servidor: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3646899_cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`id`, `nome`, `email`, `senha`, `criado_em`) VALUES
(70, 'Kevin', 'neri.kevin96@gmail.com', '$2y$10$RP3NZbNH5GdehIfsSScaye85QsykbnRKnJVSAlqOUmVqPhiPIVvje', '2020-12-15 16:55:38'),
(71, 'Kevin Alec Neri Lazzarotto', 'kevin.lazzarotto@hotmail.com', '$2y$10$0dIeftsN4yvwGYyuvOPq.eDvj9BHMoL3iN3RIhLz8AYaUbZqeZIX2', '2020-12-15 16:56:49'),
(72, 'Erick Kaik Neri Lazzarotto', 'erick.clamant@gmail.com', '$2y$10$J0TH0DcQAUD.o0Mx7Vh8leISjdGiCXuvY9VwVM3tsPENPa9Oi92g.', '2020-12-16 20:53:35'),
(73, 'Ingrid', 'ingridkneri@hotmail.com', '$2y$10$8fHhmIzxxhFe8/o4cIDyOe8ZBgi5t94BAvS40jLofFMrDscZkPyvK', '2020-12-16 20:58:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mensagem`
--

CREATE TABLE `tb_mensagem` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_mensagem`
--

INSERT INTO `tb_mensagem` (`id`, `usuario_id`, `titulo`, `texto`, `email`, `criado_em`) VALUES
(39, 71, 'Passagem padrão original de Lorem Ipsum, usada desde o século XVI.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'kevin.lazzarotto@hotmail.com', '2020-12-16 18:23:53'),
(40, 71, 'Seção 1.10.32 de &#34;de Finibus Bonorum et Malorum&#34;, escrita por Cícero em 45 AC', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'kevin.lazzarotto@hotmail.com', '2020-12-16 18:24:31'),
(41, 71, 'Tradução para o inglês por H. Rackha, feita em 1914', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?', 'kevin.lazzarotto@hotmail.com', '2020-12-16 18:24:55'),
(42, 71, 'Seção 1.10.33 de &#34;de Finibus Bonorum et Malorum&#34;, escrita por Cícero em 45 AC', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.', 'kevin.lazzarotto@hotmail.com', '2020-12-16 18:25:18'),
(43, 71, 'Tradução para o inglês por H. Rackha, feita em 1914', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.', 'kevin.lazzarotto@hotmail.com', '2020-12-16 18:25:40'),
(44, 71, 'Teste', 'Teste', 'kevin.lazzarotto@hotmail.com', '2020-12-16 19:06:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `preco` float(8,2) NOT NULL,
  `img` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`id`, `nome`, `descricao`, `preco`, `img`) VALUES
(1, 'Layout Personalizado Pizzaria', 'Layout Responsivo feito sobe encomenda, pagina inicial, produtos, pagina de login, pagina de cadastro, pagina de gerenciamento de produtos e usuários, serviço de Pizzaria.', 100.00, 'construcao.png'),
(4, 'Layout Personalizado Loja Escritorio', 'Layout Responsivo feito sobe encomenda, pagina inicial, produtos, pagina de login, pagina de cadastro, pagina de gerenciamento de produtos e usuários, serviço de Loja Escritorio.', 150.00, 'paisagem.png'),
(20, 'Layout Responsivo Padrao', 'Layout responsivo padrão sendo uns de novos modelos disponíveis em nosso estoque, pagina inicial, produtos, pagina de login, pagina de cadastro, pagina de gerenciamento de produtos e usuários.', 150.00, 'covid-19.png'),
(21, 'Combo, Layout, Banner e Cartão de Visitas', 'Layout responsivo padrão, Banner decorado de acordo com o ramo da empresa e desenvolvimento de cartão de visitas com a finalidade de divulgação da marca.', 400.00, 'meu-cep.png'),
(26, 'Layout Teste', 'Teste de layout para verificar se a logica com o banco de dados esta funcionando caorretamento', 1500.00, 'viagem.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mensagem`
--
ALTER TABLE `tb_mensagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `tb_mensagem`
--
ALTER TABLE `tb_mensagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
