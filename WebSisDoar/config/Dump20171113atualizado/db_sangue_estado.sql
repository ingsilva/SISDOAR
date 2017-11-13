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
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado` (
  `idestado` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(75) DEFAULT NULL,
  `uf` varchar(5) DEFAULT NULL,
  `pais_idpais` int(11) NOT NULL,
  PRIMARY KEY (`idestado`),
  KEY `fk_estado_pais_idx` (`pais_idpais`),
  CONSTRAINT `fk_estado_pais` FOREIGN KEY (`pais_idpais`) REFERENCES `pais` (`idpais`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT INTO `estado` VALUES (1,'Acre','AC',1),(2,'Alagoas','AL',1),(3,'Amazonas','AM',1),(4,'Amapá','AP',1),(5,'Bahia','BA',1),(6,'Ceará','CE',1),(7,'Distrito Federal','DF',1),(8,'Espírito Santo','ES',1),(9,'Goiás','GO',1),(10,'Maranhão','MA',1),(11,'Minas Gerais','MG',1),(12,'Mato Grosso do Sul','MS',1),(13,'Mato Grosso','MT',1),(14,'Pará','PA',1),(15,'Paraíba','PB',1),(16,'Pernambuco','PE',1),(17,'Piauí','PI',1),(18,'Paraná','PR',1),(19,'Rio de Janeiro','RJ',1),(20,'Rio Grande do Norte','RN',1),(21,'Rondônia','RO',1),(22,'Roraima','RR',1),(23,'Rio Grande do Sul','RS',1),(24,'Santa Catarina','SC',1),(25,'Sergipe','SE',1),(26,'São Paulo','SP',1),(27,'Tocantins','TO',1);
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
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
