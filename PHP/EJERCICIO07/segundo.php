<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
$email = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));
$conexion = mysqli_connect("localhost", "root", "", "cursophp") or die("Problemas con la conexión");
$registros = mysqli_query($conexion, "SELECT idAlumno, nombre, mail, codigocurso from alumnos WHERE mail like '$email'") or die("Problemas en el SELECT" .mysqli_error($conexion));
$emailc = mysqli_query($conexion, "SELECT mail from alumnos where mail like '$emailc'") or die("Error en SELECT emailc");
if ($email != $emailc){

print "El email no existe";
}else {
    echo "<table class='table table-striped'>";
    echo "<tr><th>Código</th><th>Nombre</th><th>Email</th><th>Curso</th></tr>";
    while ($reg = mysqli_fetch_array($registros)) {
        echo "<td>" .$reg['idAlumno'] ."<td/>";
        echo "<td>" .$reg['nombre'] ."<td/>";
        echo "<td>" .$reg['mail'] ."<td/>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($conexion);

}


?>
</body>
</html>