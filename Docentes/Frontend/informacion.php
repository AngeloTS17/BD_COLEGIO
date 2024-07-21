<?php

include("../../connection.php");

include("../../validacion.php");

$idDoc = $_GET["id"];

$query_select = "SELECT * FROM docentes WHERE docentes.id_docente = $idDoc";

$result = mysqli_query($link, $query_select);

if ($result) {

    $row = mysqli_fetch_array($result);
    
    if ($row["dni"] != null) {

        $dni = $row["dni"];
        $nombres = $row["nombres"];
        $apellidoPaterno = $row["apellidoPaterno"];
        $apellidoMaterno = $row["apellidoMaterno"];
        // $asignatura = $row["asignatura"];
        $celular = $row["celular"];
        $correo = $row["correo"];
        $diaClase = $row["dia_clase"];
        $foto = $row["foto"];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD DOCENTES</title>
    <link rel="stylesheet" href="informacion.css">
</head>
<body>
    <div class="regresar" >
        <a href="tabla_registros.php"><span class="flecha">&larr;</span>Regresar</a> 
    </div>
    
    <h1>INFORMACIÓN DETALLADA DEL DOCENTE</h1>
    <main class="container">
        <section class="section nombre" >
            <div class="title" >
                <p>Nombre Completo</p>
            </div>
            <div class="text" >
                <p><?php echo $nombres . " " .$apellidoPaterno . " " . $apellidoMaterno; ?></p>
            </div>
        </section>
        
        <section class="section dni" >
            <div class="title" >
                <p>DNI:</p>
            </div>
            <div class="text" >
                <p><?php echo $dni; ?></p>
            </div>
        </section>
        
        <!-- <div>
            <h2>Asignatura:</h2>
            <p><?php echo $asignatura; ?></p>
        </div> -->
        <section class="section celular" >
            <div class="title" >
            <p>Celular:</p>
            </div>
            <div class="text" >
                <p><?php echo $celular; ?></p>
            </div>
        </section>
        
        <section class="section correo">
            <div class="title" >
                <p>Correo electrónico:</p>    
            </div>
            <div class="text" >
                <p><?php echo $correo; ?></p>
            </div> 
        </section>
        <section class="section diaClase" >
            <div class="title" >
                <p>Día de Clase:</p>
            </div>
            <div class="text" >
                <p><?php echo $diaClase; ?></p>
            </div>
        </section>
        
        <section class="section foto" >
            <div class="title" >
                <p>FOTO DE PERFIL</p>
            </div>
            <div class="text" >
                <div class="img-container" >
                    <img src="../Backend/Fotos/<?php echo $foto; ?>">
                </div>
            </div>
        </section>
        

        
    </main>
</body>
</html>