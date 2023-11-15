<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi 
$tgl_kunjungan          = $_POST['tgl_kunjungan'];
$tgl_selesai            = $_POST['tgl_selesai'];
$tempat_tujuan          = $_POST['tempat_tujuan'];
$no_surat_tugas         = $_POST['no_surat_tugas'];
$sumber_dana            = $_POST['sumber_dana'];
$nama_yang_ditugaskan   = implode(", ", $_POST['nama_yang_ditugaskan']);
$relevansi_iku          = $_POST['relevansi_iku'];
$relevansi_akreditasi   = $_POST['relevansi_akreditasi'];
$relevansi_umum         = $_POST['relevansi_umum'];
$ringkasan_kunjungan    = $_POST['ringkasan_kunjungan'];
$simpulan               = $_POST['simpulan'];
$id_kota               = $_POST['id_kota'];
$id_user                = $_POST['id_user'];

$query = "INSERT INTO laporan(tgl_kunjungan, tgl_selesai, tempat_tujuan, no_surat_tugas, sumber_dana, nama_yang_ditugaskan, id_iku, relevansi_akreditasi, relevansi_umum, ringkasan_kunjungan, simpulan, id_user, id_kota) VALUES 
('$tgl_kunjungan', '$tgl_selesai', '$tempat_tujuan', '$no_surat_tugas', '$sumber_dana', '$nama_yang_ditugaskan', '$relevansi_iku', '$relevansi_akreditasi', '$relevansi_umum', '$ringkasan_kunjungan', '$simpulan', '$id_user', '$id_kota')";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
    echo "<script> alert ('Proses Tambah Data Pengguna Berhasil Selanjutnya Masuk Kedalam Pengisian Data SPJ'); window.location='tambah-biayapd.php';</script>";
} else {
    echo "<script> alert ('Proses Tambah Data Pengguna Gagal'); history.back(); </script>";
}
