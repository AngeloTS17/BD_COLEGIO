<?php
include("../../connection.php");
include("../../validacion.php");

$result_message = ""; // Variable para almacenar el mensaje de resultado

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $dniForm = $_POST["dni"];
    $nombresForm = $_POST["nombres"];
    $apellidoPaternoForm = $_POST["apellidoPaterno"];
    $apellidoMaternoForm = $_POST["apellidoMaterno"];
    $edadForm = $_POST["edad"];
    $celularForm = $_POST["celular"];
    $correoPersonalForm = $_POST["correoPersonal"];
    $correoInstitucionalForm = $_POST["correoInstitucional"];
    $gradoForm = $_POST["grado"];
    $seccionForm = $_POST["seccion"];
    $turnoForm = $_POST["turno"];

    if (isset($_FILES["foto"])) {
        $file = $_FILES["foto"];
        $filename = $file["name"];
        $mimetype = $file["type"];
        $tempname = $file["tmp_name"];

        $allowed_types = array("image/jpg", "image/jpeg", "image/png", "image/webp");

        if (!in_array($mimetype, $allowed_types)) {
            $result_message = "ERROR: Se ha ingresado un tipo de imagen no válido.";
        } else {
            if (!is_dir("Fotos")) {
                mkdir("Fotos", 0777);
            }

            if ($filename != "") {
                move_uploaded_file($tempname, "Fotos/" . $filename);
                $query_insert = "INSERT INTO estudiantes (dni, nombres, apellidoPaterno, apellidoMaterno, edad, celular, correoPersonal, correoInstitucional, grado, seccion, turno, foto) VALUES ('$dniForm', '$nombresForm', '$apellidoPaternoForm', '$apellidoMaternoForm', '$edadForm', '$celularForm', '$correoPersonalForm', '$correoInstitucionalForm', '$gradoForm', '$seccionForm', '$turnoForm', '$filename')";
            } else {
                $query_insert = "INSERT INTO estudiantes (dni, nombres, apellidoPaterno, apellidoMaterno, edad, celular, correoPersonal, correoInstitucional, grado, seccion, turno, foto) VALUES ('$dniForm', '$nombresForm', '$apellidoPaternoForm', '$apellidoMaternoForm', '$edadForm', '$celularForm', '$correoPersonalForm', '$correoInstitucionalForm', '$gradoForm', '$seccionForm', '$turnoForm', 'perfil-de-usuario.webp')";
            }

            $result = mysqli_query($link, $query_insert);

            if ($result) {
                $result_message = "ESTUDIANTE REGISTRADO <br> <a href='../Frontend/tabla_registros.php' class='button'>Regresar</a>";
            } else {
                $result_message = "Error en el sistema";
            }
        }
    }
} else {
    $result_message = "HUBO ERROR EN EL ENVÍO DEL FORMULARIO";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AÑADIR ESTUDIANTE</title>
    <link rel="stylesheet" href="eliminar.css">
</head>
<body>
    <div class="container">
        <div class="message"><?php echo $result_message; ?></div>
    </div>
</body>
</html>
