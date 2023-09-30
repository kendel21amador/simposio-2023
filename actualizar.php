<?php
// Ensure we have received form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Prepare the data to be saved in JSON format
    $data = [
        [
            "Titulo" => htmlspecialchars($_POST['Titulo'], ENT_QUOTES, 'UTF-8'),
            "Year" => htmlspecialchars($_POST['Year'], ENT_QUOTES, 'UTF-8'),
            "FechaInicio" => htmlspecialchars($_POST['FechaInicio'], ENT_QUOTES, 'UTF-8'),
            "Whatsapp" => htmlspecialchars($_POST['Whatsapp'], ENT_QUOTES, 'UTF-8'),
            "Des_wp" => htmlspecialchars($_POST['Des_wp'], ENT_QUOTES, 'UTF-8'),
            "Telefono" => htmlspecialchars($_POST['Telefono'], ENT_QUOTES, 'UTF-8'),
            "Correo" => htmlspecialchars($_POST['Correo'], ENT_QUOTES, 'UTF-8'),
            "Mapa" => htmlspecialchars($_POST['Mapa'], ENT_QUOTES, 'UTF-8'),
            "Incripcion" => htmlspecialchars($_POST['Incripcion'], ENT_QUOTES, 'UTF-8'),
            "Direccion" => htmlspecialchars($_POST['Direccion'], ENT_QUOTES, 'UTF-8')
        ]
    ];

    // Encode the data as JSON
    $json_data = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

    // Delete the existing JSON file
    $json_file = 'datos/datos_generales.json';
    if (file_exists($json_file)) {
        unlink($json_file);
    }

    // Save the updated JSON data to a new file
    file_put_contents($json_file, $json_data);

    // Redirect to the form page with a success message
    header('Location: formulario_datos_generales.php?mensaje=success');
    exit; // Important: Terminate the script after redirection
}
?>
