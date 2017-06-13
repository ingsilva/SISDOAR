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
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;
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
-- Dumping events for database 'db_sangue'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-13 16:54:37
