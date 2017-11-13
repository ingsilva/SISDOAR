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
  CONSTRAINT `fk_paciente_cidade10` FOREIGN KEY (`cidade_idcidade`) REFERENCES `cidade` (`idcidade`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doador`
--

LOCK TABLES `doador` WRITE;
/*!40000 ALTER TABLE `doador` DISABLE KEYS */;
INSERT INTO `doador` VALUES (7,'Laís Vasconcelos','1991-07-08','018.663.372-62','601018','Rua America',142,'teste','teste',99,'A','positivo',25,'F','2000-02-02',1234,'SSP','Branco','teste','teste','Viúvo','2°Grau Incompleto','Taraucano',NULL,'99285-6354'),(76,'Maria Fernandes','1996-02-02','111.111.111-22','12345','Estrada da Floresta',123,'Floresta','Apt 03',94,'B','Positivo',21,'f','2017-11-05',2222,'SSP','P','Eduardo Souza da Silva','Maria Luzia Souza','S','TC','Acreana','68','999777788'),(83,'Jailson Souza Bernado','1993-08-07','02288219246','11659599','rua girassol',34,'jardim primvavera','rua sem saida',94,'A','Positivo',24,'m','2017-11-17',3454,'SSP','N','denilio bernado','raimunda souza','S','TC','epitaciolandia','68','992838635'),(84,'Junior Teste','1993-08-07','02288219246','11659599','rua girassol',34,'jar','teste',94,'A','Positivo',24,'m','2017-11-10',321,'SSP','B','denilio bernado','raimunda souza','S','NA','epitaciolandia','68','992838635'),(85,'Jose da silva','1992-06-16','234234234','1232','rua girassol',34,'jardim de alah','teste',94,'O','Negativo',25,'m','2017-11-11',234,'SSP','N','teste do pai','teste do mae','D','SI','rio branco','68','92838635'),(86,'Luiza Soares de Lima','1995-05-09','123.122.111-23','12234-3','Estrada Floresta',111,'Floresta','Apt 03',94,'O','Positivo',22,'f','2017-11-11',1234,'SSP','P','','','S','TC','Acreana','68','981118912');
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

-- Dump completed on 2017-11-13  9:55:21
