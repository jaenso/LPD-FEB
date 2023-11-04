<?php
require_once('fpdf/fpdf.php');
require_once('fpdi/src/autoload.php');
require('../../Config/koneksi.php');

use setasign\Fpdi\Fpdi;

$pdf = new Fpdi();

$id_semua_laporan = $_GET['id_semua_laporan'];
$query = "SELECT * FROM semua_laporan WHERE id_semua_laporan = '$id_semua_laporan'";
$sql = mysqli_query($koneksi, $query);

while ($row = mysqli_fetch_array($sql)) {
    $file_laporanpd = $row['file_laporanpd'];
    $file_biayapd = $row['file_biayapd'];
}

$files = array(
    '../../laporan/' . $file_laporanpd,
    '../../laporan/' . $file_biayapd,
);

foreach ($files as $file) {
    $pageCount = $pdf->setSourceFile($file);
    for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
        $templateId = $pdf->importPage($pageNo);
        $pdf->addPage();
        $pdf->useTemplate($templateId);
    }
}

$pdf->Output('Seluruh Laporan Perjalanan Dinas.pdf', 'I');
