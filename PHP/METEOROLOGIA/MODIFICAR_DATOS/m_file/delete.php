<?php

$id = trim(htmlspecialchars($_REQUEST["ids"], ENT_QUOTES, "UTF-8"));
             //CON1
             $conexion = mysqli_connect("localhost", "root", "", "estacion")
                 or die("Problemas de conexión");

            $id = mysqli_query($conexion,"SELECT to_char(Id) FROM estaciones");
            //$borrar    DELETE FROM dept where id_dept=

            mysqli_query($conexion, "DELETE FROM estaciones WHERE Id = $id")
                 or die("Problemas en el delete".mysqli_error($conexion));


// DELETE FROM `estacion`.`estaciones` WHERE (`Id` = '24');
        
            mysqli_close($conexion);
        //HEADER QUE MANDA UN MENSAJE A inicio.php
            header('location: ..\inicio.php?insertar=ESTACIÓN BORRADA');
            
?>