<?php

// Obtener los datos enviados mediante el método POST
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

// Hacer algo con los datos obtenidos, como enviar un correo electrónico o guardarlos en una base de datos

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
<h1>Nombre: <?php echo $nombre; ?></h1>
<h1>Apellido: <?php echo $apellido; ?></h1>
<h1>Email: <?php echo $email; ?></h1>
<h1>Teléfono: <?php echo $telefono; ?></h1>
<h1>Mensaje: <?php echo $mensaje; ?></h1>

    

</body>
</html>