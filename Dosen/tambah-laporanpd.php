<?php
session_start();
include "../Komponen_Website/header.php";
include "../Komponen_Website/sidebar.php";
include "../config/koneksi.php";
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
            <h1 class="m-0 text-dark">Tambah Data Laporan Perjalanan Dinas</h1>
          </b>
          <p>Form Tambah Data Laporan Perjalanan Dinas.</p>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
            <li class="breadcrumb-item active">Tambah Data Laporan Perjalanan Dinas</li>
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
              <h3 class="card-title"><b>Tambah Data Laporan Perjalanan Dinas</b></h3>
            </div>
            <form role="form" action="proses-tambah-laporanpd.php" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <label>Tanggal Kunjungan</label>
                      <input type="date" class="form-control" name="tgl_kunjungan" autocomplete="off" placeholder="Masukkan Tanggal Kunjungan" required>
                    </div>
                    <div class="col-lg-6">
                      <label>Relevansi IKU FEB UPR (Value)</label>
                      <select class="select2" name="relevansi_iku" style="width: 100%;" required>
                        <option value="">Pilih Relevansi IKU</option>
                        <?php
                        $query = "SELECT * FROM iku_feb";
                        $result = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo '<option value="' . $row['id_iku'] . '">' . $row['jenis'] . '</option>';
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <label>Tanggal Selesai</label>
                      <input type="date" class="form-control" name="tgl_selesai" required autocomplete="off" placeholder="Masukkan Tanggal Selesai">
                    </div>
                    <div class="col-lg-6">
                      <label>Relevansi Akreditasi Lamemba (Value)</label>
                      <input type="text" name="relevansi_akreditasi" class="form-control" autocomplete="off" placeholder="Masukkan Relevansi Akreditasi Lamemba (Value)" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <label>Tempat Tujuan</label>
                      <input type="text" class="form-control" name="tempat_tujuan" required autocomplete="off" placeholder="Masukkan Tempat Tujuan">
                    </div>
                    <div class="col-lg-6">
                      <label>Relevansi Umum (Value)</label>
                      <input type="text" name="relevansi_umum" class="form-control" autocomplete="off" placeholder="Masukkan Relevansi Umum (Value)" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <label>No Surat Tugas</label>
                      <input type="text" class="form-control" name="no_surat_tugas" required autocomplete="off" placeholder="Masukkan No Surat Tugas">
                    </div>
                    <div class="col-lg-6">
                      <label>Ringkasan Temuan Kunjungan</label>
                      <input type="text" name="ringkasan_kunjungan" class="form-control" autocomplete="off" placeholder="Masukkan Ringkasan Temuan Kunjungan" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <label>Sumber Dana</label>
                      <input type="text" class="form-control" name="sumber_dana" required autocomplete="off" placeholder="Masukkan Sumber Dana">
                    </div>
                    <div class="col-lg-6">
                      <label>Simpulan</label>
                      <input type="text" name="simpulan" class="form-control" autocomplete="off" placeholder="Masukkan Simpulan" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <label for="nama_yang_ditugaskan">Nama Yang Ditugaskan</label>
                      <select class="select2" name="nama_yang_ditugaskan[]" style="width: 100%;" multiple>
                        <?php
                        $query = "SELECT * FROM user";
                        $result = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo '<option value="' . $row['nama'] . '">' . $row['nama'] . '</option>';
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <input type="hidden" class="form-control" name="id_user" value="<?php echo $id_user ?>">
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <a href="kelola-laporanpd.php" class="btn btn-info nav-icon fas fa-arrow-left"> Kembali</a>
                <button type="submit" class="btn btn-info nav-icon fas fa-arrow-right"> Selanjutnya</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php
include "../Komponen_Website/footer.php";
?>