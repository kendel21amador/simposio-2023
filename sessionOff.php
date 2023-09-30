<?php
// Inicia la sesión
session_start();

// Destruye la sesión
session_unset();
session_destroy();

// Establece la cookie con el tiempo de expiración en el pasado para eliminarla
setcookie('usuario', '', time() - 3600, '/');

// Redirecciona a la página de inicio
header('Location: login.php');
exit();
?>