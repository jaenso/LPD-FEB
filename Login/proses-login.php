<?php
//file ini merupaka file login untuk admin
session_start();
include "../config/koneksi.php";
error_reporting(0);


//mendapatkan input dari pengguna
$username=$_POST['username'];
$password=$_POST['password'];

//mencek di database tabel admin adakah username dan password
$login="SELECT * FROM user WHERE username='$username'";
$cek=mysqli_query($koneksi,$login);
$ketemu=mysqli_num_rows($cek);

$login2="SELECT * FROM user WHERE password='$password'";
$cek2=mysqli_query($koneksi,$login2);
$ketemu2=mysqli_num_rows($cek2);

$login3="SELECT * FROM user WHERE username='$username' AND password='$password'";
$cek3=mysqli_query($koneksi,$login3);
$ketemu3=mysqli_num_rows($cek3);
$r=mysqli_fetch_array($cek3);

    //menampilkan pesaan gagal jika belum memasukan username dan password
    if ($ketemu ==0 & $ketemu2==0){
        echo"<script> alert ('Username dan Password yang Anda masukkan salah'); window.location = '../login/index.php' </script>";
    }
    //menampilkan esan gagal jika username salah
    else if ($ketemu ==0){
        echo"<script> alert ('Username yang Anda masukkan salah!'); window.location = '../login/index.php' </script>";
    }
    //menampilkan pesan gagal jika password salah
    else if ($ketemu2 ==0){
        echo"<script> alert ('Password yang Anda masukkan salah!'); window.location = '../login/index.php' </script>";
    }
    //jika ketemu dibuat sesi loginya
    else if($r['level']=="admin"){
		// buat session login dan username
        $_SESSION['id_user']=$r['id_user'];
        $_SESSION['nama']=$r['nama'];
        $_SESSION['username']=$r['username'];
        $_SESSION['password']=$r['password'];
        $_SESSION['status']='admin';
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
        echo"<script> alert ('Selamat Datang, Admin Sistem Pengelolaan Surat.'); window.location = '../Admin/index.php' </script>";

 
	// cek jika user login sebagai staff
	}else if($r['level']=="user"){
		// buat session login dan username
		$_SESSION['id_user']=$r['id_user'];
        $_SESSION['nama']=$r['nama'];
        $_SESSION['username']=$r['username'];
        $_SESSION['password']=$r['password'];
        $_SESSION['status']='user';            
		$_SESSION['level'] = "user";
		// alihkan ke halaman dashboard pengurus
        echo"<script> alert ('Selamat Datang, Staff Fakultas Ekonomi Dan Bisnis.'); window.location = '../Dosen/index.php' </script>";
    }else if($r['level']=="staff"){
		// buat session login dan username
		$_SESSION['id_user']=$r['id_user'];
        $_SESSION['nama']=$r['nama'];
        $_SESSION['username']=$r['username'];
        $_SESSION['password']=$r['password'];
        $_SESSION['status']='user';            
		$_SESSION['level'] = "user";
		// alihkan ke halaman dashboard pengurus
        echo"<script> alert ('Selamat Datang, Staff Fakultas Ekonomi Dan Bisnis.'); window.location = '../Staff/index.php' </script>";
    }
?>