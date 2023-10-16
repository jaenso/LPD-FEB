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
            <h1 class="m-0 text-bold">Ubah Data Login</h1>
            <p>Tempat mengubah data akun.</p>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
              <li class="breadcrumb-item active">Ubah Data Login</li>
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
                <h3 class="card-title"><b>Ubah Data Login</b></h3>
              </div>
              <?php
              include "../config/koneksi.php";
              //deklarasi edit
              $id_user        = $_GET['id_user'];
              $sql_edit       = mysqli_query($koneksi, "SELECT *FROM user WHERE id_user='$id_user'");
              $row_edit       = mysqli_fetch_array($sql_edit);
              $nama           = $row_edit['nama'];
              $username       = $row_edit['username'];
              $password       = $row_edit['password'];
              $level          = $row_edit['level'];
              ?>

              <form role="form" action="proses-ubah-password.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                <input type="hidden" class="form-control" name="id_user" value="<?php echo $id_user; ?>">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-6">
                        <label>Nama User</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                      </div>

                      <div class="col-lg-6">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" value="<?php echo $password; ?>">
                      </div>

                      <div class="col-lg-6">
                        <input type="hidden" class="form-control" name="level" value="<?php echo $level; ?>">
                      </div>
                    </div>
                  </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-info nav-icon fas fa-save"> Simpan</button>
                    <a href="index.php" class="btn btn-info nav-icon fas fa-arrow-left"> Kembali</a>
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