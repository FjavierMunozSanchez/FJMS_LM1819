<?php
$edad = trim(htmlspecialchars($_REQUEST["edad"], ENT_QUOTES, "UTF-8"));
$email = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));

//---COMPROBAR EL CAMPO EDAD---
//IS_NUMERIC: Esto coumprueba si la variable $edad es un numero.

if (empty($edad) || !is_numeric($edad)) {
	echo "Error en el campo Edad (Esta vacio o no es un numero)";

} else if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "Error en el campo email (Esta vacío o no es un email correcto)";
} else {
	echo "Su edad es $edad <br/>";
	echo "Su email es $email <br/>";
	
}
?>