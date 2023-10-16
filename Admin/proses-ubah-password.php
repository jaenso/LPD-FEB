<?php 
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$id_user        = $_POST['id_user'];
$nama           = $_POST['nama'];
$username       = $_POST['username'];
$password       = $_POST['password'];
$level          = $_POST['level'];

$query = "UPDATE user SET nama='$nama', username='$username', password='$password', level='$level' WHERE id_user='$id_user'";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
    echo "<script> alert ('Proses Ubah Data User Berhasil!'); window.location='ubah-password.php?id_user=$id_user'</script>";
} else { 
    echo "<script> alert ('Proses Ubah Data User Gagal!'); history.back(); </script>";
}
?>