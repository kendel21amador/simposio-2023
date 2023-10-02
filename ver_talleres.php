<?php
   // Cargar el contenido del JSON actual
   $json_file = 'datos/actividades.json'; // Reemplaza 'ruta/del/archivo.json' con la ubicación real de tu archivo JSON
   $json_data = file_get_contents($json_file);
   $data = json_decode($json_data, true);
   
   // Función para eliminar un evento específico por su índice en la matriz de talleres
   function eliminarEvento($fecha, $indiceEvento) {
       global $data;
       foreach ($data['Simpsio'] as $indice => &$evento) {
           if ($evento['Fecha_evento'] === $fecha) {
               array_splice($evento['talleres'], $indiceEvento, 1);
               if (empty($evento['talleres'])) {
                   // Si no quedan talleres en el evento, eliminar el evento completo
                   unset($data['Simpsio'][$indice]);
               }
               break;
           }
       }
   }
   
   // Verificar si se recibió una solicitud para eliminar un evento
   if (isset($_GET['eliminar']) && isset($_GET['fecha']) && isset($_GET['indice'])) {
       $fechaEliminar = htmlspecialchars($_GET['fecha'], ENT_QUOTES, 'UTF-8');
       $indiceEliminar = (int) $_GET['indice'];
       eliminarEvento($fechaEliminar, $indiceEliminar);
   
       // Guardar el JSON actualizado en el archivo
       $json_actualizado = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
       file_put_contents($json_file, $json_actualizado);
   
       // Redirigir a esta misma página para actualizar la tabla mostrada
       header('Location: ' . $_SERVER['PHP_SELF']);
       exit();
   }
   ?>
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
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.4.1/css/rowReorder.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
   </head>
   <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
         <!-- Preloader -->
         <!--<div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
         </div>-->
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
         <h2 style="text-align: center;" class="mt-1">
            <b>Talleres del simposio</b>
         </h2>
         <div class="row justify-content-center">
            <div class="col-12 col-md-8">
               <a href="formulario.php" class="btn btn-success"> <b>+</b> Agregar nuevo taller</a>
               <div class=" mt-2 card">
                  <div class="card-body">
                     <table id="miTabla" class="display nowrap" style="width:100%">
                        <thead>
                           <tr>
                              <th>Fecha</th>
                              <th>Hora</th>
                              <th>Taller</th>
                              <th>Invitado</th>
                              <th>Lugar</th>
                              <th>Accion</th>
                           </tr>
                           <?php foreach ($data['Simpsio'] as $evento): ?>
                           <?php foreach ($evento['talleres'] as $indice => $taller): ?>
                        </thead>
                        <tbody>
                           <tr>
                              <td><?php echo htmlspecialchars($evento['Fecha_evento'], ENT_QUOTES, 'UTF-8'); ?></td>
                              <td><?php echo htmlspecialchars($taller['Hora'], ENT_QUOTES, 'UTF-8'); ?></td>
                              <td><?php echo htmlspecialchars($taller['Nombre'], ENT_QUOTES, 'UTF-8'); ?></td>
                              <td><?php echo htmlspecialchars($taller['Invitado'], ENT_QUOTES, 'UTF-8'); ?></td>
                              <td><?php echo htmlspecialchars($taller['Aula'], ENT_QUOTES, 'UTF-8'); ?></td>
                              <td>
                                 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
                                    <input type="hidden" name="fecha" value="<?php echo htmlspecialchars($evento['Fecha_evento'], ENT_QUOTES, 'UTF-8'); ?>">
                                    <input type="hidden" name="indice" value="<?php echo $indice; ?>">
                                    <button type="submit" name="eliminar" value="Eliminar" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> </button>
                                 </form>
                              </td>
                           </tr>
                           <!-- Agrega más filas según tus datos -->
                        </tbody>
                        <?php endforeach; ?>
                        <?php endforeach; ?>
                     </table>
                  </div>
               </div>
            </div>
         </div>
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
      <!-- jQuery Knob Chart -->
      <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
      <!-- AdminLTE App -->
      <script src="dist/js/adminlte.js"></script>
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
      <script>
         $(document).ready(function() {
             $('#miTabla').DataTable({
                 "language": {
                     "sProcessing": "Procesando...",
                     "sLengthMenu": "Mostrar _MENU_ registros",
                     "sZeroRecords": "No se encontraron resultados",
                     "sEmptyTable": "Ningún dato disponible en esta tabla",
                     "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                     "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                     "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                     "sInfoPostFix": "",
                     "sSearch": "Buscar:",
                     "sUrl": "",
                     "sInfoThousands": ",",
                     "sLoadingRecords": "Cargando...",
                     "oPaginate": {
                         "sFirst": "Primero",
                         "sLast": "Último",
                         "sNext": "Siguiente",
                         "sPrevious": "Anterior"
                     },
                     "oAria": {
                         "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                         "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                     }
                 }
             });
         });
      </script>
      <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
      <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/rowreorder/1.4.1/js/dataTables.rowReorder.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
   </body>
</html>