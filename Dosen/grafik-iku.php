<?php
session_start();
include "../Komponen_Website/header.php";
include "../Komponen_Website/sidebar.php";
include "../config/koneksi.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

if (empty($_SESSION['username']) && empty($_SESSION['PASSWORD'])) {
    echo "<script>window.location = '../login/index.php'</script>";
}
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mt-0 mb-0">
                <div class="col-lg-12 col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <div class="row">
                                <div class="col-lg-1">
                                    <img src="../img/uprlogo.png" width="75">
                                </div>
                                <div class="col-lg-11 mt-3 mb-2">
                                    <h4><B>FAKULTAS EKONOMI DAN BISNIS</B></h4>
                                    <div class="row ml-0">
                                        <h6>Jln. Yos Sudarso Palangka Raya 73111, Kalimantan Tengah - Email: feb.upr@upr.ac.id</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <b>
                        <h1 class="m-0 text-dark">Beranda
                    </b></h1>
                    <p>Halaman Utama <i>Website</i> Pengelolaan Surat.</p>
                    <a href="profil-instansi.php"><button class="btn btn-info nav-icon fas fa-building"> Profil Instansi</button></a>
                    <a href="grafik-iku.php"><button class="btn btn-info nav-icon fas fa-chart-bar"> Grafik IKU</button></a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                        <li class="breadcrumb-item active">Beranda</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"><b>Grafik IKU Perjalanan Dinas FEB</b></h3>
                </div>
                <div class="card-body">
                    <div class="" style="width: 100%; height:100%;">
                        <canvas id="grafik"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('grafik');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['IKU 1',
                'IKU 2',
                'IKU 3',
                'IKU 4',
                'IKU 5',
                'IKU 6',
                'IKU 7',
                'IKU 8'
            ],
            datasets: [{
                label: 'Data',
                data: [
                    <?php
                    $query = "SELECT * FROM laporan WHERE id_iku = 1";
                    $iku1 = mysqli_query($koneksi, $query);
                    echo mysqli_num_rows($iku1)
                    ?>,
                    <?php
                    $query = "SELECT * FROM laporan WHERE id_iku = 2";
                    $iku2 = mysqli_query($koneksi, $query);
                    echo mysqli_num_rows($iku2)
                    ?>,
                    <?php
                    $query = "SELECT * FROM laporan WHERE id_iku = 3";
                    $iku3 = mysqli_query($koneksi, $query);
                    echo mysqli_num_rows($iku3)
                    ?>,
                    <?php
                    $query = "SELECT * FROM laporan WHERE id_iku = 4";
                    $iku4 = mysqli_query($koneksi, $query);
                    echo mysqli_num_rows($iku4)
                    ?>,
                    <?php
                    $query = "SELECT * FROM laporan WHERE id_iku = 5";
                    $iku5 = mysqli_query($koneksi, $query);
                    echo mysqli_num_rows($iku5)
                    ?>,
                    <?php
                    $query = "SELECT * FROM laporan WHERE id_iku = 6";
                    $iku6 = mysqli_query($koneksi, $query);
                    echo mysqli_num_rows($iku6)
                    ?>,
                    <?php
                    $query = "SELECT * FROM laporan WHERE id_iku = 7";
                    $iku7 = mysqli_query($koneksi, $query);
                    echo mysqli_num_rows($iku7)
                    ?>,
                    <?php
                    $query = "SELECT * FROM laporan WHERE id_iku = 8";
                    $iku8 = mysqli_query($koneksi, $query);
                    echo mysqli_num_rows($iku8)
                    ?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        },
    });
</script>

<?php
include "../Komponen_Website/footer.php";
?>