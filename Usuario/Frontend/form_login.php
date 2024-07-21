<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTRANET</title>
    <link rel="stylesheet" href="form_login-1.css">
</head>
<body>
    <div class="container" >
        <h1>INICIO DE SESIÓN</h1>
        <form action="../Backend/login.php" method="POST">
            <div class="form-group" >
                <label for="correoInst">Correo Institucional:</label>
                <input type="text" name="correoInst" id="correoInst">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="form-group-enviar">
                <input type="submit" name="login" value="Iniciar Sesión">
            </div>
        </form>
        <a href="../../index.php" class="back-link">Volver</a>
    </div>
    
</body>
</html>