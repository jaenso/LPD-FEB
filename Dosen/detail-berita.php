<?php
session_start();
include "../Komponen_Website/header.php";
include "../Komponen_Website/sidebar.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

if (empty($_SESSION['username']) && empty($_SESSION['PASSWORD'])) {
    echo "<script> window.location = '../login/index.php' </script>";
}
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="small-box bg-info">
                <div class="inner">
                    <h4><b>FAKULTAS EKONOMI DAN BISNIS</b></h4>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Detail Berita Perjalanan Dinas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="kelola-laporanpd.php">Kelola Berita Perjalanan Dinas</a></li>
                        <li class="breadcrumb-item active">Detail Data Berita Perjalanan Dinas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <style>
        .title {
            font-size: 2rem;
            font-weight: 600;
        }

        .date {
            font-size: 1.2rem;
        }

        .image {
            width: 70vh;
            height: 40vh;
        }

        .text {
            font-size: 1.2rem;
        }
    </style>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title"><b>Detail Data Berita Perjalanan Dinas</b></h3>
                        </div>

                        <?php
                        include "../config/koneksi.php";
                        $id_berita = $_GET['id_berita'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$id_berita'");
                        ?>
                        <div class="card-body">
                            <?php
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <h1 class="title"><?php echo $data['judul'] ?></h1>
                                <p class="date">Admin - <?php echo $data['tanggal'] ?></p>
                                <img class="image" src="../berita/<?php echo $data['gambar'] ?>">
                                <p class="text"><?php echo $data['isi'] ?></p>
                            <?php } ?>
                        </div>
                        <div class="card-footer">
                            <a href="kelola-laporanpd.php" class="btn btn-info nav-icon fas fa-arrow-left"><b>Kembali</b></a>
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