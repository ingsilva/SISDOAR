CREATE DATABASE  IF NOT EXISTS `db_sangue` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_sangue`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: db_sangue
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `doador`
--

DROP TABLE IF EXISTS `doador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doador` (
  `iddoador` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
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
  `data_registro` date DEFAULT NULL,
  `num_sus` int(11) DEFAULT NULL,
  `expeditor` varchar(10) DEFAULT NULL,
  `etnia` varchar(10) DEFAULT NULL,
  `nome_pai` varchar(60) DEFAULT NULL,
  `nome_mae` varchar(60) DEFAULT NULL,
  `estado_civil` varchar(45) DEFAULT NULL,
  `escolaridade` varchar(20) DEFAULT NULL,
  `naturalidade` varchar(45) DEFAULT NULL,
  `dd` varchar(2) DEFAULT NULL,
  `contato` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`iddoador`),
  KEY `fk_paciente_cidade1_idx` (`cidade_idcidade`),
  CONSTRAINT `fk_paciente_cidade10` FOREIGN KEY (`cidade_idcidade`) REFERENCES `cidade` (`idcidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doador`
--

LOCK TABLES `doador` WRITE;
/*!40000 ALTER TABLE `doador` DISABLE KEYS */;
INSERT INTO `doador` VALUES (7,'Laís Vasconcelos','1993-05-23','018.663.372-62','601018','Rua America',142,NULL,NULL,2,'A','positivo',24,'f',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'99285-6354'),(9,'Jacinta Oliveira','1996-05-06','999.111.234-45','11111112-0','Rua Tião',235,'Centro','Casa',2,'AB','positivo',21,'Masculino','2017-05-21',11,'SSP/AC','Branco','teste','teste','Solteiro','Não Alfabetizado','teste',NULL,NULL),(69,'Aécio Neves','1967-04-20','02288219246','11659599',NULL,NULL,NULL,NULL,NULL,NULL,NULL,50,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'69','81122045'),(70,'CRISLAINE DIAS SANTANA','1993-08-07','02288219246','11659599','erete',4,'eete','etete',1,'A','Positivo',24,'m','2017-09-20',12455,'SSP','B','teste','teste','C','NA','',NULL,NULL),(71,'Jailson Souza Bernado','1993-08-07','02288219246','11659599','resre',25,'teste','teste',1,'A','Positivo',24,'m','2017-09-20',12455,'SSP','B','teste','teste','S','NA','brasileiro',NULL,NULL),(72,'Jailson Souza Bernado','1993-08-07','02288219246','115454','eteete',25,'etet','tesrte',1,'A','Positivo',24,'m','2017-09-20',11245,'SSP','B','teste','tste','S','NA','etete','68',NULL),(73,'Jailson Souza Bernado','1193-08-07','02288219246','11659599','teste',25,'teste','teste',1,'A','Positivo',25,'m','2017-09-20',1245,'SSP','N','teste','teste','S','NA','15422','68',NULL),(74,'Jailson Souza Bernado','2017-09-20','02288219246','11659599','teste',25,'teste','teste',1,'A','Negativo',25,'m','2017-09-20',142445,'SSP','B','twste','teste','S','NA','werrt','68','92838635');
/*!40000 ALTER TABLE `doador` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-22 17:02:06
