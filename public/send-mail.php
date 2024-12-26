<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "vallejosmatias0897@gmail.com"; // Cambia esto a tu dirección de correo electrónico
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $body = "<h2>Nuevo mensaje de contacto</h2>";
    $body .= "<p><strong>Nombre:</strong> {$name}</p>";
    $body .= "<p><strong>Correo:</strong> {$email}</p>";
    $body .= "<p><strong>Asunto:</strong> {$subject}</p>";
    $body .= "<p><strong>Mensaje:</strong><br>{$message}</p>";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>