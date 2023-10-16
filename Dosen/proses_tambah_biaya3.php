<?php
include "../config/koneksi.php";

$lokasi_file1 = $_FILES['surat_tugas']['tmp_name'];
$nama_file1 = $_FILES['surat_tugas']['name'];
$ukuran1 = $_FILES['surat_tugas']['size'];
$lokasi_file2 = $_FILES['surat_pd']['tmp_name'];
$nama_file2 = $_FILES['surat_pd']['name'];
$ukuran2 = $_FILES['surat_pd']['size'];
$lokasi_file3 = $_FILES['tik_pesawat']['tmp_name'];
$nama_file3 = $_FILES['tik_pesawat']['name'];
$ukuran3 = $_FILES['tik_pesawat']['size'];
$lokasi_file4 = $_FILES['penginapan']['tmp_name'];
$nama_file4 = $_FILES['penginapan']['name'];
$ukuran4 = $_FILES['penginapan']['size'];
$lokasi_file5 = $_FILES['nota_taxi']['tmp_name'];
$nama_file5 = $_FILES['nota_taxi']['name'];
$ukuran5 = $_FILES['nota_taxi']['size'];
$lokasi_file6 = $_FILES['uang_harian']['tmp_name'];
$nama_file6 = $_FILES['uang_harian']['name'];
$ukuran6 = $_FILES['uang_harian']['size'];
$id_user = $_POST['id_user'];

if ($ukuran1 <= 6048000) {
    move_uploaded_file($lokasi_file1, '../dokumen/' . $nama_file1);
    $query1 = "INSERT INTO biaya (surat_tugas, id_user) VALUES ('$nama_file1', '$id_user')";
}

if ($ukuran2 <= 6048000) {
    move_uploaded_file($lokasi_file2, '../dokumen/' . $nama_file2);
    $query2 = "INSERT INTO biaya (surat_pd, id_user) VALUES ('$nama_file2', '$id_user')";
}

if ($ukuran3 <= 6048000) {
    move_uploaded_file($lokasi_file3, '../dokumen/' . $nama_file3);
    $query3 = "INSERT INTO biaya (tik_pesawat, id_user) VALUES ('$nama_file3', '$id_user')";
}

if ($ukuran4 <= 6048000) {
    move_uploaded_file($lokasi_file4, '../dokumen/' . $nama_file4);
    $query4 = "INSERT INTO biaya (penginapan, id_user) VALUES ('$nama_file4', '$id_user')";
}

if ($ukuran5 <= 6048000) {
    move_uploaded_file($lokasi_file5, '../dokumen/' . $nama_file5);
    $query5 = "INSERT INTO biaya (nota_taxi, id_user) VALUES ('$nama_file5', '$id_user')";
}

if ($ukuran6 <= 6048000) {
    move_uploaded_file($lokasi_file6, '../dokumen/' . $nama_file6);
    $query6 = "INSERT INTO biaya (uang_harian, id_user) VALUES ('$nama_file6', '$id_user')";
}

$queries = [$query1, $query2, $query3, $query4, $query5, $query6];

foreach ($queries as $query) {
    if (isset($query)) {
        $hasil = mysqli_query($koneksi, $query);
        if (!$hasil) {
            echo "<script> alert('Proses Tambah Data Biaya Perjalanan Dinas Gagal!'); history.back();</script>";
            exit;
        }
    }
}

echo "<script> alert('Proses Tambah Data Biaya Perjalanan Dinas Berhasil!'); window.location='kelola-biayapd.php';</script>";
?>