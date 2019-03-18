<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>08</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">

<!-- Realice el siguiente ejercicio:
1. Muestra una consulta de todos los productos de la tabla productos 
mostrando el nombre completo del proveedor del producto. 

2. Además, muestre un mensaje indicando el precio total de todos los productos y la cantidad de productos 
que tenemos en stock. 

3. Añade un botón para insertar un producto en la base de datos.
Muestra en el formulario todos los proveedores que existen en la tabla de proveedores.-->

<?php
	//MYSQLI_CONNECT: Para conectar a la base de datos mysqli_connect("IP", "Usuario", "Contraseña", "Esquema de la BD")
	//OR DIE: Esto nos va a dar un mensaje de error cuando no se a podido conectar a la BD y termina el Script
        $conexion = mysqli_connect("localhost", "root", "", "bdejemplo") or die("Problemas de conexión");
	//MYSQLI_QUERY: Para hacer consultas sobre la base de datos $conexion
	//mysqli_query(Base de datos, "Consulta")
        $registros = mysqli_query($conexion, "SELECT pro.idProductos, pro.descripcion, pro.cantidad, pro.precio, pro.idProveedor, prov.nombre FROM productos AS pro INNER JOIN proveedores AS prov ON pro.idProveedor = prov.idProveedor") or die("Problemas en la consulta:".mysqli_error($conexion));
        $total = mysqli_query($conexion, "SELECT descripcion AS producto, SUM(cantidad) AS cantidad_total, SUM(precio) AS precio_total FROM productos") or die("Problemas en la consulta:".mysqli_error($conexion));
	//Mostrarlo por pantalla con un While, para que te muestre el valor de la fila 1, 2, 3, etc...
   
   //PRODUCTOS Y NOMBRE PORVEEDOR
    echo "<table class='table table-striped'>";

    echo "<tr>
    <th>Proveedor</th>
    <th>Id de producto</th>
    <th>Descripción</th>
    <th>Cantidad</th>
    <th>Precio</th>
    <th>ID de Proveedor</th>
    
    </tr>";
    
    while ($reg = mysqli_fetch_array($registros)) //añade a reg lo devuelto en la consulta
    
    {
       
        
    echo "<tr>";
    
    echo "<td> " . $reg['nombre']. "</td>" ;
    echo "<td> " . $reg['idProductos']. "</td>" ;
    echo "<td> " . $reg['descripcion']. "</td>" ;
    echo "<td> " . $reg['cantidad']. "</td>" ;
    echo "<td> " . $reg['precio']. "</td>" ;
    echo "<td> " . $reg['idProveedor']. "</td>" ;
    
    
    echo "</tr>";
    }
    echo "</table>";

//TOTAL PRODUCTOS
    echo "<table class='table table-striped'>";
    echo "<tr>
    <th>Poducto</th>
    <th>Cantidad total</th>
    <th>Precio total</th>
    </tr>";
    while ($reg1 = mysqli_fetch_array($total)){

        echo "<tr>";
    
    echo "<td> " . $reg1['producto']. "</td>" ;
    echo "<td> " . $reg1['cantidad_total']. "</td>" ;
    echo "<td> " . $reg1['precio_total']. "</td>" ;
    
    
    echo "</tr>";

    }
    echo "</table>";



	//MYSQLI_CLOSE: Esto Cierra la conexion con la Base de Datos.
        mysqli_close($conexion);
    ?>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>