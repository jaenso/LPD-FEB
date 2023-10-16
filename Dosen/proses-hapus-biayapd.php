<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi 
$id_biaya = $_GET['id_biaya'];

//proses
$sql_hapus = mysqli_query($koneksi, "DELETE FROM biaya WHERE id_biaya = '$id_biaya'");

//logika 
if ($sql_hapus) {
    echo "<script> alert('Proses Hapus Data Surat Pertanggung Jawaban!'); window.location='kelola-biayapd.php';</script>";
} else {
    echo "<script> alert('Proses Hapus Data Surat Pertanggung Jawaban!'); history.back();</script>";
}
?>