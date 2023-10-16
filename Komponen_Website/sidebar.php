  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-info elevation-2">
    <!-- Brand Logo -->
    <a href="#" class="brand-link navbar-info">
      <img src="../img/uprlogo.png" class="brand-image img-rounded"
           style="opacity: .8">
      <span class="brand-text font-weight-bold text-white">
      <?php 
      include "../config/koneksi.php";
      $id_user = $_SESSION['id_user'];
      $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'");
      $data = mysqli_fetch_array($sql);
      $userLevel = $data['level'];
      if ($userLevel == 'admin') {
        echo 'Sistem Kelola Surat</span>
        ';}elseif ($userLevel == 'user' || $userLevel == 'staff') {
          echo 'Laporan PD</span>
          ';}?>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
              Beranda
              </p>
            </a>
          </li>
          <?php 
            if ($userLevel == 'admin') {
              // Menu items for admin
              echo '
              <li class="nav-item">
                <a href="kelola-user.php" class="nav-link active">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Kelola User
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="profil-instansi.php" class="nav-link active">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Kelola Instansi
                  </p>
                </a>
              </li>
              ';}
              elseif ($userLevel == 'user') {
                echo '
                <li class="nav-item has-treeview menu-open">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-envelope"></i>
                    <p>
                      Laporan Perjalanan Dinas
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="kelola-laporanpd.php" class="nav-link">
                        <i class="far fa-envelope nav-icon"></i>
                        <p>Kelola Laporan PD</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="kelola-biayapd.php" class="nav-link">
                        <i class="far fa-envelope-open nav-icon"></i>
                        <p>Kelola SPJ</p>
                      </a>
                    </li>
                  </ul>
                </li>
    
                <li class="nav-item has-treeview menu-open">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                      Agenda Perjalanan Dinas
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="kelola-agenda-laporanpd.php" class="nav-link">
                        <i class="far fa-folder nav-icon"></i>
                        <p>Agenda Laporan PD</p>
                      </a>
                    </li>
      
                    </li>
                  </ul>
                </li>
    
                <li class="nav-item">
                  <a href="kelola-semualaporan.php" class="nav-link active">
                    <i class="nav-icon fas fa-file-import"></i>
                    <p>
                      Laporan Perjalanan Dinas
                    </p>
                  </a>
                </li>
              ';}?>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>