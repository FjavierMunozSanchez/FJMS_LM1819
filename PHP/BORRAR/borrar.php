<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BORRAR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
$mail = trim(htmlspecialchars($_REQUEST["mail"], ENT_QUOTES, "UTF-8"));

$conexion=mysqli_connect("localhost","root","","cursophp") or
            die("Problemas con la conexión");

$registros=mysqli_query($conexion,"SELECT * FROM alumnos where mail='$mail'") or
die("Problemas en el select:".mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros))
        {
    mysqli_query($conexion, "DELETE FROM alumnos WHERE mail=$mail") or
    die("Problemas en el select:".mysqli_error($conexion));
    print "<h3>Alumno Borrado</h3>";
        } else {
            header("location: inicio.php?error='Email no encontrado'");
        }



mysqli_close($conexion)
?>
    
</body>
</html>