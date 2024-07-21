<?php
include("../../connection.php");
include("../../validacion.php");

$message = ""; // Variable para almacenar el mensaje de resultado

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $dni = $_POST["dni"];
    $curso_id = $_POST["curso_id"];

    // Obtener el ID del estudiante usando el DNI
    $sql_estudiante = "SELECT id_estudiante FROM estudiantes WHERE dni = '$dni'";
    $result_estudiante = mysqli_query($link, $sql_estudiante);

    if (mysqli_num_rows($result_estudiante) > 0) {
        $row_estudiante = mysqli_fetch_assoc($result_estudiante);
        $estudiante_id = $row_estudiante['id_estudiante'];

        // Obtener un docente disponible para el curso
        $sql_docente = "SELECT id_docente FROM docentes WHERE curso = '$curso_id' LIMIT 1";
        $result_docente = mysqli_query($link, $sql_docente);

        if (mysqli_num_rows($result_docente) > 0) {
            $row_docente = mysqli_fetch_assoc($result_docente);
            $docente_id = $row_docente['id_docente'];

            // Insertar en la tabla matriculas
            $sql_matricula = "INSERT INTO matriculas (id_estudiante, id_curso, id_docente) VALUES ('$estudiante_id', '$curso_id', '$docente_id')";
            if (mysqli_query($link, $sql_matricula) === TRUE) {
                $message = "Matrícula realizada con éxito";
            } else {
                $message = "Error al matricular: " . mysqli_error($link);
            }
        } else {
            $message = "No hay docentes disponibles para este curso";
        }
    } else {
        $message = "Estudiante no encontrado";
    }
}

mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrícula Estudiante</title>
    <link rel="stylesheet" href="matricular.css">
</head>
<body>
    <div class="container">
        <?php if (!empty($message)): ?>
            <div class="message"><?php echo $message; ?></div>
            <a href="../Frontend/tabla_registros.php" class="button">Regresar</a>
        <?php endif; ?>
    </div>
</body>
</html>
