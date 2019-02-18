<?php
//Con esto controlamos si el campo nombre de texto esta lleno.
if ($_REQUEST["nombre"] != ""){
print "<p>Su nombre es $_REQUEST[nombre]</p>";
}

if (isset($_REQUES["opcion"])){
    print "<p>Opción marcada</p>";

}

// para evitar etiquetas html en la cadena del nombre [strip_tags]

$nombre = strip_tags($_REQUEST["nombre"]);

if ( $nombre != ""){
    print "<p>Su nombre es $nombre</p>";
    }

//Evitar los espacios por delante y por detras en los formularios [trim].

$nombre = trim(strip_tags($_REQUEST["nombre"]));

if ( $nombre != ""){
    print "<p>Su nombre es $nombre</p>";
    }

//Evitar los caracteres especiales

$nombre = trim(htmlspecialchars(strip_tags($_REQUEST["nombre"]), ENT_QUOTES, "UTF-8"));

if ( $nombre != ""){
    print "<p>Su nombre es $nombre</p>";
    }

//ACTIVIDAD: forlulario que pida la edad y nos diga si he puesto el numero y si no ha puesto un numero te diga "Error no has introducido un numero" (is numeric)

$edad= trim(strip_tags($_REQUEST["nombre"]));

if (is_numeric($edad)) {
    print "<p>Su edad es $edad</p>";

else {

    print "No has introducido un numero";

}

}

//RESUELTO
$edadr = $_REQUEST[$edadr];

if (is_numeric($edadr)) {
    print "<p>Su edad es $edadr</p>";

else {

    print "No has introducido un numero"

}

}

//FUNSION FILTER

print_r($_REQUEST);
print_r($_FILES);
?>