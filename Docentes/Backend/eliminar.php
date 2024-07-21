<?php

include("../../connection.php");

include("../../validacion.php");

$id_docente = $_GET["id"];

$query_eliminar = "UPDATE docentes SET borrado = 1 WHERE docentes.id_docente = $id_docente";

$result = mysqli_query($link, $query_eliminar);

if ($result) {
    $message= "Docente eliminado";
} else {
    $message= "Error en el sistema";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar DOCENTE</title>
    <link rel="stylesheet" href="eliminar.css">
</head>
<body>
    <div class="container">
        <div class="message"><?php echo $message; ?></div>
        <a href="../Frontend/tabla_registros.php" class="button">Regresar</a>
    </div>
</body>
</html>
