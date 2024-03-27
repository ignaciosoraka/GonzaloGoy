<?php
$mensaje_exito = "";
$mensaje_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Limpiar los datos del formulario
    $nombre = htmlspecialchars($_POST['title']);
    $email = filter_var($_POST['username'], FILTER_SANITIZE_EMAIL);
    $objetivo = htmlspecialchars($_POST['price']);
    $mensaje = htmlspecialchars($_POST['message']);
    $nacionalidad = htmlspecialchars($_POST['nationality']); // Nuevo campo de nacionalidad

    // Personalizar el asunto del correo electrónico
    $asuntoCorreo = "Consulta de " . $nombre;

    // Construir el mensaje de correo electrónico
    $mensajeCorreo = "Mensaje de contacto:\n\n";
    $mensajeCorreo .= "Nombre: " . $nombre . "\n";
    $mensajeCorreo .= "Correo Electrónico: " . $email . "\n";
    $mensajeCorreo .= "Nacionalidad: " . $nacionalidad . "\n"; // Agregamos la nacionalidad al mensaje
    $mensajeCorreo .= "Objetivo: " . $objetivo . "\n";
    $mensajeCorreo .= "Mensaje: " . $mensaje;

    // Destinatario del correo electrónico
    $destinatario = '2gonlinechoaching@gmail.com';

    // Encabezados del correo electrónico
    $headers = "From: Gonzalo Goy <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Enviar el correo electrónico y verificar si se envió correctamente
    if (mail($destinatario, $asuntoCorreo, $mensajeCorreo, $headers)) {
        // Éxito en el envío del correo electrónico
        $mensaje_exito = "Tu mensaje ha sido enviado con éxito. ¡Gracias!";
        // Redireccionar a gracias.html
        header("Location: gracias.html");
        exit; // Asegura que el script se detenga después de la redirección
    } else {
        // Error en el envío del correo electrónico
        $mensaje_error = "Ocurrió un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>

