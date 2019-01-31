<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<!---->
    
<?php

echo "Hola";
echo "<b>Hola</b> a todos";

print "<p>Hola</p>\n";


$saludos = "Holaaa";
echo "<b>$saludos</b>";
echo "<br>Mensaje: <b>" . $saludos . "</b>. Fin Mensaje</br>";

    ?>

    <?= $saludo ?>

<!--Variables de tipo entero-->

    <?php 
    $a = 8;
    $b = 2;
    $c = 2;
    
    
    echo $a + $b; "<br/>";
    $resultado = $a - $b;
    echo "$resultado, <br/>";
    $a++;
    $a = $a + 1;
    $a--;
    $a = $a - 1;




    echo $a == $b, "<br/>";
    echo $a > $b, "<br/>";

    echo ($a == $b) && ($c > $b), "<br/>";

    echo ($b <= $c), "<br/>";



    $perimetro= 2 * 3.14 * 15;
    print $perimetro;
    print 2 * $perimetro;

     ?>


<!--ARRAYS:-->

<?php 
    
    $tablas = ["valor1", "valor2"];

    echo $tablas[0];

    $tabla2 = [["msg1", "msg2"], ["msg3", "msg4"]];
    echo $tabla2[1][1];



    ?>


<!--IF-->
<!--! = negación-->

<?php 
    
    $correcto = true;
// ! = negación
    if (!$correcto == true) {
        print "<p>Es correcto</p>";
    }


    $texto = "Este texto";
    $teto[0] = "e";
    echo $texto;

    $texto[15] = "F";
    echo "$texto<br/>";

//añadir un valor a la tabla [] in dican la posición del dato
    $tabla3 = ["Hola", 2019];
    print $tabla3[0] . "-" . $tabla3[1];
    $tabla3[] = "Fin";
    print $tabla3[2];

//Borrar un valor unset

   // unset($tabla3[2]);
    print $tabla3[2];
    
    
// borra todos los elementos de la tabla

    // unset($tabla3);
    print $tabla3[2];

    "<br/>";

    //echo count($tabla3). "<br/>";


    $numeros = [15, 10, 5, 15, 11, 15];
    echo max($numeros);
    echo min($numeros);


    //sort: ordenar

   // sort($numeros);
    print_r($numeros);

    if ( in_array (15, $numeros)) {
        print "Esta el 15";
    } else {

        print "No esta";
    }

    //Función ARRAY search

    echo array_search(15, $numeros);

//array_keys

    $encontrado = array_keys($numeros, 15);
    print_r($encontrado)."<br/>";

//shuffle

shuffle($numeros);
print_r($numeros);


//Sacar elementos aleatorios de la tabla

//Posision
echo array_rand($numeros);

//Indice de la tabla

echo $numeros[array_rand($numeros)];

//Definir variables constantes (son variables que se escriben en mayusculas y no debe cambiar de valor)

define("PI", 3.14);
print "<p>El valor de PI es". PI . "</p>";

//Lista de constantes
print "<pre>";
print_r(get_defined_constants());
"</pre>";



$maximo = PHP_INT_MAX;
echo $maximo;
    ?>




<?php 
    
//Ejercicio rand

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo array_rand($numeros);

if ( in_array (15, $numeros)) {
    print "Esta el 15";
} else {

    print "No esta";
}
    
    ?>

<?php 
    
    
    ?>

<?php 
    
    
    ?>
</body>
</html>