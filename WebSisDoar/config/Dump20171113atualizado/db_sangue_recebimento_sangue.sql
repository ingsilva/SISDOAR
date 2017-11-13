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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-13  9:55:24
