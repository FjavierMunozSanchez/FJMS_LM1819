<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CONSULTA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>

<?php
//La base esta en nuestra maquina si no tendriamos que poenr la IP
//or die cuando hay un error en la conexión o en la colsulta aquí termina el código.
//$conexion: Esto nos va a conectar a la base de datos.
$conexion = mysqli_connect("localhost", "root", "", "cursophp") or die("Problemas de conexion");
//Hacemos las consultas
$registros = mysqli_query($conexion, "SELECT idalumno, nombre, mail, codigocurso FROM alumnos") or die("Problemas en la consulta:".mysqli_error($conexion));

//Con esta linea $reg guarda las filas y va a indicar que ha llegado al final de la tabla registros llegamos a un valor nulo y saldra fuera del while.
while ($reg=mysqli_fetch_array($registros)) {

echo "IDALUMNO: " .$reg['idalumno']. "<br/>";
echo "IDALUMNO: " .$reg['nombre']. "<br/>";

}

//Sierra la coenxión con la base de datos.
mysqli_close($conexion);

?>
    
</body>
</html>