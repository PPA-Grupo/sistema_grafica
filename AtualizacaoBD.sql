create schema ppa ; 
use ppa; 

create TABLE `arquivo`(
  `id_arquivo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL, 
  `tipo` varchar(3) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tamanho_arquivo` int(11) NOT NULL,
  `data_entrega` varchar(10) DEFAULT NULL,
  `qtd_impressao` int(11) NOT NULL,
  `situacao` varchar(100) DEFAULT '0',
  `data_envio` varchar(20) DEFAULT NULL,
  `cor` varchar(25) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `assunto` varchar(100) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `funcionario` (
  `id_funcionario` int(11) NOT NULL,
  `siape` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telefone` int(11) NOT NULL,
  `cargo` varchar(30) DEFAULT NULL,
  `senha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `professor` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar (20), 
  `senha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `relacao_funcionario` (
  `id_funcionario` int(11) NOT NULL,
  `id_arquivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `arquivo`
  ADD PRIMARY KEY (`id_arquivo`);
  
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`);
  
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id_usuario`);
  
ALTER TABLE `relacao_funcionario`
  ADD KEY `id_arquivo` (`id_arquivo`);
  
ALTER TABLE `arquivo`
  MODIFY `id_arquivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
  
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT;
  
ALTER TABLE `professor`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
  
ALTER TABLE `relacao_funcionario`
 ADD CONSTRAINT `relacao_funcionario_ibfk_1` FOREIGN KEY (`id_arquivo`) REFERENCES `arquivo` (`id_arquivo`); 

ALTER TABLE `arquivo` 
   ADD CONSTRAINT  fk_identifica_professor foreign key (`id_usuario`) REFERENCES `professor`(`id_usuario`); 
