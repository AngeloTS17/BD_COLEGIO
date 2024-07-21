<?php 

include("../../connection.php");

include("../../validacion.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD COLEGIO</title>
    <link rel="stylesheet" href="form_anadir.css">
</head>
<body>
    <div class="container">
        <h1 class="title" >REGISTRO DE DOCENTE</h1>
            <form action="../Backend/anadir.php" method="POST" enctype="multipart/form-data">
                <div class="form-group" >
                    <label for="dni">DNI:</label>
                    <input class="text" type="text" name="dni" id="dni" required>
                </div>
                <div class="form-group">
                    <label for="nombres">Nombres:</label>
                    <input class="text" type="text" name="nombres" id="nombres" required>
                </div>
                <div class="form-group">
                    <label for="apellidoPaterno">Apellido Paterno:</label>
                    <input class="text" type="text" name="apellidoPaterno" id="apellidoPaterno" required>
                </div>
                <div class="form-group">
                    <label for="apellidoMaterno">Apellido Materno:</label>
                    <input class="text"  type="text" name="apellidoMaterno" id="apellidoMaterno" required>
                </div>
                <div class="form-group">
                    <label for="celular">Celular:</label>
                    <input class="text" type="text" name="celular" id="celular" required>
                </div>
                <div class="form-group">
                    <label for="correo">Correo electrónico:</label>
                    <input class="text" type="text" name="correo" id="correo" required>
                </div>
                <!-- <div class="form-group">
                    <label for="Asignatura">Asignatura:</label>
                    <input class="text" type="text" name="asignatura" id="asignatura" required>
                </div> -->
                <div class="form-group">
                    <label for="dia_clase">Día de Clase:</label>
                    <select class="text" name="dia_clase" id="dia_clase" required>
                        <option value="Lunes">Lunes</option>
                        <option value="Martes">Martes</option>
                        <option value="Miercoles">Miércoles</option>
                        <option value="Jueves">Jueves</option>
                        <option value="Viernes">Viernes</option>
                        <option value="Sabado">Sábado</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="foto">Foto: (Opcional)</label>
                    <input class="text" type="file" name="foto" id="foto">
                </div>
                <div class="btn" >
                    <input class="btn-enviar" type="submit" name="enviar" id="enviar" value="Registrar">
                </div>
            </form>
    </div>
    
    <div class="regresar" >
        <a href="tabla_registros.php"><span class="flecha">&larr;</span> Regresar</a>
    </div>
    
</body>
</html>