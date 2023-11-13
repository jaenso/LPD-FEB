<?php
include "../config/koneksi.php";

$id_berita = $_POST['id_berita'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$tanggal = date("Y-m-d");

if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == UPLOAD_ERR_OK) {
    $upload_directory = '../berita/';

    $gambar = $_FILES['gambar']['name'];
    $gambar_temp = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($gambar_temp, $upload_directory . $gambar);
} else {
    $gambar = $_POST['gambar_lama'];
}

$query = "UPDATE berita SET judul='$judul', isi='$isi', gambar='$gambar', tanggal='$tanggal' WHERE id_berita='$id_berita'";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
    echo "<script> alert('Proses Edit Data Berita Berhasil!'); window.location='kelola-berita.php';</script>";
} else {
    echo "<script> alert('Proses Edit Data Berita Gagal!'); history.back(); </script>";
}
