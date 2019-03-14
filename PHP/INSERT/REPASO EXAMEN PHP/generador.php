<?php

//Sacar el nombre del curso
//mysqli_connect
$conexion = mysqli_connect("localhost", "root", "", "bdejemplo") or die("Problemas con la conexión");
//HACER LA CONSULTA
//mysqli_query
$registros = mysqli_query($conexion, "SELECT pro.descripcion, pro.precio, prove.nombre FROM productos AS PRO INNER JOIN proveedores AS prove ON 
pro.idProveedor = prove.idProveedor") or die("Problemas en el SELECT" .mysqli_error($conexion));
//$precio = mysqli_query($conexion, "SELECT precio FROM productos");
$precio = 0;

echo "<table style='border: 1px solid black'>";
echo "<tr><th>Descripción</th><th>Precio</th><th>Nombre</th></tr>";

while ($suma = mysqli_fetch_array($registros)) {
$precio=
    echo "<td>" .$reg['descripcion'] ."<td/>";
    echo "<td>" .$reg['precio'] + $precio ."<td/>";
    echo "<td>" .$reg['nombre'] ."<td/>";
    echo "</tr>";
};
echo "</table>";
mysqli_close($conexion);


//ejercicio consulta

//mezcla
//formularios
//cookies
//sesiones
//calculos en consultas
//recueprar datos $request
 calucla dia que naci, hola como te llamas
?>