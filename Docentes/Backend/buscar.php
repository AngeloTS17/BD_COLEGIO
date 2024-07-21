<?php

include("../../connection.php");

include("../../validacion.php");

if (isset($_POST['query'])) {
    $query = $link->real_escape_string($_POST['query']);
    $query_select = "SELECT * FROM docentes WHERE docentes.borrado = 0 AND (dni LIKE '%$query%' OR nombres LIKE '%$query%' OR apellidoPaterno LIKE '%$query%' OR apellidoMaterno LIKE '%$query%')";
    $result = mysqli_query($link, $query_select);

    if ($result) {
        if ($result->num_rows > 0) {
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
                    <td>
                        <a href="informacion.php?id=<?php echo $id; ?>" class="option-button">Información</a>
                        <a href="form_modificar.php?id=<?php echo $id; ?>" class="option-button">Modificar</a>
                        <a href="../Backend/eliminar.php?id=<?php echo $id; ?>" class="option-button">Eliminar</a>
                    </td>
                </tr>

                <?php
            }
        } else {
            echo "<tr><td colspan='8'>No se encontraron resultados</td></tr>";
        }
    }
}

?>
