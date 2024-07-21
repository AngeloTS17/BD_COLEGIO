<?php

include("../../connection.php");

include("../../validacion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $dniForm = $_POST["dni"];
    $nombresForm = $_POST["nombres"];
    $apellidoPaternoForm = $_POST["apellidoPaterno"];
    $apellidoMaternoForm = $_POST["apellidoMaterno"];
    $celularForm = $_POST["celular"];
    $correoForm = $_POST["correo"];
    // $asignaturaForm = $_POST["asignatura"];
    $diaClaseForm = $_POST["dia_clase"];

    if (isset($_FILES["foto"])) {
        $file = $_FILES["foto"];
        $filename = $file["name"];
        $mimetype = $file["type"];
        $tempname = $file["tmp_name"];

        $allowed_types = array("image/jpg", "image/jpeg", "image/png", "image/webp", "");

        if (!in_array($mimetype, $allowed_types)) {
            echo "ERROR: Se ha ingresado un tipo de imagen no válido.";
        }

        if (!is_dir("Fotos")){
            mkdir("Fotos", 0777);
        }

        if ($filename != "") {
            move_uploaded_file($tempname,"Fotos/".$filename);

            $query_insert = "INSERT INTO docentes (dni, nombres, apellidoPaterno, apellidoMaterno, celular, correo, dia_clase, foto) VALUES ('$dniForm', '$nombresForm', '$apellidoPaternoForm', '$apellidoMaternoForm', '$celularForm', '$correoForm', '$diaClaseForm', '$filename')";
        } else {
            $query_insert = "INSERT INTO docentes (dni, nombres, apellidoPaterno, apellidoMaterno, celular, correo, dia_clase, foto) VALUES ('$dniForm', '$nombresForm', '$apellidoPaternoForm', '$apellidoMaternoForm', '$celularForm', '$correoForm', '$diaClaseForm', 'perfil-de-usuario.webp')";
        }

        $result = mysqli_query($link, $query_insert);

        if ($result) {
            $result_message= "DOCENTE REGISTRADO <br> <a href='../Frontend/tabla_registros.php' class='button'>Regresar</a>";
        } else {
            $result_message= "Error en el sistema";
        }       
    }
} else {
    $result_message= "HUBO ERROR EN EL ENVÍO DEL FORMULARIO";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AÑADIR DOCENTE</title>
    <link rel="stylesheet" href="anadir.css">
</head>
<body>
    <div class="container">
        <div class="message"><?php echo $result_message; ?></div>
    </div>
</body>
</html>