-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: localhost    Database: db_sangue
-- ------------------------------------------------------
-- Server version	5.7.17-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cidade`
--

DROP TABLE IF EXISTS `cidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cidade` (
  `idcidade` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  `estado_idestado` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcidade`),
  KEY `fk_cidade_estado_idx` (`estado_idestado`),
  CONSTRAINT `fk_cidade_estado` FOREIGN KEY (`estado_idestado`) REFERENCES `estado` (`idestado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cidade`
--

LOCK TABLES `cidade` WRITE;
/*!40000 ALTER TABLE `cidade` DISABLE KEYS */;
INSERT INTO `cidade` VALUES (1,'Assis Brasil',1);
/*!40000 ALTER TABLE `cidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contato`
--

DROP TABLE IF EXISTS `contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contato`
--

LOCK TABLES `contato` WRITE;
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
INSERT INTO `contato` VALUES (2,'Miguel Viana Chaves','mvc@gmail.com'),(4,'Thiago Chaves','thiagoarc@gmail.com');
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doador`
--

DROP TABLE IF EXISTS `doador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doador` (
  `iddoador` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `data_nascimento` varchar(45) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `rg` varchar(11) DEFAULT NULL,
  `endereco` varchar(60) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `complemento` varchar(60) DEFAULT NULL,
  `cidade_idcidade` int(11) NOT NULL,
  `tipo_sangue` varchar(2) NOT NULL,
  `fator_rh` varchar(20) NOT NULL COMMENT 'N: Negativo, P: Positivo',
  `idade` int(11) NOT NULL,
  PRIMARY KEY (`iddoador`),
  KEY `fk_paciente_cidade1_idx` (`cidade_idcidade`),
  CONSTRAINT `fk_paciente_cidade10` FOREIGN KEY (`cidade_idcidade`) REFERENCES `cidade` (`idcidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doador`
--

LOCK TABLES `doador` WRITE;
/*!40000 ALTER TABLE `doador` DISABLE KEYS */;
INSERT INTO `doador` VALUES (2,'Ingryd Silva','1998-07-25','045.506.345-00','23944334','estrada do calafate',231,'nova esperanÃÂ§a','do lado da distribuidora',1,'O','Negativo',20),(4,'Sayonara Mendes','1985-07-16','045.506.345-00','12343','Rua da FundaÃ§Ã£o',4,'Estrada Via Verde','do lado da distribuidora',1,'A','Negativo',0),(5,'Joao da Silva ','1996-09-07','035.456.354-45','45654589','estrada do calafate',554,'chico mendes','do lado da distribuidora',1,'AB','Positivo',20),(6,'JAILSON SOUZA BERNADO','2017-01-27','027.098.882-38','11659599','girassol',34,'jardim primavera','sem',1,'A','Positivo',21);
/*!40000 ALTER TABLE `doador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado` (
  `idestado` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `uf` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idestado`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT INTO `estado` VALUES (1,'Acre','AC'),(2,'Alagoas','AL'),(3,'Amapá','AP'),(4,'Amazonas','AM'),(5,'Bahia','BA'),(6,'Ceará','CE'),(7,'Distrito Federal','DF'),(8,'Esperito Santo','ES'),(9,'Goiás','GO'),(10,'Maranhão','MA'),(11,'Mato Grosso','MT'),(12,'Mato Grosso do Sul','MS'),(13,'Minas Gerais','MG'),(14,'Pará','PA'),(15,'Paraíba','PB'),(16,'Paraná','PR'),(17,'Pernambuco','PE'),(18,'Piauí','PI'),(19,'Rio de Janeiro','RJ'),(20,'Rio Grande do Norte','RN'),(21,'Rio Grande do Sul','RS'),(22,'Rondônia','RO'),(23,'Roraima','RR'),(24,'Santa Catarina','SC'),(25,'São Paulo','SP'),(26,'Sergipe','SE'),(27,'Tocantins','TO'),(28,'testetestetesteteste','NO');
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estoque_sangue`
--

DROP TABLE IF EXISTS `estoque_sangue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estoque_sangue` (
  `idest_sangue` int(11) NOT NULL AUTO_INCREMENT,
  `quantidade` decimal(10,2) NOT NULL,
  `tipo` varchar(2) NOT NULL,
  `fator_rh` varchar(10) NOT NULL,
  `triagem_idTriagem` int(11) NOT NULL,
  `data_hora` date NOT NULL,
  `categoria` varchar(20) NOT NULL,
  PRIMARY KEY (`idest_sangue`),
  KEY `fk_estoque_sangue_Triagem1_idx` (`triagem_idTriagem`),
  CONSTRAINT `fk_estoque_sangue_Triagem1` FOREIGN KEY (`triagem_idTriagem`) REFERENCES `triagem` (`idtriagem`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estoque_sangue`
--

LOCK TABLES `estoque_sangue` WRITE;
/*!40000 ALTER TABLE `estoque_sangue` DISABLE KEYS */;
INSERT INTO `estoque_sangue` VALUES (6,1.00,'AB','Positivo',4,'0000-00-00',''),(7,1.00,'A','Negativo',3,'0000-00-00',''),(8,1.00,'AB','Positivo',4,'2016-11-19','Entrada de Sangue'),(11,1.00,'AB','Positivo',3,'2016-11-26','Entrada de Sangue'),(12,1.00,'O','Negativo',3,'2016-11-26','Entrada de Sangue');
/*!40000 ALTER TABLE `estoque_sangue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estoque_sangue_log`
--

DROP TABLE IF EXISTS `estoque_sangue_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estoque_sangue_log` (
  `idestoque_sangue_log` int(11) NOT NULL,
  `data_hora` date DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL COMMENT 'o tipo pode ser entrada ou saida sangue.',
  `quantidade` decimal(10,2) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL COMMENT 'tipo do sangue.',
  `fator_rh` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idestoque_sangue_log`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estoque_sangue_log`
--

LOCK TABLES `estoque_sangue_log` WRITE;
/*!40000 ALTER TABLE `estoque_sangue_log` DISABLE KEYS */;
INSERT INTO `estoque_sangue_log` VALUES (5,'2016-11-24','entrada de sangue',1.00,NULL,NULL),(6,'2016-11-23',NULL,1.00,'AB','Positivo'),(7,'2016-11-23',NULL,1.00,'A','Negativo'),(8,'2016-11-19','Entrada de Sangue',1.00,'AB','Positivo'),(9,'2016-11-24','saida de sangue',1.00,NULL,NULL),(10,'2016-11-24','saida de sangue',1.00,'O','Negativo'),(11,'2016-11-26','Entrada de Sangue',1.00,'AB','Positivo'),(12,'2016-11-26','Entrada de Sangue',1.00,'O','Negativo');
/*!40000 ALTER TABLE `estoque_sangue_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paciente` (
  `idpaciente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `data_nascimento` varchar(45) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `rg` varchar(11) DEFAULT NULL,
  `endereco` varchar(60) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `complemento` varchar(60) DEFAULT NULL,
  `cidade_idcidade` int(11) NOT NULL,
  `tipo_sangue` varchar(2) NOT NULL,
  `fator_rh` varchar(20) NOT NULL COMMENT 'N: Negativo, P: Positivo',
  `idade` int(11) NOT NULL,
  PRIMARY KEY (`idpaciente`),
  KEY `fk_paciente_cidade1_idx` (`cidade_idcidade`),
  CONSTRAINT `fk_paciente_cidade1` FOREIGN KEY (`cidade_idcidade`) REFERENCES `cidade` (`idcidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
INSERT INTO `paciente` VALUES (10,'Ingryd Silva','2013-04-04','07333443','11659599','estrada do calafate',2,'nova esperanÃ§a','Distribuidora',2,'A','Negativo',21);
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recebimento_sangue`
--

DROP TABLE IF EXISTS `recebimento_sangue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recebimento_sangue` (
  `idrecebimento_sangue` int(11) NOT NULL AUTO_INCREMENT,
  `data_hora` date DEFAULT NULL,
  `quantidade` decimal(10,2) DEFAULT NULL,
  `paciente_idpaciente` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `fator_rh` varchar(20) DEFAULT NULL,
  `categoria` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idrecebimento_sangue`),
  KEY `fk_recebimento_sangue_paciente1_idx` (`paciente_idpaciente`),
  CONSTRAINT `fk_recebimento_sangue_paciente1` FOREIGN KEY (`paciente_idpaciente`) REFERENCES `paciente` (`idpaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recebimento_sangue`
--

LOCK TABLES `recebimento_sangue` WRITE;
/*!40000 ALTER TABLE `recebimento_sangue` DISABLE KEYS */;
INSERT INTO `recebimento_sangue` VALUES (1,'2016-05-09',1.00,10,NULL,NULL,NULL),(3,'2016-05-09',1.00,10,NULL,NULL,NULL),(4,'2016-05-09',1.00,10,NULL,NULL,NULL),(5,'2016-05-09',1.00,10,NULL,NULL,NULL),(9,'2016-05-09',1.00,10,NULL,NULL,NULL),(10,'2016-05-09',1.00,10,'O','Negativo',NULL),(12,'2016-11-26',1.00,10,'A','Negativo',NULL),(13,'2016-11-28',1.00,10,'A','Negativo','Saida de Sangue');
/*!40000 ALTER TABLE `recebimento_sangue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `triagem`
--

DROP TABLE IF EXISTS `triagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `triagem` (
  `idtriagem` int(11) NOT NULL AUTO_INCREMENT,
  `idade` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `jejum` varchar(5) DEFAULT NULL,
  `doador_iddoador` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`idtriagem`),
  KEY `fk_Triagem_doador1_idx` (`doador_iddoador`),
  CONSTRAINT `fk_Triagem_doador1` FOREIGN KEY (`doador_iddoador`) REFERENCES `doador` (`iddoador`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `triagem`
--

LOCK TABLES `triagem` WRITE;
/*!40000 ALTER TABLE `triagem` DISABLE KEYS */;
INSERT INTO `triagem` VALUES (3,20,75,'nao',2,'apto');
/*!40000 ALTER TABLE `triagem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nivel` int(1) unsigned NOT NULL DEFAULT '1',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `cadastro` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `nivel` (`nivel`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Usuário Teste','demo','89e495e7941cf9e40e6980d14a16bf023ccd4c91','usuario@demo.com.br',1,1,'2017-04-07 12:16:37'),(2,'Administrador Teste','admin','d033e22ae348aeb5660fc2140aec35850c4da997','admin@demo.com.br',2,1,'2017-04-07 12:16:37');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-07 12:52:06
