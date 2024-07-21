<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>REGISTRAR CUENTA</h1>
    <form action="../Backend/singup.php" method="POST">
        <div>
            <label for="username">Usuario:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="text" name="password" id="password">
        </div>
        <div>
            <input type="submit" name="register" value="Registrarse">
        </div>
    </form>
    <a href='../../index.php'>Regresar</a>
</body>
</html>