/*
SQLyog Professional v12.5.0 (64 bit)
MySQL - 10.1.28-MariaDB : Database - sistem_pakar_cf
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sistem_pakar_cf` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sistem_pakar_cf`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `user` varchar(25) NOT NULL,
  `pass` varchar(35) NOT NULL,
  `nama` char(45) NOT NULL,
  PRIMARY KEY (`id`,`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`user`,`pass`,`nama`) values 
(0,'admin','admin','admin'),
(0,'aldy','aldy','aldy');

/*Table structure for table `gejala` */

DROP TABLE IF EXISTS `gejala`;

CREATE TABLE `gejala` (
  `id` varchar(20) NOT NULL,
  `gejala` char(50) NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gejala` */

insert  into `gejala`(`id`,`gejala`,`info`) values 
('G01','Mual Muntah',''),
('G02','Kejang Kejang',''),
('G03','Gangguan Hormon',''),
('G04','Mimisan',''),
('G05','Nyeri',''),
('G06','Pusing',''),
('G07','Lambat Daya Tangkap',''),
('G08','Muntah Darah',''),
('G09','Sakit Kepala Sebelah',''),
('G10','Pusing 7 Keliling',''),
('G11','Lemes','');

/*Table structure for table `hasil` */

DROP TABLE IF EXISTS `hasil`;

CREATE TABLE `hasil` (
  `id_sesi` varchar(100) NOT NULL,
  `nm_p` varchar(100) NOT NULL,
  `hasil_survey` varchar(100) NOT NULL,
  PRIMARY KEY (`id_sesi`),
  KEY `id_sesi` (`id_sesi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hasil` */

insert  into `hasil`(`id_sesi`,`nm_p`,`hasil_survey`) values 
('2018055428638355725','Radang Otak','94.63');

/*Table structure for table `penyakit` */

DROP TABLE IF EXISTS `penyakit`;

CREATE TABLE `penyakit` (
  `id` varchar(5) NOT NULL,
  `nm_p` varchar(35) NOT NULL,
  `info` text NOT NULL,
  `solusi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `penyakit` */

insert  into `penyakit`(`id`,`nm_p`,`info`,`solusi`) values 
('P01','Kanker Otak','<p> Kanker Otak (Brain Cancer) Adalah tumor otak ganas yang dapat menyebar dengan cepat dibagian lain dari otak & tulang belakang. Perlu diketahui, tidak semua tumor otak bersifat ganas dan bias dikategorikan sebagai kanker .<br>\r\nAda tumor yang bersifat jinak, tumor otak jinak adalah sekumpulan sel-sel atau tumbuh perlahan dan tidak menyebarkank kebagian lain.</p>','<p> Pengobatan medis dengan cara kemoterapi, radioterapi dan operasi adalah komsumsi obat alami/herbal. </p>'),
('P02','Radang Otak','<p> Radang otak adalah peradangan akut pada otak yang disebabkan oleh infeksi virus. Peradangan tersebut juga dapat dipicu oleh infeksi bakteri, peradangan non-infeksi, atau respon imun abnormal di mana sistem kekebalan tubuh menyerang jaringan otak. Walaupun membutuhkan penanganan segera, kondisi ini jarang mengancam nyawa. </p>','<p> Penanganan radang otak untuk tiap pasien berbeda-beda. Penentuannya tergantung kepada jenis radang otak yang diderita oleh pasien. Langkah penanganan umumnya meliputi antibiotik, antifungal, antivirus, kortikosteroid injeksi, terapi imunoglobulin, plasmapheresis, pembedahan, atau antikonvulsan. </p>'),
('P03','Migrain','<p> Migrain adalah nyeri berdenyut hebat dan berulang, yang biasanya mengenai salah satu sisi kepala, nyeri timbul secara mendadak dan bisa didahului dan disertai dengan gejala-gejala visual (penglihatan), neurologis atau saluran pencernaan . </p>','<p> •	Olahraga secara teratur <br> • Menjaga pola makan dan gaya hidup sehat <br> •	akupuntur </p>\r\n'),
('P04','Vertigo','<p> Vertigo merupakan suatu gejala dengan sensasi diri sendiri atau sekeliling terasa berputar yang terjadi secara tiba-tiba. Ada kondisi vertigo yang ringan serta tidak terlalu terasa dan ada yang parah sehingga menghambat rutinitas.<br> Serangan vertigo bisa bervariasi, mulai dari pusing yang ringan dan muncul secara berkala hingga yang parah dan berlangsung lama.  Serangan yang parah bisa terus berlangsung selama beberapa hari sehingga penderitanya tidak bisa beraktivitas dengan normal.</p>','<p>Menghindari gerakan secara tiba-tiba agar tidak terjatuh.<br>Segera duduk jika vertigo menyerang.<br>Gunakan beberapa bantal agar posisi kepala saat tidur menjadi lebih tinggi.<br>Gerakkan kepala secara perlahan-lahan.<br>Hindari gerakan kepala mendongak, berjongkok, atau tubuh membungkuk.<br>Kenalilah pemicu vertigo Anda dan lakukan latihan yang dapat memicu vertigo Anda. Otak Anda akan menjadi terbiasa dan malah menurunkan frekuensi kambuhnya vertigo. Lakukan latihan ini dengan meminta bantuan orang lain.<br>Bagi Anda yang juga menderita penyakit Meniere, batasi konsumsi garam dalam menu sehari-hari.</p>');

/*Table structure for table `relas` */

DROP TABLE IF EXISTS `relas`;

CREATE TABLE `relas` (
  `id_relas` varchar(15) NOT NULL,
  `id_p` varchar(15) NOT NULL,
  `id_g` varchar(15) NOT NULL,
  `nilai` varchar(45) NOT NULL,
  PRIMARY KEY (`id_relas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `relas` */

insert  into `relas`(`id_relas`,`id_p`,`id_g`,`nilai`) values 
('R001','P01','G01','1'),
('R002','P01','G02','0.8'),
('R003','P01','G03','0.8'),
('R004','P01','G04','0.4'),
('R005','P01','G05','0.6'),
('R006','P01','G11','0.6'),
('R007','P02','G01','1'),
('R008','P02','G02','0.8'),
('R009','P02','G04','0.6'),
('R010','P02','G06','0.8'),
('R011','P02','G07','0.8'),
('R012','P02','G08','0.6'),
('R013','P02','G11','0.4'),
('R014','P03','G01','0.6'),
('R015','P03','G06','0.6'),
('R016','P03','G10','1'),
('R017','P03','G11','0.8'),
('R018','P04','G01','0.6'),
('R019','P04','G05','0.6'),
('R020','P04','G010','1'),
('R021','P04','G11','0.8');

/*Table structure for table `tmp` */

DROP TABLE IF EXISTS `tmp`;

CREATE TABLE `tmp` (
  `id_sesi` varchar(100) NOT NULL,
  `nama_surveyor` varchar(100) NOT NULL,
  `jk` enum('Laki - Laki','Perempuan') NOT NULL,
  `umur` varchar(50) NOT NULL,
  `tgl_survey` datetime NOT NULL,
  PRIMARY KEY (`id_sesi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tmp` */

insert  into `tmp`(`id_sesi`,`nama_surveyor`,`jk`,`umur`,`tgl_survey`) values 
('2018055428638355725','Rani','Perempuan','20','2018-04-15 22:54:28');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `nm_user` varchar(55) NOT NULL,
  `jenkel` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`user`,`pass`,`nm_user`,`jenkel`,`alamat`) values 
('akuh','123','Saya','Laki-Laki','');

/*Table structure for table `v_gejala` */

DROP TABLE IF EXISTS `v_gejala`;

/*!50001 DROP VIEW IF EXISTS `v_gejala` */;
/*!50001 DROP TABLE IF EXISTS `v_gejala` */;

/*!50001 CREATE TABLE  `v_gejala`(
 `id` varchar(5) ,
 `nama` varchar(35) ,
 `id_gejala` varchar(20) ,
 `gejala_text` char(50) ,
 `cfp` varchar(45) 
)*/;

/*Table structure for table `v_hasil` */

DROP TABLE IF EXISTS `v_hasil`;

/*!50001 DROP VIEW IF EXISTS `v_hasil` */;
/*!50001 DROP TABLE IF EXISTS `v_hasil` */;

/*!50001 CREATE TABLE  `v_hasil`(
 `id_sesi` varchar(100) ,
 `nama_surveyor` varchar(100) ,
 `jenkel` enum('Laki - Laki','Perempuan') ,
 `usia` varchar(50) ,
 `hasil` varchar(100) ,
 `penyakit` varchar(100) ,
 `info` text ,
 `solusi` text ,
 `tgl_survey` datetime 
)*/;

/*Table structure for table `v_relass` */

DROP TABLE IF EXISTS `v_relass`;

/*!50001 DROP VIEW IF EXISTS `v_relass` */;
/*!50001 DROP TABLE IF EXISTS `v_relass` */;

/*!50001 CREATE TABLE  `v_relass`(
 `penyakit` varchar(35) ,
 `gejala` char(50) ,
 `id_relas` varchar(15) ,
 `id_p` varchar(15) ,
 `id_g` varchar(15) ,
 `nilai` varchar(45) 
)*/;

/*View structure for view v_gejala */

/*!50001 DROP TABLE IF EXISTS `v_gejala` */;
/*!50001 DROP VIEW IF EXISTS `v_gejala` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_gejala` AS (select `a`.`id` AS `id`,`a`.`nm_p` AS `nama`,`b`.`id` AS `id_gejala`,`b`.`gejala` AS `gejala_text`,`d`.`nilai` AS `cfp` from ((`penyakit` `a` left join `relas` `d` on((`a`.`id` = `d`.`id_p`))) left join `gejala` `b` on((`b`.`id` = `d`.`id_g`))) order by `a`.`id`) */;

/*View structure for view v_hasil */

/*!50001 DROP TABLE IF EXISTS `v_hasil` */;
/*!50001 DROP VIEW IF EXISTS `v_hasil` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_hasil` AS (select `a`.`id_sesi` AS `id_sesi`,`a`.`nama_surveyor` AS `nama_surveyor`,`a`.`jk` AS `jenkel`,`a`.`umur` AS `usia`,`b`.`hasil_survey` AS `hasil`,`b`.`nm_p` AS `penyakit`,`c`.`info` AS `info`,`c`.`solusi` AS `solusi`,`a`.`tgl_survey` AS `tgl_survey` from ((`tmp` `a` left join `hasil` `b` on((`a`.`id_sesi` = `b`.`id_sesi`))) left join `penyakit` `c` on((`b`.`nm_p` = `c`.`nm_p`)))) */;

/*View structure for view v_relass */

/*!50001 DROP TABLE IF EXISTS `v_relass` */;
/*!50001 DROP VIEW IF EXISTS `v_relass` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_relass` AS (select `b`.`nm_p` AS `penyakit`,`c`.`gejala` AS `gejala`,`a`.`id_relas` AS `id_relas`,`a`.`id_p` AS `id_p`,`a`.`id_g` AS `id_g`,`a`.`nilai` AS `nilai` from ((`relas` `a` left join `penyakit` `b` on((`a`.`id_p` = `b`.`id`))) left join `gejala` `c` on((`a`.`id_g` = `c`.`id`)))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
