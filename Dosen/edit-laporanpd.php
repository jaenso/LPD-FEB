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
            <h1 class="m-0 text-dark">Edit Data Laporan Perjalanan Dinas
          </b></h1>
          <p>Form Edit Data Surat Masuk.</p>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
            <li class="breadcrumb-item active">Edit Data Laporan Perjalanan Dinas</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- DATA USER -->
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title"><b>Edit Data Laporan Perjalanan Dinas</h3></b>
            </div>
            <?php
            include "../config/koneksi.php";
            //deklarasi edit
            $id_laporan             = $_GET['id_laporan'];
            $sql_edit               = mysqli_query($koneksi, "SELECT *FROM laporan WHERE id_laporan='$id_laporan'");
            $row_edit               = mysqli_fetch_array($sql_edit);
            $tgl_kunjungan          = $row_edit['tgl_kunjungan'];
            $tempat_tujuan          = $row_edit['tempat_tujuan'];
            $no_surat_tugas         = $row_edit['no_surat_tugas'];
            $sumber_dana            = $row_edit['sumber_dana'];
            $nama_yang_ditugaskan   = $row_edit['nama_yang_ditugaskan'];
            $relevansi_iku          = $row_edit['relevansi_iku'];
            $relevansi_akreditasi   = $row_edit['relevansi_akreditasi'];
            $lamemba                = $row_edit['lamemba'];
            $relevansi_umum         = $row_edit['relevansi_umum'];
            $ringkasan_kunjungan    = $row_edit['ringkasan_kunjungan'];
            $simpulan               = $row_edit['simpulan'];
            ?>

            <form role="form" action="proses-edit-laporanpd.php" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <input type="hidden" class="form-control" name="id_laporan" value="<?php echo $id_laporan; ?>">

                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>Tanggal Kunjungan</label>
                      <input type="date" class="form-control" name="tgl_kunjungan" value="<?php echo $tgl_kunjungan; ?>">
                    </div>

                    <div class="col-lg-6">
                      <label>Relevansi IKU FEB UPR (Value)</label>
                      <select class="form-control" name="relevansi_iku" required="required">
                        <option value="">Pilih Relevansi IKU</option>
                        <option value="IKU 1: Lulusan mendapat pekerjaan yang layak">1) Lulusan mendapat pekerjaan yang layak</option>
                        <option value="IKU 2: Mahasiswa mendapat pengalaman di luar kampus">2) Mahasiswa mendapat pengalaman di luar kampus</option>
                        <option value="IKU 3: Dosen berkegiatan di luar kampus">3) Dosen berkegiatan di luar kampus</option>
                        <option value="IKU 4: Praktisi mengajar di dalam kampus">4) Praktisi mengajar di dalam kampus</option>
                        <option value="IKU 5: Hasil kerja dosen digunakan oleh masyarakat">5) Hasil kerja dosen digunakan oleh masyarakat</option>
                        <option value="IKU 6: Program studi bekerjasama dengan mitra kelas dunia">6) Program studi bekerjasama dengan mitra kelas dunia</option>
                        <option value="IKU 7: Kelas yang kolaboratif dan partisipatif">7) Kelas yang kolaboratif dan partisipatif</option>
                        <option value="IKU 8: Program studi berstandar internasional">8) Program studi berstandar internasional</option>
                        <!-- Tambahkan lebih banyak pilihan sesuai kebutuhan -->
                      </select>
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>Tanggal Selesai</label>
                      <input type="date" class="form-control" name="tgl_selesai" value="<?php echo $tempat_tujuan; ?>">
                    </div>

                    <div class="col-lg-6">
                      <label>Relevansi Akreditasi Lamemba (Value)</label>
                      <textarea name="relevansi_akreditasi" class="form-control" rows="10" id="isi1"><?php echo $relevansi_akreditasi; ?></textarea>
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>Tempat Tujuan</label>
                      <input type="text" class="form-control" name="tempat_tujuan" value="<?php echo $no_surat_tugas; ?>">
                    </div>

                    <div class="col-lg-6">
                      <label>Relevansi Umum (Value)</label>
                      <textarea name="relevansi_umum" class="form-control" rows="10" id="isi2"><?php echo $relevansi_umum; ?></textarea>
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>No Surat Tugas</label>
                      <input type="text" class="form-control" name="no_surat_tugas" value="<?php echo $sumber_dana; ?>">
                    </div>

                    <div class="col-lg-6">
                      <label>Ringkasan Temuan</label>
                      <textarea name="ringkasan_kunjungan" class="form-control" rows="10" id="isi3"><?php echo $ringkasan_kunjungan; ?></textarea>
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>Sumber Dana</label>
                      <input type="text" class="form-control" name="sumber_dana" value="<?php echo $nama_yang_ditugaskan; ?>">
                    </div>

                    <div class="col-lg-6">
                      <label>Simpulan</label>
                      <textarea name="simpulan" class="form-control" rows="10" id="isi4"><?php echo $simpulan; ?></textarea>
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>Nama Yang Ditugaskan</label>
                      <input type="text" class="form-control" name="nama_yang_ditugaskan" value="<?php echo $nama_yang_ditugaskan; ?>">
                    </div>

                  </div>
                </div>

                <br></br>

                <div class="card-footer">
                  <a href="kelola-laporanpd.php" class="btn btn-info nav-icon fas fa-arrow-left"> Kembali</a>
                  <button type="submit" class="btn btn-info nav-icon fas fa-save"> Simpan</button>
                </div>

            </form>

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include "../Komponen_Website/footer.php";
?>