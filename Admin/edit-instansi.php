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
            <h4>DINAS SOSIAL PROVINSI KALIMANTAN TENGAH
          </b></h4>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-bold">Edit Data Profil</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
            <li class="breadcrumb-item active">Edit Data Profil</li>
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
              <h3 class="card-title">Edit Data User</h3>
            </div>
            <?php
            include "../config/koneksi.php";
            $id_instansi        = $_GET['id_instansi'];
            $sql_edit       = mysqli_query($koneksi, "SELECT *FROM instansi WHERE id_instansi='$id_instansi'");
            $row_edit       = mysqli_fetch_array($sql_edit);
            $nama           = $row_edit['nama'];
            $visi           = $row_edit['visi'];
            $misi           = $row_edit['misi'];
            $motto           = $row_edit['motto'];
            $alamat           = $row_edit['alamat'];
            $peta           = $row_edit['peta'];
            ?>

            <form role="form" action="proses-edit-instansi.php" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <input type="hidden" class="form-control" name="id_instansi" value="<?php echo $id_instansi; ?>">
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <label>Nama Instansi</label>
                      <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                    </div>
                    <div class="col-lg-6">
                      <label>Visi</label>
                      <textarea name="visi" class="form-control" rows="10" id="isi1"><?php echo $visi; ?></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <label>Peta</label>
                      <input type="text" class="form-control" name="peta" value="<?php echo $peta; ?>">
                    </div>
                    <div class="col-lg-6">
                      <label>Misi</label>
                      <textarea name="misi" class="form-control" rows="10" id="isi2"><?php echo $misi; ?></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <label>Alamat</label>
                      <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>">
                    </div>
                    <div class="col-lg-6">
                      <label>Motto</label>
                      <textarea name="motto" class="form-control" rows="10" id="isi3"><?php echo $motto; ?></textarea>
                    </div>
                  </div>
                </div>

              </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-info nav-icon fas fa-save"> Simpan</button>
                <a href="kelola-user.php" class="btn btn-info nav-icon fas fa-arrow-left"> Kembali</a>
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
include "../Komponen_Website/footer.php"; ?>