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
            <h4>PROFIL INSTANSI FAKULTAS EKONOMI DAN BISNIS
          </b></h4>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-sm-6">
          <b>
            <h1 class="m-0 text-dark">Profil Instansi
          </b></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
            <li class="breadcrumb-item active">Profil Instansi</li>
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
              <h3 class="card-title"><b>Profil Fakultas Ekonomi Dan Bisnis</h3></b>
            </div>

            <div class="card-body">
              <table id="example2" class="table table-bordered table-stripped">
                <tbody>
                  <tr>
                    <?php
                    include "../config/koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT * FROM instansi");
                    while ($row = mysqli_fetch_array($sql)) {
                    ?>
                      <td width="200px"><b>Aksi</b></td>
                      <td><a href="edit-instansi.php?id_instansi=<?php echo $row['id_instansi']; ?>" class="btn btn-info nav-icon fas fa-edit" title="Edit"></a></td>
                  </tr>
                  <tr>
                    <td width="200px"><b>Nama Instansi</b></td>
                    <td><?php echo $row['nama']; ?></td>
                  </tr>
                  <tr>
                    <td><b>Visi</b></td>
                    <td>
                      <?php echo $row['visi']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td><b>Misi</b></td>
                    <td>
                      <?php echo $row['misi']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td><b>Motto</b></td>
                    <td>
                      <?php echo $row['motto']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td><b>Gambar Fakultas Ekonomi Dan Bisnis</b></td>
                    <td><img src=../img/feb.jpg width='800px'></img></td>
                  </tr>
                  <tr>
                    <td><b>Alamat & Google Maps</b></td>
                    <td>
                      <?php echo $row['alamat']; ?>
                      <br></br>
                      <iframe src="<?php echo $row['peta']; ?>" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->

</div>
</div>
<!-- /.content-wrapper -->

<?php
include "../Komponen_Website/footer.php";
?>