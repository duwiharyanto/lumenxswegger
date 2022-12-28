-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for osx10.10 (x86_64)
--
-- Host: localhost    Database: techtalk_swegger
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

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
-- Table structure for table `migrations`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2022_04_16_233403_create_table_user',1);
INSERT INTO `migrations` VALUES (2,'2022_04_16_233908_change_user_table',2);
INSERT INTO `migrations` VALUES (3,'2022_04_16_234106_drop_user_table',3);
INSERT INTO `migrations` VALUES (4,'2022_04_17_075635_create_unit',4);
INSERT INTO `migrations` VALUES (5,'2022_06_01_143740_add_token_to_users_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unit`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unit` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unit`
--

LOCK TABLES `unit` WRITE;
/*!40000 ALTER TABLE `unit` DISABLE KEYS */;
INSERT INTO `unit` VALUES (1,'HCM','Tim HCM','2022-04-17 08:14:36','2022-04-17 08:14:36');
INSERT INTO `unit` VALUES (2,'BPM','Tim Army','2022-04-17 08:14:59','2022-04-17 08:14:59');
/*!40000 ALTER TABLE `unit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'duwi','201232646@uii.ac.id','$2y$10$jCn01a4dClp7.SbL2Zfr5O15v6nQ.W9Ek4WCc3fFeQ71y/7sVnIYm','2022-06-01 16:27:58','2022-04-17 07:21:27','eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvcHVibGljXC9hcGlcL3YxXC9sb2dpbiIsImlhdCI6MTY1NDEwMDg3OCwiZXhwIjoxNjU0MTA0NDc4LCJuYmYiOjE2NTQxMDA4NzgsImp0aSI6IlZ6VHFwWWdERDc0WENsZlAiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.uYkttDZN3BsRLa7-V6EwNtOYeijQ84xY6Kwy454NiIk');
INSERT INTO `user` VALUES (6,'duwi2','201232646@uii.ac.id','$2y$10$Iph0dYLI759NLB.61fEfUu0sFOJk/i3.2vRXH5uB1bgVrIj8zDG3q','2022-06-01 16:28:32','2022-06-01 16:17:43','eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvcHVibGljXC9hcGlcL3YxXC9sb2dpbiIsImlhdCI6MTY1NDEwMDkxMiwiZXhwIjoxNjU0MTA0NTEyLCJuYmYiOjE2NTQxMDA5MTIsImp0aSI6IkxGaXNXcjY5c25VTkVvaWEiLCJzdWIiOjYsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.srRfdphBZhHP-T0-OOvW2G01jy_ndWIUK54IMunne0M');
INSERT INTO `user` VALUES (7,'duwi3','201232646@uii.ac.id','$2y$10$qbhF36mi9KSil/YhGi1NI.dUKQmEaSM06UC3go1tZeugl1As46bU2','2022-06-01 16:27:07','2022-06-01 16:27:07',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'techtalk_swegger'
--
