<?php 
   if (!isset($_COOKIE['usuario'])) {
   
   header('Location: login.php');
   
   }
   
   ?>
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
            <a href="index.php" class="brand-link">
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
      <?php $json_data = $json_file = 'datos/datos_generales.json';
         $json_data = file_get_contents($json_file);
         $data = json_decode($json_data, true); ?>
      <!-- Content Wrapper. Contains page content -->
      <h2 style="text-align: center;"> Datos generales del evento</h2>
      <form action="actualizar.php" method="post" enctype="multipart/form-data">
         <div style="margin-left: 20%;"  class="row">
            <div class="col-5">
               <div class="card">
                  <div class="card-body">
                     <label for="">Titulo</label>
                     <input type="text" class="form-control" name="Titulo" value="<?php echo $data[0]['Titulo']; ?>">
                     <label for="">Numero de simposio</label>
                     <input type="text" class="form-control" name="Year" value="<?php echo $data[0]['Year']; ?>">
                     <label for="">Fecha de inicio</label>
                     <input type="date" class="form-control" name="FechaInicio" value="<?php echo $data[0]['FechaInicio']; ?>">
                     <label for="">Correo</label>
                     <input type="text" class="form-control" name="Correo" value="<?php echo $data[0]['Correo']; ?>">
                     <label for="">Telefono</label>
                     <input type="text" class="form-control" name="Telefono" value="<?php echo $data[0]['Telefono']; ?>">
                  </div>
               </div>
            </div>
            <div class="col-5">
               <div class="card" style="height: 391px;">
                  <div class="card-body">
                     <label for="">Direccion</label>
                     <input type="text" class="form-control" name="Direccion" value="<?php echo $data[0]['Direccion']; ?>">
                     <label for="">Maps</label>
                     <input type="text" class="form-control" name="Mapa" value="<?php echo $data[0]['Mapa']; ?>">
                     <label for="">Formulario de inscripcion</label>
                     <input type="text" class="form-control" name="Incripcion" value="<?php echo $data[0]['Incripcion']; ?>">
                     <label for="">Numero de whatsapp</label>
                     <input type="text" class="form-control" name="Whatsapp" value="<?php echo $data[0]['Whatsapp']; ?>">
                     <label for="">Descripcion Whatsapp</label>
                     <input type="text" class="form-control" name="Des_wp" value="<?php echo $data[0]['Des_wp']; ?>">
                  </div>
               </div>
            </div>
            <!-- 
               <div class="col-md-5 mt-2">
                       <div class="card">
                               <div class="card-header">
                                   <h2>Logo principal</h2>
                               </div>
                           <div class="card-body">
                           <div class="form-group">
                                   <label for="nombre">Foto:</label>
                               <label class="input-group-text bg-primary text-white" for="fotor"><i class="fas fa-camera text-white"> insertar foto</i> </label>
                               <input class="form-control file-input d-none" type="file" name="fotor" id="fotor" accept="image/*" required>
                               <div class="image-preview-img-fotor">
                               <img style="width: 267px;height: 242px;margin-left: 18%;margin-top: 13%;" id="image-preview-img-fotor" src="https://th.bing.com/th/id/OIP.EuAdstSgWGfd39CkZAsIlgHaHa?pid=ImgDet&rs=1" alt="...">
                           </div>
                            </div>
                           </div>
                       </div>
                </div>  -->
            <!-- 
               <div class="col-md-5 mt-2">
                      <div class="card">
                              <div class="card-header">
                                  <h2>Logo secundario</h2>
                              </div>
                          <div class="card-body">
                          <div class="form-group">
                                  <label for="nombre">Foto:</label>
                              <label class="input-group-text bg-primary text-white" for="foto"><i class="fas fa-camera text-white"> insertar foto</i> </label>
                              <input class="form-control file-input d-none" type="file" name="foto2" id="foto2" accept="image/*" required>
                              <div class="image-preview2">
                              <img style="width: 267px;height: 242px;margin-left: 18%;margin-top: 13%;" id="image-preview-img2" src="https://th.bing.com/th/id/OIP.EuAdstSgWGfd39CkZAsIlgHaHa?pid=ImgDet&rs=1" alt="...">
                              </div>
                           </div>
                          </div>
                      </div>
               </div> -->
         </div>
         <button class="btn btn-primary" style="margin-left: 52%;" type="submit">Actualizar datos</button>
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
         $(document).ready(function(){
           $('#mi-tab a').click(function(e){
             e.preventDefault();
             $(this).tab('show');
             $('#mi-tab a').removeClass('active'); // Eliminar la clase 'active' de todas las pestañas
             $(this).addClass('active'); // Agregar la clase 'active' solo a la pestaña seleccionada
           });
         });
      </script>
   </body>
</html>