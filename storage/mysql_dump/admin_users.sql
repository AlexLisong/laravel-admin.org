# Host: localhost  (Version 5.7.20-log)
# Date: 2018-01-17 13:50:16
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "admin_users"
#

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE `admin_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "admin_users"
#

INSERT INTO `admin_users` VALUES (1,'admin','$2y$10$rh9ucJVaMWOxhSzgketax.d8YscbOsBCkB2gp3tNINtRBkhfpkjQC','Administrator','images/0ef82c7958be686a3ea874fffa6a066b.png',NULL,'2017-07-19 14:23:47','2017-09-04 03:04:42'),(2,'test','$2y$10$LdKig3pCzJc2qS2fPH/ixeunTBnRQJo.sJKDga.eVhbLmayKjesfe','test',NULL,NULL,'2017-09-03 04:23:06','2017-09-03 04:23:06');
