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
    $id_docente = $_SESSION['id_docente'];
    $id_curso = $_POST['id_curso'];

    foreach ($_POST['notas'] as $id_estudiante => $nota) {
        $sql = "INSERT INTO notas (id_estudiante, id_docente, id_curso, nota)
                VALUES ('$id_estudiante', '$id_docente', '$id_curso', '$nota')
                ON DUPLICATE KEY UPDATE nota='$nota'";

        if ($conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    echo "Notas registradas exitosamente";
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
    <title>Subir Notas</title>
</head>
<body>
<a href="dashboard_docente.php">Regresar</a>
    <h2>Subir Notas</h2>
    <form method="post" action="notas_docente.php">
        <label for="id_curso">Curso:</label>
        <select name="id_curso" id="id_curso" required>
            <?php while ($row = $result_cursos->fetch_assoc()) { ?>
                <option value="<?php echo $row['id_curso']; ?>"><?php echo $row['nombre_curso']; ?></option>
            <?php } ?>
        </select><br><br>

        <table border="1">
            <tr>
                <th>Estudiante</th>
                <th>Nota</th>
            </tr>
            <?php while ($row = $result_estudiantes->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['nombres'] . " " . $row['apellidoPaterno']. " " . $row['apellidoMaterno']; ?></td>
                    <td>
                        <input type="number" name="notas[<?php echo $row['id_estudiante']; ?>]" min="0" max="20" required>
                    </td>
                </tr>
            <?php } ?>
        </table><br>

        <input type="submit" value="Registrar Notas">
    </form>
</body>
</html>
