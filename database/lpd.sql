-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Okt 2023 pada 14.31
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lpd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya`
--

CREATE TABLE `biaya` (
  `id_biaya` int(11) NOT NULL,
  `materi_kegiatan` text NOT NULL,
  `surat_tugas` text NOT NULL,
  `surat_pd` text NOT NULL,
  `tik_pesawat` text NOT NULL,
  `penginapan` text NOT NULL,
  `nota_taxi` text NOT NULL,
  `uang_harian` text NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biaya`
--

INSERT INTO `biaya` (`id_biaya`, `materi_kegiatan`, `surat_tugas`, `surat_pd`, `tik_pesawat`, `penginapan`, `nota_taxi`, `uang_harian`, `updated`, `id_user`) VALUES
(31, 'KRS-TI-203030503084.pdf', 'KRS-TI-203030503084.pdf', 'TTD_Arief_Gunawan-removebg-preview.png', 'TTD_Arief_Gunawan-removebg-preview.png', 'Lembar Konsul 2023.docx', '113-Article Text-313-1-10-20220904.pdf', '274-Article Text-1303-1-10-20181206.pdf', '2023-10-10 12:22:38', 1),
(32, '1.-jik-vol15-1-april-2021-1-8-yefrie.pdf', '1.-jik-vol15-1-april-2021-1-8-yefrie.pdf', '1.-jik-vol15-1-april-2021-1-8-yefrie.pdf', '1.-jik-vol15-1-april-2021-1-8-yefrie.pdf', '113-Article Text-313-1-10-20220904.pdf', '113-Article Text-313-1-10-20220904.pdf', '274-Article Text-1303-1-10-20181206.pdf', '2023-10-10 12:27:37', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
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
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `tgl_kunjungan`, `tgl_selesai`, `tempat_tujuan`, `no_surat_tugas`, `sumber_dana`, `nama_yang_ditugaskan`, `relevansi_iku`, `relevansi_akreditasi`, `relevansi_umum`, `ringkasan_kunjungan`, `simpulan`, `id_user`) VALUES
(29, '2023-10-10', '2023-10-10', 'aa', 'aa', 'aa', 'aa', 'IKU 3: Dosen berkegiatan di luar kampus', 'aa', 'aa', 'aa', 'aa', 1),
(30, '2023-10-10', '2023-10-10', 'qq', 'qq', 'qq', 'qq', 'IKU 1: Lulusan mendapat pekerjaan yang layak', 'qq', 'qq', 'qq', 'qq', 1),
(31, '2023-10-10', '2023-10-10', '11', '11', '11', '11', 'IKU 8: Program studi berstandar internasional', '11', '11', '11', '11', 1),
(32, '2023-10-12', '2023-10-12', 'QQ', 'QQ', 'QQ', 'QQ', 'IKU 8: Program studi berstandar internasional', 'QQ', 'QQ', 'QQ', 'QQ', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `semua_laporan`
--

CREATE TABLE `semua_laporan` (
  `id_semua_laporan` int(11) NOT NULL,
  `id_laporan` int(11) NOT NULL,
  `id_biaya` int(11) NOT NULL,
  `no_surat_tugas` int(11) NOT NULL,
  `Tempat Tujuan` varchar(500) NOT NULL,
  `tanggal_kunjungan` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `semua_laporan`
--

INSERT INTO `semua_laporan` (`id_semua_laporan`, `id_laporan`, `id_biaya`, `no_surat_tugas`, `Tempat Tujuan`, `tanggal_kunjungan`, `tanggal_selesai`, `updated`) VALUES
(1, 0, 0, 0, '', '2023-10-14', '0000-00-00', '2023-10-31 04:53:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`, `updated`) VALUES
(1, 'Arief', 'arief', 'arief', 'user', '2023-10-01 09:22:15'),
(2, 'admin', 'admin', 'admin', 'admin', '2023-10-01 09:30:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biaya`
--
ALTER TABLE `biaya`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `semua_laporan`
--
ALTER TABLE `semua_laporan`
  ADD PRIMARY KEY (`id_semua_laporan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biaya`
--
ALTER TABLE `biaya`
  MODIFY `id_biaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `semua_laporan`
--
ALTER TABLE `semua_laporan`
  MODIFY `id_semua_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
