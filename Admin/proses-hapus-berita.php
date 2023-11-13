<?php
include "../config/koneksi.php";

$id_berita = $_GET['id_berita'];

$sql_hapus = mysqli_query($koneksi, "DELETE FROM berita WHERE id_berita = '$id_berita'");

if ($sql_hapus) {
    echo "<script> alert('Proses Hapus Data Berita Berhasil!'); window.location='kelola-berita.php';</script>";
} else {
    echo "<script> alert('Proses Hapus Data Berita Gagal!'); history.back();</script>";
}
