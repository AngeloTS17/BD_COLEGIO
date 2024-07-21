<?php

include("../../connection.php");

include("../../validacion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $idDoc = $_POST["id"];

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

            $query_modificar = "UPDATE docentes SET
            dni = '$dniForm',
            nombres = '$nombresForm',
            apellidoPaterno = '$apellidoPaternoForm',
            apellidoMaterno = '$apellidoMaternoForm',
            -- asignatura = '$asignaturaForm',
            celular = '$celularForm',
            correo = '$correoForm',
            dia_clase = '$diaClaseForm',
            foto = '$filename' WHERE docentes.id_docente = '$idDoc'";
        } else {
            $query_modificar = "UPDATE docentes SET
            dni = '$dniForm',
            nombres = '$nombresForm',
            apellidoPaterno = '$apellidoPaternoForm',
            apellidoMaterno = '$apellidoMaternoForm',
            celular = '$celularForm',
            correo = '$correoForm',
            dia_clase = '$diaClaseForm' WHERE docentes.id_docente = '$idDoc'";
        }

        $result = mysqli_query($link, $query_modificar);

        if ($result) {
            $message= "Docente modificado";
        } else {
            $message= "Error en el sistema";
        }       
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Estudiante</title>
    <link rel="stylesheet" href="modificar.css">
</head>
<body>
    <div class="container">
        <div class="message"><?php echo $message; ?></div>
        <a href="../Frontend/tabla_registros.php" class="button">Regresar</a>
    </div>
</body>
</html>