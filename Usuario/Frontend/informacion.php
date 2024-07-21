<?php

include("../../connection.php");

include("../Backend/validacionEst.php");

$idEst = $_GET["id"];
$query_select = "SELECT * FROM estudiantes WHERE estudiantes.id_estudiante = $idEst";
$result = mysqli_query($link, $query_select);

if ($result) {
    $row = mysqli_fetch_array($result);
    
    if ($row["dni"] != null) {
        $dni = $row["dni"];
        $nombres = $row["nombres"];
        $apellidoPaterno = $row["apellidoPaterno"];
        $apellidoMaterno = $row["apellidoMaterno"];
        $edad = $row["edad"];
        $celular = $row["celular"];
        $correoPersonal = $row["correoPersonal"];
        $correoInstitucional = $row["correoInstitucional"];
        $grado = $row["grado"];
        $seccion = $row["seccion"];
        $turno = $row["turno"];
        $foto = $row["foto"];
    }
}

// Consulta para obtener las asignaturas del estudiante
$query_asignaturas = "SELECT cursos.nombre_curso AS asignatura 
                      FROM matriculas 
                      JOIN cursos ON matriculas.id_curso = cursos.id_curso 
                      WHERE matriculas.id_estudiante = $idEst";
$result_asignaturas = mysqli_query($link, $query_asignaturas);

$asignatura = ""; // Variable para almacenar la asignatura


if ($result_asignaturas) {
    // Verificar si hay filas devueltas por la consulta
    if (mysqli_num_rows($result_asignaturas) > 0) {
        // Obtener solo la primera fila de la consulta
        $row_asignatura = mysqli_fetch_assoc($result_asignaturas);
        $asignatura = $row_asignatura['asignatura']; // Obtener la asignatura
    } else {
        // Si no hay asignaturas asociadas, asignar un guion "-"
        $asignatura = "-";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD COLEGIO</title>
    <link rel="stylesheet" href="informacion-5.css">
</head>
<body>

    <h1>INFORMACIÓN COMPLETA DEL ESTUDIANTE</h1>
    <main class="container">
        <section class="section nombre">
            <div class="title">
                <p>NOMBRE COMPLETO</p>
            </div>
            <div class="text">
                <p><?php echo "$nombres $apellidoPaterno $apellidoMaterno"; ?></p>
            </div>
        </section>
        <section class="section dni">
            <div class="title">
                <p>DNI</p>
            </div>
            <div class="text">
                <p><?php echo "$dni"; ?></p>
            </div>
        </section>
        <section class="section grado">
            <div class="title">
                <p>GRADO</p>
            </div>
            <div class="text">
                <p><?php echo "$grado"; ?></p>
            </div>
        </section>
        <section class="section seccion">
            <div class="title">
                <p>SECCIÓN</p>
            </div>
            <div class="text">
                <p><?php echo "$seccion"; ?></p>
            </div>
        </section>
        <section class="section turno">
            <div class="title">
                <p>TURNO</p>
            </div>
            <div class="text">
                <p><?php echo "$turno"; ?></p>
            </div>
        </section>
        <section class="section edad">
            <div class="title">
                <p>EDAD</p>
            </div>
            <div class="text">
                <p><?php echo "$edad"; ?></p>
            </div>
        </section>
        <section class="section numcel">
            <div class="title">
                <p>NÚMERO DE CELULAR</p>
            </div>
            <div class="text">
                <p><?php echo "$celular"; ?></p>
            </div>
        </section>
        <section class="section correoPer">
            <div class="title">
                <p>CORREO PERSONAL</p>
            </div>
            <div class="text">
                <p><?php echo "$correoPersonal"; ?></p>
            </div>
        </section>
        <section class="section correoInst">
            <div class="title">
                <p>CORREO INSTITUCIONAL</p>
            </div>
            <div class="text">
                <p><?php echo "$correoInstitucional"; ?></p>
            </div>
        </section>
        <section class="section foto">
            <div class="title">
                <p>FOTO DE PERFIL</p>
            </div>
            <div class="text">
                <div class="img-container">
                <img src="../../Estudiantes/Backend/Fotos/<?php echo $foto; ?>">
                </div>
            </div>
        </section>
        <section class="section asig">
            <div class="title">
                <p>ASIGNATURAS</p>
            </div>
            <div class="text">
                <p><?php echo $asignatura; ?></p>
            </div>
        </section>
    </main>

    <div class="regresar">
        <a href="lista.php">
            <span class="flecha">&larr;</span> Regresar
        </a>
    </div>

</body>
</html>
