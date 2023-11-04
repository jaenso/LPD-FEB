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
                      <select class="select2" name="relevansi_iku" style="width: 100%;" required>
                        <option value="">Pilih Relevansi IKU</option>
                        <?php
                        $query = "SELECT * FROM iku_feb";
                        $result = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                          $selected = ($row['id_iku'] == $relevansi_iku) ? 'selected' : '';
                          echo '<option value="' . $row['id_iku'] . '" ' . $selected . '>' . $row['jenis'] . '</option>';
                        }
                        ?>
                      </select>
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>Tanggal Selesai</label>
                      <input type="date" class="form-control" name="tgl_selesai" value="<?php echo $tgl_selesai; ?>">
                    </div>

                    <div class="col-lg-6">
                      <label>Relevansi Akreditasi Lamemba (Value)</label>
                      <input type="text" name="relevansi_akreditasi" class="form-control" value="<?php echo $relevansi_akreditasi; ?>">
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>Tempat Tujuan</label>
                      <input type="text" class="form-control" name="tempat_tujuan" value="<?php echo $tempat_tujuan; ?>">
                    </div>

                    <div class="col-lg-6">
                      <label>Relevansi Umum (Value)</label>
                      <input type="text" name="relevansi_umum" class="form-control" value="<?php echo $relevansi_umum; ?>">
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>No Surat Tugas</label>
                      <input type="text" class="form-control" name="no_surat_tugas" value="<?php echo $no_surat_tugas; ?>">
                    </div>

                    <div class="col-lg-6">
                      <label>Ringkasan Temuan</label>
                      <input type="text" name="ringkasan_kunjungan" class="form-control" value="<?php echo $ringkasan_kunjungan; ?>">
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>Sumber Dana</label>
                      <input type="text" class="form-control" name="sumber_dana" value="<?php echo $sumber_dana; ?>">
                    </div>

                    <div class="col-lg-6">
                      <label>Simpulan</label>
                      <input type="text" name="simpulan" class="form-control" value="<?php echo $simpulan; ?>">
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>Nama Yang Ditugaskan</label>
                      <select class="select2" name="nama_yang_ditugaskan[]" style="width: 100%;" multiple>
                        <?php
                        $query = "SELECT * FROM user";
                        $result = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo '<option value="' . $row['nama'] . '">' . $row['nama'] . '</option>';
                        }
                        ?>
                      </select>
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