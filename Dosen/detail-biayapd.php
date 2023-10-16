<?php
  session_start();
  include "../Komponen_Website/header.php";
  include "../Komponen_Website/sidebar.php";
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

  //jika tidak ada logn sebelumnya maka diarahkan ke login/php
  if(empty($_SESSION['username']) AND empty($_SESSION['PASSWORD']) ){
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
                <b><h4>FAKULTAS EKONOMI DAN BISNIS</b></h4>
              </div>
            </div>
        <div class="row mb-2">
          <div class="col-sm-6">
            
            <b><h1 class="m-0 text-dark">Detail Data Surat Pertanggung Jawaban</b></h1>
            <p>Detail dari biaya yang dipilih.</p>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="kelola-laporanpd.php">Kelola Surat Pertanggung Jawaban</a></li>
              <li class="breadcrumb-item active">Detail Data Surat Pertanggung Jawaban</li>
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
                <h3 class="card-title"><b>Detail Data SPJ</h3></b>
              </div>

              <?php
                  include "../config/koneksi.php";
                  $id_biaya=$_GET['id_biaya'];
                  $sql = mysqli_query($koneksi, "SELECT * FROM biaya WHERE id_biaya='$id_biaya'");
                ?>
              <div class="card-body">
              <?php
                while ($data = mysqli_fetch_array($sql)){
                ?>
                <table id="example2" class="table table-bordered table-stripped">
                    <tbody>
                    <tr>
                        <td><b>Surat Tugas</b></td>
                        <td>
                        <?php
                        if ($data['surat_tugas'] == '') {
                          echo '<span class="badge badge-info" style="font-family: Raleway-SemiBold;  
                        font-size: 15px;                   
                        letter-spacing: 1px;
                        border-radius: 20px;">Tidak ada file yang dimasukkan!</span>';
                        }
                         else {?>
                          <embed src="../dokumen/<?php echo $data['surat_tugas']; ?>"width="700" height="400"></embed>
                        <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Surat Perjalanan Dinas</b></td>
                        <td>
                        <?php
                        if ($data['surat_pd'] == '') {
                          echo '<span class="badge badge-info" style="font-family: Raleway-SemiBold;  
                        font-size: 15px;                   
                        letter-spacing: 1px;
                        border-radius: 20px;">Tidak ada file yang dimasukkan!</span>';
                        }
                         else {?>
                          <embed src="../dokumen/<?php echo $data['surat_pd']; ?>"width="700" height="400"></embed>
                        <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Tiket Pesawat</b></td>
                        <td>
                        <?php
                        if ($data['tik_pesawat'] == '') {
                          echo '<span class="badge badge-info" style="font-family: Raleway-SemiBold;  
                        font-size: 15px;                   
                        letter-spacing: 1px;
                        border-radius: 20px;">Tidak ada file yang dimasukkan!</span>';
                        }
                         else {?>
                          <embed src="../dokumen/<?php echo $data['tik_pesawat']; ?>"width="700" height="400"></embed>
                        <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Penginapan</b></td>
                        <td>
                        <?php
                        if ($data['penginapan'] == '') {
                          echo '<span class="badge badge-info" style="font-family: Raleway-SemiBold;  
                        font-size: 15px;                   
                        letter-spacing: 1px;
                        border-radius: 20px;">Tidak ada file yang dimasukkan!</span>';
                        }
                         else {?>
                          <embed src="../dokumen/<?php echo $data['penginapan']; ?>"width="700" height="400"></embed>
                        <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Nota Taxi</b></td>
                        <td>
                        <?php
                        if ($data['nota_taxi'] == '') {
                          echo '<span class="badge badge-info" style="font-family: Raleway-SemiBold;  
                        font-size: 15px;                   
                        letter-spacing: 1px;
                        border-radius: 20px;">Tidak ada file yang dimasukkan!</span>';
                        }
                         else {?>
                          <embed src="../dokumen/<?php echo $data['nota_taxi']; ?>"width="700" height="400"></embed>
                        <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Uang Harian</b></td>
                        <td>
                        <?php
                        if ($data['uang_harian'] == '') {
                          echo '<span class="badge badge-info" style="font-family: Raleway-SemiBold;  
                        font-size: 15px;                   
                        letter-spacing: 1px;
                        border-radius: 20px;">Tidak ada file yang dimasukkan!</span>';
                        }
                         else {?>
                          <embed src="../dokumen/<?php echo $data['uang_harian']; ?>"width="700" height="400"></embed>
                        <?php } ?>
                        </td>
                    </tr>
                   </tbody>
                </table>
                <?php } ?>
              </div>
              <div class="card-footer">
                    <a href="kelola-biayapd.php" class="btn btn-info nav-icon fas fa-arrow-left"><b>Kembali</b></a>
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