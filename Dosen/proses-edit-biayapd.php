<?php
include "../config/koneksi.php";

$lokasi_file1 = $_FILES['surat_tugas']['tmp_name'];
$nama_file1 = $_FILES['surat_tugas']['name'];
$ukuran1 = $_FILES['surat_tugas']['size'];
$lokasi_file2 = $_FILES['surat_tugas']['tmp_name'];
$nama_file2 = $_FILES['surat_tugas']['name'];
$ukuran2 = $_FILES['surat_tugas']['size'];
$lokasi_file3 = $_FILES['surat_pd']['tmp_name'];
$nama_file3 = $_FILES['surat_pd']['name'];
$ukuran3 = $_FILES['surat_pd']['size'];
$lokasi_file4 = $_FILES['tik_pesawat']['tmp_name'];
$nama_file4 = $_FILES['tik_pesawat']['name'];
$ukuran4 = $_FILES['tik_pesawat']['size'];
$lokasi_file5 = $_FILES['penginapan']['tmp_name'];
$nama_file5 = $_FILES['penginapan']['name'];
$ukuran5 = $_FILES['penginapan']['size'];
$lokasi_file6 = $_FILES['nota_taxi']['tmp_name'];
$nama_file6 = $_FILES['nota_taxi']['name'];
$ukuran6 = $_FILES['nota_taxi']['size'];
$lokasi_file7 = $_FILES['uang_harian']['tmp_name'];
$nama_file7 = $_FILES['uang_harian']['name'];
$ukuran7 = $_FILES['uang_harian']['size'];
$id_user = $_POST['id_user'];

if ($ukuran1 <= 6048000) {
    // Memindahkan file-file yang diunggah ke direktori dokumen
    move_uploaded_file($lokasi_file1, '../dokumen/' . $nama_file1);
    move_uploaded_file($lokasi_file2, '../dokumen/' . $nama_file2);
    move_uploaded_file($lokasi_file3, '../dokumen/' . $nama_file3);
    move_uploaded_file($lokasi_file4, '../dokumen/' . $nama_file4);
    move_uploaded_file($lokasi_file5, '../dokumen/' . $nama_file5);
    move_uploaded_file($lokasi_file6, '../dokumen/' . $nama_file6);
    move_uploaded_file($lokasi_file7, '../dokumen/' . $nama_file7);

    // Memasukkan data ke database
    $query = "UPDATE biaya SET materi_kegiatan='$nama_file1, 'surat_tugas='$nama_file2', surat_pd='$nama_file3', tik_pesawat='$nama_file4', penginapan='$nama_file5', nota_taxi='$nama_file6', uang_harian='$nama_file7' 
    WHERE id_biaya='$id_biaya'";

    $hasil = mysqli_query($koneksi, $query);
    if (!$hasil) {
        echo "<script> alert('Proses Tambah Data Surat Pertanggung Jawaban Gagal!'); history.back();</script>";
        exit;
    }
}

echo "<script> alert('Proses Tambah Data Surat Pertanggung Jawaban Berhasil!'); window.location='kelola-biayapd.php';</script>";
?>