
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    $para = "angelvolta@hotmail.com"; // Cambiar por el correo electrónico al que quieres enviar el mensaje
    $titulo = "Mensaje desde el formulario de contacto";
    $mensaje = "Nombre: " . $nombre . "\r\nApellido: " . $apellido . "\r\nEmail: " . $email . "\r\nTelefono: " . $telefono . "\r\nMensaje: " . $mensaje;
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    mail($para, $titulo, $mensaje, $headers);

    // Mostrar mensaje de confirmación
    echo "Gracias por contactarnos. Su mensaje ha sido enviado con éxito.";
}
?>
