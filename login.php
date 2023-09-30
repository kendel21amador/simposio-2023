<!-- <?php


if (isset($_COOKIE['usuario'])) {

   header('Location: indexAdministrativo.php');

}

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simposio IX</title>

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
    <link rel="stylesheet" href="css/estilo.css" type="">
</head>
<body background="img/img-caribe/caribe-noche.jpg" style=" backdrop-filter: blur(2px);">
        <?php
            
        if(isset($_GET['msg'])){
        
        }

            ?>

<div class="card" id="panel" style="width: 28rem;">
<img id="logoLogin" class="card-img-top" src="./img/ucr/firma-promocional-con-texto-negro.png" alt="Card image cap">
  <div class="card-body">
    
     <form action="sessionActive.php" method="POST">
        
            <h4 id="nombre">Nombre de Usuario</h4>
            <input  id="campoNombre" name="campoNom" type="text">

            <h4 id="password">Contraseña</h4>
            <input  id="campoPassword" name="campoPass" type="text">

            <button id="ingresar">Inicia sesión</button>
        </form>

    </div>
</div>

    

</body>
</html>