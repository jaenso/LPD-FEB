<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi 
$id_laporan = $_GET['id_laporan'];

//proses
$sql_hapus = mysqli_query($koneksi, "DELETE FROM laporan WHERE id_laporan = '$id_laporan'");

//logika 
if ($sql_hapus) {
    echo "<script> alert('Proses Hapus Data Laporan Perjalanan Dinas Berhasil!'); window.location='kelola-laporanpd.php';</script>";
} else {
    echo "<script> alert('Proses Hapus Data Laporan Perjalanan Dinas Gagal!'); history.back();</script>";
}
?>