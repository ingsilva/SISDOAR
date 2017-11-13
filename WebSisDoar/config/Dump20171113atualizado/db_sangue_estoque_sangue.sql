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
-- Table structure for table `estoque_sangue`
--

DROP TABLE IF EXISTS `estoque_sangue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estoque_sangue` (
  `idest_sangue` int(11) NOT NULL AUTO_INCREMENT,
  `questionario_triagem_idq_triagem` int(11) NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `tipo` varchar(2) DEFAULT NULL,
  `fator_rh` varchar(10) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `data_hora` datetime DEFAULT NULL,
  `doencas_iddoencas` varchar(11) DEFAULT NULL,
  `obs_coleta` varchar(100) DEFAULT NULL,
  `status_coleta` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idest_sangue`),
  KEY `fk_estoque_sangue_Triagem1_idx` (`questionario_triagem_idq_triagem`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estoque_sangue`
--

LOCK TABLES `estoque_sangue` WRITE;
/*!40000 ALTER TABLE `estoque_sangue` DISABLE KEYS */;
INSERT INTO `estoque_sangue` VALUES (44,17,1,'B','Positivo','Entrada','2017-11-10 22:32:00',NULL,'paciente com pendencias','sim'),(45,16,1,'A','positivo','Entrada','2017-11-10 22:42:00','3','teste 2','nao'),(46,17,1,'B','Positivo','Entrada','2017-11-10 22:55:00','3',NULL,'nao'),(47,17,1,'B','Positivo','Entrada','2017-11-10 22:58:00','2','teste','nao'),(48,17,1,'B','Positivo','Entrada','2017-11-11 00:53:00','7','mentiu','nao'),(49,27,1,'A','Positivo','Entrada','2017-11-11 03:44:00','6','doença de chagas','nao'),(50,27,1,'A','Positivo','Entrada','2017-11-13 08:26:00','------','','sim'),(51,27,2,'A','Positivo','Entrada','2017-11-13 08:26:00','5','1','nao'),(52,27,2,'O','Negativo','Entrada','2017-11-13 08:48:00','------','','sim'),(53,27,2,'A','Positivo','Entrada','2017-11-13 08:54:00','------','','sim');
/*!40000 ALTER TABLE `estoque_sangue` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-13  9:55:19
