<?php
    include("../Backend/googleConfig.php");

    $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="../../imagenes/logo_google.png" alt="Google Logo">Iniciar con Google</a>';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD COLEGIO</title>
    <link rel="stylesheet" href="form_login-1.css">
</head>
<body>
    <div class="container">
        <h1>INICIO DE SESIÓN</h1>
        <form action="../Backend/login.php" method="POST">
            <div class="form-group">
                <label for="user">Usuario:</label>
                <input type="text" name="user" id="user">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="form-group-enviar">
                <input type="submit" name="login" value="Iniciar Sesión">
            </div>
        </form>
        <div class="google-login">
            <?php echo $login_button; ?>
        </div>
        <a href="../../index.php" class="back-link">Volver</a>
    </div>
</body>
</html>
