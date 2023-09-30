<!-- <?php
   if (!isset($_COOKIE['usuario'])) {
   
    header('Location: login.php');
  
  }
  
  ?> -->
<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>AdminLTE 3 | Dashboard</title>
     <!-- Google Font: Source Sans Pro -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
     <!-- Ionicons -->
     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <!-- Tempusdominus Bootstrap 4 -->
     <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
     <!-- iCheck -->
     <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
     <!-- JQVMap -->
     <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
     <!-- Theme style -->
     <link rel="stylesheet" href="dist/css/adminlte.min.css">
     <!-- overlayScrollbars -->
     <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
     <!-- Daterange picker -->
     <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
     <!-- summernote -->
     <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
     <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
           <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
           <!-- Left navbar links -->
           <ul class="navbar-nav">
              <li class="nav-item">
                 <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
              </li>
              <li>
                 <a href="sessionOff.php" style="margin-left: 1229px;"><i class="fas fa-sign-out-alt"></i></a>
              </li>
           </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
           <!-- Brand Logo -->
           <a href="indexAdministrativo.php" class="brand-link">
           <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
           <span class="brand-text font-weight-light">Admin Simposio</span>
           </a>
           <!-- Sidebar Menu -->
           <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                 <li class="nav-item">
                    <a href="formulario_datos_generales.php" class="nav-link">
                       <i class="nav-icon fas fa-th"></i>
                       <p id="texto">
                          General
                          <!-- <span class="right badge badge-danger">New</span> -->
                       </p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="ver_invitados.php" class="nav-link">
                       <i class="nav-icon fas fa-th"></i>
                       <p id="texto">
                          Invitados
                          <!-- <span class="right badge badge-danger">New</span> -->
                       </p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="ver_talleres.php" class="nav-link">
                       <i class="nav-icon fas fa-th"></i>
                       <p id="texto">
                          Actividades
                          <!-- <span class="right badge badge-danger">New</span> -->
                       </p>
                    </a>
                 </li>
              </ul>
           </nav>
           <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
     </aside>
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
        <form id="dataForm" method="post" action="guardar_datos.php" enctype="multipart/form-data">
           <h2 style="text-align: center;" class="mt-1"> Agregar invitados</h2>
           <div class="row">
              <div class="ml-5 mt-2 col-md-6">
                 <div class="card">
                    <div class="card-body">
                       <div class="form-group">
                          <label for="nombre">Nombre:</label>
                          <input type="text" class="form-control" id="nombre" name="nombre" required>
                       </div>
                       <div class="form-group">
                          <label for="profesion">Profesión:</label>
                          <input type="text" class="form-control" id="profesion" name="profesion" required>
                       </div>
                       <div class="form-group">
                          <label for="descripcion">Descripción:</label>
                          <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                       </div>
                       <div class="form-group">
                          <label for="facebook">Facebook URL:</label>
                          <input type="text" class="form-control" id="facebook" name="facebook" required>
                       </div>
                       <div class="form-group">
                          <label for="instagram">Instagram URL:</label>
                          <input type="text" class="form-control" id="instagram" name="instagram" required>
                       </div>
                       <div class="form-group">
                          <label for="linkedin">LinkedIn URL:</label>
                          <input type="text" class="form-control" id="linkedin" name="linkedin" required>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-md-4 mt-2">
                 <div class="card">
                    <div class="card-header">
                       <h2>Imagen</h2>
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                          <label for="nombre">Foto:</label>
                          <label class="input-group-text bg-primary text-white" for="foto"><i class="fas fa-camera text-white"> insertar foto</i> </label>
                          <input class="form-control file-input d-none" type="file" name="foto" id="foto" accept="image/*" required>
                          <div class="image-preview">
                             <img style="width: 267px;height: 242px;margin-left: 18%;margin-top: 13%;" id="image-preview-img" src="https://th.bing.com/th/id/OIP.EuAdstSgWGfd39CkZAsIlgHaHa?pid=ImgDet&rs=1" alt="...">
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <button style="margin-left: 49%;" type="submit" class="btn btn-primary">Registrar</button>
        </form>
     </div>
     <!-- ./wrapper -->
     <!-- jQuery -->
     <script src="plugins/jquery/jquery.min.js"></script>
     <!-- jQuery UI 1.11.4 -->
     <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
     <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
     <script>
        $.widget.bridge('uibutton', $.ui.button)
     </script>
     <!-- Bootstrap 4 -->
     <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
     <!-- ChartJS -->
     <script src="plugins/chart.js/Chart.min.js"></script>
     <!-- Sparkline -->
     <script src="plugins/sparklines/sparkline.js"></script>
     <!-- JQVMap -->
     <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
     <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
     <!-- jQuery Knob Chart -->
     <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
     <!-- daterangepicker -->
     <script src="plugins/moment/moment.min.js"></script>
     <script src="plugins/daterangepicker/daterangepicker.js"></script>
     <!-- Tempusdominus Bootstrap 4 -->
     <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
     <!-- Summernote -->
     <script src="plugins/summernote/summernote-bs4.min.js"></script>
     <!-- overlayScrollbars -->
     <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
     <!-- AdminLTE App -->
     <script src="dist/js/adminlte.js"></script>
     <!-- AdminLTE for demo purposes -->
     <!-- <script src="dist/js/demo.js"></script> -->
     <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
     <script src="dist/js/pages/dashboard.js"></script>
     <script>
        // script.js
        document.getElementById('foto').addEventListener('change', function(event) {
          const fileInput = event.target;
          const imagePreview = document.getElementById('image-preview-img');
        
          if (fileInput.files && fileInput.files[0]) {
              const reader = new FileReader();
        
              reader.onload = function(e) {
                  imagePreview.src = e.target.result;
              };
        
              reader.readAsDataURL(fileInput.files[0]);
          }
        });
        
     </script>
  </body>
</html>