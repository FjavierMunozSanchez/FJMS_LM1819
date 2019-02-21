<?php

$tempe = trim(htmlspecialchars($_REQUEST["temperatura"], ENT_QUOTES, "UTF-8"));
$unidad = trim(htmlspecialchars($_REQUEST["opciones"], ENT_QUOTES, "UTF-8"));


if (empty($tempe)) {

print "<p>No has introducido ningun numero</p>";

} else if (!is_numeric($tempe)) {

    print "<p>Temperatura no númerica</p>";

}else if ($unidad == "c" && $tempe < -273.15) {

    Print "<p>Temperatura Celcius Incorrecta</p>";

}else if ($unidad == "f" && $tempe < -459.67) {

    Print "<p>Temperatura Fahrenheit Incorrecta</p>";
}else {

    if ($unidad == "c") {

        $resfar = round(($tempe * 1.8) + 32, 2);
        print "<p>$tempe ºC son $resfar ºF</p>";

    } else {

        $rescel = round(($tempe - 32) / 1.8, 2);
        print "<p>$tempe ºF son $resdel ºC</p>";


    }

}




?>