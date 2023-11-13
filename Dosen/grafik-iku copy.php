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
            <!-- ... (bagian lain dari HTML) ... -->

            <div class="row mb-2">
                <div class="col-sm-6">
                    <b>
                        <h1 class="m-0 text-dark">Beranda</h1>
                    </b>
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
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Filter Tanggal Kunjungan</span>
                        <input type="date" class="form-control" id="tgl_kunjungan" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Filter Tanggal Selesai</span>
                        <input type="date" class="form-control" id="tgl_selesai" aria-describedby="basic-addon1">
                    </div>
                    <button class="btn btn-primary" onclick="filterTanggal()">Filter</button>
                    <div class="" style="width: 100%; height:100%;">
                        <canvas id="grafik"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    function filterTanggal() {
        const tanggalKunjungan = $('#tgl_kunjungan').val();
        const tanggalSelesai = $('#tgl_selesai').val();

        $.post('grafik-iku.php', {
            tgl_kunjungan: tanggalKunjungan,
            tgl_selesai: tanggalSelesai
        }, function(response) {
            const data = JSON.parse(response);
            updateChart(data.labels, data.data);
        });
    }

    function updateChart(labels, data) {
        const ctx = document.getElementById('grafik').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Data',
                    data: data,
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
    }
</script>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tglKunjungan = $_POST['tgl_kunjungan'];
    $tglSelesai = $_POST['tgl_selesai'];

    $query = "SELECT id_iku, COUNT(*) as jumlah_laporan 
              FROM laporan 
              WHERE tgl_kunjungan BETWEEN '$tglKunjungan' AND '$tglSelesai' 
              GROUP BY id_iku";

    $result = mysqli_query($koneksi, $query);

    $labels = [];
    $data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $labels[] = "IKU " . $row['id_iku'];
        $data[] = $row['jumlah_laporan'];
    }

    echo json_encode(['labels' => $labels, 'data' => $data]);
}

include "../Komponen_Website/footer.php";
?>