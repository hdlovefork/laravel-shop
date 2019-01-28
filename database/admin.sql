-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: laravel_shop
-- ------------------------------------------------------
-- Server version	5.7.22-log

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
-- Dumping data for table `admin_menu`
--

LOCK TABLES `admin_menu` WRITE;
/*!40000 ALTER TABLE `admin_menu` DISABLE KEYS */;
INSERT INTO `admin_menu` VALUES (1,0,1,'后台首页','fa-bar-chart','/',NULL,'2018-12-06 23:06:16'),(2,0,10,'后台管理','fa-tasks',NULL,NULL,'2019-01-27 16:16:24'),(3,2,11,'管理员','fa-users','auth/users',NULL,'2019-01-27 16:16:25'),(4,2,12,'角色','fa-user','auth/roles',NULL,'2019-01-27 16:16:25'),(5,2,13,'权限','fa-ban','auth/permissions',NULL,'2019-01-27 16:16:25'),(6,2,14,'菜单','fa-bars','auth/menu',NULL,'2019-01-27 16:16:25'),(7,2,15,'操作日志','fa-history','auth/logs',NULL,'2019-01-27 16:16:25'),(8,0,9,'订单管理','fa-align-justify','/orders','2018-12-02 17:46:53','2019-01-27 16:16:24'),(9,0,8,'优惠券管理','fa-tags','coupon_codes','2018-12-03 00:08:48','2019-01-27 16:16:24'),(10,0,4,'商品管理','fa-ambulance','products','2018-12-03 22:26:45','2018-12-04 23:54:02'),(11,0,3,'用户管理','fa-users','users','2018-12-03 23:18:37','2018-12-04 23:54:02'),(12,0,2,'分类管理','fa-certificate','/categories','2018-12-04 23:53:53','2018-12-04 23:54:02'),(13,10,5,'众筹商品','fa-flag-checkered','crowdfunding_products','2018-12-06 23:40:21','2018-12-06 23:43:44'),(14,10,6,'普通商品','fa-cubes','products','2018-12-06 23:43:36','2018-12-06 23:43:44'),(15,10,7,'秒杀商品','fa-bolt','/seckill_products','2019-01-27 16:16:03','2019-01-27 16:16:24');
/*!40000 ALTER TABLE `admin_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_permissions`
--

LOCK TABLES `admin_permissions` WRITE;
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
INSERT INTO `admin_permissions` VALUES (1,'All permission','*','','*',NULL,NULL),(2,'Dashboard','dashboard','GET','/',NULL,NULL),(3,'Login','auth.login','','/auth/login\r\n/auth/logout',NULL,NULL),(4,'User setting','auth.setting','GET,PUT','/auth/setting',NULL,NULL),(5,'Auth management','auth.management','','/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs',NULL,NULL),(6,'商品管理','products','','/products*','2018-12-03 23:14:55','2018-12-03 23:15:12'),(7,'订单管理','orders','','/orders*','2018-12-03 23:15:41','2018-12-03 23:15:41'),(8,'优惠券管理','coupon_codes','','/coupon_codes*','2018-12-03 23:16:22','2018-12-03 23:16:22'),(9,'用户管理','users','','/users*','2018-12-03 23:23:32','2018-12-03 23:23:32');
/*!40000 ALTER TABLE `admin_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_menu`
--

LOCK TABLES `admin_role_menu` WRITE;
/*!40000 ALTER TABLE `admin_role_menu` DISABLE KEYS */;
INSERT INTO `admin_role_menu` VALUES (1,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_permissions`
--

LOCK TABLES `admin_role_permissions` WRITE;
/*!40000 ALTER TABLE `admin_role_permissions` DISABLE KEYS */;
INSERT INTO `admin_role_permissions` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL),(2,3,NULL,NULL),(2,4,NULL,NULL),(2,6,NULL,NULL),(2,7,NULL,NULL),(2,8,NULL,NULL),(2,9,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_users`
--

LOCK TABLES `admin_role_users` WRITE;
/*!40000 ALTER TABLE `admin_role_users` DISABLE KEYS */;
INSERT INTO `admin_role_users` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_roles`
--

LOCK TABLES `admin_roles` WRITE;
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
INSERT INTO `admin_roles` VALUES (1,'Administrator','administrator','2018-12-02 17:41:16','2018-12-02 17:41:16'),(2,'运营','operator','2018-12-03 23:18:10','2018-12-03 23:18:10');
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_user_permissions`
--

LOCK TABLES `admin_user_permissions` WRITE;
/*!40000 ALTER TABLE `admin_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_user_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` VALUES (1,'admin','$2y$10$mqPSSJrs1Hnxmx6arcraAerLDVAL92Xs0uyTzpLC11beP25ea97VO','Administrator',NULL,'Miz60pvY8aiRgEmKqBF0WyocSPL9XkJgW2mZqYrNQyEUHp4NjOmjJwslkaVa','2018-12-02 17:41:16','2018-12-02 17:41:16'),(2,'operator','$2y$10$y0fw7yDPwApjEqIpQnz8juayDX5VIEftrYWn.U.8I2nB8y/WyPRHW','运营',NULL,'uu9Uxcnzzw0hxMaqRAzqVxcuQ4x75mvYHp1mpWDL4zdXb1FI1YrsDS3zHAkP','2018-12-03 23:20:43','2018-12-03 23:20:43');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-28  0:50:14
