<?php

// include("../../connection.php");

include("../Backend/login-1.php");

include("../../validacion.php");

// Datos de sesión (descomentarlos si son necesarios para depuración)
// echo $_SESSION["admin"];
// echo "Token: ". $_SESSION['access_token']."<br>";
// echo "User_First_Name: ". $_SESSION['user_first_name']."<br>";
// echo "User_Last_Name: ". $_SESSION['user_last_name']."<br>";
// echo "User_Email_Address: ". $_SESSION['user_email_address']."<br>";
// echo "User_Image: ". $_SESSION['user_image']."<br>";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD COLEGIO</title>
    <link rel="stylesheet" href="seleccion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
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
    <div class="cabeza">
        <h1>SELECCIONE BASE DE DATOS</h1>
    </div>
    <div class="container">
        <div class="cards">
            <div class="card">
                <a href="../../Estudiantes/Frontend/tabla_registros.php" class="card-link">
                    <img src="../../imagenes/Estudiante_1.png" alt="Estudiantes" class="card-image">
                    <div class="card-content">
                        <h2>REGISTROS DE ESTUDIANTES</h2>
                    </div>
                </a>
            </div>
            <div class="card card2">
                <a href="../../Docentes/Frontend/tabla_registros.php" class="card-link">
                    <img src="../../imagenes/Profe_1.png" alt="Docentes" class="card-image">
                    <div class="card-content">
                        <h2>REGISTROS DE DOCENTES</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="logout">
            <a href="../Backend/logout.php" class="logout-link">Cerrar Sesión</a>
        </div>
    </div>
</body>
</html>
