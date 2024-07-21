<?php 

include("../../connection.php");

include("../Backend/validacionEst.php");

$query_select = "SELECT * FROM estudiantes WHERE estudiantes.borrado = 0";

$result = mysqli_query($link, $query_select);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTRANET</title>
    <link rel="stylesheet" href="lista.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#buscar').on('input', function(){
                var query = $(this).val();
                $.ajax({
                    url: '../Backend/buscar.php',
                    method: 'POST',
                    data: { query: query },
                    success: function(response) {
                        $('#table-body').html(response);
                    }
                });
            });
        });
    </script>
</head>
<body>
    <div class="titulo-be" >
        <a href="lista.php"><h1>LISTA DE ESTUDIANTES</h1></a>    
    </div>
     
    <div class="buscar-container" >
        <div class="form-group" >
            <input class="text" type="text" id="buscar" placeholder="Buscar...">
        </div>
    </div>
    <div class="table-container" >
    <?php
        if ($result) {
            if ($result -> num_rows > 0) {
        ?>
            <table>
                <thead>
                    <tr>
                        <th>DNI</th>
                        <th>NOMBRES</th>
                        <th>APELLIDO PATERNO</th>
                        <th>APELLIDO MATERNO</th>
                        <th>GRADO</th>
                        <th>SECCIÓN</th>
                        <th>TURNO</th>
                        <th>OPCIÓN</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row["id_estudiante"];
                    $dni = $row["dni"];
                    $nombres = $row["nombres"];
                    $apellidoPaterno = $row["apellidoPaterno"];
                    $apellidoMaterno = $row["apellidoMaterno"];
                    $grado = $row["grado"];
                    $seccion = $row["seccion"];
                    $turno = $row["turno"];
                    ?>

                    <tr>
                        <td><?php echo $dni ?></td>
                        <td><?php echo $nombres ?></td>
                        <td><?php echo $apellidoPaterno ?></td>
                        <td><?php echo $apellidoMaterno ?></td>
                        <td><?php echo $grado ?></td>
                        <td><?php echo $seccion ?></td>
                        <td><?php echo $turno ?></td>
                        <td>
                            <a href="informacion.php?id=<?php echo $id; ?>" class="option-button">Información</a>
                        </td>
                    </tr>

                    <?php
                }
                ?>
                </tbody>
            </table>
               <?php
                } else {
                    echo "Registro sin datos";
                }
                }
            ?> 
            
    </div>
    <div class="regresar" >
        <a href="../Backend/logout.php">Cerrar Sesión</a>
    </div>
    
    
</body>
</html>