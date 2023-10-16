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
                <b><h4>DINAS SOSIAL PROVINSI KALIMANTAN TENGAH</b></h4>
              </div>
            </div>
        <div class="row mb-2">
          <div class="col-sm-6">
            
            <b><h1 class="m-0 text-dark">Tambah Data User</b></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
              <li class="breadcrumb-item active">Tambah Data User</li>
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
                <h3 class="card-title">Tambah Data User</h3>
              </div>
              <form role="form" action="proses-tambah-user.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-6">
                        <label>Nama User</label>
                        <input type="text" class="form-control" name="nama" required="required" autocomplete="off" placeholder="Masukkan Nama User"></textarea>
                      </div>
                      <div class="col-lg-6">
                      <label>Username</label>
                    <input type="text" class="form-control" name="username" required="required" autocomplete="off" placeholder="Masukkan Username"></textarea>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-6">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" required="required" autocomplete="off" placeholder="Masukkan Password"></textarea>
                      </div>
                      <div class="col-lg-6">
                      <label>Level</label>
                  <select class="form-control" name="level" required="required">
                    <option>-- Masukkan Jenis Level ---</option>
                    <option value="admin">Admin</option>
                    <option value="staff">Staff</option>
                    <option value="user">Dosen</option>
                  </select>
                      </div>
                    </div>
                  </div> 
                </div>

                  <div class="card-footer">
                    <button type="submit" class="btn btn-info nav-icon fas fa-save"> Tambah</button>
                    <a href="kelola-user.php" class="btn btn-info nav-icon fas fa-arrow-left"> Kembali</a>
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