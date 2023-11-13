<?php
session_start();
include "../Komponen_Website/header.php";
include "../Komponen_Website/sidebar.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

if (empty($_SESSION['username']) && empty($_SESSION['PASSWORD'])) {
  echo "<script>window.location = '../login/index.php'</script>";
}
?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mt-0 mb-0">
        <div class="col-lg-12 col-12">
          <div class="small-box bg-info">
            <div class="inner">
              <div class="row">
                <div class="col-lg-1">
                  <img src="../img/uprlogo.png" width="75">
                </div>
                <div class="col-lg-11 mt-3 mb-2">
                  <h4><B>FAKULTAS EKONOMI DAN BISNIS</B></h4>
                  <div class="row ml-0">
                    <h6>Jln. Yos Sudarso Palangka Raya 73111, Kalimantan Tengah - Email: feb.upr@upr.ac.id</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-sm-6">
          <b>
            <h1 class="m-0 text-dark">Beranda
          </b></h1>
          <p>Halaman Utama <i>Website</i> Pengelolaan Surat.</p>
          <a href="profil-instansi.php"><button class="btn btn-info nav-icon fas fa-building"> Profil Instansi</button></a>
          <a href="grafik-iku.php"><button class="btn btn-info nav-icon fas fa-chart-bar"> Grafik IKU</button></a>
          <a href="grafik-kota.php"><button class="btn btn-info nav-icon fas fa-city"> Grafik Kota Kunjungan</button></a>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
            <li class="breadcrumb-item active">Beranda</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title"><b>Data-Data pada <i>Website</i>.</b></h3>
        </div>
      </div>
      <div class="row">
        <?php
        include "../config/koneksi.php";
        $sql = mysqli_query($koneksi, "SELECT * FROM laporan WHERE id_user = '$id_user'");
        $id_laporanpd = mysqli_num_rows($sql);
        ?>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-primary">
            <div class="inner">
              <h3><?php echo $id_laporanpd ?></h3>
              <p>Laporan Perjalanan Dinas</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-envelope"></i>
            </div>
            <a href="kelola-laporanpd.php" class="small-box-footer">Info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <?php
        include "../config/koneksi.php";
        $sql = mysqli_query($koneksi, "SELECT * FROM biaya WHERE id_user = '$id_user'");
        $id_biayapd = mysqli_num_rows($sql);
        ?>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $id_biayapd ?></h3>
              <p>Surat Pertanggung Jawaban</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-envelope-open"></i>
            </div>
            <a href="kelola-biayapd.php" class="small-box-footer">Info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <style>
    .swiper-slide .card {
      width: 37vh;
      height: auto;
      border-radius: 10px;
      border: none;
    }

    .swiper-slide .card img {
      width: 100%;
      height: 25vh;
      object-fit: cover;
      border-radius: 10px;
    }

    .swiper-slide .card-title {
      color: black;
      font-size: 1.5rem;
      font-weight: 500;
      margin-bottom: 10px;
    }

    .swiper-slide .card-title:hover {
      color: blue;
      cursor: pointer;
    }

    .swiper-slide .card-text {
      font-size: 1rem;
    }
  </style>
  <section class="content">
    <div class="container-fluid">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title"><b>Data-Data pada <i>Website</i>.</b></h3>
        </div>
        <div class="card-body">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <?php
              $sql = mysqli_query($koneksi, "SELECT * FROM berita");
              while ($row = mysqli_fetch_array($sql)) {
              ?>
                <div class="swiper-slide">
                  <div class="card">
                    <img src="../berita/<?php echo $row['gambar'] ?>" class="card-img-top">
                    <div class="card-body">
                      <a class="card-title" href="detail-berita.php?id_berita=<?php echo $row['id_berita']; ?>""><?php echo $row['judul'] ?></a>
                      <p class=" card-text"><?php echo $row['isi'] ?></p>
                        <p class="card-text"><?php echo $row['tanggal'] ?></p>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php
include "../Komponen_Website/footer.php";
?>