/*
SQLyog Ultimate v9.50 
MySQL - 5.7.10-log : Database - gudang
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gudang` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `gudang`;

/*Table structure for table `dtl_nota` */

DROP TABLE IF EXISTS `dtl_nota`;

CREATE TABLE `dtl_nota` (
  `id_dtl` int(11) NOT NULL AUTO_INCREMENT,
  `id_nota` varchar(25) DEFAULT NULL,
  `nama_brg` varchar(100) DEFAULT NULL,
  `sat1` varchar(45) DEFAULT NULL,
  `sat2` varchar(45) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_dtl`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `dtl_nota` */

insert  into `dtl_nota`(`id_dtl`,`id_nota`,`nama_brg`,`sat1`,`sat2`,`status`) values (3,'NT20090002','Kain Prima Elar A','14 Box = 350 Pin','12.550,- Yds','0'),(4,'NT20090002','Kain Prima Elar A C.2','14 Box = 350 Pin','12.550,- Yds','0'),(5,'NT20090002','Kain Prima Elar P.13','15 Box = 375 Pin','13.875,- Yds','0'),(6,'NT20090003','Kain Kafan','10 Bgr','12.550,- Yds','0'),(7,'NT20090003','Kain Kafan Premium','10 Bgr','12.550,- Yds','0'),(8,'NT20090003','Kain Kafan Premium Polkadot','10 Bgr','12.550,- Yds','0'),(9,'NT20090003','Kain Kafan Motif Bunga','10 Bgr','12.550,- Yds','0'),(12,'NT20100001','gdsgdg','d','d','0');

/*Table structure for table `nota_barang_keluar` */

DROP TABLE IF EXISTS `nota_barang_keluar`;

CREATE TABLE `nota_barang_keluar` (
  `id_nota` varchar(10) NOT NULL,
  `nomor` varchar(25) DEFAULT NULL,
  `tujuan` text,
  `order_penj` varchar(100) DEFAULT NULL,
  `tgl_order` date DEFAULT NULL,
  `ket` text,
  `tgl_nota` date DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_nota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `nota_barang_keluar` */

insert  into `nota_barang_keluar`(`id_nota`,`nomor`,`tujuan`,`order_penj`,`tgl_order`,`ket`,`tgl_nota`,`status`) values ('NT20090002','452/CK/GD/VIII/2020','Bapak Loetfy Attuwy\r\nManyar Kertoarjo 1/12 RT.001 RW.006\r\nManyarsabrangan Mulyorejo Surabaya','452/CK/VIII/2020','2020-09-09','Penjualan Barang\r\nDaftar Perincian Terlampir\r\nBarang milik Bapak Loetfy Attuwy\r\nBarang dikirim ke : Bapak Fikri\r\nUD Warna Indah Jl. Panggang No.115 Surabaya','2020-09-09','0'),('NT20090003','453/CK/GD/VIII/2020','Ibu Katemi\r\nBojong Kenyot','453/CK/VIII/2020','2020-09-11','Barang dikirim ke\r\nIbu Katemi\r\nBojong Kenyot\r\nRincian Terlampir','2020-09-11','0'),('NT20100001','fff/23','fdghf','ewdz','2020-10-16','hdghdf','2020-10-16','0');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `hak_akses` enum('Admin','Adku','Niaga','Direksi','Super Admin','') DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id_user`,`username`,`password`,`hak_akses`) values (1,'Erik','dd0ee4aa584f539800e1443fdf250d38','Niaga'),(2,'cak','c4ca4238a0b923820dcc509a6f75849b','Admin'),(3,'cuk','c81e728d9d4c2f636f067f89cc14862c','Direksi'),(4,'coy','eccbc87e4b5ce2fe28308fd9f2a7baf3','Adku'),(5,'can','2c61ebff5a7f675451467527df66788d','Super Admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
