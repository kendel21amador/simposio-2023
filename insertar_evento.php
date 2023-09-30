<?php
// Obtener los datos del formulario
$fecha = htmlspecialchars($_POST['fecha'], ENT_QUOTES, 'UTF-8');
$nombre =  htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
$hora =  htmlspecialchars($_POST['hora'], ENT_QUOTES, 'UTF-8');
$invitado =  htmlspecialchars($_POST['invitado'], ENT_QUOTES, 'UTF-8');
$profesion =  htmlspecialchars($_POST['profesion'], ENT_QUOTES, 'UTF-8');
$email =  htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$aula =  htmlspecialchars($_POST['aula'], ENT_QUOTES, 'UTF-8');

// Procesar la foto
$nombreFoto = "";
if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $nombreFoto = $_FILES['foto']['name'];
    $rutaTemporalFoto = $_FILES['foto']['tmp_name'];
    $rutaFoto = 'img/' . $nombreFoto;
    move_uploaded_file($rutaTemporalFoto, $rutaFoto);
}

// Cargar el contenido del JSON actual
$json_file = 'datos/actividades.json'; // Reemplaza 'ruta/del/archivo.json' con la ubicación real de tu archivo JSON
$json_data = file_get_contents($json_file);
$data = json_decode($json_data, true);

// Verificar si la fecha ya existe en el JSON
$fecha_existente = false;
foreach ($data['Simpsio'] as &$evento) {
    if ($evento['Fecha_evento'] === $fecha) {
        // La fecha ya existe, agregamos el nuevo evento al arreglo de talleres
        $nuevo_evento = array(
            "Nombre" => $nombre,
            "Hora"=>$hora,
            "Invitado"=>$invitado,
            "Profesion"=>$profesion,
            "Correo"=>$email,
            "Aula"=>$aula,
            "Foto"=>$nombreFoto, // Aquí almacenamos solo el nombre y extensión de la imagen
        );
        $evento['talleres'][] = $nuevo_evento;

        // Ordenar talleres por hora cronológicamente
        usort($evento['talleres'], function($a, $b) {
            return strtotime($a['Hora']) - strtotime($b['Hora']);
        });

        $fecha_existente = true;
        break;
    }
}

// Si la fecha no existe, creamos un nuevo registro para esa fecha
if (!$fecha_existente) {
    $nuevo_evento = array(
        "Nombre" => $nombre,
        "Hora"=>$hora,
        "Invitado"=>$invitado,
        "Profesion"=>$profesion,
        "Correo"=>$email,
        "Aula"=>$aula,
        "Foto"=>$nombreFoto, // Aquí almacenamos solo el nombre y extensión de la imagen
    );
    $nuevo_dia = array(
        "Fecha_evento" => $fecha,
        "talleres" => array($nuevo_evento),
    );
    $data['Simpsio'][] = $nuevo_dia;
}

// Reordenar las fechas en orden cronológico
usort($data['Simpsio'], function($a, $b) {
    return strtotime($a['Fecha_evento']) - strtotime($b['Fecha_evento']);
});

// Guardar el JSON actualizado en el archivo
$json_actualizado = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
file_put_contents($json_file, $json_actualizado);

// Redirigir a la página del formulario con un mensaje de éxito
header('Location: formulario.php?exito=true');
exit();
?>
