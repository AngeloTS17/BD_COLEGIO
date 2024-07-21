<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "colegio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $dni = $_POST['dni'];

    $sql = "SELECT id_docente, correo, dni FROM docentes WHERE correo='$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($dni == $row['dni']) {
            $_SESSION['id_docente'] = $row['id_docente'];
            header("Location: dashboard_docente.php");
            exit();
        } else {
            echo "DNI incorrecto";
        }
    } else {
        echo "Correo no encontrado";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión - Docente</title>
</head>
<body>
    <!-- se inicia con el correo y dni que ya estan en la BD :,v -->
    <h2>Inicio de Sesión - Docente</h2>
    <form method="post" action="login_docente.php">
        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo" required><br><br>
        <label for="dni">DNI:</label>
        <input type="text" name="dni" id="dni" required><br><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <a href="../index.php">Salir</a>
</body>
</html>
