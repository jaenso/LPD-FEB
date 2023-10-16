<?php
include "../config/koneksi.php";

$lokasi_file1 = $_FILES['uang_harian']['tmp_name'];
$nama_file1 = $_FILES['uang_harian']['name'];
$ukuran1 = $_FILES['uang_harian']['size'];

if ($ukuran1 <= 6048000) {
    $tujuan = '../dokumen/' . $nama_file1;
    if (move_uploaded_file($lokasi_file1, $tujuan)) {
        $id_user = $_SESSION['id_user'];

        $query = "INSERT INTO nama_tabel (nama_field_file, id_user) VALUES ('$nama_file1', $id_user)";

        $hasil = mysqli_query($koneksi, $query);
        if (!$hasil) {
            echo "<script>alert('Proses Tambah Data Surat Pertanggung Jawaban Gagal!'); history.back();</script>";
            exit;
        }

        echo "<script>alert('Proses Tambah Data Surat Pertanggung Jawaban Berhasil!'); window.location='kelola-biayapd.php';</script>";
    } else {
        echo "<script>alert('Gagal mengunggah file.'); history.back();</script>";
    }
} else {
    echo "<script>alert('Ukuran file terlalu besar. Maksimum 6MB.'); history.back();</script>";
}
?>
