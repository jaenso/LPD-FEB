<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$password          = $_POST['password'];
$id_user          = $_POST['id_user'];

$query = "UPDATE user SET password='$password' WHERE id_user='$id_user'";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
    echo "<script> alert('Proses Ubah Password Berhasil!'); window.location='index.php';</script>";
} else {
    echo "<script> alert('Proses Ubah Password Gagal!'); history.back();</script>";
}
