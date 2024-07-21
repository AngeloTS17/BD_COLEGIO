<?php

include("../../connection.php");

include("../../validacion.php");

$idDoc = $_GET["id"];

$query_select = "SELECT * FROM docentes WHERE docentes.id_docente = $idDoc";

$result = mysqli_query($link, $query_select);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD DOCENTES</title>
    <link rel="stylesheet" href="form_modificar.css">
</head>
<body>
    
    <?php
    if ($result) {
    
        $row = mysqli_fetch_array($result);
        if ($row["id_docente"] != null) {
            
        ?>
        <div class="container" >
            <h1 class="title" >MODIFICAR DOCENTE</h1>
            <form action="../Backend/modificar.php" method="POST" enctype="multipart/form-data">
                
                <input type="hidden" name="id" id="id" value="<?php echo $idDoc; ?>">

                <div class="form-group" >
                    <label for="dni">DNI:</label>
                    <input class="text" type="text" name="dni" id="dni" required value="<?php echo $row['dni'];?>">
                </div>
                <div class="form-group">
                    <label for="nombres">Nombres:</label>
                    <input class="text" type="text" name="nombres" id="nombres" required value="<?php echo $row['nombres'];?>">
                </div>
                <div class="form-group">
                    <label for="apellidoPaterno">Apellido Paterno:</label>
                    <input class="text" type="text" name="apellidoPaterno" id="apellidoPaterno" required value="<?php echo $row['apellidoPaterno'];?>">
                </div>
                <div class="form-group">
                    <label for="apellidoMaterno">Apellido Materno:</label>
                    <input class="text" type="text" name="apellidoMaterno" id="apellidoMaterno" required value="<?php echo $row['apellidoMaterno'];?>">
                </div>
                <div class="form-group">
                    <label for="celular">Celular:</label>
                    <input class="text" type="text" name="celular" id="celular" required value="<?php echo $row['celular'];?>">
                </div>
                <div class="form-group">
                    <label for="correo">Correo Electrónico:</label>
                    <input class="text" type="text" name="correo" id="correo" required value="<?php echo $row['correo'];?>">
                </div>
                <!-- <div class="form-group">
                    <label for="asignatura">Asignatura:</label>
                    <input class="text" type="text" name="asignatura" id="asignatura" required value="<?php echo $row['asignatura'];?>">
                </div> -->
                <div class="form-group">
                    <label for="dia_clase">Día de Clase:</label>
                    <select class="text" name="dia_clase" id="dia_clase" required>
                        <option value="<?php echo $row['dia_clase'];?>"><?php echo $row["dia_clase"];?></option>
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
                    <input class="btn-enviar" type="submit" name="enviar" id="enviar" value="Modificar">
                </div>
            </form> 
        </div>
           
        
        <?php
        }
        ?>
        <div class="regresar" >
            <a href="tabla_registros.php"><span class="flecha">&larr;</span> Regresar</a>
        </div>
        
    </body>
    </html>
    <?php
    } else {
        
    }

?>
