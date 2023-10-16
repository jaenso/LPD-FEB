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

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mt-0 mb-0">
        <div class="col-lg-12 col-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <div class="row">
                  <div class="col-lg-1">
                    <img src="../img/uprlogo.png" width="70">
                  </div>
                  <div class="col-lg-11 mt-3 mb-2">
                    <h4><B>FAKULTAS EKONOMI DAN BISNIS</B></h4>
                    <div class="row ml-0">
                      <h6>Jln. Yos Sudarso Palangka Raya 73111, Kalimantan Tengah - Email : feb.upr@upr.ac.id</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-sm-6">
            <b><h1 class="m-0 text-dark">Beranda</b></h1>
            <p>Halaman Utama <i>Website</i> Pengelolaan Laporan Perjalanan Dinas.</p>
            <a href="profil-instansi.php"><button class="btn btn-info nav-icon fas fa-building"> Profil Instansi</button></a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
              <li class="breadcrumb-item active">Beranda</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><b>Data-Data pada <i>Website</i>.</b></h3>
              </div>
            </div>
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <?php
            include "../config/koneksi.php";
            $sql = mysqli_query($koneksi, "SELECT * FROM user");
            $id_user = mysqli_num_rows($sql);
          ?>
          <div class="col-lg-3 col-6">
            <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                <h3><?php echo $id_user?></h3>

              <p>User</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-user"></i>
              </div>
            <a href="kelola-user.php" class="small-box-footer">Info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php 
    include "../Komponen_Website/footer.php";
  ?>