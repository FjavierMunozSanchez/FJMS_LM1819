<?php

$autor = trim(htmlspecialchars($_REQUEST["autor"], ENT_QUOTES, "UTF-8"));
$titulo = trim(htmlspecialchars($_REQUEST["titulo"], ENT_QUOTES, "UTF-8"));
$categoria = trim(htmlspecialchars($_REQUEST["categoria"], ENT_QUOTES, "UTF-8"));
$fecha = trim(htmlspecialchars($_REQUEST["fecha"], ENT_QUOTES, "UTF-8"));
$noticia = trim(htmlspecialchars($_REQUEST["texto"], ENT_QUOTES, "UTF-8"));



            $conexion = mysqli_connect("localhost", "id9406", "Adminies", "noticias") 
            or die("Problemas con la conexión");

            $registros = mysqli_query($conexion, 
            "INSERT INTO NOTICIAS (autor, titulo, categoria, fecha, texto) 
            VALUES ('$autor', '$titulo', '$categoria', '$fecha', '$noticia') ") 
            or die("Problemas en la consulta:".mysqli_error($conexion));

            //WEBRSSIES
            //rssIES2019
            mysqli_close($conexion);


?>