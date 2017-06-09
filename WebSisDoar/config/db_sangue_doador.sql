-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: db_sangue
-- ------------------------------------------------------
-- Server version	5.7.12-log

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
`data_nascimento` varchar(45) DEFAULT NULL,
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
`sexo` enum('f','m') DEFAULT NULL,
`data_registro` date DEFAULT NULL,
`num_sus` int(11) DEFAULT NULL,
`expeditor` varchar(10) DEFAULT NULL,
`etnia` varchar(10) DEFAULT NULL,
`nome_pai` varchar(60) DEFAULT NULL,
`nome_mae` varchar(60) DEFAULT NULL,
`estado_civil` varchar(45) DEFAULT NULL,
`escolaridade` varchar(10) DEFAULT NULL,
`naturalidade` varchar(45) DEFAULT NULL,
PRIMARY KEY (`iddoador`),
KEY `fk_paciente_cidade1_idx` (`cidade_idcidade`),
CONSTRAINT `fk_paciente_cidade10` FOREIGN KEY (`cidade_idcidade`) REFERENCES `cidade` (`idcidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doador`
--

LOCK TABLES `doador` WRITE;
/*!40000 ALTER TABLE `doador` DISABLE KEYS */;
INSERT INTO `doador` VALUES (2,'Ingryd Silva','1998-07-25','045.506.345-00','23944334','estrada do calafate',231,'nova esperanÃÂ§a','do lado da distribuidora',1,'O','Negativo',20,'f',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'Joao da Silva ','1996-09-07','035.456.354-45','45654589','estrada do calafate',554,'chico mendes','do lado da distribuidora',1,'AB','Positivo',20,'m',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'Laís Vasconcelos','1993-02-28','018.663.372-62','601018','Rua America',0,'Nova Estação','',1,'A','positivo',24,'f',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'Jacinta Oliveira','1996-05-06','999.111.234-45','11111112-0','Rua Tião',235,'Centro','Casa',5,'AB','positivo',21,'f',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(13,'junior castro','1996-02-06','02288219246','11659599','estrada do calafate',142,'nova esperança','avenida',2,'A','positivo',22,'m',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,'jailson','2017-06-06',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(15,'jailson','2017-06-14','0229383','1332',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(16,'jailson','2017-06-03','009484','32323','rua girassol',23,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(17,'jailson','2017-06-03','0932323','23232','rua girassol',34,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(18,'jailson','1993-08-07','0233923','2342','rua girassol',34,'jardim primavera',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(19,'jailson','1993-08-07','092333','232323','rua girassol',34,'jardim primavera','teste',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(23,'jailson','1993-08-07','092333','232323','rua girassol',34,'jardim primavera','teste',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(24,'jailson','1993-08-07','092333','232323','rua girassol',34,'jardim primavera','teste',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(28,'jailson','1993-08-07','093442','09344','rua girassol',34,'jardim primavera','teste',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(31,'jailson','1994-08-07','0933889','8334','rua girassol',34,'jardim primavera','teste',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(32,'jailson','1993-08-07','0993873','3432434','rua girassol',34,'jardim primavera','teste',1,'A',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(33,'jailson','1993-08-07','0993873','3432434','rua girassol',34,'jardim primavera','teste',1,'A',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(34,'jailson','1993-08-07','0993873','3432434','rua girassol',34,'jardim primavera','teste',1,'A',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(35,'jailson','1993-08-07','0993873','3432434','rua girassol',34,'jardim primavera','teste',1,'A',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(36,'jailson','1994-02-02','02333','23332','rua girassol',34,'jardim primavera','teste',1,'A','Positivo',34,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(37,'jailson','1994-02-02','02333','23332','rua girassol',34,'jardim primavera','teste',1,'A','Positivo',34,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(38,'jailson','1994-02-02','02333','23332','rua girassol',34,'jardim primavera','teste',1,'A','Positivo',34,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(39,'jailson','1994-02-02','02333','23332','rua girassol',34,'jardim primavera','teste',1,'A','Positivo',34,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(40,'jailson','1993-08-07','093984','34344','rua girassol',34,'jardim primavera','teste',1,'A','Positivo',23,'m',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(41,'jailson','1993-08-07','0224598','23434','rua girassol',34,'jardim primavera','teste',1,'A','Positivo',23,'m','2017-06-03',23422,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(42,'jailson','1993-08-07','02288323','2332','rua girassol',43,'jardim primavera','teste',1,'A','Positivo',23,'m','2017-06-03',1234,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(43,'jailson','1993-08-07','92233','23484','rua girassol',34,'jardim primavera','teste',1,'A','Positivo',23,'m','2017-06-03',23323,'SSP','B','jailson',NULL,'S','NA',NULL),(44,'jailson','1993-08-07','009987','34343','rua girassol',12,'jardim primavera','teste',1,'A','Positivo',23,'m','2017-06-03',1,'SSP',NULL,NULL,NULL,NULL,NULL,NULL),(45,'jailson','1993-08-07','009987','34343','rua girassol',12,'jardim primavera','teste',1,'A','Positivo',23,'m','2017-06-03',1,'SSP',NULL,NULL,NULL,NULL,NULL,NULL),(46,'jailson','1993-08-07','098776','23332','rua girassol',34,'jardim primavera','teste',1,'A','Positivo',23,'m','2017-06-03',1,'SSP',NULL,NULL,NULL,NULL,NULL,NULL),(47,'jailson','2017-06-03','098233','23323','rua girassol',34,'jardim primavera','teste',1,'A','Positivo',23,'m','2017-06-03',1,'SSP',NULL,NULL,NULL,NULL,NULL,NULL),(48,'jailson','2017-05-31','232323','232323','rua girassol',34,'jardim primavera','teste',1,'A','Positivo',23,'m','2017-06-03',2332,'SSP',NULL,NULL,NULL,NULL,NULL,NULL),(49,'jailson','2017-05-31','338484','3443','rua irasol',23,'ardim primavera','teste',1,'A','Positivo',223,'m','2017-06-03',1,'SSP',NULL,NULL,NULL,NULL,NULL,NULL),(50,'jailson','2017-05-30','92983783','23322','girassol',34,'jardim primavera','teste',1,'A','Positivo',23,'m','2017-06-03',23,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(51,'jailson','2017-05-29','023342','23233','girassol',34,'jardim primavera','teste',1,'A','Positivo',23,'m','2017-06-03',234,'SSP',NULL,NULL,NULL,NULL,NULL,NULL),(52,'jailson','2017-05-30','02332','2332','girassol',23,'jardim primavera','teste',1,'A','Positivo',23,'m','2017-06-03',234,'SSP','B',NULL,NULL,NULL,NULL,NULL),(53,'jailsiocdf','1994-07-08','23423','34344','girahhgfhg',34,'ffdfdfff','fdff',1,'A','Positivo',34,'f','2017-06-03',23423,'SSP','B',NULL,NULL,NULL,NULL,NULL),(54,'jailson','2017-05-30','34434','3444','giraasil',34,'tetse','teste',1,'A','Positivo',23,'m','2017-06-03',232323,'SSP','B',NULL,NULL,NULL,NULL,NULL),(55,'jailson','2017-05-30','3344','33434','teste',3,'teste','tetse',1,'A','Positivo',23,'m','2017-06-03',2332,'SSP','N',NULL,NULL,NULL,NULL,NULL),(56,'jaillson','2017-06-03','2332','23232','gete',23,'gddfd','teste',1,'A','Positivo',23,'m','2017-06-03',2,'SSP','B',NULL,NULL,NULL,NULL,NULL),(57,'jailson','2017-05-30','34323','34232','girassol',23,'jardim','teste',1,'A','Positivo',23,'m','2017-06-03',23323,'SSP','B','denilio','raimunda',NULL,NULL,NULL),(58,'jailson','2017-05-30','234423','32332','teste',34,'jardim','teste',1,'A','Positivo',23,'m','2017-06-03',232332,'SSP','B','denilio','raimunda','S','NA','adda');
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

-- Dump completed on 2017-06-03 17:43:02