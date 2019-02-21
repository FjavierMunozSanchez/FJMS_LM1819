<?php

$pies = trim(htmlspecialchars($_REQUEST["pies"], ENT_QUOTES, "UTF-8"));   
$pulgadas = trim(htmlspecialchars($_REQUEST["pulgadas"], ENT_QUOTES, "UTF-8"));

$piesok = false;

$pulgadasok = false;

//constante

define('unapulgada', 2.54);


//pies
if (empty($pies)) {

print "<p>Campo Pies vacío</p>";


}else if (!filter_var($pies, FILTER_VALIDATE_INT)){
    print "<p>Campo pies no es un jnumero entero</p>";
}else if ($pies < 0) {
    print "<p>Campo pies debe ser >= 0</p>";
} else {

    print "<p>Campo pies debe ser >= 0</p>";
}

//pulgadas
if (empty($pulgadas)) {

    print "<p>Campo pulgadas vacío</p>";
    
    
    }else if (!filter_var($pulgadas, FILTER_VALIDATE_FLOAT)){

        print "<p>Campo pulgadas no es un jnumero entero</p>";

    }else if ($pulgadas < 0) {

        print "<p>Campo pulgadas debe ser >= 0</p>";

    } else {

        print "<p>Campo pulgadas debe ser >= 0</p>";
}

if ($piesok && $pulgadasok) {

    $cm = ($pies * 12 + $pulgadas) * 2.45;
    print "<p>$pies pies y $pulgadas pulgadas</p>";

}
    

?>