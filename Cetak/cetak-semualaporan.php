<?php
require('../Config/koneksi.php');

if (isset($_GET["id_semua_laporan"])) {
    $id_semua_laporan = $_GET["id_semua_laporan"];
    $query = "SELECT * FROM semua_laporan WHERE id_semua_laporan = $id_semua_laporan";
    $result = mysqli_query($koneksi, $query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $file = $row["file_laporan"];
        $pdfPath = "../laporan/" . $file;

        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="' . $file . '"');
        @readfile($pdfPath);
    } else {
        echo "File PDF tidak ditemukan.";
    }
}
