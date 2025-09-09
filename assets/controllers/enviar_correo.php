<?php
$nombre = $_POST['nombre'] ?? '';
$email = $_POST['email'] ?? '';
$mensaje = $_POST['mensaje'] ?? '';


$destinatarios = "camilo27pacheco27@gmail.com"; 

$asunto = "Nuevo mensaje desde localhost";

$contenido = "Nombre: $nombre\n";
$contenido .= "Correo: $email\n\n";
$contenido .= "Mensaje:\n$mensaje";

$encabezados = "From: $email\r\n";
$encabezados .= "Reply-To: $email\r\n";

if (mail($destinatarios, $asunto, $contenido, $encabezados)) {
    header("Location: ../../index.php?mensaje=enviado");
} else {
    header("Location: ../../index.php?mensaje=error");
}

