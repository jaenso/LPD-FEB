<?php
include "../config/koneksi.php";
$id_laporan          = $_POST['id_laporan'];
$id_biaya            = $_POST['id_biaya'];
$lokasi_file1 = $_FILES['file_laporan']['tmp_name'];
$nama_file1 = $_FILES['file_laporan']['name'];
$ukuran1 = $_FILES['file_laporan']['size'];

move_uploaded_file($lokasi_file1, '../laporan/' . $nama_file1);

$query = "INSERT INTO semua_laporan(file_laporan, id_laporan, id_biaya) VALUES 
('$nama_file1', '$id_laporan', '$id_biaya')";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
    echo "<script> alert ('Proses Tambah Data Semua Laporan'); window.location='kelola-semualaporan.php';</script>";
} else {
    echo "<script> alert ('Proses Tambah Data Semua Laporan Gagal'); history.back(); </script>";
}
