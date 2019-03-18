<?php

$idproducto = trim(htmlspecialchars($_REQUEST["idproduct"], ENT_QUOTES, "UTF-8"));
$descripcion = trim(htmlspecialchars($_REQUEST["descrip"], ENT_QUOTES, "UTF-8"));
$cantidad = trim(htmlspecialchars($_REQUEST["cantidad"], ENT_QUOTES, "UTF-8"));
$precio = trim(htmlspecialchars($_REQUEST["precio"], ENT_QUOTES, "UTF-8"));
$idproveedor = trim(htmlspecialchars($_REQUEST["idprov"], ENT_QUOTES, "UTF-8"));


$conexion = mysqli_connect("localhost", "root", "", "bdejemplo")
or die("Problemas con la conexión");

//tenemos que crear un boton para ir a crear producto nuevo en un formulario nuevo
//
mysqli_query($conexion, 
            "INSERT INTO productos(idProductos, descripcion, cantidad, precio, idProveedor) VALUES ('$idproducto', '$descripcion', '$cantidad', '$precio', '$idproveedor')")
            or die("Problemas en el insert." .mysqli_error($conexion));



mysqli_close($conexion);

print "<h2>Producto dado de Alta</h2>";
?>

</div>