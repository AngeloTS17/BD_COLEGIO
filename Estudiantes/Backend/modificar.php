<?php
include("../../connection.php");
include("../../validacion.php");

$message = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $idEst = $_POST["id"];
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
        $allowed_types = array("image/jpg", "image/jpeg", "image/png", "image/webp", "");

        if (!in_array($mimetype, $allowed_types)) {
            $message = "ERROR: Se ha ingresado un tipo de imagen no válido.";
        }

        if (!is_dir("Fotos")) {
            mkdir("Fotos", 0777);
        }

        if ($filename != "") {
            move_uploaded_file($tempname, "Fotos/" . $filename);
            $query_modificar = "UPDATE estudiantes SET
                dni = '$dniForm',
                nombres = '$nombresForm',
                apellidoPaterno = '$apellidoPaternoForm',
                apellidoMaterno = '$apellidoMaternoForm',
                edad = '$edadForm',
                celular = '$celularForm',
                correoPersonal = '$correoPersonalForm',
                correoInstitucional = '$correoInstitucionalForm',
                grado = '$gradoForm',
                seccion = '$seccionForm',
                turno = '$turnoForm',
                foto = '$filename' WHERE estudiantes.id_estudiante = '$idEst'";
        } else {
            $query_modificar = "UPDATE estudiantes SET
                dni = '$dniForm',
                nombres = '$nombresForm',
                apellidoPaterno = '$apellidoPaternoForm',
                apellidoMaterno = '$apellidoMaternoForm',
                edad = '$edadForm',
                celular = '$celularForm',
                correoPersonal = '$correoPersonalForm',
                correoInstitucional = '$correoInstitucionalForm',
                grado = '$gradoForm',
                seccion = '$seccionForm',
                turno = '$turnoForm' WHERE estudiantes.id_estudiante = '$idEst'";
        }

        $result = mysqli_query($link, $query_modificar);

        if ($result) {
            $message = "ESTUDIANTE MODIFICADO";
        } else {
            $message = "ERROR EN EL SISTEMA";
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
        <?php if (!empty($message)): ?>
            <div class="message"><?php echo $message; ?></div>
            <a href="../Frontend/tabla_registros.php" class="button">Regresar</a>
        <?php endif; ?>
    </div>
</body>
</html>
