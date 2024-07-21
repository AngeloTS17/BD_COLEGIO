<?php

include("../../connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userFormLogin = $_POST["correoInst"];
    $passFormLogin = $_POST["password"];

    $query_select = "SELECT * FROM estudiantes WHERE estudiantes.correoInstitucional = '$userFormLogin'";

    $result = mysqli_query($link, $query_select);

    if ($result) {
        if (mysqli_num_rows($result) == 0) {
            $message= "EL CORREO INSTITUCIONAL NO EXISTE";
        } else {
            $row = mysqli_fetch_array($result);
            $pass = $row["dni"];
            if ($passFormLogin == $pass) {
                $_SESSION["estudiante"] = $userFormLogin;
                header("Location: ../Frontend/lista.php");
            } else {
                $message= "CONTRASEÑA INCORRECTA";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTRANET</title>
    <link rel="stylesheet" href="login-1.css">
</head>
<body>
    <div class="container">
        <div class="message"><?php echo $message; ?></div>
        <a href="../../index.php" class="button">Regresar</a>
    </div>
</body>
</html>
