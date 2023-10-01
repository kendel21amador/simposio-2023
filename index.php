
<?php
include 'parts/header.php';
?>
<?php
$json_data = file_get_contents("datos/datos_generales.json");
$general = json_decode($json_data, true);

if (count($general) != 0) {

   foreach ($general as $item) {


      ?>


      <!-- Hero Section Begin -->
      <section class="hero-section set-bg" data-setbg="img/img-caribe/caribe-noche2.jpg">
         <div class="container">
            <div class="row">
               <div id="foto-persona" class="col-lg-5">
                  <img id="foto-g" src="./img/ches.png" alt="">
               </div>
               <div id="texto-principal" class="col-lg-7">
                  <div class="hero-text text-align: center; align-items: center;" >
                     <h2 id="text-inicial">
                        <?php echo $item['Titulo'] ?>
                        <?php echo $item['Year'] ?>
                     </h2>
                     <div id="botones">
                        <a  href="https://forms.gle/y1JV7rWVGEE1ao9X7" class="primary-btn pr mr-1" target="_blank">Inscríbete como participante</a>
                        <a href="https://forms.gle/7ABZrwkrTPtZ8djJ9" class="primary-btn pr mr-1" target="_blank">Inscríbete como instructor</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <?php
   }
}

?>
<!-- Hero Section End -->
<!-- Counter Section Begin -->
<section class="counter-section bg-gradient">
   <div class="container">
      <div class="row">
         <div class="col-lg-4">
            <div id="texto" class="counter-text">
               <span>Fecha del evento: 02 y 03 de noviembre del 2023</span>
               <h3>Cuenta cada segundo<br />Hasta el evento</h3>
            </div>
            <div class="imagen">
               <img src="img/ucr/supergrafico-celeste.png" alt="">
            </div>
         </div>
         <div class="col-lg-8">
            <div class="cd-timer" id="countdown">
               <div class="cd-item">
                  <span>19</span>
                  <p>Dias</p>
               </div>
               <div class="cd-item">
                  <span>18</span>
                  <p>Horas</p>
               </div>
               <div class="cd-item">
                  <span>46</span>
                  <p>Minutos</p>
               </div>
               <div class="cd-item">
                  <span>32</span>
                  <p>Segundos</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="team-member-section mt-5">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="section-title">
            <i><h2 id="slogan">"Innovaciones Tecnológicas en las Organizaciones y la Educación"</h2></i>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="team-member-section mt-5">
   <div id="about" class="about ">
      <div class="container">
         <div class="row d_flex">
            <div class="col-md-6">
               <div class="about_right">
                  <figure><img src="img/img-caribe/edificio.jpeg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-6">
               <div class="titlepage">
                  <div class="titulo">
                     <h2>SIMPOSIO XI</h2>
                  </div>
                  <p>En este año, la Sede del Caribe de la Universidad de Costa Rica reunirá tanto a docentes como
                     estudiantes de la carrera de Bachillerato en Informática Empresarial en el XI Simposio con el tema
                     "Innovaciones Tecnológicas en la Organizaciones y la Educación", que refleja el compromiso de la
                     comunidad académica con la actualización y la relevancia de la informática empresarial en un mundo
                     en constante cambio. Este evento no solo conmemora los logros pasados, sino que también inspira a
                     continuar trabajando en pro de un futuro donde la tecnología y la empresarialidad se unan para
                     impulsar el desarrollo de la región y el país.
                  </p>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="team-member-section mt-0">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="section-title">
               <h2>Objetivo General</h2>
               <div class="row1-container p-0 mb-0">
                  <div class="box box-down blue">
                     <p><b></b>Fomentar el intercambio de conocimientos y experiencias entre docentes y estudiantes
                        de la carrera de Bachillerato en Informática Empresarial de las Sedes Regionales de la
                        Universidad de Costa Rica, con el propósito de impulsar la adopción de Innovaciones Tecnológicas
                        en las Organizaciones y la Educación, así como explorar cómo estas contribuyen al desarrollo
                        regional y nacional.
                     </p>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="team-member-section mt-0">
   <div class="row">
      <div class="col-lg-12">
         <div class="section-title">
            <h2>Objetivos Específicos</h2>
            <div class="row1-container">
               <div class="box box-down blue">
                  <p><b>1. </b>Facilitar un espacio tanto de diálogo como discusión entre docentes y estudiantes de la
                     carrera de Bachillerato en Informática Empresarial, con el fin de analizar y compartir las
                     innovaciones tecnológicas más recientes en el ámbito empresarial y su impacto en la educación,
                     promoviendo la comprensión y aplicación de estas tecnologías tanto en el entorno educativo como
                     empresarial.
                  </p>
               </div>

               <div class="box blue">
                  <p><b>2. </b>Promover la reflexión sobre el impacto de las innovaciones tecnológicas en la educación y
                     en las organizaciones, evaluando cómo estas transformaciones han contribuido al desarrollo regional
                     y nacional, por medio de los aportes o avances concretos que esta disciplina ha logrado a lo largo
                     de los últimos 25 años, explorando oportunidades futuras para su crecimiento y evolución.
                  </p>
               </div>

               <div class="box box-down blue">
                  <p><b>3. </b>Inspirar la colaboración de la comunidad académica en la integración de la tecnología y
                     la empresarialidad como catalizadores del desarrollo regional y nacional, mediante la
                     identificación de desafíos u oportunidades en la convergencia de ambos campos, y la generación de
                     propuestas concretas para impulsar esta sinergia en el futuro, con un enfoque en la mejora de la
                     educación y el fortalecimiento de las organizaciones.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>



</section>

<!-- Counter Section End -->
<!-- Team Member Section Begin -->
<!-- 
<section class="team-member-section mt-0">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="section-title">
               <h2>Invitados</h2>
               <p>Estos son nuestros invitados, puedes ver la información de cada persona</p>
            </div>
         </div>
      </div>
   </div>
   <?php
   $json_data = file_get_contents("datos/invitados.json");
   $dat = json_decode($json_data, true);

   $start = 0;
   $maxToShow = 10; // Cambiar este valor para ajustar la cantidad de invitados a mostrar
   
   if (count($dat) != 0) {
      if (isset($_GET['start'])) {
         $start = $_GET['start'];
      }

      $end = $start + $maxToShow;

      for ($i = $start; $i < min(count($dat), $end); $i++) {
         $item = $dat[$i];
         ?>
         <div class="member-item set-bg" data-setbg="./img/<?php echo $item['Imagen'] ?>">
            <div class="mi-social">
               <div class="mi-social-inner bg-gradient">
                  <a href="<?php echo $item['Facebook_URL'] ?>"><i class="fa fa-facebook"></i></a>
                  <a href="<?php echo $item['Instagram_URL'] ?>"><i class="fa fa-instagram"></i></a>
                  <a href="<?php echo $item['LinkedIn_URL'] ?>"><i class="fa fa-linkedin"></i></a>
               </div>
            </div>
            <div class="mi-text">
               <h5>
                  <?php echo $item['Nombre'] ?>
               </h5>
               <span>
                  <?php echo $item['Profesion'] ?>
               </span>
            </div>
         </div>
         <?php
      }

      if ($end < count($dat)) {
         ?>
         <div class="text-center mt-5">
            <a style="margin-top: 28px;" href="speaker.php" class="btn btn-primary">Ver Más</a>
         </div>
         <?php
      }
   }
   ?>
</section>
 -->

<!-- Team Member Section End -->
<!-- Schedule Section Begin -->
<!--
<section class="schedule-section spad">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="section-title">
               <h2>Nuestra agenda</h2>
               <p>No te pierdas nada de nuestros eventos</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="schedule-tab">
               <ul class="nav nav-tabs" role="tablist">
                  <?php
                  $json_data = file_get_contents("datos/actividades.json");
                  $dat = json_decode($json_data, true);

                  $eventos = $dat['Simpsio'];
                  $indice = 1;

                  // if(count($dat)!=0){
                  
                  foreach ($eventos as $item) {
                     $FechaEvento = $item['Fecha_evento'];
                     $talleres = $item['talleres'];


                     ?>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-<?php echo $indice?>" role="tab">
                           <h5>Día
                              <?php echo $indice ?>
                           </h5>
                           <p>
                              <?php echo $FechaEvento ?>
                           </p>
                        </a>
                     </li>
                     <?php
                     $indice++;
                  } ?>
               </ul>
               
               <div class="tab-content">
                  <?php
                  $json_data = file_get_contents("datos/actividades.json");
                  $dat = json_decode($json_data, true);

                  $eventos = $dat['Simpsio'];
                  $indice = 1;

                  foreach ($eventos as $evento) {
                     $FechaEvento = $evento['Fecha_evento'];
                     $talleres = $evento['talleres'];
                     ?>
                     <?php if ($indice == 1) { ?>
                        <div class="tab-pane active" id="tabs-<?php echo $indice ?>" role="tabpanel">
                        <?php } else { ?>
                           <div class="tab-pane" id="tabs-<?php echo $indice ?>" role="tabpanel">
                           <?php } ?>
                           <div class="st-content">
                              <div class="container">
                                 <?php
                                 foreach ($talleres as $taller) {
                                    ?>
                                    <div class="row">
                                       <div class="col-lg-3">
                                          <div class="sc-pic">
                                             <img src="./img/<?php echo $taller['Foto'] ?>" alt="">
                                          </div>
                                       </div>
                                       <div class="col-lg-5">
                                          <div class="sc-text">
                                             <h4 style="font-">
                                                <b><?php echo $taller['Nombre'] ?></b>
                                             </h4>
                                             
                                             <ul>
                                                <li><i class="fa fa-user"></i>
                                                   <?php echo $taller['Invitado'] ?>
                                                </li>
                                                <li>
                                                   <?php echo $taller['Profesion'] ?>
                                                </li>
                                                <li><i class="fa fa-envelope"></i>
                                                   <?php echo $taller['Correo'] ?>
                                                </li>
                                             </ul>
                                 
                                          </div>
                                       </div>
                                       <div class="col-lg-4">
                                          <ul class="sc-widget">
                                             <li><i class="fa fa-clock-o"></i>
                                                <?php echo $taller['Hora'] ?>
                                             </li>
                                             <li><i class="fa fa-map-marker"></i>
                                                <?php echo $taller['Aula'] ?>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <?php
                                 }
                                 ?>
                              </div>
                           </div>
                        </div>
                        <?php
                        $indice++;
                  }
                  ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
</section>
-->

<!-- Schedule Section End -->
<!-- Newslatter Section Begin -->
<section class="newslatter-section mt-5">
   <div class="container">
      <div class="newslatter-inner set-bg" data-setbg="img/img-caribe/fondo-part.fw.png">
         <div class="ni-text">
            <h3>Inscripción como Instructor Taller XI Simposio</h3>
            <p>¡Únete como Instructor en el XI Simposio de Innovaciones Tecnológicas en las Organizaciones y la Educación y Comparte Tu Experiencia!</p> 
         </div>
         <div>
            <?php
            $json_data = file_get_contents("datos/datos_generales.json");
            $dat = json_decode($json_data, true);

            if (count($dat) != 0) {
               foreach ($dat as $item) {
                  ?>
                  <a target="_blank" class="btn btn-primary" id="color-boton"
                     href="https://forms.gle/7ABZrwkrTPtZ8djJ9">inscríbete aquí</a>
                  <?php
               }
            }
            ?>
         </div>
      </div>
   </div>
</section>
<!-- Newslatter Section End -->
<?php
$json_data = file_get_contents("datos/datos_generales.json");
$general = json_decode($json_data, true);

if (count($general) != 0) {

   foreach ($general as $item) {


      ?>
      <!-- Contact Section Begin -->
      <section class="contact-section spad">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="section-title">
                     <h2>Ubicación</h2>
                     <p>Obtén indicaciones para llegar a nuestro centro de eventos</p>
                  </div>
                  <div class="cs-text">
                     <div class="ct-address">
                        <span>Dirección:</span>
                        <p>
                           <?php echo $item['Direccion'] ?>
                        </p>
                     </div>
                     <ul>
                        <li>
                           <span>Telefono:</span>
                           <?php echo $item['Telefono'] ?>
                        </li>
                        <li>
                           <span>Correo electronico:</span>
                           <?php echo $item['Correo'] ?>
                        </li>
                     </ul>
                     <div id="" action="#" class="">
                        <?php
                        $json_data = file_get_contents("datos/datos_generales.json");
                        $dat = json_decode($json_data, true);

                        if (count($dat) != 0) {
                           foreach ($dat as $item) {
                              ?>
                              <a target="_blank"
                                 href="https://wa.me/message/Z555RHBD4TOIA1"
                                 class="btn btn-primary" id="color-boton-whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i>
                                 Whatsapp</a>
                              <?php
                           }
                        }
                        ?>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="cs-map">
                     <iframe src="<?php echo $item['Mapa'] ?>" height="400" style="border:0;" allowfullscreen=""></iframe>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact Section End -->
 
      <?php
   }
}

?>
<?php
include 'parts/footer.php';
?>