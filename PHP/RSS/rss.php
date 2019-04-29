<?php
header('Content-type: text/xml; charset="iso-8859-1"', true);
echo '<?xml version="1.0 encoding="iso-8859-1"?>';

$conexion = mysqli_connect("localhost", "id9406790_adminies", "Adminies", "id9406790_noticias") 
or die("Problemas con la conexión");

$registros = mysqli_query($conexion, "SELECT * FROM noticias order by fecha desc") 
or die("Problemas en la consulta:".mysqli_error($conexion));


echo "<rss version='2.0'>";
echo "<channel>";
echo "<title>Noticias IES</title>";
echo "<link>http://www.webrssies.000webhostapp.com/formulario/index.html</link>";
echo "<languaje>es</languaje>";
echo "<description>Canal de noticias del IES</description>";

    while ($reg = mysqli_fetch_array($registros)) {

            echo "<item>";
            echo "<title>.$reg[titulo].</title>";
            echo "<link>.$reg[].</link>";
            echo "<pubDate>.$reg[fecha].</PubDate>";
            echo "<category>.$reg[categoria].</category>";
            echo "<description>.$reg[noticia].</description>";
            echo "</item>";
    }
    
    echo "</channel>";
    echo "</rss>";
mysqli_close($conexion);

?>