<?php
//Con esto controlamos si el campo nombre de texto esta lleno.
if ($_REQUEST["nombre"] != ""){
print "<p>Su nombre es $_REQUEST[nombre]</p>";
}

if (isset($_REQUES["opcion"])){
    print "<p>Opción marcada</p>";

}


print_r($_REQUEST);
print_r($_FILES);
?>