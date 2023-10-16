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
                <b><h4>PROFIL INSTANSI FAKULTAS EKONOMI DAN BISNIS</b></h4>
              </div>
            </div>
        <div class="row mb-2">
          <div class="col-sm-6">
            <b><h1 class="m-0 text-dark">Profil Instansi</b></h1>
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
                        <td width="200px"><b>Nama Instansi</b></td>
                        <td>Fakultas Ekonomi Dan Bisnis Universitas Palangka Raya</td>
                    </tr>
                    <tr>
                        <td><b>Visi</b></td>
                        <td>
                        “Menjadi pusat pembelajaran ekonomi dan bisnis yang bereputasi di Asia Tenggara pada Tahun 2027”
                        </td>
                    </tr>
                    <tr>
                        <td><b>Misi</b></td>
                        <td>1. Menyelenggarakan pendidikan akademik dan profesional bidang ekonomi, manajemen, akuntansi yang menghasilkan lulusan yang mandiri, dan mampu bersaing secara regional dan internasional.
                        <br>2. Menghasilkan penelitian yang responsif terhadap dinamika lingkungan dalam bidang ekonomi, manajemen, akuntansi.
                       </br>3. Menyelenggarakan program pengabdian kepada masyarakat yang berlandaskan iptek di bidang ekonomi, manajemen, akuntansi.
                        <br>4. Membangun kerjasama antara pemangku kepentingan baik di dalam maupun diluar lingkungan fakultas untuk memperkuat daya saing lembaga.
                       </br>5. Menyiapkan calon pemimpin dan wirausahawan yang memiliki tanggung jawab sosial dan mampu menghadapi perubahan lingkungan global.
                      </td>
                    </tr>
                    <tr>
                        <td><b>Motto</b></td>
                        <td>1. Menghasilkan lulusan yang profesional di bidang manajemen, ekonomi, dan akuntansi; berbudi luhur, dan memiliki jiwa serta semangat kewirausahaan dan kepemimpinan bagi Kalimantan Tengah, Indonesia, dan Internasional.
                        <br>2. Menghasilkan penelitian dengan reputasi nasional dan internasional dalam bidang manajemen, ekonomi, dan akuntansi yang bisa digunakan di sektor publik dan bisnis.
                       </br>3. Menghasilkan pengabdian kepada masyarakat dalam bidang manajemen, ekonomi, dan akuntansi untuk berkontribusi bagi pengembangan sumberdaya lokal.
                       </br>4. Terwujudnya sistem tata pamong dan tata kelola FEB yang efisien dan profesional, dengan mengoptimalkan sistem teknologi informasi secara terpadu.
                        <br>5. Membangun kerjasama antara pemangku kepentingan baik di dalam maupun diluar lingkungan Fakultas untuk memperkuat daya saing lembaga.</br>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Gambar Fakultas Ekonomi Dan Bisnis</b></td>
                        <td><img src=../img/feb.jpg width='800px'></img></td>
                    </tr>
                    <tr>
                        <td><b>Alamat & Google Maps</b></td>
                        <td>
                        Palangka, Kec. Jekan Raya, Kota Palangka Raya, Kalimantan Tengah 74874. 
                        <br></br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63789.21570398321!2d113.86364874436171!3d-2.2191854801582243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb3aaf690a3d7%3A0x801e7ad626c76342!2sFakultas%20Ekonomi%20Universitas%20Palangka%20Raya!5e0!3m2!1sid!2sid!4v1692328362462!5m2!1sid!2sid" 
                          width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </td>
                    </tr>
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