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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-13  9:55:23
