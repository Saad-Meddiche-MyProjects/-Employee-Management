-- MariaDB dump 10.19  Distrib 10.5.12-MariaDB, for Linux (x86_64)
--
-- Host: mysql.hostinger.ro    Database: u574849695_18
-- ------------------------------------------------------
-- Server version	10.5.12-MariaDB-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `employe`
--

DROP TABLE IF EXISTS `employe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `matricule` int(11) NOT NULL,
  `depart` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `date_emb` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employe`
--

LOCK TABLES `employe` WRITE;
/*!40000 ALTER TABLE `employe` DISABLE KEYS */;
INSERT INTO `employe` VALUES (1,'Annetta','Cummings',540244606,'in','illo','1993-09-18 20:04:49',8),(2,'Shany','Green',1934,'soluta','expedita','2006-11-18 10:12:15',2),(3,'Seamus','Dare',1223,'ullam','aliquam','1982-09-21 06:01:09',1),(4,'Vivianne','Bashirian',8502825,'eligendi','qui','1992-12-25 22:16:30',1),(5,'Will','Buckridge',5469,'est','voluptatem','1988-06-02 05:07:48',3),(6,'Gerardo','Satterfield',4,'id','quam','2000-08-11 21:38:47',5),(7,'Brook','Haag',47800,'voluptatum','eum','1977-11-17 01:09:54',3),(8,'Mireille','Heathcote',8333901,'deserunt','est','1993-12-08 20:15:04',8),(9,'Kameron','Hayes',5315,'voluptatum','magnam','1991-03-19 09:39:48',8),(10,'Olaf','Jakubowski',900711430,'alias','unde','1971-09-09 13:25:07',9),(11,'Cydney','Lueilwitz',2,'et','voluptatibus','1973-08-11 21:06:59',7),(12,'Shany','Corkery',1,'voluptatum','accusantium','1981-03-19 08:28:52',3),(13,'Adrian','Huels',22155828,'fuga','maxime','1997-01-01 10:42:45',9),(14,'Timmy','Bartoletti',8,'quia','et','1983-11-25 05:41:27',4),(15,'Kasey','Mosciski',35,'illo','tempora','2004-04-26 22:16:34',8),(16,'Zena','Goyette',1792461,'omnis','eius','1988-05-10 11:05:04',4),(17,'Zelda','Sporer',7547,'voluptatum','quia','1999-12-01 10:33:00',8),(18,'Tiara','Hirthe',51459992,'aut','hic','1981-02-04 10:28:11',2),(19,'Josiah','McDermott',7,'qui','quod','1982-11-19 14:12:11',8),(20,'Nolan','Schaefer',7,'non','earum','1998-06-09 15:58:18',9),(21,'Jarrell','Beatty',5979,'reprehenderit','ipsam','2018-01-11 05:59:21',5),(22,'Burnice','Bosco',55762,'recusandae','velit','1988-03-13 23:56:32',6),(23,'Eldridge','Feil',77768165,'numquam','fugit','1971-03-17 02:28:58',1),(24,'Santa','Gerlach',5546435,'ea','non','1974-08-22 14:07:45',1),(25,'Mark','Will',376802,'assumenda','ut','1984-12-30 14:22:16',8),(26,'Albin','Witting',9336,'odit','deserunt','1980-01-07 16:14:34',9),(27,'Alejandrin','Keeling',33544764,'et','laudantium','1989-07-28 07:42:46',4),(28,'Casey','Nolan',660588,'non','qui','2003-03-15 18:17:08',8),(29,'Adolf','Bechtelar',34,'ex','impedit','2007-01-23 16:16:37',7),(30,'Gwendolyn','Leannon',847339583,'sed','magni','1992-10-01 14:18:43',5),(31,'Parker','Bayer',4533,'qui','eos','2003-10-08 00:50:20',2),(32,'Gracie','Reynolds',242624148,'est','expedita','2010-10-03 16:50:08',8),(33,'Jaquelin','Tillman',6838789,'est','qui','1995-10-22 16:58:13',9),(34,'Ollie','Jacobi',15,'incidunt','laudantium','1999-11-20 15:31:02',5),(35,'Kenna','Volkman',0,'corporis','eos','2015-08-04 19:02:09',2),(36,'Wilson','Muller',2603520,'culpa','qui','1983-06-28 01:24:25',5),(37,'Shany','Bins',11356447,'repellat','nemo','2009-12-03 07:36:25',5),(38,'Tony','Hickle',87140,'dolor','voluptate','2012-09-19 11:22:20',3),(39,'Ulices','Rohan',904799,'et','fugit','2006-03-01 10:49:06',4),(40,'Lilyan','Gibson',1205,'enim','voluptatem','1980-11-20 11:19:37',4),(41,'Nickolas','Jakubowski',9053,'quae','dolorem','1971-11-09 06:04:09',4),(42,'Queenie','Hoppe',0,'nostrum','iure','2015-01-24 10:01:25',1),(43,'Winfield','Murazik',8455,'beatae','eum','1996-01-23 20:10:24',2),(44,'Peter','Balistreri',0,'architecto','culpa','1981-08-16 04:29:54',6),(45,'Ivah','Howe',7933497,'voluptatem','id','2018-05-14 15:43:03',3),(46,'Lucinda','Ryan',783894641,'at','nisi','1989-03-19 06:03:25',9),(47,'Emil','Rogahn',68759091,'iure','culpa','2019-07-17 07:04:14',6),(48,'Fletcher','Green',79856,'ut','autem','2003-07-04 03:45:52',9),(49,'Rachael','Pfannerstill',482923,'sit','unde','1977-11-12 00:17:35',6),(50,'Olaf','Morissette',283937,'illo','sit','2013-08-02 23:14:20',4),(51,'Keven','Feil',6686840,'velit','magni','2007-07-23 19:48:30',4),(52,'Tracey','Rowe',324659,'totam','blanditiis','1984-12-23 08:22:21',8),(53,'Morgan','Koelpin',89488702,'nam','inventore','2000-07-16 14:49:08',2),(54,'Dora','Flatley',84897426,'ex','quas','2017-10-09 17:46:43',7),(55,'Reina','Lakin',8560777,'voluptas','ut','1992-09-06 17:37:59',5),(56,'Erich','Corwin',9155,'eos','eius','1988-11-21 21:18:20',6),(57,'Kyra','Harvey',280865600,'ratione','aut','1978-04-14 08:56:51',6),(58,'Albert','Hammes',0,'non','fugiat','2015-02-13 03:38:06',6),(59,'Hermann','Leffler',599,'aut','rem','2005-08-22 11:34:46',3),(60,'Colleen','Hackett',139,'iste','et','1972-11-07 11:57:34',1),(61,'Mckayla','West',26374,'delectus','totam','1972-11-15 15:24:58',5),(62,'Bernita','Armstrong',7720435,'natus','optio','1997-03-14 23:51:59',6),(63,'Bridie','Hand',9825,'quidem','ad','1987-10-30 15:53:44',7),(64,'Domenica','Buckridge',54975975,'et','et','2016-03-25 23:52:33',3),(65,'Hazel','Grant',725821648,'animi','aspernatur','1995-03-23 18:28:37',2),(66,'Shane','Beatty',6074863,'repellat','sint','1983-07-30 07:22:53',1),(67,'Prince','Wiza',8665,'facere','illo','1978-06-11 01:59:39',5),(68,'Celestino','Anderson',8,'magnam','temporibus','2007-02-08 17:38:10',8),(69,'Isai','Parisian',5496,'voluptatibus','occaecati','2020-04-27 19:23:54',2),(70,'Rachael','Larkin',609066,'sunt','dolorem','2010-09-23 11:44:59',8),(71,'Rosina','Corwin',0,'ducimus','pariatur','2004-03-11 10:11:51',4),(72,'Jasen','Crooks',228300,'earum','nisi','1991-11-20 07:17:12',9),(73,'Kane','Buckridge',933591,'vel','quibusdam','1983-08-18 00:41:35',7),(74,'Christina','Kautzer',2,'ullam','ipsam','2014-05-23 23:17:54',2),(75,'Joesph','Glover',7273370,'fuga','velit','1981-09-30 16:31:44',1),(76,'Salvador','Abernathy',826,'velit','est','1984-05-07 12:33:29',4),(77,'Claude','Jacobi',1175,'temporibus','aliquid','2004-01-06 07:49:31',2),(78,'Keith','Murphy',961976977,'quasi','quos','2003-04-15 01:31:57',5),(79,'Dale','Jenkins',9,'error','non','2005-06-30 16:56:39',3),(80,'Winston','Wolf',0,'sint','quas','1981-08-20 06:15:08',8),(81,'Madaline','Kshlerin',39957,'quia','voluptatum','1981-01-09 11:43:14',5),(82,'Rodrigo','Conroy',99,'voluptatibus','magnam','1987-09-01 21:25:25',8),(83,'Kelvin','McClure',184280166,'optio','asperiores','1988-06-08 02:43:31',2),(84,'Walton','Corkery',0,'voluptates','dolore','1982-03-16 14:13:05',7),(85,'Conrad','Schinner',45,'provident','quasi','2010-08-16 12:03:48',1),(86,'Christop','Collins',26337102,'ut','ipsum','2020-12-30 17:09:32',2),(87,'Guiseppe','Murphy',76229,'velit','aut','1987-08-31 19:11:53',5),(88,'Clementina','West',0,'at','quae','1988-04-13 12:38:52',8),(89,'Lydia','Reilly',7243199,'quisquam','dolorum','2004-10-05 23:47:36',7),(90,'Mac','Zulauf',537798244,'aut','voluptas','2020-12-30 08:34:52',5),(91,'Kennith','Raynor',459883,'animi','porro','1992-02-04 05:02:26',1),(92,'Clementine','Abshire',0,'odio','aspernatur','2019-12-19 18:33:45',9),(93,'Oran','Block',2836350,'dolorem','assumenda','2015-10-06 07:38:14',7),(94,'Elena','Gorczany',33,'nostrum','nisi','1995-07-24 07:57:07',6),(95,'Brayan','Schroeder',3652566,'esse','eius','2008-02-29 17:08:19',5),(96,'Ethel','Dare',86,'necessitatibus','vitae','2011-05-09 19:53:58',3),(97,'Percival','Hauck',798217,'omnis','et','2004-08-17 21:17:16',3),(98,'London','Morissette',555,'aperiam','cupiditate','1995-07-29 01:21:03',9),(99,'Cheyanne','Heaney',59,'eos','ea','1980-08-11 11:30:26',3),(100,'Richmond','Wisozk',38401329,'delectus','inventore','2009-10-31 03:45:55',2);
/*!40000 ALTER TABLE `employe` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-16 16:13:56
