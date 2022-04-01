<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | <?= $title ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=<?= base_url("plugins/fontawesome-free/css/all.min.css") ?>>
  <!-- DataTables -->
  <link rel="stylesheet" href=<?= base_url("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") ?>>
  <link rel="stylesheet" href=<?= base_url("plugins/datatables-responsive/css/responsive.bootstrap4.min.css") ?>>
  <link rel="stylesheet" href=<?= base_url("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") ?>>
  <!-- Theme style -->
  <link rel="stylesheet" href=<?= base_url("dist/css/adminlte.min.css") ?>>
  <link rel="stylesheet" href=<?= base_url("dist/c3chart/c3.min.css") ?>>
  
  <!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> -->
  <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"> </script>  -->
  <script src=<?= base_url("dist/js/jquery.min.js") ?>></script>
  <script src=<?= base_url("dist/js/raphael-min.js") ?>></script>
  <script src=<?= base_url("dist/js/jquery.mapael.min.js") ?>></script>
  <script src=<?= base_url("dist/js/maps/indonesia.js") ?>></script>
  <script src=<?= base_url("dist/js/maps/france_departments.js") ?>></script>
  <script src="https://c3js.org/js/d3-5.8.2.min-c5268e33.js"></script>
  <script src=<?= base_url("dist/c3chart/c3.min.js") ?>></script>
  
  <!-- <script src="//cdn.jsdelivr.net/npm/jquery-mapael@2.2.0/js/jquery.mapael.min.js"></script> -->
</head>
<body class="hold-transition sidebar-collapse sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url() ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('Product') ?>" class="nav-link">Product</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('Transaction') ?>" class="nav-link">Transaction</a>
      </li> -->
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('Grafik') ?>" class="nav-link">Grafik</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?= base_url("dist/img/AdminLTELogo.png") ?> alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Qtasnim</a>
        </div>
      </div> -->

      

      
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php require_once $page;?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- <script src="../../plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap 4 -->
<script src=<?= base_url("plugins/bootstrap/js/bootstrap.bundle.min.js") ?>></script>
<!-- DataTables  & Plugins -->
<script src=<?= base_url("plugins/datatables/jquery.dataTables.min.js") ?>></script>
<script src=<?= base_url("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") ?>></script>
<script src=<?= base_url("plugins/datatables-responsive/js/dataTables.responsive.min.js") ?>></script>
<script src=<?= base_url("plugins/datatables-responsive/js/responsive.bootstrap4.min.js") ?>></script>
<script src=<?= base_url("plugins/datatables-buttons/js/dataTables.buttons.min.js") ?>></script>
<script src=<?= base_url("plugins/datatables-buttons/js/buttons.bootstrap4.min.js") ?>></script>
<script src=<?= base_url("plugins/jszip/jszip.min.js") ?>></script>
<script src=<?= base_url("plugins/pdfmake/pdfmake.min.js") ?>></script>
<script src=<?= base_url("plugins/pdfmake/vfs_fonts.js") ?>></script>
<script src=<?= base_url("plugins/datatables-buttons/js/buttons.html5.min.js") ?>></script>
<script src=<?= base_url("plugins/datatables-buttons/js/buttons.print.min.js") ?>></script>
<script src=<?= base_url("plugins/datatables-buttons/js/buttons.colVis.min.js") ?>></script>
<!-- AdminLTE App -->
<script src=<?= base_url("dist/js/adminlte.min.js") ?>></script>
<!-- AdminLTE for demo purposes -->
<script src=<?= base_url("dist/js/demo.js") ?>></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
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
