<?php
   include 'parts/header.php';
   ?>
<style>
   .pagination {
   margin-top: 20px;
   display: flex;
   align-items: center;
   }
</style>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="breadcrumb-text">
               <h2>Nuestros invitados</h2>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Breadcrumb Section End -->
<!-- Speaker Section Begin -->
<section class="speaker-section spad">
   <div class="container">
      <div class="row">
         <?php 
            $jsonData = file_get_contents('./datos/invitados.json');
            $invitados = json_decode($jsonData, true);
            $invitadosPorPagina = 10;
            $totalInvitados = count($invitados);
            $paginasTotales = ceil($totalInvitados / $invitadosPorPagina);
            $paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
            $indiceInicial = ($paginaActual - 1) * $invitadosPorPagina;
            $indiceFinal = $indiceInicial + $invitadosPorPagina - 1;
            $invitadosPagina = array_slice($invitados, $indiceInicial, $invitadosPorPagina);
            
            foreach ($invitadosPagina as $invitado): 
            ?>
         <div class="col-sm-6">
            <div class="speaker-item">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="si-pic" style="width: 200px;">
                        <img src="./img/<?php echo $invitado['Imagen']?>" alt="">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="si-text">
                        <div class="si-title">
                           <h4><?php echo $invitado['Nombre']?></h4>
                           <span><?php echo $invitado['Profesion']?></span>
                        </div>
                        <!--
                        <div class="si-social">
                           <a href="<?php echo $invitado['Facebook_URL']?>"><i class="fa fa-facebook"></i></a>
                           <a href="<?php echo $invitado['Instagram_URL']?>"><i class="fa fa-instagram" aria-hidden="true"></i> </a>
                           <a href="<?php echo $invitado['LinkedIn_URL']?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                        
                        <p><?php echo $invitado['Descripcion']?></p>
                        -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php endforeach; ?>
      </div>
      <div class="pagination">
         <?php if ($paginaActual > 1): ?>
         <a class="btn btn-primary" href="?pagina=<?php echo ($paginaActual - 1); ?>">&laquo; Anterior</a>
         <?php endif; ?>
         <?php for ($i = 1; $i <= $paginasTotales; $i++): ?>
         <a class="btn <?php if ($i === $paginaActual) echo 'active'; ?>" href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
         <?php endfor; ?>
         <?php if ($paginaActual < $paginasTotales): ?>
         <a class="btn btn-primary" href="?pagina=<?php echo ($paginaActual + 1); ?>">Siguiente &raquo;</a>
         <?php endif; ?>
      </div>
   </div>
</section>
<!-- Speaker Section End -->
<div style="height: 40px;" class="div"></div>
<?php
   include 'parts/footer.php';
   ?>