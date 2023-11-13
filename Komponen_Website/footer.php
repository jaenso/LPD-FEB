  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="https://dinsos.kalteng.go.id/">Dinas Sosial Provinsi Kalimantan Tengah</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Created By</b> Fikri Firdaus
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../Assets_Halaman/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../Assets_Halaman/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="../Assets_Halaman/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="../Assets_Halaman/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="../Assets_Halaman/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="../Assets_Halaman/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../Assets_Halaman/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../Assets_Halaman/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../Assets_Halaman/plugins/moment/moment.min.js"></script>
  <script src="../Assets_Halaman/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../Assets_Halaman/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../Assets_Halaman/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../Assets_Halaman/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../Assets_Halaman/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../Assets_Halaman/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../Assets_Halaman/dist/js/demo.js"></script>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="../Assets_Halaman/plugins/datatables/jquery.dataTables.js"></script>
  <script src="../Assets_Halaman/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../Assets_Halaman/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../Assets_Halaman/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 4000,
        disableOnInteraction: false
      },
      speed: 1000,
      breakpoints: {
        320: {
          slidesPerView: 2,
          spaceBetween: 10
        },
        480: {
          slidesPerView: 3,
          spaceBetween: 20
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 20
        }
      }
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.select2').select2();
    });
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example2").DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

  </body>

  </html>