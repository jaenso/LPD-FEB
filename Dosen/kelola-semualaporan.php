<?php
session_start();
include "../Komponen_Website/header.php";
include "../Komponen_Website/sidebar.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

if (empty($_SESSION['username']) and empty($_SESSION['PASSWORD'])) {
  echo "<script> window.location = '../login/index.php' </script>";
};
?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="small-box bg-info">
        <div class="inner">
          <b>
            <h4>FAKULTAS EKONOMI DAN BISNIS
          </b></h4>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-sm-6">
          <b>
            <h1 class="m-0 text-dark">Laporan Perjalanan Dinas
          </b></h1>
          <p>Tempat Data Surat yang telah di <b>Input</b>.</p>
          <a href="tambah-semualaporan.php" class="btn btn-info nav-icon fas fa-edit">Tambah Data Semua Laporan Perjalanan Dinas</a>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
            <li class="breadcrumb-item active">Data Surat</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title"><b>Data Laporan Perjalanan Dinas</h3></b>
            </div>
            <div class="card-body">
              <?php
              include "../config/koneksi.php";
              $sql = mysqli_query($koneksi, "SELECT * 
              FROM biaya AS bi 
              JOIN semua_laporan AS sl ON bi.id_biaya = sl.id_biaya
              JOIN laporan AS lp ON lp.id_laporan = sl.id_laporan;");
              ?>
              <table id="example1" class="table table-bordered table-stripped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>No Surat Tugas</th>
                    <th>Tempat Tujuan</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Tanggal Selesai</th>
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
                      <td><?php echo $row['no_surat_tugas']; ?></td>
                      <td><?php echo $row['tempat_tujuan']; ?></td>
                      <td><?php echo $row['tgl_kunjungan']; ?></td>
                      <td><b><?php echo $row['tgl_selesai']; ?></b></td>
                      <td>
                        <a href="../MergePDF/setasign/mergeSemuaLaporanPD.php?id_semua_laporan=<?php echo $row['id_semua_laporan']; ?>" class="btn btn-info nav-icon fas fa-print" title="Detail"></a>
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
</div>

<?php
include "../Komponen_Website/footer.php";
?>