<?php
require_once('fpdf/fpdf.php');
require_once('fpdi/src/autoload.php');
require('../../Config/koneksi.php');

use setasign\Fpdi\Fpdi;

$pdf = new Fpdi();

$id_biaya = $_GET['id_biaya'];
$query = "SELECT * FROM biaya WHERE id_biaya = '$id_biaya'";
$sql = mysqli_query($koneksi, $query);

while ($row = mysqli_fetch_array($sql)) {
    $materi_kegiatan = $row['materi_kegiatan'];
    $surat_tugas = $row['surat_tugas'];
    $surat_pd = $row['surat_pd'];
    $tik_pesawat = $row['tik_pesawat'];
    $penginapan = $row['penginapan'];
    $nota_taxi = $row['nota_taxi'];
    $uang_harian = $row['uang_harian'];
}

$files = array(
    '../../dokumen/' . $materi_kegiatan,
    '../../dokumen/' . $surat_tugas,
    '../../dokumen/' . $surat_pd,
    '../../dokumen/' . $tik_pesawat,
    '../../dokumen/' . $penginapan,
    '../../dokumen/' . $nota_taxi,
    '../../dokumen/' . $uang_harian,
);

foreach ($files as $file) {
    $pageCount = $pdf->setSourceFile($file);
    for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
        $templateId = $pdf->importPage($pageNo);
        $pdf->addPage();
        $pdf->useTemplate($templateId);
    }
}

$pdf->Output('Laporan Perjalanan Dinas.pdf', 'I');
