CREATE DATABASE  IF NOT EXISTS `db_sangue` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_sangue`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: db_sangue
-- ------------------------------------------------------
-- Server version	5.7.18-log

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
-- Table structure for table `agenda`
--

DROP TABLE IF EXISTS `agenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agenda` (
  `idagenda` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `telefone` int(10) NOT NULL,
  `ddd` int(2) NOT NULL,
  `dpto_iddpto` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`idagenda`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='Tabela Agenda para adição de numeros dos funcionarios ou departamentos';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agenda`
--

LOCK TABLES `agenda` WRITE;
/*!40000 ALTER TABLE `agenda` DISABLE KEYS */;
INSERT INTO `agenda` VALUES (1,'Jão Souza de Oliveira',996026654,68,'1'),(3,'Juliana Sales de Melo',981778900,97,'2'),(5,'Lais Vasconcelos',999151285,69,'1'),(11,'Saionara Cardoso',984184786,68,'2');
/*!40000 ALTER TABLE `agenda` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cidade`
--

LOCK TABLES `cidade` WRITE;
/*!40000 ALTER TABLE `cidade` DISABLE KEYS */;
INSERT INTO `cidade` VALUES (1,'Assis Brasil',1),(2,'Boca do Acre',29),(3,'Acrelândia',1),(4,'Capixaba',1),(5,'Florianopolis',24);
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
  `nome` varchar(60) DEFAULT NULL,
  `data_nascimento` varchar(15) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `rg` varchar(11) DEFAULT NULL,
  `endereco` varchar(60) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `complemento` varchar(60) DEFAULT NULL,
  `cidade_idcidade` int(11) DEFAULT NULL,
  `tipo_sangue` varchar(2) DEFAULT NULL,
  `fator_rh` varchar(20) DEFAULT NULL COMMENT 'N: Negativo, P: Positivo',
  `idade` int(11) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `data_registro` varchar(15) DEFAULT NULL,
  `num_sus` int(11) DEFAULT NULL,
  `expeditor` varchar(10) DEFAULT NULL,
  `etnia` varchar(10) DEFAULT NULL,
  `nome_pai` varchar(60) DEFAULT NULL,
  `nome_mae` varchar(60) DEFAULT NULL,
  `estado_civil` varchar(45) DEFAULT NULL,
  `escolaridade` varchar(20) DEFAULT NULL,
  `naturalidade` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`iddoador`),
  KEY `fk_paciente_cidade1_idx` (`cidade_idcidade`),
  CONSTRAINT `fk_paciente_cidade10` FOREIGN KEY (`cidade_idcidade`) REFERENCES `cidade` (`idcidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doador`
--

LOCK TABLES `doador` WRITE;
/*!40000 ALTER TABLE `doador` DISABLE KEYS */;
INSERT INTO `doador` VALUES (2,'Ingryd Silva','1998-07-25','045.506.345-00','23944334','estrada do calafate',231,'nova esperanÃÂ§a','do lado da distribuidora',1,'O','Negativo',20,'f',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'JULIANY DOS SANTOS QUINTAO','07/09/1996','035.456.354-45','45654589','avenida ceará, 2351',142,'','teste',1,'B','Negativo',20,'Masculino','25/05/2017',12345,'SSP/AC','Branco','Fulano','Fulana','Casado','Não Alfabetizado','rio branco'),(7,'Laís Vasconcelos','28/02/1993','018.663.372-62','601018','Rua America',142,NULL,NULL,2,'A','positivo',24,'f',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'Jacinta Oliveira','1996-05-06','999.111.234-45','11111112-0','Rua Tião',235,'Centro','Casa',2,'AB','positivo',21,'f',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `doador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dpto`
--

DROP TABLE IF EXISTS `dpto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dpto` (
  `iddpto` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  PRIMARY KEY (`iddpto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dpto`
--

LOCK TABLES `dpto` WRITE;
/*!40000 ALTER TABLE `dpto` DISABLE KEYS */;
INSERT INTO `dpto` VALUES (1,'SOROLOGIA'),(2,'TI'),(3,'COLETA'),(4,'IMUNO/HEMATOLOGIA'),(5,'CONTROLE DE QUALIDADE'),(6,'PROCESSAMENTO'),(7,'DISTRIBUIÇÃO'),(8,'ESTATÍSTICA'),(9,'RESÍDUOS'),(10,'CAPTAÇÃO'),(11,'RECEPÇÃO');
/*!40000 ALTER TABLE `dpto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entrada_sangue`
--

DROP TABLE IF EXISTS `entrada_sangue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entrada_sangue` (
  `identrada_sangue` int(11) NOT NULL,
  `doador_iddoador` varchar(45) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `quantidade` decimal(10,2) NOT NULL,
  PRIMARY KEY (`identrada_sangue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entrada_sangue`
--

LOCK TABLES `entrada_sangue` WRITE;
/*!40000 ALTER TABLE `entrada_sangue` DISABLE KEYS */;
/*!40000 ALTER TABLE `entrada_sangue` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT INTO `estado` VALUES (1,'Acre','AC'),(2,'Alagoas','AL'),(3,'Amapá','AP'),(5,'Bahia','BA'),(6,'Ceará','CE'),(7,'Distrito Federal','DF'),(8,'Esperito Santo','ES'),(9,'Goiás','GO'),(10,'Maranhão','MA'),(11,'Mato Grosso','MT'),(12,'Mato Grosso do Sul','MS'),(13,'Minas Gerais','MG'),(14,'Pará','PA'),(15,'Paraíba','PB'),(16,'Paraná','PR'),(17,'Pernambuco','PE'),(18,'Piauí','PI'),(19,'Rio de Janeiro','RJ'),(20,'Rio Grande do Norte','RN'),(21,'Rio Grande do Sul','RS'),(22,'Rondônia','RO'),(23,'Roraima','RR'),(24,'Santa Catarina','SC'),(25,'São Paulo','SP'),(26,'Sergipe','SE'),(27,'Tocantins','TO'),(29,'Amazonas','AM');
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
  `triagem_idtriagem` int(11) NOT NULL,
  `quantidade` decimal(10,2) NOT NULL,
  `tipo` varchar(2) NOT NULL,
  `fator_rh` varchar(10) NOT NULL,
  PRIMARY KEY (`idest_sangue`),
  KEY `fk_estoque_sangue_Triagem1_idx` (`triagem_idtriagem`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estoque_sangue`
--

LOCK TABLES `estoque_sangue` WRITE;
/*!40000 ALTER TABLE `estoque_sangue` DISABLE KEYS */;
INSERT INTO `estoque_sangue` VALUES (6,4,1.00,'AB','Positivo'),(7,3,1.00,'A','Negativo'),(8,4,1.00,'AB','Positivo'),(11,3,1.00,'AB','Positivo'),(12,3,1.00,'O','Negativo');
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
  `sexo` enum('m','f') DEFAULT NULL,
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
INSERT INTO `paciente` VALUES (10,'Ingryd Silva','2013-04-04','07333443','11659599','estrada do calafate',2,'nova esperanÃ§a','Distribuidora',2,'A','Negativo',21,NULL);
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
  `data_hora_entrada` datetime DEFAULT NULL,
  `quantidade` decimal(10,2) DEFAULT NULL,
  `doador_iddoador` int(11) NOT NULL,
  `tipo_sangue` varchar(45) DEFAULT NULL,
  `fator_rh` varchar(20) DEFAULT NULL,
  `categoria` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idrecebimento_sangue`),
  KEY `fk_recebimento_sangue_paciente1_idx` (`doador_iddoador`),
  CONSTRAINT `fk_recebimento_sangue_paciente1` FOREIGN KEY (`doador_iddoador`) REFERENCES `paciente` (`idpaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recebimento_sangue`
--

LOCK TABLES `recebimento_sangue` WRITE;
/*!40000 ALTER TABLE `recebimento_sangue` DISABLE KEYS */;
INSERT INTO `recebimento_sangue` VALUES (1,'2016-05-09 00:00:00',1.00,10,NULL,NULL,NULL),(3,'2016-05-09 00:00:00',1.00,10,NULL,NULL,NULL),(4,'2016-05-09 00:00:00',1.00,10,NULL,NULL,NULL),(5,'2016-05-09 00:00:00',1.00,10,NULL,NULL,NULL),(9,'2016-05-09 00:00:00',1.00,10,NULL,NULL,NULL),(10,'2016-05-09 00:00:00',1.00,10,'O','Negativo',NULL),(12,'2016-11-26 00:00:00',1.00,10,'A','Negativo',NULL),(13,'2016-11-28 00:00:00',1.00,10,'A','Negativo','Saida de Sangue');
/*!40000 ALTER TABLE `recebimento_sangue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saida_sangue`
--

DROP TABLE IF EXISTS `saida_sangue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `saida_sangue` (
  `idsaida_sangue` int(11) NOT NULL,
  `doador_iddoador` int(12) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `quantidade` decimal(10,2) NOT NULL,
  PRIMARY KEY (`idsaida_sangue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saida_sangue`
--

LOCK TABLES `saida_sangue` WRITE;
/*!40000 ALTER TABLE `saida_sangue` DISABLE KEYS */;
/*!40000 ALTER TABLE `saida_sangue` ENABLE KEYS */;
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (7,'teste','teste@teste.com','123'),(8,'Admin','admin@teste.com','234');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario_UNIQUE` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (7,'teste','teste@teste.com','202cb962ac59075b964b07152d234b70'),(14,'Administrador','admin@teste','827ccb0eea8a706c4c34a16891f84e7b'),(15,'Ingryd','ingryd@teste','69e61f66c85be1aca17cc0f656ee6320'),(17,'Saionara','saionara@teste','250cf8b51c773f3f8dc8b4be867a9a02'),(18,'Lais','lais@teste','250cf8b51c773f3f8dc8b4be867a9a02');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'db_sangue'
--

--
-- Dumping routines for database 'db_sangue'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-27 21:05:58
