<?php
include "../config/koneksi.php";

$id_biaya = $_POST['id_biaya'];
$targetDirectory = '../dokumen/';

$fileInputs = [
    'materi_kegiatan' => 'materi_kegiatan',
    'surat_tugas' => 'surat_tugas',
    'surat_pd' => 'surat_pd',
    'tik_pesawat' => 'tik_pesawat',
    'penginapan' => 'penginapan',
    'nota_taxi' => 'nota_taxi',
    'uang_harian' => 'uang_harian',
];

foreach ($fileInputs as $inputName => $columnName) {
    if ($_FILES[$inputName]['size'] > 0) {
        $lokasi_file = $_FILES[$inputName]['tmp_name'];
        $nama_file = $_FILES[$inputName]['name'];
        $ukuran = $_FILES[$inputName]['size'];

        if ($ukuran <= 6048000) {
            $fileLama = $targetDirectory . $nama_file;
            if (file_exists($fileLama)) {
                unlink($fileLama);
            }

            move_uploaded_file($lokasi_file, $targetDirectory . $nama_file);

            $query = "UPDATE biaya SET $columnName = '$nama_file' WHERE id_biaya = '$id_biaya'";
            $hasil = mysqli_query($koneksi, $query);

            if (!$hasil) {
                echo "<script> alert('Proses Tambah Data Surat Pertanggung Jawaban Gagal!'); history.back();</script>";
                exit;
            }
        }
    }
}

echo "<script> alert('Proses Tambah Data Surat Pertanggung Jawaban Berhasil!'); window.location='kelola-biayapd.php';</script>";
