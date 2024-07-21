<?php
include("../../connection.php");
include("../Backend/googleConfig.php");

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userFormLogin = $_POST["user"];
    $passFormLogin = $_POST["password"];

    $query_select = "SELECT * FROM administradores WHERE administradores.usuario = '$userFormLogin'";
    $result = mysqli_query($link, $query_select);

    if ($result) {
        if (mysqli_num_rows($result) == 0) {
            $message = "EL USUARIO NO EXISTE";
        } else {
            $row = mysqli_fetch_array($result);
            $pass = $row["contra"];
            if (password_verify($passFormLogin, $pass)) {
                $_SESSION["admin"] = $userFormLogin;
                header("Location: ../Frontend/seleccion.php");
                exit();
            } else {
                $message = "CONTRASEÑA INCORRECTA";
            }
        }
    }
}

if (isset($_GET["code"])) {
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

    if (!isset($token['error'])) {
        $google_client->setAccessToken($token['access_token']);
        $_SESSION['access_token'] = $token['access_token'];
        $google_service = new Google_Service_Oauth2($google_client);
        $data = $google_service->userinfo->get();

        if (!empty($data['given_name'])) {
            $_SESSION['user_first_name'] = $data['given_name'];
        }
        if (!empty($data['family_name'])) {
            $_SESSION['user_last_name'] = $data['family_name'];
        }
        if (!empty($data['email'])) {
            $_SESSION['user_email_address'] = $data['email'];
        }
        if (!empty($data['picture'])) {
            $_SESSION['user_image'] = $data['picture'];
        }
    } 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error de Inicio de Sesión</title>
    <link rel="stylesheet" href="login-5.css">
</head>
<body>
    <div class="container">
        <div class="card error-card">
            <h2><?php echo $message; ?></h2>
            <a href="../../index.php" class="back-link">Volver</a>
        </div>
    </div>
</body>
</html>