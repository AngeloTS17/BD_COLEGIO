<?php 

include("../../connection.php");
include("../../validacion.php");

$query_select = "SELECT * FROM estudiantes WHERE estudiantes.borrado = 0";
$result = mysqli_query($link, $query_select);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD ESTUDIANTES</title>
    <link rel="stylesheet" href="tabla_registros-1.css">
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
    <div class="titulo-be">
        <h1>REGISTRO DE ESTUDIANTES</h1>
    </div>
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
    <div class="link">
        <a href="form_matricular.php">Matricular</a>
        <a href="form_anadir.php">Añadir nuevo estudiante</a>
        <a href="tabla_registros_eliminados.php">Estudiantes eliminados</a>
    </div>
    <div class="buscar-container">
        <div class="form-group">
            <label for="buscar">Buscar: </label>
            <input type="text" id="buscar" class="text" placeholder="Buscar...">
        </div>
    </div>
    <div class="table-container">
        <?php if ($result && $result->num_rows > 0): ?>
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
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <?php while ($row = mysqli_fetch_array($result)): ?>
                        <tr>
                            <td><?php echo $row["dni"]; ?></td>
                            <td><?php echo $row["nombres"]; ?></td>
                            <td><?php echo $row["apellidoPaterno"]; ?></td>
                            <td><?php echo $row["apellidoMaterno"]; ?></td>
                            <td><?php echo $row["grado"]; ?></td>
                            <td><?php echo $row["seccion"]; ?></td>
                            <td><?php echo $row["turno"]; ?></td>
                            <td class="options">
                                <a href="informacion.php?id=<?php echo $row["id_estudiante"]; ?>" class="option-button">Información</a>
                                <a href="form_modificar.php?id=<?php echo $row["id_estudiante"]; ?>" class="option-button">Modificar</a>
                                <a href="../Backend/eliminar.php?id=<?php echo $row["id_estudiante"]; ?>" class="option-button">Eliminar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="link">
                <p>Registro sin datos</p>
            </div>
        <?php endif; ?>
    </div>
    <div class="regresar">
        <a href="../../Administradores/Frontend/seleccion.php"><span class="flecha">←</span>Regresar</a>
    </div>
</body>
</html>
