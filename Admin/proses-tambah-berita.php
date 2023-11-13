<?php
include "../config/koneksi.php";

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$tanggal = date("Y-m-d");

$path = $_FILES['gambar']['tmp_name'];
$file = $_FILES['gambar']['name'];

move_uploaded_file($path, '../berita/' . $file);

$query = "INSERT INTO berita (judul, isi, tanggal, gambar) VALUES
('$judul', '$isi', '$tanggal', '$file')";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
    echo "<script> alert('Proses Tambah Data Berita Berhasil!'); window.location='kelola-berita.php';</script>";
} else {
    echo "<script> alert('Proses Tambah Data Berita Gagal!'); history.back(); </script>";
}
