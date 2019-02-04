<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>


<?php

//Ejercicio rand

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$random = array_rand($numeros);

if ( $random < 5 ) {

    //los puntos concatenacion .$variable. es solo para print
    print '<p style="color: red">El valor es menos de' .$numeros. '</p>';
} else {

    print '<p style="color: green">El valor es mayor que $numeros </p>';
}
    ?>



<?php

//Resultado

$aleatorio (1,10)

if ($aleatorio < 5) {

    echo "<p class='rojo'>EL valor $aleatorio es menor que 5</p>";

}  elseif ($aleatorios > 5) {

    echo "<p class='azul'>EL valor $aleatorio es mayor que 5</p>";
} else {

    echo "<p class'verde'>El valor es 5</p>";
}



?>




</body>
</html>