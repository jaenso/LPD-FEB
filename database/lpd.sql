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

/*Table structure for table `berita` */

DROP TABLE IF EXISTS `berita`;

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(256) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `berita` */

insert  into `berita`(`id_berita`,`judul`,`isi`,`gambar`,`tanggal`) values 
(1,'BERITA BERHASIL','BERITA','3.jpg','2023-11-11'),
(5,'12355','12345','2.jpg','2023-11-11'),
(6,'1234','12345','2.jpg',NULL),
(7,'1234','2131234','2.jpg',NULL),
(8,'1234215','1231234123','2.jpg',NULL);

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
  `id_laporan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_biaya`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `biaya` */

insert  into `biaya`(`id_biaya`,`materi_kegiatan`,`surat_tugas`,`surat_pd`,`tik_pesawat`,`penginapan`,`nota_taxi`,`uang_harian`,`updated`,`id_user`,`id_laporan`) values 
(94,'SuratPD.pdf','SuratTugas.pdf','SuratPD.pdf','TiketPesawat.pdf','Penginapan.pdf','NotaTaxi.pdf','UangHarian.pdf','2023-11-04 10:14:36',1,42);

/*Table structure for table `iku_feb` */

DROP TABLE IF EXISTS `iku_feb`;

CREATE TABLE `iku_feb` (
  `id_iku` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`id_iku`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `iku_feb` */

insert  into `iku_feb`(`id_iku`,`jenis`) values 
(1,'IKU 1: Lulusan mendapat pekerjaan yang layak'),
(2,'IKU 2: Mahasiswa mendapat pengalaman di luar kampus'),
(3,'IKU 3: Dosen berkegiatan di luar kampus'),
(4,'IKU 4: Praktisi mengajar di dalam kampus'),
(5,'IKU 5: Hasil kerja dosen digunakan oleh masyarakat'),
(6,'IKU 6: Program studi bekerjasama dengan mitra kelas dunia'),
(7,'IKU 7: Kelas yang kolaboratif dan partisipatif'),
(8,'IKU 8: Program studi berstandar internasional');

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
  `nama_yang_ditugaskan` text NOT NULL,
  `id_iku` int(11) NOT NULL,
  `relevansi_akreditasi` text NOT NULL,
  `relevansi_umum` text NOT NULL,
  `ringkasan_kunjungan` text NOT NULL,
  `simpulan` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_laporan`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `laporan` */

insert  into `laporan`(`id_laporan`,`tgl_kunjungan`,`tgl_selesai`,`tempat_tujuan`,`no_surat_tugas`,`sumber_dana`,`nama_yang_ditugaskan`,`id_iku`,`relevansi_akreditasi`,`relevansi_umum`,`ringkasan_kunjungan`,`simpulan`,`id_user`) values 
(42,'2023-11-01','2023-11-04','Universitas Palangka Raya, Palangka Raya, Kalimantan Tengah','KH1941AM AE','MAHASISWA','staff, Sri Yuni, SE., M.Si',4,'1. Mahasiswa mampu bersaing dan mendapat pengakuan di tingkat internasional<br> 2. Proses pembelajaran memenuhi standar internasional<br> 3. Program studi memiliki daya saing internasional<br> 4. Peningkatan kualitas capaian pemebelajaran (CPL)<br> 5. Peningkatan komptensi/profil lulusan','asdasdad','Kunjungan kerja ke Fakultas Ekonomi dan Bisnis Universitas Brawijaya Malang merupakan benchmarking untuk mempersiapkan kelas dengan bahasa pengantar bahasa Inggris. Di FEB UB, international undergraduate program (IUP) dimulai sejak tahun 2007. Kelas IUP ini dipersiapkan kurang lebih selama 1 tahun dan dikelola di bawah departemen masing-masing program. Saat ini IUP UB ada untuk tiga program studi, yaitu akuntansi, manajemen, dan ekonomi keuangan dan perbankan. Daya tampung mahasiswa IUP dibatasi hanya 30 orang per program studi. Untuk menjadi mahasiswa di IUP, mahasiswa dituntut untuk dapat berbicara bahasa Inggris secara aktif dan memiliki skor minimal TOEFL 525 dan IELTS 5 (saat lulus). Dalam rangka meningkatkan kualitas proses pembelajaran, IUP bekerja sama dengan beberapa universitas luar negeri dalam menyusun kurikulumnya sehingga mahasiswa akan mendapatkan pengalaman belajar di dalam dan luar negeri, baik itu dalam bentuk exchange, double degrees, internship, dan summer school. Saat ini, kurikulum IUP dan program reguler dibuat sama sehingga yang menjadi pembeda antara mahasiswa IUP dan regular adalah mulai angkatan 2023, mahasiswa diminta untuk sertifikasi luar negeri.','asdasdasdads',1),
(43,'2023-11-09','2023-11-09','123','123','123','Sri Yuni, SE., M.Si',2,'123','123','123','123',1),
(44,'2023-11-10','2023-11-10','12355','12355','12355','Sri Yuni, SE., M.Si',4,'12355','12355','12355','12355',1);

/*Table structure for table `semua_laporan` */

DROP TABLE IF EXISTS `semua_laporan`;

CREATE TABLE `semua_laporan` (
  `id_semua_laporan` int(11) NOT NULL AUTO_INCREMENT,
  `id_laporan` int(11) NOT NULL,
  `id_biaya` int(11) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `file_laporanpd` varchar(256) DEFAULT NULL,
  `file_biayapd` varchar(256) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_semua_laporan`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `semua_laporan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `semua_laporan` */

insert  into `semua_laporan`(`id_semua_laporan`,`id_laporan`,`id_biaya`,`updated`,`file_laporanpd`,`file_biayapd`,`id_user`) values 
(8,42,93,'2023-11-09 23:18:49','MateriKegiatan.pdf','NotaTaxi.pdf',1);

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
(1,'Arief1','arief','arief','user','2023-10-01 16:22:15'),
(2,'admin','admin','admin','admin','2023-10-01 16:30:29'),
(5,'Dr. Agus Satrya, SE., M.Si.','dosen1','dosen1','user','2023-10-15 07:00:23'),
(6,'Sri Yuni, SE., M.Si','dosen2','dosen2','user','2023-10-15 07:00:30'),
(7,'Ade Yuniati,  SE., M.Sc.','dosen3','dosen3','user','2023-10-15 07:01:26');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
