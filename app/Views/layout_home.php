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
  <link rel="stylesheet" href=<?= base_url("dist/css/bootstrap.min.css") ?>>
  
  <link rel="stylesheet" href=<?= base_url("dist/c3chart/c3.min.css") ?>>
  <script src="https://c3js.org/js/d3-5.8.2.min-c5268e33.js"></script>
  <script src=<?= base_url("dist/c3chart/c3.min.js") ?>></script>

  <!-- <style type="text/css">
    /* Specific mapael css class are below
         * 'mapael' class is added by plugin
        */

    .mapael .map {
      position: relative;
    }

    .mapael .mapTooltip {
      position: absolute;
      background-color: #000;
      moz-opacity: 0.70;
      opacity: 0.80;
      filter: alpha(opacity=70);
      border-radius: 10px;
      padding: 10px;
      z-index: 1000;
      max-width: 200px;
      display: none;
      color: #fff;
    }
  </style> -->
  <!-- Theme style -->
  <link rel="stylesheet" href=<?= base_url("dist/css/adminlte.min.css") ?>>
  <!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> -->
  <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"> </script>  -->
  <script src=<?= base_url("dist/js/jquery.min.js") ?>></script>
  <script src=<?= base_url("dist/js/raphael-min.js") ?>></script>
  <script src=<?= base_url("dist/js/jquery.mapael.min.js") ?>></script>
  <script src=<?= base_url("dist/js/maps/indonesia.js") ?>></script>
  <script src=<?= base_url("dist/js/maps/france_departments.js") ?>></script>

  <!-- <script src="//cdn.jsdelivr.net/npm/jquery-mapael@2.2.0/js/jquery.mapael.min.js"></script> -->
</head>

<body>
  <div style="min-width: 1124px !important;">
    <!-- Navigation -->
    <div class="container bg-success">
    <nav class="navbar navbar-expand">
      <span class="navbar-brand text-white">Logo</span>
      <div class="navbar-nav">
        <a class="nav-item nav-link text-white" href="#">Home</a>
        <a class="nav-item nav-link text-white" href="#">Features</a>
        <a class="nav-item nav-link text-white" href="#">About</a>
      </div>
    </nav>
    </div>

    <!-- Page Content -->
    <div class="container">
      <h1 class="mt-4">Prototype</h1>
      <?php require_once $page; ?>
    </div>
  </div>

  <!-- jQuery -->
  <!-- <script src="../../plugins/jquery/jquery.min.js"></script> -->
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <!-- <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../../plugins/jszip/jszip.min.js"></script>
  <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  < AdminLTE App -->
  <!-- <script src="../../dist/js/adminlte.min.js"></script> -->
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="../../dist/js/demo.js"></script> -->
</body>

</html>