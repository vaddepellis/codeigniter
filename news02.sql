/*
SQLyog Community v13.1.1 (32 bit)
MySQL - 10.4.22-MariaDB : Database - news
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP TABLE IF EXISTS `crud`;

CREATE TABLE `crud` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(100) DEFAULT NULL,
  `c_age` varchar(100) DEFAULT NULL,
  `c_address` varchar(100) DEFAULT NULL,
  `c_mobile` varchar(100) DEFAULT NULL,
  `c_created_at` datetime DEFAULT NULL,
  `c_updated_at` datetime DEFAULT NULL,
  `c_status` tinyint(4) DEFAULT 1 COMMENT '1-active,0-hidden,2-deleted',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `crud` */

insert  into `crud`(`c_id`,`c_name`,`c_age`,`c_address`,`c_mobile`,`c_created_at`,`c_updated_at`,`c_status`) values 
(8,'santhosh','27','vnkmt','2134','2022-05-10 13:47:05','2022-05-10 13:47:05',1),
(11,'raju','28','byngr','14165','2022-05-10 14:42:53','2022-05-10 14:42:53',1);

/*Table structure for table `file_upload` */

DROP TABLE IF EXISTS `file_upload`;

CREATE TABLE `file_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `file_upload` */

insert  into `file_upload`(`id`,`category`,`image_url`,`created_at`,`updated_at`,`status`) values 
(1,'Sports','sports.jpg',NULL,NULL,1),
(2,'Education','education.jpg',NULL,NULL,1),
(3,'Movies','movies.jpg',NULL,NULL,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
