<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Pengelolaan Surat Perjalanan Dinas</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Assets_Halaman/">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../Assets_Halaman/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../Assets_Halaman/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../Assets_Halaman/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Assets_Halaman/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../Assets_Halaman/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../Assets_Halaman/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../Assets_Halaman/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="../Assets_Halaman/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../Assets_Halaman/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Font Awesome v2 -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-info navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars fa-lg"></i></a>
      </li>
      <li>
        <h4 class="text-white"><b>SISTEM PENGELOLAAN SURAT PERJALANAN DINAS FAKULTAS EKONOMI BISNIS UNIVERSITAS PALANGKA RAYA</b></h4>
      </li>
    </ul>
  <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <?php 
        include "../config/koneksi.php";
        $id_user = $_SESSION['id_user'];
        $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'");
        $data = mysqli_fetch_array($sql);
      ?>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link text-white" data-toggle="dropdown" href="#">
          <i class="fas fa-user-circle fa-lg"></i> <?php echo $data['nama']?>
        </a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">

          <a href="../Login/logout.php" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i> Log Out
          </a>
        </div>
      </li>
    </ul>
  </nav>

  
  <!-- /.navbar -->