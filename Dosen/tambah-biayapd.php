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
            <h1 class="m-0 text-dark">Tambah Data Surat Pertanggung Jawaban
          </b></h1>
          <p>Form Tambah Data Surat Pertanggung Jawaban.</p>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
            <li class="breadcrumb-item active">Tambah Data Surat Pertanggung Jawaban</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">

            <div class="card-header">
              <h3 class="card-title"><b>Tambah Data Surat Pertanggung Jawaban</h3></b>
            </div>
            <form role="form" action="proses-tambah-biayapd.php" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>Materi Kegiatan</label>
                      <input type="file" accept=".pdf" class="form-control" name="materi_kegiatan" required="required"></textarea>
                      <span class="text-danger"> *Masukkan File Surat (Format yang diterima : .pdf,)</span>
                    </div>

                    <div class="col-lg-6">
                      <label>Penginapan</label>
                      <input type="file" accept=".pdf" class="form-control" name="penginapan" required="required"></textarea>
                      <span class="text-danger"> *Masukkan File Surat (Format yang diterima : .pdf,)</span>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>Surat Tugas</label>
                      <input type="file" accept=".pdf" class="form-control" name="surat_tugas" required="required"></textarea>
                      <span class="text-danger"> *Masukkan File Surat (Format yang diterima : .pdf,)</span>
                    </div>


                    <div class="col-lg-6">
                      <label>Nota Taxi</label>
                      <input type="file" accept=".pdf" class="form-control" name="nota_taxi" required="required"></textarea>
                      <span class="text-danger"> *Masukkan File Surat (Format yang diterima : .pdf,)</span>
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>Surat Perjalanan Dinas</label>
                      <input type="file" accept=".pdf" class="form-control" name="surat_pd" required="required"></textarea>
                      <span class="text-danger"> *Masukkan File Surat (Format yang diterima : .pdf,)</span>
                    </div>

                    <div class="col-lg-6">
                      <label>Uang Harian</label>
                      <input type="file" accept=".pdf" class="form-control" name="uang_harian" required="required"></textarea>
                      <span class="text-danger"> *Masukkan File Surat (Format yang diterima : .pdf,)</span>
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>Tiket Pesawat</label>
                      <input type="file" accept=".pdf" class="form-control" name="tik_pesawat" required="required"></textarea>
                      <span class="text-danger"> *Masukkan File Surat (Format yang diterima : .pdf,)</span>
                    </div>

                    <input type="hidden" class="form-control" name="id_user" value="<?php echo $id_user ?>"></textarea>

                  </div>
                </div>

              </div>

              <div class="card-footer">
                <a href="kelola-biayapd.php" class="btn btn-info nav-icon fas fa-arrow-left"> Kembali</a>
                <button type="submit" class="btn btn-info nav-icon fas fa-save"> Tambah</button>
              </div>
          </div>
          </form>
        </div>
      </div>
    </div>
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<!-- /.content -->

</div>
</div>
<!-- /.content-wrapper -->

<?php
include "../Komponen_Website/footer.php";
?>