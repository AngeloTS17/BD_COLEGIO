<?php
include("../../connection.php");
include("../../validacion.php");

$query_select = "SELECT * FROM estudiantes WHERE estudiantes.borrado = 1";
$result = mysqli_query($link, $query_select);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes Eliminados</title>
    <link rel="stylesheet" href="tabla_registros_eliminados.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#buscar').on('input', function(){
                var query = $(this).val();
                $.ajax({
                    url: '../Backend/buscar_eliminados.php',
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
        <h1>ESTUDIANTES - BORRADOS</h1>
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
    <?php if ($result && $result->num_rows > 0): ?>
        <div class="buscar-container">
            <div class="form-group">
                <input type="text" id="buscar" placeholder="Buscar..." class="text">
            </div>
        </div>

        <div class="table-container">
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
                        <td>
                            <a href="../Backend/restaurar.php?id=<?php echo $row["id_estudiante"]; ?>" class="option-button">Restaurar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p class="message">Registro sin datos</p>
    <?php endif; ?>

    <div class="regresar">
        <a href="tabla_registros.php" class="link"><span class="flecha">←</span>Regresar</a>
    </div>
</body>
</html>
