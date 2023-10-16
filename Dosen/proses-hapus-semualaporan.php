<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi 
$id_disposisi = $_GET['id_semua_laporan'];

//proses
$sql_hapus = mysqli_query($koneksi, "DELETE FROM disposisi WHERE id_semua_laporan = '$id_semua_laporan'");

//logika 
if ($sql_hapus) {
    echo "<script> alert('Proses Hapus Data Laporan Perjalanan Dinas Berhasil!'); window.location='kelola-semualaporan.php';</script>";
} else {
    echo "<script> alert('Proses Hapus Data Laporan Perjalanan Dinas Gagal!'); history.back();</script>";
}
?>
