<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
    $profesion = htmlspecialchars($_POST['profesion'], ENT_QUOTES, 'UTF-8');
    $descripcion = htmlspecialchars($_POST['descripcion'], ENT_QUOTES, 'UTF-8');
    $facebookURL = htmlspecialchars($_POST['facebook'], ENT_QUOTES, 'UTF-8');
    $instagramURL = htmlspecialchars($_POST['instagram'], ENT_QUOTES, 'UTF-8');
    $linkedinURL = htmlspecialchars($_POST['linkedin'], ENT_QUOTES, 'UTF-8');

    // Manejo de la imagen
    $nombreFoto = "";

    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $nombreFoto = $_FILES['foto']['name'];
        $rutaTemporalFoto = $_FILES['foto']['tmp_name'];
        $rutaFoto = 'img/' . $nombreFoto;
        move_uploaded_file($rutaTemporalFoto, $rutaFoto);
    }
    // Crear un nuevo array asociativo con los datos recibidos, incluyendo la ruta de la imagen
    $nuevoRegistro = array(
        "Nombre" => $nombre,
        "Profesion" => $profesion,
        "Descripcion" => $descripcion,
        "Facebook_URL" => $facebookURL,
        "Instagram_URL" => $instagramURL,
        "LinkedIn_URL" => $linkedinURL,
        "Imagen" => $nombreFoto
    );

    // Leer el contenido actual del archivo JSON
    $jsonData = file_get_contents('datos/invitados.json');

    // Convertir el JSON a un array asociativo
    $dataArray = json_decode($jsonData, true);

    // Agregar el nuevo registro al array
    $dataArray[] = $nuevoRegistro;

    // Convertir el array a formato JSON
    $nuevoJsonData = json_encode($dataArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

    // Guardar el JSON actualizado en el archivo
    file_put_contents('datos/invitados.json', $nuevoJsonData);

    // Redireccionar a la página del formulario con un mensaje de éxito
    header('Location: formulario_invitados.php?mensaje=success');
}
?>
