<?php
  session_start();
  include "../Komponen_Website/header.php";
  include "../Komponen_Website/sidebar.php";
  $mulai   = $_POST['tgl_kunjungan'];
  $selesai = $_POST['tgl_selesai'];
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
            <h1 class="m-0 text-dark"><b>Agenda Laporan Perjalanan Dinas</b></h1>
            <p>Agenda Laporan Perjalanan Dinas dari tanggal <b><?php echo $mulai?></b> sampai dengan tanggal <b><?php echo $selesai?></b>.</p>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
              <li class="breadcrumb-item active">Agenda Laporan Perjalanan Dinas</li></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"></i><b>Data Surat Masuk</b></h3>
              </div> 
                <?php
                  include "../config/koneksi.php";
                  if((isset($_POST['filter_tanggal']))){ 
                    $sql = mysqli_query($koneksi, "SELECT * FROM laporan
                     where tgl_kunjungan BETWEEN '$mulai' and '$selesai'");
                  }else{
                     $sql = mysqli_query($koneksi, "SELECT * FROM biaya
                     where tgl_selesai BETWEEN '$mulai' and '$selesai'");
                  }
                ?>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-stripped">
                
              <thead>
                <tr>
                  <th>Tanggal Kunjungan 
                  </th>
                  <th>
                    Tempat Tujuan
                  </th>
                  <th>
                    No Surat Tugas 
                  </th>
                  <th>
                    Sumber Dana
                  </th>
                  <th>
                    Nama Yang Ditugaskan
                  </th>
                  <th>
                    Aksi
                  </th>
                </tr>
              </thead>

              <tbody>
                <?php
                while ($data = mysqli_fetch_array($sql)){
                ?>
                  <tr>
                    <td>
                      <?php echo $data['tgl_kunjungan']; ?>
                    </td>
                    <td>
                      <?php echo $data['tempat_tujuan'] ?> 
                    </td>
                    <td>
                      <?php echo $data['no_surat_tugas'] ?> 
                    </td>
                    <td>
                      <?php echo $data['sumber_dana'] ?> 
                    </td>
                    <td>
                      <?php echo $data['nama_yang_ditugaskan'] ?> 
                    </td>
                    <td>
                        <a href="edit-laporanpd.php?id_laporan=<?php echo $data['id_laporan']; ?>" class="btn btn-info nav-icon fas fa-edit" title="Edit"></a>
                        <a href="proses-hapus-laporanpd.php?id_laporan=<?php echo $data['id_laporan']; ?>" onclick="return confirm('Ingin Hapus Data?')" class="btn btn-danger nav-icon fas fa-trash-alt" title="Hapus"></a>
                        <a href="detail-laporanpd.php?id_laporan=<?php echo $data['id_laporan']; ?>" class="btn btn-info nav-icon fas fa-info-circle" title="Detail"></a>
                    </td>
                  </tr>
                <?php }
                ?>
              </tbody>
                  <tbody>
                    
                  </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- /.content-wrapper -->

<?php
  include "../Komponen_Website/footer.php";
?>