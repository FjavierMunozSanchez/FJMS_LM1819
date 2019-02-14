<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    
<?php

//Función

function calculaipotenusa($par1, $par2) {
    $hipo = sqrt($par1*$par1 + $par2*$par2);
    return $hipo;
}

function imprimir() {
    print "Hola";
}

$cat1 =12;
$cat2 = 16;
$hipotenusa = calculaipotenusa($cat1, $cat2);
print "<p> El triangulo de $cat1, $cat2 y hipotenusa $hipotenusa</p>";

imprimir();





?>



</body>
</html>