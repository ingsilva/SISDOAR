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
-- Table structure for table `questionario_triagem`
--

DROP TABLE IF EXISTS `questionario_triagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questionario_triagem` (
  `idq_triagem` int(11) NOT NULL AUTO_INCREMENT,
  `triagem_idtriagem` int(11) DEFAULT NULL,
  `saude_hoje` varchar(5) DEFAULT NULL,
  `alcool_hoje` varchar(5) DEFAULT NULL,
  `fumou_horas` varchar(5) DEFAULT NULL,
  `alimentou` varchar(5) DEFAULT NULL,
  `dormiu` varchar(5) DEFAULT NULL,
  `drogas_rel_sexual` varchar(5) DEFAULT NULL,
  `contato_sexual_transfusao` varchar(5) DEFAULT NULL,
  `contato_sexual_hemod` varchar(5) DEFAULT NULL,
  `teste_aids` varchar(5) DEFAULT NULL,
  `quando_doou` year(4) DEFAULT NULL,
  `quantas_vzs_doou` int(11) DEFAULT NULL,
  `onde_doou` varchar(45) DEFAULT NULL,
  `recusado_motivo` varchar(60) DEFAULT NULL,
  `recusado_data` varchar(4) DEFAULT NULL,
  `situacao_doador` varchar(10) DEFAULT NULL,
  `obs_doador` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idq_triagem`),
  KEY `triagem_idtriagem_idx` (`triagem_idtriagem`),
  CONSTRAINT `triagem_idtriagem` FOREIGN KEY (`triagem_idtriagem`) REFERENCES `triagem` (`idtriagem`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questionario_triagem`
--

LOCK TABLES `questionario_triagem` WRITE;
/*!40000 ALTER TABLE `questionario_triagem` DISABLE KEYS */;
INSERT INTO `questionario_triagem` VALUES (16,7,'nao','nao','nao','nao','nao','nao','nao','nao','sim',2015,1,'HEMOCENTRO','NÃO','NÃO','nao_apto','O Doador não está apto a Doar, devido ter ingerido bebida alcoolica dentro de 24h.'),(17,8,'sim','nao','nao','sim','sim','nao','nao','nao','nao',2015,2,'HEMOACRE','Não','Não','apto','O Doador está apto para efetuar a coleta'),(26,12,'sim','sim','sim','sim','sim','sim','sim','sim','sim',2015,2,'hemoacre','não','não','nao_apto','mentiroso');
/*!40000 ALTER TABLE `questionario_triagem` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-10 17:01:52
