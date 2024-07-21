<?php

include("../../connection.php");

include("../../validacion.php");

$idEst = $_GET["id"];

$query_select = "SELECT * FROM estudiantes WHERE estudiantes.id_estudiante = $idEst";

$result = mysqli_query($link, $query_select);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD COLEGIO</title>
    <link rel="stylesheet" href="form_modificar.css">
</head>
<body>
    <?php
    if ($result) {
    
        $row = mysqli_fetch_array($result);
        if ($row["id_estudiante"] != null) {
            
        ?>
            <div class="container">
                <h1 class="title">MODIFIQUE AL ESTUDIANTE</h1>
                <form action="../Backend/modificar.php" method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="id" id="id" value="<?php echo $idEst; ?>">

                    <div class="form-group">
                        <label for="dni">DNI:</label>
                        <input class="text" type="text" id="dni" name="dni" required value="<?php echo $row["dni"]?>">
                    </div>
                    <div class="form-group">
                        <label for="nombres">Nombres:</label>
                        <input class="text" type="text" id="nombres" name="nombres" required value="<?php echo $row["nombres"]?>">
                    </div>
                    <div class="form-group">
                        <label for="apellidoPaterno">Apellido Paterno:</label>
                        <input class="text" type="text" id="apellidoPaterno" name="apellidoPaterno" required value="<?php echo $row["apellidoPaterno"]?>">
                    </div>
                    <div class="form-group">
                        <label for="apellidoMaterno">Apellido Materno:</label>
                        <input class="text" type="text" id="apellidoMaterno" name="apellidoMaterno" required value="<?php echo $row["apellidoMaterno"]?>">
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad:</label>
                        <select class="text" id="edad" name="edad" required>
                            <option value="<?php echo $row["edad"] ?>"><?php echo $row["edad"] ?></option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="celular">Celular:</label>
                        <input class="text" type="tel" id="celular" name="celular" required value="<?php echo $row["celular"]?>">
                    </div>
                    <div class="form-group">
                        <label for="correoPersonal">Correo Personal:</label>
                        <input class="text" type="email" id="correoPersonal" name="correoPersonal" required value="<?php echo $row["correoPersonal"]?>">
                    </div>
                    <div class="form-group">
                        <label for="correoInstitucional">Correo Institucional:</label>
                        <input class="text" type="email" id="correoInstitucional" name="correoInstitucional" required value="<?php echo $row["correoInstitucional"]?>">
                    </div>
                    <div class="form-group">
                        <label for="grado">Grado:</label>
                        <select class="text" id="grado" name="grado" required>
                            <option value="<?php echo $row["grado"] ?>"><?php echo $row["grado"] ?></option>
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
                            <option value="<?php echo $row["seccion"] ?>"><?php echo $row["seccion"] ?></option>
                            <option value="A">"A"</option>
                            <option value="B">"B"</option>
                            <option value="C">"C"</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="turno">Turno:</label>
                        <select class="text" id="turno" name="turno" required>
                            <option value="<?php echo $row["turno"] ?>"><?php echo $row["turno"] ?></option>
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
                        <input class="btn-enviar"  type="submit" name="modificar" value="Modificar">
                    </div>
                </form>
            </div>
        
        <?php
        }
        ?>
        <div class="regresar">
            <a href="tabla_registros.php">
                <span class="flecha">&larr;</span> Regresar
            </a>
        </div>
    </body>
    </html>
    <?php
    } else {
        
    }

?>
