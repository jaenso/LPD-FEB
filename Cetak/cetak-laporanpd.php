<?php

require_once __DIR__ . '/vendor/autoload.php';

$server = "localhost";
$username = "root";
$password = "";
$database = "lpd";
$koneksi = mysqli_connect($server, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Koneksi Database Gagal", mysqli_connect_error();
}
if (isset($_GET['id_laporan'])) {
    $id_laporan = $_GET['id_laporan'];
    $sql = mysqli_query($koneksi, "SELECT * FROM laporan lpr JOIN iku_feb iku ON lpr.id_iku = iku.id_iku WHERE lpr.id_laporan='$id_laporan'");

    $cover = 'Hello World';

    $isi = '
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/print.css">
</head>
<body>
<h1>LAPORAN PERJALANAN DINAS FEB UPR 2023</h1>
<h2>LAPORAN PERJALANAN DINAS <br> FAKULTAS EKONOMI BISNIS UPR 2023</h2>';

    while ($lpr = mysqli_fetch_assoc($sql)) {
        $tgl_kunjungan = date('d', strtotime($lpr['tgl_kunjungan']));
        $tgl_selesai = date('d F Y', strtotime($lpr['tgl_selesai']));
        $isi .= '
    <table cellpadding="10" cellspacing="0">
        <tr>
            <td width="30%">Tanggal Kunjungan</td>
            <td width="5%">:</td>
            <td width="60%">' . $tgl_kunjungan . ' - ' . $tgl_selesai . '</td>
        </tr>
        <tr>
            <td>Tempat Tujuan</td>
            <td>:</td>
            <td>' . $lpr['tempat_tujuan'] . '</td>
        </tr>
        <tr>
            <td>No. Surat Tugas</td>
            <td>:</td>
            <td>' . $lpr['no_surat_tugas'] . '</td>
        </tr>
        <tr>
            <td>Sumber Dana</td>
            <td>:</td>
            <td>' . $lpr['sumber_dana'] . '</td>
        </tr>
        <tr>
            <td>Nama yang ditugaskan</td>
            <td>:</td>
            <td>' . $lpr['nama_yang_ditugaskan'] . '</td>
        </tr>
        <tr>
            <td>Relevansi IKU FEB UPR (Value)</td>
            <td>:</td>
            <td>' . $lpr['jenis'] . '</td>
        </tr>
        <tr>
            <td>Relevansi Akreditasi Lamemba (Value)</td>
            <td>:</td>
            <td>' . $lpr['relevansi_akreditasi'] . '</td>
        </tr>
        <tr>
            <td>Relevansi Umum (Value)</td>
            <td>:</td>
            <td>' . $lpr['relevansi_umum'] . '</td>
        </tr>
        <tr>
            <td>Ringkasan temuan kunjungan</td>
            <td>:</td>
            <td>' . $lpr['ringkasan_kunjungan'] . '</td>
        </tr>
        <tr>
            <td>Simpulan</td>
            <td>:</td>
            <td>' . $lpr['simpulan'] . '</td>
        </tr>';
    }
    $isi .= '
            </table>
        </body>
    </html>
    ';

    $mpdf = new \Mpdf\Mpdf([
        'format' => 'A4-P',
    ]);

    $mpdf->WriteHTML($cover);

    $mpdf->AddPage();
    $mpdf->SetMargins(20, 50, 20, 20);
    $mpdf->SetHTMLHeader('<h1>LAPORAN PERJALANAN DINAS FEB UPR 2023</h1>');
    $mpdf->WriteHTML($isi);
    $mpdf->Output('Laporan FEB.pdf', \Mpdf\Output\Destination::INLINE);
} else {
    echo "ID Laporan tidak valid";
}
