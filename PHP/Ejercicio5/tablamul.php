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

echo "1. Desarrolle un ejercicio que muestre las tablas de multiplicar";

echo "</br>";

$num1=1;
while($num1<=10)
{
echo "<table style='border: 1px solid black; float: left'>";
echo "<tr align=center><td colspan=5>Tabla de multiplicar del ".$num1.":</td></tr>";
$num2=1;
while($num2<=10)
{
$mult=$num1*$num2;
echo "<tr align=center><td>".$num1."</td><td> X </td><td>".$num2."</td><td> = </td><td>".$mult."</td></tr>";
$num2++;
}

$num1++;
}

echo "</table>";

echo "<div style='clear: both'>";

echo "</br>";

echo "2. Mostramos los números de los días del 1 a la fecha actual. Ejemplo: si hoy es 11 debe mostrar los números del 1 al 11.";

$dias= date ("d");
$dia=11;
for ($dias=1; $dias < 11; $dias++) { 
    print "<p>Día " . $dias . " ya ha pasado </p></br>";
}

print "Hoy es " . $dia . " de febrero de 2019";

echo "</div>";

echo "</br>";

echo "3. Dado un vector de números positivos desordenado, recórralo y muestre los 3 números mayores.";

echo "</br>";

echo "<div style='clear: both'>";

echo "Estos son los 3 números más grandes del vector (100, 150, 10, 30, 50, 300, 1000, 85, 99, 45):";

echo "</br>";

$numeros=array(100, 150, 10, 30, 50, 300, 1000, 85, 99, 45);   
$resultado = array(); 
$pos = 0;
$resultado[$pos]=$numeros[$pos];   


for($n=0;$n<count($numeros);$n++) {           

  if($resultado[$pos]>$numeros[$n])      
    $pos++;        

  $resultado[$pos] = $numeros[$n]; 
     
}  

for($n1=0;$n1<3;$n1++) echo $resultado[$n1]."<br>"; 

echo "</div>";

?>


    
</body>
</html>