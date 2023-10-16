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
            <h4>FAKULTAS EKONOMI DAN BISNIS
          </b></h4>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-sm-6">
          <b>
            <h1 class="m-0 text-dark">Tambah Data Laporan Perjalanan Dinas
          </b></h1>
          <p>Form Tambah Data Laporan Perjalanan Dinas.</p>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
            <li class="breadcrumb-item active">Tambah Data Laporan Perjalanan Dinas</li>
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
              <h3 class="card-title"><b>Tambah Data Laporan Perjalanan Dinas</h3></b>
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
                      <select class="form-control" name="relevansi_iku" required>
                        <option value="">Pilih Relevansi IKU</option>
                        <option value="IKU 1: Lulusan mendapat pekerjaan yang layak">1) Lulusan mendapat pekerjaan yang layak</option>
                        <option value="IKU 2: Mahasiswa mendapat pengalaman di luar kampus">2) Mahasiswa mendapat pengalaman di luar kampus</option>
                        <option value="IKU 3: Dosen berkegiatan di luar kampus">3) Dosen berkegiatan di luar kampus</option>
                        <option value="IKU 4: Praktisi mengajar di dalam kampus">4) Praktisi mengajar di dalam kampus</option>
                        <option value="IKU 5: Hasil kerja dosen digunakan oleh masyarakat">5) Hasil kerja dosen digunakan oleh masyarakat</option>
                        <option value="IKU 6: Program studi bekerjasama dengan mitra kelas dunia">6) Program studi bekerjasama dengan mitra kelas dunia</option>
                        <option value="IKU 7: Kelas yang kolaboratif dan partisipatif">7) Kelas yang kolaboratif dan partisipatif</option>
                        <option value="IKU 8: Program studi berstandar internasional">8) Program studi berstandar internasional</option>
                        <!-- Tambahkan lebih banyak pilihan sesuai kebutuhan -->
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
                      <textarea name="relevansi_akreditasi" id="isi1" class="form-control" rows="10"></textarea>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>Tempat Tujuan</label>
                      <input type="text" class="form-control" name="tempat_tujuan" required autocomplete="off" placeholder="Masukkan No Surat Tugas">
                    </div>

                    <div class="col-lg-6">
                      <label>Relevansi Umum (Value)</label>
                      <textarea name="relevansi_umums" id="isi2" class="form-control" rows="10"></textarea>
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>No Surat Tugas</label>
                      <input type="text" class="form-control" name="no_surat_tugas" required autocomplete="off" placeholder="Masukkan Sumber Dana">
                    </div>

                    <div class="col-lg-6">
                      <label>Ringkasan Temuan Kunjungan</label>
                      <textarea name="ringkasan_kunjungan" id="isi3" class="form-control" rows="10"></textarea>
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
                      <textarea name="simpulan" id="isi4" class="form-control" rows="10" required></textarea>
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <div class="row">

                    <div class="col-lg-6">
                      <label>Nama Yang Ditugaskan</label>
                      <input type="text" class="form-control" name="nama_yang_ditugaskan" required autocomplete="off" placeholder="Masukkan Nama Yang Ditugaskan">
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