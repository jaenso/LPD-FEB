<?php
include "../config/koneksi.php";

$id_provinsi          = $_POST['id_provinsi'];
$kota            = $_POST['kota'];

$query = "INSERT INTO kota(id_provinsi, kota) VALUES 
('$id_provinsi', '$kota')";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
    echo "<script> alert ('Proses Tambah Data Pengguna Berhasil Selanjutnya Masuk Kedalam Pengisian Data SPJ'); window.location='tambah-biayapd.php';</script>";
} else {
    echo "<script> alert ('Proses Tambah Data Pengguna Gagal'); history.back(); </script>";
}
