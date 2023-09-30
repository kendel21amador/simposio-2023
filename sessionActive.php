    <?php 


    if($_POST['campoNom'] == 'Master Admin_Sede Caribe' && $_POST['campoPass'] == 'Simposio.Xl.2023'){

        // Establecer una cookie con nombre "usuario" con el valor del nombre de usuario
    setcookie('usuario', 'usuario', time() + (10 * 24 * 60 * 60), '/'); // La cookie expirará después de 30 días

        //Si el usuario es correcto
    header('Location: indexAdministrativo.php');

    }else{

            //Si el usuario es incorrecto
        header('Location: login.php?msg=usuario incorrecto');
    }

    ?>