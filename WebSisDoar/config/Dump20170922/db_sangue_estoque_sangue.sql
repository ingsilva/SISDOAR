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
  `triagem_idtriagem` int(11) NOT NULL,
  `quantidade` decimal(10,2) NOT NULL,
  `tipo` varchar(2) NOT NULL,
  `fator_rh` varchar(10) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `data_hora` datetime NOT NULL,
  PRIMARY KEY (`idest_sangue`),
  KEY `fk_estoque_sangue_Triagem1_idx` (`triagem_idtriagem`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estoque_sangue`
--

LOCK TABLES `estoque_sangue` WRITE;
/*!40000 ALTER TABLE `estoque_sangue` DISABLE KEYS */;
INSERT INTO `estoque_sangue` VALUES (18,3,1.00,'O','Negativo','Entrada','2017-09-02 21:49:00'),(19,3,1.00,'O','Negativo','Entrada','2017-09-02 21:53:00'),(20,5,1.00,'A','positivo','Entrada','2017-09-02 22:30:00'),(21,6,2.00,'A','positivo','Entrada','2017-09-02 22:30:00'),(22,6,1.00,'A','positivo','Entrada','2017-09-02 22:44:00'),(23,3,2.00,'O','Negativo','Entrada','2017-09-02 23:47:00'),(24,3,2.00,'O','Negativo','Entrada','2017-09-02 17:49:00'),(25,3,1.00,'O','Negativo','Entrada','2017-09-02 16:50:00'),(26,5,1.00,'A','positivo','Entrada','2017-09-02 16:54:00');
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

-- Dump completed on 2017-09-22 17:02:08
