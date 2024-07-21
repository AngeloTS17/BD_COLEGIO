<?php

include("../../connection.php");
include("../../validacion.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD ESTUDIANTES</title>
    <link rel="stylesheet" href="form_anadir-1.css">
</head>
<body>
<div class="container">
        <h1 class="title">REGISTRO DEL ESTUDIANTE</h1>
        <form action="../Backend/anadir.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="dni">DNI:</label>
                <input class="text" type="text" id="dni" name="dni" required>
            </div>
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <input class="text" type="text" id="nombres" name="nombres" required>
            </div>
            <div class="form-group">
                <label for="apellidoPaterno">Apellido Paterno:</label>
                <input class="text" type="text" id="apellidoPaterno" name="apellidoPaterno" required>
            </div>
            <div class="form-group">
                <label for="apellidoMaterno">Apellido Materno:</label>
                <input class="text" type="text" id="apellidoMaterno" name="apellidoMaterno" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <select class="text" id="edad" name="edad" required>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                </select>
            </div>
            <div class="form-group">
                <label for="celular">Celular:</label>
                <input class="text" type="tel" id="celular" name="celular" required>
            </div>
            <div class="form-group">
                <label for="correoPersonal">Correo Personal:</label>
                <input class="text" type="email" id="correoPersonal" name="correoPersonal" required>
            </div>
            <div class="form-group">
                <label for="correoInstitucional">Correo Institucional:</label>
                <input class="text" type="email" id="correoInstitucional" name="correoInstitucional" required>
            </div>
            <div class="form-group">
                <label for="grado">Grado:</label>
                <select class="text" id="grado" name="grado" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="seccion">Sección:</label>
                <select class="text" id="seccion" name="seccion" required>
                    <option value="A">"A"</option>
                    <option value="B">"B"</option>
                    <option value="C">"C"</option>
                </select>
            </div>
            <div class="form-group">
                <label for="turno">Turno:</label>
                <select class="text" id="turno" name="turno" required>
                    <option value="Mañana">Mañana</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noche">Noche</option>
                </select>
            </div>
            <div class="form-group">
                <label for="foto">Foto de Perfil: (Opcional)</label>
                <input class="text" type="file" id="foto" name="foto">
            </div>

            <div class="btn">
                <input class="btn-enviar"  type="submit" name="enviar" value="Enviar">
            </div>
        </form>
    </div>
    
    <div class="regresar">
    <a href="tabla_registros.php">
        <span class="flecha">&larr;</span> Regresar
    </a>
    </div>
</body>
</html>