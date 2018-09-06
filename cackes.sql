-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: Cakes
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

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
-- Table structure for table `bill_detail`
--

DROP TABLE IF EXISTS `bill_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bill_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `bill_id` int(10) unsigned NOT NULL,
  `quanity` int(11) NOT NULL,
  `unit_price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bill_detail_bill_id_foreign` (`bill_id`),
  KEY `bill_detail_product_id_foreign` (`product_id`),
  CONSTRAINT `bill_detail_bill_id_foreign` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`id`),
  CONSTRAINT `bill_detail_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bill_detail`
--

LOCK TABLES `bill_detail` WRITE;
/*!40000 ALTER TABLE `bill_detail` DISABLE KEYS */;
INSERT INTO `bill_detail` VALUES (1,3,1,4,37500,'2018-09-06 19:37:33','2018-09-06 19:37:33'),(2,5,1,2,160000,'2018-09-06 19:37:33','2018-09-06 19:37:33'),(3,1,1,1,150000,'2018-09-06 19:37:33','2018-09-06 19:37:33');
/*!40000 ALTER TABLE `bill_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bills`
--

DROP TABLE IF EXISTS `bills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `total` double(11,3) NOT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bills_user_id_foreign` (`user_id`),
  CONSTRAINT `bills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bills`
--

LOCK TABLES `bills` WRITE;
/*!40000 ALTER TABLE `bills` DISABLE KEYS */;
INSERT INTO `bills` VALUES (1,'2018-09-07 00:00:00',3,620000.000,'COD','banh nay cung duoc','2018-09-06 19:37:32','2018-09-06 19:37:32');
/*!40000 ALTER TABLE `bills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Bánh mặn','Nếu từng bị mê hoặc bởi các','banh-man-thu-vi-nhat-1.jpg',NULL,NULL),(2,'Bánh ngọt','bánh ngọt là một loại thức ăn thường.','20131108144733.jpg',NULL,NULL),(3,'Bánh trái cây','Bánh trái cây, hay còn gọi là bánh hoa quả, l','banhtraicay.jpg',NULL,NULL),(4,'Bánh kem','Crepe là một món bánh nổi tiếng của Pháp, nhưng từ khi du nhập vào Việt Nam món bánh đẹp mắt, ngon miệng này đã làm cho biết bao bạn trẻ phải “xiêu lòng”','crepe.jpg',NULL,NULL),(5,'Bánh Pizza','Pizza đã không chỉ còn là một món ăn được ưa chuộng khắp thế giới mà còn .','pizza.jpg',NULL,NULL),(6,'Bánh su kem','Bánh su kem là món bánh ngọt ở dạng kem được làm từ các nguyên liệu như bột mì, trứng, sữa, bơ.... ','sukemdau.jpg',NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `product_id` int(11) NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (13,'2014_10_12_000000_create_users_table',1),(14,'2014_10_12_100000_create_password_resets_table',1),(15,'2018_08_16_014533_create_bills_table',1),(16,'2018_08_16_014629_create_categories_table',1),(17,'2018_08_16_014630_create_products_table',1),(18,'2018_08_16_014732_create_bill_detail_table',1),(19,'2018_08_16_015023_create_news_table',1),(20,'2018_08_16_015056_create_slides_table',1),(21,'2018_08_17_043219_create_comments_table',1),(22,'2018_08_17_043220_alter_table_products_add_colum_status',1),(23,'2018_08_17_043221_create_contacts_table',1),(24,'2018_08_29_163831_alter_users_table_add_colum_facebook_id',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('thuydungcnptit@gmail.com','WC4K34jQdfiSZg7BAULT','2018-09-06 20:16:14');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `promotion_price` double(8,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Bánh Crepe Sầu riêng',5,'Bánh crepe sầu riêng nhà làm',150000.00,12000.00,'_1.jpeg','hộp',NULL,'2018-09-06 08:20:42',1),(3,'Bánh Crepe Sầu riêng - Chuối',5,'Bánh Crepe Sầu riêng - Chuối',150000.00,130000.00,'_banh-ngon.jpg','hộp',NULL,'2018-09-06 08:55:00',0),(4,'Bánh Crepe Đào',5,'Bánh Crepe Đào nhà làm',160000.00,0.00,'_cac-loai-banh-ngon.jpg','hộp',NULL,'2018-09-06 08:55:14',0),(5,'Bánh Crepe Dâu',5,'Bánh Crepe Dâu nhà làm',160000.00,0.00,'_foody-l-epicerie-du-metropole-567-635950764363392825.jpg','hộp',NULL,'2018-09-06 08:55:28',1),(6,'Bánh Crepe Pháp',5,'Bánh crepe sầu riêng nhà làm',200000.00,160000.00,'_cach-lam-banh-gio.jpg','hộp',NULL,'2018-09-06 08:55:44',1),(7,'Bánh Crepe Táo',5,'Bánh crepe sầu riêng nhà làm',180000.00,0.00,'_cac-mon-banh-ngon-cho-be-voi-cach-lam-don-gian-1-1.jpg','hộp',NULL,'2018-09-06 08:55:58',0),(8,'Bánh Crepe Chocolate',5,'Bánh crepe sầu riêng nhà làm',180000.00,160000.00,'_anh12.jpg','hộp',NULL,'2018-09-06 08:56:16',1),(9,'Bánh Crepe Trà xanh',5,'Bánh crepe sầu riêng nhà làm',160000.00,150000.00,'_raspberry.jpg','hộp',NULL,'2018-09-06 08:57:53',0),(10,'Bánh Crepe Sầu riêng và Dứa',5,'Bánh crepe sầu riêng nhà làm',180000.00,160000.00,'_strawberry-delight636102445035635173.jpg','hộp',NULL,'2018-09-06 08:58:08',1),(11,'Bánh Gato Trái cây Việt Quất',3,'Bánh crepe sầu riêng nhà làm',250000.00,0.00,'_crepe-chuoi.jpg','hộp',NULL,'2018-09-06 08:58:21',0),(12,'Bánh kem Chocolate Dâu',3,'Bánh crepe sầu riêng nhà làm',180000.00,160000.00,'_p1392962167_banh74.jpg','hộp',NULL,'2018-09-06 08:58:31',1),(13,'Bánh sinh nhật rau câu trái cây',3,'Bánh crepe sầu riêng nhà làm',300000.00,0.00,'_p1392962167_banh74.jpg','hộp',NULL,'2018-09-06 08:58:44',0),(14,'Bánh kem Dâu III',3,'Bánh crepe sầu riêng nhà làm',300000.00,280000.00,'_Fruit-Cake_7979.jpg','hộp',NULL,'2018-09-06 08:58:56',1),(15,'Bánh kem Dâu I',3,'Bánh crepe sầu riêng nhà làm',350000.00,300000.00,'_MATCHA-MOUSSE.jpg','hộp',NULL,'2018-09-06 08:59:07',0),(16,'Bánh trái cây II',3,'Bánh crepe sầu riêng nhà làm',180000.00,160000.00,'_maxresdefault.jpg','hộp',NULL,'2018-09-06 08:59:17',1),(17,'Apple Cake',3,'Bánh crepe sầu riêng nhà làm',180000.00,160000.00,'_chicken black pepper_large-900x900.jpg','hộp',NULL,'2018-09-06 08:59:33',0),(18,'Bánh ngọt nhân cream táo',2,'Bánh crepe sầu riêng nhà làm',180000.00,0.00,'_COFFE-CHOCOLATE636098977566220885.jpg','hộp',NULL,'2018-09-06 08:59:46',1),(19,'Bánh Chocolate Trái cây',2,'Bánh crepe sầu riêng nhà làm',180000.00,160000.00,'_MATCHA-MOUSSE.jpg','hộp',NULL,'2018-09-06 08:59:59',0),(20,'Bánh Chocolate Trái cây II',2,'Bánh crepe sầu riêng nhà làm',180000.00,10.00,'_banh21.jpg','hộp',NULL,'2018-09-06 09:00:10',1),(21,'Peach Cake',2,'Bánh crepe sầu riêng nhà làm',250000.00,200000.00,'_mango-mousse-cake.jpg','hộp',NULL,'2018-09-06 09:00:21',0),(22,'Bánh bông lan trứng muối I',1,'Bánh crepe sầu riêng nhà làm',180000.00,160000.00,'_banh21.jpg','hộp',NULL,'2018-09-06 09:00:34',1),(23,'Bánh bông lan trứng muối II',1,'Bánh crepe sầu riêng nhà làm',180000.00,160000.00,'_banh kem sinh nhat.jpg','hộp',NULL,'2018-09-06 09:00:57',0),(24,'Bánh French',1,'Bánh crepe sầu riêng nhà làm',180000.00,0.00,'_banhbonglantrung.jpg','hộp',NULL,'2018-09-06 09:01:11',0),(25,'Bánh mì Australia',1,'Bánh crepe sầu riêng nhà làm',80000.00,0.00,'_maxresdefault1.jpg','hộp',NULL,'2018-09-06 09:01:24',1);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slides`
--

DROP TABLE IF EXISTS `slides`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slides` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slides`
--

LOCK TABLES `slides` WRITE;
/*!40000 ALTER TABLE `slides` DISABLE KEYS */;
INSERT INTO `slides` VALUES (1,'banh','banner1.jpg',NULL,NULL),(2,'banh','banner3.jpg',NULL,NULL),(3,'banh','banner4.jpg',NULL,NULL),(4,'banh','banner5.jpg',NULL,NULL);
/*!40000 ALTER TABLE `slides` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'TD','thuydungcnptit@gmail.com','$2y$10$zSNu7Zx0bW3jV9FOxXXxje35RMGDJyW3rlfmb2z2j5CqA3EQz5ooC',NULL,NULL,NULL,'1',NULL,'JU2NvvzrZ3O1hik6lIEvgQebHn16SiBm5t1956YVlc1t8F6P1AKz5y6QPHin','2018-09-06 08:18:14','2018-09-06 20:16:42',NULL),(2,'ChamPa','pa12345@gmail.com','$2y$10$.ucGftxhadBZCkE2D2hN0eYtnZoMyt3Qf29VQrvcOF4YYeBRdN1I.','123','HN','aaa','0','sQ4w_t.jpeg',NULL,'2018-09-06 19:11:55','2018-09-06 19:11:55',NULL),(3,'TD','thuydungcnptit@gmail.com',NULL,'0978992026','Bn','banh nay cung duoc',NULL,NULL,NULL,'2018-09-06 19:37:32','2018-09-06 19:37:32',NULL),(4,'Khoa','khoa@gmail.com','$2y$10$4qpsZoWUCIL5eXNnwjHxsuHLEUisZAdLERTknAoYDi5nNdV00zPS.',NULL,NULL,NULL,NULL,NULL,'zrsAsO47ukipKAP9y6j7t1jKvZ2ygivQ2SsXncF1ztGosKqvd7Tvz4DDHwGD','2018-09-06 19:41:46','2018-09-06 19:41:46',NULL),(5,'Khoa Ham','khoa1@gmail.com','$2y$10$FmLFoFl6M16DxaX4bTcP.eM4M1WHG8GxXdbIn8BkgwuQExHS7cTVW','123','HN','a','0','neOF_ava1.jpg',NULL,'2018-09-06 19:43:11','2018-09-06 19:43:11',NULL),(6,'khoa123','k@gmail.com','$2y$10$WhdZGC5I/Hx0HzA.LZ3xAuVHjT1hDY4uaMKzoSv06JBDks5E6gmOO','123','HN','k','1','8X8r_Luhan.jpg','FKnGDJEW0RKMChz0J7CKty0vneMJxmIuoJlbaG7yFrxEBysD6WgkrIxkyH2D','2018-09-06 19:46:14','2018-09-06 19:46:14',NULL),(8,'Lệ','le@gmai.com','$2y$10$LseD38NCxaG5mDn0E1Nml.UekDXdGvuPsN2.BetVrQJceQL7e5L1m',NULL,NULL,NULL,NULL,NULL,'TPdiofgmM3ol9p8aNhzVhRgKGxMUtcWiKKqnjRfDFXLtS5jxrw5mtNEkKYRU','2018-09-06 21:06:55','2018-09-06 21:06:55',NULL),(9,'Le','le@gmail.com','$2y$10$1epHbiHxiEA9g7UXsBPE..US2oBnVj8qAFV5YgwMNmZNLItoBLdIm',NULL,NULL,NULL,NULL,NULL,'sGovPeVelf0uOLEtDK4Zl5ipuUtTlPjPhZudWIj4S9SCdvStusRlslylucCH','2018-09-06 21:08:46','2018-09-06 21:08:46',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-07 13:57:36
