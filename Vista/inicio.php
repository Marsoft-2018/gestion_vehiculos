<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/plantilla/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/plantilla/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/plantilla/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/plantilla/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="plugins/plantilla/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/plantilla/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/plantilla/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/plantilla/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="plugins/plantilla/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">POO project</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">        
        <div class="info">
          <a href="#" class="d-block">
            <?php
              session_start();
              echo $_SESSION['nombre'];
            ?>            
          </a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Inicio
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" id="btnDashboard">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
            <li class="nav-item">
              <a class="nav-link fa fa-check-square-o" href="#" id="mnu_preo"> Preoperacional</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fa fa-stethoscope" href="#" id="mnu_mtto"> Mantenimiento</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fa fa-car" href="#" id="mnu_vehiculo"> Vehículo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fa fa-bus" href="#" id="mnu_inventario"> Inventario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fa fa-bar-chart" href="#" id="mnu_consultas"> Consultas</a>
            </li>
            
            <li data-toggle="collapse" data-target="#mnu_para" class="collapsed">
              <a href="#"><i class="fa fa-cog"></i> Parametrizar <span class="arrow"></span></a>
            </li>
          </ul>
          <ul class="collapse" id="mnu_para">
            <li class="nav-link" id="mnu_eds"><a href="#">EDS - Estaciones de Servicio</a></li>
            <li class="nav-link" id="mnu_flotas"><a href="#">Flotas</a></li>
            <li class="nav-link" id="mnu_peajes"><a href="#">Peajes</a></li>
            <li class="nav-link" id="mnu_rutinas"><a href="#">Rutinas</a></li>
            <li class="nav-link" id="mnu_sistemas"><a href="#">Sistemas</a></li>
            <li class="nav-link" id="mnu_tipo_combustible"><a href="#">Tipo Combustible</a></li>
            <li class="nav-link" id="mnu_empresa"><a href="#">Empresa</a></li>
            <li class="nav-link" id="mnu_clase"><a href="#">Clase de vehículos</a></li>
            <li class="nav-link" id="mnu_marcas"><a href="#">Marcas de vehículos</a></li>
            <li class="nav-link" id="mnu_tipos"><a href="#">Tipos de vehículos</a></li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid py-4"  id="div_mvto">

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

  <!-- jQuery 
  <script src="plugins/jquery3.6.js"></script>-->
  <!-- jQuery -->
<script src="plugins/plantilla/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/plantilla/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/plantilla/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/plantilla/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/plantilla/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/plantilla/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/plantilla/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/plantilla/plugins/moment/moment.min.js"></script>
  <script src="plugins/plantilla/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/plantilla/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/plantilla/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/plantilla/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="plugins/plantilla/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="plugins/plantilla/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="plugins/plantilla/dist/js/pages/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    
  <script src="plugins/select2/select2.js"></script>
  <script src="js/ppal.js"></script>
  <script src="js/vehiculos.js"></script>
</body>
</html>
