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

$identificador = trim(htmlspecialchars($_REQUEST["identificador"], ENT_QUOTES, "UTF-8"));
$nombre = trim(htmlspecialchars($_REQUEST["nombre"], ENT_QUOTES, "UTF-8"));
$curso = trim(htmlspecialchars($_REQUEST["curso"], ENT_QUOTES, "UTF-8"));

$conexion=mysqli_connect("localhost","root","","cursophp") or die("Problemas con la conexión");

$registro = mysqli_query($conexion, "UPDATE alumnos SET nombre=$nombre, codicocurso=$curso WHERE idAlumno=$identificador");


?>
    
</body>
</html>