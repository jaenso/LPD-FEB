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

$sql = mysqli_query($koneksi, "SELECT * FROM instansi");
$profil = array();

while ($row = mysqli_fetch_array($sql)) {
    $profil[] = $row;
}

$mpdf = new \Mpdf\Mpdf();
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/print.css">
</head>
<body>
    <h1>LAPORAN PERJALANAN DINAS FEB UPR 2023</h1>
    <h2>LAPORAN PERJALANAN DINAS <br> FAKULTAS EKONOMI BISNIS UPR 2023</h2>';

foreach ($profil as $prf) {
    $html .= '
    <table cellpadding="10" cellspacing="0">
        <tr>
            <td width="30%">Tanggal Kunjungan</td>
            <td width="5%">:</td>
            <td width="60%">' . $prf['nama'] . '</td>
        </tr>';
}

$html .= '
        <tr>
            <td>Tanggal Kunjungan</td>
            <td>:</td>
            <td>19-21 Juli 2023</td>
        </tr>
        <tr>
            <td>Tempat Tujuan</td>
            <td>:</td>
            <td>Fakultas Ekonomi dan Bisnis Universitas Brawijaya Malang</td>
        </tr>
        <tr>
            <td>No. Surat Tugas</td>
            <td>:</td>
            <td>524/UN24.4/KP/2023</td>
        </tr>
        <tr>
            <td>Sumber Dana</td>
            <td>:</td>
            <td>DIPA PNBP FEB UPR 2023</td>
        </tr>
        <tr>
            <td>Nama yang ditugaskan</td>
            <td>:</td>
            <td>1. Dr Agus Satrya Wibowo, SE., M.Si.<br>
                2. Sri Yuni, SE., M.Si.<br>
                3. Ade Yuniati, SE., M.Sc.
            </td>
        </tr>
        <tr>
            <td>Relevansi IKU FEB UPR (Value)</td>
            <td>:</td>
            <td>IKU 8: Program studi berstandar internasional</td>
        </tr>
        <tr>
            <td>Relevansi Akreditasi Lamemba (Value)</td>
            <td>:</td>
            <td>1. Mahasiswa mampu bersaing dan mendapat pengakuan di tingkat internasional<br>
                2. Proses pembelajaran memenuhi standar internasional<br>
                3. Program studi memiliki daya saing internasional<br>
                4. Peningkatan kualitas capaian pemebelajaran (CPL)<br>
                5. Peningkatan komptensi/profil lulusan
            </td>
        </tr>
        <tr>
            <td>Relevansi Umum (Value)</td>
            <td>:</td>
            <td>Dengan adanya English class diharapkan dapat mempersiapkan mahasiswa untuk terlibat dalam kegiatan pertukaran mahasiswa, kompetisi, debat, internasional, konferensi internasional, dan mengikuti program summer course di negara lain.
            </td>
        </tr>
        <tr>
            <td>Ringkasan temuan kunjungan</td>
            <td>:</td>
            <td>Kunjungan kerja ke Fakultas Ekonomi dan Bisnis Universitas Brawijaya Malang merupakan benchmarking untuk mempersiapkan kelas dengan bahasa pengantar bahasa Inggris. Di FEB UB, international undergraduate program (IUP) dimulai sejak tahun 2007. Kelas IUP ini dipersiapkan kurang lebih selama 1 tahun dan dikelola di bawah departemen masing-masing program. Saat ini IUP UB ada untuk tiga program studi, yaitu akuntansi, manajemen, dan ekonomi keuangan dan perbankan. Daya tampung mahasiswa IUP dibatasi hanya 30 orang per program studi. Untuk menjadi mahasiswa di IUP, mahasiswa dituntut untuk dapat berbicara bahasa Inggris secara aktif dan memiliki skor minimal TOEFL 525 dan IELTS 5 (saat lulus). Dalam rangka meningkatkan kualitas proses pembelajaran, IUP bekerja sama dengan beberapa universitas luar negeri dalam menyusun kurikulumnya sehingga mahasiswa akan mendapatkan pengalaman belajar di dalam dan luar negeri, baik itu dalam bentuk exchange, double degrees, internship, dan summer school. Saat ini, kurikulum IUP dan program reguler dibuat sama sehingga yang menjadi pembeda antara mahasiswa IUP dan regular adalah mulai angkatan 2023, mahasiswa diminta untuk sertifikasi luar negeri.
            </td>
        </tr>
        <tr>
            <td>Simpulan</td>
            <td>:</td>
            <td>Fakultas Ekonomi dan Bisnis UPR dapat mempersiapkan kelas IUP dengan kelas rintisan English Class. Dalam persiapannya, FEB UPR harus menjalin kerja sama dengan beberapa kampus luar negeri dan menyusun kurikulum bersama, baik itu untuk program exchange, double degrees, internship, dan summer school. Selain itu, dosen juga harus dipersiapkan untuk mengajar di English Class, FEB bisa bekerja sama dengan program studi Bahasa Inggris FKIP UPR untuk mengadakan pelatihan penyusunan perangkat pembelajaran (lesson plan) dengan Bahasa Inggris. Transfer pengetahuan harus diutamakan. Mahasiswa yang mengikuti program akan diberikan apresiasi melalui SKPI.
            </td>
        </tr>
    </table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('akhirnya.pdf', \Mpdf\Output\Destination::DOWNLOAD);
