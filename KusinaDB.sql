/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.4.28-MariaDB : Database - kusinacompass
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kusinacompass` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `kusinacompass`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `food` */

DROP TABLE IF EXISTS `food`;

CREATE TABLE `food` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `img` varchar(250) NOT NULL DEFAULT '',
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `desc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `food` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_reset_tokens_table',1),
(3,'2014_10_12_100000_create_password_resets_table',1),
(4,'2019_08_19_000000_create_failed_jobs_table',1),
(5,'2019_12_14_000001_create_personal_access_tokens_table',1),
(6,'2023_09_22_043338_create_stores_table',2),
(7,'2023_09_22_150750_create_menu_table',2),
(8,'2023_09_22_170317_create_producto_table',3),
(9,'2023_09_22_170613_create_products_table',4),
(10,'2023_09_22_170707_create_category_table',4),
(11,'2023_09_22_170728_create_store_table',4),
(12,'2023_09_24_131524_create_products_table',5),
(13,'2023_09_24_132151_create_products_table',6),
(14,'2023_09_23_082701_create_food_table',7);

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

insert  into `password_reset_tokens`(`email`,`token`,`created_at`) values 
('rosjeffe@gmail.com','$2y$10$CR31Z/AriyrrbvWTQOldluqa6lP/nl6RJ.YGka15dGcXqx4Sp6DvG','2023-09-25 14:24:33');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_by` int(10) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(512) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`created_by`,`name`,`price`,`description`,`image`,`created_at`,`updated_at`) values 
(38,NULL,'Sisig',120258,'pork','C:\\xampp\\tmp\\php936A.tmp','2023-09-26 23:23:41','2023-09-26 23:25:56'),
(41,NULL,'SisigasssEdit',120,'Editq','C:\\xampp\\tmp\\phpC9FC.tmp','2023-09-27 02:16:57','2023-09-27 02:17:04'),
(42,NULL,'Testimage',120,'Test','C:\\xampp\\tmp\\php24E2.tmp','2023-09-27 12:23:35','2023-09-27 12:23:35'),
(43,NULL,'a',1,'wwa','C:\\xampp\\tmp\\php2384.tmp','2023-09-27 12:33:22','2023-09-27 12:33:22'),
(44,NULL,'Jefferson Rosanes',120,'pork','C:\\xampp\\tmp\\phpB144.tmp','2023-09-27 12:58:01','2023-09-27 12:58:01'),
(45,NULL,'Sisig',120,'pork','1695821671.jpeg','2023-09-27 13:34:32','2023-09-27 13:34:32'),
(46,NULL,'Jeff Test Image',120,'pork','1695821726.png','2023-09-27 13:35:26','2023-09-27 13:35:26'),
(47,NULL,'Jefferson Rosanes',120,'pork','1695826159.jpg','2023-09-27 14:49:20','2023-09-27 14:49:20'),
(48,NULL,'testes',120,'pork','1695826447.png','2023-09-27 14:54:07','2023-09-27 14:54:07'),
(49,NULL,'Erica',120,'pork','1695826540.png','2023-09-27 14:55:40','2023-09-27 14:55:40'),
(50,NULL,'Sisig',120,'pork','1695826613.png','2023-09-27 14:56:53','2023-09-27 14:56:53'),
(51,NULL,'Sisig',120,'l','1695826949.png','2023-09-27 15:02:29','2023-09-27 15:02:29'),
(52,NULL,'Jefferson Rosanes',120,'Seafood','1695857181.png','2023-09-27 23:26:22','2023-09-27 23:26:22'),
(53,NULL,'User',120,'pork','1695857227.png','2023-09-27 23:27:07','2023-09-27 23:27:07'),
(54,NULL,'userid',120,'pork','1695857434.png','2023-09-27 23:30:34','2023-09-27 23:30:34'),
(55,NULL,'Shies',120,'pork','1695858570.png','2023-09-27 23:49:30','2023-09-27 23:49:30'),
(56,NULL,'aswa',120,'pork','1695858705.png','2023-09-27 23:51:45','2023-09-27 23:51:45'),
(57,1,'TC',120,'TC','1695860580.jpg','2023-09-28 00:01:12','2023-09-28 00:23:01'),
(58,3,'TestDomain',120,'pork','1695859376.png','2023-09-28 00:02:56','2023-09-28 00:02:56'),
(59,1,'Test 2',120,'pork','1695860721.jpeg','2023-09-28 00:25:12','2023-09-28 00:25:21'),
(60,1,'Sisig',120,'pork','1695865783.jpeg','2023-09-28 01:49:43','2023-09-28 01:49:43');

/*Table structure for table `user_types` */

DROP TABLE IF EXISTS `user_types`;

CREATE TABLE `user_types` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user_types` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fk_user_type_id` tinyint(2) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`fk_user_type_id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,NULL,'Jeff Rosanes','rosjeffe@gmail.com',NULL,'$2y$10$ICa2sKlyKe3tuXI.GvIA1ey87JfdkN7atvqWYxHm9OYcu57dBeZxS',NULL,'2023-09-21 11:59:54','2023-09-21 11:59:54'),
(2,NULL,'Test','test@test69.com',NULL,'$2y$10$aa3uWCBQOL0Ppuq0PD4aSeuzv0SWoH/fReJyfzCZmKcK6zbQq.x0K',NULL,'2023-09-25 13:35:43','2023-09-25 13:35:43'),
(3,NULL,'test','testdomain@gmail.com',NULL,'$2y$10$2SgqZsZmOqPCsDkTgqRj7un/Avhw3klvFU9C8DFCzbDd9jcaGN7CW',NULL,'2023-09-28 00:02:40','2023-09-28 00:02:40');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
