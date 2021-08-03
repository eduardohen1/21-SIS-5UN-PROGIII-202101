-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.16-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema alunos
--

CREATE DATABASE IF NOT EXISTS alunos;
USE alunos;

--
-- Definition of table `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE `alunos` (
  `idalunos` int(10) unsigned NOT NULL auto_increment,
  `matricula` varchar(45) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `dt_cadastro` date NOT NULL,
  PRIMARY KEY  (`idalunos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alunos`
--

/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;


--
-- Definition of table `materias`
--

DROP TABLE IF EXISTS `materias`;
CREATE TABLE `materias` (
  `idmaterias` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(45) NOT NULL,
  `periodo` varchar(10) NOT NULL,
  `carga_horaria` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`idmaterias`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materias`
--

/*!40000 ALTER TABLE `materias` DISABLE KEYS */;
INSERT INTO `materias` (`idmaterias`,`nome`,`periodo`,`carga_horaria`) VALUES 
 (1,'ProgramaÃ§Ã£o III','1o de 2021',72);
/*!40000 ALTER TABLE `materias` ENABLE KEYS */;


--
-- Definition of table `materiasporalunos`
--

DROP TABLE IF EXISTS `materiasporalunos`;
CREATE TABLE `materiasporalunos` (
  `idalunos` int(10) unsigned NOT NULL auto_increment,
  `idmaterias` int(10) unsigned NOT NULL,
  `ano` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`idalunos`,`idmaterias`,`ano`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materiasporalunos`
--

/*!40000 ALTER TABLE `materiasporalunos` DISABLE KEYS */;
/*!40000 ALTER TABLE `materiasporalunos` ENABLE KEYS */;


--
-- Definition of table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idusuarios` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(100) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `dica` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tipoacesso` int(10) unsigned NOT NULL default '1' COMMENT '0 Admin; 1 Usuario consulta; 2 usuario relatorio',
  PRIMARY KEY  (`idusuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`idusuarios`,`nome`,`login`,`senha`,`dica`,`email`,`tipoacesso`) VALUES 
 (1,'Eduardo Henrique','eduardo','123456','123456','eduardo.marques@uemg.br',0),
 (2,'A Fulano 1','fulano1','123456','123456','a@a.com',1),
 (4,'Ciclano Jobs','','456123','456123','c@c.com',2);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
