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

          <b>
            <h1 class="m-0 text-dark">Kelola Data User
          </b></h1>
          <p>Tempat Mengelola Data User untuk Pengguna <i>Website</i>.</p>
          <p></p>
          <a href="tambah-user.php"><button type="submit" class="btn btn-info fas fa-edit"> Tambah Data User</button></a>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
            <li class="breadcrumb-item active">Kelola User</li>
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
              <h3 class="card-title"><b>Data User</h3></b>
            </div>

            <div class="card-body">
              <?php
              include "../config/koneksi.php";
              $sql = mysqli_query($koneksi, "SELECT * FROM user");
              ?>
              <table id="example1" class="table table-bordered table-stripped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $no = 1;
                  while ($row = mysqli_fetch_array($sql)) {
                  ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama']; ?></td>
                      <td><?php echo $row['username']; ?></td>
                      <td><?php echo $row['password']; ?></td>
                      <td><?php echo $row['level']; ?></td>
                      <td>
                        <a href="edit-user.php?id_user=<?php echo $row['id_user']; ?>" class="btn btn-info nav-icon fas fa-edit" title="Edit"></a>
                        <a href="proses-hapus-user.php?id_user=<?php echo $row['id_user']; ?>" onclick="return confirm('Ingin Hapus Data?')" class="btn btn-danger nav-icon fas fa-trash-alt" title="Hapus"></a>
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
include "../Komponen_Website/footer.php"; ?>