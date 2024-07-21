<?php 

include("../../connection.php");

include("../../validacion.php");

$query_select = "SELECT * FROM docentes WHERE docentes.borrado = 0";

$result = mysqli_query($link, $query_select);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD DOCENTES</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="tabla_registros.css">
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
    <div class="titulo-be">
        <h1>REGISTRO DE DOCENTES</h1>
    </div>
    <!-- Perfil de google -->
    <!-- Perfil de google -->
    <?php if (isset($_SESSION['user_image']) && isset($_SESSION['user_first_name']) && isset($_SESSION['user_last_name']) && isset($_SESSION['user_email_address'])): ?>
    <div class="profile-card">
        <?php
        echo '<img src="' . $_SESSION["user_image"] . '" class="profile-picture" alt="Profile Picture"/>';
        echo '<div>';
        echo '<h3 class="name">' . $_SESSION['user_first_name'] . ' ' . $_SESSION['user_last_name'] . '</h3>';
        echo '<h3 class="email">' . $_SESSION['user_email_address'] . '</h3>';
        echo '</div>';
        ?>
    </div>
    <?php endif; ?>
    <!-- Perfil de google -->
    <!-- Perfil de google -->
    <div class="link">
        <a href="form_anadir.php">Añadir nuevo docente</a>
        <a href="tabla_registros_eliminados.php">Docentes eliminados</a>
    </div>
    
    <div class="buscar-container" >
        <div class="form-group" >
            <label for="buscar">Buscar: </label>
            <input type="text" id="buscar" placeholder="Buscar..." class="text">
        </div>
    </div>

    <div class="table-container" >
    <?php if ($result) {
          if ($result -> num_rows > 0) {
        
    ?>
        <table>
            <thead>
                <tr>
                    <th>DNI</th>
                    <th>NOMBRES</th>
                    <th>APELLIDO PATERNO</th>
                    <th>APELLIDO MATERNO</th>
                    <!-- <th>ASIGNATURA</th> -->
                    <th>OPCIONES</th>
                </tr>
            </thead>
            <tbody id="table-body">
            <?php
            while ($row = mysqli_fetch_array($result)) {
                $id = $row["id_docente"];
                $dni = $row["dni"];
                $nombres = $row["nombres"];
                $apellidoPaterno = $row["apellidoPaterno"];
                $apellidoMaterno = $row["apellidoMaterno"];
                // $asignatura = $row["asignatura"];
                ?>

                <tr>
                    <td><?php echo $dni ?></td>
                    <td><?php echo $nombres ?></td>
                    <td><?php echo $apellidoPaterno ?></td>
                    <td><?php echo $apellidoMaterno ?></td>
                    <!-- <td><?php echo $asignatura ?></td> -->
                    <td>
                        <a href="informacion.php?id=<?php echo $id; ?>" class="option-button">Información</a>
                        <a href="form_modificar.php?id=<?php echo $id; ?>" class="option-button">Modificar</a>
                        <a href="../Backend/eliminar.php?id=<?php echo $id; ?>" class="option-button">Eliminar</a>
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
        <a href="../../Administradores/Frontend/seleccion.php"><span class="flecha">←</span>Regresar</a>
    </div>
    
    
</body>
</html>