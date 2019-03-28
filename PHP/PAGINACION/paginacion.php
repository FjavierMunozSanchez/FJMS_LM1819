<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>

<?php
if (isset($_REQUEST['posicion'])) {
    $inicio = $_REQUEST['posicion'];
} else {
    $inicio = 0;
}


$conexion = mysqli_connect("localhost", "root", "", "cursophp")
or die("Problemas con la conexión");

$registros = mysqli_query($conexion, "SELECT idAlumno, nombre, mail, codigocurso, nombrecurso 
    FROM alumnos AS alum inner join cursos AS cur ON alum.codigocurso = cur.idCurso LIMIT $inicio,2")
        or die ("Problemas en la consulta:" .mysqli_error($conexion));
$contador = 0;
        while ($reg = mysqli_fetch_array($registros)) {
            echo "Nombre: " .$reg['nombre']. "<br>";
            echo "Mail: " .$reg['mail']. "<br>";
            echo "Curso: " .$reg['nombrecurso']. "<br>";
        $contador++;
        }

        if ($inicio == 0){
            echo "Anteriores";
        } else {
            $anterior = $inicio -2;
            echo "<a href='paginacion.php?posicion=$anterior'>Anteriores</a>";
        }
$siguiente = $inicio +2;
        if ($contador != 2){
            echo "Siguientes";
        } else {
            echo "<a href='paginacion.php?posicion=$siguiente'>Siguientes</a>";
        }
mysqli_close($conexion);
?>
  
</body>
</html>