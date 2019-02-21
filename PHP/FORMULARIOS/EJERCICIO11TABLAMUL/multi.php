<?php

$tabla trim(htmlspecialchars($_REQUEST["opciones"], ENT_QUOTES, "UTF-8"));


if (empty($tabla)){

print "<p>No has introducido ningun numero</p>"

}else if ($tabla => 0 || $tabla =< 100) {

print "<p>El vamor $tabla no es un numero comprendido entre el 0 y 100</p>"

} else {


    $num1=1;
    while($num1<=100)
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


}



?>