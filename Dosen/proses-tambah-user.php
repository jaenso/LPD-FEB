<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi 
$nama           = $_POST['nama'];
$username       = $_POST['username'];
$password       = $_POST['password'];
$level          = $_POST['level'];

$query = "INSERT INTO user(nama, username, password, level) VALUES ('$nama', '$username', '$password', '$level')";

$hasil = mysqli_query($koneksi,$query);
if ($hasil) {
    echo "<script> alert('Proses Tambah Data User Berhasil!'); window.location='kelola-user.php';</script>";
} else {
    echo "<script> alert('Proses Tambah Data User Gagal!'); history.back();</script>";
}
?>