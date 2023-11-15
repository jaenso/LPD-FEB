<?php
session_start();
include "../Komponen_Website/header.php";
include "../Komponen_Website/sidebar.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

//jika tidak ada logn sebelumnya maka diarahkan ke login/php
if (empty($_SESSION['username']) and empty($_SESSION['PASSWORD'])) {
    echo "<script> window.location = '../login/index.php' </script>";
};
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="small-box bg-info">
                <div class="inner">
                    <b>
                        <h4>FAKULTAS EKONOMI DAN BISNIS
                    </b></h4>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-6">

                    <b>
                        <h1 class="m-0 text-dark">Detail Laporan Perjalanan Dinas
                    </b></h1>
                    <p>Detail dari Laporan yang dipilih.</p>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="kelola-laporanpd.php">Kelola Laporan Perjalanan Dinas</a></li>
                        <li class="breadcrumb-item active">Detail Data Laporan Perjalanan Dinas</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title"><b>Detail Data Laporan Perjalanan Dinas</h3></b>
                        </div>

                        <?php
                        include "../config/koneksi.php";
                        $id_laporan = $_GET['id_laporan'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM laporan JOIN iku_feb ON laporan.`id_iku` = iku_feb.`id_iku` JOIN kota ON laporan.id_kota = kota.id WHERE id_laporan='$id_laporan'");
                        ?>
                        <div class="card-body">
                            <?php
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <table id="example2" class="table table-bordered table-stripped">
                                    <tbody>
                                        <tr>
                                            <td width="275px"><b>Tanggal Kunjungan</b></td>
                                            <td><?php echo $data['tgl_kunjungan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Tanggal Selesai</b></td>
                                            <td><?php echo $data['tgl_selesai'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Tempat Tujuan</b></td>
                                            <td><?= $data['kota'] ?>, <?= $data['tempat_tujuan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Nomor Surat Tugas</b></td>
                                            <td><?php echo $data['no_surat_tugas'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Sumber Dana</b></td>
                                            <td><?php echo $data['sumber_dana'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Nama Yang Ditugaskan</b></td>
                                            <td><?php echo $data['nama_yang_ditugaskan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Relevansi IKU FEB UPR (Value)</b></td>
                                            <td><?php echo $data['jenis'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Relevansi Akreditasi Lamemba (Value)</b></td>
                                            <td><?php echo $data['relevansi_akreditasi'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Relevansi Umum</b></td>
                                            <td><?php echo $data['relevansi_umum'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Ringkasan Kunjungan</b></td>
                                            <td><?php echo $data['ringkasan_kunjungan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Ringkasan Kunjungan</b></td>
                                            <td><?php echo $data['simpulan'] ?></td>
                                        </tr>

                                    </tbody>
                                </table>
                            <?php } ?>
                        </div>
                        <div class="card-footer">
                            <a href="kelola-laporanpd.php" class="btn btn-info nav-icon fas fa-arrow-left"><b>Kembali</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

</div>
</div>
<!-- /.content-wrapper -->

<?php
include "../Komponen_Website/footer.php";
?>