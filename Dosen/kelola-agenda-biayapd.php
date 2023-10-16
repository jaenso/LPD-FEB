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
            
            <b><h1 class="m-0 text-dark">Buku Agenda Biaya Perjalanan Dinas</b></h1>
            <p>Pencarian Agenda Biaya Perjalanan Dinas berdasarkan tanggal.</p>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
              <li class="breadcrumb-item active">Agenda Biaya Perjalanan</li>
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
                <h3 class="card-title"><b>Pencarian Agenda Biaya Perjalanan</b></h3>
              </div>
                <div class="card-body">
                  <div class="form-group">
                  <form role="form" action="proses-agenda-biayapd.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <input type="hidden" value="<?php echo $id_suratmasuk ?>">
                      <div class="form-group">
                        <label> Dari Tanggal</label>
                        <input type="date" name="tanggal_mulai" class="form-control"> 
                      </div>
                      <p></p>
                    <div class="form-group">
                        <label> Sampai Tanggal</label>
                        <input type="date" name="tanggal_selesai" class="form-control">
                      
                      <div class="card-footer">
                      <button type="submit" name="filter_tanggal" class="btn btn-info nav-icon fas fa-search" value="Cetak"> Cari Agenda</button>
                      </div> 

                    </div>
                </form>
                    </div>  
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
  include "../Komponen_Website/footer.php";
?>