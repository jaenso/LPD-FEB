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
            
            <b><h1 class="m-0 text-dark">Laporan Perjalanan Dinas</b></h1>
            <p>Tempat Data Surat yang telah di <b>Input</b>.</p>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
              <li class="breadcrumb-item active">Data Surat</li>
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
                <h3 class="card-title"><b>Data Laporan Perjalanan Dinas</h3></b>
              </div>

              <div class="card-body">
                <?php
                    include "../config/koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT * FROM semua_laporan a JOIN laporan b ON a.id_semua_laporan = b.semua_laporan
                    WHERE semua_laporan = 'Telah Melaksanakan Perjalanan Dinas'");
                ?>
                <table id="example1" class="table table-bordered table-stripped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No Surat Tugas</th>
                      <th>Tempat Tujuan</th>
                      <th>Tanggal Kunjungan</th>
                      <th>Tempat Tujuan</th>                      
                      <th>Tanggal Selesai</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                  <?php
                    $no = 1;
                    while($row = mysqli_fetch_array($sql)) {
                  ?>
                      <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo $row['no_surat_tuhas']; ?></td>
                        <td><?php echo $row['tempat_tujuan']; ?></td>
                        <td><?php echo $row['tanggal_kunjungan']; ?></td>
                        <td><b><?php echo $row['tanggal_selesai']; ?></b></td>
                        <td>
                          <a href="../cetak/cetak.php?id_semua_laporan=<?php echo $row['id_semua_laporan']; ?>" class="btn btn-warning nav-icon fas fa-print" title="Cetak Data Laporan Perjalanan Dinas"></a>
                        </td>
                      </tr>
                    <?php } ?>
                    
                  </tbody>
                  </table>

              </div>
            </div>
          </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
  </div>
</div>
  <!-- /.content-wrapper -->

<?php 
  include "../Komponen_Website/footer.php";
?>