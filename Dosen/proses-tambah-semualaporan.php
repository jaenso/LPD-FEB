<?php
include "../config/koneksi.php";
$id_laporan          = $_POST['id_laporan'];
$id_biaya            = $_POST['id_biaya'];
$lokasi_file2 = $_FILES['file_laporanpd']['tmp_name'];
$nama_file2 = $_FILES['file_laporanpd']['name'];
$ukuran2 = $_FILES['file_laporanpd']['size'];
$lokasi_file3 = $_FILES['file_biayapd']['tmp_name'];
$nama_file3 = $_FILES['file_biayapd']['name'];
$ukuran3 = $_FILES['file_biayapd']['size'];
$id_user                = $_POST['id_user'];

move_uploaded_file($lokasi_file2, '../laporan/' . $nama_file2);
move_uploaded_file($lokasi_file3, '../laporan/' . $nama_file3);

$query = "INSERT INTO semua_laporan(file_laporanpd, file_biayapd, id_laporan, id_biaya, id_user) VALUES 
('$nama_file2','$nama_file3', '$id_laporan', '$id_biaya', '$id_user')";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
    echo "<script> alert ('Proses Tambah Data Semua Laporan'); window.location='kelola-semualaporan.php';</script>";
} else {
    echo "<script> alert ('Proses Tambah Data Semua Laporan Gagal'); history.back(); </script>";
}
