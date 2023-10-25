<?php
include('../config/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Laporan Perjalanan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- css yang digunakan ketika dalam mode screen -->
    <link href="style.css" rel="stylesheet" media="screen">

    <!-- ss yang digunakan tampilkan ketika dalam mode print -->
    <link href="print.css" rel="stylesheet" media="print">

    <script src="jquery-1.8.3.min.js"></script>
    <script src="jquery.PrintArea.js"></script>
    <script>
        (function($) {
            $(document).ready(function(e) {

                $("#cetak").bind("click", function(event) {
                    $('#data-mahasiswa').printArea();
                });
            });
        })(jQuery);
    </script>
    <style type="text/css">
    </style>
</head>

<body>

    <div class="navbar navbar-static-top">
        <div class="navbar-inner">
            <div class="container">
                <button id="cetak" class="btn pull-right">Cetak</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php
            include "../config/koneksi.php";
            // $id_disposisi = $_GET['id_disposisi'];
            $sql = mysqli_query($koneksi, "SELECT * FROM instansi
          WHERE id_instansi = 1");
            ?>
            <div id="data-mahasiswa">
                <!-- <p><img src="kopFEB.jpg" width="1000"></p> -->
                <style type="text/css">
                    .tg {
                        border-collapse: collapse;
                        border-spacing: 0;
                    }

                    .tg td {
                        border-color: black;
                        border-style: solid;
                        border-width: 1px;
                        font-family: Arial, sans-serif;
                        font-size: 14px;
                        overflow: hidden;
                        padding: 10px 5px;
                        word-break: normal;
                    }

                    .tg th {
                        border-color: black;
                        border-style: solid;
                        border-width: 1px;
                        font-family: Arial, sans-serif;
                        font-size: 14px;
                        font-weight: normal;
                        overflow: hidden;
                        padding: 10px 5px;
                        word-break: normal;
                    }

                    .tg .tg-c3ow {
                        border-color: inherit;
                        text-align: center;
                        vertical-align: top
                    }

                    .tg .tg-0pky {
                        border-color: inherit;
                        text-align: left;
                        vertical-align: top
                    }

                    h1 {
                        font-size: 15px;
                        font-weight: bold;
                        text-align: end;
                        color: white;
                        padding: 5px;
                        background-color: gray;
                    }

                    h2 {
                        font-size: 15px;
                        font-weight: bold;
                        text-align: center;
                    }
                </style>
                <h1>LAPORAN PERJALANAN DINAS FEB UPR 2023</h1>
                <?php while ($data = mysqli_fetch_array($sql)) { ?>
                    <table class="tg" align="center" width="925px">
                        <thead>
                            <tr>
                                <th class="tg-c3ow" colspan="4"><span style="font-weight:bold">
                                        <h2>LAPORAN PERJALANAN DINAS<br>FAKULTAS EKONOMI DAN BISNIS UPR 2023</h2></br>
                                    </span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tanggal Kunjungan</td>
                                <td>: 19-21 Juli 2023</td>
                            </tr>
                            <tr>
                                <td>Tempat Tujuan</td>
                                <td>: Fakultas Ekonomi dan Bisnis Universitas Brawijaya Malang</td>
                            </tr>
                            <tr>
                                <td>No. Surat Tugas</td>
                                <td>: 524/UN24.4/KP/2023</td>
                            </tr>
                            <tr>
                                <td>Sumber Dana</td>
                                <td>: DIPA PNBP FEB UPR 2023</td>
                            </tr>
                            <tr>
                                <td>Tanggal Kunjungan</td>
                                <td>: Tanggal Kunjungan</td>
                            </tr>
                            <tr>
                                <td>Nama yang ditugaskan</td>
                                <td>: 1. Dr Agus Satrya Wibowo, SE., M.Si.
                                    <br>
                                    2. Sri Yuni, SE., M.Si.
                                    <br>
                                    3. Ade Yuniati, SE., M.Sc.
                                </td>
                            </tr>
                            <tr>
                                <td>Relevansi IKU FEB UPR (Value)</td>
                                <td>: IKU 8: Program studi berstandar internasional</td>
                            </tr>
                            <tr>
                                <td>Relevansi Akreditasi Lamemba (Value)</td>
                                <td>: 1. Mahasiswa mampu bersaing dan mendapat pengakuan di tingkat internasional
                                    <br>
                                    2. Proses pembelajaran memenuhi standar internasional
                                    <br>
                                    3. Program studi memiliki daya saing internasional
                                    <br>
                                    4. Peningkatan kualitas capaian pemebelajaran (CPL)
                                    <br>
                                    5. Peningkatan komptensi/profil lulusan
                                </td>
                            </tr>
                            <tr>
                                <td>Relevansi Umum (Value)</td>
                                <td>Dengan adanya english class diharapkan dapat mempersiapkan mahasiswa untuk terlibat dalam kegiatan pertukaran mahasiswa, komptensi, debat, internasional, konferensi internasional, dan mengikuti program summer course di negara lain.
                                </td>
                            </tr>
                            <tr>
                                <td>Ringkasan temuan kunjungan</td>
                                <td>: Kunjungan kerja ke Fakultas Ekonomi dan Bisnis Universitas Brawijaya Malang merupakan bachmarking untuk mempersiapkan kelas dengan bahasa pengantar bahasa Inggris. Di FEB UB, internasional undergraduate program (IUP) dimulai sejak tahun 2007. Kelas IUP ini dipersiapkan kurang lebih selama 1 tahun dan dikelola di bawah departemen masing-masing program. Saat ini IUP UB ada untuk tiga program studi, yaitu akuntansi, manajemen, dan ekonomi keuangan dan perbankan. Daya tampung mahasiswa IUP dibatasi hanya 30 orang per program studi. Untuk menjadi mahasiswa di IUP, mahasiswa dituntut untuk dapat berbicara bahasa inggris secara aktif dan memiliki skor minimal TOEFL 525 dan IELTS 5 (saat lulus). Dalam rangka meningkatkan kualitas proses pembelajaran, IUP bekerja sama dengan beberapa universitas luar negeri dalam menyusun kurikulumnya sehingga mahasiswa akan mendapatkan pengalaman belajar di dalam dan luar negeri, baik itu dalam bentuk exchange, double degrees, internship, dan summer school. Saat ini, kurikulum IUP dan program reguler dibuat sama sehingga yang menjadi pembeda antara mahasiswa IUP dan regular adalah mulai angkatan 2023, mahasiswa diminta untuk sertifikasi luar negeri.</td>
                            </tr>
                            <tr>
                                <td>Simpulan</td>
                                <td>:</td>
                                <td>Fakultas Ekonomi dan Bisnis UPR dapat mempersiapkan kelas IUP dengn kelas rintisan English Class. Dalam persiapannya, FEB UPR harus menjalin kerja sama dengan beberapa kampus luar negeri dan menyusun kurikulum bersama, baik itu untuk program exchange, double degrees, internship, dan summer school. Selain itu, dosen juga harus dipersiapkan untuk mengajar di English Class, FEB bisa bekerja sama dengan program studi Bahasa Inggris FKIP UPR untuk mengadakan pelatihan penyusunan perangkat pembelajaran (lesson plan) dengan Bahasa Inggris. Transfer pengetahuan harus diutamakan. Mahasiswa yang mengikuti program akan diberikan apresiasi melalui SKPI.</td>
                            </tr>
                        </tbody>
                    </table>
                <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>