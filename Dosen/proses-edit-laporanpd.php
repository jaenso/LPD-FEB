<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$tgl_kunjungan          = $_POST['tgl_kunjungan'];
$tgl_selesai          = $_POST['tgl_selesai'];
$tempat_tujuan          = $_POST['tempat_tujuan'];
$no_surat_tugas         = $_POST['no_surat_tugas'];
$sumber_dana            = $_POST['sumber_dana'];
$nama_yang_ditugaskan   = implode(", ", $_POST['nama_yang_ditugaskan']);
$relevansi_iku          = $_POST['relevansi_iku'];
$relevansi_akreditasi   = $_POST['relevansi_akreditasi'];
$relevansi_umum         = $_POST['relevansi_umum'];
$ringkasan_kunjungan    = $_POST['ringkasan_kunjungan'];
$simpulan               = $_POST['simpulan'];
$id_laporan             = $_POST['id_laporan'];

$query = "UPDATE laporan SET tgl_kunjungan='$tgl_kunjungan',tgl_selesai='$tgl_selesai', tempat_tujuan='$tempat_tujuan', no_surat_tugas='$no_surat_tugas', 
sumber_dana='$sumber_dana', nama_yang_ditugaskan='$nama_yang_ditugaskan', id_iku='$relevansi_iku', relevansi_akreditasi='$relevansi_akreditasi', 
relevansi_umum='$relevansi_umum', ringkasan_kunjungan='$ringkasan_kunjungan', simpulan='$simpulan' WHERE id_laporan='$id_laporan'";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
    echo "<script> alert('Proses Edit Data Laporan Perjalanan Dinas Berhasil!'); window.location='kelola-laporanpd.php';</script>";
} else {
    echo "<script> alert('Proses Edit Data Laporan Perjalanan Dinas Gagal!'); history.back();</script>";
}
