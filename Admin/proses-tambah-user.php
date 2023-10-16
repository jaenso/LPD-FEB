<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel 

$username           =$_POST['username'];
$password           =$_POST['password'];
$nama               =$_POST['nama'];
$level              =$_POST['level'];

$sql_user = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
$cek_user = mysqli_num_rows($sql_user);
if ($cek_user > 0) {
    echo "<script> alert('Username sudah ada!'); history.back();</script>";
} else {
    $query = "INSERT INTO user(username, password, nama, level) VALUES ('$username', '$password', '$nama', '$level')"; 
    
    $hasil = mysqli_query($koneksi, $query);
    if ($hasil) {
        echo "<script> alert('Proses Tambah Data User Berhasil'); window.location='kelola-user.php';</script>";
    } else {
        echo "<script> alert('Proses Tambah Data User Gagal'); history.back();</script>";
    }
}
?>