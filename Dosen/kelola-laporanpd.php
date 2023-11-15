<?php
session_start();
include "../Komponen_Website/header.php";
include "../Komponen_Website/sidebar.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

if (empty($_SESSION['username']) and empty($_SESSION['PASSWORD'])) {
  echo "<script> window.location = '../login/index.php' </script>";
}
?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="small-box bg-info">
        <div class="inner">
          <b>
            <h4>FAKULTAS EKONOMI DAN BISNIS</h4>
          </b>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-sm-6">
          <b>
            <h1 class="m-0 text-dark">Kelola Laporan PD</h1>
          </b>
          <p>Tempat Mengelola Laporan Perjalanan Dinas untuk Pengguna <i>Website</i>.</p>
          <p></p>
          <a href="tambah-laporanpd.php"><button type="submit" class="btn btn-info nav-icon fas fa-edit"> Tambah Data Laporan Perjalanan Dinas Dan Surat Pertanggung Jawaban</button></a>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
            <li class="breadcrumb-item active">Kelola Laporan Perjalanan Dinas</li>
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
              <h3 class="card-title"><b>Data Laporan Perjalanan Dinas</b></h3>
            </div>
            <div class="card-body">
              <?php
              include "../config/koneksi.php";
              $id_user = $_SESSION['id_user'];
              $sql = mysqli_query($koneksi, "SELECT * FROM laporan JOIN kota ON laporan.id_kota = kota.id WHERE id_user = '$id_user' GROUP BY id_laporan DESC");
              ?>
              <table id="example1" class="table table-bordered table-stripped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Tanggal Selesai</th>
                    <th>Tempat Tujuan</th>
                    <th>No Surat Tugas</th>
                    <th>Sumber Dana</th>
                    <th>Nama Yang Ditugaskan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  while ($row = mysqli_fetch_array($sql)) {
                    $tgl_kunjungan = date('j F Y', strtotime($row['tgl_kunjungan']));
                    $tgl_selesai = date('j F Y', strtotime($row['tgl_selesai']));
                  ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $tgl_kunjungan; ?></td>
                      <td><?php echo $tgl_selesai; ?></td>
                      <td><?= $row['tempat_tujuan']; ?>, <?= $row['kota']; ?></td>
                      <td><?php echo $row['no_surat_tugas']; ?></td>
                      <td><?php echo $row['sumber_dana']; ?></td>
                      <td><?php echo $row['nama_yang_ditugaskan']; ?></td>
                      <td>
                        <a href="edit-laporanpd.php?id_laporan=<?php echo $row['id_laporan']; ?>" class="btn btn-primary nav-icon fas fa-edit" title="Edit"></a>
                        <a href="proses-hapus-laporanpd.php?id_laporan=<?php echo $row['id_laporan']; ?>" onclick="return confirm('Ingin Hapus Data?')" class="btn btn-danger nav-icon fas fa-trash-alt" title="Hapus"></a>
                        <a href="detail-laporanpd.php?id_laporan=<?php echo $row['id_laporan']; ?>" class="btn btn-info nav-icon fas fa-info-circle" title="Detail"></a>
                        <a href="../Cetak/cetak-laporanpd.php?id_laporan=<?php echo $row['id_laporan']; ?>" class="btn btn-warning nav-icon fas fa-print" title="Cetak"></a>
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