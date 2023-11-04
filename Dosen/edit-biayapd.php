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
            <h1 class="m-0 text-dark">Edit Data Surat Pertanggung Jawaban
          </b></h1>
          <p>Form Edit Data Surat Pertanggung Jawaban.</p>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
            <li class="breadcrumb-item active">Kelola Surat Pertanggung Jawaban</li>
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
              <h3 class="card-title"><b>Edit Data Surat Pertanggung Jawaban</h3></b>
            </div>
            <?php
            include "../config/koneksi.php";
            //deklarasi edit
            $id_biaya       = $_GET['id_biaya'];
            $sql_edit       = mysqli_query($koneksi, "SELECT *FROM biaya WHERE id_biaya='$id_biaya'");
            $row_edit       = mysqli_fetch_array($sql_edit);
            $materi_kegiatan    = $row_edit['materi_kegiatan'];
            $surat_tugas    = $row_edit['surat_tugas'];
            $surat_pd       = $row_edit['surat_pd'];
            $tik_pesawat    = $row_edit['tik_pesawat'];
            $penginapan     = $row_edit['penginapan'];
            $nota_taxi      = $row_edit['nota_taxi'];
            $uang_harian    = $row_edit['uang_harian'];
            ?>

            <form role="form" action="proses-edit-biayapd.php" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <input type="hidden" class="form-control" name="id_biaya" value="<?php echo $id_biaya; ?>">
                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>Materi Kegiatan</label>
                      <input type="file" accept=".pdf" name="materi_kegiatan" class="form-control" value="<?php echo $materi_kegiatan; ?>" />
                      <span class="text-danger"> *Masukkan File Surat Baru (Format yang diterima : .pdf)</span>
                    </div>

                    <div class="col-lg-6">
                      <label>Penginapan</label>
                      <input type="file" accept=".pdf" name="penginapan" class="form-control" value="<?php echo $penginapan; ?>" />
                      <span class="text-danger"> *Masukkan File Surat Baru (Format yang diterima : .pdf)</span>
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>Surat Tugas</label>
                      <input type="file" accept=".pdf" name="surat_tugas" class="form-control" value="<?php echo $surat_tugas; ?>" />
                      <span class="text-danger"> *Masukkan File Surat Baru (Format yang diterima : .pdf)</span>
                    </div>

                    <div class="col-lg-6">
                      <label>Nota Taxi</label>
                      <input type="file" accept=".pdf" name="nota_taxi" class="form-control" value="<?php echo $nota_taxi; ?>" />
                      <span class="text-danger"> *Masukkan File Surat Baru (Format yang diterima : .pdf)</span>
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <label>Surat Perjalanan Dinas</label>
                      <input type="file" accept=".pdf" name="surat_pd" class="form-control" value="<?php echo $surat_pd; ?>" />
                      <span class="text-danger"> *Masukkan File Surat Baru (Format yang diterima : .pdf)</span>
                    </div>

                    <div class="col-lg-6">
                      <label>Uang Harian</label>
                      <input type="file" accept=".pdf" name="uang_harian" class="form-control" value="<?php echo $uang_harian; ?>" />
                      <span class="text-danger"> *Masukkan File Surat Baru (Format yang diterima : .pdf)</span>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <label>Tiket Pesawat</label>
                      <input type="file" accept=".pdf" name="tik_pesawat" class="form-control" value="<?php echo $tik_pesawat; ?>" />
                      <span class="text-danger"> *Masukkan File Surat Baru (Format yang diterima : .pdf)</span>
                    </div>
                  </div>
                </div>

                <br></br>

                <div class="card-footer">
                  <a href="kelola-biayapd.php" class="btn btn-info nav-icon fas fa-arrow-left"> Kembali</a>
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