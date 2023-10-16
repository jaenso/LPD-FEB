<?php
  session_start();
  include "../Komponen_Website/header.php";
  include "../Komponen_Website/sidebar.php";
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

  //jika tidak ada logn sebelumnya maka diarahkan ke login/php
  if(empty($_SESSION['username']) AND empty($_SESSION['PASSWORD']) ){
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
                <b><h4>FAKULTAS EKONOMI DAN BISNIS</b></h4>
              </div>
            </div>
        <div class="row mb-2">
          <div class="col-sm-6">
            <b><h1 class="m-0 text-dark">Tambah Data Laporan Perjalanan Dinas</b></h1>
            <p>Form Tambah Data Laporan Perjalanan Dinas.</p>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
              <li class="breadcrumb-item active">Tambah Data Laporan Perjalanan Dinas</li>
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
                <h3 class="card-title"><b>Tambah Data Laporan Perjalanan Dinas</h3></b>
              </div>
              <form role="form" action="proses-tambah-laporanpd.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
       
                  <div class="form-group">
                    <div class="row">

                      <div class="col-lg-6">
                        <label>Tanggal Kunjungan</label>
                        <input type="date" class="form-control" name="tgl_kunjungan" required="required" autocomplete="off" placeholder="Masukkan Tanggal Kunjungan"></textarea>
                      </div>

                      <div class="col-lg-6">
                        <label>Relevansi IKU FEB UPR (Value)</label>
                        <input type="text" class="form-control" name="relevansi_iku" required="required" autocomplete="off" placeholder="Masukkan Relevasi IKU FEB UPR (Value)"></textarea>
                      </div>
                      
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="row">

                      <div class="col-lg-6">
                        <label>Tempat Tujuan</label>
                        <input type="text" class="form-control" name="tempat_tujuan" required="required" autocomplete="off" placeholder="Masukkan Tempat Tujuan"></textarea>
                      </div>

                      <div class="col-lg-6">
                        <label>Relevansi Akreditasi</label>
                        <input type="text" class="form-control" name="relevansi_akreditasi" required="required" autocomplete="off" placeholder="Masukkan Relevasi Akreditasi"></textarea>
                      </div>

                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="row">

                      <div class="col-lg-6">
                        <label>No Surat Tugas</label>
                        <input type="text" class="form-control" name="no_surat_tugas" required="required" autocomplete="off" placeholder="Masukkan No Surat Tugas"></textarea>
                      </div>

                      <div class="col-lg-6">
                        <label>Relevansi Umum (Value)</label>
                        <input type="text" class="form-control" name="relevansi_umum" required="required" autocomplete="off" placeholder="elevasi Umum (Value)"></textarea>
                      </div>

                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">

                      <div class="col-lg-6">
                        <label>Sumber Dana</label>
                        <input type="text" class="form-control" name="sumber_dana" required="required" autocomplete="off" placeholder="Masukkan Sumber Dana"></textarea>
                      </div>

                      <div class="col-lg-6">
                        <label>Ringkasan Temuan Kunjungan</label>
                        <input type="text" class="form-control" name="ringkasan_kunjungan" required="required" autocomplete="off" placeholder="Masukkan Ringakasan Temuan"></textarea>
                      </div>

                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">

                      <div class="col-lg-6">
                        <label>Nama Yang Ditugaskan</label>
                        <input type="text" class="form-control" name="nama_yang_ditugaskan" required="required" autocomplete="off" placeholder="Masukkan Nama Yang Ditugaskan"></textarea>
                      </div>

                      <div class="col-lg-6">
                        <label>Simpulan</label>
                        <input type="text" class="form-control" name="simpulan" required="required" autocomplete="off" placeholder="Masukkan Simpulan"></textarea>
                      </div>

                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">

                      <input type="hidden" class="form-control" name="id_user" value="<?php echo $id_user ?>"></textarea>

                    </div>
                  </div>

                 </div>

                  <div class="card-footer">
                    <button type="submit" class="btn btn-info nav-icon fas fa-save"> Tambah</button>
                    <a href="kelola-laporanpd.php" class="btn btn-info nav-icon fas fa-arrow-left"> Kembali</a>
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