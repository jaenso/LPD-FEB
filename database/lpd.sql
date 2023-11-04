/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.28-MariaDB : Database - lpd
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lpd` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `lpd`;

/*Table structure for table `biaya` */

DROP TABLE IF EXISTS `biaya`;

CREATE TABLE `biaya` (
  `id_biaya` int(11) NOT NULL AUTO_INCREMENT,
  `materi_kegiatan` text NOT NULL,
  `surat_tugas` text NOT NULL,
  `surat_pd` text NOT NULL,
  `tik_pesawat` text NOT NULL,
  `penginapan` text NOT NULL,
  `nota_taxi` text NOT NULL,
  `uang_harian` text NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_biaya`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `biaya` */

insert  into `biaya`(`id_biaya`,`materi_kegiatan`,`surat_tugas`,`surat_pd`,`tik_pesawat`,`penginapan`,`nota_taxi`,`uang_harian`,`updated`,`id_user`) values 
(31,'KRS-TI-203030503084.pdf','KRS-TI-203030503084.pdf','TTD_Arief_Gunawan-removebg-preview.png','TTD_Arief_Gunawan-removebg-preview.png','Lembar Konsul 2023.docx','113-Article Text-313-1-10-20220904.pdf','274-Article Text-1303-1-10-20181206.pdf','2023-10-10 19:22:38',1),
(32,'1.-jik-vol15-1-april-2021-1-8-yefrie.pdf','1.-jik-vol15-1-april-2021-1-8-yefrie.pdf','1.-jik-vol15-1-april-2021-1-8-yefrie.pdf','1.-jik-vol15-1-april-2021-1-8-yefrie.pdf','113-Article Text-313-1-10-20220904.pdf','113-Article Text-313-1-10-20220904.pdf','274-Article Text-1303-1-10-20181206.pdf','2023-10-10 19:27:37',1),
(33,'8610-Article Text-8301-1-10-20210727.pdf','8610-Article Text-8301-1-10-20210727.pdf','wiac.info-pdf-buku-rpl-rosa-as-amp-m-salahuddin-pr_17c0ab952bd3cde4632360ae6c03e4e6.pdf','8610-Article Text-8301-1-10-20210727.pdf','wiac.info-pdf-buku-rpl-rosa-as-amp-m-salahuddin-pr_17c0ab952bd3cde4632360ae6c03e4e6.pdf','8610-Article Text-8301-1-10-20210727.pdf','wiac.info-pdf-buku-rpl-rosa-as-amp-m-salahuddin-pr_17c0ab952bd3cde4632360ae6c03e4e6.pdf','2023-10-13 23:52:24',1),
(46,'wiac.info-pdf-buku-rpl-rosa-as-amp-m-salahuddin-pr_17c0ab952bd3cde4632360ae6c03e4e6.pdf','','','','','','','2023-10-14 00:41:48',0),
(47,'wiac.info-pdf-buku-rpl-rosa-as-amp-m-salahuddin-pr_17c0ab952bd3cde4632360ae6c03e4e6.pdf','','','','','','','2023-10-14 00:41:58',0),
(48,'Joshua Evan Savero_20302050344_Form Komitmen.pdf','','','','','','','2023-10-14 00:42:12',0),
(49,'8610-Article Text-8301-1-10-20210727.pdf','','','','','','','2023-10-14 00:43:26',0),
(50,'Laporan Perjalanan.pdf','','','','','','','2023-10-21 11:30:29',0);

/*Table structure for table `instansi` */

DROP TABLE IF EXISTS `instansi`;

CREATE TABLE `instansi` (
  `id_instansi` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `motto` text DEFAULT NULL,
  `peta` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  PRIMARY KEY (`id_instansi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `instansi` */

insert  into `instansi`(`id_instansi`,`nama`,`visi`,`misi`,`motto`,`peta`,`alamat`) values 
(1,'Fakultas Ekonomi Dan Bisnis Universitas Palangka Raya','<p>“Menjadi pusat pembelajaran ekonomi dan bisnis yang bereputasi di Asia Tenggara pada Tahun 2027”</p>','<p>1. Menyelenggarakan pendidikan akademik dan profesional bidang ekonomi, manajemen, akuntansi yang menghasilkan lulusan yang mandiri, dan mampu bersaing secara regional dan internasional.&nbsp;<br>2. Menghasilkan penelitian yang responsif terhadap dinamika lingkungan dalam bidang ekonomi, manajemen, akuntansi.&nbsp;<br>3. Menyelenggarakan program pengabdian kepada masyarakat yang berlandaskan iptek di bidang ekonomi, manajemen, akuntansi.&nbsp;<br>4. Membangun kerjasama antara pemangku kepentingan baik di dalam maupun diluar lingkungan fakultas untuk memperkuat daya saing lembaga.&nbsp;<br>5. Menyiapkan calon pemimpin dan wirausahawan yang memiliki tanggung jawab sosial dan mampu menghadapi perubahan lingkungan global.</p>','<p><strong>1. Menghasilkan lulusan yang profesional di bidang manajemen, ekonomi, dan akuntansi; berbudi luhur, dan memiliki jiwa serta semangat kewirausahaan dan kepemimpinan bagi Kalimantan Tengah, Indonesia, dan Internasional.&nbsp;</strong><br><strong>2. Menghasilkan penelitian dengan reputasi nasional dan internasional dalam bidang manajemen, ekonomi, dan akuntansi yang bisa digunakan di sektor publik dan bisnis.&nbsp;</strong><br><strong>3. Menghasilkan pengabdian kepada masyarakat dalam bidang manajemen, ekonomi, dan akuntansi untuk berkontribusi bagi pengembangan sumberdaya lokal.&nbsp;</strong><br><strong>4. Terwujudnya sistem tata pamong dan tata kelola FEB yang efisien dan profesional, dengan mengoptimalkan sistem teknologi informasi secara terpadu.&nbsp;</strong><br><strong>5. Membangun kerjasama antara pemangku kepentingan baik di dalam maupun diluar lingkungan Fakultas untuk memperkuat daya saing lembaga.</strong><br><strong>&nbsp;</strong></p>','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63789.21570398321!2d113.86364874436171!3d-2.2191854801582243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb3aaf690a3d7%3A0x801e7ad626c76342!2sFakultas%20Ekonomi%20Universitas%20Palangka%20Raya!5e0!3m2!1sid!2sid!4v1692328362462!5m2!1sid!2sid','Palangka, Kec. Jekan Raya, Kota Palangka Raya, Kalimantan Tengah 74874.');

/*Table structure for table `laporan` */

DROP TABLE IF EXISTS `laporan`;

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_kunjungan` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `tempat_tujuan` varchar(100) NOT NULL,
  `no_surat_tugas` varchar(500) NOT NULL,
  `sumber_dana` varchar(500) NOT NULL,
  `nama_yang_ditugaskan` varchar(500) NOT NULL,
  `relevansi_iku` varchar(500) NOT NULL,
  `relevansi_akreditasi` varchar(500) NOT NULL,
  `relevansi_umum` varchar(500) NOT NULL,
  `ringkasan_kunjungan` varchar(500) NOT NULL,
  `simpulan` varchar(500) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_laporan`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `laporan` */

insert  into `laporan`(`id_laporan`,`tgl_kunjungan`,`tgl_selesai`,`tempat_tujuan`,`no_surat_tugas`,`sumber_dana`,`nama_yang_ditugaskan`,`relevansi_iku`,`relevansi_akreditasi`,`relevansi_umum`,`ringkasan_kunjungan`,`simpulan`,`id_user`) values 
(29,'2023-10-10','2023-10-10','aa','aa','aa','aa','IKU 3: Dosen berkegiatan di luar kampus','aa','aa','aa','aa',1),
(30,'2023-10-10','2023-10-10','qq','qq','qq','qq','IKU 1: Lulusan mendapat pekerjaan yang layak','qq','qq','qq','qq',1),
(31,'2023-10-10','2023-10-10','11','11','11','11','IKU 8: Program studi berstandar internasional','11','11','11','11',1),
(32,'2023-10-12','2023-10-12','QQ','QQ','QQ','QQ','IKU 8: Program studi berstandar internasional','QQ','QQ','QQ','QQ',1),
(33,'2023-10-14','2023-10-14','1','1','1','1','IKU 3: Dosen berkegiatan di luar kampus','1','1','1','1',1);

/*Table structure for table `pdf_files` */

DROP TABLE IF EXISTS `pdf_files`;

CREATE TABLE `pdf_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) DEFAULT NULL,
  `file_location` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `pdf_files` */

/*Table structure for table `semua_laporan` */

DROP TABLE IF EXISTS `semua_laporan`;

CREATE TABLE `semua_laporan` (
  `id_semua_laporan` int(11) NOT NULL AUTO_INCREMENT,
  `id_laporan` int(11) NOT NULL,
  `id_biaya` int(11) NOT NULL,
  `no_surat_tugas` int(11) NOT NULL,
  `Tempat Tujuan` varchar(500) NOT NULL,
  `tanggal_kunjungan` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_semua_laporan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `semua_laporan` */

insert  into `semua_laporan`(`id_semua_laporan`,`id_laporan`,`id_biaya`,`no_surat_tugas`,`Tempat Tujuan`,`tanggal_kunjungan`,`tanggal_selesai`,`updated`) values 
(1,0,0,0,'','2023-10-14','0000-00-00','2023-10-31 11:53:27');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`id_user`,`nama`,`username`,`password`,`level`,`updated`) values 
(1,'Arief','arief','arief','user','2023-10-01 16:22:15'),
(2,'admin','admin','admin','admin','2023-10-01 16:30:29'),
(4,'staff','staff','staff','staff','2023-10-13 22:40:05'),
(5,'Dr. Agus Satrya, SE., M.Si.','dosen1','dosen1','user','2023-10-15 07:00:23'),
(6,'Sri Yuni, SE., M.Si','dosen2','dosen2','user','2023-10-15 07:00:30'),
(7,'Ade Yuniati,  SE., M.Sc.','dosen3','dosen3','user','2023-10-15 07:01:26');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
