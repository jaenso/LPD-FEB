<?php
include "../config/koneksi.php";

//deklarasi variabel
$id_instansi        = $_POST['id_instansi'];
$nama           = $_POST['nama'];
$visi       = $_POST['visi'];
$misi       = $_POST['misi'];
$motto          = $_POST['motto'];
$alamat          = $_POST['alamat'];
$peta          = $_POST['peta'];

$query = "UPDATE instansi SET nama='$nama', visi='$visi', visi='$visi', misi='$misi', motto='$motto', alamat='$alamat', peta='$peta' WHERE id_instansi='$id_instansi'";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
    echo "<script> alert ('Proses Edit Data Instansi Berhasil!'); window.location='profil-instansi.php';</script>";
} else {
    echo "<script> alert ('Proses Edit Data Instansi Gagal!'); history.back(); </script>";
}
