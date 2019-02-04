<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    

<?php

//$contador = 0;
//for ($i=0; $i < 6; $i++) 
//for ($i=0; $i < 6; $i + 2)
//for ($i=6; $i >= 0; $i--)
//for ($i=6; $i >= 0; $i--) { 
    
//    if ($i % 2 == 0) { 
        //$variables es divisible (%) entre 2 y el resto es (==) 0

//        print "</p>$i</p>";
//    } else {
//        $contador++;
 //   }
    
//}
//echo "hay $contador impares entre 6 y 0"
//Para hacer que cuente de 2 en 2 ponemos $variable + 2


//Un bucle que me cree 3 filas (tr) por 4 columnas (td)

//$filas = 3;
//$columnas = 2;
//echo "<table style='border: 2px solid black'>";

//for ($i=0; $i < $filas ; $i++) { 
 //   echo "<tr>";

//for ($i=0; $i < $columnas ; $i++) { 
//    echo "<td style='style='border: 2px solid black'>121</td>";
//}
//echo "</tr>";

//}

//echo "</table>";

//Muestre por pantalla del 1 al 10 la conversion en pesetas
//define, es para fefinir una constante se declara sin $
//$pesetas=166.386;

//define ("pesetas", 166.386);
//for ($i=1; $i <= 10; $i++) { 
 //   print "<p>$i euro = ".$i*pesetas." pesetas</p>";
//}

//Sacar la hora y que diga buenos dias, buenas tardes y buenas noches

//echo "<hr/>"

//$hora = date("H");
//if ($hora >= 8 && $hora <= 12) {
//echo "Buenos dias"
//} else if ($hora > 12 && $hora <= 20) {
//    echo "Buenas tarde"
//} else {
//    echo "Buenas noches"
//}

//genera un valor aleatorio en 1 y 100 e indica cuantos digitos tiene, esto se hace con STRLEN

$aleatorio= rand(1,100);
$digito=strlen($aleatorio);
echo "El número: $aleatorio, Tiene $digito digitos.";

echo "<hr/>";

//Dados tres números indicar si alguno es suma de los otros dos y mostrarlo por pantalla

$numero1=rand(1,30);
$numero2=rand(40,70);
$numero3=rand(100,130);

if ($numero1 == $numero2 + $numero3){

    echo "$numero1 = $numero2 + $numero3"


}else if ($)

    

?>













</body>
</html>