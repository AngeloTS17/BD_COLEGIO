<?php
session_start();

if (!isset($_SESSION['id_docente'])) {
    header("Location: login_docente.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "colegio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha = $_POST['fecha'];
    $id_docente = $_SESSION['id_docente'];
    $id_curso = $_POST['id_curso'];
    
    foreach ($_POST['asistencia'] as $id_estudiante => $estado) {
        $sql = "INSERT INTO asistencia (id_estudiante, id_docente, id_curso, fecha, estado)
                VALUES ('$id_estudiante', '$id_docente', '$id_curso', '$fecha', '$estado')";

        if ($conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    echo "Asistencia registrada exitosamente";
}

$sql_estudiantes = "SELECT id_estudiante, nombres, apellidoPaterno, apellidoMaterno FROM estudiantes";
$result_estudiantes = $conn->query($sql_estudiantes);

$sql_cursos = "SELECT id_curso, nombre_curso FROM cursos";
$result_cursos = $conn->query($sql_cursos);

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Marcar Asistencia</title>
</head>
<body>
    <a href="dashboard_docente.php">Regresar</a>
    <h2>Marcar Asistencia</h2>
    <form method="post" action="asistencia_docente.php">
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" required><br><br>

        <label for="id_curso">Curso:</label>
        <select name="id_curso" id="id_curso" required>
            <?php while ($row = $result_cursos->fetch_assoc()) { ?>
                <option value="<?php echo $row['id_curso']; ?>"><?php echo $row['nombre_curso']; ?></option>
            <?php } ?>
        </select><br><br>

        <table border="1">
            <tr>
                <th>Estudiante</th>
                <th>Asistencia</th>
            </tr>
            <?php while ($row = $result_estudiantes->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['nombres'] . " " . $row['apellidoPaterno']. " " . $row['apellidoMaterno']; ?></td>
                    <td>
                        <select name="asistencia[<?php echo $row['id_estudiante']; ?>]" required>
                            <option value="Presente">Presente</option>
                            <option value="Tardanza">Tardanza</option>
                            <option value="Falta">Falta</option>
                        </select>
                    </td>
                </tr>
            <?php } ?>
        </table><br>

        <input type="submit" value="Registrar Asistencia">
    </form>
</body>
</html>
