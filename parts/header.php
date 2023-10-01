<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simposio 2023</title>
    <link rel="icon" style="filter: invert(100%);" type="image/png" href="./img/ucr/logo XI SIMPOSIO BLANCO.png">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">



    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
    <div class="container">
    <div class="logo">
    <?php
    $json_data = file_get_contents("datos/datos_generales.json");
    $dat = json_decode($json_data, true);

    if (count($dat) != 0) {
        ?>
        <div style="display: flex; justify-content: flex-start;">
            <a href="./index.php">
                <img class="" src="./img/ucr/firma-horizontal-dos-lineas-cmky.png" alt="" style="max-width: 200px; height: auto;">
            </a>
            <a href="./index.php">
                <img class="" src="./img/ucr/SC-CIE VERTICAL.png" alt="" style="max-width: 110px; height: auto;">
            </a>
            <a href="./index.php" >
                <img class="img-logo" src="./img/ucr/logo XI SIMPOSIO BLANCO.png" alt="" style="">
            </a>
        </div>
        <?php
    }
    ?>
</div>

<style>
.img-logo{
    max-width: 110px; height: auto;
}
@media (max-width: 424px) {
    .img-logo{
        max-width: 0px;
        background-color: blue;
    }

}

</style>


        <div  class="nav-menu">
            <nav class="mainmenu mobile-menu" style="background-color: #007bff;">
                <ul>
                    <li <?php if ($_SERVER['PHP_SELF'] == '/index.php') echo 'class="active"'; ?>><a href="./index.php">Inicio</a></li>
                    <!-- <li <?php if ($_SERVER['PHP_SELF'] == '/about-us.php') echo 'class="active"'; ?>><a href="./about-us.php">Nosotros</a></li> -->
                    <li <?php if ($_SERVER['PHP_SELF'] == '/history.php') echo 'class="active"'; ?>><a href="./history.php">Historia</a></li>
                    <!--<li <//?php if ($_SERVER['PHP_SELF'] == '/speaker.php') echo 'class="active"'; ?>><a href="./speaker.php">Invitados</a></li>-->
                    
                </ul>
            </nav>
            <?php
            $json_data = file_get_contents("datos/datos_generales.json");
            $dat = json_decode($json_data, true);

            if (count($dat) != 0) {
                foreach ($dat as $item) {
                    ?>
            <!--<a target="_blank" href="https://forms.gle/y1JV7rWVGEE1ao9X7" class="primary-btn top-btn"><i class="fa fa-ticket"></i> inscríbete aquí</a> -->
                      
                    <?php
                }
            }
            ?>
        </div>
        <div id="mobile-menu-wrap"></div>
      

    </div>
    
</header>

    <!-- Header End -->