<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];

    if ($_FILES["imagen"]["error"] == UPLOAD_ERR_OK) {
        $nombre_temporal = $_FILES["imagen"]["tmp_name"];
        $nombre_archivo = $_FILES["imagen"]["name"];
        $tipo_archivo = $_FILES["imagen"]["type"];
        $tamano_archivo = $_FILES["imagen"]["size"];
        $ruta_imagen = "../imagenes/ . $nombre_archivo . '";
        // Aquí puedes realizar las operaciones que necesites con la imagen
        // Por ejemplo, moverla a una ubicación permanente y mostrarla en otra página


    }

    header('Location: ../deportesPrueba.php?titulo='.$titulo.'&contenido='.$contenido.'&imagen='.$nombre_archivo);

    exit();
}
?>


