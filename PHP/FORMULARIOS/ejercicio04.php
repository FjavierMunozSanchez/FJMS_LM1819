<?php

$numero = trim(htmlspecialchars(strip_tags($_REQUEST["numero"]), ENT_QUOTES, "UTF-8"));
$minutos = trim(htmlspecialchars(strip_tags($_REQUEST["minutos"]), ENT_QUOTES, "UTF-8"));
$segundos = trim(htmlspecialchars(strip_tags($_REQUEST["segundos"]), ENT_QUOTES, "UTF-8"))T;

if ($numero != is_numeric($numero)) {

    print "No has introducido un numero";
    
    else if ($numeros < 60)

    print "El numero no es menor a 60"
    
    $numero = $minutos

    $numero = $segundos/60


    }

    else {

print "";

    }


?>