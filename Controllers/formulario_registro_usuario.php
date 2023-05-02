<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$email = $_POST['email'];
$password = $_POST['password'];

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
<h1>Fecha de nacimiento: <?php echo $fecha_nacimiento; ?></h1>
<h1>Email: <?php echo $email; ?></h1>
<h1>Teléfono: <?php echo $password; ?></h1>


    

</body>
</html>