<?php

include("../../connection.php");

include("../../validacion.php");

if (isset($_POST['query'])) {
    $query = $link->real_escape_string($_POST['query']);
    $query_select = "SELECT * FROM estudiantes WHERE estudiantes.borrado = 1 AND (dni LIKE '%$query%' OR nombres LIKE '%$query%' OR apellidoPaterno LIKE '%$query%' OR apellidoMaterno LIKE '%$query%' OR grado LIKE '%$query%' OR seccion LIKE '%$query%' OR turno LIKE '%$query%')";
    $result = mysqli_query($link, $query_select);

    if ($result) {
        if ($result->num_rows > 0) {
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
                        <a href="../Backend/restaurar.php?id=<?php echo $id; ?>">Restaurar</a>
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
