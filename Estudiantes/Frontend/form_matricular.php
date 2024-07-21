<?php

include("../../connection.php");
include("../../validacion.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrícula de Estudiantes</title>
    <link rel="stylesheet" href="from_matricular.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Matrícula de Estudiantes</h1>
        <form action="../Backend/matricular.php" method="POST">
            <div class="form-group">
                <label for="dni">DNI:</label>
                <input class="text" type="text" id="dni" name="dni" required>
            </div>
            <div class="form-group">
                <label for="curso">Curso:</label>
                <select class="text" id="curso" name="curso_id" required>
                    <option value="13">QUÍMICA</option>
                    <option value="14">INVESTIGACIÓN DE OPERACIONES</option>
                    <option value="15">TALLER DE PROGRAMACIÓN II</option>
                    <option value="16">INGENIERÍA DE SOFTWARE</option>
                    <option value="17">ACTIVIDADES DE PROYECCION SOCIAL</option>
                    <option value="18">ESTADÍSTICA Y PROBABILIDAD</option>
                </select>
            </div>
            <div class="btn">
                <input class="btn-enviar" type="submit" value="Matricular">
            </div>
        </form>
        
    </div>
    <div class="regresar">
        <a href="tabla_registros.php"><span class="flecha">&larr;</span> Regresar</a>
    </div>
</body>
</html>
