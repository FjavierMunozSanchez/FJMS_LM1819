<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>METEOROLOGIA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
<div>

<form>
<label for="fdesde">FECHA DESDE:</label>
    <input type="date" name="fdesde"/>
<br/>
<label for="fhasta">FECHA HASTA:</label>
<input type="date" name="fhasta"/>
<br/>
<label for="tmedida">TOPO MEDIDA:</label>
    <select name="tmeida">
        <!--optgroup: para hacer grupos dentro del desplegable-->
        <option value="C"></option>
        <option value="B"></option>
        <option value="D"></option>
    </select>
<br/>
<label for="vmedida">FECHA DESDE:</label>
    <input type="number" name="vmedida"/>


</form>


</div>



<?php
//$conexion = mysqli_connect("localhost", "root", "", "bdejemplo")
//or die("Problemas con la conexión");

//$registros = mysqli_query($conexion,"SELECT FROM")
//or die ("Problemas en la consulta:" .mysqli_error($conexion));

//aparecerán todas las filas de la bd que cumplan la condicion

Print "<table class='table'>";
Print "<thead class='thead-dark'>";
Print "<tr>";
Print "<th scope='col'>FECHA</th>";
Print "<th scope='col'>TIPO</th>";
Print "<th scope='col'>VALOR</th>";
Print "<th scope='col'>UNIDAD MEDIDA</th>";
Print "<th scope='col'>SERSOR UTILIZADO</th>";
Print "</tr>";
Print "</thead>";
Print "<tr>";

//while ($reg = mysqli_fetch_array($registros)) //añade a reg lo devuelto en la consulta

//{
Print "<td>1</td>";
Print "<td>2</td>";
Print "<td>3</td>";
Print "<td>4</td>";
Print "<td>5</td>";
//echo "<td> " . $reg['nombre']. "</td>";
//echo "<td> " . $reg['idProductos']. "</td>" ;
//echo "<td> " . $reg['descripcion']. "</td>" ;
//echo "<td> " . $reg['cantidad']. "</td>" ;
//echo "<td> " . $reg['precio']. "</td>" ;
//echo "<td> " . $reg['idProveedor']. "</td>" ;



//}

Print "</tr>";
Print "</table>";
//tenemos que crear un boton para ir a crear producto nuevo en un formulario nuevo
//intertar.php

//MYSQLI_CLOSE: Esto Cierra la conexion con la Base de Datos.
//mysqli_close($conexion);

?>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>