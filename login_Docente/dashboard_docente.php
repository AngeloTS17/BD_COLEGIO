<?php
session_start();

if (!isset($_SESSION['id_docente'])) {
    header("Location: login_docente.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Docente</title>
</head>
<body>
    <h2>Bienvenido, Docente</h2>
    <a href="asistencia_docente.php">Marcar Asistencia</a><br>
    <a href="notas_docente.php">Subir Notas</a><br>
    <a href="logout_docente.php">Cerrar Sesión</a>
</body>
</html>
