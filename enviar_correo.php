<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinatario = $_POST["destinatario"];

    // Configuración de los detalles del correo electrónico
    $remitente = "empresamuyreal@gmail.com";
    $asunto = "Recordatorio de pago";
    $mensaje = "Recuerda realizar el pago antes de la próxima fecha de vencimiento.";

    // Envío del correo electrónico
    $headers = "From: " . $remitente . "\r\n" .
               "Reply-To: " . $remitente . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "Notificación enviada con éxito.";
    } else {
        echo "Error al enviar la notificación.";
    }
}
?>