
   

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
           <?php

    $json_data = file_get_contents("datos/datos_generales.json");
    $dat = json_decode($json_data, true);

    if(count($dat)!=0){

    foreach($dat as $item){
        
        
    ?> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-text">
                        <div class="ft-logo">
                            <a href="#" style="width: 224px;filter: invert(100%);"class="footer-logo"><img src="./img/ucr/firma-promocional-con-texto-negro.png" alt=""></a>
                        </div>
                       
                        <div class="copyright-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script>  Universidad de Costa Rica | Aviso Legal.
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <!-- <div class="ft-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>




    
    <script>

    /*------------------
        CountDown
    --------------------*/
    // For demo preview
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    if(mm == 12) {
        mm = '01';
        yyyy = yyyy + 1;
    } else {
        mm = parseInt(mm) + 1;
        mm = String(mm).padStart(2, '0');
    }
    //var timerdate = mm + '/' + dd + '/' + yyyy;
    // For demo preview end
    

    // Use this for real timer date
    var timerdate = "<?php echo $item['FechaInicio'] ?>";

	$("#countdown").countdown(timerdate, function(event) {
        $(this).html(event.strftime("<div class='cd-item'><span>%D</span> <p>Dias</p> </div>" + "<div class='cd-item'><span>%H</span> <p>Horas</p> </div>" + "<div class='cd-item'><span>%M</span> <p>Minutos</p> </div>" + "<div class='cd-item'><span>%S</span> <p>Segundos</p> </div>"));
    });

    </script>
  <?php 
    }
    }
  ?>
</body>

</html>