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
-- Table structure for table `cidade`
--

DROP TABLE IF EXISTS `cidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) DEFAULT NULL,
  `estado` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Cidade_estado` (`estado`)
) ENGINE=InnoDB AUTO_INCREMENT=5565 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cidade`
--

LOCK TABLES `cidade` WRITE;
/*!40000 ALTER TABLE `cidade` DISABLE KEYS */;
INSERT INTO `cidade` VALUES (79,'Acrelândia',1),(80,'Assis Brasil',1),(81,'Brasiléia',1),(82,'Bujari',1),(83,'Capixaba',1),(84,'Cruzeiro do Sul',1),(85,'Epitaciolândia',1),(86,'Feijó',1),(87,'Jordão',1),(88,'Mâncio Lima',1),(89,'Manoel Urbano',1),(90,'Marechal Thaumaturgo',1),(91,'Plácido de Castro',1),(92,'Porto Acre',1),(93,'Porto Walter',1),(94,'Rio Branco',1),(95,'Rodrigues Alves',1),(96,'Santa Rosa do Purus',1),(97,'Sena Madureira',1),(98,'Senador Guiomard',1),(99,'Tarauacá',1),(100,'Xapuri',1),(219,'Alvarães',3),(220,'Amaturá',3),(221,'Anamã',3),(222,'Anori',3),(223,'Apuí',3),(224,'Atalaia do Norte',3),(225,'Autazes',3),(226,'Barcelos',3),(227,'Barreirinha',3),(228,'Benjamin Constant',3),(229,'Beruri',3),(230,'Boa Vista do Ramos',3),(231,'Boca do Acre',3),(232,'Borba',3),(233,'Caapiranga',3),(234,'Canutama',3),(235,'Carauari',3),(236,'Careiro',3),(237,'Careiro da Várzea',3),(238,'Coari',3),(239,'Codajás',3),(240,'Eirunepé',3),(241,'Envira',3),(242,'Fonte Boa',3),(243,'Guajará',3),(244,'Humaitá',3),(245,'Ipixuna',3),(246,'Iranduba',3),(247,'Itacoatiara',3),(248,'Itamarati',3),(249,'Itapiranga',3),(250,'Japurá',3),(251,'Juruá',3),(252,'Jutaí',3),(253,'Lábrea',3),(254,'Manacapuru',3),(255,'Manaquiri',3),(256,'Manaus',3),(257,'Manicoré',3),(258,'Maraã',3),(259,'Maués',3),(260,'Nhamundá',3),(261,'Nova Olinda do Norte',3),(262,'Novo Airão',3),(263,'Novo Aripuanã',3),(264,'Parintins',3),(265,'Pauini',3),(266,'Presidente Figueiredo',3),(267,'Rio Preto da Eva',3),(268,'Santa Isabel do Rio Negro',3),(269,'Santo Antônio do Içá',3),(270,'São Gabriel da Cachoeira',3),(271,'São Paulo de Olivença',3),(272,'São Sebastião do Uatumã',3),(273,'Silves',3),(274,'Tabatinga',3),(275,'Tapauá',3),(276,'Tefé',3),(277,'Tonantins',3),(278,'Uarini',3),(279,'Urucará',3),(280,'Urucurituba',3);
/*!40000 ALTER TABLE `cidade` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-18 22:17:32
