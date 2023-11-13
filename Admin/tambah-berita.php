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
                    <h4><b>DINAS SOSIAL PROVINSI KALIMANTAN TENGAH</b></h4>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-bold">Edit Data Berita</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                        <li class="breadcrumb-item active">Edit Data Berita</li>
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
                            <h3 class="card-title">Edit Data Berita</h3>
                        </div>
                        <form role="form" action="proses-tambah-berita.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" class="form-control" name="judul" autocomplete="off" placeholder="Masukkan Judul">
                                </div>
                                <div class="form-group">
                                    <label>Isi</label>
                                    <input type="text" class="form-control" name="isi" autocomplete="off" placeholder="Masukkan Isi Berita">
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" class="form-control" name="gambar" id="gambar" onchange="previewImage();">
                                </div>
                                <div class="form-group">
                                    <label>Preview Gambar</label>
                                    <img id="preview" style="display:none; width: 30vh; height: 25vh;">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info nav-icon fas fa-save"> Simpan</button>
                                <a href="kelola-berita.php" class="btn btn-info nav-icon fas fa-arrow-left"> Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>
<script type="text/javascript">
    function previewImage() {
        var fileInput = document.getElementById('gambar');
        var preview = document.getElementById('preview');

        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
    document.getElementById('gambar').addEventListener('change', previewImage);
</script>
<?php
include "../Komponen_Website/footer.php";
?>