-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jun-2019 às 02:18
-- Versão do servidor: 10.3.15-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `clinica_vet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

CREATE TABLE `animais` (
  `nome` varchar(20) NOT NULL,
  `especie` varchar(20) NOT NULL,
  `raca` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `animais`
--

INSERT INTO `animais` (`nome`, `especie`, `raca`, `id`, `id_cliente`) VALUES
('Boby', 'Cachorro', 'Vira-Lata', 1, 9),
('Floquinho', 'Cachorro', 'Salsicha', 2, 10),
('Presa Sombria', 'Cachorro', 'Salsicha', 3, 9),
('Sueco', 'Gato', 'Vira-Lata', 5, 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `nome` varchar(25) NOT NULL,
  `CPF` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`nome`, `CPF`, `telefone`, `endereco`, `email`, `password`, `ID`) VALUES
('Lionel Messi', '1237812896', '1298412751', 'Barcelona', 'messi.bolado@gmail.com', 'messi10', 9),
('Cristiano Ronaldo', '12309189751', '12957619702', 'Turim', 'cr7_robozao@gmail.com', 'cr7', 10),
('Menino Ney', '218964356', '129851075', 'Paris', 'ney.caiu@gmail.com', 'ney10', 11),
('Zlatan Ibra God', '6661283123', '12718951', 'USA', 'god.of.soccer@gmail.com', 'zlatan', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id_estoque` int(11) NOT NULL,
  `id_medicamento` int(11) NOT NULL,
  `local` varchar(50) NOT NULL,
  `quant` int(11) NOT NULL,
  `precoC` float(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id_estoque`, `id_medicamento`, `local`, `quant`, `precoC`) VALUES
(1, 4, 'Setor Esquerdo', 5, 10.00),
(2, 6, 'Setor Esquerdo', 5, 15.00),
(3, 5, 'Setor Direito', 9, 17.00),
(4, 2, 'Fundos', 8, 19.00);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `nome` varchar(50) NOT NULL,
  `ID` int(11) NOT NULL,
  `cargo` varchar(25) NOT NULL,
  `CPF` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`nome`, `ID`, `cargo`, `CPF`) VALUES
('JoÃ£o das Neves', 28, 'VeterinÃ¡rio', '111222333'),
('Daniela DragÃ£o', 29, 'VeterinÃ¡rio', '987654321'),
('Missa Borboleta', 30, 'VeterinÃ¡rio', '12312312356'),
('Meio Homem Lanister', 31, 'Faxineiro', '6661114444'),
('BrÃ£o CorvÃ£o', 32, 'Gerente', '12312146112'),
('Arya Sem-Rosto', 33, 'VeterinÃ¡rio', '098656921'),
('Sonsa Sensata', 35, 'Atendente', '12515151251');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamentos`
--

CREATE TABLE `medicamentos` (
  `id_medicamento` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `comp` varchar(50) NOT NULL,
  `lab` varchar(20) NOT NULL,
  `preco` float(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medicamentos`
--

INSERT INTO `medicamentos` (`id_medicamento`, `nome`, `tipo`, `comp`, `lab`, `preco`) VALUES
(2, 'Vetnil', 'Vacina', 'Varias Coisas', 'Lab. ClÃ­nicas', 55.00),
(4, 'Hidrofobix', 'Vacina', 'Varias Coisas', 'Lab. Central', 30.00),
(5, 'Propaz', 'RemÃ©dio', 'Varias Coisas', 'Lab. ClÃ­nicas', 79.90),
(6, 'Abtrax', 'RemÃ©dio', 'Poucas coisas', 'Lab. ClÃ­nicas', 29.90);

-- --------------------------------------------------------

--
-- Estrutura da tabela `salas`
--

CREATE TABLE `salas` (
  `numero` int(11) NOT NULL,
  `equipamentos` varchar(100) NOT NULL,
  `descri` varchar(50) NOT NULL,
  `disponivel` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `salas`
--

INSERT INTO `salas` (`numero`, `equipamentos`, `descri`, `disponivel`) VALUES
(1, 'Kit de Ferramentas', 'Sala Comum', 1),
(2, 'BalanÃ§a e Kit de Ferramentas', 'Sala Comum', 1),
(3, 'BalanÃ§a e Mesa de Cirurgia', 'Sala de Cirurgia', 1),
(4, 'Aparelho de raio-x', 'Salda de radiografia', 0),
(5, 'Kit de Ferramentas', 'Sala Comum', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id_venda` int(11) NOT NULL,
  `id_medicamento` int(11) NOT NULL,
  `quant` int(11) NOT NULL,
  `total` float NOT NULL,
  `cpf` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id_venda`, `id_medicamento`, `quant`, `total`, `cpf`) VALUES
(1, 2, 1, 55, '6661283123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `animais`
--
ALTER TABLE `animais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posse` (`id_cliente`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CPF` (`CPF`);

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id_estoque`),
  ADD KEY `presente` (`id_medicamento`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CPF` (`CPF`);

--
-- Índices para tabela `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`id_medicamento`);

--
-- Índices para tabela `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`numero`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id_venda`),
  ADD KEY `medicamento` (`id_medicamento`),
  ADD KEY `cliente` (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animais`
--
ALTER TABLE `animais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id_estoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `id_medicamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `animais`
--
ALTER TABLE `animais`
  ADD CONSTRAINT `posse` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `presente` FOREIGN KEY (`id_medicamento`) REFERENCES `medicamentos` (`id_medicamento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `cliente` FOREIGN KEY (`cpf`) REFERENCES `clientes` (`CPF`),
  ADD CONSTRAINT `medicamento` FOREIGN KEY (`id_medicamento`) REFERENCES `medicamentos` (`id_medicamento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
