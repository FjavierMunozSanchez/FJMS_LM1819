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
    <div style="margin: 0 auto; width: 400px">

<?php

print "<p>Fecha Nacimiento: $_REQUEST[edad]</p>";
print "<p>Fecha Actual:". date('Y-m-d') ."</p>";
//Calcular la diferencia entre nacimiento y fecha actual.
list($year, $month, $day) = explode("-", $_REQUEST['edad']);
$year_diff = date("Y") - $year;
$month_diff = date("m") - $month;
$day_diff = date("d") - $day;

if ($day_diff < 0 && $month_diff < 0){
$year_diff--;
}

session_start();
print "<p>Bienvenido: ". $_COOKIE['usuarioWeb'] ."</p>";
print "<p>Su edad es $year_diff años</p>";

?>


    </div>
</body>
</html>