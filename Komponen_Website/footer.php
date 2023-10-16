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


  <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
  <script>
    ClassicEditor
      .create(document.querySelector('#isi1'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#isi2'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#isi3'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#isi4'))
      .catch(error => {
        console.error(error);
      });
  </script>
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

  <script src="../Assets_Halaman/plugins/datatables/jquery.dataTables.js"></script>
  <script src="../Assets_Halaman/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../Assets_Halaman/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../Assets_Halaman/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script>
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