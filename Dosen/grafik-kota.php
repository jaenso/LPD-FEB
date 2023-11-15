<?php
session_start();
include "../Komponen_Website/header.php";
include "../Komponen_Website/sidebar.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

if (empty($_SESSION['username']) and empty($_SESSION['PASSWORD'])) {
    echo "<script> window.location = '../login/index.php' </script>";
}
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="small-box bg-info">
                <div class="inner">
                    <b>
                        <h4>FAKULTAS EKONOMI DAN BISNIS</h4>
                    </b>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <b>
                        <h1 class="m-0 text-dark">Grafik Kota Perjalanan Dinas</h1>
                    </b>
                    <p>Tempat Mengelola Grafik Kota Perjalanan Dinas Pengguna <i>Website</i>.</p>
                    <p></p>
                    <a href="tambah-laporanpd.php"><button type="submit" class="btn btn-info nav-icon fas fa-edit"> Tambah Data Kota</button></a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                        <li class="breadcrumb-item active">Kelola Laporan Perjalanan Dinas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title"><b>Data Grafik Kota Perjalanan Dinas</b></h3>
                        </div>
                        <div class="card-body">
                            <?php
                            include "../config/koneksi.php";
                            $sql = mysqli_query($koneksi, "SELECT * 
                            FROM laporan 
                            JOIN kota ON laporan.id_kota = kota.id 
                            WHERE DATE_FORMAT(tgl_kunjungan, '%Y-%m') = DATE_FORMAT(NOW(), '%Y-%m');");
                            ?>
                            <table id="example1" class="table table-bordered table-stripped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kota</th>
                                        <th>Total Kunjungan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    while ($row = mysqli_fetch_array($sql)) {
                                        $id_kota = $row['id_kota'];
                                        $total_kunjungan = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM laporan WHERE id_kota = $id_kota")->fetch_assoc()['total'];
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $row['kota']; ?></td>
                                            <td><?php echo $total_kunjungan; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include "../Komponen_Website/footer.php";
?>