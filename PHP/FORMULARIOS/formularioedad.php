<?php

$edad = $_REQUEST["edad"];

$email = $_REQUEST["email"];

$edadr = $_REQUEST[$edadr];

if (is_numeric($edad)) {
    print "<p>Su edad es $edad</p>";

else {

    print "No has introducido un numero";

}

}

//FUNSION FILTER

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

print "Email Correcto";

else {

print "Email incorrecto";
}

}

?>