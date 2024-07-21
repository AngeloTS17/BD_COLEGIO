<?php
include("../../connection.php");
include("../../validacion.php");

$id_estudiante = $_GET["id"];

$query_eliminar = "UPDATE estudiantes SET borrado = 0 WHERE estudiantes.id_estudiante = $id_estudiante";

$result = mysqli_query($link, $query_eliminar);

$message = $result ? "ESTUDIANTE RESTAURADO" : "Error en el sistema";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurar Estudiante</title>
    <link rel="stylesheet" href="restaurar.css">
</head>
<body>
    <div class="container">
        <div class="message"><?php echo $message; ?></div>
        <a href="../Frontend/tabla_registros_eliminados.php" class="button">Regresar</a>
    </div>
</body>
</html>
