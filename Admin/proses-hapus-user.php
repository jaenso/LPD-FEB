<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi 
$id_user = $_GET['id_user'];

//proses
$sql_hapus = mysqli_query($koneksi, "DELETE FROM user WHERE id_user = '$id_user'");

//logika 
if ($sql_hapus) {
    echo "<script> alert('Proses Hapus Data User Berhasil!'); window.location='kelola-user.php';</script>";
} else {
    echo "<script> alert('Proses Hapus Data User Gagal!'); history.back();</script>";
}
?>