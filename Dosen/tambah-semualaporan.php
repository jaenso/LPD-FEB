<?php
session_start();
include "../Komponen_Website/header.php";
include "../Komponen_Website/sidebar.php";
include "../config/koneksi.php";
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
                        <h1 class="m-0 text-dark">Tambah Data Laporan Perjalanan Dinas</h1>
                    </b>
                    <p>Form Tambah Data Laporan Perjalanan Dinas.</p>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                        <li class="breadcrumb-item active">Tambah Data Laporan Perjalanan Dinas</li>
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
                            <h3 class="card-title"><b>Tambah Data Laporan Perjalanan Dinas</b></h3>
                        </div>
                        <form role="form" action="proses-tambah-semualaporan.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>Data Laporan PD</label>
                                            <select class="select2" name="id_laporan" style="width: 100%;" required>
                                                <option value="">Pilih Laporan PD</option>
                                                <?php
                                                $query = "SELECT * FROM laporan";
                                                $result = mysqli_query($koneksi, $query);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '<option value="' . $row['id_laporan'] . '">' . $row['no_surat_tugas'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Data Surat Pertanggung Jawaban</label>
                                            <select class="select2" name="id_biaya" style="width: 100%;" required>
                                                <option value="">Pilih Data Surat Pertanggung Jawaban</option>
                                                <?php
                                                $query = "SELECT * FROM biaya";
                                                $result = mysqli_query($koneksi, $query);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '<option value="' . $row['id_biaya'] . '">' . $row['surat_tugas'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>File Laporan PD</label>
                                            <input type="file" accept=".pdf" class="form-control" name="file_laporan" required="required"></textarea>
                                            <span class="text-danger"> *Masukkan File Surat (Format yang diterima : .pdf,)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="kelola-semualaporan.php" class="btn btn-info nav-icon fas fa-arrow-left"> Kembali</a>
                                <button type="submit" class="btn btn-info nav-icon fas fa-arrow-right"> Selanjutnya</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include "../Komponen_Website/footer.php";
?>