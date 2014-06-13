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

LOCK TABLES `Region` WRITE;
/*!40000 ALTER TABLE `Region` DISABLE KEYS */;
INSERT INTO `Region` VALUES (1,2,'Europe/Paris','UTC+1','Alsace'),(2,2,'Europe/Paris','UTC+1','Aquitaine'),(3,2,'Europe/Paris','UTC+1','Auvergne'),(4,2,'Europe/Paris','UTC+1','Basse-Normandie'),(5,2,'Europe/Paris','UTC+1','Bourgogne'),(6,2,'Europe/Paris','UTC+1','Bretagne'),(7,2,'Europe/Paris','UTC+1','Centre'),(8,2,'Europe/Paris','UTC+1','Champagne-Ardenne'),(9,2,'Europe/Paris','UTC+1','Corse'),(10,2,'Europe/Paris','UTC+1','Franche-Comté'),(11,2,'Europe/Paris','UTC+1','Haute-Normandie'),(12,2,'Europe/Paris','UTC+1','Île-de-France'),(13,2,'Europe/Paris','UTC+1','languageuedoc-Roussillon'),(14,2,'Europe/Paris','UTC+1','Limousin'),(15,2,'Europe/Paris','UTC+1','Lorraine'),(16,2,'Europe/Paris','UTC+1','Midi-Pyrénées'),(17,2,'Europe/Paris','UTC+1','Nord-Pas-de-Calais'),(18,2,'Europe/Paris','UTC+1','Pays de la Loire'),(19,2,'Europe/Paris','UTC+1','Picardie'),(20,2,'Europe/Paris','UTC+1','Poitou-Charentes'),(21,2,'Europe/Paris','UTC+1','Provence-Alpes-CôtedAzur'),(22,2,'Europe/Paris','UTC+1','Rhône-Alpes'),(23,2,'Europe/Paris','UTC+1','Outre Mer'),(24,2,'Europe/Paris','UTC+1','Monaco'),(25,1,'Europe/Paris','UTC+1','Bruxelles-Capitale'),(26,1,'Europe/Paris','UTC+1','Région Flamande'),(27,1,'Europe/Paris','UTC+1','Région Wallonne'),(28,1,'Europe/Brussels','UTC+1','Bruxelles-Capitale'),(29,1,'Europe/Brussels','UTC+1','Région Flamande'),(30,1,'Europe/Brussels','UTC+1','Région Wallonne'),(31,1,'Europe/Brussels','UTC+1','Brussels Hoofdstedelijk Gewest'),(32,1,'Europe/Brussels','UTC+1','Vlaams Gewest'),(33,1,'Europe/Brussels','UTC+1','Waals Gewest');
/*!40000 ALTER TABLE `Region` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;