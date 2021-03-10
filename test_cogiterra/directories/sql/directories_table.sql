-- MySQL dump 10.13  Distrib 5.7.24, for Win64 (x86_64)
--
-- Host: localhost    Database: bdd_test
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `directories_table`
--

DROP TABLE IF EXISTS `directories_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directories_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civilite` enum('M','F','N') NOT NULL,
  `nom` varchar(20) NOT NULL,
  `adresse` varchar(150) NOT NULL,
  `cp` char(5) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `pays` varchar(30) NOT NULL,
  `date_naissance` date NOT NULL,
  `tel` varchar(10) NOT NULL,
  `fax` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directories_table`
--

LOCK TABLES `directories_table` WRITE;
/*!40000 ALTER TABLE `directories_table` DISABLE KEYS */;
INSERT INTO `directories_table` VALUES (1,'M','Mcgeeee','80 Rue Marie De Médicis','06150','CANNES-LA-BOCCA','France','1991-04-20','0615386066','0423943184','sit@miAliquamgravida.ca','https://www.www.accuweather.com'),(2,'F','Conrad','68 rue des lieutemants Thomazo.','59500','DOUAI','France','1996-06-20','0757849399','0150564260','luctus.ut@scelerisque.org','https://www.mashable.com'),(3,'F','Flowers','119 rue du Faubourg National','95150','TAVERNY','France','1993-06-22','0185040951','0560860054','Sed.malesuada@porttitor.net','https://www.marketwatch.com'),(4,'M','Mckinney','131 Place Charles de Gaulle','59650','VILLENEUVE','France','1999-05-20','0593348498','0633928997','id.risus.quis@semNullainterdum','https://www.blog.com'),(5,'M','bouh','33 rue Saint Germain','33150','GARGES-LES-GONESSE','France','1996-07-21','0130679993','0647878611','odio.semper@Aliquamnecenim.com','https://www.goodreads.com'),(6,'F','Baxter','70  rue Marguerite','94350','VILLIERS-SUR-MARNE','France','1992-04-20','0927269848','0163179728','Suspendisse.sagittis.Nullam@no','https://www.nymag.com'),(7,'M','Guy','61  Boulevard de Normandie','38600','FONTAINE','France','1991-09-21','0999781993','0672174971','arcu.eu@tortor.ca','https://www.hc360.com'),(8,'F','Lambert','119  rue Gontier-Patin','13100','AIX-EN-PROVENCE','France','1997-07-21','0814610946','0388337213','lorem@felisullamcorperviverra.','https://www.washingtonpost.com'),(9,'M','Floyd','106  rue Clement Marot','66000','PERPIGNAN','France','1998-01-21','0390016913','0715028881','Proin.vel.arcu@Suspendisse.co.','https://www.youku.com'),(10,'M','Adams','104  avenue de Bouvines','89100','SENS','France','1991-01-21','0276538618','0355544061','sem.egestas@Craslorem.co.uk','https://www.wikimedia.org'),(11,'N','Belmehdi','29 rue du poteau','75018','Paris','France','2008-06-09','0611287268','0150564260','djbceihdbcei@hjebcieuc.com','https://camaradev.com');
/*!40000 ALTER TABLE `directories_table` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-10 13:27:26
