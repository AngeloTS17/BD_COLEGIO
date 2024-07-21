<?php

include("../../connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query_insert = "INSERT INTO administradores (usuario, contra) VALUES ('$username', '$hashedPassword')";

    // $result = mysqli_query($link, $query_insert);
    try {
        $result = mysqli_query($link, $query_insert);

        if ($result) {
        echo "USUARIO REGISTRADO";
        echo "<a href='../../index.php'>Regresar</a>";
    }
    } catch (mysqli_sql_exception $e) {
        echo "ERROR EN EL SISTEMA: ". $e->getMessage() ."";
    }
}

?>